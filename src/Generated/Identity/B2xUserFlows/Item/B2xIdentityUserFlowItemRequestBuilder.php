<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\ApiConnectorConfiguration\ApiConnectorConfigurationRequestBuilder;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\IdentityProviders\IdentityProvidersRequestBuilder;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\Languages\LanguagesRequestBuilder;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\UserAttributeAssignments\UserAttributeAssignmentsRequestBuilder;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\UserFlowIdentityProviders\UserFlowIdentityProvidersRequestBuilder;
use Microsoft\Graph\Generated\Models\B2xIdentityUserFlow;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the b2xUserFlows property of the microsoft.graph.identityContainer entity.
*/
class B2xIdentityUserFlowItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * The apiConnectorConfiguration property
    */
    public function apiConnectorConfiguration(): ApiConnectorConfigurationRequestBuilder {
        return new ApiConnectorConfigurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the identityProviders property of the microsoft.graph.b2xIdentityUserFlow entity.
    */
    public function identityProviders(): IdentityProvidersRequestBuilder {
        return new IdentityProvidersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the languages property of the microsoft.graph.b2xIdentityUserFlow entity.
    */
    public function languages(): LanguagesRequestBuilder {
        return new LanguagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userAttributeAssignments property of the microsoft.graph.b2xIdentityUserFlow entity.
    */
    public function userAttributeAssignments(): UserAttributeAssignmentsRequestBuilder {
        return new UserAttributeAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the userFlowIdentityProviders property of the microsoft.graph.b2xIdentityUserFlow entity.
    */
    public function userFlowIdentityProviders(): UserFlowIdentityProvidersRequestBuilder {
        return new UserFlowIdentityProvidersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new B2xIdentityUserFlowItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/b2xUserFlows/{b2xIdentityUserFlow%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a b2xIdentityUserFlow object.
     * @param B2xIdentityUserFlowItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/b2xidentityuserflow-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?B2xIdentityUserFlowItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Retrieve the properties and relationships of a b2xIdentityUserFlow object.
     * @param B2xIdentityUserFlowItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<B2xIdentityUserFlow|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/b2xidentityuserflow-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?B2xIdentityUserFlowItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [B2xIdentityUserFlow::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property b2xUserFlows in identity
     * @param B2xIdentityUserFlow $body The request body
     * @param B2xIdentityUserFlowItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<B2xIdentityUserFlow|null>
     * @throws Exception
    */
    public function patch(B2xIdentityUserFlow $body, ?B2xIdentityUserFlowItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [B2xIdentityUserFlow::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a b2xIdentityUserFlow object.
     * @param B2xIdentityUserFlowItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?B2xIdentityUserFlowItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Retrieve the properties and relationships of a b2xIdentityUserFlow object.
     * @param B2xIdentityUserFlowItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?B2xIdentityUserFlowItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property b2xUserFlows in identity
     * @param B2xIdentityUserFlow $body The request body
     * @param B2xIdentityUserFlowItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(B2xIdentityUserFlow $body, ?B2xIdentityUserFlowItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return B2xIdentityUserFlowItemRequestBuilder
    */
    public function withUrl(string $rawUrl): B2xIdentityUserFlowItemRequestBuilder {
        return new B2xIdentityUserFlowItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
