<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/enums/conversion_action_category.proto

namespace Google\Ads\GoogleAds\V2\Enums\ConversionActionCategoryEnum;

use UnexpectedValueException;

/**
 * The category of conversions that are associated with a ConversionAction.
 *
 * Protobuf type <code>google.ads.googleads.v2.enums.ConversionActionCategoryEnum.ConversionActionCategory</code>
 */
class ConversionActionCategory
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
     * Default category.
     *
     * Generated from protobuf enum <code>DEFAULT = 2;</code>
     */
    const PBDEFAULT = 2;
    /**
     * User visiting a page.
     *
     * Generated from protobuf enum <code>PAGE_VIEW = 3;</code>
     */
    const PAGE_VIEW = 3;
    /**
     * Purchase, sales, or "order placed" event.
     *
     * Generated from protobuf enum <code>PURCHASE = 4;</code>
     */
    const PURCHASE = 4;
    /**
     * Signup user action.
     *
     * Generated from protobuf enum <code>SIGNUP = 5;</code>
     */
    const SIGNUP = 5;
    /**
     * Lead-generating action.
     *
     * Generated from protobuf enum <code>LEAD = 6;</code>
     */
    const LEAD = 6;
    /**
     * Software download action (as for an app).
     *
     * Generated from protobuf enum <code>DOWNLOAD = 7;</code>
     */
    const DOWNLOAD = 7;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PBDEFAULT => 'PBDEFAULT',
        self::PAGE_VIEW => 'PAGE_VIEW',
        self::PURCHASE => 'PURCHASE',
        self::SIGNUP => 'SIGNUP',
        self::LEAD => 'LEAD',
        self::DOWNLOAD => 'DOWNLOAD',
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
class_alias(ConversionActionCategory::class, \Google\Ads\GoogleAds\V2\Enums\ConversionActionCategoryEnum_ConversionActionCategory::class);

