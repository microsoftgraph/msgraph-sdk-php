<?php

namespace Microsoft\Graph\Generated\Identity\CustomAuthenticationExtensions\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Identity\CustomAuthenticationExtensions\Item\ValidateAuthenticationConfiguration\ValidateAuthenticationConfigurationRequestBuilder;
use Microsoft\Graph\Generated\Models\CustomAuthenticationExtension;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the customAuthenticationExtensions property of the microsoft.graph.identityContainer entity.
*/
class CustomAuthenticationExtensionItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the validateAuthenticationConfiguration method.
    */
    public function validateAuthenticationConfiguration(): ValidateAuthenticationConfigurationRequestBuilder {
        return new ValidateAuthenticationConfigurationRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CustomAuthenticationExtensionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/customAuthenticationExtensions/{customAuthenticationExtension%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a customAuthenticationExtension object.
     * @param CustomAuthenticationExtensionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/customauthenticationextension-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?CustomAuthenticationExtensionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a customAuthenticationExtension object.
     * @param CustomAuthenticationExtensionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomAuthenticationExtension|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/customauthenticationextension-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?CustomAuthenticationExtensionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomAuthenticationExtension::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a customAuthenticationExtension object.
     * @param CustomAuthenticationExtension $body The request body
     * @param CustomAuthenticationExtensionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomAuthenticationExtension|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/customauthenticationextension-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(CustomAuthenticationExtension $body, ?CustomAuthenticationExtensionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomAuthenticationExtension::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a customAuthenticationExtension object.
     * @param CustomAuthenticationExtensionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CustomAuthenticationExtensionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a customAuthenticationExtension object.
     * @param CustomAuthenticationExtensionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CustomAuthenticationExtensionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a customAuthenticationExtension object.
     * @param CustomAuthenticationExtension $body The request body
     * @param CustomAuthenticationExtensionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CustomAuthenticationExtension $body, ?CustomAuthenticationExtensionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return CustomAuthenticationExtensionItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CustomAuthenticationExtensionItemRequestBuilder {
        return new CustomAuthenticationExtensionItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
