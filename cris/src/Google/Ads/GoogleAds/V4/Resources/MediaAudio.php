<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/media_file.proto

namespace Google\Ads\GoogleAds\V4\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encapsulates an Audio.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.resources.MediaAudio</code>
 */
class MediaAudio extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The duration of the Audio in milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ad_duration_millis = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $ad_duration_millis = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $ad_duration_millis
     *           Output only. The duration of the Audio in milliseconds.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Resources\MediaFile::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The duration of the Audio in milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ad_duration_millis = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getAdDurationMillis()
    {
        return $this->ad_duration_millis;
    }

    /**
     * Returns the unboxed value from <code>getAdDurationMillis()</code>

     * Output only. The duration of the Audio in milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ad_duration_millis = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getAdDurationMillisUnwrapped()
    {
        return $this->readWrapperValue("ad_duration_millis");
    }

    /**
     * Output only. The duration of the Audio in milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ad_duration_millis = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setAdDurationMillis($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->ad_duration_millis = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The duration of the Audio in milliseconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value ad_duration_millis = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setAdDurationMillisUnwrapped($var)
    {
        $this->writeWrapperValue("ad_duration_millis", $var);
        return $this;}

}

