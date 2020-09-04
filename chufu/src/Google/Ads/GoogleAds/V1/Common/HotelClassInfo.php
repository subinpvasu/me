<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/criteria.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Class of the hotel as a number of stars 1 to 5.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.HotelClassInfo</code>
 */
class HotelClassInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Long value of the hotel class.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value value = 1;</code>
     */
    protected $value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $value
     *           Long value of the hotel class.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Long value of the hotel class.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value value = 1;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Returns the unboxed value from <code>getValue()</code>

     * Long value of the hotel class.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value value = 1;</code>
     * @return int|string|null
     */
    public function getValueUnwrapped()
    {
        return $this->readWrapperValue("value");
    }

    /**
     * Long value of the hotel class.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value value = 1;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->value = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Long value of the hotel class.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value value = 1;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setValueUnwrapped($var)
    {
        $this->writeWrapperValue("value", $var);
        return $this;}

}

