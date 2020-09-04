<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/services/recommendation_service.proto

namespace Google\Ads\GoogleAds\V4\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Information about the operation to apply a recommendation and any parameters
 * to customize it.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.services.ApplyRecommendationOperation</code>
 */
class ApplyRecommendationOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the recommendation to apply.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    protected $apply_parameters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the recommendation to apply.
     *     @type \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\CampaignBudgetParameters $campaign_budget
     *           Optional parameters to use when applying a campaign budget
     *           recommendation.
     *     @type \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\TextAdParameters $text_ad
     *           Optional parameters to use when applying a text ad recommendation.
     *     @type \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\KeywordParameters $keyword
     *           Optional parameters to use when applying keyword recommendation.
     *     @type \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\TargetCpaOptInParameters $target_cpa_opt_in
     *           Optional parameters to use when applying target CPA opt-in
     *           recommendation.
     *     @type \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\CalloutExtensionParameters $callout_extension
     *           Parameters to use when applying callout extension recommendation.
     *     @type \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\CallExtensionParameters $call_extension
     *           Parameters to use when applying call extension recommendation.
     *     @type \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\SitelinkExtensionParameters $sitelink_extension
     *           Parameters to use when applying sitelink extension recommendation.
     *     @type \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\MoveUnusedBudgetParameters $move_unused_budget
     *           Parameters to use when applying move unused budget recommendation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Services\RecommendationService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the recommendation to apply.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the recommendation to apply.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Optional parameters to use when applying a campaign budget
     * recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.ApplyRecommendationOperation.CampaignBudgetParameters campaign_budget = 2;</code>
     * @return \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\CampaignBudgetParameters
     */
    public function getCampaignBudget()
    {
        return $this->readOneof(2);
    }

    /**
     * Optional parameters to use when applying a campaign budget
     * recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.ApplyRecommendationOperation.CampaignBudgetParameters campaign_budget = 2;</code>
     * @param \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\CampaignBudgetParameters $var
     * @return $this
     */
    public function setCampaignBudget($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation_CampaignBudgetParameters::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Optional parameters to use when applying a text ad recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.ApplyRecommendationOperation.TextAdParameters text_ad = 3;</code>
     * @return \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\TextAdParameters
     */
    public function getTextAd()
    {
        return $this->readOneof(3);
    }

    /**
     * Optional parameters to use when applying a text ad recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.ApplyRecommendationOperation.TextAdParameters text_ad = 3;</code>
     * @param \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\TextAdParameters $var
     * @return $this
     */
    public function setTextAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation_TextAdParameters::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Optional parameters to use when applying keyword recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.ApplyRecommendationOperation.KeywordParameters keyword = 4;</code>
     * @return \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\KeywordParameters
     */
    public function getKeyword()
    {
        return $this->readOneof(4);
    }

    /**
     * Optional parameters to use when applying keyword recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.ApplyRecommendationOperation.KeywordParameters keyword = 4;</code>
     * @param \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\KeywordParameters $var
     * @return $this
     */
    public function setKeyword($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation_KeywordParameters::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Optional parameters to use when applying target CPA opt-in
     * recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.ApplyRecommendationOperation.TargetCpaOptInParameters target_cpa_opt_in = 5;</code>
     * @return \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\TargetCpaOptInParameters
     */
    public function getTargetCpaOptIn()
    {
        return $this->readOneof(5);
    }

    /**
     * Optional parameters to use when applying target CPA opt-in
     * recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.ApplyRecommendationOperation.TargetCpaOptInParameters target_cpa_opt_in = 5;</code>
     * @param \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\TargetCpaOptInParameters $var
     * @return $this
     */
    public function setTargetCpaOptIn($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation_TargetCpaOptInParameters::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Parameters to use when applying callout extension recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.ApplyRecommendationOperation.CalloutExtensionParameters callout_extension = 6;</code>
     * @return \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\CalloutExtensionParameters
     */
    public function getCalloutExtension()
    {
        return $this->readOneof(6);
    }

    /**
     * Parameters to use when applying callout extension recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.ApplyRecommendationOperation.CalloutExtensionParameters callout_extension = 6;</code>
     * @param \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\CalloutExtensionParameters $var
     * @return $this
     */
    public function setCalloutExtension($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation_CalloutExtensionParameters::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Parameters to use when applying call extension recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.ApplyRecommendationOperation.CallExtensionParameters call_extension = 7;</code>
     * @return \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\CallExtensionParameters
     */
    public function getCallExtension()
    {
        return $this->readOneof(7);
    }

    /**
     * Parameters to use when applying call extension recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.ApplyRecommendationOperation.CallExtensionParameters call_extension = 7;</code>
     * @param \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\CallExtensionParameters $var
     * @return $this
     */
    public function setCallExtension($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation_CallExtensionParameters::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Parameters to use when applying sitelink extension recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.ApplyRecommendationOperation.SitelinkExtensionParameters sitelink_extension = 8;</code>
     * @return \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\SitelinkExtensionParameters
     */
    public function getSitelinkExtension()
    {
        return $this->readOneof(8);
    }

    /**
     * Parameters to use when applying sitelink extension recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.ApplyRecommendationOperation.SitelinkExtensionParameters sitelink_extension = 8;</code>
     * @param \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\SitelinkExtensionParameters $var
     * @return $this
     */
    public function setSitelinkExtension($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation_SitelinkExtensionParameters::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Parameters to use when applying move unused budget recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.ApplyRecommendationOperation.MoveUnusedBudgetParameters move_unused_budget = 9;</code>
     * @return \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\MoveUnusedBudgetParameters
     */
    public function getMoveUnusedBudget()
    {
        return $this->readOneof(9);
    }

    /**
     * Parameters to use when applying move unused budget recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.services.ApplyRecommendationOperation.MoveUnusedBudgetParameters move_unused_budget = 9;</code>
     * @param \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation\MoveUnusedBudgetParameters $var
     * @return $this
     */
    public function setMoveUnusedBudget($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationOperation_MoveUnusedBudgetParameters::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getApplyParameters()
    {
        return $this->whichOneof("apply_parameters");
    }

}

