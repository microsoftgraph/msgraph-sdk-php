<?php

namespace Microsoft\Graph\Generated\Reports\GetTeamsUserActivityCountsWithPeriod;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to call the getTeamsUserActivityCounts method.
*/
class GetTeamsUserActivityCountsWithPeriodRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetTeamsUserActivityCountsWithPeriodRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $period Usage: period='{period}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $period = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/getTeamsUserActivityCounts(period=\'{period}\')');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['period'] = $period;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the number of Microsoft Teams activities by activity type. The activities are performed by Microsoft Teams licensed users.
     * @param GetTeamsUserActivityCountsWithPeriodRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/reportroot-getteamsuseractivitycounts?view=graph-rest-1.0 Find more info here
    */
    public function get(?GetTeamsUserActivityCountsWithPeriodRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Get the number of Microsoft Teams activities by activity type. The activities are performed by Microsoft Teams licensed users.
     * @param GetTeamsUserActivityCountsWithPeriodRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetTeamsUserActivityCountsWithPeriodRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/octet-stream, application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetTeamsUserActivityCountsWithPeriodRequestBuilder
    */
    public function withUrl(string $rawUrl): GetTeamsUserActivityCountsWithPeriodRequestBuilder {
        return new GetTeamsUserActivityCountsWithPeriodRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
