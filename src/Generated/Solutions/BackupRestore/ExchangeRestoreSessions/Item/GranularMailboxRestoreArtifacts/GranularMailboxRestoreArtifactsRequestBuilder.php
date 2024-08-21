<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item\GranularMailboxRestoreArtifacts;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\GranularMailboxRestoreArtifact;
use Microsoft\Graph\Generated\Models\GranularMailboxRestoreArtifactCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item\GranularMailboxRestoreArtifacts\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item\GranularMailboxRestoreArtifacts\Item\GranularMailboxRestoreArtifactItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the granularMailboxRestoreArtifacts property of the microsoft.graph.exchangeRestoreSession entity.
*/
class GranularMailboxRestoreArtifactsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the granularMailboxRestoreArtifacts property of the microsoft.graph.exchangeRestoreSession entity.
     * @param string $granularMailboxRestoreArtifactId The unique identifier of granularMailboxRestoreArtifact
     * @return GranularMailboxRestoreArtifactItemRequestBuilder
    */
    public function byGranularMailboxRestoreArtifactId(string $granularMailboxRestoreArtifactId): GranularMailboxRestoreArtifactItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['granularMailboxRestoreArtifact%2Did'] = $granularMailboxRestoreArtifactId;
        return new GranularMailboxRestoreArtifactItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new GranularMailboxRestoreArtifactsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/exchangeRestoreSessions/{exchangeRestoreSession%2Did}/granularMailboxRestoreArtifacts{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get granularMailboxRestoreArtifacts from solutions
     * @param GranularMailboxRestoreArtifactsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GranularMailboxRestoreArtifactCollectionResponse|null>
     * @throws Exception
    */
    public function get(?GranularMailboxRestoreArtifactsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GranularMailboxRestoreArtifactCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to granularMailboxRestoreArtifacts for solutions
     * @param GranularMailboxRestoreArtifact $body The request body
     * @param GranularMailboxRestoreArtifactsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GranularMailboxRestoreArtifact|null>
     * @throws Exception
    */
    public function post(GranularMailboxRestoreArtifact $body, ?GranularMailboxRestoreArtifactsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GranularMailboxRestoreArtifact::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get granularMailboxRestoreArtifacts from solutions
     * @param GranularMailboxRestoreArtifactsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GranularMailboxRestoreArtifactsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to granularMailboxRestoreArtifacts for solutions
     * @param GranularMailboxRestoreArtifact $body The request body
     * @param GranularMailboxRestoreArtifactsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(GranularMailboxRestoreArtifact $body, ?GranularMailboxRestoreArtifactsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GranularMailboxRestoreArtifactsRequestBuilder
    */
    public function withUrl(string $rawUrl): GranularMailboxRestoreArtifactsRequestBuilder {
        return new GranularMailboxRestoreArtifactsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
