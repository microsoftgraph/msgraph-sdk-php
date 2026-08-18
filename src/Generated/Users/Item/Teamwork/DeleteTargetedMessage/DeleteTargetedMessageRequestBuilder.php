<?php

namespace Microsoft\Graph\Generated\Users\Item\Teamwork\DeleteTargetedMessage;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the deleteTargetedMessage method.
*/
class DeleteTargetedMessageRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new DeleteTargetedMessageRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/teamwork/deleteTargetedMessage');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete a specific targeted message from a channel context. Teams administrators can use this API to remove targeted messages by providing the message ID, team ID, and channel ID.
     * @param DeleteTargetedMessagePostRequestBody $body The request body
     * @param DeleteTargetedMessageRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/userteamwork-deletetargetedmessage?view=graph-rest-1.0 Find more info here
    */
    public function post(DeleteTargetedMessagePostRequestBody $body, ?DeleteTargetedMessageRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Delete a specific targeted message from a channel context. Teams administrators can use this API to remove targeted messages by providing the message ID, team ID, and channel ID.
     * @param DeleteTargetedMessagePostRequestBody $body The request body
     * @param DeleteTargetedMessageRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(DeleteTargetedMessagePostRequestBody $body, ?DeleteTargetedMessageRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return DeleteTargetedMessageRequestBuilder
    */
    public function withUrl(string $rawUrl): DeleteTargetedMessageRequestBuilder {
        return new DeleteTargetedMessageRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
