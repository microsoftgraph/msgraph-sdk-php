<?php

namespace Microsoft\Graph\Generated\Reports\GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriod;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to call the getSkypeForBusinessPeerToPeerActivityMinuteCounts method.
*/
class GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $period Usage: period='{period}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $period = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/getSkypeForBusinessPeerToPeerActivityMinuteCounts(period=\'{period}\')');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['period'] = $period;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get usage trends on the length in minutes and type of peer-to-peer sessions held in your organization. Types of sessions include audio and video.
     * @param GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/reportroot-getskypeforbusinesspeertopeeractivityminutecounts?view=graph-rest-1.0 Find more info here
    */
    public function get(?GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Get usage trends on the length in minutes and type of peer-to-peer sessions held in your organization. Types of sessions include audio and video.
     * @param GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/octet-stream");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder
    */
    public function withUrl(string $rawUrl): GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder {
        return new GetSkypeForBusinessPeerToPeerActivityMinuteCountsWithPeriodRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
