<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/enums/keyword_plan_network.proto

namespace Google\Ads\GoogleAds\V4\Enums\KeywordPlanNetworkEnum;

use UnexpectedValueException;

/**
 * Enumerates keyword plan forecastable network types.
 *
 * Protobuf type <code>google.ads.googleads.v4.enums.KeywordPlanNetworkEnum.KeywordPlanNetwork</code>
 */
class KeywordPlanNetwork
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The value is unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Google Search.
     *
     * Generated from protobuf enum <code>GOOGLE_SEARCH = 2;</code>
     */
    const GOOGLE_SEARCH = 2;
    /**
     * Google Search + Search partners.
     *
     * Generated from protobuf enum <code>GOOGLE_SEARCH_AND_PARTNERS = 3;</code>
     */
    const GOOGLE_SEARCH_AND_PARTNERS = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::GOOGLE_SEARCH => 'GOOGLE_SEARCH',
        self::GOOGLE_SEARCH_AND_PARTNERS => 'GOOGLE_SEARCH_AND_PARTNERS',
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
class_alias(KeywordPlanNetwork::class, \Google\Ads\GoogleAds\V4\Enums\KeywordPlanNetworkEnum_KeywordPlanNetwork::class);

