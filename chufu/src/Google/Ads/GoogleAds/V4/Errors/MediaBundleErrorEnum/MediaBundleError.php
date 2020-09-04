<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/errors/media_bundle_error.proto

namespace Google\Ads\GoogleAds\V4\Errors\MediaBundleErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible media bundle errors.
 *
 * Protobuf type <code>google.ads.googleads.v4.errors.MediaBundleErrorEnum.MediaBundleError</code>
 */
class MediaBundleError
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
     * There was a problem with the request.
     *
     * Generated from protobuf enum <code>BAD_REQUEST = 3;</code>
     */
    const BAD_REQUEST = 3;
    /**
     * HTML5 ads using DoubleClick Studio created ZIP files are not supported.
     *
     * Generated from protobuf enum <code>DOUBLECLICK_BUNDLE_NOT_ALLOWED = 4;</code>
     */
    const DOUBLECLICK_BUNDLE_NOT_ALLOWED = 4;
    /**
     * Cannot reference URL external to the media bundle.
     *
     * Generated from protobuf enum <code>EXTERNAL_URL_NOT_ALLOWED = 5;</code>
     */
    const EXTERNAL_URL_NOT_ALLOWED = 5;
    /**
     * Media bundle file is too large.
     *
     * Generated from protobuf enum <code>FILE_TOO_LARGE = 6;</code>
     */
    const FILE_TOO_LARGE = 6;
    /**
     * ZIP file from Google Web Designer is not published.
     *
     * Generated from protobuf enum <code>GOOGLE_WEB_DESIGNER_ZIP_FILE_NOT_PUBLISHED = 7;</code>
     */
    const GOOGLE_WEB_DESIGNER_ZIP_FILE_NOT_PUBLISHED = 7;
    /**
     * Input was invalid.
     *
     * Generated from protobuf enum <code>INVALID_INPUT = 8;</code>
     */
    const INVALID_INPUT = 8;
    /**
     * There was a problem with the media bundle.
     *
     * Generated from protobuf enum <code>INVALID_MEDIA_BUNDLE = 9;</code>
     */
    const INVALID_MEDIA_BUNDLE = 9;
    /**
     * There was a problem with one or more of the media bundle entries.
     *
     * Generated from protobuf enum <code>INVALID_MEDIA_BUNDLE_ENTRY = 10;</code>
     */
    const INVALID_MEDIA_BUNDLE_ENTRY = 10;
    /**
     * The media bundle contains a file with an unknown mime type
     *
     * Generated from protobuf enum <code>INVALID_MIME_TYPE = 11;</code>
     */
    const INVALID_MIME_TYPE = 11;
    /**
     * The media bundle contain an invalid asset path.
     *
     * Generated from protobuf enum <code>INVALID_PATH = 12;</code>
     */
    const INVALID_PATH = 12;
    /**
     * HTML5 ad is trying to reference an asset not in .ZIP file
     *
     * Generated from protobuf enum <code>INVALID_URL_REFERENCE = 13;</code>
     */
    const INVALID_URL_REFERENCE = 13;
    /**
     * Media data is too large.
     *
     * Generated from protobuf enum <code>MEDIA_DATA_TOO_LARGE = 14;</code>
     */
    const MEDIA_DATA_TOO_LARGE = 14;
    /**
     * The media bundle contains no primary entry.
     *
     * Generated from protobuf enum <code>MISSING_PRIMARY_MEDIA_BUNDLE_ENTRY = 15;</code>
     */
    const MISSING_PRIMARY_MEDIA_BUNDLE_ENTRY = 15;
    /**
     * There was an error on the server.
     *
     * Generated from protobuf enum <code>SERVER_ERROR = 16;</code>
     */
    const SERVER_ERROR = 16;
    /**
     * The image could not be stored.
     *
     * Generated from protobuf enum <code>STORAGE_ERROR = 17;</code>
     */
    const STORAGE_ERROR = 17;
    /**
     * Media bundle created with the Swiffy tool is not allowed.
     *
     * Generated from protobuf enum <code>SWIFFY_BUNDLE_NOT_ALLOWED = 18;</code>
     */
    const SWIFFY_BUNDLE_NOT_ALLOWED = 18;
    /**
     * The media bundle contains too many files.
     *
     * Generated from protobuf enum <code>TOO_MANY_FILES = 19;</code>
     */
    const TOO_MANY_FILES = 19;
    /**
     * The media bundle is not of legal dimensions.
     *
     * Generated from protobuf enum <code>UNEXPECTED_SIZE = 20;</code>
     */
    const UNEXPECTED_SIZE = 20;
    /**
     * Google Web Designer not created for "Google Ads" environment.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_GOOGLE_WEB_DESIGNER_ENVIRONMENT = 21;</code>
     */
    const UNSUPPORTED_GOOGLE_WEB_DESIGNER_ENVIRONMENT = 21;
    /**
     * Unsupported HTML5 feature in HTML5 asset.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_HTML5_FEATURE = 22;</code>
     */
    const UNSUPPORTED_HTML5_FEATURE = 22;
    /**
     * URL in HTML5 entry is not ssl compliant.
     *
     * Generated from protobuf enum <code>URL_IN_MEDIA_BUNDLE_NOT_SSL_COMPLIANT = 23;</code>
     */
    const URL_IN_MEDIA_BUNDLE_NOT_SSL_COMPLIANT = 23;
    /**
     * Custom exits not allowed in HTML5 entry.
     *
     * Generated from protobuf enum <code>CUSTOM_EXIT_NOT_ALLOWED = 24;</code>
     */
    const CUSTOM_EXIT_NOT_ALLOWED = 24;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::BAD_REQUEST => 'BAD_REQUEST',
        self::DOUBLECLICK_BUNDLE_NOT_ALLOWED => 'DOUBLECLICK_BUNDLE_NOT_ALLOWED',
        self::EXTERNAL_URL_NOT_ALLOWED => 'EXTERNAL_URL_NOT_ALLOWED',
        self::FILE_TOO_LARGE => 'FILE_TOO_LARGE',
        self::GOOGLE_WEB_DESIGNER_ZIP_FILE_NOT_PUBLISHED => 'GOOGLE_WEB_DESIGNER_ZIP_FILE_NOT_PUBLISHED',
        self::INVALID_INPUT => 'INVALID_INPUT',
        self::INVALID_MEDIA_BUNDLE => 'INVALID_MEDIA_BUNDLE',
        self::INVALID_MEDIA_BUNDLE_ENTRY => 'INVALID_MEDIA_BUNDLE_ENTRY',
        self::INVALID_MIME_TYPE => 'INVALID_MIME_TYPE',
        self::INVALID_PATH => 'INVALID_PATH',
        self::INVALID_URL_REFERENCE => 'INVALID_URL_REFERENCE',
        self::MEDIA_DATA_TOO_LARGE => 'MEDIA_DATA_TOO_LARGE',
        self::MISSING_PRIMARY_MEDIA_BUNDLE_ENTRY => 'MISSING_PRIMARY_MEDIA_BUNDLE_ENTRY',
        self::SERVER_ERROR => 'SERVER_ERROR',
        self::STORAGE_ERROR => 'STORAGE_ERROR',
        self::SWIFFY_BUNDLE_NOT_ALLOWED => 'SWIFFY_BUNDLE_NOT_ALLOWED',
        self::TOO_MANY_FILES => 'TOO_MANY_FILES',
        self::UNEXPECTED_SIZE => 'UNEXPECTED_SIZE',
        self::UNSUPPORTED_GOOGLE_WEB_DESIGNER_ENVIRONMENT => 'UNSUPPORTED_GOOGLE_WEB_DESIGNER_ENVIRONMENT',
        self::UNSUPPORTED_HTML5_FEATURE => 'UNSUPPORTED_HTML5_FEATURE',
        self::URL_IN_MEDIA_BUNDLE_NOT_SSL_COMPLIANT => 'URL_IN_MEDIA_BUNDLE_NOT_SSL_COMPLIANT',
        self::CUSTOM_EXIT_NOT_ALLOWED => 'CUSTOM_EXIT_NOT_ALLOWED',
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
class_alias(MediaBundleError::class, \Google\Ads\GoogleAds\V4\Errors\MediaBundleErrorEnum_MediaBundleError::class);

