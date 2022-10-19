<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ServicePrincipal extends DirectoryObject implements Parsable 
{
    /**
     * @var bool|null $accountEnabled true if the service principal account is enabled; otherwise, false. Supports $filter (eq, ne, not, in).
    */
    private ?bool $accountEnabled = null;
    
    /**
     * @var array<AddIn>|null $addIns Defines custom behavior that a consuming service can use to call an app in specific contexts. For example, applications that can render file streams may set the addIns property for its 'FileHandler' functionality. This will let services like Microsoft 365 call the application in the context of a document the user is working on.
    */
    private ?array $addIns = null;
    
    /**
     * @var array<string>|null $alternativeNames Used to retrieve service principals by subscription, identify resource group and full resource ids for managed identities. Supports $filter (eq, not, ge, le, startsWith).
    */
    private ?array $alternativeNames = null;
    
    /**
     * @var string|null $appDescription The description exposed by the associated application.
    */
    private ?string $appDescription = null;
    
    /**
     * @var string|null $appDisplayName The display name exposed by the associated application.
    */
    private ?string $appDisplayName = null;
    
    /**
     * @var string|null $appId The unique identifier for the associated application (its appId property). Supports $filter (eq, ne, not, in, startsWith).
    */
    private ?string $appId = null;
    
    /**
     * @var string|null $applicationTemplateId Unique identifier of the applicationTemplate that the servicePrincipal was created from. Read-only. Supports $filter (eq, ne, NOT, startsWith).
    */
    private ?string $applicationTemplateId = null;
    
    /**
     * @var string|null $appOwnerOrganizationId Contains the tenant id where the application is registered. This is applicable only to service principals backed by applications. Supports $filter (eq, ne, NOT, ge, le).
    */
    private ?string $appOwnerOrganizationId = null;
    
    /**
     * @var array<AppRoleAssignment>|null $appRoleAssignedTo App role assignments for this app or service, granted to users, groups, and other service principals. Supports $expand.
    */
    private ?array $appRoleAssignedTo = null;
    
    /**
     * @var bool|null $appRoleAssignmentRequired Specifies whether users or other service principals need to be granted an app role assignment for this service principal before users can sign in or apps can get tokens. The default value is false. Not nullable. Supports $filter (eq, ne, NOT).
    */
    private ?bool $appRoleAssignmentRequired = null;
    
    /**
     * @var array<AppRoleAssignment>|null $appRoleAssignments App role assignment for another app or service, granted to this service principal. Supports $expand.
    */
    private ?array $appRoleAssignments = null;
    
    /**
     * @var array<AppRole>|null $appRoles The roles exposed by the application which this service principal represents. For more information see the appRoles property definition on the application entity. Not nullable.
    */
    private ?array $appRoles = null;
    
    /**
     * @var array<ClaimsMappingPolicy>|null $claimsMappingPolicies The claimsMappingPolicies assigned to this service principal. Supports $expand.
    */
    private ?array $claimsMappingPolicies = null;
    
    /**
     * @var array<DirectoryObject>|null $createdObjects Directory objects created by this service principal. Read-only. Nullable.
    */
    private ?array $createdObjects = null;
    
    /**
     * @var array<DelegatedPermissionClassification>|null $delegatedPermissionClassifications The delegatedPermissionClassifications property
    */
    private ?array $delegatedPermissionClassifications = null;
    
    /**
     * @var string|null $description Free text field to provide an internal end-user facing description of the service principal. End-user portals such MyApps will display the application description in this field. The maximum allowed size is 1024 characters. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $disabledByMicrosoftStatus Specifies whether Microsoft has disabled the registered application. Possible values are: null (default value), NotDisabled, and DisabledDueToViolationOfServicesAgreement (reasons may include suspicious, abusive, or malicious activity, or a violation of the Microsoft Services Agreement).  Supports $filter (eq, ne, not).
    */
    private ?string $disabledByMicrosoftStatus = null;
    
    /**
     * @var string|null $displayName The display name for the service principal. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<Endpoint>|null $endpoints The endpoints property
    */
    private ?array $endpoints = null;
    
    /**
     * @var array<FederatedIdentityCredential>|null $federatedIdentityCredentials Federated identities for a specific type of service principal - managed identity. Supports $expand and $filter (eq when counting empty collections).
    */
    private ?array $federatedIdentityCredentials = null;
    
    /**
     * @var string|null $homepage Home page or landing page of the application.
    */
    private ?string $homepage = null;
    
    /**
     * @var array<HomeRealmDiscoveryPolicy>|null $homeRealmDiscoveryPolicies The homeRealmDiscoveryPolicies assigned to this service principal. Supports $expand.
    */
    private ?array $homeRealmDiscoveryPolicies = null;
    
    /**
     * @var InformationalUrl|null $info Basic profile information of the acquired application such as app's marketing, support, terms of service and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more info, see How to: Add Terms of service and privacy statement for registered Azure AD apps. Supports $filter (eq, ne, not, ge, le, and eq on null values).
    */
    private ?InformationalUrl $info = null;
    
    /**
     * @var array<KeyCredential>|null $keyCredentials The collection of key credentials associated with the service principal. Not nullable. Supports $filter (eq, not, ge, le).
    */
    private ?array $keyCredentials = null;
    
    /**
     * @var string|null $loginUrl Specifies the URL where the service provider redirects the user to Azure AD to authenticate. Azure AD uses the URL to launch the application from Microsoft 365 or the Azure AD My Apps. When blank, Azure AD performs IdP-initiated sign-on for applications configured with SAML-based single sign-on. The user launches the application from Microsoft 365, the Azure AD My Apps, or the Azure AD SSO URL.
    */
    private ?string $loginUrl = null;
    
    /**
     * @var string|null $logoutUrl Specifies the URL that will be used by Microsoft's authorization service to logout an user using OpenId Connect front-channel, back-channel or SAML logout protocols.
    */
    private ?string $logoutUrl = null;
    
    /**
     * @var array<DirectoryObject>|null $memberOf Roles that this service principal is a member of. HTTP Methods: GET Read-only. Nullable. Supports $expand.
    */
    private ?array $memberOf = null;
    
    /**
     * @var string|null $notes Free text field to capture information about the service principal, typically used for operational purposes. Maximum allowed size is 1024 characters.
    */
    private ?string $notes = null;
    
    /**
     * @var array<string>|null $notificationEmailAddresses Specifies the list of email addresses where Azure AD sends a notification when the active certificate is near the expiration date. This is only for the certificates used to sign the SAML token issued for Azure AD Gallery applications.
    */
    private ?array $notificationEmailAddresses = null;
    
    /**
     * @var array<OAuth2PermissionGrant>|null $oauth2PermissionGrants Delegated permission grants authorizing this service principal to access an API on behalf of a signed-in user. Read-only. Nullable.
    */
    private ?array $oauth2PermissionGrants = null;
    
    /**
     * @var array<PermissionScope>|null $oauth2PermissionScopes The delegated permissions exposed by the application. For more information see the oauth2PermissionScopes property on the application entity's api property. Not nullable.
    */
    private ?array $oauth2PermissionScopes = null;
    
    /**
     * @var array<DirectoryObject>|null $ownedObjects Directory objects that are owned by this service principal. Read-only. Nullable. Supports $expand.
    */
    private ?array $ownedObjects = null;
    
    /**
     * @var array<DirectoryObject>|null $owners Directory objects that are owners of this servicePrincipal. The owners are a set of non-admin users or servicePrincipals who are allowed to modify this object. Read-only. Nullable. Supports $expand.
    */
    private ?array $owners = null;
    
    /**
     * @var array<PasswordCredential>|null $passwordCredentials The collection of password credentials associated with the application. Not nullable.
    */
    private ?array $passwordCredentials = null;
    
    /**
     * @var string|null $preferredSingleSignOnMode Specifies the single sign-on mode configured for this application. Azure AD uses the preferred single sign-on mode to launch the application from Microsoft 365 or the Azure AD My Apps. The supported values are password, saml, notSupported, and oidc.
    */
    private ?string $preferredSingleSignOnMode = null;
    
    /**
     * @var string|null $preferredTokenSigningKeyThumbprint Reserved for internal use only. Do not write or otherwise rely on this property. May be removed in future versions.
    */
    private ?string $preferredTokenSigningKeyThumbprint = null;
    
    /**
     * @var array<string>|null $replyUrls The URLs that user tokens are sent to for sign in with the associated application, or the redirect URIs that OAuth 2.0 authorization codes and access tokens are sent to for the associated application. Not nullable.
    */
    private ?array $replyUrls = null;
    
    /**
     * @var array<ResourceSpecificPermission>|null $resourceSpecificApplicationPermissions The resource-specific application permissions exposed by this application. Currently, resource-specific permissions are only supported for Teams apps accessing to specific chats and teams using Microsoft Graph. Read-only.
    */
    private ?array $resourceSpecificApplicationPermissions = null;
    
    /**
     * @var SamlSingleSignOnSettings|null $samlSingleSignOnSettings The collection for settings related to saml single sign-on.
    */
    private ?SamlSingleSignOnSettings $samlSingleSignOnSettings = null;
    
    /**
     * @var array<string>|null $servicePrincipalNames Contains the list of identifiersUris, copied over from the associated application. Additional values can be added to hybrid applications. These values can be used to identify the permissions exposed by this app within Azure AD. For example,Client apps can specify a resource URI which is based on the values of this property to acquire an access token, which is the URI returned in the 'aud' claim.The any operator is required for filter expressions on multi-valued properties. Not nullable.  Supports $filter (eq, not, ge, le, startsWith).
    */
    private ?array $servicePrincipalNames = null;
    
    /**
     * @var string|null $servicePrincipalType Identifies whether the service principal represents an application, a managed identity, or a legacy application. This is set by Azure AD internally. The servicePrincipalType property can be set to three different values: __Application - A service principal that represents an application or service. The appId property identifies the associated app registration, and matches the appId of an application, possibly from a different tenant. If the associated app registration is missing, tokens are not issued for the service principal.__ManagedIdentity - A service principal that represents a managed identity. Service principals representing managed identities can be granted access and permissions, but cannot be updated or modified directly.__Legacy - A service principal that represents an app created before app registrations, or through legacy experiences. Legacy service principal can have credentials, service principal names, reply URLs, and other properties which are editable by an authorized user, but does not have an associated app registration. The appId value does not associate the service principal with an app registration. The service principal can only be used in the tenant where it was created.__SocialIdp - For internal use.
    */
    private ?string $servicePrincipalType = null;
    
    /**
     * @var string|null $signInAudience Specifies the Microsoft accounts that are supported for the current application. Read-only. Supported values are:AzureADMyOrg: Users with a Microsoft work or school account in my organization’s Azure AD tenant (single-tenant).AzureADMultipleOrgs: Users with a Microsoft work or school account in any organization’s Azure AD tenant (multi-tenant).AzureADandPersonalMicrosoftAccount: Users with a personal Microsoft account, or a work or school account in any organization’s Azure AD tenant.PersonalMicrosoftAccount: Users with a personal Microsoft account only.
    */
    private ?string $signInAudience = null;
    
    /**
     * @var array<string>|null $tags Custom strings that can be used to categorize and identify the service principal. Not nullable. Supports $filter (eq, not, ge, le, startsWith).
    */
    private ?array $tags = null;
    
    /**
     * @var string|null $tokenEncryptionKeyId Specifies the keyId of a public key from the keyCredentials collection. When configured, Azure AD issues tokens for this application encrypted using the key specified by this property. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user.
    */
    private ?string $tokenEncryptionKeyId = null;
    
    /**
     * @var array<TokenIssuancePolicy>|null $tokenIssuancePolicies The tokenIssuancePolicies assigned to this service principal.
    */
    private ?array $tokenIssuancePolicies = null;
    
    /**
     * @var array<TokenLifetimePolicy>|null $tokenLifetimePolicies The tokenLifetimePolicies assigned to this service principal.
    */
    private ?array $tokenLifetimePolicies = null;
    
    /**
     * @var array<DirectoryObject>|null $transitiveMemberOf The transitiveMemberOf property
    */
    private ?array $transitiveMemberOf = null;
    
    /**
     * @var VerifiedPublisher|null $verifiedPublisher Specifies the verified publisher of the application which this service principal represents.
    */
    private ?VerifiedPublisher $verifiedPublisher = null;
    
    /**
     * Instantiates a new ServicePrincipal and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.servicePrincipal');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ServicePrincipal
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ServicePrincipal {
        return new ServicePrincipal();
    }

    /**
     * Gets the accountEnabled property value. true if the service principal account is enabled; otherwise, false. Supports $filter (eq, ne, not, in).
     * @return bool|null
    */
    public function getAccountEnabled(): ?bool {
        return $this->accountEnabled;
    }

    /**
     * Gets the addIns property value. Defines custom behavior that a consuming service can use to call an app in specific contexts. For example, applications that can render file streams may set the addIns property for its 'FileHandler' functionality. This will let services like Microsoft 365 call the application in the context of a document the user is working on.
     * @return array<AddIn>|null
    */
    public function getAddIns(): ?array {
        return $this->addIns;
    }

    /**
     * Gets the alternativeNames property value. Used to retrieve service principals by subscription, identify resource group and full resource ids for managed identities. Supports $filter (eq, not, ge, le, startsWith).
     * @return array<string>|null
    */
    public function getAlternativeNames(): ?array {
        return $this->alternativeNames;
    }

    /**
     * Gets the appDescription property value. The description exposed by the associated application.
     * @return string|null
    */
    public function getAppDescription(): ?string {
        return $this->appDescription;
    }

    /**
     * Gets the appDisplayName property value. The display name exposed by the associated application.
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        return $this->appDisplayName;
    }

    /**
     * Gets the appId property value. The unique identifier for the associated application (its appId property). Supports $filter (eq, ne, not, in, startsWith).
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->appId;
    }

    /**
     * Gets the applicationTemplateId property value. Unique identifier of the applicationTemplate that the servicePrincipal was created from. Read-only. Supports $filter (eq, ne, NOT, startsWith).
     * @return string|null
    */
    public function getApplicationTemplateId(): ?string {
        return $this->applicationTemplateId;
    }

    /**
     * Gets the appOwnerOrganizationId property value. Contains the tenant id where the application is registered. This is applicable only to service principals backed by applications. Supports $filter (eq, ne, NOT, ge, le).
     * @return string|null
    */
    public function getAppOwnerOrganizationId(): ?string {
        return $this->appOwnerOrganizationId;
    }

    /**
     * Gets the appRoleAssignedTo property value. App role assignments for this app or service, granted to users, groups, and other service principals. Supports $expand.
     * @return array<AppRoleAssignment>|null
    */
    public function getAppRoleAssignedTo(): ?array {
        return $this->appRoleAssignedTo;
    }

    /**
     * Gets the appRoleAssignmentRequired property value. Specifies whether users or other service principals need to be granted an app role assignment for this service principal before users can sign in or apps can get tokens. The default value is false. Not nullable. Supports $filter (eq, ne, NOT).
     * @return bool|null
    */
    public function getAppRoleAssignmentRequired(): ?bool {
        return $this->appRoleAssignmentRequired;
    }

    /**
     * Gets the appRoleAssignments property value. App role assignment for another app or service, granted to this service principal. Supports $expand.
     * @return array<AppRoleAssignment>|null
    */
    public function getAppRoleAssignments(): ?array {
        return $this->appRoleAssignments;
    }

    /**
     * Gets the appRoles property value. The roles exposed by the application which this service principal represents. For more information see the appRoles property definition on the application entity. Not nullable.
     * @return array<AppRole>|null
    */
    public function getAppRoles(): ?array {
        return $this->appRoles;
    }

    /**
     * Gets the claimsMappingPolicies property value. The claimsMappingPolicies assigned to this service principal. Supports $expand.
     * @return array<ClaimsMappingPolicy>|null
    */
    public function getClaimsMappingPolicies(): ?array {
        return $this->claimsMappingPolicies;
    }

    /**
     * Gets the createdObjects property value. Directory objects created by this service principal. Read-only. Nullable.
     * @return array<DirectoryObject>|null
    */
    public function getCreatedObjects(): ?array {
        return $this->createdObjects;
    }

    /**
     * Gets the delegatedPermissionClassifications property value. The delegatedPermissionClassifications property
     * @return array<DelegatedPermissionClassification>|null
    */
    public function getDelegatedPermissionClassifications(): ?array {
        return $this->delegatedPermissionClassifications;
    }

    /**
     * Gets the description property value. Free text field to provide an internal end-user facing description of the service principal. End-user portals such MyApps will display the application description in this field. The maximum allowed size is 1024 characters. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the disabledByMicrosoftStatus property value. Specifies whether Microsoft has disabled the registered application. Possible values are: null (default value), NotDisabled, and DisabledDueToViolationOfServicesAgreement (reasons may include suspicious, abusive, or malicious activity, or a violation of the Microsoft Services Agreement).  Supports $filter (eq, ne, not).
     * @return string|null
    */
    public function getDisabledByMicrosoftStatus(): ?string {
        return $this->disabledByMicrosoftStatus;
    }

    /**
     * Gets the displayName property value. The display name for the service principal. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the endpoints property value. The endpoints property
     * @return array<Endpoint>|null
    */
    public function getEndpoints(): ?array {
        return $this->endpoints;
    }

    /**
     * Gets the federatedIdentityCredentials property value. Federated identities for a specific type of service principal - managed identity. Supports $expand and $filter (eq when counting empty collections).
     * @return array<FederatedIdentityCredential>|null
    */
    public function getFederatedIdentityCredentials(): ?array {
        return $this->federatedIdentityCredentials;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accountEnabled' => fn(ParseNode $n) => $o->setAccountEnabled($n->getBooleanValue()),
            'addIns' => fn(ParseNode $n) => $o->setAddIns($n->getCollectionOfObjectValues([AddIn::class, 'createFromDiscriminatorValue'])),
            'alternativeNames' => fn(ParseNode $n) => $o->setAlternativeNames($n->getCollectionOfPrimitiveValues()),
            'appDescription' => fn(ParseNode $n) => $o->setAppDescription($n->getStringValue()),
            'appDisplayName' => fn(ParseNode $n) => $o->setAppDisplayName($n->getStringValue()),
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'applicationTemplateId' => fn(ParseNode $n) => $o->setApplicationTemplateId($n->getStringValue()),
            'appOwnerOrganizationId' => fn(ParseNode $n) => $o->setAppOwnerOrganizationId($n->getStringValue()),
            'appRoleAssignedTo' => fn(ParseNode $n) => $o->setAppRoleAssignedTo($n->getCollectionOfObjectValues([AppRoleAssignment::class, 'createFromDiscriminatorValue'])),
            'appRoleAssignmentRequired' => fn(ParseNode $n) => $o->setAppRoleAssignmentRequired($n->getBooleanValue()),
            'appRoleAssignments' => fn(ParseNode $n) => $o->setAppRoleAssignments($n->getCollectionOfObjectValues([AppRoleAssignment::class, 'createFromDiscriminatorValue'])),
            'appRoles' => fn(ParseNode $n) => $o->setAppRoles($n->getCollectionOfObjectValues([AppRole::class, 'createFromDiscriminatorValue'])),
            'claimsMappingPolicies' => fn(ParseNode $n) => $o->setClaimsMappingPolicies($n->getCollectionOfObjectValues([ClaimsMappingPolicy::class, 'createFromDiscriminatorValue'])),
            'createdObjects' => fn(ParseNode $n) => $o->setCreatedObjects($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'delegatedPermissionClassifications' => fn(ParseNode $n) => $o->setDelegatedPermissionClassifications($n->getCollectionOfObjectValues([DelegatedPermissionClassification::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'disabledByMicrosoftStatus' => fn(ParseNode $n) => $o->setDisabledByMicrosoftStatus($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'endpoints' => fn(ParseNode $n) => $o->setEndpoints($n->getCollectionOfObjectValues([Endpoint::class, 'createFromDiscriminatorValue'])),
            'federatedIdentityCredentials' => fn(ParseNode $n) => $o->setFederatedIdentityCredentials($n->getCollectionOfObjectValues([FederatedIdentityCredential::class, 'createFromDiscriminatorValue'])),
            'homepage' => fn(ParseNode $n) => $o->setHomepage($n->getStringValue()),
            'homeRealmDiscoveryPolicies' => fn(ParseNode $n) => $o->setHomeRealmDiscoveryPolicies($n->getCollectionOfObjectValues([HomeRealmDiscoveryPolicy::class, 'createFromDiscriminatorValue'])),
            'info' => fn(ParseNode $n) => $o->setInfo($n->getObjectValue([InformationalUrl::class, 'createFromDiscriminatorValue'])),
            'keyCredentials' => fn(ParseNode $n) => $o->setKeyCredentials($n->getCollectionOfObjectValues([KeyCredential::class, 'createFromDiscriminatorValue'])),
            'loginUrl' => fn(ParseNode $n) => $o->setLoginUrl($n->getStringValue()),
            'logoutUrl' => fn(ParseNode $n) => $o->setLogoutUrl($n->getStringValue()),
            'memberOf' => fn(ParseNode $n) => $o->setMemberOf($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'notificationEmailAddresses' => fn(ParseNode $n) => $o->setNotificationEmailAddresses($n->getCollectionOfPrimitiveValues()),
            'oauth2PermissionGrants' => fn(ParseNode $n) => $o->setOauth2PermissionGrants($n->getCollectionOfObjectValues([OAuth2PermissionGrant::class, 'createFromDiscriminatorValue'])),
            'oauth2PermissionScopes' => fn(ParseNode $n) => $o->setOauth2PermissionScopes($n->getCollectionOfObjectValues([PermissionScope::class, 'createFromDiscriminatorValue'])),
            'ownedObjects' => fn(ParseNode $n) => $o->setOwnedObjects($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'owners' => fn(ParseNode $n) => $o->setOwners($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'passwordCredentials' => fn(ParseNode $n) => $o->setPasswordCredentials($n->getCollectionOfObjectValues([PasswordCredential::class, 'createFromDiscriminatorValue'])),
            'preferredSingleSignOnMode' => fn(ParseNode $n) => $o->setPreferredSingleSignOnMode($n->getStringValue()),
            'preferredTokenSigningKeyThumbprint' => fn(ParseNode $n) => $o->setPreferredTokenSigningKeyThumbprint($n->getStringValue()),
            'replyUrls' => fn(ParseNode $n) => $o->setReplyUrls($n->getCollectionOfPrimitiveValues()),
            'resourceSpecificApplicationPermissions' => fn(ParseNode $n) => $o->setResourceSpecificApplicationPermissions($n->getCollectionOfObjectValues([ResourceSpecificPermission::class, 'createFromDiscriminatorValue'])),
            'samlSingleSignOnSettings' => fn(ParseNode $n) => $o->setSamlSingleSignOnSettings($n->getObjectValue([SamlSingleSignOnSettings::class, 'createFromDiscriminatorValue'])),
            'servicePrincipalNames' => fn(ParseNode $n) => $o->setServicePrincipalNames($n->getCollectionOfPrimitiveValues()),
            'servicePrincipalType' => fn(ParseNode $n) => $o->setServicePrincipalType($n->getStringValue()),
            'signInAudience' => fn(ParseNode $n) => $o->setSignInAudience($n->getStringValue()),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getCollectionOfPrimitiveValues()),
            'tokenEncryptionKeyId' => fn(ParseNode $n) => $o->setTokenEncryptionKeyId($n->getStringValue()),
            'tokenIssuancePolicies' => fn(ParseNode $n) => $o->setTokenIssuancePolicies($n->getCollectionOfObjectValues([TokenIssuancePolicy::class, 'createFromDiscriminatorValue'])),
            'tokenLifetimePolicies' => fn(ParseNode $n) => $o->setTokenLifetimePolicies($n->getCollectionOfObjectValues([TokenLifetimePolicy::class, 'createFromDiscriminatorValue'])),
            'transitiveMemberOf' => fn(ParseNode $n) => $o->setTransitiveMemberOf($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'verifiedPublisher' => fn(ParseNode $n) => $o->setVerifiedPublisher($n->getObjectValue([VerifiedPublisher::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the homepage property value. Home page or landing page of the application.
     * @return string|null
    */
    public function getHomepage(): ?string {
        return $this->homepage;
    }

    /**
     * Gets the homeRealmDiscoveryPolicies property value. The homeRealmDiscoveryPolicies assigned to this service principal. Supports $expand.
     * @return array<HomeRealmDiscoveryPolicy>|null
    */
    public function getHomeRealmDiscoveryPolicies(): ?array {
        return $this->homeRealmDiscoveryPolicies;
    }

    /**
     * Gets the info property value. Basic profile information of the acquired application such as app's marketing, support, terms of service and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more info, see How to: Add Terms of service and privacy statement for registered Azure AD apps. Supports $filter (eq, ne, not, ge, le, and eq on null values).
     * @return InformationalUrl|null
    */
    public function getInfo(): ?InformationalUrl {
        return $this->info;
    }

    /**
     * Gets the keyCredentials property value. The collection of key credentials associated with the service principal. Not nullable. Supports $filter (eq, not, ge, le).
     * @return array<KeyCredential>|null
    */
    public function getKeyCredentials(): ?array {
        return $this->keyCredentials;
    }

    /**
     * Gets the loginUrl property value. Specifies the URL where the service provider redirects the user to Azure AD to authenticate. Azure AD uses the URL to launch the application from Microsoft 365 or the Azure AD My Apps. When blank, Azure AD performs IdP-initiated sign-on for applications configured with SAML-based single sign-on. The user launches the application from Microsoft 365, the Azure AD My Apps, or the Azure AD SSO URL.
     * @return string|null
    */
    public function getLoginUrl(): ?string {
        return $this->loginUrl;
    }

    /**
     * Gets the logoutUrl property value. Specifies the URL that will be used by Microsoft's authorization service to logout an user using OpenId Connect front-channel, back-channel or SAML logout protocols.
     * @return string|null
    */
    public function getLogoutUrl(): ?string {
        return $this->logoutUrl;
    }

    /**
     * Gets the memberOf property value. Roles that this service principal is a member of. HTTP Methods: GET Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getMemberOf(): ?array {
        return $this->memberOf;
    }

    /**
     * Gets the notes property value. Free text field to capture information about the service principal, typically used for operational purposes. Maximum allowed size is 1024 characters.
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->notes;
    }

    /**
     * Gets the notificationEmailAddresses property value. Specifies the list of email addresses where Azure AD sends a notification when the active certificate is near the expiration date. This is only for the certificates used to sign the SAML token issued for Azure AD Gallery applications.
     * @return array<string>|null
    */
    public function getNotificationEmailAddresses(): ?array {
        return $this->notificationEmailAddresses;
    }

    /**
     * Gets the oauth2PermissionGrants property value. Delegated permission grants authorizing this service principal to access an API on behalf of a signed-in user. Read-only. Nullable.
     * @return array<OAuth2PermissionGrant>|null
    */
    public function getOauth2PermissionGrants(): ?array {
        return $this->oauth2PermissionGrants;
    }

    /**
     * Gets the oauth2PermissionScopes property value. The delegated permissions exposed by the application. For more information see the oauth2PermissionScopes property on the application entity's api property. Not nullable.
     * @return array<PermissionScope>|null
    */
    public function getOauth2PermissionScopes(): ?array {
        return $this->oauth2PermissionScopes;
    }

    /**
     * Gets the ownedObjects property value. Directory objects that are owned by this service principal. Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getOwnedObjects(): ?array {
        return $this->ownedObjects;
    }

    /**
     * Gets the owners property value. Directory objects that are owners of this servicePrincipal. The owners are a set of non-admin users or servicePrincipals who are allowed to modify this object. Read-only. Nullable. Supports $expand.
     * @return array<DirectoryObject>|null
    */
    public function getOwners(): ?array {
        return $this->owners;
    }

    /**
     * Gets the passwordCredentials property value. The collection of password credentials associated with the application. Not nullable.
     * @return array<PasswordCredential>|null
    */
    public function getPasswordCredentials(): ?array {
        return $this->passwordCredentials;
    }

    /**
     * Gets the preferredSingleSignOnMode property value. Specifies the single sign-on mode configured for this application. Azure AD uses the preferred single sign-on mode to launch the application from Microsoft 365 or the Azure AD My Apps. The supported values are password, saml, notSupported, and oidc.
     * @return string|null
    */
    public function getPreferredSingleSignOnMode(): ?string {
        return $this->preferredSingleSignOnMode;
    }

    /**
     * Gets the preferredTokenSigningKeyThumbprint property value. Reserved for internal use only. Do not write or otherwise rely on this property. May be removed in future versions.
     * @return string|null
    */
    public function getPreferredTokenSigningKeyThumbprint(): ?string {
        return $this->preferredTokenSigningKeyThumbprint;
    }

    /**
     * Gets the replyUrls property value. The URLs that user tokens are sent to for sign in with the associated application, or the redirect URIs that OAuth 2.0 authorization codes and access tokens are sent to for the associated application. Not nullable.
     * @return array<string>|null
    */
    public function getReplyUrls(): ?array {
        return $this->replyUrls;
    }

    /**
     * Gets the resourceSpecificApplicationPermissions property value. The resource-specific application permissions exposed by this application. Currently, resource-specific permissions are only supported for Teams apps accessing to specific chats and teams using Microsoft Graph. Read-only.
     * @return array<ResourceSpecificPermission>|null
    */
    public function getResourceSpecificApplicationPermissions(): ?array {
        return $this->resourceSpecificApplicationPermissions;
    }

    /**
     * Gets the samlSingleSignOnSettings property value. The collection for settings related to saml single sign-on.
     * @return SamlSingleSignOnSettings|null
    */
    public function getSamlSingleSignOnSettings(): ?SamlSingleSignOnSettings {
        return $this->samlSingleSignOnSettings;
    }

    /**
     * Gets the servicePrincipalNames property value. Contains the list of identifiersUris, copied over from the associated application. Additional values can be added to hybrid applications. These values can be used to identify the permissions exposed by this app within Azure AD. For example,Client apps can specify a resource URI which is based on the values of this property to acquire an access token, which is the URI returned in the 'aud' claim.The any operator is required for filter expressions on multi-valued properties. Not nullable.  Supports $filter (eq, not, ge, le, startsWith).
     * @return array<string>|null
    */
    public function getServicePrincipalNames(): ?array {
        return $this->servicePrincipalNames;
    }

    /**
     * Gets the servicePrincipalType property value. Identifies whether the service principal represents an application, a managed identity, or a legacy application. This is set by Azure AD internally. The servicePrincipalType property can be set to three different values: __Application - A service principal that represents an application or service. The appId property identifies the associated app registration, and matches the appId of an application, possibly from a different tenant. If the associated app registration is missing, tokens are not issued for the service principal.__ManagedIdentity - A service principal that represents a managed identity. Service principals representing managed identities can be granted access and permissions, but cannot be updated or modified directly.__Legacy - A service principal that represents an app created before app registrations, or through legacy experiences. Legacy service principal can have credentials, service principal names, reply URLs, and other properties which are editable by an authorized user, but does not have an associated app registration. The appId value does not associate the service principal with an app registration. The service principal can only be used in the tenant where it was created.__SocialIdp - For internal use.
     * @return string|null
    */
    public function getServicePrincipalType(): ?string {
        return $this->servicePrincipalType;
    }

    /**
     * Gets the signInAudience property value. Specifies the Microsoft accounts that are supported for the current application. Read-only. Supported values are:AzureADMyOrg: Users with a Microsoft work or school account in my organization’s Azure AD tenant (single-tenant).AzureADMultipleOrgs: Users with a Microsoft work or school account in any organization’s Azure AD tenant (multi-tenant).AzureADandPersonalMicrosoftAccount: Users with a personal Microsoft account, or a work or school account in any organization’s Azure AD tenant.PersonalMicrosoftAccount: Users with a personal Microsoft account only.
     * @return string|null
    */
    public function getSignInAudience(): ?string {
        return $this->signInAudience;
    }

    /**
     * Gets the tags property value. Custom strings that can be used to categorize and identify the service principal. Not nullable. Supports $filter (eq, not, ge, le, startsWith).
     * @return array<string>|null
    */
    public function getTags(): ?array {
        return $this->tags;
    }

    /**
     * Gets the tokenEncryptionKeyId property value. Specifies the keyId of a public key from the keyCredentials collection. When configured, Azure AD issues tokens for this application encrypted using the key specified by this property. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user.
     * @return string|null
    */
    public function getTokenEncryptionKeyId(): ?string {
        return $this->tokenEncryptionKeyId;
    }

    /**
     * Gets the tokenIssuancePolicies property value. The tokenIssuancePolicies assigned to this service principal.
     * @return array<TokenIssuancePolicy>|null
    */
    public function getTokenIssuancePolicies(): ?array {
        return $this->tokenIssuancePolicies;
    }

    /**
     * Gets the tokenLifetimePolicies property value. The tokenLifetimePolicies assigned to this service principal.
     * @return array<TokenLifetimePolicy>|null
    */
    public function getTokenLifetimePolicies(): ?array {
        return $this->tokenLifetimePolicies;
    }

    /**
     * Gets the transitiveMemberOf property value. The transitiveMemberOf property
     * @return array<DirectoryObject>|null
    */
    public function getTransitiveMemberOf(): ?array {
        return $this->transitiveMemberOf;
    }

    /**
     * Gets the verifiedPublisher property value. Specifies the verified publisher of the application which this service principal represents.
     * @return VerifiedPublisher|null
    */
    public function getVerifiedPublisher(): ?VerifiedPublisher {
        return $this->verifiedPublisher;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('accountEnabled', $this->accountEnabled);
        $writer->writeCollectionOfObjectValues('addIns', $this->addIns);
        $writer->writeCollectionOfPrimitiveValues('alternativeNames', $this->alternativeNames);
        $writer->writeStringValue('appDescription', $this->appDescription);
        $writer->writeStringValue('appDisplayName', $this->appDisplayName);
        $writer->writeStringValue('appId', $this->appId);
        $writer->writeStringValue('applicationTemplateId', $this->applicationTemplateId);
        $writer->writeStringValue('appOwnerOrganizationId', $this->appOwnerOrganizationId);
        $writer->writeCollectionOfObjectValues('appRoleAssignedTo', $this->appRoleAssignedTo);
        $writer->writeBooleanValue('appRoleAssignmentRequired', $this->appRoleAssignmentRequired);
        $writer->writeCollectionOfObjectValues('appRoleAssignments', $this->appRoleAssignments);
        $writer->writeCollectionOfObjectValues('appRoles', $this->appRoles);
        $writer->writeCollectionOfObjectValues('claimsMappingPolicies', $this->claimsMappingPolicies);
        $writer->writeCollectionOfObjectValues('createdObjects', $this->createdObjects);
        $writer->writeCollectionOfObjectValues('delegatedPermissionClassifications', $this->delegatedPermissionClassifications);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('disabledByMicrosoftStatus', $this->disabledByMicrosoftStatus);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('endpoints', $this->endpoints);
        $writer->writeCollectionOfObjectValues('federatedIdentityCredentials', $this->federatedIdentityCredentials);
        $writer->writeStringValue('homepage', $this->homepage);
        $writer->writeCollectionOfObjectValues('homeRealmDiscoveryPolicies', $this->homeRealmDiscoveryPolicies);
        $writer->writeObjectValue('info', $this->info);
        $writer->writeCollectionOfObjectValues('keyCredentials', $this->keyCredentials);
        $writer->writeStringValue('loginUrl', $this->loginUrl);
        $writer->writeStringValue('logoutUrl', $this->logoutUrl);
        $writer->writeCollectionOfObjectValues('memberOf', $this->memberOf);
        $writer->writeStringValue('notes', $this->notes);
        $writer->writeCollectionOfPrimitiveValues('notificationEmailAddresses', $this->notificationEmailAddresses);
        $writer->writeCollectionOfObjectValues('oauth2PermissionGrants', $this->oauth2PermissionGrants);
        $writer->writeCollectionOfObjectValues('oauth2PermissionScopes', $this->oauth2PermissionScopes);
        $writer->writeCollectionOfObjectValues('ownedObjects', $this->ownedObjects);
        $writer->writeCollectionOfObjectValues('owners', $this->owners);
        $writer->writeCollectionOfObjectValues('passwordCredentials', $this->passwordCredentials);
        $writer->writeStringValue('preferredSingleSignOnMode', $this->preferredSingleSignOnMode);
        $writer->writeStringValue('preferredTokenSigningKeyThumbprint', $this->preferredTokenSigningKeyThumbprint);
        $writer->writeCollectionOfPrimitiveValues('replyUrls', $this->replyUrls);
        $writer->writeCollectionOfObjectValues('resourceSpecificApplicationPermissions', $this->resourceSpecificApplicationPermissions);
        $writer->writeObjectValue('samlSingleSignOnSettings', $this->samlSingleSignOnSettings);
        $writer->writeCollectionOfPrimitiveValues('servicePrincipalNames', $this->servicePrincipalNames);
        $writer->writeStringValue('servicePrincipalType', $this->servicePrincipalType);
        $writer->writeStringValue('signInAudience', $this->signInAudience);
        $writer->writeCollectionOfPrimitiveValues('tags', $this->tags);
        $writer->writeStringValue('tokenEncryptionKeyId', $this->tokenEncryptionKeyId);
        $writer->writeCollectionOfObjectValues('tokenIssuancePolicies', $this->tokenIssuancePolicies);
        $writer->writeCollectionOfObjectValues('tokenLifetimePolicies', $this->tokenLifetimePolicies);
        $writer->writeCollectionOfObjectValues('transitiveMemberOf', $this->transitiveMemberOf);
        $writer->writeObjectValue('verifiedPublisher', $this->verifiedPublisher);
    }

    /**
     * Sets the accountEnabled property value. true if the service principal account is enabled; otherwise, false. Supports $filter (eq, ne, not, in).
     *  @param bool|null $value Value to set for the accountEnabled property.
    */
    public function setAccountEnabled(?bool $value ): void {
        $this->accountEnabled = $value;
    }

    /**
     * Sets the addIns property value. Defines custom behavior that a consuming service can use to call an app in specific contexts. For example, applications that can render file streams may set the addIns property for its 'FileHandler' functionality. This will let services like Microsoft 365 call the application in the context of a document the user is working on.
     *  @param array<AddIn>|null $value Value to set for the addIns property.
    */
    public function setAddIns(?array $value ): void {
        $this->addIns = $value;
    }

    /**
     * Sets the alternativeNames property value. Used to retrieve service principals by subscription, identify resource group and full resource ids for managed identities. Supports $filter (eq, not, ge, le, startsWith).
     *  @param array<string>|null $value Value to set for the alternativeNames property.
    */
    public function setAlternativeNames(?array $value ): void {
        $this->alternativeNames = $value;
    }

    /**
     * Sets the appDescription property value. The description exposed by the associated application.
     *  @param string|null $value Value to set for the appDescription property.
    */
    public function setAppDescription(?string $value ): void {
        $this->appDescription = $value;
    }

    /**
     * Sets the appDisplayName property value. The display name exposed by the associated application.
     *  @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value ): void {
        $this->appDisplayName = $value;
    }

    /**
     * Sets the appId property value. The unique identifier for the associated application (its appId property). Supports $filter (eq, ne, not, in, startsWith).
     *  @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value ): void {
        $this->appId = $value;
    }

    /**
     * Sets the applicationTemplateId property value. Unique identifier of the applicationTemplate that the servicePrincipal was created from. Read-only. Supports $filter (eq, ne, NOT, startsWith).
     *  @param string|null $value Value to set for the applicationTemplateId property.
    */
    public function setApplicationTemplateId(?string $value ): void {
        $this->applicationTemplateId = $value;
    }

    /**
     * Sets the appOwnerOrganizationId property value. Contains the tenant id where the application is registered. This is applicable only to service principals backed by applications. Supports $filter (eq, ne, NOT, ge, le).
     *  @param string|null $value Value to set for the appOwnerOrganizationId property.
    */
    public function setAppOwnerOrganizationId(?string $value ): void {
        $this->appOwnerOrganizationId = $value;
    }

    /**
     * Sets the appRoleAssignedTo property value. App role assignments for this app or service, granted to users, groups, and other service principals. Supports $expand.
     *  @param array<AppRoleAssignment>|null $value Value to set for the appRoleAssignedTo property.
    */
    public function setAppRoleAssignedTo(?array $value ): void {
        $this->appRoleAssignedTo = $value;
    }

    /**
     * Sets the appRoleAssignmentRequired property value. Specifies whether users or other service principals need to be granted an app role assignment for this service principal before users can sign in or apps can get tokens. The default value is false. Not nullable. Supports $filter (eq, ne, NOT).
     *  @param bool|null $value Value to set for the appRoleAssignmentRequired property.
    */
    public function setAppRoleAssignmentRequired(?bool $value ): void {
        $this->appRoleAssignmentRequired = $value;
    }

    /**
     * Sets the appRoleAssignments property value. App role assignment for another app or service, granted to this service principal. Supports $expand.
     *  @param array<AppRoleAssignment>|null $value Value to set for the appRoleAssignments property.
    */
    public function setAppRoleAssignments(?array $value ): void {
        $this->appRoleAssignments = $value;
    }

    /**
     * Sets the appRoles property value. The roles exposed by the application which this service principal represents. For more information see the appRoles property definition on the application entity. Not nullable.
     *  @param array<AppRole>|null $value Value to set for the appRoles property.
    */
    public function setAppRoles(?array $value ): void {
        $this->appRoles = $value;
    }

    /**
     * Sets the claimsMappingPolicies property value. The claimsMappingPolicies assigned to this service principal. Supports $expand.
     *  @param array<ClaimsMappingPolicy>|null $value Value to set for the claimsMappingPolicies property.
    */
    public function setClaimsMappingPolicies(?array $value ): void {
        $this->claimsMappingPolicies = $value;
    }

    /**
     * Sets the createdObjects property value. Directory objects created by this service principal. Read-only. Nullable.
     *  @param array<DirectoryObject>|null $value Value to set for the createdObjects property.
    */
    public function setCreatedObjects(?array $value ): void {
        $this->createdObjects = $value;
    }

    /**
     * Sets the delegatedPermissionClassifications property value. The delegatedPermissionClassifications property
     *  @param array<DelegatedPermissionClassification>|null $value Value to set for the delegatedPermissionClassifications property.
    */
    public function setDelegatedPermissionClassifications(?array $value ): void {
        $this->delegatedPermissionClassifications = $value;
    }

    /**
     * Sets the description property value. Free text field to provide an internal end-user facing description of the service principal. End-user portals such MyApps will display the application description in this field. The maximum allowed size is 1024 characters. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the disabledByMicrosoftStatus property value. Specifies whether Microsoft has disabled the registered application. Possible values are: null (default value), NotDisabled, and DisabledDueToViolationOfServicesAgreement (reasons may include suspicious, abusive, or malicious activity, or a violation of the Microsoft Services Agreement).  Supports $filter (eq, ne, not).
     *  @param string|null $value Value to set for the disabledByMicrosoftStatus property.
    */
    public function setDisabledByMicrosoftStatus(?string $value ): void {
        $this->disabledByMicrosoftStatus = $value;
    }

    /**
     * Sets the displayName property value. The display name for the service principal. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the endpoints property value. The endpoints property
     *  @param array<Endpoint>|null $value Value to set for the endpoints property.
    */
    public function setEndpoints(?array $value ): void {
        $this->endpoints = $value;
    }

    /**
     * Sets the federatedIdentityCredentials property value. Federated identities for a specific type of service principal - managed identity. Supports $expand and $filter (eq when counting empty collections).
     *  @param array<FederatedIdentityCredential>|null $value Value to set for the federatedIdentityCredentials property.
    */
    public function setFederatedIdentityCredentials(?array $value ): void {
        $this->federatedIdentityCredentials = $value;
    }

    /**
     * Sets the homepage property value. Home page or landing page of the application.
     *  @param string|null $value Value to set for the homepage property.
    */
    public function setHomepage(?string $value ): void {
        $this->homepage = $value;
    }

    /**
     * Sets the homeRealmDiscoveryPolicies property value. The homeRealmDiscoveryPolicies assigned to this service principal. Supports $expand.
     *  @param array<HomeRealmDiscoveryPolicy>|null $value Value to set for the homeRealmDiscoveryPolicies property.
    */
    public function setHomeRealmDiscoveryPolicies(?array $value ): void {
        $this->homeRealmDiscoveryPolicies = $value;
    }

    /**
     * Sets the info property value. Basic profile information of the acquired application such as app's marketing, support, terms of service and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more info, see How to: Add Terms of service and privacy statement for registered Azure AD apps. Supports $filter (eq, ne, not, ge, le, and eq on null values).
     *  @param InformationalUrl|null $value Value to set for the info property.
    */
    public function setInfo(?InformationalUrl $value ): void {
        $this->info = $value;
    }

    /**
     * Sets the keyCredentials property value. The collection of key credentials associated with the service principal. Not nullable. Supports $filter (eq, not, ge, le).
     *  @param array<KeyCredential>|null $value Value to set for the keyCredentials property.
    */
    public function setKeyCredentials(?array $value ): void {
        $this->keyCredentials = $value;
    }

    /**
     * Sets the loginUrl property value. Specifies the URL where the service provider redirects the user to Azure AD to authenticate. Azure AD uses the URL to launch the application from Microsoft 365 or the Azure AD My Apps. When blank, Azure AD performs IdP-initiated sign-on for applications configured with SAML-based single sign-on. The user launches the application from Microsoft 365, the Azure AD My Apps, or the Azure AD SSO URL.
     *  @param string|null $value Value to set for the loginUrl property.
    */
    public function setLoginUrl(?string $value ): void {
        $this->loginUrl = $value;
    }

    /**
     * Sets the logoutUrl property value. Specifies the URL that will be used by Microsoft's authorization service to logout an user using OpenId Connect front-channel, back-channel or SAML logout protocols.
     *  @param string|null $value Value to set for the logoutUrl property.
    */
    public function setLogoutUrl(?string $value ): void {
        $this->logoutUrl = $value;
    }

    /**
     * Sets the memberOf property value. Roles that this service principal is a member of. HTTP Methods: GET Read-only. Nullable. Supports $expand.
     *  @param array<DirectoryObject>|null $value Value to set for the memberOf property.
    */
    public function setMemberOf(?array $value ): void {
        $this->memberOf = $value;
    }

    /**
     * Sets the notes property value. Free text field to capture information about the service principal, typically used for operational purposes. Maximum allowed size is 1024 characters.
     *  @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value ): void {
        $this->notes = $value;
    }

    /**
     * Sets the notificationEmailAddresses property value. Specifies the list of email addresses where Azure AD sends a notification when the active certificate is near the expiration date. This is only for the certificates used to sign the SAML token issued for Azure AD Gallery applications.
     *  @param array<string>|null $value Value to set for the notificationEmailAddresses property.
    */
    public function setNotificationEmailAddresses(?array $value ): void {
        $this->notificationEmailAddresses = $value;
    }

    /**
     * Sets the oauth2PermissionGrants property value. Delegated permission grants authorizing this service principal to access an API on behalf of a signed-in user. Read-only. Nullable.
     *  @param array<OAuth2PermissionGrant>|null $value Value to set for the oauth2PermissionGrants property.
    */
    public function setOauth2PermissionGrants(?array $value ): void {
        $this->oauth2PermissionGrants = $value;
    }

    /**
     * Sets the oauth2PermissionScopes property value. The delegated permissions exposed by the application. For more information see the oauth2PermissionScopes property on the application entity's api property. Not nullable.
     *  @param array<PermissionScope>|null $value Value to set for the oauth2PermissionScopes property.
    */
    public function setOauth2PermissionScopes(?array $value ): void {
        $this->oauth2PermissionScopes = $value;
    }

    /**
     * Sets the ownedObjects property value. Directory objects that are owned by this service principal. Read-only. Nullable. Supports $expand.
     *  @param array<DirectoryObject>|null $value Value to set for the ownedObjects property.
    */
    public function setOwnedObjects(?array $value ): void {
        $this->ownedObjects = $value;
    }

    /**
     * Sets the owners property value. Directory objects that are owners of this servicePrincipal. The owners are a set of non-admin users or servicePrincipals who are allowed to modify this object. Read-only. Nullable. Supports $expand.
     *  @param array<DirectoryObject>|null $value Value to set for the owners property.
    */
    public function setOwners(?array $value ): void {
        $this->owners = $value;
    }

    /**
     * Sets the passwordCredentials property value. The collection of password credentials associated with the application. Not nullable.
     *  @param array<PasswordCredential>|null $value Value to set for the passwordCredentials property.
    */
    public function setPasswordCredentials(?array $value ): void {
        $this->passwordCredentials = $value;
    }

    /**
     * Sets the preferredSingleSignOnMode property value. Specifies the single sign-on mode configured for this application. Azure AD uses the preferred single sign-on mode to launch the application from Microsoft 365 or the Azure AD My Apps. The supported values are password, saml, notSupported, and oidc.
     *  @param string|null $value Value to set for the preferredSingleSignOnMode property.
    */
    public function setPreferredSingleSignOnMode(?string $value ): void {
        $this->preferredSingleSignOnMode = $value;
    }

    /**
     * Sets the preferredTokenSigningKeyThumbprint property value. Reserved for internal use only. Do not write or otherwise rely on this property. May be removed in future versions.
     *  @param string|null $value Value to set for the preferredTokenSigningKeyThumbprint property.
    */
    public function setPreferredTokenSigningKeyThumbprint(?string $value ): void {
        $this->preferredTokenSigningKeyThumbprint = $value;
    }

    /**
     * Sets the replyUrls property value. The URLs that user tokens are sent to for sign in with the associated application, or the redirect URIs that OAuth 2.0 authorization codes and access tokens are sent to for the associated application. Not nullable.
     *  @param array<string>|null $value Value to set for the replyUrls property.
    */
    public function setReplyUrls(?array $value ): void {
        $this->replyUrls = $value;
    }

    /**
     * Sets the resourceSpecificApplicationPermissions property value. The resource-specific application permissions exposed by this application. Currently, resource-specific permissions are only supported for Teams apps accessing to specific chats and teams using Microsoft Graph. Read-only.
     *  @param array<ResourceSpecificPermission>|null $value Value to set for the resourceSpecificApplicationPermissions property.
    */
    public function setResourceSpecificApplicationPermissions(?array $value ): void {
        $this->resourceSpecificApplicationPermissions = $value;
    }

    /**
     * Sets the samlSingleSignOnSettings property value. The collection for settings related to saml single sign-on.
     *  @param SamlSingleSignOnSettings|null $value Value to set for the samlSingleSignOnSettings property.
    */
    public function setSamlSingleSignOnSettings(?SamlSingleSignOnSettings $value ): void {
        $this->samlSingleSignOnSettings = $value;
    }

    /**
     * Sets the servicePrincipalNames property value. Contains the list of identifiersUris, copied over from the associated application. Additional values can be added to hybrid applications. These values can be used to identify the permissions exposed by this app within Azure AD. For example,Client apps can specify a resource URI which is based on the values of this property to acquire an access token, which is the URI returned in the 'aud' claim.The any operator is required for filter expressions on multi-valued properties. Not nullable.  Supports $filter (eq, not, ge, le, startsWith).
     *  @param array<string>|null $value Value to set for the servicePrincipalNames property.
    */
    public function setServicePrincipalNames(?array $value ): void {
        $this->servicePrincipalNames = $value;
    }

    /**
     * Sets the servicePrincipalType property value. Identifies whether the service principal represents an application, a managed identity, or a legacy application. This is set by Azure AD internally. The servicePrincipalType property can be set to three different values: __Application - A service principal that represents an application or service. The appId property identifies the associated app registration, and matches the appId of an application, possibly from a different tenant. If the associated app registration is missing, tokens are not issued for the service principal.__ManagedIdentity - A service principal that represents a managed identity. Service principals representing managed identities can be granted access and permissions, but cannot be updated or modified directly.__Legacy - A service principal that represents an app created before app registrations, or through legacy experiences. Legacy service principal can have credentials, service principal names, reply URLs, and other properties which are editable by an authorized user, but does not have an associated app registration. The appId value does not associate the service principal with an app registration. The service principal can only be used in the tenant where it was created.__SocialIdp - For internal use.
     *  @param string|null $value Value to set for the servicePrincipalType property.
    */
    public function setServicePrincipalType(?string $value ): void {
        $this->servicePrincipalType = $value;
    }

    /**
     * Sets the signInAudience property value. Specifies the Microsoft accounts that are supported for the current application. Read-only. Supported values are:AzureADMyOrg: Users with a Microsoft work or school account in my organization’s Azure AD tenant (single-tenant).AzureADMultipleOrgs: Users with a Microsoft work or school account in any organization’s Azure AD tenant (multi-tenant).AzureADandPersonalMicrosoftAccount: Users with a personal Microsoft account, or a work or school account in any organization’s Azure AD tenant.PersonalMicrosoftAccount: Users with a personal Microsoft account only.
     *  @param string|null $value Value to set for the signInAudience property.
    */
    public function setSignInAudience(?string $value ): void {
        $this->signInAudience = $value;
    }

    /**
     * Sets the tags property value. Custom strings that can be used to categorize and identify the service principal. Not nullable. Supports $filter (eq, not, ge, le, startsWith).
     *  @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value ): void {
        $this->tags = $value;
    }

    /**
     * Sets the tokenEncryptionKeyId property value. Specifies the keyId of a public key from the keyCredentials collection. When configured, Azure AD issues tokens for this application encrypted using the key specified by this property. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user.
     *  @param string|null $value Value to set for the tokenEncryptionKeyId property.
    */
    public function setTokenEncryptionKeyId(?string $value ): void {
        $this->tokenEncryptionKeyId = $value;
    }

    /**
     * Sets the tokenIssuancePolicies property value. The tokenIssuancePolicies assigned to this service principal.
     *  @param array<TokenIssuancePolicy>|null $value Value to set for the tokenIssuancePolicies property.
    */
    public function setTokenIssuancePolicies(?array $value ): void {
        $this->tokenIssuancePolicies = $value;
    }

    /**
     * Sets the tokenLifetimePolicies property value. The tokenLifetimePolicies assigned to this service principal.
     *  @param array<TokenLifetimePolicy>|null $value Value to set for the tokenLifetimePolicies property.
    */
    public function setTokenLifetimePolicies(?array $value ): void {
        $this->tokenLifetimePolicies = $value;
    }

    /**
     * Sets the transitiveMemberOf property value. The transitiveMemberOf property
     *  @param array<DirectoryObject>|null $value Value to set for the transitiveMemberOf property.
    */
    public function setTransitiveMemberOf(?array $value ): void {
        $this->transitiveMemberOf = $value;
    }

    /**
     * Sets the verifiedPublisher property value. Specifies the verified publisher of the application which this service principal represents.
     *  @param VerifiedPublisher|null $value Value to set for the verifiedPublisher property.
    */
    public function setVerifiedPublisher(?VerifiedPublisher $value ): void {
        $this->verifiedPublisher = $value;
    }

}
