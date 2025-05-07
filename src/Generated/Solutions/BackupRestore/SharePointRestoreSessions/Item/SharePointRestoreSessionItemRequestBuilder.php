<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointRestoreSessions\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SharePointRestoreSession;
use Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointRestoreSessions\Item\SiteRestoreArtifacts\SiteRestoreArtifactsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\SharePointRestoreSessions\Item\SiteRestoreArtifactsBulkAdditionRequests\SiteRestoreArtifactsBulkAdditionRequestsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the sharePointRestoreSessions property of the microsoft.graph.backupRestoreRoot entity.
*/
class SharePointRestoreSessionItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the siteRestoreArtifacts property of the microsoft.graph.sharePointRestoreSession entity.
    */
    public function siteRestoreArtifacts(): SiteRestoreArtifactsRequestBuilder {
        return new SiteRestoreArtifactsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the siteRestoreArtifactsBulkAdditionRequests property of the microsoft.graph.sharePointRestoreSession entity.
    */
    public function siteRestoreArtifactsBulkAdditionRequests(): SiteRestoreArtifactsBulkAdditionRequestsRequestBuilder {
        return new SiteRestoreArtifactsBulkAdditionRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new SharePointRestoreSessionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/sharePointRestoreSessions/{sharePointRestoreSession%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property sharePointRestoreSessions for solutions
     * @param SharePointRestoreSessionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?SharePointRestoreSessionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The list of SharePoint restore sessions available in the tenant.
     * @param SharePointRestoreSessionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharePointRestoreSession|null>
     * @throws Exception
    */
    public function get(?SharePointRestoreSessionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharePointRestoreSession::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property sharePointRestoreSessions in solutions
     * @param SharePointRestoreSession $body The request body
     * @param SharePointRestoreSessionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharePointRestoreSession|null>
     * @throws Exception
    */
    public function patch(SharePointRestoreSession $body, ?SharePointRestoreSessionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharePointRestoreSession::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property sharePointRestoreSessions for solutions
     * @param SharePointRestoreSessionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?SharePointRestoreSessionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * The list of SharePoint restore sessions available in the tenant.
     * @param SharePointRestoreSessionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SharePointRestoreSessionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property sharePointRestoreSessions in solutions
     * @param SharePointRestoreSession $body The request body
     * @param SharePointRestoreSessionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(SharePointRestoreSession $body, ?SharePointRestoreSessionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SharePointRestoreSessionItemRequestBuilder
    */
    public function withUrl(string $rawUrl): SharePointRestoreSessionItemRequestBuilder {
        return new SharePointRestoreSessionItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
