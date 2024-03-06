<?php

namespace Microsoft\Graph\Generated\Teamwork\DeletedTeams\Item\Channels\Item\SharedWithTeams;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SharedWithChannelTeamInfo;
use Microsoft\Graph\Generated\Models\SharedWithChannelTeamInfoCollectionResponse;
use Microsoft\Graph\Generated\Teamwork\DeletedTeams\Item\Channels\Item\SharedWithTeams\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Teamwork\DeletedTeams\Item\Channels\Item\SharedWithTeams\Item\SharedWithChannelTeamInfoItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the sharedWithTeams property of the microsoft.graph.channel entity.
*/
class SharedWithTeamsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the sharedWithTeams property of the microsoft.graph.channel entity.
     * @param string $sharedWithChannelTeamInfoId The unique identifier of sharedWithChannelTeamInfo
     * @return SharedWithChannelTeamInfoItemRequestBuilder
    */
    public function bySharedWithChannelTeamInfoId(string $sharedWithChannelTeamInfoId): SharedWithChannelTeamInfoItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['sharedWithChannelTeamInfo%2Did'] = $sharedWithChannelTeamInfoId;
        return new SharedWithChannelTeamInfoItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SharedWithTeamsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teamwork/deletedTeams/{deletedTeam%2Did}/channels/{channel%2Did}/sharedWithTeams{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the list of teams that has been shared a specified channel. This operation is allowed only for channels with a membershipType value of shared.
     * @param SharedWithTeamsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharedWithChannelTeamInfoCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/sharedwithchannelteaminfo-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?SharedWithTeamsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharedWithChannelTeamInfoCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to sharedWithTeams for teamwork
     * @param SharedWithChannelTeamInfo $body The request body
     * @param SharedWithTeamsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SharedWithChannelTeamInfo|null>
     * @throws Exception
    */
    public function post(SharedWithChannelTeamInfo $body, ?SharedWithTeamsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SharedWithChannelTeamInfo::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the list of teams that has been shared a specified channel. This operation is allowed only for channels with a membershipType value of shared.
     * @param SharedWithTeamsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SharedWithTeamsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to sharedWithTeams for teamwork
     * @param SharedWithChannelTeamInfo $body The request body
     * @param SharedWithTeamsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SharedWithChannelTeamInfo $body, ?SharedWithTeamsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/teamwork/deletedTeams/{deletedTeam%2Did}/channels/{channel%2Did}/sharedWithTeams';
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
     * @return SharedWithTeamsRequestBuilder
    */
    public function withUrl(string $rawUrl): SharedWithTeamsRequestBuilder {
        return new SharedWithTeamsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
