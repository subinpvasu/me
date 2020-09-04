<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v4/resources/feed.proto

namespace Google\Ads\GoogleAds\V4\Resources\Feed\PlacesLocationFeedData;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Data used for authorization using OAuth.
 *
 * Generated from protobuf message <code>google.ads.googleads.v4.resources.Feed.PlacesLocationFeedData.OAuthInfo</code>
 */
class OAuthInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The HTTP method used to obtain authorization.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue http_method = 1;</code>
     */
    protected $http_method = null;
    /**
     * The HTTP request URL used to obtain authorization.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue http_request_url = 2;</code>
     */
    protected $http_request_url = null;
    /**
     * The HTTP authorization header used to obtain authorization.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue http_authorization_header = 3;</code>
     */
    protected $http_authorization_header = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $http_method
     *           The HTTP method used to obtain authorization.
     *     @type \Google\Protobuf\StringValue $http_request_url
     *           The HTTP request URL used to obtain authorization.
     *     @type \Google\Protobuf\StringValue $http_authorization_header
     *           The HTTP authorization header used to obtain authorization.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V4\Resources\Feed::initOnce();
        parent::__construct($data);
    }

    /**
     * The HTTP method used to obtain authorization.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue http_method = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getHttpMethod()
    {
        return $this->http_method;
    }

    /**
     * Returns the unboxed value from <code>getHttpMethod()</code>

     * The HTTP method used to obtain authorization.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue http_method = 1;</code>
     * @return string|null
     */
    public function getHttpMethodUnwrapped()
    {
        return $this->readWrapperValue("http_method");
    }

    /**
     * The HTTP method used to obtain authorization.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue http_method = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setHttpMethod($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->http_method = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The HTTP method used to obtain authorization.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue http_method = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setHttpMethodUnwrapped($var)
    {
        $this->writeWrapperValue("http_method", $var);
        return $this;}

    /**
     * The HTTP request URL used to obtain authorization.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue http_request_url = 2;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getHttpRequestUrl()
    {
        return $this->http_request_url;
    }

    /**
     * Returns the unboxed value from <code>getHttpRequestUrl()</code>

     * The HTTP request URL used to obtain authorization.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue http_request_url = 2;</code>
     * @return string|null
     */
    public function getHttpRequestUrlUnwrapped()
    {
        return $this->readWrapperValue("http_request_url");
    }

    /**
     * The HTTP request URL used to obtain authorization.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue http_request_url = 2;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setHttpRequestUrl($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->http_request_url = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The HTTP request URL used to obtain authorization.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue http_request_url = 2;</code>
     * @param string|null $var
     * @return $this
     */
    public function setHttpRequestUrlUnwrapped($var)
    {
        $this->writeWrapperValue("http_request_url", $var);
        return $this;}

    /**
     * The HTTP authorization header used to obtain authorization.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue http_authorization_header = 3;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getHttpAuthorizationHeader()
    {
        return $this->http_authorization_header;
    }

    /**
     * Returns the unboxed value from <code>getHttpAuthorizationHeader()</code>

     * The HTTP authorization header used to obtain authorization.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue http_authorization_header = 3;</code>
     * @return string|null
     */
    public function getHttpAuthorizationHeaderUnwrapped()
    {
        return $this->readWrapperValue("http_authorization_header");
    }

    /**
     * The HTTP authorization header used to obtain authorization.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue http_authorization_header = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setHttpAuthorizationHeader($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->http_authorization_header = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The HTTP authorization header used to obtain authorization.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue http_authorization_header = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setHttpAuthorizationHeaderUnwrapped($var)
    {
        $this->writeWrapperValue("http_authorization_header", $var);
        return $this;}

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OAuthInfo::class, \Google\Ads\GoogleAds\V4\Resources\Feed_PlacesLocationFeedData_OAuthInfo::class);

