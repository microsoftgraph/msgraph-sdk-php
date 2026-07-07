<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\ContainerTypeRegistrations\Item\ApplicationPermissionGrants\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\FileStorageContainerTypeAppPermissionGrant;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the applicationPermissionGrants property of the microsoft.graph.fileStorageContainerTypeRegistration entity.
*/
class FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/storage/fileStorage/containerTypeRegistrations/{fileStorageContainerTypeRegistration%2Did}/applicationPermissionGrants/{fileStorageContainerTypeAppPermissionGrant%2DappId}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a fileStorageContainerTypeAppPermissionGrant object in a fileStorageContainerTypeRegistration.
     * @param FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/filestoragecontainertyperegistration-delete-applicationpermissiongrants?view=graph-rest-1.0 Find more info here
    */
    public function delete(?FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read a specific app permission grant in a fileStorageContainerTypeRegistration.
     * @param FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FileStorageContainerTypeAppPermissionGrant|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/filestoragecontainertypeapppermissiongrant-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FileStorageContainerTypeAppPermissionGrant::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of a fileStorageContainerTypeAppPermissionGrant object.
     * @param FileStorageContainerTypeAppPermissionGrant $body The request body
     * @param FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<FileStorageContainerTypeAppPermissionGrant|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/filestoragecontainertypeapppermissiongrant-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(FileStorageContainerTypeAppPermissionGrant $body, ?FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [FileStorageContainerTypeAppPermissionGrant::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a fileStorageContainerTypeAppPermissionGrant object in a fileStorageContainerTypeRegistration.
     * @param FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read a specific app permission grant in a fileStorageContainerTypeRegistration.
     * @param FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of a fileStorageContainerTypeAppPermissionGrant object.
     * @param FileStorageContainerTypeAppPermissionGrant $body The request body
     * @param FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(FileStorageContainerTypeAppPermissionGrant $body, ?FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilder
    */
    public function withUrl(string $rawUrl): FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilder {
        return new FileStorageContainerTypeAppPermissionGrantAppItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
