<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item\TokenLifetimePolicies;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\TokenLifetimePolicyCollectionResponse;
use Microsoft\Graph\Generated\ServicePrincipals\Item\TokenLifetimePolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\TokenLifetimePolicies\Item\TokenLifetimePolicyItemRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\TokenLifetimePolicies\Ref\RefRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the tokenLifetimePolicies property of the microsoft.graph.servicePrincipal entity.
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
     * Provides operations to manage the collection of servicePrincipal entities.
    */
    public function ref(): RefRequestBuilder {
        return new RefRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft/Graph/Generated.servicePrincipals.item.tokenLifetimePolicies.item collection
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
        parent::__construct($requestAdapter, [], '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}/tokenLifetimePolicies{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List the tokenLifetimePolicy objects that are assigned to a servicePrincipal. Only one object is returned in the collection because only one tokenLifetimePolicy can be assigned to a service principal.
     * @param TokenLifetimePoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TokenLifetimePolicyCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/serviceprincipal-list-tokenlifetimepolicies?view=graph-rest-1.0 Find more info here
    */
    public function get(?TokenLifetimePoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TokenLifetimePolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List the tokenLifetimePolicy objects that are assigned to a servicePrincipal. Only one object is returned in the collection because only one tokenLifetimePolicy can be assigned to a service principal.
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return TokenLifetimePoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): TokenLifetimePoliciesRequestBuilder {
        return new TokenLifetimePoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
