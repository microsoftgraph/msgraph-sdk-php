<?php

namespace Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilitySchedules;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UnifiedRoleEligibilitySchedule;
use Microsoft\Graph\Generated\Models\UnifiedRoleEligibilityScheduleCollectionResponse;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilitySchedules\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilitySchedules\FilterByCurrentUserWithOn\FilterByCurrentUserWithOnRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilitySchedules\Item\UnifiedRoleEligibilityScheduleItemRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the roleEligibilitySchedules property of the microsoft.graph.rbacApplication entity.
*/
class RoleEligibilitySchedulesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleEligibilitySchedules property of the microsoft.graph.rbacApplication entity.
     * @param string $unifiedRoleEligibilityScheduleId Unique identifier of the item
     * @return UnifiedRoleEligibilityScheduleItemRequestBuilder
    */
    public function byUnifiedRoleEligibilityScheduleId(string $unifiedRoleEligibilityScheduleId): UnifiedRoleEligibilityScheduleItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['unifiedRoleEligibilitySchedule%2Did'] = $unifiedRoleEligibilityScheduleId;
        return new UnifiedRoleEligibilityScheduleItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new RoleEligibilitySchedulesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/roleManagement/entitlementManagement/roleEligibilitySchedules{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
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
     * Get the unifiedRoleEligibilitySchedule resources from the roleEligibilitySchedules navigation property.
     * @param RoleEligibilitySchedulesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/rbacapplication-list-roleeligibilityschedules?view=graph-rest-1.0 Find more info here
    */
    public function get(?RoleEligibilitySchedulesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleEligibilityScheduleCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Create new navigation property to roleEligibilitySchedules for roleManagement
     * @param UnifiedRoleEligibilitySchedule $body The request body
     * @param RoleEligibilitySchedulesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function post(UnifiedRoleEligibilitySchedule $body, ?RoleEligibilitySchedulesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleEligibilitySchedule::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get the unifiedRoleEligibilitySchedule resources from the roleEligibilitySchedules navigation property.
     * @param RoleEligibilitySchedulesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?RoleEligibilitySchedulesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Create new navigation property to roleEligibilitySchedules for roleManagement
     * @param UnifiedRoleEligibilitySchedule $body The request body
     * @param RoleEligibilitySchedulesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(UnifiedRoleEligibilitySchedule $body, ?RoleEligibilitySchedulesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
