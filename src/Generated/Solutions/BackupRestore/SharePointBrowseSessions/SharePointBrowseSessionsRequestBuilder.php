<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointBrowseSessions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SharePointBrowseSession;
use Microsoft\Graph\Generated\Models\SharePointBrowseSessionCollectionResponse;
use Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointBrowseSessions\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointBrowseSessions\Item\SharePointBrowseSessionItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the sharePointBrowseSessions property of the microsoft.graph.backupRestoreRoot entity.
*/
class SharePointBrowseSessionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sharePointBrowseSessions property of the microsoft.graph.backupRestoreRoot entity.
     * @param string $sharePointBrowseSessionId The unique identifier of sharePointBrowseSession
     * @return SharePointBrowseSessionItemRequestBuilder
    */
    public function bySharePointBrowseSessionId(string $sharePointBrowseSessionId): SharePointBrowseSessionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sharePointBrowseSession%2Did'] = $sharePointBrowseSessionId;
        return new SharePointBrowseSessionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SharePointBrowseSessionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/sharePointBrowseSessions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get sharePointBrowseSessions from solutions
     * @param SharePointBrowseSessionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharePointBrowseSessionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?SharePointBrowseSessionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharePointBrowseSessionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to sharePointBrowseSessions for solutions
     * @param SharePointBrowseSession $body The request body
     * @param SharePointBrowseSessionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharePointBrowseSession|null>
     * @throws Exception
    */
    public function post(SharePointBrowseSession $body, ?SharePointBrowseSessionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharePointBrowseSession::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get sharePointBrowseSessions from solutions
     * @param SharePointBrowseSessionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SharePointBrowseSessionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to sharePointBrowseSessions for solutions
     * @param SharePointBrowseSession $body The request body
     * @param SharePointBrowseSessionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SharePointBrowseSession $body, ?SharePointBrowseSessionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SharePointBrowseSessionsRequestBuilder
    */
    public function withUrl(string $rawUrl): SharePointBrowseSessionsRequestBuilder {
        return new SharePointBrowseSessionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
