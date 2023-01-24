<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignmentApprovals\AccessPackageAssignmentApprovalsRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackageAssignmentApprovals\Item\ApprovalItemRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\AccessPackagesRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\AccessPackageItemRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AssignmentPolicies\AssignmentPoliciesRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AssignmentPolicies\Item\AccessPackageAssignmentPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AssignmentRequests\AssignmentRequestsRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AssignmentRequests\Item\AccessPackageAssignmentRequestItemRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Assignments\AssignmentsRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Assignments\Item\AccessPackageAssignmentItemRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Catalogs\CatalogsRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Catalogs\Item\AccessPackageCatalogItemRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ConnectedOrganizations\ConnectedOrganizationsRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\ConnectedOrganizations\Item\ConnectedOrganizationItemRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\Settings\SettingsRequestBuilder;
use Microsoft\Graph\Generated\Models\EntitlementManagement;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the entitlementManagement property of the microsoft.graph.identityGovernance entity.
*/
class EntitlementManagementRequestBuilder 
{
    /**
     * Provides operations to manage the accessPackageAssignmentApprovals property of the microsoft.graph.entitlementManagement entity.
    */
    public function accessPackageAssignmentApprovals(): AccessPackageAssignmentApprovalsRequestBuilder {
        return new AccessPackageAssignmentApprovalsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the accessPackages property of the microsoft.graph.entitlementManagement entity.
    */
    public function accessPackages(): AccessPackagesRequestBuilder {
        return new AccessPackagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignmentPolicies property of the microsoft.graph.entitlementManagement entity.
    */
    public function assignmentPolicies(): AssignmentPoliciesRequestBuilder {
        return new AssignmentPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignmentRequests property of the microsoft.graph.entitlementManagement entity.
    */
    public function assignmentRequests(): AssignmentRequestsRequestBuilder {
        return new AssignmentRequestsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignments property of the microsoft.graph.entitlementManagement entity.
    */
    public function assignments(): AssignmentsRequestBuilder {
        return new AssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the catalogs property of the microsoft.graph.entitlementManagement entity.
    */
    public function catalogs(): CatalogsRequestBuilder {
        return new CatalogsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the connectedOrganizations property of the microsoft.graph.entitlementManagement entity.
    */
    public function connectedOrganizations(): ConnectedOrganizationsRequestBuilder {
        return new ConnectedOrganizationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * Provides operations to manage the settings property of the microsoft.graph.entitlementManagement entity.
    */
    public function settings(): SettingsRequestBuilder {
        return new SettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the accessPackageAssignmentApprovals property of the microsoft.graph.entitlementManagement entity.
     * @param string $id Unique identifier of the item
     * @return ApprovalItemRequestBuilder
    */
    public function accessPackageAssignmentApprovalsById(string $id): ApprovalItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['approval%2Did'] = $id;
        return new ApprovalItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the accessPackages property of the microsoft.graph.entitlementManagement entity.
     * @param string $id Unique identifier of the item
     * @return AccessPackageItemRequestBuilder
    */
    public function accessPackagesById(string $id): AccessPackageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackage%2Did'] = $id;
        return new AccessPackageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the assignmentPolicies property of the microsoft.graph.entitlementManagement entity.
     * @param string $id Unique identifier of the item
     * @return AccessPackageAssignmentPolicyItemRequestBuilder
    */
    public function assignmentPoliciesById(string $id): AccessPackageAssignmentPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackageAssignmentPolicy%2Did'] = $id;
        return new AccessPackageAssignmentPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the assignmentRequests property of the microsoft.graph.entitlementManagement entity.
     * @param string $id Unique identifier of the item
     * @return AccessPackageAssignmentRequestItemRequestBuilder
    */
    public function assignmentRequestsById(string $id): AccessPackageAssignmentRequestItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackageAssignmentRequest%2Did'] = $id;
        return new AccessPackageAssignmentRequestItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the assignments property of the microsoft.graph.entitlementManagement entity.
     * @param string $id Unique identifier of the item
     * @return AccessPackageAssignmentItemRequestBuilder
    */
    public function assignmentsById(string $id): AccessPackageAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackageAssignment%2Did'] = $id;
        return new AccessPackageAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the catalogs property of the microsoft.graph.entitlementManagement entity.
     * @param string $id Unique identifier of the item
     * @return AccessPackageCatalogItemRequestBuilder
    */
    public function catalogsById(string $id): AccessPackageCatalogItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackageCatalog%2Did'] = $id;
        return new AccessPackageCatalogItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the connectedOrganizations property of the microsoft.graph.entitlementManagement entity.
     * @param string $id Unique identifier of the item
     * @return ConnectedOrganizationItemRequestBuilder
    */
    public function connectedOrganizationsById(string $id): ConnectedOrganizationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['connectedOrganization%2Did'] = $id;
        return new ConnectedOrganizationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new EntitlementManagementRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/identityGovernance/entitlementManagement{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete navigation property entitlementManagement for identityGovernance
     * @param EntitlementManagementRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?EntitlementManagementRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Get entitlementManagement from identityGovernance
     * @param EntitlementManagementRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?EntitlementManagementRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EntitlementManagement::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Update the navigation property entitlementManagement in identityGovernance
     * @param EntitlementManagement $body The request body
     * @param EntitlementManagementRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(EntitlementManagement $body, ?EntitlementManagementRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [EntitlementManagement::class, 'createFromDiscriminatorValue'], $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property entitlementManagement for identityGovernance
     * @param EntitlementManagementRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?EntitlementManagementRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Get entitlementManagement from identityGovernance
     * @param EntitlementManagementRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?EntitlementManagementRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Update the navigation property entitlementManagement in identityGovernance
     * @param EntitlementManagement $body The request body
     * @param EntitlementManagementRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(EntitlementManagement $body, ?EntitlementManagementRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->addHeaders($requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

}
