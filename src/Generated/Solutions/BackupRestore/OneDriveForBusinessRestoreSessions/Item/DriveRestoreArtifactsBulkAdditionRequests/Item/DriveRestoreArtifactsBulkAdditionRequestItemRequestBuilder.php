<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions\Item\DriveRestoreArtifactsBulkAdditionRequests\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DriveRestoreArtifactsBulkAdditionRequest;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the driveRestoreArtifactsBulkAdditionRequests property of the microsoft.graph.oneDriveForBusinessRestoreSession entity.
*/
class DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/oneDriveForBusinessRestoreSessions/{oneDriveForBusinessRestoreSession%2Did}/driveRestoreArtifactsBulkAdditionRequests/{driveRestoreArtifactsBulkAdditionRequest%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a driveRestoreArtifactsBulkAdditionRequest object associated with a oneDriveForBusinessRestoreSession.
     * @param DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/driverestoreartifactsbulkadditionrequest-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get a driveRestoreArtifactsBulkAdditionRequest object by its id, associated with a oneDriveForBusinessRestoreSession.
     * @param DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriveRestoreArtifactsBulkAdditionRequest|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/driverestoreartifactsbulkadditionrequest-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriveRestoreArtifactsBulkAdditionRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property driveRestoreArtifactsBulkAdditionRequests in solutions
     * @param DriveRestoreArtifactsBulkAdditionRequest $body The request body
     * @param DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriveRestoreArtifactsBulkAdditionRequest|null>
     * @throws Exception
    */
    public function patch(DriveRestoreArtifactsBulkAdditionRequest $body, ?DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriveRestoreArtifactsBulkAdditionRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a driveRestoreArtifactsBulkAdditionRequest object associated with a oneDriveForBusinessRestoreSession.
     * @param DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Get a driveRestoreArtifactsBulkAdditionRequest object by its id, associated with a oneDriveForBusinessRestoreSession.
     * @param DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property driveRestoreArtifactsBulkAdditionRequests in solutions
     * @param DriveRestoreArtifactsBulkAdditionRequest $body The request body
     * @param DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(DriveRestoreArtifactsBulkAdditionRequest $body, ?DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilder
    */
    public function withUrl(string $rawUrl): DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilder {
        return new DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
