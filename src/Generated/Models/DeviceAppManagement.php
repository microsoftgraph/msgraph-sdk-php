<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Singleton entity that acts as a container for all device app management functionality.
*/
class DeviceAppManagement extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceAppManagement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceAppManagement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceAppManagement {
        return new DeviceAppManagement();
    }

    /**
     * Gets the androidManagedAppProtections property value. Android managed app policies.
     * @return array<AndroidManagedAppProtection>|null
    */
    public function getAndroidManagedAppProtections(): ?array {
        $val = $this->getBackingStore()->get('androidManagedAppProtections');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AndroidManagedAppProtection::class);
            /** @var array<AndroidManagedAppProtection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidManagedAppProtections'");
    }

    /**
     * Gets the defaultManagedAppProtections property value. Default managed app policies.
     * @return array<DefaultManagedAppProtection>|null
    */
    public function getDefaultManagedAppProtections(): ?array {
        $val = $this->getBackingStore()->get('defaultManagedAppProtections');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DefaultManagedAppProtection::class);
            /** @var array<DefaultManagedAppProtection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultManagedAppProtections'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'androidManagedAppProtections' => fn(ParseNode $n) => $o->setAndroidManagedAppProtections($n->getCollectionOfObjectValues([AndroidManagedAppProtection::class, 'createFromDiscriminatorValue'])),
            'defaultManagedAppProtections' => fn(ParseNode $n) => $o->setDefaultManagedAppProtections($n->getCollectionOfObjectValues([DefaultManagedAppProtection::class, 'createFromDiscriminatorValue'])),
            'iosManagedAppProtections' => fn(ParseNode $n) => $o->setIosManagedAppProtections($n->getCollectionOfObjectValues([IosManagedAppProtection::class, 'createFromDiscriminatorValue'])),
            'isEnabledForMicrosoftStoreForBusiness' => fn(ParseNode $n) => $o->setIsEnabledForMicrosoftStoreForBusiness($n->getBooleanValue()),
            'managedAppPolicies' => fn(ParseNode $n) => $o->setManagedAppPolicies($n->getCollectionOfObjectValues([ManagedAppPolicy::class, 'createFromDiscriminatorValue'])),
            'managedAppRegistrations' => fn(ParseNode $n) => $o->setManagedAppRegistrations($n->getCollectionOfObjectValues([ManagedAppRegistration::class, 'createFromDiscriminatorValue'])),
            'managedAppStatuses' => fn(ParseNode $n) => $o->setManagedAppStatuses($n->getCollectionOfObjectValues([ManagedAppStatus::class, 'createFromDiscriminatorValue'])),
            'managedEBooks' => fn(ParseNode $n) => $o->setManagedEBooks($n->getCollectionOfObjectValues([ManagedEBook::class, 'createFromDiscriminatorValue'])),
            'mdmWindowsInformationProtectionPolicies' => fn(ParseNode $n) => $o->setMdmWindowsInformationProtectionPolicies($n->getCollectionOfObjectValues([MdmWindowsInformationProtectionPolicy::class, 'createFromDiscriminatorValue'])),
            'microsoftStoreForBusinessLanguage' => fn(ParseNode $n) => $o->setMicrosoftStoreForBusinessLanguage($n->getStringValue()),
            'microsoftStoreForBusinessLastCompletedApplicationSyncTime' => fn(ParseNode $n) => $o->setMicrosoftStoreForBusinessLastCompletedApplicationSyncTime($n->getDateTimeValue()),
            'microsoftStoreForBusinessLastSuccessfulSyncDateTime' => fn(ParseNode $n) => $o->setMicrosoftStoreForBusinessLastSuccessfulSyncDateTime($n->getDateTimeValue()),
            'mobileAppCategories' => fn(ParseNode $n) => $o->setMobileAppCategories($n->getCollectionOfObjectValues([MobileAppCategory::class, 'createFromDiscriminatorValue'])),
            'mobileAppConfigurations' => fn(ParseNode $n) => $o->setMobileAppConfigurations($n->getCollectionOfObjectValues([ManagedDeviceMobileAppConfiguration::class, 'createFromDiscriminatorValue'])),
            'mobileAppRelationships' => fn(ParseNode $n) => $o->setMobileAppRelationships($n->getCollectionOfObjectValues([MobileAppRelationship::class, 'createFromDiscriminatorValue'])),
            'mobileApps' => fn(ParseNode $n) => $o->setMobileApps($n->getCollectionOfObjectValues([MobileApp::class, 'createFromDiscriminatorValue'])),
            'targetedManagedAppConfigurations' => fn(ParseNode $n) => $o->setTargetedManagedAppConfigurations($n->getCollectionOfObjectValues([TargetedManagedAppConfiguration::class, 'createFromDiscriminatorValue'])),
            'vppTokens' => fn(ParseNode $n) => $o->setVppTokens($n->getCollectionOfObjectValues([VppToken::class, 'createFromDiscriminatorValue'])),
            'windowsInformationProtectionPolicies' => fn(ParseNode $n) => $o->setWindowsInformationProtectionPolicies($n->getCollectionOfObjectValues([WindowsInformationProtectionPolicy::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the iosManagedAppProtections property value. iOS managed app policies.
     * @return array<IosManagedAppProtection>|null
    */
    public function getIosManagedAppProtections(): ?array {
        $val = $this->getBackingStore()->get('iosManagedAppProtections');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IosManagedAppProtection::class);
            /** @var array<IosManagedAppProtection>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iosManagedAppProtections'");
    }

    /**
     * Gets the isEnabledForMicrosoftStoreForBusiness property value. Whether the account is enabled for syncing applications from the Microsoft Store for Business.
     * @return bool|null
    */
    public function getIsEnabledForMicrosoftStoreForBusiness(): ?bool {
        $val = $this->getBackingStore()->get('isEnabledForMicrosoftStoreForBusiness');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabledForMicrosoftStoreForBusiness'");
    }

    /**
     * Gets the managedAppPolicies property value. Managed app policies.
     * @return array<ManagedAppPolicy>|null
    */
    public function getManagedAppPolicies(): ?array {
        $val = $this->getBackingStore()->get('managedAppPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedAppPolicy::class);
            /** @var array<ManagedAppPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedAppPolicies'");
    }

    /**
     * Gets the managedAppRegistrations property value. The managed app registrations.
     * @return array<ManagedAppRegistration>|null
    */
    public function getManagedAppRegistrations(): ?array {
        $val = $this->getBackingStore()->get('managedAppRegistrations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedAppRegistration::class);
            /** @var array<ManagedAppRegistration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedAppRegistrations'");
    }

    /**
     * Gets the managedAppStatuses property value. The managed app statuses.
     * @return array<ManagedAppStatus>|null
    */
    public function getManagedAppStatuses(): ?array {
        $val = $this->getBackingStore()->get('managedAppStatuses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedAppStatus::class);
            /** @var array<ManagedAppStatus>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedAppStatuses'");
    }

    /**
     * Gets the managedEBooks property value. The Managed eBook.
     * @return array<ManagedEBook>|null
    */
    public function getManagedEBooks(): ?array {
        $val = $this->getBackingStore()->get('managedEBooks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedEBook::class);
            /** @var array<ManagedEBook>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedEBooks'");
    }

    /**
     * Gets the mdmWindowsInformationProtectionPolicies property value. Windows information protection for apps running on devices which are MDM enrolled.
     * @return array<MdmWindowsInformationProtectionPolicy>|null
    */
    public function getMdmWindowsInformationProtectionPolicies(): ?array {
        $val = $this->getBackingStore()->get('mdmWindowsInformationProtectionPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MdmWindowsInformationProtectionPolicy::class);
            /** @var array<MdmWindowsInformationProtectionPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mdmWindowsInformationProtectionPolicies'");
    }

    /**
     * Gets the microsoftStoreForBusinessLanguage property value. The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -<country/regioncode2>, where  is a lowercase two-letter code derived from ISO 639-1 and <country/regioncode2> is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture.
     * @return string|null
    */
    public function getMicrosoftStoreForBusinessLanguage(): ?string {
        $val = $this->getBackingStore()->get('microsoftStoreForBusinessLanguage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftStoreForBusinessLanguage'");
    }

    /**
     * Gets the microsoftStoreForBusinessLastCompletedApplicationSyncTime property value. The last time an application sync from the Microsoft Store for Business was completed.
     * @return DateTime|null
    */
    public function getMicrosoftStoreForBusinessLastCompletedApplicationSyncTime(): ?DateTime {
        $val = $this->getBackingStore()->get('microsoftStoreForBusinessLastCompletedApplicationSyncTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftStoreForBusinessLastCompletedApplicationSyncTime'");
    }

    /**
     * Gets the microsoftStoreForBusinessLastSuccessfulSyncDateTime property value. The last time the apps from the Microsoft Store for Business were synced successfully for the account.
     * @return DateTime|null
    */
    public function getMicrosoftStoreForBusinessLastSuccessfulSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('microsoftStoreForBusinessLastSuccessfulSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftStoreForBusinessLastSuccessfulSyncDateTime'");
    }

    /**
     * Gets the mobileAppCategories property value. The mobile app categories.
     * @return array<MobileAppCategory>|null
    */
    public function getMobileAppCategories(): ?array {
        $val = $this->getBackingStore()->get('mobileAppCategories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MobileAppCategory::class);
            /** @var array<MobileAppCategory>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileAppCategories'");
    }

    /**
     * Gets the mobileAppConfigurations property value. The Managed Device Mobile Application Configurations.
     * @return array<ManagedDeviceMobileAppConfiguration>|null
    */
    public function getMobileAppConfigurations(): ?array {
        $val = $this->getBackingStore()->get('mobileAppConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedDeviceMobileAppConfiguration::class);
            /** @var array<ManagedDeviceMobileAppConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileAppConfigurations'");
    }

    /**
     * Gets the mobileAppRelationships property value. The mobile app relationship represents the dependency or supersedence relationship between two Intune mobile LOB applications.
     * @return array<MobileAppRelationship>|null
    */
    public function getMobileAppRelationships(): ?array {
        $val = $this->getBackingStore()->get('mobileAppRelationships');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MobileAppRelationship::class);
            /** @var array<MobileAppRelationship>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileAppRelationships'");
    }

    /**
     * Gets the mobileApps property value. The mobile apps.
     * @return array<MobileApp>|null
    */
    public function getMobileApps(): ?array {
        $val = $this->getBackingStore()->get('mobileApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MobileApp::class);
            /** @var array<MobileApp>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mobileApps'");
    }

    /**
     * Gets the targetedManagedAppConfigurations property value. Targeted managed app configurations.
     * @return array<TargetedManagedAppConfiguration>|null
    */
    public function getTargetedManagedAppConfigurations(): ?array {
        $val = $this->getBackingStore()->get('targetedManagedAppConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TargetedManagedAppConfiguration::class);
            /** @var array<TargetedManagedAppConfiguration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetedManagedAppConfigurations'");
    }

    /**
     * Gets the vppTokens property value. List of Vpp tokens for this organization.
     * @return array<VppToken>|null
    */
    public function getVppTokens(): ?array {
        $val = $this->getBackingStore()->get('vppTokens');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VppToken::class);
            /** @var array<VppToken>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vppTokens'");
    }

    /**
     * Gets the windowsInformationProtectionPolicies property value. Windows information protection for apps running on devices which are not MDM enrolled.
     * @return array<WindowsInformationProtectionPolicy>|null
    */
    public function getWindowsInformationProtectionPolicies(): ?array {
        $val = $this->getBackingStore()->get('windowsInformationProtectionPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WindowsInformationProtectionPolicy::class);
            /** @var array<WindowsInformationProtectionPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsInformationProtectionPolicies'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('androidManagedAppProtections', $this->getAndroidManagedAppProtections());
        $writer->writeCollectionOfObjectValues('defaultManagedAppProtections', $this->getDefaultManagedAppProtections());
        $writer->writeCollectionOfObjectValues('iosManagedAppProtections', $this->getIosManagedAppProtections());
        $writer->writeBooleanValue('isEnabledForMicrosoftStoreForBusiness', $this->getIsEnabledForMicrosoftStoreForBusiness());
        $writer->writeCollectionOfObjectValues('managedAppPolicies', $this->getManagedAppPolicies());
        $writer->writeCollectionOfObjectValues('managedAppRegistrations', $this->getManagedAppRegistrations());
        $writer->writeCollectionOfObjectValues('managedAppStatuses', $this->getManagedAppStatuses());
        $writer->writeCollectionOfObjectValues('managedEBooks', $this->getManagedEBooks());
        $writer->writeCollectionOfObjectValues('mdmWindowsInformationProtectionPolicies', $this->getMdmWindowsInformationProtectionPolicies());
        $writer->writeStringValue('microsoftStoreForBusinessLanguage', $this->getMicrosoftStoreForBusinessLanguage());
        $writer->writeDateTimeValue('microsoftStoreForBusinessLastCompletedApplicationSyncTime', $this->getMicrosoftStoreForBusinessLastCompletedApplicationSyncTime());
        $writer->writeDateTimeValue('microsoftStoreForBusinessLastSuccessfulSyncDateTime', $this->getMicrosoftStoreForBusinessLastSuccessfulSyncDateTime());
        $writer->writeCollectionOfObjectValues('mobileAppCategories', $this->getMobileAppCategories());
        $writer->writeCollectionOfObjectValues('mobileAppConfigurations', $this->getMobileAppConfigurations());
        $writer->writeCollectionOfObjectValues('mobileAppRelationships', $this->getMobileAppRelationships());
        $writer->writeCollectionOfObjectValues('mobileApps', $this->getMobileApps());
        $writer->writeCollectionOfObjectValues('targetedManagedAppConfigurations', $this->getTargetedManagedAppConfigurations());
        $writer->writeCollectionOfObjectValues('vppTokens', $this->getVppTokens());
        $writer->writeCollectionOfObjectValues('windowsInformationProtectionPolicies', $this->getWindowsInformationProtectionPolicies());
    }

    /**
     * Sets the androidManagedAppProtections property value. Android managed app policies.
     * @param array<AndroidManagedAppProtection>|null $value Value to set for the androidManagedAppProtections property.
    */
    public function setAndroidManagedAppProtections(?array $value): void {
        $this->getBackingStore()->set('androidManagedAppProtections', $value);
    }

    /**
     * Sets the defaultManagedAppProtections property value. Default managed app policies.
     * @param array<DefaultManagedAppProtection>|null $value Value to set for the defaultManagedAppProtections property.
    */
    public function setDefaultManagedAppProtections(?array $value): void {
        $this->getBackingStore()->set('defaultManagedAppProtections', $value);
    }

    /**
     * Sets the iosManagedAppProtections property value. iOS managed app policies.
     * @param array<IosManagedAppProtection>|null $value Value to set for the iosManagedAppProtections property.
    */
    public function setIosManagedAppProtections(?array $value): void {
        $this->getBackingStore()->set('iosManagedAppProtections', $value);
    }

    /**
     * Sets the isEnabledForMicrosoftStoreForBusiness property value. Whether the account is enabled for syncing applications from the Microsoft Store for Business.
     * @param bool|null $value Value to set for the isEnabledForMicrosoftStoreForBusiness property.
    */
    public function setIsEnabledForMicrosoftStoreForBusiness(?bool $value): void {
        $this->getBackingStore()->set('isEnabledForMicrosoftStoreForBusiness', $value);
    }

    /**
     * Sets the managedAppPolicies property value. Managed app policies.
     * @param array<ManagedAppPolicy>|null $value Value to set for the managedAppPolicies property.
    */
    public function setManagedAppPolicies(?array $value): void {
        $this->getBackingStore()->set('managedAppPolicies', $value);
    }

    /**
     * Sets the managedAppRegistrations property value. The managed app registrations.
     * @param array<ManagedAppRegistration>|null $value Value to set for the managedAppRegistrations property.
    */
    public function setManagedAppRegistrations(?array $value): void {
        $this->getBackingStore()->set('managedAppRegistrations', $value);
    }

    /**
     * Sets the managedAppStatuses property value. The managed app statuses.
     * @param array<ManagedAppStatus>|null $value Value to set for the managedAppStatuses property.
    */
    public function setManagedAppStatuses(?array $value): void {
        $this->getBackingStore()->set('managedAppStatuses', $value);
    }

    /**
     * Sets the managedEBooks property value. The Managed eBook.
     * @param array<ManagedEBook>|null $value Value to set for the managedEBooks property.
    */
    public function setManagedEBooks(?array $value): void {
        $this->getBackingStore()->set('managedEBooks', $value);
    }

    /**
     * Sets the mdmWindowsInformationProtectionPolicies property value. Windows information protection for apps running on devices which are MDM enrolled.
     * @param array<MdmWindowsInformationProtectionPolicy>|null $value Value to set for the mdmWindowsInformationProtectionPolicies property.
    */
    public function setMdmWindowsInformationProtectionPolicies(?array $value): void {
        $this->getBackingStore()->set('mdmWindowsInformationProtectionPolicies', $value);
    }

    /**
     * Sets the microsoftStoreForBusinessLanguage property value. The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -<country/regioncode2>, where  is a lowercase two-letter code derived from ISO 639-1 and <country/regioncode2> is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture.
     * @param string|null $value Value to set for the microsoftStoreForBusinessLanguage property.
    */
    public function setMicrosoftStoreForBusinessLanguage(?string $value): void {
        $this->getBackingStore()->set('microsoftStoreForBusinessLanguage', $value);
    }

    /**
     * Sets the microsoftStoreForBusinessLastCompletedApplicationSyncTime property value. The last time an application sync from the Microsoft Store for Business was completed.
     * @param DateTime|null $value Value to set for the microsoftStoreForBusinessLastCompletedApplicationSyncTime property.
    */
    public function setMicrosoftStoreForBusinessLastCompletedApplicationSyncTime(?DateTime $value): void {
        $this->getBackingStore()->set('microsoftStoreForBusinessLastCompletedApplicationSyncTime', $value);
    }

    /**
     * Sets the microsoftStoreForBusinessLastSuccessfulSyncDateTime property value. The last time the apps from the Microsoft Store for Business were synced successfully for the account.
     * @param DateTime|null $value Value to set for the microsoftStoreForBusinessLastSuccessfulSyncDateTime property.
    */
    public function setMicrosoftStoreForBusinessLastSuccessfulSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('microsoftStoreForBusinessLastSuccessfulSyncDateTime', $value);
    }

    /**
     * Sets the mobileAppCategories property value. The mobile app categories.
     * @param array<MobileAppCategory>|null $value Value to set for the mobileAppCategories property.
    */
    public function setMobileAppCategories(?array $value): void {
        $this->getBackingStore()->set('mobileAppCategories', $value);
    }

    /**
     * Sets the mobileAppConfigurations property value. The Managed Device Mobile Application Configurations.
     * @param array<ManagedDeviceMobileAppConfiguration>|null $value Value to set for the mobileAppConfigurations property.
    */
    public function setMobileAppConfigurations(?array $value): void {
        $this->getBackingStore()->set('mobileAppConfigurations', $value);
    }

    /**
     * Sets the mobileAppRelationships property value. The mobile app relationship represents the dependency or supersedence relationship between two Intune mobile LOB applications.
     * @param array<MobileAppRelationship>|null $value Value to set for the mobileAppRelationships property.
    */
    public function setMobileAppRelationships(?array $value): void {
        $this->getBackingStore()->set('mobileAppRelationships', $value);
    }

    /**
     * Sets the mobileApps property value. The mobile apps.
     * @param array<MobileApp>|null $value Value to set for the mobileApps property.
    */
    public function setMobileApps(?array $value): void {
        $this->getBackingStore()->set('mobileApps', $value);
    }

    /**
     * Sets the targetedManagedAppConfigurations property value. Targeted managed app configurations.
     * @param array<TargetedManagedAppConfiguration>|null $value Value to set for the targetedManagedAppConfigurations property.
    */
    public function setTargetedManagedAppConfigurations(?array $value): void {
        $this->getBackingStore()->set('targetedManagedAppConfigurations', $value);
    }

    /**
     * Sets the vppTokens property value. List of Vpp tokens for this organization.
     * @param array<VppToken>|null $value Value to set for the vppTokens property.
    */
    public function setVppTokens(?array $value): void {
        $this->getBackingStore()->set('vppTokens', $value);
    }

    /**
     * Sets the windowsInformationProtectionPolicies property value. Windows information protection for apps running on devices which are not MDM enrolled.
     * @param array<WindowsInformationProtectionPolicy>|null $value Value to set for the windowsInformationProtectionPolicies property.
    */
    public function setWindowsInformationProtectionPolicies(?array $value): void {
        $this->getBackingStore()->set('windowsInformationProtectionPolicies', $value);
    }

}
