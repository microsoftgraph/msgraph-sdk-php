<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSCompliancePolicy extends DeviceCompliancePolicy implements Parsable 
{
    /**
     * @var bool|null $deviceThreatProtectionEnabled Require that devices have enabled device threat protection.
    */
    private ?bool $deviceThreatProtectionEnabled = null;
    
    /**
     * @var DeviceThreatProtectionLevel|null $deviceThreatProtectionRequiredSecurityLevel Device threat protection levels for the Device Threat Protection API.
    */
    private ?DeviceThreatProtectionLevel $deviceThreatProtectionRequiredSecurityLevel = null;
    
    /**
     * @var bool|null $firewallBlockAllIncoming Corresponds to the 'Block all incoming connections' option.
    */
    private ?bool $firewallBlockAllIncoming = null;
    
    /**
     * @var bool|null $firewallEnabled Whether the firewall should be enabled or not.
    */
    private ?bool $firewallEnabled = null;
    
    /**
     * @var bool|null $firewallEnableStealthMode Corresponds to 'Enable stealth mode.'
    */
    private ?bool $firewallEnableStealthMode = null;
    
    /**
     * @var string|null $osMaximumVersion Maximum MacOS version.
    */
    private ?string $osMaximumVersion = null;
    
    /**
     * @var string|null $osMinimumVersion Minimum MacOS version.
    */
    private ?string $osMinimumVersion = null;
    
    /**
     * @var bool|null $passwordBlockSimple Indicates whether or not to block simple passwords.
    */
    private ?bool $passwordBlockSimple = null;
    
    /**
     * @var int|null $passwordExpirationDays Number of days before the password expires. Valid values 1 to 65535
    */
    private ?int $passwordExpirationDays = null;
    
    /**
     * @var int|null $passwordMinimumCharacterSetCount The number of character sets required in the password.
    */
    private ?int $passwordMinimumCharacterSetCount = null;
    
    /**
     * @var int|null $passwordMinimumLength Minimum length of password. Valid values 4 to 14
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
     * @var bool|null $passwordRequired Whether or not to require a password.
    */
    private ?bool $passwordRequired = null;
    
    /**
     * @var RequiredPasswordType|null $passwordRequiredType Possible values of required passwords.
    */
    private ?RequiredPasswordType $passwordRequiredType = null;
    
    /**
     * @var bool|null $storageRequireEncryption Require encryption on Mac OS devices.
    */
    private ?bool $storageRequireEncryption = null;
    
    /**
     * @var bool|null $systemIntegrityProtectionEnabled Require that devices have enabled system integrity protection.
    */
    private ?bool $systemIntegrityProtectionEnabled = null;
    
    /**
     * Instantiates a new MacOSCompliancePolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.macOSCompliancePolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSCompliancePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSCompliancePolicy {
        return new MacOSCompliancePolicy();
    }

    /**
     * Gets the deviceThreatProtectionEnabled property value. Require that devices have enabled device threat protection.
     * @return bool|null
    */
    public function getDeviceThreatProtectionEnabled(): ?bool {
        return $this->deviceThreatProtectionEnabled;
    }

    /**
     * Gets the deviceThreatProtectionRequiredSecurityLevel property value. Device threat protection levels for the Device Threat Protection API.
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
            'firewallBlockAllIncoming' => function (ParseNode $n) use ($o) { $o->setFirewallBlockAllIncoming($n->getBooleanValue()); },
            'firewallEnabled' => function (ParseNode $n) use ($o) { $o->setFirewallEnabled($n->getBooleanValue()); },
            'firewallEnableStealthMode' => function (ParseNode $n) use ($o) { $o->setFirewallEnableStealthMode($n->getBooleanValue()); },
            'osMaximumVersion' => function (ParseNode $n) use ($o) { $o->setOsMaximumVersion($n->getStringValue()); },
            'osMinimumVersion' => function (ParseNode $n) use ($o) { $o->setOsMinimumVersion($n->getStringValue()); },
            'passwordBlockSimple' => function (ParseNode $n) use ($o) { $o->setPasswordBlockSimple($n->getBooleanValue()); },
            'passwordExpirationDays' => function (ParseNode $n) use ($o) { $o->setPasswordExpirationDays($n->getIntegerValue()); },
            'passwordMinimumCharacterSetCount' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumCharacterSetCount($n->getIntegerValue()); },
            'passwordMinimumLength' => function (ParseNode $n) use ($o) { $o->setPasswordMinimumLength($n->getIntegerValue()); },
            'passwordMinutesOfInactivityBeforeLock' => function (ParseNode $n) use ($o) { $o->setPasswordMinutesOfInactivityBeforeLock($n->getIntegerValue()); },
            'passwordPreviousPasswordBlockCount' => function (ParseNode $n) use ($o) { $o->setPasswordPreviousPasswordBlockCount($n->getIntegerValue()); },
            'passwordRequired' => function (ParseNode $n) use ($o) { $o->setPasswordRequired($n->getBooleanValue()); },
            'passwordRequiredType' => function (ParseNode $n) use ($o) { $o->setPasswordRequiredType($n->getEnumValue(RequiredPasswordType::class)); },
            'storageRequireEncryption' => function (ParseNode $n) use ($o) { $o->setStorageRequireEncryption($n->getBooleanValue()); },
            'systemIntegrityProtectionEnabled' => function (ParseNode $n) use ($o) { $o->setSystemIntegrityProtectionEnabled($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the firewallBlockAllIncoming property value. Corresponds to the 'Block all incoming connections' option.
     * @return bool|null
    */
    public function getFirewallBlockAllIncoming(): ?bool {
        return $this->firewallBlockAllIncoming;
    }

    /**
     * Gets the firewallEnabled property value. Whether the firewall should be enabled or not.
     * @return bool|null
    */
    public function getFirewallEnabled(): ?bool {
        return $this->firewallEnabled;
    }

    /**
     * Gets the firewallEnableStealthMode property value. Corresponds to 'Enable stealth mode.'
     * @return bool|null
    */
    public function getFirewallEnableStealthMode(): ?bool {
        return $this->firewallEnableStealthMode;
    }

    /**
     * Gets the osMaximumVersion property value. Maximum MacOS version.
     * @return string|null
    */
    public function getOsMaximumVersion(): ?string {
        return $this->osMaximumVersion;
    }

    /**
     * Gets the osMinimumVersion property value. Minimum MacOS version.
     * @return string|null
    */
    public function getOsMinimumVersion(): ?string {
        return $this->osMinimumVersion;
    }

    /**
     * Gets the passwordBlockSimple property value. Indicates whether or not to block simple passwords.
     * @return bool|null
    */
    public function getPasswordBlockSimple(): ?bool {
        return $this->passwordBlockSimple;
    }

    /**
     * Gets the passwordExpirationDays property value. Number of days before the password expires. Valid values 1 to 65535
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
     * Gets the passwordMinimumLength property value. Minimum length of password. Valid values 4 to 14
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
     * Gets the passwordRequired property value. Whether or not to require a password.
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
     * Gets the storageRequireEncryption property value. Require encryption on Mac OS devices.
     * @return bool|null
    */
    public function getStorageRequireEncryption(): ?bool {
        return $this->storageRequireEncryption;
    }

    /**
     * Gets the systemIntegrityProtectionEnabled property value. Require that devices have enabled system integrity protection.
     * @return bool|null
    */
    public function getSystemIntegrityProtectionEnabled(): ?bool {
        return $this->systemIntegrityProtectionEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('deviceThreatProtectionEnabled', $this->deviceThreatProtectionEnabled);
        $writer->writeEnumValue('deviceThreatProtectionRequiredSecurityLevel', $this->deviceThreatProtectionRequiredSecurityLevel);
        $writer->writeBooleanValue('firewallBlockAllIncoming', $this->firewallBlockAllIncoming);
        $writer->writeBooleanValue('firewallEnabled', $this->firewallEnabled);
        $writer->writeBooleanValue('firewallEnableStealthMode', $this->firewallEnableStealthMode);
        $writer->writeStringValue('osMaximumVersion', $this->osMaximumVersion);
        $writer->writeStringValue('osMinimumVersion', $this->osMinimumVersion);
        $writer->writeBooleanValue('passwordBlockSimple', $this->passwordBlockSimple);
        $writer->writeIntegerValue('passwordExpirationDays', $this->passwordExpirationDays);
        $writer->writeIntegerValue('passwordMinimumCharacterSetCount', $this->passwordMinimumCharacterSetCount);
        $writer->writeIntegerValue('passwordMinimumLength', $this->passwordMinimumLength);
        $writer->writeIntegerValue('passwordMinutesOfInactivityBeforeLock', $this->passwordMinutesOfInactivityBeforeLock);
        $writer->writeIntegerValue('passwordPreviousPasswordBlockCount', $this->passwordPreviousPasswordBlockCount);
        $writer->writeBooleanValue('passwordRequired', $this->passwordRequired);
        $writer->writeEnumValue('passwordRequiredType', $this->passwordRequiredType);
        $writer->writeBooleanValue('storageRequireEncryption', $this->storageRequireEncryption);
        $writer->writeBooleanValue('systemIntegrityProtectionEnabled', $this->systemIntegrityProtectionEnabled);
    }

    /**
     * Sets the deviceThreatProtectionEnabled property value. Require that devices have enabled device threat protection.
     *  @param bool|null $value Value to set for the deviceThreatProtectionEnabled property.
    */
    public function setDeviceThreatProtectionEnabled(?bool $value ): void {
        $this->deviceThreatProtectionEnabled = $value;
    }

    /**
     * Sets the deviceThreatProtectionRequiredSecurityLevel property value. Device threat protection levels for the Device Threat Protection API.
     *  @param DeviceThreatProtectionLevel|null $value Value to set for the deviceThreatProtectionRequiredSecurityLevel property.
    */
    public function setDeviceThreatProtectionRequiredSecurityLevel(?DeviceThreatProtectionLevel $value ): void {
        $this->deviceThreatProtectionRequiredSecurityLevel = $value;
    }

    /**
     * Sets the firewallBlockAllIncoming property value. Corresponds to the 'Block all incoming connections' option.
     *  @param bool|null $value Value to set for the firewallBlockAllIncoming property.
    */
    public function setFirewallBlockAllIncoming(?bool $value ): void {
        $this->firewallBlockAllIncoming = $value;
    }

    /**
     * Sets the firewallEnabled property value. Whether the firewall should be enabled or not.
     *  @param bool|null $value Value to set for the firewallEnabled property.
    */
    public function setFirewallEnabled(?bool $value ): void {
        $this->firewallEnabled = $value;
    }

    /**
     * Sets the firewallEnableStealthMode property value. Corresponds to 'Enable stealth mode.'
     *  @param bool|null $value Value to set for the firewallEnableStealthMode property.
    */
    public function setFirewallEnableStealthMode(?bool $value ): void {
        $this->firewallEnableStealthMode = $value;
    }

    /**
     * Sets the osMaximumVersion property value. Maximum MacOS version.
     *  @param string|null $value Value to set for the osMaximumVersion property.
    */
    public function setOsMaximumVersion(?string $value ): void {
        $this->osMaximumVersion = $value;
    }

    /**
     * Sets the osMinimumVersion property value. Minimum MacOS version.
     *  @param string|null $value Value to set for the osMinimumVersion property.
    */
    public function setOsMinimumVersion(?string $value ): void {
        $this->osMinimumVersion = $value;
    }

    /**
     * Sets the passwordBlockSimple property value. Indicates whether or not to block simple passwords.
     *  @param bool|null $value Value to set for the passwordBlockSimple property.
    */
    public function setPasswordBlockSimple(?bool $value ): void {
        $this->passwordBlockSimple = $value;
    }

    /**
     * Sets the passwordExpirationDays property value. Number of days before the password expires. Valid values 1 to 65535
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
     * Sets the passwordMinimumLength property value. Minimum length of password. Valid values 4 to 14
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
     * Sets the passwordRequired property value. Whether or not to require a password.
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
     * Sets the storageRequireEncryption property value. Require encryption on Mac OS devices.
     *  @param bool|null $value Value to set for the storageRequireEncryption property.
    */
    public function setStorageRequireEncryption(?bool $value ): void {
        $this->storageRequireEncryption = $value;
    }

    /**
     * Sets the systemIntegrityProtectionEnabled property value. Require that devices have enabled system integrity protection.
     *  @param bool|null $value Value to set for the systemIntegrityProtectionEnabled property.
    */
    public function setSystemIntegrityProtectionEnabled(?bool $value ): void {
        $this->systemIntegrityProtectionEnabled = $value;
    }

}
