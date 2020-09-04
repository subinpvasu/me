<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/services/recommendation_service.proto

namespace Google\Ads\GoogleAds\V4\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [RecommendationService.ApplyRecommendation][google.ads.googleads.v4.services.RecommendationService.ApplyRecommendation].
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.services.ApplyRecommendationResponse</code>
 */
class ApplyRecommendationResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Results of operations to apply recommendations.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.services.ApplyRecommendationResult results = 1;</code>
     */
    private $results;
    /**
     * Errors that pertain to operation failures in the partial failure mode.
     * Returned only when partial_failure = true and all errors occur inside the
     * operations. If any errors occur outside the operations (e.g. auth errors)
     * we return the RPC level error.
     *
     * Generated from protobuf field <code>.google.rpc.Status partial_failure_error = 2;</code>
     */
    protected $partial_failure_error = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationResult[]|\Google\Protobuf\Internal\RepeatedField $results
     *           Results of operations to apply recommendations.
     *     @type \Google\Rpc\Status $partial_failure_error
     *           Errors that pertain to operation failures in the partial failure mode.
     *           Returned only when partial_failure = true and all errors occur inside the
     *           operations. If any errors occur outside the operations (e.g. auth errors)
     *           we return the RPC level error.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Services\RecommendationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Results of operations to apply recommendations.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.services.ApplyRecommendationResult results = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * Results of operations to apply recommendations.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v4.services.ApplyRecommendationResult results = 1;</code>
     * @param \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationResult[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V4\Services\ApplyRecommendationResult::class);
        $this->results = $arr;

        return $this;
    }

    /**
     * Errors that pertain to operation failures in the partial failure mode.
     * Returned only when partial_failure = true and all errors occur inside the
     * operations. If any errors occur outside the operations (e.g. auth errors)
     * we return the RPC level error.
     *
     * Generated from protobuf field <code>.google.rpc.Status partial_failure_error = 2;</code>
     * @return \Google\Rpc\Status
     */
    public function getPartialFailureError()
    {
        return $this->partial_failure_error;
    }

    /**
     * Errors that pertain to operation failures in the partial failure mode.
     * Returned only when partial_failure = true and all errors occur inside the
     * operations. If any errors occur outside the operations (e.g. auth errors)
     * we return the RPC level error.
     *
     * Generated from protobuf field <code>.google.rpc.Status partial_failure_error = 2;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setPartialFailureError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->partial_failure_error = $var;

        return $this;
    }

}

