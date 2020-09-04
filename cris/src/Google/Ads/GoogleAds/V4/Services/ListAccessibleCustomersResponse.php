<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/services/customer_service.proto

namespace Google\Ads\GoogleAds\V4\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [CustomerService.ListAccessibleCustomers][google.ads.googleads.v4.services.CustomerService.ListAccessibleCustomers].
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.services.ListAccessibleCustomersResponse</code>
 */
class ListAccessibleCustomersResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of customers directly accessible by the
     * user authenticating the call.
     *
     * Generated from protobuf field <code>repeated string resource_names = 1;</code>
     */
    private $resource_names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $resource_names
     *           Resource name of customers directly accessible by the
     *           user authenticating the call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Services\CustomerService::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of customers directly accessible by the
     * user authenticating the call.
     *
     * Generated from protobuf field <code>repeated string resource_names = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResourceNames()
    {
        return $this->resource_names;
    }

    /**
     * Resource name of customers directly accessible by the
     * user authenticating the call.
     *
     * Generated from protobuf field <code>repeated string resource_names = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResourceNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->resource_names = $arr;

        return $this;
    }

}

