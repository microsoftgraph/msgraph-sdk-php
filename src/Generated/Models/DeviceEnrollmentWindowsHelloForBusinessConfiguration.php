<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceEnrollmentWindowsHelloForBusinessConfiguration extends DeviceEnrollmentConfiguration implements Parsable 
{
    /**
     * @var Enablement|null $enhancedBiometricsState Controls the ability to use the anti-spoofing features for facial recognition on devices which support it. If set to disabled, anti-spoofing features are not allowed. If set to Not Configured, the user can choose whether they want to use anti-spoofing. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $enhancedBiometricsState = null;
    
    /**
     * @var int|null $pinExpirationInDays Controls the period of time (in days) that a PIN can be used before the system requires the user to change it. This must be set between 0 and 730, inclusive. If set to 0, the user's PIN will never expire
    */
    private ?int $pinExpirationInDays = null;
    
    /**
     * @var WindowsHelloForBusinessPinUsage|null $pinLowercaseCharactersUsage Controls the ability to use lowercase letters in the Windows Hello for Business PIN.  Allowed permits the use of lowercase letter(s), whereas Required ensures they are present. If set to Not Allowed, lowercase letters will not be permitted. Possible values are: allowed, required, disallowed.
    */
    private ?WindowsHelloForBusinessPinUsage $pinLowercaseCharactersUsage = null;
    
    /**
     * @var int|null $pinMaximumLength Controls the maximum number of characters allowed for the Windows Hello for Business PIN. This value must be between 4 and 127, inclusive. This value must be greater than or equal to the value set for the minimum PIN.
    */
    private ?int $pinMaximumLength = null;
    
    /**
     * @var int|null $pinMinimumLength Controls the minimum number of characters required for the Windows Hello for Business PIN.  This value must be between 4 and 127, inclusive, and less than or equal to the value set for the maximum PIN.
    */
    private ?int $pinMinimumLength = null;
    
    /**
     * @var int|null $pinPreviousBlockCount Controls the ability to prevent users from using past PINs. This must be set between 0 and 50, inclusive, and the current PIN of the user is included in that count. If set to 0, previous PINs are not stored. PIN history is not preserved through a PIN reset.
    */
    private ?int $pinPreviousBlockCount = null;
    
    /**
     * @var WindowsHelloForBusinessPinUsage|null $pinSpecialCharactersUsage Controls the ability to use special characters in the Windows Hello for Business PIN.  Allowed permits the use of special character(s), whereas Required ensures they are present. If set to Not Allowed, special character(s) will not be permitted. Possible values are: allowed, required, disallowed.
    */
    private ?WindowsHelloForBusinessPinUsage $pinSpecialCharactersUsage = null;
    
    /**
     * @var WindowsHelloForBusinessPinUsage|null $pinUppercaseCharactersUsage Controls the ability to use uppercase letters in the Windows Hello for Business PIN.  Allowed permits the use of uppercase letter(s), whereas Required ensures they are present. If set to Not Allowed, uppercase letters will not be permitted. Possible values are: allowed, required, disallowed.
    */
    private ?WindowsHelloForBusinessPinUsage $pinUppercaseCharactersUsage = null;
    
    /**
     * @var bool|null $remotePassportEnabled Controls the use of Remote Windows Hello for Business. Remote Windows Hello for Business provides the ability for a portable, registered device to be usable as a companion for desktop authentication. The desktop must be Azure AD joined and the companion device must have a Windows Hello for Business PIN.
    */
    private ?bool $remotePassportEnabled = null;
    
    /**
     * @var bool|null $securityDeviceRequired Controls whether to require a Trusted Platform Module (TPM) for provisioning Windows Hello for Business. A TPM provides an additional security benefit in that data stored on it cannot be used on other devices. If set to False, all devices can provision Windows Hello for Business even if there is not a usable TPM.
    */
    private ?bool $securityDeviceRequired = null;
    
    /**
     * @var Enablement|null $state Controls whether to allow the device to be configured for Windows Hello for Business. If set to disabled, the user cannot provision Windows Hello for Business except on Azure Active Directory joined mobile phones if otherwise required. If set to Not Configured, Intune will not override client defaults. Possible values are: notConfigured, enabled, disabled.
    */
    private ?Enablement $state = null;
    
    /**
     * @var bool|null $unlockWithBiometricsEnabled Controls the use of biometric gestures, such as face and fingerprint, as an alternative to the Windows Hello for Business PIN.  If set to False, biometric gestures are not allowed. Users must still configure a PIN as a backup in case of failures.
    */
    private ?bool $unlockWithBiometricsEnabled = null;
    
    /**
     * Instantiates a new DeviceEnrollmentWindowsHelloForBusinessConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the enhancedBiometricsState property value. Controls the ability to use the anti-spoofing features for facial recognition on devices which support it. If set to disabled, anti-spoofing features are not allowed. If set to Not Configured, the user can choose whether they want to use anti-spoofing. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getEnhancedBiometricsState(): ?Enablement {
        return $this->enhancedBiometricsState;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enhancedBiometricsState' => function (ParseNode $n) use ($o) { $o->setEnhancedBiometricsState($n->getEnumValue(Enablement::class)); },
            'pinExpirationInDays' => function (ParseNode $n) use ($o) { $o->setPinExpirationInDays($n->getIntegerValue()); },
            'pinLowercaseCharactersUsage' => function (ParseNode $n) use ($o) { $o->setPinLowercaseCharactersUsage($n->getEnumValue(WindowsHelloForBusinessPinUsage::class)); },
            'pinMaximumLength' => function (ParseNode $n) use ($o) { $o->setPinMaximumLength($n->getIntegerValue()); },
            'pinMinimumLength' => function (ParseNode $n) use ($o) { $o->setPinMinimumLength($n->getIntegerValue()); },
            'pinPreviousBlockCount' => function (ParseNode $n) use ($o) { $o->setPinPreviousBlockCount($n->getIntegerValue()); },
            'pinSpecialCharactersUsage' => function (ParseNode $n) use ($o) { $o->setPinSpecialCharactersUsage($n->getEnumValue(WindowsHelloForBusinessPinUsage::class)); },
            'pinUppercaseCharactersUsage' => function (ParseNode $n) use ($o) { $o->setPinUppercaseCharactersUsage($n->getEnumValue(WindowsHelloForBusinessPinUsage::class)); },
            'remotePassportEnabled' => function (ParseNode $n) use ($o) { $o->setRemotePassportEnabled($n->getBooleanValue()); },
            'securityDeviceRequired' => function (ParseNode $n) use ($o) { $o->setSecurityDeviceRequired($n->getBooleanValue()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(Enablement::class)); },
            'unlockWithBiometricsEnabled' => function (ParseNode $n) use ($o) { $o->setUnlockWithBiometricsEnabled($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the pinExpirationInDays property value. Controls the period of time (in days) that a PIN can be used before the system requires the user to change it. This must be set between 0 and 730, inclusive. If set to 0, the user's PIN will never expire
     * @return int|null
    */
    public function getPinExpirationInDays(): ?int {
        return $this->pinExpirationInDays;
    }

    /**
     * Gets the pinLowercaseCharactersUsage property value. Controls the ability to use lowercase letters in the Windows Hello for Business PIN.  Allowed permits the use of lowercase letter(s), whereas Required ensures they are present. If set to Not Allowed, lowercase letters will not be permitted. Possible values are: allowed, required, disallowed.
     * @return WindowsHelloForBusinessPinUsage|null
    */
    public function getPinLowercaseCharactersUsage(): ?WindowsHelloForBusinessPinUsage {
        return $this->pinLowercaseCharactersUsage;
    }

    /**
     * Gets the pinMaximumLength property value. Controls the maximum number of characters allowed for the Windows Hello for Business PIN. This value must be between 4 and 127, inclusive. This value must be greater than or equal to the value set for the minimum PIN.
     * @return int|null
    */
    public function getPinMaximumLength(): ?int {
        return $this->pinMaximumLength;
    }

    /**
     * Gets the pinMinimumLength property value. Controls the minimum number of characters required for the Windows Hello for Business PIN.  This value must be between 4 and 127, inclusive, and less than or equal to the value set for the maximum PIN.
     * @return int|null
    */
    public function getPinMinimumLength(): ?int {
        return $this->pinMinimumLength;
    }

    /**
     * Gets the pinPreviousBlockCount property value. Controls the ability to prevent users from using past PINs. This must be set between 0 and 50, inclusive, and the current PIN of the user is included in that count. If set to 0, previous PINs are not stored. PIN history is not preserved through a PIN reset.
     * @return int|null
    */
    public function getPinPreviousBlockCount(): ?int {
        return $this->pinPreviousBlockCount;
    }

    /**
     * Gets the pinSpecialCharactersUsage property value. Controls the ability to use special characters in the Windows Hello for Business PIN.  Allowed permits the use of special character(s), whereas Required ensures they are present. If set to Not Allowed, special character(s) will not be permitted. Possible values are: allowed, required, disallowed.
     * @return WindowsHelloForBusinessPinUsage|null
    */
    public function getPinSpecialCharactersUsage(): ?WindowsHelloForBusinessPinUsage {
        return $this->pinSpecialCharactersUsage;
    }

    /**
     * Gets the pinUppercaseCharactersUsage property value. Controls the ability to use uppercase letters in the Windows Hello for Business PIN.  Allowed permits the use of uppercase letter(s), whereas Required ensures they are present. If set to Not Allowed, uppercase letters will not be permitted. Possible values are: allowed, required, disallowed.
     * @return WindowsHelloForBusinessPinUsage|null
    */
    public function getPinUppercaseCharactersUsage(): ?WindowsHelloForBusinessPinUsage {
        return $this->pinUppercaseCharactersUsage;
    }

    /**
     * Gets the remotePassportEnabled property value. Controls the use of Remote Windows Hello for Business. Remote Windows Hello for Business provides the ability for a portable, registered device to be usable as a companion for desktop authentication. The desktop must be Azure AD joined and the companion device must have a Windows Hello for Business PIN.
     * @return bool|null
    */
    public function getRemotePassportEnabled(): ?bool {
        return $this->remotePassportEnabled;
    }

    /**
     * Gets the securityDeviceRequired property value. Controls whether to require a Trusted Platform Module (TPM) for provisioning Windows Hello for Business. A TPM provides an additional security benefit in that data stored on it cannot be used on other devices. If set to False, all devices can provision Windows Hello for Business even if there is not a usable TPM.
     * @return bool|null
    */
    public function getSecurityDeviceRequired(): ?bool {
        return $this->securityDeviceRequired;
    }

    /**
     * Gets the state property value. Controls whether to allow the device to be configured for Windows Hello for Business. If set to disabled, the user cannot provision Windows Hello for Business except on Azure Active Directory joined mobile phones if otherwise required. If set to Not Configured, Intune will not override client defaults. Possible values are: notConfigured, enabled, disabled.
     * @return Enablement|null
    */
    public function getState(): ?Enablement {
        return $this->state;
    }

    /**
     * Gets the unlockWithBiometricsEnabled property value. Controls the use of biometric gestures, such as face and fingerprint, as an alternative to the Windows Hello for Business PIN.  If set to False, biometric gestures are not allowed. Users must still configure a PIN as a backup in case of failures.
     * @return bool|null
    */
    public function getUnlockWithBiometricsEnabled(): ?bool {
        return $this->unlockWithBiometricsEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('enhancedBiometricsState', $this->enhancedBiometricsState);
        $writer->writeIntegerValue('pinExpirationInDays', $this->pinExpirationInDays);
        $writer->writeEnumValue('pinLowercaseCharactersUsage', $this->pinLowercaseCharactersUsage);
        $writer->writeIntegerValue('pinMaximumLength', $this->pinMaximumLength);
        $writer->writeIntegerValue('pinMinimumLength', $this->pinMinimumLength);
        $writer->writeIntegerValue('pinPreviousBlockCount', $this->pinPreviousBlockCount);
        $writer->writeEnumValue('pinSpecialCharactersUsage', $this->pinSpecialCharactersUsage);
        $writer->writeEnumValue('pinUppercaseCharactersUsage', $this->pinUppercaseCharactersUsage);
        $writer->writeBooleanValue('remotePassportEnabled', $this->remotePassportEnabled);
        $writer->writeBooleanValue('securityDeviceRequired', $this->securityDeviceRequired);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeBooleanValue('unlockWithBiometricsEnabled', $this->unlockWithBiometricsEnabled);
    }

    /**
     * Sets the enhancedBiometricsState property value. Controls the ability to use the anti-spoofing features for facial recognition on devices which support it. If set to disabled, anti-spoofing features are not allowed. If set to Not Configured, the user can choose whether they want to use anti-spoofing. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the enhancedBiometricsState property.
    */
    public function setEnhancedBiometricsState(?Enablement $value ): void {
        $this->enhancedBiometricsState = $value;
    }

    /**
     * Sets the pinExpirationInDays property value. Controls the period of time (in days) that a PIN can be used before the system requires the user to change it. This must be set between 0 and 730, inclusive. If set to 0, the user's PIN will never expire
     *  @param int|null $value Value to set for the pinExpirationInDays property.
    */
    public function setPinExpirationInDays(?int $value ): void {
        $this->pinExpirationInDays = $value;
    }

    /**
     * Sets the pinLowercaseCharactersUsage property value. Controls the ability to use lowercase letters in the Windows Hello for Business PIN.  Allowed permits the use of lowercase letter(s), whereas Required ensures they are present. If set to Not Allowed, lowercase letters will not be permitted. Possible values are: allowed, required, disallowed.
     *  @param WindowsHelloForBusinessPinUsage|null $value Value to set for the pinLowercaseCharactersUsage property.
    */
    public function setPinLowercaseCharactersUsage(?WindowsHelloForBusinessPinUsage $value ): void {
        $this->pinLowercaseCharactersUsage = $value;
    }

    /**
     * Sets the pinMaximumLength property value. Controls the maximum number of characters allowed for the Windows Hello for Business PIN. This value must be between 4 and 127, inclusive. This value must be greater than or equal to the value set for the minimum PIN.
     *  @param int|null $value Value to set for the pinMaximumLength property.
    */
    public function setPinMaximumLength(?int $value ): void {
        $this->pinMaximumLength = $value;
    }

    /**
     * Sets the pinMinimumLength property value. Controls the minimum number of characters required for the Windows Hello for Business PIN.  This value must be between 4 and 127, inclusive, and less than or equal to the value set for the maximum PIN.
     *  @param int|null $value Value to set for the pinMinimumLength property.
    */
    public function setPinMinimumLength(?int $value ): void {
        $this->pinMinimumLength = $value;
    }

    /**
     * Sets the pinPreviousBlockCount property value. Controls the ability to prevent users from using past PINs. This must be set between 0 and 50, inclusive, and the current PIN of the user is included in that count. If set to 0, previous PINs are not stored. PIN history is not preserved through a PIN reset.
     *  @param int|null $value Value to set for the pinPreviousBlockCount property.
    */
    public function setPinPreviousBlockCount(?int $value ): void {
        $this->pinPreviousBlockCount = $value;
    }

    /**
     * Sets the pinSpecialCharactersUsage property value. Controls the ability to use special characters in the Windows Hello for Business PIN.  Allowed permits the use of special character(s), whereas Required ensures they are present. If set to Not Allowed, special character(s) will not be permitted. Possible values are: allowed, required, disallowed.
     *  @param WindowsHelloForBusinessPinUsage|null $value Value to set for the pinSpecialCharactersUsage property.
    */
    public function setPinSpecialCharactersUsage(?WindowsHelloForBusinessPinUsage $value ): void {
        $this->pinSpecialCharactersUsage = $value;
    }

    /**
     * Sets the pinUppercaseCharactersUsage property value. Controls the ability to use uppercase letters in the Windows Hello for Business PIN.  Allowed permits the use of uppercase letter(s), whereas Required ensures they are present. If set to Not Allowed, uppercase letters will not be permitted. Possible values are: allowed, required, disallowed.
     *  @param WindowsHelloForBusinessPinUsage|null $value Value to set for the pinUppercaseCharactersUsage property.
    */
    public function setPinUppercaseCharactersUsage(?WindowsHelloForBusinessPinUsage $value ): void {
        $this->pinUppercaseCharactersUsage = $value;
    }

    /**
     * Sets the remotePassportEnabled property value. Controls the use of Remote Windows Hello for Business. Remote Windows Hello for Business provides the ability for a portable, registered device to be usable as a companion for desktop authentication. The desktop must be Azure AD joined and the companion device must have a Windows Hello for Business PIN.
     *  @param bool|null $value Value to set for the remotePassportEnabled property.
    */
    public function setRemotePassportEnabled(?bool $value ): void {
        $this->remotePassportEnabled = $value;
    }

    /**
     * Sets the securityDeviceRequired property value. Controls whether to require a Trusted Platform Module (TPM) for provisioning Windows Hello for Business. A TPM provides an additional security benefit in that data stored on it cannot be used on other devices. If set to False, all devices can provision Windows Hello for Business even if there is not a usable TPM.
     *  @param bool|null $value Value to set for the securityDeviceRequired property.
    */
    public function setSecurityDeviceRequired(?bool $value ): void {
        $this->securityDeviceRequired = $value;
    }

    /**
     * Sets the state property value. Controls whether to allow the device to be configured for Windows Hello for Business. If set to disabled, the user cannot provision Windows Hello for Business except on Azure Active Directory joined mobile phones if otherwise required. If set to Not Configured, Intune will not override client defaults. Possible values are: notConfigured, enabled, disabled.
     *  @param Enablement|null $value Value to set for the state property.
    */
    public function setState(?Enablement $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the unlockWithBiometricsEnabled property value. Controls the use of biometric gestures, such as face and fingerprint, as an alternative to the Windows Hello for Business PIN.  If set to False, biometric gestures are not allowed. Users must still configure a PIN as a backup in case of failures.
     *  @param bool|null $value Value to set for the unlockWithBiometricsEnabled property.
    */
    public function setUnlockWithBiometricsEnabled(?bool $value ): void {
        $this->unlockWithBiometricsEnabled = $value;
    }

}
