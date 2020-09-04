<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/common/segments.proto

namespace Google\Ads\GoogleAds\V2\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Keyword criterion segment.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.common.Keyword</code>
 */
class Keyword extends \Google\Protobuf\Internal\Message
{
    /**
     * The AdGroupCriterion resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 1;</code>
     */
    protected $ad_group_criterion = null;
    /**
     * Keyword info.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.KeywordInfo info = 2;</code>
     */
    protected $info = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $ad_group_criterion
     *           The AdGroupCriterion resource name.
     *     @type \Google\Ads\GoogleAds\V2\Common\KeywordInfo $info
     *           Keyword info.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Common\Segments::initOnce();
        parent::__construct($data);
    }

    /**
     * The AdGroupCriterion resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroupCriterion()
    {
        return $this->ad_group_criterion;
    }

    /**
     * Returns the unboxed value from <code>getAdGroupCriterion()</code>

     * The AdGroupCriterion resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 1;</code>
     * @return string|null
     */
    public function getAdGroupCriterionUnwrapped()
    {
        return $this->readWrapperValue("ad_group_criterion");
    }

    /**
     * The AdGroupCriterion resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroupCriterion($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group_criterion = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The AdGroupCriterion resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_criterion = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupCriterionUnwrapped($var)
    {
        $this->writeWrapperValue("ad_group_criterion", $var);
        return $this;}

    /**
     * Keyword info.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.KeywordInfo info = 2;</code>
     * @return \Google\Ads\GoogleAds\V2\Common\KeywordInfo
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Keyword info.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.common.KeywordInfo info = 2;</code>
     * @param \Google\Ads\GoogleAds\V2\Common\KeywordInfo $var
     * @return $this
     */
    public function setInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Common\KeywordInfo::class);
        $this->info = $var;

        return $this;
    }

}

