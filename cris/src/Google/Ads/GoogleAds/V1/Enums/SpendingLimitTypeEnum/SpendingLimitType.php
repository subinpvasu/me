<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/spending_limit_type.proto

namespace Google\Ads\GoogleAds\V1\Enums\SpendingLimitTypeEnum;

use UnexpectedValueException;

/**
 * The possible spending limit types used by certain resources as an
 * alternative to absolute money values in micros.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.SpendingLimitTypeEnum.SpendingLimitType</code>
 */
class SpendingLimitType
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
     * Infinite, indicates unlimited spending power.
     *
     * Generated from protobuf enum <code>INFINITE = 2;</code>
     */
    const INFINITE = 2;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::INFINITE => 'INFINITE',
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
class_alias(SpendingLimitType::class, \Google\Ads\GoogleAds\V1\Enums\SpendingLimitTypeEnum_SpendingLimitType::class);

