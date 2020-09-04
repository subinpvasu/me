<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/enums/hotel_rate_type.proto

namespace Google\Ads\GoogleAds\V3\Enums\HotelRateTypeEnum;

use UnexpectedValueException;

/**
 * Enum describing possible hotel rate types.
 *
 * Protobuf type <code>google.ads.googleads.v3.enums.HotelRateTypeEnum.HotelRateType</code>
 */
class HotelRateType
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
     * Rate type information is unavailable.
     *
     * Generated from protobuf enum <code>UNAVAILABLE = 2;</code>
     */
    const UNAVAILABLE = 2;
    /**
     * Rates available to everyone.
     *
     * Generated from protobuf enum <code>PUBLIC_RATE = 3;</code>
     */
    const PUBLIC_RATE = 3;
    /**
     * A membership program rate is available and satisfies basic requirements
     * like having a public rate available. UI treatment will strikethrough the
     * public rate and indicate that a discount is available to the user. For
     * more on Qualified Rates, visit
     * https://developers.google.com/hotels/hotel-ads/dev-guide/qualified-rates
     *
     * Generated from protobuf enum <code>QUALIFIED_RATE = 4;</code>
     */
    const QUALIFIED_RATE = 4;
    /**
     * Rates available to users that satisfy some eligibility criteria. e.g.
     * all signed-in users, 20% of mobile users, all mobile users in Canada,
     * etc.
     *
     * Generated from protobuf enum <code>PRIVATE_RATE = 5;</code>
     */
    const PRIVATE_RATE = 5;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::UNAVAILABLE => 'UNAVAILABLE',
        self::PUBLIC_RATE => 'PUBLIC_RATE',
        self::QUALIFIED_RATE => 'QUALIFIED_RATE',
        self::PRIVATE_RATE => 'PRIVATE_RATE',
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
class_alias(HotelRateType::class, \Google\Ads\GoogleAds\V3\Enums\HotelRateTypeEnum_HotelRateType::class);

