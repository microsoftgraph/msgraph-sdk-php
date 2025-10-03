<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Policy for Windows information protection without MDM
*/
class WindowsInformationProtectionPolicy extends WindowsInformationProtection implements Parsable 
{
    /**
     * Instantiates a new WindowsInformationProtectionPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsInformationProtectionPolicy');
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
        $val = $this->getBackingStore()->get('daysWithoutContactBeforeUnenroll');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'daysWithoutContactBeforeUnenroll'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'daysWithoutContactBeforeUnenroll' => fn(ParseNode $n) => $o->setDaysWithoutContactBeforeUnenroll($n->getIntegerValue()),
            'mdmEnrollmentUrl' => fn(ParseNode $n) => $o->setMdmEnrollmentUrl($n->getStringValue()),
            'minutesOfInactivityBeforeDeviceLock' => fn(ParseNode $n) => $o->setMinutesOfInactivityBeforeDeviceLock($n->getIntegerValue()),
            'numberOfPastPinsRemembered' => fn(ParseNode $n) => $o->setNumberOfPastPinsRemembered($n->getIntegerValue()),
            'passwordMaximumAttemptCount' => fn(ParseNode $n) => $o->setPasswordMaximumAttemptCount($n->getIntegerValue()),
            'pinExpirationDays' => fn(ParseNode $n) => $o->setPinExpirationDays($n->getIntegerValue()),
            'pinLowercaseLetters' => fn(ParseNode $n) => $o->setPinLowercaseLetters($n->getEnumValue(WindowsInformationProtectionPinCharacterRequirements::class)),
            'pinMinimumLength' => fn(ParseNode $n) => $o->setPinMinimumLength($n->getIntegerValue()),
            'pinSpecialCharacters' => fn(ParseNode $n) => $o->setPinSpecialCharacters($n->getEnumValue(WindowsInformationProtectionPinCharacterRequirements::class)),
            'pinUppercaseLetters' => fn(ParseNode $n) => $o->setPinUppercaseLetters($n->getEnumValue(WindowsInformationProtectionPinCharacterRequirements::class)),
            'revokeOnMdmHandoffDisabled' => fn(ParseNode $n) => $o->setRevokeOnMdmHandoffDisabled($n->getBooleanValue()),
            'windowsHelloForBusinessBlocked' => fn(ParseNode $n) => $o->setWindowsHelloForBusinessBlocked($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the mdmEnrollmentUrl property value. Enrollment url for the MDM
     * @return string|null
    */
    public function getMdmEnrollmentUrl(): ?string {
        $val = $this->getBackingStore()->get('mdmEnrollmentUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mdmEnrollmentUrl'");
    }

    /**
     * Gets the minutesOfInactivityBeforeDeviceLock property value. Specifies the maximum amount of time (in minutes) allowed after the device is idle that will cause the device to become PIN or password locked.   Range is an integer X where 0 <= X <= 999.
     * @return int|null
    */
    public function getMinutesOfInactivityBeforeDeviceLock(): ?int {
        $val = $this->getBackingStore()->get('minutesOfInactivityBeforeDeviceLock');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minutesOfInactivityBeforeDeviceLock'");
    }

    /**
     * Gets the numberOfPastPinsRemembered property value. Integer value that specifies the number of past PINs that can be associated to a user account that can't be reused. The largest number you can configure for this policy setting is 50. The lowest number you can configure for this policy setting is 0. If this policy is set to 0, then storage of previous PINs is not required. This node was added in Windows 10, version 1511. Default is 0.
     * @return int|null
    */
    public function getNumberOfPastPinsRemembered(): ?int {
        $val = $this->getBackingStore()->get('numberOfPastPinsRemembered');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberOfPastPinsRemembered'");
    }

    /**
     * Gets the passwordMaximumAttemptCount property value. The number of authentication failures allowed before the device will be wiped. A value of 0 disables device wipe functionality. Range is an integer X where 4 <= X <= 16 for desktop and 0 <= X <= 999 for mobile devices.
     * @return int|null
    */
    public function getPasswordMaximumAttemptCount(): ?int {
        $val = $this->getBackingStore()->get('passwordMaximumAttemptCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passwordMaximumAttemptCount'");
    }

    /**
     * Gets the pinExpirationDays property value. Integer value specifies the period of time (in days) that a PIN can be used before the system requires the user to change it. The largest number you can configure for this policy setting is 730. The lowest number you can configure for this policy setting is 0. If this policy is set to 0, then the user's PIN will never expire. This node was added in Windows 10, version 1511. Default is 0.
     * @return int|null
    */
    public function getPinExpirationDays(): ?int {
        $val = $this->getBackingStore()->get('pinExpirationDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinExpirationDays'");
    }

    /**
     * Gets the pinLowercaseLetters property value. Pin Character Requirements
     * @return WindowsInformationProtectionPinCharacterRequirements|null
    */
    public function getPinLowercaseLetters(): ?WindowsInformationProtectionPinCharacterRequirements {
        $val = $this->getBackingStore()->get('pinLowercaseLetters');
        if (is_null($val) || $val instanceof WindowsInformationProtectionPinCharacterRequirements) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinLowercaseLetters'");
    }

    /**
     * Gets the pinMinimumLength property value. Integer value that sets the minimum number of characters required for the PIN. Default value is 4. The lowest number you can configure for this policy setting is 4. The largest number you can configure must be less than the number configured in the Maximum PIN length policy setting or the number 127, whichever is the lowest.
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
     * Gets the pinSpecialCharacters property value. Pin Character Requirements
     * @return WindowsInformationProtectionPinCharacterRequirements|null
    */
    public function getPinSpecialCharacters(): ?WindowsInformationProtectionPinCharacterRequirements {
        $val = $this->getBackingStore()->get('pinSpecialCharacters');
        if (is_null($val) || $val instanceof WindowsInformationProtectionPinCharacterRequirements) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinSpecialCharacters'");
    }

    /**
     * Gets the pinUppercaseLetters property value. Pin Character Requirements
     * @return WindowsInformationProtectionPinCharacterRequirements|null
    */
    public function getPinUppercaseLetters(): ?WindowsInformationProtectionPinCharacterRequirements {
        $val = $this->getBackingStore()->get('pinUppercaseLetters');
        if (is_null($val) || $val instanceof WindowsInformationProtectionPinCharacterRequirements) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pinUppercaseLetters'");
    }

    /**
     * Gets the revokeOnMdmHandoffDisabled property value. New property in RS2, pending documentation
     * @return bool|null
    */
    public function getRevokeOnMdmHandoffDisabled(): ?bool {
        $val = $this->getBackingStore()->get('revokeOnMdmHandoffDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'revokeOnMdmHandoffDisabled'");
    }

    /**
     * Gets the windowsHelloForBusinessBlocked property value. Boolean value that sets Windows Hello for Business as a method for signing into Windows.
     * @return bool|null
    */
    public function getWindowsHelloForBusinessBlocked(): ?bool {
        $val = $this->getBackingStore()->get('windowsHelloForBusinessBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsHelloForBusinessBlocked'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('daysWithoutContactBeforeUnenroll', $this->getDaysWithoutContactBeforeUnenroll());
        $writer->writeStringValue('mdmEnrollmentUrl', $this->getMdmEnrollmentUrl());
        $writer->writeIntegerValue('minutesOfInactivityBeforeDeviceLock', $this->getMinutesOfInactivityBeforeDeviceLock());
        $writer->writeIntegerValue('numberOfPastPinsRemembered', $this->getNumberOfPastPinsRemembered());
        $writer->writeIntegerValue('passwordMaximumAttemptCount', $this->getPasswordMaximumAttemptCount());
        $writer->writeIntegerValue('pinExpirationDays', $this->getPinExpirationDays());
        $writer->writeEnumValue('pinLowercaseLetters', $this->getPinLowercaseLetters());
        $writer->writeIntegerValue('pinMinimumLength', $this->getPinMinimumLength());
        $writer->writeEnumValue('pinSpecialCharacters', $this->getPinSpecialCharacters());
        $writer->writeEnumValue('pinUppercaseLetters', $this->getPinUppercaseLetters());
        $writer->writeBooleanValue('revokeOnMdmHandoffDisabled', $this->getRevokeOnMdmHandoffDisabled());
        $writer->writeBooleanValue('windowsHelloForBusinessBlocked', $this->getWindowsHelloForBusinessBlocked());
    }

    /**
     * Sets the daysWithoutContactBeforeUnenroll property value. Offline interval before app data is wiped (days)
     * @param int|null $value Value to set for the daysWithoutContactBeforeUnenroll property.
    */
    public function setDaysWithoutContactBeforeUnenroll(?int $value): void {
        $this->getBackingStore()->set('daysWithoutContactBeforeUnenroll', $value);
    }

    /**
     * Sets the mdmEnrollmentUrl property value. Enrollment url for the MDM
     * @param string|null $value Value to set for the mdmEnrollmentUrl property.
    */
    public function setMdmEnrollmentUrl(?string $value): void {
        $this->getBackingStore()->set('mdmEnrollmentUrl', $value);
    }

    /**
     * Sets the minutesOfInactivityBeforeDeviceLock property value. Specifies the maximum amount of time (in minutes) allowed after the device is idle that will cause the device to become PIN or password locked.   Range is an integer X where 0 <= X <= 999.
     * @param int|null $value Value to set for the minutesOfInactivityBeforeDeviceLock property.
    */
    public function setMinutesOfInactivityBeforeDeviceLock(?int $value): void {
        $this->getBackingStore()->set('minutesOfInactivityBeforeDeviceLock', $value);
    }

    /**
     * Sets the numberOfPastPinsRemembered property value. Integer value that specifies the number of past PINs that can be associated to a user account that can't be reused. The largest number you can configure for this policy setting is 50. The lowest number you can configure for this policy setting is 0. If this policy is set to 0, then storage of previous PINs is not required. This node was added in Windows 10, version 1511. Default is 0.
     * @param int|null $value Value to set for the numberOfPastPinsRemembered property.
    */
    public function setNumberOfPastPinsRemembered(?int $value): void {
        $this->getBackingStore()->set('numberOfPastPinsRemembered', $value);
    }

    /**
     * Sets the passwordMaximumAttemptCount property value. The number of authentication failures allowed before the device will be wiped. A value of 0 disables device wipe functionality. Range is an integer X where 4 <= X <= 16 for desktop and 0 <= X <= 999 for mobile devices.
     * @param int|null $value Value to set for the passwordMaximumAttemptCount property.
    */
    public function setPasswordMaximumAttemptCount(?int $value): void {
        $this->getBackingStore()->set('passwordMaximumAttemptCount', $value);
    }

    /**
     * Sets the pinExpirationDays property value. Integer value specifies the period of time (in days) that a PIN can be used before the system requires the user to change it. The largest number you can configure for this policy setting is 730. The lowest number you can configure for this policy setting is 0. If this policy is set to 0, then the user's PIN will never expire. This node was added in Windows 10, version 1511. Default is 0.
     * @param int|null $value Value to set for the pinExpirationDays property.
    */
    public function setPinExpirationDays(?int $value): void {
        $this->getBackingStore()->set('pinExpirationDays', $value);
    }

    /**
     * Sets the pinLowercaseLetters property value. Pin Character Requirements
     * @param WindowsInformationProtectionPinCharacterRequirements|null $value Value to set for the pinLowercaseLetters property.
    */
    public function setPinLowercaseLetters(?WindowsInformationProtectionPinCharacterRequirements $value): void {
        $this->getBackingStore()->set('pinLowercaseLetters', $value);
    }

    /**
     * Sets the pinMinimumLength property value. Integer value that sets the minimum number of characters required for the PIN. Default value is 4. The lowest number you can configure for this policy setting is 4. The largest number you can configure must be less than the number configured in the Maximum PIN length policy setting or the number 127, whichever is the lowest.
     * @param int|null $value Value to set for the pinMinimumLength property.
    */
    public function setPinMinimumLength(?int $value): void {
        $this->getBackingStore()->set('pinMinimumLength', $value);
    }

    /**
     * Sets the pinSpecialCharacters property value. Pin Character Requirements
     * @param WindowsInformationProtectionPinCharacterRequirements|null $value Value to set for the pinSpecialCharacters property.
    */
    public function setPinSpecialCharacters(?WindowsInformationProtectionPinCharacterRequirements $value): void {
        $this->getBackingStore()->set('pinSpecialCharacters', $value);
    }

    /**
     * Sets the pinUppercaseLetters property value. Pin Character Requirements
     * @param WindowsInformationProtectionPinCharacterRequirements|null $value Value to set for the pinUppercaseLetters property.
    */
    public function setPinUppercaseLetters(?WindowsInformationProtectionPinCharacterRequirements $value): void {
        $this->getBackingStore()->set('pinUppercaseLetters', $value);
    }

    /**
     * Sets the revokeOnMdmHandoffDisabled property value. New property in RS2, pending documentation
     * @param bool|null $value Value to set for the revokeOnMdmHandoffDisabled property.
    */
    public function setRevokeOnMdmHandoffDisabled(?bool $value): void {
        $this->getBackingStore()->set('revokeOnMdmHandoffDisabled', $value);
    }

    /**
     * Sets the windowsHelloForBusinessBlocked property value. Boolean value that sets Windows Hello for Business as a method for signing into Windows.
     * @param bool|null $value Value to set for the windowsHelloForBusinessBlocked property.
    */
    public function setWindowsHelloForBusinessBlocked(?bool $value): void {
        $this->getBackingStore()->set('windowsHelloForBusinessBlocked', $value);
    }

}
