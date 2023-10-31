<?php

namespace Microsoft\Graph\Generated\Admin\ServiceAnnouncement\Messages\MarkUnread;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the markUnread method.
*/
class MarkUnreadRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new MarkUnreadRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/admin/serviceAnnouncement/messages/markUnread');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Mark a list of serviceUpdateMessages as unread for the signed in user. This API is available in the following national cloud deployments.
     * @param MarkUnreadPostRequestBody $body The request body
     * @param MarkUnreadRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<MarkUnreadPostResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/serviceupdatemessage-markunread?view=graph-rest-1.0 Find more info here
    */
    public function post(MarkUnreadPostRequestBody $body, ?MarkUnreadRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [MarkUnreadPostResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Mark a list of serviceUpdateMessages as unread for the signed in user. This API is available in the following national cloud deployments.
     * @param MarkUnreadPostRequestBody $body The request body
     * @param MarkUnreadRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(MarkUnreadPostRequestBody $body, ?MarkUnreadRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return MarkUnreadRequestBuilder
    */
    public function withUrl(string $rawUrl): MarkUnreadRequestBuilder {
        return new MarkUnreadRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
