<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item\Answer;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the answer method.
*/
class AnswerRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new AnswerRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/calls/{call%2Did}/answer');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Enable a bot to answer an incoming call. The incoming call request can be an invite from a participant in a group call or a peer-to-peer call. If an invite to a group call is received, the notification will contain the chatInfo and meetingInfo parameters. The bot is expected to answer, reject, or redirect the call before the call times out. The current timeout value is 15 seconds for regular scenarios, and 5 seconds for policy-based recording scenarios.
     * @param AnswerPostRequestBody $body The request body
     * @param AnswerRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/call-answer?view=graph-rest-1.0 Find more info here
    */
    public function post(AnswerPostRequestBody $body, ?AnswerRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Enable a bot to answer an incoming call. The incoming call request can be an invite from a participant in a group call or a peer-to-peer call. If an invite to a group call is received, the notification will contain the chatInfo and meetingInfo parameters. The bot is expected to answer, reject, or redirect the call before the call times out. The current timeout value is 15 seconds for regular scenarios, and 5 seconds for policy-based recording scenarios.
     * @param AnswerPostRequestBody $body The request body
     * @param AnswerRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AnswerPostRequestBody $body, ?AnswerRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AnswerRequestBuilder
    */
    public function withUrl(string $rawUrl): AnswerRequestBuilder {
        return new AnswerRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
