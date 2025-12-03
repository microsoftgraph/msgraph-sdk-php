<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\DeletedContainers\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\FileStorageContainer;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Storage\FileStorage\DeletedContainers\Item\Activate\ActivateRequestBuilder;
use Microsoft\Graph\Generated\Storage\FileStorage\DeletedContainers\Item\Columns\ColumnsRequestBuilder;
use Microsoft\Graph\Generated\Storage\FileStorage\DeletedContainers\Item\Drive\DriveRequestBuilder;
use Microsoft\Graph\Generated\Storage\FileStorage\DeletedContainers\Item\Lock\LockRequestBuilder;
use Microsoft\Graph\Generated\Storage\FileStorage\DeletedContainers\Item\MigrationJobs\MigrationJobsRequestBuilder;
use Microsoft\Graph\Generated\Storage\FileStorage\DeletedContainers\Item\PermanentDelete\PermanentDeleteRequestBuilder;
use Microsoft\Graph\Generated\Storage\FileStorage\DeletedContainers\Item\Permissions\PermissionsRequestBuilder;
use Microsoft\Graph\Generated\Storage\FileStorage\DeletedContainers\Item\ProvisionMigrationContainers\ProvisionMigrationContainersRequestBuilder;
use Microsoft\Graph\Generated\Storage\FileStorage\DeletedContainers\Item\RecycleBin\RecycleBinRequestBuilder;
use Microsoft\Graph\Generated\Storage\FileStorage\DeletedContainers\Item\Restore\RestoreRequestBuilder;
use Microsoft\Graph\Generated\Storage\FileStorage\DeletedContainers\Item\Unlock\UnlockRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the deletedContainers property of the microsoft.graph.fileStorage entity.
*/
class FileStorageContainerItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the activate method.
    */
    public function activate(): ActivateRequestBuilder {
        return new ActivateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the columns property of the microsoft.graph.fileStorageContainer entity.
    */
    public function columns(): ColumnsRequestBuilder {
        return new ColumnsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the drive property of the microsoft.graph.fileStorageContainer entity.
    */
    public function drive(): DriveRequestBuilder {
        return new DriveRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the lock method.
    */
    public function lock(): LockRequestBuilder {
        return new LockRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the migrationJobs property of the microsoft.graph.fileStorageContainer entity.
    */
    public function migrationJobs(): MigrationJobsRequestBuilder {
        return new MigrationJobsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the permanentDelete method.
    */
    public function permanentDelete(): PermanentDeleteRequestBuilder {
        return new PermanentDeleteRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the permissions property of the microsoft.graph.fileStorageContainer entity.
    */
    public function permissions(): PermissionsRequestBuilder {
        return new PermissionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the provisionMigrationContainers method.
    */
    public function provisionMigrationContainers(): ProvisionMigrationContainersRequestBuilder {
        return new ProvisionMigrationContainersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the recycleBin property of the microsoft.graph.fileStorageContainer entity.
    */
    public function recycleBin(): RecycleBinRequestBuilder {
        return new RecycleBinRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the restore method.
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the unlock method.
    */
    public function unlock(): UnlockRequestBuilder {
        return new UnlockRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new FileStorageContainerItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/storage/fileStorage/deletedContainers/{fileStorageContainer%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property deletedContainers for storage
     * @param FileStorageContainerItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?FileStorageContainerItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get deletedContainers from storage
     * @param FileStorageContainerItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FileStorageContainer|null>
     * @throws Exception
    */
    public function get(?FileStorageContainerItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FileStorageContainer::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property deletedContainers in storage
     * @param FileStorageContainer $body The request body
     * @param FileStorageContainerItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FileStorageContainer|null>
     * @throws Exception
    */
    public function patch(FileStorageContainer $body, ?FileStorageContainerItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FileStorageContainer::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property deletedContainers for storage
     * @param FileStorageContainerItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?FileStorageContainerItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get deletedContainers from storage
     * @param FileStorageContainerItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FileStorageContainerItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property deletedContainers in storage
     * @param FileStorageContainer $body The request body
     * @param FileStorageContainerItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(FileStorageContainer $body, ?FileStorageContainerItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return FileStorageContainerItemRequestBuilder
    */
    public function withUrl(string $rawUrl): FileStorageContainerItemRequestBuilder {
        return new FileStorageContainerItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
