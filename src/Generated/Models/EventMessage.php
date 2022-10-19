<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EventMessage extends Message implements Parsable 
{
    /**
     * @var DateTimeTimeZone|null $endDateTime The endDateTime property
    */
    private ?DateTimeTimeZone $endDateTime = null;
    
    /**
     * @var Event|null $event The event associated with the event message. The assumption for attendees or room resources is that the Calendar Attendant is set to automatically update the calendar with an event when meeting request event messages arrive. Navigation property.  Read-only.
    */
    private ?Event $event = null;
    
    /**
     * @var bool|null $isAllDay The isAllDay property
    */
    private ?bool $isAllDay = null;
    
    /**
     * @var bool|null $isDelegated The isDelegated property
    */
    private ?bool $isDelegated = null;
    
    /**
     * @var bool|null $isOutOfDate The isOutOfDate property
    */
    private ?bool $isOutOfDate = null;
    
    /**
     * @var Location|null $location The location property
    */
    private ?Location $location = null;
    
    /**
     * @var MeetingMessageType|null $meetingMessageType The meetingMessageType property
    */
    private ?MeetingMessageType $meetingMessageType = null;
    
    /**
     * @var PatternedRecurrence|null $recurrence The recurrence property
    */
    private ?PatternedRecurrence $recurrence = null;
    
    /**
     * @var DateTimeTimeZone|null $startDateTime The startDateTime property
    */
    private ?DateTimeTimeZone $startDateTime = null;
    
    /**
     * @var EventType|null $type The type property
    */
    private ?EventType $type = null;
    
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
        return $this->endDateTime;
    }

    /**
     * Gets the event property value. The event associated with the event message. The assumption for attendees or room resources is that the Calendar Attendant is set to automatically update the calendar with an event when meeting request event messages arrive. Navigation property.  Read-only.
     * @return Event|null
    */
    public function getEvent(): ?Event {
        return $this->event;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->isAllDay;
    }

    /**
     * Gets the isDelegated property value. The isDelegated property
     * @return bool|null
    */
    public function getIsDelegated(): ?bool {
        return $this->isDelegated;
    }

    /**
     * Gets the isOutOfDate property value. The isOutOfDate property
     * @return bool|null
    */
    public function getIsOutOfDate(): ?bool {
        return $this->isOutOfDate;
    }

    /**
     * Gets the location property value. The location property
     * @return Location|null
    */
    public function getLocation(): ?Location {
        return $this->location;
    }

    /**
     * Gets the meetingMessageType property value. The meetingMessageType property
     * @return MeetingMessageType|null
    */
    public function getMeetingMessageType(): ?MeetingMessageType {
        return $this->meetingMessageType;
    }

    /**
     * Gets the recurrence property value. The recurrence property
     * @return PatternedRecurrence|null
    */
    public function getRecurrence(): ?PatternedRecurrence {
        return $this->recurrence;
    }

    /**
     * Gets the startDateTime property value. The startDateTime property
     * @return DateTimeTimeZone|null
    */
    public function getStartDateTime(): ?DateTimeTimeZone {
        return $this->startDateTime;
    }

    /**
     * Gets the type property value. The type property
     * @return EventType|null
    */
    public function getType(): ?EventType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('endDateTime', $this->endDateTime);
        $writer->writeObjectValue('event', $this->event);
        $writer->writeBooleanValue('isAllDay', $this->isAllDay);
        $writer->writeBooleanValue('isDelegated', $this->isDelegated);
        $writer->writeBooleanValue('isOutOfDate', $this->isOutOfDate);
        $writer->writeObjectValue('location', $this->location);
        $writer->writeEnumValue('meetingMessageType', $this->meetingMessageType);
        $writer->writeObjectValue('recurrence', $this->recurrence);
        $writer->writeObjectValue('startDateTime', $this->startDateTime);
        $writer->writeEnumValue('type', $this->type);
    }

    /**
     * Sets the endDateTime property value. The endDateTime property
     *  @param DateTimeTimeZone|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTimeTimeZone $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the event property value. The event associated with the event message. The assumption for attendees or room resources is that the Calendar Attendant is set to automatically update the calendar with an event when meeting request event messages arrive. Navigation property.  Read-only.
     *  @param Event|null $value Value to set for the event property.
    */
    public function setEvent(?Event $value ): void {
        $this->event = $value;
    }

    /**
     * Sets the isAllDay property value. The isAllDay property
     *  @param bool|null $value Value to set for the isAllDay property.
    */
    public function setIsAllDay(?bool $value ): void {
        $this->isAllDay = $value;
    }

    /**
     * Sets the isDelegated property value. The isDelegated property
     *  @param bool|null $value Value to set for the isDelegated property.
    */
    public function setIsDelegated(?bool $value ): void {
        $this->isDelegated = $value;
    }

    /**
     * Sets the isOutOfDate property value. The isOutOfDate property
     *  @param bool|null $value Value to set for the isOutOfDate property.
    */
    public function setIsOutOfDate(?bool $value ): void {
        $this->isOutOfDate = $value;
    }

    /**
     * Sets the location property value. The location property
     *  @param Location|null $value Value to set for the location property.
    */
    public function setLocation(?Location $value ): void {
        $this->location = $value;
    }

    /**
     * Sets the meetingMessageType property value. The meetingMessageType property
     *  @param MeetingMessageType|null $value Value to set for the meetingMessageType property.
    */
    public function setMeetingMessageType(?MeetingMessageType $value ): void {
        $this->meetingMessageType = $value;
    }

    /**
     * Sets the recurrence property value. The recurrence property
     *  @param PatternedRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?PatternedRecurrence $value ): void {
        $this->recurrence = $value;
    }

    /**
     * Sets the startDateTime property value. The startDateTime property
     *  @param DateTimeTimeZone|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTimeTimeZone $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the type property value. The type property
     *  @param EventType|null $value Value to set for the type property.
    */
    public function setType(?EventType $value ): void {
        $this->type = $value;
    }

}
