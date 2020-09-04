<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/common/ad_type_infos.proto

namespace Google\Ads\GoogleAds\V1\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An expanded text ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.common.ExpandedTextAdInfo</code>
 */
class ExpandedTextAdInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The first part of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline_part1 = 1;</code>
     */
    protected $headline_part1 = null;
    /**
     * The second part of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline_part2 = 2;</code>
     */
    protected $headline_part2 = null;
    /**
     * The third part of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline_part3 = 6;</code>
     */
    protected $headline_part3 = null;
    /**
     * The description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 3;</code>
     */
    protected $description = null;
    /**
     * The second description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description2 = 7;</code>
     */
    protected $description2 = null;
    /**
     * The text that can appear alongside the ad's displayed URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path1 = 4;</code>
     */
    protected $path1 = null;
    /**
     * Additional text that can appear alongside the ad's displayed URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path2 = 5;</code>
     */
    protected $path2 = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $headline_part1
     *           The first part of the ad's headline.
     *     @type \Google\Protobuf\StringValue $headline_part2
     *           The second part of the ad's headline.
     *     @type \Google\Protobuf\StringValue $headline_part3
     *           The third part of the ad's headline.
     *     @type \Google\Protobuf\StringValue $description
     *           The description of the ad.
     *     @type \Google\Protobuf\StringValue $description2
     *           The second description of the ad.
     *     @type \Google\Protobuf\StringValue $path1
     *           The text that can appear alongside the ad's displayed URL.
     *     @type \Google\Protobuf\StringValue $path2
     *           Additional text that can appear alongside the ad's displayed URL.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Common\AdTypeInfos::initOnce();
        parent::__construct($data);
    }

    /**
     * The first part of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline_part1 = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getHeadlinePart1()
    {
        return $this->headline_part1;
    }

    /**
     * Returns the unboxed value from <code>getHeadlinePart1()</code>

     * The first part of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline_part1 = 1;</code>
     * @return string|null
     */
    public function getHeadlinePart1Unwrapped()
    {
        return $this->readWrapperValue("headline_part1");
    }

    /**
     * The first part of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline_part1 = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setHeadlinePart1($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->headline_part1 = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The first part of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline_part1 = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setHeadlinePart1Unwrapped($var)
    {
        $this->writeWrapperValue("headline_part1", $var);
        return $this;}

    /**
     * The second part of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline_part2 = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getHeadlinePart2()
    {
        return $this->headline_part2;
    }

    /**
     * Returns the unboxed value from <code>getHeadlinePart2()</code>

     * The second part of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline_part2 = 2;</code>
     * @return string|null
     */
    public function getHeadlinePart2Unwrapped()
    {
        return $this->readWrapperValue("headline_part2");
    }

    /**
     * The second part of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline_part2 = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setHeadlinePart2($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->headline_part2 = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The second part of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline_part2 = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setHeadlinePart2Unwrapped($var)
    {
        $this->writeWrapperValue("headline_part2", $var);
        return $this;}

    /**
     * The third part of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline_part3 = 6;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getHeadlinePart3()
    {
        return $this->headline_part3;
    }

    /**
     * Returns the unboxed value from <code>getHeadlinePart3()</code>

     * The third part of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline_part3 = 6;</code>
     * @return string|null
     */
    public function getHeadlinePart3Unwrapped()
    {
        return $this->readWrapperValue("headline_part3");
    }

    /**
     * The third part of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline_part3 = 6;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setHeadlinePart3($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->headline_part3 = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The third part of the ad's headline.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue headline_part3 = 6;</code>
     * @param string|null $var
     * @return $this
     */
    public function setHeadlinePart3Unwrapped($var)
    {
        $this->writeWrapperValue("headline_part3", $var);
        return $this;}

    /**
     * The description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Returns the unboxed value from <code>getDescription()</code>

     * The description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 3;</code>
     * @return string|null
     */
    public function getDescriptionUnwrapped()
    {
        return $this->readWrapperValue("description");
    }

    /**
     * The description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->description = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDescriptionUnwrapped($var)
    {
        $this->writeWrapperValue("description", $var);
        return $this;}

    /**
     * The second description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description2 = 7;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getDescription2()
    {
        return $this->description2;
    }

    /**
     * Returns the unboxed value from <code>getDescription2()</code>

     * The second description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description2 = 7;</code>
     * @return string|null
     */
    public function getDescription2Unwrapped()
    {
        return $this->readWrapperValue("description2");
    }

    /**
     * The second description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description2 = 7;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setDescription2($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->description2 = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The second description of the ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue description2 = 7;</code>
     * @param string|null $var
     * @return $this
     */
    public function setDescription2Unwrapped($var)
    {
        $this->writeWrapperValue("description2", $var);
        return $this;}

    /**
     * The text that can appear alongside the ad's displayed URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path1 = 4;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPath1()
    {
        return $this->path1;
    }

    /**
     * Returns the unboxed value from <code>getPath1()</code>

     * The text that can appear alongside the ad's displayed URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path1 = 4;</code>
     * @return string|null
     */
    public function getPath1Unwrapped()
    {
        return $this->readWrapperValue("path1");
    }

    /**
     * The text that can appear alongside the ad's displayed URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path1 = 4;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPath1($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->path1 = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The text that can appear alongside the ad's displayed URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path1 = 4;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPath1Unwrapped($var)
    {
        $this->writeWrapperValue("path1", $var);
        return $this;}

    /**
     * Additional text that can appear alongside the ad's displayed URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path2 = 5;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getPath2()
    {
        return $this->path2;
    }

    /**
     * Returns the unboxed value from <code>getPath2()</code>

     * Additional text that can appear alongside the ad's displayed URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path2 = 5;</code>
     * @return string|null
     */
    public function getPath2Unwrapped()
    {
        return $this->readWrapperValue("path2");
    }

    /**
     * Additional text that can appear alongside the ad's displayed URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path2 = 5;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setPath2($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->path2 = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Additional text that can appear alongside the ad's displayed URL.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue path2 = 5;</code>
     * @param string|null $var
     * @return $this
     */
    public function setPath2Unwrapped($var)
    {
        $this->writeWrapperValue("path2", $var);
        return $this;}

}

