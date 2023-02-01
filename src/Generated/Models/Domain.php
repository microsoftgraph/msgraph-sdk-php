<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Domain extends Entity implements Parsable 
{
    /**
     * Instantiates a new Domain and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Domain
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Domain {
        return new Domain();
    }

    /**
     * Gets the authenticationType property value. Indicates the configured authentication type for the domain. The value is either Managed or Federated. Managed indicates a cloud managed domain where Azure AD performs user authentication. Federated indicates authentication is federated with an identity provider such as the tenant's on-premises Active Directory via Active Directory Federation Services. This property is read-only and is not nullable.
     * @return string|null
    */
    public function getAuthenticationType(): ?string {
        return $this->getBackingStore()->get('authenticationType');
    }

    /**
     * Gets the availabilityStatus property value. This property is always null except when the verify action is used. When the verify action is used, a domain entity is returned in the response. The availabilityStatus property of the domain entity in the response is either AvailableImmediately or EmailVerifiedDomainTakeoverScheduled.
     * @return string|null
    */
    public function getAvailabilityStatus(): ?string {
        return $this->getBackingStore()->get('availabilityStatus');
    }

    /**
     * Gets the domainNameReferences property value. The objects such as users and groups that reference the domain ID. Read-only, Nullable. Supports $expand and $filter by the OData type of objects returned. For example /domains/{domainId}/domainNameReferences/microsoft.graph.user and /domains/{domainId}/domainNameReferences/microsoft.graph.group.
     * @return array<DirectoryObject>|null
    */
    public function getDomainNameReferences(): ?array {
        return $this->getBackingStore()->get('domainNameReferences');
    }

    /**
     * Gets the federationConfiguration property value. Domain settings configured by a customer when federated with Azure AD. Supports $expand.
     * @return array<InternalDomainFederation>|null
    */
    public function getFederationConfiguration(): ?array {
        return $this->getBackingStore()->get('federationConfiguration');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationType' => fn(ParseNode $n) => $o->setAuthenticationType($n->getStringValue()),
            'availabilityStatus' => fn(ParseNode $n) => $o->setAvailabilityStatus($n->getStringValue()),
            'domainNameReferences' => fn(ParseNode $n) => $o->setDomainNameReferences($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'federationConfiguration' => fn(ParseNode $n) => $o->setFederationConfiguration($n->getCollectionOfObjectValues([InternalDomainFederation::class, 'createFromDiscriminatorValue'])),
            'isAdminManaged' => fn(ParseNode $n) => $o->setIsAdminManaged($n->getBooleanValue()),
            'isDefault' => fn(ParseNode $n) => $o->setIsDefault($n->getBooleanValue()),
            'isInitial' => fn(ParseNode $n) => $o->setIsInitial($n->getBooleanValue()),
            'isRoot' => fn(ParseNode $n) => $o->setIsRoot($n->getBooleanValue()),
            'isVerified' => fn(ParseNode $n) => $o->setIsVerified($n->getBooleanValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'passwordNotificationWindowInDays' => fn(ParseNode $n) => $o->setPasswordNotificationWindowInDays($n->getIntegerValue()),
            'passwordValidityPeriodInDays' => fn(ParseNode $n) => $o->setPasswordValidityPeriodInDays($n->getIntegerValue()),
            'serviceConfigurationRecords' => fn(ParseNode $n) => $o->setServiceConfigurationRecords($n->getCollectionOfObjectValues([DomainDnsRecord::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getObjectValue([DomainState::class, 'createFromDiscriminatorValue'])),
            'supportedServices' => fn(ParseNode $n) => $o->setSupportedServices($n->getCollectionOfPrimitiveValues()),
            'verificationDnsRecords' => fn(ParseNode $n) => $o->setVerificationDnsRecords($n->getCollectionOfObjectValues([DomainDnsRecord::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isAdminManaged property value. The value of the property is false if the DNS record management of the domain has been delegated to Microsoft 365. Otherwise, the value is true. Not nullable
     * @return bool|null
    */
    public function getIsAdminManaged(): ?bool {
        return $this->getBackingStore()->get('isAdminManaged');
    }

    /**
     * Gets the isDefault property value. true if this is the default domain that is used for user creation. There is only one default domain per company. Not nullable
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->getBackingStore()->get('isDefault');
    }

    /**
     * Gets the isInitial property value. true if this is the initial domain created by Microsoft Online Services (companyname.onmicrosoft.com). There is only one initial domain per company. Not nullable
     * @return bool|null
    */
    public function getIsInitial(): ?bool {
        return $this->getBackingStore()->get('isInitial');
    }

    /**
     * Gets the isRoot property value. true if the domain is a verified root domain. Otherwise, false if the domain is a subdomain or unverified. Not nullable
     * @return bool|null
    */
    public function getIsRoot(): ?bool {
        return $this->getBackingStore()->get('isRoot');
    }

    /**
     * Gets the isVerified property value. true if the domain has completed domain ownership verification. Not nullable
     * @return bool|null
    */
    public function getIsVerified(): ?bool {
        return $this->getBackingStore()->get('isVerified');
    }

    /**
     * Gets the manufacturer property value. 
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->getBackingStore()->get('manufacturer');
    }

    /**
     * Gets the model property value. 
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->getBackingStore()->get('model');
    }

    /**
     * Gets the passwordNotificationWindowInDays property value. Specifies the number of days before a user receives notification that their password will expire. If the property is not set, a default value of 14 days will be used.
     * @return int|null
    */
    public function getPasswordNotificationWindowInDays(): ?int {
        return $this->getBackingStore()->get('passwordNotificationWindowInDays');
    }

    /**
     * Gets the passwordValidityPeriodInDays property value. Specifies the length of time that a password is valid before it must be changed. If the property is not set, a default value of 90 days will be used.
     * @return int|null
    */
    public function getPasswordValidityPeriodInDays(): ?int {
        return $this->getBackingStore()->get('passwordValidityPeriodInDays');
    }

    /**
     * Gets the serviceConfigurationRecords property value. DNS records the customer adds to the DNS zone file of the domain before the domain can be used by Microsoft Online services. Read-only, Nullable. Supports $expand.
     * @return array<DomainDnsRecord>|null
    */
    public function getServiceConfigurationRecords(): ?array {
        return $this->getBackingStore()->get('serviceConfigurationRecords');
    }

    /**
     * Gets the state property value. Status of asynchronous operations scheduled for the domain.
     * @return DomainState|null
    */
    public function getState(): ?DomainState {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Gets the supportedServices property value. The capabilities assigned to the domain. Can include 0, 1 or more of following values: Email, Sharepoint, EmailInternalRelayOnly, OfficeCommunicationsOnline, SharePointDefaultDomain, FullRedelegation, SharePointPublic, OrgIdAuthentication, Yammer, Intune. The values which you can add/remove using Graph API include: Email, OfficeCommunicationsOnline, Yammer. Not nullable.
     * @return array<string>|null
    */
    public function getSupportedServices(): ?array {
        return $this->getBackingStore()->get('supportedServices');
    }

    /**
     * Gets the verificationDnsRecords property value. DNS records that the customer adds to the DNS zone file of the domain before the customer can complete domain ownership verification with Azure AD. Read-only, Nullable. Supports $expand.
     * @return array<DomainDnsRecord>|null
    */
    public function getVerificationDnsRecords(): ?array {
        return $this->getBackingStore()->get('verificationDnsRecords');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('authenticationType', $this->getAuthenticationType());
        $writer->writeStringValue('availabilityStatus', $this->getAvailabilityStatus());
        $writer->writeCollectionOfObjectValues('domainNameReferences', $this->getDomainNameReferences());
        $writer->writeCollectionOfObjectValues('federationConfiguration', $this->getFederationConfiguration());
        $writer->writeBooleanValue('isAdminManaged', $this->getIsAdminManaged());
        $writer->writeBooleanValue('isDefault', $this->getIsDefault());
        $writer->writeBooleanValue('isInitial', $this->getIsInitial());
        $writer->writeBooleanValue('isRoot', $this->getIsRoot());
        $writer->writeBooleanValue('isVerified', $this->getIsVerified());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeIntegerValue('passwordNotificationWindowInDays', $this->getPasswordNotificationWindowInDays());
        $writer->writeIntegerValue('passwordValidityPeriodInDays', $this->getPasswordValidityPeriodInDays());
        $writer->writeCollectionOfObjectValues('serviceConfigurationRecords', $this->getServiceConfigurationRecords());
        $writer->writeObjectValue('state', $this->getState());
        $writer->writeCollectionOfPrimitiveValues('supportedServices', $this->getSupportedServices());
        $writer->writeCollectionOfObjectValues('verificationDnsRecords', $this->getVerificationDnsRecords());
    }

    /**
     * Sets the authenticationType property value. Indicates the configured authentication type for the domain. The value is either Managed or Federated. Managed indicates a cloud managed domain where Azure AD performs user authentication. Federated indicates authentication is federated with an identity provider such as the tenant's on-premises Active Directory via Active Directory Federation Services. This property is read-only and is not nullable.
     * @param string|null $value Value to set for the authenticationType property.
    */
    public function setAuthenticationType(?string $value): void {
        $this->getBackingStore()->set('authenticationType', $value);
    }

    /**
     * Sets the availabilityStatus property value. This property is always null except when the verify action is used. When the verify action is used, a domain entity is returned in the response. The availabilityStatus property of the domain entity in the response is either AvailableImmediately or EmailVerifiedDomainTakeoverScheduled.
     * @param string|null $value Value to set for the availabilityStatus property.
    */
    public function setAvailabilityStatus(?string $value): void {
        $this->getBackingStore()->set('availabilityStatus', $value);
    }

    /**
     * Sets the domainNameReferences property value. The objects such as users and groups that reference the domain ID. Read-only, Nullable. Supports $expand and $filter by the OData type of objects returned. For example /domains/{domainId}/domainNameReferences/microsoft.graph.user and /domains/{domainId}/domainNameReferences/microsoft.graph.group.
     * @param array<DirectoryObject>|null $value Value to set for the domainNameReferences property.
    */
    public function setDomainNameReferences(?array $value): void {
        $this->getBackingStore()->set('domainNameReferences', $value);
    }

    /**
     * Sets the federationConfiguration property value. Domain settings configured by a customer when federated with Azure AD. Supports $expand.
     * @param array<InternalDomainFederation>|null $value Value to set for the federationConfiguration property.
    */
    public function setFederationConfiguration(?array $value): void {
        $this->getBackingStore()->set('federationConfiguration', $value);
    }

    /**
     * Sets the isAdminManaged property value. The value of the property is false if the DNS record management of the domain has been delegated to Microsoft 365. Otherwise, the value is true. Not nullable
     * @param bool|null $value Value to set for the isAdminManaged property.
    */
    public function setIsAdminManaged(?bool $value): void {
        $this->getBackingStore()->set('isAdminManaged', $value);
    }

    /**
     * Sets the isDefault property value. true if this is the default domain that is used for user creation. There is only one default domain per company. Not nullable
     * @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value): void {
        $this->getBackingStore()->set('isDefault', $value);
    }

    /**
     * Sets the isInitial property value. true if this is the initial domain created by Microsoft Online Services (companyname.onmicrosoft.com). There is only one initial domain per company. Not nullable
     * @param bool|null $value Value to set for the isInitial property.
    */
    public function setIsInitial(?bool $value): void {
        $this->getBackingStore()->set('isInitial', $value);
    }

    /**
     * Sets the isRoot property value. true if the domain is a verified root domain. Otherwise, false if the domain is a subdomain or unverified. Not nullable
     * @param bool|null $value Value to set for the isRoot property.
    */
    public function setIsRoot(?bool $value): void {
        $this->getBackingStore()->set('isRoot', $value);
    }

    /**
     * Sets the isVerified property value. true if the domain has completed domain ownership verification. Not nullable
     * @param bool|null $value Value to set for the isVerified property.
    */
    public function setIsVerified(?bool $value): void {
        $this->getBackingStore()->set('isVerified', $value);
    }

    /**
     * Sets the manufacturer property value. 
     * @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the model property value. 
     * @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the passwordNotificationWindowInDays property value. Specifies the number of days before a user receives notification that their password will expire. If the property is not set, a default value of 14 days will be used.
     * @param int|null $value Value to set for the passwordNotificationWindowInDays property.
    */
    public function setPasswordNotificationWindowInDays(?int $value): void {
        $this->getBackingStore()->set('passwordNotificationWindowInDays', $value);
    }

    /**
     * Sets the passwordValidityPeriodInDays property value. Specifies the length of time that a password is valid before it must be changed. If the property is not set, a default value of 90 days will be used.
     * @param int|null $value Value to set for the passwordValidityPeriodInDays property.
    */
    public function setPasswordValidityPeriodInDays(?int $value): void {
        $this->getBackingStore()->set('passwordValidityPeriodInDays', $value);
    }

    /**
     * Sets the serviceConfigurationRecords property value. DNS records the customer adds to the DNS zone file of the domain before the domain can be used by Microsoft Online services. Read-only, Nullable. Supports $expand.
     * @param array<DomainDnsRecord>|null $value Value to set for the serviceConfigurationRecords property.
    */
    public function setServiceConfigurationRecords(?array $value): void {
        $this->getBackingStore()->set('serviceConfigurationRecords', $value);
    }

    /**
     * Sets the state property value. Status of asynchronous operations scheduled for the domain.
     * @param DomainState|null $value Value to set for the state property.
    */
    public function setState(?DomainState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the supportedServices property value. The capabilities assigned to the domain. Can include 0, 1 or more of following values: Email, Sharepoint, EmailInternalRelayOnly, OfficeCommunicationsOnline, SharePointDefaultDomain, FullRedelegation, SharePointPublic, OrgIdAuthentication, Yammer, Intune. The values which you can add/remove using Graph API include: Email, OfficeCommunicationsOnline, Yammer. Not nullable.
     * @param array<string>|null $value Value to set for the supportedServices property.
    */
    public function setSupportedServices(?array $value): void {
        $this->getBackingStore()->set('supportedServices', $value);
    }

    /**
     * Sets the verificationDnsRecords property value. DNS records that the customer adds to the DNS zone file of the domain before the customer can complete domain ownership verification with Azure AD. Read-only, Nullable. Supports $expand.
     * @param array<DomainDnsRecord>|null $value Value to set for the verificationDnsRecords property.
    */
    public function setVerificationDnsRecords(?array $value): void {
        $this->getBackingStore()->set('verificationDnsRecords', $value);
    }

}
