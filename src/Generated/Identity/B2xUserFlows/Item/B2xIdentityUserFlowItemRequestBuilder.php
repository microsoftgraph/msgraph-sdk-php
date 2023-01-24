<?php

namespace Microsoft\Graph\Generated\Identity\B2xUserFlows\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\IdentityProviders\IdentityProvidersRequestBuilder;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\IdentityProviders\Item\IdentityProviderItemRequestBuilder;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\Languages\Item\UserFlowLanguageConfigurationItemRequestBuilder;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\Languages\LanguagesRequestBuilder;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\UserAttributeAssignments\Item\IdentityUserFlowAttributeAssignmentItemRequestBuilder;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\UserAttributeAssignments\UserAttributeAssignmentsRequestBuilder;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\UserFlowIdentityProviders\Item\IdentityProviderBaseItemRequestBuilder;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\UserFlowIdentityProviders\UserFlowIdentityProvidersRequestBuilder;
use Microsoft\Graph\Generated\Models\B2xIdentityUserFlow;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the b2xUserFlows property of the microsoft.graph.identityContainer entity.
*/
class B2xIdentityUserFlowItemRequestBuilder 
{
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
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
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
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/identity/b2xUserFlows/{b2xIdentityUserFlow%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property b2xUserFlows for identity
     * @param B2xIdentityUserFlowItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?B2xIdentityUserFlowItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Represents entry point for B2X/self-service sign-up identity userflows.
     * @param B2xIdentityUserFlowItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?B2xIdentityUserFlowItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [B2xIdentityUserFlow::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Provides operations to manage the identityProviders property of the microsoft.graph.b2xIdentityUserFlow entity.
     * @param string $id Unique identifier of the item
     * @return IdentityProviderItemRequestBuilder
    */
    public function identityProvidersById(string $id): IdentityProviderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityProvider%2Did'] = $id;
        return new IdentityProviderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the languages property of the microsoft.graph.b2xIdentityUserFlow entity.
     * @param string $id Unique identifier of the item
     * @return UserFlowLanguageConfigurationItemRequestBuilder
    */
    public function languagesById(string $id): UserFlowLanguageConfigurationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userFlowLanguageConfiguration%2Did'] = $id;
        return new UserFlowLanguageConfigurationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property b2xUserFlows in identity
     * @param B2xIdentityUserFlow $body The request body
     * @param B2xIdentityUserFlowItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(B2xIdentityUserFlow $body, ?B2xIdentityUserFlowItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [B2xIdentityUserFlow::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property b2xUserFlows for identity
     * @param B2xIdentityUserFlowItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?B2xIdentityUserFlowItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Represents entry point for B2X/self-service sign-up identity userflows.
     * @param B2xIdentityUserFlowItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?B2xIdentityUserFlowItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
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
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Provides operations to manage the userAttributeAssignments property of the microsoft.graph.b2xIdentityUserFlow entity.
     * @param string $id Unique identifier of the item
     * @return IdentityUserFlowAttributeAssignmentItemRequestBuilder
    */
    public function userAttributeAssignmentsById(string $id): IdentityUserFlowAttributeAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityUserFlowAttributeAssignment%2Did'] = $id;
        return new IdentityUserFlowAttributeAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft/Graph/Generated.identity.b2xUserFlows.item.userFlowIdentityProviders.item collection
     * @param string $id Unique identifier of the item
     * @return IdentityProviderBaseItemRequestBuilder
    */
    public function userFlowIdentityProvidersById(string $id): IdentityProviderBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityProviderBase%2Did'] = $id;
        return new IdentityProviderBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
