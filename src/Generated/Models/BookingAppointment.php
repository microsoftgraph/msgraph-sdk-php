<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BookingAppointment extends Entity implements Parsable 
{
    /**
     * @var string|null $additionalInformation Additional information that is sent to the customer when an appointment is confirmed.
    */
    private ?string $additionalInformation = null;
    
    /**
     * @var string|null $anonymousJoinWebUrl The anonymousJoinWebUrl property
    */
    private ?string $anonymousJoinWebUrl = null;
    
    /**
     * @var array<BookingCustomerInformationBase>|null $customers It lists down the customer properties for an appointment. An appointment will contain a list of customer information and each unit will indicate the properties of a customer who is part of that appointment. Optional.
    */
    private ?array $customers = null;
    
    /**
     * @var string|null $customerTimeZone The time zone of the customer. For a list of possible values, see dateTimeTimeZone.
    */
    private ?string $customerTimeZone = null;
    
    /**
     * @var DateInterval|null $duration The length of the appointment, denoted in ISO8601 format.
    */
    private ?DateInterval $duration = null;
    
    /**
     * @var DateTimeTimeZone|null $endDateTime The endDateTime property
    */
    private ?DateTimeTimeZone $endDateTime = null;
    
    /**
     * @var int|null $filledAttendeesCount The current number of customers in the appointment
    */
    private ?int $filledAttendeesCount = null;
    
    /**
     * @var bool|null $isLocationOnline If true, indicates that the appointment will be held online. Default value is false.
    */
    private ?bool $isLocationOnline = null;
    
    /**
     * @var string|null $joinWebUrl The URL of the online meeting for the appointment.
    */
    private ?string $joinWebUrl = null;
    
    /**
     * @var int|null $maximumAttendeesCount The maximum number of customers allowed in an appointment. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation.
    */
    private ?int $maximumAttendeesCount = null;
    
    /**
     * @var bool|null $optOutOfCustomerEmail If true indicates that the bookingCustomer for this appointment does not wish to receive a confirmation for this appointment.
    */
    private ?bool $optOutOfCustomerEmail = null;
    
    /**
     * @var DateInterval|null $postBuffer The amount of time to reserve after the appointment ends, for cleaning up, as an example. The value is expressed in ISO8601 format.
    */
    private ?DateInterval $postBuffer = null;
    
    /**
     * @var DateInterval|null $preBuffer The amount of time to reserve before the appointment begins, for preparation, as an example. The value is expressed in ISO8601 format.
    */
    private ?DateInterval $preBuffer = null;
    
    /**
     * @var float|null $price The regular price for an appointment for the specified bookingService.
    */
    private ?float $price = null;
    
    /**
     * @var BookingPriceType|null $priceType Represents the type of pricing of a booking service.
    */
    private ?BookingPriceType $priceType = null;
    
    /**
     * @var array<BookingReminder>|null $reminders The collection of customer reminders sent for this appointment. The value of this property is available only when reading this bookingAppointment by its ID.
    */
    private ?array $reminders = null;
    
    /**
     * @var string|null $selfServiceAppointmentId An additional tracking ID for the appointment, if the appointment has been created directly by the customer on the scheduling page, as opposed to by a staff member on the behalf of the customer. Only supported for appointment if maxAttendeeCount is 1.
    */
    private ?string $selfServiceAppointmentId = null;
    
    /**
     * @var string|null $serviceId The ID of the bookingService associated with this appointment.
    */
    private ?string $serviceId = null;
    
    /**
     * @var Location|null $serviceLocation The location where the service is delivered.
    */
    private ?Location $serviceLocation = null;
    
    /**
     * @var string|null $serviceName The name of the bookingService associated with this appointment.This property is optional when creating a new appointment. If not specified, it is computed from the service associated with the appointment by the serviceId property.
    */
    private ?string $serviceName = null;
    
    /**
     * @var string|null $serviceNotes Notes from a bookingStaffMember. The value of this property is available only when reading this bookingAppointment by its ID.
    */
    private ?string $serviceNotes = null;
    
    /**
     * @var bool|null $smsNotificationsEnabled If true, indicates SMS notifications will be sent to the customers for the appointment. Default value is false.
    */
    private ?bool $smsNotificationsEnabled = null;
    
    /**
     * @var array<string>|null $staffMemberIds The ID of each bookingStaffMember who is scheduled in this appointment.
    */
    private ?array $staffMemberIds = null;
    
    /**
     * @var DateTimeTimeZone|null $startDateTime The startDateTime property
    */
    private ?DateTimeTimeZone $startDateTime = null;
    
    /**
     * Instantiates a new BookingAppointment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.bookingAppointment');
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
        return $this->additionalInformation;
    }

    /**
     * Gets the anonymousJoinWebUrl property value. The anonymousJoinWebUrl property
     * @return string|null
    */
    public function getAnonymousJoinWebUrl(): ?string {
        return $this->anonymousJoinWebUrl;
    }

    /**
     * Gets the customers property value. It lists down the customer properties for an appointment. An appointment will contain a list of customer information and each unit will indicate the properties of a customer who is part of that appointment. Optional.
     * @return array<BookingCustomerInformationBase>|null
    */
    public function getCustomers(): ?array {
        return $this->customers;
    }

    /**
     * Gets the customerTimeZone property value. The time zone of the customer. For a list of possible values, see dateTimeTimeZone.
     * @return string|null
    */
    public function getCustomerTimeZone(): ?string {
        return $this->customerTimeZone;
    }

    /**
     * Gets the duration property value. The length of the appointment, denoted in ISO8601 format.
     * @return DateInterval|null
    */
    public function getDuration(): ?DateInterval {
        return $this->duration;
    }

    /**
     * Gets the endDateTime property value. The endDateTime property
     * @return DateTimeTimeZone|null
    */
    public function getEndDateTime(): ?DateTimeTimeZone {
        return $this->endDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalInformation' => function (ParseNode $n) use ($o) { $o->setAdditionalInformation($n->getStringValue()); },
            'anonymousJoinWebUrl' => function (ParseNode $n) use ($o) { $o->setAnonymousJoinWebUrl($n->getStringValue()); },
            'customers' => function (ParseNode $n) use ($o) { $o->setCustomers($n->getCollectionOfObjectValues(array(BookingCustomerInformationBase::class, 'createFromDiscriminatorValue'))); },
            'customerTimeZone' => function (ParseNode $n) use ($o) { $o->setCustomerTimeZone($n->getStringValue()); },
            'duration' => function (ParseNode $n) use ($o) { $o->setDuration($n->getDateIntervalValue()); },
            'endDateTime' => function (ParseNode $n) use ($o) { $o->setEndDateTime($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
            'filledAttendeesCount' => function (ParseNode $n) use ($o) { $o->setFilledAttendeesCount($n->getIntegerValue()); },
            'isLocationOnline' => function (ParseNode $n) use ($o) { $o->setIsLocationOnline($n->getBooleanValue()); },
            'joinWebUrl' => function (ParseNode $n) use ($o) { $o->setJoinWebUrl($n->getStringValue()); },
            'maximumAttendeesCount' => function (ParseNode $n) use ($o) { $o->setMaximumAttendeesCount($n->getIntegerValue()); },
            'optOutOfCustomerEmail' => function (ParseNode $n) use ($o) { $o->setOptOutOfCustomerEmail($n->getBooleanValue()); },
            'postBuffer' => function (ParseNode $n) use ($o) { $o->setPostBuffer($n->getDateIntervalValue()); },
            'preBuffer' => function (ParseNode $n) use ($o) { $o->setPreBuffer($n->getDateIntervalValue()); },
            'price' => function (ParseNode $n) use ($o) { $o->setPrice($n->getFloatValue()); },
            'priceType' => function (ParseNode $n) use ($o) { $o->setPriceType($n->getEnumValue(BookingPriceType::class)); },
            'reminders' => function (ParseNode $n) use ($o) { $o->setReminders($n->getCollectionOfObjectValues(array(BookingReminder::class, 'createFromDiscriminatorValue'))); },
            'selfServiceAppointmentId' => function (ParseNode $n) use ($o) { $o->setSelfServiceAppointmentId($n->getStringValue()); },
            'serviceId' => function (ParseNode $n) use ($o) { $o->setServiceId($n->getStringValue()); },
            'serviceLocation' => function (ParseNode $n) use ($o) { $o->setServiceLocation($n->getObjectValue(array(Location::class, 'createFromDiscriminatorValue'))); },
            'serviceName' => function (ParseNode $n) use ($o) { $o->setServiceName($n->getStringValue()); },
            'serviceNotes' => function (ParseNode $n) use ($o) { $o->setServiceNotes($n->getStringValue()); },
            'smsNotificationsEnabled' => function (ParseNode $n) use ($o) { $o->setSmsNotificationsEnabled($n->getBooleanValue()); },
            'staffMemberIds' => function (ParseNode $n) use ($o) { $o->setStaffMemberIds($n->getCollectionOfPrimitiveValues()); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the filledAttendeesCount property value. The current number of customers in the appointment
     * @return int|null
    */
    public function getFilledAttendeesCount(): ?int {
        return $this->filledAttendeesCount;
    }

    /**
     * Gets the isLocationOnline property value. If true, indicates that the appointment will be held online. Default value is false.
     * @return bool|null
    */
    public function getIsLocationOnline(): ?bool {
        return $this->isLocationOnline;
    }

    /**
     * Gets the joinWebUrl property value. The URL of the online meeting for the appointment.
     * @return string|null
    */
    public function getJoinWebUrl(): ?string {
        return $this->joinWebUrl;
    }

    /**
     * Gets the maximumAttendeesCount property value. The maximum number of customers allowed in an appointment. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation.
     * @return int|null
    */
    public function getMaximumAttendeesCount(): ?int {
        return $this->maximumAttendeesCount;
    }

    /**
     * Gets the optOutOfCustomerEmail property value. If true indicates that the bookingCustomer for this appointment does not wish to receive a confirmation for this appointment.
     * @return bool|null
    */
    public function getOptOutOfCustomerEmail(): ?bool {
        return $this->optOutOfCustomerEmail;
    }

    /**
     * Gets the postBuffer property value. The amount of time to reserve after the appointment ends, for cleaning up, as an example. The value is expressed in ISO8601 format.
     * @return DateInterval|null
    */
    public function getPostBuffer(): ?DateInterval {
        return $this->postBuffer;
    }

    /**
     * Gets the preBuffer property value. The amount of time to reserve before the appointment begins, for preparation, as an example. The value is expressed in ISO8601 format.
     * @return DateInterval|null
    */
    public function getPreBuffer(): ?DateInterval {
        return $this->preBuffer;
    }

    /**
     * Gets the price property value. The regular price for an appointment for the specified bookingService.
     * @return float|null
    */
    public function getPrice(): ?float {
        return $this->price;
    }

    /**
     * Gets the priceType property value. Represents the type of pricing of a booking service.
     * @return BookingPriceType|null
    */
    public function getPriceType(): ?BookingPriceType {
        return $this->priceType;
    }

    /**
     * Gets the reminders property value. The collection of customer reminders sent for this appointment. The value of this property is available only when reading this bookingAppointment by its ID.
     * @return array<BookingReminder>|null
    */
    public function getReminders(): ?array {
        return $this->reminders;
    }

    /**
     * Gets the selfServiceAppointmentId property value. An additional tracking ID for the appointment, if the appointment has been created directly by the customer on the scheduling page, as opposed to by a staff member on the behalf of the customer. Only supported for appointment if maxAttendeeCount is 1.
     * @return string|null
    */
    public function getSelfServiceAppointmentId(): ?string {
        return $this->selfServiceAppointmentId;
    }

    /**
     * Gets the serviceId property value. The ID of the bookingService associated with this appointment.
     * @return string|null
    */
    public function getServiceId(): ?string {
        return $this->serviceId;
    }

    /**
     * Gets the serviceLocation property value. The location where the service is delivered.
     * @return Location|null
    */
    public function getServiceLocation(): ?Location {
        return $this->serviceLocation;
    }

    /**
     * Gets the serviceName property value. The name of the bookingService associated with this appointment.This property is optional when creating a new appointment. If not specified, it is computed from the service associated with the appointment by the serviceId property.
     * @return string|null
    */
    public function getServiceName(): ?string {
        return $this->serviceName;
    }

    /**
     * Gets the serviceNotes property value. Notes from a bookingStaffMember. The value of this property is available only when reading this bookingAppointment by its ID.
     * @return string|null
    */
    public function getServiceNotes(): ?string {
        return $this->serviceNotes;
    }

    /**
     * Gets the smsNotificationsEnabled property value. If true, indicates SMS notifications will be sent to the customers for the appointment. Default value is false.
     * @return bool|null
    */
    public function getSmsNotificationsEnabled(): ?bool {
        return $this->smsNotificationsEnabled;
    }

    /**
     * Gets the staffMemberIds property value. The ID of each bookingStaffMember who is scheduled in this appointment.
     * @return array<string>|null
    */
    public function getStaffMemberIds(): ?array {
        return $this->staffMemberIds;
    }

    /**
     * Gets the startDateTime property value. The startDateTime property
     * @return DateTimeTimeZone|null
    */
    public function getStartDateTime(): ?DateTimeTimeZone {
        return $this->startDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('additionalInformation', $this->additionalInformation);
        $writer->writeStringValue('anonymousJoinWebUrl', $this->anonymousJoinWebUrl);
        $writer->writeCollectionOfObjectValues('customers', $this->customers);
        $writer->writeStringValue('customerTimeZone', $this->customerTimeZone);
        $writer->writeObjectValue('endDateTime', $this->endDateTime);
        $writer->writeBooleanValue('isLocationOnline', $this->isLocationOnline);
        $writer->writeStringValue('joinWebUrl', $this->joinWebUrl);
        $writer->writeIntegerValue('maximumAttendeesCount', $this->maximumAttendeesCount);
        $writer->writeBooleanValue('optOutOfCustomerEmail', $this->optOutOfCustomerEmail);
        $writer->writeDateIntervalValue('postBuffer', $this->postBuffer);
        $writer->writeDateIntervalValue('preBuffer', $this->preBuffer);
        $writer->writeFloatValue('price', $this->price);
        $writer->writeEnumValue('priceType', $this->priceType);
        $writer->writeCollectionOfObjectValues('reminders', $this->reminders);
        $writer->writeStringValue('selfServiceAppointmentId', $this->selfServiceAppointmentId);
        $writer->writeStringValue('serviceId', $this->serviceId);
        $writer->writeObjectValue('serviceLocation', $this->serviceLocation);
        $writer->writeStringValue('serviceName', $this->serviceName);
        $writer->writeStringValue('serviceNotes', $this->serviceNotes);
        $writer->writeBooleanValue('smsNotificationsEnabled', $this->smsNotificationsEnabled);
        $writer->writeCollectionOfPrimitiveValues('staffMemberIds', $this->staffMemberIds);
        $writer->writeObjectValue('startDateTime', $this->startDateTime);
    }

    /**
     * Sets the additionalInformation property value. Additional information that is sent to the customer when an appointment is confirmed.
     *  @param string|null $value Value to set for the additionalInformation property.
    */
    public function setAdditionalInformation(?string $value ): void {
        $this->additionalInformation = $value;
    }

    /**
     * Sets the anonymousJoinWebUrl property value. The anonymousJoinWebUrl property
     *  @param string|null $value Value to set for the anonymousJoinWebUrl property.
    */
    public function setAnonymousJoinWebUrl(?string $value ): void {
        $this->anonymousJoinWebUrl = $value;
    }

    /**
     * Sets the customers property value. It lists down the customer properties for an appointment. An appointment will contain a list of customer information and each unit will indicate the properties of a customer who is part of that appointment. Optional.
     *  @param array<BookingCustomerInformationBase>|null $value Value to set for the customers property.
    */
    public function setCustomers(?array $value ): void {
        $this->customers = $value;
    }

    /**
     * Sets the customerTimeZone property value. The time zone of the customer. For a list of possible values, see dateTimeTimeZone.
     *  @param string|null $value Value to set for the customerTimeZone property.
    */
    public function setCustomerTimeZone(?string $value ): void {
        $this->customerTimeZone = $value;
    }

    /**
     * Sets the duration property value. The length of the appointment, denoted in ISO8601 format.
     *  @param DateInterval|null $value Value to set for the duration property.
    */
    public function setDuration(?DateInterval $value ): void {
        $this->duration = $value;
    }

    /**
     * Sets the endDateTime property value. The endDateTime property
     *  @param DateTimeTimeZone|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTimeTimeZone $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the filledAttendeesCount property value. The current number of customers in the appointment
     *  @param int|null $value Value to set for the filledAttendeesCount property.
    */
    public function setFilledAttendeesCount(?int $value ): void {
        $this->filledAttendeesCount = $value;
    }

    /**
     * Sets the isLocationOnline property value. If true, indicates that the appointment will be held online. Default value is false.
     *  @param bool|null $value Value to set for the isLocationOnline property.
    */
    public function setIsLocationOnline(?bool $value ): void {
        $this->isLocationOnline = $value;
    }

    /**
     * Sets the joinWebUrl property value. The URL of the online meeting for the appointment.
     *  @param string|null $value Value to set for the joinWebUrl property.
    */
    public function setJoinWebUrl(?string $value ): void {
        $this->joinWebUrl = $value;
    }

    /**
     * Sets the maximumAttendeesCount property value. The maximum number of customers allowed in an appointment. If maximumAttendeesCount of the service is greater than 1, pass valid customer IDs while creating or updating an appointment. To create a customer, use the Create bookingCustomer operation.
     *  @param int|null $value Value to set for the maximumAttendeesCount property.
    */
    public function setMaximumAttendeesCount(?int $value ): void {
        $this->maximumAttendeesCount = $value;
    }

    /**
     * Sets the optOutOfCustomerEmail property value. If true indicates that the bookingCustomer for this appointment does not wish to receive a confirmation for this appointment.
     *  @param bool|null $value Value to set for the optOutOfCustomerEmail property.
    */
    public function setOptOutOfCustomerEmail(?bool $value ): void {
        $this->optOutOfCustomerEmail = $value;
    }

    /**
     * Sets the postBuffer property value. The amount of time to reserve after the appointment ends, for cleaning up, as an example. The value is expressed in ISO8601 format.
     *  @param DateInterval|null $value Value to set for the postBuffer property.
    */
    public function setPostBuffer(?DateInterval $value ): void {
        $this->postBuffer = $value;
    }

    /**
     * Sets the preBuffer property value. The amount of time to reserve before the appointment begins, for preparation, as an example. The value is expressed in ISO8601 format.
     *  @param DateInterval|null $value Value to set for the preBuffer property.
    */
    public function setPreBuffer(?DateInterval $value ): void {
        $this->preBuffer = $value;
    }

    /**
     * Sets the price property value. The regular price for an appointment for the specified bookingService.
     *  @param float|null $value Value to set for the price property.
    */
    public function setPrice(?float $value ): void {
        $this->price = $value;
    }

    /**
     * Sets the priceType property value. Represents the type of pricing of a booking service.
     *  @param BookingPriceType|null $value Value to set for the priceType property.
    */
    public function setPriceType(?BookingPriceType $value ): void {
        $this->priceType = $value;
    }

    /**
     * Sets the reminders property value. The collection of customer reminders sent for this appointment. The value of this property is available only when reading this bookingAppointment by its ID.
     *  @param array<BookingReminder>|null $value Value to set for the reminders property.
    */
    public function setReminders(?array $value ): void {
        $this->reminders = $value;
    }

    /**
     * Sets the selfServiceAppointmentId property value. An additional tracking ID for the appointment, if the appointment has been created directly by the customer on the scheduling page, as opposed to by a staff member on the behalf of the customer. Only supported for appointment if maxAttendeeCount is 1.
     *  @param string|null $value Value to set for the selfServiceAppointmentId property.
    */
    public function setSelfServiceAppointmentId(?string $value ): void {
        $this->selfServiceAppointmentId = $value;
    }

    /**
     * Sets the serviceId property value. The ID of the bookingService associated with this appointment.
     *  @param string|null $value Value to set for the serviceId property.
    */
    public function setServiceId(?string $value ): void {
        $this->serviceId = $value;
    }

    /**
     * Sets the serviceLocation property value. The location where the service is delivered.
     *  @param Location|null $value Value to set for the serviceLocation property.
    */
    public function setServiceLocation(?Location $value ): void {
        $this->serviceLocation = $value;
    }

    /**
     * Sets the serviceName property value. The name of the bookingService associated with this appointment.This property is optional when creating a new appointment. If not specified, it is computed from the service associated with the appointment by the serviceId property.
     *  @param string|null $value Value to set for the serviceName property.
    */
    public function setServiceName(?string $value ): void {
        $this->serviceName = $value;
    }

    /**
     * Sets the serviceNotes property value. Notes from a bookingStaffMember. The value of this property is available only when reading this bookingAppointment by its ID.
     *  @param string|null $value Value to set for the serviceNotes property.
    */
    public function setServiceNotes(?string $value ): void {
        $this->serviceNotes = $value;
    }

    /**
     * Sets the smsNotificationsEnabled property value. If true, indicates SMS notifications will be sent to the customers for the appointment. Default value is false.
     *  @param bool|null $value Value to set for the smsNotificationsEnabled property.
    */
    public function setSmsNotificationsEnabled(?bool $value ): void {
        $this->smsNotificationsEnabled = $value;
    }

    /**
     * Sets the staffMemberIds property value. The ID of each bookingStaffMember who is scheduled in this appointment.
     *  @param array<string>|null $value Value to set for the staffMemberIds property.
    */
    public function setStaffMemberIds(?array $value ): void {
        $this->staffMemberIds = $value;
    }

    /**
     * Sets the startDateTime property value. The startDateTime property
     *  @param DateTimeTimeZone|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTimeTimeZone $value ): void {
        $this->startDateTime = $value;
    }

}
