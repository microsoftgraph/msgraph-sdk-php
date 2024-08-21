<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions\Item\DriveRestoreArtifacts;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DriveRestoreArtifact;
use Microsoft\Graph\Generated\Models\DriveRestoreArtifactCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions\Item\DriveRestoreArtifacts\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions\Item\DriveRestoreArtifacts\Item\DriveRestoreArtifactItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the driveRestoreArtifacts property of the microsoft.graph.oneDriveForBusinessRestoreSession entity.
*/
class DriveRestoreArtifactsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the driveRestoreArtifacts property of the microsoft.graph.oneDriveForBusinessRestoreSession entity.
     * @param string $driveRestoreArtifactId The unique identifier of driveRestoreArtifact
     * @return DriveRestoreArtifactItemRequestBuilder
    */
    public function byDriveRestoreArtifactId(string $driveRestoreArtifactId): DriveRestoreArtifactItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveRestoreArtifact%2Did'] = $driveRestoreArtifactId;
        return new DriveRestoreArtifactItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DriveRestoreArtifactsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/oneDriveForBusinessRestoreSessions/{oneDriveForBusinessRestoreSession%2Did}/driveRestoreArtifacts{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the driveRestoreArtifact objects and their properties for a oneDriveForBusinessRestoreSession for a tenant.
     * @param DriveRestoreArtifactsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriveRestoreArtifactCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/onedriveforbusinessrestoresession-list-driverestoreartifacts?view=graph-rest-1.0 Find more info here
    */
    public function get(?DriveRestoreArtifactsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriveRestoreArtifactCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to driveRestoreArtifacts for solutions
     * @param DriveRestoreArtifact $body The request body
     * @param DriveRestoreArtifactsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriveRestoreArtifact|null>
     * @throws Exception
    */
    public function post(DriveRestoreArtifact $body, ?DriveRestoreArtifactsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriveRestoreArtifact::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the driveRestoreArtifact objects and their properties for a oneDriveForBusinessRestoreSession for a tenant.
     * @param DriveRestoreArtifactsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DriveRestoreArtifactsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to driveRestoreArtifacts for solutions
     * @param DriveRestoreArtifact $body The request body
     * @param DriveRestoreArtifactsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DriveRestoreArtifact $body, ?DriveRestoreArtifactsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DriveRestoreArtifactsRequestBuilder
    */
    public function withUrl(string $rawUrl): DriveRestoreArtifactsRequestBuilder {
        return new DriveRestoreArtifactsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
