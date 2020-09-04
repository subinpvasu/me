<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/errors/errors.proto

namespace Google\Ads\GoogleAds\V4\Errors;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Additional error details.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.errors.ErrorDetails</code>
 */
class ErrorDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * The error code that should have been returned, but wasn't. This is used
     * when the error code is not published in the client specified version.
     *
     * Generated from protobuf field <code>string unpublished_error_code = 1;</code>
     */
    protected $unpublished_error_code = '';
    /**
     * Describes an ad policy violation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.errors.PolicyViolationDetails policy_violation_details = 2;</code>
     */
    protected $policy_violation_details = null;
    /**
     * Describes policy violation findings.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.errors.PolicyFindingDetails policy_finding_details = 3;</code>
     */
    protected $policy_finding_details = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $unpublished_error_code
     *           The error code that should have been returned, but wasn't. This is used
     *           when the error code is not published in the client specified version.
     *     @type \Google\Ads\GoogleAds\V4\Errors\PolicyViolationDetails $policy_violation_details
     *           Describes an ad policy violation.
     *     @type \Google\Ads\GoogleAds\V4\Errors\PolicyFindingDetails $policy_finding_details
     *           Describes policy violation findings.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Errors\Errors::initOnce();
        parent::__construct($data);
    }

    /**
     * The error code that should have been returned, but wasn't. This is used
     * when the error code is not published in the client specified version.
     *
     * Generated from protobuf field <code>string unpublished_error_code = 1;</code>
     * @return string
     */
    public function getUnpublishedErrorCode()
    {
        return $this->unpublished_error_code;
    }

    /**
     * The error code that should have been returned, but wasn't. This is used
     * when the error code is not published in the client specified version.
     *
     * Generated from protobuf field <code>string unpublished_error_code = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUnpublishedErrorCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->unpublished_error_code = $var;

        return $this;
    }

    /**
     * Describes an ad policy violation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.errors.PolicyViolationDetails policy_violation_details = 2;</code>
     * @return \Google\Ads\GoogleAds\V4\Errors\PolicyViolationDetails
     */
    public function getPolicyViolationDetails()
    {
        return $this->policy_violation_details;
    }

    /**
     * Describes an ad policy violation.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.errors.PolicyViolationDetails policy_violation_details = 2;</code>
     * @param \Google\Ads\GoogleAds\V4\Errors\PolicyViolationDetails $var
     * @return $this
     */
    public function setPolicyViolationDetails($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Errors\PolicyViolationDetails::class);
        $this->policy_violation_details = $var;

        return $this;
    }

    /**
     * Describes policy violation findings.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.errors.PolicyFindingDetails policy_finding_details = 3;</code>
     * @return \Google\Ads\GoogleAds\V4\Errors\PolicyFindingDetails
     */
    public function getPolicyFindingDetails()
    {
        return $this->policy_finding_details;
    }

    /**
     * Describes policy violation findings.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.errors.PolicyFindingDetails policy_finding_details = 3;</code>
     * @param \Google\Ads\GoogleAds\V4\Errors\PolicyFindingDetails $var
     * @return $this
     */
    public function setPolicyFindingDetails($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Errors\PolicyFindingDetails::class);
        $this->policy_finding_details = $var;

        return $this;
    }

}

