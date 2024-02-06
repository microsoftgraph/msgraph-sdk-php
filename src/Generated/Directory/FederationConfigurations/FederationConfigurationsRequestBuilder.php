<?php

namespace Microsoft\Graph\Generated\Directory\FederationConfigurations;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Directory\FederationConfigurations\AvailableProviderTypes\AvailableProviderTypesRequestBuilder;
use Microsoft\Graph\Generated\Directory\FederationConfigurations\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Directory\FederationConfigurations\Item\IdentityProviderBaseItemRequestBuilder;
use Microsoft\Graph\Generated\Models\IdentityProviderBase;
use Microsoft\Graph\Generated\Models\IdentityProviderBaseCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the federationConfigurations property of the microsoft.graph.directory entity.
*/
class FederationConfigurationsRequestBuilder extends BaseRequestBuilder 
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
     * Provides operations to manage the federationConfigurations property of the microsoft.graph.directory entity.
     * @param string $identityProviderBaseId The unique identifier of identityProviderBase
     * @return IdentityProviderBaseItemRequestBuilder
    */
    public function byIdentityProviderBaseId(string $identityProviderBaseId): IdentityProviderBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityProviderBase%2Did'] = $identityProviderBaseId;
        return new IdentityProviderBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new FederationConfigurationsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/federationConfigurations{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
     * @param FederationConfigurationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityProviderBaseCollectionResponse|null>
     * @throws Exception
    */
    public function get(?FederationConfigurationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityProviderBaseCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to federationConfigurations for directory
     * @param IdentityProviderBase $body The request body
     * @param FederationConfigurationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<IdentityProviderBase|null>
     * @throws Exception
    */
    public function post(IdentityProviderBase $body, ?FederationConfigurationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [IdentityProviderBase::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
     * @param FederationConfigurationsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FederationConfigurationsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to federationConfigurations for directory
     * @param IdentityProviderBase $body The request body
     * @param FederationConfigurationsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(IdentityProviderBase $body, ?FederationConfigurationsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return FederationConfigurationsRequestBuilder
    */
    public function withUrl(string $rawUrl): FederationConfigurationsRequestBuilder {
        return new FederationConfigurationsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
