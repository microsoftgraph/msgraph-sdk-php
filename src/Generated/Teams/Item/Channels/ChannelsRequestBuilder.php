<?php

namespace Microsoft\Graph\Generated\Teams\Item\Channels;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\Channel;
use Microsoft\Graph\Generated\Models\ChannelCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Teams\Item\Channels\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Channels\GetAllMessages\GetAllMessagesRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Channels\Item\ChannelItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the channels property of the microsoft.graph.team entity.
*/
class ChannelsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getAllMessages method.
    */
    public function getAllMessages(): GetAllMessagesRequestBuilder {
        return new GetAllMessagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the channels property of the microsoft.graph.team entity.
     * @param string $channelId The unique identifier of channel
     * @return ChannelItemRequestBuilder
    */
    public function byChannelId(string $channelId): ChannelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['channel%2Did'] = $channelId;
        return new ChannelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ChannelsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teams/{team%2Did}/channels{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the list of channels in this team. This API is available in the following national cloud deployments.
     * @param ChannelsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ChannelCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/channel-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?ChannelsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ChannelCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new channel in a team, as specified in the request body.  When you create a channel, the maximum length of the channel's displayName is 50 characters. This is the name that appears to the user in Microsoft Teams. If you're creating a private channel, you can add a maximum of 200 members. This API is available in the following national cloud deployments.
     * @param Channel $body The request body
     * @param ChannelsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<Channel|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/channel-post?view=graph-rest-1.0 Find more info here
    */
    public function post(Channel $body, ?ChannelsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [Channel::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the list of channels in this team. This API is available in the following national cloud deployments.
     * @param ChannelsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ChannelsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
        $requestInfo->tryAddHeader('Accept', "application/json;q=1");
        return $requestInfo;
    }

    /**
     * Create a new channel in a team, as specified in the request body.  When you create a channel, the maximum length of the channel's displayName is 50 characters. This is the name that appears to the user in Microsoft Teams. If you're creating a private channel, you can add a maximum of 200 members. This API is available in the following national cloud deployments.
     * @param Channel $body The request body
     * @param ChannelsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(Channel $body, ?ChannelsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return ChannelsRequestBuilder
    */
    public function withUrl(string $rawUrl): ChannelsRequestBuilder {
        return new ChannelsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
