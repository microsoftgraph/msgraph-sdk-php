<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Organization extends DirectoryObject implements Parsable 
{
    /**
     * @var array<AssignedPlan>|null $assignedPlans The collection of service plans associated with the tenant. Not nullable.
    */
    private ?array $assignedPlans = null;
    
    /**
     * @var OrganizationalBranding|null $branding Resource to manage the default branding for the organization. Nullable.
    */
    private ?OrganizationalBranding $branding = null;
    
    /**
     * @var array<string>|null $businessPhones Telephone number for the organization. Although this is a string collection, only one number can be set for this property.
    */
    private ?array $businessPhones = null;
    
    /**
     * @var array<CertificateBasedAuthConfiguration>|null $certificateBasedAuthConfiguration Navigation property to manage certificate-based authentication configuration. Only a single instance of certificateBasedAuthConfiguration can be created in the collection.
    */
    private ?array $certificateBasedAuthConfiguration = null;
    
    /**
     * @var string|null $city City name of the address for the organization.
    */
    private ?string $city = null;
    
    /**
     * @var string|null $country Country/region name of the address for the organization.
    */
    private ?string $country = null;
    
    /**
     * @var string|null $countryLetterCode Country or region abbreviation for the organization in ISO 3166-2 format.
    */
    private ?string $countryLetterCode = null;
    
    /**
     * @var DateTime|null $createdDateTime Timestamp of when the organization was created. The value cannot be modified and is automatically populated when the organization is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $displayName The display name for the tenant.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<Extension>|null $extensions The collection of open extensions defined for the organization resource. Nullable.
    */
    private ?array $extensions = null;
    
    /**
     * @var array<string>|null $marketingNotificationEmails Not nullable.
    */
    private ?array $marketingNotificationEmails = null;
    
    /**
     * @var MdmAuthority|null $mobileDeviceManagementAuthority Mobile device management authority. Possible values are: unknown, intune, sccm, office365.
    */
    private ?MdmAuthority $mobileDeviceManagementAuthority = null;
    
    /**
     * @var DateTime|null $onPremisesLastSyncDateTime The time and date at which the tenant was last synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $onPremisesLastSyncDateTime = null;
    
    /**
     * @var bool|null $onPremisesSyncEnabled true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; Nullable. null if this object has never been synced from an on-premises directory (default).
    */
    private ?bool $onPremisesSyncEnabled = null;
    
    /**
     * @var string|null $postalCode Postal code of the address for the organization.
    */
    private ?string $postalCode = null;
    
    /**
     * @var string|null $preferredLanguage The preferred language for the organization. Should follow ISO 639-1 Code; for example en.
    */
    private ?string $preferredLanguage = null;
    
    /**
     * @var PrivacyProfile|null $privacyProfile The privacy profile of an organization.
    */
    private ?PrivacyProfile $privacyProfile = null;
    
    /**
     * @var array<ProvisionedPlan>|null $provisionedPlans Not nullable.
    */
    private ?array $provisionedPlans = null;
    
    /**
     * @var array<string>|null $securityComplianceNotificationMails The securityComplianceNotificationMails property
    */
    private ?array $securityComplianceNotificationMails = null;
    
    /**
     * @var array<string>|null $securityComplianceNotificationPhones The securityComplianceNotificationPhones property
    */
    private ?array $securityComplianceNotificationPhones = null;
    
    /**
     * @var string|null $state State name of the address for the organization.
    */
    private ?string $state = null;
    
    /**
     * @var string|null $street Street name of the address for organization.
    */
    private ?string $street = null;
    
    /**
     * @var array<string>|null $technicalNotificationMails Not nullable.
    */
    private ?array $technicalNotificationMails = null;
    
    /**
     * @var string|null $tenantType The tenantType property
    */
    private ?string $tenantType = null;
    
    /**
     * @var array<VerifiedDomain>|null $verifiedDomains The collection of domains associated with this tenant. Not nullable.
    */
    private ?array $verifiedDomains = null;
    
    /**
     * Instantiates a new Organization and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Organization
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Organization {
        return new Organization();
    }

    /**
     * Gets the assignedPlans property value. The collection of service plans associated with the tenant. Not nullable.
     * @return array<AssignedPlan>|null
    */
    public function getAssignedPlans(): ?array {
        return $this->assignedPlans;
    }

    /**
     * Gets the branding property value. Resource to manage the default branding for the organization. Nullable.
     * @return OrganizationalBranding|null
    */
    public function getBranding(): ?OrganizationalBranding {
        return $this->branding;
    }

    /**
     * Gets the businessPhones property value. Telephone number for the organization. Although this is a string collection, only one number can be set for this property.
     * @return array<string>|null
    */
    public function getBusinessPhones(): ?array {
        return $this->businessPhones;
    }

    /**
     * Gets the certificateBasedAuthConfiguration property value. Navigation property to manage certificate-based authentication configuration. Only a single instance of certificateBasedAuthConfiguration can be created in the collection.
     * @return array<CertificateBasedAuthConfiguration>|null
    */
    public function getCertificateBasedAuthConfiguration(): ?array {
        return $this->certificateBasedAuthConfiguration;
    }

    /**
     * Gets the city property value. City name of the address for the organization.
     * @return string|null
    */
    public function getCity(): ?string {
        return $this->city;
    }

    /**
     * Gets the country property value. Country/region name of the address for the organization.
     * @return string|null
    */
    public function getCountry(): ?string {
        return $this->country;
    }

    /**
     * Gets the countryLetterCode property value. Country or region abbreviation for the organization in ISO 3166-2 format.
     * @return string|null
    */
    public function getCountryLetterCode(): ?string {
        return $this->countryLetterCode;
    }

    /**
     * Gets the createdDateTime property value. Timestamp of when the organization was created. The value cannot be modified and is automatically populated when the organization is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the displayName property value. The display name for the tenant.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the organization resource. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->extensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedPlans' => function (ParseNode $n) use ($o) { $o->setAssignedPlans($n->getCollectionOfObjectValues(array(AssignedPlan::class, 'createFromDiscriminatorValue'))); },
            'branding' => function (ParseNode $n) use ($o) { $o->setBranding($n->getObjectValue(array(OrganizationalBranding::class, 'createFromDiscriminatorValue'))); },
            'businessPhones' => function (ParseNode $n) use ($o) { $o->setBusinessPhones($n->getCollectionOfPrimitiveValues()); },
            'certificateBasedAuthConfiguration' => function (ParseNode $n) use ($o) { $o->setCertificateBasedAuthConfiguration($n->getCollectionOfObjectValues(array(CertificateBasedAuthConfiguration::class, 'createFromDiscriminatorValue'))); },
            'city' => function (ParseNode $n) use ($o) { $o->setCity($n->getStringValue()); },
            'country' => function (ParseNode $n) use ($o) { $o->setCountry($n->getStringValue()); },
            'countryLetterCode' => function (ParseNode $n) use ($o) { $o->setCountryLetterCode($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'extensions' => function (ParseNode $n) use ($o) { $o->setExtensions($n->getCollectionOfObjectValues(array(Extension::class, 'createFromDiscriminatorValue'))); },
            'marketingNotificationEmails' => function (ParseNode $n) use ($o) { $o->setMarketingNotificationEmails($n->getCollectionOfPrimitiveValues()); },
            'mobileDeviceManagementAuthority' => function (ParseNode $n) use ($o) { $o->setMobileDeviceManagementAuthority($n->getEnumValue(MdmAuthority::class)); },
            'onPremisesLastSyncDateTime' => function (ParseNode $n) use ($o) { $o->setOnPremisesLastSyncDateTime($n->getDateTimeValue()); },
            'onPremisesSyncEnabled' => function (ParseNode $n) use ($o) { $o->setOnPremisesSyncEnabled($n->getBooleanValue()); },
            'postalCode' => function (ParseNode $n) use ($o) { $o->setPostalCode($n->getStringValue()); },
            'preferredLanguage' => function (ParseNode $n) use ($o) { $o->setPreferredLanguage($n->getStringValue()); },
            'privacyProfile' => function (ParseNode $n) use ($o) { $o->setPrivacyProfile($n->getObjectValue(array(PrivacyProfile::class, 'createFromDiscriminatorValue'))); },
            'provisionedPlans' => function (ParseNode $n) use ($o) { $o->setProvisionedPlans($n->getCollectionOfObjectValues(array(ProvisionedPlan::class, 'createFromDiscriminatorValue'))); },
            'securityComplianceNotificationMails' => function (ParseNode $n) use ($o) { $o->setSecurityComplianceNotificationMails($n->getCollectionOfPrimitiveValues()); },
            'securityComplianceNotificationPhones' => function (ParseNode $n) use ($o) { $o->setSecurityComplianceNotificationPhones($n->getCollectionOfPrimitiveValues()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getStringValue()); },
            'street' => function (ParseNode $n) use ($o) { $o->setStreet($n->getStringValue()); },
            'technicalNotificationMails' => function (ParseNode $n) use ($o) { $o->setTechnicalNotificationMails($n->getCollectionOfPrimitiveValues()); },
            'tenantType' => function (ParseNode $n) use ($o) { $o->setTenantType($n->getStringValue()); },
            'verifiedDomains' => function (ParseNode $n) use ($o) { $o->setVerifiedDomains($n->getCollectionOfObjectValues(array(VerifiedDomain::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the marketingNotificationEmails property value. Not nullable.
     * @return array<string>|null
    */
    public function getMarketingNotificationEmails(): ?array {
        return $this->marketingNotificationEmails;
    }

    /**
     * Gets the mobileDeviceManagementAuthority property value. Mobile device management authority. Possible values are: unknown, intune, sccm, office365.
     * @return MdmAuthority|null
    */
    public function getMobileDeviceManagementAuthority(): ?MdmAuthority {
        return $this->mobileDeviceManagementAuthority;
    }

    /**
     * Gets the onPremisesLastSyncDateTime property value. The time and date at which the tenant was last synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getOnPremisesLastSyncDateTime(): ?DateTime {
        return $this->onPremisesLastSyncDateTime;
    }

    /**
     * Gets the onPremisesSyncEnabled property value. true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; Nullable. null if this object has never been synced from an on-premises directory (default).
     * @return bool|null
    */
    public function getOnPremisesSyncEnabled(): ?bool {
        return $this->onPremisesSyncEnabled;
    }

    /**
     * Gets the postalCode property value. Postal code of the address for the organization.
     * @return string|null
    */
    public function getPostalCode(): ?string {
        return $this->postalCode;
    }

    /**
     * Gets the preferredLanguage property value. The preferred language for the organization. Should follow ISO 639-1 Code; for example en.
     * @return string|null
    */
    public function getPreferredLanguage(): ?string {
        return $this->preferredLanguage;
    }

    /**
     * Gets the privacyProfile property value. The privacy profile of an organization.
     * @return PrivacyProfile|null
    */
    public function getPrivacyProfile(): ?PrivacyProfile {
        return $this->privacyProfile;
    }

    /**
     * Gets the provisionedPlans property value. Not nullable.
     * @return array<ProvisionedPlan>|null
    */
    public function getProvisionedPlans(): ?array {
        return $this->provisionedPlans;
    }

    /**
     * Gets the securityComplianceNotificationMails property value. The securityComplianceNotificationMails property
     * @return array<string>|null
    */
    public function getSecurityComplianceNotificationMails(): ?array {
        return $this->securityComplianceNotificationMails;
    }

    /**
     * Gets the securityComplianceNotificationPhones property value. The securityComplianceNotificationPhones property
     * @return array<string>|null
    */
    public function getSecurityComplianceNotificationPhones(): ?array {
        return $this->securityComplianceNotificationPhones;
    }

    /**
     * Gets the state property value. State name of the address for the organization.
     * @return string|null
    */
    public function getState(): ?string {
        return $this->state;
    }

    /**
     * Gets the street property value. Street name of the address for organization.
     * @return string|null
    */
    public function getStreet(): ?string {
        return $this->street;
    }

    /**
     * Gets the technicalNotificationMails property value. Not nullable.
     * @return array<string>|null
    */
    public function getTechnicalNotificationMails(): ?array {
        return $this->technicalNotificationMails;
    }

    /**
     * Gets the tenantType property value. The tenantType property
     * @return string|null
    */
    public function getTenantType(): ?string {
        return $this->tenantType;
    }

    /**
     * Gets the verifiedDomains property value. The collection of domains associated with this tenant. Not nullable.
     * @return array<VerifiedDomain>|null
    */
    public function getVerifiedDomains(): ?array {
        return $this->verifiedDomains;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignedPlans', $this->assignedPlans);
        $writer->writeObjectValue('branding', $this->branding);
        $writer->writeCollectionOfPrimitiveValues('businessPhones', $this->businessPhones);
        $writer->writeCollectionOfObjectValues('certificateBasedAuthConfiguration', $this->certificateBasedAuthConfiguration);
        $writer->writeStringValue('city', $this->city);
        $writer->writeStringValue('country', $this->country);
        $writer->writeStringValue('countryLetterCode', $this->countryLetterCode);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('extensions', $this->extensions);
        $writer->writeCollectionOfPrimitiveValues('marketingNotificationEmails', $this->marketingNotificationEmails);
        $writer->writeEnumValue('mobileDeviceManagementAuthority', $this->mobileDeviceManagementAuthority);
        $writer->writeDateTimeValue('onPremisesLastSyncDateTime', $this->onPremisesLastSyncDateTime);
        $writer->writeBooleanValue('onPremisesSyncEnabled', $this->onPremisesSyncEnabled);
        $writer->writeStringValue('postalCode', $this->postalCode);
        $writer->writeStringValue('preferredLanguage', $this->preferredLanguage);
        $writer->writeObjectValue('privacyProfile', $this->privacyProfile);
        $writer->writeCollectionOfObjectValues('provisionedPlans', $this->provisionedPlans);
        $writer->writeCollectionOfPrimitiveValues('securityComplianceNotificationMails', $this->securityComplianceNotificationMails);
        $writer->writeCollectionOfPrimitiveValues('securityComplianceNotificationPhones', $this->securityComplianceNotificationPhones);
        $writer->writeStringValue('state', $this->state);
        $writer->writeStringValue('street', $this->street);
        $writer->writeCollectionOfPrimitiveValues('technicalNotificationMails', $this->technicalNotificationMails);
        $writer->writeStringValue('tenantType', $this->tenantType);
        $writer->writeCollectionOfObjectValues('verifiedDomains', $this->verifiedDomains);
    }

    /**
     * Sets the assignedPlans property value. The collection of service plans associated with the tenant. Not nullable.
     *  @param array<AssignedPlan>|null $value Value to set for the assignedPlans property.
    */
    public function setAssignedPlans(?array $value ): void {
        $this->assignedPlans = $value;
    }

    /**
     * Sets the branding property value. Resource to manage the default branding for the organization. Nullable.
     *  @param OrganizationalBranding|null $value Value to set for the branding property.
    */
    public function setBranding(?OrganizationalBranding $value ): void {
        $this->branding = $value;
    }

    /**
     * Sets the businessPhones property value. Telephone number for the organization. Although this is a string collection, only one number can be set for this property.
     *  @param array<string>|null $value Value to set for the businessPhones property.
    */
    public function setBusinessPhones(?array $value ): void {
        $this->businessPhones = $value;
    }

    /**
     * Sets the certificateBasedAuthConfiguration property value. Navigation property to manage certificate-based authentication configuration. Only a single instance of certificateBasedAuthConfiguration can be created in the collection.
     *  @param array<CertificateBasedAuthConfiguration>|null $value Value to set for the certificateBasedAuthConfiguration property.
    */
    public function setCertificateBasedAuthConfiguration(?array $value ): void {
        $this->certificateBasedAuthConfiguration = $value;
    }

    /**
     * Sets the city property value. City name of the address for the organization.
     *  @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value ): void {
        $this->city = $value;
    }

    /**
     * Sets the country property value. Country/region name of the address for the organization.
     *  @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value ): void {
        $this->country = $value;
    }

    /**
     * Sets the countryLetterCode property value. Country or region abbreviation for the organization in ISO 3166-2 format.
     *  @param string|null $value Value to set for the countryLetterCode property.
    */
    public function setCountryLetterCode(?string $value ): void {
        $this->countryLetterCode = $value;
    }

    /**
     * Sets the createdDateTime property value. Timestamp of when the organization was created. The value cannot be modified and is automatically populated when the organization is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the displayName property value. The display name for the tenant.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the organization resource. Nullable.
     *  @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value ): void {
        $this->extensions = $value;
    }

    /**
     * Sets the marketingNotificationEmails property value. Not nullable.
     *  @param array<string>|null $value Value to set for the marketingNotificationEmails property.
    */
    public function setMarketingNotificationEmails(?array $value ): void {
        $this->marketingNotificationEmails = $value;
    }

    /**
     * Sets the mobileDeviceManagementAuthority property value. Mobile device management authority. Possible values are: unknown, intune, sccm, office365.
     *  @param MdmAuthority|null $value Value to set for the mobileDeviceManagementAuthority property.
    */
    public function setMobileDeviceManagementAuthority(?MdmAuthority $value ): void {
        $this->mobileDeviceManagementAuthority = $value;
    }

    /**
     * Sets the onPremisesLastSyncDateTime property value. The time and date at which the tenant was last synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the onPremisesLastSyncDateTime property.
    */
    public function setOnPremisesLastSyncDateTime(?DateTime $value ): void {
        $this->onPremisesLastSyncDateTime = $value;
    }

    /**
     * Sets the onPremisesSyncEnabled property value. true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced; Nullable. null if this object has never been synced from an on-premises directory (default).
     *  @param bool|null $value Value to set for the onPremisesSyncEnabled property.
    */
    public function setOnPremisesSyncEnabled(?bool $value ): void {
        $this->onPremisesSyncEnabled = $value;
    }

    /**
     * Sets the postalCode property value. Postal code of the address for the organization.
     *  @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value ): void {
        $this->postalCode = $value;
    }

    /**
     * Sets the preferredLanguage property value. The preferred language for the organization. Should follow ISO 639-1 Code; for example en.
     *  @param string|null $value Value to set for the preferredLanguage property.
    */
    public function setPreferredLanguage(?string $value ): void {
        $this->preferredLanguage = $value;
    }

    /**
     * Sets the privacyProfile property value. The privacy profile of an organization.
     *  @param PrivacyProfile|null $value Value to set for the privacyProfile property.
    */
    public function setPrivacyProfile(?PrivacyProfile $value ): void {
        $this->privacyProfile = $value;
    }

    /**
     * Sets the provisionedPlans property value. Not nullable.
     *  @param array<ProvisionedPlan>|null $value Value to set for the provisionedPlans property.
    */
    public function setProvisionedPlans(?array $value ): void {
        $this->provisionedPlans = $value;
    }

    /**
     * Sets the securityComplianceNotificationMails property value. The securityComplianceNotificationMails property
     *  @param array<string>|null $value Value to set for the securityComplianceNotificationMails property.
    */
    public function setSecurityComplianceNotificationMails(?array $value ): void {
        $this->securityComplianceNotificationMails = $value;
    }

    /**
     * Sets the securityComplianceNotificationPhones property value. The securityComplianceNotificationPhones property
     *  @param array<string>|null $value Value to set for the securityComplianceNotificationPhones property.
    */
    public function setSecurityComplianceNotificationPhones(?array $value ): void {
        $this->securityComplianceNotificationPhones = $value;
    }

    /**
     * Sets the state property value. State name of the address for the organization.
     *  @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the street property value. Street name of the address for organization.
     *  @param string|null $value Value to set for the street property.
    */
    public function setStreet(?string $value ): void {
        $this->street = $value;
    }

    /**
     * Sets the technicalNotificationMails property value. Not nullable.
     *  @param array<string>|null $value Value to set for the technicalNotificationMails property.
    */
    public function setTechnicalNotificationMails(?array $value ): void {
        $this->technicalNotificationMails = $value;
    }

    /**
     * Sets the tenantType property value. The tenantType property
     *  @param string|null $value Value to set for the tenantType property.
    */
    public function setTenantType(?string $value ): void {
        $this->tenantType = $value;
    }

    /**
     * Sets the verifiedDomains property value. The collection of domains associated with this tenant. Not nullable.
     *  @param array<VerifiedDomain>|null $value Value to set for the verifiedDomains property.
    */
    public function setVerifiedDomains(?array $value ): void {
        $this->verifiedDomains = $value;
    }

}
