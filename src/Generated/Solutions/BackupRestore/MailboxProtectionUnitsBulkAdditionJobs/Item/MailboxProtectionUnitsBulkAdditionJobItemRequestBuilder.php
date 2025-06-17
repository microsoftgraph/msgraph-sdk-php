<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\MailboxProtectionUnitsBulkAdditionJobs\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\MailboxProtectionUnitsBulkAdditionJob;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mailboxProtectionUnitsBulkAdditionJobs property of the microsoft.graph.backupRestoreRoot entity.
*/
class MailboxProtectionUnitsBulkAdditionJobItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MailboxProtectionUnitsBulkAdditionJobItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/mailboxProtectionUnitsBulkAdditionJobs/{mailboxProtectionUnitsBulkAdditionJob%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property mailboxProtectionUnitsBulkAdditionJobs for solutions
     * @param MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Get mailboxProtectionUnitsBulkAdditionJobs from solutions
     * @param MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailboxProtectionUnitsBulkAdditionJob|null>
     * @throws Exception
    */
    public function get(?MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailboxProtectionUnitsBulkAdditionJob::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property mailboxProtectionUnitsBulkAdditionJobs in solutions
     * @param MailboxProtectionUnitsBulkAdditionJob $body The request body
     * @param MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailboxProtectionUnitsBulkAdditionJob|null>
     * @throws Exception
    */
    public function patch(MailboxProtectionUnitsBulkAdditionJob $body, ?MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailboxProtectionUnitsBulkAdditionJob::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property mailboxProtectionUnitsBulkAdditionJobs for solutions
     * @param MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Get mailboxProtectionUnitsBulkAdditionJobs from solutions
     * @param MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property mailboxProtectionUnitsBulkAdditionJobs in solutions
     * @param MailboxProtectionUnitsBulkAdditionJob $body The request body
     * @param MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(MailboxProtectionUnitsBulkAdditionJob $body, ?MailboxProtectionUnitsBulkAdditionJobItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MailboxProtectionUnitsBulkAdditionJobItemRequestBuilder
    */
    public function withUrl(string $rawUrl): MailboxProtectionUnitsBulkAdditionJobItemRequestBuilder {
        return new MailboxProtectionUnitsBulkAdditionJobItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
