<?php

namespace Microsoft\Graph\Generated\Communications\Calls\Item\UpdateRecordingStatus;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UpdateRecordingStatusOperation;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the updateRecordingStatus method.
*/
class UpdateRecordingStatusRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new UpdateRecordingStatusRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/calls/{call%2Did}/updateRecordingStatus');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Update the application's recording status associated with a call. This requires the use of the Teams policy-based recording solution.
     * @param UpdateRecordingStatusPostRequestBody $body The request body
     * @param UpdateRecordingStatusRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UpdateRecordingStatusOperation|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/call-updaterecordingstatus?view=graph-rest-1.0 Find more info here
    */
    public function post(UpdateRecordingStatusPostRequestBody $body, ?UpdateRecordingStatusRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UpdateRecordingStatusOperation::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the application's recording status associated with a call. This requires the use of the Teams policy-based recording solution.
     * @param UpdateRecordingStatusPostRequestBody $body The request body
     * @param UpdateRecordingStatusRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UpdateRecordingStatusPostRequestBody $body, ?UpdateRecordingStatusRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UpdateRecordingStatusRequestBuilder
    */
    public function withUrl(string $rawUrl): UpdateRecordingStatusRequestBuilder {
        return new UpdateRecordingStatusRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
