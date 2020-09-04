<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/user_list_type.proto

namespace Google\Ads\GoogleAds\V1\Enums\UserListTypeEnum;

use UnexpectedValueException;

/**
 * Enum containing possible user list types.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.UserListTypeEnum.UserListType</code>
 */
class UserListType
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
     * UserList represented as a collection of conversion types.
     *
     * Generated from protobuf enum <code>REMARKETING = 2;</code>
     */
    const REMARKETING = 2;
    /**
     * UserList represented as a combination of other user lists/interests.
     *
     * Generated from protobuf enum <code>LOGICAL = 3;</code>
     */
    const LOGICAL = 3;
    /**
     * UserList created in the Google Ad Manager platform.
     *
     * Generated from protobuf enum <code>EXTERNAL_REMARKETING = 4;</code>
     */
    const EXTERNAL_REMARKETING = 4;
    /**
     * UserList associated with a rule.
     *
     * Generated from protobuf enum <code>RULE_BASED = 5;</code>
     */
    const RULE_BASED = 5;
    /**
     * UserList with users similar to users of another UserList.
     *
     * Generated from protobuf enum <code>SIMILAR = 6;</code>
     */
    const SIMILAR = 6;
    /**
     * UserList of first-party CRM data provided by advertiser in the form of
     * emails or other formats.
     *
     * Generated from protobuf enum <code>CRM_BASED = 7;</code>
     */
    const CRM_BASED = 7;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::REMARKETING => 'REMARKETING',
        self::LOGICAL => 'LOGICAL',
        self::EXTERNAL_REMARKETING => 'EXTERNAL_REMARKETING',
        self::RULE_BASED => 'RULE_BASED',
        self::SIMILAR => 'SIMILAR',
        self::CRM_BASED => 'CRM_BASED',
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
class_alias(UserListType::class, \Google\Ads\GoogleAds\V1\Enums\UserListTypeEnum_UserListType::class);

