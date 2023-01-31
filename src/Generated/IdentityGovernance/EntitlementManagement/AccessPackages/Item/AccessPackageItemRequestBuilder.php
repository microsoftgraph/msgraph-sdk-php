<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\AccessPackagesIncompatibleWith\AccessPackagesIncompatibleWithRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\AssignmentPolicies\AssignmentPoliciesRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\AssignmentPolicies\Item\AccessPackageAssignmentPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\Catalog\CatalogRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\IncompatibleAccessPackages\IncompatibleAccessPackagesRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\IncompatibleGroups\IncompatibleGroupsRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\IncompatibleGroups\Item\GroupItemRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\MicrosoftGraphGetApplicablePolicyRequirements\GetApplicablePolicyRequirementsRequestBuilder;
use Microsoft\Graph\Generated\Models\AccessPackage;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the accessPackages property of the microsoft.graph.entitlementManagement entity.
*/
class AccessPackageItemRequestBuilder 
{
    /**
     * Provides operations to manage the accessPackagesIncompatibleWith property of the microsoft.graph.accessPackage entity.
    */
    public function accessPackagesIncompatibleWith(): AccessPackagesIncompatibleWithRequestBuilder {
        return new AccessPackagesIncompatibleWithRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignmentPolicies property of the microsoft.graph.accessPackage entity.
    */
    public function assignmentPolicies(): AssignmentPoliciesRequestBuilder {
        return new AssignmentPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the catalog property of the microsoft.graph.accessPackage entity.
    */
    public function catalog(): CatalogRequestBuilder {
        return new CatalogRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the incompatibleAccessPackages property of the microsoft.graph.accessPackage entity.
    */
    public function incompatibleAccessPackages(): IncompatibleAccessPackagesRequestBuilder {
        return new IncompatibleAccessPackagesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the incompatibleGroups property of the microsoft.graph.accessPackage entity.
    */
    public function incompatibleGroups(): IncompatibleGroupsRequestBuilder {
        return new IncompatibleGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getApplicablePolicyRequirements method.
    */
    public function microsoftGraphGetApplicablePolicyRequirements(): GetApplicablePolicyRequirementsRequestBuilder {
        return new GetApplicablePolicyRequirementsRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the accessPackagesIncompatibleWith property of the microsoft.graph.accessPackage entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\AccessPackagesIncompatibleWith\Item\AccessPackageItemRequestBuilder
    */
    public function accessPackagesIncompatibleWithById(string $id): \Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\AccessPackagesIncompatibleWith\Item\AccessPackageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackage%2Did1'] = $id;
        return new \Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\AccessPackagesIncompatibleWith\Item\AccessPackageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the assignmentPolicies property of the microsoft.graph.accessPackage entity.
     * @param string $id Unique identifier of the item
     * @return AccessPackageAssignmentPolicyItemRequestBuilder
    */
    public function assignmentPoliciesById(string $id): AccessPackageAssignmentPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackageAssignmentPolicy%2Did'] = $id;
        return new AccessPackageAssignmentPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AccessPackageItemRequestBuilder and sets the default values.
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
     * @param string|null $accessPackageId key: id of accessPackage
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter, ?string $accessPackageId = null) {
        $this->urlTemplate = '{+baseurl}/identityGovernance/entitlementManagement/accessPackages/{accessPackage%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
        $urlTplParams = $pathParameters;
        $urlTplParams['accessPackageId'] = $accessPackageId;
        $this->pathParameters = array_merge($this->pathParameters, $urlTplParams);
    }

    /**
     * Delete navigation property accessPackages for identityGovernance
     * @param AccessPackageItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function delete(?AccessPackageItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Access packages define the collection of resource roles and the policies for which subjects can request or be assigned access to those resources.
     * @param AccessPackageItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function get(?AccessPackageItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [AccessPackage::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft/Graph/Generated.identityGovernance.entitlementManagement.accessPackages.item.incompatibleAccessPackages.item collection
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\IncompatibleAccessPackages\Item\AccessPackageItemRequestBuilder
    */
    public function incompatibleAccessPackagesById(string $id): \Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\IncompatibleAccessPackages\Item\AccessPackageItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackage%2Did1'] = $id;
        return new \Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AccessPackages\Item\IncompatibleAccessPackages\Item\AccessPackageItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft/Graph/Generated.identityGovernance.entitlementManagement.accessPackages.item.incompatibleGroups.item collection
     * @param string $id Unique identifier of the item
     * @return GroupItemRequestBuilder
    */
    public function incompatibleGroupsById(string $id): GroupItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['group%2Did'] = $id;
        return new GroupItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the navigation property accessPackages in identityGovernance
     * @param AccessPackageItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(AccessPackage $body, ?AccessPackageItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [AccessPackage::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete navigation property accessPackages for identityGovernance
     * @param AccessPackageItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AccessPackageItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Access packages define the collection of resource roles and the policies for which subjects can request or be assigned access to those resources.
     * @param AccessPackageItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AccessPackageItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property accessPackages in identityGovernance
     * @param AccessPackageItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(AccessPackage $body, ?AccessPackageItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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
