<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/enums/change_status_operation.proto

namespace Google\Ads\GoogleAds\V4\Enums\ChangeStatusOperationEnum;

use UnexpectedValueException;

/**
 * Status of the changed resource
 *
 * Protobuf type <code>google.ads.googleads.v4.enums.ChangeStatusOperationEnum.ChangeStatusOperation</code>
 */
class ChangeStatusOperation
{
    /**
     * No value has been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents an unclassified resource unknown
     * in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The resource was created.
     *
     * Generated from protobuf enum <code>ADDED = 2;</code>
     */
    const ADDED = 2;
    /**
     * The resource was modified.
     *
     * Generated from protobuf enum <code>CHANGED = 3;</code>
     */
    const CHANGED = 3;
    /**
     * The resource was removed.
     *
     * Generated from protobuf enum <code>REMOVED = 4;</code>
     */
    const REMOVED = 4;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ADDED => 'ADDED',
        self::CHANGED => 'CHANGED',
        self::REMOVED => 'REMOVED',
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
class_alias(ChangeStatusOperation::class, \Google\Ads\GoogleAds\V4\Enums\ChangeStatusOperationEnum_ChangeStatusOperation::class);

