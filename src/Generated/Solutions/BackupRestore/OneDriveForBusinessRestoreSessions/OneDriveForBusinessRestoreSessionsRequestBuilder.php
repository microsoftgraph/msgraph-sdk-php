<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\OneDriveForBusinessRestoreSession;
use Microsoft\Graph\Generated\Models\OneDriveForBusinessRestoreSessionCollectionResponse;
use Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\OneDriveForBusinessRestoreSessions\Item\OneDriveForBusinessRestoreSessionItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the oneDriveForBusinessRestoreSessions property of the microsoft.graph.backupRestoreRoot entity.
*/
class OneDriveForBusinessRestoreSessionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the oneDriveForBusinessRestoreSessions property of the microsoft.graph.backupRestoreRoot entity.
     * @param string $oneDriveForBusinessRestoreSessionId The unique identifier of oneDriveForBusinessRestoreSession
     * @return OneDriveForBusinessRestoreSessionItemRequestBuilder
    */
    public function byOneDriveForBusinessRestoreSessionId(string $oneDriveForBusinessRestoreSessionId): OneDriveForBusinessRestoreSessionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['oneDriveForBusinessRestoreSession%2Did'] = $oneDriveForBusinessRestoreSessionId;
        return new OneDriveForBusinessRestoreSessionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new OneDriveForBusinessRestoreSessionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * The list of OneDrive for Business restore sessions available in the tenant.
     * @param OneDriveForBusinessRestoreSessionsRequestBuilderGetRequ_34ff2b20|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OneDriveForBusinessRestoreSessionCollectionResponse|null>
     * @throws Exception
    */
    public function get(?OneDriveForBusinessRestoreSessionsRequestBuilderGetRequ_34ff2b20 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OneDriveForBusinessRestoreSessionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new oneDriveForBusinessRestoreSession object. To create a granular restore session, granular drive restore artifacts must be present in the payload. A request can't include both granularDriveRestoreArtifact and driveRestoreArtifact in the same create or update request. If no payload is provided when you create the restore session, the request creates an empty standard restore session by default.
     * @param OneDriveForBusinessRestoreSession $body The request body
     * @param OneDriveForBusinessRestoreSessionsRequestBuilderPostReq_ef313636|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<OneDriveForBusinessRestoreSession|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/backuprestoreroot-post-onedriveforbusinessrestoresessions?view=graph-rest-1.0 Find more info here
    */
    public function post(OneDriveForBusinessRestoreSession $body, ?OneDriveForBusinessRestoreSessionsRequestBuilderPostReq_ef313636 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [OneDriveForBusinessRestoreSession::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * The list of OneDrive for Business restore sessions available in the tenant.
     * @param OneDriveForBusinessRestoreSessionsRequestBuilderGetRequ_34ff2b20|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?OneDriveForBusinessRestoreSessionsRequestBuilderGetRequ_34ff2b20 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/solutions/backupRestore/oneDriveForBusinessRestoreSessions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}';
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
     * Create a new oneDriveForBusinessRestoreSession object. To create a granular restore session, granular drive restore artifacts must be present in the payload. A request can't include both granularDriveRestoreArtifact and driveRestoreArtifact in the same create or update request. If no payload is provided when you create the restore session, the request creates an empty standard restore session by default.
     * @param OneDriveForBusinessRestoreSession $body The request body
     * @param OneDriveForBusinessRestoreSessionsRequestBuilderPostReq_ef313636|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(OneDriveForBusinessRestoreSession $body, ?OneDriveForBusinessRestoreSessionsRequestBuilderPostReq_ef313636 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/solutions/backupRestore/oneDriveForBusinessRestoreSessions';
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
     * @return OneDriveForBusinessRestoreSessionsRequestBuilder
    */
    public function withUrl(string $rawUrl): OneDriveForBusinessRestoreSessionsRequestBuilder {
        return new OneDriveForBusinessRestoreSessionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
