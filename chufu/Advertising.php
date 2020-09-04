<?php
/*
 *  Mail : subinpvasu@gmail.com
 *  Skype : subinpvasu 
 *  AdWords API integration
 */
namespace Adwords;
require __DIR__ . '/vendor/autoload.php';

use Google\Ads\GoogleAds\Lib\V4\GoogleAdsClient;
use Google\Ads\GoogleAds\Lib\V4\GoogleAdsClientBuilder;
use Google\Ads\GoogleAds\Lib\V4\GoogleAdsException;
use Google\Ads\GoogleAds\Lib\Configuration;
use Google\Ads\GoogleAds\Lib\OAuth2TokenBuilder;
use Google\Ads\GoogleAds\V4\Errors\GoogleAdsError;
use Google\ApiCore\ApiException;
use GetOpt\GetOpt;
use Google\Ads\GoogleAds\Examples\Utils\ArgumentNames;
use Google\Ads\GoogleAds\Examples\Utils\ArgumentParser;
use Google\Ads\GoogleAds\Util\V4\ResourceNames;
use Google\Ads\GoogleAds\V4\Enums\KeywordPlanNetworkEnum\KeywordPlanNetwork;
use Google\Ads\GoogleAds\V4\Services\GenerateKeywordIdeaResult;
use Google\Ads\GoogleAds\V4\Services\KeywordAndUrlSeed;
use Google\Ads\GoogleAds\V4\Services\KeywordSeed;
use Google\Ads\GoogleAds\V4\Services\UrlSeed;
use Google\Protobuf\StringValue;




class Advertising
{
    protected $config;
    protected $managerSession;
    protected $adwordsServices;
    protected $managerCustomerId;
    public $filePath;
    
    const PAGE_LIMIT = 500;

    public function __construct($config, $managerCustomerId)
    {
        $this->config = $config;
        $this->managerCustomerId = $managerCustomerId;
//        $this->filePath = sprintf('%s.csv',getcwd().'/sample_report'); 
    }

    public function createClient($clientCustomerId)
    {
        $config = new Configuration($this->config);

        $builder = new OAuth2TokenBuilder();
        $oAuth2Credential = $builder
            ->from($config)
            ->build();
//        $rsb = new ReportSettingsBuilder();
//        $rs = $rsb->includeZeroImpressions(true)->build();

        $googleAdsClient = (new GoogleAdsClientBuilder())
            ->withOAuth2Credential($oAuth2Credential)
            ->withDeveloperToken($this->config['OAUTH2']['developerToken'])
            ->withLoginCustomerId($clientCustomerId)
//            ->withReportSettings($rs)  
            ->build();
        return $googleAdsClient;
    }

    
    public function GetAccountDetails(GoogleAdsClient $googleAdsClient)
    {
        $customerServiceClient = $googleAdsClient->getCustomerServiceClient();
        $accounts = array();
        // Issues a request for listing all accessible customers.
        $accessibleCustomers = $customerServiceClient->listAccessibleCustomers();
        print 'Total results: ' . count($accessibleCustomers->getResourceNames()) . PHP_EOL.'<br/>';

        // Iterates over all accessible customers' resource names and prints them.
        foreach ($accessibleCustomers->getResourceNames() as $resourceName) {
            $customerid  = preg_replace( '/[^0-9]/', '', $resourceName );
            $accounts[] = $customerid;
        }
        return $accounts;
    }
    
    public function GetAccountInfo(GoogleAdsClient $googleAdsClient, int $customerId)
    {
        // Issues a getCustomer() request and gets the result.
        $customerServiceClient = $googleAdsClient->getCustomerServiceClient();
        try {
        $customer = $customerServiceClient->getCustomer(ResourceNames::forCustomer($customerId));
       
            echo $customer->getId()->getValue().'<br/>';
            echo $customer->getDescriptiveName()->getValue().'<br/>';
            echo $customer->getManager()->getValue()==1?'Manager Account':''.'<br/>';
        echo '<hr/>';
        } catch (GoogleAdsException $googleAdsException) {
            printf(
                "Request with ID '%s' has failed.%sGoogle Ads failure details:%s",
                $googleAdsException->getRequestId(),
                PHP_EOL,
                PHP_EOL
            );
            
            foreach ($googleAdsException->getGoogleAdsFailure()->getErrors() as $error) {
                /** @var GoogleAdsError $error */
                printf(
                    "\t%s: %s%s",
                    $error->getErrorCode()->getErrorCode(),
                    $error->getMessage(),
                    PHP_EOL
                );
            }
            echo '<hr/>';
//            exit(1);
        } catch (ApiException $apiException) {
            printf(
                "ApiException was thrown with message '%s'.%s",
                $apiException->getMessage(),
                PHP_EOL
            );
            echo '<hr/>';
//            exit(1);
        }
        
        
        
    }
    
  
  public static function AccountDetails(
        AdWordsServices $adWordsServices,
        AdWordsSession $session
    ) {
        $managedCustomerService = $adWordsServices->get(
            $session,
            ManagedCustomerService::class
        );

        // Create selector.
        $selector = new Selector();
        $selector->setFields(['CustomerId', 'Name']);
        $selector->setOrdering([new OrderBy('CustomerId', SortOrder::ASCENDING)]);
        $selector->setPaging(new Paging(0, self::PAGE_LIMIT));

        // Maps from customer IDs to accounts and links.
        $customerIdsToAccounts = [];
        $customerIdsToChildLinks = [];
        $customerIdsToParentLinks = [];

        $totalNumEntries = 0;
        do {
            // Make the get request.
            $page = $managedCustomerService->get($selector);

            // Create links between manager and clients.
            if ($page->getEntries() !== null) {
                $totalNumEntries = $page->getTotalNumEntries();
                if ($page->getLinks() !== null) {
                    foreach ($page->getLinks() as $link) {
                        // Cast the indexes to string to avoid the issue when 32-bit PHP
                        // automatically changes the IDs that are larger than the 32-bit max
                        // integer value to negative numbers.
                        $managerCustomerId = strval($link->getManagerCustomerId());
                        $customerIdsToChildLinks[$managerCustomerId][] = $link;
                        $clientCustomerId = strval($link->getClientCustomerId());
                        $customerIdsToParentLinks[$clientCustomerId] = $link;
                    }
                }
                foreach ($page->getEntries() as $account) {
                    $customerIdsToAccounts[strval($account->getCustomerId())] = $account;
                }
            }

            // Advance the paging index.
            $selector->getPaging()->setStartIndex(
                $selector->getPaging()->getStartIndex() + self::PAGE_LIMIT
            );
        } while ($selector->getPaging()->getStartIndex() < $totalNumEntries);

        // Find the root account.
        $rootAccount = null;
        foreach ($customerIdsToAccounts as $account) {
            if (!array_key_exists(
                $account->getCustomerId(),
                $customerIdsToParentLinks
            )) {
                $rootAccount = $account;
                break;
            }
        }

        if ($rootAccount !== null) {
            // Display results.
            self::printAccountHierarchy(
                $rootAccount,
                $customerIdsToAccounts,
                $customerIdsToChildLinks
            );
        } else {
            printf("No accounts were found.\n");
        }
    }

    /**
     * Prints the specified account's hierarchy using recursion.
     *
     * @param ManagedCustomer $account the account to print
     * @param array $customerIdsToAccounts a map from customer IDs to accounts
     * @param array $customerIdsToChildLinks a map from customer IDs to child
     *     links
     * @param int|null $depth the current depth we are printing from in the
     *     account hierarchy; i.e., how far we've recursed
     */
    private static function printAccountHierarchy(
        $account,
        $customerIdsToAccounts,
        $customerIdsToChildLinks,
        $depth = null
    ) {
        if ($depth === null) {
            print "(Customer ID, Account Name)\n";
            self::printAccountHierarchy(
                $account,
                $customerIdsToAccounts,
                $customerIdsToChildLinks,
                0
            );

            return;
        }

        print str_repeat('-', $depth * 2);
        $customerId = $account->getCustomerId();
        printf("%s, %s\n", $customerId, $account->getName());

        if (array_key_exists($customerId, $customerIdsToChildLinks)) {
            foreach ($customerIdsToChildLinks[strval($customerId)] as $childLink) {
                $childAccount = $customerIdsToAccounts[strval($childLink->getClientCustomerId())];
                self::printAccountHierarchy(
                    $childAccount,
                    $customerIdsToAccounts,
                    $customerIdsToChildLinks,
                    $depth + 1
                );
            }
        }
    }

  
}
