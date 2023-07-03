<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Organization extends DirectoryObject implements Parsable 
{
    /**
     * Instantiates a new Organization and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.organization');
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
        $val = $this->getBackingStore()->get('assignedPlans');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AssignedPlan::class);
            /** @var array<AssignedPlan>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedPlans'");
    }

    /**
     * Gets the branding property value. Branding for the organization. Nullable.
     * @return OrganizationalBranding|null
    */
    public function getBranding(): ?OrganizationalBranding {
        $val = $this->getBackingStore()->get('branding');
        if (is_null($val) || $val instanceof OrganizationalBranding) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'branding'");
    }

    /**
     * Gets the businessPhones property value. Telephone number for the organization. Although this is a string collection, only one number can be set for this property.
     * @return array<string>|null
    */
    public function getBusinessPhones(): ?array {
        $val = $this->getBackingStore()->get('businessPhones');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'businessPhones'");
    }

    /**
     * Gets the certificateBasedAuthConfiguration property value. Navigation property to manage certificate-based authentication configuration. Only a single instance of certificateBasedAuthConfiguration can be created in the collection.
     * @return array<CertificateBasedAuthConfiguration>|null
    */
    public function getCertificateBasedAuthConfiguration(): ?array {
        $val = $this->getBackingStore()->get('certificateBasedAuthConfiguration');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CertificateBasedAuthConfiguration::class);
            /** @var array<CertificateBasedAuthConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'certificateBasedAuthConfiguration'");
    }

    /**
     * Gets the city property value. City name of the address for the organization.
     * @return string|null
    */
    public function getCity(): ?string {
        $val = $this->getBackingStore()->get('city');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'city'");
    }

    /**
     * Gets the country property value. Country/region name of the address for the organization.
     * @return string|null
    */
    public function getCountry(): ?string {
        $val = $this->getBackingStore()->get('country');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'country'");
    }

    /**
     * Gets the countryLetterCode property value. Country or region abbreviation for the organization in ISO 3166-2 format.
     * @return string|null
    */
    public function getCountryLetterCode(): ?string {
        $val = $this->getBackingStore()->get('countryLetterCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countryLetterCode'");
    }

    /**
     * Gets the createdDateTime property value. Timestamp of when the organization was created. The value cannot be modified and is automatically populated when the organization is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
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
     * Gets the defaultUsageLocation property value. Two-letter ISO 3166 country code indicating the default service usage location of an organization.
     * @return string|null
    */
    public function getDefaultUsageLocation(): ?string {
        $val = $this->getBackingStore()->get('defaultUsageLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultUsageLocation'");
    }

    /**
     * Gets the displayName property value. The display name for the tenant.
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
     * Gets the extensions property value. The collection of open extensions defined for the organization. Read-only. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        $val = $this->getBackingStore()->get('extensions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Extension::class);
            /** @var array<Extension>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedPlans' => fn(ParseNode $n) => $o->setAssignedPlans($n->getCollectionOfObjectValues([AssignedPlan::class, 'createFromDiscriminatorValue'])),
            'branding' => fn(ParseNode $n) => $o->setBranding($n->getObjectValue([OrganizationalBranding::class, 'createFromDiscriminatorValue'])),
            'businessPhones' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setBusinessPhones($val);
            },
            'certificateBasedAuthConfiguration' => fn(ParseNode $n) => $o->setCertificateBasedAuthConfiguration($n->getCollectionOfObjectValues([CertificateBasedAuthConfiguration::class, 'createFromDiscriminatorValue'])),
            'city' => fn(ParseNode $n) => $o->setCity($n->getStringValue()),
            'country' => fn(ParseNode $n) => $o->setCountry($n->getStringValue()),
            'countryLetterCode' => fn(ParseNode $n) => $o->setCountryLetterCode($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'defaultUsageLocation' => fn(ParseNode $n) => $o->setDefaultUsageLocation($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getCollectionOfObjectValues([Extension::class, 'createFromDiscriminatorValue'])),
            'marketingNotificationEmails' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setMarketingNotificationEmails($val);
            },
            'mobileDeviceManagementAuthority' => fn(ParseNode $n) => $o->setMobileDeviceManagementAuthority($n->getEnumValue(MdmAuthority::class)),
            'onPremisesLastSyncDateTime' => fn(ParseNode $n) => $o->setOnPremisesLastSyncDateTime($n->getDateTimeValue()),
            'onPremisesSyncEnabled' => fn(ParseNode $n) => $o->setOnPremisesSyncEnabled($n->getBooleanValue()),
            'partnerTenantType' => fn(ParseNode $n) => $o->setPartnerTenantType($n->getEnumValue(PartnerTenantType::class)),
            'postalCode' => fn(ParseNode $n) => $o->setPostalCode($n->getStringValue()),
            'preferredLanguage' => fn(ParseNode $n) => $o->setPreferredLanguage($n->getStringValue()),
            'privacyProfile' => fn(ParseNode $n) => $o->setPrivacyProfile($n->getObjectValue([PrivacyProfile::class, 'createFromDiscriminatorValue'])),
            'provisionedPlans' => fn(ParseNode $n) => $o->setProvisionedPlans($n->getCollectionOfObjectValues([ProvisionedPlan::class, 'createFromDiscriminatorValue'])),
            'securityComplianceNotificationMails' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSecurityComplianceNotificationMails($val);
            },
            'securityComplianceNotificationPhones' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setSecurityComplianceNotificationPhones($val);
            },
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
            'street' => fn(ParseNode $n) => $o->setStreet($n->getStringValue()),
            'technicalNotificationMails' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTechnicalNotificationMails($val);
            },
            'tenantType' => fn(ParseNode $n) => $o->setTenantType($n->getStringValue()),
            'verifiedDomains' => fn(ParseNode $n) => $o->setVerifiedDomains($n->getCollectionOfObjectValues([VerifiedDomain::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the marketingNotificationEmails property value. Not nullable.
     * @return array<string>|null
    */
    public function getMarketingNotificationEmails(): ?array {
        $val = $this->getBackingStore()->get('marketingNotificationEmails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'marketingNotificationEmails'");
    }

    /**
     * Gets the mobileDeviceManagementAuthority property value. Mobile device management authority.
     * @return MdmAuthority|null
    */
    public function getMobileDeviceManagementAuthority(): ?MdmAuthority {
        $val = $this->getBackingStore()->get('mobileDeviceManagementAuthority');
        if (is_null($val) || $val instanceof MdmAuthority) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileDeviceManagementAuthority'");
    }

    /**
     * Gets the onPremisesLastSyncDateTime property value. The time and date at which the tenant was last synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getOnPremisesLastSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('onPremisesLastSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesLastSyncDateTime'");
    }

    /**
     * Gets the onPremisesSyncEnabled property value. true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced. Nullable. null if this object has never been synced from an on-premises directory (default).
     * @return bool|null
    */
    public function getOnPremisesSyncEnabled(): ?bool {
        $val = $this->getBackingStore()->get('onPremisesSyncEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesSyncEnabled'");
    }

    /**
     * Gets the partnerTenantType property value. The type of partnership this tenant has with Microsoft. The possible values are: microsoftSupport, syndicatePartner, breadthPartner, breadthPartnerDelegatedAdmin, resellerPartnerDelegatedAdmin, valueAddedResellerPartnerDelegatedAdmin, unknownFutureValue. Nullable. For more information about the possible types, see partnerTenantType values.
     * @return PartnerTenantType|null
    */
    public function getPartnerTenantType(): ?PartnerTenantType {
        $val = $this->getBackingStore()->get('partnerTenantType');
        if (is_null($val) || $val instanceof PartnerTenantType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partnerTenantType'");
    }

    /**
     * Gets the postalCode property value. Postal code of the address for the organization.
     * @return string|null
    */
    public function getPostalCode(): ?string {
        $val = $this->getBackingStore()->get('postalCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'postalCode'");
    }

    /**
     * Gets the preferredLanguage property value. The preferred language for the organization. Should follow ISO 639-1 Code; for example, en.
     * @return string|null
    */
    public function getPreferredLanguage(): ?string {
        $val = $this->getBackingStore()->get('preferredLanguage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preferredLanguage'");
    }

    /**
     * Gets the privacyProfile property value. The privacy profile of an organization.
     * @return PrivacyProfile|null
    */
    public function getPrivacyProfile(): ?PrivacyProfile {
        $val = $this->getBackingStore()->get('privacyProfile');
        if (is_null($val) || $val instanceof PrivacyProfile) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privacyProfile'");
    }

    /**
     * Gets the provisionedPlans property value. Not nullable.
     * @return array<ProvisionedPlan>|null
    */
    public function getProvisionedPlans(): ?array {
        $val = $this->getBackingStore()->get('provisionedPlans');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ProvisionedPlan::class);
            /** @var array<ProvisionedPlan>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provisionedPlans'");
    }

    /**
     * Gets the securityComplianceNotificationMails property value. Not nullable.
     * @return array<string>|null
    */
    public function getSecurityComplianceNotificationMails(): ?array {
        $val = $this->getBackingStore()->get('securityComplianceNotificationMails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityComplianceNotificationMails'");
    }

    /**
     * Gets the securityComplianceNotificationPhones property value. Not nullable.
     * @return array<string>|null
    */
    public function getSecurityComplianceNotificationPhones(): ?array {
        $val = $this->getBackingStore()->get('securityComplianceNotificationPhones');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityComplianceNotificationPhones'");
    }

    /**
     * Gets the state property value. State name of the address for the organization.
     * @return string|null
    */
    public function getState(): ?string {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the street property value. Street name of the address for organization.
     * @return string|null
    */
    public function getStreet(): ?string {
        $val = $this->getBackingStore()->get('street');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'street'");
    }

    /**
     * Gets the technicalNotificationMails property value. Not nullable.
     * @return array<string>|null
    */
    public function getTechnicalNotificationMails(): ?array {
        $val = $this->getBackingStore()->get('technicalNotificationMails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'technicalNotificationMails'");
    }

    /**
     * Gets the tenantType property value. Not nullable. The tenant type option that was selected when the tenant was created. The possible values are:  AAD - An enterprise identity access management (IAM) service that serves business-to-employee and business-to-business (B2B) scenarios.  AAD B2C A customer identity access management (CIAM) service that serves business-to-consumer (B2C) scenarios.
     * @return string|null
    */
    public function getTenantType(): ?string {
        $val = $this->getBackingStore()->get('tenantType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantType'");
    }

    /**
     * Gets the verifiedDomains property value. The collection of domains associated with this tenant. Not nullable.
     * @return array<VerifiedDomain>|null
    */
    public function getVerifiedDomains(): ?array {
        $val = $this->getBackingStore()->get('verifiedDomains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VerifiedDomain::class);
            /** @var array<VerifiedDomain>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verifiedDomains'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignedPlans', $this->getAssignedPlans());
        $writer->writeObjectValue('branding', $this->getBranding());
        $writer->writeCollectionOfPrimitiveValues('businessPhones', $this->getBusinessPhones());
        $writer->writeCollectionOfObjectValues('certificateBasedAuthConfiguration', $this->getCertificateBasedAuthConfiguration());
        $writer->writeStringValue('city', $this->getCity());
        $writer->writeStringValue('country', $this->getCountry());
        $writer->writeStringValue('countryLetterCode', $this->getCountryLetterCode());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('defaultUsageLocation', $this->getDefaultUsageLocation());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('extensions', $this->getExtensions());
        $writer->writeCollectionOfPrimitiveValues('marketingNotificationEmails', $this->getMarketingNotificationEmails());
        $writer->writeEnumValue('mobileDeviceManagementAuthority', $this->getMobileDeviceManagementAuthority());
        $writer->writeDateTimeValue('onPremisesLastSyncDateTime', $this->getOnPremisesLastSyncDateTime());
        $writer->writeBooleanValue('onPremisesSyncEnabled', $this->getOnPremisesSyncEnabled());
        $writer->writeEnumValue('partnerTenantType', $this->getPartnerTenantType());
        $writer->writeStringValue('postalCode', $this->getPostalCode());
        $writer->writeStringValue('preferredLanguage', $this->getPreferredLanguage());
        $writer->writeObjectValue('privacyProfile', $this->getPrivacyProfile());
        $writer->writeCollectionOfObjectValues('provisionedPlans', $this->getProvisionedPlans());
        $writer->writeCollectionOfPrimitiveValues('securityComplianceNotificationMails', $this->getSecurityComplianceNotificationMails());
        $writer->writeCollectionOfPrimitiveValues('securityComplianceNotificationPhones', $this->getSecurityComplianceNotificationPhones());
        $writer->writeStringValue('state', $this->getState());
        $writer->writeStringValue('street', $this->getStreet());
        $writer->writeCollectionOfPrimitiveValues('technicalNotificationMails', $this->getTechnicalNotificationMails());
        $writer->writeStringValue('tenantType', $this->getTenantType());
        $writer->writeCollectionOfObjectValues('verifiedDomains', $this->getVerifiedDomains());
    }

    /**
     * Sets the assignedPlans property value. The collection of service plans associated with the tenant. Not nullable.
     * @param array<AssignedPlan>|null $value Value to set for the assignedPlans property.
    */
    public function setAssignedPlans(?array $value): void {
        $this->getBackingStore()->set('assignedPlans', $value);
    }

    /**
     * Sets the branding property value. Branding for the organization. Nullable.
     * @param OrganizationalBranding|null $value Value to set for the branding property.
    */
    public function setBranding(?OrganizationalBranding $value): void {
        $this->getBackingStore()->set('branding', $value);
    }

    /**
     * Sets the businessPhones property value. Telephone number for the organization. Although this is a string collection, only one number can be set for this property.
     * @param array<string>|null $value Value to set for the businessPhones property.
    */
    public function setBusinessPhones(?array $value): void {
        $this->getBackingStore()->set('businessPhones', $value);
    }

    /**
     * Sets the certificateBasedAuthConfiguration property value. Navigation property to manage certificate-based authentication configuration. Only a single instance of certificateBasedAuthConfiguration can be created in the collection.
     * @param array<CertificateBasedAuthConfiguration>|null $value Value to set for the certificateBasedAuthConfiguration property.
    */
    public function setCertificateBasedAuthConfiguration(?array $value): void {
        $this->getBackingStore()->set('certificateBasedAuthConfiguration', $value);
    }

    /**
     * Sets the city property value. City name of the address for the organization.
     * @param string|null $value Value to set for the city property.
    */
    public function setCity(?string $value): void {
        $this->getBackingStore()->set('city', $value);
    }

    /**
     * Sets the country property value. Country/region name of the address for the organization.
     * @param string|null $value Value to set for the country property.
    */
    public function setCountry(?string $value): void {
        $this->getBackingStore()->set('country', $value);
    }

    /**
     * Sets the countryLetterCode property value. Country or region abbreviation for the organization in ISO 3166-2 format.
     * @param string|null $value Value to set for the countryLetterCode property.
    */
    public function setCountryLetterCode(?string $value): void {
        $this->getBackingStore()->set('countryLetterCode', $value);
    }

    /**
     * Sets the createdDateTime property value. Timestamp of when the organization was created. The value cannot be modified and is automatically populated when the organization is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the defaultUsageLocation property value. Two-letter ISO 3166 country code indicating the default service usage location of an organization.
     * @param string|null $value Value to set for the defaultUsageLocation property.
    */
    public function setDefaultUsageLocation(?string $value): void {
        $this->getBackingStore()->set('defaultUsageLocation', $value);
    }

    /**
     * Sets the displayName property value. The display name for the tenant.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the organization. Read-only. Nullable.
     * @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the marketingNotificationEmails property value. Not nullable.
     * @param array<string>|null $value Value to set for the marketingNotificationEmails property.
    */
    public function setMarketingNotificationEmails(?array $value): void {
        $this->getBackingStore()->set('marketingNotificationEmails', $value);
    }

    /**
     * Sets the mobileDeviceManagementAuthority property value. Mobile device management authority.
     * @param MdmAuthority|null $value Value to set for the mobileDeviceManagementAuthority property.
    */
    public function setMobileDeviceManagementAuthority(?MdmAuthority $value): void {
        $this->getBackingStore()->set('mobileDeviceManagementAuthority', $value);
    }

    /**
     * Sets the onPremisesLastSyncDateTime property value. The time and date at which the tenant was last synced with the on-premises directory. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the onPremisesLastSyncDateTime property.
    */
    public function setOnPremisesLastSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('onPremisesLastSyncDateTime', $value);
    }

    /**
     * Sets the onPremisesSyncEnabled property value. true if this object is synced from an on-premises directory; false if this object was originally synced from an on-premises directory but is no longer synced. Nullable. null if this object has never been synced from an on-premises directory (default).
     * @param bool|null $value Value to set for the onPremisesSyncEnabled property.
    */
    public function setOnPremisesSyncEnabled(?bool $value): void {
        $this->getBackingStore()->set('onPremisesSyncEnabled', $value);
    }

    /**
     * Sets the partnerTenantType property value. The type of partnership this tenant has with Microsoft. The possible values are: microsoftSupport, syndicatePartner, breadthPartner, breadthPartnerDelegatedAdmin, resellerPartnerDelegatedAdmin, valueAddedResellerPartnerDelegatedAdmin, unknownFutureValue. Nullable. For more information about the possible types, see partnerTenantType values.
     * @param PartnerTenantType|null $value Value to set for the partnerTenantType property.
    */
    public function setPartnerTenantType(?PartnerTenantType $value): void {
        $this->getBackingStore()->set('partnerTenantType', $value);
    }

    /**
     * Sets the postalCode property value. Postal code of the address for the organization.
     * @param string|null $value Value to set for the postalCode property.
    */
    public function setPostalCode(?string $value): void {
        $this->getBackingStore()->set('postalCode', $value);
    }

    /**
     * Sets the preferredLanguage property value. The preferred language for the organization. Should follow ISO 639-1 Code; for example, en.
     * @param string|null $value Value to set for the preferredLanguage property.
    */
    public function setPreferredLanguage(?string $value): void {
        $this->getBackingStore()->set('preferredLanguage', $value);
    }

    /**
     * Sets the privacyProfile property value. The privacy profile of an organization.
     * @param PrivacyProfile|null $value Value to set for the privacyProfile property.
    */
    public function setPrivacyProfile(?PrivacyProfile $value): void {
        $this->getBackingStore()->set('privacyProfile', $value);
    }

    /**
     * Sets the provisionedPlans property value. Not nullable.
     * @param array<ProvisionedPlan>|null $value Value to set for the provisionedPlans property.
    */
    public function setProvisionedPlans(?array $value): void {
        $this->getBackingStore()->set('provisionedPlans', $value);
    }

    /**
     * Sets the securityComplianceNotificationMails property value. Not nullable.
     * @param array<string>|null $value Value to set for the securityComplianceNotificationMails property.
    */
    public function setSecurityComplianceNotificationMails(?array $value): void {
        $this->getBackingStore()->set('securityComplianceNotificationMails', $value);
    }

    /**
     * Sets the securityComplianceNotificationPhones property value. Not nullable.
     * @param array<string>|null $value Value to set for the securityComplianceNotificationPhones property.
    */
    public function setSecurityComplianceNotificationPhones(?array $value): void {
        $this->getBackingStore()->set('securityComplianceNotificationPhones', $value);
    }

    /**
     * Sets the state property value. State name of the address for the organization.
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the street property value. Street name of the address for organization.
     * @param string|null $value Value to set for the street property.
    */
    public function setStreet(?string $value): void {
        $this->getBackingStore()->set('street', $value);
    }

    /**
     * Sets the technicalNotificationMails property value. Not nullable.
     * @param array<string>|null $value Value to set for the technicalNotificationMails property.
    */
    public function setTechnicalNotificationMails(?array $value): void {
        $this->getBackingStore()->set('technicalNotificationMails', $value);
    }

    /**
     * Sets the tenantType property value. Not nullable. The tenant type option that was selected when the tenant was created. The possible values are:  AAD - An enterprise identity access management (IAM) service that serves business-to-employee and business-to-business (B2B) scenarios.  AAD B2C A customer identity access management (CIAM) service that serves business-to-consumer (B2C) scenarios.
     * @param string|null $value Value to set for the tenantType property.
    */
    public function setTenantType(?string $value): void {
        $this->getBackingStore()->set('tenantType', $value);
    }

    /**
     * Sets the verifiedDomains property value. The collection of domains associated with this tenant. Not nullable.
     * @param array<VerifiedDomain>|null $value Value to set for the verifiedDomains property.
    */
    public function setVerifiedDomains(?array $value): void {
        $this->getBackingStore()->set('verifiedDomains', $value);
    }

}
