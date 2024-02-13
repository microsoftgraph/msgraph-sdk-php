<?php

namespace Microsoft\Graph\Generated\Teams\Item\PrimaryChannel\SharedWithTeams\Item\AllowedMembers;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ConversationMemberCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Teams\Item\PrimaryChannel\SharedWithTeams\Item\AllowedMembers\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\PrimaryChannel\SharedWithTeams\Item\AllowedMembers\Item\ConversationMemberItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the allowedMembers property of the microsoft.graph.sharedWithChannelTeamInfo entity.
*/
class AllowedMembersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the allowedMembers property of the microsoft.graph.sharedWithChannelTeamInfo entity.
     * @param string $conversationMemberId The unique identifier of conversationMember
     * @return ConversationMemberItemRequestBuilder
    */
    public function byConversationMemberId(string $conversationMemberId): ConversationMemberItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['conversationMember%2Did'] = $conversationMemberId;
        return new ConversationMemberItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AllowedMembersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teams/{team%2Did}/primaryChannel/sharedWithTeams/{sharedWithChannelTeamInfo%2Did}/allowedMembers{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the list of conversationMembers who can access a shared channel. This method does not return the following conversationMembers from the team:- Users with Guest role- Users who are externally authenticated in the tenant
     * @param AllowedMembersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<ConversationMemberCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/sharedwithchannelteaminfo-list-allowedmembers?view=graph-rest-1.0 Find more info here
    */
    public function get(?AllowedMembersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [ConversationMemberCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the list of conversationMembers who can access a shared channel. This method does not return the following conversationMembers from the team:- Users with Guest role- Users who are externally authenticated in the tenant
     * @param AllowedMembersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AllowedMembersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AllowedMembersRequestBuilder
    */
    public function withUrl(string $rawUrl): AllowedMembersRequestBuilder {
        return new AllowedMembersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
