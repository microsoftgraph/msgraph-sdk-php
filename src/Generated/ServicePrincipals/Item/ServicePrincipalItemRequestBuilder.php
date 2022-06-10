<?php

namespace Microsoft\Graph\ServicePrincipals\Item;

use Exception;
use Http\Promise\Promise;
use Http\Promise\RejectedPromise;
use Microsoft\Graph\Models\ODataErrors\ODataError;
use Microsoft\Graph\Models\ServicePrincipal;
use Microsoft\Graph\ServicePrincipals\Item\AddKey\AddKeyRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\AddPassword\AddPasswordRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\AddTokenSigningCertificate\AddTokenSigningCertificateRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\AppRoleAssignedTo\AppRoleAssignedToRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\AppRoleAssignedTo\Item\AppRoleAssignmentItemRequestBuilder as MicrosoftGraphServicePrincipalsItemAppRoleAssignedToItemAppRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\AppRoleAssignments\AppRoleAssignmentsRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\AppRoleAssignments\Item\AppRoleAssignmentItemRequestBuilder as MicrosoftGraphServicePrincipalsItemAppRoleAssignmentsItemAppRoleAssignmentItemRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\CheckMemberGroups\CheckMemberGroupsRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\CheckMemberObjects\CheckMemberObjectsRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\ClaimsMappingPolicies\ClaimsMappingPoliciesRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\ClaimsMappingPolicies\Item\ClaimsMappingPolicyItemRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\CreatedObjects\CreatedObjectsRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\CreatedObjects\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphServicePrincipalsItemCreatedObjectsItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\DelegatedPermissionClassifications\DelegatedPermissionClassificationsRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\DelegatedPermissionClassifications\Item\DelegatedPermissionClassificationItemRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\Endpoints\EndpointsRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\Endpoints\Item\EndpointItemRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\GetMemberGroups\GetMemberGroupsRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\GetMemberObjects\GetMemberObjectsRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\HomeRealmDiscoveryPolicies\HomeRealmDiscoveryPoliciesRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\HomeRealmDiscoveryPolicies\Item\HomeRealmDiscoveryPolicyItemRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\MemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphServicePrincipalsItemMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\MemberOf\MemberOfRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\Oauth2PermissionGrants\Item\OAuth2PermissionGrantItemRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\Oauth2PermissionGrants\Oauth2PermissionGrantsRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\OwnedObjects\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphServicePrincipalsItemOwnedObjectsItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\OwnedObjects\OwnedObjectsRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\Owners\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphServicePrincipalsItemOwnersItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\Owners\OwnersRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\RemoveKey\RemoveKeyRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\RemovePassword\RemovePasswordRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\Restore\RestoreRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\TokenIssuancePolicies\Item\TokenIssuancePolicyItemRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\TokenIssuancePolicies\TokenIssuancePoliciesRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\TokenLifetimePolicies\Item\TokenLifetimePolicyItemRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\TokenLifetimePolicies\TokenLifetimePoliciesRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\TransitiveMemberOf\Item\DirectoryObjectItemRequestBuilder as MicrosoftGraphServicePrincipalsItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder;
use Microsoft\Graph\ServicePrincipals\Item\TransitiveMemberOf\TransitiveMemberOfRequestBuilder;
use Microsoft\Kiota\Abstractions\HttpMethod;
use Microsoft\Kiota\Abstractions\RequestAdapter;
use Microsoft\Kiota\Abstractions\RequestInformation;
use Microsoft\Kiota\Abstractions\RequestOption;
use Microsoft\Kiota\Abstractions\ResponseHandler;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParsableFactory;

class ServicePrincipalItemRequestBuilder 
{
    /**
     * The addKey property
    */
    public function addKey(): AddKeyRequestBuilder {
        return new AddKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The addPassword property
    */
    public function addPassword(): AddPasswordRequestBuilder {
        return new AddPasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The addTokenSigningCertificate property
    */
    public function addTokenSigningCertificate(): AddTokenSigningCertificateRequestBuilder {
        return new AddTokenSigningCertificateRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The appRoleAssignedTo property
    */
    public function appRoleAssignedTo(): AppRoleAssignedToRequestBuilder {
        return new AppRoleAssignedToRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The appRoleAssignments property
    */
    public function appRoleAssignments(): AppRoleAssignmentsRequestBuilder {
        return new AppRoleAssignmentsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The checkMemberGroups property
    */
    public function checkMemberGroups(): CheckMemberGroupsRequestBuilder {
        return new CheckMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The checkMemberObjects property
    */
    public function checkMemberObjects(): CheckMemberObjectsRequestBuilder {
        return new CheckMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The claimsMappingPolicies property
    */
    public function claimsMappingPolicies(): ClaimsMappingPoliciesRequestBuilder {
        return new ClaimsMappingPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The createdObjects property
    */
    public function createdObjects(): CreatedObjectsRequestBuilder {
        return new CreatedObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The delegatedPermissionClassifications property
    */
    public function delegatedPermissionClassifications(): DelegatedPermissionClassificationsRequestBuilder {
        return new DelegatedPermissionClassificationsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The endpoints property
    */
    public function endpoints(): EndpointsRequestBuilder {
        return new EndpointsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getMemberGroups property
    */
    public function getMemberGroups(): GetMemberGroupsRequestBuilder {
        return new GetMemberGroupsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The getMemberObjects property
    */
    public function getMemberObjects(): GetMemberObjectsRequestBuilder {
        return new GetMemberObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The homeRealmDiscoveryPolicies property
    */
    public function homeRealmDiscoveryPolicies(): HomeRealmDiscoveryPoliciesRequestBuilder {
        return new HomeRealmDiscoveryPoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The memberOf property
    */
    public function memberOf(): MemberOfRequestBuilder {
        return new MemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The oauth2PermissionGrants property
    */
    public function oauth2PermissionGrants(): Oauth2PermissionGrantsRequestBuilder {
        return new Oauth2PermissionGrantsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The ownedObjects property
    */
    public function ownedObjects(): OwnedObjectsRequestBuilder {
        return new OwnedObjectsRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The owners property
    */
    public function owners(): OwnersRequestBuilder {
        return new OwnersRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var array<string, mixed> $pathParameters Path parameters for the request
    */
    private array $pathParameters;
    
    /**
     * The removeKey property
    */
    public function removeKey(): RemoveKeyRequestBuilder {
        return new RemoveKeyRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The removePassword property
    */
    public function removePassword(): RemovePasswordRequestBuilder {
        return new RemovePasswordRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    private RequestAdapter $requestAdapter;
    
    /**
     * The restore property
    */
    public function restore(): RestoreRequestBuilder {
        return new RestoreRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tokenIssuancePolicies property
    */
    public function tokenIssuancePolicies(): TokenIssuancePoliciesRequestBuilder {
        return new TokenIssuancePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The tokenLifetimePolicies property
    */
    public function tokenLifetimePolicies(): TokenLifetimePoliciesRequestBuilder {
        return new TokenLifetimePoliciesRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * The transitiveMemberOf property
    */
    public function transitiveMemberOf(): TransitiveMemberOfRequestBuilder {
        return new TransitiveMemberOfRequestBuilder($this->pathParameters, $this->requestAdapter);
    }
    
    /**
     * @var string $urlTemplate Url template to use to build the URL for the current request builder
    */
    private string $urlTemplate;
    
    /**
     * Gets an item from the Microsoft\Graph.servicePrincipals.item.appRoleAssignedTo.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphServicePrincipalsItemAppRoleAssignedToItemAppRoleAssignmentItemRequestBuilder
    */
    public function appRoleAssignedToById(string $id): MicrosoftGraphServicePrincipalsItemAppRoleAssignedToItemAppRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appRoleAssignment%2Did'] = $id;
        return new MicrosoftGraphServicePrincipalsItemAppRoleAssignedToItemAppRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.servicePrincipals.item.appRoleAssignments.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphServicePrincipalsItemAppRoleAssignmentsItemAppRoleAssignmentItemRequestBuilder
    */
    public function appRoleAssignmentsById(string $id): MicrosoftGraphServicePrincipalsItemAppRoleAssignmentsItemAppRoleAssignmentItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['appRoleAssignment%2Did'] = $id;
        return new MicrosoftGraphServicePrincipalsItemAppRoleAssignmentsItemAppRoleAssignmentItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.servicePrincipals.item.claimsMappingPolicies.item collection
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
     * @param array<string, mixed> $pathParameters Path parameters for the request
     * @param RequestAdapter $requestAdapter The request adapter to use to execute the requests.
    */
    public function __construct(array $pathParameters, RequestAdapter $requestAdapter) {
        $this->urlTemplate = '{+baseurl}/servicePrincipals/{servicePrincipal%2Did}{?%24select,%24expand}';
        $this->requestAdapter = $requestAdapter;
        $this->pathParameters = $pathParameters;
    }

    /**
     * Delete a servicePrincipal object.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createDeleteRequestInformation(?ServicePrincipalItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::DELETE;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        return $requestInfo;
    }

    /**
     * Gets an item from the Microsoft\Graph.servicePrincipals.item.createdObjects.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphServicePrincipalsItemCreatedObjectsItemDirectoryObjectItemRequestBuilder
    */
    public function createdObjectsById(string $id): MicrosoftGraphServicePrincipalsItemCreatedObjectsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphServicePrincipalsItemCreatedObjectsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Retrieve the properties and relationships of a servicePrincipal object.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createGetRequestInformation(?ServicePrincipalItemRequestBuilderGetRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::GET;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
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
     * Update the properties of servicePrincipal object.
     * @param ServicePrincipal $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @return RequestInformation
    */
    public function createPatchRequestInformation(ServicePrincipal $body, ?ServicePrincipalItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null): RequestInformation {
        $requestInfo = new RequestInformation();
        $requestInfo->urlTemplate = $this->urlTemplate;
        $requestInfo->pathParameters = $this->pathParameters;
        $requestInfo->httpMethod = HttpMethod::PATCH;
        if ($requestConfiguration !== null) {
            if ($requestConfiguration->headers !== null) {
                $requestInfo->headers = array_merge($requestInfo->headers, $requestConfiguration->headers);
            }
            if ($requestConfiguration->options !== null) {
                $requestInfo->addRequestOptions(...$requestConfiguration->options);
            }
        }
        $requestInfo->setContentFromParsable($this->requestAdapter, "application/json", $body);
        return $requestInfo;
    }

    /**
     * Gets an item from the Microsoft\Graph.servicePrincipals.item.delegatedPermissionClassifications.item collection
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
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function delete(?ServicePrincipalItemRequestBuilderDeleteRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createDeleteRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph.servicePrincipals.item.endpoints.item collection
     * @param string $id Unique identifier of the item
     * @return EndpointItemRequestBuilder
    */
    public function endpointsById(string $id): EndpointItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['endpoint%2Did'] = $id;
        return new EndpointItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Retrieve the properties and relationships of a servicePrincipal object.
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function get(?ServicePrincipalItemRequestBuilderGetRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createGetRequestInformation($requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendAsync($requestInfo, array(ServicePrincipal::class, 'createFromDiscriminatorValue'), $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph.servicePrincipals.item.homeRealmDiscoveryPolicies.item collection
     * @param string $id Unique identifier of the item
     * @return HomeRealmDiscoveryPolicyItemRequestBuilder
    */
    public function homeRealmDiscoveryPoliciesById(string $id): HomeRealmDiscoveryPolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['homeRealmDiscoveryPolicy%2Did'] = $id;
        return new HomeRealmDiscoveryPolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.servicePrincipals.item.memberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphServicePrincipalsItemMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function memberOfById(string $id): MicrosoftGraphServicePrincipalsItemMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphServicePrincipalsItemMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.servicePrincipals.item.oauth2PermissionGrants.item collection
     * @param string $id Unique identifier of the item
     * @return OAuth2PermissionGrantItemRequestBuilder
    */
    public function oauth2PermissionGrantsById(string $id): OAuth2PermissionGrantItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['oAuth2PermissionGrant%2Did'] = $id;
        return new OAuth2PermissionGrantItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.servicePrincipals.item.ownedObjects.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphServicePrincipalsItemOwnedObjectsItemDirectoryObjectItemRequestBuilder
    */
    public function ownedObjectsById(string $id): MicrosoftGraphServicePrincipalsItemOwnedObjectsItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphServicePrincipalsItemOwnedObjectsItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.servicePrincipals.item.owners.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphServicePrincipalsItemOwnersItemDirectoryObjectItemRequestBuilder
    */
    public function ownersById(string $id): MicrosoftGraphServicePrincipalsItemOwnersItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphServicePrincipalsItemOwnersItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Update the properties of servicePrincipal object.
     * @param ServicePrincipal $body 
     * @param array<string, mixed>|null $requestConfiguration Configuration for the request such as headers, query parameters, and middleware options.
     * @param ResponseHandler|null $responseHandler Response handler to use in place of the default response handling provided by the core service
     * @return Promise
    */
    public function patch(ServicePrincipal $body, ?ServicePrincipalItemRequestBuilderPatchRequestConfiguration $requestConfiguration = null, ?ResponseHandler $responseHandler = null): Promise {
        $requestInfo = $this->createPatchRequestInformation($body, $requestConfiguration);
        try {
            $errorMappings = [
            '4XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            '5XX' => array(ODataError::class, 'createFromDiscriminatorValue'),
            ];
            return $this->requestAdapter->sendNoContentAsync($requestInfo, $responseHandler, $errorMappings);
        } catch(Exception $ex) {
            return new RejectedPromise($ex);
        }
    }

    /**
     * Gets an item from the Microsoft\Graph.servicePrincipals.item.tokenIssuancePolicies.item collection
     * @param string $id Unique identifier of the item
     * @return TokenIssuancePolicyItemRequestBuilder
    */
    public function tokenIssuancePoliciesById(string $id): TokenIssuancePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tokenIssuancePolicy%2Did'] = $id;
        return new TokenIssuancePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.servicePrincipals.item.tokenLifetimePolicies.item collection
     * @param string $id Unique identifier of the item
     * @return TokenLifetimePolicyItemRequestBuilder
    */
    public function tokenLifetimePoliciesById(string $id): TokenLifetimePolicyItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['tokenLifetimePolicy%2Did'] = $id;
        return new TokenLifetimePolicyItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

    /**
     * Gets an item from the Microsoft\Graph.servicePrincipals.item.transitiveMemberOf.item collection
     * @param string $id Unique identifier of the item
     * @return MicrosoftGraphServicePrincipalsItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder
    */
    public function transitiveMemberOfById(string $id): MicrosoftGraphServicePrincipalsItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder {
        $urlTplParams = $this->pathParameters;
        $urlTplParams['directoryObject%2Did'] = $id;
        return new MicrosoftGraphServicePrincipalsItemTransitiveMemberOfItemDirectoryObjectItemRequestBuilder($urlTplParams, $this->requestAdapter);
    }

}
