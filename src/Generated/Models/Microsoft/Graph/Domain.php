<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Domain extends Entity 
{
    /** @var string|null $authenticationType Indicates the configured authentication type for the domain. The value is either Managed or Federated. Managed indicates a cloud managed domain where Azure AD performs user authentication. Federated indicates authentication is federated with an identity provider such as the tenant's on-premises Active Directory via Active Directory Federation Services. This property is read-only and is not nullable. */
    private ?string $authenticationType = null;
    
    /** @var string|null $availabilityStatus This property is always null except when the verify action is used. When the verify action is used, a domain entity is returned in the response. The availabilityStatus property of the domain entity in the response is either AvailableImmediately or EmailVerifiedDomainTakeoverScheduled. */
    private ?string $availabilityStatus = null;
    
    /** @var array<DirectoryObject>|null $domainNameReferences Read-only, Nullable */
    private ?array $domainNameReferences = null;
    
    /** @var bool|null $isAdminManaged The value of the property is false if the DNS record management of the domain has been delegated to Microsoft 365. Otherwise, the value is true. Not nullable */
    private ?bool $isAdminManaged = null;
    
    /** @var bool|null $isDefault true if this is the default domain that is used for user creation. There is only one default domain per company. Not nullable */
    private ?bool $isDefault = null;
    
    /** @var bool|null $isInitial true if this is the initial domain created by Microsoft Online Services (companyname.onmicrosoft.com). There is only one initial domain per company. Not nullable */
    private ?bool $isInitial = null;
    
    /** @var bool|null $isRoot true if the domain is a verified root domain. Otherwise, false if the domain is a subdomain or unverified. Not nullable */
    private ?bool $isRoot = null;
    
    /** @var bool|null $isVerified true if the domain has completed domain ownership verification. Not nullable */
    private ?bool $isVerified = null;
    
    /** @var string|null $manufacturer  */
    private ?string $manufacturer = null;
    
    /** @var string|null $model  */
    private ?string $model = null;
    
    /** @var int|null $passwordNotificationWindowInDays Specifies the number of days before a user receives notification that their password will expire. If the property is not set, a default value of 14 days will be used. */
    private ?int $passwordNotificationWindowInDays = null;
    
    /** @var int|null $passwordValidityPeriodInDays Specifies the length of time that a password is valid before it must be changed. If the property is not set, a default value of 90 days will be used. */
    private ?int $passwordValidityPeriodInDays = null;
    
    /** @var array<DomainDnsRecord>|null $serviceConfigurationRecords DNS records the customer adds to the DNS zone file of the domain before the domain can be used by Microsoft Online services. Read-only, Nullable */
    private ?array $serviceConfigurationRecords = null;
    
    /** @var DomainState|null $state Status of asynchronous operations scheduled for the domain. */
    private ?DomainState $state = null;
    
    /** @var array<string>|null $supportedServices The capabilities assigned to the domain. Can include 0, 1 or more of following values: Email, Sharepoint, EmailInternalRelayOnly, OfficeCommunicationsOnline, SharePointDefaultDomain, FullRedelegation, SharePointPublic, OrgIdAuthentication, Yammer, Intune. The values which you can add/remove using Graph API include: Email, OfficeCommunicationsOnline, Yammer. Not nullable */
    private ?array $supportedServices = null;
    
    /** @var array<DomainDnsRecord>|null $verificationDnsRecords DNS records that the customer adds to the DNS zone file of the domain before the customer can complete domain ownership verification with Azure AD. Read-only, Nullable */
    private ?array $verificationDnsRecords = null;
    
    /**
     * Instantiates a new domain and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Domain
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Domain {
        return new Domain();
    }

    /**
     * Gets the authenticationType property value. Indicates the configured authentication type for the domain. The value is either Managed or Federated. Managed indicates a cloud managed domain where Azure AD performs user authentication. Federated indicates authentication is federated with an identity provider such as the tenant's on-premises Active Directory via Active Directory Federation Services. This property is read-only and is not nullable.
     * @return string|null
    */
    public function getAuthenticationType(): ?string {
        return $this->authenticationType;
    }

    /**
     * Gets the availabilityStatus property value. This property is always null except when the verify action is used. When the verify action is used, a domain entity is returned in the response. The availabilityStatus property of the domain entity in the response is either AvailableImmediately or EmailVerifiedDomainTakeoverScheduled.
     * @return string|null
    */
    public function getAvailabilityStatus(): ?string {
        return $this->availabilityStatus;
    }

    /**
     * Gets the domainNameReferences property value. Read-only, Nullable
     * @return array<DirectoryObject>|null
    */
    public function getDomainNameReferences(): ?array {
        return $this->domainNameReferences;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationType' => function (self $o, ParseNode $n) { $o->setAuthenticationType($n->getStringValue()); },
            'availabilityStatus' => function (self $o, ParseNode $n) { $o->setAvailabilityStatus($n->getStringValue()); },
            'domainNameReferences' => function (self $o, ParseNode $n) { $o->setDomainNameReferences($n->getCollectionOfObjectValues(DirectoryObject::class)); },
            'isAdminManaged' => function (self $o, ParseNode $n) { $o->setIsAdminManaged($n->getBooleanValue()); },
            'isDefault' => function (self $o, ParseNode $n) { $o->setIsDefault($n->getBooleanValue()); },
            'isInitial' => function (self $o, ParseNode $n) { $o->setIsInitial($n->getBooleanValue()); },
            'isRoot' => function (self $o, ParseNode $n) { $o->setIsRoot($n->getBooleanValue()); },
            'isVerified' => function (self $o, ParseNode $n) { $o->setIsVerified($n->getBooleanValue()); },
            'manufacturer' => function (self $o, ParseNode $n) { $o->setManufacturer($n->getStringValue()); },
            'model' => function (self $o, ParseNode $n) { $o->setModel($n->getStringValue()); },
            'passwordNotificationWindowInDays' => function (self $o, ParseNode $n) { $o->setPasswordNotificationWindowInDays($n->getIntegerValue()); },
            'passwordValidityPeriodInDays' => function (self $o, ParseNode $n) { $o->setPasswordValidityPeriodInDays($n->getIntegerValue()); },
            'serviceConfigurationRecords' => function (self $o, ParseNode $n) { $o->setServiceConfigurationRecords($n->getCollectionOfObjectValues(DomainDnsRecord::class)); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getObjectValue(DomainState::class)); },
            'supportedServices' => function (self $o, ParseNode $n) { $o->setSupportedServices($n->getCollectionOfPrimitiveValues()); },
            'verificationDnsRecords' => function (self $o, ParseNode $n) { $o->setVerificationDnsRecords($n->getCollectionOfObjectValues(DomainDnsRecord::class)); },
        ]);
    }

    /**
     * Gets the isAdminManaged property value. The value of the property is false if the DNS record management of the domain has been delegated to Microsoft 365. Otherwise, the value is true. Not nullable
     * @return bool|null
    */
    public function getIsAdminManaged(): ?bool {
        return $this->isAdminManaged;
    }

    /**
     * Gets the isDefault property value. true if this is the default domain that is used for user creation. There is only one default domain per company. Not nullable
     * @return bool|null
    */
    public function getIsDefault(): ?bool {
        return $this->isDefault;
    }

    /**
     * Gets the isInitial property value. true if this is the initial domain created by Microsoft Online Services (companyname.onmicrosoft.com). There is only one initial domain per company. Not nullable
     * @return bool|null
    */
    public function getIsInitial(): ?bool {
        return $this->isInitial;
    }

    /**
     * Gets the isRoot property value. true if the domain is a verified root domain. Otherwise, false if the domain is a subdomain or unverified. Not nullable
     * @return bool|null
    */
    public function getIsRoot(): ?bool {
        return $this->isRoot;
    }

    /**
     * Gets the isVerified property value. true if the domain has completed domain ownership verification. Not nullable
     * @return bool|null
    */
    public function getIsVerified(): ?bool {
        return $this->isVerified;
    }

    /**
     * Gets the manufacturer property value. 
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the model property value. 
     * @return string|null
    */
    public function getModel(): ?string {
        return $this->model;
    }

    /**
     * Gets the passwordNotificationWindowInDays property value. Specifies the number of days before a user receives notification that their password will expire. If the property is not set, a default value of 14 days will be used.
     * @return int|null
    */
    public function getPasswordNotificationWindowInDays(): ?int {
        return $this->passwordNotificationWindowInDays;
    }

    /**
     * Gets the passwordValidityPeriodInDays property value. Specifies the length of time that a password is valid before it must be changed. If the property is not set, a default value of 90 days will be used.
     * @return int|null
    */
    public function getPasswordValidityPeriodInDays(): ?int {
        return $this->passwordValidityPeriodInDays;
    }

    /**
     * Gets the serviceConfigurationRecords property value. DNS records the customer adds to the DNS zone file of the domain before the domain can be used by Microsoft Online services. Read-only, Nullable
     * @return array<DomainDnsRecord>|null
    */
    public function getServiceConfigurationRecords(): ?array {
        return $this->serviceConfigurationRecords;
    }

    /**
     * Gets the state property value. Status of asynchronous operations scheduled for the domain.
     * @return DomainState|null
    */
    public function getState(): ?DomainState {
        return $this->state;
    }

    /**
     * Gets the supportedServices property value. The capabilities assigned to the domain. Can include 0, 1 or more of following values: Email, Sharepoint, EmailInternalRelayOnly, OfficeCommunicationsOnline, SharePointDefaultDomain, FullRedelegation, SharePointPublic, OrgIdAuthentication, Yammer, Intune. The values which you can add/remove using Graph API include: Email, OfficeCommunicationsOnline, Yammer. Not nullable
     * @return array<string>|null
    */
    public function getSupportedServices(): ?array {
        return $this->supportedServices;
    }

    /**
     * Gets the verificationDnsRecords property value. DNS records that the customer adds to the DNS zone file of the domain before the customer can complete domain ownership verification with Azure AD. Read-only, Nullable
     * @return array<DomainDnsRecord>|null
    */
    public function getVerificationDnsRecords(): ?array {
        return $this->verificationDnsRecords;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('authenticationType', $this->authenticationType);
        $writer->writeStringValue('availabilityStatus', $this->availabilityStatus);
        $writer->writeCollectionOfObjectValues('domainNameReferences', $this->domainNameReferences);
        $writer->writeBooleanValue('isAdminManaged', $this->isAdminManaged);
        $writer->writeBooleanValue('isDefault', $this->isDefault);
        $writer->writeBooleanValue('isInitial', $this->isInitial);
        $writer->writeBooleanValue('isRoot', $this->isRoot);
        $writer->writeBooleanValue('isVerified', $this->isVerified);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeStringValue('model', $this->model);
        $writer->writeIntegerValue('passwordNotificationWindowInDays', $this->passwordNotificationWindowInDays);
        $writer->writeIntegerValue('passwordValidityPeriodInDays', $this->passwordValidityPeriodInDays);
        $writer->writeCollectionOfObjectValues('serviceConfigurationRecords', $this->serviceConfigurationRecords);
        $writer->writeObjectValue('state', $this->state);
        $writer->writeCollectionOfPrimitiveValues('supportedServices', $this->supportedServices);
        $writer->writeCollectionOfObjectValues('verificationDnsRecords', $this->verificationDnsRecords);
    }

    /**
     * Sets the authenticationType property value. Indicates the configured authentication type for the domain. The value is either Managed or Federated. Managed indicates a cloud managed domain where Azure AD performs user authentication. Federated indicates authentication is federated with an identity provider such as the tenant's on-premises Active Directory via Active Directory Federation Services. This property is read-only and is not nullable.
     *  @param string|null $value Value to set for the authenticationType property.
    */
    public function setAuthenticationType(?string $value ): void {
        $this->authenticationType = $value;
    }

    /**
     * Sets the availabilityStatus property value. This property is always null except when the verify action is used. When the verify action is used, a domain entity is returned in the response. The availabilityStatus property of the domain entity in the response is either AvailableImmediately or EmailVerifiedDomainTakeoverScheduled.
     *  @param string|null $value Value to set for the availabilityStatus property.
    */
    public function setAvailabilityStatus(?string $value ): void {
        $this->availabilityStatus = $value;
    }

    /**
     * Sets the domainNameReferences property value. Read-only, Nullable
     *  @param array<DirectoryObject>|null $value Value to set for the domainNameReferences property.
    */
    public function setDomainNameReferences(?array $value ): void {
        $this->domainNameReferences = $value;
    }

    /**
     * Sets the isAdminManaged property value. The value of the property is false if the DNS record management of the domain has been delegated to Microsoft 365. Otherwise, the value is true. Not nullable
     *  @param bool|null $value Value to set for the isAdminManaged property.
    */
    public function setIsAdminManaged(?bool $value ): void {
        $this->isAdminManaged = $value;
    }

    /**
     * Sets the isDefault property value. true if this is the default domain that is used for user creation. There is only one default domain per company. Not nullable
     *  @param bool|null $value Value to set for the isDefault property.
    */
    public function setIsDefault(?bool $value ): void {
        $this->isDefault = $value;
    }

    /**
     * Sets the isInitial property value. true if this is the initial domain created by Microsoft Online Services (companyname.onmicrosoft.com). There is only one initial domain per company. Not nullable
     *  @param bool|null $value Value to set for the isInitial property.
    */
    public function setIsInitial(?bool $value ): void {
        $this->isInitial = $value;
    }

    /**
     * Sets the isRoot property value. true if the domain is a verified root domain. Otherwise, false if the domain is a subdomain or unverified. Not nullable
     *  @param bool|null $value Value to set for the isRoot property.
    */
    public function setIsRoot(?bool $value ): void {
        $this->isRoot = $value;
    }

    /**
     * Sets the isVerified property value. true if the domain has completed domain ownership verification. Not nullable
     *  @param bool|null $value Value to set for the isVerified property.
    */
    public function setIsVerified(?bool $value ): void {
        $this->isVerified = $value;
    }

    /**
     * Sets the manufacturer property value. 
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the model property value. 
     *  @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value ): void {
        $this->model = $value;
    }

    /**
     * Sets the passwordNotificationWindowInDays property value. Specifies the number of days before a user receives notification that their password will expire. If the property is not set, a default value of 14 days will be used.
     *  @param int|null $value Value to set for the passwordNotificationWindowInDays property.
    */
    public function setPasswordNotificationWindowInDays(?int $value ): void {
        $this->passwordNotificationWindowInDays = $value;
    }

    /**
     * Sets the passwordValidityPeriodInDays property value. Specifies the length of time that a password is valid before it must be changed. If the property is not set, a default value of 90 days will be used.
     *  @param int|null $value Value to set for the passwordValidityPeriodInDays property.
    */
    public function setPasswordValidityPeriodInDays(?int $value ): void {
        $this->passwordValidityPeriodInDays = $value;
    }

    /**
     * Sets the serviceConfigurationRecords property value. DNS records the customer adds to the DNS zone file of the domain before the domain can be used by Microsoft Online services. Read-only, Nullable
     *  @param array<DomainDnsRecord>|null $value Value to set for the serviceConfigurationRecords property.
    */
    public function setServiceConfigurationRecords(?array $value ): void {
        $this->serviceConfigurationRecords = $value;
    }

    /**
     * Sets the state property value. Status of asynchronous operations scheduled for the domain.
     *  @param DomainState|null $value Value to set for the state property.
    */
    public function setState(?DomainState $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the supportedServices property value. The capabilities assigned to the domain. Can include 0, 1 or more of following values: Email, Sharepoint, EmailInternalRelayOnly, OfficeCommunicationsOnline, SharePointDefaultDomain, FullRedelegation, SharePointPublic, OrgIdAuthentication, Yammer, Intune. The values which you can add/remove using Graph API include: Email, OfficeCommunicationsOnline, Yammer. Not nullable
     *  @param array<string>|null $value Value to set for the supportedServices property.
    */
    public function setSupportedServices(?array $value ): void {
        $this->supportedServices = $value;
    }

    /**
     * Sets the verificationDnsRecords property value. DNS records that the customer adds to the DNS zone file of the domain before the customer can complete domain ownership verification with Azure AD. Read-only, Nullable
     *  @param array<DomainDnsRecord>|null $value Value to set for the verificationDnsRecords property.
    */
    public function setVerificationDnsRecords(?array $value ): void {
        $this->verificationDnsRecords = $value;
    }

}
