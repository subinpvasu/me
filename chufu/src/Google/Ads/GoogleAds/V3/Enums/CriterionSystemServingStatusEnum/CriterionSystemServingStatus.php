<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/enums/criterion_system_serving_status.proto

namespace Google\Ads\GoogleAds\V3\Enums\CriterionSystemServingStatusEnum;

use UnexpectedValueException;

/**
 * Enumerates criterion system serving statuses.
 *
 * Protobuf type <code>google.ads.googleads.v3.enums.CriterionSystemServingStatusEnum.CriterionSystemServingStatus</code>
 */
class CriterionSystemServingStatus
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
     * Eligible.
     *
     * Generated from protobuf enum <code>ELIGIBLE = 2;</code>
     */
    const ELIGIBLE = 2;
    /**
     * Low search volume.
     *
     * Generated from protobuf enum <code>RARELY_SERVED = 3;</code>
     */
    const RARELY_SERVED = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ELIGIBLE => 'ELIGIBLE',
        self::RARELY_SERVED => 'RARELY_SERVED',
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
class_alias(CriterionSystemServingStatus::class, \Google\Ads\GoogleAds\V3\Enums\CriterionSystemServingStatusEnum_CriterionSystemServingStatus::class);

