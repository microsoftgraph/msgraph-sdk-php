<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceAppManagement extends Entity implements Parsable 
{
    /**
     * @var array<AndroidManagedAppProtection>|null $androidManagedAppProtections Android managed app policies.
    */
    private ?array $androidManagedAppProtections = null;
    
    /**
     * @var array<DefaultManagedAppProtection>|null $defaultManagedAppProtections Default managed app policies.
    */
    private ?array $defaultManagedAppProtections = null;
    
    /**
     * @var array<IosManagedAppProtection>|null $iosManagedAppProtections iOS managed app policies.
    */
    private ?array $iosManagedAppProtections = null;
    
    /**
     * @var bool|null $isEnabledForMicrosoftStoreForBusiness Whether the account is enabled for syncing applications from the Microsoft Store for Business.
    */
    private ?bool $isEnabledForMicrosoftStoreForBusiness = null;
    
    /**
     * @var array<ManagedAppPolicy>|null $managedAppPolicies Managed app policies.
    */
    private ?array $managedAppPolicies = null;
    
    /**
     * @var array<ManagedAppRegistration>|null $managedAppRegistrations The managed app registrations.
    */
    private ?array $managedAppRegistrations = null;
    
    /**
     * @var array<ManagedAppStatus>|null $managedAppStatuses The managed app statuses.
    */
    private ?array $managedAppStatuses = null;
    
    /**
     * @var array<ManagedEBook>|null $managedEBooks The Managed eBook.
    */
    private ?array $managedEBooks = null;
    
    /**
     * @var array<MdmWindowsInformationProtectionPolicy>|null $mdmWindowsInformationProtectionPolicies Windows information protection for apps running on devices which are MDM enrolled.
    */
    private ?array $mdmWindowsInformationProtectionPolicies = null;
    
    /**
     * @var string|null $microsoftStoreForBusinessLanguage The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -<country/regioncode2>, where  is a lowercase two-letter code derived from ISO 639-1 and <country/regioncode2> is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture.
    */
    private ?string $microsoftStoreForBusinessLanguage = null;
    
    /**
     * @var DateTime|null $microsoftStoreForBusinessLastCompletedApplicationSyncTime The last time an application sync from the Microsoft Store for Business was completed.
    */
    private ?DateTime $microsoftStoreForBusinessLastCompletedApplicationSyncTime = null;
    
    /**
     * @var DateTime|null $microsoftStoreForBusinessLastSuccessfulSyncDateTime The last time the apps from the Microsoft Store for Business were synced successfully for the account.
    */
    private ?DateTime $microsoftStoreForBusinessLastSuccessfulSyncDateTime = null;
    
    /**
     * @var array<MobileAppCategory>|null $mobileAppCategories The mobile app categories.
    */
    private ?array $mobileAppCategories = null;
    
    /**
     * @var array<ManagedDeviceMobileAppConfiguration>|null $mobileAppConfigurations The Managed Device Mobile Application Configurations.
    */
    private ?array $mobileAppConfigurations = null;
    
    /**
     * @var array<MobileApp>|null $mobileApps The mobile apps.
    */
    private ?array $mobileApps = null;
    
    /**
     * @var array<TargetedManagedAppConfiguration>|null $targetedManagedAppConfigurations Targeted managed app configurations.
    */
    private ?array $targetedManagedAppConfigurations = null;
    
    /**
     * @var array<VppToken>|null $vppTokens List of Vpp tokens for this organization.
    */
    private ?array $vppTokens = null;
    
    /**
     * @var array<WindowsInformationProtectionPolicy>|null $windowsInformationProtectionPolicies Windows information protection for apps running on devices which are not MDM enrolled.
    */
    private ?array $windowsInformationProtectionPolicies = null;
    
    /**
     * Instantiates a new deviceAppManagement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceAppManagement');
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
        return $this->androidManagedAppProtections;
    }

    /**
     * Gets the defaultManagedAppProtections property value. Default managed app policies.
     * @return array<DefaultManagedAppProtection>|null
    */
    public function getDefaultManagedAppProtections(): ?array {
        return $this->defaultManagedAppProtections;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'androidManagedAppProtections' => function (ParseNode $n) use ($o) { $o->setAndroidManagedAppProtections($n->getCollectionOfObjectValues(array(AndroidManagedAppProtection::class, 'createFromDiscriminatorValue'))); },
            'defaultManagedAppProtections' => function (ParseNode $n) use ($o) { $o->setDefaultManagedAppProtections($n->getCollectionOfObjectValues(array(DefaultManagedAppProtection::class, 'createFromDiscriminatorValue'))); },
            'iosManagedAppProtections' => function (ParseNode $n) use ($o) { $o->setIosManagedAppProtections($n->getCollectionOfObjectValues(array(IosManagedAppProtection::class, 'createFromDiscriminatorValue'))); },
            'isEnabledForMicrosoftStoreForBusiness' => function (ParseNode $n) use ($o) { $o->setIsEnabledForMicrosoftStoreForBusiness($n->getBooleanValue()); },
            'managedAppPolicies' => function (ParseNode $n) use ($o) { $o->setManagedAppPolicies($n->getCollectionOfObjectValues(array(ManagedAppPolicy::class, 'createFromDiscriminatorValue'))); },
            'managedAppRegistrations' => function (ParseNode $n) use ($o) { $o->setManagedAppRegistrations($n->getCollectionOfObjectValues(array(ManagedAppRegistration::class, 'createFromDiscriminatorValue'))); },
            'managedAppStatuses' => function (ParseNode $n) use ($o) { $o->setManagedAppStatuses($n->getCollectionOfObjectValues(array(ManagedAppStatus::class, 'createFromDiscriminatorValue'))); },
            'managedEBooks' => function (ParseNode $n) use ($o) { $o->setManagedEBooks($n->getCollectionOfObjectValues(array(ManagedEBook::class, 'createFromDiscriminatorValue'))); },
            'mdmWindowsInformationProtectionPolicies' => function (ParseNode $n) use ($o) { $o->setMdmWindowsInformationProtectionPolicies($n->getCollectionOfObjectValues(array(MdmWindowsInformationProtectionPolicy::class, 'createFromDiscriminatorValue'))); },
            'microsoftStoreForBusinessLanguage' => function (ParseNode $n) use ($o) { $o->setMicrosoftStoreForBusinessLanguage($n->getStringValue()); },
            'microsoftStoreForBusinessLastCompletedApplicationSyncTime' => function (ParseNode $n) use ($o) { $o->setMicrosoftStoreForBusinessLastCompletedApplicationSyncTime($n->getDateTimeValue()); },
            'microsoftStoreForBusinessLastSuccessfulSyncDateTime' => function (ParseNode $n) use ($o) { $o->setMicrosoftStoreForBusinessLastSuccessfulSyncDateTime($n->getDateTimeValue()); },
            'mobileAppCategories' => function (ParseNode $n) use ($o) { $o->setMobileAppCategories($n->getCollectionOfObjectValues(array(MobileAppCategory::class, 'createFromDiscriminatorValue'))); },
            'mobileAppConfigurations' => function (ParseNode $n) use ($o) { $o->setMobileAppConfigurations($n->getCollectionOfObjectValues(array(ManagedDeviceMobileAppConfiguration::class, 'createFromDiscriminatorValue'))); },
            'mobileApps' => function (ParseNode $n) use ($o) { $o->setMobileApps($n->getCollectionOfObjectValues(array(MobileApp::class, 'createFromDiscriminatorValue'))); },
            'targetedManagedAppConfigurations' => function (ParseNode $n) use ($o) { $o->setTargetedManagedAppConfigurations($n->getCollectionOfObjectValues(array(TargetedManagedAppConfiguration::class, 'createFromDiscriminatorValue'))); },
            'vppTokens' => function (ParseNode $n) use ($o) { $o->setVppTokens($n->getCollectionOfObjectValues(array(VppToken::class, 'createFromDiscriminatorValue'))); },
            'windowsInformationProtectionPolicies' => function (ParseNode $n) use ($o) { $o->setWindowsInformationProtectionPolicies($n->getCollectionOfObjectValues(array(WindowsInformationProtectionPolicy::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the iosManagedAppProtections property value. iOS managed app policies.
     * @return array<IosManagedAppProtection>|null
    */
    public function getIosManagedAppProtections(): ?array {
        return $this->iosManagedAppProtections;
    }

    /**
     * Gets the isEnabledForMicrosoftStoreForBusiness property value. Whether the account is enabled for syncing applications from the Microsoft Store for Business.
     * @return bool|null
    */
    public function getIsEnabledForMicrosoftStoreForBusiness(): ?bool {
        return $this->isEnabledForMicrosoftStoreForBusiness;
    }

    /**
     * Gets the managedAppPolicies property value. Managed app policies.
     * @return array<ManagedAppPolicy>|null
    */
    public function getManagedAppPolicies(): ?array {
        return $this->managedAppPolicies;
    }

    /**
     * Gets the managedAppRegistrations property value. The managed app registrations.
     * @return array<ManagedAppRegistration>|null
    */
    public function getManagedAppRegistrations(): ?array {
        return $this->managedAppRegistrations;
    }

    /**
     * Gets the managedAppStatuses property value. The managed app statuses.
     * @return array<ManagedAppStatus>|null
    */
    public function getManagedAppStatuses(): ?array {
        return $this->managedAppStatuses;
    }

    /**
     * Gets the managedEBooks property value. The Managed eBook.
     * @return array<ManagedEBook>|null
    */
    public function getManagedEBooks(): ?array {
        return $this->managedEBooks;
    }

    /**
     * Gets the mdmWindowsInformationProtectionPolicies property value. Windows information protection for apps running on devices which are MDM enrolled.
     * @return array<MdmWindowsInformationProtectionPolicy>|null
    */
    public function getMdmWindowsInformationProtectionPolicies(): ?array {
        return $this->mdmWindowsInformationProtectionPolicies;
    }

    /**
     * Gets the microsoftStoreForBusinessLanguage property value. The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -<country/regioncode2>, where  is a lowercase two-letter code derived from ISO 639-1 and <country/regioncode2> is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture.
     * @return string|null
    */
    public function getMicrosoftStoreForBusinessLanguage(): ?string {
        return $this->microsoftStoreForBusinessLanguage;
    }

    /**
     * Gets the microsoftStoreForBusinessLastCompletedApplicationSyncTime property value. The last time an application sync from the Microsoft Store for Business was completed.
     * @return DateTime|null
    */
    public function getMicrosoftStoreForBusinessLastCompletedApplicationSyncTime(): ?DateTime {
        return $this->microsoftStoreForBusinessLastCompletedApplicationSyncTime;
    }

    /**
     * Gets the microsoftStoreForBusinessLastSuccessfulSyncDateTime property value. The last time the apps from the Microsoft Store for Business were synced successfully for the account.
     * @return DateTime|null
    */
    public function getMicrosoftStoreForBusinessLastSuccessfulSyncDateTime(): ?DateTime {
        return $this->microsoftStoreForBusinessLastSuccessfulSyncDateTime;
    }

    /**
     * Gets the mobileAppCategories property value. The mobile app categories.
     * @return array<MobileAppCategory>|null
    */
    public function getMobileAppCategories(): ?array {
        return $this->mobileAppCategories;
    }

    /**
     * Gets the mobileAppConfigurations property value. The Managed Device Mobile Application Configurations.
     * @return array<ManagedDeviceMobileAppConfiguration>|null
    */
    public function getMobileAppConfigurations(): ?array {
        return $this->mobileAppConfigurations;
    }

    /**
     * Gets the mobileApps property value. The mobile apps.
     * @return array<MobileApp>|null
    */
    public function getMobileApps(): ?array {
        return $this->mobileApps;
    }

    /**
     * Gets the targetedManagedAppConfigurations property value. Targeted managed app configurations.
     * @return array<TargetedManagedAppConfiguration>|null
    */
    public function getTargetedManagedAppConfigurations(): ?array {
        return $this->targetedManagedAppConfigurations;
    }

    /**
     * Gets the vppTokens property value. List of Vpp tokens for this organization.
     * @return array<VppToken>|null
    */
    public function getVppTokens(): ?array {
        return $this->vppTokens;
    }

    /**
     * Gets the windowsInformationProtectionPolicies property value. Windows information protection for apps running on devices which are not MDM enrolled.
     * @return array<WindowsInformationProtectionPolicy>|null
    */
    public function getWindowsInformationProtectionPolicies(): ?array {
        return $this->windowsInformationProtectionPolicies;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('androidManagedAppProtections', $this->androidManagedAppProtections);
        $writer->writeCollectionOfObjectValues('defaultManagedAppProtections', $this->defaultManagedAppProtections);
        $writer->writeCollectionOfObjectValues('iosManagedAppProtections', $this->iosManagedAppProtections);
        $writer->writeBooleanValue('isEnabledForMicrosoftStoreForBusiness', $this->isEnabledForMicrosoftStoreForBusiness);
        $writer->writeCollectionOfObjectValues('managedAppPolicies', $this->managedAppPolicies);
        $writer->writeCollectionOfObjectValues('managedAppRegistrations', $this->managedAppRegistrations);
        $writer->writeCollectionOfObjectValues('managedAppStatuses', $this->managedAppStatuses);
        $writer->writeCollectionOfObjectValues('managedEBooks', $this->managedEBooks);
        $writer->writeCollectionOfObjectValues('mdmWindowsInformationProtectionPolicies', $this->mdmWindowsInformationProtectionPolicies);
        $writer->writeStringValue('microsoftStoreForBusinessLanguage', $this->microsoftStoreForBusinessLanguage);
        $writer->writeDateTimeValue('microsoftStoreForBusinessLastCompletedApplicationSyncTime', $this->microsoftStoreForBusinessLastCompletedApplicationSyncTime);
        $writer->writeDateTimeValue('microsoftStoreForBusinessLastSuccessfulSyncDateTime', $this->microsoftStoreForBusinessLastSuccessfulSyncDateTime);
        $writer->writeCollectionOfObjectValues('mobileAppCategories', $this->mobileAppCategories);
        $writer->writeCollectionOfObjectValues('mobileAppConfigurations', $this->mobileAppConfigurations);
        $writer->writeCollectionOfObjectValues('mobileApps', $this->mobileApps);
        $writer->writeCollectionOfObjectValues('targetedManagedAppConfigurations', $this->targetedManagedAppConfigurations);
        $writer->writeCollectionOfObjectValues('vppTokens', $this->vppTokens);
        $writer->writeCollectionOfObjectValues('windowsInformationProtectionPolicies', $this->windowsInformationProtectionPolicies);
    }

    /**
     * Sets the androidManagedAppProtections property value. Android managed app policies.
     *  @param array<AndroidManagedAppProtection>|null $value Value to set for the androidManagedAppProtections property.
    */
    public function setAndroidManagedAppProtections(?array $value ): void {
        $this->androidManagedAppProtections = $value;
    }

    /**
     * Sets the defaultManagedAppProtections property value. Default managed app policies.
     *  @param array<DefaultManagedAppProtection>|null $value Value to set for the defaultManagedAppProtections property.
    */
    public function setDefaultManagedAppProtections(?array $value ): void {
        $this->defaultManagedAppProtections = $value;
    }

    /**
     * Sets the iosManagedAppProtections property value. iOS managed app policies.
     *  @param array<IosManagedAppProtection>|null $value Value to set for the iosManagedAppProtections property.
    */
    public function setIosManagedAppProtections(?array $value ): void {
        $this->iosManagedAppProtections = $value;
    }

    /**
     * Sets the isEnabledForMicrosoftStoreForBusiness property value. Whether the account is enabled for syncing applications from the Microsoft Store for Business.
     *  @param bool|null $value Value to set for the isEnabledForMicrosoftStoreForBusiness property.
    */
    public function setIsEnabledForMicrosoftStoreForBusiness(?bool $value ): void {
        $this->isEnabledForMicrosoftStoreForBusiness = $value;
    }

    /**
     * Sets the managedAppPolicies property value. Managed app policies.
     *  @param array<ManagedAppPolicy>|null $value Value to set for the managedAppPolicies property.
    */
    public function setManagedAppPolicies(?array $value ): void {
        $this->managedAppPolicies = $value;
    }

    /**
     * Sets the managedAppRegistrations property value. The managed app registrations.
     *  @param array<ManagedAppRegistration>|null $value Value to set for the managedAppRegistrations property.
    */
    public function setManagedAppRegistrations(?array $value ): void {
        $this->managedAppRegistrations = $value;
    }

    /**
     * Sets the managedAppStatuses property value. The managed app statuses.
     *  @param array<ManagedAppStatus>|null $value Value to set for the managedAppStatuses property.
    */
    public function setManagedAppStatuses(?array $value ): void {
        $this->managedAppStatuses = $value;
    }

    /**
     * Sets the managedEBooks property value. The Managed eBook.
     *  @param array<ManagedEBook>|null $value Value to set for the managedEBooks property.
    */
    public function setManagedEBooks(?array $value ): void {
        $this->managedEBooks = $value;
    }

    /**
     * Sets the mdmWindowsInformationProtectionPolicies property value. Windows information protection for apps running on devices which are MDM enrolled.
     *  @param array<MdmWindowsInformationProtectionPolicy>|null $value Value to set for the mdmWindowsInformationProtectionPolicies property.
    */
    public function setMdmWindowsInformationProtectionPolicies(?array $value ): void {
        $this->mdmWindowsInformationProtectionPolicies = $value;
    }

    /**
     * Sets the microsoftStoreForBusinessLanguage property value. The locale information used to sync applications from the Microsoft Store for Business. Cultures that are specific to a country/region. The names of these cultures follow RFC 4646 (Windows Vista and later). The format is -<country/regioncode2>, where  is a lowercase two-letter code derived from ISO 639-1 and <country/regioncode2> is an uppercase two-letter code derived from ISO 3166. For example, en-US for English (United States) is a specific culture.
     *  @param string|null $value Value to set for the microsoftStoreForBusinessLanguage property.
    */
    public function setMicrosoftStoreForBusinessLanguage(?string $value ): void {
        $this->microsoftStoreForBusinessLanguage = $value;
    }

    /**
     * Sets the microsoftStoreForBusinessLastCompletedApplicationSyncTime property value. The last time an application sync from the Microsoft Store for Business was completed.
     *  @param DateTime|null $value Value to set for the microsoftStoreForBusinessLastCompletedApplicationSyncTime property.
    */
    public function setMicrosoftStoreForBusinessLastCompletedApplicationSyncTime(?DateTime $value ): void {
        $this->microsoftStoreForBusinessLastCompletedApplicationSyncTime = $value;
    }

    /**
     * Sets the microsoftStoreForBusinessLastSuccessfulSyncDateTime property value. The last time the apps from the Microsoft Store for Business were synced successfully for the account.
     *  @param DateTime|null $value Value to set for the microsoftStoreForBusinessLastSuccessfulSyncDateTime property.
    */
    public function setMicrosoftStoreForBusinessLastSuccessfulSyncDateTime(?DateTime $value ): void {
        $this->microsoftStoreForBusinessLastSuccessfulSyncDateTime = $value;
    }

    /**
     * Sets the mobileAppCategories property value. The mobile app categories.
     *  @param array<MobileAppCategory>|null $value Value to set for the mobileAppCategories property.
    */
    public function setMobileAppCategories(?array $value ): void {
        $this->mobileAppCategories = $value;
    }

    /**
     * Sets the mobileAppConfigurations property value. The Managed Device Mobile Application Configurations.
     *  @param array<ManagedDeviceMobileAppConfiguration>|null $value Value to set for the mobileAppConfigurations property.
    */
    public function setMobileAppConfigurations(?array $value ): void {
        $this->mobileAppConfigurations = $value;
    }

    /**
     * Sets the mobileApps property value. The mobile apps.
     *  @param array<MobileApp>|null $value Value to set for the mobileApps property.
    */
    public function setMobileApps(?array $value ): void {
        $this->mobileApps = $value;
    }

    /**
     * Sets the targetedManagedAppConfigurations property value. Targeted managed app configurations.
     *  @param array<TargetedManagedAppConfiguration>|null $value Value to set for the targetedManagedAppConfigurations property.
    */
    public function setTargetedManagedAppConfigurations(?array $value ): void {
        $this->targetedManagedAppConfigurations = $value;
    }

    /**
     * Sets the vppTokens property value. List of Vpp tokens for this organization.
     *  @param array<VppToken>|null $value Value to set for the vppTokens property.
    */
    public function setVppTokens(?array $value ): void {
        $this->vppTokens = $value;
    }

    /**
     * Sets the windowsInformationProtectionPolicies property value. Windows information protection for apps running on devices which are not MDM enrolled.
     *  @param array<WindowsInformationProtectionPolicy>|null $value Value to set for the windowsInformationProtectionPolicies property.
    */
    public function setWindowsInformationProtectionPolicies(?array $value ): void {
        $this->windowsInformationProtectionPolicies = $value;
    }

}
