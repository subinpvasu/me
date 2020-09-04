<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/services/extension_feed_item_service.proto

namespace Google\Ads\GoogleAds\V2\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single operation (create, update, remove) on an extension feed item.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.services.ExtensionFeedItemOperation</code>
 */
class ExtensionFeedItemOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     */
    protected $update_mask = null;
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           FieldMask that determines which resource fields are modified in an update.
     *     @type \Google\Ads\GoogleAds\V2\Resources\ExtensionFeedItem $create
     *           Create operation: No resource name is expected for the new extension
     *           feed item.
     *     @type \Google\Ads\GoogleAds\V2\Resources\ExtensionFeedItem $update
     *           Update operation: The extension feed item is expected to have a
     *           valid resource name.
     *     @type string $remove
     *           Remove operation: A resource name for the removed extension feed item
     *           is expected, in this format:
     *           `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Services\ExtensionFeedItemService::initOnce();
        parent::__construct($data);
    }

    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 4;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Create operation: No resource name is expected for the new extension
     * feed item.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.ExtensionFeedItem create = 1;</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\ExtensionFeedItem
     */
    public function getCreate()
    {
        return $this->readOneof(1);
    }

    /**
     * Create operation: No resource name is expected for the new extension
     * feed item.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.ExtensionFeedItem create = 1;</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\ExtensionFeedItem $var
     * @return $this
     */
    public function setCreate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\ExtensionFeedItem::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Update operation: The extension feed item is expected to have a
     * valid resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.ExtensionFeedItem update = 2;</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\ExtensionFeedItem
     */
    public function getUpdate()
    {
        return $this->readOneof(2);
    }

    /**
     * Update operation: The extension feed item is expected to have a
     * valid resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.ExtensionFeedItem update = 2;</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\ExtensionFeedItem $var
     * @return $this
     */
    public function setUpdate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\ExtensionFeedItem::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Remove operation: A resource name for the removed extension feed item
     * is expected, in this format:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>string remove = 3;</code>
     * @return string
     */
    public function getRemove()
    {
        return $this->readOneof(3);
    }

    /**
     * Remove operation: A resource name for the removed extension feed item
     * is expected, in this format:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>string remove = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRemove($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}

