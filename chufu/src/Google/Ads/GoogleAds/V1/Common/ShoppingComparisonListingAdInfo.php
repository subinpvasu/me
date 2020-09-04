<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Shopping Comparison Listing ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.ShoppingComparisonListingAdInfo</code>
 */
class ShoppingComparisonListingAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Headline of the ad. This field is required. Allowed length is between 25
     * and 45 characters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     */
    protected $headline = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $headline
     *           Headline of the ad. This field is required. Allowed length is between 25
     *           and 45 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * Headline of the ad. This field is required. Allowed length is between 25
     * and 45 characters.
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

     * Headline of the ad. This field is required. Allowed length is between 25
     * and 45 characters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     * @return string|null
     */
    public function getHeadlineUnwrapped()
    {
        return $this->readWrapperValue("headline");
    }

    /**
     * Headline of the ad. This field is required. Allowed length is between 25
     * and 45 characters.
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

     * Headline of the ad. This field is required. Allowed length is between 25
     * and 45 characters.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setHeadlineUnwrapped($var)
    {
        $this->writeWrapperValue("headline", $var);
        return $this;}

}

