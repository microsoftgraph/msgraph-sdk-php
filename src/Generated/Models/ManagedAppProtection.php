<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ManagedAppProtection extends ManagedAppPolicy implements Parsable 
{
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
        $val = $this->getBackingStore()->get('allowedDataStorageLocations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedAppDataStorageLocation::class);
            /** @var array<ManagedAppDataStorageLocation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedDataStorageLocations'");
    }

    /**
     * Gets the allowedInboundDataTransferSources property value. Data can be transferred from/to these classes of apps
     * @return ManagedAppDataTransferLevel|null
    */
    public function getAllowedInboundDataTransferSources(): ?ManagedAppDataTransferLevel {
        $val = $this->getBackingStore()->get('allowedInboundDataTransferSources');
        if (is_null($val) || $val instanceof ManagedAppDataTransferLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedInboundDataTransferSources'");
    }

    /**
     * Gets the allowedOutboundClipboardSharingLevel property value. Represents the level to which the device's clipboard may be shared between apps
     * @return ManagedAppClipboardSharingLevel|null
    */
    public function getAllowedOutboundClipboardSharingLevel(): ?ManagedAppClipboardSharingLevel {
        $val = $this->getBackingStore()->get('allowedOutboundClipboardSharingLevel');
        if (is_null($val) || $val instanceof ManagedAppClipboardSharingLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedOutboundClipboardSharingLevel'");
    }

    /**
     * Gets the allowedOutboundDataTransferDestinations property value. Data can be transferred from/to these classes of apps
     * @return ManagedAppDataTransferLevel|null
    */
    public function getAllowedOutboundDataTransferDestinations(): ?ManagedAppDataTransferLevel {
        $val = $this->getBackingStore()->get('allowedOutboundDataTransferDestinations');
        if (is_null($val) || $val instanceof ManagedAppDataTransferLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedOutboundDataTransferDestinations'");
    }

    /**
     * Gets the contactSyncBlocked property value. Indicates whether contacts can be synced to the user's device.
     * @return bool|null
    */
    public function getContactSyncBlocked(): ?bool {
        $val = $this->getBackingStore()->get('contactSyncBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contactSyncBlocked'");
    }

    /**
     * Gets the dataBackupBlocked property value. Indicates whether the backup of a managed app's data is blocked.
     * @return bool|null
    */
    public function getDataBackupBlocked(): ?bool {
        $val = $this->getBackingStore()->get('dataBackupBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataBackupBlocked'");
    }

    /**
     * Gets the deviceComplianceRequired property value. Indicates whether device compliance is required.
     * @return bool|null
    */
    public function getDeviceComplianceRequired(): ?bool {
        $val = $this->getBackingStore()->get('deviceComplianceRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceComplianceRequired'");
    }

    /**
     * Gets the disableAppPinIfDevicePinIsSet property value. Indicates whether use of the app pin is required if the device pin is set.
     * @return bool|null
    */
    public function getDisableAppPinIfDevicePinIsSet(): ?bool {
        $val = $this->getBackingStore()->get('disableAppPinIfDevicePinIsSet');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disableAppPinIfDevicePinIsSet'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('fingerprintBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fingerprintBlocked'");
    }

    /**
     * Gets the managedBrowser property value. Type of managed browser
     * @return ManagedBrowserType|null
    */
    public function getManagedBrowser(): ?ManagedBrowserType {
        $val = $this->getBackingStore()->get('managedBrowser');
        if (is_null($val) || $val instanceof ManagedBrowserType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedBrowser'");
    }

    /**
     * Gets the managedBrowserToOpenLinksRequired property value. Indicates whether internet links should be opened in the managed browser app, or any custom browser specified by CustomBrowserProtocol (for iOS) or CustomBrowserPackageId/CustomBrowserDisplayName (for Android)
     * @return bool|null
    */
    public function getManagedBrowserToOpenLinksRequired(): ?bool {
        $val = $this->getBackingStore()->get('managedBrowserToOpenLinksRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedBrowserToOpenLinksRequired'");
    }

    /**
     * Gets the maximumPinRetries property value. Maximum number of incorrect pin retry attempts before the managed app is either blocked or wiped.
     * @return int|null
    */
    public function getMaximumPinRetries(): ?int {
        $val = $this->getBackingStore()->get('maximumPinRetries');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumPinRetries'");
    }

    /**
     * Gets the minimumPinLength property value. Minimum pin length required for an app-level pin if PinRequired is set to True
     * @return int|null
    */
    public function getMinimumPinLength(): ?int {
        $val = $this->getBackingStore()->get('minimumPinLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumPinLength'");
    }

    /**
     * Gets the minimumRequiredAppVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @return string|null
    */
    public function getMinimumRequiredAppVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumRequiredAppVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumRequiredAppVersion'");
    }

    /**
     * Gets the minimumRequiredOsVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @return string|null
    */
    public function getMinimumRequiredOsVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumRequiredOsVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumRequiredOsVersion'");
    }

    /**
     * Gets the minimumWarningAppVersion property value. Versions less than the specified version will result in warning message on the managed app.
     * @return string|null
    */
    public function getMinimumWarningAppVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWarningAppVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWarningAppVersion'");
    }

    /**
     * Gets the minimumWarningOsVersion property value. Versions less than the specified version will result in warning message on the managed app from accessing company data.
     * @return string|null
    */
    public function getMinimumWarningOsVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWarningOsVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWarningOsVersion'");
    }

    /**
     * Gets the organizationalCredentialsRequired property value. Indicates whether organizational credentials are required for app use.
     * @return bool|null
    */
    public function getOrganizationalCredentialsRequired(): ?bool {
        $val = $this->getBackingStore()->get('organizationalCredentialsRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizationalCredentialsRequired'");
    }

    /**
     * Gets the periodBeforePinReset property value. TimePeriod before the all-level pin must be reset if PinRequired is set to True.
     * @return DateInterval|null
    */
    public function getPeriodBeforePinReset(): ?DateInterval {
        $val = $this->getBackingStore()->get('periodBeforePinReset');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'periodBeforePinReset'");
    }

    /**
     * Gets the periodOfflineBeforeAccessCheck property value. The period after which access is checked when the device is not connected to the internet.
     * @return DateInterval|null
    */
    public function getPeriodOfflineBeforeAccessCheck(): ?DateInterval {
        $val = $this->getBackingStore()->get('periodOfflineBeforeAccessCheck');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'periodOfflineBeforeAccessCheck'");
    }

    /**
     * Gets the periodOfflineBeforeWipeIsEnforced property value. The amount of time an app is allowed to remain disconnected from the internet before all managed data it is wiped.
     * @return DateInterval|null
    */
    public function getPeriodOfflineBeforeWipeIsEnforced(): ?DateInterval {
        $val = $this->getBackingStore()->get('periodOfflineBeforeWipeIsEnforced');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'periodOfflineBeforeWipeIsEnforced'");
    }

    /**
     * Gets the periodOnlineBeforeAccessCheck property value. The period after which access is checked when the device is connected to the internet.
     * @return DateInterval|null
    */
    public function getPeriodOnlineBeforeAccessCheck(): ?DateInterval {
        $val = $this->getBackingStore()->get('periodOnlineBeforeAccessCheck');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'periodOnlineBeforeAccessCheck'");
    }

    /**
     * Gets the pinCharacterSet property value. Character set which is to be used for a user's app PIN
     * @return ManagedAppPinCharacterSet|null
    */
    public function getPinCharacterSet(): ?ManagedAppPinCharacterSet {
        $val = $this->getBackingStore()->get('pinCharacterSet');
        if (is_null($val) || $val instanceof ManagedAppPinCharacterSet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinCharacterSet'");
    }

    /**
     * Gets the pinRequired property value. Indicates whether an app-level pin is required.
     * @return bool|null
    */
    public function getPinRequired(): ?bool {
        $val = $this->getBackingStore()->get('pinRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinRequired'");
    }

    /**
     * Gets the printBlocked property value. Indicates whether printing is allowed from managed apps.
     * @return bool|null
    */
    public function getPrintBlocked(): ?bool {
        $val = $this->getBackingStore()->get('printBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'printBlocked'");
    }

    /**
     * Gets the saveAsBlocked property value. Indicates whether users may use the 'Save As' menu item to save a copy of protected files.
     * @return bool|null
    */
    public function getSaveAsBlocked(): ?bool {
        $val = $this->getBackingStore()->get('saveAsBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'saveAsBlocked'");
    }

    /**
     * Gets the simplePinBlocked property value. Indicates whether simplePin is blocked.
     * @return bool|null
    */
    public function getSimplePinBlocked(): ?bool {
        $val = $this->getBackingStore()->get('simplePinBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'simplePinBlocked'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfEnumValues('allowedDataStorageLocations', $this->getAllowedDataStorageLocations());
        $writer->writeEnumValue('allowedInboundDataTransferSources', $this->getAllowedInboundDataTransferSources());
        $writer->writeEnumValue('allowedOutboundClipboardSharingLevel', $this->getAllowedOutboundClipboardSharingLevel());
        $writer->writeEnumValue('allowedOutboundDataTransferDestinations', $this->getAllowedOutboundDataTransferDestinations());
        $writer->writeBooleanValue('contactSyncBlocked', $this->getContactSyncBlocked());
        $writer->writeBooleanValue('dataBackupBlocked', $this->getDataBackupBlocked());
        $writer->writeBooleanValue('deviceComplianceRequired', $this->getDeviceComplianceRequired());
        $writer->writeBooleanValue('disableAppPinIfDevicePinIsSet', $this->getDisableAppPinIfDevicePinIsSet());
        $writer->writeBooleanValue('fingerprintBlocked', $this->getFingerprintBlocked());
        $writer->writeEnumValue('managedBrowser', $this->getManagedBrowser());
        $writer->writeBooleanValue('managedBrowserToOpenLinksRequired', $this->getManagedBrowserToOpenLinksRequired());
        $writer->writeIntegerValue('maximumPinRetries', $this->getMaximumPinRetries());
        $writer->writeIntegerValue('minimumPinLength', $this->getMinimumPinLength());
        $writer->writeStringValue('minimumRequiredAppVersion', $this->getMinimumRequiredAppVersion());
        $writer->writeStringValue('minimumRequiredOsVersion', $this->getMinimumRequiredOsVersion());
        $writer->writeStringValue('minimumWarningAppVersion', $this->getMinimumWarningAppVersion());
        $writer->writeStringValue('minimumWarningOsVersion', $this->getMinimumWarningOsVersion());
        $writer->writeBooleanValue('organizationalCredentialsRequired', $this->getOrganizationalCredentialsRequired());
        $writer->writeDateIntervalValue('periodBeforePinReset', $this->getPeriodBeforePinReset());
        $writer->writeDateIntervalValue('periodOfflineBeforeAccessCheck', $this->getPeriodOfflineBeforeAccessCheck());
        $writer->writeDateIntervalValue('periodOfflineBeforeWipeIsEnforced', $this->getPeriodOfflineBeforeWipeIsEnforced());
        $writer->writeDateIntervalValue('periodOnlineBeforeAccessCheck', $this->getPeriodOnlineBeforeAccessCheck());
        $writer->writeEnumValue('pinCharacterSet', $this->getPinCharacterSet());
        $writer->writeBooleanValue('pinRequired', $this->getPinRequired());
        $writer->writeBooleanValue('printBlocked', $this->getPrintBlocked());
        $writer->writeBooleanValue('saveAsBlocked', $this->getSaveAsBlocked());
        $writer->writeBooleanValue('simplePinBlocked', $this->getSimplePinBlocked());
    }

    /**
     * Sets the allowedDataStorageLocations property value. Data storage locations where a user may store managed data.
     * @param array<ManagedAppDataStorageLocation>|null $value Value to set for the allowedDataStorageLocations property.
    */
    public function setAllowedDataStorageLocations(?array $value): void {
        $this->getBackingStore()->set('allowedDataStorageLocations', $value);
    }

    /**
     * Sets the allowedInboundDataTransferSources property value. Data can be transferred from/to these classes of apps
     * @param ManagedAppDataTransferLevel|null $value Value to set for the allowedInboundDataTransferSources property.
    */
    public function setAllowedInboundDataTransferSources(?ManagedAppDataTransferLevel $value): void {
        $this->getBackingStore()->set('allowedInboundDataTransferSources', $value);
    }

    /**
     * Sets the allowedOutboundClipboardSharingLevel property value. Represents the level to which the device's clipboard may be shared between apps
     * @param ManagedAppClipboardSharingLevel|null $value Value to set for the allowedOutboundClipboardSharingLevel property.
    */
    public function setAllowedOutboundClipboardSharingLevel(?ManagedAppClipboardSharingLevel $value): void {
        $this->getBackingStore()->set('allowedOutboundClipboardSharingLevel', $value);
    }

    /**
     * Sets the allowedOutboundDataTransferDestinations property value. Data can be transferred from/to these classes of apps
     * @param ManagedAppDataTransferLevel|null $value Value to set for the allowedOutboundDataTransferDestinations property.
    */
    public function setAllowedOutboundDataTransferDestinations(?ManagedAppDataTransferLevel $value): void {
        $this->getBackingStore()->set('allowedOutboundDataTransferDestinations', $value);
    }

    /**
     * Sets the contactSyncBlocked property value. Indicates whether contacts can be synced to the user's device.
     * @param bool|null $value Value to set for the contactSyncBlocked property.
    */
    public function setContactSyncBlocked(?bool $value): void {
        $this->getBackingStore()->set('contactSyncBlocked', $value);
    }

    /**
     * Sets the dataBackupBlocked property value. Indicates whether the backup of a managed app's data is blocked.
     * @param bool|null $value Value to set for the dataBackupBlocked property.
    */
    public function setDataBackupBlocked(?bool $value): void {
        $this->getBackingStore()->set('dataBackupBlocked', $value);
    }

    /**
     * Sets the deviceComplianceRequired property value. Indicates whether device compliance is required.
     * @param bool|null $value Value to set for the deviceComplianceRequired property.
    */
    public function setDeviceComplianceRequired(?bool $value): void {
        $this->getBackingStore()->set('deviceComplianceRequired', $value);
    }

    /**
     * Sets the disableAppPinIfDevicePinIsSet property value. Indicates whether use of the app pin is required if the device pin is set.
     * @param bool|null $value Value to set for the disableAppPinIfDevicePinIsSet property.
    */
    public function setDisableAppPinIfDevicePinIsSet(?bool $value): void {
        $this->getBackingStore()->set('disableAppPinIfDevicePinIsSet', $value);
    }

    /**
     * Sets the fingerprintBlocked property value. Indicates whether use of the fingerprint reader is allowed in place of a pin if PinRequired is set to True.
     * @param bool|null $value Value to set for the fingerprintBlocked property.
    */
    public function setFingerprintBlocked(?bool $value): void {
        $this->getBackingStore()->set('fingerprintBlocked', $value);
    }

    /**
     * Sets the managedBrowser property value. Type of managed browser
     * @param ManagedBrowserType|null $value Value to set for the managedBrowser property.
    */
    public function setManagedBrowser(?ManagedBrowserType $value): void {
        $this->getBackingStore()->set('managedBrowser', $value);
    }

    /**
     * Sets the managedBrowserToOpenLinksRequired property value. Indicates whether internet links should be opened in the managed browser app, or any custom browser specified by CustomBrowserProtocol (for iOS) or CustomBrowserPackageId/CustomBrowserDisplayName (for Android)
     * @param bool|null $value Value to set for the managedBrowserToOpenLinksRequired property.
    */
    public function setManagedBrowserToOpenLinksRequired(?bool $value): void {
        $this->getBackingStore()->set('managedBrowserToOpenLinksRequired', $value);
    }

    /**
     * Sets the maximumPinRetries property value. Maximum number of incorrect pin retry attempts before the managed app is either blocked or wiped.
     * @param int|null $value Value to set for the maximumPinRetries property.
    */
    public function setMaximumPinRetries(?int $value): void {
        $this->getBackingStore()->set('maximumPinRetries', $value);
    }

    /**
     * Sets the minimumPinLength property value. Minimum pin length required for an app-level pin if PinRequired is set to True
     * @param int|null $value Value to set for the minimumPinLength property.
    */
    public function setMinimumPinLength(?int $value): void {
        $this->getBackingStore()->set('minimumPinLength', $value);
    }

    /**
     * Sets the minimumRequiredAppVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @param string|null $value Value to set for the minimumRequiredAppVersion property.
    */
    public function setMinimumRequiredAppVersion(?string $value): void {
        $this->getBackingStore()->set('minimumRequiredAppVersion', $value);
    }

    /**
     * Sets the minimumRequiredOsVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @param string|null $value Value to set for the minimumRequiredOsVersion property.
    */
    public function setMinimumRequiredOsVersion(?string $value): void {
        $this->getBackingStore()->set('minimumRequiredOsVersion', $value);
    }

    /**
     * Sets the minimumWarningAppVersion property value. Versions less than the specified version will result in warning message on the managed app.
     * @param string|null $value Value to set for the minimumWarningAppVersion property.
    */
    public function setMinimumWarningAppVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWarningAppVersion', $value);
    }

    /**
     * Sets the minimumWarningOsVersion property value. Versions less than the specified version will result in warning message on the managed app from accessing company data.
     * @param string|null $value Value to set for the minimumWarningOsVersion property.
    */
    public function setMinimumWarningOsVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWarningOsVersion', $value);
    }

    /**
     * Sets the organizationalCredentialsRequired property value. Indicates whether organizational credentials are required for app use.
     * @param bool|null $value Value to set for the organizationalCredentialsRequired property.
    */
    public function setOrganizationalCredentialsRequired(?bool $value): void {
        $this->getBackingStore()->set('organizationalCredentialsRequired', $value);
    }

    /**
     * Sets the periodBeforePinReset property value. TimePeriod before the all-level pin must be reset if PinRequired is set to True.
     * @param DateInterval|null $value Value to set for the periodBeforePinReset property.
    */
    public function setPeriodBeforePinReset(?DateInterval $value): void {
        $this->getBackingStore()->set('periodBeforePinReset', $value);
    }

    /**
     * Sets the periodOfflineBeforeAccessCheck property value. The period after which access is checked when the device is not connected to the internet.
     * @param DateInterval|null $value Value to set for the periodOfflineBeforeAccessCheck property.
    */
    public function setPeriodOfflineBeforeAccessCheck(?DateInterval $value): void {
        $this->getBackingStore()->set('periodOfflineBeforeAccessCheck', $value);
    }

    /**
     * Sets the periodOfflineBeforeWipeIsEnforced property value. The amount of time an app is allowed to remain disconnected from the internet before all managed data it is wiped.
     * @param DateInterval|null $value Value to set for the periodOfflineBeforeWipeIsEnforced property.
    */
    public function setPeriodOfflineBeforeWipeIsEnforced(?DateInterval $value): void {
        $this->getBackingStore()->set('periodOfflineBeforeWipeIsEnforced', $value);
    }

    /**
     * Sets the periodOnlineBeforeAccessCheck property value. The period after which access is checked when the device is connected to the internet.
     * @param DateInterval|null $value Value to set for the periodOnlineBeforeAccessCheck property.
    */
    public function setPeriodOnlineBeforeAccessCheck(?DateInterval $value): void {
        $this->getBackingStore()->set('periodOnlineBeforeAccessCheck', $value);
    }

    /**
     * Sets the pinCharacterSet property value. Character set which is to be used for a user's app PIN
     * @param ManagedAppPinCharacterSet|null $value Value to set for the pinCharacterSet property.
    */
    public function setPinCharacterSet(?ManagedAppPinCharacterSet $value): void {
        $this->getBackingStore()->set('pinCharacterSet', $value);
    }

    /**
     * Sets the pinRequired property value. Indicates whether an app-level pin is required.
     * @param bool|null $value Value to set for the pinRequired property.
    */
    public function setPinRequired(?bool $value): void {
        $this->getBackingStore()->set('pinRequired', $value);
    }

    /**
     * Sets the printBlocked property value. Indicates whether printing is allowed from managed apps.
     * @param bool|null $value Value to set for the printBlocked property.
    */
    public function setPrintBlocked(?bool $value): void {
        $this->getBackingStore()->set('printBlocked', $value);
    }

    /**
     * Sets the saveAsBlocked property value. Indicates whether users may use the 'Save As' menu item to save a copy of protected files.
     * @param bool|null $value Value to set for the saveAsBlocked property.
    */
    public function setSaveAsBlocked(?bool $value): void {
        $this->getBackingStore()->set('saveAsBlocked', $value);
    }

    /**
     * Sets the simplePinBlocked property value. Indicates whether simplePin is blocked.
     * @param bool|null $value Value to set for the simplePinBlocked property.
    */
    public function setSimplePinBlocked(?bool $value): void {
        $this->getBackingStore()->set('simplePinBlocked', $value);
    }

}
