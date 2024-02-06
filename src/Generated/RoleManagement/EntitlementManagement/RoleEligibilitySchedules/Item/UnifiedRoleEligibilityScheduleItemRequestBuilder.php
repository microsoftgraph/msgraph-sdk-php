<?php

namespace Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilitySchedules\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UnifiedRoleEligibilitySchedule;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilitySchedules\Item\AppScope\AppScopeRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilitySchedules\Item\DirectoryScope\DirectoryScopeRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilitySchedules\Item\Principal\PrincipalRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleEligibilitySchedules\Item\RoleDefinition\RoleDefinitionRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the roleEligibilitySchedules property of the microsoft.graph.rbacApplication entity.
*/
class UnifiedRoleEligibilityScheduleItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the appScope property of the microsoft.graph.unifiedRoleScheduleBase entity.
    */
    public function appScope(): AppScopeRequestBuilder {
        return new AppScopeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the directoryScope property of the microsoft.graph.unifiedRoleScheduleBase entity.
    */
    public function directoryScope(): DirectoryScopeRequestBuilder {
        return new DirectoryScopeRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the principal property of the microsoft.graph.unifiedRoleScheduleBase entity.
    */
    public function principal(): PrincipalRequestBuilder {
        return new PrincipalRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the roleDefinition property of the microsoft.graph.unifiedRoleScheduleBase entity.
    */
    public function roleDefinition(): RoleDefinitionRequestBuilder {
        return new RoleDefinitionRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new UnifiedRoleEligibilityScheduleItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/roleManagement/entitlementManagement/roleEligibilitySchedules/{unifiedRoleEligibilitySchedule%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property roleEligibilitySchedules for roleManagement
     * @param UnifiedRoleEligibilityScheduleItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?UnifiedRoleEligibilityScheduleItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Retrieve the schedule for a role eligibility operation.
     * @param UnifiedRoleEligibilityScheduleItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedRoleEligibilitySchedule|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/unifiedroleeligibilityschedule-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?UnifiedRoleEligibilityScheduleItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleEligibilitySchedule::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property roleEligibilitySchedules in roleManagement
     * @param UnifiedRoleEligibilitySchedule $body The request body
     * @param UnifiedRoleEligibilityScheduleItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedRoleEligibilitySchedule|null>
     * @throws Exception
    */
    public function patch(UnifiedRoleEligibilitySchedule $body, ?UnifiedRoleEligibilityScheduleItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleEligibilitySchedule::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property roleEligibilitySchedules for roleManagement
     * @param UnifiedRoleEligibilityScheduleItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?UnifiedRoleEligibilityScheduleItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Retrieve the schedule for a role eligibility operation.
     * @param UnifiedRoleEligibilityScheduleItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UnifiedRoleEligibilityScheduleItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property roleEligibilitySchedules in roleManagement
     * @param UnifiedRoleEligibilitySchedule $body The request body
     * @param UnifiedRoleEligibilityScheduleItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UnifiedRoleEligibilitySchedule $body, ?UnifiedRoleEligibilityScheduleItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UnifiedRoleEligibilityScheduleItemRequestBuilder
    */
    public function withUrl(string $rawUrl): UnifiedRoleEligibilityScheduleItemRequestBuilder {
        return new UnifiedRoleEligibilityScheduleItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
