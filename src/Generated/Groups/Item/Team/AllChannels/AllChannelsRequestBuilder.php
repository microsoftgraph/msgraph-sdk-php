<?php

namespace Microsoft\Graph\Generated\Groups\Item\Team\AllChannels;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Groups\Item\Team\AllChannels\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\AllChannels\Item\ChannelItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ChannelCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the allChannels property of the microsoft.graph.team entity.
*/
class AllChannelsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the allChannels property of the microsoft.graph.team entity.
     * @param string $channelId The unique identifier of channel
     * @return ChannelItemRequestBuilder
    */
    public function byChannelId(string $channelId): ChannelItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['channel%2Did'] = $channelId;
        return new ChannelItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AllChannelsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/groups/{group%2Did}/team/allChannels{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the list of channels either in this team or shared with this team (incoming channels).
     * @param AllChannelsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ChannelCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/team-list-allchannels?view=graph-rest-1.0 Find more info here
    */
    public function get(?AllChannelsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ChannelCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the list of channels either in this team or shared with this team (incoming channels).
     * @param AllChannelsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AllChannelsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AllChannelsRequestBuilder
    */
    public function withUrl(string $rawUrl): AllChannelsRequestBuilder {
        return new AllChannelsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
