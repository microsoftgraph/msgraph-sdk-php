<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows10CompliancePolicy extends DeviceCompliancePolicy implements Parsable 
{
    /**
     * @var bool|null $bitLockerEnabled Require devices to be reported healthy by Windows Device Health Attestation - bit locker is enabled
    */
    private ?bool $bitLockerEnabled = null;
    
    /**
     * @var bool|null $codeIntegrityEnabled Require devices to be reported as healthy by Windows Device Health Attestation.
    */
    private ?bool $codeIntegrityEnabled = null;
    
    /**
     * @var bool|null $earlyLaunchAntiMalwareDriverEnabled Require devices to be reported as healthy by Windows Device Health Attestation - early launch antimalware driver is enabled.
    */
    private ?bool $earlyLaunchAntiMalwareDriverEnabled = null;
    
    /**
     * @var string|null $mobileOsMaximumVersion Maximum Windows Phone version.
    */
    private ?string $mobileOsMaximumVersion = null;
    
    /**
     * @var string|null $mobileOsMinimumVersion Minimum Windows Phone version.
    */
    private ?string $mobileOsMinimumVersion = null;
    
    /**
     * @var string|null $osMaximumVersion Maximum Windows 10 version.
    */
    private ?string $osMaximumVersion = null;
    
    /**
     * @var string|null $osMinimumVersion Minimum Windows 10 version.
    */
    private ?string $osMinimumVersion = null;
    
    /**
     * @var bool|null $passwordBlockSimple Indicates whether or not to block simple password.
    */
    private ?bool $passwordBlockSimple = null;
    
    /**
     * @var int|null $passwordExpirationDays The password expiration in days.
    */
    private ?int $passwordExpirationDays = null;
    
    /**
     * @var int|null $passwordMinimumCharacterSetCount The number of character sets required in the password.
    */
    private ?int $passwordMinimumCharacterSetCount = null;
    
    /**
     * @var int|null $passwordMinimumLength The minimum password length.
    */
    private ?int $passwordMinimumLength = null;
    
    /**
     * @var int|null $passwordMinutesOfInactivityBeforeLock Minutes of inactivity before a password is required.
    */
    private ?int $passwordMinutesOfInactivityBeforeLock = null;
    
    /**
     * @var int|null $passwordPreviousPasswordBlockCount The number of previous passwords to prevent re-use of.
    */
    private ?int $passwordPreviousPasswordBlockCount = null;
    
    /**
     * @var bool|null $passwordRequired Require a password to unlock Windows device.
    */
    private ?bool $passwordRequired = null;
    
    /**
     * @var bool|null $passwordRequiredToUnlockFromIdle Require a password to unlock an idle device.
    */
    private ?bool $passwordRequiredToUnlockFromIdle = null;
    
    /**
     * @var RequiredPasswordType|null $passwordRequiredType The required password type. Possible values are: deviceDefault, alphanumeric, numeric.
    */
    private ?RequiredPasswordType $passwordRequiredType = null;
    
    /**
     * @var bool|null $requireHealthyDeviceReport Require devices to be reported as healthy by Windows Device Health Attestation.
    */
    private ?bool $requireHealthyDeviceReport = null;
    
    /**
     * @var bool|null $secureBootEnabled Require devices to be reported as healthy by Windows Device Health Attestation - secure boot is enabled.
    */
    private ?bool $secureBootEnabled = null;
    
    /**
     * @var bool|null $storageRequireEncryption Require encryption on windows devices.
    */
    private ?bool $storageRequireEncryption = null;
    
    /**
     * Instantiates a new Windows10CompliancePolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10CompliancePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10CompliancePolicy {
        return new Windows10CompliancePolicy();
    }

    /**
     * Gets the bitLockerEnabled property value. Require devices to be reported healthy by Windows Device Health Attestation - bit locker is enabled
     * @return bool|null
    */
    public function getBitLockerEnabled(): ?bool {
        return $this->bitLockerEnabled;
    }

    /**
     * Gets the codeIntegrityEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation.
     * @return bool|null
    */
    public function getCodeIntegrityEnabled(): ?bool {
        return $this->codeIntegrityEnabled;
    }

    /**
     * Gets the earlyLaunchAntiMalwareDriverEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation - early launch antimalware driver is enabled.
     * @return bool|null
    */
    public function getEarlyLaunchAntiMalwareDriverEnabled(): ?bool {
        return $this->earlyLaunchAntiMalwareDriverEnabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bitLockerEnabled' => function (ParseNode $n) use ($o) { $o->setBitLockerEnabled($n->getBooleanValue()); },
            'codeIntegrityEnabled' => function (ParseNode $n) use ($o) { $o->setCodeIntegrityEnabled($n->getBooleanValue()); },
            'earlyLaunchAntiMalwareDriverEnabled' => function (ParseNode $n) use ($o) { $o->setEarlyLaunchAntiMalwareDriverEnabled($n->getBooleanValue()); },
            'mobileOsMaximumVersion' => function (ParseNode $n) use ($o) { $o->setMobileOsMaximumVersion($n->getStringValue()); },
            'mobileOsMinimumVersion' => function (ParseNode $n) use ($o) { $o->setMobileOsMinimumVersion($n->getStringValue()); },
            'osMaximumVersion' => function (ParseNode $n) use ($o) { $o->setOsMaximumVersion($n->getStringValue()); },
            'osMinimumVersion' => function (ParseNode $n) use ($o) { $o->setOsMinimumVersion($n->getStringValue()); },
            'passwordBlockSimple' => function (ParseNode $n) use ($o) { $o->setPasswordBlockSimple($n->getBooleanValue()); },
            'passwordExpirationDays' => function (ParseNode $n) use ($o) { $o->setPasswordExpirationDays($n->getIntegerValue()); },
            'passwordMinimumCharacterSetCount' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumCharacterSetCount($n->getIntegerValue()); },
            'passwordMinimumLength' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumLength($n->getIntegerValue()); },
            'passwordMinutesOfInactivityBeforeLock' => function (ParseNode $n) use ($o) { $o->setPasswordMinutesOfInactivityBeforeLock($n->getIntegerValue()); },
            'passwordPreviousPasswordBlockCount' => function (ParseNode $n) use ($o) { $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()); },
            'passwordRequired' => function (ParseNode $n) use ($o) { $o->setPasswordRequired($n->getBooleanValue()); },
            'passwordRequiredToUnlockFromIdle' => function (ParseNode $n) use ($o) { $o->setPasswordRequiredToUnlockFromIdle($n->getBooleanValue()); },
            'passwordRequiredType' => function (ParseNode $n) use ($o) { $o->setPasswordRequiredType($n->getEnumValue(RequiredPasswordType::class)); },
            'requireHealthyDeviceReport' => function (ParseNode $n) use ($o) { $o->setRequireHealthyDeviceReport($n->getBooleanValue()); },
            'secureBootEnabled' => function (ParseNode $n) use ($o) { $o->setSecureBootEnabled($n->getBooleanValue()); },
            'storageRequireEncryption' => function (ParseNode $n) use ($o) { $o->setStorageRequireEncryption($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the mobileOsMaximumVersion property value. Maximum Windows Phone version.
     * @return string|null
    */
    public function getMobileOsMaximumVersion(): ?string {
        return $this->mobileOsMaximumVersion;
    }

    /**
     * Gets the mobileOsMinimumVersion property value. Minimum Windows Phone version.
     * @return string|null
    */
    public function getMobileOsMinimumVersion(): ?string {
        return $this->mobileOsMinimumVersion;
    }

    /**
     * Gets the osMaximumVersion property value. Maximum Windows 10 version.
     * @return string|null
    */
    public function getOsMaximumVersion(): ?string {
        return $this->osMaximumVersion;
    }

    /**
     * Gets the osMinimumVersion property value. Minimum Windows 10 version.
     * @return string|null
    */
    public function getOsMinimumVersion(): ?string {
        return $this->osMinimumVersion;
    }

    /**
     * Gets the passwordBlockSimple property value. Indicates whether or not to block simple password.
     * @return bool|null
    */
    public function getPasswordBlockSimple(): ?bool {
        return $this->passwordBlockSimple;
    }

    /**
     * Gets the passwordExpirationDays property value. The password expiration in days.
     * @return int|null
    */
    public function getPasswordExpirationDays(): ?int {
        return $this->passwordExpirationDays;
    }

    /**
     * Gets the passwordMinimumCharacterSetCount property value. The number of character sets required in the password.
     * @return int|null
    */
    public function getPasswordMinimumCharacterSetCount(): ?int {
        return $this->passwordMinimumCharacterSetCount;
    }

    /**
     * Gets the passwordMinimumLength property value. The minimum password length.
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
     * Gets the passwordPreviousPasswordBlockCount property value. The number of previous passwords to prevent re-use of.
     * @return int|null
    */
    public function getPasswordPreviousPasswordBlockCount(): ?int {
        return $this->passwordPreviousPasswordBlockCount;
    }

    /**
     * Gets the passwordRequired property value. Require a password to unlock Windows device.
     * @return bool|null
    */
    public function getPasswordRequired(): ?bool {
        return $this->passwordRequired;
    }

    /**
     * Gets the passwordRequiredToUnlockFromIdle property value. Require a password to unlock an idle device.
     * @return bool|null
    */
    public function getPasswordRequiredToUnlockFromIdle(): ?bool {
        return $this->passwordRequiredToUnlockFromIdle;
    }

    /**
     * Gets the passwordRequiredType property value. The required password type. Possible values are: deviceDefault, alphanumeric, numeric.
     * @return RequiredPasswordType|null
    */
    public function getPasswordRequiredType(): ?RequiredPasswordType {
        return $this->passwordRequiredType;
    }

    /**
     * Gets the requireHealthyDeviceReport property value. Require devices to be reported as healthy by Windows Device Health Attestation.
     * @return bool|null
    */
    public function getRequireHealthyDeviceReport(): ?bool {
        return $this->requireHealthyDeviceReport;
    }

    /**
     * Gets the secureBootEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation - secure boot is enabled.
     * @return bool|null
    */
    public function getSecureBootEnabled(): ?bool {
        return $this->secureBootEnabled;
    }

    /**
     * Gets the storageRequireEncryption property value. Require encryption on windows devices.
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
        $writer->writeBooleanValue('bitLockerEnabled', $this->bitLockerEnabled);
        $writer->writeBooleanValue('codeIntegrityEnabled', $this->codeIntegrityEnabled);
        $writer->writeBooleanValue('earlyLaunchAntiMalwareDriverEnabled', $this->earlyLaunchAntiMalwareDriverEnabled);
        $writer->writeStringValue('mobileOsMaximumVersion', $this->mobileOsMaximumVersion);
        $writer->writeStringValue('mobileOsMinimumVersion', $this->mobileOsMinimumVersion);
        $writer->writeStringValue('osMaximumVersion', $this->osMaximumVersion);
        $writer->writeStringValue('osMinimumVersion', $this->osMinimumVersion);
        $writer->writeBooleanValue('passwordBlockSimple', $this->passwordBlockSimple);
        $writer->writeIntegerValue('passwordExpirationDays', $this->passwordExpirationDays);
        $writer->writeIntegerValue('passwordMinimumCharacterSetCount', $this->passwordMinimumCharacterSetCount);
        $writer->writeIntegerValue('passwordMinimumLength', $this->passwordMinimumLength);
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeLock', $this->passwordMinutesOfInactivityBeforeLock);
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->passwordPreviousPasswordBlockCount);
        $writer->writeBooleanValue('passwordRequired', $this->passwordRequired);
        $writer->writeBooleanValue('passwordRequiredToUnlockFromIdle', $this->passwordRequiredToUnlockFromIdle);
        $writer->writeEnumValue('passwordRequiredType', $this->passwordRequiredType);
        $writer->writeBooleanValue('requireHealthyDeviceReport', $this->requireHealthyDeviceReport);
        $writer->writeBooleanValue('secureBootEnabled', $this->secureBootEnabled);
        $writer->writeBooleanValue('storageRequireEncryption', $this->storageRequireEncryption);
    }

    /**
     * Sets the bitLockerEnabled property value. Require devices to be reported healthy by Windows Device Health Attestation - bit locker is enabled
     *  @param bool|null $value Value to set for the bitLockerEnabled property.
    */
    public function setBitLockerEnabled(?bool $value ): void {
        $this->bitLockerEnabled = $value;
    }

    /**
     * Sets the codeIntegrityEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation.
     *  @param bool|null $value Value to set for the codeIntegrityEnabled property.
    */
    public function setCodeIntegrityEnabled(?bool $value ): void {
        $this->codeIntegrityEnabled = $value;
    }

    /**
     * Sets the earlyLaunchAntiMalwareDriverEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation - early launch antimalware driver is enabled.
     *  @param bool|null $value Value to set for the earlyLaunchAntiMalwareDriverEnabled property.
    */
    public function setEarlyLaunchAntiMalwareDriverEnabled(?bool $value ): void {
        $this->earlyLaunchAntiMalwareDriverEnabled = $value;
    }

    /**
     * Sets the mobileOsMaximumVersion property value. Maximum Windows Phone version.
     *  @param string|null $value Value to set for the mobileOsMaximumVersion property.
    */
    public function setMobileOsMaximumVersion(?string $value ): void {
        $this->mobileOsMaximumVersion = $value;
    }

    /**
     * Sets the mobileOsMinimumVersion property value. Minimum Windows Phone version.
     *  @param string|null $value Value to set for the mobileOsMinimumVersion property.
    */
    public function setMobileOsMinimumVersion(?string $value ): void {
        $this->mobileOsMinimumVersion = $value;
    }

    /**
     * Sets the osMaximumVersion property value. Maximum Windows 10 version.
     *  @param string|null $value Value to set for the osMaximumVersion property.
    */
    public function setOsMaximumVersion(?string $value ): void {
        $this->osMaximumVersion = $value;
    }

    /**
     * Sets the osMinimumVersion property value. Minimum Windows 10 version.
     *  @param string|null $value Value to set for the osMinimumVersion property.
    */
    public function setOsMinimumVersion(?string $value ): void {
        $this->osMinimumVersion = $value;
    }

    /**
     * Sets the passwordBlockSimple property value. Indicates whether or not to block simple password.
     *  @param bool|null $value Value to set for the passwordBlockSimple property.
    */
    public function setPasswordBlockSimple(?bool $value ): void {
        $this->passwordBlockSimple = $value;
    }

    /**
     * Sets the passwordExpirationDays property value. The password expiration in days.
     *  @param int|null $value Value to set for the passwordExpirationDays property.
    */
    public function setPasswordExpirationDays(?int $value ): void {
        $this->passwordExpirationDays = $value;
    }

    /**
     * Sets the passwordMinimumCharacterSetCount property value. The number of character sets required in the password.
     *  @param int|null $value Value to set for the passwordMinimumCharacterSetCount property.
    */
    public function setPasswordMinimumCharacterSetCount(?int $value ): void {
        $this->passwordMinimumCharacterSetCount = $value;
    }

    /**
     * Sets the passwordMinimumLength property value. The minimum password length.
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
     * Sets the passwordPreviousPasswordBlockCount property value. The number of previous passwords to prevent re-use of.
     *  @param int|null $value Value to set for the passwordPreviousPasswordBlockCount property.
    */
    public function setPasswordPreviousPasswordBlockCount(?int $value ): void {
        $this->passwordPreviousPasswordBlockCount = $value;
    }

    /**
     * Sets the passwordRequired property value. Require a password to unlock Windows device.
     *  @param bool|null $value Value to set for the passwordRequired property.
    */
    public function setPasswordRequired(?bool $value ): void {
        $this->passwordRequired = $value;
    }

    /**
     * Sets the passwordRequiredToUnlockFromIdle property value. Require a password to unlock an idle device.
     *  @param bool|null $value Value to set for the passwordRequiredToUnlockFromIdle property.
    */
    public function setPasswordRequiredToUnlockFromIdle(?bool $value ): void {
        $this->passwordRequiredToUnlockFromIdle = $value;
    }

    /**
     * Sets the passwordRequiredType property value. The required password type. Possible values are: deviceDefault, alphanumeric, numeric.
     *  @param RequiredPasswordType|null $value Value to set for the passwordRequiredType property.
    */
    public function setPasswordRequiredType(?RequiredPasswordType $value ): void {
        $this->passwordRequiredType = $value;
    }

    /**
     * Sets the requireHealthyDeviceReport property value. Require devices to be reported as healthy by Windows Device Health Attestation.
     *  @param bool|null $value Value to set for the requireHealthyDeviceReport property.
    */
    public function setRequireHealthyDeviceReport(?bool $value ): void {
        $this->requireHealthyDeviceReport = $value;
    }

    /**
     * Sets the secureBootEnabled property value. Require devices to be reported as healthy by Windows Device Health Attestation - secure boot is enabled.
     *  @param bool|null $value Value to set for the secureBootEnabled property.
    */
    public function setSecureBootEnabled(?bool $value ): void {
        $this->secureBootEnabled = $value;
    }

    /**
     * Sets the storageRequireEncryption property value. Require encryption on windows devices.
     *  @param bool|null $value Value to set for the storageRequireEncryption property.
    */
    public function setStorageRequireEncryption(?bool $value ): void {
        $this->storageRequireEncryption = $value;
    }

}
