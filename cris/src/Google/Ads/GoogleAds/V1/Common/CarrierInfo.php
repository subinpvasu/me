<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/criteria.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Carrier Criterion.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.CarrierInfo</code>
 */
class CarrierInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The Carrier constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue carrier_constant = 1;</code>
     */
    protected $carrier_constant = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $carrier_constant
     *           The Carrier constant resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The Carrier constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue carrier_constant = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCarrierConstant()
    {
        return $this->carrier_constant;
    }

    /**
     * Returns the unboxed value from <code>getCarrierConstant()</code>

     * The Carrier constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue carrier_constant = 1;</code>
     * @return string|null
     */
    public function getCarrierConstantUnwrapped()
    {
        return $this->readWrapperValue("carrier_constant");
    }

    /**
     * The Carrier constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue carrier_constant = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCarrierConstant($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->carrier_constant = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The Carrier constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue carrier_constant = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCarrierConstantUnwrapped($var)
    {
        $this->writeWrapperValue("carrier_constant", $var);
        return $this;}

}

