<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Represents a booked appointment of a service by a customer in a business.
*/
class BookingAppointment extends Entity implements Parsable 
{
    /**
     * Instantiates a new BookingAppointment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingAppointment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BookingAppointment {
        return new BookingAppointment();
    }

    /**
     * Gets the additionalInformation property value. Additional information that is sent to the customer when an appointment is confirmed.
     * @return string|null
    */
    public function getAdditionalInformation(): ?string {
        $val = $this->getBackingStore()->get('additionalInformation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalInformation'");
    }

    /**
     * Gets the anonymousJoinWebUrl property value. The URL of the meeting to join anonymously.
     * @return string|null
    */
    public function getAnonymousJoinWebUrl(): ?string {
        $val = $this->getBackingStore()->get('anonymousJoinWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'anonymousJoinWebUrl'");
    }

    /**
     * Gets the customers property value. A collection of customer properties for an appointment. An appointment contains a list of customer information and each unit will indicate the properties of a customer who is part of that appointment. Optional.
     * @return array<BookingCustomerInformationBase>|null
    */
    public function getCustomers(): ?array {
        $val = $this->getBackingStore()->get('customers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, BookingCustomerInformationBase::class);
            /** @var array<BookingCustomerInformationBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customers'");
    }

    /**
     * Gets the customerTimeZone property value. The time zone of the customer. For a list of possible values, see dateTimeTimeZone.
     * @return string|null
    */
    public function getCustomerTimeZone(): ?string {
        $val = $this->getBackingStore()->get('customerTimeZone');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customerTimeZone'");
    }

    /**
     * Gets the duration property value. The length of the appointment, denoted in ISO8601 format.
     * @return DateInterval|null
    */
    public function getDuration(): ?DateInterval {
        $val = $this->getBackingStore()->get('duration');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'duration'");
    }

    /**
     * Gets the endDateTime property value. The endDateTime property
     * @return DateTimeTimeZone|null
    */
    public function getEndDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('endDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalInformation' => fn(ParseNode $n) => $o->setAdditionalInformation($n->getStringValue()),
            'anonymousJoinWebUrl' => fn(ParseNode $n) => $o->setAnonymousJoinWebUrl($n->getStringValue()),
            'customers' => fn(ParseNode $n) => $o->setCustomers($n->getCollectionOfObjectValues([BookingCustomerInformationBase::class, 'createFromDiscriminatorValue'])),
            'customerTimeZone' => fn(ParseNode $n) => $o->setCustomerTimeZone($n->getStringValue()),
            'duration' => fn(ParseNode $n) => $o->setDuration($n->getDateIntervalValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'filledAttendeesCount' => fn(ParseNode $n) => $o->setFilledAttendeesCount($n->getIntegerValue()),
            'isLocationOnline' => fn(ParseNode $n) => $o->setIsLocationOnline($n->getBooleanValue()),
            'joinWebUrl' => fn(ParseNode $n) => $o->setJoinWebUrl($n->getStringValue()),
            'maximumAttendeesCount' => fn(ParseNode $n) => $o->setMaximumAttendeesCount($n->getIntegerValue()),
            'optOutOfCustomerEmail' => fn(ParseNode $n) => $o->setOptOutOfCustomerEmail($n->getBooleanValue()),
            'postBuffer' => fn(ParseNode $n) => $o->setPostBuffer($n->getDateIntervalValue()),
            'preBuffer' => fn(ParseNode $n) => $o->setPreBuffer($n->getDateIntervalValue()),
            'price' => fn(ParseNode $n) => $o->setPrice($n->getFloatValue()),
            'priceType' => fn(ParseNode $n) => $o->setPriceType($n->getEnumValue(BookingPriceType::class)),
            'reminders' => fn(ParseNode $n) => $o->setReminders($n->getCollectionOfObjectValues([BookingReminder::class, 'createFromDiscriminatorValue'])),
            'selfServiceAppointmentId' => fn(ParseNode $n) => $o->setSelfServiceAppointmentId($n->getStringValue()),
            'serviceId' => fn(ParseNode $n) => $o->setServiceId($n->getStringValue()),
            'serviceLocation' => fn(ParseNode $n) => $o->setServiceLocation($n->getObjectValue([Location::class, 'createFromDiscriminatorValue'])),
            'serviceName' => fn(ParseNode $n) => $o->setServiceName($n->getStringValue()),
            'serviceNotes' => fn(ParseNode $n) => $o->setServiceNotes($n->getStringValue()),
            'smsNotificationsEnabled' => fn(ParseNode $n) => $o->setSmsNotificationsEnabled($n->getBooleanValue()),
            'staffMemberIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setStaffMemberIds($val);
            },
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the filledAttendeesCount property value. The current number of customers in the appointment
     * @return int|null
    */
    public function getFilledAttendeesCount(): ?int {
        $val = $this->getBackingStore()->get('filledAttendeesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filledAttendeesCount'");
    }

    /**
     * Gets the isLocationOnline property value. If true, indicates that the appointment will be held online. Default value is false.
     * @return bool|null
    */
    public function getIsLocationOnline(): ?bool {
        $val = $this->getBackingStore()->get('isLocationOnline');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isLocationOnline'");
    }

    /**
     * Gets the joinWebUrl property value. The URL of the online meeting for the appointment.
     * @return string|null
    */
    public function getJoinWebUrl(): ?string {
        $val = $this->getBackingStore()->get('joinWebUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'joinWebUrl'");
    }

    /**
     * Gets the maximumAttendeesCount property value. The maximum number of customers allowed in an appointment. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation.
     * @return int|null
    */
    public function getMaximumAttendeesCount(): ?int {
        $val = $this->getBackingStore()->get('maximumAttendeesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumAttendeesCount'");
    }

    /**
     * Gets the optOutOfCustomerEmail property value. If true indicates that the bookingCustomer for this appointment doesn't wish to receive a confirmation for this appointment.
     * @return bool|null
    */
    public function getOptOutOfCustomerEmail(): ?bool {
        $val = $this->getBackingStore()->get('optOutOfCustomerEmail');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'optOutOfCustomerEmail'");
    }

    /**
     * Gets the postBuffer property value. The amount of time to reserve after the appointment ends, for cleaning up, as an example. The value is expressed in ISO8601 format.
     * @return DateInterval|null
    */
    public function getPostBuffer(): ?DateInterval {
        $val = $this->getBackingStore()->get('postBuffer');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'postBuffer'");
    }

    /**
     * Gets the preBuffer property value. The amount of time to reserve before the appointment begins, for preparation, as an example. The value is expressed in ISO8601 format.
     * @return DateInterval|null
    */
    public function getPreBuffer(): ?DateInterval {
        $val = $this->getBackingStore()->get('preBuffer');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preBuffer'");
    }

    /**
     * Gets the price property value. The regular price for an appointment for the specified bookingService.
     * @return float|null
    */
    public function getPrice(): ?float {
        $val = $this->getBackingStore()->get('price');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'price'");
    }

    /**
     * Gets the priceType property value. Represents the type of pricing of a booking service.
     * @return BookingPriceType|null
    */
    public function getPriceType(): ?BookingPriceType {
        $val = $this->getBackingStore()->get('priceType');
        if (is_null($val) || $val instanceof BookingPriceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priceType'");
    }

    /**
     * Gets the reminders property value. The collection of customer reminders sent for this appointment. The value of this property is available only when reading this bookingAppointment by its ID.
     * @return array<BookingReminder>|null
    */
    public function getReminders(): ?array {
        $val = $this->getBackingStore()->get('reminders');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, BookingReminder::class);
            /** @var array<BookingReminder>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reminders'");
    }

    /**
     * Gets the selfServiceAppointmentId property value. An additional tracking ID for the appointment, if the appointment has been created directly by the customer on the scheduling page, as opposed to by a staff member on the behalf of the customer. Only supported for appointment if maxAttendeeCount is 1.
     * @return string|null
    */
    public function getSelfServiceAppointmentId(): ?string {
        $val = $this->getBackingStore()->get('selfServiceAppointmentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'selfServiceAppointmentId'");
    }

    /**
     * Gets the serviceId property value. The ID of the bookingService associated with this appointment.
     * @return string|null
    */
    public function getServiceId(): ?string {
        $val = $this->getBackingStore()->get('serviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceId'");
    }

    /**
     * Gets the serviceLocation property value. The location where the service is delivered.
     * @return Location|null
    */
    public function getServiceLocation(): ?Location {
        $val = $this->getBackingStore()->get('serviceLocation');
        if (is_null($val) || $val instanceof Location) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceLocation'");
    }

    /**
     * Gets the serviceName property value. The name of the bookingService associated with this appointment.This property is optional when creating a new appointment. If not specified, it's computed from the service associated with the appointment by the serviceId property.
     * @return string|null
    */
    public function getServiceName(): ?string {
        $val = $this->getBackingStore()->get('serviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceName'");
    }

    /**
     * Gets the serviceNotes property value. Notes from a bookingStaffMember. The value of this property is available only when reading this bookingAppointment by its ID.
     * @return string|null
    */
    public function getServiceNotes(): ?string {
        $val = $this->getBackingStore()->get('serviceNotes');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceNotes'");
    }

    /**
     * Gets the smsNotificationsEnabled property value. If true, indicates SMS notifications will be sent to the customers for the appointment. Default value is false.
     * @return bool|null
    */
    public function getSmsNotificationsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('smsNotificationsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smsNotificationsEnabled'");
    }

    /**
     * Gets the staffMemberIds property value. The ID of each bookingStaffMember who is scheduled in this appointment.
     * @return array<string>|null
    */
    public function getStaffMemberIds(): ?array {
        $val = $this->getBackingStore()->get('staffMemberIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'staffMemberIds'");
    }

    /**
     * Gets the startDateTime property value. The startDateTime property
     * @return DateTimeTimeZone|null
    */
    public function getStartDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('additionalInformation', $this->getAdditionalInformation());
        $writer->writeStringValue('anonymousJoinWebUrl', $this->getAnonymousJoinWebUrl());
        $writer->writeCollectionOfObjectValues('customers', $this->getCustomers());
        $writer->writeStringValue('customerTimeZone', $this->getCustomerTimeZone());
        $writer->writeObjectValue('endDateTime', $this->getEndDateTime());
        $writer->writeBooleanValue('isLocationOnline', $this->getIsLocationOnline());
        $writer->writeStringValue('joinWebUrl', $this->getJoinWebUrl());
        $writer->writeIntegerValue('maximumAttendeesCount', $this->getMaximumAttendeesCount());
        $writer->writeBooleanValue('optOutOfCustomerEmail', $this->getOptOutOfCustomerEmail());
        $writer->writeDateIntervalValue('postBuffer', $this->getPostBuffer());
        $writer->writeDateIntervalValue('preBuffer', $this->getPreBuffer());
        $writer->writeFloatValue('price', $this->getPrice());
        $writer->writeEnumValue('priceType', $this->getPriceType());
        $writer->writeCollectionOfObjectValues('reminders', $this->getReminders());
        $writer->writeStringValue('selfServiceAppointmentId', $this->getSelfServiceAppointmentId());
        $writer->writeStringValue('serviceId', $this->getServiceId());
        $writer->writeObjectValue('serviceLocation', $this->getServiceLocation());
        $writer->writeStringValue('serviceName', $this->getServiceName());
        $writer->writeStringValue('serviceNotes', $this->getServiceNotes());
        $writer->writeBooleanValue('smsNotificationsEnabled', $this->getSmsNotificationsEnabled());
        $writer->writeCollectionOfPrimitiveValues('staffMemberIds', $this->getStaffMemberIds());
        $writer->writeObjectValue('startDateTime', $this->getStartDateTime());
    }

    /**
     * Sets the additionalInformation property value. Additional information that is sent to the customer when an appointment is confirmed.
     * @param string|null $value Value to set for the additionalInformation property.
    */
    public function setAdditionalInformation(?string $value): void {
        $this->getBackingStore()->set('additionalInformation', $value);
    }

    /**
     * Sets the anonymousJoinWebUrl property value. The URL of the meeting to join anonymously.
     * @param string|null $value Value to set for the anonymousJoinWebUrl property.
    */
    public function setAnonymousJoinWebUrl(?string $value): void {
        $this->getBackingStore()->set('anonymousJoinWebUrl', $value);
    }

    /**
     * Sets the customers property value. A collection of customer properties for an appointment. An appointment contains a list of customer information and each unit will indicate the properties of a customer who is part of that appointment. Optional.
     * @param array<BookingCustomerInformationBase>|null $value Value to set for the customers property.
    */
    public function setCustomers(?array $value): void {
        $this->getBackingStore()->set('customers', $value);
    }

    /**
     * Sets the customerTimeZone property value. The time zone of the customer. For a list of possible values, see dateTimeTimeZone.
     * @param string|null $value Value to set for the customerTimeZone property.
    */
    public function setCustomerTimeZone(?string $value): void {
        $this->getBackingStore()->set('customerTimeZone', $value);
    }

    /**
     * Sets the duration property value. The length of the appointment, denoted in ISO8601 format.
     * @param DateInterval|null $value Value to set for the duration property.
    */
    public function setDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('duration', $value);
    }

    /**
     * Sets the endDateTime property value. The endDateTime property
     * @param DateTimeTimeZone|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the filledAttendeesCount property value. The current number of customers in the appointment
     * @param int|null $value Value to set for the filledAttendeesCount property.
    */
    public function setFilledAttendeesCount(?int $value): void {
        $this->getBackingStore()->set('filledAttendeesCount', $value);
    }

    /**
     * Sets the isLocationOnline property value. If true, indicates that the appointment will be held online. Default value is false.
     * @param bool|null $value Value to set for the isLocationOnline property.
    */
    public function setIsLocationOnline(?bool $value): void {
        $this->getBackingStore()->set('isLocationOnline', $value);
    }

    /**
     * Sets the joinWebUrl property value. The URL of the online meeting for the appointment.
     * @param string|null $value Value to set for the joinWebUrl property.
    */
    public function setJoinWebUrl(?string $value): void {
        $this->getBackingStore()->set('joinWebUrl', $value);
    }

    /**
     * Sets the maximumAttendeesCount property value. The maximum number of customers allowed in an appointment. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation.
     * @param int|null $value Value to set for the maximumAttendeesCount property.
    */
    public function setMaximumAttendeesCount(?int $value): void {
        $this->getBackingStore()->set('maximumAttendeesCount', $value);
    }

    /**
     * Sets the optOutOfCustomerEmail property value. If true indicates that the bookingCustomer for this appointment doesn't wish to receive a confirmation for this appointment.
     * @param bool|null $value Value to set for the optOutOfCustomerEmail property.
    */
    public function setOptOutOfCustomerEmail(?bool $value): void {
        $this->getBackingStore()->set('optOutOfCustomerEmail', $value);
    }

    /**
     * Sets the postBuffer property value. The amount of time to reserve after the appointment ends, for cleaning up, as an example. The value is expressed in ISO8601 format.
     * @param DateInterval|null $value Value to set for the postBuffer property.
    */
    public function setPostBuffer(?DateInterval $value): void {
        $this->getBackingStore()->set('postBuffer', $value);
    }

    /**
     * Sets the preBuffer property value. The amount of time to reserve before the appointment begins, for preparation, as an example. The value is expressed in ISO8601 format.
     * @param DateInterval|null $value Value to set for the preBuffer property.
    */
    public function setPreBuffer(?DateInterval $value): void {
        $this->getBackingStore()->set('preBuffer', $value);
    }

    /**
     * Sets the price property value. The regular price for an appointment for the specified bookingService.
     * @param float|null $value Value to set for the price property.
    */
    public function setPrice(?float $value): void {
        $this->getBackingStore()->set('price', $value);
    }

    /**
     * Sets the priceType property value. Represents the type of pricing of a booking service.
     * @param BookingPriceType|null $value Value to set for the priceType property.
    */
    public function setPriceType(?BookingPriceType $value): void {
        $this->getBackingStore()->set('priceType', $value);
    }

    /**
     * Sets the reminders property value. The collection of customer reminders sent for this appointment. The value of this property is available only when reading this bookingAppointment by its ID.
     * @param array<BookingReminder>|null $value Value to set for the reminders property.
    */
    public function setReminders(?array $value): void {
        $this->getBackingStore()->set('reminders', $value);
    }

    /**
     * Sets the selfServiceAppointmentId property value. An additional tracking ID for the appointment, if the appointment has been created directly by the customer on the scheduling page, as opposed to by a staff member on the behalf of the customer. Only supported for appointment if maxAttendeeCount is 1.
     * @param string|null $value Value to set for the selfServiceAppointmentId property.
    */
    public function setSelfServiceAppointmentId(?string $value): void {
        $this->getBackingStore()->set('selfServiceAppointmentId', $value);
    }

    /**
     * Sets the serviceId property value. The ID of the bookingService associated with this appointment.
     * @param string|null $value Value to set for the serviceId property.
    */
    public function setServiceId(?string $value): void {
        $this->getBackingStore()->set('serviceId', $value);
    }

    /**
     * Sets the serviceLocation property value. The location where the service is delivered.
     * @param Location|null $value Value to set for the serviceLocation property.
    */
    public function setServiceLocation(?Location $value): void {
        $this->getBackingStore()->set('serviceLocation', $value);
    }

    /**
     * Sets the serviceName property value. The name of the bookingService associated with this appointment.This property is optional when creating a new appointment. If not specified, it's computed from the service associated with the appointment by the serviceId property.
     * @param string|null $value Value to set for the serviceName property.
    */
    public function setServiceName(?string $value): void {
        $this->getBackingStore()->set('serviceName', $value);
    }

    /**
     * Sets the serviceNotes property value. Notes from a bookingStaffMember. The value of this property is available only when reading this bookingAppointment by its ID.
     * @param string|null $value Value to set for the serviceNotes property.
    */
    public function setServiceNotes(?string $value): void {
        $this->getBackingStore()->set('serviceNotes', $value);
    }

    /**
     * Sets the smsNotificationsEnabled property value. If true, indicates SMS notifications will be sent to the customers for the appointment. Default value is false.
     * @param bool|null $value Value to set for the smsNotificationsEnabled property.
    */
    public function setSmsNotificationsEnabled(?bool $value): void {
        $this->getBackingStore()->set('smsNotificationsEnabled', $value);
    }

    /**
     * Sets the staffMemberIds property value. The ID of each bookingStaffMember who is scheduled in this appointment.
     * @param array<string>|null $value Value to set for the staffMemberIds property.
    */
    public function setStaffMemberIds(?array $value): void {
        $this->getBackingStore()->set('staffMemberIds', $value);
    }

    /**
     * Sets the startDateTime property value. The startDateTime property
     * @param DateTimeTimeZone|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

}
