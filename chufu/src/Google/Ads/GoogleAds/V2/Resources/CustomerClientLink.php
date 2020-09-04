<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/customer_client_link.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents customer client link relationship.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.CustomerClientLink</code>
 */
class CustomerClientLink extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Name of the resource.
     * CustomerClientLink resource names have the form:
     * `customers/{customer_id}/customerClientLinks/{client_customer_id}~{manager_link_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The client customer linked to this customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue client_customer = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $client_customer = null;
    /**
     * Output only. This is uniquely identifies a customer client link. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value manager_link_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $manager_link_id = null;
    /**
     * This is the status of the link between client and manager.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ManagerLinkStatusEnum.ManagerLinkStatus status = 5;</code>
     */
    protected $status = 0;
    /**
     * The visibility of the link. Users can choose whether or not to see hidden
     * links in the AdWords UI.
     * Default value is false
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue hidden = 6;</code>
     */
    protected $hidden = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. Name of the resource.
     *           CustomerClientLink resource names have the form:
     *           `customers/{customer_id}/customerClientLinks/{client_customer_id}~{manager_link_id}`
     *     @type \Google\Protobuf\StringValue $client_customer
     *           Immutable. The client customer linked to this customer.
     *     @type \Google\Protobuf\Int64Value $manager_link_id
     *           Output only. This is uniquely identifies a customer client link. Read only.
     *     @type int $status
     *           This is the status of the link between client and manager.
     *     @type \Google\Protobuf\BoolValue $hidden
     *           The visibility of the link. Users can choose whether or not to see hidden
     *           links in the AdWords UI.
     *           Default value is false
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\CustomerClientLink::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Name of the resource.
     * CustomerClientLink resource names have the form:
     * `customers/{customer_id}/customerClientLinks/{client_customer_id}~{manager_link_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. Name of the resource.
     * CustomerClientLink resource names have the form:
     * `customers/{customer_id}/customerClientLinks/{client_customer_id}~{manager_link_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
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
     * Immutable. The client customer linked to this customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue client_customer = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getClientCustomer()
    {
        return $this->client_customer;
    }

    /**
     * Returns the unboxed value from <code>getClientCustomer()</code>

     * Immutable. The client customer linked to this customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue client_customer = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string|null
     */
    public function getClientCustomerUnwrapped()
    {
        return $this->readWrapperValue("client_customer");
    }

    /**
     * Immutable. The client customer linked to this customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue client_customer = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setClientCustomer($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->client_customer = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Immutable. The client customer linked to this customer.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue client_customer = 3 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string|null $var
     * @return $this
     */
    public function setClientCustomerUnwrapped($var)
    {
        $this->writeWrapperValue("client_customer", $var);
        return $this;}

    /**
     * Output only. This is uniquely identifies a customer client link. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value manager_link_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getManagerLinkId()
    {
        return $this->manager_link_id;
    }

    /**
     * Returns the unboxed value from <code>getManagerLinkId()</code>

     * Output only. This is uniquely identifies a customer client link. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value manager_link_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getManagerLinkIdUnwrapped()
    {
        return $this->readWrapperValue("manager_link_id");
    }

    /**
     * Output only. This is uniquely identifies a customer client link. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value manager_link_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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

     * Output only. This is uniquely identifies a customer client link. Read only.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value manager_link_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setManagerLinkIdUnwrapped($var)
    {
        $this->writeWrapperValue("manager_link_id", $var);
        return $this;}

    /**
     * This is the status of the link between client and manager.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ManagerLinkStatusEnum.ManagerLinkStatus status = 5;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * This is the status of the link between client and manager.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ManagerLinkStatusEnum.ManagerLinkStatus status = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\ManagerLinkStatusEnum_ManagerLinkStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * The visibility of the link. Users can choose whether or not to see hidden
     * links in the AdWords UI.
     * Default value is false
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue hidden = 6;</code>
     * @return \Google\Protobuf\BoolValue
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * Returns the unboxed value from <code>getHidden()</code>

     * The visibility of the link. Users can choose whether or not to see hidden
     * links in the AdWords UI.
     * Default value is false
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue hidden = 6;</code>
     * @return bool|null
     */
    public function getHiddenUnwrapped()
    {
        return $this->readWrapperValue("hidden");
    }

    /**
     * The visibility of the link. Users can choose whether or not to see hidden
     * links in the AdWords UI.
     * Default value is false
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue hidden = 6;</code>
     * @param \Google\Protobuf\BoolValue $var
     * @return $this
     */
    public function setHidden($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\BoolValue::class);
        $this->hidden = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\BoolValue object.

     * The visibility of the link. Users can choose whether or not to see hidden
     * links in the AdWords UI.
     * Default value is false
     *
     * Generated from protobuf field <code>.google.protobuf.BoolValue hidden = 6;</code>
     * @param bool|null $var
     * @return $this
     */
    public function setHiddenUnwrapped($var)
    {
        $this->writeWrapperValue("hidden", $var);
        return $this;}

}

