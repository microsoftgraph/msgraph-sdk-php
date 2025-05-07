<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item\MailboxRestoreArtifactsBulkAdditionRequests;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\MailboxRestoreArtifactsBulkAdditionRequest;
use Microsoft\Graph\Generated\Models\MailboxRestoreArtifactsBulkAdditionRequestCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item\MailboxRestoreArtifactsBulkAdditionRequests\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item\MailboxRestoreArtifactsBulkAdditionRequests\Item\MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mailboxRestoreArtifactsBulkAdditionRequests property of the microsoft.graph.exchangeRestoreSession entity.
*/
class MailboxRestoreArtifactsBulkAdditionRequestsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mailboxRestoreArtifactsBulkAdditionRequests property of the microsoft.graph.exchangeRestoreSession entity.
     * @param string $mailboxRestoreArtifactsBulkAdditionRequestId The unique identifier of mailboxRestoreArtifactsBulkAdditionRequest
     * @return MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilder
    */
    public function byMailboxRestoreArtifactsBulkAdditionRequestId(string $mailboxRestoreArtifactsBulkAdditionRequestId): MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mailboxRestoreArtifactsBulkAdditionRequest%2Did'] = $mailboxRestoreArtifactsBulkAdditionRequestId;
        return new MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MailboxRestoreArtifactsBulkAdditionRequestsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/exchangeRestoreSessions/{exchangeRestoreSession%2Did}/mailboxRestoreArtifactsBulkAdditionRequests{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get mailboxRestoreArtifactsBulkAdditionRequests from solutions
     * @param MailboxRestoreArtifactsBulkAdditionRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailboxRestoreArtifactsBulkAdditionRequestCollectionResponse|null>
     * @throws Exception
    */
    public function get(?MailboxRestoreArtifactsBulkAdditionRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailboxRestoreArtifactsBulkAdditionRequestCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to mailboxRestoreArtifactsBulkAdditionRequests for solutions
     * @param MailboxRestoreArtifactsBulkAdditionRequest $body The request body
     * @param MailboxRestoreArtifactsBulkAdditionRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailboxRestoreArtifactsBulkAdditionRequest|null>
     * @throws Exception
    */
    public function post(MailboxRestoreArtifactsBulkAdditionRequest $body, ?MailboxRestoreArtifactsBulkAdditionRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailboxRestoreArtifactsBulkAdditionRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get mailboxRestoreArtifactsBulkAdditionRequests from solutions
     * @param MailboxRestoreArtifactsBulkAdditionRequestsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MailboxRestoreArtifactsBulkAdditionRequestsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to mailboxRestoreArtifactsBulkAdditionRequests for solutions
     * @param MailboxRestoreArtifactsBulkAdditionRequest $body The request body
     * @param MailboxRestoreArtifactsBulkAdditionRequestsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MailboxRestoreArtifactsBulkAdditionRequest $body, ?MailboxRestoreArtifactsBulkAdditionRequestsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MailboxRestoreArtifactsBulkAdditionRequestsRequestBuilder
    */
    public function withUrl(string $rawUrl): MailboxRestoreArtifactsBulkAdditionRequestsRequestBuilder {
        return new MailboxRestoreArtifactsBulkAdditionRequestsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
