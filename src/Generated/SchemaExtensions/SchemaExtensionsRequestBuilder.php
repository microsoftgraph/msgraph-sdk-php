<?php

namespace Microsoft\Graph\Generated\SchemaExtensions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SchemaExtension;
use Microsoft\Graph\Generated\Models\SchemaExtensionCollectionResponse;
use Microsoft\Graph\Generated\SchemaExtensions\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\SchemaExtensions\Item\SchemaExtensionItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the collection of schemaExtension entities.
*/
class SchemaExtensionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the collection of schemaExtension entities.
     * @param string $schemaExtensionId The unique identifier of schemaExtension
     * @return SchemaExtensionItemRequestBuilder
    */
    public function bySchemaExtensionId(string $schemaExtensionId): SchemaExtensionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['schemaExtension%2Did'] = $schemaExtensionId;
        return new SchemaExtensionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SchemaExtensionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/schemaExtensions{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of schemaExtension objects in your tenant. The schema extensions can be InDevelopment, Available, or Deprecated and includes schema extensions: This API is available in the following national cloud deployments.
     * @param SchemaExtensionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SchemaExtensionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/schemaextension-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?SchemaExtensionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SchemaExtensionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new schemaExtension definition and its associated schema extension property to extend a supporting resource type. Schema extensions let you add strongly-typed custom data to a resource. The app that creates a schema extension is the owner app. Depending on the state of the extension, the owner app, and only the owner app, may update or delete the extension.  See examples of how to define a schema extension that describes a training course, use the schema extension definition to create a new group with training course data, and add training course data to an existing group. This API is available in the following national cloud deployments.
     * @param SchemaExtension $body The request body
     * @param SchemaExtensionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SchemaExtension|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/schemaextension-post-schemaextensions?view=graph-rest-1.0 Find more info here
    */
    public function post(SchemaExtension $body, ?SchemaExtensionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SchemaExtension::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of schemaExtension objects in your tenant. The schema extensions can be InDevelopment, Available, or Deprecated and includes schema extensions: This API is available in the following national cloud deployments.
     * @param SchemaExtensionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SchemaExtensionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new schemaExtension definition and its associated schema extension property to extend a supporting resource type. Schema extensions let you add strongly-typed custom data to a resource. The app that creates a schema extension is the owner app. Depending on the state of the extension, the owner app, and only the owner app, may update or delete the extension.  See examples of how to define a schema extension that describes a training course, use the schema extension definition to create a new group with training course data, and add training course data to an existing group. This API is available in the following national cloud deployments.
     * @param SchemaExtension $body The request body
     * @param SchemaExtensionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SchemaExtension $body, ?SchemaExtensionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
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
     * @return SchemaExtensionsRequestBuilder
    */
    public function withUrl(string $rawUrl): SchemaExtensionsRequestBuilder {
        return new SchemaExtensionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
