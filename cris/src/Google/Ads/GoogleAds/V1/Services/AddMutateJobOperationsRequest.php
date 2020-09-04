<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/services/mutate_job_service.proto

namespace Google\Ads\GoogleAds\V1\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [MutateJobService.AddMutateJobOperations][google.ads.googleads.v1.services.MutateJobService.AddMutateJobOperations]
 *
 * Generated from protobuf message <code>google.ads.googleads.v1.services.AddMutateJobOperationsRequest</code>
 */
class AddMutateJobOperationsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the MutateJob.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     */
    protected $resource_name = '';
    /**
     * A token used to enforce sequencing.
     * The first AddMutateJobOperations request for a MutateJob should not set
     * sequence_token. Subsequent requests must set sequence_token to the value of
     * next_sequence_token received in the previous AddMutateJobOperations
     * response.
     *
     * Generated from protobuf field <code>string sequence_token = 2;</code>
     */
    protected $sequence_token = '';
    /**
     * The list of mutates being added.
     * Operations can use negative integers as temp ids to signify dependencies
     * between entities created in this MutateJob. For example, a customer with
     * id = 1234 can create a campaign and an ad group in that same campaign by
     * creating a campaign in the first operation with the resource name
     * explicitly set to "customers/1234/campaigns/-1", and creating an ad group
     * in the second operation with the campaign field also set to
     * "customers/1234/campaigns/-1".
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.services.MutateOperation mutate_operations = 3;</code>
     */
    private $mutate_operations;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           The resource name of the MutateJob.
     *     @type string $sequence_token
     *           A token used to enforce sequencing.
     *           The first AddMutateJobOperations request for a MutateJob should not set
     *           sequence_token. Subsequent requests must set sequence_token to the value of
     *           next_sequence_token received in the previous AddMutateJobOperations
     *           response.
     *     @type \Google\Ads\GoogleAds\V1\Services\MutateOperation[]|\Google\Protobuf\Internal\RepeatedField $mutate_operations
     *           The list of mutates being added.
     *           Operations can use negative integers as temp ids to signify dependencies
     *           between entities created in this MutateJob. For example, a customer with
     *           id = 1234 can create a campaign and an ad group in that same campaign by
     *           creating a campaign in the first operation with the resource name
     *           explicitly set to "customers/1234/campaigns/-1", and creating an ad group
     *           in the second operation with the campaign field also set to
     *           "customers/1234/campaigns/-1".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V1\Services\MutateJobService::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the MutateJob.
     *
     * Generated from protobuf field <code>string resource_name = 1;</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * The resource name of the MutateJob.
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
     * A token used to enforce sequencing.
     * The first AddMutateJobOperations request for a MutateJob should not set
     * sequence_token. Subsequent requests must set sequence_token to the value of
     * next_sequence_token received in the previous AddMutateJobOperations
     * response.
     *
     * Generated from protobuf field <code>string sequence_token = 2;</code>
     * @return string
     */
    public function getSequenceToken()
    {
        return $this->sequence_token;
    }

    /**
     * A token used to enforce sequencing.
     * The first AddMutateJobOperations request for a MutateJob should not set
     * sequence_token. Subsequent requests must set sequence_token to the value of
     * next_sequence_token received in the previous AddMutateJobOperations
     * response.
     *
     * Generated from protobuf field <code>string sequence_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSequenceToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->sequence_token = $var;

        return $this;
    }

    /**
     * The list of mutates being added.
     * Operations can use negative integers as temp ids to signify dependencies
     * between entities created in this MutateJob. For example, a customer with
     * id = 1234 can create a campaign and an ad group in that same campaign by
     * creating a campaign in the first operation with the resource name
     * explicitly set to "customers/1234/campaigns/-1", and creating an ad group
     * in the second operation with the campaign field also set to
     * "customers/1234/campaigns/-1".
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.services.MutateOperation mutate_operations = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMutateOperations()
    {
        return $this->mutate_operations;
    }

    /**
     * The list of mutates being added.
     * Operations can use negative integers as temp ids to signify dependencies
     * between entities created in this MutateJob. For example, a customer with
     * id = 1234 can create a campaign and an ad group in that same campaign by
     * creating a campaign in the first operation with the resource name
     * explicitly set to "customers/1234/campaigns/-1", and creating an ad group
     * in the second operation with the campaign field also set to
     * "customers/1234/campaigns/-1".
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v1.services.MutateOperation mutate_operations = 3;</code>
     * @param \Google\Ads\GoogleAds\V1\Services\MutateOperation[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMutateOperations($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V1\Services\MutateOperation::class);
        $this->mutate_operations = $arr;

        return $this;
    }

}

