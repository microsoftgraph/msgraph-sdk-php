<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\EligibilityScheduleRequests\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\EligibilityScheduleRequests\Item\Cancel\CancelRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\EligibilityScheduleRequests\Item\Group\GroupRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\EligibilityScheduleRequests\Item\Principal\PrincipalRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\PrivilegedAccess\Group\EligibilityScheduleRequests\Item\TargetSchedule\TargetScheduleRequestBuilder;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\PrivilegedAccessGroupEligibilityScheduleRequest;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the eligibilityScheduleRequests property of the microsoft.graph.privilegedAccessGroup entity. Original name: PrivilegedAccessGroupEligibilityScheduleRequestItemRequestBuilder
*/
class PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_ae87ea31 extends BaseRequestBuilder 
{
    /**
     * Provides operations to call the cancel method.
    */
    public function cancel(): CancelRequestBuilder {
        return new CancelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the group property of the microsoft.graph.privilegedAccessGroupEligibilityScheduleRequest entity.
    */
    public function group(): GroupRequestBuilder {
        return new GroupRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the principal property of the microsoft.graph.privilegedAccessGroupEligibilityScheduleRequest entity.
    */
    public function principal(): PrincipalRequestBuilder {
        return new PrincipalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the targetSchedule property of the microsoft.graph.privilegedAccessGroupEligibilityScheduleRequest entity.
    */
    public function targetSchedule(): TargetScheduleRequestBuilder {
        return new TargetScheduleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_ae87ea31 and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/privilegedAccess/group/eligibilityScheduleRequests/{privilegedAccessGroupEligibilityScheduleRequest%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property eligibilityScheduleRequests for identityGovernance
     * @param PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_738b3c74|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_738b3c74 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Read the properties and relationships of a privilegedAccessGroupEligibilityScheduleRequest object.
     * @param PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_4b042468|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PrivilegedAccessGroupEligibilityScheduleRequest|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/privilegedaccessgroupeligibilityschedulerequest-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_4b042468 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PrivilegedAccessGroupEligibilityScheduleRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property eligibilityScheduleRequests in identityGovernance
     * @param PrivilegedAccessGroupEligibilityScheduleRequest $body The request body
     * @param PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_ce211eff|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<PrivilegedAccessGroupEligibilityScheduleRequest|null>
     * @throws Exception
    */
    public function patch(PrivilegedAccessGroupEligibilityScheduleRequest $body, ?PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_ce211eff $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [PrivilegedAccessGroupEligibilityScheduleRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property eligibilityScheduleRequests for identityGovernance
     * @param PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_738b3c74|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_738b3c74 $requestConfiguration = null): RequestInformation {
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
     * Read the properties and relationships of a privilegedAccessGroupEligibilityScheduleRequest object.
     * @param PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_4b042468|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_4b042468 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property eligibilityScheduleRequests in identityGovernance
     * @param PrivilegedAccessGroupEligibilityScheduleRequest $body The request body
     * @param PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_ce211eff|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(PrivilegedAccessGroupEligibilityScheduleRequest $body, ?PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_ce211eff $requestConfiguration = null): RequestInformation {
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
     * @return PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_ae87ea31
    */
    public function withUrl(string $rawUrl): PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_ae87ea31 {
        return new PrivilegedAccessGroupEligibilityScheduleRequestItemRequ_ae87ea31($rawUrl, $this->requestAdapter);
    }

}
