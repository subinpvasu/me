<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/customer.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A collection of customer-wide settings related to Google Ads Conversion
 * Tracking.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.ConversionTrackingSetting</code>
 */
class ConversionTrackingSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The conversion tracking id used for this account. This id is automatically
     * assigned after any conversion tracking feature is used. If the customer
     * doesn't use conversion tracking, this is 0. This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value conversion_tracking_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $conversion_tracking_id = null;
    /**
     * Output only. The conversion tracking id of the customer's manager. This is set when the
     * customer is opted into cross account conversion tracking, and it overrides
     * conversion_tracking_id. This field can only be managed through the Google
     * Ads UI. This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cross_account_conversion_tracking_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $cross_account_conversion_tracking_id = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $conversion_tracking_id
     *           Output only. The conversion tracking id used for this account. This id is automatically
     *           assigned after any conversion tracking feature is used. If the customer
     *           doesn't use conversion tracking, this is 0. This field is read-only.
     *     @type \Google\Protobuf\Int64Value $cross_account_conversion_tracking_id
     *           Output only. The conversion tracking id of the customer's manager. This is set when the
     *           customer is opted into cross account conversion tracking, and it overrides
     *           conversion_tracking_id. This field can only be managed through the Google
     *           Ads UI. This field is read-only.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\Customer::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The conversion tracking id used for this account. This id is automatically
     * assigned after any conversion tracking feature is used. If the customer
     * doesn't use conversion tracking, this is 0. This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value conversion_tracking_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getConversionTrackingId()
    {
        return $this->conversion_tracking_id;
    }

    /**
     * Returns the unboxed value from <code>getConversionTrackingId()</code>

     * Output only. The conversion tracking id used for this account. This id is automatically
     * assigned after any conversion tracking feature is used. If the customer
     * doesn't use conversion tracking, this is 0. This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value conversion_tracking_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getConversionTrackingIdUnwrapped()
    {
        return $this->readWrapperValue("conversion_tracking_id");
    }

    /**
     * Output only. The conversion tracking id used for this account. This id is automatically
     * assigned after any conversion tracking feature is used. If the customer
     * doesn't use conversion tracking, this is 0. This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value conversion_tracking_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setConversionTrackingId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->conversion_tracking_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The conversion tracking id used for this account. This id is automatically
     * assigned after any conversion tracking feature is used. If the customer
     * doesn't use conversion tracking, this is 0. This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value conversion_tracking_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setConversionTrackingIdUnwrapped($var)
    {
        $this->writeWrapperValue("conversion_tracking_id", $var);
        return $this;}

    /**
     * Output only. The conversion tracking id of the customer's manager. This is set when the
     * customer is opted into cross account conversion tracking, and it overrides
     * conversion_tracking_id. This field can only be managed through the Google
     * Ads UI. This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cross_account_conversion_tracking_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCrossAccountConversionTrackingId()
    {
        return $this->cross_account_conversion_tracking_id;
    }

    /**
     * Returns the unboxed value from <code>getCrossAccountConversionTrackingId()</code>

     * Output only. The conversion tracking id of the customer's manager. This is set when the
     * customer is opted into cross account conversion tracking, and it overrides
     * conversion_tracking_id. This field can only be managed through the Google
     * Ads UI. This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cross_account_conversion_tracking_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getCrossAccountConversionTrackingIdUnwrapped()
    {
        return $this->readWrapperValue("cross_account_conversion_tracking_id");
    }

    /**
     * Output only. The conversion tracking id of the customer's manager. This is set when the
     * customer is opted into cross account conversion tracking, and it overrides
     * conversion_tracking_id. This field can only be managed through the Google
     * Ads UI. This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cross_account_conversion_tracking_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setCrossAccountConversionTrackingId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->cross_account_conversion_tracking_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The conversion tracking id of the customer's manager. This is set when the
     * customer is opted into cross account conversion tracking, and it overrides
     * conversion_tracking_id. This field can only be managed through the Google
     * Ads UI. This field is read-only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value cross_account_conversion_tracking_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setCrossAccountConversionTrackingIdUnwrapped($var)
    {
        $this->writeWrapperValue("cross_account_conversion_tracking_id", $var);
        return $this;}

}

