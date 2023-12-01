<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item\KeepAlive;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the keepAlive method.
*/
class KeepAliveRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new KeepAliveRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/calls/{call%2Did}/keepAlive');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Make a request to this API every 15 to 45 minutes to ensure that an ongoing call remains active. A call that does not receive this request within 45 minutes is considered inactive and will subsequently end. At least one successful request must be made within 45 minutes of the previous request, or the start of the call. We recommend that you send a request in shorter time intervals (every 15 minutes). Make sure that these requests are successful to prevent the call from timing out and ending. Attempting to send a request to a call that has already ended will result in a 404 Not-Found error. The resources related to the call should be cleaned up on the application side.
     * @param KeepAliveRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/call-keepalive?view=graph-rest-1.0 Find more info here
    */
    public function post(?KeepAliveRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Make a request to this API every 15 to 45 minutes to ensure that an ongoing call remains active. A call that does not receive this request within 45 minutes is considered inactive and will subsequently end. At least one successful request must be made within 45 minutes of the previous request, or the start of the call. We recommend that you send a request in shorter time intervals (every 15 minutes). Make sure that these requests are successful to prevent the call from timing out and ending. Attempting to send a request to a call that has already ended will result in a 404 Not-Found error. The resources related to the call should be cleaned up on the application side.
     * @param KeepAliveRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(?KeepAliveRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return KeepAliveRequestBuilder
    */
    public function withUrl(string $rawUrl): KeepAliveRequestBuilder {
        return new KeepAliveRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
