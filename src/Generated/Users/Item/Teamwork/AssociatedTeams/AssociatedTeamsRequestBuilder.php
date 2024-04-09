<?php

namespace Microsoft\Graph\Generated\Users\Item\Teamwork\AssociatedTeams;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\AssociatedTeamInfo;
use Microsoft\Graph\Generated\Models\AssociatedTeamInfoCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Users\Item\Teamwork\AssociatedTeams\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Teamwork\AssociatedTeams\Item\AssociatedTeamInfoItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the associatedTeams property of the microsoft.graph.userTeamwork entity.
*/
class AssociatedTeamsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the associatedTeams property of the microsoft.graph.userTeamwork entity.
     * @param string $associatedTeamInfoId The unique identifier of associatedTeamInfo
     * @return AssociatedTeamInfoItemRequestBuilder
    */
    public function byAssociatedTeamInfoId(string $associatedTeamInfoId): AssociatedTeamInfoItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['associatedTeamInfo%2Did'] = $associatedTeamInfoId;
        return new AssociatedTeamInfoItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AssociatedTeamsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/teamwork/associatedTeams{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the list of teams in Microsoft Teams that a user is associated with.Currently, a user can be associated with a team in two different ways:
     * @param AssociatedTeamsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AssociatedTeamInfoCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/associatedteaminfo-list?view=graph-rest-1.0 Find more info here
    */
    public function get(?AssociatedTeamsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AssociatedTeamInfoCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to associatedTeams for users
     * @param AssociatedTeamInfo $body The request body
     * @param AssociatedTeamsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AssociatedTeamInfo|null>
     * @throws Exception
    */
    public function post(AssociatedTeamInfo $body, ?AssociatedTeamsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AssociatedTeamInfo::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the list of teams in Microsoft Teams that a user is associated with.Currently, a user can be associated with a team in two different ways:
     * @param AssociatedTeamsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AssociatedTeamsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to associatedTeams for users
     * @param AssociatedTeamInfo $body The request body
     * @param AssociatedTeamsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AssociatedTeamInfo $body, ?AssociatedTeamsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return AssociatedTeamsRequestBuilder
    */
    public function withUrl(string $rawUrl): AssociatedTeamsRequestBuilder {
        return new AssociatedTeamsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
