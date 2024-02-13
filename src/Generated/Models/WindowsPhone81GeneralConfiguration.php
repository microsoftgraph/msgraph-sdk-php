<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This topic provides descriptions of the declared methods, properties and relationships exposed by the windowsPhone81GeneralConfiguration resource.
*/
class WindowsPhone81GeneralConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new WindowsPhone81GeneralConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsPhone81GeneralConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsPhone81GeneralConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsPhone81GeneralConfiguration {
        return new WindowsPhone81GeneralConfiguration();
    }

    /**
     * Gets the applyOnlyToWindowsPhone81 property value. Value indicating whether this policy only applies to Windows Phone 8.1. This property is read-only.
     * @return bool|null
    */
    public function getApplyOnlyToWindowsPhone81(): ?bool {
        $val = $this->getBackingStore()->get('applyOnlyToWindowsPhone81');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applyOnlyToWindowsPhone81'");
    }

    /**
     * Gets the appsBlockCopyPaste property value. Indicates whether or not to block copy paste.
     * @return bool|null
    */
    public function getAppsBlockCopyPaste(): ?bool {
        $val = $this->getBackingStore()->get('appsBlockCopyPaste');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appsBlockCopyPaste'");
    }

    /**
     * Gets the bluetoothBlocked property value. Indicates whether or not to block bluetooth.
     * @return bool|null
    */
    public function getBluetoothBlocked(): ?bool {
        $val = $this->getBackingStore()->get('bluetoothBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bluetoothBlocked'");
    }

    /**
     * Gets the cameraBlocked property value. Indicates whether or not to block camera.
     * @return bool|null
    */
    public function getCameraBlocked(): ?bool {
        $val = $this->getBackingStore()->get('cameraBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cameraBlocked'");
    }

    /**
     * Gets the cellularBlockWifiTethering property value. Indicates whether or not to block Wi-Fi tethering. Has no impact if Wi-Fi is blocked.
     * @return bool|null
    */
    public function getCellularBlockWifiTethering(): ?bool {
        $val = $this->getBackingStore()->get('cellularBlockWifiTethering');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cellularBlockWifiTethering'");
    }

    /**
     * Gets the compliantAppListType property value. Possible values of the compliance app list.
     * @return AppListType|null
    */
    public function getCompliantAppListType(): ?AppListType {
        $val = $this->getBackingStore()->get('compliantAppListType');
        if (is_null($val) || $val instanceof AppListType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliantAppListType'");
    }

    /**
     * Gets the compliantAppsList property value. List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     * @return array<AppListItem>|null
    */
    public function getCompliantAppsList(): ?array {
        $val = $this->getBackingStore()->get('compliantAppsList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppListItem::class);
            /** @var array<AppListItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliantAppsList'");
    }

    /**
     * Gets the diagnosticDataBlockSubmission property value. Indicates whether or not to block diagnostic data submission.
     * @return bool|null
    */
    public function getDiagnosticDataBlockSubmission(): ?bool {
        $val = $this->getBackingStore()->get('diagnosticDataBlockSubmission');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'diagnosticDataBlockSubmission'");
    }

    /**
     * Gets the emailBlockAddingAccounts property value. Indicates whether or not to block custom email accounts.
     * @return bool|null
    */
    public function getEmailBlockAddingAccounts(): ?bool {
        $val = $this->getBackingStore()->get('emailBlockAddingAccounts');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailBlockAddingAccounts'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applyOnlyToWindowsPhone81' => fn(ParseNode $n) => $o->setApplyOnlyToWindowsPhone81($n->getBooleanValue()),
            'appsBlockCopyPaste' => fn(ParseNode $n) => $o->setAppsBlockCopyPaste($n->getBooleanValue()),
            'bluetoothBlocked' => fn(ParseNode $n) => $o->setBluetoothBlocked($n->getBooleanValue()),
            'cameraBlocked' => fn(ParseNode $n) => $o->setCameraBlocked($n->getBooleanValue()),
            'cellularBlockWifiTethering' => fn(ParseNode $n) => $o->setCellularBlockWifiTethering($n->getBooleanValue()),
            'compliantAppListType' => fn(ParseNode $n) => $o->setCompliantAppListType($n->getEnumValue(AppListType::class)),
            'compliantAppsList' => fn(ParseNode $n) => $o->setCompliantAppsList($n->getCollectionOfObjectValues([AppListItem::class, 'createFromDiscriminatorValue'])),
            'diagnosticDataBlockSubmission' => fn(ParseNode $n) => $o->setDiagnosticDataBlockSubmission($n->getBooleanValue()),
            'emailBlockAddingAccounts' => fn(ParseNode $n) => $o->setEmailBlockAddingAccounts($n->getBooleanValue()),
            'locationServicesBlocked' => fn(ParseNode $n) => $o->setLocationServicesBlocked($n->getBooleanValue()),
            'microsoftAccountBlocked' => fn(ParseNode $n) => $o->setMicrosoftAccountBlocked($n->getBooleanValue()),
            'nfcBlocked' => fn(ParseNode $n) => $o->setNfcBlocked($n->getBooleanValue()),
            'passwordBlockSimple' => fn(ParseNode $n) => $o->setPasswordBlockSimple($n->getBooleanValue()),
            'passwordExpirationDays' => fn(ParseNode $n) => $o->setPasswordExpirationDays($n->getIntegerValue()),
            'passwordMinimumCharacterSetCount' => fn(ParseNode $n) => $o->setPasswordMinimumCharacterSetCount($n->getIntegerValue()),
            'passwordMinimumLength' => fn(ParseNode $n) => $o->setPasswordMinimumLength($n->getIntegerValue()),
            'passwordMinutesOfInactivityBeforeScreenTimeout' => fn(ParseNode $n) => $o->setPasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()),
            'passwordPreviousPasswordBlockCount' => fn(ParseNode $n) => $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()),
            'passwordRequired' => fn(ParseNode $n) => $o->setPasswordRequired($n->getBooleanValue()),
            'passwordRequiredType' => fn(ParseNode $n) => $o->setPasswordRequiredType($n->getEnumValue(RequiredPasswordType::class)),
            'passwordSignInFailureCountBeforeFactoryReset' => fn(ParseNode $n) => $o->setPasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()),
            'screenCaptureBlocked' => fn(ParseNode $n) => $o->setScreenCaptureBlocked($n->getBooleanValue()),
            'storageBlockRemovableStorage' => fn(ParseNode $n) => $o->setStorageBlockRemovableStorage($n->getBooleanValue()),
            'storageRequireEncryption' => fn(ParseNode $n) => $o->setStorageRequireEncryption($n->getBooleanValue()),
            'webBrowserBlocked' => fn(ParseNode $n) => $o->setWebBrowserBlocked($n->getBooleanValue()),
            'wifiBlockAutomaticConnectHotspots' => fn(ParseNode $n) => $o->setWifiBlockAutomaticConnectHotspots($n->getBooleanValue()),
            'wifiBlocked' => fn(ParseNode $n) => $o->setWifiBlocked($n->getBooleanValue()),
            'wifiBlockHotspotReporting' => fn(ParseNode $n) => $o->setWifiBlockHotspotReporting($n->getBooleanValue()),
            'windowsStoreBlocked' => fn(ParseNode $n) => $o->setWindowsStoreBlocked($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the locationServicesBlocked property value. Indicates whether or not to block location services.
     * @return bool|null
    */
    public function getLocationServicesBlocked(): ?bool {
        $val = $this->getBackingStore()->get('locationServicesBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locationServicesBlocked'");
    }

    /**
     * Gets the microsoftAccountBlocked property value. Indicates whether or not to block using a Microsoft Account.
     * @return bool|null
    */
    public function getMicrosoftAccountBlocked(): ?bool {
        $val = $this->getBackingStore()->get('microsoftAccountBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftAccountBlocked'");
    }

    /**
     * Gets the nfcBlocked property value. Indicates whether or not to block Near-Field Communication.
     * @return bool|null
    */
    public function getNfcBlocked(): ?bool {
        $val = $this->getBackingStore()->get('nfcBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nfcBlocked'");
    }

    /**
     * Gets the passwordBlockSimple property value. Indicates whether or not to block syncing the calendar.
     * @return bool|null
    */
    public function getPasswordBlockSimple(): ?bool {
        $val = $this->getBackingStore()->get('passwordBlockSimple');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordBlockSimple'");
    }

    /**
     * Gets the passwordExpirationDays property value. Number of days before the password expires.
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        $val = $this->getBackingStore()->get('passwordExpirationDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordExpirationDays'");
    }

    /**
     * Gets the passwordMinimumCharacterSetCount property value. Number of character sets a password must contain.
     * @return int|null
    */
    public function getPasswordMinimumCharacterSetCount(): ?int {
        $val = $this->getBackingStore()->get('passwordMinimumCharacterSetCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumCharacterSetCount'");
    }

    /**
     * Gets the passwordMinimumLength property value. Minimum length of passwords.
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        $val = $this->getBackingStore()->get('passwordMinimumLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinimumLength'");
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before screen timeout.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        $val = $this->getBackingStore()->get('passwordMinutesOfInactivityBeforeScreenTimeout');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMinutesOfInactivityBeforeScreenTimeout'");
    }

    /**
     * Gets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block. Valid values 0 to 24
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        $val = $this->getBackingStore()->get('passwordPreviousPasswordBlockCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordPreviousPasswordBlockCount'");
    }

    /**
     * Gets the passwordRequired property value. Indicates whether or not to require a password.
     * @return bool|null
    */
    public function getPasswordRequired(): ?bool {
        $val = $this->getBackingStore()->get('passwordRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordRequired'");
    }

    /**
     * Gets the passwordRequiredType property value. Possible values of required passwords.
     * @return RequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?RequiredPasswordType {
        $val = $this->getBackingStore()->get('passwordRequiredType');
        if (is_null($val) || $val instanceof RequiredPasswordType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordRequiredType'");
    }

    /**
     * Gets the passwordSignInFailureCountBeforeFactoryReset property value. Number of sign in failures allowed before factory reset.
     * @return int|null
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset(): ?int {
        $val = $this->getBackingStore()->get('passwordSignInFailureCountBeforeFactoryReset');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordSignInFailureCountBeforeFactoryReset'");
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether or not to block screenshots.
     * @return bool|null
    */
    public function getScreenCaptureBlocked(): ?bool {
        $val = $this->getBackingStore()->get('screenCaptureBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'screenCaptureBlocked'");
    }

    /**
     * Gets the storageBlockRemovableStorage property value. Indicates whether or not to block removable storage.
     * @return bool|null
    */
    public function getStorageBlockRemovableStorage(): ?bool {
        $val = $this->getBackingStore()->get('storageBlockRemovableStorage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageBlockRemovableStorage'");
    }

    /**
     * Gets the storageRequireEncryption property value. Indicates whether or not to require encryption.
     * @return bool|null
    */
    public function getStorageRequireEncryption(): ?bool {
        $val = $this->getBackingStore()->get('storageRequireEncryption');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageRequireEncryption'");
    }

    /**
     * Gets the webBrowserBlocked property value. Indicates whether or not to block the web browser.
     * @return bool|null
    */
    public function getWebBrowserBlocked(): ?bool {
        $val = $this->getBackingStore()->get('webBrowserBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webBrowserBlocked'");
    }

    /**
     * Gets the wifiBlockAutomaticConnectHotspots property value. Indicates whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked.
     * @return bool|null
    */
    public function getWifiBlockAutomaticConnectHotspots(): ?bool {
        $val = $this->getBackingStore()->get('wifiBlockAutomaticConnectHotspots');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wifiBlockAutomaticConnectHotspots'");
    }

    /**
     * Gets the wifiBlocked property value. Indicates whether or not to block Wi-Fi.
     * @return bool|null
    */
    public function getWifiBlocked(): ?bool {
        $val = $this->getBackingStore()->get('wifiBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wifiBlocked'");
    }

    /**
     * Gets the wifiBlockHotspotReporting property value. Indicates whether or not to block Wi-Fi hotspot reporting. Has no impact if Wi-Fi is blocked.
     * @return bool|null
    */
    public function getWifiBlockHotspotReporting(): ?bool {
        $val = $this->getBackingStore()->get('wifiBlockHotspotReporting');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wifiBlockHotspotReporting'");
    }

    /**
     * Gets the windowsStoreBlocked property value. Indicates whether or not to block the Windows Store.
     * @return bool|null
    */
    public function getWindowsStoreBlocked(): ?bool {
        $val = $this->getBackingStore()->get('windowsStoreBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsStoreBlocked'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('appsBlockCopyPaste', $this->getAppsBlockCopyPaste());
        $writer->writeBooleanValue('bluetoothBlocked', $this->getBluetoothBlocked());
        $writer->writeBooleanValue('cameraBlocked', $this->getCameraBlocked());
        $writer->writeBooleanValue('cellularBlockWifiTethering', $this->getCellularBlockWifiTethering());
        $writer->writeEnumValue('compliantAppListType', $this->getCompliantAppListType());
        $writer->writeCollectionOfObjectValues('compliantAppsList', $this->getCompliantAppsList());
        $writer->writeBooleanValue('diagnosticDataBlockSubmission', $this->getDiagnosticDataBlockSubmission());
        $writer->writeBooleanValue('emailBlockAddingAccounts', $this->getEmailBlockAddingAccounts());
        $writer->writeBooleanValue('locationServicesBlocked', $this->getLocationServicesBlocked());
        $writer->writeBooleanValue('microsoftAccountBlocked', $this->getMicrosoftAccountBlocked());
        $writer->writeBooleanValue('nfcBlocked', $this->getNfcBlocked());
        $writer->writeBooleanValue('passwordBlockSimple', $this->getPasswordBlockSimple());
        $writer->writeIntegerValue('passwordExpirationDays', $this->getPasswordExpirationDays());
        $writer->writeIntegerValue('passwordMinimumCharacterSetCount', $this->getPasswordMinimumCharacterSetCount());
        $writer->writeIntegerValue('passwordMinimumLength', $this->getPasswordMinimumLength());
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeScreenTimeout', $this->getPasswordMinutesOfInactivityBeforeScreenTimeout());
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->getPasswordPreviousPasswordBlockCount());
        $writer->writeBooleanValue('passwordRequired', $this->getPasswordRequired());
        $writer->writeEnumValue('passwordRequiredType', $this->getPasswordRequiredType());
        $writer->writeIntegerValue('passwordSignInFailureCountBeforeFactoryReset', $this->getPasswordSignInFailureCountBeforeFactoryReset());
        $writer->writeBooleanValue('screenCaptureBlocked', $this->getScreenCaptureBlocked());
        $writer->writeBooleanValue('storageBlockRemovableStorage', $this->getStorageBlockRemovableStorage());
        $writer->writeBooleanValue('storageRequireEncryption', $this->getStorageRequireEncryption());
        $writer->writeBooleanValue('webBrowserBlocked', $this->getWebBrowserBlocked());
        $writer->writeBooleanValue('wifiBlockAutomaticConnectHotspots', $this->getWifiBlockAutomaticConnectHotspots());
        $writer->writeBooleanValue('wifiBlocked', $this->getWifiBlocked());
        $writer->writeBooleanValue('wifiBlockHotspotReporting', $this->getWifiBlockHotspotReporting());
        $writer->writeBooleanValue('windowsStoreBlocked', $this->getWindowsStoreBlocked());
    }

    /**
     * Sets the applyOnlyToWindowsPhone81 property value. Value indicating whether this policy only applies to Windows Phone 8.1. This property is read-only.
     * @param bool|null $value Value to set for the applyOnlyToWindowsPhone81 property.
    */
    public function setApplyOnlyToWindowsPhone81(?bool $value): void {
        $this->getBackingStore()->set('applyOnlyToWindowsPhone81', $value);
    }

    /**
     * Sets the appsBlockCopyPaste property value. Indicates whether or not to block copy paste.
     * @param bool|null $value Value to set for the appsBlockCopyPaste property.
    */
    public function setAppsBlockCopyPaste(?bool $value): void {
        $this->getBackingStore()->set('appsBlockCopyPaste', $value);
    }

    /**
     * Sets the bluetoothBlocked property value. Indicates whether or not to block bluetooth.
     * @param bool|null $value Value to set for the bluetoothBlocked property.
    */
    public function setBluetoothBlocked(?bool $value): void {
        $this->getBackingStore()->set('bluetoothBlocked', $value);
    }

    /**
     * Sets the cameraBlocked property value. Indicates whether or not to block camera.
     * @param bool|null $value Value to set for the cameraBlocked property.
    */
    public function setCameraBlocked(?bool $value): void {
        $this->getBackingStore()->set('cameraBlocked', $value);
    }

    /**
     * Sets the cellularBlockWifiTethering property value. Indicates whether or not to block Wi-Fi tethering. Has no impact if Wi-Fi is blocked.
     * @param bool|null $value Value to set for the cellularBlockWifiTethering property.
    */
    public function setCellularBlockWifiTethering(?bool $value): void {
        $this->getBackingStore()->set('cellularBlockWifiTethering', $value);
    }

    /**
     * Sets the compliantAppListType property value. Possible values of the compliance app list.
     * @param AppListType|null $value Value to set for the compliantAppListType property.
    */
    public function setCompliantAppListType(?AppListType $value): void {
        $this->getBackingStore()->set('compliantAppListType', $value);
    }

    /**
     * Sets the compliantAppsList property value. List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     * @param array<AppListItem>|null $value Value to set for the compliantAppsList property.
    */
    public function setCompliantAppsList(?array $value): void {
        $this->getBackingStore()->set('compliantAppsList', $value);
    }

    /**
     * Sets the diagnosticDataBlockSubmission property value. Indicates whether or not to block diagnostic data submission.
     * @param bool|null $value Value to set for the diagnosticDataBlockSubmission property.
    */
    public function setDiagnosticDataBlockSubmission(?bool $value): void {
        $this->getBackingStore()->set('diagnosticDataBlockSubmission', $value);
    }

    /**
     * Sets the emailBlockAddingAccounts property value. Indicates whether or not to block custom email accounts.
     * @param bool|null $value Value to set for the emailBlockAddingAccounts property.
    */
    public function setEmailBlockAddingAccounts(?bool $value): void {
        $this->getBackingStore()->set('emailBlockAddingAccounts', $value);
    }

    /**
     * Sets the locationServicesBlocked property value. Indicates whether or not to block location services.
     * @param bool|null $value Value to set for the locationServicesBlocked property.
    */
    public function setLocationServicesBlocked(?bool $value): void {
        $this->getBackingStore()->set('locationServicesBlocked', $value);
    }

    /**
     * Sets the microsoftAccountBlocked property value. Indicates whether or not to block using a Microsoft Account.
     * @param bool|null $value Value to set for the microsoftAccountBlocked property.
    */
    public function setMicrosoftAccountBlocked(?bool $value): void {
        $this->getBackingStore()->set('microsoftAccountBlocked', $value);
    }

    /**
     * Sets the nfcBlocked property value. Indicates whether or not to block Near-Field Communication.
     * @param bool|null $value Value to set for the nfcBlocked property.
    */
    public function setNfcBlocked(?bool $value): void {
        $this->getBackingStore()->set('nfcBlocked', $value);
    }

    /**
     * Sets the passwordBlockSimple property value. Indicates whether or not to block syncing the calendar.
     * @param bool|null $value Value to set for the passwordBlockSimple property.
    */
    public function setPasswordBlockSimple(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockSimple', $value);
    }

    /**
     * Sets the passwordExpirationDays property value. Number of days before the password expires.
     * @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value): void {
        $this->getBackingStore()->set('passwordExpirationDays', $value);
    }

    /**
     * Sets the passwordMinimumCharacterSetCount property value. Number of character sets a password must contain.
     * @param int|null $value Value to set for the passwordMinimumCharacterSetCount property.
    */
    public function setPasswordMinimumCharacterSetCount(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumCharacterSetCount', $value);
    }

    /**
     * Sets the passwordMinimumLength property value. Minimum length of passwords.
     * @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLength', $value);
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before screen timeout.
     * @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?int $value): void {
        $this->getBackingStore()->set('passwordMinutesOfInactivityBeforeScreenTimeout', $value);
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block. Valid values 0 to 24
     * @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value): void {
        $this->getBackingStore()->set('passwordPreviousPasswordBlockCount', $value);
    }

    /**
     * Sets the passwordRequired property value. Indicates whether or not to require a password.
     * @param bool|null $value Value to set for the passwordRequired property.
    */
    public function setPasswordRequired(?bool $value): void {
        $this->getBackingStore()->set('passwordRequired', $value);
    }

    /**
     * Sets the passwordRequiredType property value. Possible values of required passwords.
     * @param RequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?RequiredPasswordType $value): void {
        $this->getBackingStore()->set('passwordRequiredType', $value);
    }

    /**
     * Sets the passwordSignInFailureCountBeforeFactoryReset property value. Number of sign in failures allowed before factory reset.
     * @param int|null $value Value to set for the passwordSignInFailureCountBeforeFactoryReset property.
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset(?int $value): void {
        $this->getBackingStore()->set('passwordSignInFailureCountBeforeFactoryReset', $value);
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether or not to block screenshots.
     * @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value): void {
        $this->getBackingStore()->set('screenCaptureBlocked', $value);
    }

    /**
     * Sets the storageBlockRemovableStorage property value. Indicates whether or not to block removable storage.
     * @param bool|null $value Value to set for the storageBlockRemovableStorage property.
    */
    public function setStorageBlockRemovableStorage(?bool $value): void {
        $this->getBackingStore()->set('storageBlockRemovableStorage', $value);
    }

    /**
     * Sets the storageRequireEncryption property value. Indicates whether or not to require encryption.
     * @param bool|null $value Value to set for the storageRequireEncryption property.
    */
    public function setStorageRequireEncryption(?bool $value): void {
        $this->getBackingStore()->set('storageRequireEncryption', $value);
    }

    /**
     * Sets the webBrowserBlocked property value. Indicates whether or not to block the web browser.
     * @param bool|null $value Value to set for the webBrowserBlocked property.
    */
    public function setWebBrowserBlocked(?bool $value): void {
        $this->getBackingStore()->set('webBrowserBlocked', $value);
    }

    /**
     * Sets the wifiBlockAutomaticConnectHotspots property value. Indicates whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked.
     * @param bool|null $value Value to set for the wifiBlockAutomaticConnectHotspots property.
    */
    public function setWifiBlockAutomaticConnectHotspots(?bool $value): void {
        $this->getBackingStore()->set('wifiBlockAutomaticConnectHotspots', $value);
    }

    /**
     * Sets the wifiBlocked property value. Indicates whether or not to block Wi-Fi.
     * @param bool|null $value Value to set for the wifiBlocked property.
    */
    public function setWifiBlocked(?bool $value): void {
        $this->getBackingStore()->set('wifiBlocked', $value);
    }

    /**
     * Sets the wifiBlockHotspotReporting property value. Indicates whether or not to block Wi-Fi hotspot reporting. Has no impact if Wi-Fi is blocked.
     * @param bool|null $value Value to set for the wifiBlockHotspotReporting property.
    */
    public function setWifiBlockHotspotReporting(?bool $value): void {
        $this->getBackingStore()->set('wifiBlockHotspotReporting', $value);
    }

    /**
     * Sets the windowsStoreBlocked property value. Indicates whether or not to block the Windows Store.
     * @param bool|null $value Value to set for the windowsStoreBlocked property.
    */
    public function setWindowsStoreBlocked(?bool $value): void {
        $this->getBackingStore()->set('windowsStoreBlocked', $value);
    }

}
