<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item\MailboxRestoreArtifactsBulkAdditionRequests\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\MailboxRestoreArtifactsBulkAdditionRequest;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mailboxRestoreArtifactsBulkAdditionRequests property of the microsoft.graph.exchangeRestoreSession entity.
*/
class MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/exchangeRestoreSessions/{exchangeRestoreSession%2Did}/mailboxRestoreArtifactsBulkAdditionRequests/{mailboxRestoreArtifactsBulkAdditionRequest%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a mailboxRestoreArtifactsBulkAdditionRequest object associated with an exchangeRestoreSession.
     * @param MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/mailboxrestoreartifactsbulkadditionrequest-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get a mailboxRestoreArtifactsBulkAdditionRequest object by its id, associated with an exchangeRestoreSession.
     * @param MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailboxRestoreArtifactsBulkAdditionRequest|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/mailboxrestoreartifactsbulkadditionrequest-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailboxRestoreArtifactsBulkAdditionRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property mailboxRestoreArtifactsBulkAdditionRequests in solutions
     * @param MailboxRestoreArtifactsBulkAdditionRequest $body The request body
     * @param MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailboxRestoreArtifactsBulkAdditionRequest|null>
     * @throws Exception
    */
    public function patch(MailboxRestoreArtifactsBulkAdditionRequest $body, ?MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailboxRestoreArtifactsBulkAdditionRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete a mailboxRestoreArtifactsBulkAdditionRequest object associated with an exchangeRestoreSession.
     * @param MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get a mailboxRestoreArtifactsBulkAdditionRequest object by its id, associated with an exchangeRestoreSession.
     * @param MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property mailboxRestoreArtifactsBulkAdditionRequests in solutions
     * @param MailboxRestoreArtifactsBulkAdditionRequest $body The request body
     * @param MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(MailboxRestoreArtifactsBulkAdditionRequest $body, ?MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilder
    */
    public function withUrl(string $rawUrl): MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilder {
        return new MailboxRestoreArtifactsBulkAdditionRequestItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
