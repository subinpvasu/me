<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/app_placeholder_field.proto

namespace Google\Ads\GoogleAds\V1\Enums\AppPlaceholderFieldEnum;

use UnexpectedValueException;

/**
 * Possible values for App placeholder fields.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.AppPlaceholderFieldEnum.AppPlaceholderField</code>
 */
class AppPlaceholderField
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
     * Data Type: INT64. The application store that the target application
     * belongs to. Valid values are: 1 = Apple iTunes Store; 2 = Google Play
     * Store.
     *
     * Generated from protobuf enum <code>STORE = 2;</code>
     */
    const STORE = 2;
    /**
     * Data Type: STRING. The store-specific ID for the target application.
     *
     * Generated from protobuf enum <code>ID = 3;</code>
     */
    const ID = 3;
    /**
     * Data Type: STRING. The visible text displayed when the link is rendered
     * in an ad.
     *
     * Generated from protobuf enum <code>LINK_TEXT = 4;</code>
     */
    const LINK_TEXT = 4;
    /**
     * Data Type: STRING. The destination URL of the in-app link.
     *
     * Generated from protobuf enum <code>URL = 5;</code>
     */
    const URL = 5;
    /**
     * Data Type: URL_LIST. Final URLs for the in-app link when using Upgraded
     * URLs.
     *
     * Generated from protobuf enum <code>FINAL_URLS = 6;</code>
     */
    const FINAL_URLS = 6;
    /**
     * Data Type: URL_LIST. Final Mobile URLs for the in-app link when using
     * Upgraded URLs.
     *
     * Generated from protobuf enum <code>FINAL_MOBILE_URLS = 7;</code>
     */
    const FINAL_MOBILE_URLS = 7;
    /**
     * Data Type: URL. Tracking template for the in-app link when using Upgraded
     * URLs.
     *
     * Generated from protobuf enum <code>TRACKING_URL = 8;</code>
     */
    const TRACKING_URL = 8;
    /**
     * Data Type: STRING. Final URL suffix for the in-app link when using
     * parallel tracking.
     *
     * Generated from protobuf enum <code>FINAL_URL_SUFFIX = 9;</code>
     */
    const FINAL_URL_SUFFIX = 9;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::STORE => 'STORE',
        self::ID => 'ID',
        self::LINK_TEXT => 'LINK_TEXT',
        self::URL => 'URL',
        self::FINAL_URLS => 'FINAL_URLS',
        self::FINAL_MOBILE_URLS => 'FINAL_MOBILE_URLS',
        self::TRACKING_URL => 'TRACKING_URL',
        self::FINAL_URL_SUFFIX => 'FINAL_URL_SUFFIX',
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
class_alias(AppPlaceholderField::class, \Google\Ads\GoogleAds\V1\Enums\AppPlaceholderFieldEnum_AppPlaceholderField::class);

