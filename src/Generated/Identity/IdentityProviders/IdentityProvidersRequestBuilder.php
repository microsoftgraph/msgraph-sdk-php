<?php

namespace Microsoft\Graph\Generated\Identity\IdentityProviders;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\IdentityProviders\AvailableProviderTypes\AvailableProviderTypesRequestBuilder;
use Microsoft\Graph\Generated\Identity\IdentityProviders\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Identity\IdentityProviders\Item\IdentityProviderBaseItemRequestBuilder;
use Microsoft\Graph\Generated\Models\IdentityProviderBase;
use Microsoft\Graph\Generated\Models\IdentityProviderBaseCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the identityProviders property of the microsoft.graph.identityContainer entity.
*/
class IdentityProvidersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the availableProviderTypes method.
    */
    public function availableProviderTypes(): AvailableProviderTypesRequestBuilder {
        return new AvailableProviderTypesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the identityProviders property of the microsoft.graph.identityContainer entity.
     * @param string $identityProviderBaseId The unique identifier of identityProviderBase
     * @return IdentityProviderBaseItemRequestBuilder
    */
    public function byIdentityProviderBaseId(string $identityProviderBaseId): IdentityProviderBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityProviderBase%2Did'] = $identityProviderBaseId;
        return new IdentityProviderBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new IdentityProvidersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/identityProviders{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a collection of identity provider resources that are configured for a tenant, and that are derived from identityProviderBase. For a Microsoft Entra tenant, the providers can be socialIdentityProviders or builtinIdentityProviders objects. For an Azure AD B2C, the providers can be socialIdentityProvider, or appleManagedIdentityProvider objects.
     * @param IdentityProvidersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityProviderBaseCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identitycontainer-list-identityproviders?view=graph-rest-1.0 Find more info here
    */
    public function get(?IdentityProvidersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityProviderBaseCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create an identity provider object that is of the type specified in the request body. Among the types of providers derived from identityProviderBase, you can currently create a socialIdentityProvider resource in Microsoft Entra ID. In Azure AD B2C, this operation can currently create a socialIdentityProvider, or an appleManagedIdentityProvider resource.
     * @param IdentityProviderBase $body The request body
     * @param IdentityProvidersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityProviderBase|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/identitycontainer-post-identityproviders?view=graph-rest-1.0 Find more info here
    */
    public function post(IdentityProviderBase $body, ?IdentityProvidersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityProviderBase::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a collection of identity provider resources that are configured for a tenant, and that are derived from identityProviderBase. For a Microsoft Entra tenant, the providers can be socialIdentityProviders or builtinIdentityProviders objects. For an Azure AD B2C, the providers can be socialIdentityProvider, or appleManagedIdentityProvider objects.
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
     * Create an identity provider object that is of the type specified in the request body. Among the types of providers derived from identityProviderBase, you can currently create a socialIdentityProvider resource in Microsoft Entra ID. In Azure AD B2C, this operation can currently create a socialIdentityProvider, or an appleManagedIdentityProvider resource.
     * @param IdentityProviderBase $body The request body
     * @param IdentityProvidersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(IdentityProviderBase $body, ?IdentityProvidersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return IdentityProvidersRequestBuilder
    */
    public function withUrl(string $rawUrl): IdentityProvidersRequestBuilder {
        return new IdentityProvidersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
