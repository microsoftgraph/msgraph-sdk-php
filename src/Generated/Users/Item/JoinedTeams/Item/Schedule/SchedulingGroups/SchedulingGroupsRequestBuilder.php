<?php

namespace Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Schedule\SchedulingGroups;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\SchedulingGroup;
use Microsoft\Graph\Generated\Models\SchedulingGroupCollectionResponse;
use Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Schedule\SchedulingGroups\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\JoinedTeams\Item\Schedule\SchedulingGroups\Item\SchedulingGroupItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the schedulingGroups property of the microsoft.graph.schedule entity.
*/
class SchedulingGroupsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the schedulingGroups property of the microsoft.graph.schedule entity.
     * @param string $schedulingGroupId The unique identifier of schedulingGroup
     * @return SchedulingGroupItemRequestBuilder
    */
    public function bySchedulingGroupId(string $schedulingGroupId): SchedulingGroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['schedulingGroup%2Did'] = $schedulingGroupId;
        return new SchedulingGroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new SchedulingGroupsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/joinedTeams/{team%2Did}/schedule/schedulingGroups{?%24count,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get the list of schedulingGroups in this schedule.
     * @param SchedulingGroupsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SchedulingGroupCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/schedule-list-schedulinggroups?view=graph-rest-1.0 Find more info here
    */
    public function get(?SchedulingGroupsRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SchedulingGroupCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create a new schedulingGroup.
     * @param SchedulingGroup $body The request body
     * @param SchedulingGroupsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<SchedulingGroup|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/schedule-post-schedulinggroups?view=graph-rest-1.0 Find more info here
    */
    public function post(SchedulingGroup $body, ?SchedulingGroupsRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [SchedulingGroup::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get the list of schedulingGroups in this schedule.
     * @param SchedulingGroupsRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?SchedulingGroupsRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create a new schedulingGroup.
     * @param SchedulingGroup $body The request body
     * @param SchedulingGroupsRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(SchedulingGroup $body, ?SchedulingGroupsRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return SchedulingGroupsRequestBuilder
    */
    public function withUrl(string $rawUrl): SchedulingGroupsRequestBuilder {
        return new SchedulingGroupsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
