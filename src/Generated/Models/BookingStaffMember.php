<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

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
        return $this->getBackingStore()->get('availabilityIsAffectedByPersonalCalendar');
    }

    /**
     * Gets the displayName property value. The name of the staff member, as displayed to customers. Required.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the emailAddress property value. The email address of the staff member. This can be in the same Microsoft 365 tenant as the business, or in a different email domain. This email address can be used if the sendConfirmationsToOwner property is set to true in the scheduling policy of the business. Required.
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        return $this->getBackingStore()->get('emailAddress');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'availabilityIsAffectedByPersonalCalendar' => fn(ParseNode $n) => $o->setAvailabilityIsAffectedByPersonalCalendar($n->getBooleanValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'emailAddress' => fn(ParseNode $n) => $o->setEmailAddress($n->getStringValue()),
            'isEmailNotificationEnabled' => fn(ParseNode $n) => $o->setIsEmailNotificationEnabled($n->getBooleanValue()),
            'role' => fn(ParseNode $n) => $o->setRole($n->getEnumValue(BookingStaffRole::class)),
            'timeZone' => fn(ParseNode $n) => $o->setTimeZone($n->getStringValue()),
            'useBusinessHours' => fn(ParseNode $n) => $o->setUseBusinessHours($n->getBooleanValue()),
            'workingHours' => fn(ParseNode $n) => $o->setWorkingHours($n->getCollectionOfObjectValues([BookingWorkHours::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isEmailNotificationEnabled property value. True indicates that a staff member will be notified via email when a booking assigned to them is created or changed.
     * @return bool|null
    */
    public function getIsEmailNotificationEnabled(): ?bool {
        return $this->getBackingStore()->get('isEmailNotificationEnabled');
    }

    /**
     * Gets the role property value. The role property
     * @return BookingStaffRole|null
    */
    public function getRole(): ?BookingStaffRole {
        return $this->getBackingStore()->get('role');
    }

    /**
     * Gets the timeZone property value. The time zone of the staff member. For a list of possible values, see dateTimeTimeZone.
     * @return string|null
    */
    public function getTimeZone(): ?string {
        return $this->getBackingStore()->get('timeZone');
    }

    /**
     * Gets the useBusinessHours property value. True means the staff member's availability is as specified in the businessHours property of the business. False means the availability is determined by the staff member's workingHours property setting.
     * @return bool|null
    */
    public function getUseBusinessHours(): ?bool {
        return $this->getBackingStore()->get('useBusinessHours');
    }

    /**
     * Gets the workingHours property value. The range of hours each day of the week that the staff member is available for booking. By default, they are initialized to be the same as the businessHours property of the business.
     * @return array<BookingWorkHours>|null
    */
    public function getWorkingHours(): ?array {
        return $this->getBackingStore()->get('workingHours');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('availabilityIsAffectedByPersonalCalendar', $this->getAvailabilityIsAffectedByPersonalCalendar());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('emailAddress', $this->getEmailAddress());
        $writer->writeBooleanValue('isEmailNotificationEnabled', $this->getIsEmailNotificationEnabled());
        $writer->writeEnumValue('role', $this->getRole());
        $writer->writeStringValue('timeZone', $this->getTimeZone());
        $writer->writeBooleanValue('useBusinessHours', $this->getUseBusinessHours());
        $writer->writeCollectionOfObjectValues('workingHours', $this->getWorkingHours());
    }

    /**
     * Sets the availabilityIsAffectedByPersonalCalendar property value. True means that if the staff member is a Microsoft 365 user, the Bookings API would verify the staff member's availability in their personal calendar in Microsoft 365, before making a booking.
     *  @param bool|null $value Value to set for the availabilityIsAffectedByPersonalCalendar property.
    */
    public function setAvailabilityIsAffectedByPersonalCalendar(?bool $value): void {
        $this->getBackingStore()->set('availabilityIsAffectedByPersonalCalendar', $value);
    }

    /**
     * Sets the displayName property value. The name of the staff member, as displayed to customers. Required.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the emailAddress property value. The email address of the staff member. This can be in the same Microsoft 365 tenant as the business, or in a different email domain. This email address can be used if the sendConfirmationsToOwner property is set to true in the scheduling policy of the business. Required.
     *  @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value): void {
        $this->getBackingStore()->set('emailAddress', $value);
    }

    /**
     * Sets the isEmailNotificationEnabled property value. True indicates that a staff member will be notified via email when a booking assigned to them is created or changed.
     *  @param bool|null $value Value to set for the isEmailNotificationEnabled property.
    */
    public function setIsEmailNotificationEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEmailNotificationEnabled', $value);
    }

    /**
     * Sets the role property value. The role property
     *  @param BookingStaffRole|null $value Value to set for the role property.
    */
    public function setRole(?BookingStaffRole $value): void {
        $this->getBackingStore()->set('role', $value);
    }

    /**
     * Sets the timeZone property value. The time zone of the staff member. For a list of possible values, see dateTimeTimeZone.
     *  @param string|null $value Value to set for the timeZone property.
    */
    public function setTimeZone(?string $value): void {
        $this->getBackingStore()->set('timeZone', $value);
    }

    /**
     * Sets the useBusinessHours property value. True means the staff member's availability is as specified in the businessHours property of the business. False means the availability is determined by the staff member's workingHours property setting.
     *  @param bool|null $value Value to set for the useBusinessHours property.
    */
    public function setUseBusinessHours(?bool $value): void {
        $this->getBackingStore()->set('useBusinessHours', $value);
    }

    /**
     * Sets the workingHours property value. The range of hours each day of the week that the staff member is available for booking. By default, they are initialized to be the same as the businessHours property of the business.
     *  @param array<BookingWorkHours>|null $value Value to set for the workingHours property.
    */
    public function setWorkingHours(?array $value): void {
        $this->getBackingStore()->set('workingHours', $value);
    }

}
