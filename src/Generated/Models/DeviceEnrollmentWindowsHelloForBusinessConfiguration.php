<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Windows Hello for Business settings lets users access their devices using a gesture, such as biometric authentication, or a PIN. Configure settings for enrolled Windows 10, Windows 10 Mobile and later.
*/
class DeviceEnrollmentWindowsHelloForBusinessConfiguration extends DeviceEnrollmentConfiguration implements Parsable 
{
    /**
     * Instantiates a new deviceEnrollmentWindowsHelloForBusinessConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceEnrollmentWindowsHelloForBusinessConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceEnrollmentWindowsHelloForBusinessConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceEnrollmentWindowsHelloForBusinessConfiguration {
        return new DeviceEnrollmentWindowsHelloForBusinessConfiguration();
    }

    /**
     * Gets the enhancedBiometricsState property value. Possible values of a property
     * @return Enablement|null
    */
    public function getEnhancedBiometricsState(): ?Enablement {
        $val = $this->getBackingStore()->get('enhancedBiometricsState');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enhancedBiometricsState'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enhancedBiometricsState' => fn(ParseNode $n) => $o->setEnhancedBiometricsState($n->getEnumValue(Enablement::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'pinExpirationInDays' => fn(ParseNode $n) => $o->setPinExpirationInDays($n->getIntegerValue()),
            'pinLowercaseCharactersUsage' => fn(ParseNode $n) => $o->setPinLowercaseCharactersUsage($n->getEnumValue(WindowsHelloForBusinessPinUsage::class)),
            'pinMaximumLength' => fn(ParseNode $n) => $o->setPinMaximumLength($n->getIntegerValue()),
            'pinMinimumLength' => fn(ParseNode $n) => $o->setPinMinimumLength($n->getIntegerValue()),
            'pinPreviousBlockCount' => fn(ParseNode $n) => $o->setPinPreviousBlockCount($n->getIntegerValue()),
            'pinSpecialCharactersUsage' => fn(ParseNode $n) => $o->setPinSpecialCharactersUsage($n->getEnumValue(WindowsHelloForBusinessPinUsage::class)),
            'pinUppercaseCharactersUsage' => fn(ParseNode $n) => $o->setPinUppercaseCharactersUsage($n->getEnumValue(WindowsHelloForBusinessPinUsage::class)),
            'remotePassportEnabled' => fn(ParseNode $n) => $o->setRemotePassportEnabled($n->getBooleanValue()),
            'securityDeviceRequired' => fn(ParseNode $n) => $o->setSecurityDeviceRequired($n->getBooleanValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(Enablement::class)),
            'unlockWithBiometricsEnabled' => fn(ParseNode $n) => $o->setUnlockWithBiometricsEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the pinExpirationInDays property value. Controls the period of time (in days) that a PIN can be used before the system requires the user to change it. This must be set between 0 and 730, inclusive. If set to 0, the user's PIN will never expire
     * @return int|null
    */
    public function getPinExpirationInDays(): ?int {
        $val = $this->getBackingStore()->get('pinExpirationInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinExpirationInDays'");
    }

    /**
     * Gets the pinLowercaseCharactersUsage property value. Windows Hello for Business pin usage options
     * @return WindowsHelloForBusinessPinUsage|null
    */
    public function getPinLowercaseCharactersUsage(): ?WindowsHelloForBusinessPinUsage {
        $val = $this->getBackingStore()->get('pinLowercaseCharactersUsage');
        if (is_null($val) || $val instanceof WindowsHelloForBusinessPinUsage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinLowercaseCharactersUsage'");
    }

    /**
     * Gets the pinMaximumLength property value. Controls the maximum number of characters allowed for the Windows Hello for Business PIN. This value must be between 4 and 127, inclusive. This value must be greater than or equal to the value set for the minimum PIN.
     * @return int|null
    */
    public function getPinMaximumLength(): ?int {
        $val = $this->getBackingStore()->get('pinMaximumLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinMaximumLength'");
    }

    /**
     * Gets the pinMinimumLength property value. Controls the minimum number of characters required for the Windows Hello for Business PIN.  This value must be between 4 and 127, inclusive, and less than or equal to the value set for the maximum PIN.
     * @return int|null
    */
    public function getPinMinimumLength(): ?int {
        $val = $this->getBackingStore()->get('pinMinimumLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinMinimumLength'");
    }

    /**
     * Gets the pinPreviousBlockCount property value. Controls the ability to prevent users from using past PINs. This must be set between 0 and 50, inclusive, and the current PIN of the user is included in that count. If set to 0, previous PINs are not stored. PIN history is not preserved through a PIN reset.
     * @return int|null
    */
    public function getPinPreviousBlockCount(): ?int {
        $val = $this->getBackingStore()->get('pinPreviousBlockCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinPreviousBlockCount'");
    }

    /**
     * Gets the pinSpecialCharactersUsage property value. Windows Hello for Business pin usage options
     * @return WindowsHelloForBusinessPinUsage|null
    */
    public function getPinSpecialCharactersUsage(): ?WindowsHelloForBusinessPinUsage {
        $val = $this->getBackingStore()->get('pinSpecialCharactersUsage');
        if (is_null($val) || $val instanceof WindowsHelloForBusinessPinUsage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinSpecialCharactersUsage'");
    }

    /**
     * Gets the pinUppercaseCharactersUsage property value. Windows Hello for Business pin usage options
     * @return WindowsHelloForBusinessPinUsage|null
    */
    public function getPinUppercaseCharactersUsage(): ?WindowsHelloForBusinessPinUsage {
        $val = $this->getBackingStore()->get('pinUppercaseCharactersUsage');
        if (is_null($val) || $val instanceof WindowsHelloForBusinessPinUsage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinUppercaseCharactersUsage'");
    }

    /**
     * Gets the remotePassportEnabled property value. Controls the use of Remote Windows Hello for Business. Remote Windows Hello for Business provides the ability for a portable, registered device to be usable as a companion for desktop authentication. The desktop must be Azure AD joined and the companion device must have a Windows Hello for Business PIN.
     * @return bool|null
    */
    public function getRemotePassportEnabled(): ?bool {
        $val = $this->getBackingStore()->get('remotePassportEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remotePassportEnabled'");
    }

    /**
     * Gets the securityDeviceRequired property value. Controls whether to require a Trusted Platform Module (TPM) for provisioning Windows Hello for Business. A TPM provides an additional security benefit in that data stored on it cannot be used on other devices. If set to False, all devices can provision Windows Hello for Business even if there is not a usable TPM.
     * @return bool|null
    */
    public function getSecurityDeviceRequired(): ?bool {
        $val = $this->getBackingStore()->get('securityDeviceRequired');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'securityDeviceRequired'");
    }

    /**
     * Gets the state property value. Possible values of a property
     * @return Enablement|null
    */
    public function getState(): ?Enablement {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof Enablement) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the unlockWithBiometricsEnabled property value. Controls the use of biometric gestures, such as face and fingerprint, as an alternative to the Windows Hello for Business PIN.  If set to False, biometric gestures are not allowed. Users must still configure a PIN as a backup in case of failures.
     * @return bool|null
    */
    public function getUnlockWithBiometricsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('unlockWithBiometricsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unlockWithBiometricsEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('enhancedBiometricsState', $this->getEnhancedBiometricsState());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('pinExpirationInDays', $this->getPinExpirationInDays());
        $writer->writeEnumValue('pinLowercaseCharactersUsage', $this->getPinLowercaseCharactersUsage());
        $writer->writeIntegerValue('pinMaximumLength', $this->getPinMaximumLength());
        $writer->writeIntegerValue('pinMinimumLength', $this->getPinMinimumLength());
        $writer->writeIntegerValue('pinPreviousBlockCount', $this->getPinPreviousBlockCount());
        $writer->writeEnumValue('pinSpecialCharactersUsage', $this->getPinSpecialCharactersUsage());
        $writer->writeEnumValue('pinUppercaseCharactersUsage', $this->getPinUppercaseCharactersUsage());
        $writer->writeBooleanValue('remotePassportEnabled', $this->getRemotePassportEnabled());
        $writer->writeBooleanValue('securityDeviceRequired', $this->getSecurityDeviceRequired());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeBooleanValue('unlockWithBiometricsEnabled', $this->getUnlockWithBiometricsEnabled());
    }

    /**
     * Sets the enhancedBiometricsState property value. Possible values of a property
     * @param Enablement|null $value Value to set for the enhancedBiometricsState property.
    */
    public function setEnhancedBiometricsState(?Enablement $value): void {
        $this->getBackingStore()->set('enhancedBiometricsState', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the pinExpirationInDays property value. Controls the period of time (in days) that a PIN can be used before the system requires the user to change it. This must be set between 0 and 730, inclusive. If set to 0, the user's PIN will never expire
     * @param int|null $value Value to set for the pinExpirationInDays property.
    */
    public function setPinExpirationInDays(?int $value): void {
        $this->getBackingStore()->set('pinExpirationInDays', $value);
    }

    /**
     * Sets the pinLowercaseCharactersUsage property value. Windows Hello for Business pin usage options
     * @param WindowsHelloForBusinessPinUsage|null $value Value to set for the pinLowercaseCharactersUsage property.
    */
    public function setPinLowercaseCharactersUsage(?WindowsHelloForBusinessPinUsage $value): void {
        $this->getBackingStore()->set('pinLowercaseCharactersUsage', $value);
    }

    /**
     * Sets the pinMaximumLength property value. Controls the maximum number of characters allowed for the Windows Hello for Business PIN. This value must be between 4 and 127, inclusive. This value must be greater than or equal to the value set for the minimum PIN.
     * @param int|null $value Value to set for the pinMaximumLength property.
    */
    public function setPinMaximumLength(?int $value): void {
        $this->getBackingStore()->set('pinMaximumLength', $value);
    }

    /**
     * Sets the pinMinimumLength property value. Controls the minimum number of characters required for the Windows Hello for Business PIN.  This value must be between 4 and 127, inclusive, and less than or equal to the value set for the maximum PIN.
     * @param int|null $value Value to set for the pinMinimumLength property.
    */
    public function setPinMinimumLength(?int $value): void {
        $this->getBackingStore()->set('pinMinimumLength', $value);
    }

    /**
     * Sets the pinPreviousBlockCount property value. Controls the ability to prevent users from using past PINs. This must be set between 0 and 50, inclusive, and the current PIN of the user is included in that count. If set to 0, previous PINs are not stored. PIN history is not preserved through a PIN reset.
     * @param int|null $value Value to set for the pinPreviousBlockCount property.
    */
    public function setPinPreviousBlockCount(?int $value): void {
        $this->getBackingStore()->set('pinPreviousBlockCount', $value);
    }

    /**
     * Sets the pinSpecialCharactersUsage property value. Windows Hello for Business pin usage options
     * @param WindowsHelloForBusinessPinUsage|null $value Value to set for the pinSpecialCharactersUsage property.
    */
    public function setPinSpecialCharactersUsage(?WindowsHelloForBusinessPinUsage $value): void {
        $this->getBackingStore()->set('pinSpecialCharactersUsage', $value);
    }

    /**
     * Sets the pinUppercaseCharactersUsage property value. Windows Hello for Business pin usage options
     * @param WindowsHelloForBusinessPinUsage|null $value Value to set for the pinUppercaseCharactersUsage property.
    */
    public function setPinUppercaseCharactersUsage(?WindowsHelloForBusinessPinUsage $value): void {
        $this->getBackingStore()->set('pinUppercaseCharactersUsage', $value);
    }

    /**
     * Sets the remotePassportEnabled property value. Controls the use of Remote Windows Hello for Business. Remote Windows Hello for Business provides the ability for a portable, registered device to be usable as a companion for desktop authentication. The desktop must be Azure AD joined and the companion device must have a Windows Hello for Business PIN.
     * @param bool|null $value Value to set for the remotePassportEnabled property.
    */
    public function setRemotePassportEnabled(?bool $value): void {
        $this->getBackingStore()->set('remotePassportEnabled', $value);
    }

    /**
     * Sets the securityDeviceRequired property value. Controls whether to require a Trusted Platform Module (TPM) for provisioning Windows Hello for Business. A TPM provides an additional security benefit in that data stored on it cannot be used on other devices. If set to False, all devices can provision Windows Hello for Business even if there is not a usable TPM.
     * @param bool|null $value Value to set for the securityDeviceRequired property.
    */
    public function setSecurityDeviceRequired(?bool $value): void {
        $this->getBackingStore()->set('securityDeviceRequired', $value);
    }

    /**
     * Sets the state property value. Possible values of a property
     * @param Enablement|null $value Value to set for the state property.
    */
    public function setState(?Enablement $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the unlockWithBiometricsEnabled property value. Controls the use of biometric gestures, such as face and fingerprint, as an alternative to the Windows Hello for Business PIN.  If set to False, biometric gestures are not allowed. Users must still configure a PIN as a backup in case of failures.
     * @param bool|null $value Value to set for the unlockWithBiometricsEnabled property.
    */
    public function setUnlockWithBiometricsEnabled(?bool $value): void {
        $this->getBackingStore()->set('unlockWithBiometricsEnabled', $value);
    }

}
