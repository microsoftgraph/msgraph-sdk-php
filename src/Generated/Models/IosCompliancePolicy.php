<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosCompliancePolicy extends DeviceCompliancePolicy implements Parsable 
{
    /**
     * Instantiates a new IosCompliancePolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosCompliancePolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosCompliancePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosCompliancePolicy {
        return new IosCompliancePolicy();
    }

    /**
     * Gets the deviceThreatProtectionEnabled property value. Require that devices have enabled device threat protection .
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
            'managedEmailProfileRequired' => fn(ParseNode $n) => $o->setManagedEmailProfileRequired($n->getBooleanValue()),
            'osMaximumVersion' => fn(ParseNode $n) => $o->setOsMaximumVersion($n->getStringValue()),
            'osMinimumVersion' => fn(ParseNode $n) => $o->setOsMinimumVersion($n->getStringValue()),
            'passcodeBlockSimple' => fn(ParseNode $n) => $o->setPasscodeBlockSimple($n->getBooleanValue()),
            'passcodeExpirationDays' => fn(ParseNode $n) => $o->setPasscodeExpirationDays($n->getIntegerValue()),
            'passcodeMinimumCharacterSetCount' => fn(ParseNode $n) => $o->setPasscodeMinimumCharacterSetCount($n->getIntegerValue()),
            'passcodeMinimumLength' => fn(ParseNode $n) => $o->setPasscodeMinimumLength($n->getIntegerValue()),
            'passcodeMinutesOfInactivityBeforeLock' => fn(ParseNode $n) => $o->setPasscodeMinutesOfInactivityBeforeLock($n->getIntegerValue()),
            'passcodePreviousPasscodeBlockCount' => fn(ParseNode $n) => $o->setPasscodePreviousPasscodeBlockCount($n->getIntegerValue()),
            'passcodeRequired' => fn(ParseNode $n) => $o->setPasscodeRequired($n->getBooleanValue()),
            'passcodeRequiredType' => fn(ParseNode $n) => $o->setPasscodeRequiredType($n->getEnumValue(RequiredPasswordType::class)),
            'securityBlockJailbrokenDevices' => fn(ParseNode $n) => $o->setSecurityBlockJailbrokenDevices($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the managedEmailProfileRequired property value. Indicates whether or not to require a managed email profile.
     * @return bool|null
    */
    public function getManagedEmailProfileRequired(): ?bool {
        return $this->getBackingStore()->get('managedEmailProfileRequired');
    }

    /**
     * Gets the osMaximumVersion property value. Maximum IOS version.
     * @return string|null
    */
    public function getOsMaximumVersion(): ?string {
        return $this->getBackingStore()->get('osMaximumVersion');
    }

    /**
     * Gets the osMinimumVersion property value. Minimum IOS version.
     * @return string|null
    */
    public function getOsMinimumVersion(): ?string {
        return $this->getBackingStore()->get('osMinimumVersion');
    }

    /**
     * Gets the passcodeBlockSimple property value. Indicates whether or not to block simple passcodes.
     * @return bool|null
    */
    public function getPasscodeBlockSimple(): ?bool {
        return $this->getBackingStore()->get('passcodeBlockSimple');
    }

    /**
     * Gets the passcodeExpirationDays property value. Number of days before the passcode expires. Valid values 1 to 65535
     * @return int|null
    */
    public function getPasscodeExpirationDays(): ?int {
        return $this->getBackingStore()->get('passcodeExpirationDays');
    }

    /**
     * Gets the passcodeMinimumCharacterSetCount property value. The number of character sets required in the password.
     * @return int|null
    */
    public function getPasscodeMinimumCharacterSetCount(): ?int {
        return $this->getBackingStore()->get('passcodeMinimumCharacterSetCount');
    }

    /**
     * Gets the passcodeMinimumLength property value. Minimum length of passcode. Valid values 4 to 14
     * @return int|null
    */
    public function getPasscodeMinimumLength(): ?int {
        return $this->getBackingStore()->get('passcodeMinimumLength');
    }

    /**
     * Gets the passcodeMinutesOfInactivityBeforeLock property value. Minutes of inactivity before a passcode is required.
     * @return int|null
    */
    public function getPasscodeMinutesOfInactivityBeforeLock(): ?int {
        return $this->getBackingStore()->get('passcodeMinutesOfInactivityBeforeLock');
    }

    /**
     * Gets the passcodePreviousPasscodeBlockCount property value. Number of previous passcodes to block. Valid values 1 to 24
     * @return int|null
    */
    public function getPasscodePreviousPasscodeBlockCount(): ?int {
        return $this->getBackingStore()->get('passcodePreviousPasscodeBlockCount');
    }

    /**
     * Gets the passcodeRequired property value. Indicates whether or not to require a passcode.
     * @return bool|null
    */
    public function getPasscodeRequired(): ?bool {
        return $this->getBackingStore()->get('passcodeRequired');
    }

    /**
     * Gets the passcodeRequiredType property value. Possible values of required passwords.
     * @return RequiredPasswordType|null
    */
    public function getPasscodeRequiredType(): ?RequiredPasswordType {
        return $this->getBackingStore()->get('passcodeRequiredType');
    }

    /**
     * Gets the securityBlockJailbrokenDevices property value. Devices must not be jailbroken or rooted.
     * @return bool|null
    */
    public function getSecurityBlockJailbrokenDevices(): ?bool {
        return $this->getBackingStore()->get('securityBlockJailbrokenDevices');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('deviceThreatProtectionEnabled', $this->getDeviceThreatProtectionEnabled());
        $writer->writeEnumValue('deviceThreatProtectionRequiredSecurityLevel', $this->getDeviceThreatProtectionRequiredSecurityLevel());
        $writer->writeBooleanValue('managedEmailProfileRequired', $this->getManagedEmailProfileRequired());
        $writer->writeStringValue('osMaximumVersion', $this->getOsMaximumVersion());
        $writer->writeStringValue('osMinimumVersion', $this->getOsMinimumVersion());
        $writer->writeBooleanValue('passcodeBlockSimple', $this->getPasscodeBlockSimple());
        $writer->writeIntegerValue('passcodeExpirationDays', $this->getPasscodeExpirationDays());
        $writer->writeIntegerValue('passcodeMinimumCharacterSetCount', $this->getPasscodeMinimumCharacterSetCount());
        $writer->writeIntegerValue('passcodeMinimumLength', $this->getPasscodeMinimumLength());
        $writer->writeIntegerValue('passcodeMinutesOfInactivityBeforeLock', $this->getPasscodeMinutesOfInactivityBeforeLock());
        $writer->writeIntegerValue('passcodePreviousPasscodeBlockCount', $this->getPasscodePreviousPasscodeBlockCount());
        $writer->writeBooleanValue('passcodeRequired', $this->getPasscodeRequired());
        $writer->writeEnumValue('passcodeRequiredType', $this->getPasscodeRequiredType());
        $writer->writeBooleanValue('securityBlockJailbrokenDevices', $this->getSecurityBlockJailbrokenDevices());
    }

    /**
     * Sets the deviceThreatProtectionEnabled property value. Require that devices have enabled device threat protection .
     *  @param bool|null $value Value to set for the deviceThreatProtectionEnabled property.
    */
    public function setDeviceThreatProtectionEnabled(?bool $value): void {
        $this->getBackingStore()->set('deviceThreatProtectionEnabled', $value);
    }

    /**
     * Sets the deviceThreatProtectionRequiredSecurityLevel property value. Device threat protection levels for the Device Threat Protection API.
     *  @param DeviceThreatProtectionLevel|null $value Value to set for the deviceThreatProtectionRequiredSecurityLevel property.
    */
    public function setDeviceThreatProtectionRequiredSecurityLevel(?DeviceThreatProtectionLevel $value): void {
        $this->getBackingStore()->set('deviceThreatProtectionRequiredSecurityLevel', $value);
    }

    /**
     * Sets the managedEmailProfileRequired property value. Indicates whether or not to require a managed email profile.
     *  @param bool|null $value Value to set for the managedEmailProfileRequired property.
    */
    public function setManagedEmailProfileRequired(?bool $value): void {
        $this->getBackingStore()->set('managedEmailProfileRequired', $value);
    }

    /**
     * Sets the osMaximumVersion property value. Maximum IOS version.
     *  @param string|null $value Value to set for the osMaximumVersion property.
    */
    public function setOsMaximumVersion(?string $value): void {
        $this->getBackingStore()->set('osMaximumVersion', $value);
    }

    /**
     * Sets the osMinimumVersion property value. Minimum IOS version.
     *  @param string|null $value Value to set for the osMinimumVersion property.
    */
    public function setOsMinimumVersion(?string $value): void {
        $this->getBackingStore()->set('osMinimumVersion', $value);
    }

    /**
     * Sets the passcodeBlockSimple property value. Indicates whether or not to block simple passcodes.
     *  @param bool|null $value Value to set for the passcodeBlockSimple property.
    */
    public function setPasscodeBlockSimple(?bool $value): void {
        $this->getBackingStore()->set('passcodeBlockSimple', $value);
    }

    /**
     * Sets the passcodeExpirationDays property value. Number of days before the passcode expires. Valid values 1 to 65535
     *  @param int|null $value Value to set for the passcodeExpirationDays property.
    */
    public function setPasscodeExpirationDays(?int $value): void {
        $this->getBackingStore()->set('passcodeExpirationDays', $value);
    }

    /**
     * Sets the passcodeMinimumCharacterSetCount property value. The number of character sets required in the password.
     *  @param int|null $value Value to set for the passcodeMinimumCharacterSetCount property.
    */
    public function setPasscodeMinimumCharacterSetCount(?int $value): void {
        $this->getBackingStore()->set('passcodeMinimumCharacterSetCount', $value);
    }

    /**
     * Sets the passcodeMinimumLength property value. Minimum length of passcode. Valid values 4 to 14
     *  @param int|null $value Value to set for the passcodeMinimumLength property.
    */
    public function setPasscodeMinimumLength(?int $value): void {
        $this->getBackingStore()->set('passcodeMinimumLength', $value);
    }

    /**
     * Sets the passcodeMinutesOfInactivityBeforeLock property value. Minutes of inactivity before a passcode is required.
     *  @param int|null $value Value to set for the passcodeMinutesOfInactivityBeforeLock property.
    */
    public function setPasscodeMinutesOfInactivityBeforeLock(?int $value): void {
        $this->getBackingStore()->set('passcodeMinutesOfInactivityBeforeLock', $value);
    }

    /**
     * Sets the passcodePreviousPasscodeBlockCount property value. Number of previous passcodes to block. Valid values 1 to 24
     *  @param int|null $value Value to set for the passcodePreviousPasscodeBlockCount property.
    */
    public function setPasscodePreviousPasscodeBlockCount(?int $value): void {
        $this->getBackingStore()->set('passcodePreviousPasscodeBlockCount', $value);
    }

    /**
     * Sets the passcodeRequired property value. Indicates whether or not to require a passcode.
     *  @param bool|null $value Value to set for the passcodeRequired property.
    */
    public function setPasscodeRequired(?bool $value): void {
        $this->getBackingStore()->set('passcodeRequired', $value);
    }

    /**
     * Sets the passcodeRequiredType property value. Possible values of required passwords.
     *  @param RequiredPasswordType|null $value Value to set for the passcodeRequiredType property.
    */
    public function setPasscodeRequiredType(?RequiredPasswordType $value): void {
        $this->getBackingStore()->set('passcodeRequiredType', $value);
    }

    /**
     * Sets the securityBlockJailbrokenDevices property value. Devices must not be jailbroken or rooted.
     *  @param bool|null $value Value to set for the securityBlockJailbrokenDevices property.
    */
    public function setSecurityBlockJailbrokenDevices(?bool $value): void {
        $this->getBackingStore()->set('securityBlockJailbrokenDevices', $value);
    }

}
