<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/enums/recommendation_type.proto

namespace Google\Ads\GoogleAds\V4\Enums\RecommendationTypeEnum;

use UnexpectedValueException;

/**
 * Types of recommendations.
 *
 * Protobuf type <code>google.ads.googleads.v4.enums.RecommendationTypeEnum.RecommendationType</code>
 */
class RecommendationType
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Budget recommendation for campaigns that are currently budget-constrained
     * (as opposed to the FORECASTING_CAMPAIGN_BUDGET recommendation, which
     * applies to campaigns that are expected to become budget-constrained in
     * the future).
     *
     * Generated from protobuf enum <code>CAMPAIGN_BUDGET = 2;</code>
     */
    const CAMPAIGN_BUDGET = 2;
    /**
     * Keyword recommendation.
     *
     * Generated from protobuf enum <code>KEYWORD = 3;</code>
     */
    const KEYWORD = 3;
    /**
     * Recommendation to add a new text ad.
     *
     * Generated from protobuf enum <code>TEXT_AD = 4;</code>
     */
    const TEXT_AD = 4;
    /**
     * Recommendation to update a campaign to use a Target CPA bidding strategy.
     *
     * Generated from protobuf enum <code>TARGET_CPA_OPT_IN = 5;</code>
     */
    const TARGET_CPA_OPT_IN = 5;
    /**
     * Recommendation to update a campaign to use the Maximize Conversions
     * bidding strategy.
     *
     * Generated from protobuf enum <code>MAXIMIZE_CONVERSIONS_OPT_IN = 6;</code>
     */
    const MAXIMIZE_CONVERSIONS_OPT_IN = 6;
    /**
     * Recommendation to enable Enhanced Cost Per Click for a campaign.
     *
     * Generated from protobuf enum <code>ENHANCED_CPC_OPT_IN = 7;</code>
     */
    const ENHANCED_CPC_OPT_IN = 7;
    /**
     * Recommendation to start showing your campaign's ads on Google Search
     * Partners Websites.
     *
     * Generated from protobuf enum <code>SEARCH_PARTNERS_OPT_IN = 8;</code>
     */
    const SEARCH_PARTNERS_OPT_IN = 8;
    /**
     * Recommendation to update a campaign to use a Maximize Clicks bidding
     * strategy.
     *
     * Generated from protobuf enum <code>MAXIMIZE_CLICKS_OPT_IN = 9;</code>
     */
    const MAXIMIZE_CLICKS_OPT_IN = 9;
    /**
     * Recommendation to start using the "Optimize" ad rotation setting for the
     * given ad group.
     *
     * Generated from protobuf enum <code>OPTIMIZE_AD_ROTATION = 10;</code>
     */
    const OPTIMIZE_AD_ROTATION = 10;
    /**
     * Recommendation to add callout extensions to a campaign.
     *
     * Generated from protobuf enum <code>CALLOUT_EXTENSION = 11;</code>
     */
    const CALLOUT_EXTENSION = 11;
    /**
     * Recommendation to add sitelink extensions to a campaign.
     *
     * Generated from protobuf enum <code>SITELINK_EXTENSION = 12;</code>
     */
    const SITELINK_EXTENSION = 12;
    /**
     * Recommendation to add call extensions to a campaign.
     *
     * Generated from protobuf enum <code>CALL_EXTENSION = 13;</code>
     */
    const CALL_EXTENSION = 13;
    /**
     * Recommendation to change an existing keyword from one match type to a
     * broader match type.
     *
     * Generated from protobuf enum <code>KEYWORD_MATCH_TYPE = 14;</code>
     */
    const KEYWORD_MATCH_TYPE = 14;
    /**
     * Recommendation to move unused budget from one budget to a constrained
     * budget.
     *
     * Generated from protobuf enum <code>MOVE_UNUSED_BUDGET = 15;</code>
     */
    const MOVE_UNUSED_BUDGET = 15;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CAMPAIGN_BUDGET => 'CAMPAIGN_BUDGET',
        self::KEYWORD => 'KEYWORD',
        self::TEXT_AD => 'TEXT_AD',
        self::TARGET_CPA_OPT_IN => 'TARGET_CPA_OPT_IN',
        self::MAXIMIZE_CONVERSIONS_OPT_IN => 'MAXIMIZE_CONVERSIONS_OPT_IN',
        self::ENHANCED_CPC_OPT_IN => 'ENHANCED_CPC_OPT_IN',
        self::SEARCH_PARTNERS_OPT_IN => 'SEARCH_PARTNERS_OPT_IN',
        self::MAXIMIZE_CLICKS_OPT_IN => 'MAXIMIZE_CLICKS_OPT_IN',
        self::OPTIMIZE_AD_ROTATION => 'OPTIMIZE_AD_ROTATION',
        self::CALLOUT_EXTENSION => 'CALLOUT_EXTENSION',
        self::SITELINK_EXTENSION => 'SITELINK_EXTENSION',
        self::CALL_EXTENSION => 'CALL_EXTENSION',
        self::KEYWORD_MATCH_TYPE => 'KEYWORD_MATCH_TYPE',
        self::MOVE_UNUSED_BUDGET => 'MOVE_UNUSED_BUDGET',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RecommendationType::class, \Google\Ads\GoogleAds\V4\Enums\RecommendationTypeEnum_RecommendationType::class);

