<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsInformationProtectionPolicy extends WindowsInformationProtection implements Parsable 
{
    /**
     * @var int|null $daysWithoutContactBeforeUnenroll Offline interval before app data is wiped (days)
    */
    private ?int $daysWithoutContactBeforeUnenroll = null;
    
    /**
     * @var string|null $mdmEnrollmentUrl Enrollment url for the MDM
    */
    private ?string $mdmEnrollmentUrl = null;
    
    /**
     * @var int|null $minutesOfInactivityBeforeDeviceLock Specifies the maximum amount of time (in minutes) allowed after the device is idle that will cause the device to become PIN or password locked.   Range is an integer X where 0 <= X <= 999.
    */
    private ?int $minutesOfInactivityBeforeDeviceLock = null;
    
    /**
     * @var int|null $numberOfPastPinsRemembered Integer value that specifies the number of past PINs that can be associated to a user account that can't be reused. The largest number you can configure for this policy setting is 50. The lowest number you can configure for this policy setting is 0. If this policy is set to 0, then storage of previous PINs is not required. This node was added in Windows 10, version 1511. Default is 0.
    */
    private ?int $numberOfPastPinsRemembered = null;
    
    /**
     * @var int|null $passwordMaximumAttemptCount The number of authentication failures allowed before the device will be wiped. A value of 0 disables device wipe functionality. Range is an integer X where 4 <= X <= 16 for desktop and 0 <= X <= 999 for mobile devices.
    */
    private ?int $passwordMaximumAttemptCount = null;
    
    /**
     * @var int|null $pinExpirationDays Integer value specifies the period of time (in days) that a PIN can be used before the system requires the user to change it. The largest number you can configure for this policy setting is 730. The lowest number you can configure for this policy setting is 0. If this policy is set to 0, then the user's PIN will never expire. This node was added in Windows 10, version 1511. Default is 0.
    */
    private ?int $pinExpirationDays = null;
    
    /**
     * @var WindowsInformationProtectionPinCharacterRequirements|null $pinLowercaseLetters Integer value that configures the use of lowercase letters in the Windows Hello for Business PIN. Default is NotAllow. Possible values are: notAllow, requireAtLeastOne, allow.
    */
    private ?WindowsInformationProtectionPinCharacterRequirements $pinLowercaseLetters = null;
    
    /**
     * @var int|null $pinMinimumLength Integer value that sets the minimum number of characters required for the PIN. Default value is 4. The lowest number you can configure for this policy setting is 4. The largest number you can configure must be less than the number configured in the Maximum PIN length policy setting or the number 127, whichever is the lowest.
    */
    private ?int $pinMinimumLength = null;
    
    /**
     * @var WindowsInformationProtectionPinCharacterRequirements|null $pinSpecialCharacters Integer value that configures the use of special characters in the Windows Hello for Business PIN. Valid special characters for Windows Hello for Business PIN gestures include: ! ' # $ % & ' ( )  + , - . / : ; < = > ? @ [ / ] ^  ` {
    */
    private ?WindowsInformationProtectionPinCharacterRequirements $pinSpecialCharacters = null;
    
    /**
     * @var WindowsInformationProtectionPinCharacterRequirements|null $pinUppercaseLetters Integer value that configures the use of uppercase letters in the Windows Hello for Business PIN. Default is NotAllow. Possible values are: notAllow, requireAtLeastOne, allow.
    */
    private ?WindowsInformationProtectionPinCharacterRequirements $pinUppercaseLetters = null;
    
    /**
     * @var bool|null $revokeOnMdmHandoffDisabled New property in RS2, pending documentation
    */
    private ?bool $revokeOnMdmHandoffDisabled = null;
    
    /**
     * @var bool|null $windowsHelloForBusinessBlocked Boolean value that sets Windows Hello for Business as a method for signing into Windows.
    */
    private ?bool $windowsHelloForBusinessBlocked = null;
    
    /**
     * Instantiates a new windowsInformationProtectionPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsInformationProtectionPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsInformationProtectionPolicy {
        return new WindowsInformationProtectionPolicy();
    }

    /**
     * Gets the daysWithoutContactBeforeUnenroll property value. Offline interval before app data is wiped (days)
     * @return int|null
    */
    public function getDaysWithoutContactBeforeUnenroll(): ?int {
        return $this->daysWithoutContactBeforeUnenroll;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'daysWithoutContactBeforeUnenroll' => function (ParseNode $n) use ($o) { $o->setDaysWithoutContactBeforeUnenroll($n->getIntegerValue()); },
            'mdmEnrollmentUrl' => function (ParseNode $n) use ($o) { $o->setMdmEnrollmentUrl($n->getStringValue()); },
            'minutesOfInactivityBeforeDeviceLock' => function (ParseNode $n) use ($o) { $o->setMinutesOfInactivityBeforeDeviceLock($n->getIntegerValue()); },
            'numberOfPastPinsRemembered' => function (ParseNode $n) use ($o) { $o->setNumberOfPastPinsRemembered($n->getIntegerValue()); },
            'passwordMaximumAttemptCount' => function (ParseNode $n) use ($o) { $o->setPasswordMaximumAttemptCount($n->getIntegerValue()); },
            'pinExpirationDays' => function (ParseNode $n) use ($o) { $o->setPinExpirationDays($n->getIntegerValue()); },
            'pinLowercaseLetters' => function (ParseNode $n) use ($o) { $o->setPinLowercaseLetters($n->getEnumValue(WindowsInformationProtectionPinCharacterRequirements::class)); },
            'pinMinimumLength' => function (ParseNode $n) use ($o) { $o->setPinMinimumLength($n->getIntegerValue()); },
            'pinSpecialCharacters' => function (ParseNode $n) use ($o) { $o->setPinSpecialCharacters($n->getEnumValue(WindowsInformationProtectionPinCharacterRequirements::class)); },
            'pinUppercaseLetters' => function (ParseNode $n) use ($o) { $o->setPinUppercaseLetters($n->getEnumValue(WindowsInformationProtectionPinCharacterRequirements::class)); },
            'revokeOnMdmHandoffDisabled' => function (ParseNode $n) use ($o) { $o->setRevokeOnMdmHandoffDisabled($n->getBooleanValue()); },
            'windowsHelloForBusinessBlocked' => function (ParseNode $n) use ($o) { $o->setWindowsHelloForBusinessBlocked($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the mdmEnrollmentUrl property value. Enrollment url for the MDM
     * @return string|null
    */
    public function getMdmEnrollmentUrl(): ?string {
        return $this->mdmEnrollmentUrl;
    }

    /**
     * Gets the minutesOfInactivityBeforeDeviceLock property value. Specifies the maximum amount of time (in minutes) allowed after the device is idle that will cause the device to become PIN or password locked.   Range is an integer X where 0 <= X <= 999.
     * @return int|null
    */
    public function getMinutesOfInactivityBeforeDeviceLock(): ?int {
        return $this->minutesOfInactivityBeforeDeviceLock;
    }

    /**
     * Gets the numberOfPastPinsRemembered property value. Integer value that specifies the number of past PINs that can be associated to a user account that can't be reused. The largest number you can configure for this policy setting is 50. The lowest number you can configure for this policy setting is 0. If this policy is set to 0, then storage of previous PINs is not required. This node was added in Windows 10, version 1511. Default is 0.
     * @return int|null
    */
    public function getNumberOfPastPinsRemembered(): ?int {
        return $this->numberOfPastPinsRemembered;
    }

    /**
     * Gets the passwordMaximumAttemptCount property value. The number of authentication failures allowed before the device will be wiped. A value of 0 disables device wipe functionality. Range is an integer X where 4 <= X <= 16 for desktop and 0 <= X <= 999 for mobile devices.
     * @return int|null
    */
    public function getPasswordMaximumAttemptCount(): ?int {
        return $this->passwordMaximumAttemptCount;
    }

    /**
     * Gets the pinExpirationDays property value. Integer value specifies the period of time (in days) that a PIN can be used before the system requires the user to change it. The largest number you can configure for this policy setting is 730. The lowest number you can configure for this policy setting is 0. If this policy is set to 0, then the user's PIN will never expire. This node was added in Windows 10, version 1511. Default is 0.
     * @return int|null
    */
    public function getPinExpirationDays(): ?int {
        return $this->pinExpirationDays;
    }

    /**
     * Gets the pinLowercaseLetters property value. Integer value that configures the use of lowercase letters in the Windows Hello for Business PIN. Default is NotAllow. Possible values are: notAllow, requireAtLeastOne, allow.
     * @return WindowsInformationProtectionPinCharacterRequirements|null
    */
    public function getPinLowercaseLetters(): ?WindowsInformationProtectionPinCharacterRequirements {
        return $this->pinLowercaseLetters;
    }

    /**
     * Gets the pinMinimumLength property value. Integer value that sets the minimum number of characters required for the PIN. Default value is 4. The lowest number you can configure for this policy setting is 4. The largest number you can configure must be less than the number configured in the Maximum PIN length policy setting or the number 127, whichever is the lowest.
     * @return int|null
    */
    public function getPinMinimumLength(): ?int {
        return $this->pinMinimumLength;
    }

    /**
     * Gets the pinSpecialCharacters property value. Integer value that configures the use of special characters in the Windows Hello for Business PIN. Valid special characters for Windows Hello for Business PIN gestures include: ! ' # $ % & ' ( )  + , - . / : ; < = > ? @ [ / ] ^  ` {
     * @return WindowsInformationProtectionPinCharacterRequirements|null
    */
    public function getPinSpecialCharacters(): ?WindowsInformationProtectionPinCharacterRequirements {
        return $this->pinSpecialCharacters;
    }

    /**
     * Gets the pinUppercaseLetters property value. Integer value that configures the use of uppercase letters in the Windows Hello for Business PIN. Default is NotAllow. Possible values are: notAllow, requireAtLeastOne, allow.
     * @return WindowsInformationProtectionPinCharacterRequirements|null
    */
    public function getPinUppercaseLetters(): ?WindowsInformationProtectionPinCharacterRequirements {
        return $this->pinUppercaseLetters;
    }

    /**
     * Gets the revokeOnMdmHandoffDisabled property value. New property in RS2, pending documentation
     * @return bool|null
    */
    public function getRevokeOnMdmHandoffDisabled(): ?bool {
        return $this->revokeOnMdmHandoffDisabled;
    }

    /**
     * Gets the windowsHelloForBusinessBlocked property value. Boolean value that sets Windows Hello for Business as a method for signing into Windows.
     * @return bool|null
    */
    public function getWindowsHelloForBusinessBlocked(): ?bool {
        return $this->windowsHelloForBusinessBlocked;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('daysWithoutContactBeforeUnenroll', $this->daysWithoutContactBeforeUnenroll);
        $writer->writeStringValue('mdmEnrollmentUrl', $this->mdmEnrollmentUrl);
        $writer->writeIntegerValue('minutesOfInactivityBeforeDeviceLock', $this->minutesOfInactivityBeforeDeviceLock);
        $writer->writeIntegerValue('numberOfPastPinsRemembered', $this->numberOfPastPinsRemembered);
        $writer->writeIntegerValue('passwordMaximumAttemptCount', $this->passwordMaximumAttemptCount);
        $writer->writeIntegerValue('pinExpirationDays', $this->pinExpirationDays);
        $writer->writeEnumValue('pinLowercaseLetters', $this->pinLowercaseLetters);
        $writer->writeIntegerValue('pinMinimumLength', $this->pinMinimumLength);
        $writer->writeEnumValue('pinSpecialCharacters', $this->pinSpecialCharacters);
        $writer->writeEnumValue('pinUppercaseLetters', $this->pinUppercaseLetters);
        $writer->writeBooleanValue('revokeOnMdmHandoffDisabled', $this->revokeOnMdmHandoffDisabled);
        $writer->writeBooleanValue('windowsHelloForBusinessBlocked', $this->windowsHelloForBusinessBlocked);
    }

    /**
     * Sets the daysWithoutContactBeforeUnenroll property value. Offline interval before app data is wiped (days)
     *  @param int|null $value Value to set for the daysWithoutContactBeforeUnenroll property.
    */
    public function setDaysWithoutContactBeforeUnenroll(?int $value ): void {
        $this->daysWithoutContactBeforeUnenroll = $value;
    }

    /**
     * Sets the mdmEnrollmentUrl property value. Enrollment url for the MDM
     *  @param string|null $value Value to set for the mdmEnrollmentUrl property.
    */
    public function setMdmEnrollmentUrl(?string $value ): void {
        $this->mdmEnrollmentUrl = $value;
    }

    /**
     * Sets the minutesOfInactivityBeforeDeviceLock property value. Specifies the maximum amount of time (in minutes) allowed after the device is idle that will cause the device to become PIN or password locked.   Range is an integer X where 0 <= X <= 999.
     *  @param int|null $value Value to set for the minutesOfInactivityBeforeDeviceLock property.
    */
    public function setMinutesOfInactivityBeforeDeviceLock(?int $value ): void {
        $this->minutesOfInactivityBeforeDeviceLock = $value;
    }

    /**
     * Sets the numberOfPastPinsRemembered property value. Integer value that specifies the number of past PINs that can be associated to a user account that can't be reused. The largest number you can configure for this policy setting is 50. The lowest number you can configure for this policy setting is 0. If this policy is set to 0, then storage of previous PINs is not required. This node was added in Windows 10, version 1511. Default is 0.
     *  @param int|null $value Value to set for the numberOfPastPinsRemembered property.
    */
    public function setNumberOfPastPinsRemembered(?int $value ): void {
        $this->numberOfPastPinsRemembered = $value;
    }

    /**
     * Sets the passwordMaximumAttemptCount property value. The number of authentication failures allowed before the device will be wiped. A value of 0 disables device wipe functionality. Range is an integer X where 4 <= X <= 16 for desktop and 0 <= X <= 999 for mobile devices.
     *  @param int|null $value Value to set for the passwordMaximumAttemptCount property.
    */
    public function setPasswordMaximumAttemptCount(?int $value ): void {
        $this->passwordMaximumAttemptCount = $value;
    }

    /**
     * Sets the pinExpirationDays property value. Integer value specifies the period of time (in days) that a PIN can be used before the system requires the user to change it. The largest number you can configure for this policy setting is 730. The lowest number you can configure for this policy setting is 0. If this policy is set to 0, then the user's PIN will never expire. This node was added in Windows 10, version 1511. Default is 0.
     *  @param int|null $value Value to set for the pinExpirationDays property.
    */
    public function setPinExpirationDays(?int $value ): void {
        $this->pinExpirationDays = $value;
    }

    /**
     * Sets the pinLowercaseLetters property value. Integer value that configures the use of lowercase letters in the Windows Hello for Business PIN. Default is NotAllow. Possible values are: notAllow, requireAtLeastOne, allow.
     *  @param WindowsInformationProtectionPinCharacterRequirements|null $value Value to set for the pinLowercaseLetters property.
    */
    public function setPinLowercaseLetters(?WindowsInformationProtectionPinCharacterRequirements $value ): void {
        $this->pinLowercaseLetters = $value;
    }

    /**
     * Sets the pinMinimumLength property value. Integer value that sets the minimum number of characters required for the PIN. Default value is 4. The lowest number you can configure for this policy setting is 4. The largest number you can configure must be less than the number configured in the Maximum PIN length policy setting or the number 127, whichever is the lowest.
     *  @param int|null $value Value to set for the pinMinimumLength property.
    */
    public function setPinMinimumLength(?int $value ): void {
        $this->pinMinimumLength = $value;
    }

    /**
     * Sets the pinSpecialCharacters property value. Integer value that configures the use of special characters in the Windows Hello for Business PIN. Valid special characters for Windows Hello for Business PIN gestures include: ! ' # $ % & ' ( )  + , - . / : ; < = > ? @ [ / ] ^  ` {
     *  @param WindowsInformationProtectionPinCharacterRequirements|null $value Value to set for the pinSpecialCharacters property.
    */
    public function setPinSpecialCharacters(?WindowsInformationProtectionPinCharacterRequirements $value ): void {
        $this->pinSpecialCharacters = $value;
    }

    /**
     * Sets the pinUppercaseLetters property value. Integer value that configures the use of uppercase letters in the Windows Hello for Business PIN. Default is NotAllow. Possible values are: notAllow, requireAtLeastOne, allow.
     *  @param WindowsInformationProtectionPinCharacterRequirements|null $value Value to set for the pinUppercaseLetters property.
    */
    public function setPinUppercaseLetters(?WindowsInformationProtectionPinCharacterRequirements $value ): void {
        $this->pinUppercaseLetters = $value;
    }

    /**
     * Sets the revokeOnMdmHandoffDisabled property value. New property in RS2, pending documentation
     *  @param bool|null $value Value to set for the revokeOnMdmHandoffDisabled property.
    */
    public function setRevokeOnMdmHandoffDisabled(?bool $value ): void {
        $this->revokeOnMdmHandoffDisabled = $value;
    }

    /**
     * Sets the windowsHelloForBusinessBlocked property value. Boolean value that sets Windows Hello for Business as a method for signing into Windows.
     *  @param bool|null $value Value to set for the windowsHelloForBusinessBlocked property.
    */
    public function setWindowsHelloForBusinessBlocked(?bool $value ): void {
        $this->windowsHelloForBusinessBlocked = $value;
    }

}
