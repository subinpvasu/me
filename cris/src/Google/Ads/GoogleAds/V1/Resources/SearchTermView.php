<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/search_term_view.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A search term view with metrics aggregated by search term at the ad group
 * level.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.SearchTermView</code>
 */
class SearchTermView extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the search term view.
     * Search term view resource names have the form:
     * `customers/{customer_id}/searchTermViews/{campaign_id}~{ad_group_id}~{URL-base64_search_term}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The search term.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_term = 2;</code>
     */
    protected $search_term = null;
    /**
     * The ad group the search term served in.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 3;</code>
     */
    protected $ad_group = null;
    /**
     * Indicates whether the search term is currently one of your
     * targeted or excluded keywords.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.SearchTermTargetingStatusEnum.SearchTermTargetingStatus status = 4;</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the search term view.
     *           Search term view resource names have the form:
     *           `customers/{customer_id}/searchTermViews/{campaign_id}~{ad_group_id}~{URL-base64_search_term}`
     *     @type \Google\Protobuf\StringValue $search_term
     *           The search term.
     *     @type \Google\Protobuf\StringValue $ad_group
     *           The ad group the search term served in.
     *     @type int $status
     *           Indicates whether the search term is currently one of your
     *           targeted or excluded keywords.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\SearchTermView::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the search term view.
     * Search term view resource names have the form:
     * `customers/{customer_id}/searchTermViews/{campaign_id}~{ad_group_id}~{URL-base64_search_term}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the search term view.
     * Search term view resource names have the form:
     * `customers/{customer_id}/searchTermViews/{campaign_id}~{ad_group_id}~{URL-base64_search_term}`
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
     * The search term.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_term = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getSearchTerm()
    {
        return $this->search_term;
    }

    /**
     * Returns the unboxed value from <code>getSearchTerm()</code>

     * The search term.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_term = 2;</code>
     * @return string|null
     */
    public function getSearchTermUnwrapped()
    {
        return $this->readWrapperValue("search_term");
    }

    /**
     * The search term.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_term = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setSearchTerm($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->search_term = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The search term.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue search_term = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setSearchTermUnwrapped($var)
    {
        $this->writeWrapperValue("search_term", $var);
        return $this;}

    /**
     * The ad group the search term served in.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroup()
    {
        return $this->ad_group;
    }

    /**
     * Returns the unboxed value from <code>getAdGroup()</code>

     * The ad group the search term served in.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 3;</code>
     * @return string|null
     */
    public function getAdGroupUnwrapped()
    {
        return $this->readWrapperValue("ad_group");
    }

    /**
     * The ad group the search term served in.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 3;</code>
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

     * The ad group the search term served in.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupUnwrapped($var)
    {
        $this->writeWrapperValue("ad_group", $var);
        return $this;}

    /**
     * Indicates whether the search term is currently one of your
     * targeted or excluded keywords.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.SearchTermTargetingStatusEnum.SearchTermTargetingStatus status = 4;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Indicates whether the search term is currently one of your
     * targeted or excluded keywords.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.SearchTermTargetingStatusEnum.SearchTermTargetingStatus status = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\SearchTermTargetingStatusEnum_SearchTermTargetingStatus::class);
        $this->status = $var;

        return $this;
    }

}

