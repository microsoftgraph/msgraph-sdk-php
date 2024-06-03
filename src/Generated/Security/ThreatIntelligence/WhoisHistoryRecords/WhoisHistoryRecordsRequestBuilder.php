<?php

namespace Microsoft\Graph\Generated\Security\ThreatIntelligence\WhoisHistoryRecords;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\Security\WhoisHistoryRecord;
use Microsoft\Graph\Generated\Models\Security\WhoisHistoryRecordCollectionResponse;
use Microsoft\Graph\Generated\Security\ThreatIntelligence\WhoisHistoryRecords\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Security\ThreatIntelligence\WhoisHistoryRecords\Item\WhoisHistoryRecordItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the whoisHistoryRecords property of the microsoft.graph.security.threatIntelligence entity.
*/
class WhoisHistoryRecordsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the whoisHistoryRecords property of the microsoft.graph.security.threatIntelligence entity.
     * @param string $whoisHistoryRecordId The unique identifier of whoisHistoryRecord
     * @return WhoisHistoryRecordItemRequestBuilder
    */
    public function byWhoisHistoryRecordId(string $whoisHistoryRecordId): WhoisHistoryRecordItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['whoisHistoryRecord%2Did'] = $whoisHistoryRecordId;
        return new WhoisHistoryRecordItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new WhoisHistoryRecordsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/security/threatIntelligence/whoisHistoryRecords{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve details about whoisHistoryRecord objects.Note: List retrieval is not yet supported.
     * @param WhoisHistoryRecordsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WhoisHistoryRecordCollectionResponse|null>
     * @throws Exception
    */
    public function get(?WhoisHistoryRecordsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WhoisHistoryRecordCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to whoisHistoryRecords for security
     * @param WhoisHistoryRecord $body The request body
     * @param WhoisHistoryRecordsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<WhoisHistoryRecord|null>
     * @throws Exception
    */
    public function post(WhoisHistoryRecord $body, ?WhoisHistoryRecordsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [WhoisHistoryRecord::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve details about whoisHistoryRecord objects.Note: List retrieval is not yet supported.
     * @param WhoisHistoryRecordsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?WhoisHistoryRecordsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to whoisHistoryRecords for security
     * @param WhoisHistoryRecord $body The request body
     * @param WhoisHistoryRecordsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(WhoisHistoryRecord $body, ?WhoisHistoryRecordsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return WhoisHistoryRecordsRequestBuilder
    */
    public function withUrl(string $rawUrl): WhoisHistoryRecordsRequestBuilder {
        return new WhoisHistoryRecordsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
