<?php

namespace Microsoft\Graph\Generated\Users\Item\Activities;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UserActivity;
use Microsoft\Graph\Generated\Models\UserActivityCollectionResponse;
use Microsoft\Graph\Generated\Users\Item\Activities\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Activities\Item\UserActivityItemRequestBuilder;
use Microsoft\Graph\Generated\Users\Item\Activities\Recent\RecentRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the activities property of the microsoft.graph.user entity.
*/
class ActivitiesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the recent method.
    */
    public function recent(): RecentRequestBuilder {
        return new RecentRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the activities property of the microsoft.graph.user entity.
     * @param string $userActivityId The unique identifier of userActivity
     * @return UserActivityItemRequestBuilder
    */
    public function byUserActivityId(string $userActivityId): UserActivityItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['userActivity%2Did'] = $userActivityId;
        return new UserActivityItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ActivitiesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/users/{user%2Did}/activities{?%24count,%24expand,%24filter,%24orderby,%24search,%24select,%24skip,%24top}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Get activities for a given user. Unlike the recent OData function, activities without histories will be returned. The permission UserActivity.ReadWrite.CreatedByApp will apply extra filtering to the response, so that only activities created by your application are returned. This server-side filtering might result in empty pages if the user is particularly active and other applications have created more recent activities. To get your application's activities, use the nextLink property to paginate.
     * @param ActivitiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserActivityCollectionResponse|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/projectrome-get-activities?view=graph-rest-1.0 Find more info here
    */
    public function get(?ActivitiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserActivityCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to activities for users
     * @param UserActivity $body The request body
     * @param ActivitiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UserActivity|null>
     * @throws Exception
    */
    public function post(UserActivity $body, ?ActivitiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UserActivity::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get activities for a given user. Unlike the recent OData function, activities without histories will be returned. The permission UserActivity.ReadWrite.CreatedByApp will apply extra filtering to the response, so that only activities created by your application are returned. This server-side filtering might result in empty pages if the user is particularly active and other applications have created more recent activities. To get your application's activities, use the nextLink property to paginate.
     * @param ActivitiesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ActivitiesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to activities for users
     * @param UserActivity $body The request body
     * @param ActivitiesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UserActivity $body, ?ActivitiesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = '{+baseurl}/users/{user%2Did}/activities';
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
     * @return ActivitiesRequestBuilder
    */
    public function withUrl(string $rawUrl): ActivitiesRequestBuilder {
        return new ActivitiesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
