<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
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
     * Gets the addIns property value. Defines custom behavior that a consuming service can use to call an app in specific contexts. For example, applications that can render file streams may set the addIns property for its 'FileHandler' functionality. This will let services like Office 365 call the application in the context of a document the user is working on.
     * @return array<AddIn>|null
    */
    public function getAddIns(): ?array {
        return $this->getBackingStore()->get('addIns');
    }

    /**
     * Gets the api property value. Specifies settings for an application that implements a web API.
     * @return ApiApplication|null
    */
    public function getApi(): ?ApiApplication {
        return $this->getBackingStore()->get('api');
    }

    /**
     * Gets the appId property value. The unique identifier for the application that is assigned to an application by Azure AD. Not nullable. Read-only. Supports $filter (eq).
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->getBackingStore()->get('appId');
    }

    /**
     * Gets the applicationTemplateId property value. Unique identifier of the applicationTemplate. Supports $filter (eq, not, ne).
     * @return string|null
    */
    public function getApplicationTemplateId(): ?string {
        return $this->getBackingStore()->get('applicationTemplateId');
    }

    /**
     * Gets the appManagementPolicies property value. The appManagementPolicy applied to this application.
     * @return array<AppManagementPolicy>|null
    */
    public function getAppManagementPolicies(): ?array {
        return $this->getBackingStore()->get('appManagementPolicies');
    }

    /**
     * Gets the appRoles property value. The collection of roles defined for the application. With app role assignments, these roles can be assigned to users, groups, or service principals associated with other applications. Not nullable.
     * @return array<AppRole>|null
    */
    public function getAppRoles(): ?array {
        return $this->getBackingStore()->get('appRoles');
    }

    /**
     * Gets the certification property value. Specifies the certification status of the application.
     * @return Certification|null
    */
    public function getCertification(): ?Certification {
        return $this->getBackingStore()->get('certification');
    }

    /**
     * Gets the createdDateTime property value. The date and time the application was registered. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.  Supports $filter (eq, ne, not, ge, le, in, and eq on null values) and $orderBy.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the createdOnBehalfOf property value. Supports $filter (/$count eq 0, /$count ne 0). Read-only.
     * @return DirectoryObject|null
    */
    public function getCreatedOnBehalfOf(): ?DirectoryObject {
        return $this->getBackingStore()->get('createdOnBehalfOf');
    }

    /**
     * Gets the defaultRedirectUri property value. The defaultRedirectUri property
     * @return string|null
    */
    public function getDefaultRedirectUri(): ?string {
        return $this->getBackingStore()->get('defaultRedirectUri');
    }

    /**
     * Gets the description property value. Free text field to provide a description of the application object to end users. The maximum allowed size is 1024 characters. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the disabledByMicrosoftStatus property value. Specifies whether Microsoft has disabled the registered application. Possible values are: null (default value), NotDisabled, and DisabledDueToViolationOfServicesAgreement (reasons may include suspicious, abusive, or malicious activity, or a violation of the Microsoft Services Agreement).  Supports $filter (eq, ne, not).
     * @return string|null
    */
    public function getDisabledByMicrosoftStatus(): ?string {
        return $this->getBackingStore()->get('disabledByMicrosoftStatus');
    }

    /**
     * Gets the displayName property value. The display name for the application. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the extensionProperties property value. Read-only. Nullable. Supports $expand and $filter (/$count eq 0, /$count ne 0).
     * @return array<ExtensionProperty>|null
    */
    public function getExtensionProperties(): ?array {
        return $this->getBackingStore()->get('extensionProperties');
    }

    /**
     * Gets the federatedIdentityCredentials property value. Federated identities for applications. Supports $expand and $filter (startsWith, /$count eq 0, /$count ne 0).
     * @return array<FederatedIdentityCredential>|null
    */
    public function getFederatedIdentityCredentials(): ?array {
        return $this->getBackingStore()->get('federatedIdentityCredentials');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
            'identifierUris' => fn(ParseNode $n) => $o->setIdentifierUris($n->getCollectionOfPrimitiveValues()),
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
            'signInAudience' => fn(ParseNode $n) => $o->setSignInAudience($n->getStringValue()),
            'spa' => fn(ParseNode $n) => $o->setSpa($n->getObjectValue([SpaApplication::class, 'createFromDiscriminatorValue'])),
            'synchronization' => fn(ParseNode $n) => $o->setSynchronization($n->getObjectValue([Synchronization::class, 'createFromDiscriminatorValue'])),
            'tags' => fn(ParseNode $n) => $o->setTags($n->getCollectionOfPrimitiveValues()),
            'tokenEncryptionKeyId' => fn(ParseNode $n) => $o->setTokenEncryptionKeyId($n->getStringValue()),
            'tokenIssuancePolicies' => fn(ParseNode $n) => $o->setTokenIssuancePolicies($n->getCollectionOfObjectValues([TokenIssuancePolicy::class, 'createFromDiscriminatorValue'])),
            'tokenLifetimePolicies' => fn(ParseNode $n) => $o->setTokenLifetimePolicies($n->getCollectionOfObjectValues([TokenLifetimePolicy::class, 'createFromDiscriminatorValue'])),
            'verifiedPublisher' => fn(ParseNode $n) => $o->setVerifiedPublisher($n->getObjectValue([VerifiedPublisher::class, 'createFromDiscriminatorValue'])),
            'web' => fn(ParseNode $n) => $o->setWeb($n->getObjectValue([WebApplication::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the groupMembershipClaims property value. Configures the groups claim issued in a user or OAuth 2.0 access token that the application expects. To set this attribute, use one of the following valid string values: None, SecurityGroup (for security groups and Azure AD roles), All (this gets all of the security groups, distribution groups, and Azure AD directory roles that the signed-in user is a member of).
     * @return string|null
    */
    public function getGroupMembershipClaims(): ?string {
        return $this->getBackingStore()->get('groupMembershipClaims');
    }

    /**
     * Gets the homeRealmDiscoveryPolicies property value. The homeRealmDiscoveryPolicies property
     * @return array<HomeRealmDiscoveryPolicy>|null
    */
    public function getHomeRealmDiscoveryPolicies(): ?array {
        return $this->getBackingStore()->get('homeRealmDiscoveryPolicies');
    }

    /**
     * Gets the identifierUris property value. Also known as App ID URI, this value is set when an application is used as a resource app. The identifierUris acts as the prefix for the scopes you'll reference in your API's code, and it must be globally unique. You can use the default value provided, which is in the form api://<application-client-id>, or specify a more readable URI like https://contoso.com/api. For more information on valid identifierUris patterns and best practices, see Azure AD application registration security best practices. Not nullable. Supports $filter (eq, ne, ge, le, startsWith).
     * @return array<string>|null
    */
    public function getIdentifierUris(): ?array {
        return $this->getBackingStore()->get('identifierUris');
    }

    /**
     * Gets the info property value. Basic profile information of the application such as  app's marketing, support, terms of service and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more info, see How to: Add Terms of service and privacy statement for registered Azure AD apps. Supports $filter (eq, ne, not, ge, le, and eq on null values).
     * @return InformationalUrl|null
    */
    public function getInfo(): ?InformationalUrl {
        return $this->getBackingStore()->get('info');
    }

    /**
     * Gets the isDeviceOnlyAuthSupported property value. Specifies whether this application supports device authentication without a user. The default is false.
     * @return bool|null
    */
    public function getIsDeviceOnlyAuthSupported(): ?bool {
        return $this->getBackingStore()->get('isDeviceOnlyAuthSupported');
    }

    /**
     * Gets the isFallbackPublicClient property value. Specifies the fallback application type as public client, such as an installed application running on a mobile device. The default value is false which means the fallback application type is confidential client such as a web app. There are certain scenarios where Azure AD cannot determine the client application type. For example, the ROPC flow where it is configured without specifying a redirect URI. In those cases Azure AD interprets the application type based on the value of this property.
     * @return bool|null
    */
    public function getIsFallbackPublicClient(): ?bool {
        return $this->getBackingStore()->get('isFallbackPublicClient');
    }

    /**
     * Gets the keyCredentials property value. The collection of key credentials associated with the application. Not nullable. Supports $filter (eq, not, ge, le).
     * @return array<KeyCredential>|null
    */
    public function getKeyCredentials(): ?array {
        return $this->getBackingStore()->get('keyCredentials');
    }

    /**
     * Gets the logo property value. The main logo for the application. Not nullable.
     * @return StreamInterface|null
    */
    public function getLogo(): ?StreamInterface {
        return $this->getBackingStore()->get('logo');
    }

    /**
     * Gets the notes property value. Notes relevant for the management of the application.
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->getBackingStore()->get('notes');
    }

    /**
     * Gets the oauth2RequirePostResponse property value. The oauth2RequirePostResponse property
     * @return bool|null
    */
    public function getOauth2RequirePostResponse(): ?bool {
        return $this->getBackingStore()->get('oauth2RequirePostResponse');
    }

    /**
     * Gets the optionalClaims property value. Application developers can configure optional claims in their Azure AD applications to specify the claims that are sent to their application by the Microsoft security token service. For more information, see How to: Provide optional claims to your app.
     * @return OptionalClaims|null
    */
    public function getOptionalClaims(): ?OptionalClaims {
        return $this->getBackingStore()->get('optionalClaims');
    }

    /**
     * Gets the owners property value. Directory objects that are owners of the application. Read-only. Nullable. Supports $expand and $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1).
     * @return array<DirectoryObject>|null
    */
    public function getOwners(): ?array {
        return $this->getBackingStore()->get('owners');
    }

    /**
     * Gets the parentalControlSettings property value. Specifies parental control settings for an application.
     * @return ParentalControlSettings|null
    */
    public function getParentalControlSettings(): ?ParentalControlSettings {
        return $this->getBackingStore()->get('parentalControlSettings');
    }

    /**
     * Gets the passwordCredentials property value. The collection of password credentials associated with the application. Not nullable.
     * @return array<PasswordCredential>|null
    */
    public function getPasswordCredentials(): ?array {
        return $this->getBackingStore()->get('passwordCredentials');
    }

    /**
     * Gets the publicClient property value. Specifies settings for installed clients such as desktop or mobile devices.
     * @return PublicClientApplication|null
    */
    public function getPublicClient(): ?PublicClientApplication {
        return $this->getBackingStore()->get('publicClient');
    }

    /**
     * Gets the publisherDomain property value. The verified publisher domain for the application. Read-only. For more information, see How to: Configure an application's publisher domain. Supports $filter (eq, ne, ge, le, startsWith).
     * @return string|null
    */
    public function getPublisherDomain(): ?string {
        return $this->getBackingStore()->get('publisherDomain');
    }

    /**
     * Gets the requestSignatureVerification property value. Specifies whether this application requires Azure AD to verify the signed authentication requests.
     * @return RequestSignatureVerification|null
    */
    public function getRequestSignatureVerification(): ?RequestSignatureVerification {
        return $this->getBackingStore()->get('requestSignatureVerification');
    }

    /**
     * Gets the requiredResourceAccess property value. Specifies the resources that the application needs to access. This property also specifies the set of delegated permissions and application roles that it needs for each of those resources. This configuration of access to the required resources drives the consent experience. No more than 50 resource services (APIs) can be configured. Beginning mid-October 2021, the total number of required permissions must not exceed 400. For more information, see Limits on requested permissions per app. Not nullable. Supports $filter (eq, not, ge, le).
     * @return array<RequiredResourceAccess>|null
    */
    public function getRequiredResourceAccess(): ?array {
        return $this->getBackingStore()->get('requiredResourceAccess');
    }

    /**
     * Gets the samlMetadataUrl property value. The URL where the service exposes SAML metadata for federation. This property is valid only for single-tenant applications. Nullable.
     * @return string|null
    */
    public function getSamlMetadataUrl(): ?string {
        return $this->getBackingStore()->get('samlMetadataUrl');
    }

    /**
     * Gets the serviceManagementReference property value. References application or service contact information from a Service or Asset Management database. Nullable.
     * @return string|null
    */
    public function getServiceManagementReference(): ?string {
        return $this->getBackingStore()->get('serviceManagementReference');
    }

    /**
     * Gets the signInAudience property value. Specifies the Microsoft accounts that are supported for the current application. The possible values are: AzureADMyOrg, AzureADMultipleOrgs, AzureADandPersonalMicrosoftAccount (default), and PersonalMicrosoftAccount. See more in the table. The value of this object also limits the number of permissions an app can request. For more information, see Limits on requested permissions per app. The value for this property has implications on other app object properties. As a result, if you change this property, you may need to change other properties first. For more information, see Validation differences for signInAudience.Supports $filter (eq, ne, not).
     * @return string|null
    */
    public function getSignInAudience(): ?string {
        return $this->getBackingStore()->get('signInAudience');
    }

    /**
     * Gets the spa property value. Specifies settings for a single-page application, including sign out URLs and redirect URIs for authorization codes and access tokens.
     * @return SpaApplication|null
    */
    public function getSpa(): ?SpaApplication {
        return $this->getBackingStore()->get('spa');
    }

    /**
     * Gets the synchronization property value. The synchronization property
     * @return Synchronization|null
    */
    public function getSynchronization(): ?Synchronization {
        return $this->getBackingStore()->get('synchronization');
    }

    /**
     * Gets the tags property value. Custom strings that can be used to categorize and identify the application. Not nullable. Strings added here will also appear in the tags property of any associated service principals.Supports $filter (eq, not, ge, le, startsWith) and $search.
     * @return array<string>|null
    */
    public function getTags(): ?array {
        return $this->getBackingStore()->get('tags');
    }

    /**
     * Gets the tokenEncryptionKeyId property value. Specifies the keyId of a public key from the keyCredentials collection. When configured, Azure AD encrypts all the tokens it emits by using the key this property points to. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user.
     * @return string|null
    */
    public function getTokenEncryptionKeyId(): ?string {
        return $this->getBackingStore()->get('tokenEncryptionKeyId');
    }

    /**
     * Gets the tokenIssuancePolicies property value. The tokenIssuancePolicies property
     * @return array<TokenIssuancePolicy>|null
    */
    public function getTokenIssuancePolicies(): ?array {
        return $this->getBackingStore()->get('tokenIssuancePolicies');
    }

    /**
     * Gets the tokenLifetimePolicies property value. The tokenLifetimePolicies property
     * @return array<TokenLifetimePolicy>|null
    */
    public function getTokenLifetimePolicies(): ?array {
        return $this->getBackingStore()->get('tokenLifetimePolicies');
    }

    /**
     * Gets the verifiedPublisher property value. Specifies the verified publisher of the application. For more information about how publisher verification helps support application security, trustworthiness, and compliance, see Publisher verification.
     * @return VerifiedPublisher|null
    */
    public function getVerifiedPublisher(): ?VerifiedPublisher {
        return $this->getBackingStore()->get('verifiedPublisher');
    }

    /**
     * Gets the web property value. Specifies settings for a web application.
     * @return WebApplication|null
    */
    public function getWeb(): ?WebApplication {
        return $this->getBackingStore()->get('web');
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
        $writer->writeStringValue('signInAudience', $this->getSignInAudience());
        $writer->writeObjectValue('spa', $this->getSpa());
        $writer->writeObjectValue('synchronization', $this->getSynchronization());
        $writer->writeCollectionOfPrimitiveValues('tags', $this->getTags());
        $writer->writeStringValue('tokenEncryptionKeyId', $this->getTokenEncryptionKeyId());
        $writer->writeCollectionOfObjectValues('tokenIssuancePolicies', $this->getTokenIssuancePolicies());
        $writer->writeCollectionOfObjectValues('tokenLifetimePolicies', $this->getTokenLifetimePolicies());
        $writer->writeObjectValue('verifiedPublisher', $this->getVerifiedPublisher());
        $writer->writeObjectValue('web', $this->getWeb());
    }

    /**
     * Sets the addIns property value. Defines custom behavior that a consuming service can use to call an app in specific contexts. For example, applications that can render file streams may set the addIns property for its 'FileHandler' functionality. This will let services like Office 365 call the application in the context of a document the user is working on.
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
     * Sets the appId property value. The unique identifier for the application that is assigned to an application by Azure AD. Not nullable. Read-only. Supports $filter (eq).
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the applicationTemplateId property value. Unique identifier of the applicationTemplate. Supports $filter (eq, not, ne).
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
     * Sets the createdDateTime property value. The date and time the application was registered. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.  Supports $filter (eq, ne, not, ge, le, in, and eq on null values) and $orderBy.
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
     * Sets the description property value. Free text field to provide a description of the application object to end users. The maximum allowed size is 1024 characters. Supports $filter (eq, ne, not, ge, le, startsWith) and $search.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the disabledByMicrosoftStatus property value. Specifies whether Microsoft has disabled the registered application. Possible values are: null (default value), NotDisabled, and DisabledDueToViolationOfServicesAgreement (reasons may include suspicious, abusive, or malicious activity, or a violation of the Microsoft Services Agreement).  Supports $filter (eq, ne, not).
     * @param string|null $value Value to set for the disabledByMicrosoftStatus property.
    */
    public function setDisabledByMicrosoftStatus(?string $value): void {
        $this->getBackingStore()->set('disabledByMicrosoftStatus', $value);
    }

    /**
     * Sets the displayName property value. The display name for the application. Supports $filter (eq, ne, not, ge, le, in, startsWith, and eq on null values), $search, and $orderBy.
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
     * Sets the groupMembershipClaims property value. Configures the groups claim issued in a user or OAuth 2.0 access token that the application expects. To set this attribute, use one of the following valid string values: None, SecurityGroup (for security groups and Azure AD roles), All (this gets all of the security groups, distribution groups, and Azure AD directory roles that the signed-in user is a member of).
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
     * Sets the identifierUris property value. Also known as App ID URI, this value is set when an application is used as a resource app. The identifierUris acts as the prefix for the scopes you'll reference in your API's code, and it must be globally unique. You can use the default value provided, which is in the form api://<application-client-id>, or specify a more readable URI like https://contoso.com/api. For more information on valid identifierUris patterns and best practices, see Azure AD application registration security best practices. Not nullable. Supports $filter (eq, ne, ge, le, startsWith).
     * @param array<string>|null $value Value to set for the identifierUris property.
    */
    public function setIdentifierUris(?array $value): void {
        $this->getBackingStore()->set('identifierUris', $value);
    }

    /**
     * Sets the info property value. Basic profile information of the application such as  app's marketing, support, terms of service and privacy statement URLs. The terms of service and privacy statement are surfaced to users through the user consent experience. For more info, see How to: Add Terms of service and privacy statement for registered Azure AD apps. Supports $filter (eq, ne, not, ge, le, and eq on null values).
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
     * Sets the isFallbackPublicClient property value. Specifies the fallback application type as public client, such as an installed application running on a mobile device. The default value is false which means the fallback application type is confidential client such as a web app. There are certain scenarios where Azure AD cannot determine the client application type. For example, the ROPC flow where it is configured without specifying a redirect URI. In those cases Azure AD interprets the application type based on the value of this property.
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
     * Sets the optionalClaims property value. Application developers can configure optional claims in their Azure AD applications to specify the claims that are sent to their application by the Microsoft security token service. For more information, see How to: Provide optional claims to your app.
     * @param OptionalClaims|null $value Value to set for the optionalClaims property.
    */
    public function setOptionalClaims(?OptionalClaims $value): void {
        $this->getBackingStore()->set('optionalClaims', $value);
    }

    /**
     * Sets the owners property value. Directory objects that are owners of the application. Read-only. Nullable. Supports $expand and $filter (/$count eq 0, /$count ne 0, /$count eq 1, /$count ne 1).
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
     * Sets the requestSignatureVerification property value. Specifies whether this application requires Azure AD to verify the signed authentication requests.
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
     * Sets the signInAudience property value. Specifies the Microsoft accounts that are supported for the current application. The possible values are: AzureADMyOrg, AzureADMultipleOrgs, AzureADandPersonalMicrosoftAccount (default), and PersonalMicrosoftAccount. See more in the table. The value of this object also limits the number of permissions an app can request. For more information, see Limits on requested permissions per app. The value for this property has implications on other app object properties. As a result, if you change this property, you may need to change other properties first. For more information, see Validation differences for signInAudience.Supports $filter (eq, ne, not).
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
     * Sets the synchronization property value. The synchronization property
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
     * Sets the tokenEncryptionKeyId property value. Specifies the keyId of a public key from the keyCredentials collection. When configured, Azure AD encrypts all the tokens it emits by using the key this property points to. The application code that receives the encrypted token must use the matching private key to decrypt the token before it can be used for the signed-in user.
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
