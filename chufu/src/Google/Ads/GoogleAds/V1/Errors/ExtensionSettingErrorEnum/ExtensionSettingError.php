<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/errors/extension_setting_error.proto

namespace Google\Ads\GoogleAds\V1\Errors\ExtensionSettingErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible extension setting errors.
 *
 * Protobuf type <code>google.ads.googleads.v1.errors.ExtensionSettingErrorEnum.ExtensionSettingError</code>
 */
class ExtensionSettingError
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
     * A platform restriction was provided without input extensions or existing
     * extensions.
     *
     * Generated from protobuf enum <code>EXTENSIONS_REQUIRED = 2;</code>
     */
    const EXTENSIONS_REQUIRED = 2;
    /**
     * The provided feed type does not correspond to the provided extensions.
     *
     * Generated from protobuf enum <code>FEED_TYPE_EXTENSION_TYPE_MISMATCH = 3;</code>
     */
    const FEED_TYPE_EXTENSION_TYPE_MISMATCH = 3;
    /**
     * The provided feed type cannot be used.
     *
     * Generated from protobuf enum <code>INVALID_FEED_TYPE = 4;</code>
     */
    const INVALID_FEED_TYPE = 4;
    /**
     * The provided feed type cannot be used at the customer level.
     *
     * Generated from protobuf enum <code>INVALID_FEED_TYPE_FOR_CUSTOMER_EXTENSION_SETTING = 5;</code>
     */
    const INVALID_FEED_TYPE_FOR_CUSTOMER_EXTENSION_SETTING = 5;
    /**
     * Cannot change a feed item field on a CREATE operation.
     *
     * Generated from protobuf enum <code>CANNOT_CHANGE_FEED_ITEM_ON_CREATE = 6;</code>
     */
    const CANNOT_CHANGE_FEED_ITEM_ON_CREATE = 6;
    /**
     * Cannot update an extension that is not already in this setting.
     *
     * Generated from protobuf enum <code>CANNOT_UPDATE_NEWLY_CREATED_EXTENSION = 7;</code>
     */
    const CANNOT_UPDATE_NEWLY_CREATED_EXTENSION = 7;
    /**
     * There is no existing AdGroupExtensionSetting for this type.
     *
     * Generated from protobuf enum <code>NO_EXISTING_AD_GROUP_EXTENSION_SETTING_FOR_TYPE = 8;</code>
     */
    const NO_EXISTING_AD_GROUP_EXTENSION_SETTING_FOR_TYPE = 8;
    /**
     * There is no existing CampaignExtensionSetting for this type.
     *
     * Generated from protobuf enum <code>NO_EXISTING_CAMPAIGN_EXTENSION_SETTING_FOR_TYPE = 9;</code>
     */
    const NO_EXISTING_CAMPAIGN_EXTENSION_SETTING_FOR_TYPE = 9;
    /**
     * There is no existing CustomerExtensionSetting for this type.
     *
     * Generated from protobuf enum <code>NO_EXISTING_CUSTOMER_EXTENSION_SETTING_FOR_TYPE = 10;</code>
     */
    const NO_EXISTING_CUSTOMER_EXTENSION_SETTING_FOR_TYPE = 10;
    /**
     * The AdGroupExtensionSetting already exists. UPDATE should be used to
     * modify the existing AdGroupExtensionSetting.
     *
     * Generated from protobuf enum <code>AD_GROUP_EXTENSION_SETTING_ALREADY_EXISTS = 11;</code>
     */
    const AD_GROUP_EXTENSION_SETTING_ALREADY_EXISTS = 11;
    /**
     * The CampaignExtensionSetting already exists. UPDATE should be used to
     * modify the existing CampaignExtensionSetting.
     *
     * Generated from protobuf enum <code>CAMPAIGN_EXTENSION_SETTING_ALREADY_EXISTS = 12;</code>
     */
    const CAMPAIGN_EXTENSION_SETTING_ALREADY_EXISTS = 12;
    /**
     * The CustomerExtensionSetting already exists. UPDATE should be used to
     * modify the existing CustomerExtensionSetting.
     *
     * Generated from protobuf enum <code>CUSTOMER_EXTENSION_SETTING_ALREADY_EXISTS = 13;</code>
     */
    const CUSTOMER_EXTENSION_SETTING_ALREADY_EXISTS = 13;
    /**
     * An active ad group feed already exists for this place holder type.
     *
     * Generated from protobuf enum <code>AD_GROUP_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 14;</code>
     */
    const AD_GROUP_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 14;
    /**
     * An active campaign feed already exists for this place holder type.
     *
     * Generated from protobuf enum <code>CAMPAIGN_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 15;</code>
     */
    const CAMPAIGN_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 15;
    /**
     * An active customer feed already exists for this place holder type.
     *
     * Generated from protobuf enum <code>CUSTOMER_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 16;</code>
     */
    const CUSTOMER_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE = 16;
    /**
     * Value is not within the accepted range.
     *
     * Generated from protobuf enum <code>VALUE_OUT_OF_RANGE = 17;</code>
     */
    const VALUE_OUT_OF_RANGE = 17;
    /**
     * Cannot simultaneously set specified field with final urls.
     *
     * Generated from protobuf enum <code>CANNOT_SET_FIELD_WITH_FINAL_URLS = 18;</code>
     */
    const CANNOT_SET_FIELD_WITH_FINAL_URLS = 18;
    /**
     * Must set field with final urls.
     *
     * Generated from protobuf enum <code>FINAL_URLS_NOT_SET = 19;</code>
     */
    const FINAL_URLS_NOT_SET = 19;
    /**
     * Phone number for a call extension is invalid.
     *
     * Generated from protobuf enum <code>INVALID_PHONE_NUMBER = 20;</code>
     */
    const INVALID_PHONE_NUMBER = 20;
    /**
     * Phone number for a call extension is not supported for the given country
     * code.
     *
     * Generated from protobuf enum <code>PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY = 21;</code>
     */
    const PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY = 21;
    /**
     * A carrier specific number in short format is not allowed for call
     * extensions.
     *
     * Generated from protobuf enum <code>CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED = 22;</code>
     */
    const CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED = 22;
    /**
     * Premium rate numbers are not allowed for call extensions.
     *
     * Generated from protobuf enum <code>PREMIUM_RATE_NUMBER_NOT_ALLOWED = 23;</code>
     */
    const PREMIUM_RATE_NUMBER_NOT_ALLOWED = 23;
    /**
     * Phone number type for a call extension is not allowed.
     *
     * Generated from protobuf enum <code>DISALLOWED_NUMBER_TYPE = 24;</code>
     */
    const DISALLOWED_NUMBER_TYPE = 24;
    /**
     * Phone number for a call extension does not meet domestic format
     * requirements.
     *
     * Generated from protobuf enum <code>INVALID_DOMESTIC_PHONE_NUMBER_FORMAT = 25;</code>
     */
    const INVALID_DOMESTIC_PHONE_NUMBER_FORMAT = 25;
    /**
     * Vanity phone numbers (i.e. those including letters) are not allowed for
     * call extensions.
     *
     * Generated from protobuf enum <code>VANITY_PHONE_NUMBER_NOT_ALLOWED = 26;</code>
     */
    const VANITY_PHONE_NUMBER_NOT_ALLOWED = 26;
    /**
     * Country code provided for a call extension is invalid.
     *
     * Generated from protobuf enum <code>INVALID_COUNTRY_CODE = 27;</code>
     */
    const INVALID_COUNTRY_CODE = 27;
    /**
     * Call conversion type id provided for a call extension is invalid.
     *
     * Generated from protobuf enum <code>INVALID_CALL_CONVERSION_TYPE_ID = 28;</code>
     */
    const INVALID_CALL_CONVERSION_TYPE_ID = 28;
    /**
     * For a call extension, the customer is not whitelisted for call tracking.
     *
     * Generated from protobuf enum <code>CUSTOMER_NOT_WHITELISTED_FOR_CALLTRACKING = 29;</code>
     */
    const CUSTOMER_NOT_WHITELISTED_FOR_CALLTRACKING = 29;
    /**
     * Call tracking is not supported for the given country for a call
     * extension.
     *
     * Generated from protobuf enum <code>CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY = 30;</code>
     */
    const CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY = 30;
    /**
     * App id provided for an app extension is invalid.
     *
     * Generated from protobuf enum <code>INVALID_APP_ID = 31;</code>
     */
    const INVALID_APP_ID = 31;
    /**
     * Quotation marks present in the review text for a review extension.
     *
     * Generated from protobuf enum <code>QUOTES_IN_REVIEW_EXTENSION_SNIPPET = 32;</code>
     */
    const QUOTES_IN_REVIEW_EXTENSION_SNIPPET = 32;
    /**
     * Hyphen character present in the review text for a review extension.
     *
     * Generated from protobuf enum <code>HYPHENS_IN_REVIEW_EXTENSION_SNIPPET = 33;</code>
     */
    const HYPHENS_IN_REVIEW_EXTENSION_SNIPPET = 33;
    /**
     * A blacklisted review source name or url was provided for a review
     * extension.
     *
     * Generated from protobuf enum <code>REVIEW_EXTENSION_SOURCE_NOT_ELIGIBLE = 34;</code>
     */
    const REVIEW_EXTENSION_SOURCE_NOT_ELIGIBLE = 34;
    /**
     * Review source name should not be found in the review text.
     *
     * Generated from protobuf enum <code>SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT = 35;</code>
     */
    const SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT = 35;
    /**
     * Field must be set.
     *
     * Generated from protobuf enum <code>MISSING_FIELD = 36;</code>
     */
    const MISSING_FIELD = 36;
    /**
     * Inconsistent currency codes.
     *
     * Generated from protobuf enum <code>INCONSISTENT_CURRENCY_CODES = 37;</code>
     */
    const INCONSISTENT_CURRENCY_CODES = 37;
    /**
     * Price extension cannot have duplicated headers.
     *
     * Generated from protobuf enum <code>PRICE_EXTENSION_HAS_DUPLICATED_HEADERS = 38;</code>
     */
    const PRICE_EXTENSION_HAS_DUPLICATED_HEADERS = 38;
    /**
     * Price item cannot have duplicated header and description.
     *
     * Generated from protobuf enum <code>PRICE_ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION = 39;</code>
     */
    const PRICE_ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION = 39;
    /**
     * Price extension has too few items
     *
     * Generated from protobuf enum <code>PRICE_EXTENSION_HAS_TOO_FEW_ITEMS = 40;</code>
     */
    const PRICE_EXTENSION_HAS_TOO_FEW_ITEMS = 40;
    /**
     * Price extension has too many items
     *
     * Generated from protobuf enum <code>PRICE_EXTENSION_HAS_TOO_MANY_ITEMS = 41;</code>
     */
    const PRICE_EXTENSION_HAS_TOO_MANY_ITEMS = 41;
    /**
     * The input value is not currently supported.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_VALUE = 42;</code>
     */
    const UNSUPPORTED_VALUE = 42;
    /**
     * Unknown or unsupported device preference.
     *
     * Generated from protobuf enum <code>INVALID_DEVICE_PREFERENCE = 43;</code>
     */
    const INVALID_DEVICE_PREFERENCE = 43;
    /**
     * Invalid feed item schedule end time (i.e., endHour = 24 and
     * endMinute != 0).
     *
     * Generated from protobuf enum <code>INVALID_SCHEDULE_END = 45;</code>
     */
    const INVALID_SCHEDULE_END = 45;
    /**
     * Date time zone does not match the account's time zone.
     *
     * Generated from protobuf enum <code>DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE = 47;</code>
     */
    const DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE = 47;
    /**
     * Overlapping feed item schedule times (e.g., 7-10AM and 8-11AM) are not
     * allowed.
     *
     * Generated from protobuf enum <code>OVERLAPPING_SCHEDULES_NOT_ALLOWED = 48;</code>
     */
    const OVERLAPPING_SCHEDULES_NOT_ALLOWED = 48;
    /**
     * Feed item schedule end time must be after start time.
     *
     * Generated from protobuf enum <code>SCHEDULE_END_NOT_AFTER_START = 49;</code>
     */
    const SCHEDULE_END_NOT_AFTER_START = 49;
    /**
     * There are too many feed item schedules per day.
     *
     * Generated from protobuf enum <code>TOO_MANY_SCHEDULES_PER_DAY = 50;</code>
     */
    const TOO_MANY_SCHEDULES_PER_DAY = 50;
    /**
     * Cannot edit the same extension feed item more than once in the same
     * request.
     *
     * Generated from protobuf enum <code>DUPLICATE_EXTENSION_FEED_ITEM_EDIT = 51;</code>
     */
    const DUPLICATE_EXTENSION_FEED_ITEM_EDIT = 51;
    /**
     * Invalid structured snippet header.
     *
     * Generated from protobuf enum <code>INVALID_SNIPPETS_HEADER = 52;</code>
     */
    const INVALID_SNIPPETS_HEADER = 52;
    /**
     * Phone number with call tracking enabled is not supported for the
     * specified country.
     *
     * Generated from protobuf enum <code>PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY = 53;</code>
     */
    const PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY = 53;
    /**
     * The targeted adgroup must belong to the targeted campaign.
     *
     * Generated from protobuf enum <code>CAMPAIGN_TARGETING_MISMATCH = 54;</code>
     */
    const CAMPAIGN_TARGETING_MISMATCH = 54;
    /**
     * The feed used by the ExtensionSetting is removed and cannot be operated
     * on. Remove the ExtensionSetting to allow a new one to be created using
     * an active feed.
     *
     * Generated from protobuf enum <code>CANNOT_OPERATE_ON_REMOVED_FEED = 55;</code>
     */
    const CANNOT_OPERATE_ON_REMOVED_FEED = 55;
    /**
     * The ExtensionFeedItem type is required for this operation.
     *
     * Generated from protobuf enum <code>EXTENSION_TYPE_REQUIRED = 56;</code>
     */
    const EXTENSION_TYPE_REQUIRED = 56;
    /**
     * The matching function that links the extension feed to the customer,
     * campaign, or ad group is not compatible with the ExtensionSetting
     * services.
     *
     * Generated from protobuf enum <code>INCOMPATIBLE_UNDERLYING_MATCHING_FUNCTION = 57;</code>
     */
    const INCOMPATIBLE_UNDERLYING_MATCHING_FUNCTION = 57;
    /**
     * Start date must be before end date.
     *
     * Generated from protobuf enum <code>START_DATE_AFTER_END_DATE = 58;</code>
     */
    const START_DATE_AFTER_END_DATE = 58;
    /**
     * Input price is not in a valid format.
     *
     * Generated from protobuf enum <code>INVALID_PRICE_FORMAT = 59;</code>
     */
    const INVALID_PRICE_FORMAT = 59;
    /**
     * The promotion time is invalid.
     *
     * Generated from protobuf enum <code>PROMOTION_INVALID_TIME = 60;</code>
     */
    const PROMOTION_INVALID_TIME = 60;
    /**
     * Cannot set both percent discount and money discount fields.
     *
     * Generated from protobuf enum <code>PROMOTION_CANNOT_SET_PERCENT_DISCOUNT_AND_MONEY_DISCOUNT = 61;</code>
     */
    const PROMOTION_CANNOT_SET_PERCENT_DISCOUNT_AND_MONEY_DISCOUNT = 61;
    /**
     * Cannot set both promotion code and orders over amount fields.
     *
     * Generated from protobuf enum <code>PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNT = 62;</code>
     */
    const PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNT = 62;
    /**
     * This field has too many decimal places specified.
     *
     * Generated from protobuf enum <code>TOO_MANY_DECIMAL_PLACES_SPECIFIED = 63;</code>
     */
    const TOO_MANY_DECIMAL_PLACES_SPECIFIED = 63;
    /**
     * The language code is not valid.
     *
     * Generated from protobuf enum <code>INVALID_LANGUAGE_CODE = 64;</code>
     */
    const INVALID_LANGUAGE_CODE = 64;
    /**
     * The language is not supported.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_LANGUAGE = 65;</code>
     */
    const UNSUPPORTED_LANGUAGE = 65;
    /**
     * Customer hasn't consented for call recording, which is required for
     * adding/updating call extensions. Please see
     * https://support.google.com/google-ads/answer/7412639.
     *
     * Generated from protobuf enum <code>CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED = 66;</code>
     */
    const CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED = 66;
    /**
     * The UPDATE operation does not specify any fields other than the resource
     * name in the update mask.
     *
     * Generated from protobuf enum <code>EXTENSION_SETTING_UPDATE_IS_A_NOOP = 67;</code>
     */
    const EXTENSION_SETTING_UPDATE_IS_A_NOOP = 67;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::EXTENSIONS_REQUIRED => 'EXTENSIONS_REQUIRED',
        self::FEED_TYPE_EXTENSION_TYPE_MISMATCH => 'FEED_TYPE_EXTENSION_TYPE_MISMATCH',
        self::INVALID_FEED_TYPE => 'INVALID_FEED_TYPE',
        self::INVALID_FEED_TYPE_FOR_CUSTOMER_EXTENSION_SETTING => 'INVALID_FEED_TYPE_FOR_CUSTOMER_EXTENSION_SETTING',
        self::CANNOT_CHANGE_FEED_ITEM_ON_CREATE => 'CANNOT_CHANGE_FEED_ITEM_ON_CREATE',
        self::CANNOT_UPDATE_NEWLY_CREATED_EXTENSION => 'CANNOT_UPDATE_NEWLY_CREATED_EXTENSION',
        self::NO_EXISTING_AD_GROUP_EXTENSION_SETTING_FOR_TYPE => 'NO_EXISTING_AD_GROUP_EXTENSION_SETTING_FOR_TYPE',
        self::NO_EXISTING_CAMPAIGN_EXTENSION_SETTING_FOR_TYPE => 'NO_EXISTING_CAMPAIGN_EXTENSION_SETTING_FOR_TYPE',
        self::NO_EXISTING_CUSTOMER_EXTENSION_SETTING_FOR_TYPE => 'NO_EXISTING_CUSTOMER_EXTENSION_SETTING_FOR_TYPE',
        self::AD_GROUP_EXTENSION_SETTING_ALREADY_EXISTS => 'AD_GROUP_EXTENSION_SETTING_ALREADY_EXISTS',
        self::CAMPAIGN_EXTENSION_SETTING_ALREADY_EXISTS => 'CAMPAIGN_EXTENSION_SETTING_ALREADY_EXISTS',
        self::CUSTOMER_EXTENSION_SETTING_ALREADY_EXISTS => 'CUSTOMER_EXTENSION_SETTING_ALREADY_EXISTS',
        self::AD_GROUP_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE => 'AD_GROUP_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE',
        self::CAMPAIGN_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE => 'CAMPAIGN_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE',
        self::CUSTOMER_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE => 'CUSTOMER_FEED_ALREADY_EXISTS_FOR_PLACEHOLDER_TYPE',
        self::VALUE_OUT_OF_RANGE => 'VALUE_OUT_OF_RANGE',
        self::CANNOT_SET_FIELD_WITH_FINAL_URLS => 'CANNOT_SET_FIELD_WITH_FINAL_URLS',
        self::FINAL_URLS_NOT_SET => 'FINAL_URLS_NOT_SET',
        self::INVALID_PHONE_NUMBER => 'INVALID_PHONE_NUMBER',
        self::PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY => 'PHONE_NUMBER_NOT_SUPPORTED_FOR_COUNTRY',
        self::CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED => 'CARRIER_SPECIFIC_SHORT_NUMBER_NOT_ALLOWED',
        self::PREMIUM_RATE_NUMBER_NOT_ALLOWED => 'PREMIUM_RATE_NUMBER_NOT_ALLOWED',
        self::DISALLOWED_NUMBER_TYPE => 'DISALLOWED_NUMBER_TYPE',
        self::INVALID_DOMESTIC_PHONE_NUMBER_FORMAT => 'INVALID_DOMESTIC_PHONE_NUMBER_FORMAT',
        self::VANITY_PHONE_NUMBER_NOT_ALLOWED => 'VANITY_PHONE_NUMBER_NOT_ALLOWED',
        self::INVALID_COUNTRY_CODE => 'INVALID_COUNTRY_CODE',
        self::INVALID_CALL_CONVERSION_TYPE_ID => 'INVALID_CALL_CONVERSION_TYPE_ID',
        self::CUSTOMER_NOT_WHITELISTED_FOR_CALLTRACKING => 'CUSTOMER_NOT_WHITELISTED_FOR_CALLTRACKING',
        self::CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY => 'CALLTRACKING_NOT_SUPPORTED_FOR_COUNTRY',
        self::INVALID_APP_ID => 'INVALID_APP_ID',
        self::QUOTES_IN_REVIEW_EXTENSION_SNIPPET => 'QUOTES_IN_REVIEW_EXTENSION_SNIPPET',
        self::HYPHENS_IN_REVIEW_EXTENSION_SNIPPET => 'HYPHENS_IN_REVIEW_EXTENSION_SNIPPET',
        self::REVIEW_EXTENSION_SOURCE_NOT_ELIGIBLE => 'REVIEW_EXTENSION_SOURCE_NOT_ELIGIBLE',
        self::SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT => 'SOURCE_NAME_IN_REVIEW_EXTENSION_TEXT',
        self::MISSING_FIELD => 'MISSING_FIELD',
        self::INCONSISTENT_CURRENCY_CODES => 'INCONSISTENT_CURRENCY_CODES',
        self::PRICE_EXTENSION_HAS_DUPLICATED_HEADERS => 'PRICE_EXTENSION_HAS_DUPLICATED_HEADERS',
        self::PRICE_ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION => 'PRICE_ITEM_HAS_DUPLICATED_HEADER_AND_DESCRIPTION',
        self::PRICE_EXTENSION_HAS_TOO_FEW_ITEMS => 'PRICE_EXTENSION_HAS_TOO_FEW_ITEMS',
        self::PRICE_EXTENSION_HAS_TOO_MANY_ITEMS => 'PRICE_EXTENSION_HAS_TOO_MANY_ITEMS',
        self::UNSUPPORTED_VALUE => 'UNSUPPORTED_VALUE',
        self::INVALID_DEVICE_PREFERENCE => 'INVALID_DEVICE_PREFERENCE',
        self::INVALID_SCHEDULE_END => 'INVALID_SCHEDULE_END',
        self::DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE => 'DATE_TIME_MUST_BE_IN_ACCOUNT_TIME_ZONE',
        self::OVERLAPPING_SCHEDULES_NOT_ALLOWED => 'OVERLAPPING_SCHEDULES_NOT_ALLOWED',
        self::SCHEDULE_END_NOT_AFTER_START => 'SCHEDULE_END_NOT_AFTER_START',
        self::TOO_MANY_SCHEDULES_PER_DAY => 'TOO_MANY_SCHEDULES_PER_DAY',
        self::DUPLICATE_EXTENSION_FEED_ITEM_EDIT => 'DUPLICATE_EXTENSION_FEED_ITEM_EDIT',
        self::INVALID_SNIPPETS_HEADER => 'INVALID_SNIPPETS_HEADER',
        self::PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY => 'PHONE_NUMBER_NOT_SUPPORTED_WITH_CALLTRACKING_FOR_COUNTRY',
        self::CAMPAIGN_TARGETING_MISMATCH => 'CAMPAIGN_TARGETING_MISMATCH',
        self::CANNOT_OPERATE_ON_REMOVED_FEED => 'CANNOT_OPERATE_ON_REMOVED_FEED',
        self::EXTENSION_TYPE_REQUIRED => 'EXTENSION_TYPE_REQUIRED',
        self::INCOMPATIBLE_UNDERLYING_MATCHING_FUNCTION => 'INCOMPATIBLE_UNDERLYING_MATCHING_FUNCTION',
        self::START_DATE_AFTER_END_DATE => 'START_DATE_AFTER_END_DATE',
        self::INVALID_PRICE_FORMAT => 'INVALID_PRICE_FORMAT',
        self::PROMOTION_INVALID_TIME => 'PROMOTION_INVALID_TIME',
        self::PROMOTION_CANNOT_SET_PERCENT_DISCOUNT_AND_MONEY_DISCOUNT => 'PROMOTION_CANNOT_SET_PERCENT_DISCOUNT_AND_MONEY_DISCOUNT',
        self::PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNT => 'PROMOTION_CANNOT_SET_PROMOTION_CODE_AND_ORDERS_OVER_AMOUNT',
        self::TOO_MANY_DECIMAL_PLACES_SPECIFIED => 'TOO_MANY_DECIMAL_PLACES_SPECIFIED',
        self::INVALID_LANGUAGE_CODE => 'INVALID_LANGUAGE_CODE',
        self::UNSUPPORTED_LANGUAGE => 'UNSUPPORTED_LANGUAGE',
        self::CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED => 'CUSTOMER_CONSENT_FOR_CALL_RECORDING_REQUIRED',
        self::EXTENSION_SETTING_UPDATE_IS_A_NOOP => 'EXTENSION_SETTING_UPDATE_IS_A_NOOP',
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
class_alias(ExtensionSettingError::class, \Google\Ads\GoogleAds\V1\Errors\ExtensionSettingErrorEnum_ExtensionSettingError::class);

