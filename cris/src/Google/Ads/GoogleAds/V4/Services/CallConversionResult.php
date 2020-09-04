<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/services/conversion_upload_service.proto

namespace Google\Ads\GoogleAds\V4\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Identifying information for a successfully processed CallConversionUpload.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.services.CallConversionResult</code>
 */
class CallConversionResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The caller id from which this call was placed. Caller id is expected to be
     * in E.164 format with preceding '+' sign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue caller_id = 1;</code>
     */
    protected $caller_id = null;
    /**
     * The date time at which the call occurred. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_start_date_time = 2;</code>
     */
    protected $call_start_date_time = null;
    /**
     * Resource name of the conversion action associated with this conversion.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 3;</code>
     */
    protected $conversion_action = null;
    /**
     * The date time at which the conversion occurred. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_date_time = 4;</code>
     */
    protected $conversion_date_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $caller_id
     *           The caller id from which this call was placed. Caller id is expected to be
     *           in E.164 format with preceding '+' sign.
     *     @type \Google\Protobuf\StringValue $call_start_date_time
     *           The date time at which the call occurred. The format is
     *           "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *     @type \Google\Protobuf\StringValue $conversion_action
     *           Resource name of the conversion action associated with this conversion.
     *     @type \Google\Protobuf\StringValue $conversion_date_time
     *           The date time at which the conversion occurred. The format is
     *           "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Services\ConversionUploadService::initOnce();
        parent::__construct($data);
    }

    /**
     * The caller id from which this call was placed. Caller id is expected to be
     * in E.164 format with preceding '+' sign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue caller_id = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCallerId()
    {
        return $this->caller_id;
    }

    /**
     * Returns the unboxed value from <code>getCallerId()</code>

     * The caller id from which this call was placed. Caller id is expected to be
     * in E.164 format with preceding '+' sign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue caller_id = 1;</code>
     * @return string|null
     */
    public function getCallerIdUnwrapped()
    {
        return $this->readWrapperValue("caller_id");
    }

    /**
     * The caller id from which this call was placed. Caller id is expected to be
     * in E.164 format with preceding '+' sign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue caller_id = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCallerId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->caller_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The caller id from which this call was placed. Caller id is expected to be
     * in E.164 format with preceding '+' sign.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue caller_id = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCallerIdUnwrapped($var)
    {
        $this->writeWrapperValue("caller_id", $var);
        return $this;}

    /**
     * The date time at which the call occurred. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_start_date_time = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCallStartDateTime()
    {
        return $this->call_start_date_time;
    }

    /**
     * Returns the unboxed value from <code>getCallStartDateTime()</code>

     * The date time at which the call occurred. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_start_date_time = 2;</code>
     * @return string|null
     */
    public function getCallStartDateTimeUnwrapped()
    {
        return $this->readWrapperValue("call_start_date_time");
    }

    /**
     * The date time at which the call occurred. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_start_date_time = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCallStartDateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->call_start_date_time = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The date time at which the call occurred. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue call_start_date_time = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCallStartDateTimeUnwrapped($var)
    {
        $this->writeWrapperValue("call_start_date_time", $var);
        return $this;}

    /**
     * Resource name of the conversion action associated with this conversion.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getConversionAction()
    {
        return $this->conversion_action;
    }

    /**
     * Returns the unboxed value from <code>getConversionAction()</code>

     * Resource name of the conversion action associated with this conversion.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 3;</code>
     * @return string|null
     */
    public function getConversionActionUnwrapped()
    {
        return $this->readWrapperValue("conversion_action");
    }

    /**
     * Resource name of the conversion action associated with this conversion.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setConversionAction($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->conversion_action = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Resource name of the conversion action associated with this conversion.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_action = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setConversionActionUnwrapped($var)
    {
        $this->writeWrapperValue("conversion_action", $var);
        return $this;}

    /**
     * The date time at which the conversion occurred. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_date_time = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getConversionDateTime()
    {
        return $this->conversion_date_time;
    }

    /**
     * Returns the unboxed value from <code>getConversionDateTime()</code>

     * The date time at which the conversion occurred. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_date_time = 4;</code>
     * @return string|null
     */
    public function getConversionDateTimeUnwrapped()
    {
        return $this->readWrapperValue("conversion_date_time");
    }

    /**
     * The date time at which the conversion occurred. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_date_time = 4;</code>
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

     * The date time at which the conversion occurred. The format is
     * "yyyy-mm-dd hh:mm:ss+|-hh:mm", e.g. "2019-01-01 12:32:45-08:00".
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue conversion_date_time = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setConversionDateTimeUnwrapped($var)
    {
        $this->writeWrapperValue("conversion_date_time", $var);
        return $this;}

}

