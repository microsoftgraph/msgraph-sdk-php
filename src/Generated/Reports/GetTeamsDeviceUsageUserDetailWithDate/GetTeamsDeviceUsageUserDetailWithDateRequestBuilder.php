<?php

namespace Microsoft\Graph\Generated\Reports\GetTeamsDeviceUsageUserDetailWithDate;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\Types\Date;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to call the getTeamsDeviceUsageUserDetail method.
*/
class GetTeamsDeviceUsageUserDetailWithDateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetTeamsDeviceUsageUserDetailWithDateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param Date|null $date Usage: date={date}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?Date $date = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/getTeamsDeviceUsageUserDetail(date={date})');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['date'] = $date;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get details about Microsoft Teams device usage by user.
     * @param GetTeamsDeviceUsageUserDetailWithDateRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StreamInterface|null>
     * @throws Exception
    */
    public function get(?GetTeamsDeviceUsageUserDetailWithDateRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        /** @var Promise<StreamInterface|null> $result */
        $result = $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        return $result;
    }

    /**
     * Get details about Microsoft Teams device usage by user.
     * @param GetTeamsDeviceUsageUserDetailWithDateRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetTeamsDeviceUsageUserDetailWithDateRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetTeamsDeviceUsageUserDetailWithDateRequestBuilder
    */
    public function withUrl(string $rawUrl): GetTeamsDeviceUsageUserDetailWithDateRequestBuilder {
        return new GetTeamsDeviceUsageUserDetailWithDateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
