<?php

namespace Microsoft\Graph\Generated\Teams\Item\PrimaryChannel\Messages\Item\HostedContents;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ChatMessageHostedContent;
use Microsoft\Graph\Generated\Models\ChatMessageHostedContentCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Teams\Item\PrimaryChannel\Messages\Item\HostedContents\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\PrimaryChannel\Messages\Item\HostedContents\Item\ChatMessageHostedContentItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the hostedContents property of the microsoft.graph.chatMessage entity.
*/
class HostedContentsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the hostedContents property of the microsoft.graph.chatMessage entity.
     * @param string $chatMessageHostedContentId The unique identifier of chatMessageHostedContent
     * @return ChatMessageHostedContentItemRequestBuilder
    */
    public function byChatMessageHostedContentId(string $chatMessageHostedContentId): ChatMessageHostedContentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['chatMessageHostedContent%2Did'] = $chatMessageHostedContentId;
        return new ChatMessageHostedContentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new HostedContentsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teams/{team%2Did}/primaryChannel/messages/{chatMessage%2Did}/hostedContents{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the list of chatMessageHostedContent objects from a message. This API only lists the hosted content objects. To get the content bytes, see get chatmessage hosted content
     * @param HostedContentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ChatMessageHostedContentCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/chatmessage-list-hostedcontents?view=graph-rest-1.0 Find more info here
    */
    public function get(?HostedContentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ChatMessageHostedContentCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to hostedContents for teams
     * @param ChatMessageHostedContent $body The request body
     * @param HostedContentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ChatMessageHostedContent|null>
     * @throws Exception
    */
    public function post(ChatMessageHostedContent $body, ?HostedContentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ChatMessageHostedContent::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the list of chatMessageHostedContent objects from a message. This API only lists the hosted content objects. To get the content bytes, see get chatmessage hosted content
     * @param HostedContentsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?HostedContentsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to hostedContents for teams
     * @param ChatMessageHostedContent $body The request body
     * @param HostedContentsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(ChatMessageHostedContent $body, ?HostedContentsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return HostedContentsRequestBuilder
    */
    public function withUrl(string $rawUrl): HostedContentsRequestBuilder {
        return new HostedContentsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
