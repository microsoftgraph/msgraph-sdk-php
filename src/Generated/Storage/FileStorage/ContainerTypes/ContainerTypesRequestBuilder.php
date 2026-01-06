<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\ContainerTypes;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\FileStorageContainerType;
use Microsoft\Graph\Generated\Models\FileStorageContainerTypeCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Storage\FileStorage\ContainerTypes\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Storage\FileStorage\ContainerTypes\Item\FileStorageContainerTypeItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the containerTypes property of the microsoft.graph.fileStorage entity.
*/
class ContainerTypesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the containerTypes property of the microsoft.graph.fileStorage entity.
     * @param string $fileStorageContainerTypeId The unique identifier of fileStorageContainerType
     * @return FileStorageContainerTypeItemRequestBuilder
    */
    public function byFileStorageContainerTypeId(string $fileStorageContainerTypeId): FileStorageContainerTypeItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['fileStorageContainerType%2Did'] = $fileStorageContainerTypeId;
        return new FileStorageContainerTypeItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ContainerTypesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/storage/fileStorage/containerTypes{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the fileStorageContainerType objects and their properties for the current tenant.
     * @param ContainerTypesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FileStorageContainerTypeCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/filestorage-list-containertypes?view=graph-rest-1.0 Find more info here
    */
    public function get(?ContainerTypesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FileStorageContainerTypeCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new fileStorageContainerType in the owning tenant. The number of container types in a tenant is limited.
     * @param FileStorageContainerType $body The request body
     * @param ContainerTypesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FileStorageContainerType|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/filestorage-post-containertypes?view=graph-rest-1.0 Find more info here
    */
    public function post(FileStorageContainerType $body, ?ContainerTypesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FileStorageContainerType::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the fileStorageContainerType objects and their properties for the current tenant.
     * @param ContainerTypesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ContainerTypesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new fileStorageContainerType in the owning tenant. The number of container types in a tenant is limited.
     * @param FileStorageContainerType $body The request body
     * @param ContainerTypesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(FileStorageContainerType $body, ?ContainerTypesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ContainerTypesRequestBuilder
    */
    public function withUrl(string $rawUrl): ContainerTypesRequestBuilder {
        return new ContainerTypesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
