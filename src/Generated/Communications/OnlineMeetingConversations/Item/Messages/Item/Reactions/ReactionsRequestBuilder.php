<?php

namespace Microsoft\Graph\Generated\Communications\OnlineMeetingConversations\Item\Messages\Item\Reactions;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Communications\OnlineMeetingConversations\Item\Messages\Item\Reactions\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Communications\OnlineMeetingConversations\Item\Messages\Item\Reactions\Item\EngagementConversationMessageReactionItemRequestBuilder;
use Microsoft\Graph\Generated\Models\EngagementConversationMessageReaction;
use Microsoft\Graph\Generated\Models\EngagementConversationMessageReactionCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the reactions property of the microsoft.graph.engagementConversationMessage entity.
*/
class ReactionsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the reactions property of the microsoft.graph.engagementConversationMessage entity.
     * @param string $engagementConversationMessageReactionId The unique identifier of engagementConversationMessageReaction
     * @return EngagementConversationMessageReactionItemRequestBuilder
    */
    public function byEngagementConversationMessageReactionId(string $engagementConversationMessageReactionId): EngagementConversationMessageReactionItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['engagementConversationMessageReaction%2Did'] = $engagementConversationMessageReactionId;
        return new EngagementConversationMessageReactionItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ReactionsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/onlineMeetingConversations/{onlineMeetingEngagementConversation%2Did}/messages/{engagementConversationMessage%2Did}/reactions{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the engagementConversationMessageReaction objects and their properties for an engagementConversationMessage in an online meeting.
     * @param ReactionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EngagementConversationMessageReactionCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/engagementconversationdiscussionmessage-list-reactions?view=graph-rest-1.0 Find more info here
    */
    public function get(?ReactionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EngagementConversationMessageReactionCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to reactions for communications
     * @param EngagementConversationMessageReaction $body The request body
     * @param ReactionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EngagementConversationMessageReaction|null>
     * @throws Exception
    */
    public function post(EngagementConversationMessageReaction $body, ?ReactionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EngagementConversationMessageReaction::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the engagementConversationMessageReaction objects and their properties for an engagementConversationMessage in an online meeting.
     * @param ReactionsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ReactionsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to reactions for communications
     * @param EngagementConversationMessageReaction $body The request body
     * @param ReactionsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(EngagementConversationMessageReaction $body, ?ReactionsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ReactionsRequestBuilder
    */
    public function withUrl(string $rawUrl): ReactionsRequestBuilder {
        return new ReactionsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
