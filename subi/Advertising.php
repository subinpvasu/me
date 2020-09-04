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
use Google\AdsApi\AdWords\v201809\cm\AdRotationMode;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdStatus;
use Google\AdsApi\AdWords\v201809\cm\AdGroupCriterionOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupCriterionService;
use Google\AdsApi\AdWords\v201809\cm\AdGroupOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupService;
use Google\AdsApi\AdWords\v201809\cm\AdGroupStatus;
use Google\AdsApi\AdWords\v201809\cm\AdServingOptimizationStatus;
use Google\AdsApi\AdWords\v201809\cm\AdvertisingChannelType;
use Google\AdsApi\AdWords\v201809\cm\AssetLink;
use Google\AdsApi\AdWords\v201809\cm\AssetOperation;
use Google\AdsApi\AdWords\v201809\cm\AssetService;
use Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion;
use Google\AdsApi\AdWords\v201809\cm\DynamicSettings;
use Google\AdsApi\AdWords\v201809\cm\Platform;
use Google\AdsApi\AdWords\v201809\cm\AgeRange;
use Google\AdsApi\AdWords\v201809\cm\BiddingStrategyConfiguration;
use Google\AdsApi\AdWords\v201809\cm\BiddingStrategyType;
use Google\AdsApi\AdWords\v201809\cm\Budget;
use Google\AdsApi\AdWords\v201809\cm\BudgetBudgetDeliveryMethod;
use Google\AdsApi\AdWords\v201809\cm\BudgetOperation;
use Google\AdsApi\AdWords\v201809\cm\BudgetService;
use Google\AdsApi\AdWords\v201809\cm\Campaign;
use Google\AdsApi\AdWords\v201809\cm\CampaignLabel;
use Google\AdsApi\AdWords\v201809\cm\CampaignLabelOperation;
use Google\AdsApi\AdWords\v201809\cm\CampaignOperation;
use Google\AdsApi\AdWords\v201809\cm\CampaignService;
use Google\AdsApi\AdWords\v201809\cm\CampaignStatus;
use Google\AdsApi\AdWords\v201809\cm\CpcBid;
use Google\AdsApi\AdWords\v201809\cm\CriterionType;
use Google\AdsApi\AdWords\v201809\cm\CriterionTypeGroup;
use Google\AdsApi\AdWords\v201809\cm\CampaignCriterion;
use Google\AdsApi\AdWords\v201809\cm\CampaignCriterionOperation;
use Google\AdsApi\AdWords\v201809\cm\CampaignCriterionService;
use Google\AdsApi\AdWords\v201809\cm\Criterion;
use Google\AdsApi\AdWords\v201809\cm\MultiAssetResponsiveDisplayAd;
use Google\AdsApi\AdWords\v201809\cm\DateRange;
use Google\AdsApi\AdWords\v201809\cm\DateTimeRange;
use Google\AdsApi\AdWords\v201809\cm\Draft;
use Google\AdsApi\AdWords\v201809\cm\DraftOperation;
use Google\AdsApi\AdWords\v201809\cm\DraftService;
use Google\AdsApi\AdWords\v201809\cm\DisplayAdFormatSetting;
use Google\AdsApi\AdWords\v201809\cm\ExpandedTextAd;
use Google\AdsApi\AdWords\v201809\cm\Gender;
use Google\AdsApi\AdWords\v201809\cm\GeoTargetTypeSetting;
use Google\AdsApi\AdWords\v201809\cm\GeoTargetTypeSettingNegativeGeoTargetType;
use Google\AdsApi\AdWords\v201809\cm\GeoTargetTypeSettingPositiveGeoTargetType;
use Google\AdsApi\AdWords\v201809\cm\Image;
use Google\AdsApi\AdWords\v201809\cm\ImageAsset;
use Google\AdsApi\AdWords\v201809\cm\Keyword;
use Google\AdsApi\AdWords\v201809\cm\Label;
use Google\AdsApi\AdWords\v201809\cm\LabelService;
use Google\AdsApi\AdWords\v201809\cm\Location;
use Google\AdsApi\AdWords\v201809\cm\LocationExtensionOperand;
use Google\AdsApi\AdWords\v201809\cm\LocationGroups;
use Google\AdsApi\AdWords\v201809\cm\ManualCpcBiddingScheme;
use Google\AdsApi\AdWords\v201809\cm\MediaMediaType;
use Google\AdsApi\AdWords\v201809\cm\MediaService;
use Google\AdsApi\AdWords\v201809\cm\Money;
use Google\AdsApi\AdWords\v201809\cm\NetworkSetting;
use Google\AdsApi\AdWords\v201809\cm\Operator;
use Google\AdsApi\AdWords\v201809\cm\OrderBy;
use Google\AdsApi\AdWords\v201809\cm\Paging;
use Google\AdsApi\AdWords\v201809\cm\Predicate;
use Google\AdsApi\AdWords\v201809\cm\PredicateOperator;
use Google\AdsApi\AdWords\v201809\cm\ReportDefinitionReportType;
use Google\AdsApi\AdWords\v201809\cm\ResponsiveDisplayAd;
use Google\AdsApi\AdWords\v201809\cm\Selector;
use Google\AdsApi\AdWords\v201809\cm\SortOrder;
use Google\AdsApi\AdWords\v201809\cm\TargetingSetting;
use Google\AdsApi\AdWords\v201809\cm\TargetingSettingDetail;
use Google\AdsApi\AdWords\v201809\cm\TextAsset;
use Google\AdsApi\AdWords\v201809\mcm\ManagedCustomer;
use Google\AdsApi\AdWords\v201809\mcm\ManagedCustomerOperation;
use Google\AdsApi\AdWords\v201809\mcm\ManagedCustomerService;
use Google\AdsApi\AdWords\v201809\mcm\CustomerService;
use Google\AdsApi\Common\Configuration;
use Google\AdsApi\Common\OAuth2TokenBuilder;
use Google\AdsApi\Dfp\v201809\DateRangeType;
use Google\AdsApi\AdWords\Query\v201809\ReportQueryBuilder;
use Google\AdsApi\AdWords\v201809\cm\DataService;

class Advertising
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
        public function GetAccountDetails(AdWordsServices $adWordsServices, AdWordsSession $session,$refresh_token)
  {
      $customerService = $adWordsServices->get($session, CustomerService::class);
      $account = $customerService->getCustomers();
      foreach ($account as $customers)
      {
           $customer[] = array(
          'customerid'=>$customers->getCustomerId(),
          'customername'=>$customers->getDescriptiveName(),
          'manager'=>$customers->getCanManageClients(),
          'test_account'=>$customers->getTestAccount(),
          'refresh_token'=>$refresh_token
      );
      }
      return $customer;
  }
        public function AccountDetails(AdWordsServices $adWordsServices, AdWordsSession $session)
  {
      $customerService = $adWordsServices->get($session, CustomerService::class);
      $account = $customerService->getCustomers();
      foreach ($account as $customers)
      {
           $customer[] = array(
          'customerid'=>$customers->getCustomerId(),
          'customername'=>$customers->getDescriptiveName(),
          'manager'=>$customers->getCanManageClients(),
          'test_account'=>$customers->getTestAccount()
//          'refresh_token'=>$refresh_token
      );
      }
      return $customer;
  }
  
  public function AddCampaign(AdWordsServices $adWordsServices, AdWordsSession $session,$params)
  {      
        $budgetService = $adWordsServices->get($session, BudgetService::class);        
        $budget = new Budget();
        $budget->setName('SocialGuru Budget #' . uniqid());
        $money = new Money();
        $money->setMicroAmount(floatval($params['budget'])*\Credentials::$MULTIPLIER);
        $budget->setAmount($money);
        $budget->setDeliveryMethod(BudgetBudgetDeliveryMethod::STANDARD);

        $operations = [];

        // Create a budget operation.
        $operation = new BudgetOperation();
        $operation->setOperand($budget);
        $operation->setOperator(Operator::ADD);
        $operations[] = $operation;

        // Create the budget on the server.
        $result = $budgetService->mutate($operations);
        $budget = $result->getValue()[0];

        $campaignService = $adWordsServices->get($session, CampaignService::class);

        $operations = [];

        // Create a campaign with required and optional settings.
        $campaign = new Campaign();
        $campaign->setName($params['campaign_name']);
        switch($params['channel'])
        {
            case '1':
                $campaign->setAdvertisingChannelType(AdvertisingChannelType::DISPLAY);
                break;
        }
        

        // Set shared budget (required).
        $campaign->setBudget(new Budget());
        $campaign->getBudget()->setBudgetId($budget->getBudgetId());

        // Set bidding strategy (required).
        $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
        $biddingStrategyConfiguration->setBiddingStrategyType(
            BiddingStrategyType::MANUAL_CPC
        );

        // You can optionally provide a bidding scheme in place of the type.
        $biddingScheme = new ManualCpcBiddingScheme();
        $biddingStrategyConfiguration->setBiddingScheme($biddingScheme);

        $campaign->setBiddingStrategyConfiguration($biddingStrategyConfiguration);

        // Set network targeting (optional).
        $networkSetting = new NetworkSetting();
        $networkSetting->setTargetGoogleSearch(false);
        $networkSetting->setTargetSearchNetwork(false);
        $networkSetting->setTargetContentNetwork(true);
        $campaign->setNetworkSetting($networkSetting);
        
        $campaign->setStatus(CampaignStatus::PAUSED);
        $campaign->setStartDate(date('Ymd', strtotime($params['start_date'])));
        $campaign->setEndDate(date('Ymd', strtotime($params['end_date'])));
        
        
        $geoTargetTypeSetting = new GeoTargetTypeSetting();
        $geoTargetTypeSetting->setPositiveGeoTargetType(
            GeoTargetTypeSettingPositiveGeoTargetType::DONT_CARE
        );
        $geoTargetTypeSetting->setNegativeGeoTargetType(
            GeoTargetTypeSettingNegativeGeoTargetType::DONT_CARE
        );
        $campaign->setSettings([$geoTargetTypeSetting]);

        // Create a campaign operation and add it to the operations list.
        $operation = new CampaignOperation();
        $operation->setOperand($campaign);
        $operation->setOperator(Operator::ADD);
        $operations[] = $operation;
        
        $result = $campaignService->mutate($operations);
        return $result;
  }
  
  public function AddAdgroup(AdWordsServices $adWordsServices, AdWordsSession $session,$params)
  {
      
        $adGroupService = $adWordsServices->get($session, AdGroupService::class);
        $campaignCriterionService = $adWordsServices->get($session, CampaignCriterionService::class);
        if($params['location']>0)
        {
            $mexico = new Location();
            $mexico->setId($params['location']);
            $campaignCriteria = new CampaignCriterion($params['campaign_id'], null, $mexico);
            $operation = new CampaignCriterionOperation();
            $operation->setOperator(Operator::ADD);
            $operation->setOperand($campaignCriteria);
            $operations[] = $operation;
            $campaignCriterionService->mutate($operations);
        }
        if($params['device']>0)
        {
            $deviceTarget = new Platform();
            $deviceTarget->setId($params['device']);
            $campaignCriteria = new CampaignCriterion($params['campaign_id'], null, $deviceTarget);
            $operation = new CampaignCriterionOperation();
            $operation->setOperator(Operator::SET);
            $operation->setOperand($campaignCriteria);
            $operations[] = $operation;
            $campaignCriterionService->mutate($operations);
        }
        
            
        

        $operations = [];

        // Create an ad group with required and optional settings.
        $adGroup = new AdGroup();
        $adGroup->setCampaignId($params['campaign_id']);
        $adGroup->setName($params['adgroup_name']);

        // Set bids (required).
        $bid = new CpcBid();
        $money = new Money();
        $money->setMicroAmount($params['bid']*\Credentials::$MULTIPLIER);
        $bid->setBid($money);
        $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
        $biddingStrategyConfiguration->setBids([$bid]);
        $adGroup->setBiddingStrategyConfiguration($biddingStrategyConfiguration);

        // Set additional settings (optional).
        $adGroup->setStatus(AdGroupStatus::ENABLED);

        // Targeting restriction settings. Depending on the criterionTypeGroup
        // value, most TargetingSettingDetail only affect Display campaigns.
        // However, the USER_INTEREST_AND_LIST value works for RLSA campaigns -
        // Search campaigns targeting using a remarketing list.
        $targetingSetting = new TargetingSetting();
        $details = [];
        // Restricting to serve ads that match your ad group placements.
        // This is equivalent to choosing "Target and bid" in the UI.
        $details[] = new TargetingSettingDetail(CriterionTypeGroup::PLACEMENT, false);
        // Using your ad group verticals only for bidding. This is equivalent
        // to choosing "Bid only" in the UI.
        $details[] = new TargetingSettingDetail(CriterionTypeGroup::VERTICAL, true);
        $targetingSetting->setDetails($details);
        $adGroup->setSettings([$targetingSetting]);

        // Set the rotation mode.
        $rotationMode = new AdGroupAdRotationMode(AdRotationMode::OPTIMIZE);
        $adGroup->setAdGroupAdRotationMode($rotationMode);

        // Create an ad group operation and add it to the operations list.
        $operation = new AdGroupOperation();
        $operation->setOperand($adGroup);
        $operation->setOperator(Operator::ADD);
        $operations[] = $operation;

        $result = $adGroupService->mutate($operations);
        return $result;
  }
  
    public function AddDisplayAds(AdWordsServices $adWordsServices, AdWordsSession $session,$params)
    {       

        $assetService = $adWordsServices->get($session, AssetService::class);
        $adGroupAdService =  $adWordsServices->get($session, AdGroupAdService::class);
        $adGroupCriterionService = $adWordsServices->get($session, AdGroupCriterionService::class);
        $operations = [];
        if($params['gender']>0)
        {
            // Create biddable ad group criterion for gender.
        $genderTarget = new Gender();
        // ID for "male" criterion. The IDs can be found here:
        // https://developers.google.com/adwords/api/docs/appendix/genders
        $genderTarget->setId($params['gender']);
        $genderBiddableAdGroupCriterion = new BiddableAdGroupCriterion();
        $genderBiddableAdGroupCriterion->setAdGroupId($params['adgroup_id']);
        $genderBiddableAdGroupCriterion->setCriterion($genderTarget);
        // Create an ad group criterion operation and add it to the list.
        $genderBiddableAdGroupCriterionOperation = new AdGroupCriterionOperation();
        $genderBiddableAdGroupCriterionOperation->setOperand(
            $genderBiddableAdGroupCriterion
        );
        $genderBiddableAdGroupCriterionOperation->setOperator(Operator::ADD);
        $operations[] = $genderBiddableAdGroupCriterionOperation;
        }
        if($params['age_range']>0)
        {
            $ageRange = new AgeRange();
        // Criterion ID for age 18 to 24. The IDs can be found here:
        // https://developers.google.com/adwords/api/docs/appendix/ages
        $ageRange->setId($params['age_range']);
        $ageRangeAdGroupCriterion = new BiddableAdGroupCriterion();
        $ageRangeAdGroupCriterion->setAdGroupId($params['adgroup_id']);
        $ageRangeAdGroupCriterion->setCriterion($ageRange);
        // Create an ad group criterion operation and add it to the list.
        $ageRangeAdGroupCriterionOperation = new AdGroupCriterionOperation();
        $ageRangeAdGroupCriterionOperation->setOperand($ageRangeAdGroupCriterion);
        $ageRangeAdGroupCriterionOperation->setOperator(Operator::ADD);
        $operations[] = $ageRangeAdGroupCriterionOperation;
        }
        
        // Create negative ad group criterion for age range.
        
        // Create the ad group criteria on the server and print out some information
        // for each created ad group criterion.
        $adGroupCriterionService->mutate($operations);

        // Create a multi-asset responsive display ad.
        $multiAssetResponsiveDisplayAd = new MultiAssetResponsiveDisplayAd();
        $headlineTextAsset1 = new TextAsset();
        $headlineTextAsset1->setAssetText($params['short_headline']);
        $headlineTextAsset2 = new TextAsset();
        $headlineTextAsset2->setAssetText($params['long_headline']);
        $headlineTextAsset3 = new TextAsset();
        $headlineTextAsset3->setAssetText($params['description']);
        // Text assets can be specified directly in the asset field when
        // creating the ad.
        $multiAssetResponsiveDisplayAd->setHeadlines([
            new AssetLink($headlineTextAsset1),
            new AssetLink($headlineTextAsset2),
            new AssetLink($headlineTextAsset3)
        ]);

        // Set business name and long headline.
        $multiAssetResponsiveDisplayAd->setBusinessName(
            $params['business_name']
        );
        $longHeadlineTextAsset = new TextAsset();
        $longHeadlineTextAsset->setAssetText(
            $params['long_headline']
        );
        $multiAssetResponsiveDisplayAd->setLongHeadline(
            new AssetLink($longHeadlineTextAsset)
        );

        // Set description.
        $descriptionTextAsset1 = new TextAsset();
        $descriptionTextAsset1->setAssetText(
            $params['action_text']
        );
        $descriptionTextAsset2 = new TextAsset();
        $descriptionTextAsset2->setAssetText($params['description']);
        $multiAssetResponsiveDisplayAd->setDescriptions([
            new AssetLink($descriptionTextAsset1),
            new AssetLink($descriptionTextAsset2)
        ]);

        // Set a marketing image.
        $marketingImageAsset = new ImageAsset();
        // This ad format does not allow the creation of an image asset by
        // setting the Asset.imageData field. An image asset must first be
        // created using the AssetService, and Asset.assetId must be populated
        // when creating the ad.
        $marketingImageAsset->setAssetId(
                $this->uploadImageAsset($assetService, $params['marketing_image'])
        );
        $multiAssetResponsiveDisplayAd->setMarketingImages([
            new AssetLink(
                $marketingImageAsset
            )
        ]);

        // Set a square image.
        $squareImageAsset = new ImageAsset();
        $squareImageAsset->setAssetId(
                $this->uploadImageAsset($assetService, $params['square_image'])
        );
        $multiAssetResponsiveDisplayAd->setSquareMarketingImages([
            new AssetLink(
                $squareImageAsset
            )
        ]);

        $multiAssetResponsiveDisplayAd->setFinalUrls(
            [$params['final_url']]
        );

        // Optional: Set call to action text.
        $multiAssetResponsiveDisplayAd->setCallToActionText($params['action_text']);

        // Optional: Set color settings using hexadecimal values.
        // Set allowFlexibleColor to false if you want your ads to render by
        // always using your colors strictly.
        $multiAssetResponsiveDisplayAd->setMainColor('#0000ff');
        $multiAssetResponsiveDisplayAd->setAccentColor('#ffff00');
        $multiAssetResponsiveDisplayAd->setAllowFlexibleColor(false);

        // Optional: Set the format setting that the ad will be served in.
        $multiAssetResponsiveDisplayAd->setFormatSetting(
            DisplayAdFormatSetting::NON_NATIVE
        );

        // Optional: Set dynamic display ad settings, composed of landscape logo
        // image, promotion text, and price prefix.
        $multiAssetResponsiveDisplayAd->setDynamicSettingsPricePrefix(
            'as low as'
        );
        $multiAssetResponsiveDisplayAd->setDynamicSettingsPromoText(
            'Free shipping!'
        );

        // Set a logo image.
        $logoImageAsset = new ImageAsset();
        $logoImageAsset->setAssetId(
                $this->uploadImageAsset($assetService, $params['logo_image'])
        );
        $multiAssetResponsiveDisplayAd->setLogoImages([
            new AssetLink(
                $logoImageAsset
            )
        ]);

        // Create ad group ad.
        $adGroupAd = new AdGroupAd();
        $adGroupAd->setAdGroupId($params['adgroup_id']);
        $adGroupAd->setAd($multiAssetResponsiveDisplayAd);

        // Create ad group ad operation and add it to the list.
        $operation = new AdGroupAdOperation();
        $operation->setOperand($adGroupAd);
        $operation->setOperator(Operator::ADD);

        // Add a multi-asset responsive display ad on the server.
        $result = $adGroupAdService->mutate([$operation]);

        // Print out some information for each created ad.
        return $result;
    }
    
    public function uploadImageAsset(AssetService $assetService, $url)
    {
        // Creates an image asset and upload it to the server.
        $imageAsset = new ImageAsset();
        // Optional: Provide a unique friendly name to identify your asset. If
        // you specify the assetName field, then both the asset name and the
        // image being uploaded should be unique, and should not match another
        // ACTIVE asset in this customer account.
        // $imageAsset->setAssetName('Image asset #' . uniqid());
        $imageAsset->setImageData(file_get_contents($url));

        // Create an asset operation.
        $operation = new AssetOperation();
        $operation->setOperand($imageAsset);
        $operation->setOperator(Operator::ADD);

        return $assetService->mutate([$operation])->getValue()[0]->getAssetId();
    }
    
}
