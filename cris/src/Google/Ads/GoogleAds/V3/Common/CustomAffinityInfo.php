<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/common/criteria.proto

namespace Google\Ads\GoogleAds\V3\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A custom affinity criterion.
 * A criterion of this type is only targetable.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.common.CustomAffinityInfo</code>
 */
class CustomAffinityInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The CustomInterest resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue custom_affinity = 1;</code>
     */
    protected $custom_affinity = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $custom_affinity
     *           The CustomInterest resource name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * The CustomInterest resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue custom_affinity = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCustomAffinity()
    {
        return $this->custom_affinity;
    }

    /**
     * Returns the unboxed value from <code>getCustomAffinity()</code>

     * The CustomInterest resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue custom_affinity = 1;</code>
     * @return string|null
     */
    public function getCustomAffinityUnwrapped()
    {
        return $this->readWrapperValue("custom_affinity");
    }

    /**
     * The CustomInterest resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue custom_affinity = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCustomAffinity($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->custom_affinity = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The CustomInterest resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue custom_affinity = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCustomAffinityUnwrapped($var)
    {
        $this->writeWrapperValue("custom_affinity", $var);
        return $this;}

}

