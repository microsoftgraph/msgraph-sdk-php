<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\FileStorageContainer;
use Microsoft\Graph\Generated\Models\FileStorageContainerCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Storage\FileStorage\Containers\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\FileStorageContainerItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the containers property of the microsoft.graph.fileStorage entity.
*/
class ContainersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the containers property of the microsoft.graph.fileStorage entity.
     * @param string $fileStorageContainerId The unique identifier of fileStorageContainer
     * @return FileStorageContainerItemRequestBuilder
    */
    public function byFileStorageContainerId(string $fileStorageContainerId): FileStorageContainerItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['fileStorageContainer%2Did'] = $fileStorageContainerId;
        return new FileStorageContainerItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ContainersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/storage/fileStorage/containers{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of fileStorageContainer objects that are accessible to a caller. The containerTypeId filter parameter is required.
     * @param ContainersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FileStorageContainerCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/filestorage-list-containers?view=graph-rest-1.0 Find more info here
    */
    public function get(?ContainersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FileStorageContainerCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new fileStorageContainer object.  The container type identified by containerTypeId must be registered in the tenant.  For delegated calls, the calling user is set as the owner of the fileStorageContainer. 
     * @param FileStorageContainer $body The request body
     * @param ContainersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FileStorageContainer|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/filestoragecontainer-post?view=graph-rest-1.0 Find more info here
    */
    public function post(FileStorageContainer $body, ?ContainersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FileStorageContainer::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of fileStorageContainer objects that are accessible to a caller. The containerTypeId filter parameter is required.
     * @param ContainersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ContainersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new fileStorageContainer object.  The container type identified by containerTypeId must be registered in the tenant.  For delegated calls, the calling user is set as the owner of the fileStorageContainer. 
     * @param FileStorageContainer $body The request body
     * @param ContainersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(FileStorageContainer $body, ?ContainersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ContainersRequestBuilder
    */
    public function withUrl(string $rawUrl): ContainersRequestBuilder {
        return new ContainersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
