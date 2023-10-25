<?php

namespace Microsoft\Graph\Generated\Reports\GetOneDriveActivityUserDetailWithDate;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\Types\Date;
use Psr\Http\Message\StreamInterface;

/**
 * Provides operations to call the getOneDriveActivityUserDetail method.
*/
class GetOneDriveActivityUserDetailWithDateRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetOneDriveActivityUserDetailWithDateRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param Date|null $date Usage: date={date}
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter, ?Date $date = null) {
        parent::__construct($requestAdapter, [], '{+baseurl}/reports/getOneDriveActivityUserDetail(date={date})');
        if (is_array($pathParametersOrRawUrl)) {
            $urlTplParams = $pathParametersOrRawUrl;
            $urlTplParams['date'] = $date;
            $this->pathParameters = $urlTplParams;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Invoke function getOneDriveActivityUserDetail
     * @param GetOneDriveActivityUserDetailWithDateRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?GetOneDriveActivityUserDetailWithDateRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendPrimitiveAsync($requestInfo, StreamInterface::class, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Invoke function getOneDriveActivityUserDetail
     * @param GetOneDriveActivityUserDetailWithDateRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetOneDriveActivityUserDetailWithDateRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/octet-stream, application/json, application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return GetOneDriveActivityUserDetailWithDateRequestBuilder
    */
    public function withUrl(string $rawUrl): GetOneDriveActivityUserDetailWithDateRequestBuilder {
        return new GetOneDriveActivityUserDetailWithDateRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
