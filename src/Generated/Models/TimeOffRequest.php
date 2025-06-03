<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TimeOffRequest extends ScheduleChangeRequest implements Parsable 
{
    /**
     * Instantiates a new TimeOffRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.timeOffRequest');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimeOffRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TimeOffRequest {
        return new TimeOffRequest();
    }

    /**
     * Gets the endDateTime property value. The date and time the time off ends in ISO 8601 format and in UTC time.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('endDateTime');
        if (is_null($val) || $val instanceof DateTime) {
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
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'timeOffReasonId' => fn(ParseNode $n) => $o->setTimeOffReasonId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the startDateTime property value. The date and time the time off starts in ISO 8601 format and in UTC time.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the timeOffReasonId property value. The reason for the time off.
     * @return string|null
    */
    public function getTimeOffReasonId(): ?string {
        $val = $this->getBackingStore()->get('timeOffReasonId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeOffReasonId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeStringValue('timeOffReasonId', $this->getTimeOffReasonId());
    }

    /**
     * Sets the endDateTime property value. The date and time the time off ends in ISO 8601 format and in UTC time.
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the startDateTime property value. The date and time the time off starts in ISO 8601 format and in UTC time.
     * @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the timeOffReasonId property value. The reason for the time off.
     * @param string|null $value Value to set for the timeOffReasonId property.
    */
    public function setTimeOffReasonId(?string $value): void {
        $this->getBackingStore()->set('timeOffReasonId', $value);
    }

}
