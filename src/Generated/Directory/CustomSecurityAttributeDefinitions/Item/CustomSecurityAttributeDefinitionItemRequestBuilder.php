<?php

namespace Microsoft\Graph\Generated\Directory\CustomSecurityAttributeDefinitions\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Directory\CustomSecurityAttributeDefinitions\Item\AllowedValues\AllowedValuesRequestBuilder;
use Microsoft\Graph\Generated\Models\CustomSecurityAttributeDefinition;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the customSecurityAttributeDefinitions property of the microsoft.graph.directory entity.
*/
class CustomSecurityAttributeDefinitionItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the allowedValues property of the microsoft.graph.customSecurityAttributeDefinition entity.
    */
    public function allowedValues(): AllowedValuesRequestBuilder {
        return new AllowedValuesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new CustomSecurityAttributeDefinitionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/directory/customSecurityAttributeDefinitions/{customSecurityAttributeDefinition%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property customSecurityAttributeDefinitions for directory
     * @param CustomSecurityAttributeDefinitionItemRequestBuilderDele_7a85dc21|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?CustomSecurityAttributeDefinitionItemRequestBuilderDele_7a85dc21 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a customSecurityAttributeDefinition object.
     * @param CustomSecurityAttributeDefinitionItemRequestBuilderGetR_c14f2000|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomSecurityAttributeDefinition|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/customsecurityattributedefinition-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?CustomSecurityAttributeDefinitionItemRequestBuilderGetR_c14f2000 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomSecurityAttributeDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a customSecurityAttributeDefinition object.
     * @param CustomSecurityAttributeDefinition $body The request body
     * @param CustomSecurityAttributeDefinitionItemRequestBuilderPatc_9bc684f1|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<CustomSecurityAttributeDefinition|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/customsecurityattributedefinition-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(CustomSecurityAttributeDefinition $body, ?CustomSecurityAttributeDefinitionItemRequestBuilderPatc_9bc684f1 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [CustomSecurityAttributeDefinition::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property customSecurityAttributeDefinitions for directory
     * @param CustomSecurityAttributeDefinitionItemRequestBuilderDele_7a85dc21|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?CustomSecurityAttributeDefinitionItemRequestBuilderDele_7a85dc21 $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a customSecurityAttributeDefinition object.
     * @param CustomSecurityAttributeDefinitionItemRequestBuilderGetR_c14f2000|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?CustomSecurityAttributeDefinitionItemRequestBuilderGetR_c14f2000 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/directory/customSecurityAttributeDefinitions/{customSecurityAttributeDefinition%2Did}{?%24expand,%24select}';
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
     * Update the properties of a customSecurityAttributeDefinition object.
     * @param CustomSecurityAttributeDefinition $body The request body
     * @param CustomSecurityAttributeDefinitionItemRequestBuilderPatc_9bc684f1|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(CustomSecurityAttributeDefinition $body, ?CustomSecurityAttributeDefinitionItemRequestBuilderPatc_9bc684f1 $requestConfiguration = null): RequestInformation {
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
     * @return CustomSecurityAttributeDefinitionItemRequestBuilder
    */
    public function withUrl(string $rawUrl): CustomSecurityAttributeDefinitionItemRequestBuilder {
        return new CustomSecurityAttributeDefinitionItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
