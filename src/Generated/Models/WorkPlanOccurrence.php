<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkPlanOccurrence extends Entity implements Parsable 
{
    /**
     * Instantiates a new WorkPlanOccurrence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkPlanOccurrence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkPlanOccurrence {
        return new WorkPlanOccurrence();
    }

    /**
     * Gets the end property value. The end property
     * @return DateTimeTimeZone|null
    */
    public function getEnd(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('end');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'end'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'end' => fn(ParseNode $n) => $o->setEnd($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'placeId' => fn(ParseNode $n) => $o->setPlaceId($n->getStringValue()),
            'recurrenceId' => fn(ParseNode $n) => $o->setRecurrenceId($n->getStringValue()),
            'start' => fn(ParseNode $n) => $o->setStart($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'timeOffDetails' => fn(ParseNode $n) => $o->setTimeOffDetails($n->getObjectValue([TimeOffDetails::class, 'createFromDiscriminatorValue'])),
            'workLocationType' => fn(ParseNode $n) => $o->setWorkLocationType($n->getEnumValue(WorkLocationType::class)),
        ]);
    }

    /**
     * Gets the placeId property value. Identifier of a place from the Microsoft Graph Places Directory API. Only applicable when workLocationType is set to office.
     * @return string|null
    */
    public function getPlaceId(): ?string {
        $val = $this->getBackingStore()->get('placeId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'placeId'");
    }

    /**
     * Gets the recurrenceId property value. The identifier of the parent recurrence pattern that generated this occurrence. The value is null for time-off occurrences because they don't have a parent recurrence.
     * @return string|null
    */
    public function getRecurrenceId(): ?string {
        $val = $this->getBackingStore()->get('recurrenceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recurrenceId'");
    }

    /**
     * Gets the start property value. The start property
     * @return DateTimeTimeZone|null
    */
    public function getStart(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('start');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'start'");
    }

    /**
     * Gets the timeOffDetails property value. The details about the time off. Only applicable when workLocationType is set to timeOff.
     * @return TimeOffDetails|null
    */
    public function getTimeOffDetails(): ?TimeOffDetails {
        $val = $this->getBackingStore()->get('timeOffDetails');
        if (is_null($val) || $val instanceof TimeOffDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeOffDetails'");
    }

    /**
     * Gets the workLocationType property value. The workLocationType property
     * @return WorkLocationType|null
    */
    public function getWorkLocationType(): ?WorkLocationType {
        $val = $this->getBackingStore()->get('workLocationType');
        if (is_null($val) || $val instanceof WorkLocationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workLocationType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('end', $this->getEnd());
        $writer->writeStringValue('placeId', $this->getPlaceId());
        $writer->writeStringValue('recurrenceId', $this->getRecurrenceId());
        $writer->writeObjectValue('start', $this->getStart());
        $writer->writeObjectValue('timeOffDetails', $this->getTimeOffDetails());
        $writer->writeEnumValue('workLocationType', $this->getWorkLocationType());
    }

    /**
     * Sets the end property value. The end property
     * @param DateTimeTimeZone|null $value Value to set for the end property.
    */
    public function setEnd(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('end', $value);
    }

    /**
     * Sets the placeId property value. Identifier of a place from the Microsoft Graph Places Directory API. Only applicable when workLocationType is set to office.
     * @param string|null $value Value to set for the placeId property.
    */
    public function setPlaceId(?string $value): void {
        $this->getBackingStore()->set('placeId', $value);
    }

    /**
     * Sets the recurrenceId property value. The identifier of the parent recurrence pattern that generated this occurrence. The value is null for time-off occurrences because they don't have a parent recurrence.
     * @param string|null $value Value to set for the recurrenceId property.
    */
    public function setRecurrenceId(?string $value): void {
        $this->getBackingStore()->set('recurrenceId', $value);
    }

    /**
     * Sets the start property value. The start property
     * @param DateTimeTimeZone|null $value Value to set for the start property.
    */
    public function setStart(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('start', $value);
    }

    /**
     * Sets the timeOffDetails property value. The details about the time off. Only applicable when workLocationType is set to timeOff.
     * @param TimeOffDetails|null $value Value to set for the timeOffDetails property.
    */
    public function setTimeOffDetails(?TimeOffDetails $value): void {
        $this->getBackingStore()->set('timeOffDetails', $value);
    }

    /**
     * Sets the workLocationType property value. The workLocationType property
     * @param WorkLocationType|null $value Value to set for the workLocationType property.
    */
    public function setWorkLocationType(?WorkLocationType $value): void {
        $this->getBackingStore()->set('workLocationType', $value);
    }

}
