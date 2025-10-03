<?php

namespace Microsoft\\Graph\\Generated\Communications\Calls\Item\Participants\Item\StartHoldMusic;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\\Graph\\Generated\Models\StartHoldMusicOperation;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the startHoldMusic method.
*/
class StartHoldMusicRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new StartHoldMusicRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/calls/{call%2Did}/participants/{participant%2Did}/startHoldMusic');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Put a participant on hold and play music in the background.
     * @param StartHoldMusicPostRequestBody $body The request body
     * @param StartHoldMusicRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<StartHoldMusicOperation|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/participant-startholdmusic?view=graph-rest-1.0 Find more info here
    */
    public function post(StartHoldMusicPostRequestBody $body, ?StartHoldMusicRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [StartHoldMusicOperation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Put a participant on hold and play music in the background.
     * @param StartHoldMusicPostRequestBody $body The request body
     * @param StartHoldMusicRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(StartHoldMusicPostRequestBody $body, ?StartHoldMusicRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return StartHoldMusicRequestBuilder
    */
    public function withUrl(string $rawUrl): StartHoldMusicRequestBuilder {
        return new StartHoldMusicRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
