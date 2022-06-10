<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidGeneralDeviceConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $appsBlockClipboardSharing Indicates whether or not to block clipboard sharing to copy and paste between applications.
    */
    private ?bool $appsBlockClipboardSharing = null;
    
    /**
     * @var bool|null $appsBlockCopyPaste Indicates whether or not to block copy and paste within applications.
    */
    private ?bool $appsBlockCopyPaste = null;
    
    /**
     * @var bool|null $appsBlockYouTube Indicates whether or not to block the YouTube app.
    */
    private ?bool $appsBlockYouTube = null;
    
    /**
     * @var array<AppListItem>|null $appsHideList List of apps to be hidden on the KNOX device. This collection can contain a maximum of 500 elements.
    */
    private ?array $appsHideList = null;
    
    /**
     * @var array<AppListItem>|null $appsInstallAllowList List of apps which can be installed on the KNOX device. This collection can contain a maximum of 500 elements.
    */
    private ?array $appsInstallAllowList = null;
    
    /**
     * @var array<AppListItem>|null $appsLaunchBlockList List of apps which are blocked from being launched on the KNOX device. This collection can contain a maximum of 500 elements.
    */
    private ?array $appsLaunchBlockList = null;
    
    /**
     * @var bool|null $bluetoothBlocked Indicates whether or not to block Bluetooth.
    */
    private ?bool $bluetoothBlocked = null;
    
    /**
     * @var bool|null $cameraBlocked Indicates whether or not to block the use of the camera.
    */
    private ?bool $cameraBlocked = null;
    
    /**
     * @var bool|null $cellularBlockDataRoaming Indicates whether or not to block data roaming.
    */
    private ?bool $cellularBlockDataRoaming = null;
    
    /**
     * @var bool|null $cellularBlockMessaging Indicates whether or not to block SMS/MMS messaging.
    */
    private ?bool $cellularBlockMessaging = null;
    
    /**
     * @var bool|null $cellularBlockVoiceRoaming Indicates whether or not to block voice roaming.
    */
    private ?bool $cellularBlockVoiceRoaming = null;
    
    /**
     * @var bool|null $cellularBlockWiFiTethering Indicates whether or not to block syncing Wi-Fi tethering.
    */
    private ?bool $cellularBlockWiFiTethering = null;
    
    /**
     * @var AppListType|null $compliantAppListType Type of list that is in the CompliantAppsList. Possible values are: none, appsInListCompliant, appsNotInListCompliant.
    */
    private ?AppListType $compliantAppListType = null;
    
    /**
     * @var array<AppListItem>|null $compliantAppsList List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
    */
    private ?array $compliantAppsList = null;
    
    /**
     * @var bool|null $deviceSharingAllowed Indicates whether or not to allow device sharing mode.
    */
    private ?bool $deviceSharingAllowed = null;
    
    /**
     * @var bool|null $diagnosticDataBlockSubmission Indicates whether or not to block diagnostic data submission.
    */
    private ?bool $diagnosticDataBlockSubmission = null;
    
    /**
     * @var bool|null $factoryResetBlocked Indicates whether or not to block user performing a factory reset.
    */
    private ?bool $factoryResetBlocked = null;
    
    /**
     * @var bool|null $googleAccountBlockAutoSync Indicates whether or not to block Google account auto sync.
    */
    private ?bool $googleAccountBlockAutoSync = null;
    
    /**
     * @var bool|null $googlePlayStoreBlocked Indicates whether or not to block the Google Play store.
    */
    private ?bool $googlePlayStoreBlocked = null;
    
    /**
     * @var array<AppListItem>|null $kioskModeApps A list of apps that will be allowed to run when the device is in Kiosk Mode. This collection can contain a maximum of 500 elements.
    */
    private ?array $kioskModeApps = null;
    
    /**
     * @var bool|null $kioskModeBlockSleepButton Indicates whether or not to block the screen sleep button while in Kiosk Mode.
    */
    private ?bool $kioskModeBlockSleepButton = null;
    
    /**
     * @var bool|null $kioskModeBlockVolumeButtons Indicates whether or not to block the volume buttons while in Kiosk Mode.
    */
    private ?bool $kioskModeBlockVolumeButtons = null;
    
    /**
     * @var bool|null $locationServicesBlocked Indicates whether or not to block location services.
    */
    private ?bool $locationServicesBlocked = null;
    
    /**
     * @var bool|null $nfcBlocked Indicates whether or not to block Near-Field Communication.
    */
    private ?bool $nfcBlocked = null;
    
    /**
     * @var bool|null $passwordBlockFingerprintUnlock Indicates whether or not to block fingerprint unlock.
    */
    private ?bool $passwordBlockFingerprintUnlock = null;
    
    /**
     * @var bool|null $passwordBlockTrustAgents Indicates whether or not to block Smart Lock and other trust agents.
    */
    private ?bool $passwordBlockTrustAgents = null;
    
    /**
     * @var int|null $passwordExpirationDays Number of days before the password expires. Valid values 1 to 365
    */
    private ?int $passwordExpirationDays = null;
    
    /**
     * @var int|null $passwordMinimumLength Minimum length of passwords. Valid values 4 to 16
    */
    private ?int $passwordMinimumLength = null;
    
    /**
     * @var int|null $passwordMinutesOfInactivityBeforeScreenTimeout Minutes of inactivity before the screen times out.
    */
    private ?int $passwordMinutesOfInactivityBeforeScreenTimeout = null;
    
    /**
     * @var int|null $passwordPreviousPasswordBlockCount Number of previous passwords to block. Valid values 0 to 24
    */
    private ?int $passwordPreviousPasswordBlockCount = null;
    
    /**
     * @var bool|null $passwordRequired Indicates whether or not to require a password.
    */
    private ?bool $passwordRequired = null;
    
    /**
     * @var AndroidRequiredPasswordType|null $passwordRequiredType Type of password that is required. Possible values are: deviceDefault, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, numeric, numericComplex, any.
    */
    private ?AndroidRequiredPasswordType $passwordRequiredType = null;
    
    /**
     * @var int|null $passwordSignInFailureCountBeforeFactoryReset Number of sign in failures allowed before factory reset. Valid values 1 to 16
    */
    private ?int $passwordSignInFailureCountBeforeFactoryReset = null;
    
    /**
     * @var bool|null $powerOffBlocked Indicates whether or not to block powering off the device.
    */
    private ?bool $powerOffBlocked = null;
    
    /**
     * @var bool|null $screenCaptureBlocked Indicates whether or not to block screenshots.
    */
    private ?bool $screenCaptureBlocked = null;
    
    /**
     * @var bool|null $securityRequireVerifyApps Require the Android Verify apps feature is turned on.
    */
    private ?bool $securityRequireVerifyApps = null;
    
    /**
     * @var bool|null $storageBlockGoogleBackup Indicates whether or not to block Google Backup.
    */
    private ?bool $storageBlockGoogleBackup = null;
    
    /**
     * @var bool|null $storageBlockRemovableStorage Indicates whether or not to block removable storage usage.
    */
    private ?bool $storageBlockRemovableStorage = null;
    
    /**
     * @var bool|null $storageRequireDeviceEncryption Indicates whether or not to require device encryption.
    */
    private ?bool $storageRequireDeviceEncryption = null;
    
    /**
     * @var bool|null $storageRequireRemovableStorageEncryption Indicates whether or not to require removable storage encryption.
    */
    private ?bool $storageRequireRemovableStorageEncryption = null;
    
    /**
     * @var bool|null $voiceAssistantBlocked Indicates whether or not to block the use of the Voice Assistant.
    */
    private ?bool $voiceAssistantBlocked = null;
    
    /**
     * @var bool|null $voiceDialingBlocked Indicates whether or not to block voice dialing.
    */
    private ?bool $voiceDialingBlocked = null;
    
    /**
     * @var bool|null $webBrowserBlockAutofill Indicates whether or not to block the web browser's auto fill feature.
    */
    private ?bool $webBrowserBlockAutofill = null;
    
    /**
     * @var bool|null $webBrowserBlocked Indicates whether or not to block the web browser.
    */
    private ?bool $webBrowserBlocked = null;
    
    /**
     * @var bool|null $webBrowserBlockJavaScript Indicates whether or not to block JavaScript within the web browser.
    */
    private ?bool $webBrowserBlockJavaScript = null;
    
    /**
     * @var bool|null $webBrowserBlockPopups Indicates whether or not to block popups within the web browser.
    */
    private ?bool $webBrowserBlockPopups = null;
    
    /**
     * @var WebBrowserCookieSettings|null $webBrowserCookieSettings Cookie settings within the web browser. Possible values are: browserDefault, blockAlways, allowCurrentWebSite, allowFromWebsitesVisited, allowAlways.
    */
    private ?WebBrowserCookieSettings $webBrowserCookieSettings = null;
    
    /**
     * @var bool|null $wiFiBlocked Indicates whether or not to block syncing Wi-Fi.
    */
    private ?bool $wiFiBlocked = null;
    
    /**
     * Instantiates a new AndroidGeneralDeviceConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->appsBlockClipboardSharing;
    }

    /**
     * Gets the appsBlockCopyPaste property value. Indicates whether or not to block copy and paste within applications.
     * @return bool|null
    */
    public function getAppsBlockCopyPaste(): ?bool {
        return $this->appsBlockCopyPaste;
    }

    /**
     * Gets the appsBlockYouTube property value. Indicates whether or not to block the YouTube app.
     * @return bool|null
    */
    public function getAppsBlockYouTube(): ?bool {
        return $this->appsBlockYouTube;
    }

    /**
     * Gets the appsHideList property value. List of apps to be hidden on the KNOX device. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getAppsHideList(): ?array {
        return $this->appsHideList;
    }

    /**
     * Gets the appsInstallAllowList property value. List of apps which can be installed on the KNOX device. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getAppsInstallAllowList(): ?array {
        return $this->appsInstallAllowList;
    }

    /**
     * Gets the appsLaunchBlockList property value. List of apps which are blocked from being launched on the KNOX device. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getAppsLaunchBlockList(): ?array {
        return $this->appsLaunchBlockList;
    }

    /**
     * Gets the bluetoothBlocked property value. Indicates whether or not to block Bluetooth.
     * @return bool|null
    */
    public function getBluetoothBlocked(): ?bool {
        return $this->bluetoothBlocked;
    }

    /**
     * Gets the cameraBlocked property value. Indicates whether or not to block the use of the camera.
     * @return bool|null
    */
    public function getCameraBlocked(): ?bool {
        return $this->cameraBlocked;
    }

    /**
     * Gets the cellularBlockDataRoaming property value. Indicates whether or not to block data roaming.
     * @return bool|null
    */
    public function getCellularBlockDataRoaming(): ?bool {
        return $this->cellularBlockDataRoaming;
    }

    /**
     * Gets the cellularBlockMessaging property value. Indicates whether or not to block SMS/MMS messaging.
     * @return bool|null
    */
    public function getCellularBlockMessaging(): ?bool {
        return $this->cellularBlockMessaging;
    }

    /**
     * Gets the cellularBlockVoiceRoaming property value. Indicates whether or not to block voice roaming.
     * @return bool|null
    */
    public function getCellularBlockVoiceRoaming(): ?bool {
        return $this->cellularBlockVoiceRoaming;
    }

    /**
     * Gets the cellularBlockWiFiTethering property value. Indicates whether or not to block syncing Wi-Fi tethering.
     * @return bool|null
    */
    public function getCellularBlockWiFiTethering(): ?bool {
        return $this->cellularBlockWiFiTethering;
    }

    /**
     * Gets the compliantAppListType property value. Type of list that is in the CompliantAppsList. Possible values are: none, appsInListCompliant, appsNotInListCompliant.
     * @return AppListType|null
    */
    public function getCompliantAppListType(): ?AppListType {
        return $this->compliantAppListType;
    }

    /**
     * Gets the compliantAppsList property value. List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     * @return array<AppListItem>|null
    */
    public function getCompliantAppsList(): ?array {
        return $this->compliantAppsList;
    }

    /**
     * Gets the deviceSharingAllowed property value. Indicates whether or not to allow device sharing mode.
     * @return bool|null
    */
    public function getDeviceSharingAllowed(): ?bool {
        return $this->deviceSharingAllowed;
    }

    /**
     * Gets the diagnosticDataBlockSubmission property value. Indicates whether or not to block diagnostic data submission.
     * @return bool|null
    */
    public function getDiagnosticDataBlockSubmission(): ?bool {
        return $this->diagnosticDataBlockSubmission;
    }

    /**
     * Gets the factoryResetBlocked property value. Indicates whether or not to block user performing a factory reset.
     * @return bool|null
    */
    public function getFactoryResetBlocked(): ?bool {
        return $this->factoryResetBlocked;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appsBlockClipboardSharing' => function (ParseNode $n) use ($o) { $o->setAppsBlockClipboardSharing($n->getBooleanValue()); },
            'appsBlockCopyPaste' => function (ParseNode $n) use ($o) { $o->setAppsBlockCopyPaste($n->getBooleanValue()); },
            'appsBlockYouTube' => function (ParseNode $n) use ($o) { $o->setAppsBlockYouTube($n->getBooleanValue()); },
            'appsHideList' => function (ParseNode $n) use ($o) { $o->setAppsHideList($n->getCollectionOfObjectValues(array(AppListItem::class, 'createFromDiscriminatorValue'))); },
            'appsInstallAllowList' => function (ParseNode $n) use ($o) { $o->setAppsInstallAllowList($n->getCollectionOfObjectValues(array(AppListItem::class, 'createFromDiscriminatorValue'))); },
            'appsLaunchBlockList' => function (ParseNode $n) use ($o) { $o->setAppsLaunchBlockList($n->getCollectionOfObjectValues(array(AppListItem::class, 'createFromDiscriminatorValue'))); },
            'bluetoothBlocked' => function (ParseNode $n) use ($o) { $o->setBluetoothBlocked($n->getBooleanValue()); },
            'cameraBlocked' => function (ParseNode $n) use ($o) { $o->setCameraBlocked($n->getBooleanValue()); },
            'cellularBlockDataRoaming' => function (ParseNode $n) use ($o) { $o->setCellularBlockDataRoaming($n->getBooleanValue()); },
            'cellularBlockMessaging' => function (ParseNode $n) use ($o) { $o->setCellularBlockMessaging($n->getBooleanValue()); },
            'cellularBlockVoiceRoaming' => function (ParseNode $n) use ($o) { $o->setCellularBlockVoiceRoaming($n->getBooleanValue()); },
            'cellularBlockWiFiTethering' => function (ParseNode $n) use ($o) { $o->setCellularBlockWiFiTethering($n->getBooleanValue()); },
            'compliantAppListType' => function (ParseNode $n) use ($o) { $o->setCompliantAppListType($n->getEnumValue(AppListType::class)); },
            'compliantAppsList' => function (ParseNode $n) use ($o) { $o->setCompliantAppsList($n->getCollectionOfObjectValues(array(AppListItem::class, 'createFromDiscriminatorValue'))); },
            'deviceSharingAllowed' => function (ParseNode $n) use ($o) { $o->setDeviceSharingAllowed($n->getBooleanValue()); },
            'diagnosticDataBlockSubmission' => function (ParseNode $n) use ($o) { $o->setDiagnosticDataBlockSubmission($n->getBooleanValue()); },
            'factoryResetBlocked' => function (ParseNode $n) use ($o) { $o->setFactoryResetBlocked($n->getBooleanValue()); },
            'googleAccountBlockAutoSync' => function (ParseNode $n) use ($o) { $o->setGoogleAccountBlockAutoSync($n->getBooleanValue()); },
            'googlePlayStoreBlocked' => function (ParseNode $n) use ($o) { $o->setGooglePlayStoreBlocked($n->getBooleanValue()); },
            'kioskModeApps' => function (ParseNode $n) use ($o) { $o->setKioskModeApps($n->getCollectionOfObjectValues(array(AppListItem::class, 'createFromDiscriminatorValue'))); },
            'kioskModeBlockSleepButton' => function (ParseNode $n) use ($o) { $o->setKioskModeBlockSleepButton($n->getBooleanValue()); },
            'kioskModeBlockVolumeButtons' => function (ParseNode $n) use ($o) { $o->setKioskModeBlockVolumeButtons($n->getBooleanValue()); },
            'locationServicesBlocked' => function (ParseNode $n) use ($o) { $o->setLocationServicesBlocked($n->getBooleanValue()); },
            'nfcBlocked' => function (ParseNode $n) use ($o) { $o->setNfcBlocked($n->getBooleanValue()); },
            'passwordBlockFingerprintUnlock' => function (ParseNode $n) use ($o) { $o->setPasswordBlockFingerprintUnlock($n->getBooleanValue()); },
            'passwordBlockTrustAgents' => function (ParseNode $n) use ($o) { $o->setPasswordBlockTrustAgents($n->getBooleanValue()); },
            'passwordExpirationDays' => function (ParseNode $n) use ($o) { $o->setPasswordExpirationDays($n->getIntegerValue()); },
            'passwordMinimumLength' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumLength($n->getIntegerValue()); },
            'passwordMinutesOfInactivityBeforeScreenTimeout' => function (ParseNode $n) use ($o) { $o->setPasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()); },
            'passwordPreviousPasswordBlockCount' => function (ParseNode $n) use ($o) { $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()); },
            'passwordRequired' => function (ParseNode $n) use ($o) { $o->setPasswordRequired($n->getBooleanValue()); },
            'passwordRequiredType' => function (ParseNode $n) use ($o) { $o->setPasswordRequiredType($n->getEnumValue(AndroidRequiredPasswordType::class)); },
            'passwordSignInFailureCountBeforeFactoryReset' => function (ParseNode $n) use ($o) { $o->setPasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()); },
            'powerOffBlocked' => function (ParseNode $n) use ($o) { $o->setPowerOffBlocked($n->getBooleanValue()); },
            'screenCaptureBlocked' => function (ParseNode $n) use ($o) { $o->setScreenCaptureBlocked($n->getBooleanValue()); },
            'securityRequireVerifyApps' => function (ParseNode $n) use ($o) { $o->setSecurityRequireVerifyApps($n->getBooleanValue()); },
            'storageBlockGoogleBackup' => function (ParseNode $n) use ($o) { $o->setStorageBlockGoogleBackup($n->getBooleanValue()); },
            'storageBlockRemovableStorage' => function (ParseNode $n) use ($o) { $o->setStorageBlockRemovableStorage($n->getBooleanValue()); },
            'storageRequireDeviceEncryption' => function (ParseNode $n) use ($o) { $o->setStorageRequireDeviceEncryption($n->getBooleanValue()); },
            'storageRequireRemovableStorageEncryption' => function (ParseNode $n) use ($o) { $o->setStorageRequireRemovableStorageEncryption($n->getBooleanValue()); },
            'voiceAssistantBlocked' => function (ParseNode $n) use ($o) { $o->setVoiceAssistantBlocked($n->getBooleanValue()); },
            'voiceDialingBlocked' => function (ParseNode $n) use ($o) { $o->setVoiceDialingBlocked($n->getBooleanValue()); },
            'webBrowserBlockAutofill' => function (ParseNode $n) use ($o) { $o->setWebBrowserBlockAutofill($n->getBooleanValue()); },
            'webBrowserBlocked' => function (ParseNode $n) use ($o) { $o->setWebBrowserBlocked($n->getBooleanValue()); },
            'webBrowserBlockJavaScript' => function (ParseNode $n) use ($o) { $o->setWebBrowserBlockJavaScript($n->getBooleanValue()); },
            'webBrowserBlockPopups' => function (ParseNode $n) use ($o) { $o->setWebBrowserBlockPopups($n->getBooleanValue()); },
            'webBrowserCookieSettings' => function (ParseNode $n) use ($o) { $o->setWebBrowserCookieSettings($n->getEnumValue(WebBrowserCookieSettings::class)); },
            'wiFiBlocked' => function (ParseNode $n) use ($o) { $o->setWiFiBlocked($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the googleAccountBlockAutoSync property value. Indicates whether or not to block Google account auto sync.
     * @return bool|null
    */
    public function getGoogleAccountBlockAutoSync(): ?bool {
        return $this->googleAccountBlockAutoSync;
    }

    /**
     * Gets the googlePlayStoreBlocked property value. Indicates whether or not to block the Google Play store.
     * @return bool|null
    */
    public function getGooglePlayStoreBlocked(): ?bool {
        return $this->googlePlayStoreBlocked;
    }

    /**
     * Gets the kioskModeApps property value. A list of apps that will be allowed to run when the device is in Kiosk Mode. This collection can contain a maximum of 500 elements.
     * @return array<AppListItem>|null
    */
    public function getKioskModeApps(): ?array {
        return $this->kioskModeApps;
    }

    /**
     * Gets the kioskModeBlockSleepButton property value. Indicates whether or not to block the screen sleep button while in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeBlockSleepButton(): ?bool {
        return $this->kioskModeBlockSleepButton;
    }

    /**
     * Gets the kioskModeBlockVolumeButtons property value. Indicates whether or not to block the volume buttons while in Kiosk Mode.
     * @return bool|null
    */
    public function getKioskModeBlockVolumeButtons(): ?bool {
        return $this->kioskModeBlockVolumeButtons;
    }

    /**
     * Gets the locationServicesBlocked property value. Indicates whether or not to block location services.
     * @return bool|null
    */
    public function getLocationServicesBlocked(): ?bool {
        return $this->locationServicesBlocked;
    }

    /**
     * Gets the nfcBlocked property value. Indicates whether or not to block Near-Field Communication.
     * @return bool|null
    */
    public function getNfcBlocked(): ?bool {
        return $this->nfcBlocked;
    }

    /**
     * Gets the passwordBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock.
     * @return bool|null
    */
    public function getPasswordBlockFingerprintUnlock(): ?bool {
        return $this->passwordBlockFingerprintUnlock;
    }

    /**
     * Gets the passwordBlockTrustAgents property value. Indicates whether or not to block Smart Lock and other trust agents.
     * @return bool|null
    */
    public function getPasswordBlockTrustAgents(): ?bool {
        return $this->passwordBlockTrustAgents;
    }

    /**
     * Gets the passwordExpirationDays property value. Number of days before the password expires. Valid values 1 to 365
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        return $this->passwordExpirationDays;
    }

    /**
     * Gets the passwordMinimumLength property value. Minimum length of passwords. Valid values 4 to 16
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        return $this->passwordMinimumLength;
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeScreenTimeout(): ?int {
        return $this->passwordMinutesOfInactivityBeforeScreenTimeout;
    }

    /**
     * Gets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block. Valid values 0 to 24
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        return $this->passwordPreviousPasswordBlockCount;
    }

    /**
     * Gets the passwordRequired property value. Indicates whether or not to require a password.
     * @return bool|null
    */
    public function getPasswordRequired(): ?bool {
        return $this->passwordRequired;
    }

    /**
     * Gets the passwordRequiredType property value. Type of password that is required. Possible values are: deviceDefault, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, numeric, numericComplex, any.
     * @return AndroidRequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?AndroidRequiredPasswordType {
        return $this->passwordRequiredType;
    }

    /**
     * Gets the passwordSignInFailureCountBeforeFactoryReset property value. Number of sign in failures allowed before factory reset. Valid values 1 to 16
     * @return int|null
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset(): ?int {
        return $this->passwordSignInFailureCountBeforeFactoryReset;
    }

    /**
     * Gets the powerOffBlocked property value. Indicates whether or not to block powering off the device.
     * @return bool|null
    */
    public function getPowerOffBlocked(): ?bool {
        return $this->powerOffBlocked;
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether or not to block screenshots.
     * @return bool|null
    */
    public function getScreenCaptureBlocked(): ?bool {
        return $this->screenCaptureBlocked;
    }

    /**
     * Gets the securityRequireVerifyApps property value. Require the Android Verify apps feature is turned on.
     * @return bool|null
    */
    public function getSecurityRequireVerifyApps(): ?bool {
        return $this->securityRequireVerifyApps;
    }

    /**
     * Gets the storageBlockGoogleBackup property value. Indicates whether or not to block Google Backup.
     * @return bool|null
    */
    public function getStorageBlockGoogleBackup(): ?bool {
        return $this->storageBlockGoogleBackup;
    }

    /**
     * Gets the storageBlockRemovableStorage property value. Indicates whether or not to block removable storage usage.
     * @return bool|null
    */
    public function getStorageBlockRemovableStorage(): ?bool {
        return $this->storageBlockRemovableStorage;
    }

    /**
     * Gets the storageRequireDeviceEncryption property value. Indicates whether or not to require device encryption.
     * @return bool|null
    */
    public function getStorageRequireDeviceEncryption(): ?bool {
        return $this->storageRequireDeviceEncryption;
    }

    /**
     * Gets the storageRequireRemovableStorageEncryption property value. Indicates whether or not to require removable storage encryption.
     * @return bool|null
    */
    public function getStorageRequireRemovableStorageEncryption(): ?bool {
        return $this->storageRequireRemovableStorageEncryption;
    }

    /**
     * Gets the voiceAssistantBlocked property value. Indicates whether or not to block the use of the Voice Assistant.
     * @return bool|null
    */
    public function getVoiceAssistantBlocked(): ?bool {
        return $this->voiceAssistantBlocked;
    }

    /**
     * Gets the voiceDialingBlocked property value. Indicates whether or not to block voice dialing.
     * @return bool|null
    */
    public function getVoiceDialingBlocked(): ?bool {
        return $this->voiceDialingBlocked;
    }

    /**
     * Gets the webBrowserBlockAutofill property value. Indicates whether or not to block the web browser's auto fill feature.
     * @return bool|null
    */
    public function getWebBrowserBlockAutofill(): ?bool {
        return $this->webBrowserBlockAutofill;
    }

    /**
     * Gets the webBrowserBlocked property value. Indicates whether or not to block the web browser.
     * @return bool|null
    */
    public function getWebBrowserBlocked(): ?bool {
        return $this->webBrowserBlocked;
    }

    /**
     * Gets the webBrowserBlockJavaScript property value. Indicates whether or not to block JavaScript within the web browser.
     * @return bool|null
    */
    public function getWebBrowserBlockJavaScript(): ?bool {
        return $this->webBrowserBlockJavaScript;
    }

    /**
     * Gets the webBrowserBlockPopups property value. Indicates whether or not to block popups within the web browser.
     * @return bool|null
    */
    public function getWebBrowserBlockPopups(): ?bool {
        return $this->webBrowserBlockPopups;
    }

    /**
     * Gets the webBrowserCookieSettings property value. Cookie settings within the web browser. Possible values are: browserDefault, blockAlways, allowCurrentWebSite, allowFromWebsitesVisited, allowAlways.
     * @return WebBrowserCookieSettings|null
    */
    public function getWebBrowserCookieSettings(): ?WebBrowserCookieSettings {
        return $this->webBrowserCookieSettings;
    }

    /**
     * Gets the wiFiBlocked property value. Indicates whether or not to block syncing Wi-Fi.
     * @return bool|null
    */
    public function getWiFiBlocked(): ?bool {
        return $this->wiFiBlocked;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('appsBlockClipboardSharing', $this->appsBlockClipboardSharing);
        $writer->writeBooleanValue('appsBlockCopyPaste', $this->appsBlockCopyPaste);
        $writer->writeBooleanValue('appsBlockYouTube', $this->appsBlockYouTube);
        $writer->writeCollectionOfObjectValues('appsHideList', $this->appsHideList);
        $writer->writeCollectionOfObjectValues('appsInstallAllowList', $this->appsInstallAllowList);
        $writer->writeCollectionOfObjectValues('appsLaunchBlockList', $this->appsLaunchBlockList);
        $writer->writeBooleanValue('bluetoothBlocked', $this->bluetoothBlocked);
        $writer->writeBooleanValue('cameraBlocked', $this->cameraBlocked);
        $writer->writeBooleanValue('cellularBlockDataRoaming', $this->cellularBlockDataRoaming);
        $writer->writeBooleanValue('cellularBlockMessaging', $this->cellularBlockMessaging);
        $writer->writeBooleanValue('cellularBlockVoiceRoaming', $this->cellularBlockVoiceRoaming);
        $writer->writeBooleanValue('cellularBlockWiFiTethering', $this->cellularBlockWiFiTethering);
        $writer->writeEnumValue('compliantAppListType', $this->compliantAppListType);
        $writer->writeCollectionOfObjectValues('compliantAppsList', $this->compliantAppsList);
        $writer->writeBooleanValue('deviceSharingAllowed', $this->deviceSharingAllowed);
        $writer->writeBooleanValue('diagnosticDataBlockSubmission', $this->diagnosticDataBlockSubmission);
        $writer->writeBooleanValue('factoryResetBlocked', $this->factoryResetBlocked);
        $writer->writeBooleanValue('googleAccountBlockAutoSync', $this->googleAccountBlockAutoSync);
        $writer->writeBooleanValue('googlePlayStoreBlocked', $this->googlePlayStoreBlocked);
        $writer->writeCollectionOfObjectValues('kioskModeApps', $this->kioskModeApps);
        $writer->writeBooleanValue('kioskModeBlockSleepButton', $this->kioskModeBlockSleepButton);
        $writer->writeBooleanValue('kioskModeBlockVolumeButtons', $this->kioskModeBlockVolumeButtons);
        $writer->writeBooleanValue('locationServicesBlocked', $this->locationServicesBlocked);
        $writer->writeBooleanValue('nfcBlocked', $this->nfcBlocked);
        $writer->writeBooleanValue('passwordBlockFingerprintUnlock', $this->passwordBlockFingerprintUnlock);
        $writer->writeBooleanValue('passwordBlockTrustAgents', $this->passwordBlockTrustAgents);
        $writer->writeIntegerValue('passwordExpirationDays', $this->passwordExpirationDays);
        $writer->writeIntegerValue('passwordMinimumLength', $this->passwordMinimumLength);
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeScreenTimeout', $this->passwordMinutesOfInactivityBeforeScreenTimeout);
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->passwordPreviousPasswordBlockCount);
        $writer->writeBooleanValue('passwordRequired', $this->passwordRequired);
        $writer->writeEnumValue('passwordRequiredType', $this->passwordRequiredType);
        $writer->writeIntegerValue('passwordSignInFailureCountBeforeFactoryReset', $this->passwordSignInFailureCountBeforeFactoryReset);
        $writer->writeBooleanValue('powerOffBlocked', $this->powerOffBlocked);
        $writer->writeBooleanValue('screenCaptureBlocked', $this->screenCaptureBlocked);
        $writer->writeBooleanValue('securityRequireVerifyApps', $this->securityRequireVerifyApps);
        $writer->writeBooleanValue('storageBlockGoogleBackup', $this->storageBlockGoogleBackup);
        $writer->writeBooleanValue('storageBlockRemovableStorage', $this->storageBlockRemovableStorage);
        $writer->writeBooleanValue('storageRequireDeviceEncryption', $this->storageRequireDeviceEncryption);
        $writer->writeBooleanValue('storageRequireRemovableStorageEncryption', $this->storageRequireRemovableStorageEncryption);
        $writer->writeBooleanValue('voiceAssistantBlocked', $this->voiceAssistantBlocked);
        $writer->writeBooleanValue('voiceDialingBlocked', $this->voiceDialingBlocked);
        $writer->writeBooleanValue('webBrowserBlockAutofill', $this->webBrowserBlockAutofill);
        $writer->writeBooleanValue('webBrowserBlocked', $this->webBrowserBlocked);
        $writer->writeBooleanValue('webBrowserBlockJavaScript', $this->webBrowserBlockJavaScript);
        $writer->writeBooleanValue('webBrowserBlockPopups', $this->webBrowserBlockPopups);
        $writer->writeEnumValue('webBrowserCookieSettings', $this->webBrowserCookieSettings);
        $writer->writeBooleanValue('wiFiBlocked', $this->wiFiBlocked);
    }

    /**
     * Sets the appsBlockClipboardSharing property value. Indicates whether or not to block clipboard sharing to copy and paste between applications.
     *  @param bool|null $value Value to set for the appsBlockClipboardSharing property.
    */
    public function setAppsBlockClipboardSharing(?bool $value ): void {
        $this->appsBlockClipboardSharing = $value;
    }

    /**
     * Sets the appsBlockCopyPaste property value. Indicates whether or not to block copy and paste within applications.
     *  @param bool|null $value Value to set for the appsBlockCopyPaste property.
    */
    public function setAppsBlockCopyPaste(?bool $value ): void {
        $this->appsBlockCopyPaste = $value;
    }

    /**
     * Sets the appsBlockYouTube property value. Indicates whether or not to block the YouTube app.
     *  @param bool|null $value Value to set for the appsBlockYouTube property.
    */
    public function setAppsBlockYouTube(?bool $value ): void {
        $this->appsBlockYouTube = $value;
    }

    /**
     * Sets the appsHideList property value. List of apps to be hidden on the KNOX device. This collection can contain a maximum of 500 elements.
     *  @param array<AppListItem>|null $value Value to set for the appsHideList property.
    */
    public function setAppsHideList(?array $value ): void {
        $this->appsHideList = $value;
    }

    /**
     * Sets the appsInstallAllowList property value. List of apps which can be installed on the KNOX device. This collection can contain a maximum of 500 elements.
     *  @param array<AppListItem>|null $value Value to set for the appsInstallAllowList property.
    */
    public function setAppsInstallAllowList(?array $value ): void {
        $this->appsInstallAllowList = $value;
    }

    /**
     * Sets the appsLaunchBlockList property value. List of apps which are blocked from being launched on the KNOX device. This collection can contain a maximum of 500 elements.
     *  @param array<AppListItem>|null $value Value to set for the appsLaunchBlockList property.
    */
    public function setAppsLaunchBlockList(?array $value ): void {
        $this->appsLaunchBlockList = $value;
    }

    /**
     * Sets the bluetoothBlocked property value. Indicates whether or not to block Bluetooth.
     *  @param bool|null $value Value to set for the bluetoothBlocked property.
    */
    public function setBluetoothBlocked(?bool $value ): void {
        $this->bluetoothBlocked = $value;
    }

    /**
     * Sets the cameraBlocked property value. Indicates whether or not to block the use of the camera.
     *  @param bool|null $value Value to set for the cameraBlocked property.
    */
    public function setCameraBlocked(?bool $value ): void {
        $this->cameraBlocked = $value;
    }

    /**
     * Sets the cellularBlockDataRoaming property value. Indicates whether or not to block data roaming.
     *  @param bool|null $value Value to set for the cellularBlockDataRoaming property.
    */
    public function setCellularBlockDataRoaming(?bool $value ): void {
        $this->cellularBlockDataRoaming = $value;
    }

    /**
     * Sets the cellularBlockMessaging property value. Indicates whether or not to block SMS/MMS messaging.
     *  @param bool|null $value Value to set for the cellularBlockMessaging property.
    */
    public function setCellularBlockMessaging(?bool $value ): void {
        $this->cellularBlockMessaging = $value;
    }

    /**
     * Sets the cellularBlockVoiceRoaming property value. Indicates whether or not to block voice roaming.
     *  @param bool|null $value Value to set for the cellularBlockVoiceRoaming property.
    */
    public function setCellularBlockVoiceRoaming(?bool $value ): void {
        $this->cellularBlockVoiceRoaming = $value;
    }

    /**
     * Sets the cellularBlockWiFiTethering property value. Indicates whether or not to block syncing Wi-Fi tethering.
     *  @param bool|null $value Value to set for the cellularBlockWiFiTethering property.
    */
    public function setCellularBlockWiFiTethering(?bool $value ): void {
        $this->cellularBlockWiFiTethering = $value;
    }

    /**
     * Sets the compliantAppListType property value. Type of list that is in the CompliantAppsList. Possible values are: none, appsInListCompliant, appsNotInListCompliant.
     *  @param AppListType|null $value Value to set for the compliantAppListType property.
    */
    public function setCompliantAppListType(?AppListType $value ): void {
        $this->compliantAppListType = $value;
    }

    /**
     * Sets the compliantAppsList property value. List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
     *  @param array<AppListItem>|null $value Value to set for the compliantAppsList property.
    */
    public function setCompliantAppsList(?array $value ): void {
        $this->compliantAppsList = $value;
    }

    /**
     * Sets the deviceSharingAllowed property value. Indicates whether or not to allow device sharing mode.
     *  @param bool|null $value Value to set for the deviceSharingAllowed property.
    */
    public function setDeviceSharingAllowed(?bool $value ): void {
        $this->deviceSharingAllowed = $value;
    }

    /**
     * Sets the diagnosticDataBlockSubmission property value. Indicates whether or not to block diagnostic data submission.
     *  @param bool|null $value Value to set for the diagnosticDataBlockSubmission property.
    */
    public function setDiagnosticDataBlockSubmission(?bool $value ): void {
        $this->diagnosticDataBlockSubmission = $value;
    }

    /**
     * Sets the factoryResetBlocked property value. Indicates whether or not to block user performing a factory reset.
     *  @param bool|null $value Value to set for the factoryResetBlocked property.
    */
    public function setFactoryResetBlocked(?bool $value ): void {
        $this->factoryResetBlocked = $value;
    }

    /**
     * Sets the googleAccountBlockAutoSync property value. Indicates whether or not to block Google account auto sync.
     *  @param bool|null $value Value to set for the googleAccountBlockAutoSync property.
    */
    public function setGoogleAccountBlockAutoSync(?bool $value ): void {
        $this->googleAccountBlockAutoSync = $value;
    }

    /**
     * Sets the googlePlayStoreBlocked property value. Indicates whether or not to block the Google Play store.
     *  @param bool|null $value Value to set for the googlePlayStoreBlocked property.
    */
    public function setGooglePlayStoreBlocked(?bool $value ): void {
        $this->googlePlayStoreBlocked = $value;
    }

    /**
     * Sets the kioskModeApps property value. A list of apps that will be allowed to run when the device is in Kiosk Mode. This collection can contain a maximum of 500 elements.
     *  @param array<AppListItem>|null $value Value to set for the kioskModeApps property.
    */
    public function setKioskModeApps(?array $value ): void {
        $this->kioskModeApps = $value;
    }

    /**
     * Sets the kioskModeBlockSleepButton property value. Indicates whether or not to block the screen sleep button while in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeBlockSleepButton property.
    */
    public function setKioskModeBlockSleepButton(?bool $value ): void {
        $this->kioskModeBlockSleepButton = $value;
    }

    /**
     * Sets the kioskModeBlockVolumeButtons property value. Indicates whether or not to block the volume buttons while in Kiosk Mode.
     *  @param bool|null $value Value to set for the kioskModeBlockVolumeButtons property.
    */
    public function setKioskModeBlockVolumeButtons(?bool $value ): void {
        $this->kioskModeBlockVolumeButtons = $value;
    }

    /**
     * Sets the locationServicesBlocked property value. Indicates whether or not to block location services.
     *  @param bool|null $value Value to set for the locationServicesBlocked property.
    */
    public function setLocationServicesBlocked(?bool $value ): void {
        $this->locationServicesBlocked = $value;
    }

    /**
     * Sets the nfcBlocked property value. Indicates whether or not to block Near-Field Communication.
     *  @param bool|null $value Value to set for the nfcBlocked property.
    */
    public function setNfcBlocked(?bool $value ): void {
        $this->nfcBlocked = $value;
    }

    /**
     * Sets the passwordBlockFingerprintUnlock property value. Indicates whether or not to block fingerprint unlock.
     *  @param bool|null $value Value to set for the passwordBlockFingerprintUnlock property.
    */
    public function setPasswordBlockFingerprintUnlock(?bool $value ): void {
        $this->passwordBlockFingerprintUnlock = $value;
    }

    /**
     * Sets the passwordBlockTrustAgents property value. Indicates whether or not to block Smart Lock and other trust agents.
     *  @param bool|null $value Value to set for the passwordBlockTrustAgents property.
    */
    public function setPasswordBlockTrustAgents(?bool $value ): void {
        $this->passwordBlockTrustAgents = $value;
    }

    /**
     * Sets the passwordExpirationDays property value. Number of days before the password expires. Valid values 1 to 365
     *  @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value ): void {
        $this->passwordExpirationDays = $value;
    }

    /**
     * Sets the passwordMinimumLength property value. Minimum length of passwords. Valid values 4 to 16
     *  @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value ): void {
        $this->passwordMinimumLength = $value;
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before the screen times out.
     *  @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeScreenTimeout property.
    */
    public function setPasswordMinutesOfInactivityBeforeScreenTimeout(?int $value ): void {
        $this->passwordMinutesOfInactivityBeforeScreenTimeout = $value;
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block. Valid values 0 to 24
     *  @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value ): void {
        $this->passwordPreviousPasswordBlockCount = $value;
    }

    /**
     * Sets the passwordRequired property value. Indicates whether or not to require a password.
     *  @param bool|null $value Value to set for the passwordRequired property.
    */
    public function setPasswordRequired(?bool $value ): void {
        $this->passwordRequired = $value;
    }

    /**
     * Sets the passwordRequiredType property value. Type of password that is required. Possible values are: deviceDefault, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, numeric, numericComplex, any.
     *  @param AndroidRequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?AndroidRequiredPasswordType $value ): void {
        $this->passwordRequiredType = $value;
    }

    /**
     * Sets the passwordSignInFailureCountBeforeFactoryReset property value. Number of sign in failures allowed before factory reset. Valid values 1 to 16
     *  @param int|null $value Value to set for the passwordSignInFailureCountBeforeFactoryReset property.
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset(?int $value ): void {
        $this->passwordSignInFailureCountBeforeFactoryReset = $value;
    }

    /**
     * Sets the powerOffBlocked property value. Indicates whether or not to block powering off the device.
     *  @param bool|null $value Value to set for the powerOffBlocked property.
    */
    public function setPowerOffBlocked(?bool $value ): void {
        $this->powerOffBlocked = $value;
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether or not to block screenshots.
     *  @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value ): void {
        $this->screenCaptureBlocked = $value;
    }

    /**
     * Sets the securityRequireVerifyApps property value. Require the Android Verify apps feature is turned on.
     *  @param bool|null $value Value to set for the securityRequireVerifyApps property.
    */
    public function setSecurityRequireVerifyApps(?bool $value ): void {
        $this->securityRequireVerifyApps = $value;
    }

    /**
     * Sets the storageBlockGoogleBackup property value. Indicates whether or not to block Google Backup.
     *  @param bool|null $value Value to set for the storageBlockGoogleBackup property.
    */
    public function setStorageBlockGoogleBackup(?bool $value ): void {
        $this->storageBlockGoogleBackup = $value;
    }

    /**
     * Sets the storageBlockRemovableStorage property value. Indicates whether or not to block removable storage usage.
     *  @param bool|null $value Value to set for the storageBlockRemovableStorage property.
    */
    public function setStorageBlockRemovableStorage(?bool $value ): void {
        $this->storageBlockRemovableStorage = $value;
    }

    /**
     * Sets the storageRequireDeviceEncryption property value. Indicates whether or not to require device encryption.
     *  @param bool|null $value Value to set for the storageRequireDeviceEncryption property.
    */
    public function setStorageRequireDeviceEncryption(?bool $value ): void {
        $this->storageRequireDeviceEncryption = $value;
    }

    /**
     * Sets the storageRequireRemovableStorageEncryption property value. Indicates whether or not to require removable storage encryption.
     *  @param bool|null $value Value to set for the storageRequireRemovableStorageEncryption property.
    */
    public function setStorageRequireRemovableStorageEncryption(?bool $value ): void {
        $this->storageRequireRemovableStorageEncryption = $value;
    }

    /**
     * Sets the voiceAssistantBlocked property value. Indicates whether or not to block the use of the Voice Assistant.
     *  @param bool|null $value Value to set for the voiceAssistantBlocked property.
    */
    public function setVoiceAssistantBlocked(?bool $value ): void {
        $this->voiceAssistantBlocked = $value;
    }

    /**
     * Sets the voiceDialingBlocked property value. Indicates whether or not to block voice dialing.
     *  @param bool|null $value Value to set for the voiceDialingBlocked property.
    */
    public function setVoiceDialingBlocked(?bool $value ): void {
        $this->voiceDialingBlocked = $value;
    }

    /**
     * Sets the webBrowserBlockAutofill property value. Indicates whether or not to block the web browser's auto fill feature.
     *  @param bool|null $value Value to set for the webBrowserBlockAutofill property.
    */
    public function setWebBrowserBlockAutofill(?bool $value ): void {
        $this->webBrowserBlockAutofill = $value;
    }

    /**
     * Sets the webBrowserBlocked property value. Indicates whether or not to block the web browser.
     *  @param bool|null $value Value to set for the webBrowserBlocked property.
    */
    public function setWebBrowserBlocked(?bool $value ): void {
        $this->webBrowserBlocked = $value;
    }

    /**
     * Sets the webBrowserBlockJavaScript property value. Indicates whether or not to block JavaScript within the web browser.
     *  @param bool|null $value Value to set for the webBrowserBlockJavaScript property.
    */
    public function setWebBrowserBlockJavaScript(?bool $value ): void {
        $this->webBrowserBlockJavaScript = $value;
    }

    /**
     * Sets the webBrowserBlockPopups property value. Indicates whether or not to block popups within the web browser.
     *  @param bool|null $value Value to set for the webBrowserBlockPopups property.
    */
    public function setWebBrowserBlockPopups(?bool $value ): void {
        $this->webBrowserBlockPopups = $value;
    }

    /**
     * Sets the webBrowserCookieSettings property value. Cookie settings within the web browser. Possible values are: browserDefault, blockAlways, allowCurrentWebSite, allowFromWebsitesVisited, allowAlways.
     *  @param WebBrowserCookieSettings|null $value Value to set for the webBrowserCookieSettings property.
    */
    public function setWebBrowserCookieSettings(?WebBrowserCookieSettings $value ): void {
        $this->webBrowserCookieSettings = $value;
    }

    /**
     * Sets the wiFiBlocked property value. Indicates whether or not to block syncing Wi-Fi.
     *  @param bool|null $value Value to set for the wiFiBlocked property.
    */
    public function setWiFiBlocked(?bool $value ): void {
        $this->wiFiBlocked = $value;
    }

}
