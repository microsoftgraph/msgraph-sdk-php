<?php

namespace Microsoft\Graph\Generated\Identity\ConditionalAccess\Policies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\ConditionalAccess\Policies\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Identity\ConditionalAccess\Policies\Item\ConditionalAccessPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ConditionalAccessPolicy;
use Microsoft\Graph\Generated\Models\ConditionalAccessPolicyCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the policies property of the microsoft.graph.conditionalAccessRoot entity.
*/
class PoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the policies property of the microsoft.graph.conditionalAccessRoot entity.
     * @param string $conditionalAccessPolicyId The unique identifier of conditionalAccessPolicy
     * @return ConditionalAccessPolicyItemRequestBuilder
    */
    public function byConditionalAccessPolicyId(string $conditionalAccessPolicyId): ConditionalAccessPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conditionalAccessPolicy%2Did'] = $conditionalAccessPolicyId;
        return new ConditionalAccessPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new PoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/conditionalAccess/policies{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve a list of conditionalAccessPolicy objects. This API is available in the following national cloud deployments.
     * @param PoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConditionalAccessPolicyCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/conditionalaccessroot-list-policies?view=graph-rest-1.0 Find more info here
    */
    public function get(?PoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConditionalAccessPolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new conditionalAccessPolicy. This API is available in the following national cloud deployments.
     * @param ConditionalAccessPolicy $body The request body
     * @param PoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConditionalAccessPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/conditionalaccessroot-post-policies?view=graph-rest-1.0 Find more info here
    */
    public function post(ConditionalAccessPolicy $body, ?PoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConditionalAccessPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve a list of conditionalAccessPolicy objects. This API is available in the following national cloud deployments.
     * @param PoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new conditionalAccessPolicy. This API is available in the following national cloud deployments.
     * @param ConditionalAccessPolicy $body The request body
     * @param PoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ConditionalAccessPolicy $body, ?PoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): PoliciesRequestBuilder {
        return new PoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
