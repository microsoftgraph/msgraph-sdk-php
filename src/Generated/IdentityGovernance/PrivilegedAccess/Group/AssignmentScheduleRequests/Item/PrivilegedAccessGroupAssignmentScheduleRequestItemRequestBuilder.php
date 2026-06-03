<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleRequests\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleRequests\Item\ActivatedUsing\ActivatedUsingRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleRequests\Item\Cancel\CancelRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleRequests\Item\Group\GroupRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleRequests\Item\Principal\PrincipalRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleRequests\Item\TargetSchedule\TargetScheduleRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\PrivilegedAccessGroupAssignmentScheduleRequest;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the assignmentScheduleRequests property of the microsoft.graph.privilegedAccessGroup entity.
*/
class PrivilegedAccessGroupAssignmentScheduleRequestItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the activatedUsing property of the microsoft.graph.privilegedAccessGroupAssignmentScheduleRequest entity.
    */
    public function activatedUsing(): ActivatedUsingRequestBuilder {
        return new ActivatedUsingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cancel method.
    */
    public function cancel(): CancelRequestBuilder {
        return new CancelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the group property of the microsoft.graph.privilegedAccessGroupAssignmentScheduleRequest entity.
    */
    public function group(): GroupRequestBuilder {
        return new GroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the principal property of the microsoft.graph.privilegedAccessGroupAssignmentScheduleRequest entity.
    */
    public function principal(): PrincipalRequestBuilder {
        return new PrincipalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the targetSchedule property of the microsoft.graph.privilegedAccessGroupAssignmentScheduleRequest entity.
    */
    public function targetSchedule(): TargetScheduleRequestBuilder {
        return new TargetScheduleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new PrivilegedAccessGroupAssignmentScheduleRequestItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/privilegedAccess/group/assignmentScheduleRequests/{privilegedAccessGroupAssignmentScheduleRequest%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property assignmentScheduleRequests for identityGovernance
     * @param PrivilegedAccessGroupAssignmentScheduleRequestItemReque_85ad502f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?PrivilegedAccessGroupAssignmentScheduleRequestItemReque_85ad502f $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a privilegedAccessGroupAssignmentScheduleRequest object.
     * @param PrivilegedAccessGroupAssignmentScheduleRequestItemReque_d226b149|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PrivilegedAccessGroupAssignmentScheduleRequest|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/privilegedaccessgroupassignmentschedulerequest-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?PrivilegedAccessGroupAssignmentScheduleRequestItemReque_d226b149 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PrivilegedAccessGroupAssignmentScheduleRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property assignmentScheduleRequests in identityGovernance
     * @param PrivilegedAccessGroupAssignmentScheduleRequest $body The request body
     * @param PrivilegedAccessGroupAssignmentScheduleRequestItemReque_d6214cf3|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PrivilegedAccessGroupAssignmentScheduleRequest|null>
     * @throws Exception
    */
    public function patch(PrivilegedAccessGroupAssignmentScheduleRequest $body, ?PrivilegedAccessGroupAssignmentScheduleRequestItemReque_d6214cf3 $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PrivilegedAccessGroupAssignmentScheduleRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property assignmentScheduleRequests for identityGovernance
     * @param PrivilegedAccessGroupAssignmentScheduleRequestItemReque_85ad502f|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?PrivilegedAccessGroupAssignmentScheduleRequestItemReque_85ad502f $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->tryAddHeader('Accept', "application/json");
        return $requestInfo;
    }

    /**
     * Read the properties and relationships of a privilegedAccessGroupAssignmentScheduleRequest object.
     * @param PrivilegedAccessGroupAssignmentScheduleRequestItemReque_d226b149|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PrivilegedAccessGroupAssignmentScheduleRequestItemReque_d226b149 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property assignmentScheduleRequests in identityGovernance
     * @param PrivilegedAccessGroupAssignmentScheduleRequest $body The request body
     * @param PrivilegedAccessGroupAssignmentScheduleRequestItemReque_d6214cf3|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(PrivilegedAccessGroupAssignmentScheduleRequest $body, ?PrivilegedAccessGroupAssignmentScheduleRequestItemReque_d6214cf3 $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
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
     * @return PrivilegedAccessGroupAssignmentScheduleRequestItemRequestBuilder
    */
    public function withUrl(string $rawUrl): PrivilegedAccessGroupAssignmentScheduleRequestItemRequestBuilder {
        return new PrivilegedAccessGroupAssignmentScheduleRequestItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
