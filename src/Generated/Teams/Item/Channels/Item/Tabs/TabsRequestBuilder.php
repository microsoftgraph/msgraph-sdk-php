<?php

namespace Microsoft\Graph\Generated\Teams\Item\Channels\Item\Tabs;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\TeamsTab;
use Microsoft\Graph\Generated\Models\TeamsTabCollectionResponse;
use Microsoft\Graph\Generated\Teams\Item\Channels\Item\Tabs\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Teams\Item\Channels\Item\Tabs\Item\TeamsTabItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the tabs property of the microsoft.graph.channel entity.
*/
class TabsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tabs property of the microsoft.graph.channel entity.
     * @param string $teamsTabId The unique identifier of teamsTab
     * @return TeamsTabItemRequestBuilder
    */
    public function byTeamsTabId(string $teamsTabId): TeamsTabItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['teamsTab%2Did'] = $teamsTabId;
        return new TeamsTabItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new TabsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/teams/{team%2Did}/channels/{channel%2Did}/tabs{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Retrieve the list of tabs in the specified channel within a team.  This API is available in the following national cloud deployments.
     * @param TabsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TeamsTabCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/channel-list-tabs?view=graph-rest-1.0 Find more info here
    */
    public function get(?TabsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TeamsTabCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Adds (pins) a tab to the specified channel within a team. The corresponding app must already be installed in the team. This API is available in the following national cloud deployments.
     * @param TeamsTab $body The request body
     * @param TabsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<TeamsTab|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/channel-post-tabs?view=graph-rest-1.0 Find more info here
    */
    public function post(TeamsTab $body, ?TabsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [TeamsTab::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Retrieve the list of tabs in the specified channel within a team.  This API is available in the following national cloud deployments.
     * @param TabsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?TabsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Adds (pins) a tab to the specified channel within a team. The corresponding app must already be installed in the team. This API is available in the following national cloud deployments.
     * @param TeamsTab $body The request body
     * @param TabsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(TeamsTab $body, ?TabsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return TabsRequestBuilder
    */
    public function withUrl(string $rawUrl): TabsRequestBuilder {
        return new TabsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
