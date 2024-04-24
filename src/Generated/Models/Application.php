<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

class Application extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new Application and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.application');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Application
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Application {
        return new Application();
    }

    /**
     * Gets the addIns property value. Defines custom behavior that a consuming service can use to call an app in specific contexts. For example, applications that can render file streams can set the addIns property for its 'FileHandler' functionality. This lets services like Microsoft 365 call the application in the context of a document the user is working on.
     * @return array<AddIn>|null
    */
    public function getAddIns(): ?array {
        $val = $this->getBackingStore()->get('addIns');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AddIn::class);
            /** @var array<AddIn>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'addIns'");
    }

    /**
     * Gets the api property value. Specifies settings for an application that implements a web API.
     * @return ApiApplication|null
    */
    public function getApi(): ?ApiApplication {
        $val = $this->getBackingStore()->get('api');
        if (is_null($val) || $val instanceof ApiApplication) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'api'");
    }

    /**
     * Gets the appId property value. The unique identifier for the application that is assigned to an application by Microsoft Entra ID. Not nullable. Read-only. Alternate key. Supports $filter (eq).
     * @return string|null
    */
    public function getAppId(): ?string {
        $val = $this->getBackingStore()->get('appId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appId'");
    }

    /**
     * Gets the applicationTemplateId property value. Unique identifier of the applicationTemplate. Supports $filter (eq, not, ne). Read-only. null if the app wasn't created from an application template.
     * @return string|null
    */
    public function getApplicationTemplateId(): ?string {
        $val = $this->getBackingStore()->get('applicationTemplateId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationTemplateId'");
    }

    /**
     * Gets the appManagementPolicies property value. The appManagementPolicy applied to this application.
     * @return array<AppManagementPolicy>|null
    */
    public function getAppManagementPolicies(): ?array {
        $val = $this->getBackingStore()->get('appManagementPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppManagementPolicy::class);
            /** @var array<AppManagementPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appManagementPolicies'");
    }

    /**
     * Gets the appRoles property value. The collection of roles defined for the application. With app role assignments, these roles can be assigned to users, groups, or service principals associated with other applications. Not nullable.
     * @return array<AppRole>|null
    */
    public function getAppRoles(): ?array {
        $val = $this->getBackingStore()->get('appRoles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppRole::class);
            /** @var array<AppRole>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appRoles'");
    }

    /**
     * Gets the certification property value. Specifies the certification status of the application.
     * @return Certification|null
    */
    public function getCertification(): ?Certification {
        $val = $this->getBackingStore()->get('certification');
        if (is_null($val) || $val instanceof Certification) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certification'");
    }

    /**
     * Gets the createdDateTime property value. The date and time the application was registered. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.  Supports $filter (eq, ne, not, ge, le, in, and eq on null values) and $orderby.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the createdOnBehalfOf property value. Supports $filter (/$count eq 0, /$count ne 0). Read-only.
     * @return DirectoryObject|null
    */
    public function getCreatedOnBehalfOf(): ?DirectoryObject {
        $val = $this->getBackingStore()->get('createdOnBehalfOf');
        if (is_null($val) || $val instanceof DirectoryObject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdOnBehalfOf'");
    }

    /**
     * Gets the defaultRedirectUri property value. The defaultRedirectUri property
     * @return string|null
    */
    public function getDefaultRedirectUri(): ?string {
        $val = $this->getBackingStore()->get('defaultRedirectUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultRedirectUri'");
    }

    /**
     * Gets the description property value. Free text field to provide a description of the application object to end users. The maximum allowed size is 1,024 characters. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the disabledByMicrosoftStatus property value. Specifies whether Microsoft has disabled the registered application. Possible values are: null (default value), NotDisabled, and DisabledDueToViolationOfServicesAgreement (reasons include suspicious, abusive, or malicious activity, or a violation of the Microsoft Services Agreement).  Supports $filter (eq, ne, not).
     * @return string|null
    */
    public function getDisabledByMicrosoftStatus(): ?string {
        $val = $this->getBackingStore()->get('disabledByMicrosoftStatus');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disabledByMicrosoftStatus'");
    }

    /**
     * Gets the displayName property value. The display name for the application. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the extensionProperties property value. Read-only. Nullable. Supports $expand and $filter (/$count eq 0, /$count ne 0).
     * @return array<ExtensionProperty>|null
    */
    public function getExtensionProperties(): ?array {
        $val = $this->getBackingStore()->get('extensionProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ExtensionProperty::class);
            /** @var array<ExtensionProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensionProperties'");
    }

    /**
     * Gets the federatedIdentityCredentials property value. Federated identities for applications. Supports $expand and $filter (startsWith, /$count eq 0, /$count ne 0).
     * @return array<FederatedIdentityCredential>|null
    */
    public function getFederatedIdentityCredentials(): ?array {
        $val = $this->getBackingStore()->get('federatedIdentityCredentials');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FederatedIdentityCredential::class);
            /** @var array<FederatedIdentityCredential>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'federatedIdentityCredentials'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'addIns' => fn(ParseNode $n) => $o->setAddIns($n->getCollectionOfObjectValues([AddIn::class, 'createFromDiscriminatorValue'])),
            'api' => fn(ParseNode $n) => $o->setApi($n->getObjectValue([ApiApplication::class, 'createFromDiscriminatorValue'])),
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'applicationTemplateId' => fn(ParseNode $n) => $o->setApplicationTemplateId($n->getStringValue()),
            'appManagementPolicies' => fn(ParseNode $n) => $o->setAppManagementPolicies($n->getCollectionOfObjectValues([AppManagementPolicy::class, 'createFromDiscriminatorValue'])),
            'appRoles' => fn(ParseNode $n) => $o->setAppRoles($n->getCollectionOfObjectValues([AppRole::class, 'createFromDiscriminatorValue'])),
            'certification' => fn(ParseNode $n) => $o->setCertification($n->getObjectValue([Certification::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'createdOnBehalfOf' => fn(ParseNode $n) => $o->setCreatedOnBehalfOf($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'defaultRedirectUri' => fn(ParseNode $n) => $o->setDefaultRedirectUri($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'disabledByMicrosoftStatus' => fn(ParseNode $n) => $o->setDisabledByMicrosoftStatus($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'extensionProperties' => fn(ParseNode $n) => $o->setExtensionProperties($n->getCollectionOfObjectValues([ExtensionProperty::class, 'createFromDiscriminatorValue'])),
            'federatedIdentityCredentials' => fn(ParseNode $n) => $o->setFederatedIdentityCredentials($n->getCollectionOfObjectValues([FederatedIdentityCredential::class, 'createFromDiscriminatorValue'])),
            'groupMembershipClaims' => fn(ParseNode $n) => $o->setGroupMembershipClaims($n->getStringValue()),
            'homeRealmDiscoveryPolicies' => fn(ParseNode $n) => $o->setHomeRealmDiscoveryPolicies($n->getCollectionOfObjectValues([HomeRealmDiscoveryPolicy::class, 'createFromDiscriminatorValue'])),
            'identifierUris' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setIdentifierUris($val);
            },
            'info' => fn(ParseNode $n) => $o->setInfo($n->getObjectValue([InformationalUrl::class, 'createFromDiscriminatorValue'])),
            'isDeviceOnlyAuthSupported' => fn(ParseNode $n) => $o->setIsDeviceOnlyAuthSupported($n->getBooleanValue()),
            'isFallbackPublicClient' => fn(ParseNode $n) => $o->setIsFallbackPublicClient($n->getBooleanValue()),
            'keyCredentials' => fn(ParseNode $n) => $o->setKeyCredentials($n->getCollectionOfObjectValues([KeyCredential::class, 'createFromDiscriminatorValue'])),
            'logo' => fn(ParseNode $n) => $o->setLogo($n->getBinaryContent()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'oauth2RequirePostResponse' => fn(ParseNode $n) => $o->setOauth2RequirePostResponse($n->getBooleanValue()),
            'optionalClaims' => fn(ParseNode $n) => $o->setOptionalClaims($n->getObjectValue([OptionalClaims::class, 'createFromDiscriminatorValue'])),
            'owners' => fn(ParseNode $n) => $o->setOwners($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'parentalControlSettings' => fn(ParseNode $n) => $o->setParentalControlSettings($n->getObjectValue([ParentalControlSettings::class, 'createFromDiscriminatorValue'])),
            'passwordCredentials' => fn(ParseNode $n) => $o->setPasswordCredentials($n->getCollectionOfObjectValues([PasswordCredential::class, 'createFromDiscriminatorValue'])),
            'publicClient' => fn(ParseNode $n) => $o->setPublicClient($n->getObjectValue([PublicClientApplication::class, 'createFromDiscriminatorValue'])),
            'publisherDomain' => fn(ParseNode $n) => $o->setPublisherDomain($n->getStringValue()),
            'requestSignatureVerification' => fn(ParseNode $n) => $o->setRequestSignatureVerification($n->getObjectValue([RequestSignatureVerification::class, 'createFromDiscriminatorValue'])),
            'requiredResourceAccess' => fn(ParseNode $n) => $o->setRequiredResourceAccess($n->getCollectionOfObjectValues([RequiredResourceAccess::class, 'createFromDiscriminatorValue'])),
            'samlMetadataUrl' => fn(ParseNode $n) => $o->setSamlMetadataUrl($n->getStringValue()),
            'serviceManagementReference' => fn(ParseNode $n) => $o->setServiceManagementReference($n->getStringValue()),
            'servicePrincipalLockConfiguration' => fn(ParseNode $n) => $o->setServicePrincipalLockConfiguration($n->getObjectValue([ServicePrincipalLockConfiguration::class, 'createFromDiscriminatorValue'])),
            'signInAudience' => fn(ParseNode $n) => $o->setSignInAudience($n->getStringValue()),
            'spa' => fn(ParseNode $n) => $o->setSpa($n->getObjectValue([SpaApplication::class, 'createFromDiscriminatorValue'])),
            'synchronization' => fn(ParseNode $n) => $o->setSynchronization($n->getObjectValue([Synchronization::class, 'createFromDiscriminatorValue'])),
            'tags' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTags($val);
            },
            'tokenEncryptionKeyId' => fn(ParseNode $n) => $o->setTokenEncryptionKeyId($n->getStringValue()),
            'tokenIssuancePolicies' => fn(ParseNode $n) => $o->setTokenIssuancePolicies($n->getCollectionOfObjectValues([TokenIssuancePolicy::class, 'createFromDiscriminatorValue'])),
            'tokenLifetimePolicies' => fn(ParseNode $n) => $o->setTokenLifetimePolicies($n->getCollectionOfObjectValues([TokenLifetimePolicy::class, 'createFromDiscriminatorValue'])),
            'uniqueName' => fn(ParseNode $n) => $o->setUniqueName($n->getStringValue()),
            'verifiedPublisher' => fn(ParseNode $n) => $o->setVerifiedPublisher($n->getObjectValue([VerifiedPublisher::class, 'createFromDiscriminatorValue'])),
            'web' => fn(ParseNode $n) => $o->setWeb($n->getObjectValue([WebApplication::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the groupMembershipClaims property value. Configures the groups claim issued in a user or OAuth 2.0 access token that the application expects. To set this attribute, use one of the following valid string values: None, SecurityGroup (for security groups and Microsoft Entra roles), All (this gets all of the security groups, distribution groups, and Microsoft Entra directory roles that the signed-in user is a member of).
     * @return string|null
    */
    public function getGroupMembershipClaims(): ?string {
        $val = $this->getBackingStore()->get('groupMembershipClaims');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupMembershipClaims'");
    }

    /**
     * Gets the homeRealmDiscoveryPolicies property value. The homeRealmDiscoveryPolicies property
     * @return array<HomeRealmDiscoveryPolicy>|null
    */
    public function getHomeRealmDiscoveryPolicies(): ?array {
        $val = $this->getBackingStore()->get('homeRealmDiscoveryPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HomeRealmDiscoveryPolicy::class);
            /** @var array<HomeRealmDiscoveryPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'homeRealmDiscoveryPolicies'");
    }

    /**
     * Gets the identifierUris property value. Also known as App ID URI, this value is set when an application is used as a resource app. The identifierUris acts as the prefix for the scopes you reference in your API's code, and it must be globally unique. You can use the default value provided, which is in the form api://<appId>, or specify a more readable URI like https://contoso.com/api. For more information on valid identifierUris patterns and best practices, see Microsoft Entra application registration security best practices. Not nullable. Supports $filter (eq, ne, ge, le, startsWith).
     * @return array<string>|null
    */
    public function getIdentifierUris(): ?array {
        $val = $this->getBackingStore()->get('identifierUris');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identifierUris'");
    }

    /**
     * Gets the info property value. Basic profile information of the application such as  app's marketing, support, terms of service and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more info, see How to: Add Terms of service and privacy statement for registered Microsoft Entra apps. Supports $filter (eq, ne, not, ge, le, and eq on null values).
     * @return InformationalUrl|null
    */
    public function getInfo(): ?InformationalUrl {
        $val = $this->getBackingStore()->get('info');
        if (is_null($val) || $val instanceof InformationalUrl) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'info'");
    }

    /**
     * Gets the isDeviceOnlyAuthSupported property value. Specifies whether this application supports device authentication without a user. The default is false.
     * @return bool|null
    */
    public function getIsDeviceOnlyAuthSupported(): ?bool {
        $val = $this->getBackingStore()->get('isDeviceOnlyAuthSupported');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDeviceOnlyAuthSupported'");
    }

    /**
     * Gets the isFallbackPublicClient property value. Specifies the fallback application type as public client, such as an installed application running on a mobile device. The default value is false, which means the fallback application type is confidential client such as a web app. There are certain scenarios where Microsoft Entra ID can't determine the client application type. For example, the ROPC flow where it's configured without specifying a redirect URI. In those cases, Microsoft Entra ID interprets the application type based on the value of this property.
     * @return bool|null
    */
    public function getIsFallbackPublicClient(): ?bool {
        $val = $this->getBackingStore()->get('isFallbackPublicClient');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isFallbackPublicClient'");
    }

    /**
     * Gets the keyCredentials property value. The collection of key credentials associated with the application. Not nullable. Supports $filter (eq, not, ge, le).
     * @return array<KeyCredential>|null
    */
    public function getKeyCredentials(): ?array {
        $val = $this->getBackingStore()->get('keyCredentials');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyCredential::class);
            /** @var array<KeyCredential>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyCredentials'");
    }

    /**
     * Gets the logo property value. The main logo for the application. Not nullable.
     * @return StreamInterface|null
    */
    public function getLogo(): ?StreamInterface {
        $val = $this->getBackingStore()->get('logo');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'logo'");
    }

    /**
     * Gets the notes property value. Notes relevant for the management of the application.
     * @return string|null
    */
    public function getNotes(): ?string {
        $val = $this->getBackingStore()->get('notes');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notes'");
    }

    /**
     * Gets the oauth2RequirePostResponse property value. The oauth2RequirePostResponse property
     * @return bool|null
    */
    public function getOauth2RequirePostResponse(): ?bool {
        $val = $this->getBackingStore()->get('oauth2RequirePostResponse');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oauth2RequirePostResponse'");
    }

    /**
     * Gets the optionalClaims property value. Application developers can configure optional claims in their Microsoft Entra applications to specify the claims that are sent to their application by the Microsoft security token service. For more information, see How to: Provide optional claims to your app.
     * @return OptionalClaims|null
    */
    public function getOptionalClaims(): ?OptionalClaims {
        $val = $this->getBackingStore()->get('optionalClaims');
        if (is_null($val) || $val instanceof OptionalClaims) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'optionalClaims'");
    }

    /**
     * Gets the owners property value. Directory objects that are owners of the application. Read-only. Nullable. Supports $expand, $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1), and $select nested in $expand.
     * @return array<DirectoryObject>|null
    */
    public function getOwners(): ?array {
        $val = $this->getBackingStore()->get('owners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'owners'");
    }

    /**
     * Gets the parentalControlSettings property value. Specifies parental control settings for an application.
     * @return ParentalControlSettings|null
    */
    public function getParentalControlSettings(): ?ParentalControlSettings {
        $val = $this->getBackingStore()->get('parentalControlSettings');
        if (is_null($val) || $val instanceof ParentalControlSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentalControlSettings'");
    }

    /**
     * Gets the passwordCredentials property value. The collection of password credentials associated with the application. Not nullable.
     * @return array<PasswordCredential>|null
    */
    public function getPasswordCredentials(): ?array {
        $val = $this->getBackingStore()->get('passwordCredentials');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PasswordCredential::class);
            /** @var array<PasswordCredential>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordCredentials'");
    }

    /**
     * Gets the publicClient property value. Specifies settings for installed clients such as desktop or mobile devices.
     * @return PublicClientApplication|null
    */
    public function getPublicClient(): ?PublicClientApplication {
        $val = $this->getBackingStore()->get('publicClient');
        if (is_null($val) || $val instanceof PublicClientApplication) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publicClient'");
    }

    /**
     * Gets the publisherDomain property value. The verified publisher domain for the application. Read-only. For more information, see How to: Configure an application's publisher domain. Supports $filter (eq, ne, ge, le, startsWith).
     * @return string|null
    */
    public function getPublisherDomain(): ?string {
        $val = $this->getBackingStore()->get('publisherDomain');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publisherDomain'");
    }

    /**
     * Gets the requestSignatureVerification property value. Specifies whether this application requires Microsoft Entra ID to verify the signed authentication requests.
     * @return RequestSignatureVerification|null
    */
    public function getRequestSignatureVerification(): ?RequestSignatureVerification {
        $val = $this->getBackingStore()->get('requestSignatureVerification');
        if (is_null($val) || $val instanceof RequestSignatureVerification) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestSignatureVerification'");
    }

    /**
     * Gets the requiredResourceAccess property value. Specifies the resources that the application needs to access. This property also specifies the set of delegated permissions and application roles that it needs for each of those resources. This configuration of access to the required resources drives the consent experience. No more than 50 resource services (APIs) can be configured. Beginning mid-October 2021, the total number of required permissions must not exceed 400. For more information, see Limits on requested permissions per app. Not nullable. Supports $filter (eq, not, ge, le).
     * @return array<RequiredResourceAccess>|null
    */
    public function getRequiredResourceAccess(): ?array {
        $val = $this->getBackingStore()->get('requiredResourceAccess');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, RequiredResourceAccess::class);
            /** @var array<RequiredResourceAccess>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requiredResourceAccess'");
    }

    /**
     * Gets the samlMetadataUrl property value. The URL where the service exposes SAML metadata for federation. This property is valid only for single-tenant applications. Nullable.
     * @return string|null
    */
    public function getSamlMetadataUrl(): ?string {
        $val = $this->getBackingStore()->get('samlMetadataUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'samlMetadataUrl'");
    }

    /**
     * Gets the serviceManagementReference property value. References application or service contact information from a Service or Asset Management database. Nullable.
     * @return string|null
    */
    public function getServiceManagementReference(): ?string {
        $val = $this->getBackingStore()->get('serviceManagementReference');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceManagementReference'");
    }

    /**
     * Gets the servicePrincipalLockConfiguration property value. Specifies whether sensitive properties of a multitenant application should be locked for editing after the application is provisioned in a tenant. Nullable. null by default.
     * @return ServicePrincipalLockConfiguration|null
    */
    public function getServicePrincipalLockConfiguration(): ?ServicePrincipalLockConfiguration {
        $val = $this->getBackingStore()->get('servicePrincipalLockConfiguration');
        if (is_null($val) || $val instanceof ServicePrincipalLockConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipalLockConfiguration'");
    }

    /**
     * Gets the signInAudience property value. Specifies the Microsoft accounts that are supported for the current application. The possible values are: AzureADMyOrg (default), AzureADMultipleOrgs, AzureADandPersonalMicrosoftAccount, and PersonalMicrosoftAccount. See more in the table. The value of this object also limits the number of permissions an app can request. For more information, see Limits on requested permissions per app. The value for this property has implications on other app object properties. As a result, if you change this property, you might need to change other properties first. For more information, see Validation differences for signInAudience.Supports $filter (eq, ne, not).
     * @return string|null
    */
    public function getSignInAudience(): ?string {
        $val = $this->getBackingStore()->get('signInAudience');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signInAudience'");
    }

    /**
     * Gets the spa property value. Specifies settings for a single-page application, including sign out URLs and redirect URIs for authorization codes and access tokens.
     * @return SpaApplication|null
    */
    public function getSpa(): ?SpaApplication {
        $val = $this->getBackingStore()->get('spa');
        if (is_null($val) || $val instanceof SpaApplication) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'spa'");
    }

    /**
     * Gets the synchronization property value. Represents the capability for Microsoft Entra identity synchronization through the Microsoft Graph API.
     * @return Synchronization|null
    */
    public function getSynchronization(): ?Synchronization {
        $val = $this->getBackingStore()->get('synchronization');
        if (is_null($val) || $val instanceof Synchronization) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'synchronization'");
    }

    /**
     * Gets the tags property value. Custom strings that can be used to categorize and identify the application. Not nullable. Strings added here will also appear in the tags property of any associated service principals.Supports $filter (eq, not, ge, le, startsWith) and $search.
     * @return array<string>|null
    */
    public function getTags(): ?array {
        $val = $this->getBackingStore()->get('tags');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tags'");
    }

    /**
     * Gets the tokenEncryptionKeyId property value. Specifies the keyId of a public key from the keyCredentials collection. When configured, Microsoft Entra ID encrypts all the tokens it emits by using the key this property points to. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user.
     * @return string|null
    */
    public function getTokenEncryptionKeyId(): ?string {
        $val = $this->getBackingStore()->get('tokenEncryptionKeyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tokenEncryptionKeyId'");
    }

    /**
     * Gets the tokenIssuancePolicies property value. The tokenIssuancePolicies property
     * @return array<TokenIssuancePolicy>|null
    */
    public function getTokenIssuancePolicies(): ?array {
        $val = $this->getBackingStore()->get('tokenIssuancePolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TokenIssuancePolicy::class);
            /** @var array<TokenIssuancePolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tokenIssuancePolicies'");
    }

    /**
     * Gets the tokenLifetimePolicies property value. The tokenLifetimePolicies property
     * @return array<TokenLifetimePolicy>|null
    */
    public function getTokenLifetimePolicies(): ?array {
        $val = $this->getBackingStore()->get('tokenLifetimePolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TokenLifetimePolicy::class);
            /** @var array<TokenLifetimePolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tokenLifetimePolicies'");
    }

    /**
     * Gets the uniqueName property value. The unique identifier that can be assigned to an application and used as an alternate key. Immutable. Read-only.
     * @return string|null
    */
    public function getUniqueName(): ?string {
        $val = $this->getBackingStore()->get('uniqueName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uniqueName'");
    }

    /**
     * Gets the verifiedPublisher property value. Specifies the verified publisher of the application. For more information about how publisher verification helps support application security, trustworthiness, and compliance, see Publisher verification.
     * @return VerifiedPublisher|null
    */
    public function getVerifiedPublisher(): ?VerifiedPublisher {
        $val = $this->getBackingStore()->get('verifiedPublisher');
        if (is_null($val) || $val instanceof VerifiedPublisher) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verifiedPublisher'");
    }

    /**
     * Gets the web property value. Specifies settings for a web application.
     * @return WebApplication|null
    */
    public function getWeb(): ?WebApplication {
        $val = $this->getBackingStore()->get('web');
        if (is_null($val) || $val instanceof WebApplication) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'web'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('addIns', $this->getAddIns());
        $writer->writeObjectValue('api', $this->getApi());
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeStringValue('applicationTemplateId', $this->getApplicationTemplateId());
        $writer->writeCollectionOfObjectValues('appManagementPolicies', $this->getAppManagementPolicies());
        $writer->writeCollectionOfObjectValues('appRoles', $this->getAppRoles());
        $writer->writeObjectValue('certification', $this->getCertification());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('createdOnBehalfOf', $this->getCreatedOnBehalfOf());
        $writer->writeStringValue('defaultRedirectUri', $this->getDefaultRedirectUri());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('disabledByMicrosoftStatus', $this->getDisabledByMicrosoftStatus());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('extensionProperties', $this->getExtensionProperties());
        $writer->writeCollectionOfObjectValues('federatedIdentityCredentials', $this->getFederatedIdentityCredentials());
        $writer->writeStringValue('groupMembershipClaims', $this->getGroupMembershipClaims());
        $writer->writeCollectionOfObjectValues('homeRealmDiscoveryPolicies', $this->getHomeRealmDiscoveryPolicies());
        $writer->writeCollectionOfPrimitiveValues('identifierUris', $this->getIdentifierUris());
        $writer->writeObjectValue('info', $this->getInfo());
        $writer->writeBooleanValue('isDeviceOnlyAuthSupported', $this->getIsDeviceOnlyAuthSupported());
        $writer->writeBooleanValue('isFallbackPublicClient', $this->getIsFallbackPublicClient());
        $writer->writeCollectionOfObjectValues('keyCredentials', $this->getKeyCredentials());
        $writer->writeBinaryContent('logo', $this->getLogo());
        $writer->writeStringValue('notes', $this->getNotes());
        $writer->writeBooleanValue('oauth2RequirePostResponse', $this->getOauth2RequirePostResponse());
        $writer->writeObjectValue('optionalClaims', $this->getOptionalClaims());
        $writer->writeCollectionOfObjectValues('owners', $this->getOwners());
        $writer->writeObjectValue('parentalControlSettings', $this->getParentalControlSettings());
        $writer->writeCollectionOfObjectValues('passwordCredentials', $this->getPasswordCredentials());
        $writer->writeObjectValue('publicClient', $this->getPublicClient());
        $writer->writeStringValue('publisherDomain', $this->getPublisherDomain());
        $writer->writeObjectValue('requestSignatureVerification', $this->getRequestSignatureVerification());
        $writer->writeCollectionOfObjectValues('requiredResourceAccess', $this->getRequiredResourceAccess());
        $writer->writeStringValue('samlMetadataUrl', $this->getSamlMetadataUrl());
        $writer->writeStringValue('serviceManagementReference', $this->getServiceManagementReference());
        $writer->writeObjectValue('servicePrincipalLockConfiguration', $this->getServicePrincipalLockConfiguration());
        $writer->writeStringValue('signInAudience', $this->getSignInAudience());
        $writer->writeObjectValue('spa', $this->getSpa());
        $writer->writeObjectValue('synchronization', $this->getSynchronization());
        $writer->writeCollectionOfPrimitiveValues('tags', $this->getTags());
        $writer->writeStringValue('tokenEncryptionKeyId', $this->getTokenEncryptionKeyId());
        $writer->writeCollectionOfObjectValues('tokenIssuancePolicies', $this->getTokenIssuancePolicies());
        $writer->writeCollectionOfObjectValues('tokenLifetimePolicies', $this->getTokenLifetimePolicies());
        $writer->writeStringValue('uniqueName', $this->getUniqueName());
        $writer->writeObjectValue('verifiedPublisher', $this->getVerifiedPublisher());
        $writer->writeObjectValue('web', $this->getWeb());
    }

    /**
     * Sets the addIns property value. Defines custom behavior that a consuming service can use to call an app in specific contexts. For example, applications that can render file streams can set the addIns property for its 'FileHandler' functionality. This lets services like Microsoft 365 call the application in the context of a document the user is working on.
     * @param array<AddIn>|null $value Value to set for the addIns property.
    */
    public function setAddIns(?array $value): void {
        $this->getBackingStore()->set('addIns', $value);
    }

    /**
     * Sets the api property value. Specifies settings for an application that implements a web API.
     * @param ApiApplication|null $value Value to set for the api property.
    */
    public function setApi(?ApiApplication $value): void {
        $this->getBackingStore()->set('api', $value);
    }

    /**
     * Sets the appId property value. The unique identifier for the application that is assigned to an application by Microsoft Entra ID. Not nullable. Read-only. Alternate key. Supports $filter (eq).
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the applicationTemplateId property value. Unique identifier of the applicationTemplate. Supports $filter (eq, not, ne). Read-only. null if the app wasn't created from an application template.
     * @param string|null $value Value to set for the applicationTemplateId property.
    */
    public function setApplicationTemplateId(?string $value): void {
        $this->getBackingStore()->set('applicationTemplateId', $value);
    }

    /**
     * Sets the appManagementPolicies property value. The appManagementPolicy applied to this application.
     * @param array<AppManagementPolicy>|null $value Value to set for the appManagementPolicies property.
    */
    public function setAppManagementPolicies(?array $value): void {
        $this->getBackingStore()->set('appManagementPolicies', $value);
    }

    /**
     * Sets the appRoles property value. The collection of roles defined for the application. With app role assignments, these roles can be assigned to users, groups, or service principals associated with other applications. Not nullable.
     * @param array<AppRole>|null $value Value to set for the appRoles property.
    */
    public function setAppRoles(?array $value): void {
        $this->getBackingStore()->set('appRoles', $value);
    }

    /**
     * Sets the certification property value. Specifies the certification status of the application.
     * @param Certification|null $value Value to set for the certification property.
    */
    public function setCertification(?Certification $value): void {
        $this->getBackingStore()->set('certification', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time the application was registered. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.  Supports $filter (eq, ne, not, ge, le, in, and eq on null values) and $orderby.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the createdOnBehalfOf property value. Supports $filter (/$count eq 0, /$count ne 0). Read-only.
     * @param DirectoryObject|null $value Value to set for the createdOnBehalfOf property.
    */
    public function setCreatedOnBehalfOf(?DirectoryObject $value): void {
        $this->getBackingStore()->set('createdOnBehalfOf', $value);
    }

    /**
     * Sets the defaultRedirectUri property value. The defaultRedirectUri property
     * @param string|null $value Value to set for the defaultRedirectUri property.
    */
    public function setDefaultRedirectUri(?string $value): void {
        $this->getBackingStore()->set('defaultRedirectUri', $value);
    }

    /**
     * Sets the description property value. Free text field to provide a description of the application object to end users. The maximum allowed size is 1,024 characters. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the disabledByMicrosoftStatus property value. Specifies whether Microsoft has disabled the registered application. Possible values are: null (default value), NotDisabled, and DisabledDueToViolationOfServicesAgreement (reasons include suspicious, abusive, or malicious activity, or a violation of the Microsoft Services Agreement).  Supports $filter (eq, ne, not).
     * @param string|null $value Value to set for the disabledByMicrosoftStatus property.
    */
    public function setDisabledByMicrosoftStatus(?string $value): void {
        $this->getBackingStore()->set('disabledByMicrosoftStatus', $value);
    }

    /**
     * Sets the displayName property value. The display name for the application. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderby.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the extensionProperties property value. Read-only. Nullable. Supports $expand and $filter (/$count eq 0, /$count ne 0).
     * @param array<ExtensionProperty>|null $value Value to set for the extensionProperties property.
    */
    public function setExtensionProperties(?array $value): void {
        $this->getBackingStore()->set('extensionProperties', $value);
    }

    /**
     * Sets the federatedIdentityCredentials property value. Federated identities for applications. Supports $expand and $filter (startsWith, /$count eq 0, /$count ne 0).
     * @param array<FederatedIdentityCredential>|null $value Value to set for the federatedIdentityCredentials property.
    */
    public function setFederatedIdentityCredentials(?array $value): void {
        $this->getBackingStore()->set('federatedIdentityCredentials', $value);
    }

    /**
     * Sets the groupMembershipClaims property value. Configures the groups claim issued in a user or OAuth 2.0 access token that the application expects. To set this attribute, use one of the following valid string values: None, SecurityGroup (for security groups and Microsoft Entra roles), All (this gets all of the security groups, distribution groups, and Microsoft Entra directory roles that the signed-in user is a member of).
     * @param string|null $value Value to set for the groupMembershipClaims property.
    */
    public function setGroupMembershipClaims(?string $value): void {
        $this->getBackingStore()->set('groupMembershipClaims', $value);
    }

    /**
     * Sets the homeRealmDiscoveryPolicies property value. The homeRealmDiscoveryPolicies property
     * @param array<HomeRealmDiscoveryPolicy>|null $value Value to set for the homeRealmDiscoveryPolicies property.
    */
    public function setHomeRealmDiscoveryPolicies(?array $value): void {
        $this->getBackingStore()->set('homeRealmDiscoveryPolicies', $value);
    }

    /**
     * Sets the identifierUris property value. Also known as App ID URI, this value is set when an application is used as a resource app. The identifierUris acts as the prefix for the scopes you reference in your API's code, and it must be globally unique. You can use the default value provided, which is in the form api://<appId>, or specify a more readable URI like https://contoso.com/api. For more information on valid identifierUris patterns and best practices, see Microsoft Entra application registration security best practices. Not nullable. Supports $filter (eq, ne, ge, le, startsWith).
     * @param array<string>|null $value Value to set for the identifierUris property.
    */
    public function setIdentifierUris(?array $value): void {
        $this->getBackingStore()->set('identifierUris', $value);
    }

    /**
     * Sets the info property value. Basic profile information of the application such as  app's marketing, support, terms of service and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more info, see How to: Add Terms of service and privacy statement for registered Microsoft Entra apps. Supports $filter (eq, ne, not, ge, le, and eq on null values).
     * @param InformationalUrl|null $value Value to set for the info property.
    */
    public function setInfo(?InformationalUrl $value): void {
        $this->getBackingStore()->set('info', $value);
    }

    /**
     * Sets the isDeviceOnlyAuthSupported property value. Specifies whether this application supports device authentication without a user. The default is false.
     * @param bool|null $value Value to set for the isDeviceOnlyAuthSupported property.
    */
    public function setIsDeviceOnlyAuthSupported(?bool $value): void {
        $this->getBackingStore()->set('isDeviceOnlyAuthSupported', $value);
    }

    /**
     * Sets the isFallbackPublicClient property value. Specifies the fallback application type as public client, such as an installed application running on a mobile device. The default value is false, which means the fallback application type is confidential client such as a web app. There are certain scenarios where Microsoft Entra ID can't determine the client application type. For example, the ROPC flow where it's configured without specifying a redirect URI. In those cases, Microsoft Entra ID interprets the application type based on the value of this property.
     * @param bool|null $value Value to set for the isFallbackPublicClient property.
    */
    public function setIsFallbackPublicClient(?bool $value): void {
        $this->getBackingStore()->set('isFallbackPublicClient', $value);
    }

    /**
     * Sets the keyCredentials property value. The collection of key credentials associated with the application. Not nullable. Supports $filter (eq, not, ge, le).
     * @param array<KeyCredential>|null $value Value to set for the keyCredentials property.
    */
    public function setKeyCredentials(?array $value): void {
        $this->getBackingStore()->set('keyCredentials', $value);
    }

    /**
     * Sets the logo property value. The main logo for the application. Not nullable.
     * @param StreamInterface|null $value Value to set for the logo property.
    */
    public function setLogo(?StreamInterface $value): void {
        $this->getBackingStore()->set('logo', $value);
    }

    /**
     * Sets the notes property value. Notes relevant for the management of the application.
     * @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value): void {
        $this->getBackingStore()->set('notes', $value);
    }

    /**
     * Sets the oauth2RequirePostResponse property value. The oauth2RequirePostResponse property
     * @param bool|null $value Value to set for the oauth2RequirePostResponse property.
    */
    public function setOauth2RequirePostResponse(?bool $value): void {
        $this->getBackingStore()->set('oauth2RequirePostResponse', $value);
    }

    /**
     * Sets the optionalClaims property value. Application developers can configure optional claims in their Microsoft Entra applications to specify the claims that are sent to their application by the Microsoft security token service. For more information, see How to: Provide optional claims to your app.
     * @param OptionalClaims|null $value Value to set for the optionalClaims property.
    */
    public function setOptionalClaims(?OptionalClaims $value): void {
        $this->getBackingStore()->set('optionalClaims', $value);
    }

    /**
     * Sets the owners property value. Directory objects that are owners of the application. Read-only. Nullable. Supports $expand, $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1), and $select nested in $expand.
     * @param array<DirectoryObject>|null $value Value to set for the owners property.
    */
    public function setOwners(?array $value): void {
        $this->getBackingStore()->set('owners', $value);
    }

    /**
     * Sets the parentalControlSettings property value. Specifies parental control settings for an application.
     * @param ParentalControlSettings|null $value Value to set for the parentalControlSettings property.
    */
    public function setParentalControlSettings(?ParentalControlSettings $value): void {
        $this->getBackingStore()->set('parentalControlSettings', $value);
    }

    /**
     * Sets the passwordCredentials property value. The collection of password credentials associated with the application. Not nullable.
     * @param array<PasswordCredential>|null $value Value to set for the passwordCredentials property.
    */
    public function setPasswordCredentials(?array $value): void {
        $this->getBackingStore()->set('passwordCredentials', $value);
    }

    /**
     * Sets the publicClient property value. Specifies settings for installed clients such as desktop or mobile devices.
     * @param PublicClientApplication|null $value Value to set for the publicClient property.
    */
    public function setPublicClient(?PublicClientApplication $value): void {
        $this->getBackingStore()->set('publicClient', $value);
    }

    /**
     * Sets the publisherDomain property value. The verified publisher domain for the application. Read-only. For more information, see How to: Configure an application's publisher domain. Supports $filter (eq, ne, ge, le, startsWith).
     * @param string|null $value Value to set for the publisherDomain property.
    */
    public function setPublisherDomain(?string $value): void {
        $this->getBackingStore()->set('publisherDomain', $value);
    }

    /**
     * Sets the requestSignatureVerification property value. Specifies whether this application requires Microsoft Entra ID to verify the signed authentication requests.
     * @param RequestSignatureVerification|null $value Value to set for the requestSignatureVerification property.
    */
    public function setRequestSignatureVerification(?RequestSignatureVerification $value): void {
        $this->getBackingStore()->set('requestSignatureVerification', $value);
    }

    /**
     * Sets the requiredResourceAccess property value. Specifies the resources that the application needs to access. This property also specifies the set of delegated permissions and application roles that it needs for each of those resources. This configuration of access to the required resources drives the consent experience. No more than 50 resource services (APIs) can be configured. Beginning mid-October 2021, the total number of required permissions must not exceed 400. For more information, see Limits on requested permissions per app. Not nullable. Supports $filter (eq, not, ge, le).
     * @param array<RequiredResourceAccess>|null $value Value to set for the requiredResourceAccess property.
    */
    public function setRequiredResourceAccess(?array $value): void {
        $this->getBackingStore()->set('requiredResourceAccess', $value);
    }

    /**
     * Sets the samlMetadataUrl property value. The URL where the service exposes SAML metadata for federation. This property is valid only for single-tenant applications. Nullable.
     * @param string|null $value Value to set for the samlMetadataUrl property.
    */
    public function setSamlMetadataUrl(?string $value): void {
        $this->getBackingStore()->set('samlMetadataUrl', $value);
    }

    /**
     * Sets the serviceManagementReference property value. References application or service contact information from a Service or Asset Management database. Nullable.
     * @param string|null $value Value to set for the serviceManagementReference property.
    */
    public function setServiceManagementReference(?string $value): void {
        $this->getBackingStore()->set('serviceManagementReference', $value);
    }

    /**
     * Sets the servicePrincipalLockConfiguration property value. Specifies whether sensitive properties of a multitenant application should be locked for editing after the application is provisioned in a tenant. Nullable. null by default.
     * @param ServicePrincipalLockConfiguration|null $value Value to set for the servicePrincipalLockConfiguration property.
    */
    public function setServicePrincipalLockConfiguration(?ServicePrincipalLockConfiguration $value): void {
        $this->getBackingStore()->set('servicePrincipalLockConfiguration', $value);
    }

    /**
     * Sets the signInAudience property value. Specifies the Microsoft accounts that are supported for the current application. The possible values are: AzureADMyOrg (default), AzureADMultipleOrgs, AzureADandPersonalMicrosoftAccount, and PersonalMicrosoftAccount. See more in the table. The value of this object also limits the number of permissions an app can request. For more information, see Limits on requested permissions per app. The value for this property has implications on other app object properties. As a result, if you change this property, you might need to change other properties first. For more information, see Validation differences for signInAudience.Supports $filter (eq, ne, not).
     * @param string|null $value Value to set for the signInAudience property.
    */
    public function setSignInAudience(?string $value): void {
        $this->getBackingStore()->set('signInAudience', $value);
    }

    /**
     * Sets the spa property value. Specifies settings for a single-page application, including sign out URLs and redirect URIs for authorization codes and access tokens.
     * @param SpaApplication|null $value Value to set for the spa property.
    */
    public function setSpa(?SpaApplication $value): void {
        $this->getBackingStore()->set('spa', $value);
    }

    /**
     * Sets the synchronization property value. Represents the capability for Microsoft Entra identity synchronization through the Microsoft Graph API.
     * @param Synchronization|null $value Value to set for the synchronization property.
    */
    public function setSynchronization(?Synchronization $value): void {
        $this->getBackingStore()->set('synchronization', $value);
    }

    /**
     * Sets the tags property value. Custom strings that can be used to categorize and identify the application. Not nullable. Strings added here will also appear in the tags property of any associated service principals.Supports $filter (eq, not, ge, le, startsWith) and $search.
     * @param array<string>|null $value Value to set for the tags property.
    */
    public function setTags(?array $value): void {
        $this->getBackingStore()->set('tags', $value);
    }

    /**
     * Sets the tokenEncryptionKeyId property value. Specifies the keyId of a public key from the keyCredentials collection. When configured, Microsoft Entra ID encrypts all the tokens it emits by using the key this property points to. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user.
     * @param string|null $value Value to set for the tokenEncryptionKeyId property.
    */
    public function setTokenEncryptionKeyId(?string $value): void {
        $this->getBackingStore()->set('tokenEncryptionKeyId', $value);
    }

    /**
     * Sets the tokenIssuancePolicies property value. The tokenIssuancePolicies property
     * @param array<TokenIssuancePolicy>|null $value Value to set for the tokenIssuancePolicies property.
    */
    public function setTokenIssuancePolicies(?array $value): void {
        $this->getBackingStore()->set('tokenIssuancePolicies', $value);
    }

    /**
     * Sets the tokenLifetimePolicies property value. The tokenLifetimePolicies property
     * @param array<TokenLifetimePolicy>|null $value Value to set for the tokenLifetimePolicies property.
    */
    public function setTokenLifetimePolicies(?array $value): void {
        $this->getBackingStore()->set('tokenLifetimePolicies', $value);
    }

    /**
     * Sets the uniqueName property value. The unique identifier that can be assigned to an application and used as an alternate key. Immutable. Read-only.
     * @param string|null $value Value to set for the uniqueName property.
    */
    public function setUniqueName(?string $value): void {
        $this->getBackingStore()->set('uniqueName', $value);
    }

    /**
     * Sets the verifiedPublisher property value. Specifies the verified publisher of the application. For more information about how publisher verification helps support application security, trustworthiness, and compliance, see Publisher verification.
     * @param VerifiedPublisher|null $value Value to set for the verifiedPublisher property.
    */
    public function setVerifiedPublisher(?VerifiedPublisher $value): void {
        $this->getBackingStore()->set('verifiedPublisher', $value);
    }

    /**
     * Sets the web property value. Specifies settings for a web application.
     * @param WebApplication|null $value Value to set for the web property.
    */
    public function setWeb(?WebApplication $value): void {
        $this->getBackingStore()->set('web', $value);
    }

}
