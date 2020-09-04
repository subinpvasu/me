<?php
/* 
 *  Mail : subinpvasu@gmail.com
 *  Skype : subinpvasu 
 *  Author : SUBIN P VASU, Freelance Google AdWords API Developer - PHP
 *  Created On : 18 Feb, 2020 
 */

namespace adwords;
require_once './Credentials.php';
require_once './vendor/autoload.php';
use Google\AdsApi\AdWords\AdWordsServices;

use Google\AdsApi\AdWords\AdWordsSession;

use Google\AdsApi\AdWords\AdWordsSessionBuilder;

use Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilder;
use Google\AdsApi\AdWords\Reporting\v201809\DownloadFormat;
use Google\AdsApi\AdWords\Reporting\v201809\ReportDefinition;
use Google\AdsApi\AdWords\Reporting\v201809\ReportDefinitionDateRangeType;
use Google\AdsApi\AdWords\Reporting\v201809\ReportDownloader;
use Google\AdsApi\AdWords\ReportSettings;
use Google\AdsApi\AdWords\ReportSettingsBuilder;
use Google\AdsApi\AdWords\v201809\cm\AdGroup;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdRotationMode;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdStatus;
use Google\AdsApi\AdWords\v201809\cm\AdGroupCriterionOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupCriterionService;
use Google\AdsApi\AdWords\v201809\cm\AdGroupOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupService;
use Google\AdsApi\AdWords\v201809\cm\AdGroupStatus;
use Google\AdsApi\AdWords\v201809\cm\AdRotationMode;
use Google\AdsApi\AdWords\v201809\cm\AdServingOptimizationStatus;
use Google\AdsApi\AdWords\v201809\cm\AdvertisingChannelType;
use Google\AdsApi\AdWords\v201809\cm\AssetLink;
use Google\AdsApi\AdWords\v201809\cm\AssetOperation;
use Google\AdsApi\AdWords\v201809\cm\AssetService;
use Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion;
use Google\AdsApi\AdWords\v201809\cm\BiddingStrategyConfiguration;
use Google\AdsApi\AdWords\v201809\cm\BiddingStrategyType;
use Google\AdsApi\AdWords\v201809\cm\Budget;
use Google\AdsApi\AdWords\v201809\cm\BudgetBudgetDeliveryMethod;
use Google\AdsApi\AdWords\v201809\cm\BudgetOperation;
use Google\AdsApi\AdWords\v201809\cm\BudgetService;
use Google\AdsApi\AdWords\v201809\cm\Campaign;
use Google\AdsApi\AdWords\v201809\cm\CampaignCriterion;
use Google\AdsApi\AdWords\v201809\cm\CampaignCriterionOperation;
use Google\AdsApi\AdWords\v201809\cm\CampaignCriterionService;
use Google\AdsApi\AdWords\v201809\cm\CampaignLabel;
use Google\AdsApi\AdWords\v201809\cm\CampaignLabelOperation;
use Google\AdsApi\AdWords\v201809\cm\CampaignOperation;
use Google\AdsApi\AdWords\v201809\cm\CampaignService;
use Google\AdsApi\AdWords\v201809\cm\CampaignStatus;
use Google\AdsApi\AdWords\v201809\cm\CpcBid;
use Google\AdsApi\AdWords\v201809\cm\Criterion;
use Google\AdsApi\AdWords\v201809\cm\CriterionType;
use Google\AdsApi\AdWords\v201809\cm\CriterionTypeGroup;
use Google\AdsApi\AdWords\v201809\cm\DataService;
use Google\AdsApi\AdWords\v201809\cm\DateRange;
use Google\AdsApi\AdWords\v201809\cm\DateTimeRange;
use Google\AdsApi\AdWords\v201809\cm\DisplayAdFormatSetting;
use Google\AdsApi\AdWords\v201809\cm\Draft;
use Google\AdsApi\AdWords\v201809\cm\DraftOperation;
use Google\AdsApi\AdWords\v201809\cm\DraftService;
use Google\AdsApi\AdWords\v201809\cm\DynamicSettings;
use Google\AdsApi\AdWords\v201809\cm\ExpandedTextAd;
use Google\AdsApi\AdWords\v201809\cm\GeoTargetTypeSetting;
use Google\AdsApi\AdWords\v201809\cm\GeoTargetTypeSettingNegativeGeoTargetType;
use Google\AdsApi\AdWords\v201809\cm\GeoTargetTypeSettingPositiveGeoTargetType;
use Google\AdsApi\AdWords\v201809\cm\Image;
use Google\AdsApi\AdWords\v201809\cm\ImageAsset;
use Google\AdsApi\AdWords\v201809\cm\Keyword;
use Google\AdsApi\AdWords\v201809\cm\Label;
use Google\AdsApi\AdWords\v201809\cm\LabelService;
use Google\AdsApi\AdWords\v201809\cm\Language;

use Google\AdsApi\AdWords\v201809\cm\Location;
use Google\AdsApi\AdWords\v201809\cm\LocationExtensionOperand;
use Google\AdsApi\AdWords\v201809\cm\LocationGroups;
use Google\AdsApi\AdWords\v201809\cm\ManualCpcBiddingScheme;
use Google\AdsApi\AdWords\v201809\cm\MediaMediaType;
use Google\AdsApi\AdWords\v201809\cm\MediaService;
use Google\AdsApi\AdWords\v201809\cm\Money;
use Google\AdsApi\AdWords\v201809\cm\MultiAssetResponsiveDisplayAd;
use Google\AdsApi\AdWords\v201809\cm\NetworkSetting;

use Google\AdsApi\AdWords\v201809\cm\Operator;
use Google\AdsApi\AdWords\v201809\cm\OrderBy;
use Google\AdsApi\AdWords\v201809\cm\Paging;

use Google\AdsApi\AdWords\v201809\cm\Platform;
use Google\AdsApi\AdWords\v201809\cm\Predicate;
use Google\AdsApi\AdWords\v201809\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201809\cm\ReportDefinitionReportType;
use Google\AdsApi\AdWords\v201809\cm\ResponsiveDisplayAd;
use Google\AdsApi\AdWords\v201809\cm\Selector;
use Google\AdsApi\AdWords\v201809\cm\SortOrder;
use Google\AdsApi\AdWords\v201809\cm\TargetingSetting;
use Google\AdsApi\AdWords\v201809\cm\TargetingSettingDetail;
use Google\AdsApi\AdWords\v201809\cm\TextAsset;
use Google\AdsApi\AdWords\v201809\mcm\CustomerService;
use Google\AdsApi\AdWords\v201809\mcm\ManagedCustomer;
use Google\AdsApi\AdWords\v201809\mcm\ManagedCustomerOperation;
use Google\AdsApi\AdWords\v201809\mcm\ManagedCustomerService;
use Google\AdsApi\AdWords\v201809\o\AttributeType;
use Google\AdsApi\AdWords\v201809\o\IdeaType;
use Google\AdsApi\AdWords\v201809\o\LanguageSearchParameter;
use Google\AdsApi\AdWords\v201809\o\LocationSearchParameter;
use Google\AdsApi\AdWords\v201809\o\NetworkSearchParameter;
use Google\AdsApi\AdWords\v201809\o\RelatedToQuerySearchParameter;
use Google\AdsApi\AdWords\v201809\o\RequestType;
use Google\AdsApi\AdWords\v201809\o\SeedAdGroupIdSearchParameter;
use Google\AdsApi\AdWords\v201809\o\TargetingIdeaSelector;
use Google\AdsApi\AdWords\v201809\o\TargetingIdeaService;
use Google\AdsApi\Common\Configuration;

use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Common\Util\MapEntries;
use Google\AdsApi\Dfp\v201809\DateRangeType;


class Adwords
{
    protected $config;
    protected $managerSession;
    protected $adwordsServices;
    protected $managerCustomerId;
    public $filePath;
    
    const PAGE_LIMIT = 500;

    public function __construct()
    {
        $config = [
            'OAUTH2' => [
                'developerToken' => \Credentials::$DEVELOPER_TOKEN,
                'clientId' => \Credentials::$CLIENT_ID,
                'clientSecret' => \Credentials::$CLIENT_SECRET,
                'refreshToken' => \Credentials::$REFRESH_TOKEN,
            ]
        ];
        $this->config = $config;
        $this->managerCustomerId = \Credentials::$MASTER_ID;
        $this->filePath = sprintf('%s.csv','adwords_report'); 
    }
    
    public function createSession($clientCustomerId)
    {
        $config = new Configuration($this->config);
        $builder = new OAuth2TokenBuilder();
        $oAuth2Credential = $builder
            ->from($config)
            ->build();
        $rsb = new ReportSettingsBuilder();
        $rs = $rsb->includeZeroImpressions(true)->build();

        return (new AdWordsSessionBuilder())
            ->from($config)
            ->withOAuth2Credential($oAuth2Credential)
            ->withClientCustomerId($clientCustomerId)
            ->withDeveloperToken($this->config['OAUTH2']['developerToken'])
            ->withReportSettings($rs)
            ->build();
    }
     public function getAdwordsServices()
    {
        if (!$this->adwordsServices) {
            $this->adwordsServices = new AdWordsServices();
        }
        return $this->adwordsServices;
    }
        
    public function getKeywordPlanner(AdWordsServices $adWordsServices, AdWordsSession $session, $params)
    {
        $targetingIdeaService = $adWordsServices->get($session, TargetingIdeaService::class);

        // Create selector.
        $selector = new TargetingIdeaSelector();
        $selector->setRequestType(RequestType::IDEAS);
        $selector->setIdeaType(IdeaType::KEYWORD);
        $selector->setRequestedAttributeTypes(
            [
                AttributeType::KEYWORD_TEXT,
                AttributeType::SEARCH_VOLUME,
                AttributeType::AVERAGE_CPC,
                AttributeType::COMPETITION,
                AttributeType::CATEGORY_PRODUCTS_AND_SERVICES
            ]
        );

        $paging = new Paging();
        $paging->setStartIndex(0);
        $paging->setNumberResults(10);
        $selector->setPaging($paging);

        $searchParameters = [];
        // Create related to query search parameter.
        $relatedToQuerySearchParameter = new RelatedToQuerySearchParameter();
        $relatedToQuerySearchParameter->setQueries(
            [
                $params['keyword']
            ]
        );
        $searchParameters[] = $relatedToQuerySearchParameter;
        
        
        $locationParameter = new LocationSearchParameter();
        $location = new Location();
        $location->setId($params['location']);
        $locationParameter->setLocations([$location]);
        $searchParameters[] = $locationParameter;

        // Create language search parameter (optional).
        // The ID can be found in the documentation:
        // https://developers.google.com/adwords/api/docs/appendix/languagecodes
        $languageParameter = new LanguageSearchParameter();
        $english = new Language();
        $english->setId(1000);
        $languageParameter->setLanguages([$english]);
        $searchParameters[] = $languageParameter;

        // Create network search parameter (optional).
        $networkSetting = new NetworkSetting();
        $networkSetting->setTargetGoogleSearch(true);
        $networkSetting->setTargetSearchNetwork(false);
        $networkSetting->setTargetContentNetwork(false);
        $networkSetting->setTargetPartnerSearchNetwork(false);

        $networkSearchParameter = new NetworkSearchParameter();
        $networkSearchParameter->setNetworkSetting($networkSetting);
        $searchParameters[] = $networkSearchParameter;

        // Optional: Use an existing ad group to generate ideas.
        if (!empty($adGroupId)) {
            $seedAdGroupIdSearchParameter = new SeedAdGroupIdSearchParameter();
            $seedAdGroupIdSearchParameter->setAdGroupId($adGroupId);
            $searchParameters[] = $seedAdGroupIdSearchParameter;
        }
        $selector->setSearchParameters($searchParameters);
        $selector->setPaging(new Paging(0, self::PAGE_LIMIT));

        // Get keyword ideas.
        $page = $targetingIdeaService->get($selector);

        // Print out some information for each targeting idea.
        $entries = $page->getEntries();
        $planning = [];
        
        if ($entries !== null) {
            foreach ($entries as $targetingIdea) {
                $data = MapEntries::toAssociativeArray($targetingIdea->getData());
                $keyword = $data[AttributeType::KEYWORD_TEXT]->getValue();
                $searchVolume = ($data[AttributeType::SEARCH_VOLUME]->getValue() !== null)
                    ? $data[AttributeType::SEARCH_VOLUME]->getValue() : 0;
                $averageCpc = $data[AttributeType::AVERAGE_CPC]->getValue();
                $competition = $data[AttributeType::COMPETITION]->getValue();
                $categoryIds = ($data[AttributeType::CATEGORY_PRODUCTS_AND_SERVICES]->getValue() === null)
                    ? $categoryIds = ''
                    : implode(
                        ', ',
                        $data[AttributeType::CATEGORY_PRODUCTS_AND_SERVICES]->getValue()
                    );               
                $planning[] = array('text' =>$keyword, 'volume' => $searchVolume, 'cpc' => ($averageCpc === null) ? 0 : $averageCpc->getMicroAmount(), 'competition' => $competition, 'category' =>$categoryIds);
            }
        }
        
        return $planning;        
    }
}
