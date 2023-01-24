<?php

namespace Microsoft\Graph\Generated\SchemaExtensions\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SchemaExtension;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the collection of schemaExtension entities.
*/
class SchemaExtensionItemRequestBuilder 
{
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
     * Instantiates a new SchemaExtensionItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/schemaExtensions/{schemaExtension%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete the definition of a schema extension. Only the app that created the schema extension (owner app) can delete the schema extension definition, and only when the extension is in the `InDevelopment` state. Deleting a schema extension definition does not affect accessing custom data that has been added to resource instances based on that definition.
     * @param SchemaExtensionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/schemaextension-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?SchemaExtensionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
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
     * Get schemaExtension
     * @param SchemaExtensionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/schemaextension-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?SchemaExtensionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [SchemaExtension::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update properties in the definition of the specified schemaExtension. Additive updates to the extension can only be made when the extension is in the `InDevelopment` or `Available` status. This means custom properties or target resource types cannot be removed from the definition, but new custom properties can be added and the description of the extension changed. The update applies to all the resources that are included in the **targetTypes** property of the extension. These resources are among the supporting resource types. For delegated flows, the signed-in user can update a schema extension as long as the **owner** property of the extension is set to the **appId** of an application the signed-in user owns. That application can be the one that initially created the extension, or some other application owned by the signed-in user.  This criteria for the **owner** property allows a signed-in user to make updates through other applications they don't own, such as Microsoft Graph Explorer. When using Graph Explorer to update a **schemaExtension** resource, include the **owner** property in the PATCH request body. For more information, see the Extensions section in Known issues with Microsoft Graph.
     * @param SchemaExtension $body The request body
     * @param SchemaExtensionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/schemaextension-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(SchemaExtension $body, ?SchemaExtensionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [SchemaExtension::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete the definition of a schema extension. Only the app that created the schema extension (owner app) can delete the schema extension definition, and only when the extension is in the `InDevelopment` state. Deleting a schema extension definition does not affect accessing custom data that has been added to resource instances based on that definition.
     * @param SchemaExtensionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?SchemaExtensionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get schemaExtension
     * @param SchemaExtensionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SchemaExtensionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update properties in the definition of the specified schemaExtension. Additive updates to the extension can only be made when the extension is in the `InDevelopment` or `Available` status. This means custom properties or target resource types cannot be removed from the definition, but new custom properties can be added and the description of the extension changed. The update applies to all the resources that are included in the **targetTypes** property of the extension. These resources are among the supporting resource types. For delegated flows, the signed-in user can update a schema extension as long as the **owner** property of the extension is set to the **appId** of an application the signed-in user owns. That application can be the one that initially created the extension, or some other application owned by the signed-in user.  This criteria for the **owner** property allows a signed-in user to make updates through other applications they don't own, such as Microsoft Graph Explorer. When using Graph Explorer to update a **schemaExtension** resource, include the **owner** property in the PATCH request body. For more information, see the Extensions section in Known issues with Microsoft Graph.
     * @param SchemaExtension $body The request body
     * @param SchemaExtensionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(SchemaExtension $body, ?SchemaExtensionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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

}
