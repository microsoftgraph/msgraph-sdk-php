<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions\Item\DriveRestoreArtifactsBulkAdditionRequests;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DriveRestoreArtifactsBulkAdditionRequest;
use Microsoft\Graph\Generated\Models\DriveRestoreArtifactsBulkAdditionRequestCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions\Item\DriveRestoreArtifactsBulkAdditionRequests\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions\Item\DriveRestoreArtifactsBulkAdditionRequests\Item\DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the driveRestoreArtifactsBulkAdditionRequests property of the microsoft.graph.oneDriveForBusinessRestoreSession entity.
*/
class DriveRestoreArtifactsBulkAdditionRequestsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the driveRestoreArtifactsBulkAdditionRequests property of the microsoft.graph.oneDriveForBusinessRestoreSession entity.
     * @param string $driveRestoreArtifactsBulkAdditionRequestId The unique identifier of driveRestoreArtifactsBulkAdditionRequest
     * @return DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilder
    */
    public function byDriveRestoreArtifactsBulkAdditionRequestId(string $driveRestoreArtifactsBulkAdditionRequestId): DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveRestoreArtifactsBulkAdditionRequest%2Did'] = $driveRestoreArtifactsBulkAdditionRequestId;
        return new DriveRestoreArtifactsBulkAdditionRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DriveRestoreArtifactsBulkAdditionRequestsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/oneDriveForBusinessRestoreSessions/{oneDriveForBusinessRestoreSession%2Did}/driveRestoreArtifactsBulkAdditionRequests{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the driveRestoreArtifactsBulkAdditionRequest objects associated with a oneDriveForBusinessRestoreSession. The drives property is deliberately omitted from the response body in order to limit the response size.
     * @param DriveRestoreArtifactsBulkAdditionRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriveRestoreArtifactsBulkAdditionRequestCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/onedriveforbusinessrestoresession-list-driverestoreartifactsbulkadditionrequests?view=graph-rest-1.0 Find more info here
    */
    public function get(?DriveRestoreArtifactsBulkAdditionRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriveRestoreArtifactsBulkAdditionRequestCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a driveRestoreArtifactsBulkAdditionRequest object associated with a oneDriveForBusinessRestoreSession. The following steps describe how to create and manage a oneDriveForBusinessRestoreSession with bulk artifact additions.
     * @param DriveRestoreArtifactsBulkAdditionRequest $body The request body
     * @param DriveRestoreArtifactsBulkAdditionRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriveRestoreArtifactsBulkAdditionRequest|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/onedriveforbusinessrestoresession-post-driverestoreartifactsbulkadditionrequests?view=graph-rest-1.0 Find more info here
    */
    public function post(DriveRestoreArtifactsBulkAdditionRequest $body, ?DriveRestoreArtifactsBulkAdditionRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriveRestoreArtifactsBulkAdditionRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the driveRestoreArtifactsBulkAdditionRequest objects associated with a oneDriveForBusinessRestoreSession. The drives property is deliberately omitted from the response body in order to limit the response size.
     * @param DriveRestoreArtifactsBulkAdditionRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DriveRestoreArtifactsBulkAdditionRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a driveRestoreArtifactsBulkAdditionRequest object associated with a oneDriveForBusinessRestoreSession. The following steps describe how to create and manage a oneDriveForBusinessRestoreSession with bulk artifact additions.
     * @param DriveRestoreArtifactsBulkAdditionRequest $body The request body
     * @param DriveRestoreArtifactsBulkAdditionRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DriveRestoreArtifactsBulkAdditionRequest $body, ?DriveRestoreArtifactsBulkAdditionRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DriveRestoreArtifactsBulkAdditionRequestsRequestBuilder
    */
    public function withUrl(string $rawUrl): DriveRestoreArtifactsBulkAdditionRequestsRequestBuilder {
        return new DriveRestoreArtifactsBulkAdditionRequestsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
