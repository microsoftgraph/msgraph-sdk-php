<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AssignmentPolicies\Item;

use Exception;
use Http\Promise\Promise;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AssignmentPolicies\Item\AccessPackage\AccessPackageRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AssignmentPolicies\Item\Catalog\CatalogRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AssignmentPolicies\Item\CustomExtensionStageSettings\CustomExtensionStageSettingsRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AssignmentPolicies\Item\Questions\QuestionsRequestBuilder;
use Microsoft\Graph\Generated\Models\AccessPackageAssignmentPolicy;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the assignmentPolicies property of the microsoft.graph.entitlementManagement entity.
*/
class AccessPackageAssignmentPolicyItemRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to manage the accessPackage property of the microsoft.graph.accessPackageAssignmentPolicy entity.
    */
    public function accessPackage(): AccessPackageRequestBuilder {
        return new AccessPackageRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the catalog property of the microsoft.graph.accessPackageAssignmentPolicy entity.
    */
    public function catalog(): CatalogRequestBuilder {
        return new CatalogRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the customExtensionStageSettings property of the microsoft.graph.accessPackageAssignmentPolicy entity.
    */
    public function customExtensionStageSettings(): CustomExtensionStageSettingsRequestBuilder {
        return new CustomExtensionStageSettingsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the questions property of the microsoft.graph.accessPackageAssignmentPolicy entity.
    */
    public function questions(): QuestionsRequestBuilder {
        return new QuestionsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Instantiates a new AccessPackageAssignmentPolicyItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/assignmentPolicies/{accessPackageAssignmentPolicy%2Did}{?%24expand,%24select}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * In Microsoft Entra entitlement management, delete an accessPackageAssignmentPolicy.
     * @param AccessPackageAssignmentPolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<void|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/accesspackageassignmentpolicy-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?AccessPackageAssignmentPolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toDeleteRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendNoContentAsync($requestInfo, $errorMappings);
    }

    /**
     * In Microsoft Entra entitlement management, retrieve the properties and relationships of an accessPackageAssignmentPolicy object.
     * @param AccessPackageAssignmentPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessPackageAssignmentPolicy|null>
     * @throws Exception
     * @link https://learn.microsoft.com/graph/api/accesspackageassignmentpolicy-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?AccessPackageAssignmentPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessPackageAssignmentPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * Update the navigation property assignmentPolicies in identityGovernance
     * @param AccessPackageAssignmentPolicy $body The request body
     * @param AccessPackageAssignmentPolicyItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise<AccessPackageAssignmentPolicy|null>
     * @throws Exception
    */
    public function put(AccessPackageAssignmentPolicy $body, ?AccessPackageAssignmentPolicyItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPutRequestInformation($body, $requestConfiguration);
        $errorMappings = [
                '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
        ];
        return $this->requestAdapter->sendAsync($requestInfo, [AccessPackageAssignmentPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
    }

    /**
     * In Microsoft Entra entitlement management, delete an accessPackageAssignmentPolicy.
     * @param AccessPackageAssignmentPolicyItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?AccessPackageAssignmentPolicyItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * In Microsoft Entra entitlement management, retrieve the properties and relationships of an accessPackageAssignmentPolicy object.
     * @param AccessPackageAssignmentPolicyItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AccessPackageAssignmentPolicyItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Update the navigation property assignmentPolicies in identityGovernance
     * @param AccessPackageAssignmentPolicy $body The request body
     * @param AccessPackageAssignmentPolicyItemRequestBuilderPutRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPutRequestInformation(AccessPackageAssignmentPolicy $body, ?AccessPackageAssignmentPolicyItemRequestBuilderPutRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PUT;
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
     * @return AccessPackageAssignmentPolicyItemRequestBuilder
    */
    public function withUrl(string $rawUrl): AccessPackageAssignmentPolicyItemRequestBuilder {
        return new AccessPackageAssignmentPolicyItemRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
