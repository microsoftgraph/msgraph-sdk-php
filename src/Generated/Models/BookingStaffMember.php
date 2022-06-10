<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BookingStaffMember extends BookingStaffMemberBase implements Parsable 
{
    /**
     * @var bool|null $availabilityIsAffectedByPersonalCalendar True means that if the staff member is a Microsoft 365 user, the Bookings API would verify the staff member's availability in their personal calendar in Microsoft 365, before making a booking.
    */
    private ?bool $availabilityIsAffectedByPersonalCalendar = null;
    
    /**
     * @var string|null $displayName The name of the staff member, as displayed to customers. Required.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $emailAddress The email address of the staff member. This can be in the same Microsoft 365 tenant as the business, or in a different email domain. This email address can be used if the sendConfirmationsToOwner property is set to true in the scheduling policy of the business. Required.
    */
    private ?string $emailAddress = null;
    
    /**
     * @var BookingStaffRole|null $role The role of the staff member in the business. Possible values are: guest, administrator, viewer, externalGuest and unknownFutureValue. Required.
    */
    private ?BookingStaffRole $role = null;
    
    /**
     * @var string|null $timeZone The time zone of the staff member. For a list of possible values, see dateTimeTimeZone.
    */
    private ?string $timeZone = null;
    
    /**
     * @var bool|null $useBusinessHours True means the staff member's availability is as specified in the businessHours property of the business. False means the availability is determined by the staff member's workingHours property setting.
    */
    private ?bool $useBusinessHours = null;
    
    /**
     * @var array<BookingWorkHours>|null $workingHours The range of hours each day of the week that the staff member is available for booking. By default, they are initialized to be the same as the businessHours property of the business.
    */
    private ?array $workingHours = null;
    
    /**
     * Instantiates a new BookingStaffMember and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->availabilityIsAffectedByPersonalCalendar;
    }

    /**
     * Gets the displayName property value. The name of the staff member, as displayed to customers. Required.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the emailAddress property value. The email address of the staff member. This can be in the same Microsoft 365 tenant as the business, or in a different email domain. This email address can be used if the sendConfirmationsToOwner property is set to true in the scheduling policy of the business. Required.
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        return $this->emailAddress;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'availabilityIsAffectedByPersonalCalendar' => function (ParseNode $n) use ($o) { $o->setAvailabilityIsAffectedByPersonalCalendar($n->getBooleanValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'emailAddress' => function (ParseNode $n) use ($o) { $o->setEmailAddress($n->getStringValue()); },
            'role' => function (ParseNode $n) use ($o) { $o->setRole($n->getEnumValue(BookingStaffRole::class)); },
            'timeZone' => function (ParseNode $n) use ($o) { $o->setTimeZone($n->getStringValue()); },
            'useBusinessHours' => function (ParseNode $n) use ($o) { $o->setUseBusinessHours($n->getBooleanValue()); },
            'workingHours' => function (ParseNode $n) use ($o) { $o->setWorkingHours($n->getCollectionOfObjectValues(array(BookingWorkHours::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the role property value. The role of the staff member in the business. Possible values are: guest, administrator, viewer, externalGuest and unknownFutureValue. Required.
     * @return BookingStaffRole|null
    */
    public function getRole(): ?BookingStaffRole {
        return $this->role;
    }

    /**
     * Gets the timeZone property value. The time zone of the staff member. For a list of possible values, see dateTimeTimeZone.
     * @return string|null
    */
    public function getTimeZone(): ?string {
        return $this->timeZone;
    }

    /**
     * Gets the useBusinessHours property value. True means the staff member's availability is as specified in the businessHours property of the business. False means the availability is determined by the staff member's workingHours property setting.
     * @return bool|null
    */
    public function getUseBusinessHours(): ?bool {
        return $this->useBusinessHours;
    }

    /**
     * Gets the workingHours property value. The range of hours each day of the week that the staff member is available for booking. By default, they are initialized to be the same as the businessHours property of the business.
     * @return array<BookingWorkHours>|null
    */
    public function getWorkingHours(): ?array {
        return $this->workingHours;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('availabilityIsAffectedByPersonalCalendar', $this->availabilityIsAffectedByPersonalCalendar);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('emailAddress', $this->emailAddress);
        $writer->writeEnumValue('role', $this->role);
        $writer->writeStringValue('timeZone', $this->timeZone);
        $writer->writeBooleanValue('useBusinessHours', $this->useBusinessHours);
        $writer->writeCollectionOfObjectValues('workingHours', $this->workingHours);
    }

    /**
     * Sets the availabilityIsAffectedByPersonalCalendar property value. True means that if the staff member is a Microsoft 365 user, the Bookings API would verify the staff member's availability in their personal calendar in Microsoft 365, before making a booking.
     *  @param bool|null $value Value to set for the availabilityIsAffectedByPersonalCalendar property.
    */
    public function setAvailabilityIsAffectedByPersonalCalendar(?bool $value ): void {
        $this->availabilityIsAffectedByPersonalCalendar = $value;
    }

    /**
     * Sets the displayName property value. The name of the staff member, as displayed to customers. Required.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the emailAddress property value. The email address of the staff member. This can be in the same Microsoft 365 tenant as the business, or in a different email domain. This email address can be used if the sendConfirmationsToOwner property is set to true in the scheduling policy of the business. Required.
     *  @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value ): void {
        $this->emailAddress = $value;
    }

    /**
     * Sets the role property value. The role of the staff member in the business. Possible values are: guest, administrator, viewer, externalGuest and unknownFutureValue. Required.
     *  @param BookingStaffRole|null $value Value to set for the role property.
    */
    public function setRole(?BookingStaffRole $value ): void {
        $this->role = $value;
    }

    /**
     * Sets the timeZone property value. The time zone of the staff member. For a list of possible values, see dateTimeTimeZone.
     *  @param string|null $value Value to set for the timeZone property.
    */
    public function setTimeZone(?string $value ): void {
        $this->timeZone = $value;
    }

    /**
     * Sets the useBusinessHours property value. True means the staff member's availability is as specified in the businessHours property of the business. False means the availability is determined by the staff member's workingHours property setting.
     *  @param bool|null $value Value to set for the useBusinessHours property.
    */
    public function setUseBusinessHours(?bool $value ): void {
        $this->useBusinessHours = $value;
    }

    /**
     * Sets the workingHours property value. The range of hours each day of the week that the staff member is available for booking. By default, they are initialized to be the same as the businessHours property of the business.
     *  @param array<BookingWorkHours>|null $value Value to set for the workingHours property.
    */
    public function setWorkingHours(?array $value ): void {
        $this->workingHours = $value;
    }

}
