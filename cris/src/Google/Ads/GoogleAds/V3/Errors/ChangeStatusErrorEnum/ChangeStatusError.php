<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/errors/change_status_error.proto

namespace Google\Ads\GoogleAds\V3\Errors\ChangeStatusErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible change status errors.
 *
 * Protobuf type <code>google.ads.googleads.v3.errors.ChangeStatusErrorEnum.ChangeStatusError</code>
 */
class ChangeStatusError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The requested start date is too old.
     *
     * Generated from protobuf enum <code>START_DATE_TOO_OLD = 3;</code>
     */
    const START_DATE_TOO_OLD = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::START_DATE_TOO_OLD => 'START_DATE_TOO_OLD',
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
class_alias(ChangeStatusError::class, \Google\Ads\GoogleAds\V3\Errors\ChangeStatusErrorEnum_ChangeStatusError::class);

