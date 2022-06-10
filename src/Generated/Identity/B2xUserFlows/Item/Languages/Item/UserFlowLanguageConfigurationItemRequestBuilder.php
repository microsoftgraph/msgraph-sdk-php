<?php

namespace Microsoft\Graph\Identity\B2xUserFlows\Item\Languages\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Identity\B2xUserFlows\Item\Languages\Item\DefaultPages\DefaultPagesRequestBuilder;
use Microsoft\Graph\Identity\B2xUserFlows\Item\Languages\Item\DefaultPages\Item\UserFlowLanguagePageItemRequestBuilder as MicrosoftGraphIdentityB2xUserFlowsItemLanguagesItemDefaultPagesItemUserFlowLanguagePageItemRequestBuilder;
use Microsoft\Graph\Identity\B2xUserFlows\Item\Languages\Item\OverridesPages\Item\UserFlowLanguagePageItemRequestBuilder as MicrosoftGraphIdentityB2xUserFlowsItemLanguagesItemOverridesPagesItemUserFlowLanguagePageItemRequestBuilder;
use Microsoft\Graph\Identity\B2xUserFlows\Item\Languages\Item\OverridesPages\OverridesPagesRequestBuilder;
use Microsoft\Graph\Models\ODataErrors\ODataError;
use Microsoft\Graph\Models\UserFlowLanguageConfiguration;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class UserFlowLanguageConfigurationItemRequestBuilder 
{
    /**
     * The defaultPages property
    */
    public function defaultPages(): DefaultPagesRequestBuilder {
        return new DefaultPagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The overridesPages property
    */
    public function overridesPages(): OverridesPagesRequestBuilder {
        return new OverridesPagesRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Instantiates a new UserFlowLanguageConfigurationItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/identity/b2xUserFlows/{b2xIdentityUserFlow%2Did}/languages/{userFlowLanguageConfiguration%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property languages for identity
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?UserFlowLanguageConfigurationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The languages supported for customization within the user flow. Language customization is enabled by default in self-service sign up user flow. You cannot create custom languages in self-service sign up user flows.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?UserFlowLanguageConfigurationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property languages in identity
     * @param UserFlowLanguageConfiguration $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(UserFlowLanguageConfiguration $body, ?UserFlowLanguageConfigurationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Gets an item from the Microsoft\Graph.identity.b2xUserFlows.item.languages.item.defaultPages.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphIdentityB2xUserFlowsItemLanguagesItemDefaultPagesItemUserFlowLanguagePageItemRequestBuilder
    */
    public function defaultPagesById(string $id): MicrosoftGraphIdentityB2xUserFlowsItemLanguagesItemDefaultPagesItemUserFlowLanguagePageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userFlowLanguagePage%2Did'] = $id;
        return new MicrosoftGraphIdentityB2xUserFlowsItemLanguagesItemDefaultPagesItemUserFlowLanguagePageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete navigation property languages for identity
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?UserFlowLanguageConfigurationItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * The languages supported for customization within the user flow. Language customization is enabled by default in self-service sign up user flow. You cannot create custom languages in self-service sign up user flows.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?UserFlowLanguageConfigurationItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(UserFlowLanguageConfiguration::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph.identity.b2xUserFlows.item.languages.item.overridesPages.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphIdentityB2xUserFlowsItemLanguagesItemOverridesPagesItemUserFlowLanguagePageItemRequestBuilder
    */
    public function overridesPagesById(string $id): MicrosoftGraphIdentityB2xUserFlowsItemLanguagesItemOverridesPagesItemUserFlowLanguagePageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userFlowLanguagePage%2Did'] = $id;
        return new MicrosoftGraphIdentityB2xUserFlowsItemLanguagesItemOverridesPagesItemUserFlowLanguagePageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property languages in identity
     * @param UserFlowLanguageConfiguration $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(UserFlowLanguageConfiguration $body, ?UserFlowLanguageConfigurationItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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

}
