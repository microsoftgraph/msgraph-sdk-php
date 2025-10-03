<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Represents a staff member who provides services in a business.
*/
class BookingStaffMember extends BookingStaffMemberBase implements Parsable 
{
    /**
     * Instantiates a new BookingStaffMember and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.bookingStaffMember');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingStaffMember
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BookingStaffMember {
        return new BookingStaffMember();
    }

    /**
     * Gets the availabilityIsAffectedByPersonalCalendar property value. True means that if the staff member is a Microsoft 365 user, the Bookings API would verify the staff member's availability in their personal calendar in Microsoft 365, before making a booking.
     * @return bool|null
    */
    public function getAvailabilityIsAffectedByPersonalCalendar(): ?bool {
        $val = $this->getBackingStore()->get('availabilityIsAffectedByPersonalCalendar');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'availabilityIsAffectedByPersonalCalendar'");
    }

    /**
     * Gets the createdDateTime property value. The date, time, and time zone when the staff member was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the displayName property value. The name of the staff member, as displayed to customers. Required.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the emailAddress property value. The email address of the staff member. This email address can be in the same Microsoft 365 tenant as the business, or in a different email domain. This email address can be used if the sendConfirmationsToOwner property is set to true in the scheduling policy of the business. Required.
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        $val = $this->getBackingStore()->get('emailAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailAddress'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'availabilityIsAffectedByPersonalCalendar' => fn(ParseNode $n) => $o->setAvailabilityIsAffectedByPersonalCalendar($n->getBooleanValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'emailAddress' => fn(ParseNode $n) => $o->setEmailAddress($n->getStringValue()),
            'isEmailNotificationEnabled' => fn(ParseNode $n) => $o->setIsEmailNotificationEnabled($n->getBooleanValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'membershipStatus' => fn(ParseNode $n) => $o->setMembershipStatus($n->getEnumValue(BookingStaffMembershipStatus::class)),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(BookingStaffRole::class)),
            'timeZone' => fn(ParseNode $n) => $o->setTimeZone($n->getStringValue()),
            'useBusinessHours' => fn(ParseNode $n) => $o->setUseBusinessHours($n->getBooleanValue()),
            'workingHours' => fn(ParseNode $n) => $o->setWorkingHours($n->getCollectionOfObjectValues([BookingWorkHours::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isEmailNotificationEnabled property value. Indicates that a staff member is notified via email when a booking assigned to them is created or changed. The default value is true.
     * @return bool|null
    */
    public function getIsEmailNotificationEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isEmailNotificationEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEmailNotificationEnabled'");
    }

    /**
     * Gets the lastUpdatedDateTime property value. The date, time, and time zone when the staff member was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUpdatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUpdatedDateTime'");
    }

    /**
     * Gets the membershipStatus property value. The membershipStatus property
     * @return BookingStaffMembershipStatus|null
    */
    public function getMembershipStatus(): ?BookingStaffMembershipStatus {
        $val = $this->getBackingStore()->get('membershipStatus');
        if (is_null($val) || $val instanceof BookingStaffMembershipStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'membershipStatus'");
    }

    /**
     * Gets the role property value. The role property
     * @return BookingStaffRole|null
    */
    public function getRole(): ?BookingStaffRole {
        $val = $this->getBackingStore()->get('role');
        if (is_null($val) || $val instanceof BookingStaffRole) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'role'");
    }

    /**
     * Gets the timeZone property value. The time zone of the staff member. For a list of possible values, see dateTimeTimeZone.
     * @return string|null
    */
    public function getTimeZone(): ?string {
        $val = $this->getBackingStore()->get('timeZone');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeZone'");
    }

    /**
     * Gets the useBusinessHours property value. True means the staff member's availability is as specified in the businessHours property of the business. False means the availability is determined by the staff member's workingHours property setting.
     * @return bool|null
    */
    public function getUseBusinessHours(): ?bool {
        $val = $this->getBackingStore()->get('useBusinessHours');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'useBusinessHours'");
    }

    /**
     * Gets the workingHours property value. The range of hours each day of the week that the staff member is available for booking. By default, they're initialized to be the same as the businessHours property of the business.
     * @return array<BookingWorkHours>|null
    */
    public function getWorkingHours(): ?array {
        $val = $this->getBackingStore()->get('workingHours');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, BookingWorkHours::class);
            /** @var array<BookingWorkHours>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workingHours'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('availabilityIsAffectedByPersonalCalendar', $this->getAvailabilityIsAffectedByPersonalCalendar());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('emailAddress', $this->getEmailAddress());
        $writer->writeBooleanValue('isEmailNotificationEnabled', $this->getIsEmailNotificationEnabled());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeEnumValue('membershipStatus', $this->getMembershipStatus());
        $writer->writeEnumValue('role', $this->getRole());
        $writer->writeStringValue('timeZone', $this->getTimeZone());
        $writer->writeBooleanValue('useBusinessHours', $this->getUseBusinessHours());
        $writer->writeCollectionOfObjectValues('workingHours', $this->getWorkingHours());
    }

    /**
     * Sets the availabilityIsAffectedByPersonalCalendar property value. True means that if the staff member is a Microsoft 365 user, the Bookings API would verify the staff member's availability in their personal calendar in Microsoft 365, before making a booking.
     * @param bool|null $value Value to set for the availabilityIsAffectedByPersonalCalendar property.
    */
    public function setAvailabilityIsAffectedByPersonalCalendar(?bool $value): void {
        $this->getBackingStore()->set('availabilityIsAffectedByPersonalCalendar', $value);
    }

    /**
     * Sets the createdDateTime property value. The date, time, and time zone when the staff member was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. The name of the staff member, as displayed to customers. Required.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the emailAddress property value. The email address of the staff member. This email address can be in the same Microsoft 365 tenant as the business, or in a different email domain. This email address can be used if the sendConfirmationsToOwner property is set to true in the scheduling policy of the business. Required.
     * @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value): void {
        $this->getBackingStore()->set('emailAddress', $value);
    }

    /**
     * Sets the isEmailNotificationEnabled property value. Indicates that a staff member is notified via email when a booking assigned to them is created or changed. The default value is true.
     * @param bool|null $value Value to set for the isEmailNotificationEnabled property.
    */
    public function setIsEmailNotificationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEmailNotificationEnabled', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. The date, time, and time zone when the staff member was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the membershipStatus property value. The membershipStatus property
     * @param BookingStaffMembershipStatus|null $value Value to set for the membershipStatus property.
    */
    public function setMembershipStatus(?BookingStaffMembershipStatus $value): void {
        $this->getBackingStore()->set('membershipStatus', $value);
    }

    /**
     * Sets the role property value. The role property
     * @param BookingStaffRole|null $value Value to set for the role property.
    */
    public function setRole(?BookingStaffRole $value): void {
        $this->getBackingStore()->set('role', $value);
    }

    /**
     * Sets the timeZone property value. The time zone of the staff member. For a list of possible values, see dateTimeTimeZone.
     * @param string|null $value Value to set for the timeZone property.
    */
    public function setTimeZone(?string $value): void {
        $this->getBackingStore()->set('timeZone', $value);
    }

    /**
     * Sets the useBusinessHours property value. True means the staff member's availability is as specified in the businessHours property of the business. False means the availability is determined by the staff member's workingHours property setting.
     * @param bool|null $value Value to set for the useBusinessHours property.
    */
    public function setUseBusinessHours(?bool $value): void {
        $this->getBackingStore()->set('useBusinessHours', $value);
    }

    /**
     * Sets the workingHours property value. The range of hours each day of the week that the staff member is available for booking. By default, they're initialized to be the same as the businessHours property of the business.
     * @param array<BookingWorkHours>|null $value Value to set for the workingHours property.
    */
    public function setWorkingHours(?array $value): void {
        $this->getBackingStore()->set('workingHours', $value);
    }

}
