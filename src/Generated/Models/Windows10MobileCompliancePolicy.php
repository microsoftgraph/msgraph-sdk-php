<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows10MobileCompliancePolicy extends DeviceCompliancePolicy implements Parsable 
{
    /**
     * Instantiates a new Windows10MobileCompliancePolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windows10MobileCompliancePolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10MobileCompliancePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10MobileCompliancePolicy {
        return new Windows10MobileCompliancePolicy();
    }

    /**
     * Gets the bitLockerEnabled property value. Require devices to be reported healthy by Windows Device Health Attestation - bit locker is enabled
     * @return bool|null
    */
    public function getBitLockerEnabled(): ?bool {
        return $this->getBackingStore()->get('bitLockerEnabled');
    }

    /**
     * Gets the codeIntegrityEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation.
     * @return bool|null
    */
    public function getCodeIntegrityEnabled(): ?bool {
        return $this->getBackingStore()->get('codeIntegrityEnabled');
    }

    /**
     * Gets the earlyLaunchAntiMalwareDriverEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation - early launch antimalware driver is enabled.
     * @return bool|null
    */
    public function getEarlyLaunchAntiMalwareDriverEnabled(): ?bool {
        return $this->getBackingStore()->get('earlyLaunchAntiMalwareDriverEnabled');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bitLockerEnabled' => fn(ParseNode $n) => $o->setBitLockerEnabled($n->getBooleanValue()),
            'codeIntegrityEnabled' => fn(ParseNode $n) => $o->setCodeIntegrityEnabled($n->getBooleanValue()),
            'earlyLaunchAntiMalwareDriverEnabled' => fn(ParseNode $n) => $o->setEarlyLaunchAntiMalwareDriverEnabled($n->getBooleanValue()),
            'osMaximumVersion' => fn(ParseNode $n) => $o->setOsMaximumVersion($n->getStringValue()),
            'osMinimumVersion' => fn(ParseNode $n) => $o->setOsMinimumVersion($n->getStringValue()),
            'passwordBlockSimple' => fn(ParseNode $n) => $o->setPasswordBlockSimple($n->getBooleanValue()),
            'passwordExpirationDays' => fn(ParseNode $n) => $o->setPasswordExpirationDays($n->getIntegerValue()),
            'passwordMinimumCharacterSetCount' => fn(ParseNode $n) => $o->setPasswordMinimumCharacterSetCount($n->getIntegerValue()),
            'passwordMinimumLength' => fn(ParseNode $n) => $o->setPasswordMinimumLength($n->getIntegerValue()),
            'passwordMinutesOfInactivityBeforeLock' => fn(ParseNode $n) => $o->setPasswordMinutesOfInactivityBeforeLock($n->getIntegerValue()),
            'passwordPreviousPasswordBlockCount' => fn(ParseNode $n) => $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()),
            'passwordRequired' => fn(ParseNode $n) => $o->setPasswordRequired($n->getBooleanValue()),
            'passwordRequiredType' => fn(ParseNode $n) => $o->setPasswordRequiredType($n->getEnumValue(RequiredPasswordType::class)),
            'passwordRequireToUnlockFromIdle' => fn(ParseNode $n) => $o->setPasswordRequireToUnlockFromIdle($n->getBooleanValue()),
            'secureBootEnabled' => fn(ParseNode $n) => $o->setSecureBootEnabled($n->getBooleanValue()),
            'storageRequireEncryption' => fn(ParseNode $n) => $o->setStorageRequireEncryption($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the osMaximumVersion property value. Maximum Windows Phone version.
     * @return string|null
    */
    public function getOsMaximumVersion(): ?string {
        return $this->getBackingStore()->get('osMaximumVersion');
    }

    /**
     * Gets the osMinimumVersion property value. Minimum Windows Phone version.
     * @return string|null
    */
    public function getOsMinimumVersion(): ?string {
        return $this->getBackingStore()->get('osMinimumVersion');
    }

    /**
     * Gets the passwordBlockSimple property value. Whether or not to block syncing the calendar.
     * @return bool|null
    */
    public function getPasswordBlockSimple(): ?bool {
        return $this->getBackingStore()->get('passwordBlockSimple');
    }

    /**
     * Gets the passwordExpirationDays property value. Number of days before password expiration. Valid values 1 to 255
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        return $this->getBackingStore()->get('passwordExpirationDays');
    }

    /**
     * Gets the passwordMinimumCharacterSetCount property value. The number of character sets required in the password.
     * @return int|null
    */
    public function getPasswordMinimumCharacterSetCount(): ?int {
        return $this->getBackingStore()->get('passwordMinimumCharacterSetCount');
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
     * Gets the passwordPreviousPasswordBlockCount property value. The number of previous passwords to prevent re-use of.
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        return $this->getBackingStore()->get('passwordPreviousPasswordBlockCount');
    }

    /**
     * Gets the passwordRequired property value. Require a password to unlock Windows Phone device.
     * @return bool|null
    */
    public function getPasswordRequired(): ?bool {
        return $this->getBackingStore()->get('passwordRequired');
    }

    /**
     * Gets the passwordRequiredType property value. Possible values of required passwords.
     * @return RequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?RequiredPasswordType {
        return $this->getBackingStore()->get('passwordRequiredType');
    }

    /**
     * Gets the passwordRequireToUnlockFromIdle property value. Require a password to unlock an idle device.
     * @return bool|null
    */
    public function getPasswordRequireToUnlockFromIdle(): ?bool {
        return $this->getBackingStore()->get('passwordRequireToUnlockFromIdle');
    }

    /**
     * Gets the secureBootEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation - secure boot is enabled.
     * @return bool|null
    */
    public function getSecureBootEnabled(): ?bool {
        return $this->getBackingStore()->get('secureBootEnabled');
    }

    /**
     * Gets the storageRequireEncryption property value. Require encryption on windows devices.
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
        $writer->writeBooleanValue('bitLockerEnabled', $this->getBitLockerEnabled());
        $writer->writeBooleanValue('codeIntegrityEnabled', $this->getCodeIntegrityEnabled());
        $writer->writeBooleanValue('earlyLaunchAntiMalwareDriverEnabled', $this->getEarlyLaunchAntiMalwareDriverEnabled());
        $writer->writeStringValue('osMaximumVersion', $this->getOsMaximumVersion());
        $writer->writeStringValue('osMinimumVersion', $this->getOsMinimumVersion());
        $writer->writeBooleanValue('passwordBlockSimple', $this->getPasswordBlockSimple());
        $writer->writeIntegerValue('passwordExpirationDays', $this->getPasswordExpirationDays());
        $writer->writeIntegerValue('passwordMinimumCharacterSetCount', $this->getPasswordMinimumCharacterSetCount());
        $writer->writeIntegerValue('passwordMinimumLength', $this->getPasswordMinimumLength());
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeLock', $this->getPasswordMinutesOfInactivityBeforeLock());
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->getPasswordPreviousPasswordBlockCount());
        $writer->writeBooleanValue('passwordRequired', $this->getPasswordRequired());
        $writer->writeEnumValue('passwordRequiredType', $this->getPasswordRequiredType());
        $writer->writeBooleanValue('passwordRequireToUnlockFromIdle', $this->getPasswordRequireToUnlockFromIdle());
        $writer->writeBooleanValue('secureBootEnabled', $this->getSecureBootEnabled());
        $writer->writeBooleanValue('storageRequireEncryption', $this->getStorageRequireEncryption());
    }

    /**
     * Sets the bitLockerEnabled property value. Require devices to be reported healthy by Windows Device Health Attestation - bit locker is enabled
     * @param bool|null $value Value to set for the bitLockerEnabled property.
    */
    public function setBitLockerEnabled(?bool $value): void {
        $this->getBackingStore()->set('bitLockerEnabled', $value);
    }

    /**
     * Sets the codeIntegrityEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation.
     * @param bool|null $value Value to set for the codeIntegrityEnabled property.
    */
    public function setCodeIntegrityEnabled(?bool $value): void {
        $this->getBackingStore()->set('codeIntegrityEnabled', $value);
    }

    /**
     * Sets the earlyLaunchAntiMalwareDriverEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation - early launch antimalware driver is enabled.
     * @param bool|null $value Value to set for the earlyLaunchAntiMalwareDriverEnabled property.
    */
    public function setEarlyLaunchAntiMalwareDriverEnabled(?bool $value): void {
        $this->getBackingStore()->set('earlyLaunchAntiMalwareDriverEnabled', $value);
    }

    /**
     * Sets the osMaximumVersion property value. Maximum Windows Phone version.
     * @param string|null $value Value to set for the osMaximumVersion property.
    */
    public function setOsMaximumVersion(?string $value): void {
        $this->getBackingStore()->set('osMaximumVersion', $value);
    }

    /**
     * Sets the osMinimumVersion property value. Minimum Windows Phone version.
     * @param string|null $value Value to set for the osMinimumVersion property.
    */
    public function setOsMinimumVersion(?string $value): void {
        $this->getBackingStore()->set('osMinimumVersion', $value);
    }

    /**
     * Sets the passwordBlockSimple property value. Whether or not to block syncing the calendar.
     * @param bool|null $value Value to set for the passwordBlockSimple property.
    */
    public function setPasswordBlockSimple(?bool $value): void {
        $this->getBackingStore()->set('passwordBlockSimple', $value);
    }

    /**
     * Sets the passwordExpirationDays property value. Number of days before password expiration. Valid values 1 to 255
     * @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value): void {
        $this->getBackingStore()->set('passwordExpirationDays', $value);
    }

    /**
     * Sets the passwordMinimumCharacterSetCount property value. The number of character sets required in the password.
     * @param int|null $value Value to set for the passwordMinimumCharacterSetCount property.
    */
    public function setPasswordMinimumCharacterSetCount(?int $value): void {
        $this->getBackingStore()->set('passwordMinimumCharacterSetCount', $value);
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
     * Sets the passwordPreviousPasswordBlockCount property value. The number of previous passwords to prevent re-use of.
     * @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value): void {
        $this->getBackingStore()->set('passwordPreviousPasswordBlockCount', $value);
    }

    /**
     * Sets the passwordRequired property value. Require a password to unlock Windows Phone device.
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
     * Sets the passwordRequireToUnlockFromIdle property value. Require a password to unlock an idle device.
     * @param bool|null $value Value to set for the passwordRequireToUnlockFromIdle property.
    */
    public function setPasswordRequireToUnlockFromIdle(?bool $value): void {
        $this->getBackingStore()->set('passwordRequireToUnlockFromIdle', $value);
    }

    /**
     * Sets the secureBootEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation - secure boot is enabled.
     * @param bool|null $value Value to set for the secureBootEnabled property.
    */
    public function setSecureBootEnabled(?bool $value): void {
        $this->getBackingStore()->set('secureBootEnabled', $value);
    }

    /**
     * Sets the storageRequireEncryption property value. Require encryption on windows devices.
     * @param bool|null $value Value to set for the storageRequireEncryption property.
    */
    public function setStorageRequireEncryption(?bool $value): void {
        $this->getBackingStore()->set('storageRequireEncryption', $value);
    }

}
