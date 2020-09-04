<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/services/batch_job_service.proto

namespace Google\Ads\GoogleAds\V4\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single operation (create or remove) on a batch job.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.services.BatchJobOperation</code>
 */
class BatchJobOperation extends \Google\Protobuf\Internal\Message
{
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V4\Resources\BatchJob $create
     *           Create operation: No resource name is expected for the new batch job.
     *     @type string $remove
     *           Remove operation: The batch job must not have been run. A resource name
     *           for the removed batch job is expected, in this format:
     *           `customers/{customer_id}/batchJobs/{batch_job_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Services\BatchJobService::initOnce();
        parent::__construct($data);
    }

    /**
     * Create operation: No resource name is expected for the new batch job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.resources.BatchJob create = 1;</code>
     * @return \Google\Ads\GoogleAds\V4\Resources\BatchJob
     */
    public function getCreate()
    {
        return $this->readOneof(1);
    }

    /**
     * Create operation: No resource name is expected for the new batch job.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v4.resources.BatchJob create = 1;</code>
     * @param \Google\Ads\GoogleAds\V4\Resources\BatchJob $var
     * @return $this
     */
    public function setCreate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V4\Resources\BatchJob::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Remove operation: The batch job must not have been run. A resource name
     * for the removed batch job is expected, in this format:
     * `customers/{customer_id}/batchJobs/{batch_job_id}`
     *
     * Generated from protobuf field <code>string remove = 3;</code>
     * @return string
     */
    public function getRemove()
    {
        return $this->readOneof(3);
    }

    /**
     * Remove operation: The batch job must not have been run. A resource name
     * for the removed batch job is expected, in this format:
     * `customers/{customer_id}/batchJobs/{batch_job_id}`
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

