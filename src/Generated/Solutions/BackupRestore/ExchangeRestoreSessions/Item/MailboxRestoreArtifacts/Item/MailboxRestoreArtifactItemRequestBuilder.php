<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item\MailboxRestoreArtifacts\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\MailboxRestoreArtifact;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeRestoreSessions\Item\MailboxRestoreArtifacts\Item\RestorePoint\RestorePointRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mailboxRestoreArtifacts property of the microsoft.graph.exchangeRestoreSession entity.
*/
class MailboxRestoreArtifactItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the restorePoint property of the microsoft.graph.restoreArtifactBase entity.
    */
    public function restorePoint(): RestorePointRequestBuilder {
        return new RestorePointRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new MailboxRestoreArtifactItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/exchangeRestoreSessions/{exchangeRestoreSession%2Did}/mailboxRestoreArtifacts/{mailboxRestoreArtifact%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property mailboxRestoreArtifacts for solutions
     * @param MailboxRestoreArtifactItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?MailboxRestoreArtifactItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * A collection of restore points and destination details that can be used to restore Exchange mailboxes.
     * @param MailboxRestoreArtifactItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailboxRestoreArtifact|null>
     * @throws Exception
    */
    public function get(?MailboxRestoreArtifactItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailboxRestoreArtifact::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property mailboxRestoreArtifacts in solutions
     * @param MailboxRestoreArtifact $body The request body
     * @param MailboxRestoreArtifactItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailboxRestoreArtifact|null>
     * @throws Exception
    */
    public function patch(MailboxRestoreArtifact $body, ?MailboxRestoreArtifactItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailboxRestoreArtifact::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property mailboxRestoreArtifacts for solutions
     * @param MailboxRestoreArtifactItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MailboxRestoreArtifactItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * A collection of restore points and destination details that can be used to restore Exchange mailboxes.
     * @param MailboxRestoreArtifactItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MailboxRestoreArtifactItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property mailboxRestoreArtifacts in solutions
     * @param MailboxRestoreArtifact $body The request body
     * @param MailboxRestoreArtifactItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(MailboxRestoreArtifact $body, ?MailboxRestoreArtifactItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MailboxRestoreArtifactItemRequestBuilder
    */
    public function withUrl(string $rawUrl): MailboxRestoreArtifactItemRequestBuilder {
        return new MailboxRestoreArtifactItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
