<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\TokenIssuancePolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\TokenIssuancePolicyCollectionResponse;
use Microsoft\Graph\Generated\ServicePrincipals\Item\TokenIssuancePolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\TokenIssuancePolicies\Item\TokenIssuancePolicyItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the tokenIssuancePolicies property of the microsoft.graph.servicePrincipal entity.
*/
class TokenIssuancePoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tokenIssuancePolicies property of the microsoft.graph.servicePrincipal entity.
     * @param string $tokenIssuancePolicyId The unique identifier of tokenIssuancePolicy
     * @return TokenIssuancePolicyItemRequestBuilder
    */
    public function byTokenIssuancePolicyId(string $tokenIssuancePolicyId): TokenIssuancePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tokenIssuancePolicy%2Did'] = $tokenIssuancePolicyId;
        return new TokenIssuancePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TokenIssuancePoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/tokenIssuancePolicies{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The tokenIssuancePolicies assigned to this service principal.
     * @param TokenIssuancePoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TokenIssuancePolicyCollectionResponse|null>
     * @throws Exception
    */
    public function get(?TokenIssuancePoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TokenIssuancePolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The tokenIssuancePolicies assigned to this service principal.
     * @param TokenIssuancePoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TokenIssuancePoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return TokenIssuancePoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): TokenIssuancePoliciesRequestBuilder {
        return new TokenIssuancePoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
