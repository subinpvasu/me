<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/click_type.proto

namespace Google\Ads\GoogleAds\V1\Enums\ClickTypeEnum;

use UnexpectedValueException;

/**
 * Enumerates Google Ads click types.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.ClickTypeEnum.ClickType</code>
 */
class ClickType
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
     * App engagement ad deep link.
     *
     * Generated from protobuf enum <code>APP_DEEPLINK = 2;</code>
     */
    const APP_DEEPLINK = 2;
    /**
     * Breadcrumbs.
     *
     * Generated from protobuf enum <code>BREADCRUMBS = 3;</code>
     */
    const BREADCRUMBS = 3;
    /**
     * Broadband Plan.
     *
     * Generated from protobuf enum <code>BROADBAND_PLAN = 4;</code>
     */
    const BROADBAND_PLAN = 4;
    /**
     * Manually dialed phone calls.
     *
     * Generated from protobuf enum <code>CALL_TRACKING = 5;</code>
     */
    const CALL_TRACKING = 5;
    /**
     * Phone calls.
     *
     * Generated from protobuf enum <code>CALLS = 6;</code>
     */
    const CALLS = 6;
    /**
     * Click on engagement ad.
     *
     * Generated from protobuf enum <code>CLICK_ON_ENGAGEMENT_AD = 7;</code>
     */
    const CLICK_ON_ENGAGEMENT_AD = 7;
    /**
     * Driving direction.
     *
     * Generated from protobuf enum <code>GET_DIRECTIONS = 8;</code>
     */
    const GET_DIRECTIONS = 8;
    /**
     * Get location details.
     *
     * Generated from protobuf enum <code>LOCATION_EXPANSION = 9;</code>
     */
    const LOCATION_EXPANSION = 9;
    /**
     * Call.
     *
     * Generated from protobuf enum <code>LOCATION_FORMAT_CALL = 10;</code>
     */
    const LOCATION_FORMAT_CALL = 10;
    /**
     * Directions.
     *
     * Generated from protobuf enum <code>LOCATION_FORMAT_DIRECTIONS = 11;</code>
     */
    const LOCATION_FORMAT_DIRECTIONS = 11;
    /**
     * Image(s).
     *
     * Generated from protobuf enum <code>LOCATION_FORMAT_IMAGE = 12;</code>
     */
    const LOCATION_FORMAT_IMAGE = 12;
    /**
     * Go to landing page.
     *
     * Generated from protobuf enum <code>LOCATION_FORMAT_LANDING_PAGE = 13;</code>
     */
    const LOCATION_FORMAT_LANDING_PAGE = 13;
    /**
     * Map.
     *
     * Generated from protobuf enum <code>LOCATION_FORMAT_MAP = 14;</code>
     */
    const LOCATION_FORMAT_MAP = 14;
    /**
     * Go to store info.
     *
     * Generated from protobuf enum <code>LOCATION_FORMAT_STORE_INFO = 15;</code>
     */
    const LOCATION_FORMAT_STORE_INFO = 15;
    /**
     * Text.
     *
     * Generated from protobuf enum <code>LOCATION_FORMAT_TEXT = 16;</code>
     */
    const LOCATION_FORMAT_TEXT = 16;
    /**
     * Mobile phone calls.
     *
     * Generated from protobuf enum <code>MOBILE_CALL_TRACKING = 17;</code>
     */
    const MOBILE_CALL_TRACKING = 17;
    /**
     * Print offer.
     *
     * Generated from protobuf enum <code>OFFER_PRINTS = 18;</code>
     */
    const OFFER_PRINTS = 18;
    /**
     * Other.
     *
     * Generated from protobuf enum <code>OTHER = 19;</code>
     */
    const OTHER = 19;
    /**
     * Product plusbox offer.
     *
     * Generated from protobuf enum <code>PRODUCT_EXTENSION_CLICKS = 20;</code>
     */
    const PRODUCT_EXTENSION_CLICKS = 20;
    /**
     * Shopping - Product - Online.
     *
     * Generated from protobuf enum <code>PRODUCT_LISTING_AD_CLICKS = 21;</code>
     */
    const PRODUCT_LISTING_AD_CLICKS = 21;
    /**
     * Sitelink.
     *
     * Generated from protobuf enum <code>SITELINKS = 22;</code>
     */
    const SITELINKS = 22;
    /**
     * Show nearby locations.
     *
     * Generated from protobuf enum <code>STORE_LOCATOR = 23;</code>
     */
    const STORE_LOCATOR = 23;
    /**
     * Headline.
     *
     * Generated from protobuf enum <code>URL_CLICKS = 25;</code>
     */
    const URL_CLICKS = 25;
    /**
     * App store.
     *
     * Generated from protobuf enum <code>VIDEO_APP_STORE_CLICKS = 26;</code>
     */
    const VIDEO_APP_STORE_CLICKS = 26;
    /**
     * Call-to-Action overlay.
     *
     * Generated from protobuf enum <code>VIDEO_CALL_TO_ACTION_CLICKS = 27;</code>
     */
    const VIDEO_CALL_TO_ACTION_CLICKS = 27;
    /**
     * Cards.
     *
     * Generated from protobuf enum <code>VIDEO_CARD_ACTION_HEADLINE_CLICKS = 28;</code>
     */
    const VIDEO_CARD_ACTION_HEADLINE_CLICKS = 28;
    /**
     * End cap.
     *
     * Generated from protobuf enum <code>VIDEO_END_CAP_CLICKS = 29;</code>
     */
    const VIDEO_END_CAP_CLICKS = 29;
    /**
     * Website.
     *
     * Generated from protobuf enum <code>VIDEO_WEBSITE_CLICKS = 30;</code>
     */
    const VIDEO_WEBSITE_CLICKS = 30;
    /**
     * Visual Sitelinks.
     *
     * Generated from protobuf enum <code>VISUAL_SITELINKS = 31;</code>
     */
    const VISUAL_SITELINKS = 31;
    /**
     * Wireless Plan.
     *
     * Generated from protobuf enum <code>WIRELESS_PLAN = 32;</code>
     */
    const WIRELESS_PLAN = 32;
    /**
     * Shopping - Product - Local.
     *
     * Generated from protobuf enum <code>PRODUCT_LISTING_AD_LOCAL = 33;</code>
     */
    const PRODUCT_LISTING_AD_LOCAL = 33;
    /**
     * Shopping - Product - MultiChannel Local.
     *
     * Generated from protobuf enum <code>PRODUCT_LISTING_AD_MULTICHANNEL_LOCAL = 34;</code>
     */
    const PRODUCT_LISTING_AD_MULTICHANNEL_LOCAL = 34;
    /**
     * Shopping - Product - MultiChannel Online.
     *
     * Generated from protobuf enum <code>PRODUCT_LISTING_AD_MULTICHANNEL_ONLINE = 35;</code>
     */
    const PRODUCT_LISTING_AD_MULTICHANNEL_ONLINE = 35;
    /**
     * Shopping - Product - Coupon.
     *
     * Generated from protobuf enum <code>PRODUCT_LISTING_ADS_COUPON = 36;</code>
     */
    const PRODUCT_LISTING_ADS_COUPON = 36;
    /**
     * Shopping - Product - Sell on Google.
     *
     * Generated from protobuf enum <code>PRODUCT_LISTING_AD_TRANSACTABLE = 37;</code>
     */
    const PRODUCT_LISTING_AD_TRANSACTABLE = 37;
    /**
     * Shopping - Product - App engagement ad deep link.
     *
     * Generated from protobuf enum <code>PRODUCT_AD_APP_DEEPLINK = 38;</code>
     */
    const PRODUCT_AD_APP_DEEPLINK = 38;
    /**
     * Shopping - Showcase - Category.
     *
     * Generated from protobuf enum <code>SHOWCASE_AD_CATEGORY_LINK = 39;</code>
     */
    const SHOWCASE_AD_CATEGORY_LINK = 39;
    /**
     * Shopping - Showcase - Local storefront.
     *
     * Generated from protobuf enum <code>SHOWCASE_AD_LOCAL_STOREFRONT_LINK = 40;</code>
     */
    const SHOWCASE_AD_LOCAL_STOREFRONT_LINK = 40;
    /**
     * Shopping - Showcase - Online product.
     *
     * Generated from protobuf enum <code>SHOWCASE_AD_ONLINE_PRODUCT_LINK = 42;</code>
     */
    const SHOWCASE_AD_ONLINE_PRODUCT_LINK = 42;
    /**
     * Shopping - Showcase - Local product.
     *
     * Generated from protobuf enum <code>SHOWCASE_AD_LOCAL_PRODUCT_LINK = 43;</code>
     */
    const SHOWCASE_AD_LOCAL_PRODUCT_LINK = 43;
    /**
     * Promotion Extension.
     *
     * Generated from protobuf enum <code>PROMOTION_EXTENSION = 44;</code>
     */
    const PROMOTION_EXTENSION = 44;
    /**
     * Ad Headline.
     *
     * Generated from protobuf enum <code>SWIPEABLE_GALLERY_AD_HEADLINE = 45;</code>
     */
    const SWIPEABLE_GALLERY_AD_HEADLINE = 45;
    /**
     * Swipes.
     *
     * Generated from protobuf enum <code>SWIPEABLE_GALLERY_AD_SWIPES = 46;</code>
     */
    const SWIPEABLE_GALLERY_AD_SWIPES = 46;
    /**
     * See More.
     *
     * Generated from protobuf enum <code>SWIPEABLE_GALLERY_AD_SEE_MORE = 47;</code>
     */
    const SWIPEABLE_GALLERY_AD_SEE_MORE = 47;
    /**
     * Sitelink 1.
     *
     * Generated from protobuf enum <code>SWIPEABLE_GALLERY_AD_SITELINK_ONE = 48;</code>
     */
    const SWIPEABLE_GALLERY_AD_SITELINK_ONE = 48;
    /**
     * Sitelink 2.
     *
     * Generated from protobuf enum <code>SWIPEABLE_GALLERY_AD_SITELINK_TWO = 49;</code>
     */
    const SWIPEABLE_GALLERY_AD_SITELINK_TWO = 49;
    /**
     * Sitelink 3.
     *
     * Generated from protobuf enum <code>SWIPEABLE_GALLERY_AD_SITELINK_THREE = 50;</code>
     */
    const SWIPEABLE_GALLERY_AD_SITELINK_THREE = 50;
    /**
     * Sitelink 4.
     *
     * Generated from protobuf enum <code>SWIPEABLE_GALLERY_AD_SITELINK_FOUR = 51;</code>
     */
    const SWIPEABLE_GALLERY_AD_SITELINK_FOUR = 51;
    /**
     * Sitelink 5.
     *
     * Generated from protobuf enum <code>SWIPEABLE_GALLERY_AD_SITELINK_FIVE = 52;</code>
     */
    const SWIPEABLE_GALLERY_AD_SITELINK_FIVE = 52;
    /**
     * Hotel price.
     *
     * Generated from protobuf enum <code>HOTEL_PRICE = 53;</code>
     */
    const HOTEL_PRICE = 53;
    /**
     * Price Extension.
     *
     * Generated from protobuf enum <code>PRICE_EXTENSION = 54;</code>
     */
    const PRICE_EXTENSION = 54;
    /**
     * Book on Google hotel room selection.
     *
     * Generated from protobuf enum <code>HOTEL_BOOK_ON_GOOGLE_ROOM_SELECTION = 55;</code>
     */
    const HOTEL_BOOK_ON_GOOGLE_ROOM_SELECTION = 55;
    /**
     * Shopping - Comparison Listing.
     *
     * Generated from protobuf enum <code>SHOPPING_COMPARISON_LISTING = 56;</code>
     */
    const SHOPPING_COMPARISON_LISTING = 56;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::APP_DEEPLINK => 'APP_DEEPLINK',
        self::BREADCRUMBS => 'BREADCRUMBS',
        self::BROADBAND_PLAN => 'BROADBAND_PLAN',
        self::CALL_TRACKING => 'CALL_TRACKING',
        self::CALLS => 'CALLS',
        self::CLICK_ON_ENGAGEMENT_AD => 'CLICK_ON_ENGAGEMENT_AD',
        self::GET_DIRECTIONS => 'GET_DIRECTIONS',
        self::LOCATION_EXPANSION => 'LOCATION_EXPANSION',
        self::LOCATION_FORMAT_CALL => 'LOCATION_FORMAT_CALL',
        self::LOCATION_FORMAT_DIRECTIONS => 'LOCATION_FORMAT_DIRECTIONS',
        self::LOCATION_FORMAT_IMAGE => 'LOCATION_FORMAT_IMAGE',
        self::LOCATION_FORMAT_LANDING_PAGE => 'LOCATION_FORMAT_LANDING_PAGE',
        self::LOCATION_FORMAT_MAP => 'LOCATION_FORMAT_MAP',
        self::LOCATION_FORMAT_STORE_INFO => 'LOCATION_FORMAT_STORE_INFO',
        self::LOCATION_FORMAT_TEXT => 'LOCATION_FORMAT_TEXT',
        self::MOBILE_CALL_TRACKING => 'MOBILE_CALL_TRACKING',
        self::OFFER_PRINTS => 'OFFER_PRINTS',
        self::OTHER => 'OTHER',
        self::PRODUCT_EXTENSION_CLICKS => 'PRODUCT_EXTENSION_CLICKS',
        self::PRODUCT_LISTING_AD_CLICKS => 'PRODUCT_LISTING_AD_CLICKS',
        self::SITELINKS => 'SITELINKS',
        self::STORE_LOCATOR => 'STORE_LOCATOR',
        self::URL_CLICKS => 'URL_CLICKS',
        self::VIDEO_APP_STORE_CLICKS => 'VIDEO_APP_STORE_CLICKS',
        self::VIDEO_CALL_TO_ACTION_CLICKS => 'VIDEO_CALL_TO_ACTION_CLICKS',
        self::VIDEO_CARD_ACTION_HEADLINE_CLICKS => 'VIDEO_CARD_ACTION_HEADLINE_CLICKS',
        self::VIDEO_END_CAP_CLICKS => 'VIDEO_END_CAP_CLICKS',
        self::VIDEO_WEBSITE_CLICKS => 'VIDEO_WEBSITE_CLICKS',
        self::VISUAL_SITELINKS => 'VISUAL_SITELINKS',
        self::WIRELESS_PLAN => 'WIRELESS_PLAN',
        self::PRODUCT_LISTING_AD_LOCAL => 'PRODUCT_LISTING_AD_LOCAL',
        self::PRODUCT_LISTING_AD_MULTICHANNEL_LOCAL => 'PRODUCT_LISTING_AD_MULTICHANNEL_LOCAL',
        self::PRODUCT_LISTING_AD_MULTICHANNEL_ONLINE => 'PRODUCT_LISTING_AD_MULTICHANNEL_ONLINE',
        self::PRODUCT_LISTING_ADS_COUPON => 'PRODUCT_LISTING_ADS_COUPON',
        self::PRODUCT_LISTING_AD_TRANSACTABLE => 'PRODUCT_LISTING_AD_TRANSACTABLE',
        self::PRODUCT_AD_APP_DEEPLINK => 'PRODUCT_AD_APP_DEEPLINK',
        self::SHOWCASE_AD_CATEGORY_LINK => 'SHOWCASE_AD_CATEGORY_LINK',
        self::SHOWCASE_AD_LOCAL_STOREFRONT_LINK => 'SHOWCASE_AD_LOCAL_STOREFRONT_LINK',
        self::SHOWCASE_AD_ONLINE_PRODUCT_LINK => 'SHOWCASE_AD_ONLINE_PRODUCT_LINK',
        self::SHOWCASE_AD_LOCAL_PRODUCT_LINK => 'SHOWCASE_AD_LOCAL_PRODUCT_LINK',
        self::PROMOTION_EXTENSION => 'PROMOTION_EXTENSION',
        self::SWIPEABLE_GALLERY_AD_HEADLINE => 'SWIPEABLE_GALLERY_AD_HEADLINE',
        self::SWIPEABLE_GALLERY_AD_SWIPES => 'SWIPEABLE_GALLERY_AD_SWIPES',
        self::SWIPEABLE_GALLERY_AD_SEE_MORE => 'SWIPEABLE_GALLERY_AD_SEE_MORE',
        self::SWIPEABLE_GALLERY_AD_SITELINK_ONE => 'SWIPEABLE_GALLERY_AD_SITELINK_ONE',
        self::SWIPEABLE_GALLERY_AD_SITELINK_TWO => 'SWIPEABLE_GALLERY_AD_SITELINK_TWO',
        self::SWIPEABLE_GALLERY_AD_SITELINK_THREE => 'SWIPEABLE_GALLERY_AD_SITELINK_THREE',
        self::SWIPEABLE_GALLERY_AD_SITELINK_FOUR => 'SWIPEABLE_GALLERY_AD_SITELINK_FOUR',
        self::SWIPEABLE_GALLERY_AD_SITELINK_FIVE => 'SWIPEABLE_GALLERY_AD_SITELINK_FIVE',
        self::HOTEL_PRICE => 'HOTEL_PRICE',
        self::PRICE_EXTENSION => 'PRICE_EXTENSION',
        self::HOTEL_BOOK_ON_GOOGLE_ROOM_SELECTION => 'HOTEL_BOOK_ON_GOOGLE_ROOM_SELECTION',
        self::SHOPPING_COMPARISON_LISTING => 'SHOPPING_COMPARISON_LISTING',
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
class_alias(ClickType::class, \Google\Ads\GoogleAds\V1\Enums\ClickTypeEnum_ClickType::class);

