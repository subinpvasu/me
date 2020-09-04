<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/customer_client_link_service.proto

namespace Google\Ads\GoogleAds\V2\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CustomerClientLinkService.MutateCustomerClientLink][google.ads.googleads.v2.services.CustomerClientLinkService.MutateCustomerClientLink].
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.services.MutateCustomerClientLinkRequest</code>
 */
class MutateCustomerClientLinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer whose customer link are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. The operation to perform on the individual CustomerClientLink.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.services.CustomerClientLinkOperation operation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $operation = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer whose customer link are being modified.
     *     @type \Google\Ads\GoogleAds\V2\Services\CustomerClientLinkOperation $operation
     *           Required. The operation to perform on the individual CustomerClientLink.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Services\CustomerClientLinkService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer whose customer link are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer whose customer link are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Required. The operation to perform on the individual CustomerClientLink.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.services.CustomerClientLinkOperation operation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Ads\GoogleAds\V2\Services\CustomerClientLinkOperation
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Required. The operation to perform on the individual CustomerClientLink.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.services.CustomerClientLinkOperation operation = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Ads\GoogleAds\V2\Services\CustomerClientLinkOperation $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Services\CustomerClientLinkOperation::class);
        $this->operation = $var;

        return $this;
    }

}

