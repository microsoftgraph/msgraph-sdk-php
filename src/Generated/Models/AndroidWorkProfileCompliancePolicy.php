<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidWorkProfileCompliancePolicy extends DeviceCompliancePolicy implements Parsable 
{
    /**
     * @var bool|null $deviceThreatProtectionEnabled Require that devices have enabled device threat protection.
    */
    private ?bool $deviceThreatProtectionEnabled = null;
    
    /**
     * @var DeviceThreatProtectionLevel|null $deviceThreatProtectionRequiredSecurityLevel Require Mobile Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
    */
    private ?DeviceThreatProtectionLevel $deviceThreatProtectionRequiredSecurityLevel = null;
    
    /**
     * @var string|null $minAndroidSecurityPatchLevel Minimum Android security patch level.
    */
    private ?string $minAndroidSecurityPatchLevel = null;
    
    /**
     * @var string|null $osMaximumVersion Maximum Android version.
    */
    private ?string $osMaximumVersion = null;
    
    /**
     * @var string|null $osMinimumVersion Minimum Android version.
    */
    private ?string $osMinimumVersion = null;
    
    /**
     * @var int|null $passwordExpirationDays Number of days before the password expires. Valid values 1 to 365
    */
    private ?int $passwordExpirationDays = null;
    
    /**
     * @var int|null $passwordMinimumLength Minimum password length. Valid values 4 to 16
    */
    private ?int $passwordMinimumLength = null;
    
    /**
     * @var int|null $passwordMinutesOfInactivityBeforeLock Minutes of inactivity before a password is required.
    */
    private ?int $passwordMinutesOfInactivityBeforeLock = null;
    
    /**
     * @var int|null $passwordPreviousPasswordBlockCount Number of previous passwords to block. Valid values 1 to 24
    */
    private ?int $passwordPreviousPasswordBlockCount = null;
    
    /**
     * @var bool|null $passwordRequired Require a password to unlock device.
    */
    private ?bool $passwordRequired = null;
    
    /**
     * @var AndroidRequiredPasswordType|null $passwordRequiredType Type of characters in password. Possible values are: deviceDefault, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, numeric, numericComplex, any.
    */
    private ?AndroidRequiredPasswordType $passwordRequiredType = null;
    
    /**
     * @var bool|null $securityBlockJailbrokenDevices Devices must not be jailbroken or rooted.
    */
    private ?bool $securityBlockJailbrokenDevices = null;
    
    /**
     * @var bool|null $securityDisableUsbDebugging Disable USB debugging on Android devices.
    */
    private ?bool $securityDisableUsbDebugging = null;
    
    /**
     * @var bool|null $securityPreventInstallAppsFromUnknownSources Require that devices disallow installation of apps from unknown sources.
    */
    private ?bool $securityPreventInstallAppsFromUnknownSources = null;
    
    /**
     * @var bool|null $securityRequireCompanyPortalAppIntegrity Require the device to pass the Company Portal client app runtime integrity check.
    */
    private ?bool $securityRequireCompanyPortalAppIntegrity = null;
    
    /**
     * @var bool|null $securityRequireGooglePlayServices Require Google Play Services to be installed and enabled on the device.
    */
    private ?bool $securityRequireGooglePlayServices = null;
    
    /**
     * @var bool|null $securityRequireSafetyNetAttestationBasicIntegrity Require the device to pass the SafetyNet basic integrity check.
    */
    private ?bool $securityRequireSafetyNetAttestationBasicIntegrity = null;
    
    /**
     * @var bool|null $securityRequireSafetyNetAttestationCertifiedDevice Require the device to pass the SafetyNet certified device check.
    */
    private ?bool $securityRequireSafetyNetAttestationCertifiedDevice = null;
    
    /**
     * @var bool|null $securityRequireUpToDateSecurityProviders Require the device to have up to date security providers. The device will require Google Play Services to be enabled and up to date.
    */
    private ?bool $securityRequireUpToDateSecurityProviders = null;
    
    /**
     * @var bool|null $securityRequireVerifyApps Require the Android Verify apps feature is turned on.
    */
    private ?bool $securityRequireVerifyApps = null;
    
    /**
     * @var bool|null $storageRequireEncryption Require encryption on Android devices.
    */
    private ?bool $storageRequireEncryption = null;
    
    /**
     * Instantiates a new AndroidWorkProfileCompliancePolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidWorkProfileCompliancePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidWorkProfileCompliancePolicy {
        return new AndroidWorkProfileCompliancePolicy();
    }

    /**
     * Gets the deviceThreatProtectionEnabled property value. Require that devices have enabled device threat protection.
     * @return bool|null
    */
    public function getDeviceThreatProtectionEnabled(): ?bool {
        return $this->deviceThreatProtectionEnabled;
    }

    /**
     * Gets the deviceThreatProtectionRequiredSecurityLevel property value. Require Mobile Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
     * @return DeviceThreatProtectionLevel|null
    */
    public function getDeviceThreatProtectionRequiredSecurityLevel(): ?DeviceThreatProtectionLevel {
        return $this->deviceThreatProtectionRequiredSecurityLevel;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceThreatProtectionEnabled' => function (ParseNode $n) use ($o) { $o->setDeviceThreatProtectionEnabled($n->getBooleanValue()); },
            'deviceThreatProtectionRequiredSecurityLevel' => function (ParseNode $n) use ($o) { $o->setDeviceThreatProtectionRequiredSecurityLevel($n->getEnumValue(DeviceThreatProtectionLevel::class)); },
            'minAndroidSecurityPatchLevel' => function (ParseNode $n) use ($o) { $o->setMinAndroidSecurityPatchLevel($n->getStringValue()); },
            'osMaximumVersion' => function (ParseNode $n) use ($o) { $o->setOsMaximumVersion($n->getStringValue()); },
            'osMinimumVersion' => function (ParseNode $n) use ($o) { $o->setOsMinimumVersion($n->getStringValue()); },
            'passwordExpirationDays' => function (ParseNode $n) use ($o) { $o->setPasswordExpirationDays($n->getIntegerValue()); },
            'passwordMinimumLength' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumLength($n->getIntegerValue()); },
            'passwordMinutesOfInactivityBeforeLock' => function (ParseNode $n) use ($o) { $o->setPasswordMinutesOfInactivityBeforeLock($n->getIntegerValue()); },
            'passwordPreviousPasswordBlockCount' => function (ParseNode $n) use ($o) { $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()); },
            'passwordRequired' => function (ParseNode $n) use ($o) { $o->setPasswordRequired($n->getBooleanValue()); },
            'passwordRequiredType' => function (ParseNode $n) use ($o) { $o->setPasswordRequiredType($n->getEnumValue(AndroidRequiredPasswordType::class)); },
            'securityBlockJailbrokenDevices' => function (ParseNode $n) use ($o) { $o->setSecurityBlockJailbrokenDevices($n->getBooleanValue()); },
            'securityDisableUsbDebugging' => function (ParseNode $n) use ($o) { $o->setSecurityDisableUsbDebugging($n->getBooleanValue()); },
            'securityPreventInstallAppsFromUnknownSources' => function (ParseNode $n) use ($o) { $o->setSecurityPreventInstallAppsFromUnknownSources($n->getBooleanValue()); },
            'securityRequireCompanyPortalAppIntegrity' => function (ParseNode $n) use ($o) { $o->setSecurityRequireCompanyPortalAppIntegrity($n->getBooleanValue()); },
            'securityRequireGooglePlayServices' => function (ParseNode $n) use ($o) { $o->setSecurityRequireGooglePlayServices($n->getBooleanValue()); },
            'securityRequireSafetyNetAttestationBasicIntegrity' => function (ParseNode $n) use ($o) { $o->setSecurityRequireSafetyNetAttestationBasicIntegrity($n->getBooleanValue()); },
            'securityRequireSafetyNetAttestationCertifiedDevice' => function (ParseNode $n) use ($o) { $o->setSecurityRequireSafetyNetAttestationCertifiedDevice($n->getBooleanValue()); },
            'securityRequireUpToDateSecurityProviders' => function (ParseNode $n) use ($o) { $o->setSecurityRequireUpToDateSecurityProviders($n->getBooleanValue()); },
            'securityRequireVerifyApps' => function (ParseNode $n) use ($o) { $o->setSecurityRequireVerifyApps($n->getBooleanValue()); },
            'storageRequireEncryption' => function (ParseNode $n) use ($o) { $o->setStorageRequireEncryption($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the minAndroidSecurityPatchLevel property value. Minimum Android security patch level.
     * @return string|null
    */
    public function getMinAndroidSecurityPatchLevel(): ?string {
        return $this->minAndroidSecurityPatchLevel;
    }

    /**
     * Gets the osMaximumVersion property value. Maximum Android version.
     * @return string|null
    */
    public function getOsMaximumVersion(): ?string {
        return $this->osMaximumVersion;
    }

    /**
     * Gets the osMinimumVersion property value. Minimum Android version.
     * @return string|null
    */
    public function getOsMinimumVersion(): ?string {
        return $this->osMinimumVersion;
    }

    /**
     * Gets the passwordExpirationDays property value. Number of days before the password expires. Valid values 1 to 365
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        return $this->passwordExpirationDays;
    }

    /**
     * Gets the passwordMinimumLength property value. Minimum password length. Valid values 4 to 16
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        return $this->passwordMinimumLength;
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeLock property value. Minutes of inactivity before a password is required.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeLock(): ?int {
        return $this->passwordMinutesOfInactivityBeforeLock;
    }

    /**
     * Gets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block. Valid values 1 to 24
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        return $this->passwordPreviousPasswordBlockCount;
    }

    /**
     * Gets the passwordRequired property value. Require a password to unlock device.
     * @return bool|null
    */
    public function getPasswordRequired(): ?bool {
        return $this->passwordRequired;
    }

    /**
     * Gets the passwordRequiredType property value. Type of characters in password. Possible values are: deviceDefault, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, numeric, numericComplex, any.
     * @return AndroidRequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?AndroidRequiredPasswordType {
        return $this->passwordRequiredType;
    }

    /**
     * Gets the securityBlockJailbrokenDevices property value. Devices must not be jailbroken or rooted.
     * @return bool|null
    */
    public function getSecurityBlockJailbrokenDevices(): ?bool {
        return $this->securityBlockJailbrokenDevices;
    }

    /**
     * Gets the securityDisableUsbDebugging property value. Disable USB debugging on Android devices.
     * @return bool|null
    */
    public function getSecurityDisableUsbDebugging(): ?bool {
        return $this->securityDisableUsbDebugging;
    }

    /**
     * Gets the securityPreventInstallAppsFromUnknownSources property value. Require that devices disallow installation of apps from unknown sources.
     * @return bool|null
    */
    public function getSecurityPreventInstallAppsFromUnknownSources(): ?bool {
        return $this->securityPreventInstallAppsFromUnknownSources;
    }

    /**
     * Gets the securityRequireCompanyPortalAppIntegrity property value. Require the device to pass the Company Portal client app runtime integrity check.
     * @return bool|null
    */
    public function getSecurityRequireCompanyPortalAppIntegrity(): ?bool {
        return $this->securityRequireCompanyPortalAppIntegrity;
    }

    /**
     * Gets the securityRequireGooglePlayServices property value. Require Google Play Services to be installed and enabled on the device.
     * @return bool|null
    */
    public function getSecurityRequireGooglePlayServices(): ?bool {
        return $this->securityRequireGooglePlayServices;
    }

    /**
     * Gets the securityRequireSafetyNetAttestationBasicIntegrity property value. Require the device to pass the SafetyNet basic integrity check.
     * @return bool|null
    */
    public function getSecurityRequireSafetyNetAttestationBasicIntegrity(): ?bool {
        return $this->securityRequireSafetyNetAttestationBasicIntegrity;
    }

    /**
     * Gets the securityRequireSafetyNetAttestationCertifiedDevice property value. Require the device to pass the SafetyNet certified device check.
     * @return bool|null
    */
    public function getSecurityRequireSafetyNetAttestationCertifiedDevice(): ?bool {
        return $this->securityRequireSafetyNetAttestationCertifiedDevice;
    }

    /**
     * Gets the securityRequireUpToDateSecurityProviders property value. Require the device to have up to date security providers. The device will require Google Play Services to be enabled and up to date.
     * @return bool|null
    */
    public function getSecurityRequireUpToDateSecurityProviders(): ?bool {
        return $this->securityRequireUpToDateSecurityProviders;
    }

    /**
     * Gets the securityRequireVerifyApps property value. Require the Android Verify apps feature is turned on.
     * @return bool|null
    */
    public function getSecurityRequireVerifyApps(): ?bool {
        return $this->securityRequireVerifyApps;
    }

    /**
     * Gets the storageRequireEncryption property value. Require encryption on Android devices.
     * @return bool|null
    */
    public function getStorageRequireEncryption(): ?bool {
        return $this->storageRequireEncryption;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('deviceThreatProtectionEnabled', $this->deviceThreatProtectionEnabled);
        $writer->writeEnumValue('deviceThreatProtectionRequiredSecurityLevel', $this->deviceThreatProtectionRequiredSecurityLevel);
        $writer->writeStringValue('minAndroidSecurityPatchLevel', $this->minAndroidSecurityPatchLevel);
        $writer->writeStringValue('osMaximumVersion', $this->osMaximumVersion);
        $writer->writeStringValue('osMinimumVersion', $this->osMinimumVersion);
        $writer->writeIntegerValue('passwordExpirationDays', $this->passwordExpirationDays);
        $writer->writeIntegerValue('passwordMinimumLength', $this->passwordMinimumLength);
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeLock', $this->passwordMinutesOfInactivityBeforeLock);
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->passwordPreviousPasswordBlockCount);
        $writer->writeBooleanValue('passwordRequired', $this->passwordRequired);
        $writer->writeEnumValue('passwordRequiredType', $this->passwordRequiredType);
        $writer->writeBooleanValue('securityBlockJailbrokenDevices', $this->securityBlockJailbrokenDevices);
        $writer->writeBooleanValue('securityDisableUsbDebugging', $this->securityDisableUsbDebugging);
        $writer->writeBooleanValue('securityPreventInstallAppsFromUnknownSources', $this->securityPreventInstallAppsFromUnknownSources);
        $writer->writeBooleanValue('securityRequireCompanyPortalAppIntegrity', $this->securityRequireCompanyPortalAppIntegrity);
        $writer->writeBooleanValue('securityRequireGooglePlayServices', $this->securityRequireGooglePlayServices);
        $writer->writeBooleanValue('securityRequireSafetyNetAttestationBasicIntegrity', $this->securityRequireSafetyNetAttestationBasicIntegrity);
        $writer->writeBooleanValue('securityRequireSafetyNetAttestationCertifiedDevice', $this->securityRequireSafetyNetAttestationCertifiedDevice);
        $writer->writeBooleanValue('securityRequireUpToDateSecurityProviders', $this->securityRequireUpToDateSecurityProviders);
        $writer->writeBooleanValue('securityRequireVerifyApps', $this->securityRequireVerifyApps);
        $writer->writeBooleanValue('storageRequireEncryption', $this->storageRequireEncryption);
    }

    /**
     * Sets the deviceThreatProtectionEnabled property value. Require that devices have enabled device threat protection.
     *  @param bool|null $value Value to set for the deviceThreatProtectionEnabled property.
    */
    public function setDeviceThreatProtectionEnabled(?bool $value ): void {
        $this->deviceThreatProtectionEnabled = $value;
    }

    /**
     * Sets the deviceThreatProtectionRequiredSecurityLevel property value. Require Mobile Threat Protection minimum risk level to report noncompliance. Possible values are: unavailable, secured, low, medium, high, notSet.
     *  @param DeviceThreatProtectionLevel|null $value Value to set for the deviceThreatProtectionRequiredSecurityLevel property.
    */
    public function setDeviceThreatProtectionRequiredSecurityLevel(?DeviceThreatProtectionLevel $value ): void {
        $this->deviceThreatProtectionRequiredSecurityLevel = $value;
    }

    /**
     * Sets the minAndroidSecurityPatchLevel property value. Minimum Android security patch level.
     *  @param string|null $value Value to set for the minAndroidSecurityPatchLevel property.
    */
    public function setMinAndroidSecurityPatchLevel(?string $value ): void {
        $this->minAndroidSecurityPatchLevel = $value;
    }

    /**
     * Sets the osMaximumVersion property value. Maximum Android version.
     *  @param string|null $value Value to set for the osMaximumVersion property.
    */
    public function setOsMaximumVersion(?string $value ): void {
        $this->osMaximumVersion = $value;
    }

    /**
     * Sets the osMinimumVersion property value. Minimum Android version.
     *  @param string|null $value Value to set for the osMinimumVersion property.
    */
    public function setOsMinimumVersion(?string $value ): void {
        $this->osMinimumVersion = $value;
    }

    /**
     * Sets the passwordExpirationDays property value. Number of days before the password expires. Valid values 1 to 365
     *  @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value ): void {
        $this->passwordExpirationDays = $value;
    }

    /**
     * Sets the passwordMinimumLength property value. Minimum password length. Valid values 4 to 16
     *  @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value ): void {
        $this->passwordMinimumLength = $value;
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeLock property value. Minutes of inactivity before a password is required.
     *  @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeLock property.
    */
    public function setPasswordMinutesOfInactivityBeforeLock(?int $value ): void {
        $this->passwordMinutesOfInactivityBeforeLock = $value;
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block. Valid values 1 to 24
     *  @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value ): void {
        $this->passwordPreviousPasswordBlockCount = $value;
    }

    /**
     * Sets the passwordRequired property value. Require a password to unlock device.
     *  @param bool|null $value Value to set for the passwordRequired property.
    */
    public function setPasswordRequired(?bool $value ): void {
        $this->passwordRequired = $value;
    }

    /**
     * Sets the passwordRequiredType property value. Type of characters in password. Possible values are: deviceDefault, alphabetic, alphanumeric, alphanumericWithSymbols, lowSecurityBiometric, numeric, numericComplex, any.
     *  @param AndroidRequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?AndroidRequiredPasswordType $value ): void {
        $this->passwordRequiredType = $value;
    }

    /**
     * Sets the securityBlockJailbrokenDevices property value. Devices must not be jailbroken or rooted.
     *  @param bool|null $value Value to set for the securityBlockJailbrokenDevices property.
    */
    public function setSecurityBlockJailbrokenDevices(?bool $value ): void {
        $this->securityBlockJailbrokenDevices = $value;
    }

    /**
     * Sets the securityDisableUsbDebugging property value. Disable USB debugging on Android devices.
     *  @param bool|null $value Value to set for the securityDisableUsbDebugging property.
    */
    public function setSecurityDisableUsbDebugging(?bool $value ): void {
        $this->securityDisableUsbDebugging = $value;
    }

    /**
     * Sets the securityPreventInstallAppsFromUnknownSources property value. Require that devices disallow installation of apps from unknown sources.
     *  @param bool|null $value Value to set for the securityPreventInstallAppsFromUnknownSources property.
    */
    public function setSecurityPreventInstallAppsFromUnknownSources(?bool $value ): void {
        $this->securityPreventInstallAppsFromUnknownSources = $value;
    }

    /**
     * Sets the securityRequireCompanyPortalAppIntegrity property value. Require the device to pass the Company Portal client app runtime integrity check.
     *  @param bool|null $value Value to set for the securityRequireCompanyPortalAppIntegrity property.
    */
    public function setSecurityRequireCompanyPortalAppIntegrity(?bool $value ): void {
        $this->securityRequireCompanyPortalAppIntegrity = $value;
    }

    /**
     * Sets the securityRequireGooglePlayServices property value. Require Google Play Services to be installed and enabled on the device.
     *  @param bool|null $value Value to set for the securityRequireGooglePlayServices property.
    */
    public function setSecurityRequireGooglePlayServices(?bool $value ): void {
        $this->securityRequireGooglePlayServices = $value;
    }

    /**
     * Sets the securityRequireSafetyNetAttestationBasicIntegrity property value. Require the device to pass the SafetyNet basic integrity check.
     *  @param bool|null $value Value to set for the securityRequireSafetyNetAttestationBasicIntegrity property.
    */
    public function setSecurityRequireSafetyNetAttestationBasicIntegrity(?bool $value ): void {
        $this->securityRequireSafetyNetAttestationBasicIntegrity = $value;
    }

    /**
     * Sets the securityRequireSafetyNetAttestationCertifiedDevice property value. Require the device to pass the SafetyNet certified device check.
     *  @param bool|null $value Value to set for the securityRequireSafetyNetAttestationCertifiedDevice property.
    */
    public function setSecurityRequireSafetyNetAttestationCertifiedDevice(?bool $value ): void {
        $this->securityRequireSafetyNetAttestationCertifiedDevice = $value;
    }

    /**
     * Sets the securityRequireUpToDateSecurityProviders property value. Require the device to have up to date security providers. The device will require Google Play Services to be enabled and up to date.
     *  @param bool|null $value Value to set for the securityRequireUpToDateSecurityProviders property.
    */
    public function setSecurityRequireUpToDateSecurityProviders(?bool $value ): void {
        $this->securityRequireUpToDateSecurityProviders = $value;
    }

    /**
     * Sets the securityRequireVerifyApps property value. Require the Android Verify apps feature is turned on.
     *  @param bool|null $value Value to set for the securityRequireVerifyApps property.
    */
    public function setSecurityRequireVerifyApps(?bool $value ): void {
        $this->securityRequireVerifyApps = $value;
    }

    /**
     * Sets the storageRequireEncryption property value. Require encryption on Android devices.
     *  @param bool|null $value Value to set for the storageRequireEncryption property.
    */
    public function setStorageRequireEncryption(?bool $value ): void {
        $this->storageRequireEncryption = $value;
    }

}
