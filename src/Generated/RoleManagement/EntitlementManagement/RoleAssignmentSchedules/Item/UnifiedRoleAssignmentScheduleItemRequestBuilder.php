<?php

namespace Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleAssignmentSchedules\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\UnifiedRoleAssignmentSchedule;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleAssignmentSchedules\Item\ActivatedUsing\ActivatedUsingRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleAssignmentSchedules\Item\AppScope\AppScopeRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleAssignmentSchedules\Item\DirectoryScope\DirectoryScopeRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleAssignmentSchedules\Item\Principal\PrincipalRequestBuilder;
use Microsoft\Graph\Generated\RoleManagement\EntitlementManagement\RoleAssignmentSchedules\Item\RoleDefinition\RoleDefinitionRequestBuilder;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the roleAssignmentSchedules property of the microsoft.graph.rbacApplication entity.
*/
class UnifiedRoleAssignmentScheduleItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the activatedUsing property of the microsoft.graph.unifiedRoleAssignmentSchedule entity.
    */
    public function activatedUsing(): ActivatedUsingRequestBuilder {
        return new ActivatedUsingRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
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
     * Instantiates a new UnifiedRoleAssignmentScheduleItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/roleManagement/entitlementManagement/roleAssignmentSchedules/{unifiedRoleAssignmentSchedule%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Delete navigation property roleAssignmentSchedules for roleManagement
     * @param UnifiedRoleAssignmentScheduleItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
    */
    public function delete(?UnifiedRoleAssignmentScheduleItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * Schedules for active role assignment operations.
     * @param UnifiedRoleAssignmentScheduleItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedRoleAssignmentSchedule|null>
     * @throws Exception
    */
    public function get(?UnifiedRoleAssignmentScheduleItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleAssignmentSchedule::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property roleAssignmentSchedules in roleManagement
     * @param UnifiedRoleAssignmentSchedule $body The request body
     * @param UnifiedRoleAssignmentScheduleItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<UnifiedRoleAssignmentSchedule|null>
     * @throws Exception
    */
    public function patch(UnifiedRoleAssignmentSchedule $body, ?UnifiedRoleAssignmentScheduleItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                'XXX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [UnifiedRoleAssignmentSchedule::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Delete navigation property roleAssignmentSchedules for roleManagement
     * @param UnifiedRoleAssignmentScheduleItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?UnifiedRoleAssignmentScheduleItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * Schedules for active role assignment operations.
     * @param UnifiedRoleAssignmentScheduleItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?UnifiedRoleAssignmentScheduleItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property roleAssignmentSchedules in roleManagement
     * @param UnifiedRoleAssignmentSchedule $body The request body
     * @param UnifiedRoleAssignmentScheduleItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(UnifiedRoleAssignmentSchedule $body, ?UnifiedRoleAssignmentScheduleItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * @return UnifiedRoleAssignmentScheduleItemRequestBuilder
    */
    public function withUrl(string $rawUrl): UnifiedRoleAssignmentScheduleItemRequestBuilder {
        return new UnifiedRoleAssignmentScheduleItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
