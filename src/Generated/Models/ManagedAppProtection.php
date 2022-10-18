<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedAppProtection extends ManagedAppPolicy implements Parsable 
{
    /**
     * @var array<ManagedAppDataStorageLocation>|null $allowedDataStorageLocations Data storage locations where a user may store managed data.
    */
    private ?array $allowedDataStorageLocations = null;
    
    /**
     * @var ManagedAppDataTransferLevel|null $allowedInboundDataTransferSources Data can be transferred from/to these classes of apps
    */
    private ?ManagedAppDataTransferLevel $allowedInboundDataTransferSources = null;
    
    /**
     * @var ManagedAppClipboardSharingLevel|null $allowedOutboundClipboardSharingLevel Represents the level to which the device's clipboard may be shared between apps
    */
    private ?ManagedAppClipboardSharingLevel $allowedOutboundClipboardSharingLevel = null;
    
    /**
     * @var ManagedAppDataTransferLevel|null $allowedOutboundDataTransferDestinations Data can be transferred from/to these classes of apps
    */
    private ?ManagedAppDataTransferLevel $allowedOutboundDataTransferDestinations = null;
    
    /**
     * @var bool|null $contactSyncBlocked Indicates whether contacts can be synced to the user's device.
    */
    private ?bool $contactSyncBlocked = null;
    
    /**
     * @var bool|null $dataBackupBlocked Indicates whether the backup of a managed app's data is blocked.
    */
    private ?bool $dataBackupBlocked = null;
    
    /**
     * @var bool|null $deviceComplianceRequired Indicates whether device compliance is required.
    */
    private ?bool $deviceComplianceRequired = null;
    
    /**
     * @var bool|null $disableAppPinIfDevicePinIsSet Indicates whether use of the app pin is required if the device pin is set.
    */
    private ?bool $disableAppPinIfDevicePinIsSet = null;
    
    /**
     * @var bool|null $fingerprintBlocked Indicates whether use of the fingerprint reader is allowed in place of a pin if PinRequired is set to True.
    */
    private ?bool $fingerprintBlocked = null;
    
    /**
     * @var ManagedBrowserType|null $managedBrowser Type of managed browser
    */
    private ?ManagedBrowserType $managedBrowser = null;
    
    /**
     * @var bool|null $managedBrowserToOpenLinksRequired Indicates whether internet links should be opened in the managed browser app, or any custom browser specified by CustomBrowserProtocol (for iOS) or CustomBrowserPackageId/CustomBrowserDisplayName (for Android)
    */
    private ?bool $managedBrowserToOpenLinksRequired = null;
    
    /**
     * @var int|null $maximumPinRetries Maximum number of incorrect pin retry attempts before the managed app is either blocked or wiped.
    */
    private ?int $maximumPinRetries = null;
    
    /**
     * @var int|null $minimumPinLength Minimum pin length required for an app-level pin if PinRequired is set to True
    */
    private ?int $minimumPinLength = null;
    
    /**
     * @var string|null $minimumRequiredAppVersion Versions less than the specified version will block the managed app from accessing company data.
    */
    private ?string $minimumRequiredAppVersion = null;
    
    /**
     * @var string|null $minimumRequiredOsVersion Versions less than the specified version will block the managed app from accessing company data.
    */
    private ?string $minimumRequiredOsVersion = null;
    
    /**
     * @var string|null $minimumWarningAppVersion Versions less than the specified version will result in warning message on the managed app.
    */
    private ?string $minimumWarningAppVersion = null;
    
    /**
     * @var string|null $minimumWarningOsVersion Versions less than the specified version will result in warning message on the managed app from accessing company data.
    */
    private ?string $minimumWarningOsVersion = null;
    
    /**
     * @var bool|null $organizationalCredentialsRequired Indicates whether organizational credentials are required for app use.
    */
    private ?bool $organizationalCredentialsRequired = null;
    
    /**
     * @var DateInterval|null $periodBeforePinReset TimePeriod before the all-level pin must be reset if PinRequired is set to True.
    */
    private ?DateInterval $periodBeforePinReset = null;
    
    /**
     * @var DateInterval|null $periodOfflineBeforeAccessCheck The period after which access is checked when the device is not connected to the internet.
    */
    private ?DateInterval $periodOfflineBeforeAccessCheck = null;
    
    /**
     * @var DateInterval|null $periodOfflineBeforeWipeIsEnforced The amount of time an app is allowed to remain disconnected from the internet before all managed data it is wiped.
    */
    private ?DateInterval $periodOfflineBeforeWipeIsEnforced = null;
    
    /**
     * @var DateInterval|null $periodOnlineBeforeAccessCheck The period after which access is checked when the device is connected to the internet.
    */
    private ?DateInterval $periodOnlineBeforeAccessCheck = null;
    
    /**
     * @var ManagedAppPinCharacterSet|null $pinCharacterSet Character set which is to be used for a user's app PIN
    */
    private ?ManagedAppPinCharacterSet $pinCharacterSet = null;
    
    /**
     * @var bool|null $pinRequired Indicates whether an app-level pin is required.
    */
    private ?bool $pinRequired = null;
    
    /**
     * @var bool|null $printBlocked Indicates whether printing is allowed from managed apps.
    */
    private ?bool $printBlocked = null;
    
    /**
     * @var bool|null $saveAsBlocked Indicates whether users may use the 'Save As' menu item to save a copy of protected files.
    */
    private ?bool $saveAsBlocked = null;
    
    /**
     * @var bool|null $simplePinBlocked Indicates whether simplePin is blocked.
    */
    private ?bool $simplePinBlocked = null;
    
    /**
     * Instantiates a new ManagedAppProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedAppProtection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedAppProtection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedAppProtection {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidManagedAppProtection': return new AndroidManagedAppProtection();
                case '#microsoft.graph.defaultManagedAppProtection': return new DefaultManagedAppProtection();
                case '#microsoft.graph.iosManagedAppProtection': return new IosManagedAppProtection();
                case '#microsoft.graph.targetedManagedAppProtection': return new TargetedManagedAppProtection();
            }
        }
        return new ManagedAppProtection();
    }

    /**
     * Gets the allowedDataStorageLocations property value. Data storage locations where a user may store managed data.
     * @return array<ManagedAppDataStorageLocation>|null
    */
    public function getAllowedDataStorageLocations(): ?array {
        return $this->allowedDataStorageLocations;
    }

    /**
     * Gets the allowedInboundDataTransferSources property value. Data can be transferred from/to these classes of apps
     * @return ManagedAppDataTransferLevel|null
    */
    public function getAllowedInboundDataTransferSources(): ?ManagedAppDataTransferLevel {
        return $this->allowedInboundDataTransferSources;
    }

    /**
     * Gets the allowedOutboundClipboardSharingLevel property value. Represents the level to which the device's clipboard may be shared between apps
     * @return ManagedAppClipboardSharingLevel|null
    */
    public function getAllowedOutboundClipboardSharingLevel(): ?ManagedAppClipboardSharingLevel {
        return $this->allowedOutboundClipboardSharingLevel;
    }

    /**
     * Gets the allowedOutboundDataTransferDestinations property value. Data can be transferred from/to these classes of apps
     * @return ManagedAppDataTransferLevel|null
    */
    public function getAllowedOutboundDataTransferDestinations(): ?ManagedAppDataTransferLevel {
        return $this->allowedOutboundDataTransferDestinations;
    }

    /**
     * Gets the contactSyncBlocked property value. Indicates whether contacts can be synced to the user's device.
     * @return bool|null
    */
    public function getContactSyncBlocked(): ?bool {
        return $this->contactSyncBlocked;
    }

    /**
     * Gets the dataBackupBlocked property value. Indicates whether the backup of a managed app's data is blocked.
     * @return bool|null
    */
    public function getDataBackupBlocked(): ?bool {
        return $this->dataBackupBlocked;
    }

    /**
     * Gets the deviceComplianceRequired property value. Indicates whether device compliance is required.
     * @return bool|null
    */
    public function getDeviceComplianceRequired(): ?bool {
        return $this->deviceComplianceRequired;
    }

    /**
     * Gets the disableAppPinIfDevicePinIsSet property value. Indicates whether use of the app pin is required if the device pin is set.
     * @return bool|null
    */
    public function getDisableAppPinIfDevicePinIsSet(): ?bool {
        return $this->disableAppPinIfDevicePinIsSet;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedDataStorageLocations' => fn(ParseNode $n) => $o->setAllowedDataStorageLocations($n->getCollectionOfEnumValues(ManagedAppDataStorageLocation::class)),
            'allowedInboundDataTransferSources' => fn(ParseNode $n) => $o->setAllowedInboundDataTransferSources($n->getEnumValue(ManagedAppDataTransferLevel::class)),
            'allowedOutboundClipboardSharingLevel' => fn(ParseNode $n) => $o->setAllowedOutboundClipboardSharingLevel($n->getEnumValue(ManagedAppClipboardSharingLevel::class)),
            'allowedOutboundDataTransferDestinations' => fn(ParseNode $n) => $o->setAllowedOutboundDataTransferDestinations($n->getEnumValue(ManagedAppDataTransferLevel::class)),
            'contactSyncBlocked' => fn(ParseNode $n) => $o->setContactSyncBlocked($n->getBooleanValue()),
            'dataBackupBlocked' => fn(ParseNode $n) => $o->setDataBackupBlocked($n->getBooleanValue()),
            'deviceComplianceRequired' => fn(ParseNode $n) => $o->setDeviceComplianceRequired($n->getBooleanValue()),
            'disableAppPinIfDevicePinIsSet' => fn(ParseNode $n) => $o->setDisableAppPinIfDevicePinIsSet($n->getBooleanValue()),
            'fingerprintBlocked' => fn(ParseNode $n) => $o->setFingerprintBlocked($n->getBooleanValue()),
            'managedBrowser' => fn(ParseNode $n) => $o->setManagedBrowser($n->getEnumValue(ManagedBrowserType::class)),
            'managedBrowserToOpenLinksRequired' => fn(ParseNode $n) => $o->setManagedBrowserToOpenLinksRequired($n->getBooleanValue()),
            'maximumPinRetries' => fn(ParseNode $n) => $o->setMaximumPinRetries($n->getIntegerValue()),
            'minimumPinLength' => fn(ParseNode $n) => $o->setMinimumPinLength($n->getIntegerValue()),
            'minimumRequiredAppVersion' => fn(ParseNode $n) => $o->setMinimumRequiredAppVersion($n->getStringValue()),
            'minimumRequiredOsVersion' => fn(ParseNode $n) => $o->setMinimumRequiredOsVersion($n->getStringValue()),
            'minimumWarningAppVersion' => fn(ParseNode $n) => $o->setMinimumWarningAppVersion($n->getStringValue()),
            'minimumWarningOsVersion' => fn(ParseNode $n) => $o->setMinimumWarningOsVersion($n->getStringValue()),
            'organizationalCredentialsRequired' => fn(ParseNode $n) => $o->setOrganizationalCredentialsRequired($n->getBooleanValue()),
            'periodBeforePinReset' => fn(ParseNode $n) => $o->setPeriodBeforePinReset($n->getDateIntervalValue()),
            'periodOfflineBeforeAccessCheck' => fn(ParseNode $n) => $o->setPeriodOfflineBeforeAccessCheck($n->getDateIntervalValue()),
            'periodOfflineBeforeWipeIsEnforced' => fn(ParseNode $n) => $o->setPeriodOfflineBeforeWipeIsEnforced($n->getDateIntervalValue()),
            'periodOnlineBeforeAccessCheck' => fn(ParseNode $n) => $o->setPeriodOnlineBeforeAccessCheck($n->getDateIntervalValue()),
            'pinCharacterSet' => fn(ParseNode $n) => $o->setPinCharacterSet($n->getEnumValue(ManagedAppPinCharacterSet::class)),
            'pinRequired' => fn(ParseNode $n) => $o->setPinRequired($n->getBooleanValue()),
            'printBlocked' => fn(ParseNode $n) => $o->setPrintBlocked($n->getBooleanValue()),
            'saveAsBlocked' => fn(ParseNode $n) => $o->setSaveAsBlocked($n->getBooleanValue()),
            'simplePinBlocked' => fn(ParseNode $n) => $o->setSimplePinBlocked($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the fingerprintBlocked property value. Indicates whether use of the fingerprint reader is allowed in place of a pin if PinRequired is set to True.
     * @return bool|null
    */
    public function getFingerprintBlocked(): ?bool {
        return $this->fingerprintBlocked;
    }

    /**
     * Gets the managedBrowser property value. Type of managed browser
     * @return ManagedBrowserType|null
    */
    public function getManagedBrowser(): ?ManagedBrowserType {
        return $this->managedBrowser;
    }

    /**
     * Gets the managedBrowserToOpenLinksRequired property value. Indicates whether internet links should be opened in the managed browser app, or any custom browser specified by CustomBrowserProtocol (for iOS) or CustomBrowserPackageId/CustomBrowserDisplayName (for Android)
     * @return bool|null
    */
    public function getManagedBrowserToOpenLinksRequired(): ?bool {
        return $this->managedBrowserToOpenLinksRequired;
    }

    /**
     * Gets the maximumPinRetries property value. Maximum number of incorrect pin retry attempts before the managed app is either blocked or wiped.
     * @return int|null
    */
    public function getMaximumPinRetries(): ?int {
        return $this->maximumPinRetries;
    }

    /**
     * Gets the minimumPinLength property value. Minimum pin length required for an app-level pin if PinRequired is set to True
     * @return int|null
    */
    public function getMinimumPinLength(): ?int {
        return $this->minimumPinLength;
    }

    /**
     * Gets the minimumRequiredAppVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @return string|null
    */
    public function getMinimumRequiredAppVersion(): ?string {
        return $this->minimumRequiredAppVersion;
    }

    /**
     * Gets the minimumRequiredOsVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @return string|null
    */
    public function getMinimumRequiredOsVersion(): ?string {
        return $this->minimumRequiredOsVersion;
    }

    /**
     * Gets the minimumWarningAppVersion property value. Versions less than the specified version will result in warning message on the managed app.
     * @return string|null
    */
    public function getMinimumWarningAppVersion(): ?string {
        return $this->minimumWarningAppVersion;
    }

    /**
     * Gets the minimumWarningOsVersion property value. Versions less than the specified version will result in warning message on the managed app from accessing company data.
     * @return string|null
    */
    public function getMinimumWarningOsVersion(): ?string {
        return $this->minimumWarningOsVersion;
    }

    /**
     * Gets the organizationalCredentialsRequired property value. Indicates whether organizational credentials are required for app use.
     * @return bool|null
    */
    public function getOrganizationalCredentialsRequired(): ?bool {
        return $this->organizationalCredentialsRequired;
    }

    /**
     * Gets the periodBeforePinReset property value. TimePeriod before the all-level pin must be reset if PinRequired is set to True.
     * @return DateInterval|null
    */
    public function getPeriodBeforePinReset(): ?DateInterval {
        return $this->periodBeforePinReset;
    }

    /**
     * Gets the periodOfflineBeforeAccessCheck property value. The period after which access is checked when the device is not connected to the internet.
     * @return DateInterval|null
    */
    public function getPeriodOfflineBeforeAccessCheck(): ?DateInterval {
        return $this->periodOfflineBeforeAccessCheck;
    }

    /**
     * Gets the periodOfflineBeforeWipeIsEnforced property value. The amount of time an app is allowed to remain disconnected from the internet before all managed data it is wiped.
     * @return DateInterval|null
    */
    public function getPeriodOfflineBeforeWipeIsEnforced(): ?DateInterval {
        return $this->periodOfflineBeforeWipeIsEnforced;
    }

    /**
     * Gets the periodOnlineBeforeAccessCheck property value. The period after which access is checked when the device is connected to the internet.
     * @return DateInterval|null
    */
    public function getPeriodOnlineBeforeAccessCheck(): ?DateInterval {
        return $this->periodOnlineBeforeAccessCheck;
    }

    /**
     * Gets the pinCharacterSet property value. Character set which is to be used for a user's app PIN
     * @return ManagedAppPinCharacterSet|null
    */
    public function getPinCharacterSet(): ?ManagedAppPinCharacterSet {
        return $this->pinCharacterSet;
    }

    /**
     * Gets the pinRequired property value. Indicates whether an app-level pin is required.
     * @return bool|null
    */
    public function getPinRequired(): ?bool {
        return $this->pinRequired;
    }

    /**
     * Gets the printBlocked property value. Indicates whether printing is allowed from managed apps.
     * @return bool|null
    */
    public function getPrintBlocked(): ?bool {
        return $this->printBlocked;
    }

    /**
     * Gets the saveAsBlocked property value. Indicates whether users may use the 'Save As' menu item to save a copy of protected files.
     * @return bool|null
    */
    public function getSaveAsBlocked(): ?bool {
        return $this->saveAsBlocked;
    }

    /**
     * Gets the simplePinBlocked property value. Indicates whether simplePin is blocked.
     * @return bool|null
    */
    public function getSimplePinBlocked(): ?bool {
        return $this->simplePinBlocked;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfEnumValues('allowedDataStorageLocations', $this->allowedDataStorageLocations);
        $writer->writeEnumValue('allowedInboundDataTransferSources', $this->allowedInboundDataTransferSources);
        $writer->writeEnumValue('allowedOutboundClipboardSharingLevel', $this->allowedOutboundClipboardSharingLevel);
        $writer->writeEnumValue('allowedOutboundDataTransferDestinations', $this->allowedOutboundDataTransferDestinations);
        $writer->writeBooleanValue('contactSyncBlocked', $this->contactSyncBlocked);
        $writer->writeBooleanValue('dataBackupBlocked', $this->dataBackupBlocked);
        $writer->writeBooleanValue('deviceComplianceRequired', $this->deviceComplianceRequired);
        $writer->writeBooleanValue('disableAppPinIfDevicePinIsSet', $this->disableAppPinIfDevicePinIsSet);
        $writer->writeBooleanValue('fingerprintBlocked', $this->fingerprintBlocked);
        $writer->writeEnumValue('managedBrowser', $this->managedBrowser);
        $writer->writeBooleanValue('managedBrowserToOpenLinksRequired', $this->managedBrowserToOpenLinksRequired);
        $writer->writeIntegerValue('maximumPinRetries', $this->maximumPinRetries);
        $writer->writeIntegerValue('minimumPinLength', $this->minimumPinLength);
        $writer->writeStringValue('minimumRequiredAppVersion', $this->minimumRequiredAppVersion);
        $writer->writeStringValue('minimumRequiredOsVersion', $this->minimumRequiredOsVersion);
        $writer->writeStringValue('minimumWarningAppVersion', $this->minimumWarningAppVersion);
        $writer->writeStringValue('minimumWarningOsVersion', $this->minimumWarningOsVersion);
        $writer->writeBooleanValue('organizationalCredentialsRequired', $this->organizationalCredentialsRequired);
        $writer->writeDateIntervalValue('periodBeforePinReset', $this->periodBeforePinReset);
        $writer->writeDateIntervalValue('periodOfflineBeforeAccessCheck', $this->periodOfflineBeforeAccessCheck);
        $writer->writeDateIntervalValue('periodOfflineBeforeWipeIsEnforced', $this->periodOfflineBeforeWipeIsEnforced);
        $writer->writeDateIntervalValue('periodOnlineBeforeAccessCheck', $this->periodOnlineBeforeAccessCheck);
        $writer->writeEnumValue('pinCharacterSet', $this->pinCharacterSet);
        $writer->writeBooleanValue('pinRequired', $this->pinRequired);
        $writer->writeBooleanValue('printBlocked', $this->printBlocked);
        $writer->writeBooleanValue('saveAsBlocked', $this->saveAsBlocked);
        $writer->writeBooleanValue('simplePinBlocked', $this->simplePinBlocked);
    }

    /**
     * Sets the allowedDataStorageLocations property value. Data storage locations where a user may store managed data.
     *  @param array<ManagedAppDataStorageLocation>|null $value Value to set for the allowedDataStorageLocations property.
    */
    public function setAllowedDataStorageLocations(?array $value ): void {
        $this->allowedDataStorageLocations = $value;
    }

    /**
     * Sets the allowedInboundDataTransferSources property value. Data can be transferred from/to these classes of apps
     *  @param ManagedAppDataTransferLevel|null $value Value to set for the allowedInboundDataTransferSources property.
    */
    public function setAllowedInboundDataTransferSources(?ManagedAppDataTransferLevel $value ): void {
        $this->allowedInboundDataTransferSources = $value;
    }

    /**
     * Sets the allowedOutboundClipboardSharingLevel property value. Represents the level to which the device's clipboard may be shared between apps
     *  @param ManagedAppClipboardSharingLevel|null $value Value to set for the allowedOutboundClipboardSharingLevel property.
    */
    public function setAllowedOutboundClipboardSharingLevel(?ManagedAppClipboardSharingLevel $value ): void {
        $this->allowedOutboundClipboardSharingLevel = $value;
    }

    /**
     * Sets the allowedOutboundDataTransferDestinations property value. Data can be transferred from/to these classes of apps
     *  @param ManagedAppDataTransferLevel|null $value Value to set for the allowedOutboundDataTransferDestinations property.
    */
    public function setAllowedOutboundDataTransferDestinations(?ManagedAppDataTransferLevel $value ): void {
        $this->allowedOutboundDataTransferDestinations = $value;
    }

    /**
     * Sets the contactSyncBlocked property value. Indicates whether contacts can be synced to the user's device.
     *  @param bool|null $value Value to set for the contactSyncBlocked property.
    */
    public function setContactSyncBlocked(?bool $value ): void {
        $this->contactSyncBlocked = $value;
    }

    /**
     * Sets the dataBackupBlocked property value. Indicates whether the backup of a managed app's data is blocked.
     *  @param bool|null $value Value to set for the dataBackupBlocked property.
    */
    public function setDataBackupBlocked(?bool $value ): void {
        $this->dataBackupBlocked = $value;
    }

    /**
     * Sets the deviceComplianceRequired property value. Indicates whether device compliance is required.
     *  @param bool|null $value Value to set for the deviceComplianceRequired property.
    */
    public function setDeviceComplianceRequired(?bool $value ): void {
        $this->deviceComplianceRequired = $value;
    }

    /**
     * Sets the disableAppPinIfDevicePinIsSet property value. Indicates whether use of the app pin is required if the device pin is set.
     *  @param bool|null $value Value to set for the disableAppPinIfDevicePinIsSet property.
    */
    public function setDisableAppPinIfDevicePinIsSet(?bool $value ): void {
        $this->disableAppPinIfDevicePinIsSet = $value;
    }

    /**
     * Sets the fingerprintBlocked property value. Indicates whether use of the fingerprint reader is allowed in place of a pin if PinRequired is set to True.
     *  @param bool|null $value Value to set for the fingerprintBlocked property.
    */
    public function setFingerprintBlocked(?bool $value ): void {
        $this->fingerprintBlocked = $value;
    }

    /**
     * Sets the managedBrowser property value. Type of managed browser
     *  @param ManagedBrowserType|null $value Value to set for the managedBrowser property.
    */
    public function setManagedBrowser(?ManagedBrowserType $value ): void {
        $this->managedBrowser = $value;
    }

    /**
     * Sets the managedBrowserToOpenLinksRequired property value. Indicates whether internet links should be opened in the managed browser app, or any custom browser specified by CustomBrowserProtocol (for iOS) or CustomBrowserPackageId/CustomBrowserDisplayName (for Android)
     *  @param bool|null $value Value to set for the managedBrowserToOpenLinksRequired property.
    */
    public function setManagedBrowserToOpenLinksRequired(?bool $value ): void {
        $this->managedBrowserToOpenLinksRequired = $value;
    }

    /**
     * Sets the maximumPinRetries property value. Maximum number of incorrect pin retry attempts before the managed app is either blocked or wiped.
     *  @param int|null $value Value to set for the maximumPinRetries property.
    */
    public function setMaximumPinRetries(?int $value ): void {
        $this->maximumPinRetries = $value;
    }

    /**
     * Sets the minimumPinLength property value. Minimum pin length required for an app-level pin if PinRequired is set to True
     *  @param int|null $value Value to set for the minimumPinLength property.
    */
    public function setMinimumPinLength(?int $value ): void {
        $this->minimumPinLength = $value;
    }

    /**
     * Sets the minimumRequiredAppVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     *  @param string|null $value Value to set for the minimumRequiredAppVersion property.
    */
    public function setMinimumRequiredAppVersion(?string $value ): void {
        $this->minimumRequiredAppVersion = $value;
    }

    /**
     * Sets the minimumRequiredOsVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     *  @param string|null $value Value to set for the minimumRequiredOsVersion property.
    */
    public function setMinimumRequiredOsVersion(?string $value ): void {
        $this->minimumRequiredOsVersion = $value;
    }

    /**
     * Sets the minimumWarningAppVersion property value. Versions less than the specified version will result in warning message on the managed app.
     *  @param string|null $value Value to set for the minimumWarningAppVersion property.
    */
    public function setMinimumWarningAppVersion(?string $value ): void {
        $this->minimumWarningAppVersion = $value;
    }

    /**
     * Sets the minimumWarningOsVersion property value. Versions less than the specified version will result in warning message on the managed app from accessing company data.
     *  @param string|null $value Value to set for the minimumWarningOsVersion property.
    */
    public function setMinimumWarningOsVersion(?string $value ): void {
        $this->minimumWarningOsVersion = $value;
    }

    /**
     * Sets the organizationalCredentialsRequired property value. Indicates whether organizational credentials are required for app use.
     *  @param bool|null $value Value to set for the organizationalCredentialsRequired property.
    */
    public function setOrganizationalCredentialsRequired(?bool $value ): void {
        $this->organizationalCredentialsRequired = $value;
    }

    /**
     * Sets the periodBeforePinReset property value. TimePeriod before the all-level pin must be reset if PinRequired is set to True.
     *  @param DateInterval|null $value Value to set for the periodBeforePinReset property.
    */
    public function setPeriodBeforePinReset(?DateInterval $value ): void {
        $this->periodBeforePinReset = $value;
    }

    /**
     * Sets the periodOfflineBeforeAccessCheck property value. The period after which access is checked when the device is not connected to the internet.
     *  @param DateInterval|null $value Value to set for the periodOfflineBeforeAccessCheck property.
    */
    public function setPeriodOfflineBeforeAccessCheck(?DateInterval $value ): void {
        $this->periodOfflineBeforeAccessCheck = $value;
    }

    /**
     * Sets the periodOfflineBeforeWipeIsEnforced property value. The amount of time an app is allowed to remain disconnected from the internet before all managed data it is wiped.
     *  @param DateInterval|null $value Value to set for the periodOfflineBeforeWipeIsEnforced property.
    */
    public function setPeriodOfflineBeforeWipeIsEnforced(?DateInterval $value ): void {
        $this->periodOfflineBeforeWipeIsEnforced = $value;
    }

    /**
     * Sets the periodOnlineBeforeAccessCheck property value. The period after which access is checked when the device is connected to the internet.
     *  @param DateInterval|null $value Value to set for the periodOnlineBeforeAccessCheck property.
    */
    public function setPeriodOnlineBeforeAccessCheck(?DateInterval $value ): void {
        $this->periodOnlineBeforeAccessCheck = $value;
    }

    /**
     * Sets the pinCharacterSet property value. Character set which is to be used for a user's app PIN
     *  @param ManagedAppPinCharacterSet|null $value Value to set for the pinCharacterSet property.
    */
    public function setPinCharacterSet(?ManagedAppPinCharacterSet $value ): void {
        $this->pinCharacterSet = $value;
    }

    /**
     * Sets the pinRequired property value. Indicates whether an app-level pin is required.
     *  @param bool|null $value Value to set for the pinRequired property.
    */
    public function setPinRequired(?bool $value ): void {
        $this->pinRequired = $value;
    }

    /**
     * Sets the printBlocked property value. Indicates whether printing is allowed from managed apps.
     *  @param bool|null $value Value to set for the printBlocked property.
    */
    public function setPrintBlocked(?bool $value ): void {
        $this->printBlocked = $value;
    }

    /**
     * Sets the saveAsBlocked property value. Indicates whether users may use the 'Save As' menu item to save a copy of protected files.
     *  @param bool|null $value Value to set for the saveAsBlocked property.
    */
    public function setSaveAsBlocked(?bool $value ): void {
        $this->saveAsBlocked = $value;
    }

    /**
     * Sets the simplePinBlocked property value. Indicates whether simplePin is blocked.
     *  @param bool|null $value Value to set for the simplePinBlocked property.
    */
    public function setSimplePinBlocked(?bool $value ): void {
        $this->simplePinBlocked = $value;
    }

}
