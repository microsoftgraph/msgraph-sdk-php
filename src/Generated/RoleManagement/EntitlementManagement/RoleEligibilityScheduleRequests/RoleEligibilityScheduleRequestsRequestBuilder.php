<?php

namespace Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilityScheduleRequests;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UnifiedRoleEligibilityScheduleRequest;
use Microsoft\Graph\Generated\Models\UnifiedRoleEligibilityScheduleRequestCollectionResponse;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilityScheduleRequests\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilityScheduleRequests\FilterByCurrentUserWithOn\FilterByCurrentUserWithOnRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilityScheduleRequests\Item\UnifiedRoleEligibilityScheduleRequestItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the roleEligibilityScheduleRequests property of the microsoft.graph.rbacApplication entity.
*/
class RoleEligibilityScheduleRequestsRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleEligibilityScheduleRequests property of the microsoft.graph.rbacApplication entity.
     * @param string $unifiedRoleEligibilityScheduleRequestId The unique identifier of unifiedRoleEligibilityScheduleRequest
     * @return UnifiedRoleEligibilityScheduleRequestItemRequestBuilder
    */
    public function byUnifiedRoleEligibilityScheduleRequestId(string $unifiedRoleEligibilityScheduleRequestId): UnifiedRoleEligibilityScheduleRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleEligibilityScheduleRequest%2Did'] = $unifiedRoleEligibilityScheduleRequestId;
        return new UnifiedRoleEligibilityScheduleRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RoleEligibilityScheduleRequestsRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provides operations to call the filterByCurrentUser method.
     * @param string $on Usage: on='{on}'
     * @return FilterByCurrentUserWithOnRequestBuilder
    */
    public function filterByCurrentUserWithOn(string $on): FilterByCurrentUserWithOnRequestBuilder {
        return new FilterByCurrentUserWithOnRequestBuilder($this->pathParameters, $this->requestAdapter, $on);
    }

    /**
     * Requests for role eligibilities for principals through PIM.
     * @param RoleEligibilityScheduleRequestsRequestBuilderGetRequest_a13c9f8d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedRoleEligibilityScheduleRequestCollectionResponse|null>
     * @throws Exception
    */
    public function get(?RoleEligibilityScheduleRequestsRequestBuilderGetRequest_a13c9f8d $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleEligibilityScheduleRequestCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to roleEligibilityScheduleRequests for roleManagement
     * @param UnifiedRoleEligibilityScheduleRequest $body The request body
     * @param RoleEligibilityScheduleRequestsRequestBuilderPostReques_0b322e3e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedRoleEligibilityScheduleRequest|null>
     * @throws Exception
    */
    public function post(UnifiedRoleEligibilityScheduleRequest $body, ?RoleEligibilityScheduleRequestsRequestBuilderPostReques_0b322e3e $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleEligibilityScheduleRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Requests for role eligibilities for principals through PIM.
     * @param RoleEligibilityScheduleRequestsRequestBuilderGetRequest_a13c9f8d|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RoleEligibilityScheduleRequestsRequestBuilderGetRequest_a13c9f8d $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to roleEligibilityScheduleRequests for roleManagement
     * @param UnifiedRoleEligibilityScheduleRequest $body The request body
     * @param RoleEligibilityScheduleRequestsRequestBuilderPostReques_0b322e3e|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UnifiedRoleEligibilityScheduleRequest $body, ?RoleEligibilityScheduleRequestsRequestBuilderPostReques_0b322e3e $requestConfiguration = null): RequestInformation {
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
     * @return RoleEligibilityScheduleRequestsRequestBuilder
    */
    public function withUrl(string $rawUrl): RoleEligibilityScheduleRequestsRequestBuilder {
        return new RoleEligibilityScheduleRequestsRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
