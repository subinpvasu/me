<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/shared_criterion.proto

namespace Google\Ads\GoogleAds\V4\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A criterion belonging to a shared set.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.resources.SharedCriterion</code>
 */
class SharedCriterion extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the shared criterion.
     * Shared set resource names have the form:
     * `customers/{customer_id}/sharedCriteria/{shared_set_id}~{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The shared set to which the shared criterion belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue shared_set = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $shared_set = null;
    /**
     * Output only. The ID of the criterion.
     * This field is ignored for mutates.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 26 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $criterion_id = null;
    /**
     * Output only. The type of the criterion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.CriterionTypeEnum.CriterionType type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type = 0;
    protected $criterion;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the shared criterion.
     *           Shared set resource names have the form:
     *           `customers/{customer_id}/sharedCriteria/{shared_set_id}~{criterion_id}`
     *     @type \Google\Protobuf\StringValue $shared_set
     *           Immutable. The shared set to which the shared criterion belongs.
     *     @type \Google\Protobuf\Int64Value $criterion_id
     *           Output only. The ID of the criterion.
     *           This field is ignored for mutates.
     *     @type int $type
     *           Output only. The type of the criterion.
     *     @type \Google\Ads\GoogleAds\V4\Common\KeywordInfo $keyword
     *           Immutable. Keyword.
     *     @type \Google\Ads\GoogleAds\V4\Common\YouTubeVideoInfo $youtube_video
     *           Immutable. YouTube Video.
     *     @type \Google\Ads\GoogleAds\V4\Common\YouTubeChannelInfo $youtube_channel
     *           Immutable. YouTube Channel.
     *     @type \Google\Ads\GoogleAds\V4\Common\PlacementInfo $placement
     *           Immutable. Placement.
     *     @type \Google\Ads\GoogleAds\V4\Common\MobileAppCategoryInfo $mobile_app_category
     *           Immutable. Mobile App Category.
     *     @type \Google\Ads\GoogleAds\V4\Common\MobileApplicationInfo $mobile_application
     *           Immutable. Mobile application.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Resources\SharedCriterion::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the shared criterion.
     * Shared set resource names have the form:
     * `customers/{customer_id}/sharedCriteria/{shared_set_id}~{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the shared criterion.
     * Shared set resource names have the form:
     * `customers/{customer_id}/sharedCriteria/{shared_set_id}~{criterion_id}`
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
     * Immutable. The shared set to which the shared criterion belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue shared_set = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getSharedSet()
    {
        return $this->shared_set;
    }

    /**
     * Returns the unboxed value from <code>getSharedSet()</code>

     * Immutable. The shared set to which the shared criterion belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue shared_set = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getSharedSetUnwrapped()
    {
        return $this->readWrapperValue("shared_set");
    }

    /**
     * Immutable. The shared set to which the shared criterion belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue shared_set = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setSharedSet($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->shared_set = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Immutable. The shared set to which the shared criterion belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue shared_set = 2 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setSharedSetUnwrapped($var)
    {
        $this->writeWrapperValue("shared_set", $var);
        return $this;}

    /**
     * Output only. The ID of the criterion.
     * This field is ignored for mutates.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 26 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCriterionId()
    {
        return $this->criterion_id;
    }

    /**
     * Returns the unboxed value from <code>getCriterionId()</code>

     * Output only. The ID of the criterion.
     * This field is ignored for mutates.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 26 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getCriterionIdUnwrapped()
    {
        return $this->readWrapperValue("criterion_id");
    }

    /**
     * Output only. The ID of the criterion.
     * This field is ignored for mutates.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 26 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCriterionId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->criterion_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The ID of the criterion.
     * This field is ignored for mutates.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 26 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setCriterionIdUnwrapped($var)
    {
        $this->writeWrapperValue("criterion_id", $var);
        return $this;}

    /**
     * Output only. The type of the criterion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.CriterionTypeEnum.CriterionType type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. The type of the criterion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.CriterionTypeEnum.CriterionType type = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\CriterionTypeEnum_CriterionType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Immutable. Keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.KeywordInfo keyword = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V4\Common\KeywordInfo
     */
    public function getKeyword()
    {
        return $this->readOneof(3);
    }

    /**
     * Immutable. Keyword.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.KeywordInfo keyword = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V4\Common\KeywordInfo $var
     * @return $this
     */
    public function setKeyword($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Common\KeywordInfo::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Immutable. YouTube Video.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.YouTubeVideoInfo youtube_video = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V4\Common\YouTubeVideoInfo
     */
    public function getYoutubeVideo()
    {
        return $this->readOneof(5);
    }

    /**
     * Immutable. YouTube Video.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.YouTubeVideoInfo youtube_video = 5 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V4\Common\YouTubeVideoInfo $var
     * @return $this
     */
    public function setYoutubeVideo($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Common\YouTubeVideoInfo::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Immutable. YouTube Channel.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.YouTubeChannelInfo youtube_channel = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V4\Common\YouTubeChannelInfo
     */
    public function getYoutubeChannel()
    {
        return $this->readOneof(6);
    }

    /**
     * Immutable. YouTube Channel.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.YouTubeChannelInfo youtube_channel = 6 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V4\Common\YouTubeChannelInfo $var
     * @return $this
     */
    public function setYoutubeChannel($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Common\YouTubeChannelInfo::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Immutable. Placement.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.PlacementInfo placement = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V4\Common\PlacementInfo
     */
    public function getPlacement()
    {
        return $this->readOneof(7);
    }

    /**
     * Immutable. Placement.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.PlacementInfo placement = 7 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V4\Common\PlacementInfo $var
     * @return $this
     */
    public function setPlacement($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Common\PlacementInfo::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Immutable. Mobile App Category.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.MobileAppCategoryInfo mobile_app_category = 8 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V4\Common\MobileAppCategoryInfo
     */
    public function getMobileAppCategory()
    {
        return $this->readOneof(8);
    }

    /**
     * Immutable. Mobile App Category.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.MobileAppCategoryInfo mobile_app_category = 8 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V4\Common\MobileAppCategoryInfo $var
     * @return $this
     */
    public function setMobileAppCategory($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Common\MobileAppCategoryInfo::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Immutable. Mobile application.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.MobileApplicationInfo mobile_application = 9 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Ads\GoogleAds\V4\Common\MobileApplicationInfo
     */
    public function getMobileApplication()
    {
        return $this->readOneof(9);
    }

    /**
     * Immutable. Mobile application.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.common.MobileApplicationInfo mobile_application = 9 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Ads\GoogleAds\V4\Common\MobileApplicationInfo $var
     * @return $this
     */
    public function setMobileApplication($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Common\MobileApplicationInfo::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getCriterion()
    {
        return $this->whichOneof("criterion");
    }

}

