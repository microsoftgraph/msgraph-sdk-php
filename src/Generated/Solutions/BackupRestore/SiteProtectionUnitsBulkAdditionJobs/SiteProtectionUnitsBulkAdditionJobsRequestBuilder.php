<?php

namespace Microsoft\\Graph\\Generated\Solutions\BackupRestore\SiteProtectionUnitsBulkAdditionJobs;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\SiteProtectionUnitsBulkAdditionJob;
use Microsoft\\Graph\\Generated\Models\SiteProtectionUnitsBulkAdditionJobCollectionResponse;
use Microsoft\\Graph\\Generated\Solutions\BackupRestore\SiteProtectionUnitsBulkAdditionJobs\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Solutions\BackupRestore\SiteProtectionUnitsBulkAdditionJobs\Item\SiteProtectionUnitsBulkAdditionJobItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the siteProtectionUnitsBulkAdditionJobs property of the microsoft.graph.backupRestoreRoot entity.
*/
class SiteProtectionUnitsBulkAdditionJobsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the siteProtectionUnitsBulkAdditionJobs property of the microsoft.graph.backupRestoreRoot entity.
     * @param string $siteProtectionUnitsBulkAdditionJobId The unique identifier of siteProtectionUnitsBulkAdditionJob
     * @return SiteProtectionUnitsBulkAdditionJobItemRequestBuilder
    */
    public function bySiteProtectionUnitsBulkAdditionJobId(string $siteProtectionUnitsBulkAdditionJobId): SiteProtectionUnitsBulkAdditionJobItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['siteProtectionUnitsBulkAdditionJob%2Did'] = $siteProtectionUnitsBulkAdditionJobId;
        return new SiteProtectionUnitsBulkAdditionJobItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SiteProtectionUnitsBulkAdditionJobsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/siteProtectionUnitsBulkAdditionJobs{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get siteProtectionUnitsBulkAdditionJobs from solutions
     * @param SiteProtectionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SiteProtectionUnitsBulkAdditionJobCollectionResponse|null>
     * @throws Exception
    */
    public function get(?SiteProtectionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SiteProtectionUnitsBulkAdditionJobCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to siteProtectionUnitsBulkAdditionJobs for solutions
     * @param SiteProtectionUnitsBulkAdditionJob $body The request body
     * @param SiteProtectionUnitsBulkAdditionJobsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SiteProtectionUnitsBulkAdditionJob|null>
     * @throws Exception
    */
    public function post(SiteProtectionUnitsBulkAdditionJob $body, ?SiteProtectionUnitsBulkAdditionJobsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SiteProtectionUnitsBulkAdditionJob::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get siteProtectionUnitsBulkAdditionJobs from solutions
     * @param SiteProtectionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SiteProtectionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to siteProtectionUnitsBulkAdditionJobs for solutions
     * @param SiteProtectionUnitsBulkAdditionJob $body The request body
     * @param SiteProtectionUnitsBulkAdditionJobsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SiteProtectionUnitsBulkAdditionJob $body, ?SiteProtectionUnitsBulkAdditionJobsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SiteProtectionUnitsBulkAdditionJobsRequestBuilder
    */
    public function withUrl(string $rawUrl): SiteProtectionUnitsBulkAdditionJobsRequestBuilder {
        return new SiteProtectionUnitsBulkAdditionJobsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
