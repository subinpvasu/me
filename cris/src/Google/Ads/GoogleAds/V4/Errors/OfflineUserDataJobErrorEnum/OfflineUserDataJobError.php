<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/errors/offline_user_data_job_error.proto

namespace Google\Ads\GoogleAds\V4\Errors\OfflineUserDataJobErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible request errors.
 *
 * Protobuf type <code>google.ads.googleads.v4.errors.OfflineUserDataJobErrorEnum.OfflineUserDataJobError</code>
 */
class OfflineUserDataJobError
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
     * The user list ID provided for the job is invalid.
     *
     * Generated from protobuf enum <code>INVALID_USER_LIST_ID = 3;</code>
     */
    const INVALID_USER_LIST_ID = 3;
    /**
     * Type of the user list is not applicable for the job.
     *
     * Generated from protobuf enum <code>INVALID_USER_LIST_TYPE = 4;</code>
     */
    const INVALID_USER_LIST_TYPE = 4;
    /**
     * Customer is not whitelisted for using user ID in upload data.
     *
     * Generated from protobuf enum <code>NOT_WHITELISTED_FOR_USER_ID = 5;</code>
     */
    const NOT_WHITELISTED_FOR_USER_ID = 5;
    /**
     * Upload data is not compatible with the upload key type of the associated
     * user list.
     *
     * Generated from protobuf enum <code>INCOMPATIBLE_UPLOAD_KEY_TYPE = 6;</code>
     */
    const INCOMPATIBLE_UPLOAD_KEY_TYPE = 6;
    /**
     * The user identifier is missing valid data.
     *
     * Generated from protobuf enum <code>MISSING_USER_IDENTIFIER = 7;</code>
     */
    const MISSING_USER_IDENTIFIER = 7;
    /**
     * The mobile ID is malformed.
     *
     * Generated from protobuf enum <code>INVALID_MOBILE_ID_FORMAT = 8;</code>
     */
    const INVALID_MOBILE_ID_FORMAT = 8;
    /**
     * Request is exceeding the maximum number of user identifiers allowed.
     *
     * Generated from protobuf enum <code>TOO_MANY_USER_IDENTIFIERS = 9;</code>
     */
    const TOO_MANY_USER_IDENTIFIERS = 9;
    /**
     * Customer is not whitelisted for store sales direct data.
     *
     * Generated from protobuf enum <code>NOT_WHITELISTED_FOR_STORE_SALES_DIRECT = 10;</code>
     */
    const NOT_WHITELISTED_FOR_STORE_SALES_DIRECT = 10;
    /**
     * Customer is not whitelisted for unified store sales data.
     *
     * Generated from protobuf enum <code>NOT_WHITELISTED_FOR_UNIFIED_STORE_SALES = 28;</code>
     */
    const NOT_WHITELISTED_FOR_UNIFIED_STORE_SALES = 28;
    /**
     * The partner ID in store sales direct metadata is invalid.
     *
     * Generated from protobuf enum <code>INVALID_PARTNER_ID = 11;</code>
     */
    const INVALID_PARTNER_ID = 11;
    /**
     * The data in user identifier should not be encoded.
     *
     * Generated from protobuf enum <code>INVALID_ENCODING = 12;</code>
     */
    const INVALID_ENCODING = 12;
    /**
     * The country code is invalid.
     *
     * Generated from protobuf enum <code>INVALID_COUNTRY_CODE = 13;</code>
     */
    const INVALID_COUNTRY_CODE = 13;
    /**
     * Incompatible user identifier when using third_party_user_id for store
     * sales direct first party data or not using third_party_user_id for store
     * sales third party data.
     *
     * Generated from protobuf enum <code>INCOMPATIBLE_USER_IDENTIFIER = 14;</code>
     */
    const INCOMPATIBLE_USER_IDENTIFIER = 14;
    /**
     * A transaction time in the future is not allowed.
     *
     * Generated from protobuf enum <code>FUTURE_TRANSACTION_TIME = 15;</code>
     */
    const FUTURE_TRANSACTION_TIME = 15;
    /**
     * The conversion_action specified in transaction_attributes is used to
     * report conversions to a conversion action configured in Google Ads. This
     * error indicates there is no such conversion action in the account.
     *
     * Generated from protobuf enum <code>INVALID_CONVERSION_ACTION = 16;</code>
     */
    const INVALID_CONVERSION_ACTION = 16;
    /**
     * Mobile ID is not supported for store sales direct data.
     *
     * Generated from protobuf enum <code>MOBILE_ID_NOT_SUPPORTED = 17;</code>
     */
    const MOBILE_ID_NOT_SUPPORTED = 17;
    /**
     * When a remove-all operation is provided, it has to be the first operation
     * of the operation list.
     *
     * Generated from protobuf enum <code>INVALID_OPERATION_ORDER = 18;</code>
     */
    const INVALID_OPERATION_ORDER = 18;
    /**
     * Mixing creation and removal of offline data in the same job is not
     * allowed.
     *
     * Generated from protobuf enum <code>CONFLICTING_OPERATION = 19;</code>
     */
    const CONFLICTING_OPERATION = 19;
    /**
     * The external update ID already exists.
     *
     * Generated from protobuf enum <code>EXTERNAL_UPDATE_ID_ALREADY_EXISTS = 21;</code>
     */
    const EXTERNAL_UPDATE_ID_ALREADY_EXISTS = 21;
    /**
     * Once the upload job is started, new operations cannot be added.
     *
     * Generated from protobuf enum <code>JOB_ALREADY_STARTED = 22;</code>
     */
    const JOB_ALREADY_STARTED = 22;
    /**
     * Remove operation is not allowed for store sales direct updates.
     *
     * Generated from protobuf enum <code>REMOVE_NOT_SUPPORTED = 23;</code>
     */
    const REMOVE_NOT_SUPPORTED = 23;
    /**
     * Remove-all is not supported for store sales direct updates.
     *
     * Generated from protobuf enum <code>REMOVE_ALL_NOT_SUPPORTED = 24;</code>
     */
    const REMOVE_ALL_NOT_SUPPORTED = 24;
    /**
     * The SHA256 encoded value is malformed.
     *
     * Generated from protobuf enum <code>INVALID_SHA256_FORMAT = 25;</code>
     */
    const INVALID_SHA256_FORMAT = 25;
    /**
     * The custom key specified is not enabled for the unified store sales
     * upload.
     *
     * Generated from protobuf enum <code>CUSTOM_KEY_DISABLED = 26;</code>
     */
    const CUSTOM_KEY_DISABLED = 26;
    /**
     * The custom key specified is not predefined through the Google Ads UI.
     *
     * Generated from protobuf enum <code>CUSTOM_KEY_NOT_PREDEFINED = 27;</code>
     */
    const CUSTOM_KEY_NOT_PREDEFINED = 27;
    /**
     * The custom key specified is not set in the upload.
     *
     * Generated from protobuf enum <code>CUSTOM_KEY_NOT_SET = 29;</code>
     */
    const CUSTOM_KEY_NOT_SET = 29;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::INVALID_USER_LIST_ID => 'INVALID_USER_LIST_ID',
        self::INVALID_USER_LIST_TYPE => 'INVALID_USER_LIST_TYPE',
        self::NOT_WHITELISTED_FOR_USER_ID => 'NOT_WHITELISTED_FOR_USER_ID',
        self::INCOMPATIBLE_UPLOAD_KEY_TYPE => 'INCOMPATIBLE_UPLOAD_KEY_TYPE',
        self::MISSING_USER_IDENTIFIER => 'MISSING_USER_IDENTIFIER',
        self::INVALID_MOBILE_ID_FORMAT => 'INVALID_MOBILE_ID_FORMAT',
        self::TOO_MANY_USER_IDENTIFIERS => 'TOO_MANY_USER_IDENTIFIERS',
        self::NOT_WHITELISTED_FOR_STORE_SALES_DIRECT => 'NOT_WHITELISTED_FOR_STORE_SALES_DIRECT',
        self::NOT_WHITELISTED_FOR_UNIFIED_STORE_SALES => 'NOT_WHITELISTED_FOR_UNIFIED_STORE_SALES',
        self::INVALID_PARTNER_ID => 'INVALID_PARTNER_ID',
        self::INVALID_ENCODING => 'INVALID_ENCODING',
        self::INVALID_COUNTRY_CODE => 'INVALID_COUNTRY_CODE',
        self::INCOMPATIBLE_USER_IDENTIFIER => 'INCOMPATIBLE_USER_IDENTIFIER',
        self::FUTURE_TRANSACTION_TIME => 'FUTURE_TRANSACTION_TIME',
        self::INVALID_CONVERSION_ACTION => 'INVALID_CONVERSION_ACTION',
        self::MOBILE_ID_NOT_SUPPORTED => 'MOBILE_ID_NOT_SUPPORTED',
        self::INVALID_OPERATION_ORDER => 'INVALID_OPERATION_ORDER',
        self::CONFLICTING_OPERATION => 'CONFLICTING_OPERATION',
        self::EXTERNAL_UPDATE_ID_ALREADY_EXISTS => 'EXTERNAL_UPDATE_ID_ALREADY_EXISTS',
        self::JOB_ALREADY_STARTED => 'JOB_ALREADY_STARTED',
        self::REMOVE_NOT_SUPPORTED => 'REMOVE_NOT_SUPPORTED',
        self::REMOVE_ALL_NOT_SUPPORTED => 'REMOVE_ALL_NOT_SUPPORTED',
        self::INVALID_SHA256_FORMAT => 'INVALID_SHA256_FORMAT',
        self::CUSTOM_KEY_DISABLED => 'CUSTOM_KEY_DISABLED',
        self::CUSTOM_KEY_NOT_PREDEFINED => 'CUSTOM_KEY_NOT_PREDEFINED',
        self::CUSTOM_KEY_NOT_SET => 'CUSTOM_KEY_NOT_SET',
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
class_alias(OfflineUserDataJobError::class, \Google\Ads\GoogleAds\V4\Errors\OfflineUserDataJobErrorEnum_OfflineUserDataJobError::class);

