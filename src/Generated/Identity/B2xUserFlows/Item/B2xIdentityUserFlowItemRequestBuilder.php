<?php

namespace Microsoft\Graph\Identity\B2xUserFlows\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Identity\B2xUserFlows\Item\IdentityProviders\IdentityProvidersRequestBuilder;
use Microsoft\Graph\Identity\B2xUserFlows\Item\IdentityProviders\Item\IdentityProviderItemRequestBuilder;
use Microsoft\Graph\Identity\B2xUserFlows\Item\Languages\Item\UserFlowLanguageConfigurationItemRequestBuilder;
use Microsoft\Graph\Identity\B2xUserFlows\Item\Languages\LanguagesRequestBuilder;
use Microsoft\Graph\Identity\B2xUserFlows\Item\UserAttributeAssignments\Item\IdentityUserFlowAttributeAssignmentItemRequestBuilder;
use Microsoft\Graph\Identity\B2xUserFlows\Item\UserAttributeAssignments\UserAttributeAssignmentsRequestBuilder;
use Microsoft\Graph\Identity\B2xUserFlows\Item\UserFlowIdentityProviders\Item\IdentityProviderBaseItemRequestBuilder;
use Microsoft\Graph\Identity\B2xUserFlows\Item\UserFlowIdentityProviders\UserFlowIdentityProvidersRequestBuilder;
use Microsoft\Graph\Models\B2xIdentityUserFlow;
use Microsoft\Graph\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class B2xIdentityUserFlowItemRequestBuilder 
{
    /**
     * The identityProviders property
    */
    public function identityProviders(): IdentityProvidersRequestBuilder {
        return new IdentityProvidersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The languages property
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
     * The userAttributeAssignments property
    */
    public function userAttributeAssignments(): UserAttributeAssignmentsRequestBuilder {
        return new UserAttributeAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The userFlowIdentityProviders property
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
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?B2xIdentityUserFlowItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Represents entry point for B2X and self-service sign-up identity userflows.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?B2xIdentityUserFlowItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
     * @param B2xIdentityUserFlow $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(B2xIdentityUserFlow $body, ?B2xIdentityUserFlowItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Delete navigation property b2xUserFlows for identity
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?B2xIdentityUserFlowItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Represents entry point for B2X and self-service sign-up identity userflows.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?B2xIdentityUserFlowItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(B2xIdentityUserFlow::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph.identity.b2xUserFlows.item.identityProviders.item collection
     * @param string $id Unique identifier of the item
     * @return IdentityProviderItemRequestBuilder
    */
    public function identityProvidersById(string $id): IdentityProviderItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityProvider%2Did'] = $id;
        return new IdentityProviderItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.identity.b2xUserFlows.item.languages.item collection
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
     * @param B2xIdentityUserFlow $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(B2xIdentityUserFlow $body, ?B2xIdentityUserFlowItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph.identity.b2xUserFlows.item.userAttributeAssignments.item collection
     * @param string $id Unique identifier of the item
     * @return IdentityUserFlowAttributeAssignmentItemRequestBuilder
    */
    public function userAttributeAssignmentsById(string $id): IdentityUserFlowAttributeAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityUserFlowAttributeAssignment%2Did'] = $id;
        return new IdentityUserFlowAttributeAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.identity.b2xUserFlows.item.userFlowIdentityProviders.item collection
     * @param string $id Unique identifier of the item
     * @return IdentityProviderBaseItemRequestBuilder
    */
    public function userFlowIdentityProvidersById(string $id): IdentityProviderBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityProviderBase%2Did'] = $id;
        return new IdentityProviderBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
