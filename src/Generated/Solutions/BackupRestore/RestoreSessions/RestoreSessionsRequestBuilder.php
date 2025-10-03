<?php

namespace Microsoft\\Graph\\Generated\Solutions\BackupRestore\RestoreSessions;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\RestoreSessionBase;
use Microsoft\\Graph\\Generated\Models\RestoreSessionBaseCollectionResponse;
use Microsoft\\Graph\\Generated\Solutions\BackupRestore\RestoreSessions\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Solutions\BackupRestore\RestoreSessions\Item\RestoreSessionBaseItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the restoreSessions property of the microsoft.graph.backupRestoreRoot entity.
*/
class RestoreSessionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the restoreSessions property of the microsoft.graph.backupRestoreRoot entity.
     * @param string $restoreSessionBaseId The unique identifier of restoreSessionBase
     * @return RestoreSessionBaseItemRequestBuilder
    */
    public function byRestoreSessionBaseId(string $restoreSessionBaseId): RestoreSessionBaseItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['restoreSessionBase%2Did'] = $restoreSessionBaseId;
        return new RestoreSessionBaseItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RestoreSessionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/restoreSessions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of restoreSession objects and their properties.
     * @param RestoreSessionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RestoreSessionBaseCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/backuprestoreroot-list-restoresessions?view=graph-rest-1.0 Find more info here
    */
    public function get(?RestoreSessionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RestoreSessionBaseCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to restoreSessions for solutions
     * @param RestoreSessionBase $body The request body
     * @param RestoreSessionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<RestoreSessionBase|null>
     * @throws Exception
    */
    public function post(RestoreSessionBase $body, ?RestoreSessionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [RestoreSessionBase::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of restoreSession objects and their properties.
     * @param RestoreSessionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RestoreSessionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to restoreSessions for solutions
     * @param RestoreSessionBase $body The request body
     * @param RestoreSessionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(RestoreSessionBase $body, ?RestoreSessionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return RestoreSessionsRequestBuilder
    */
    public function withUrl(string $rawUrl): RestoreSessionsRequestBuilder {
        return new RestoreSessionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
