<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v3/resources/video.proto

namespace Google\Ads\GoogleAds\V3\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A video.
 *
 * Generated from protobuf message <code>google.ads.googleads.v3.resources.Video</code>
 */
class Video extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the video.
     * Video resource names have the form:
     * `customers/{customer_id}/videos/{video_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ID of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * Output only. The owner channel id of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue channel_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $channel_id = null;
    /**
     * Output only. The duration of the video in milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value duration_millis = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $duration_millis = null;
    /**
     * Output only. The title of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue title = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $title = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the video.
     *           Video resource names have the form:
     *           `customers/{customer_id}/videos/{video_id}`
     *     @type \Google\Protobuf\StringValue $id
     *           Output only. The ID of the video.
     *     @type \Google\Protobuf\StringValue $channel_id
     *           Output only. The owner channel id of the video.
     *     @type \Google\Protobuf\Int64Value $duration_millis
     *           Output only. The duration of the video in milliseconds.
     *     @type \Google\Protobuf\StringValue $title
     *           Output only. The title of the video.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V3\Resources\Video::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the video.
     * Video resource names have the form:
     * `customers/{customer_id}/videos/{video_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the video.
     * Video resource names have the form:
     * `customers/{customer_id}/videos/{video_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. The ID of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the unboxed value from <code>getId()</code>

     * Output only. The ID of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getIdUnwrapped()
    {
        return $this->readWrapperValue("id");
    }

    /**
     * Output only. The ID of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The ID of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setIdUnwrapped($var)
    {
        $this->writeWrapperValue("id", $var);
        return $this;}

    /**
     * Output only. The owner channel id of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue channel_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getChannelId()
    {
        return $this->channel_id;
    }

    /**
     * Returns the unboxed value from <code>getChannelId()</code>

     * Output only. The owner channel id of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue channel_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getChannelIdUnwrapped()
    {
        return $this->readWrapperValue("channel_id");
    }

    /**
     * Output only. The owner channel id of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue channel_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setChannelId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->channel_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The owner channel id of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue channel_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setChannelIdUnwrapped($var)
    {
        $this->writeWrapperValue("channel_id", $var);
        return $this;}

    /**
     * Output only. The duration of the video in milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value duration_millis = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getDurationMillis()
    {
        return $this->duration_millis;
    }

    /**
     * Returns the unboxed value from <code>getDurationMillis()</code>

     * Output only. The duration of the video in milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value duration_millis = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getDurationMillisUnwrapped()
    {
        return $this->readWrapperValue("duration_millis");
    }

    /**
     * Output only. The duration of the video in milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value duration_millis = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setDurationMillis($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->duration_millis = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The duration of the video in milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value duration_millis = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setDurationMillisUnwrapped($var)
    {
        $this->writeWrapperValue("duration_millis", $var);
        return $this;}

    /**
     * Output only. The title of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue title = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Returns the unboxed value from <code>getTitle()</code>

     * Output only. The title of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue title = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string|null
     */
    public function getTitleUnwrapped()
    {
        return $this->readWrapperValue("title");
    }

    /**
     * Output only. The title of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue title = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->title = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The title of the video.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue title = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string|null $var
     * @return $this
     */
    public function setTitleUnwrapped($var)
    {
        $this->writeWrapperValue("title", $var);
        return $this;}

}

