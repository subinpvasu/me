<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/services/campaign_extension_setting_service.proto

namespace Google\Ads\GoogleAds\V4\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single operation (create, update, remove) on a campaign extension setting.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.services.CampaignExtensionSettingOperation</code>
 */
class CampaignExtensionSettingOperation extends \Google\Protobuf\Internal\Message
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
     *     @type \Google\Ads\GoogleAds\V4\Resources\CampaignExtensionSetting $create
     *           Create operation: No resource name is expected for the new campaign
     *           extension setting.
     *     @type \Google\Ads\GoogleAds\V4\Resources\CampaignExtensionSetting $update
     *           Update operation: The campaign extension setting is expected to have a
     *           valid resource name.
     *     @type string $remove
     *           Remove operation: A resource name for the removed campaign extension
     *           setting is expected, in this format:
     *           `customers/{customer_id}/campaignExtensionSettings/{campaign_id}~{extension_type}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Services\CampaignExtensionSettingService::initOnce();
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
     * Create operation: No resource name is expected for the new campaign
     * extension setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.resources.CampaignExtensionSetting create = 1;</code>
     * @return \Google\Ads\GoogleAds\V4\Resources\CampaignExtensionSetting
     */
    public function getCreate()
    {
        return $this->readOneof(1);
    }

    /**
     * Create operation: No resource name is expected for the new campaign
     * extension setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.resources.CampaignExtensionSetting create = 1;</code>
     * @param \Google\Ads\GoogleAds\V4\Resources\CampaignExtensionSetting $var
     * @return $this
     */
    public function setCreate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Resources\CampaignExtensionSetting::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Update operation: The campaign extension setting is expected to have a
     * valid resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.resources.CampaignExtensionSetting update = 2;</code>
     * @return \Google\Ads\GoogleAds\V4\Resources\CampaignExtensionSetting
     */
    public function getUpdate()
    {
        return $this->readOneof(2);
    }

    /**
     * Update operation: The campaign extension setting is expected to have a
     * valid resource name.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.resources.CampaignExtensionSetting update = 2;</code>
     * @param \Google\Ads\GoogleAds\V4\Resources\CampaignExtensionSetting $var
     * @return $this
     */
    public function setUpdate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Resources\CampaignExtensionSetting::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Remove operation: A resource name for the removed campaign extension
     * setting is expected, in this format:
     * `customers/{customer_id}/campaignExtensionSettings/{campaign_id}~{extension_type}`
     *
     * Generated from protobuf field <code>string remove = 3;</code>
     * @return string
     */
    public function getRemove()
    {
        return $this->readOneof(3);
    }

    /**
     * Remove operation: A resource name for the removed campaign extension
     * setting is expected, in this format:
     * `customers/{customer_id}/campaignExtensionSettings/{campaign_id}~{extension_type}`
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

