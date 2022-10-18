<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BookingCustomerInformation extends BookingCustomerInformationBase implements Parsable 
{
    /**
     * @var string|null $customerId The ID of the bookingCustomer for this appointment. If no ID is specified when an appointment is created, then a new bookingCustomer object is created. Once set, you should consider the customerId immutable.
    */
    private ?string $customerId = null;
    
    /**
     * @var array<BookingQuestionAnswer>|null $customQuestionAnswers It consists of the list of custom questions and answers given by the customer as part of the appointment
    */
    private ?array $customQuestionAnswers = null;
    
    /**
     * @var string|null $emailAddress The SMTP address of the bookingCustomer who is booking the appointment
    */
    private ?string $emailAddress = null;
    
    /**
     * @var Location|null $location Represents location information for the bookingCustomer who is booking the appointment.
    */
    private ?Location $location = null;
    
    /**
     * @var string|null $name The customer's name.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $notes Notes from the customer associated with this appointment. You can get the value only when reading this bookingAppointment by its ID. You can set this property only when initially creating an appointment with a new customer. After that point, the value is computed from the customer represented by the customerId.
    */
    private ?string $notes = null;
    
    /**
     * @var string|null $phone The customer's phone number.
    */
    private ?string $phone = null;
    
    /**
     * @var string|null $timeZone The time zone of the customer. For a list of possible values, see dateTimeTimeZone.
    */
    private ?string $timeZone = null;
    
    /**
     * Instantiates a new BookingCustomerInformation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.bookingCustomerInformation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingCustomerInformation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BookingCustomerInformation {
        return new BookingCustomerInformation();
    }

    /**
     * Gets the customerId property value. The ID of the bookingCustomer for this appointment. If no ID is specified when an appointment is created, then a new bookingCustomer object is created. Once set, you should consider the customerId immutable.
     * @return string|null
    */
    public function getCustomerId(): ?string {
        return $this->customerId;
    }

    /**
     * Gets the customQuestionAnswers property value. It consists of the list of custom questions and answers given by the customer as part of the appointment
     * @return array<BookingQuestionAnswer>|null
    */
    public function getCustomQuestionAnswers(): ?array {
        return $this->customQuestionAnswers;
    }

    /**
     * Gets the emailAddress property value. The SMTP address of the bookingCustomer who is booking the appointment
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
            'customerId' => fn(ParseNode $n) => $o->setCustomerId($n->getStringValue()),
            'customQuestionAnswers' => fn(ParseNode $n) => $o->setCustomQuestionAnswers($n->getCollectionOfObjectValues([BookingQuestionAnswer::class, 'createFromDiscriminatorValue'])),
            'emailAddress' => fn(ParseNode $n) => $o->setEmailAddress($n->getStringValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([Location::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'phone' => fn(ParseNode $n) => $o->setPhone($n->getStringValue()),
            'timeZone' => fn(ParseNode $n) => $o->setTimeZone($n->getStringValue()),
        ]);
    }

    /**
     * Gets the location property value. Represents location information for the bookingCustomer who is booking the appointment.
     * @return Location|null
    */
    public function getLocation(): ?Location {
        return $this->location;
    }

    /**
     * Gets the name property value. The customer's name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the notes property value. Notes from the customer associated with this appointment. You can get the value only when reading this bookingAppointment by its ID. You can set this property only when initially creating an appointment with a new customer. After that point, the value is computed from the customer represented by the customerId.
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->notes;
    }

    /**
     * Gets the phone property value. The customer's phone number.
     * @return string|null
    */
    public function getPhone(): ?string {
        return $this->phone;
    }

    /**
     * Gets the timeZone property value. The time zone of the customer. For a list of possible values, see dateTimeTimeZone.
     * @return string|null
    */
    public function getTimeZone(): ?string {
        return $this->timeZone;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('customerId', $this->customerId);
        $writer->writeCollectionOfObjectValues('customQuestionAnswers', $this->customQuestionAnswers);
        $writer->writeStringValue('emailAddress', $this->emailAddress);
        $writer->writeObjectValue('location', $this->location);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('notes', $this->notes);
        $writer->writeStringValue('phone', $this->phone);
        $writer->writeStringValue('timeZone', $this->timeZone);
    }

    /**
     * Sets the customerId property value. The ID of the bookingCustomer for this appointment. If no ID is specified when an appointment is created, then a new bookingCustomer object is created. Once set, you should consider the customerId immutable.
     *  @param string|null $value Value to set for the customerId property.
    */
    public function setCustomerId(?string $value ): void {
        $this->customerId = $value;
    }

    /**
     * Sets the customQuestionAnswers property value. It consists of the list of custom questions and answers given by the customer as part of the appointment
     *  @param array<BookingQuestionAnswer>|null $value Value to set for the customQuestionAnswers property.
    */
    public function setCustomQuestionAnswers(?array $value ): void {
        $this->customQuestionAnswers = $value;
    }

    /**
     * Sets the emailAddress property value. The SMTP address of the bookingCustomer who is booking the appointment
     *  @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value ): void {
        $this->emailAddress = $value;
    }

    /**
     * Sets the location property value. Represents location information for the bookingCustomer who is booking the appointment.
     *  @param Location|null $value Value to set for the location property.
    */
    public function setLocation(?Location $value ): void {
        $this->location = $value;
    }

    /**
     * Sets the name property value. The customer's name.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the notes property value. Notes from the customer associated with this appointment. You can get the value only when reading this bookingAppointment by its ID. You can set this property only when initially creating an appointment with a new customer. After that point, the value is computed from the customer represented by the customerId.
     *  @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value ): void {
        $this->notes = $value;
    }

    /**
     * Sets the phone property value. The customer's phone number.
     *  @param string|null $value Value to set for the phone property.
    */
    public function setPhone(?string $value ): void {
        $this->phone = $value;
    }

    /**
     * Sets the timeZone property value. The time zone of the customer. For a list of possible values, see dateTimeTimeZone.
     *  @param string|null $value Value to set for the timeZone property.
    */
    public function setTimeZone(?string $value ): void {
        $this->timeZone = $value;
    }

}
