<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ExchangeRestoreSession;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item\GranularMailboxRestoreArtifacts\GranularMailboxRestoreArtifactsRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item\MailboxRestoreArtifacts\MailboxRestoreArtifactsRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the exchangeRestoreSessions property of the microsoft.graph.backupRestoreRoot entity.
*/
class ExchangeRestoreSessionItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the granularMailboxRestoreArtifacts property of the microsoft.graph.exchangeRestoreSession entity.
    */
    public function granularMailboxRestoreArtifacts(): GranularMailboxRestoreArtifactsRequestBuilder {
        return new GranularMailboxRestoreArtifactsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mailboxRestoreArtifacts property of the microsoft.graph.exchangeRestoreSession entity.
    */
    public function mailboxRestoreArtifacts(): MailboxRestoreArtifactsRequestBuilder {
        return new MailboxRestoreArtifactsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new ExchangeRestoreSessionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/exchangeRestoreSessions/{exchangeRestoreSession%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property exchangeRestoreSessions for solutions
     * @param ExchangeRestoreSessionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?ExchangeRestoreSessionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * The list of Exchange restore sessions available in the tenant.
     * @param ExchangeRestoreSessionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExchangeRestoreSession|null>
     * @throws Exception
    */
    public function get(?ExchangeRestoreSessionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExchangeRestoreSession::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the properties of an exchangeRestoreSession.
     * @param ExchangeRestoreSession $body The request body
     * @param ExchangeRestoreSessionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ExchangeRestoreSession|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/exchangerestoresession-update?view=graph-rest-1.0 Find more info here
    */
    public function patch(ExchangeRestoreSession $body, ?ExchangeRestoreSessionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ExchangeRestoreSession::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property exchangeRestoreSessions for solutions
     * @param ExchangeRestoreSessionItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ExchangeRestoreSessionItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * The list of Exchange restore sessions available in the tenant.
     * @param ExchangeRestoreSessionItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ExchangeRestoreSessionItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the properties of an exchangeRestoreSession.
     * @param ExchangeRestoreSession $body The request body
     * @param ExchangeRestoreSessionItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ExchangeRestoreSession $body, ?ExchangeRestoreSessionItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ExchangeRestoreSessionItemRequestBuilder
    */
    public function withUrl(string $rawUrl): ExchangeRestoreSessionItemRequestBuilder {
        return new ExchangeRestoreSessionItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
