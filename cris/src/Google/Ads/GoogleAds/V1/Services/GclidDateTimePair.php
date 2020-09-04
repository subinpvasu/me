<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/conversion_adjustment_upload_service.proto

namespace Google\Ads\GoogleAds\V1\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Uniquely identifies a conversion that was reported without an order ID
 * specified.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.services.GclidDateTimePair</code>
 */
class GclidDateTimePair extends \Google\Protobuf\Internal\Message
{
    /**
     * Google click ID (gclid) associated with the original conversion for this
     * adjustment.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue gclid = 1;</code>
     */
    protected $gclid = null;
    /**
     * The date time at which the original conversion for this adjustment
     * occurred. The timezone must be specified. The format is "yyyy-mm-dd
     * hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_date_time = 2;</code>
     */
    protected $conversion_date_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $gclid
     *           Google click ID (gclid) associated with the original conversion for this
     *           adjustment.
     *     @type \Google\Protobuf\StringValue $conversion_date_time
     *           The date time at which the original conversion for this adjustment
     *           occurred. The timezone must be specified. The format is "yyyy-mm-dd
     *           hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Services\ConversionAdjustmentUploadService::initOnce();
        parent::__construct($data);
    }

    /**
     * Google click ID (gclid) associated with the original conversion for this
     * adjustment.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue gclid = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getGclid()
    {
        return $this->gclid;
    }

    /**
     * Returns the unboxed value from <code>getGclid()</code>

     * Google click ID (gclid) associated with the original conversion for this
     * adjustment.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue gclid = 1;</code>
     * @return string|null
     */
    public function getGclidUnwrapped()
    {
        return $this->readWrapperValue("gclid");
    }

    /**
     * Google click ID (gclid) associated with the original conversion for this
     * adjustment.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue gclid = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setGclid($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->gclid = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Google click ID (gclid) associated with the original conversion for this
     * adjustment.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue gclid = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setGclidUnwrapped($var)
    {
        $this->writeWrapperValue("gclid", $var);
        return $this;}

    /**
     * The date time at which the original conversion for this adjustment
     * occurred. The timezone must be specified. The format is "yyyy-mm-dd
     * hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_date_time = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getConversionDateTime()
    {
        return $this->conversion_date_time;
    }

    /**
     * Returns the unboxed value from <code>getConversionDateTime()</code>

     * The date time at which the original conversion for this adjustment
     * occurred. The timezone must be specified. The format is "yyyy-mm-dd
     * hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_date_time = 2;</code>
     * @return string|null
     */
    public function getConversionDateTimeUnwrapped()
    {
        return $this->readWrapperValue("conversion_date_time");
    }

    /**
     * The date time at which the original conversion for this adjustment
     * occurred. The timezone must be specified. The format is "yyyy-mm-dd
     * hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_date_time = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setConversionDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->conversion_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The date time at which the original conversion for this adjustment
     * occurred. The timezone must be specified. The format is "yyyy-mm-dd
     * hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_date_time = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setConversionDateTimeUnwrapped($var)
    {
        $this->writeWrapperValue("conversion_date_time", $var);
        return $this;}

}

