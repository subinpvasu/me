<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/matching_function.proto

namespace Google\Ads\GoogleAds\V1\Common\Operand;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A function operand in a matching function.
 * Used to represent nested functions.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.Operand.FunctionOperand</code>
 */
class FunctionOperand extends \Google\Protobuf\Internal\Message
{
    /**
     * The matching function held in this operand.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.MatchingFunction matching_function = 1;</code>
     */
    protected $matching_function = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V1\Common\MatchingFunction $matching_function
     *           The matching function held in this operand.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\MatchingFunction::initOnce();
        parent::__construct($data);
    }

    /**
     * The matching function held in this operand.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.MatchingFunction matching_function = 1;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\MatchingFunction
     */
    public function getMatchingFunction()
    {
        return $this->matching_function;
    }

    /**
     * The matching function held in this operand.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.MatchingFunction matching_function = 1;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\MatchingFunction $var
     * @return $this
     */
    public function setMatchingFunction($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\MatchingFunction::class);
        $this->matching_function = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FunctionOperand::class, \Google\Ads\GoogleAds\V1\Common\Operand_FunctionOperand::class);

