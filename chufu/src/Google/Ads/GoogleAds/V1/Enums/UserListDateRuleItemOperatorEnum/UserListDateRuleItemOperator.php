<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/user_list_date_rule_item_operator.proto

namespace Google\Ads\GoogleAds\V1\Enums\UserListDateRuleItemOperatorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible user list date rule item operators.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.UserListDateRuleItemOperatorEnum.UserListDateRuleItemOperator</code>
 */
class UserListDateRuleItemOperator
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
     * Equals.
     *
     * Generated from protobuf enum <code>EQUALS = 2;</code>
     */
    const EQUALS = 2;
    /**
     * Not Equals.
     *
     * Generated from protobuf enum <code>NOT_EQUALS = 3;</code>
     */
    const NOT_EQUALS = 3;
    /**
     * Before.
     *
     * Generated from protobuf enum <code>BEFORE = 4;</code>
     */
    const BEFORE = 4;
    /**
     * After.
     *
     * Generated from protobuf enum <code>AFTER = 5;</code>
     */
    const AFTER = 5;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::EQUALS => 'EQUALS',
        self::NOT_EQUALS => 'NOT_EQUALS',
        self::BEFORE => 'BEFORE',
        self::AFTER => 'AFTER',
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
class_alias(UserListDateRuleItemOperator::class, \Google\Ads\GoogleAds\V1\Enums\UserListDateRuleItemOperatorEnum_UserListDateRuleItemOperator::class);

