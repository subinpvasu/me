<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/feed_item_target.proto

namespace Google\Ads\GoogleAds\V4\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A feed item target.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.resources.FeedItemTarget</code>
 */
class FeedItemTarget extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the feed item target.
     * Feed item target resource names have the form:
     * `customers/{customer_id}/feedItemTargets/{feed_id}~{feed_item_id}~{feed_item_target_type}~{feed_item_target_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The feed item to which this feed item target belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_item = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $feed_item = null;
    /**
     * Output only. The target type of this feed item target. This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.FeedItemTargetTypeEnum.FeedItemTargetType feed_item_target_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $feed_item_target_type = 0;
    /**
     * Output only. The ID of the targeted resource. This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value feed_item_target_id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $feed_item_target_id = null;
    /**
     * Output only. Status of the feed item target.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.FeedItemTargetStatusEnum.FeedItemTargetStatus status = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $status = 0;
    protected $target;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the feed item target.
     *           Feed item target resource names have the form:
     *           `customers/{customer_id}/feedItemTargets/{feed_id}~{feed_item_id}~{feed_item_target_type}~{feed_item_target_id}`
     *     @type \Google\Protobuf\StringValue $feed_item
     *           Immutable. The feed item to which this feed item target belongs.
     *     @type int $feed_item_target_type
     *           Output only. The target type of this feed item target. This field is read-only.
     *     @type \Google\Protobuf\Int64Value $feed_item_target_id
     *           Output only. The ID of the targeted resource. This field is read-only.
     *     @type int $status
     *           Output only. Status of the feed item target.
     *           This field is read-only.
     *     @type \Google\Protobuf\StringValue $campaign
     *           Immutable. The targeted campaign.
     *     @type \Google\Protobuf\StringValue $ad_group
     *           Immutable. The targeted ad group.
     *     @type \Google\Ads\GoogleAds\V4\Common\KeywordInfo $keyword
     *           Immutable. The targeted keyword.
     *     @type \Google\Protobuf\StringValue $geo_target_constant
     *           Immutable. The targeted geo target constant resource name.
     *     @type int $device
     *           Immutable. The targeted device.
     *     @type \Google\Ads\GoogleAds\V4\Common\AdScheduleInfo $ad_schedule
     *           Immutable. The targeted schedule.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Resources\FeedItemTarget::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the feed item target.
     * Feed item target resource names have the form:
     * `customers/{customer_id}/feedItemTargets/{feed_id}~{feed_item_id}~{feed_item_target_type}~{feed_item_target_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the feed item target.
     * Feed item target resource names have the form:
     * `customers/{customer_id}/feedItemTargets/{feed_id}~{feed_item_id}~{feed_item_target_type}~{feed_item_target_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * Immutable. The feed item to which this feed item target belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_item = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getFeedItem()
    {
        return $this->feed_item;
    }

    /**
     * Returns the unboxed value from <code>getFeedItem()</code>

     * Immutable. The feed item to which this feed item target belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_item = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getFeedItemUnwrapped()
    {
        return $this->readWrapperValue("feed_item");
    }

    /**
     * Immutable. The feed item to which this feed item target belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_item = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setFeedItem($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->feed_item = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Immutable. The feed item to which this feed item target belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue feed_item = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setFeedItemUnwrapped($var)
    {
        $this->writeWrapperValue("feed_item", $var);
        return $this;}

    /**
     * Output only. The target type of this feed item target. This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.FeedItemTargetTypeEnum.FeedItemTargetType feed_item_target_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getFeedItemTargetType()
    {
        return $this->feed_item_target_type;
    }

    /**
     * Output only. The target type of this feed item target. This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.FeedItemTargetTypeEnum.FeedItemTargetType feed_item_target_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setFeedItemTargetType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\FeedItemTargetTypeEnum_FeedItemTargetType::class);
        $this->feed_item_target_type = $var;

        return $this;
    }

    /**
     * Output only. The ID of the targeted resource. This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value feed_item_target_id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getFeedItemTargetId()
    {
        return $this->feed_item_target_id;
    }

    /**
     * Returns the unboxed value from <code>getFeedItemTargetId()</code>

     * Output only. The ID of the targeted resource. This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value feed_item_target_id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getFeedItemTargetIdUnwrapped()
    {
        return $this->readWrapperValue("feed_item_target_id");
    }

    /**
     * Output only. The ID of the targeted resource. This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value feed_item_target_id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setFeedItemTargetId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->feed_item_target_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The ID of the targeted resource. This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value feed_item_target_id = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setFeedItemTargetIdUnwrapped($var)
    {
        $this->writeWrapperValue("feed_item_target_id", $var);
        return $this;}

    /**
     * Output only. Status of the feed item target.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.FeedItemTargetStatusEnum.FeedItemTargetStatus status = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Status of the feed item target.
     * This field is read-only.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.FeedItemTargetStatusEnum.FeedItemTargetStatus status = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\FeedItemTargetStatusEnum_FeedItemTargetStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Immutable. The targeted campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 4 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCampaign()
    {
        return $this->readOneof(4);
    }

    /**
     * Returns the unboxed value from <code>getCampaign()</code>

     * Immutable. The targeted campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 4 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getCampaignUnwrapped()
    {
        return $this->readWrapperValue("campaign");
    }

    /**
     * Immutable. The targeted campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 4 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Immutable. The targeted campaign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 4 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setCampaignUnwrapped($var)
    {
        $this->writeWrapperValue("campaign", $var);
        return $this;}

    /**
     * Immutable. The targeted ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 5 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroup()
    {
        return $this->readOneof(5);
    }

    /**
     * Returns the unboxed value from <code>getAdGroup()</code>

     * Immutable. The targeted ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 5 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getAdGroupUnwrapped()
    {
        return $this->readWrapperValue("ad_group");
    }

    /**
     * Immutable. The targeted ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 5 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Immutable. The targeted ad group.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 5 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupUnwrapped($var)
    {
        $this->writeWrapperValue("ad_group", $var);
        return $this;}

    /**
     * Immutable. The targeted keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.KeywordInfo keyword = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V4\Common\KeywordInfo
     */
    public function getKeyword()
    {
        return $this->readOneof(7);
    }

    /**
     * Immutable. The targeted keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.KeywordInfo keyword = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V4\Common\KeywordInfo $var
     * @return $this
     */
    public function setKeyword($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Common\KeywordInfo::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Immutable. The targeted geo target constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue geo_target_constant = 8 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getGeoTargetConstant()
    {
        return $this->readOneof(8);
    }

    /**
     * Returns the unboxed value from <code>getGeoTargetConstant()</code>

     * Immutable. The targeted geo target constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue geo_target_constant = 8 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getGeoTargetConstantUnwrapped()
    {
        return $this->readWrapperValue("geo_target_constant");
    }

    /**
     * Immutable. The targeted geo target constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue geo_target_constant = 8 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setGeoTargetConstant($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Immutable. The targeted geo target constant resource name.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue geo_target_constant = 8 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setGeoTargetConstantUnwrapped($var)
    {
        $this->writeWrapperValue("geo_target_constant", $var);
        return $this;}

    /**
     * Immutable. The targeted device.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.FeedItemTargetDeviceEnum.FeedItemTargetDevice device = 9 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getDevice()
    {
        return $this->readOneof(9);
    }

    /**
     * Immutable. The targeted device.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.FeedItemTargetDeviceEnum.FeedItemTargetDevice device = 9 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setDevice($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\FeedItemTargetDeviceEnum_FeedItemTargetDevice::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Immutable. The targeted schedule.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.AdScheduleInfo ad_schedule = 10 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V4\Common\AdScheduleInfo
     */
    public function getAdSchedule()
    {
        return $this->readOneof(10);
    }

    /**
     * Immutable. The targeted schedule.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.AdScheduleInfo ad_schedule = 10 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V4\Common\AdScheduleInfo $var
     * @return $this
     */
    public function setAdSchedule($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Common\AdScheduleInfo::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->whichOneof("target");
    }

}

