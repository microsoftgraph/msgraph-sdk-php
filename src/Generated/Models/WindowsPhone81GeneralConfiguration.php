<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsPhone81GeneralConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * @var bool|null $applyOnlyToWindowsPhone81 Value indicating whether this policy only applies to Windows Phone 8.1. This property is read-only.
    */
    private ?bool $applyOnlyToWindowsPhone81 = null;
    
    /**
     * @var bool|null $appsBlockCopyPaste Indicates whether or not to block copy paste.
    */
    private ?bool $appsBlockCopyPaste = null;
    
    /**
     * @var bool|null $bluetoothBlocked Indicates whether or not to block bluetooth.
    */
    private ?bool $bluetoothBlocked = null;
    
    /**
     * @var bool|null $cameraBlocked Indicates whether or not to block camera.
    */
    private ?bool $cameraBlocked = null;
    
    /**
     * @var bool|null $cellularBlockWifiTethering Indicates whether or not to block Wi-Fi tethering. Has no impact if Wi-Fi is blocked.
    */
    private ?bool $cellularBlockWifiTethering = null;
    
    /**
     * @var AppListType|null $compliantAppListType Possible values of the compliance app list.
    */
    private ?AppListType $compliantAppListType = null;
    
    /**
     * @var array<AppListItem>|null $compliantAppsList List of apps in the compliance (either allow list or block list, controlled by CompliantAppListType). This collection can contain a maximum of 10000 elements.
    */
    private ?array $compliantAppsList = null;
    
    /**
     * @var bool|null $diagnosticDataBlockSubmission Indicates whether or not to block diagnostic data submission.
    */
    private ?bool $diagnosticDataBlockSubmission = null;
    
    /**
     * @var bool|null $emailBlockAddingAccounts Indicates whether or not to block custom email accounts.
    */
    private ?bool $emailBlockAddingAccounts = null;
    
    /**
     * @var bool|null $locationServicesBlocked Indicates whether or not to block location services.
    */
    private ?bool $locationServicesBlocked = null;
    
    /**
     * @var bool|null $microsoftAccountBlocked Indicates whether or not to block using a Microsoft Account.
    */
    private ?bool $microsoftAccountBlocked = null;
    
    /**
     * @var bool|null $nfcBlocked Indicates whether or not to block Near-Field Communication.
    */
    private ?bool $nfcBlocked = null;
    
    /**
     * @var bool|null $passwordBlockSimple Indicates whether or not to block syncing the calendar.
    */
    private ?bool $passwordBlockSimple = null;
    
    /**
     * @var int|null $passwordExpirationDays Number of days before the password expires.
    */
    private ?int $passwordExpirationDays = null;
    
    /**
     * @var int|null $passwordMinimumCharacterSetCount Number of character sets a password must contain.
    */
    private ?int $passwordMinimumCharacterSetCount = null;
    
    /**
     * @var int|null $passwordMinimumLength Minimum length of passwords.
    */
    private ?int $passwordMinimumLength = null;
    
    /**
     * @var int|null $passwordMinutesOfInactivityBeforeScreenTimeout Minutes of inactivity before screen timeout.
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
     * @var RequiredPasswordType|null $passwordRequiredType Possible values of required passwords.
    */
    private ?RequiredPasswordType $passwordRequiredType = null;
    
    /**
     * @var int|null $passwordSignInFailureCountBeforeFactoryReset Number of sign in failures allowed before factory reset.
    */
    private ?int $passwordSignInFailureCountBeforeFactoryReset = null;
    
    /**
     * @var bool|null $screenCaptureBlocked Indicates whether or not to block screenshots.
    */
    private ?bool $screenCaptureBlocked = null;
    
    /**
     * @var bool|null $storageBlockRemovableStorage Indicates whether or not to block removable storage.
    */
    private ?bool $storageBlockRemovableStorage = null;
    
    /**
     * @var bool|null $storageRequireEncryption Indicates whether or not to require encryption.
    */
    private ?bool $storageRequireEncryption = null;
    
    /**
     * @var bool|null $webBrowserBlocked Indicates whether or not to block the web browser.
    */
    private ?bool $webBrowserBlocked = null;
    
    /**
     * @var bool|null $wifiBlockAutomaticConnectHotspots Indicates whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked.
    */
    private ?bool $wifiBlockAutomaticConnectHotspots = null;
    
    /**
     * @var bool|null $wifiBlocked Indicates whether or not to block Wi-Fi.
    */
    private ?bool $wifiBlocked = null;
    
    /**
     * @var bool|null $wifiBlockHotspotReporting Indicates whether or not to block Wi-Fi hotspot reporting. Has no impact if Wi-Fi is blocked.
    */
    private ?bool $wifiBlockHotspotReporting = null;
    
    /**
     * @var bool|null $windowsStoreBlocked Indicates whether or not to block the Windows Store.
    */
    private ?bool $windowsStoreBlocked = null;
    
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
        return $this->applyOnlyToWindowsPhone81;
    }

    /**
     * Gets the appsBlockCopyPaste property value. Indicates whether or not to block copy paste.
     * @return bool|null
    */
    public function getAppsBlockCopyPaste(): ?bool {
        return $this->appsBlockCopyPaste;
    }

    /**
     * Gets the bluetoothBlocked property value. Indicates whether or not to block bluetooth.
     * @return bool|null
    */
    public function getBluetoothBlocked(): ?bool {
        return $this->bluetoothBlocked;
    }

    /**
     * Gets the cameraBlocked property value. Indicates whether or not to block camera.
     * @return bool|null
    */
    public function getCameraBlocked(): ?bool {
        return $this->cameraBlocked;
    }

    /**
     * Gets the cellularBlockWifiTethering property value. Indicates whether or not to block Wi-Fi tethering. Has no impact if Wi-Fi is blocked.
     * @return bool|null
    */
    public function getCellularBlockWifiTethering(): ?bool {
        return $this->cellularBlockWifiTethering;
    }

    /**
     * Gets the compliantAppListType property value. Possible values of the compliance app list.
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
     * Gets the diagnosticDataBlockSubmission property value. Indicates whether or not to block diagnostic data submission.
     * @return bool|null
    */
    public function getDiagnosticDataBlockSubmission(): ?bool {
        return $this->diagnosticDataBlockSubmission;
    }

    /**
     * Gets the emailBlockAddingAccounts property value. Indicates whether or not to block custom email accounts.
     * @return bool|null
    */
    public function getEmailBlockAddingAccounts(): ?bool {
        return $this->emailBlockAddingAccounts;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applyOnlyToWindowsPhone81' => function (ParseNode $n) use ($o) { $o->setApplyOnlyToWindowsPhone81($n->getBooleanValue()); },
            'appsBlockCopyPaste' => function (ParseNode $n) use ($o) { $o->setAppsBlockCopyPaste($n->getBooleanValue()); },
            'bluetoothBlocked' => function (ParseNode $n) use ($o) { $o->setBluetoothBlocked($n->getBooleanValue()); },
            'cameraBlocked' => function (ParseNode $n) use ($o) { $o->setCameraBlocked($n->getBooleanValue()); },
            'cellularBlockWifiTethering' => function (ParseNode $n) use ($o) { $o->setCellularBlockWifiTethering($n->getBooleanValue()); },
            'compliantAppListType' => function (ParseNode $n) use ($o) { $o->setCompliantAppListType($n->getEnumValue(AppListType::class)); },
            'compliantAppsList' => function (ParseNode $n) use ($o) { $o->setCompliantAppsList($n->getCollectionOfObjectValues(array(AppListItem::class, 'createFromDiscriminatorValue'))); },
            'diagnosticDataBlockSubmission' => function (ParseNode $n) use ($o) { $o->setDiagnosticDataBlockSubmission($n->getBooleanValue()); },
            'emailBlockAddingAccounts' => function (ParseNode $n) use ($o) { $o->setEmailBlockAddingAccounts($n->getBooleanValue()); },
            'locationServicesBlocked' => function (ParseNode $n) use ($o) { $o->setLocationServicesBlocked($n->getBooleanValue()); },
            'microsoftAccountBlocked' => function (ParseNode $n) use ($o) { $o->setMicrosoftAccountBlocked($n->getBooleanValue()); },
            'nfcBlocked' => function (ParseNode $n) use ($o) { $o->setNfcBlocked($n->getBooleanValue()); },
            'passwordBlockSimple' => function (ParseNode $n) use ($o) { $o->setPasswordBlockSimple($n->getBooleanValue()); },
            'passwordExpirationDays' => function (ParseNode $n) use ($o) { $o->setPasswordExpirationDays($n->getIntegerValue()); },
            'passwordMinimumCharacterSetCount' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumCharacterSetCount($n->getIntegerValue()); },
            'passwordMinimumLength' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumLength($n->getIntegerValue()); },
            'passwordMinutesOfInactivityBeforeScreenTimeout' => function (ParseNode $n) use ($o) { $o->setPasswordMinutesOfInactivityBeforeScreenTimeout($n->getIntegerValue()); },
            'passwordPreviousPasswordBlockCount' => function (ParseNode $n) use ($o) { $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()); },
            'passwordRequired' => function (ParseNode $n) use ($o) { $o->setPasswordRequired($n->getBooleanValue()); },
            'passwordRequiredType' => function (ParseNode $n) use ($o) { $o->setPasswordRequiredType($n->getEnumValue(RequiredPasswordType::class)); },
            'passwordSignInFailureCountBeforeFactoryReset' => function (ParseNode $n) use ($o) { $o->setPasswordSignInFailureCountBeforeFactoryReset($n->getIntegerValue()); },
            'screenCaptureBlocked' => function (ParseNode $n) use ($o) { $o->setScreenCaptureBlocked($n->getBooleanValue()); },
            'storageBlockRemovableStorage' => function (ParseNode $n) use ($o) { $o->setStorageBlockRemovableStorage($n->getBooleanValue()); },
            'storageRequireEncryption' => function (ParseNode $n) use ($o) { $o->setStorageRequireEncryption($n->getBooleanValue()); },
            'webBrowserBlocked' => function (ParseNode $n) use ($o) { $o->setWebBrowserBlocked($n->getBooleanValue()); },
            'wifiBlockAutomaticConnectHotspots' => function (ParseNode $n) use ($o) { $o->setWifiBlockAutomaticConnectHotspots($n->getBooleanValue()); },
            'wifiBlocked' => function (ParseNode $n) use ($o) { $o->setWifiBlocked($n->getBooleanValue()); },
            'wifiBlockHotspotReporting' => function (ParseNode $n) use ($o) { $o->setWifiBlockHotspotReporting($n->getBooleanValue()); },
            'windowsStoreBlocked' => function (ParseNode $n) use ($o) { $o->setWindowsStoreBlocked($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the locationServicesBlocked property value. Indicates whether or not to block location services.
     * @return bool|null
    */
    public function getLocationServicesBlocked(): ?bool {
        return $this->locationServicesBlocked;
    }

    /**
     * Gets the microsoftAccountBlocked property value. Indicates whether or not to block using a Microsoft Account.
     * @return bool|null
    */
    public function getMicrosoftAccountBlocked(): ?bool {
        return $this->microsoftAccountBlocked;
    }

    /**
     * Gets the nfcBlocked property value. Indicates whether or not to block Near-Field Communication.
     * @return bool|null
    */
    public function getNfcBlocked(): ?bool {
        return $this->nfcBlocked;
    }

    /**
     * Gets the passwordBlockSimple property value. Indicates whether or not to block syncing the calendar.
     * @return bool|null
    */
    public function getPasswordBlockSimple(): ?bool {
        return $this->passwordBlockSimple;
    }

    /**
     * Gets the passwordExpirationDays property value. Number of days before the password expires.
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        return $this->passwordExpirationDays;
    }

    /**
     * Gets the passwordMinimumCharacterSetCount property value. Number of character sets a password must contain.
     * @return int|null
    */
    public function getPasswordMinimumCharacterSetCount(): ?int {
        return $this->passwordMinimumCharacterSetCount;
    }

    /**
     * Gets the passwordMinimumLength property value. Minimum length of passwords.
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        return $this->passwordMinimumLength;
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before screen timeout.
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
     * Gets the passwordRequiredType property value. Possible values of required passwords.
     * @return RequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?RequiredPasswordType {
        return $this->passwordRequiredType;
    }

    /**
     * Gets the passwordSignInFailureCountBeforeFactoryReset property value. Number of sign in failures allowed before factory reset.
     * @return int|null
    */
    public function getPasswordSignInFailureCountBeforeFactoryReset(): ?int {
        return $this->passwordSignInFailureCountBeforeFactoryReset;
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether or not to block screenshots.
     * @return bool|null
    */
    public function getScreenCaptureBlocked(): ?bool {
        return $this->screenCaptureBlocked;
    }

    /**
     * Gets the storageBlockRemovableStorage property value. Indicates whether or not to block removable storage.
     * @return bool|null
    */
    public function getStorageBlockRemovableStorage(): ?bool {
        return $this->storageBlockRemovableStorage;
    }

    /**
     * Gets the storageRequireEncryption property value. Indicates whether or not to require encryption.
     * @return bool|null
    */
    public function getStorageRequireEncryption(): ?bool {
        return $this->storageRequireEncryption;
    }

    /**
     * Gets the webBrowserBlocked property value. Indicates whether or not to block the web browser.
     * @return bool|null
    */
    public function getWebBrowserBlocked(): ?bool {
        return $this->webBrowserBlocked;
    }

    /**
     * Gets the wifiBlockAutomaticConnectHotspots property value. Indicates whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked.
     * @return bool|null
    */
    public function getWifiBlockAutomaticConnectHotspots(): ?bool {
        return $this->wifiBlockAutomaticConnectHotspots;
    }

    /**
     * Gets the wifiBlocked property value. Indicates whether or not to block Wi-Fi.
     * @return bool|null
    */
    public function getWifiBlocked(): ?bool {
        return $this->wifiBlocked;
    }

    /**
     * Gets the wifiBlockHotspotReporting property value. Indicates whether or not to block Wi-Fi hotspot reporting. Has no impact if Wi-Fi is blocked.
     * @return bool|null
    */
    public function getWifiBlockHotspotReporting(): ?bool {
        return $this->wifiBlockHotspotReporting;
    }

    /**
     * Gets the windowsStoreBlocked property value. Indicates whether or not to block the Windows Store.
     * @return bool|null
    */
    public function getWindowsStoreBlocked(): ?bool {
        return $this->windowsStoreBlocked;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('appsBlockCopyPaste', $this->appsBlockCopyPaste);
        $writer->writeBooleanValue('bluetoothBlocked', $this->bluetoothBlocked);
        $writer->writeBooleanValue('cameraBlocked', $this->cameraBlocked);
        $writer->writeBooleanValue('cellularBlockWifiTethering', $this->cellularBlockWifiTethering);
        $writer->writeEnumValue('compliantAppListType', $this->compliantAppListType);
        $writer->writeCollectionOfObjectValues('compliantAppsList', $this->compliantAppsList);
        $writer->writeBooleanValue('diagnosticDataBlockSubmission', $this->diagnosticDataBlockSubmission);
        $writer->writeBooleanValue('emailBlockAddingAccounts', $this->emailBlockAddingAccounts);
        $writer->writeBooleanValue('locationServicesBlocked', $this->locationServicesBlocked);
        $writer->writeBooleanValue('microsoftAccountBlocked', $this->microsoftAccountBlocked);
        $writer->writeBooleanValue('nfcBlocked', $this->nfcBlocked);
        $writer->writeBooleanValue('passwordBlockSimple', $this->passwordBlockSimple);
        $writer->writeIntegerValue('passwordExpirationDays', $this->passwordExpirationDays);
        $writer->writeIntegerValue('passwordMinimumCharacterSetCount', $this->passwordMinimumCharacterSetCount);
        $writer->writeIntegerValue('passwordMinimumLength', $this->passwordMinimumLength);
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeScreenTimeout', $this->passwordMinutesOfInactivityBeforeScreenTimeout);
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->passwordPreviousPasswordBlockCount);
        $writer->writeBooleanValue('passwordRequired', $this->passwordRequired);
        $writer->writeEnumValue('passwordRequiredType', $this->passwordRequiredType);
        $writer->writeIntegerValue('passwordSignInFailureCountBeforeFactoryReset', $this->passwordSignInFailureCountBeforeFactoryReset);
        $writer->writeBooleanValue('screenCaptureBlocked', $this->screenCaptureBlocked);
        $writer->writeBooleanValue('storageBlockRemovableStorage', $this->storageBlockRemovableStorage);
        $writer->writeBooleanValue('storageRequireEncryption', $this->storageRequireEncryption);
        $writer->writeBooleanValue('webBrowserBlocked', $this->webBrowserBlocked);
        $writer->writeBooleanValue('wifiBlockAutomaticConnectHotspots', $this->wifiBlockAutomaticConnectHotspots);
        $writer->writeBooleanValue('wifiBlocked', $this->wifiBlocked);
        $writer->writeBooleanValue('wifiBlockHotspotReporting', $this->wifiBlockHotspotReporting);
        $writer->writeBooleanValue('windowsStoreBlocked', $this->windowsStoreBlocked);
    }

    /**
     * Sets the applyOnlyToWindowsPhone81 property value. Value indicating whether this policy only applies to Windows Phone 8.1. This property is read-only.
     *  @param bool|null $value Value to set for the applyOnlyToWindowsPhone81 property.
    */
    public function setApplyOnlyToWindowsPhone81(?bool $value ): void {
        $this->applyOnlyToWindowsPhone81 = $value;
    }

    /**
     * Sets the appsBlockCopyPaste property value. Indicates whether or not to block copy paste.
     *  @param bool|null $value Value to set for the appsBlockCopyPaste property.
    */
    public function setAppsBlockCopyPaste(?bool $value ): void {
        $this->appsBlockCopyPaste = $value;
    }

    /**
     * Sets the bluetoothBlocked property value. Indicates whether or not to block bluetooth.
     *  @param bool|null $value Value to set for the bluetoothBlocked property.
    */
    public function setBluetoothBlocked(?bool $value ): void {
        $this->bluetoothBlocked = $value;
    }

    /**
     * Sets the cameraBlocked property value. Indicates whether or not to block camera.
     *  @param bool|null $value Value to set for the cameraBlocked property.
    */
    public function setCameraBlocked(?bool $value ): void {
        $this->cameraBlocked = $value;
    }

    /**
     * Sets the cellularBlockWifiTethering property value. Indicates whether or not to block Wi-Fi tethering. Has no impact if Wi-Fi is blocked.
     *  @param bool|null $value Value to set for the cellularBlockWifiTethering property.
    */
    public function setCellularBlockWifiTethering(?bool $value ): void {
        $this->cellularBlockWifiTethering = $value;
    }

    /**
     * Sets the compliantAppListType property value. Possible values of the compliance app list.
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
     * Sets the diagnosticDataBlockSubmission property value. Indicates whether or not to block diagnostic data submission.
     *  @param bool|null $value Value to set for the diagnosticDataBlockSubmission property.
    */
    public function setDiagnosticDataBlockSubmission(?bool $value ): void {
        $this->diagnosticDataBlockSubmission = $value;
    }

    /**
     * Sets the emailBlockAddingAccounts property value. Indicates whether or not to block custom email accounts.
     *  @param bool|null $value Value to set for the emailBlockAddingAccounts property.
    */
    public function setEmailBlockAddingAccounts(?bool $value ): void {
        $this->emailBlockAddingAccounts = $value;
    }

    /**
     * Sets the locationServicesBlocked property value. Indicates whether or not to block location services.
     *  @param bool|null $value Value to set for the locationServicesBlocked property.
    */
    public function setLocationServicesBlocked(?bool $value ): void {
        $this->locationServicesBlocked = $value;
    }

    /**
     * Sets the microsoftAccountBlocked property value. Indicates whether or not to block using a Microsoft Account.
     *  @param bool|null $value Value to set for the microsoftAccountBlocked property.
    */
    public function setMicrosoftAccountBlocked(?bool $value ): void {
        $this->microsoftAccountBlocked = $value;
    }

    /**
     * Sets the nfcBlocked property value. Indicates whether or not to block Near-Field Communication.
     *  @param bool|null $value Value to set for the nfcBlocked property.
    */
    public function setNfcBlocked(?bool $value ): void {
        $this->nfcBlocked = $value;
    }

    /**
     * Sets the passwordBlockSimple property value. Indicates whether or not to block syncing the calendar.
     *  @param bool|null $value Value to set for the passwordBlockSimple property.
    */
    public function setPasswordBlockSimple(?bool $value ): void {
        $this->passwordBlockSimple = $value;
    }

    /**
     * Sets the passwordExpirationDays property value. Number of days before the password expires.
     *  @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value ): void {
        $this->passwordExpirationDays = $value;
    }

    /**
     * Sets the passwordMinimumCharacterSetCount property value. Number of character sets a password must contain.
     *  @param int|null $value Value to set for the passwordMinimumCharacterSetCount property.
    */
    public function setPasswordMinimumCharacterSetCount(?int $value ): void {
        $this->passwordMinimumCharacterSetCount = $value;
    }

    /**
     * Sets the passwordMinimumLength property value. Minimum length of passwords.
     *  @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value ): void {
        $this->passwordMinimumLength = $value;
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeScreenTimeout property value. Minutes of inactivity before screen timeout.
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
     * Sets the passwordRequiredType property value. Possible values of required passwords.
     *  @param RequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?RequiredPasswordType $value ): void {
        $this->passwordRequiredType = $value;
    }

    /**
     * Sets the passwordSignInFailureCountBeforeFactoryReset property value. Number of sign in failures allowed before factory reset.
     *  @param int|null $value Value to set for the passwordSignInFailureCountBeforeFactoryReset property.
    */
    public function setPasswordSignInFailureCountBeforeFactoryReset(?int $value ): void {
        $this->passwordSignInFailureCountBeforeFactoryReset = $value;
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether or not to block screenshots.
     *  @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value ): void {
        $this->screenCaptureBlocked = $value;
    }

    /**
     * Sets the storageBlockRemovableStorage property value. Indicates whether or not to block removable storage.
     *  @param bool|null $value Value to set for the storageBlockRemovableStorage property.
    */
    public function setStorageBlockRemovableStorage(?bool $value ): void {
        $this->storageBlockRemovableStorage = $value;
    }

    /**
     * Sets the storageRequireEncryption property value. Indicates whether or not to require encryption.
     *  @param bool|null $value Value to set for the storageRequireEncryption property.
    */
    public function setStorageRequireEncryption(?bool $value ): void {
        $this->storageRequireEncryption = $value;
    }

    /**
     * Sets the webBrowserBlocked property value. Indicates whether or not to block the web browser.
     *  @param bool|null $value Value to set for the webBrowserBlocked property.
    */
    public function setWebBrowserBlocked(?bool $value ): void {
        $this->webBrowserBlocked = $value;
    }

    /**
     * Sets the wifiBlockAutomaticConnectHotspots property value. Indicates whether or not to block automatically connecting to Wi-Fi hotspots. Has no impact if Wi-Fi is blocked.
     *  @param bool|null $value Value to set for the wifiBlockAutomaticConnectHotspots property.
    */
    public function setWifiBlockAutomaticConnectHotspots(?bool $value ): void {
        $this->wifiBlockAutomaticConnectHotspots = $value;
    }

    /**
     * Sets the wifiBlocked property value. Indicates whether or not to block Wi-Fi.
     *  @param bool|null $value Value to set for the wifiBlocked property.
    */
    public function setWifiBlocked(?bool $value ): void {
        $this->wifiBlocked = $value;
    }

    /**
     * Sets the wifiBlockHotspotReporting property value. Indicates whether or not to block Wi-Fi hotspot reporting. Has no impact if Wi-Fi is blocked.
     *  @param bool|null $value Value to set for the wifiBlockHotspotReporting property.
    */
    public function setWifiBlockHotspotReporting(?bool $value ): void {
        $this->wifiBlockHotspotReporting = $value;
    }

    /**
     * Sets the windowsStoreBlocked property value. Indicates whether or not to block the Windows Store.
     *  @param bool|null $value Value to set for the windowsStoreBlocked property.
    */
    public function setWindowsStoreBlocked(?bool $value ): void {
        $this->windowsStoreBlocked = $value;
    }

}
