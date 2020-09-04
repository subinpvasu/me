<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Gmail teaser data. The teaser is a small header that acts as an invitation
 * to view the rest of the ad (the body).
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.GmailTeaser</code>
 */
class GmailTeaser extends \Google\Protobuf\Internal\Message
{
    /**
     * Headline of the teaser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     */
    protected $headline = null;
    /**
     * Description of the teaser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     */
    protected $description = null;
    /**
     * Business name of the advertiser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 3;</code>
     */
    protected $business_name = null;
    /**
     * The MediaFile resource name of the logo image. Valid image types are GIF,
     * JPEG and PNG. The minimum size is 144x144 pixels and the aspect ratio must
     * be 1:1 (+-1%).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue logo_image = 4;</code>
     */
    protected $logo_image = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $headline
     *           Headline of the teaser.
     *     @type \Google\Protobuf\StringValue $description
     *           Description of the teaser.
     *     @type \Google\Protobuf\StringValue $business_name
     *           Business name of the advertiser.
     *     @type \Google\Protobuf\StringValue $logo_image
     *           The MediaFile resource name of the logo image. Valid image types are GIF,
     *           JPEG and PNG. The minimum size is 144x144 pixels and the aspect ratio must
     *           be 1:1 (+-1%).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * Headline of the teaser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * Returns the unboxed value from <code>getHeadline()</code>

     * Headline of the teaser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     * @return string|null
     */
    public function getHeadlineUnwrapped()
    {
        return $this->readWrapperValue("headline");
    }

    /**
     * Headline of the teaser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setHeadline($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->headline = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Headline of the teaser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setHeadlineUnwrapped($var)
    {
        $this->writeWrapperValue("headline", $var);
        return $this;}

    /**
     * Description of the teaser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the unboxed value from <code>getDescription()</code>

     * Description of the teaser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @return string|null
     */
    public function getDescriptionUnwrapped()
    {
        return $this->readWrapperValue("description");
    }

    /**
     * Description of the teaser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->description = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Description of the teaser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDescriptionUnwrapped($var)
    {
        $this->writeWrapperValue("description", $var);
        return $this;}

    /**
     * Business name of the advertiser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getBusinessName()
    {
        return $this->business_name;
    }

    /**
     * Returns the unboxed value from <code>getBusinessName()</code>

     * Business name of the advertiser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 3;</code>
     * @return string|null
     */
    public function getBusinessNameUnwrapped()
    {
        return $this->readWrapperValue("business_name");
    }

    /**
     * Business name of the advertiser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 3;</code>
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

     * Business name of the advertiser.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue business_name = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setBusinessNameUnwrapped($var)
    {
        $this->writeWrapperValue("business_name", $var);
        return $this;}

    /**
     * The MediaFile resource name of the logo image. Valid image types are GIF,
     * JPEG and PNG. The minimum size is 144x144 pixels and the aspect ratio must
     * be 1:1 (+-1%).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue logo_image = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getLogoImage()
    {
        return $this->logo_image;
    }

    /**
     * Returns the unboxed value from <code>getLogoImage()</code>

     * The MediaFile resource name of the logo image. Valid image types are GIF,
     * JPEG and PNG. The minimum size is 144x144 pixels and the aspect ratio must
     * be 1:1 (+-1%).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue logo_image = 4;</code>
     * @return string|null
     */
    public function getLogoImageUnwrapped()
    {
        return $this->readWrapperValue("logo_image");
    }

    /**
     * The MediaFile resource name of the logo image. Valid image types are GIF,
     * JPEG and PNG. The minimum size is 144x144 pixels and the aspect ratio must
     * be 1:1 (+-1%).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue logo_image = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setLogoImage($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->logo_image = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The MediaFile resource name of the logo image. Valid image types are GIF,
     * JPEG and PNG. The minimum size is 144x144 pixels and the aspect ratio must
     * be 1:1 (+-1%).
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue logo_image = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setLogoImageUnwrapped($var)
    {
        $this->writeWrapperValue("logo_image", $var);
        return $this;}

}

