<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\IdentityProviders;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\IdentityProviders\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\IdentityProviders\Item\IdentityProviderItemRequestBuilder;
use Microsoft\Graph\Generated\Models\IdentityProviderCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the identityProviders property of the microsoft.graph.b2xIdentityUserFlow entity.
*/
class IdentityProvidersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the identityProviders property of the microsoft.graph.b2xIdentityUserFlow entity.
     * @param string $identityProviderId The unique identifier of identityProvider
     * @return IdentityProviderItemRequestBuilder
    */
    public function byIdentityProviderId(string $identityProviderId): IdentityProviderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityProvider%2Did'] = $identityProviderId;
        return new IdentityProviderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new IdentityProvidersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/b2xUserFlows/{b2xIdentityUserFlow%2Did}/identityProviders{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the identity providers in a b2xIdentityUserFlow object.
     * @param IdentityProvidersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityProviderCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/b2xidentityuserflow-list-identityproviders?view=graph-rest-1.0 Find more info here
    */
    public function get(?IdentityProvidersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityProviderCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the identity providers in a b2xIdentityUserFlow object.
     * @param IdentityProvidersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?IdentityProvidersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return IdentityProvidersRequestBuilder
    */
    public function withUrl(string $rawUrl): IdentityProvidersRequestBuilder {
        return new IdentityProvidersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
