<?php

namespace Microsoft\Graph\Generated\Users\Item\Outlook\SupportedTimeZonesWithTimeZoneStandard;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the supportedTimeZones method.
*/
class SupportedTimeZonesWithTimeZoneStandardRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new SupportedTimeZonesWithTimeZoneStandardRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $timeZoneStandard Usage: TimeZoneStandard='{TimeZoneStandard}'
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?string $timeZoneStandard = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/outlook/supportedTimeZones(TimeZoneStandard=\'{TimeZoneStandard}\'){?%24count,%24filter,%24search,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['TimeZoneStandard'] = $timeZoneStandard;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function supportedTimeZones
     * @param SupportedTimeZonesWithTimeZoneStandardRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SupportedTimeZonesWithTimeZoneStandardGetResponse|null>
     * @throws Exception
    */
    public function get(?SupportedTimeZonesWithTimeZoneStandardRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SupportedTimeZonesWithTimeZoneStandardGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Invoke function supportedTimeZones
     * @param SupportedTimeZonesWithTimeZoneStandardRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SupportedTimeZonesWithTimeZoneStandardRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SupportedTimeZonesWithTimeZoneStandardRequestBuilder
    */
    public function withUrl(string $rawUrl): SupportedTimeZonesWithTimeZoneStandardRequestBuilder {
        return new SupportedTimeZonesWithTimeZoneStandardRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
