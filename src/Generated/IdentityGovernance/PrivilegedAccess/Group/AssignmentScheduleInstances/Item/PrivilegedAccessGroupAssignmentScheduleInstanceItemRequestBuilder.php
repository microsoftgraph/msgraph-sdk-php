<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleInstances\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleInstances\Item\ActivatedUsing\ActivatedUsingRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleInstances\Item\Group\GroupRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\AssignmentScheduleInstances\Item\Principal\PrincipalRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\PrivilegedAccessGroupAssignmentScheduleInstance;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the assignmentScheduleInstances property of the microsoft.graph.privilegedAccessGroup entity.
*/
class PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the activatedUsing property of the microsoft.graph.privilegedAccessGroupAssignmentScheduleInstance entity.
    */
    public function activatedUsing(): ActivatedUsingRequestBuilder {
        return new ActivatedUsingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the group property of the microsoft.graph.privilegedAccessGroupAssignmentScheduleInstance entity.
    */
    public function group(): GroupRequestBuilder {
        return new GroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the principal property of the microsoft.graph.privilegedAccessGroupAssignmentScheduleInstance entity.
    */
    public function principal(): PrincipalRequestBuilder {
        return new PrincipalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/privilegedAccess/group/assignmentScheduleInstances/{privilegedAccessGroupAssignmentScheduleInstance%2Did}{?%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property assignmentScheduleInstances for identityGovernance
     * @param PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a privilegedAccessGroupAssignmentScheduleInstance object.
     * @param PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PrivilegedAccessGroupAssignmentScheduleInstance|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/privilegedaccessgroupassignmentscheduleinstance-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PrivilegedAccessGroupAssignmentScheduleInstance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property assignmentScheduleInstances in identityGovernance
     * @param PrivilegedAccessGroupAssignmentScheduleInstance $body The request body
     * @param PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PrivilegedAccessGroupAssignmentScheduleInstance|null>
     * @throws Exception
    */
    public function patch(PrivilegedAccessGroupAssignmentScheduleInstance $body, ?PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PrivilegedAccessGroupAssignmentScheduleInstance::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property assignmentScheduleInstances for identityGovernance
     * @param PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a privilegedAccessGroupAssignmentScheduleInstance object.
     * @param PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property assignmentScheduleInstances in identityGovernance
     * @param PrivilegedAccessGroupAssignmentScheduleInstance $body The request body
     * @param PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(PrivilegedAccessGroupAssignmentScheduleInstance $body, ?PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilder
    */
    public function withUrl(string $rawUrl): PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilder {
        return new PrivilegedAccessGroupAssignmentScheduleInstanceItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
