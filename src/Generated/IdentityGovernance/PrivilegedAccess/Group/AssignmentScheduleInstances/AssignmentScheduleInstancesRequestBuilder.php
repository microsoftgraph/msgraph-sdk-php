<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleInstances;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleInstances\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleInstances\FilterByCurrentUserWithOn\FilterByCurrentUserWithOnRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleInstances\Item\PrivilegedAccessGroupAssignmentScheduleInstanceItemRequ_595d3223;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\PrivilegedAccessGroupAssignmentScheduleInstance;
use Microsoft\Graph\Generated\Models\PrivilegedAccessGroupAssignmentScheduleInstanceCollecti_f295a386;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the assignmentScheduleInstances property of the microsoft.graph.privilegedAccessGroup entity.
*/
class AssignmentScheduleInstancesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignmentScheduleInstances property of the microsoft.graph.privilegedAccessGroup entity.
     * @param string $privilegedAccessGroupAssignmentScheduleInstanceId The unique identifier of privilegedAccessGroupAssignmentScheduleInstance
     * @return PrivilegedAccessGroupAssignmentScheduleInstanceItemRequ_595d3223
    */
    public function byPrivilegedAccessGroupAssignmentScheduleInstanceId(string $privilegedAccessGroupAssignmentScheduleInstanceId): PrivilegedAccessGroupAssignmentScheduleInstanceItemRequ_595d3223 {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['privilegedAccessGroupAssignmentScheduleInstance%2Did'] = $privilegedAccessGroupAssignmentScheduleInstanceId;
        return new PrivilegedAccessGroupAssignmentScheduleInstanceItemRequ_595d3223($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AssignmentScheduleInstancesRequestBuilder and sets the default values.
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
     * Get a list of the privilegedAccessGroupAssignmentScheduleInstance objects and their properties.
     * @param AssignmentScheduleInstancesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PrivilegedAccessGroupAssignmentScheduleInstanceCollecti_f295a386|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/privilegedaccessgroup-list-assignmentscheduleinstances?view=graph-rest-1.0 Find more info here
    */
    public function get(?AssignmentScheduleInstancesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PrivilegedAccessGroupAssignmentScheduleInstanceCollecti_f295a386::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Create new navigation property to assignmentScheduleInstances for identityGovernance
     * @param PrivilegedAccessGroupAssignmentScheduleInstance $body The request body
     * @param AssignmentScheduleInstancesRequestBuilderPostRequestCon_5a23a96b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PrivilegedAccessGroupAssignmentScheduleInstance|null>
     * @throws Exception
    */
    public function post(PrivilegedAccessGroupAssignmentScheduleInstance $body, ?AssignmentScheduleInstancesRequestBuilderPostRequestCon_5a23a96b $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PrivilegedAccessGroupAssignmentScheduleInstance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Get a list of the privilegedAccessGroupAssignmentScheduleInstance objects and their properties.
     * @param AssignmentScheduleInstancesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AssignmentScheduleInstancesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Create new navigation property to assignmentScheduleInstances for identityGovernance
     * @param PrivilegedAccessGroupAssignmentScheduleInstance $body The request body
     * @param AssignmentScheduleInstancesRequestBuilderPostRequestCon_5a23a96b|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(PrivilegedAccessGroupAssignmentScheduleInstance $body, ?AssignmentScheduleInstancesRequestBuilderPostRequestCon_5a23a96b $requestConfiguration = null): RequestInformation {
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
     * @return AssignmentScheduleInstancesRequestBuilder
    */
    public function withUrl(string $rawUrl): AssignmentScheduleInstancesRequestBuilder {
        return new AssignmentScheduleInstancesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
