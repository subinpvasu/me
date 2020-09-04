<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/policy.proto

namespace Google\Ads\GoogleAds\V1\Common\PolicyTopicConstraint;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list of countries where a resource's serving is constrained.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.PolicyTopicConstraint.CountryConstraintList</code>
 */
class CountryConstraintList extends \Google\Protobuf\Internal\Message
{
    /**
     * Total number of countries targeted by the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value total_targeted_countries = 1;</code>
     */
    protected $total_targeted_countries = null;
    /**
     * Countries in which serving is restricted.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.PolicyTopicConstraint.CountryConstraint countries = 2;</code>
     */
    private $countries;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int32Value $total_targeted_countries
     *           Total number of countries targeted by the resource.
     *     @type \Google\Ads\GoogleAds\V1\Common\PolicyTopicConstraint\CountryConstraint[]|\Google\Protobuf\Internal\RepeatedField $countries
     *           Countries in which serving is restricted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\Policy::initOnce();
        parent::__construct($data);
    }

    /**
     * Total number of countries targeted by the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value total_targeted_countries = 1;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getTotalTargetedCountries()
    {
        return $this->total_targeted_countries;
    }

    /**
     * Returns the unboxed value from <code>getTotalTargetedCountries()</code>

     * Total number of countries targeted by the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value total_targeted_countries = 1;</code>
     * @return int|null
     */
    public function getTotalTargetedCountriesUnwrapped()
    {
        return $this->readWrapperValue("total_targeted_countries");
    }

    /**
     * Total number of countries targeted by the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value total_targeted_countries = 1;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setTotalTargetedCountries($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->total_targeted_countries = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Total number of countries targeted by the resource.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value total_targeted_countries = 1;</code>
     * @param int|null $var
     * @return $this
     */
    public function setTotalTargetedCountriesUnwrapped($var)
    {
        $this->writeWrapperValue("total_targeted_countries", $var);
        return $this;}

    /**
     * Countries in which serving is restricted.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.PolicyTopicConstraint.CountryConstraint countries = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * Countries in which serving is restricted.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.common.PolicyTopicConstraint.CountryConstraint countries = 2;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\PolicyTopicConstraint\CountryConstraint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCountries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V1\Common\PolicyTopicConstraint\CountryConstraint::class);
        $this->countries = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CountryConstraintList::class, \Google\Ads\GoogleAds\V1\Common\PolicyTopicConstraint_CountryConstraintList::class);

