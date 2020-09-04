<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/customer_manager_link_service.proto

namespace Google\Ads\GoogleAds\V1\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CustomerManagerLinkService.MutateCustomerManagerLink][google.ads.googleads.v1.services.CustomerManagerLinkService.MutateCustomerManagerLink].
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.services.MutateCustomerManagerLinkRequest</code>
 */
class MutateCustomerManagerLinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The ID of the customer whose customer manager links are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     */
    protected $customer_id = '';
    /**
     * The list of operations to perform on individual customer manager links.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.services.CustomerManagerLinkOperation operations = 2;</code>
     */
    private $operations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           The ID of the customer whose customer manager links are being modified.
     *     @type \Google\Ads\GoogleAds\V1\Services\CustomerManagerLinkOperation[]|\Google\Protobuf\Internal\RepeatedField $operations
     *           The list of operations to perform on individual customer manager links.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Services\CustomerManagerLinkService::initOnce();
        parent::__construct($data);
    }

    /**
     * The ID of the customer whose customer manager links are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * The ID of the customer whose customer manager links are being modified.
     *
     * Generated from protobuf field <code>string customer_id = 1;</code>
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
     * The list of operations to perform on individual customer manager links.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.services.CustomerManagerLinkOperation operations = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOperations()
    {
        return $this->operations;
    }

    /**
     * The list of operations to perform on individual customer manager links.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.services.CustomerManagerLinkOperation operations = 2;</code>
     * @param \Google\Ads\GoogleAds\V1\Services\CustomerManagerLinkOperation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V1\Services\CustomerManagerLinkOperation::class);
        $this->operations = $arr;

        return $this;
    }

}

