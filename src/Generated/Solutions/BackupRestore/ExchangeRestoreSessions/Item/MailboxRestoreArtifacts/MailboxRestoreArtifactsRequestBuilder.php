<?php

namespace Microsoft\\Graph\\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item\MailboxRestoreArtifacts;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\MailboxRestoreArtifact;
use Microsoft\\Graph\\Generated\Models\MailboxRestoreArtifactCollectionResponse;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item\MailboxRestoreArtifacts\Count\CountRequestBuilder;
use Microsoft\\Graph\\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item\MailboxRestoreArtifacts\Item\MailboxRestoreArtifactItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mailboxRestoreArtifacts property of the microsoft.graph.exchangeRestoreSession entity.
*/
class MailboxRestoreArtifactsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mailboxRestoreArtifacts property of the microsoft.graph.exchangeRestoreSession entity.
     * @param string $mailboxRestoreArtifactId The unique identifier of mailboxRestoreArtifact
     * @return MailboxRestoreArtifactItemRequestBuilder
    */
    public function byMailboxRestoreArtifactId(string $mailboxRestoreArtifactId): MailboxRestoreArtifactItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mailboxRestoreArtifact%2Did'] = $mailboxRestoreArtifactId;
        return new MailboxRestoreArtifactItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MailboxRestoreArtifactsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/exchangeRestoreSessions/{exchangeRestoreSession%2Did}/mailboxRestoreArtifacts{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the mailboxRestoreArtifact objects that are associated with an exchangeRestoreSession in a tenant.
     * @param MailboxRestoreArtifactsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailboxRestoreArtifactCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/exchangerestoresession-list-mailboxrestoreartifacts?view=graph-rest-1.0 Find more info here
    */
    public function get(?MailboxRestoreArtifactsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailboxRestoreArtifactCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to mailboxRestoreArtifacts for solutions
     * @param MailboxRestoreArtifact $body The request body
     * @param MailboxRestoreArtifactsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailboxRestoreArtifact|null>
     * @throws Exception
    */
    public function post(MailboxRestoreArtifact $body, ?MailboxRestoreArtifactsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailboxRestoreArtifact::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the mailboxRestoreArtifact objects that are associated with an exchangeRestoreSession in a tenant.
     * @param MailboxRestoreArtifactsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MailboxRestoreArtifactsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to mailboxRestoreArtifacts for solutions
     * @param MailboxRestoreArtifact $body The request body
     * @param MailboxRestoreArtifactsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MailboxRestoreArtifact $body, ?MailboxRestoreArtifactsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MailboxRestoreArtifactsRequestBuilder
    */
    public function withUrl(string $rawUrl): MailboxRestoreArtifactsRequestBuilder {
        return new MailboxRestoreArtifactsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
