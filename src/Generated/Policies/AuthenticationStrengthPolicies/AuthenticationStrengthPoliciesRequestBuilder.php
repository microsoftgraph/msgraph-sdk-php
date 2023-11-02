<?php

namespace Microsoft\Graph\Generated\Policies\AuthenticationStrengthPolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\AuthenticationStrengthPolicy;
use Microsoft\Graph\Generated\Models\AuthenticationStrengthPolicyCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Policies\AuthenticationStrengthPolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Policies\AuthenticationStrengthPolicies\Item\AuthenticationStrengthPolicyItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the authenticationStrengthPolicies property of the microsoft.graph.policyRoot entity.
*/
class AuthenticationStrengthPoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the authenticationStrengthPolicies property of the microsoft.graph.policyRoot entity.
     * @param string $authenticationStrengthPolicyId The unique identifier of authenticationStrengthPolicy
     * @return AuthenticationStrengthPolicyItemRequestBuilder
    */
    public function byAuthenticationStrengthPolicyId(string $authenticationStrengthPolicyId): AuthenticationStrengthPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['authenticationStrengthPolicy%2Did'] = $authenticationStrengthPolicyId;
        return new AuthenticationStrengthPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AuthenticationStrengthPoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/policies/authenticationStrengthPolicies{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the authenticationStrengthPolicy objects and their properties. This API returns both built-in and custom policies. This API is available in the following national cloud deployments.
     * @param AuthenticationStrengthPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationStrengthPolicyCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationstrengthroot-list-policies?view=graph-rest-1.0 Find more info here
    */
    public function get(?AuthenticationStrengthPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationStrengthPolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new custom authenticationStrengthPolicy object. This API is available in the following national cloud deployments.
     * @param AuthenticationStrengthPolicy $body The request body
     * @param AuthenticationStrengthPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AuthenticationStrengthPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/authenticationstrengthroot-post-policies?view=graph-rest-1.0 Find more info here
    */
    public function post(AuthenticationStrengthPolicy $body, ?AuthenticationStrengthPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AuthenticationStrengthPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the authenticationStrengthPolicy objects and their properties. This API returns both built-in and custom policies. This API is available in the following national cloud deployments.
     * @param AuthenticationStrengthPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AuthenticationStrengthPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Create a new custom authenticationStrengthPolicy object. This API is available in the following national cloud deployments.
     * @param AuthenticationStrengthPolicy $body The request body
     * @param AuthenticationStrengthPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AuthenticationStrengthPolicy $body, ?AuthenticationStrengthPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AuthenticationStrengthPoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): AuthenticationStrengthPoliciesRequestBuilder {
        return new AuthenticationStrengthPoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
