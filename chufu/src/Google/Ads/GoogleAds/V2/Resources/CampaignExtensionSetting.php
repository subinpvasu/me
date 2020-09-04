<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/campaign_extension_setting.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A campaign extension setting.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.CampaignExtensionSetting</code>
 */
class CampaignExtensionSetting extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the campaign extension setting.
     * CampaignExtensionSetting resource names have the form:
     * `customers/{customer_id}/campaignExtensionSettings/{campaign_id}~{extension_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The extension type of the customer extension setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ExtensionTypeEnum.ExtensionType extension_type = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $extension_type = 0;
    /**
     * Immutable. The resource name of the campaign. The linked extension feed items will
     * serve under this campaign.
     * Campaign resource names have the form:
     * `customers/{customer_id}/campaigns/{campaign_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $campaign = null;
    /**
     * The resource names of the extension feed items to serve under the campaign.
     * ExtensionFeedItem resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue extension_feed_items = 4 [(.google.api.resource_reference) = {</code>
     */
    private $extension_feed_items;
    /**
     * The device for which the extensions will serve. Optional.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ExtensionSettingDeviceEnum.ExtensionSettingDevice device = 5;</code>
     */
    protected $device = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the campaign extension setting.
     *           CampaignExtensionSetting resource names have the form:
     *           `customers/{customer_id}/campaignExtensionSettings/{campaign_id}~{extension_type}`
     *     @type int $extension_type
     *           Immutable. The extension type of the customer extension setting.
     *     @type \Google\Protobuf\StringValue $campaign
     *           Immutable. The resource name of the campaign. The linked extension feed items will
     *           serve under this campaign.
     *           Campaign resource names have the form:
     *           `customers/{customer_id}/campaigns/{campaign_id}`
     *     @type \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $extension_feed_items
     *           The resource names of the extension feed items to serve under the campaign.
     *           ExtensionFeedItem resource names have the form:
     *           `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *     @type int $device
     *           The device for which the extensions will serve. Optional.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\CampaignExtensionSetting::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the campaign extension setting.
     * CampaignExtensionSetting resource names have the form:
     * `customers/{customer_id}/campaignExtensionSettings/{campaign_id}~{extension_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the campaign extension setting.
     * CampaignExtensionSetting resource names have the form:
     * `customers/{customer_id}/campaignExtensionSettings/{campaign_id}~{extension_type}`
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
     * Immutable. The extension type of the customer extension setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ExtensionTypeEnum.ExtensionType extension_type = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getExtensionType()
    {
        return $this->extension_type;
    }

    /**
     * Immutable. The extension type of the customer extension setting.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ExtensionTypeEnum.ExtensionType extension_type = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setExtensionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\ExtensionTypeEnum_ExtensionType::class);
        $this->extension_type = $var;

        return $this;
    }

    /**
     * Immutable. The resource name of the campaign. The linked extension feed items will
     * serve under this campaign.
     * Campaign resource names have the form:
     * `customers/{customer_id}/campaigns/{campaign_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Returns the unboxed value from <code>getCampaign()</code>

     * Immutable. The resource name of the campaign. The linked extension feed items will
     * serve under this campaign.
     * Campaign resource names have the form:
     * `customers/{customer_id}/campaigns/{campaign_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getCampaignUnwrapped()
    {
        return $this->readWrapperValue("campaign");
    }

    /**
     * Immutable. The resource name of the campaign. The linked extension feed items will
     * serve under this campaign.
     * Campaign resource names have the form:
     * `customers/{customer_id}/campaigns/{campaign_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCampaign($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->campaign = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Immutable. The resource name of the campaign. The linked extension feed items will
     * serve under this campaign.
     * Campaign resource names have the form:
     * `customers/{customer_id}/campaigns/{campaign_id}`
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue campaign = 3 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setCampaignUnwrapped($var)
    {
        $this->writeWrapperValue("campaign", $var);
        return $this;}

    /**
     * The resource names of the extension feed items to serve under the campaign.
     * ExtensionFeedItem resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue extension_feed_items = 4 [(.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtensionFeedItems()
    {
        return $this->extension_feed_items;
    }

    /**
     * The resource names of the extension feed items to serve under the campaign.
     * ExtensionFeedItem resource names have the form:
     * `customers/{customer_id}/extensionFeedItems/{feed_item_id}`
     *
     * Generated from protobuf field <code>repeated .google.protobuf.StringValue extension_feed_items = 4 [(.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtensionFeedItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\StringValue::class);
        $this->extension_feed_items = $arr;

        return $this;
    }

    /**
     * The device for which the extensions will serve. Optional.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ExtensionSettingDeviceEnum.ExtensionSettingDevice device = 5;</code>
     * @return int
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * The device for which the extensions will serve. Optional.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.ExtensionSettingDeviceEnum.ExtensionSettingDevice device = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setDevice($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\ExtensionSettingDeviceEnum_ExtensionSettingDevice::class);
        $this->device = $var;

        return $this;
    }

}

