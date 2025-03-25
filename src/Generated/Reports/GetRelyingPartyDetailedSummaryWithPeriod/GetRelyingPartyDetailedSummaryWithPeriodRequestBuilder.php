<?php

namespace Microsoft\Graph\Generated\Reports\GetRelyingPartyDetailedSummaryWithPeriod;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getRelyingPartyDetailedSummary method.
*/
class GetRelyingPartyDetailedSummaryWithPeriodRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetRelyingPartyDetailedSummaryWithPeriodRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $period Usage: period='{period}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $period = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/getRelyingPartyDetailedSummary(period=\'{period}\'){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['period'] = $period;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a summary of AD FS relying parties information.
     * @param GetRelyingPartyDetailedSummaryWithPeriodRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetRelyingPartyDetailedSummaryWithPeriodgetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/reportroot-getrelyingpartydetailedsummary?view=graph-rest-1.0 Find more info here
    */
    public function get(?GetRelyingPartyDetailedSummaryWithPeriodRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetRelyingPartyDetailedSummaryWithPeriodgetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a summary of AD FS relying parties information.
     * @param GetRelyingPartyDetailedSummaryWithPeriodRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetRelyingPartyDetailedSummaryWithPeriodRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetRelyingPartyDetailedSummaryWithPeriodRequestBuilder
    */
    public function withUrl(string $rawUrl): GetRelyingPartyDetailedSummaryWithPeriodRequestBuilder {
        return new GetRelyingPartyDetailedSummaryWithPeriodRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
