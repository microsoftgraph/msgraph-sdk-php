<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\ContainerTypes\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\FileStorageContainerType;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the containerTypes property of the microsoft.graph.fileStorage entity.
*/
class FileStorageContainerTypeItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new FileStorageContainerTypeItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/storage/fileStorage/containerTypes/{fileStorageContainerType%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a fileStorageContainerType object from the tenant. A fileStorageContainerType can only be deleted if no registrations are associated with it in any tenant.
     * @param FileStorageContainerTypeItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/filestorage-delete-containertypes?view=graph-rest-1.0 Find more info here
    */
    public function delete(?FileStorageContainerTypeItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get a fileStorageContainerType using its ID.
     * @param FileStorageContainerTypeItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FileStorageContainerType|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/filestoragecontainertype-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?FileStorageContainerTypeItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FileStorageContainerType::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a fileStorageContainerType object. The properties updated are reflected in each registered fileStorageContainerTypeRegistration in a maximum of 24 hours. Settings overridden in a tenant aren't updated. ETag is used for optimistic concurrency control. It must match the value from Create, Get or the previous Update.
     * @param FileStorageContainerType $body The request body
     * @param FileStorageContainerTypeItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FileStorageContainerType|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/filestoragecontainertype-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(FileStorageContainerType $body, ?FileStorageContainerTypeItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FileStorageContainerType::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a fileStorageContainerType object from the tenant. A fileStorageContainerType can only be deleted if no registrations are associated with it in any tenant.
     * @param FileStorageContainerTypeItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?FileStorageContainerTypeItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get a fileStorageContainerType using its ID.
     * @param FileStorageContainerTypeItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FileStorageContainerTypeItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a fileStorageContainerType object. The properties updated are reflected in each registered fileStorageContainerTypeRegistration in a maximum of 24 hours. Settings overridden in a tenant aren't updated. ETag is used for optimistic concurrency control. It must match the value from Create, Get or the previous Update.
     * @param FileStorageContainerType $body The request body
     * @param FileStorageContainerTypeItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(FileStorageContainerType $body, ?FileStorageContainerTypeItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return FileStorageContainerTypeItemRequestBuilder
    */
    public function withUrl(string $rawUrl): FileStorageContainerTypeItemRequestBuilder {
        return new FileStorageContainerTypeItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
