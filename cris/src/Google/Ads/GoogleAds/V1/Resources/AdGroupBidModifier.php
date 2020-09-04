<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/ad_group_bid_modifier.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an ad group bid modifier.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.AdGroupBidModifier</code>
 */
class AdGroupBidModifier extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the ad group bid modifier.
     * Ad group bid modifier resource names have the form:
     * `customers/{customer_id}/adGroupBidModifiers/{ad_group_id}~{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The ad group to which this criterion belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 2;</code>
     */
    protected $ad_group = null;
    /**
     * The ID of the criterion to bid modify.
     * This field is ignored for mutates.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 3;</code>
     */
    protected $criterion_id = null;
    /**
     * The modifier for the bid when the criterion matches. The modifier must be
     * in the range: 0.1 - 10.0. The range is 1.0 - 6.0 for PreferredContent.
     * Use 0 to opt out of a Device type.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue bid_modifier = 4;</code>
     */
    protected $bid_modifier = null;
    /**
     * The base ad group from which this draft/trial adgroup bid modifier was
     * created. If ad_group is a base ad group then this field will be equal to
     * ad_group. If the ad group was created in the draft or trial and has no
     * corresponding base ad group, then this field will be null.
     * This field is readonly.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue base_ad_group = 9;</code>
     */
    protected $base_ad_group = null;
    /**
     * Bid modifier source.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.BidModifierSourceEnum.BidModifierSource bid_modifier_source = 10;</code>
     */
    protected $bid_modifier_source = 0;
    protected $criterion;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the ad group bid modifier.
     *           Ad group bid modifier resource names have the form:
     *           `customers/{customer_id}/adGroupBidModifiers/{ad_group_id}~{criterion_id}`
     *     @type \Google\Protobuf\StringValue $ad_group
     *           The ad group to which this criterion belongs.
     *     @type \Google\Protobuf\Int64Value $criterion_id
     *           The ID of the criterion to bid modify.
     *           This field is ignored for mutates.
     *     @type \Google\Protobuf\DoubleValue $bid_modifier
     *           The modifier for the bid when the criterion matches. The modifier must be
     *           in the range: 0.1 - 10.0. The range is 1.0 - 6.0 for PreferredContent.
     *           Use 0 to opt out of a Device type.
     *     @type \Google\Protobuf\StringValue $base_ad_group
     *           The base ad group from which this draft/trial adgroup bid modifier was
     *           created. If ad_group is a base ad group then this field will be equal to
     *           ad_group. If the ad group was created in the draft or trial and has no
     *           corresponding base ad group, then this field will be null.
     *           This field is readonly.
     *     @type int $bid_modifier_source
     *           Bid modifier source.
     *     @type \Google\Ads\GoogleAds\V1\Common\HotelDateSelectionTypeInfo $hotel_date_selection_type
     *           Criterion for hotel date selection (default dates vs. user selected).
     *     @type \Google\Ads\GoogleAds\V1\Common\HotelAdvanceBookingWindowInfo $hotel_advance_booking_window
     *           Criterion for number of days prior to the stay the booking is being made.
     *     @type \Google\Ads\GoogleAds\V1\Common\HotelLengthOfStayInfo $hotel_length_of_stay
     *           Criterion for length of hotel stay in nights.
     *     @type \Google\Ads\GoogleAds\V1\Common\HotelCheckInDayInfo $hotel_check_in_day
     *           Criterion for day of the week the booking is for.
     *     @type \Google\Ads\GoogleAds\V1\Common\DeviceInfo $device
     *           A device criterion.
     *     @type \Google\Ads\GoogleAds\V1\Common\PreferredContentInfo $preferred_content
     *           A preferred content criterion.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\AdGroupBidModifier::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the ad group bid modifier.
     * Ad group bid modifier resource names have the form:
     * `customers/{customer_id}/adGroupBidModifiers/{ad_group_id}~{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the ad group bid modifier.
     * Ad group bid modifier resource names have the form:
     * `customers/{customer_id}/adGroupBidModifiers/{ad_group_id}~{criterion_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
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
     * The ad group to which this criterion belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroup()
    {
        return $this->ad_group;
    }

    /**
     * Returns the unboxed value from <code>getAdGroup()</code>

     * The ad group to which this criterion belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 2;</code>
     * @return string|null
     */
    public function getAdGroupUnwrapped()
    {
        return $this->readWrapperValue("ad_group");
    }

    /**
     * The ad group to which this criterion belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The ad group to which this criterion belongs.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupUnwrapped($var)
    {
        $this->writeWrapperValue("ad_group", $var);
        return $this;}

    /**
     * The ID of the criterion to bid modify.
     * This field is ignored for mutates.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 3;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getCriterionId()
    {
        return $this->criterion_id;
    }

    /**
     * Returns the unboxed value from <code>getCriterionId()</code>

     * The ID of the criterion to bid modify.
     * This field is ignored for mutates.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 3;</code>
     * @return int|string|null
     */
    public function getCriterionIdUnwrapped()
    {
        return $this->readWrapperValue("criterion_id");
    }

    /**
     * The ID of the criterion to bid modify.
     * This field is ignored for mutates.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 3;</code>
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

     * The ID of the criterion to bid modify.
     * This field is ignored for mutates.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value criterion_id = 3;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setCriterionIdUnwrapped($var)
    {
        $this->writeWrapperValue("criterion_id", $var);
        return $this;}

    /**
     * The modifier for the bid when the criterion matches. The modifier must be
     * in the range: 0.1 - 10.0. The range is 1.0 - 6.0 for PreferredContent.
     * Use 0 to opt out of a Device type.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue bid_modifier = 4;</code>
     * @return \Google\Protobuf\DoubleValue
     */
    public function getBidModifier()
    {
        return $this->bid_modifier;
    }

    /**
     * Returns the unboxed value from <code>getBidModifier()</code>

     * The modifier for the bid when the criterion matches. The modifier must be
     * in the range: 0.1 - 10.0. The range is 1.0 - 6.0 for PreferredContent.
     * Use 0 to opt out of a Device type.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue bid_modifier = 4;</code>
     * @return float|null
     */
    public function getBidModifierUnwrapped()
    {
        return $this->readWrapperValue("bid_modifier");
    }

    /**
     * The modifier for the bid when the criterion matches. The modifier must be
     * in the range: 0.1 - 10.0. The range is 1.0 - 6.0 for PreferredContent.
     * Use 0 to opt out of a Device type.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue bid_modifier = 4;</code>
     * @param \Google\Protobuf\DoubleValue $var
     * @return $this
     */
    public function setBidModifier($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\DoubleValue::class);
        $this->bid_modifier = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\DoubleValue object.

     * The modifier for the bid when the criterion matches. The modifier must be
     * in the range: 0.1 - 10.0. The range is 1.0 - 6.0 for PreferredContent.
     * Use 0 to opt out of a Device type.
     *
     * Generated from protobuf field <code>.google.protobuf.DoubleValue bid_modifier = 4;</code>
     * @param float|null $var
     * @return $this
     */
    public function setBidModifierUnwrapped($var)
    {
        $this->writeWrapperValue("bid_modifier", $var);
        return $this;}

    /**
     * The base ad group from which this draft/trial adgroup bid modifier was
     * created. If ad_group is a base ad group then this field will be equal to
     * ad_group. If the ad group was created in the draft or trial and has no
     * corresponding base ad group, then this field will be null.
     * This field is readonly.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue base_ad_group = 9;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getBaseAdGroup()
    {
        return $this->base_ad_group;
    }

    /**
     * Returns the unboxed value from <code>getBaseAdGroup()</code>

     * The base ad group from which this draft/trial adgroup bid modifier was
     * created. If ad_group is a base ad group then this field will be equal to
     * ad_group. If the ad group was created in the draft or trial and has no
     * corresponding base ad group, then this field will be null.
     * This field is readonly.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue base_ad_group = 9;</code>
     * @return string|null
     */
    public function getBaseAdGroupUnwrapped()
    {
        return $this->readWrapperValue("base_ad_group");
    }

    /**
     * The base ad group from which this draft/trial adgroup bid modifier was
     * created. If ad_group is a base ad group then this field will be equal to
     * ad_group. If the ad group was created in the draft or trial and has no
     * corresponding base ad group, then this field will be null.
     * This field is readonly.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue base_ad_group = 9;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setBaseAdGroup($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->base_ad_group = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The base ad group from which this draft/trial adgroup bid modifier was
     * created. If ad_group is a base ad group then this field will be equal to
     * ad_group. If the ad group was created in the draft or trial and has no
     * corresponding base ad group, then this field will be null.
     * This field is readonly.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue base_ad_group = 9;</code>
     * @param string|null $var
     * @return $this
     */
    public function setBaseAdGroupUnwrapped($var)
    {
        $this->writeWrapperValue("base_ad_group", $var);
        return $this;}

    /**
     * Bid modifier source.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.BidModifierSourceEnum.BidModifierSource bid_modifier_source = 10;</code>
     * @return int
     */
    public function getBidModifierSource()
    {
        return $this->bid_modifier_source;
    }

    /**
     * Bid modifier source.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.BidModifierSourceEnum.BidModifierSource bid_modifier_source = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setBidModifierSource($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\BidModifierSourceEnum_BidModifierSource::class);
        $this->bid_modifier_source = $var;

        return $this;
    }

    /**
     * Criterion for hotel date selection (default dates vs. user selected).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.HotelDateSelectionTypeInfo hotel_date_selection_type = 5;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\HotelDateSelectionTypeInfo
     */
    public function getHotelDateSelectionType()
    {
        return $this->readOneof(5);
    }

    /**
     * Criterion for hotel date selection (default dates vs. user selected).
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.HotelDateSelectionTypeInfo hotel_date_selection_type = 5;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\HotelDateSelectionTypeInfo $var
     * @return $this
     */
    public function setHotelDateSelectionType($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\HotelDateSelectionTypeInfo::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Criterion for number of days prior to the stay the booking is being made.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.HotelAdvanceBookingWindowInfo hotel_advance_booking_window = 6;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\HotelAdvanceBookingWindowInfo
     */
    public function getHotelAdvanceBookingWindow()
    {
        return $this->readOneof(6);
    }

    /**
     * Criterion for number of days prior to the stay the booking is being made.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.HotelAdvanceBookingWindowInfo hotel_advance_booking_window = 6;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\HotelAdvanceBookingWindowInfo $var
     * @return $this
     */
    public function setHotelAdvanceBookingWindow($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\HotelAdvanceBookingWindowInfo::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Criterion for length of hotel stay in nights.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.HotelLengthOfStayInfo hotel_length_of_stay = 7;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\HotelLengthOfStayInfo
     */
    public function getHotelLengthOfStay()
    {
        return $this->readOneof(7);
    }

    /**
     * Criterion for length of hotel stay in nights.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.HotelLengthOfStayInfo hotel_length_of_stay = 7;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\HotelLengthOfStayInfo $var
     * @return $this
     */
    public function setHotelLengthOfStay($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\HotelLengthOfStayInfo::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Criterion for day of the week the booking is for.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.HotelCheckInDayInfo hotel_check_in_day = 8;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\HotelCheckInDayInfo
     */
    public function getHotelCheckInDay()
    {
        return $this->readOneof(8);
    }

    /**
     * Criterion for day of the week the booking is for.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.HotelCheckInDayInfo hotel_check_in_day = 8;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\HotelCheckInDayInfo $var
     * @return $this
     */
    public function setHotelCheckInDay($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\HotelCheckInDayInfo::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * A device criterion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.DeviceInfo device = 11;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\DeviceInfo
     */
    public function getDevice()
    {
        return $this->readOneof(11);
    }

    /**
     * A device criterion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.DeviceInfo device = 11;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\DeviceInfo $var
     * @return $this
     */
    public function setDevice($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\DeviceInfo::class);
        $this->writeOneof(11, $var);

        return $this;
    }

    /**
     * A preferred content criterion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.PreferredContentInfo preferred_content = 12;</code>
     * @return \Google\Ads\GoogleAds\V1\Common\PreferredContentInfo
     */
    public function getPreferredContent()
    {
        return $this->readOneof(12);
    }

    /**
     * A preferred content criterion.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.common.PreferredContentInfo preferred_content = 12;</code>
     * @param \Google\Ads\GoogleAds\V1\Common\PreferredContentInfo $var
     * @return $this
     */
    public function setPreferredContent($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V1\Common\PreferredContentInfo::class);
        $this->writeOneof(12, $var);

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

