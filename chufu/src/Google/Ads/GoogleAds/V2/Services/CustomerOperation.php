<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/customer_service.proto

namespace Google\Ads\GoogleAds\V2\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single update on a customer.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.services.CustomerOperation</code>
 */
class CustomerOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * Mutate operation. Only updates are supported for customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Customer update = 1;</code>
     */
    protected $update = null;
    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V2\Resources\Customer $update
     *           Mutate operation. Only updates are supported for customer.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           FieldMask that determines which resource fields are modified in an update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Services\CustomerService::initOnce();
        parent::__construct($data);
    }

    /**
     * Mutate operation. Only updates are supported for customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Customer update = 1;</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\Customer
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * Mutate operation. Only updates are supported for customer.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.Customer update = 1;</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\Customer $var
     * @return $this
     */
    public function setUpdate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\Customer::class);
        $this->update = $var;

        return $this;
    }

    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

