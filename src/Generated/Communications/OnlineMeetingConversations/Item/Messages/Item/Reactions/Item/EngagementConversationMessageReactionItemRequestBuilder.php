<?php

namespace Microsoft\Graph\Generated\Communications\OnlineMeetingConversations\Item\Messages\Item\Reactions\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\EngagementConversationMessageReaction;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the reactions property of the microsoft.graph.engagementConversationMessage entity.
*/
class EngagementConversationMessageReactionItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Instantiates a new EngagementConversationMessageReactionItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/communications/onlineMeetingConversations/{onlineMeetingEngagementConversation%2Did}/messages/{engagementConversationMessage%2Did}/reactions/{engagementConversationMessageReaction%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property reactions for communications
     * @param EngagementConversationMessageReactionItemRequestBuilder_0354f9e0|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?EngagementConversationMessageReactionItemRequestBuilder_0354f9e0 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * A collection of reactions (such as like and smile) that users have applied to this message.
     * @param EngagementConversationMessageReactionItemRequestBuilder_bc16aa40|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EngagementConversationMessageReaction|null>
     * @throws Exception
    */
    public function get(?EngagementConversationMessageReactionItemRequestBuilder_bc16aa40 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EngagementConversationMessageReaction::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property reactions in communications
     * @param EngagementConversationMessageReaction $body The request body
     * @param EngagementConversationMessageReactionItemRequestBuilder_758648b3|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<EngagementConversationMessageReaction|null>
     * @throws Exception
    */
    public function patch(EngagementConversationMessageReaction $body, ?EngagementConversationMessageReactionItemRequestBuilder_758648b3 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [EngagementConversationMessageReaction::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property reactions for communications
     * @param EngagementConversationMessageReactionItemRequestBuilder_0354f9e0|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?EngagementConversationMessageReactionItemRequestBuilder_0354f9e0 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * A collection of reactions (such as like and smile) that users have applied to this message.
     * @param EngagementConversationMessageReactionItemRequestBuilder_bc16aa40|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EngagementConversationMessageReactionItemRequestBuilder_bc16aa40 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property reactions in communications
     * @param EngagementConversationMessageReaction $body The request body
     * @param EngagementConversationMessageReactionItemRequestBuilder_758648b3|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(EngagementConversationMessageReaction $body, ?EngagementConversationMessageReactionItemRequestBuilder_758648b3 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return EngagementConversationMessageReactionItemRequestBuilder
    */
    public function withUrl(string $rawUrl): EngagementConversationMessageReactionItemRequestBuilder {
        return new EngagementConversationMessageReactionItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
