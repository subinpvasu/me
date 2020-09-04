<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v2/resources/ad_group_ad_asset_view.proto

namespace Google\Ads\GoogleAds\V2\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A link between an AdGroupAd and an Asset.
 *
 * Generated from protobuf message <code>google.ads.googleads.v2.resources.AdGroupAdAssetView</code>
 */
class AdGroupAdAssetView extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the ad group ad asset view.
     * Ad group ad asset view resource names have the form:
     * `customers/{customer_id}/adGroupAdAssets/{AdGroupAdAsset.ad_group_id}~{AdGroupAdAsset.ad.ad_id}~{AdGroupAdAsset.asset_id}~{AdGroupAdAsset.asset_field_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Output only. The ad group ad to which the asset is linked.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $ad_group_ad = null;
    /**
     * Output only. The asset which is linked to the ad group ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue asset = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     */
    protected $asset = null;
    /**
     * Output only. Role that the asset takes in the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.AssetFieldTypeEnum.AssetFieldType field_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $field_type = 0;
    /**
     * Output only. Policy information for the ad group ad asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.AdGroupAdAssetPolicySummary policy_summary = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $policy_summary = null;
    /**
     * Output only. Performance of an asset linkage.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.AssetPerformanceLabelEnum.AssetPerformanceLabel performance_label = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $performance_label = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Output only. The resource name of the ad group ad asset view.
     *           Ad group ad asset view resource names have the form:
     *           `customers/{customer_id}/adGroupAdAssets/{AdGroupAdAsset.ad_group_id}~{AdGroupAdAsset.ad.ad_id}~{AdGroupAdAsset.asset_id}~{AdGroupAdAsset.asset_field_type}`
     *     @type \Google\Protobuf\StringValue $ad_group_ad
     *           Output only. The ad group ad to which the asset is linked.
     *     @type \Google\Protobuf\StringValue $asset
     *           Output only. The asset which is linked to the ad group ad.
     *     @type int $field_type
     *           Output only. Role that the asset takes in the ad.
     *     @type \Google\Ads\GoogleAds\V2\Resources\AdGroupAdAssetPolicySummary $policy_summary
     *           Output only. Policy information for the ad group ad asset.
     *     @type int $performance_label
     *           Output only. Performance of an asset linkage.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V2\Resources\AdGroupAdAssetView::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the ad group ad asset view.
     * Ad group ad asset view resource names have the form:
     * `customers/{customer_id}/adGroupAdAssets/{AdGroupAdAsset.ad_group_id}~{AdGroupAdAsset.ad.ad_id}~{AdGroupAdAsset.asset_id}~{AdGroupAdAsset.asset_field_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Output only. The resource name of the ad group ad asset view.
     * Ad group ad asset view resource names have the form:
     * `customers/{customer_id}/adGroupAdAssets/{AdGroupAdAsset.ad_group_id}~{AdGroupAdAsset.ad.ad_id}~{AdGroupAdAsset.asset_id}~{AdGroupAdAsset.asset_field_type}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
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
     * Output only. The ad group ad to which the asset is linked.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAdGroupAd()
    {
        return $this->ad_group_ad;
    }

    /**
     * Returns the unboxed value from <code>getAdGroupAd()</code>

     * Output only. The ad group ad to which the asset is linked.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getAdGroupAdUnwrapped()
    {
        return $this->readWrapperValue("ad_group_ad");
    }

    /**
     * Output only. The ad group ad to which the asset is linked.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAdGroupAd($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->ad_group_ad = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The ad group ad to which the asset is linked.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue ad_group_ad = 5 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setAdGroupAdUnwrapped($var)
    {
        $this->writeWrapperValue("ad_group_ad", $var);
        return $this;}

    /**
     * Output only. The asset which is linked to the ad group ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue asset = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * Returns the unboxed value from <code>getAsset()</code>

     * Output only. The asset which is linked to the ad group ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue asset = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @return string|null
     */
    public function getAssetUnwrapped()
    {
        return $this->readWrapperValue("asset");
    }

    /**
     * Output only. The asset which is linked to the ad group ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue asset = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->asset = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Output only. The asset which is linked to the ad group ad.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue asset = 6 [(.google.api.field_behavior) = OUTPUT_ONLY, (.google.api.resource_reference) = {</code>
     * @param string|null $var
     * @return $this
     */
    public function setAssetUnwrapped($var)
    {
        $this->writeWrapperValue("asset", $var);
        return $this;}

    /**
     * Output only. Role that the asset takes in the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.AssetFieldTypeEnum.AssetFieldType field_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getFieldType()
    {
        return $this->field_type;
    }

    /**
     * Output only. Role that the asset takes in the ad.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.AssetFieldTypeEnum.AssetFieldType field_type = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setFieldType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\AssetFieldTypeEnum_AssetFieldType::class);
        $this->field_type = $var;

        return $this;
    }

    /**
     * Output only. Policy information for the ad group ad asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.AdGroupAdAssetPolicySummary policy_summary = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V2\Resources\AdGroupAdAssetPolicySummary
     */
    public function getPolicySummary()
    {
        return $this->policy_summary;
    }

    /**
     * Output only. Policy information for the ad group ad asset.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.resources.AdGroupAdAssetPolicySummary policy_summary = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V2\Resources\AdGroupAdAssetPolicySummary $var
     * @return $this
     */
    public function setPolicySummary($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V2\Resources\AdGroupAdAssetPolicySummary::class);
        $this->policy_summary = $var;

        return $this;
    }

    /**
     * Output only. Performance of an asset linkage.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.AssetPerformanceLabelEnum.AssetPerformanceLabel performance_label = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getPerformanceLabel()
    {
        return $this->performance_label;
    }

    /**
     * Output only. Performance of an asset linkage.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v2.enums.AssetPerformanceLabelEnum.AssetPerformanceLabel performance_label = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setPerformanceLabel($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V2\Enums\AssetPerformanceLabelEnum_AssetPerformanceLabel::class);
        $this->performance_label = $var;

        return $this;
    }

}

