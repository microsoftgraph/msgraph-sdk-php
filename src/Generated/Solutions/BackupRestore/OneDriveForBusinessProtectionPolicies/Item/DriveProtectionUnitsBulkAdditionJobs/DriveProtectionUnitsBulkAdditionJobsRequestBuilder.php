<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessProtectionPolicies\Item\DriveProtectionUnitsBulkAdditionJobs;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\DriveProtectionUnitsBulkAdditionJobCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessProtectionPolicies\Item\DriveProtectionUnitsBulkAdditionJobs\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessProtectionPolicies\Item\DriveProtectionUnitsBulkAdditionJobs\Item\DriveProtectionUnitsBulkAdditionJobItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the driveProtectionUnitsBulkAdditionJobs property of the microsoft.graph.oneDriveForBusinessProtectionPolicy entity.
*/
class DriveProtectionUnitsBulkAdditionJobsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the driveProtectionUnitsBulkAdditionJobs property of the microsoft.graph.oneDriveForBusinessProtectionPolicy entity.
     * @param string $driveProtectionUnitsBulkAdditionJobId The unique identifier of driveProtectionUnitsBulkAdditionJob
     * @return DriveProtectionUnitsBulkAdditionJobItemRequestBuilder
    */
    public function byDriveProtectionUnitsBulkAdditionJobId(string $driveProtectionUnitsBulkAdditionJobId): DriveProtectionUnitsBulkAdditionJobItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['driveProtectionUnitsBulkAdditionJob%2Did'] = $driveProtectionUnitsBulkAdditionJobId;
        return new DriveProtectionUnitsBulkAdditionJobItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new DriveProtectionUnitsBulkAdditionJobsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/oneDriveForBusinessProtectionPolicies/{oneDriveForBusinessProtectionPolicy%2Did}/driveProtectionUnitsBulkAdditionJobs{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get driveProtectionUnitsBulkAdditionJobs from solutions
     * @param DriveProtectionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<DriveProtectionUnitsBulkAdditionJobCollectionResponse|null>
     * @throws Exception
    */
    public function get(?DriveProtectionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [DriveProtectionUnitsBulkAdditionJobCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get driveProtectionUnitsBulkAdditionJobs from solutions
     * @param DriveProtectionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?DriveProtectionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return DriveProtectionUnitsBulkAdditionJobsRequestBuilder
    */
    public function withUrl(string $rawUrl): DriveProtectionUnitsBulkAdditionJobsRequestBuilder {
        return new DriveProtectionUnitsBulkAdditionJobsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
