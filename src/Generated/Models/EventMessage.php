<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EventMessage extends Message implements Parsable 
{
    /**
     * Instantiates a new EventMessage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.eventMessage');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EventMessage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EventMessage {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.eventMessageRequest': return new EventMessageRequest();
                case '#microsoft.graph.eventMessageResponse': return new EventMessageResponse();
            }
        }
        return new EventMessage();
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
     * Gets the event property value. The event associated with the event message. The assumption for attendees or room resources is that the Calendar Attendant is set to automatically update the calendar with an event when meeting request event messages arrive. Navigation property. Read-only.
     * @return Event|null
    */
    public function getEvent(): ?Event {
        $val = $this->getBackingStore()->get('event');
        if (is_null($val) || $val instanceof Event) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'event'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'event' => fn(ParseNode $n) => $o->setEvent($n->getObjectValue([Event::class, 'createFromDiscriminatorValue'])),
            'isAllDay' => fn(ParseNode $n) => $o->setIsAllDay($n->getBooleanValue()),
            'isDelegated' => fn(ParseNode $n) => $o->setIsDelegated($n->getBooleanValue()),
            'isOutOfDate' => fn(ParseNode $n) => $o->setIsOutOfDate($n->getBooleanValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([Location::class, 'createFromDiscriminatorValue'])),
            'meetingMessageType' => fn(ParseNode $n) => $o->setMeetingMessageType($n->getEnumValue(MeetingMessageType::class)),
            'recurrence' => fn(ParseNode $n) => $o->setRecurrence($n->getObjectValue([PatternedRecurrence::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(EventType::class)),
        ]);
    }

    /**
     * Gets the isAllDay property value. The isAllDay property
     * @return bool|null
    */
    public function getIsAllDay(): ?bool {
        $val = $this->getBackingStore()->get('isAllDay');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAllDay'");
    }

    /**
     * Gets the isDelegated property value. True if this meeting request is accessible to a delegate, false otherwise. The default is false.
     * @return bool|null
    */
    public function getIsDelegated(): ?bool {
        $val = $this->getBackingStore()->get('isDelegated');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDelegated'");
    }

    /**
     * Gets the isOutOfDate property value. The isOutOfDate property
     * @return bool|null
    */
    public function getIsOutOfDate(): ?bool {
        $val = $this->getBackingStore()->get('isOutOfDate');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isOutOfDate'");
    }

    /**
     * Gets the location property value. The location property
     * @return Location|null
    */
    public function getLocation(): ?Location {
        $val = $this->getBackingStore()->get('location');
        if (is_null($val) || $val instanceof Location) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'location'");
    }

    /**
     * Gets the meetingMessageType property value. The type of event message: none, meetingRequest, meetingCancelled, meetingAccepted, meetingTenativelyAccepted, meetingDeclined.
     * @return MeetingMessageType|null
    */
    public function getMeetingMessageType(): ?MeetingMessageType {
        $val = $this->getBackingStore()->get('meetingMessageType');
        if (is_null($val) || $val instanceof MeetingMessageType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'meetingMessageType'");
    }

    /**
     * Gets the recurrence property value. The recurrence property
     * @return PatternedRecurrence|null
    */
    public function getRecurrence(): ?PatternedRecurrence {
        $val = $this->getBackingStore()->get('recurrence');
        if (is_null($val) || $val instanceof PatternedRecurrence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recurrence'");
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
     * Gets the type property value. The type property
     * @return EventType|null
    */
    public function getType(): ?EventType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof EventType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('endDateTime', $this->getEndDateTime());
        $writer->writeObjectValue('event', $this->getEvent());
        $writer->writeBooleanValue('isAllDay', $this->getIsAllDay());
        $writer->writeBooleanValue('isDelegated', $this->getIsDelegated());
        $writer->writeBooleanValue('isOutOfDate', $this->getIsOutOfDate());
        $writer->writeObjectValue('location', $this->getLocation());
        $writer->writeEnumValue('meetingMessageType', $this->getMeetingMessageType());
        $writer->writeObjectValue('recurrence', $this->getRecurrence());
        $writer->writeObjectValue('startDateTime', $this->getStartDateTime());
        $writer->writeEnumValue('type', $this->getType());
    }

    /**
     * Sets the endDateTime property value. The endDateTime property
     * @param DateTimeTimeZone|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the event property value. The event associated with the event message. The assumption for attendees or room resources is that the Calendar Attendant is set to automatically update the calendar with an event when meeting request event messages arrive. Navigation property. Read-only.
     * @param Event|null $value Value to set for the event property.
    */
    public function setEvent(?Event $value): void {
        $this->getBackingStore()->set('event', $value);
    }

    /**
     * Sets the isAllDay property value. The isAllDay property
     * @param bool|null $value Value to set for the isAllDay property.
    */
    public function setIsAllDay(?bool $value): void {
        $this->getBackingStore()->set('isAllDay', $value);
    }

    /**
     * Sets the isDelegated property value. True if this meeting request is accessible to a delegate, false otherwise. The default is false.
     * @param bool|null $value Value to set for the isDelegated property.
    */
    public function setIsDelegated(?bool $value): void {
        $this->getBackingStore()->set('isDelegated', $value);
    }

    /**
     * Sets the isOutOfDate property value. The isOutOfDate property
     * @param bool|null $value Value to set for the isOutOfDate property.
    */
    public function setIsOutOfDate(?bool $value): void {
        $this->getBackingStore()->set('isOutOfDate', $value);
    }

    /**
     * Sets the location property value. The location property
     * @param Location|null $value Value to set for the location property.
    */
    public function setLocation(?Location $value): void {
        $this->getBackingStore()->set('location', $value);
    }

    /**
     * Sets the meetingMessageType property value. The type of event message: none, meetingRequest, meetingCancelled, meetingAccepted, meetingTenativelyAccepted, meetingDeclined.
     * @param MeetingMessageType|null $value Value to set for the meetingMessageType property.
    */
    public function setMeetingMessageType(?MeetingMessageType $value): void {
        $this->getBackingStore()->set('meetingMessageType', $value);
    }

    /**
     * Sets the recurrence property value. The recurrence property
     * @param PatternedRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?PatternedRecurrence $value): void {
        $this->getBackingStore()->set('recurrence', $value);
    }

    /**
     * Sets the startDateTime property value. The startDateTime property
     * @param DateTimeTimeZone|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the type property value. The type property
     * @param EventType|null $value Value to set for the type property.
    */
    public function setType(?EventType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
