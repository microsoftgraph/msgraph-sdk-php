<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointRestoreSessions\Item\SiteRestoreArtifactsBulkAdditionRequests;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SiteRestoreArtifactsBulkAdditionRequest;
use Microsoft\Graph\Generated\Models\SiteRestoreArtifactsBulkAdditionRequestCollectionResponse;
use Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointRestoreSessions\Item\SiteRestoreArtifactsBulkAdditionRequests\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointRestoreSessions\Item\SiteRestoreArtifactsBulkAdditionRequests\Item\SiteRestoreArtifactsBulkAdditionRequestItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the siteRestoreArtifactsBulkAdditionRequests property of the microsoft.graph.sharePointRestoreSession entity.
*/
class SiteRestoreArtifactsBulkAdditionRequestsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the siteRestoreArtifactsBulkAdditionRequests property of the microsoft.graph.sharePointRestoreSession entity.
     * @param string $siteRestoreArtifactsBulkAdditionRequestId The unique identifier of siteRestoreArtifactsBulkAdditionRequest
     * @return SiteRestoreArtifactsBulkAdditionRequestItemRequestBuilder
    */
    public function bySiteRestoreArtifactsBulkAdditionRequestId(string $siteRestoreArtifactsBulkAdditionRequestId): SiteRestoreArtifactsBulkAdditionRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['siteRestoreArtifactsBulkAdditionRequest%2Did'] = $siteRestoreArtifactsBulkAdditionRequestId;
        return new SiteRestoreArtifactsBulkAdditionRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SiteRestoreArtifactsBulkAdditionRequestsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/sharePointRestoreSessions/{sharePointRestoreSession%2Did}/siteRestoreArtifactsBulkAdditionRequests{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get siteRestoreArtifactsBulkAdditionRequests from solutions
     * @param SiteRestoreArtifactsBulkAdditionRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SiteRestoreArtifactsBulkAdditionRequestCollectionResponse|null>
     * @throws Exception
    */
    public function get(?SiteRestoreArtifactsBulkAdditionRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SiteRestoreArtifactsBulkAdditionRequestCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to siteRestoreArtifactsBulkAdditionRequests for solutions
     * @param SiteRestoreArtifactsBulkAdditionRequest $body The request body
     * @param SiteRestoreArtifactsBulkAdditionRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SiteRestoreArtifactsBulkAdditionRequest|null>
     * @throws Exception
    */
    public function post(SiteRestoreArtifactsBulkAdditionRequest $body, ?SiteRestoreArtifactsBulkAdditionRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SiteRestoreArtifactsBulkAdditionRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get siteRestoreArtifactsBulkAdditionRequests from solutions
     * @param SiteRestoreArtifactsBulkAdditionRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SiteRestoreArtifactsBulkAdditionRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to siteRestoreArtifactsBulkAdditionRequests for solutions
     * @param SiteRestoreArtifactsBulkAdditionRequest $body The request body
     * @param SiteRestoreArtifactsBulkAdditionRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SiteRestoreArtifactsBulkAdditionRequest $body, ?SiteRestoreArtifactsBulkAdditionRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SiteRestoreArtifactsBulkAdditionRequestsRequestBuilder
    */
    public function withUrl(string $rawUrl): SiteRestoreArtifactsBulkAdditionRequestsRequestBuilder {
        return new SiteRestoreArtifactsBulkAdditionRequestsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
