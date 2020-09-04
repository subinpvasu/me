<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/campaign.proto

namespace Google\Ads\GoogleAds\V1\Resources\Campaign;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Campaign-level settings for hotel ads.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.Campaign.HotelSettingInfo</code>
 */
class HotelSettingInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The linked Hotel Center account.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value hotel_center_id = 1;</code>
     */
    protected $hotel_center_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $hotel_center_id
     *           The linked Hotel Center account.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\Campaign::initOnce();
        parent::__construct($data);
    }

    /**
     * The linked Hotel Center account.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value hotel_center_id = 1;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getHotelCenterId()
    {
        return $this->hotel_center_id;
    }

    /**
     * Returns the unboxed value from <code>getHotelCenterId()</code>

     * The linked Hotel Center account.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value hotel_center_id = 1;</code>
     * @return int|string|null
     */
    public function getHotelCenterIdUnwrapped()
    {
        return $this->readWrapperValue("hotel_center_id");
    }

    /**
     * The linked Hotel Center account.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value hotel_center_id = 1;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setHotelCenterId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->hotel_center_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * The linked Hotel Center account.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value hotel_center_id = 1;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setHotelCenterIdUnwrapped($var)
    {
        $this->writeWrapperValue("hotel_center_id", $var);
        return $this;}

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(HotelSettingInfo::class, \Google\Ads\GoogleAds\V1\Resources\Campaign_HotelSettingInfo::class);

