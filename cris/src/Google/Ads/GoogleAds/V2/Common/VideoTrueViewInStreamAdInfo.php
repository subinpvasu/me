<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Representation of video TrueView in-stream ad format (ad shown during video
 * playback, often at beginning, which displays a skip button a few seconds into
 * the video).
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.VideoTrueViewInStreamAdInfo</code>
 */
class VideoTrueViewInStreamAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Label on the CTA (call-to-action) button taking the user to the video ad's
     * final URL.
     * Required for TrueView for action campaigns, optional otherwise.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue action_button_label = 1;</code>
     */
    protected $action_button_label = null;
    /**
     * Additional text displayed with the CTA (call-to-action) button to give
     * context and encourage clicking on the button.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue action_headline = 2;</code>
     */
    protected $action_headline = null;
    /**
     * The MediaFile resource name of the companion banner used with the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue companion_banner = 3;</code>
     */
    protected $companion_banner = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $action_button_label
     *           Label on the CTA (call-to-action) button taking the user to the video ad's
     *           final URL.
     *           Required for TrueView for action campaigns, optional otherwise.
     *     @type \Google\Protobuf\StringValue $action_headline
     *           Additional text displayed with the CTA (call-to-action) button to give
     *           context and encourage clicking on the button.
     *     @type \Google\Protobuf\StringValue $companion_banner
     *           The MediaFile resource name of the companion banner used with the ad.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * Label on the CTA (call-to-action) button taking the user to the video ad's
     * final URL.
     * Required for TrueView for action campaigns, optional otherwise.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue action_button_label = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getActionButtonLabel()
    {
        return $this->action_button_label;
    }

    /**
     * Returns the unboxed value from <code>getActionButtonLabel()</code>

     * Label on the CTA (call-to-action) button taking the user to the video ad's
     * final URL.
     * Required for TrueView for action campaigns, optional otherwise.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue action_button_label = 1;</code>
     * @return string|null
     */
    public function getActionButtonLabelUnwrapped()
    {
        return $this->readWrapperValue("action_button_label");
    }

    /**
     * Label on the CTA (call-to-action) button taking the user to the video ad's
     * final URL.
     * Required for TrueView for action campaigns, optional otherwise.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue action_button_label = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setActionButtonLabel($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->action_button_label = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Label on the CTA (call-to-action) button taking the user to the video ad's
     * final URL.
     * Required for TrueView for action campaigns, optional otherwise.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue action_button_label = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setActionButtonLabelUnwrapped($var)
    {
        $this->writeWrapperValue("action_button_label", $var);
        return $this;}

    /**
     * Additional text displayed with the CTA (call-to-action) button to give
     * context and encourage clicking on the button.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue action_headline = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getActionHeadline()
    {
        return $this->action_headline;
    }

    /**
     * Returns the unboxed value from <code>getActionHeadline()</code>

     * Additional text displayed with the CTA (call-to-action) button to give
     * context and encourage clicking on the button.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue action_headline = 2;</code>
     * @return string|null
     */
    public function getActionHeadlineUnwrapped()
    {
        return $this->readWrapperValue("action_headline");
    }

    /**
     * Additional text displayed with the CTA (call-to-action) button to give
     * context and encourage clicking on the button.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue action_headline = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setActionHeadline($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->action_headline = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Additional text displayed with the CTA (call-to-action) button to give
     * context and encourage clicking on the button.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue action_headline = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setActionHeadlineUnwrapped($var)
    {
        $this->writeWrapperValue("action_headline", $var);
        return $this;}

    /**
     * The MediaFile resource name of the companion banner used with the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue companion_banner = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCompanionBanner()
    {
        return $this->companion_banner;
    }

    /**
     * Returns the unboxed value from <code>getCompanionBanner()</code>

     * The MediaFile resource name of the companion banner used with the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue companion_banner = 3;</code>
     * @return string|null
     */
    public function getCompanionBannerUnwrapped()
    {
        return $this->readWrapperValue("companion_banner");
    }

    /**
     * The MediaFile resource name of the companion banner used with the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue companion_banner = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCompanionBanner($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->companion_banner = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The MediaFile resource name of the companion banner used with the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue companion_banner = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCompanionBannerUnwrapped($var)
    {
        $this->writeWrapperValue("companion_banner", $var);
        return $this;}

}

