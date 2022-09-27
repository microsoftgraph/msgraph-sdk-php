<?php

namespace Microsoft\Graph\Generated\Identity;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Identity\ApiConnectors\ApiConnectorsRequestBuilder;
use Microsoft\Graph\Generated\Identity\ApiConnectors\Item\IdentityApiConnectorItemRequestBuilder;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\B2xUserFlowsRequestBuilder;
use Microsoft\Graph\Generated\Identity\B2xUserFlows\Item\B2xIdentityUserFlowItemRequestBuilder;
use Microsoft\Graph\Generated\Identity\ConditionalAccess\ConditionalAccessRequestBuilder;
use Microsoft\Graph\Generated\Identity\IdentityProviders\IdentityProvidersRequestBuilder;
use Microsoft\Graph\Generated\Identity\IdentityProviders\Item\IdentityProviderBaseItemRequestBuilder;
use Microsoft\Graph\Generated\Identity\UserFlowAttributes\Item\IdentityUserFlowAttributeItemRequestBuilder;
use Microsoft\Graph\Generated\Identity\UserFlowAttributes\UserFlowAttributesRequestBuilder;
use Microsoft\Graph\Generated\Models\IdentityContainer;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class IdentityRequestBuilder 
{
    /**
     * The apiConnectors property
    */
    public function apiConnectors(): ApiConnectorsRequestBuilder {
        return new ApiConnectorsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The b2xUserFlows property
    */
    public function b2xUserFlows(): B2xUserFlowsRequestBuilder {
        return new B2xUserFlowsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The conditionalAccess property
    */
    public function conditionalAccess(): ConditionalAccessRequestBuilder {
        return new ConditionalAccessRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The identityProviders property
    */
    public function identityProviders(): IdentityProvidersRequestBuilder {
        return new IdentityProvidersRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * The userFlowAttributes property
    */
    public function userFlowAttributes(): UserFlowAttributesRequestBuilder {
        return new UserFlowAttributesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Gets an item from the Microsoft\Graph\Generated.identity.apiConnectors.item collection
     * @param string $id Unique identifier of the item
     * @return IdentityApiConnectorItemRequestBuilder
    */
    public function apiConnectorsById(string $id): IdentityApiConnectorItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityApiConnector%2Did'] = $id;
        return new IdentityApiConnectorItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.identity.b2xUserFlows.item collection
     * @param string $id Unique identifier of the item
     * @return B2xIdentityUserFlowItemRequestBuilder
    */
    public function b2xUserFlowsById(string $id): B2xIdentityUserFlowItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['b2xIdentityUserFlow%2Did'] = $id;
        return new B2xIdentityUserFlowItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new IdentityRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/identity{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Get identity
     * @param IdentityRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?IdentityRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
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
     * Update identity
     * @param IdentityContainer $body 
     * @param IdentityRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(IdentityContainer $body, ?IdentityRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->headers = array_merge($requestInfo->headers, ["Accept" => "application/json"]);
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
     * Get identity
     * @param IdentityRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?IdentityRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(IdentityContainer::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.identity.identityProviders.item collection
     * @param string $id Unique identifier of the item
     * @return IdentityProviderBaseItemRequestBuilder
    */
    public function identityProvidersById(string $id): IdentityProviderBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityProviderBase%2Did'] = $id;
        return new IdentityProviderBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update identity
     * @param IdentityContainer $body 
     * @param IdentityRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(IdentityContainer $body, ?IdentityRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
                    '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(IdentityContainer::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph\Generated.identity.userFlowAttributes.item collection
     * @param string $id Unique identifier of the item
     * @return IdentityUserFlowAttributeItemRequestBuilder
    */
    public function userFlowAttributesById(string $id): IdentityUserFlowAttributeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['identityUserFlowAttribute%2Did'] = $id;
        return new IdentityUserFlowAttributeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
