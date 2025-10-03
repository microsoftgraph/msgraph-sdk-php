<?php

namespace Microsoft\\Graph\\Generated\Solutions\BackupRestore\SharePointRestoreSessions;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\SharePointRestoreSession;
use Microsoft\\Graph\\Generated\Models\SharePointRestoreSessionCollectionResponse;
use Microsoft\\Graph\\Generated\Solutions\BackupRestore\SharePointRestoreSessions\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Solutions\BackupRestore\SharePointRestoreSessions\Item\SharePointRestoreSessionItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the sharePointRestoreSessions property of the microsoft.graph.backupRestoreRoot entity.
*/
class SharePointRestoreSessionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sharePointRestoreSessions property of the microsoft.graph.backupRestoreRoot entity.
     * @param string $sharePointRestoreSessionId The unique identifier of sharePointRestoreSession
     * @return SharePointRestoreSessionItemRequestBuilder
    */
    public function bySharePointRestoreSessionId(string $sharePointRestoreSessionId): SharePointRestoreSessionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sharePointRestoreSession%2Did'] = $sharePointRestoreSessionId;
        return new SharePointRestoreSessionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SharePointRestoreSessionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/sharePointRestoreSessions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The list of SharePoint restore sessions available in the tenant.
     * @param SharePointRestoreSessionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharePointRestoreSessionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?SharePointRestoreSessionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharePointRestoreSessionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new sharePointRestoreSession object.
     * @param SharePointRestoreSession $body The request body
     * @param SharePointRestoreSessionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharePointRestoreSession|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/backuprestoreroot-post-sharepointrestoresessions?view=graph-rest-1.0 Find more info here
    */
    public function post(SharePointRestoreSession $body, ?SharePointRestoreSessionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharePointRestoreSession::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The list of SharePoint restore sessions available in the tenant.
     * @param SharePointRestoreSessionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SharePointRestoreSessionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new sharePointRestoreSession object.
     * @param SharePointRestoreSession $body The request body
     * @param SharePointRestoreSessionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SharePointRestoreSession $body, ?SharePointRestoreSessionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SharePointRestoreSessionsRequestBuilder
    */
    public function withUrl(string $rawUrl): SharePointRestoreSessionsRequestBuilder {
        return new SharePointRestoreSessionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
