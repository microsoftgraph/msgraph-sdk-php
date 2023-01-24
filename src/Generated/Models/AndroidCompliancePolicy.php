<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidCompliancePolicy extends DeviceCompliancePolicy implements Parsable 
{
    /**
     * Instantiates a new AndroidCompliancePolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidCompliancePolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidCompliancePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidCompliancePolicy {
        return new AndroidCompliancePolicy();
    }

    /**
     * Gets the deviceThreatProtectionEnabled property value. Require that devices have enabled device threat protection.
     * @return bool|null
    */
    public function getDeviceThreatProtectionEnabled(): ?bool {
        return $this->getBackingStore()->get('deviceThreatProtectionEnabled');
    }

    /**
     * Gets the deviceThreatProtectionRequiredSecurityLevel property value. Device threat protection levels for the Device Threat Protection API.
     * @return DeviceThreatProtectionLevel|null
    */
    public function getDeviceThreatProtectionRequiredSecurityLevel(): ?DeviceThreatProtectionLevel {
        return $this->getBackingStore()->get('deviceThreatProtectionRequiredSecurityLevel');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceThreatProtectionEnabled' => fn(ParseNode $n) => $o->setDeviceThreatProtectionEnabled($n->getBooleanValue()),
            'deviceThreatProtectionRequiredSecurityLevel' => fn(ParseNode $n) => $o->setDeviceThreatProtectionRequiredSecurityLevel($n->getEnumValue(DeviceThreatProtectionLevel::class)),
            'minAndroidSecurityPatchLevel' => fn(ParseNode $n) => $o->setMinAndroidSecurityPatchLevel($n->getStringValue()),
            'osMaximumVersion' => fn(ParseNode $n) => $o->setOsMaximumVersion($n->getStringValue()),
            'osMinimumVersion' => fn(ParseNode $n) => $o->setOsMinimumVersion($n->getStringValue()),
            'passwordExpirationDays' => fn(ParseNode $n) => $o->setPasswordExpirationDays($n->getIntegerValue()),
            'passwordMinimumLength' => fn(ParseNode $n) => $o->setPasswordMinimumLength($n->getIntegerValue()),
            'passwordMinutesOfInactivityBeforeLock' => fn(ParseNode $n) => $o->setPasswordMinutesOfInactivityBeforeLock($n->getIntegerValue()),
            'passwordPreviousPasswordBlockCount' => fn(ParseNode $n) => $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()),
            'passwordRequired' => fn(ParseNode $n) => $o->setPasswordRequired($n->getBooleanValue()),
            'passwordRequiredType' => fn(ParseNode $n) => $o->setPasswordRequiredType($n->getEnumValue(AndroidRequiredPasswordType::class)),
            'securityBlockJailbrokenDevices' => fn(ParseNode $n) => $o->setSecurityBlockJailbrokenDevices($n->getBooleanValue()),
            'securityDisableUsbDebugging' => fn(ParseNode $n) => $o->setSecurityDisableUsbDebugging($n->getBooleanValue()),
            'securityPreventInstallAppsFromUnknownSources' => fn(ParseNode $n) => $o->setSecurityPreventInstallAppsFromUnknownSources($n->getBooleanValue()),
            'securityRequireCompanyPortalAppIntegrity' => fn(ParseNode $n) => $o->setSecurityRequireCompanyPortalAppIntegrity($n->getBooleanValue()),
            'securityRequireGooglePlayServices' => fn(ParseNode $n) => $o->setSecurityRequireGooglePlayServices($n->getBooleanValue()),
            'securityRequireSafetyNetAttestationBasicIntegrity' => fn(ParseNode $n) => $o->setSecurityRequireSafetyNetAttestationBasicIntegrity($n->getBooleanValue()),
            'securityRequireSafetyNetAttestationCertifiedDevice' => fn(ParseNode $n) => $o->setSecurityRequireSafetyNetAttestationCertifiedDevice($n->getBooleanValue()),
            'securityRequireUpToDateSecurityProviders' => fn(ParseNode $n) => $o->setSecurityRequireUpToDateSecurityProviders($n->getBooleanValue()),
            'securityRequireVerifyApps' => fn(ParseNode $n) => $o->setSecurityRequireVerifyApps($n->getBooleanValue()),
            'storageRequireEncryption' => fn(ParseNode $n) => $o->setStorageRequireEncryption($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the minAndroidSecurityPatchLevel property value. Minimum Android security patch level.
     * @return string|null
    */
    public function getMinAndroidSecurityPatchLevel(): ?string {
        return $this->getBackingStore()->get('minAndroidSecurityPatchLevel');
    }

    /**
     * Gets the osMaximumVersion property value. Maximum Android version.
     * @return string|null
    */
    public function getOsMaximumVersion(): ?string {
        return $this->getBackingStore()->get('osMaximumVersion');
    }

    /**
     * Gets the osMinimumVersion property value. Minimum Android version.
     * @return string|null
    */
    public function getOsMinimumVersion(): ?string {
        return $this->getBackingStore()->get('osMinimumVersion');
    }

    /**
     * Gets the passwordExpirationDays property value. Number of days before the password expires. Valid values 1 to 365
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        return $this->getBackingStore()->get('passwordExpirationDays');
    }

    /**
     * Gets the passwordMinimumLength property value. Minimum password length. Valid values 4 to 16
     * @return int|null
    */
    public function getPasswordMinimumLength(): ?int {
        return $this->getBackingStore()->get('passwordMinimumLength');
    }

    /**
     * Gets the passwordMinutesOfInactivityBeforeLock property value. Minutes of inactivity before a password is required.
     * @return int|null
    */
    public function getPasswordMinutesOfInactivityBeforeLock(): ?int {
        return $this->getBackingStore()->get('passwordMinutesOfInactivityBeforeLock');
    }

    /**
     * Gets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block. Valid values 1 to 24
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        return $this->getBackingStore()->get('passwordPreviousPasswordBlockCount');
    }

    /**
     * Gets the passwordRequired property value. Require a password to unlock device.
     * @return bool|null
    */
    public function getPasswordRequired(): ?bool {
        return $this->getBackingStore()->get('passwordRequired');
    }

    /**
     * Gets the passwordRequiredType property value. Android required password type.
     * @return AndroidRequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?AndroidRequiredPasswordType {
        return $this->getBackingStore()->get('passwordRequiredType');
    }

    /**
     * Gets the securityBlockJailbrokenDevices property value. Devices must not be jailbroken or rooted.
     * @return bool|null
    */
    public function getSecurityBlockJailbrokenDevices(): ?bool {
        return $this->getBackingStore()->get('securityBlockJailbrokenDevices');
    }

    /**
     * Gets the securityDisableUsbDebugging property value. Disable USB debugging on Android devices.
     * @return bool|null
    */
    public function getSecurityDisableUsbDebugging(): ?bool {
        return $this->getBackingStore()->get('securityDisableUsbDebugging');
    }

    /**
     * Gets the securityPreventInstallAppsFromUnknownSources property value. Require that devices disallow installation of apps from unknown sources.
     * @return bool|null
    */
    public function getSecurityPreventInstallAppsFromUnknownSources(): ?bool {
        return $this->getBackingStore()->get('securityPreventInstallAppsFromUnknownSources');
    }

    /**
     * Gets the securityRequireCompanyPortalAppIntegrity property value. Require the device to pass the Company Portal client app runtime integrity check.
     * @return bool|null
    */
    public function getSecurityRequireCompanyPortalAppIntegrity(): ?bool {
        return $this->getBackingStore()->get('securityRequireCompanyPortalAppIntegrity');
    }

    /**
     * Gets the securityRequireGooglePlayServices property value. Require Google Play Services to be installed and enabled on the device.
     * @return bool|null
    */
    public function getSecurityRequireGooglePlayServices(): ?bool {
        return $this->getBackingStore()->get('securityRequireGooglePlayServices');
    }

    /**
     * Gets the securityRequireSafetyNetAttestationBasicIntegrity property value. Require the device to pass the SafetyNet basic integrity check.
     * @return bool|null
    */
    public function getSecurityRequireSafetyNetAttestationBasicIntegrity(): ?bool {
        return $this->getBackingStore()->get('securityRequireSafetyNetAttestationBasicIntegrity');
    }

    /**
     * Gets the securityRequireSafetyNetAttestationCertifiedDevice property value. Require the device to pass the SafetyNet certified device check.
     * @return bool|null
    */
    public function getSecurityRequireSafetyNetAttestationCertifiedDevice(): ?bool {
        return $this->getBackingStore()->get('securityRequireSafetyNetAttestationCertifiedDevice');
    }

    /**
     * Gets the securityRequireUpToDateSecurityProviders property value. Require the device to have up to date security providers. The device will require Google Play Services to be enabled and up to date.
     * @return bool|null
    */
    public function getSecurityRequireUpToDateSecurityProviders(): ?bool {
        return $this->getBackingStore()->get('securityRequireUpToDateSecurityProviders');
    }

    /**
     * Gets the securityRequireVerifyApps property value. Require the Android Verify apps feature is turned on.
     * @return bool|null
    */
    public function getSecurityRequireVerifyApps(): ?bool {
        return $this->getBackingStore()->get('securityRequireVerifyApps');
    }

    /**
     * Gets the storageRequireEncryption property value. Require encryption on Android devices.
     * @return bool|null
    */
    public function getStorageRequireEncryption(): ?bool {
        return $this->getBackingStore()->get('storageRequireEncryption');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('deviceThreatProtectionEnabled', $this->getDeviceThreatProtectionEnabled());
        $writer->writeEnumValue('deviceThreatProtectionRequiredSecurityLevel', $this->getDeviceThreatProtectionRequiredSecurityLevel());
        $writer->writeStringValue('minAndroidSecurityPatchLevel', $this->getMinAndroidSecurityPatchLevel());
        $writer->writeStringValue('osMaximumVersion', $this->getOsMaximumVersion());
        $writer->writeStringValue('osMinimumVersion', $this->getOsMinimumVersion());
        $writer->writeIntegerValue('passwordExpirationDays', $this->getPasswordExpirationDays());
        $writer->writeIntegerValue('passwordMinimumLength', $this->getPasswordMinimumLength());
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeLock', $this->getPasswordMinutesOfInactivityBeforeLock());
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->getPasswordPreviousPasswordBlockCount());
        $writer->writeBooleanValue('passwordRequired', $this->getPasswordRequired());
        $writer->writeEnumValue('passwordRequiredType', $this->getPasswordRequiredType());
        $writer->writeBooleanValue('securityBlockJailbrokenDevices', $this->getSecurityBlockJailbrokenDevices());
        $writer->writeBooleanValue('securityDisableUsbDebugging', $this->getSecurityDisableUsbDebugging());
        $writer->writeBooleanValue('securityPreventInstallAppsFromUnknownSources', $this->getSecurityPreventInstallAppsFromUnknownSources());
        $writer->writeBooleanValue('securityRequireCompanyPortalAppIntegrity', $this->getSecurityRequireCompanyPortalAppIntegrity());
        $writer->writeBooleanValue('securityRequireGooglePlayServices', $this->getSecurityRequireGooglePlayServices());
        $writer->writeBooleanValue('securityRequireSafetyNetAttestationBasicIntegrity', $this->getSecurityRequireSafetyNetAttestationBasicIntegrity());
        $writer->writeBooleanValue('securityRequireSafetyNetAttestationCertifiedDevice', $this->getSecurityRequireSafetyNetAttestationCertifiedDevice());
        $writer->writeBooleanValue('securityRequireUpToDateSecurityProviders', $this->getSecurityRequireUpToDateSecurityProviders());
        $writer->writeBooleanValue('securityRequireVerifyApps', $this->getSecurityRequireVerifyApps());
        $writer->writeBooleanValue('storageRequireEncryption', $this->getStorageRequireEncryption());
    }

    /**
     * Sets the deviceThreatProtectionEnabled property value. Require that devices have enabled device threat protection.
     * @param bool|null $value Value to set for the deviceThreatProtectionEnabled property.
    */
    public function setDeviceThreatProtectionEnabled(?bool $value): void {
        $this->getBackingStore()->set('deviceThreatProtectionEnabled', $value);
    }

    /**
     * Sets the deviceThreatProtectionRequiredSecurityLevel property value. Device threat protection levels for the Device Threat Protection API.
     * @param DeviceThreatProtectionLevel|null $value Value to set for the deviceThreatProtectionRequiredSecurityLevel property.
    */
    public function setDeviceThreatProtectionRequiredSecurityLevel(?DeviceThreatProtectionLevel $value): void {
        $this->getBackingStore()->set('deviceThreatProtectionRequiredSecurityLevel', $value);
    }

    /**
     * Sets the minAndroidSecurityPatchLevel property value. Minimum Android security patch level.
     * @param string|null $value Value to set for the minAndroidSecurityPatchLevel property.
    */
    public function setMinAndroidSecurityPatchLevel(?string $value): void {
        $this->getBackingStore()->set('minAndroidSecurityPatchLevel', $value);
    }

    /**
     * Sets the osMaximumVersion property value. Maximum Android version.
     * @param string|null $value Value to set for the osMaximumVersion property.
    */
    public function setOsMaximumVersion(?string $value): void {
        $this->getBackingStore()->set('osMaximumVersion', $value);
    }

    /**
     * Sets the osMinimumVersion property value. Minimum Android version.
     * @param string|null $value Value to set for the osMinimumVersion property.
    */
    public function setOsMinimumVersion(?string $value): void {
        $this->getBackingStore()->set('osMinimumVersion', $value);
    }

    /**
     * Sets the passwordExpirationDays property value. Number of days before the password expires. Valid values 1 to 365
     * @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value): void {
        $this->getBackingStore()->set('passwordExpirationDays', $value);
    }

    /**
     * Sets the passwordMinimumLength property value. Minimum password length. Valid values 4 to 16
     * @param int|null $value Value to set for the passwordMinimumLength property.
    */
    public function setPasswordMinimumLength(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumLength', $value);
    }

    /**
     * Sets the passwordMinutesOfInactivityBeforeLock property value. Minutes of inactivity before a password is required.
     * @param int|null $value Value to set for the passwordMinutesOfInactivityBeforeLock property.
    */
    public function setPasswordMinutesOfInactivityBeforeLock(?int $value): void {
        $this->getBackingStore()->set('passwordMinutesOfInactivityBeforeLock', $value);
    }

    /**
     * Sets the passwordPreviousPasswordBlockCount property value. Number of previous passwords to block. Valid values 1 to 24
     * @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value): void {
        $this->getBackingStore()->set('passwordPreviousPasswordBlockCount', $value);
    }

    /**
     * Sets the passwordRequired property value. Require a password to unlock device.
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
     * Sets the securityBlockJailbrokenDevices property value. Devices must not be jailbroken or rooted.
     * @param bool|null $value Value to set for the securityBlockJailbrokenDevices property.
    */
    public function setSecurityBlockJailbrokenDevices(?bool $value): void {
        $this->getBackingStore()->set('securityBlockJailbrokenDevices', $value);
    }

    /**
     * Sets the securityDisableUsbDebugging property value. Disable USB debugging on Android devices.
     * @param bool|null $value Value to set for the securityDisableUsbDebugging property.
    */
    public function setSecurityDisableUsbDebugging(?bool $value): void {
        $this->getBackingStore()->set('securityDisableUsbDebugging', $value);
    }

    /**
     * Sets the securityPreventInstallAppsFromUnknownSources property value. Require that devices disallow installation of apps from unknown sources.
     * @param bool|null $value Value to set for the securityPreventInstallAppsFromUnknownSources property.
    */
    public function setSecurityPreventInstallAppsFromUnknownSources(?bool $value): void {
        $this->getBackingStore()->set('securityPreventInstallAppsFromUnknownSources', $value);
    }

    /**
     * Sets the securityRequireCompanyPortalAppIntegrity property value. Require the device to pass the Company Portal client app runtime integrity check.
     * @param bool|null $value Value to set for the securityRequireCompanyPortalAppIntegrity property.
    */
    public function setSecurityRequireCompanyPortalAppIntegrity(?bool $value): void {
        $this->getBackingStore()->set('securityRequireCompanyPortalAppIntegrity', $value);
    }

    /**
     * Sets the securityRequireGooglePlayServices property value. Require Google Play Services to be installed and enabled on the device.
     * @param bool|null $value Value to set for the securityRequireGooglePlayServices property.
    */
    public function setSecurityRequireGooglePlayServices(?bool $value): void {
        $this->getBackingStore()->set('securityRequireGooglePlayServices', $value);
    }

    /**
     * Sets the securityRequireSafetyNetAttestationBasicIntegrity property value. Require the device to pass the SafetyNet basic integrity check.
     * @param bool|null $value Value to set for the securityRequireSafetyNetAttestationBasicIntegrity property.
    */
    public function setSecurityRequireSafetyNetAttestationBasicIntegrity(?bool $value): void {
        $this->getBackingStore()->set('securityRequireSafetyNetAttestationBasicIntegrity', $value);
    }

    /**
     * Sets the securityRequireSafetyNetAttestationCertifiedDevice property value. Require the device to pass the SafetyNet certified device check.
     * @param bool|null $value Value to set for the securityRequireSafetyNetAttestationCertifiedDevice property.
    */
    public function setSecurityRequireSafetyNetAttestationCertifiedDevice(?bool $value): void {
        $this->getBackingStore()->set('securityRequireSafetyNetAttestationCertifiedDevice', $value);
    }

    /**
     * Sets the securityRequireUpToDateSecurityProviders property value. Require the device to have up to date security providers. The device will require Google Play Services to be enabled and up to date.
     * @param bool|null $value Value to set for the securityRequireUpToDateSecurityProviders property.
    */
    public function setSecurityRequireUpToDateSecurityProviders(?bool $value): void {
        $this->getBackingStore()->set('securityRequireUpToDateSecurityProviders', $value);
    }

    /**
     * Sets the securityRequireVerifyApps property value. Require the Android Verify apps feature is turned on.
     * @param bool|null $value Value to set for the securityRequireVerifyApps property.
    */
    public function setSecurityRequireVerifyApps(?bool $value): void {
        $this->getBackingStore()->set('securityRequireVerifyApps', $value);
    }

    /**
     * Sets the storageRequireEncryption property value. Require encryption on Android devices.
     * @param bool|null $value Value to set for the storageRequireEncryption property.
    */
    public function setStorageRequireEncryption(?bool $value): void {
        $this->getBackingStore()->set('storageRequireEncryption', $value);
    }

}
