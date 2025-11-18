<?php

namespace Microsoft\\Graph\\Generated\Communications\GetAllOnlineMeetingMessages;

use Exception;
use Http\Promise\Promise;
use Microsoft\\Graph\\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to call the getAllOnlineMeetingMessages method.
*/
class GetAllOnlineMeetingMessagesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new GetAllOnlineMeetingMessagesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/getAllOnlineMeetingMessages(){?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get all Teams question and answer (Q&A) conversation messages in a tenant. This function returns a snapshot of all Q&A activity in JSON format. The export includes:- The original question or discussion text- The user who posted the message- All replies and responders- Vote counts- Moderation status (pending or dismissed)- Private replies- The meeting ID and organizer ID that are used for mapping to meeting metadata.
     * @param GetAllOnlineMeetingMessagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<GetAllOnlineMeetingMessagesGetResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/cloudcommunications-getallonlinemeetingmessages?view=graph-rest-1.0 Find more info here
    */
    public function get(?GetAllOnlineMeetingMessagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [GetAllOnlineMeetingMessagesGetResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get all Teams question and answer (Q&A) conversation messages in a tenant. This function returns a snapshot of all Q&A activity in JSON format. The export includes:- The original question or discussion text- The user who posted the message- All replies and responders- Vote counts- Moderation status (pending or dismissed)- Private replies- The meeting ID and organizer ID that are used for mapping to meeting metadata.
     * @param GetAllOnlineMeetingMessagesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?GetAllOnlineMeetingMessagesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return GetAllOnlineMeetingMessagesRequestBuilder
    */
    public function withUrl(string $rawUrl): GetAllOnlineMeetingMessagesRequestBuilder {
        return new GetAllOnlineMeetingMessagesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
