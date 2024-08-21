<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointRestoreSessions\Item\SiteRestoreArtifacts;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SiteRestoreArtifact;
use Microsoft\Graph\Generated\Models\SiteRestoreArtifactCollectionResponse;
use Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointRestoreSessions\Item\SiteRestoreArtifacts\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointRestoreSessions\Item\SiteRestoreArtifacts\Item\SiteRestoreArtifactItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the siteRestoreArtifacts property of the microsoft.graph.sharePointRestoreSession entity.
*/
class SiteRestoreArtifactsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the siteRestoreArtifacts property of the microsoft.graph.sharePointRestoreSession entity.
     * @param string $siteRestoreArtifactId The unique identifier of siteRestoreArtifact
     * @return SiteRestoreArtifactItemRequestBuilder
    */
    public function bySiteRestoreArtifactId(string $siteRestoreArtifactId): SiteRestoreArtifactItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['siteRestoreArtifact%2Did'] = $siteRestoreArtifactId;
        return new SiteRestoreArtifactItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SiteRestoreArtifactsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/sharePointRestoreSessions/{sharePointRestoreSession%2Did}/siteRestoreArtifacts{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * List all the siteRestoreArtifact objects for a sharePointRestoreSession for the tenant.
     * @param SiteRestoreArtifactsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SiteRestoreArtifactCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/sharepointrestoresession-list-siterestoreartifacts?view=graph-rest-1.0 Find more info here
    */
    public function get(?SiteRestoreArtifactsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SiteRestoreArtifactCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to siteRestoreArtifacts for solutions
     * @param SiteRestoreArtifact $body The request body
     * @param SiteRestoreArtifactsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SiteRestoreArtifact|null>
     * @throws Exception
    */
    public function post(SiteRestoreArtifact $body, ?SiteRestoreArtifactsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SiteRestoreArtifact::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * List all the siteRestoreArtifact objects for a sharePointRestoreSession for the tenant.
     * @param SiteRestoreArtifactsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SiteRestoreArtifactsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to siteRestoreArtifacts for solutions
     * @param SiteRestoreArtifact $body The request body
     * @param SiteRestoreArtifactsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SiteRestoreArtifact $body, ?SiteRestoreArtifactsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SiteRestoreArtifactsRequestBuilder
    */
    public function withUrl(string $rawUrl): SiteRestoreArtifactsRequestBuilder {
        return new SiteRestoreArtifactsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
