<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/criteria.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Country or Region the hotel is located in.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.HotelCountryRegionInfo</code>
 */
class HotelCountryRegionInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The Geo Target Constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_region_criterion = 1;</code>
     */
    protected $country_region_criterion = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $country_region_criterion
     *           The Geo Target Constant resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The Geo Target Constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_region_criterion = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCountryRegionCriterion()
    {
        return $this->country_region_criterion;
    }

    /**
     * Returns the unboxed value from <code>getCountryRegionCriterion()</code>

     * The Geo Target Constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_region_criterion = 1;</code>
     * @return string|null
     */
    public function getCountryRegionCriterionUnwrapped()
    {
        return $this->readWrapperValue("country_region_criterion");
    }

    /**
     * The Geo Target Constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_region_criterion = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCountryRegionCriterion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->country_region_criterion = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The Geo Target Constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue country_region_criterion = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCountryRegionCriterionUnwrapped($var)
    {
        $this->writeWrapperValue("country_region_criterion", $var);
        return $this;}

}

