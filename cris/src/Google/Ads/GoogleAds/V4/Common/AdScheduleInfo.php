<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/common/criteria.proto

namespace Google\Ads\GoogleAds\V4\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents an AdSchedule criterion.
 * AdSchedule is specified as the day of the week and a time interval
 * within which ads will be shown.
 * No more than six AdSchedules can be added for the same day.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.common.AdScheduleInfo</code>
 */
class AdScheduleInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Minutes after the start hour at which this schedule starts.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.MinuteOfHourEnum.MinuteOfHour start_minute = 1;</code>
     */
    protected $start_minute = 0;
    /**
     * Minutes after the end hour at which this schedule ends. The schedule is
     * exclusive of the end minute.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.MinuteOfHourEnum.MinuteOfHour end_minute = 2;</code>
     */
    protected $end_minute = 0;
    /**
     * Starting hour in 24 hour time.
     * This field must be between 0 and 23, inclusive.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value start_hour = 3;</code>
     */
    protected $start_hour = null;
    /**
     * Ending hour in 24 hour time; 24 signifies end of the day.
     * This field must be between 0 and 24, inclusive.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value end_hour = 4;</code>
     */
    protected $end_hour = null;
    /**
     * Day of the week the schedule applies to.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.DayOfWeekEnum.DayOfWeek day_of_week = 5;</code>
     */
    protected $day_of_week = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $start_minute
     *           Minutes after the start hour at which this schedule starts.
     *           This field is required for CREATE operations and is prohibited on UPDATE
     *           operations.
     *     @type int $end_minute
     *           Minutes after the end hour at which this schedule ends. The schedule is
     *           exclusive of the end minute.
     *           This field is required for CREATE operations and is prohibited on UPDATE
     *           operations.
     *     @type \Google\Protobuf\Int32Value $start_hour
     *           Starting hour in 24 hour time.
     *           This field must be between 0 and 23, inclusive.
     *           This field is required for CREATE operations and is prohibited on UPDATE
     *           operations.
     *     @type \Google\Protobuf\Int32Value $end_hour
     *           Ending hour in 24 hour time; 24 signifies end of the day.
     *           This field must be between 0 and 24, inclusive.
     *           This field is required for CREATE operations and is prohibited on UPDATE
     *           operations.
     *     @type int $day_of_week
     *           Day of the week the schedule applies to.
     *           This field is required for CREATE operations and is prohibited on UPDATE
     *           operations.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Common\Criteria::initOnce();
        parent::__construct($data);
    }

    /**
     * Minutes after the start hour at which this schedule starts.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.MinuteOfHourEnum.MinuteOfHour start_minute = 1;</code>
     * @return int
     */
    public function getStartMinute()
    {
        return $this->start_minute;
    }

    /**
     * Minutes after the start hour at which this schedule starts.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.MinuteOfHourEnum.MinuteOfHour start_minute = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setStartMinute($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\MinuteOfHourEnum_MinuteOfHour::class);
        $this->start_minute = $var;

        return $this;
    }

    /**
     * Minutes after the end hour at which this schedule ends. The schedule is
     * exclusive of the end minute.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.MinuteOfHourEnum.MinuteOfHour end_minute = 2;</code>
     * @return int
     */
    public function getEndMinute()
    {
        return $this->end_minute;
    }

    /**
     * Minutes after the end hour at which this schedule ends. The schedule is
     * exclusive of the end minute.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.MinuteOfHourEnum.MinuteOfHour end_minute = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEndMinute($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\MinuteOfHourEnum_MinuteOfHour::class);
        $this->end_minute = $var;

        return $this;
    }

    /**
     * Starting hour in 24 hour time.
     * This field must be between 0 and 23, inclusive.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value start_hour = 3;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getStartHour()
    {
        return $this->start_hour;
    }

    /**
     * Returns the unboxed value from <code>getStartHour()</code>

     * Starting hour in 24 hour time.
     * This field must be between 0 and 23, inclusive.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value start_hour = 3;</code>
     * @return int|null
     */
    public function getStartHourUnwrapped()
    {
        return $this->readWrapperValue("start_hour");
    }

    /**
     * Starting hour in 24 hour time.
     * This field must be between 0 and 23, inclusive.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value start_hour = 3;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setStartHour($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->start_hour = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Starting hour in 24 hour time.
     * This field must be between 0 and 23, inclusive.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value start_hour = 3;</code>
     * @param int|null $var
     * @return $this
     */
    public function setStartHourUnwrapped($var)
    {
        $this->writeWrapperValue("start_hour", $var);
        return $this;}

    /**
     * Ending hour in 24 hour time; 24 signifies end of the day.
     * This field must be between 0 and 24, inclusive.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value end_hour = 4;</code>
     * @return \Google\Protobuf\Int32Value
     */
    public function getEndHour()
    {
        return $this->end_hour;
    }

    /**
     * Returns the unboxed value from <code>getEndHour()</code>

     * Ending hour in 24 hour time; 24 signifies end of the day.
     * This field must be between 0 and 24, inclusive.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value end_hour = 4;</code>
     * @return int|null
     */
    public function getEndHourUnwrapped()
    {
        return $this->readWrapperValue("end_hour");
    }

    /**
     * Ending hour in 24 hour time; 24 signifies end of the day.
     * This field must be between 0 and 24, inclusive.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value end_hour = 4;</code>
     * @param \Google\Protobuf\Int32Value $var
     * @return $this
     */
    public function setEndHour($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int32Value::class);
        $this->end_hour = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int32Value object.

     * Ending hour in 24 hour time; 24 signifies end of the day.
     * This field must be between 0 and 24, inclusive.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.protobuf.Int32Value end_hour = 4;</code>
     * @param int|null $var
     * @return $this
     */
    public function setEndHourUnwrapped($var)
    {
        $this->writeWrapperValue("end_hour", $var);
        return $this;}

    /**
     * Day of the week the schedule applies to.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.DayOfWeekEnum.DayOfWeek day_of_week = 5;</code>
     * @return int
     */
    public function getDayOfWeek()
    {
        return $this->day_of_week;
    }

    /**
     * Day of the week the schedule applies to.
     * This field is required for CREATE operations and is prohibited on UPDATE
     * operations.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.enums.DayOfWeekEnum.DayOfWeek day_of_week = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setDayOfWeek($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V4\Enums\DayOfWeekEnum_DayOfWeek::class);
        $this->day_of_week = $var;

        return $this;
    }

}

