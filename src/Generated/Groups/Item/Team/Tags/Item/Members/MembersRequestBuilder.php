<?php

namespace Microsoft\Graph\Generated\Groups\Item\Team\Tags\Item\Members;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Groups\Item\Team\Tags\Item\Members\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Groups\Item\Team\Tags\Item\Members\Item\TeamworkTagMemberItemRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\TeamworkTagMember;
use Microsoft\Graph\Generated\Models\TeamworkTagMemberCollectionResponse;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the members property of the microsoft.graph.teamworkTag entity.
*/
class MembersRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the members property of the microsoft.graph.teamworkTag entity.
     * @param string $teamworkTagMemberId The unique identifier of teamworkTagMember
     * @return TeamworkTagMemberItemRequestBuilder
    */
    public function byTeamworkTagMemberId(string $teamworkTagMemberId): TeamworkTagMemberItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamworkTagMember%2Did'] = $teamworkTagMemberId;
        return new TeamworkTagMemberItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new MembersRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/groups/{group%2Did}/team/tags/{teamworkTag%2Did}/members{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get a list of the members of a standard tag in a team and their properties.
     * @param MembersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TeamworkTagMemberCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/teamworktagmember-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?MembersRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TeamworkTagMemberCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new teamworkTagMember object in a team.
     * @param TeamworkTagMember $body The request body
     * @param MembersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TeamworkTagMember|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/teamworktagmember-post?view=graph-rest-1.0 Find more info here
    */
    public function post(TeamworkTagMember $body, ?MembersRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TeamworkTagMember::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the members of a standard tag in a team and their properties.
     * @param MembersRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?MembersRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new teamworkTagMember object in a team.
     * @param TeamworkTagMember $body The request body
     * @param MembersRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(TeamworkTagMember $body, ?MembersRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return MembersRequestBuilder
    */
    public function withUrl(string $rawUrl): MembersRequestBuilder {
        return new MembersRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
