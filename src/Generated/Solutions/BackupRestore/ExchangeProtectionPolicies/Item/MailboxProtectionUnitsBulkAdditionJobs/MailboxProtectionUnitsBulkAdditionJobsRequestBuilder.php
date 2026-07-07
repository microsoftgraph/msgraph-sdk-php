<?php

namespace Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeProtectionPolicies\Item\MailboxProtectionUnitsBulkAdditionJobs;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\MailboxProtectionUnitsBulkAdditionJobCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeProtectionPolicies\Item\MailboxProtectionUnitsBulkAdditionJobs\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Solutions\BackupRestore\ExchangeProtectionPolicies\Item\MailboxProtectionUnitsBulkAdditionJobs\Item\MailboxProtectionUnitsBulkAdditionJobItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the mailboxProtectionUnitsBulkAdditionJobs property of the microsoft.graph.exchangeProtectionPolicy entity.
*/
class MailboxProtectionUnitsBulkAdditionJobsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the mailboxProtectionUnitsBulkAdditionJobs property of the microsoft.graph.exchangeProtectionPolicy entity.
     * @param string $mailboxProtectionUnitsBulkAdditionJobId The unique identifier of mailboxProtectionUnitsBulkAdditionJob
     * @return MailboxProtectionUnitsBulkAdditionJobItemRequestBuilder
    */
    public function byMailboxProtectionUnitsBulkAdditionJobId(string $mailboxProtectionUnitsBulkAdditionJobId): MailboxProtectionUnitsBulkAdditionJobItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['mailboxProtectionUnitsBulkAdditionJob%2Did'] = $mailboxProtectionUnitsBulkAdditionJobId;
        return new MailboxProtectionUnitsBulkAdditionJobItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MailboxProtectionUnitsBulkAdditionJobsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/solutions/backupRestore/exchangeProtectionPolicies/{exchangeProtectionPolicy%2Did}/mailboxProtectionUnitsBulkAdditionJobs{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of mailboxProtectionUnitsBulkAdditionJobs objects associated with an exchangeProtectionPolicy.
     * @param MailboxProtectionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MailboxProtectionUnitsBulkAdditionJobCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/exchangeprotectionpolicy-list-mailboxprotectionunitsbulkadditionjobs?view=graph-rest-1.0 Find more info here
    */
    public function get(?MailboxProtectionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MailboxProtectionUnitsBulkAdditionJobCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of mailboxProtectionUnitsBulkAdditionJobs objects associated with an exchangeProtectionPolicy.
     * @param MailboxProtectionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MailboxProtectionUnitsBulkAdditionJobsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MailboxProtectionUnitsBulkAdditionJobsRequestBuilder
    */
    public function withUrl(string $rawUrl): MailboxProtectionUnitsBulkAdditionJobsRequestBuilder {
        return new MailboxProtectionUnitsBulkAdditionJobsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
