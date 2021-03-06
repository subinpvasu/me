<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.Recommendation</code>
 */
class Recommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the recommendation.
     * `customers/{customer_id}/recommendations/{recommendation_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The type of recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.RecommendationTypeEnum.RecommendationType type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type = 0;
    /**
     * Output only. The impact on account performance as a result of applying the
     * recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.RecommendationImpact impact = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $impact = null;
    /**
     * Output only. The budget targeted by this recommendation. This will be set only when
     * the recommendation affects a single campaign budget.
     * This field will be set for the following recommendation types:
     * CAMPAIGN_BUDGET, MOVE_UNUSED_BUDGET
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_budget = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $campaign_budget = null;
    /**
     * Output only. The campaign targeted by this recommendation. This will be set only when
     * the recommendation affects a single campaign.
     * This field will be set for the following recommendation types:
     * CALL_EXTENSION, CALLOUT_EXTENSION, ENHANCED_CPC_OPT_IN, KEYWORD,
     * KEYWORD_MATCH_TYPE, MAXIMIZE_CLICKS_OPT_IN, MAXIMIZE_CONVERSIONS_OPT_IN,
     * OPTIMIZE_AD_ROTATION, SEARCH_PARTNERS_OPT_IN, SITELINK_EXTENSION,
     * TARGET_CPA_OPT_IN, TEXT_AD
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $campaign = null;
    /**
     * Output only. The ad group targeted by this recommendation. This will be set only when
     * the recommendation affects a single ad group.
     * This field will be set for the following recommendation types:
     * KEYWORD, OPTIMIZE_AD_ROTATION, TEXT_AD
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 7 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $ad_group = null;
    /**
     * Output only. Whether the recommendation is dismissed or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue dismissed = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $dismissed = null;
    protected $recommendation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the recommendation.
     *           `customers/{customer_id}/recommendations/{recommendation_id}`
     *     @type int $type
     *           Output only. The type of recommendation.
     *     @type \Google\Ads\GoogleAds\V2\Resources\Recommendation\RecommendationImpact $impact
     *           Output only. The impact on account performance as a result of applying the
     *           recommendation.
     *     @type \Google\Protobuf\StringValue $campaign_budget
     *           Output only. The budget targeted by this recommendation. This will be set only when
     *           the recommendation affects a single campaign budget.
     *           This field will be set for the following recommendation types:
     *           CAMPAIGN_BUDGET, MOVE_UNUSED_BUDGET
     *     @type \Google\Protobuf\StringValue $campaign
     *           Output only. The campaign targeted by this recommendation. This will be set only when
     *           the recommendation affects a single campaign.
     *           This field will be set for the following recommendation types:
     *           CALL_EXTENSION, CALLOUT_EXTENSION, ENHANCED_CPC_OPT_IN, KEYWORD,
     *           KEYWORD_MATCH_TYPE, MAXIMIZE_CLICKS_OPT_IN, MAXIMIZE_CONVERSIONS_OPT_IN,
     *           OPTIMIZE_AD_ROTATION, SEARCH_PARTNERS_OPT_IN, SITELINK_EXTENSION,
     *           TARGET_CPA_OPT_IN, TEXT_AD
     *     @type \Google\Protobuf\StringValue $ad_group
     *           Output only. The ad group targeted by this recommendation. This will be set only when
     *           the recommendation affects a single ad group.
     *           This field will be set for the following recommendation types:
     *           KEYWORD, OPTIMIZE_AD_ROTATION, TEXT_AD
     *     @type \Google\Protobuf\BoolValue $dismissed
     *           Output only. Whether the recommendation is dismissed or not.
     *     @type \Google\Ads\GoogleAds\V2\Resources\Recommendation\CampaignBudgetRecommendation $campaign_budget_recommendation
     *           Output only. The campaign budget recommendation.
     *     @type \Google\Ads\GoogleAds\V2\Resources\Recommendation\KeywordRecommendation $keyword_recommendation
     *           Output only. The keyword recommendation.
     *     @type \Google\Ads\GoogleAds\V2\Resources\Recommendation\TextAdRecommendation $text_ad_recommendation
     *           Output only. Add expanded text ad recommendation.
     *     @type \Google\Ads\GoogleAds\V2\Resources\Recommendation\TargetCpaOptInRecommendation $target_cpa_opt_in_recommendation
     *           Output only. The TargetCPA opt-in recommendation.
     *     @type \Google\Ads\GoogleAds\V2\Resources\Recommendation\MaximizeConversionsOptInRecommendation $maximize_conversions_opt_in_recommendation
     *           Output only. The MaximizeConversions Opt-In recommendation.
     *     @type \Google\Ads\GoogleAds\V2\Resources\Recommendation\EnhancedCpcOptInRecommendation $enhanced_cpc_opt_in_recommendation
     *           Output only. The Enhanced Cost-Per-Click Opt-In recommendation.
     *     @type \Google\Ads\GoogleAds\V2\Resources\Recommendation\SearchPartnersOptInRecommendation $search_partners_opt_in_recommendation
     *           Output only. The Search Partners Opt-In recommendation.
     *     @type \Google\Ads\GoogleAds\V2\Resources\Recommendation\MaximizeClicksOptInRecommendation $maximize_clicks_opt_in_recommendation
     *           Output only. The MaximizeClicks Opt-In recommendation.
     *     @type \Google\Ads\GoogleAds\V2\Resources\Recommendation\OptimizeAdRotationRecommendation $optimize_ad_rotation_recommendation
     *           Output only. The Optimize Ad Rotation recommendation.
     *     @type \Google\Ads\GoogleAds\V2\Resources\Recommendation\CalloutExtensionRecommendation $callout_extension_recommendation
     *           Output only. The Callout extension recommendation.
     *     @type \Google\Ads\GoogleAds\V2\Resources\Recommendation\SitelinkExtensionRecommendation $sitelink_extension_recommendation
     *           Output only. The Sitelink extension recommendation.
     *     @type \Google\Ads\GoogleAds\V2\Resources\Recommendation\CallExtensionRecommendation $call_extension_recommendation
     *           Output only. The Call extension recommendation.
     *     @type \Google\Ads\GoogleAds\V2\Resources\Recommendation\KeywordMatchTypeRecommendation $keyword_match_type_recommendation
     *           Output only. The keyword match type recommendation.
     *     @type \Google\Ads\GoogleAds\V2\Resources\Recommendation\MoveUnusedBudgetRecommendation $move_unused_budget_recommendation
     *           Output only. The move unused budget recommendation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the recommendation.
     * `customers/{customer_id}/recommendations/{recommendation_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the recommendation.
     * `customers/{customer_id}/recommendations/{recommendation_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
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
     * Output only. The type of recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.RecommendationTypeEnum.RecommendationType type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. The type of recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.RecommendationTypeEnum.RecommendationType type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\RecommendationTypeEnum_RecommendationType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Output only. The impact on account performance as a result of applying the
     * recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.RecommendationImpact impact = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\Recommendation\RecommendationImpact
     */
    public function getImpact()
    {
        return $this->impact;
    }

    /**
     * Output only. The impact on account performance as a result of applying the
     * recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.RecommendationImpact impact = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\Recommendation\RecommendationImpact $var
     * @return $this
     */
    public function setImpact($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\Recommendation_RecommendationImpact::class);
        $this->impact = $var;

        return $this;
    }

    /**
     * Output only. The budget targeted by this recommendation. This will be set only when
     * the recommendation affects a single campaign budget.
     * This field will be set for the following recommendation types:
     * CAMPAIGN_BUDGET, MOVE_UNUSED_BUDGET
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_budget = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCampaignBudget()
    {
        return $this->campaign_budget;
    }

    /**
     * Returns the unboxed value from <code>getCampaignBudget()</code>

     * Output only. The budget targeted by this recommendation. This will be set only when
     * the recommendation affects a single campaign budget.
     * This field will be set for the following recommendation types:
     * CAMPAIGN_BUDGET, MOVE_UNUSED_BUDGET
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_budget = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getCampaignBudgetUnwrapped()
    {
        return $this->readWrapperValue("campaign_budget");
    }

    /**
     * Output only. The budget targeted by this recommendation. This will be set only when
     * the recommendation affects a single campaign budget.
     * This field will be set for the following recommendation types:
     * CAMPAIGN_BUDGET, MOVE_UNUSED_BUDGET
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_budget = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCampaignBudget($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->campaign_budget = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The budget targeted by this recommendation. This will be set only when
     * the recommendation affects a single campaign budget.
     * This field will be set for the following recommendation types:
     * CAMPAIGN_BUDGET, MOVE_UNUSED_BUDGET
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign_budget = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setCampaignBudgetUnwrapped($var)
    {
        $this->writeWrapperValue("campaign_budget", $var);
        return $this;}

    /**
     * Output only. The campaign targeted by this recommendation. This will be set only when
     * the recommendation affects a single campaign.
     * This field will be set for the following recommendation types:
     * CALL_EXTENSION, CALLOUT_EXTENSION, ENHANCED_CPC_OPT_IN, KEYWORD,
     * KEYWORD_MATCH_TYPE, MAXIMIZE_CLICKS_OPT_IN, MAXIMIZE_CONVERSIONS_OPT_IN,
     * OPTIMIZE_AD_ROTATION, SEARCH_PARTNERS_OPT_IN, SITELINK_EXTENSION,
     * TARGET_CPA_OPT_IN, TEXT_AD
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Returns the unboxed value from <code>getCampaign()</code>

     * Output only. The campaign targeted by this recommendation. This will be set only when
     * the recommendation affects a single campaign.
     * This field will be set for the following recommendation types:
     * CALL_EXTENSION, CALLOUT_EXTENSION, ENHANCED_CPC_OPT_IN, KEYWORD,
     * KEYWORD_MATCH_TYPE, MAXIMIZE_CLICKS_OPT_IN, MAXIMIZE_CONVERSIONS_OPT_IN,
     * OPTIMIZE_AD_ROTATION, SEARCH_PARTNERS_OPT_IN, SITELINK_EXTENSION,
     * TARGET_CPA_OPT_IN, TEXT_AD
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getCampaignUnwrapped()
    {
        return $this->readWrapperValue("campaign");
    }

    /**
     * Output only. The campaign targeted by this recommendation. This will be set only when
     * the recommendation affects a single campaign.
     * This field will be set for the following recommendation types:
     * CALL_EXTENSION, CALLOUT_EXTENSION, ENHANCED_CPC_OPT_IN, KEYWORD,
     * KEYWORD_MATCH_TYPE, MAXIMIZE_CLICKS_OPT_IN, MAXIMIZE_CONVERSIONS_OPT_IN,
     * OPTIMIZE_AD_ROTATION, SEARCH_PARTNERS_OPT_IN, SITELINK_EXTENSION,
     * TARGET_CPA_OPT_IN, TEXT_AD
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->campaign = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The campaign targeted by this recommendation. This will be set only when
     * the recommendation affects a single campaign.
     * This field will be set for the following recommendation types:
     * CALL_EXTENSION, CALLOUT_EXTENSION, ENHANCED_CPC_OPT_IN, KEYWORD,
     * KEYWORD_MATCH_TYPE, MAXIMIZE_CLICKS_OPT_IN, MAXIMIZE_CONVERSIONS_OPT_IN,
     * OPTIMIZE_AD_ROTATION, SEARCH_PARTNERS_OPT_IN, SITELINK_EXTENSION,
     * TARGET_CPA_OPT_IN, TEXT_AD
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setCampaignUnwrapped($var)
    {
        $this->writeWrapperValue("campaign", $var);
        return $this;}

    /**
     * Output only. The ad group targeted by this recommendation. This will be set only when
     * the recommendation affects a single ad group.
     * This field will be set for the following recommendation types:
     * KEYWORD, OPTIMIZE_AD_ROTATION, TEXT_AD
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 7 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroup()
    {
        return $this->ad_group;
    }

    /**
     * Returns the unboxed value from <code>getAdGroup()</code>

     * Output only. The ad group targeted by this recommendation. This will be set only when
     * the recommendation affects a single ad group.
     * This field will be set for the following recommendation types:
     * KEYWORD, OPTIMIZE_AD_ROTATION, TEXT_AD
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 7 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getAdGroupUnwrapped()
    {
        return $this->readWrapperValue("ad_group");
    }

    /**
     * Output only. The ad group targeted by this recommendation. This will be set only when
     * the recommendation affects a single ad group.
     * This field will be set for the following recommendation types:
     * KEYWORD, OPTIMIZE_AD_ROTATION, TEXT_AD
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 7 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The ad group targeted by this recommendation. This will be set only when
     * the recommendation affects a single ad group.
     * This field will be set for the following recommendation types:
     * KEYWORD, OPTIMIZE_AD_ROTATION, TEXT_AD
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 7 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupUnwrapped($var)
    {
        $this->writeWrapperValue("ad_group", $var);
        return $this;}

    /**
     * Output only. Whether the recommendation is dismissed or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue dismissed = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getDismissed()
    {
        return $this->dismissed;
    }

    /**
     * Returns the unboxed value from <code>getDismissed()</code>

     * Output only. Whether the recommendation is dismissed or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue dismissed = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return bool|null
     */
    public function getDismissedUnwrapped()
    {
        return $this->readWrapperValue("dismissed");
    }

    /**
     * Output only. Whether the recommendation is dismissed or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue dismissed = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setDismissed($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->dismissed = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * Output only. Whether the recommendation is dismissed or not.
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue dismissed = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param bool|null $var
     * @return $this
     */
    public function setDismissedUnwrapped($var)
    {
        $this->writeWrapperValue("dismissed", $var);
        return $this;}

    /**
     * Output only. The campaign budget recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.CampaignBudgetRecommendation campaign_budget_recommendation = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\Recommendation\CampaignBudgetRecommendation
     */
    public function getCampaignBudgetRecommendation()
    {
        return $this->readOneof(4);
    }

    /**
     * Output only. The campaign budget recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.CampaignBudgetRecommendation campaign_budget_recommendation = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\Recommendation\CampaignBudgetRecommendation $var
     * @return $this
     */
    public function setCampaignBudgetRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\Recommendation_CampaignBudgetRecommendation::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Output only. The keyword recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.KeywordRecommendation keyword_recommendation = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\Recommendation\KeywordRecommendation
     */
    public function getKeywordRecommendation()
    {
        return $this->readOneof(8);
    }

    /**
     * Output only. The keyword recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.KeywordRecommendation keyword_recommendation = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\Recommendation\KeywordRecommendation $var
     * @return $this
     */
    public function setKeywordRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\Recommendation_KeywordRecommendation::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Output only. Add expanded text ad recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.TextAdRecommendation text_ad_recommendation = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\Recommendation\TextAdRecommendation
     */
    public function getTextAdRecommendation()
    {
        return $this->readOneof(9);
    }

    /**
     * Output only. Add expanded text ad recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.TextAdRecommendation text_ad_recommendation = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\Recommendation\TextAdRecommendation $var
     * @return $this
     */
    public function setTextAdRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\Recommendation_TextAdRecommendation::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Output only. The TargetCPA opt-in recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.TargetCpaOptInRecommendation target_cpa_opt_in_recommendation = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\Recommendation\TargetCpaOptInRecommendation
     */
    public function getTargetCpaOptInRecommendation()
    {
        return $this->readOneof(10);
    }

    /**
     * Output only. The TargetCPA opt-in recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.TargetCpaOptInRecommendation target_cpa_opt_in_recommendation = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\Recommendation\TargetCpaOptInRecommendation $var
     * @return $this
     */
    public function setTargetCpaOptInRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\Recommendation_TargetCpaOptInRecommendation::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * Output only. The MaximizeConversions Opt-In recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.MaximizeConversionsOptInRecommendation maximize_conversions_opt_in_recommendation = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\Recommendation\MaximizeConversionsOptInRecommendation
     */
    public function getMaximizeConversionsOptInRecommendation()
    {
        return $this->readOneof(11);
    }

    /**
     * Output only. The MaximizeConversions Opt-In recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.MaximizeConversionsOptInRecommendation maximize_conversions_opt_in_recommendation = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\Recommendation\MaximizeConversionsOptInRecommendation $var
     * @return $this
     */
    public function setMaximizeConversionsOptInRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\Recommendation_MaximizeConversionsOptInRecommendation::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * Output only. The Enhanced Cost-Per-Click Opt-In recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.EnhancedCpcOptInRecommendation enhanced_cpc_opt_in_recommendation = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\Recommendation\EnhancedCpcOptInRecommendation
     */
    public function getEnhancedCpcOptInRecommendation()
    {
        return $this->readOneof(12);
    }

    /**
     * Output only. The Enhanced Cost-Per-Click Opt-In recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.EnhancedCpcOptInRecommendation enhanced_cpc_opt_in_recommendation = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\Recommendation\EnhancedCpcOptInRecommendation $var
     * @return $this
     */
    public function setEnhancedCpcOptInRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\Recommendation_EnhancedCpcOptInRecommendation::class);
        $this->writeOneof(12, $var);

        return $this;
    }

    /**
     * Output only. The Search Partners Opt-In recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.SearchPartnersOptInRecommendation search_partners_opt_in_recommendation = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\Recommendation\SearchPartnersOptInRecommendation
     */
    public function getSearchPartnersOptInRecommendation()
    {
        return $this->readOneof(14);
    }

    /**
     * Output only. The Search Partners Opt-In recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.SearchPartnersOptInRecommendation search_partners_opt_in_recommendation = 14 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\Recommendation\SearchPartnersOptInRecommendation $var
     * @return $this
     */
    public function setSearchPartnersOptInRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\Recommendation_SearchPartnersOptInRecommendation::class);
        $this->writeOneof(14, $var);

        return $this;
    }

    /**
     * Output only. The MaximizeClicks Opt-In recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.MaximizeClicksOptInRecommendation maximize_clicks_opt_in_recommendation = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\Recommendation\MaximizeClicksOptInRecommendation
     */
    public function getMaximizeClicksOptInRecommendation()
    {
        return $this->readOneof(15);
    }

    /**
     * Output only. The MaximizeClicks Opt-In recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.MaximizeClicksOptInRecommendation maximize_clicks_opt_in_recommendation = 15 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\Recommendation\MaximizeClicksOptInRecommendation $var
     * @return $this
     */
    public function setMaximizeClicksOptInRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\Recommendation_MaximizeClicksOptInRecommendation::class);
        $this->writeOneof(15, $var);

        return $this;
    }

    /**
     * Output only. The Optimize Ad Rotation recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.OptimizeAdRotationRecommendation optimize_ad_rotation_recommendation = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\Recommendation\OptimizeAdRotationRecommendation
     */
    public function getOptimizeAdRotationRecommendation()
    {
        return $this->readOneof(16);
    }

    /**
     * Output only. The Optimize Ad Rotation recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.OptimizeAdRotationRecommendation optimize_ad_rotation_recommendation = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\Recommendation\OptimizeAdRotationRecommendation $var
     * @return $this
     */
    public function setOptimizeAdRotationRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\Recommendation_OptimizeAdRotationRecommendation::class);
        $this->writeOneof(16, $var);

        return $this;
    }

    /**
     * Output only. The Callout extension recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.CalloutExtensionRecommendation callout_extension_recommendation = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\Recommendation\CalloutExtensionRecommendation
     */
    public function getCalloutExtensionRecommendation()
    {
        return $this->readOneof(17);
    }

    /**
     * Output only. The Callout extension recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.CalloutExtensionRecommendation callout_extension_recommendation = 17 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\Recommendation\CalloutExtensionRecommendation $var
     * @return $this
     */
    public function setCalloutExtensionRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\Recommendation_CalloutExtensionRecommendation::class);
        $this->writeOneof(17, $var);

        return $this;
    }

    /**
     * Output only. The Sitelink extension recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.SitelinkExtensionRecommendation sitelink_extension_recommendation = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\Recommendation\SitelinkExtensionRecommendation
     */
    public function getSitelinkExtensionRecommendation()
    {
        return $this->readOneof(18);
    }

    /**
     * Output only. The Sitelink extension recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.SitelinkExtensionRecommendation sitelink_extension_recommendation = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\Recommendation\SitelinkExtensionRecommendation $var
     * @return $this
     */
    public function setSitelinkExtensionRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\Recommendation_SitelinkExtensionRecommendation::class);
        $this->writeOneof(18, $var);

        return $this;
    }

    /**
     * Output only. The Call extension recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.CallExtensionRecommendation call_extension_recommendation = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\Recommendation\CallExtensionRecommendation
     */
    public function getCallExtensionRecommendation()
    {
        return $this->readOneof(19);
    }

    /**
     * Output only. The Call extension recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.CallExtensionRecommendation call_extension_recommendation = 19 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\Recommendation\CallExtensionRecommendation $var
     * @return $this
     */
    public function setCallExtensionRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\Recommendation_CallExtensionRecommendation::class);
        $this->writeOneof(19, $var);

        return $this;
    }

    /**
     * Output only. The keyword match type recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.KeywordMatchTypeRecommendation keyword_match_type_recommendation = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\Recommendation\KeywordMatchTypeRecommendation
     */
    public function getKeywordMatchTypeRecommendation()
    {
        return $this->readOneof(20);
    }

    /**
     * Output only. The keyword match type recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.KeywordMatchTypeRecommendation keyword_match_type_recommendation = 20 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\Recommendation\KeywordMatchTypeRecommendation $var
     * @return $this
     */
    public function setKeywordMatchTypeRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\Recommendation_KeywordMatchTypeRecommendation::class);
        $this->writeOneof(20, $var);

        return $this;
    }

    /**
     * Output only. The move unused budget recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.MoveUnusedBudgetRecommendation move_unused_budget_recommendation = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\Recommendation\MoveUnusedBudgetRecommendation
     */
    public function getMoveUnusedBudgetRecommendation()
    {
        return $this->readOneof(21);
    }

    /**
     * Output only. The move unused budget recommendation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Recommendation.MoveUnusedBudgetRecommendation move_unused_budget_recommendation = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\Recommendation\MoveUnusedBudgetRecommendation $var
     * @return $this
     */
    public function setMoveUnusedBudgetRecommendation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\Recommendation_MoveUnusedBudgetRecommendation::class);
        $this->writeOneof(21, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getRecommendation()
    {
        return $this->whichOneof("recommendation");
    }

}

