<?php

namespace Microsoft\Graph\Generated\SchemaExtensions\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SchemaExtension;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of schemaExtension entities.
*/
class SchemaExtensionItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SchemaExtensionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/schemaExtensions/{schemaExtension%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete the definition of a schema extension. Only the app that created the schema extension (owner app) can delete the schema extension definition, and only when the extension is in the InDevelopment state. Deleting a schema extension definition does not affect accessing custom data that has been added to resource instances based on that definition.
     * @param SchemaExtensionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/schemaextension-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?SchemaExtensionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get schemaExtension
     * @param SchemaExtensionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SchemaExtension|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/schemaextension-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?SchemaExtensionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SchemaExtension::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update properties in the definition of the specified schemaExtension. Additive updates to the extension can only be made when the extension is in the InDevelopment or Available status. This means custom properties or target resource types cannot be removed from the definition, but new custom properties can be added and the description of the extension changed. The update applies to all the resources that are included in the targetTypes property of the extension. These resources are among the supporting resource types. For delegated flows, the signed-in user can update a schema extension as long as the owner property of the extension is set to the appId of an application the signed-in user owns. That application can be the one that initially created the extension, or some other application owned by the signed-in user.  This criteria for the owner property allows a signed-in user to make updates through other applications they don't own, such as Microsoft Graph Explorer. When using Graph Explorer to update a schemaExtension resource, include the owner property in the PATCH request body.
     * @param SchemaExtension $body The request body
     * @param SchemaExtensionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SchemaExtension|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/schemaextension-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(SchemaExtension $body, ?SchemaExtensionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SchemaExtension::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete the definition of a schema extension. Only the app that created the schema extension (owner app) can delete the schema extension definition, and only when the extension is in the InDevelopment state. Deleting a schema extension definition does not affect accessing custom data that has been added to resource instances based on that definition.
     * @param SchemaExtensionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?SchemaExtensionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get schemaExtension
     * @param SchemaExtensionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SchemaExtensionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update properties in the definition of the specified schemaExtension. Additive updates to the extension can only be made when the extension is in the InDevelopment or Available status. This means custom properties or target resource types cannot be removed from the definition, but new custom properties can be added and the description of the extension changed. The update applies to all the resources that are included in the targetTypes property of the extension. These resources are among the supporting resource types. For delegated flows, the signed-in user can update a schema extension as long as the owner property of the extension is set to the appId of an application the signed-in user owns. That application can be the one that initially created the extension, or some other application owned by the signed-in user.  This criteria for the owner property allows a signed-in user to make updates through other applications they don't own, such as Microsoft Graph Explorer. When using Graph Explorer to update a schemaExtension resource, include the owner property in the PATCH request body.
     * @param SchemaExtension $body The request body
     * @param SchemaExtensionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(SchemaExtension $body, ?SchemaExtensionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SchemaExtensionItemRequestBuilder
    */
    public function withUrl(string $rawUrl): SchemaExtensionItemRequestBuilder {
        return new SchemaExtensionItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
