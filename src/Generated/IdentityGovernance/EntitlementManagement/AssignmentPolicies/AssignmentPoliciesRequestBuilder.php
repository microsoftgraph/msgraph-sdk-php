<?php

namespace Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AssignmentPolicies;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AssignmentPolicies\Count\CountRequestBuilder;
use Microsoft\Graph\Generated\IdentityGovernance\EntitlementManagement\AssignmentPolicies\Item\AccessPackageAssignmentPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\Models\AccessPackageAssignmentPolicy;
use Microsoft\Graph\Generated\Models\AccessPackageAssignmentPolicyCollectionResponse;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Kiota\Abstractions\BaseRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;

/**
 * Provides operations to manage the assignmentPolicies property of the microsoft.graph.entitlementManagement entity.
*/
class AssignmentPoliciesRequestBuilder extends BaseRequestBuilder 
{
    /**
     * Provides operations to count the resources in the collection.
    */
    public function count(): CountRequestBuilder {
        return new CountRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the assignmentPolicies property of the microsoft.graph.entitlementManagement entity.
     * @param string $accessPackageAssignmentPolicyId The unique identifier of accessPackageAssignmentPolicy
     * @return AccessPackageAssignmentPolicyItemRequestBuilder
    */
    public function byAccessPackageAssignmentPolicyId(string $accessPackageAssignmentPolicyId): AccessPackageAssignmentPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['accessPackageAssignmentPolicy%2Did'] = $accessPackageAssignmentPolicyId;
        return new AccessPackageAssignmentPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new AssignmentPoliciesRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        parent::__construct($requestAdapter, [], '{+baseurl}/identityGovernance/entitlementManagement/assignmentPolicies{?%24top,%24skip,%24search,%24filter,%24count,%24orderby,%24select,%24expand}');
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * In Azure AD entitlement management, retrieve a list of accessPackageAssignmentPolicy objects. If the delegated user is in a directory role, the resulting list includes all the assignment policies that the caller has access to read, across all catalogs and access packages. If the delegated user is an access package manager or catalog owner, they should instead retrieve the policies for the access packages they can read with list accessPackages by including $expand=accessPackageAssignmentPolicies as a query parameter. This API is available in the following national cloud deployments.
     * @param AssignmentPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/entitlementmanagement-list-assignmentpolicies?view=graph-rest-1.0 Find more info here
    */
    public function get(?AssignmentPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [AccessPackageAssignmentPolicyCollectionResponse::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * In Azure AD entitlement management, create a new accessPackageAssignmentPolicy object.  The request will include a reference to the accessPackage that will contain this policy, which must already exist. This API is available in the following national cloud deployments.
     * @param AccessPackageAssignmentPolicy $body The request body
     * @param AssignmentPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://learn.microsoft.com/graph/api/entitlementmanagement-post-assignmentpolicies?view=graph-rest-1.0 Find more info here
    */
    public function post(AccessPackageAssignmentPolicy $body, ?AssignmentPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPostRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [AccessPackageAssignmentPolicy::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * In Azure AD entitlement management, retrieve a list of accessPackageAssignmentPolicy objects. If the delegated user is in a directory role, the resulting list includes all the assignment policies that the caller has access to read, across all catalogs and access packages. If the delegated user is an access package manager or catalog owner, they should instead retrieve the policies for the access packages they can read with list accessPackages by including $expand=accessPackageAssignmentPolicies as a query parameter. This API is available in the following national cloud deployments.
     * @param AssignmentPoliciesRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?AssignmentPoliciesRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            if ($requestConfiguration->queryParameters !== null) {
                $requestInfo->setQueryParameters($requestConfiguration->queryParameters);
            }
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        return $requestInfo;
    }

    /**
     * In Azure AD entitlement management, create a new accessPackageAssignmentPolicy object.  The request will include a reference to the accessPackage that will contain this policy, which must already exist. This API is available in the following national cloud deployments.
     * @param AccessPackageAssignmentPolicy $body The request body
     * @param AssignmentPoliciesRequestBuilderPostRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPostRequestInformation(AccessPackageAssignmentPolicy $body, ?AssignmentPoliciesRequestBuilderPostRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::POST;
        $requestInfo->addHeader('Accept', "application/json");
        if ($requestConfiguration !== null) {
            $requestInfo->addHeaders($requestConfiguration->headers);
            $requestInfo->addRequestOptions(...$requestConfiguration->options);
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Returns a request builder with the provided arbitrary URL. Using this method means any other path or query parameters are ignored.
     * @param string $rawUrl The raw URL to use for the request builder.
     * @return AssignmentPoliciesRequestBuilder
    */
    public function withUrl(string $rawUrl): AssignmentPoliciesRequestBuilder {
        return new AssignmentPoliciesRequestBuilder($rawUrl, $this->requestAdapter);
    }

}
