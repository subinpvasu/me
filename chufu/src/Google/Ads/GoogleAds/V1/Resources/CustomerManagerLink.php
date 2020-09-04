<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/resources/customer_manager_link.proto

namespace Google\Ads\GoogleAds\V1\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents customer-manager link relationship.
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.resources.CustomerManagerLink</code>
 */
class CustomerManagerLink extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the resource.
     * CustomerManagerLink resource names have the form:
     * `customers/{customer_id}/customerManagerLinks/{manager_customer_id}~{manager_link_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * The manager customer linked to the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue manager_customer = 3;</code>
     */
    protected $manager_customer = null;
    /**
     * ID of the customer-manager link. This field is read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value manager_link_id = 4;</code>
     */
    protected $manager_link_id = null;
    /**
     * Status of the link between the customer and the manager.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ManagerLinkStatusEnum.ManagerLinkStatus status = 5;</code>
     */
    protected $status = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Name of the resource.
     *           CustomerManagerLink resource names have the form:
     *           `customers/{customer_id}/customerManagerLinks/{manager_customer_id}~{manager_link_id}`
     *     @type \Google\Protobuf\StringValue $manager_customer
     *           The manager customer linked to the customer.
     *     @type \Google\Protobuf\Int64Value $manager_link_id
     *           ID of the customer-manager link. This field is read only.
     *     @type int $status
     *           Status of the link between the customer and the manager.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Resources\CustomerManagerLink::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the resource.
     * CustomerManagerLink resource names have the form:
     * `customers/{customer_id}/customerManagerLinks/{manager_customer_id}~{manager_link_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Name of the resource.
     * CustomerManagerLink resource names have the form:
     * `customers/{customer_id}/customerManagerLinks/{manager_customer_id}~{manager_link_id}`
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
     * The manager customer linked to the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue manager_customer = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getManagerCustomer()
    {
        return $this->manager_customer;
    }

    /**
     * Returns the unboxed value from <code>getManagerCustomer()</code>

     * The manager customer linked to the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue manager_customer = 3;</code>
     * @return string|null
     */
    public function getManagerCustomerUnwrapped()
    {
        return $this->readWrapperValue("manager_customer");
    }

    /**
     * The manager customer linked to the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue manager_customer = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setManagerCustomer($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->manager_customer = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The manager customer linked to the customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue manager_customer = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setManagerCustomerUnwrapped($var)
    {
        $this->writeWrapperValue("manager_customer", $var);
        return $this;}

    /**
     * ID of the customer-manager link. This field is read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value manager_link_id = 4;</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getManagerLinkId()
    {
        return $this->manager_link_id;
    }

    /**
     * Returns the unboxed value from <code>getManagerLinkId()</code>

     * ID of the customer-manager link. This field is read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value manager_link_id = 4;</code>
     * @return int|string|null
     */
    public function getManagerLinkIdUnwrapped()
    {
        return $this->readWrapperValue("manager_link_id");
    }

    /**
     * ID of the customer-manager link. This field is read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value manager_link_id = 4;</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setManagerLinkId($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->manager_link_id = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * ID of the customer-manager link. This field is read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value manager_link_id = 4;</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setManagerLinkIdUnwrapped($var)
    {
        $this->writeWrapperValue("manager_link_id", $var);
        return $this;}

    /**
     * Status of the link between the customer and the manager.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ManagerLinkStatusEnum.ManagerLinkStatus status = 5;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Status of the link between the customer and the manager.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v1.enums.ManagerLinkStatusEnum.ManagerLinkStatus status = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V1\Enums\ManagerLinkStatusEnum_ManagerLinkStatus::class);
        $this->status = $var;

        return $this;
    }

}

