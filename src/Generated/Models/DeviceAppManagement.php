<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

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
        return $this->getBackingStore()->get('androidManagedAppProtections');
    }

    /**
     * Gets the defaultManagedAppProtections property value. Default managed app policies.
     * @return array<DefaultManagedAppProtection>|null
    */
    public function getDefaultManagedAppProtections(): ?array {
        return $this->getBackingStore()->get('defaultManagedAppProtections');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->getBackingStore()->get('iosManagedAppProtections');
    }

    /**
     * Gets the isEnabledForMicrosoftStoreForBusiness property value. Whether the account is enabled for syncing applications from the Microsoft Store for Business.
     * @return bool|null
    */
    public function getIsEnabledForMicrosoftStoreForBusiness(): ?bool {
        return $this->getBackingStore()->get('isEnabledForMicrosoftStoreForBusiness');
    }

    /**
     * Gets the managedAppPolicies property value. Managed app policies.
     * @return array<ManagedAppPolicy>|null
    */
    public function getManagedAppPolicies(): ?array {
        return $this->getBackingStore()->get('managedAppPolicies');
    }

    /**
     * Gets the managedAppRegistrations property value. The managed app registrations.
     * @return array<ManagedAppRegistration>|null
    */
    public function getManagedAppRegistrations(): ?array {
        return $this->getBackingStore()->get('managedAppRegistrations');
    }

    /**
     * Gets the managedAppStatuses property value. The managed app statuses.
     * @return array<ManagedAppStatus>|null
    */
    public function getManagedAppStatuses(): ?array {
        return $this->getBackingStore()->get('managedAppStatuses');
    }

    /**
     * Gets the managedEBooks property value. The Managed eBook.
     * @return array<ManagedEBook>|null
    */
    public function getManagedEBooks(): ?array {
        return $this->getBackingStore()->get('managedEBooks');
    }

    /**
     * Gets the mdmWindowsInformationProtectionPolicies property value. Windows information protection for apps running on devices which are MDM enrolled.
     * @return array<MdmWindowsInformationProtectionPolicy>|null
    */
    public function getMdmWindowsInformationProtectionPolicies(): ?array {
        return $this->getBackingStore()->get('mdmWindowsInformationProtectionPolicies');
    }

    /**
     * Gets the microsoftStoreForBusinessLanguage property value. The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -<country/regioncode2>, where  is a lowercase two-letter code derived from ISO 639-1 and <country/regioncode2> is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture.
     * @return string|null
    */
    public function getMicrosoftStoreForBusinessLanguage(): ?string {
        return $this->getBackingStore()->get('microsoftStoreForBusinessLanguage');
    }

    /**
     * Gets the microsoftStoreForBusinessLastCompletedApplicationSyncTime property value. The last time an application sync from the Microsoft Store for Business was completed.
     * @return DateTime|null
    */
    public function getMicrosoftStoreForBusinessLastCompletedApplicationSyncTime(): ?DateTime {
        return $this->getBackingStore()->get('microsoftStoreForBusinessLastCompletedApplicationSyncTime');
    }

    /**
     * Gets the microsoftStoreForBusinessLastSuccessfulSyncDateTime property value. The last time the apps from the Microsoft Store for Business were synced successfully for the account.
     * @return DateTime|null
    */
    public function getMicrosoftStoreForBusinessLastSuccessfulSyncDateTime(): ?DateTime {
        return $this->getBackingStore()->get('microsoftStoreForBusinessLastSuccessfulSyncDateTime');
    }

    /**
     * Gets the mobileAppCategories property value. The mobile app categories.
     * @return array<MobileAppCategory>|null
    */
    public function getMobileAppCategories(): ?array {
        return $this->getBackingStore()->get('mobileAppCategories');
    }

    /**
     * Gets the mobileAppConfigurations property value. The Managed Device Mobile Application Configurations.
     * @return array<ManagedDeviceMobileAppConfiguration>|null
    */
    public function getMobileAppConfigurations(): ?array {
        return $this->getBackingStore()->get('mobileAppConfigurations');
    }

    /**
     * Gets the mobileApps property value. The mobile apps.
     * @return array<MobileApp>|null
    */
    public function getMobileApps(): ?array {
        return $this->getBackingStore()->get('mobileApps');
    }

    /**
     * Gets the targetedManagedAppConfigurations property value. Targeted managed app configurations.
     * @return array<TargetedManagedAppConfiguration>|null
    */
    public function getTargetedManagedAppConfigurations(): ?array {
        return $this->getBackingStore()->get('targetedManagedAppConfigurations');
    }

    /**
     * Gets the vppTokens property value. List of Vpp tokens for this organization.
     * @return array<VppToken>|null
    */
    public function getVppTokens(): ?array {
        return $this->getBackingStore()->get('vppTokens');
    }

    /**
     * Gets the windowsInformationProtectionPolicies property value. Windows information protection for apps running on devices which are not MDM enrolled.
     * @return array<WindowsInformationProtectionPolicy>|null
    */
    public function getWindowsInformationProtectionPolicies(): ?array {
        return $this->getBackingStore()->get('windowsInformationProtectionPolicies');
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
        $writer->writeCollectionOfObjectValues('mobileApps', $this->getMobileApps());
        $writer->writeCollectionOfObjectValues('targetedManagedAppConfigurations', $this->getTargetedManagedAppConfigurations());
        $writer->writeCollectionOfObjectValues('vppTokens', $this->getVppTokens());
        $writer->writeCollectionOfObjectValues('windowsInformationProtectionPolicies', $this->getWindowsInformationProtectionPolicies());
    }

    /**
     * Sets the androidManagedAppProtections property value. Android managed app policies.
     *  @param array<AndroidManagedAppProtection>|null $value Value to set for the androidManagedAppProtections property.
    */
    public function setAndroidManagedAppProtections(?array $value): void {
        $this->getBackingStore()->set('androidManagedAppProtections', $value);
    }

    /**
     * Sets the defaultManagedAppProtections property value. Default managed app policies.
     *  @param array<DefaultManagedAppProtection>|null $value Value to set for the defaultManagedAppProtections property.
    */
    public function setDefaultManagedAppProtections(?array $value): void {
        $this->getBackingStore()->set('defaultManagedAppProtections', $value);
    }

    /**
     * Sets the iosManagedAppProtections property value. iOS managed app policies.
     *  @param array<IosManagedAppProtection>|null $value Value to set for the iosManagedAppProtections property.
    */
    public function setIosManagedAppProtections(?array $value): void {
        $this->getBackingStore()->set('iosManagedAppProtections', $value);
    }

    /**
     * Sets the isEnabledForMicrosoftStoreForBusiness property value. Whether the account is enabled for syncing applications from the Microsoft Store for Business.
     *  @param bool|null $value Value to set for the isEnabledForMicrosoftStoreForBusiness property.
    */
    public function setIsEnabledForMicrosoftStoreForBusiness(?bool $value): void {
        $this->getBackingStore()->set('isEnabledForMicrosoftStoreForBusiness', $value);
    }

    /**
     * Sets the managedAppPolicies property value. Managed app policies.
     *  @param array<ManagedAppPolicy>|null $value Value to set for the managedAppPolicies property.
    */
    public function setManagedAppPolicies(?array $value): void {
        $this->getBackingStore()->set('managedAppPolicies', $value);
    }

    /**
     * Sets the managedAppRegistrations property value. The managed app registrations.
     *  @param array<ManagedAppRegistration>|null $value Value to set for the managedAppRegistrations property.
    */
    public function setManagedAppRegistrations(?array $value): void {
        $this->getBackingStore()->set('managedAppRegistrations', $value);
    }

    /**
     * Sets the managedAppStatuses property value. The managed app statuses.
     *  @param array<ManagedAppStatus>|null $value Value to set for the managedAppStatuses property.
    */
    public function setManagedAppStatuses(?array $value): void {
        $this->getBackingStore()->set('managedAppStatuses', $value);
    }

    /**
     * Sets the managedEBooks property value. The Managed eBook.
     *  @param array<ManagedEBook>|null $value Value to set for the managedEBooks property.
    */
    public function setManagedEBooks(?array $value): void {
        $this->getBackingStore()->set('managedEBooks', $value);
    }

    /**
     * Sets the mdmWindowsInformationProtectionPolicies property value. Windows information protection for apps running on devices which are MDM enrolled.
     *  @param array<MdmWindowsInformationProtectionPolicy>|null $value Value to set for the mdmWindowsInformationProtectionPolicies property.
    */
    public function setMdmWindowsInformationProtectionPolicies(?array $value): void {
        $this->getBackingStore()->set('mdmWindowsInformationProtectionPolicies', $value);
    }

    /**
     * Sets the microsoftStoreForBusinessLanguage property value. The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -<country/regioncode2>, where  is a lowercase two-letter code derived from ISO 639-1 and <country/regioncode2> is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture.
     *  @param string|null $value Value to set for the microsoftStoreForBusinessLanguage property.
    */
    public function setMicrosoftStoreForBusinessLanguage(?string $value): void {
        $this->getBackingStore()->set('microsoftStoreForBusinessLanguage', $value);
    }

    /**
     * Sets the microsoftStoreForBusinessLastCompletedApplicationSyncTime property value. The last time an application sync from the Microsoft Store for Business was completed.
     *  @param DateTime|null $value Value to set for the microsoftStoreForBusinessLastCompletedApplicationSyncTime property.
    */
    public function setMicrosoftStoreForBusinessLastCompletedApplicationSyncTime(?DateTime $value): void {
        $this->getBackingStore()->set('microsoftStoreForBusinessLastCompletedApplicationSyncTime', $value);
    }

    /**
     * Sets the microsoftStoreForBusinessLastSuccessfulSyncDateTime property value. The last time the apps from the Microsoft Store for Business were synced successfully for the account.
     *  @param DateTime|null $value Value to set for the microsoftStoreForBusinessLastSuccessfulSyncDateTime property.
    */
    public function setMicrosoftStoreForBusinessLastSuccessfulSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('microsoftStoreForBusinessLastSuccessfulSyncDateTime', $value);
    }

    /**
     * Sets the mobileAppCategories property value. The mobile app categories.
     *  @param array<MobileAppCategory>|null $value Value to set for the mobileAppCategories property.
    */
    public function setMobileAppCategories(?array $value): void {
        $this->getBackingStore()->set('mobileAppCategories', $value);
    }

    /**
     * Sets the mobileAppConfigurations property value. The Managed Device Mobile Application Configurations.
     *  @param array<ManagedDeviceMobileAppConfiguration>|null $value Value to set for the mobileAppConfigurations property.
    */
    public function setMobileAppConfigurations(?array $value): void {
        $this->getBackingStore()->set('mobileAppConfigurations', $value);
    }

    /**
     * Sets the mobileApps property value. The mobile apps.
     *  @param array<MobileApp>|null $value Value to set for the mobileApps property.
    */
    public function setMobileApps(?array $value): void {
        $this->getBackingStore()->set('mobileApps', $value);
    }

    /**
     * Sets the targetedManagedAppConfigurations property value. Targeted managed app configurations.
     *  @param array<TargetedManagedAppConfiguration>|null $value Value to set for the targetedManagedAppConfigurations property.
    */
    public function setTargetedManagedAppConfigurations(?array $value): void {
        $this->getBackingStore()->set('targetedManagedAppConfigurations', $value);
    }

    /**
     * Sets the vppTokens property value. List of Vpp tokens for this organization.
     *  @param array<VppToken>|null $value Value to set for the vppTokens property.
    */
    public function setVppTokens(?array $value): void {
        $this->getBackingStore()->set('vppTokens', $value);
    }

    /**
     * Sets the windowsInformationProtectionPolicies property value. Windows information protection for apps running on devices which are not MDM enrolled.
     *  @param array<WindowsInformationProtectionPolicy>|null $value Value to set for the windowsInformationProtectionPolicies property.
    */
    public function setWindowsInformationProtectionPolicies(?array $value): void {
        $this->getBackingStore()->set('windowsInformationProtectionPolicies', $value);
    }

}
