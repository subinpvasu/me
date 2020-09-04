<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/enums/matching_function_context_type.proto

namespace Google\Ads\GoogleAds\V4\Enums\MatchingFunctionContextTypeEnum;

use UnexpectedValueException;

/**
 * Possible context types for an operand in a matching function.
 *
 * Protobuf type <code>google.ads.googleads.v4.enums.MatchingFunctionContextTypeEnum.MatchingFunctionContextType</code>
 */
class MatchingFunctionContextType
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
     * Feed item id in the request context.
     *
     * Generated from protobuf enum <code>FEED_ITEM_ID = 2;</code>
     */
    const FEED_ITEM_ID = 2;
    /**
     * The device being used (possible values are 'Desktop' or 'Mobile').
     *
     * Generated from protobuf enum <code>DEVICE_NAME = 3;</code>
     */
    const DEVICE_NAME = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::FEED_ITEM_ID => 'FEED_ITEM_ID',
        self::DEVICE_NAME => 'DEVICE_NAME',
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
class_alias(MatchingFunctionContextType::class, \Google\Ads\GoogleAds\V4\Enums\MatchingFunctionContextTypeEnum_MatchingFunctionContextType::class);

