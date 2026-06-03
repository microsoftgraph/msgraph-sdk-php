<?php

namespace Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilityScheduleRequests\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UnifiedRoleEligibilityScheduleRequest;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilityScheduleRequests\Item\AppScope\AppScopeRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilityScheduleRequests\Item\Cancel\CancelRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilityScheduleRequests\Item\DirectoryScope\DirectoryScopeRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilityScheduleRequests\Item\Principal\PrincipalRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilityScheduleRequests\Item\RoleDefinition\RoleDefinitionRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilityScheduleRequests\Item\TargetSchedule\TargetScheduleRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the roleEligibilityScheduleRequests property of the microsoft.graph.rbacApplication entity.
*/
class UnifiedRoleEligibilityScheduleRequestItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the appScope property of the microsoft.graph.unifiedRoleEligibilityScheduleRequest entity.
    */
    public function appScope(): AppScopeRequestBuilder {
        return new AppScopeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the cancel method.
    */
    public function cancel(): CancelRequestBuilder {
        return new CancelRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the directoryScope property of the microsoft.graph.unifiedRoleEligibilityScheduleRequest entity.
    */
    public function directoryScope(): DirectoryScopeRequestBuilder {
        return new DirectoryScopeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the principal property of the microsoft.graph.unifiedRoleEligibilityScheduleRequest entity.
    */
    public function principal(): PrincipalRequestBuilder {
        return new PrincipalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleDefinition property of the microsoft.graph.unifiedRoleEligibilityScheduleRequest entity.
    */
    public function roleDefinition(): RoleDefinitionRequestBuilder {
        return new RoleDefinitionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the targetSchedule property of the microsoft.graph.unifiedRoleEligibilityScheduleRequest entity.
    */
    public function targetSchedule(): TargetScheduleRequestBuilder {
        return new TargetScheduleRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new UnifiedRoleEligibilityScheduleRequestItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/roleManagement/entitlementManagement/roleEligibilityScheduleRequests/{unifiedRoleEligibilityScheduleRequest%2Did}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property roleEligibilityScheduleRequests for roleManagement
     * @param UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_fd553132|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_fd553132 $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Requests for role eligibilities for principals through PIM.
     * @param UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_66414606|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedRoleEligibilityScheduleRequest|null>
     * @throws Exception
    */
    public function get(?UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_66414606 $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleEligibilityScheduleRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property roleEligibilityScheduleRequests in roleManagement
     * @param UnifiedRoleEligibilityScheduleRequest $body The request body
     * @param UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_be1b6dbc|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedRoleEligibilityScheduleRequest|null>
     * @throws Exception
    */
    public function patch(UnifiedRoleEligibilityScheduleRequest $body, ?UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_be1b6dbc $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleEligibilityScheduleRequest::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property roleEligibilityScheduleRequests for roleManagement
     * @param UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_fd553132|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_fd553132 $requestConfiguration = null): RequestInformation {
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
     * Requests for role eligibilities for principals through PIM.
     * @param UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_66414606|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_66414606 $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property roleEligibilityScheduleRequests in roleManagement
     * @param UnifiedRoleEligibilityScheduleRequest $body The request body
     * @param UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_be1b6dbc|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UnifiedRoleEligibilityScheduleRequest $body, ?UnifiedRoleEligibilityScheduleRequestItemRequestBuilder_be1b6dbc $requestConfiguration = null): RequestInformation {
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
     * @return UnifiedRoleEligibilityScheduleRequestItemRequestBuilder
    */
    public function withUrl(string $rawUrl): UnifiedRoleEligibilityScheduleRequestItemRequestBuilder {
        return new UnifiedRoleEligibilityScheduleRequestItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
