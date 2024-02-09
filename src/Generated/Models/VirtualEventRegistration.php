<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class VirtualEventRegistration extends Entity implements Parsable 
{
    /**
     * Instantiates a new VirtualEventRegistration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEventRegistration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEventRegistration {
        return new VirtualEventRegistration();
    }

    /**
     * Gets the cancelationDateTime property value. Date and time when the registrant cancels their registration for the virtual event. Only appears when applicable. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCancelationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('cancelationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cancelationDateTime'");
    }

    /**
     * Gets the email property value. Email address of the registrant.
     * @return string|null
    */
    public function getEmail(): ?string {
        $val = $this->getBackingStore()->get('email');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'email'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cancelationDateTime' => fn(ParseNode $n) => $o->setCancelationDateTime($n->getDateTimeValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'firstName' => fn(ParseNode $n) => $o->setFirstName($n->getStringValue()),
            'lastName' => fn(ParseNode $n) => $o->setLastName($n->getStringValue()),
            'registrationDateTime' => fn(ParseNode $n) => $o->setRegistrationDateTime($n->getDateTimeValue()),
            'registrationQuestionAnswers' => fn(ParseNode $n) => $o->setRegistrationQuestionAnswers($n->getCollectionOfObjectValues([VirtualEventRegistrationQuestionAnswer::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(VirtualEventAttendeeRegistrationStatus::class)),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the firstName property value. First name of the registrant.
     * @return string|null
    */
    public function getFirstName(): ?string {
        $val = $this->getBackingStore()->get('firstName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firstName'");
    }

    /**
     * Gets the lastName property value. Last name of the registrant.
     * @return string|null
    */
    public function getLastName(): ?string {
        $val = $this->getBackingStore()->get('lastName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastName'");
    }

    /**
     * Gets the registrationDateTime property value. Date and time when the registrant registers for the virtual event. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getRegistrationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('registrationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registrationDateTime'");
    }

    /**
     * Gets the registrationQuestionAnswers property value. The registrant's answer to the registration questions.
     * @return array<VirtualEventRegistrationQuestionAnswer>|null
    */
    public function getRegistrationQuestionAnswers(): ?array {
        $val = $this->getBackingStore()->get('registrationQuestionAnswers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, VirtualEventRegistrationQuestionAnswer::class);
            /** @var array<VirtualEventRegistrationQuestionAnswer>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registrationQuestionAnswers'");
    }

    /**
     * Gets the status property value. Registration status of the registrant. Read-only.
     * @return VirtualEventAttendeeRegistrationStatus|null
    */
    public function getStatus(): ?VirtualEventAttendeeRegistrationStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof VirtualEventAttendeeRegistrationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the userId property value. The registrant's ID in Microsoft Entra ID. Only appears when the registrant is registered in Microsoft Entra ID.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('cancelationDateTime', $this->getCancelationDateTime());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('firstName', $this->getFirstName());
        $writer->writeStringValue('lastName', $this->getLastName());
        $writer->writeDateTimeValue('registrationDateTime', $this->getRegistrationDateTime());
        $writer->writeCollectionOfObjectValues('registrationQuestionAnswers', $this->getRegistrationQuestionAnswers());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the cancelationDateTime property value. Date and time when the registrant cancels their registration for the virtual event. Only appears when applicable. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the cancelationDateTime property.
    */
    public function setCancelationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('cancelationDateTime', $value);
    }

    /**
     * Sets the email property value. Email address of the registrant.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->getBackingStore()->set('email', $value);
    }

    /**
     * Sets the firstName property value. First name of the registrant.
     * @param string|null $value Value to set for the firstName property.
    */
    public function setFirstName(?string $value): void {
        $this->getBackingStore()->set('firstName', $value);
    }

    /**
     * Sets the lastName property value. Last name of the registrant.
     * @param string|null $value Value to set for the lastName property.
    */
    public function setLastName(?string $value): void {
        $this->getBackingStore()->set('lastName', $value);
    }

    /**
     * Sets the registrationDateTime property value. Date and time when the registrant registers for the virtual event. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the registrationDateTime property.
    */
    public function setRegistrationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('registrationDateTime', $value);
    }

    /**
     * Sets the registrationQuestionAnswers property value. The registrant's answer to the registration questions.
     * @param array<VirtualEventRegistrationQuestionAnswer>|null $value Value to set for the registrationQuestionAnswers property.
    */
    public function setRegistrationQuestionAnswers(?array $value): void {
        $this->getBackingStore()->set('registrationQuestionAnswers', $value);
    }

    /**
     * Sets the status property value. Registration status of the registrant. Read-only.
     * @param VirtualEventAttendeeRegistrationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?VirtualEventAttendeeRegistrationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the userId property value. The registrant's ID in Microsoft Entra ID. Only appears when the registrant is registered in Microsoft Entra ID.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
