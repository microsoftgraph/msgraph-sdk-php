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
        parent::__construct($requestAdapter, [], '{+baseurl}/identity/customAuthenticationExtensions/{customAuthenticationExtension%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a customAuthenticationExtension object. The following derived types are currently supported.
     * @param CustomAuthenticationExtensionItemRequestBuilderDeleteRe_b67ff241|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/customauthenticationextension-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?CustomAuthenticationExtensionItemRequestBuilderDeleteRe_b67ff241 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a customAuthenticationExtension object. The following derived types are currently supported.
     * @param CustomAuthenticationExtensionItemRequestBuilderGetReque_988b4dbd|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomAuthenticationExtension|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/customauthenticationextension-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?CustomAuthenticationExtensionItemRequestBuilderGetReque_988b4dbd $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomAuthenticationExtension::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a customAuthenticationExtension object. The following derived types are currently supported.
     * @param CustomAuthenticationExtension $body The request body
     * @param CustomAuthenticationExtensionItemRequestBuilderPatchReq_86818547|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomAuthenticationExtension|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/customauthenticationextension-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(CustomAuthenticationExtension $body, ?CustomAuthenticationExtensionItemRequestBuilderPatchReq_86818547 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomAuthenticationExtension::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a customAuthenticationExtension object. The following derived types are currently supported.
     * @param CustomAuthenticationExtensionItemRequestBuilderDeleteRe_b67ff241|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CustomAuthenticationExtensionItemRequestBuilderDeleteRe_b67ff241 $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a customAuthenticationExtension object. The following derived types are currently supported.
     * @param CustomAuthenticationExtensionItemRequestBuilderGetReque_988b4dbd|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CustomAuthenticationExtensionItemRequestBuilderGetReque_988b4dbd $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/identity/customAuthenticationExtensions/{customAuthenticationExtension%2Did}{?%24expand,%24select}';
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
     * Update the properties of a customAuthenticationExtension object. The following derived types are currently supported.
     * @param CustomAuthenticationExtension $body The request body
     * @param CustomAuthenticationExtensionItemRequestBuilderPatchReq_86818547|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CustomAuthenticationExtension $body, ?CustomAuthenticationExtensionItemRequestBuilderPatchReq_86818547 $requestConfiguration = null): RequestInformation {
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
