<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/extensions.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An extension that users can click on to send a text message to the
 * advertiser.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.TextMessageFeedItem</code>
 */
class TextMessageFeedItem extends \Google\Protobuf\Internal\Message
{
    /**
     * The business name to prepend to the message text.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 1;</code>
     */
    protected $business_name = null;
    /**
     * Uppercase two-letter country code of the advertiser's phone number.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 2;</code>
     */
    protected $country_code = null;
    /**
     * The advertiser's phone number the message will be sent to. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue phone_number = 3;</code>
     */
    protected $phone_number = null;
    /**
     * The text to show in the ad.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 4;</code>
     */
    protected $text = null;
    /**
     * The message text populated in the messaging app.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue extension_text = 5;</code>
     */
    protected $extension_text = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $business_name
     *           The business name to prepend to the message text.
     *           This field is required.
     *     @type \Google\Protobuf\StringValue $country_code
     *           Uppercase two-letter country code of the advertiser's phone number.
     *           This field is required.
     *     @type \Google\Protobuf\StringValue $phone_number
     *           The advertiser's phone number the message will be sent to. Required.
     *     @type \Google\Protobuf\StringValue $text
     *           The text to show in the ad.
     *           This field is required.
     *     @type \Google\Protobuf\StringValue $extension_text
     *           The message text populated in the messaging app.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Common\Extensions::initOnce();
        parent::__construct($data);
    }

    /**
     * The business name to prepend to the message text.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getBusinessName()
    {
        return $this->business_name;
    }

    /**
     * Returns the unboxed value from <code>getBusinessName()</code>

     * The business name to prepend to the message text.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 1;</code>
     * @return string|null
     */
    public function getBusinessNameUnwrapped()
    {
        return $this->readWrapperValue("business_name");
    }

    /**
     * The business name to prepend to the message text.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setBusinessName($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->business_name = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The business name to prepend to the message text.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setBusinessNameUnwrapped($var)
    {
        $this->writeWrapperValue("business_name", $var);
        return $this;}

    /**
     * Uppercase two-letter country code of the advertiser's phone number.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCountryCode()
    {
        return $this->country_code;
    }

    /**
     * Returns the unboxed value from <code>getCountryCode()</code>

     * Uppercase two-letter country code of the advertiser's phone number.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 2;</code>
     * @return string|null
     */
    public function getCountryCodeUnwrapped()
    {
        return $this->readWrapperValue("country_code");
    }

    /**
     * Uppercase two-letter country code of the advertiser's phone number.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCountryCode($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->country_code = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Uppercase two-letter country code of the advertiser's phone number.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_code = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCountryCodeUnwrapped($var)
    {
        $this->writeWrapperValue("country_code", $var);
        return $this;}

    /**
     * The advertiser's phone number the message will be sent to. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue phone_number = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPhoneNumber()
    {
        return $this->phone_number;
    }

    /**
     * Returns the unboxed value from <code>getPhoneNumber()</code>

     * The advertiser's phone number the message will be sent to. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue phone_number = 3;</code>
     * @return string|null
     */
    public function getPhoneNumberUnwrapped()
    {
        return $this->readWrapperValue("phone_number");
    }

    /**
     * The advertiser's phone number the message will be sent to. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue phone_number = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPhoneNumber($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->phone_number = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The advertiser's phone number the message will be sent to. Required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue phone_number = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPhoneNumberUnwrapped($var)
    {
        $this->writeWrapperValue("phone_number", $var);
        return $this;}

    /**
     * The text to show in the ad.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Returns the unboxed value from <code>getText()</code>

     * The text to show in the ad.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 4;</code>
     * @return string|null
     */
    public function getTextUnwrapped()
    {
        return $this->readWrapperValue("text");
    }

    /**
     * The text to show in the ad.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->text = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The text to show in the ad.
     * This field is required.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue text = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setTextUnwrapped($var)
    {
        $this->writeWrapperValue("text", $var);
        return $this;}

    /**
     * The message text populated in the messaging app.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue extension_text = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getExtensionText()
    {
        return $this->extension_text;
    }

    /**
     * Returns the unboxed value from <code>getExtensionText()</code>

     * The message text populated in the messaging app.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue extension_text = 5;</code>
     * @return string|null
     */
    public function getExtensionTextUnwrapped()
    {
        return $this->readWrapperValue("extension_text");
    }

    /**
     * The message text populated in the messaging app.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue extension_text = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setExtensionText($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->extension_text = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The message text populated in the messaging app.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue extension_text = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setExtensionTextUnwrapped($var)
    {
        $this->writeWrapperValue("extension_text", $var);
        return $this;}

}

