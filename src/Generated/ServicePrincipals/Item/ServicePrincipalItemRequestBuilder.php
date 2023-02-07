<?php

namespace Microsoft\Graph\Generated\ServicePrincipals\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Generated\Models\ODataErrors\ODataError;
use Microsoft\Graph\Generated\Models\ServicePrincipal;
use Microsoft\Graph\Generated\ServicePrincipals\Item\AppRoleAssignedTo\AppRoleAssignedToRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\AppRoleAssignments\AppRoleAssignmentsRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\ClaimsMappingPolicies\ClaimsMappingPoliciesRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\ClaimsMappingPolicies\Item\ClaimsMappingPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\CreatedObjects\CreatedObjectsRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\DelegatedPermissionClassifications\DelegatedPermissionClassificationsRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\DelegatedPermissionClassifications\Item\DelegatedPermissionClassificationItemRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\Endpoints\EndpointsRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\Endpoints\Item\EndpointItemRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\FederatedIdentityCredentials\FederatedIdentityCredentialsRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\FederatedIdentityCredentials\Item\FederatedIdentityCredentialItemRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\HomeRealmDiscoveryPolicies\HomeRealmDiscoveryPoliciesRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\HomeRealmDiscoveryPolicies\Item\HomeRealmDiscoveryPolicyItemRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MemberOf\MemberOfRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MicrosoftGraphAddKey\MicrosoftGraphAddKeyRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MicrosoftGraphAddPassword\MicrosoftGraphAddPasswordRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MicrosoftGraphAddTokenSigningCertificate\MicrosoftGraphAddTokenSigningCertificateRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MicrosoftGraphCheckMemberGroups\MicrosoftGraphCheckMemberGroupsRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MicrosoftGraphCheckMemberObjects\MicrosoftGraphCheckMemberObjectsRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MicrosoftGraphGetMemberGroups\MicrosoftGraphGetMemberGroupsRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MicrosoftGraphGetMemberObjects\MicrosoftGraphGetMemberObjectsRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MicrosoftGraphRemoveKey\MicrosoftGraphRemoveKeyRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MicrosoftGraphRemovePassword\MicrosoftGraphRemovePasswordRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\MicrosoftGraphRestore\MicrosoftGraphRestoreRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\Oauth2PermissionGrants\Item\OAuth2PermissionGrantItemRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\Oauth2PermissionGrants\Oauth2PermissionGrantsRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\OwnedObjects\OwnedObjectsRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\Owners\OwnersRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\TokenIssuancePolicies\Item\TokenIssuancePolicyItemRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\TokenIssuancePolicies\TokenIssuancePoliciesRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\TokenLifetimePolicies\Item\TokenLifetimePolicyItemRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\TokenLifetimePolicies\TokenLifetimePoliciesRequestBuilder;
use Microsoft\Graph\Generated\ServicePrincipals\Item\TransitiveMemberOf\TransitiveMemberOfRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

/**
 * Provides operations to manage the collection of servicePrincipal entities.
*/
class ServicePrincipalItemRequestBuilder 
{
    /**
     * Provides operations to manage the appRoleAssignedTo property of the microsoft.graph.servicePrincipal entity.
    */
    public function appRoleAssignedTo(): AppRoleAssignedToRequestBuilder {
        return new AppRoleAssignedToRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the appRoleAssignments property of the microsoft.graph.servicePrincipal entity.
    */
    public function appRoleAssignments(): AppRoleAssignmentsRequestBuilder {
        return new AppRoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the claimsMappingPolicies property of the microsoft.graph.servicePrincipal entity.
    */
    public function claimsMappingPolicies(): ClaimsMappingPoliciesRequestBuilder {
        return new ClaimsMappingPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the createdObjects property of the microsoft.graph.servicePrincipal entity.
    */
    public function createdObjects(): CreatedObjectsRequestBuilder {
        return new CreatedObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the delegatedPermissionClassifications property of the microsoft.graph.servicePrincipal entity.
    */
    public function delegatedPermissionClassifications(): DelegatedPermissionClassificationsRequestBuilder {
        return new DelegatedPermissionClassificationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the endpoints property of the microsoft.graph.servicePrincipal entity.
    */
    public function endpoints(): EndpointsRequestBuilder {
        return new EndpointsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the federatedIdentityCredentials property of the microsoft.graph.servicePrincipal entity.
    */
    public function federatedIdentityCredentials(): FederatedIdentityCredentialsRequestBuilder {
        return new FederatedIdentityCredentialsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the homeRealmDiscoveryPolicies property of the microsoft.graph.servicePrincipal entity.
    */
    public function homeRealmDiscoveryPolicies(): HomeRealmDiscoveryPoliciesRequestBuilder {
        return new HomeRealmDiscoveryPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the memberOf property of the microsoft.graph.servicePrincipal entity.
    */
    public function memberOf(): MemberOfRequestBuilder {
        return new MemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the addKey method.
    */
    public function microsoftGraphAddKey(): MicrosoftGraphAddKeyRequestBuilder {
        return new MicrosoftGraphAddKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the addPassword method.
    */
    public function microsoftGraphAddPassword(): MicrosoftGraphAddPasswordRequestBuilder {
        return new MicrosoftGraphAddPasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the addTokenSigningCertificate method.
    */
    public function microsoftGraphAddTokenSigningCertificate(): MicrosoftGraphAddTokenSigningCertificateRequestBuilder {
        return new MicrosoftGraphAddTokenSigningCertificateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkMemberGroups method.
    */
    public function microsoftGraphCheckMemberGroups(): MicrosoftGraphCheckMemberGroupsRequestBuilder {
        return new MicrosoftGraphCheckMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the checkMemberObjects method.
    */
    public function microsoftGraphCheckMemberObjects(): MicrosoftGraphCheckMemberObjectsRequestBuilder {
        return new MicrosoftGraphCheckMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMemberGroups method.
    */
    public function microsoftGraphGetMemberGroups(): MicrosoftGraphGetMemberGroupsRequestBuilder {
        return new MicrosoftGraphGetMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the getMemberObjects method.
    */
    public function microsoftGraphGetMemberObjects(): MicrosoftGraphGetMemberObjectsRequestBuilder {
        return new MicrosoftGraphGetMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removeKey method.
    */
    public function microsoftGraphRemoveKey(): MicrosoftGraphRemoveKeyRequestBuilder {
        return new MicrosoftGraphRemoveKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the removePassword method.
    */
    public function microsoftGraphRemovePassword(): MicrosoftGraphRemovePasswordRequestBuilder {
        return new MicrosoftGraphRemovePasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to call the restore method.
    */
    public function microsoftGraphRestore(): MicrosoftGraphRestoreRequestBuilder {
        return new MicrosoftGraphRestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the oauth2PermissionGrants property of the microsoft.graph.servicePrincipal entity.
    */
    public function oauth2PermissionGrants(): Oauth2PermissionGrantsRequestBuilder {
        return new Oauth2PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the ownedObjects property of the microsoft.graph.servicePrincipal entity.
    */
    public function ownedObjects(): OwnedObjectsRequestBuilder {
        return new OwnedObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the owners property of the microsoft.graph.servicePrincipal entity.
    */
    public function owners(): OwnersRequestBuilder {
        return new OwnersRequestBuilder($this->pathParameters, $this->requestAdapter);
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
     * Provides operations to manage the tokenIssuancePolicies property of the microsoft.graph.servicePrincipal entity.
    */
    public function tokenIssuancePolicies(): TokenIssuancePoliciesRequestBuilder {
        return new TokenIssuancePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the tokenLifetimePolicies property of the microsoft.graph.servicePrincipal entity.
    */
    public function tokenLifetimePolicies(): TokenLifetimePoliciesRequestBuilder {
        return new TokenLifetimePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * Provides operations to manage the transitiveMemberOf property of the microsoft.graph.servicePrincipal entity.
    */
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder {
        return new TransitiveMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Provides operations to manage the appRoleAssignedTo property of the microsoft.graph.servicePrincipal entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\ServicePrincipals\Item\AppRoleAssignedTo\Item\AppRoleAssignmentItemRequestBuilder
    */
    public function appRoleAssignedToById(string $id): \Microsoft\Graph\Generated\ServicePrincipals\Item\AppRoleAssignedTo\Item\AppRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appRoleAssignment%2Did'] = $id;
        return new \Microsoft\Graph\Generated\ServicePrincipals\Item\AppRoleAssignedTo\Item\AppRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the appRoleAssignments property of the microsoft.graph.servicePrincipal entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\ServicePrincipals\Item\AppRoleAssignments\Item\AppRoleAssignmentItemRequestBuilder
    */
    public function appRoleAssignmentsById(string $id): \Microsoft\Graph\Generated\ServicePrincipals\Item\AppRoleAssignments\Item\AppRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appRoleAssignment%2Did'] = $id;
        return new \Microsoft\Graph\Generated\ServicePrincipals\Item\AppRoleAssignments\Item\AppRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft/Graph/Generated.servicePrincipals.item.claimsMappingPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return ClaimsMappingPolicyItemRequestBuilder
    */
    public function claimsMappingPoliciesById(string $id): ClaimsMappingPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['claimsMappingPolicy%2Did'] = $id;
        return new ClaimsMappingPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Instantiates a new ServicePrincipalItemRequestBuilder and sets the default values.
     * @param array<string, mixed>|string $pathParametersOrRawUrl Path parameters for the request or a String representing the raw URL.
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct($pathParametersOrRawUrl, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        if (is_array($pathParametersOrRawUrl)) {
            $this->pathParameters = $pathParametersOrRawUrl;
        } else {
            $this->pathParameters = ['request-raw-url' => $pathParametersOrRawUrl];
        }
    }

    /**
     * Provides operations to manage the createdObjects property of the microsoft.graph.servicePrincipal entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\ServicePrincipals\Item\CreatedObjects\Item\DirectoryObjectItemRequestBuilder
    */
    public function createdObjectsById(string $id): \Microsoft\Graph\Generated\ServicePrincipals\Item\CreatedObjects\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Generated\ServicePrincipals\Item\CreatedObjects\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the delegatedPermissionClassifications property of the microsoft.graph.servicePrincipal entity.
     * @param string $id Unique identifier of the item
     * @return DelegatedPermissionClassificationItemRequestBuilder
    */
    public function delegatedPermissionClassificationsById(string $id): DelegatedPermissionClassificationItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['delegatedPermissionClassification%2Did'] = $id;
        return new DelegatedPermissionClassificationItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Delete a servicePrincipal object.
     * @param ServicePrincipalItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/serviceprincipal-delete?view=graph-rest-1.0 Find more info here
    */
    public function delete(?ServicePrincipalItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): Promise {
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
     * Provides operations to manage the endpoints property of the microsoft.graph.servicePrincipal entity.
     * @param string $id Unique identifier of the item
     * @return EndpointItemRequestBuilder
    */
    public function endpointsById(string $id): EndpointItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['endpoint%2Did'] = $id;
        return new EndpointItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the federatedIdentityCredentials property of the microsoft.graph.servicePrincipal entity.
     * @param string $id Unique identifier of the item
     * @return FederatedIdentityCredentialItemRequestBuilder
    */
    public function federatedIdentityCredentialsById(string $id): FederatedIdentityCredentialItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['federatedIdentityCredential%2Did'] = $id;
        return new FederatedIdentityCredentialItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Retrieve the properties and relationships of a servicePrincipal object.
     * @param ServicePrincipalItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
     * @link https://docs.microsoft.com/graph/api/serviceprincipal-get?view=graph-rest-1.0 Find more info here
    */
    public function get(?ServicePrincipalItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ServicePrincipal::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft/Graph/Generated.servicePrincipals.item.homeRealmDiscoveryPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return HomeRealmDiscoveryPolicyItemRequestBuilder
    */
    public function homeRealmDiscoveryPoliciesById(string $id): HomeRealmDiscoveryPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['homeRealmDiscoveryPolicy%2Did'] = $id;
        return new HomeRealmDiscoveryPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the memberOf property of the microsoft.graph.servicePrincipal entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\ServicePrincipals\Item\MemberOf\Item\DirectoryObjectItemRequestBuilder
    */
    public function memberOfById(string $id): \Microsoft\Graph\Generated\ServicePrincipals\Item\MemberOf\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Generated\ServicePrincipals\Item\MemberOf\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the oauth2PermissionGrants property of the microsoft.graph.servicePrincipal entity.
     * @param string $id Unique identifier of the item
     * @return OAuth2PermissionGrantItemRequestBuilder
    */
    public function oauth2PermissionGrantsById(string $id): OAuth2PermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['oAuth2PermissionGrant%2Did'] = $id;
        return new OAuth2PermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the ownedObjects property of the microsoft.graph.servicePrincipal entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\ServicePrincipals\Item\OwnedObjects\Item\DirectoryObjectItemRequestBuilder
    */
    public function ownedObjectsById(string $id): \Microsoft\Graph\Generated\ServicePrincipals\Item\OwnedObjects\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Generated\ServicePrincipals\Item\OwnedObjects\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft/Graph/Generated.servicePrincipals.item.owners.item collection
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\ServicePrincipals\Item\Owners\Item\DirectoryObjectItemRequestBuilder
    */
    public function ownersById(string $id): \Microsoft\Graph\Generated\ServicePrincipals\Item\Owners\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Generated\ServicePrincipals\Item\Owners\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update entity in servicePrincipals
     * @param ServicePrincipal $body The request body
     * @param ServicePrincipalItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return Promise
    */
    public function patch(ServicePrincipal $body, ?ServicePrincipalItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): Promise {
        $requestInfo = $this->toPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
                    '4XX' => [ODataError::class, 'createFromDiscriminatorValue'],
                    '5XX' => [ODataError::class, 'createFromDiscriminatorValue'],
            ];
            return $this->requestAdapter->sendAsync($requestInfo, [ServicePrincipal::class, 'createFromDiscriminatorValue'], $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Delete a servicePrincipal object.
     * @param ServicePrincipalItemRequestBuilderDeleteRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toDeleteRequestInformation(?ServicePrincipalItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Retrieve the properties and relationships of a servicePrincipal object.
     * @param ServicePrincipalItemRequestBuilderGetRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toGetRequestInformation(?ServicePrincipalItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
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
     * Provides operations to manage the tokenIssuancePolicies property of the microsoft.graph.servicePrincipal entity.
     * @param string $id Unique identifier of the item
     * @return TokenIssuancePolicyItemRequestBuilder
    */
    public function tokenIssuancePoliciesById(string $id): TokenIssuancePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tokenIssuancePolicy%2Did'] = $id;
        return new TokenIssuancePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Provides operations to manage the tokenLifetimePolicies property of the microsoft.graph.servicePrincipal entity.
     * @param string $id Unique identifier of the item
     * @return TokenLifetimePolicyItemRequestBuilder
    */
    public function tokenLifetimePoliciesById(string $id): TokenLifetimePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tokenLifetimePolicy%2Did'] = $id;
        return new TokenLifetimePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update entity in servicePrincipals
     * @param ServicePrincipal $body The request body
     * @param ServicePrincipalItemRequestBuilderPatchRequestConfiguration|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function toPatchRequestInformation(ServicePrincipal $body, ?ServicePrincipalItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
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

    /**
     * Provides operations to manage the transitiveMemberOf property of the microsoft.graph.servicePrincipal entity.
     * @param string $id Unique identifier of the item
     * @return \Microsoft\Graph\Generated\ServicePrincipals\Item\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder
    */
    public function transitiveMemberOfById(string $id): \Microsoft\Graph\Generated\ServicePrincipals\Item\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new \Microsoft\Graph\Generated\ServicePrincipals\Item\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
