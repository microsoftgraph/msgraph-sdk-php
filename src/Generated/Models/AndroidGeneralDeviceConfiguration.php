<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * This topic provides descriptions of the declared methods, properties and relationships exposed by the androidGeneralDeviceConfiguration resource.
*/
class AndroidGeneralDeviceConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new AndroidGeneralDeviceConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidGeneralDeviceConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidGeneralDeviceConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidGeneralDeviceConfiguration {
        return new AndroidGeneralDeviceConfiguration();
    }

    /**
     * Gets the appsBlockClipboardSharing property value. Indicates whether or not to block clipboard sharing to copy and paste between applications.
     * @return bool|null
    */
    public function getAppsBlockClipboardSharing(): ?bool {
        $val = $this->getBackingStore()->get('appsBlockClipboardSharing');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appsBlockClipboardSharing'");
    }

    /**
     * Gets the appsBlockCopyPaste property value. Indicates whether or not to block copy and paste within applications.
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
     * Gets the appsBlockYouTube property value. Indicates whether or not to block the YouTube app.
     * @return bool|null
    */
    public function getAppsBlockYouTube(): ?bool {
        $val = $this->getBackingStore()->get('appsBlockYouTube');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appsBlockYouTube'");
    }

    /**
     * Gets the appsHideList property value. List of apps to be hidden on the KNOX device. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getAppsHideList(): ?array {
        $val = $this->getBackingStore()->get('appsHideList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppListItem::class);
            /** @var array<AppListItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appsHideList'");
    }

    /**
     * Gets the appsInstallAllowList property value. List of apps which can be installed on the KNOX device. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getAppsInstallAllowList(): ?array {
        $val = $this->getBackingStore()->get('appsInstallAllowList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppListItem::class);
            /** @var array<AppListItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appsInstallAllowList'");
    }

    /**
     * Gets the appsLaunchBlockList property value. List of apps which are blocked from being launched on the KNOX device. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getAppsLaunchBlockList(): ?array {
        $val = $this->getBackingStore()->get('appsLaunchBlockList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppListItem::class);
            /** @var array<AppListItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appsLaunchBlockList'");
    }

    /**
     * Gets the bluetoothBlocked property value. Indicates whether or not to block Bluetooth.
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
     * Gets the cameraBlocked property value. Indicates whether or not to block the use of the camera.
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
     * Gets the cellularBlockDataRoaming property value. Indicates whether or not to block data roaming.
     * @return bool|null
    */
    public function getCellularBlockDataRoaming(): ?bool {
        $val = $this->getBackingStore()->get('cellularBlockDataRoaming');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cellularBlockDataRoaming'");
    }

    /**
     * Gets the cellularBlockMessaging property value. Indicates whether or not to block SMS/MMS messaging.
     * @return bool|null
    */
    public function getCellularBlockMessaging(): ?bool {
        $val = $this->getBackingStore()->get('cellularBlockMessaging');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cellularBlockMessaging'");
    }

    /**
     * Gets the cellularBlockVoiceRoaming property value. Indicates whether or not to block voice roaming.
     * @return bool|null
    */
    public function getCellularBlockVoiceRoaming(): ?bool {
        $val = $this->getBackingStore()->get('cellularBlockVoiceRoaming');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cellularBlockVoiceRoaming'");
    }

    /**
     * Gets the cellularBlockWiFiTethering property value. Indicates whether or not to block syncing Wi-Fi tethering.
     * @return bool|null
    */
    public function getCellularBlockWiFiTethering(): ?bool {
        $val = $this->getBackingStore()->get('cellularBlockWiFiTethering');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cellularBlockWiFiTethering'");
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
     * Gets the deviceSharingAllowed property value. Indicates whether or not to allow device sharing mode.
     * @return bool|null
    */
    public function getDeviceSharingAllowed(): ?bool {
        $val = $this->getBackingStore()->get('deviceSharingAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceSharingAllowed'");
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
     * Gets the factoryResetBlocked property value. Indicates whether or not to block user performing a factory reset.
     * @return bool|null
    */
    public function getFactoryResetBlocked(): ?bool {
        $val = $this->getBackingStore()->get('factoryResetBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'factoryResetBlocked'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appsBlockClipboardSharing' => fn(ParseNode $n) => $o->setAppsBlockClipboardSharing($n->getBooleanValue()),
            'appsBlockCopyPaste' => fn(ParseNode $n) => $o->setAppsBlockCopyPaste($n->getBooleanValue()),
            'appsBlockYouTube' => fn(ParseNode $n) => $o->setAppsBlockYouTube($n->getBooleanValue()),
            'appsHideList' => fn(ParseNode $n) => $o->setAppsHideList($n->getCollectionOfObjectValues([AppListItem::class, 'createFromDiscriminatorValue'])),
            'appsInstallAllowList' => fn(ParseNode $n) => $o->setAppsInstallAllowList($n->getCollectionOfObjectValues([AppListItem::class, 'createFromDiscriminatorValue'])),
            'appsLaunchBlockList' => fn(ParseNode $n) => $o->setAppsLaunchBlockList($n->getCollectionOfObjectValues([AppListItem::class, 'createFromDiscriminatorValue'])),
            'bluetoothBlocked' => fn(ParseNode $n) => $o->setBluetoothBlocked($n->getBooleanValue()),
            'cameraBlocked' => fn(ParseNode $n) => $o->setCameraBlocked($n->getBooleanValue()),
            'cellularBlockDataRoaming' => fn(ParseNode $n) => $o->setCellularBlockDataRoaming($n->getBooleanValue()),
            'cellularBlockMessaging' => fn(ParseNode $n) => $o->setCellularBlockMessaging($n->getBooleanValue()),
            'cellularBlockVoiceRoaming' => fn(ParseNode $n) => $o->setCellularBlockVoiceRoaming($n->getBooleanValue()),
            'cellularBlockWiFiTethering' => fn(ParseNode $n) => $o->setCellularBlockWiFiTethering($n->getBooleanValue()),
            'compliantAppListType' => fn(ParseNode $n) => $o->setCompliantAppListType($n->getEnumValue(AppListType::class)),
            'compliantAppsList' => fn(ParseNode $n) => $o->setCompliantAppsList($n->getCollectionOfObjectValues([AppListItem::class, 'createFromDiscriminatorValue'])),
            'deviceSharingAllowed' => fn(ParseNode $n) => $o->setDeviceSharingAllowed($n->getBooleanValue()),
            'diagnosticDataBlockSubmission' => fn(ParseNode $n) => $o->setDiagnosticDataBlockSubmission($n->getBooleanValue()),
            'factoryResetBlocked' => fn(ParseNode $n) => $o->setFactoryResetBlocked($n->getBooleanValue()),
            'googleAccountBlockAutoSync' => fn(ParseNode $n) => $o->setGoogleAccountBlockAutoSync($n->getBooleanValue()),
            'googlePlayStoreBlocked' => fn(ParseNode $n) => $o->setGooglePlayStoreBlocked($n->getBooleanValue()),
            'kioskModeApps' => fn(ParseNode $n) => $o->setKioskModeApps($n->getCollectionOfObjectValues([AppListItem::class, 'createFromDiscriminatorValue'])),
            'kioskModeBlockSleepButton' => fn(ParseNode $n) => $o->setKioskModeBlockSleepButton($n->getBooleanValue()),
            'kioskModeBlockVolumeButtons' => fn(ParseNode $n) => $o->setKioskModeBlockVolumeButtons($n->getBooleanValue()),
            'locationServicesBlocked' => fn(ParseNode $n) => $o->setLocationServicesBlocked($n->getBooleanValue()),
            'nfcBlocked' => fn(ParseNode $n) => $o->setNfcBlocked($n->getBooleanValue()),
            'passwordBlockFingerprintUnlock' => fn(ParseNode $n) => $o->setPasswordBlockFingerprintUnlock($n->getBooleanValue()),
            'passwordBlockTrustAgents' => fn(ParseNode $n) => $o->setPasswordBlockTrustAgents($n->getBooleanValue()),
            'passwordExpirationDays' => fn(ParseNode $n) => $o->setPasswordExpirationDays($n->getIntegerValue()),
            'passwordMinimumLength' => fn(ParseNode $n) => $o->setPasswordMinimumLength($n->getIntegerValue()),
            'passwordMinutesOfInactivityBeforeScreenTimeout' => fn(ParseNode $n) => $o->setPasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()),
            'passwordPreviousPasswordBlockCount' => fn(ParseNode $n) => $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()),
            'passwordRequired' => fn(ParseNode $n) => $o->setPasswordRequired($n->getBooleanValue()),
            'passwordRequiredType' => fn(ParseNode $n) => $o->setPasswordRequiredType($n->getEnumValue(AndroidRequiredPasswordType::class)),
            'passwordSignInFailureCountBeforeFactoryReset' => fn(ParseNode $n) => $o->setPasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()),
            'powerOffBlocked' => fn(ParseNode $n) => $o->setPowerOffBlocked($n->getBooleanValue()),
            'screenCaptureBlocked' => fn(ParseNode $n) => $o->setScreenCaptureBlocked($n->getBooleanValue()),
            'securityRequireVerifyApps' => fn(ParseNode $n) => $o->setSecurityRequireVerifyApps($n->getBooleanValue()),
            'storageBlockGoogleBackup' => fn(ParseNode $n) => $o->setStorageBlockGoogleBackup($n->getBooleanValue()),
            'storageBlockRemovableStorage' => fn(ParseNode $n) => $o->setStorageBlockRemovableStorage($n->getBooleanValue()),
            'storageRequireDeviceEncryption' => fn(ParseNode $n) => $o->setStorageRequireDeviceEncryption($n->getBooleanValue()),
            'storageRequireRemovableStorageEncryption' => fn(ParseNode $n) => $o->setStorageRequireRemovableStorageEncryption($n->getBooleanValue()),
            'voiceAssistantBlocked' => fn(ParseNode $n) => $o->setVoiceAssistantBlocked($n->getBooleanValue()),
            'voiceDialingBlocked' => fn(ParseNode $n) => $o->setVoiceDialingBlocked($n->getBooleanValue()),
            'webBrowserBlockAutofill' => fn(ParseNode $n) => $o->setWebBrowserBlockAutofill($n->getBooleanValue()),
            'webBrowserBlocked' => fn(ParseNode $n) => $o->setWebBrowserBlocked($n->getBooleanValue()),
            'webBrowserBlockJavaScript' => fn(ParseNode $n) => $o->setWebBrowserBlockJavaScript($n->getBooleanValue()),
            'webBrowserBlockPopups' => fn(ParseNode $n) => $o->setWebBrowserBlockPopups($n->getBooleanValue()),
            'webBrowserCookieSettings' => fn(ParseNode $n) => $o->setWebBrowserCookieSettings($n->getEnumValue(WebBrowserCookieSettings::class)),
            'wiFiBlocked' => fn(ParseNode $n) => $o->setWiFiBlocked($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the googleAccountBlockAutoSync property value. Indicates whether or not to block Google account auto sync.
     * @return bool|null
    */
    public function getGoogleAccountBlockAutoSync(): ?bool {
        $val = $this->getBackingStore()->get('googleAccountBlockAutoSync');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'googleAccountBlockAutoSync'");
    }

    /**
     * Gets the googlePlayStoreBlocked property value. Indicates whether or not to block the Google Play store.
     * @return bool|null
    */
    public function getGooglePlayStoreBlocked(): ?bool {
        $val = $this->getBackingStore()->get('googlePlayStoreBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'googlePlayStoreBlocked'");
    }

    /**
     * Gets the kioskModeApps property value. A list of apps that will be allowed to run when the device is in Kiosk Mode. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getKioskModeApps(): ?array {
        $val = $this->getBackingStore()->get('kioskModeApps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AppListItem::class);
            /** @var array<AppListItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeApps'");
    }

    /**
     * Gets the kioskModeBlockSleepButton property value. Indicates whether or not to block the screen sleep button while in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeBlockSleepButton(): ?bool {
        $val = $this->getBackingStore()->get('kioskModeBlockSleepButton');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeBlockSleepButton'");
    }

    /**
     * Gets the kioskModeBlockVolumeButtons property value. Indicates whether or not to block the volume buttons while in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeBlockVolumeButtons(): ?bool {
        $val = $this->getBackingStore()->get('kioskModeBlockVolumeButtons');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kioskModeBlockVolumeButtons'");
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
     * Gets the passwordBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock.
     * @return bool|null
    */
    public function getPasswordBlockFingerprintUnlock(): ?bool {
        $val = $this->getBackingStore()->get('passwordBlockFingerprintUnlock');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordBlockFingerprintUnlock'");
    }

    /**
     * Gets the passwordBlockTrustAgents property value. Indicates whether or not to block Smart Lock and other trust agents.
     * @return bool|null
    */
    public function getPasswordBlockTrustAgents(): ?bool {
        $val = $this->getBackingStore()->get('passwordBlockTrustAgents');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordBlockTrustAgents'");
    }

    /**
     * Gets the passwordExpirationDays property value. Number of days before the password expires. Valid values 1 to 365
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
     * Gets the passwordMinimumLength property value. Minimum length of passwords. Valid values 4 to 16
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
     * Gets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
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
     * Gets the passwordRequiredType property value. Android required password type.
     * @return AndroidRequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?AndroidRequiredPasswordType {
        $val = $this->getBackingStore()->get('passwordRequiredType');
        if (is_null($val) || $val instanceof AndroidRequiredPasswordType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordRequiredType'");
    }

    /**
     * Gets the passwordSignInFailureCountBeforeFactoryReset property value. Number of sign in failures allowed before factory reset. Valid values 1 to 16
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
     * Gets the powerOffBlocked property value. Indicates whether or not to block powering off the device.
     * @return bool|null
    */
    public function getPowerOffBlocked(): ?bool {
        $val = $this->getBackingStore()->get('powerOffBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'powerOffBlocked'");
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
     * Gets the securityRequireVerifyApps property value. Require the Android Verify apps feature is turned on.
     * @return bool|null
    */
    public function getSecurityRequireVerifyApps(): ?bool {
        $val = $this->getBackingStore()->get('securityRequireVerifyApps');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityRequireVerifyApps'");
    }

    /**
     * Gets the storageBlockGoogleBackup property value. Indicates whether or not to block Google Backup.
     * @return bool|null
    */
    public function getStorageBlockGoogleBackup(): ?bool {
        $val = $this->getBackingStore()->get('storageBlockGoogleBackup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageBlockGoogleBackup'");
    }

    /**
     * Gets the storageBlockRemovableStorage property value. Indicates whether or not to block removable storage usage.
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
     * Gets the storageRequireDeviceEncryption property value. Indicates whether or not to require device encryption.
     * @return bool|null
    */
    public function getStorageRequireDeviceEncryption(): ?bool {
        $val = $this->getBackingStore()->get('storageRequireDeviceEncryption');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageRequireDeviceEncryption'");
    }

    /**
     * Gets the storageRequireRemovableStorageEncryption property value. Indicates whether or not to require removable storage encryption.
     * @return bool|null
    */
    public function getStorageRequireRemovableStorageEncryption(): ?bool {
        $val = $this->getBackingStore()->get('storageRequireRemovableStorageEncryption');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageRequireRemovableStorageEncryption'");
    }

    /**
     * Gets the voiceAssistantBlocked property value. Indicates whether or not to block the use of the Voice Assistant.
     * @return bool|null
    */
    public function getVoiceAssistantBlocked(): ?bool {
        $val = $this->getBackingStore()->get('voiceAssistantBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'voiceAssistantBlocked'");
    }

    /**
     * Gets the voiceDialingBlocked property value. Indicates whether or not to block voice dialing.
     * @return bool|null
    */
    public function getVoiceDialingBlocked(): ?bool {
        $val = $this->getBackingStore()->get('voiceDialingBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'voiceDialingBlocked'");
    }

    /**
     * Gets the webBrowserBlockAutofill property value. Indicates whether or not to block the web browser's auto fill feature.
     * @return bool|null
    */
    public function getWebBrowserBlockAutofill(): ?bool {
        $val = $this->getBackingStore()->get('webBrowserBlockAutofill');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webBrowserBlockAutofill'");
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
     * Gets the webBrowserBlockJavaScript property value. Indicates whether or not to block JavaScript within the web browser.
     * @return bool|null
    */
    public function getWebBrowserBlockJavaScript(): ?bool {
        $val = $this->getBackingStore()->get('webBrowserBlockJavaScript');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webBrowserBlockJavaScript'");
    }

    /**
     * Gets the webBrowserBlockPopups property value. Indicates whether or not to block popups within the web browser.
     * @return bool|null
    */
    public function getWebBrowserBlockPopups(): ?bool {
        $val = $this->getBackingStore()->get('webBrowserBlockPopups');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webBrowserBlockPopups'");
    }

    /**
     * Gets the webBrowserCookieSettings property value. Web Browser Cookie Settings.
     * @return WebBrowserCookieSettings|null
    */
    public function getWebBrowserCookieSettings(): ?WebBrowserCookieSettings {
        $val = $this->getBackingStore()->get('webBrowserCookieSettings');
        if (is_null($val) || $val instanceof WebBrowserCookieSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webBrowserCookieSettings'");
    }

    /**
     * Gets the wiFiBlocked property value. Indicates whether or not to block syncing Wi-Fi.
     * @return bool|null
    */
    public function getWiFiBlocked(): ?bool {
        $val = $this->getBackingStore()->get('wiFiBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wiFiBlocked'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('appsBlockClipboardSharing', $this->getAppsBlockClipboardSharing());
        $writer->writeBooleanValue('appsBlockCopyPaste', $this->getAppsBlockCopyPaste());
        $writer->writeBooleanValue('appsBlockYouTube', $this->getAppsBlockYouTube());
        $writer->writeCollectionOfObjectValues('appsHideList', $this->getAppsHideList());
        $writer->writeCollectionOfObjectValues('appsInstallAllowList', $this->getAppsInstallAllowList());
        $writer->writeCollectionOfObjectValues('appsLaunchBlockList', $this->getAppsLaunchBlockList());
        $writer->writeBooleanValue('bluetoothBlocked', $this->getBluetoothBlocked());
        $writer->writeBooleanValue('cameraBlocked', $this->getCameraBlocked());
        $writer->writeBooleanValue('cellularBlockDataRoaming', $this->getCellularBlockDataRoaming());
        $writer->writeBooleanValue('cellularBlockMessaging', $this->getCellularBlockMessaging());
        $writer->writeBooleanValue('cellularBlockVoiceRoaming', $this->getCellularBlockVoiceRoaming());
        $writer->writeBooleanValue('cellularBlockWiFiTethering', $this->getCellularBlockWiFiTethering());
        $writer->writeEnumValue('compliantAppListType', $this->getCompliantAppListType());
        $writer->writeCollectionOfObjectValues('compliantAppsList', $this->getCompliantAppsList());
        $writer->writeBooleanValue('deviceSharingAllowed', $this->getDeviceSharingAllowed());
        $writer->writeBooleanValue('diagnosticDataBlockSubmission', $this->getDiagnosticDataBlockSubmission());
        $writer->writeBooleanValue('factoryResetBlocked', $this->getFactoryResetBlocked());
        $writer->writeBooleanValue('googleAccountBlockAutoSync', $this->getGoogleAccountBlockAutoSync());
        $writer->writeBooleanValue('googlePlayStoreBlocked', $this->getGooglePlayStoreBlocked());
        $writer->writeCollectionOfObjectValues('kioskModeApps', $this->getKioskModeApps());
        $writer->writeBooleanValue('kioskModeBlockSleepButton', $this->getKioskModeBlockSleepButton());
        $writer->writeBooleanValue('kioskModeBlockVolumeButtons', $this->getKioskModeBlockVolumeButtons());
        $writer->writeBooleanValue('locationServicesBlocked', $this->getLocationServicesBlocked());
        $writer->writeBooleanValue('nfcBlocked', $this->getNfcBlocked());
        $writer->writeBooleanValue('passwordBlockFingerprintUnlock', $this->getPasswordBlockFingerprintUnlock());
        $writer->writeBooleanValue('passwordBlockTrustAgents', $this->getPasswordBlockTrustAgents());
        $writer->writeIntegerValue('passwordExpirationDays', $this->getPasswordExpirationDays());
        $writer->writeIntegerValue('passwordMinimumLength', $this->getPasswordMinimumLength());
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeScreenTimeout', $this->getPasswordMinutesOfInactivityBeforeScreenTimeout());
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->getPasswordPreviousPasswordBlockCount());
        $writer->writeBooleanValue('passwordRequired', $this->getPasswordRequired());
        $writer->writeEnumValue('passwordRequiredType', $this->getPasswordRequiredType());
        $writer->writeIntegerValue('passwordSignInFailureCountBeforeFactoryReset', $this->getPasswordSignInFailureCountBeforeFactoryReset());
        $writer->writeBooleanValue('powerOffBlocked', $this->getPowerOffBlocked());
        $writer->writeBooleanValue('screenCaptureBlocked', $this->getScreenCaptureBlocked());
        $writer->writeBooleanValue('securityRequireVerifyApps', $this->getSecurityRequireVerifyApps());
        $writer->writeBooleanValue('storageBlockGoogleBackup', $this->getStorageBlockGoogleBackup());
        $writer->writeBooleanValue('storageBlockRemovableStorage', $this->getStorageBlockRemovableStorage());
        $writer->writeBooleanValue('storageRequireDeviceEncryption', $this->getStorageRequireDeviceEncryption());
        $writer->writeBooleanValue('storageRequireRemovableStorageEncryption', $this->getStorageRequireRemovableStorageEncryption());
        $writer->writeBooleanValue('voiceAssistantBlocked', $this->getVoiceAssistantBlocked());
        $writer->writeBooleanValue('voiceDialingBlocked', $this->getVoiceDialingBlocked());
        $writer->writeBooleanValue('webBrowserBlockAutofill', $this->getWebBrowserBlockAutofill());
        $writer->writeBooleanValue('webBrowserBlocked', $this->getWebBrowserBlocked());
        $writer->writeBooleanValue('webBrowserBlockJavaScript', $this->getWebBrowserBlockJavaScript());
        $writer->writeBooleanValue('webBrowserBlockPopups', $this->getWebBrowserBlockPopups());
        $writer->writeEnumValue('webBrowserCookieSettings', $this->getWebBrowserCookieSettings());
        $writer->writeBooleanValue('wiFiBlocked', $this->getWiFiBlocked());
    }

    /**
     * Sets the appsBlockClipboardSharing property value. Indicates whether or not to block clipboard sharing to copy and paste between applications.
     * @param bool|null $value Value to set for the appsBlockClipboardSharing property.
    */
    public function setAppsBlockClipboardSharing(?bool $value): void {
        $this->getBackingStore()->set('appsBlockClipboardSharing', $value);
    }

    /**
     * Sets the appsBlockCopyPaste property value. Indicates whether or not to block copy and paste within applications.
     * @param bool|null $value Value to set for the appsBlockCopyPaste property.
    */
    public function setAppsBlockCopyPaste(?bool $value): void {
        $this->getBackingStore()->set('appsBlockCopyPaste', $value);
    }

    /**
     * Sets the appsBlockYouTube property value. Indicates whether or not to block the YouTube app.
     * @param bool|null $value Value to set for the appsBlockYouTube property.
    */
    public function setAppsBlockYouTube(?bool $value): void {
        $this->getBackingStore()->set('appsBlockYouTube', $value);
    }

    /**
     * Sets the appsHideList property value. List of apps to be hidden on the KNOX device. This collection can contain a maximum of 500 elements.
     * @param array<AppListItem>|null $value Value to set for the appsHideList property.
    */
    public function setAppsHideList(?array $value): void {
        $this->getBackingStore()->set('appsHideList', $value);
    }

    /**
     * Sets the appsInstallAllowList property value. List of apps which can be installed on the KNOX device. This collection can contain a maximum of 500 elements.
     * @param array<AppListItem>|null $value Value to set for the appsInstallAllowList property.
    */
    public function setAppsInstallAllowList(?array $value): void {
        $this->getBackingStore()->set('appsInstallAllowList', $value);
    }

    /**
     * Sets the appsLaunchBlockList property value. List of apps which are blocked from being launched on the KNOX device. This collection can contain a maximum of 500 elements.
     * @param array<AppListItem>|null $value Value to set for the appsLaunchBlockList property.
    */
    public function setAppsLaunchBlockList(?array $value): void {
        $this->getBackingStore()->set('appsLaunchBlockList', $value);
    }

    /**
     * Sets the bluetoothBlocked property value. Indicates whether or not to block Bluetooth.
     * @param bool|null $value Value to set for the bluetoothBlocked property.
    */
    public function setBluetoothBlocked(?bool $value): void {
        $this->getBackingStore()->set('bluetoothBlocked', $value);
    }

    /**
     * Sets the cameraBlocked property value. Indicates whether or not to block the use of the camera.
     * @param bool|null $value Value to set for the cameraBlocked property.
    */
    public function setCameraBlocked(?bool $value): void {
        $this->getBackingStore()->set('cameraBlocked', $value);
    }

    /**
     * Sets the cellularBlockDataRoaming property value. Indicates whether or not to block data roaming.
     * @param bool|null $value Value to set for the cellularBlockDataRoaming property.
    */
    public function setCellularBlockDataRoaming(?bool $value): void {
        $this->getBackingStore()->set('cellularBlockDataRoaming', $value);
    }

    /**
     * Sets the cellularBlockMessaging property value. Indicates whether or not to block SMS/MMS messaging.
     * @param bool|null $value Value to set for the cellularBlockMessaging property.
    */
    public function setCellularBlockMessaging(?bool $value): void {
        $this->getBackingStore()->set('cellularBlockMessaging', $value);
    }

    /**
     * Sets the cellularBlockVoiceRoaming property value. Indicates whether or not to block voice roaming.
     * @param bool|null $value Value to set for the cellularBlockVoiceRoaming property.
    */
    public function setCellularBlockVoiceRoaming(?bool $value): void {
        $this->getBackingStore()->set('cellularBlockVoiceRoaming', $value);
    }

    /**
     * Sets the cellularBlockWiFiTethering property value. Indicates whether or not to block syncing Wi-Fi tethering.
     * @param bool|null $value Value to set for the cellularBlockWiFiTethering property.
    */
    public function setCellularBlockWiFiTethering(?bool $value): void {
        $this->getBackingStore()->set('cellularBlockWiFiTethering', $value);
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
     * Sets the deviceSharingAllowed property value. Indicates whether or not to allow device sharing mode.
     * @param bool|null $value Value to set for the deviceSharingAllowed property.
    */
    public function setDeviceSharingAllowed(?bool $value): void {
        $this->getBackingStore()->set('deviceSharingAllowed', $value);
    }

    /**
     * Sets the diagnosticDataBlockSubmission property value. Indicates whether or not to block diagnostic data submission.
     * @param bool|null $value Value to set for the diagnosticDataBlockSubmission property.
    */
    public function setDiagnosticDataBlockSubmission(?bool $value): void {
        $this->getBackingStore()->set('diagnosticDataBlockSubmission', $value);
    }

    /**
     * Sets the factoryResetBlocked property value. Indicates whether or not to block user performing a factory reset.
     * @param bool|null $value Value to set for the factoryResetBlocked property.
    */
    public function setFactoryResetBlocked(?bool $value): void {
        $this->getBackingStore()->set('factoryResetBlocked', $value);
    }

    /**
     * Sets the googleAccountBlockAutoSync property value. Indicates whether or not to block Google account auto sync.
     * @param bool|null $value Value to set for the googleAccountBlockAutoSync property.
    */
    public function setGoogleAccountBlockAutoSync(?bool $value): void {
        $this->getBackingStore()->set('googleAccountBlockAutoSync', $value);
    }

    /**
     * Sets the googlePlayStoreBlocked property value. Indicates whether or not to block the Google Play store.
     * @param bool|null $value Value to set for the googlePlayStoreBlocked property.
    */
    public function setGooglePlayStoreBlocked(?bool $value): void {
        $this->getBackingStore()->set('googlePlayStoreBlocked', $value);
    }

    /**
     * Sets the kioskModeApps property value. A list of apps that will be allowed to run when the device is in Kiosk Mode. This collection can contain a maximum of 500 elements.
     * @param array<AppListItem>|null $value Value to set for the kioskModeApps property.
    */
    public function setKioskModeApps(?array $value): void {
        $this->getBackingStore()->set('kioskModeApps', $value);
    }

    /**
     * Sets the kioskModeBlockSleepButton property value. Indicates whether or not to block the screen sleep button while in Kiosk Mode.
     * @param bool|null $value Value to set for the kioskModeBlockSleepButton property.
    */
    public function setKioskModeBlockSleepButton(?bool $value): void {
        $this->getBackingStore()->set('kioskModeBlockSleepButton', $value);
    }

    /**
     * Sets the kioskModeBlockVolumeButtons property value. Indicates whether or not to block the volume buttons while in Kiosk Mode.
     * @param bool|null $value Value to set for the kioskModeBlockVolumeButtons property.
    */
    public function setKioskModeBlockVolumeButtons(?bool $value): void {
        $this->getBackingStore()->set('kioskModeBlockVolumeButtons', $value);
    }

    /**
     * Sets the locationServicesBlocked property value. Indicates whether or not to block location services.
     * @param bool|null $value Value to set for the locationServicesBlocked property.
    */
    public function setLocationServicesBlocked(?bool $value): void {
        $this->getBackingStore()->set('locationServicesBlocked', $value);
    }

    /**
     * Sets the nfcBlocked property value. Indicates whether or not to block Near-Field Communication.
     * @param bool|null $value Value to set for the nfcBlocked property.
    */
    public function setNfcBlocked(?bool $value): void {
        $this->getBackingStore()->set('nfcBlocked', $value);
    }

    /**
     * Sets the passwordBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock.
     * @param bool|null $value Value to set for the passwordBlockFingerprintUnlock property.
    */
    public function setPasswordBlockFingerprintUnlock(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockFingerprintUnlock', $value);
    }

    /**
     * Sets the passwordBlockTrustAgents property value. Indicates whether or not to block Smart Lock and other trust agents.
     * @param bool|null $value Value to set for the passwordBlockTrustAgents property.
    */
    public function setPasswordBlockTrustAgents(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockTrustAgents', $value);
    }

    /**
     * Sets the passwordExpirationDays property value. Number of days before the password expires. Valid values 1 to 365
     * @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value): void {
        $this->getBackingStore()->set('passwordExpirationDays', $value);
    }

    /**
     * Sets the passwordMinimumLength property value. Minimum length of passwords. Valid values 4 to 16
     * @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLength', $value);
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
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
     * Sets the passwordRequiredType property value. Android required password type.
     * @param AndroidRequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?AndroidRequiredPasswordType $value): void {
        $this->getBackingStore()->set('passwordRequiredType', $value);
    }

    /**
     * Sets the passwordSignInFailureCountBeforeFactoryReset property value. Number of sign in failures allowed before factory reset. Valid values 1 to 16
     * @param int|null $value Value to set for the passwordSignInFailureCountBeforeFactoryReset property.
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset(?int $value): void {
        $this->getBackingStore()->set('passwordSignInFailureCountBeforeFactoryReset', $value);
    }

    /**
     * Sets the powerOffBlocked property value. Indicates whether or not to block powering off the device.
     * @param bool|null $value Value to set for the powerOffBlocked property.
    */
    public function setPowerOffBlocked(?bool $value): void {
        $this->getBackingStore()->set('powerOffBlocked', $value);
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether or not to block screenshots.
     * @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value): void {
        $this->getBackingStore()->set('screenCaptureBlocked', $value);
    }

    /**
     * Sets the securityRequireVerifyApps property value. Require the Android Verify apps feature is turned on.
     * @param bool|null $value Value to set for the securityRequireVerifyApps property.
    */
    public function setSecurityRequireVerifyApps(?bool $value): void {
        $this->getBackingStore()->set('securityRequireVerifyApps', $value);
    }

    /**
     * Sets the storageBlockGoogleBackup property value. Indicates whether or not to block Google Backup.
     * @param bool|null $value Value to set for the storageBlockGoogleBackup property.
    */
    public function setStorageBlockGoogleBackup(?bool $value): void {
        $this->getBackingStore()->set('storageBlockGoogleBackup', $value);
    }

    /**
     * Sets the storageBlockRemovableStorage property value. Indicates whether or not to block removable storage usage.
     * @param bool|null $value Value to set for the storageBlockRemovableStorage property.
    */
    public function setStorageBlockRemovableStorage(?bool $value): void {
        $this->getBackingStore()->set('storageBlockRemovableStorage', $value);
    }

    /**
     * Sets the storageRequireDeviceEncryption property value. Indicates whether or not to require device encryption.
     * @param bool|null $value Value to set for the storageRequireDeviceEncryption property.
    */
    public function setStorageRequireDeviceEncryption(?bool $value): void {
        $this->getBackingStore()->set('storageRequireDeviceEncryption', $value);
    }

    /**
     * Sets the storageRequireRemovableStorageEncryption property value. Indicates whether or not to require removable storage encryption.
     * @param bool|null $value Value to set for the storageRequireRemovableStorageEncryption property.
    */
    public function setStorageRequireRemovableStorageEncryption(?bool $value): void {
        $this->getBackingStore()->set('storageRequireRemovableStorageEncryption', $value);
    }

    /**
     * Sets the voiceAssistantBlocked property value. Indicates whether or not to block the use of the Voice Assistant.
     * @param bool|null $value Value to set for the voiceAssistantBlocked property.
    */
    public function setVoiceAssistantBlocked(?bool $value): void {
        $this->getBackingStore()->set('voiceAssistantBlocked', $value);
    }

    /**
     * Sets the voiceDialingBlocked property value. Indicates whether or not to block voice dialing.
     * @param bool|null $value Value to set for the voiceDialingBlocked property.
    */
    public function setVoiceDialingBlocked(?bool $value): void {
        $this->getBackingStore()->set('voiceDialingBlocked', $value);
    }

    /**
     * Sets the webBrowserBlockAutofill property value. Indicates whether or not to block the web browser's auto fill feature.
     * @param bool|null $value Value to set for the webBrowserBlockAutofill property.
    */
    public function setWebBrowserBlockAutofill(?bool $value): void {
        $this->getBackingStore()->set('webBrowserBlockAutofill', $value);
    }

    /**
     * Sets the webBrowserBlocked property value. Indicates whether or not to block the web browser.
     * @param bool|null $value Value to set for the webBrowserBlocked property.
    */
    public function setWebBrowserBlocked(?bool $value): void {
        $this->getBackingStore()->set('webBrowserBlocked', $value);
    }

    /**
     * Sets the webBrowserBlockJavaScript property value. Indicates whether or not to block JavaScript within the web browser.
     * @param bool|null $value Value to set for the webBrowserBlockJavaScript property.
    */
    public function setWebBrowserBlockJavaScript(?bool $value): void {
        $this->getBackingStore()->set('webBrowserBlockJavaScript', $value);
    }

    /**
     * Sets the webBrowserBlockPopups property value. Indicates whether or not to block popups within the web browser.
     * @param bool|null $value Value to set for the webBrowserBlockPopups property.
    */
    public function setWebBrowserBlockPopups(?bool $value): void {
        $this->getBackingStore()->set('webBrowserBlockPopups', $value);
    }

    /**
     * Sets the webBrowserCookieSettings property value. Web Browser Cookie Settings.
     * @param WebBrowserCookieSettings|null $value Value to set for the webBrowserCookieSettings property.
    */
    public function setWebBrowserCookieSettings(?WebBrowserCookieSettings $value): void {
        $this->getBackingStore()->set('webBrowserCookieSettings', $value);
    }

    /**
     * Sets the wiFiBlocked property value. Indicates whether or not to block syncing Wi-Fi.
     * @param bool|null $value Value to set for the wiFiBlocked property.
    */
    public function setWiFiBlocked(?bool $value): void {
        $this->getBackingStore()->set('wiFiBlocked', $value);
    }

}
