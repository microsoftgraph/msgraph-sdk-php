<?php

namespace Microsoft\Graph\Generated\Policies\TokenLifetimePolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\TokenLifetimePolicy;
use Microsoft\Graph\Generated\Models\TokenLifetimePolicyCollectionResponse;
use Microsoft\Graph\Generated\Policies\TokenLifetimePolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Policies\TokenLifetimePolicies\Item\TokenLifetimePolicyItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the tokenLifetimePolicies property of the microsoft.graph.policyRoot entity.
*/
class TokenLifetimePoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tokenLifetimePolicies property of the microsoft.graph.policyRoot entity.
     * @param string $tokenLifetimePolicyId The unique identifier of tokenLifetimePolicy
     * @return TokenLifetimePolicyItemRequestBuilder
    */
    public function byTokenLifetimePolicyId(string $tokenLifetimePolicyId): TokenLifetimePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tokenLifetimePolicy%2Did'] = $tokenLifetimePolicyId;
        return new TokenLifetimePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TokenLifetimePoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/tokenLifetimePolicies{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of tokenLifetimePolicy objects. This API is available in the following national cloud deployments.
     * @param TokenLifetimePoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TokenLifetimePolicyCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/tokenlifetimepolicy-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?TokenLifetimePoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TokenLifetimePolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new tokenLifetimePolicy object. This API is available in the following national cloud deployments.
     * @param TokenLifetimePolicy $body The request body
     * @param TokenLifetimePoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TokenLifetimePolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/tokenlifetimepolicy-post-tokenlifetimepolicies?view=graph-rest-1.0 Find more info here
    */
    public function post(TokenLifetimePolicy $body, ?TokenLifetimePoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TokenLifetimePolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of tokenLifetimePolicy objects. This API is available in the following national cloud deployments.
     * @param TokenLifetimePoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TokenLifetimePoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Create a new tokenLifetimePolicy object. This API is available in the following national cloud deployments.
     * @param TokenLifetimePolicy $body The request body
     * @param TokenLifetimePoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(TokenLifetimePolicy $body, ?TokenLifetimePoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return TokenLifetimePoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): TokenLifetimePoliciesRequestBuilder {
        return new TokenLifetimePoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
