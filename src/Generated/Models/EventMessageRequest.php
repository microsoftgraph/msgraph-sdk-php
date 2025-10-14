<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EventMessageRequest extends EventMessage implements Parsable 
{
    /**
     * Instantiates a new EventMessageRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.eventMessageRequest');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EventMessageRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EventMessageRequest {
        return new EventMessageRequest();
    }

    /**
     * Gets the allowNewTimeProposals property value. True if the meeting organizer allows invitees to propose a new time when responding, false otherwise. Optional. Default is true.
     * @return bool|null
    */
    public function getAllowNewTimeProposals(): ?bool {
        $val = $this->getBackingStore()->get('allowNewTimeProposals');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowNewTimeProposals'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowNewTimeProposals' => fn(ParseNode $n) => $o->setAllowNewTimeProposals($n->getBooleanValue()),
            'meetingRequestType' => fn(ParseNode $n) => $o->setMeetingRequestType($n->getEnumValue(MeetingRequestType::class)),
            'previousEndDateTime' => fn(ParseNode $n) => $o->setPreviousEndDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'previousLocation' => fn(ParseNode $n) => $o->setPreviousLocation($n->getObjectValue([Location::class, 'createFromDiscriminatorValue'])),
            'previousStartDateTime' => fn(ParseNode $n) => $o->setPreviousStartDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'responseRequested' => fn(ParseNode $n) => $o->setResponseRequested($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the meetingRequestType property value. The meetingRequestType property
     * @return MeetingRequestType|null
    */
    public function getMeetingRequestType(): ?MeetingRequestType {
        $val = $this->getBackingStore()->get('meetingRequestType');
        if (is_null($val) || $val instanceof MeetingRequestType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'meetingRequestType'");
    }

    /**
     * Gets the previousEndDateTime property value. If the meeting update changes the meeting end time, this property specifies the previous meeting end time.
     * @return DateTimeTimeZone|null
    */
    public function getPreviousEndDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('previousEndDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'previousEndDateTime'");
    }

    /**
     * Gets the previousLocation property value. If the meeting update changes the meeting location, this property specifies the previous meeting location.
     * @return Location|null
    */
    public function getPreviousLocation(): ?Location {
        $val = $this->getBackingStore()->get('previousLocation');
        if (is_null($val) || $val instanceof Location) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'previousLocation'");
    }

    /**
     * Gets the previousStartDateTime property value. If the meeting update changes the meeting start time, this property specifies the previous meeting start time.
     * @return DateTimeTimeZone|null
    */
    public function getPreviousStartDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('previousStartDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'previousStartDateTime'");
    }

    /**
     * Gets the responseRequested property value. Set to true if the sender would like the invitee to send a response to the requested meeting.
     * @return bool|null
    */
    public function getResponseRequested(): ?bool {
        $val = $this->getBackingStore()->get('responseRequested');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'responseRequested'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowNewTimeProposals', $this->getAllowNewTimeProposals());
        $writer->writeEnumValue('meetingRequestType', $this->getMeetingRequestType());
        $writer->writeObjectValue('previousEndDateTime', $this->getPreviousEndDateTime());
        $writer->writeObjectValue('previousLocation', $this->getPreviousLocation());
        $writer->writeObjectValue('previousStartDateTime', $this->getPreviousStartDateTime());
        $writer->writeBooleanValue('responseRequested', $this->getResponseRequested());
    }

    /**
     * Sets the allowNewTimeProposals property value. True if the meeting organizer allows invitees to propose a new time when responding, false otherwise. Optional. Default is true.
     * @param bool|null $value Value to set for the allowNewTimeProposals property.
    */
    public function setAllowNewTimeProposals(?bool $value): void {
        $this->getBackingStore()->set('allowNewTimeProposals', $value);
    }

    /**
     * Sets the meetingRequestType property value. The meetingRequestType property
     * @param MeetingRequestType|null $value Value to set for the meetingRequestType property.
    */
    public function setMeetingRequestType(?MeetingRequestType $value): void {
        $this->getBackingStore()->set('meetingRequestType', $value);
    }

    /**
     * Sets the previousEndDateTime property value. If the meeting update changes the meeting end time, this property specifies the previous meeting end time.
     * @param DateTimeTimeZone|null $value Value to set for the previousEndDateTime property.
    */
    public function setPreviousEndDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('previousEndDateTime', $value);
    }

    /**
     * Sets the previousLocation property value. If the meeting update changes the meeting location, this property specifies the previous meeting location.
     * @param Location|null $value Value to set for the previousLocation property.
    */
    public function setPreviousLocation(?Location $value): void {
        $this->getBackingStore()->set('previousLocation', $value);
    }

    /**
     * Sets the previousStartDateTime property value. If the meeting update changes the meeting start time, this property specifies the previous meeting start time.
     * @param DateTimeTimeZone|null $value Value to set for the previousStartDateTime property.
    */
    public function setPreviousStartDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('previousStartDateTime', $value);
    }

    /**
     * Sets the responseRequested property value. Set to true if the sender would like the invitee to send a response to the requested meeting.
     * @param bool|null $value Value to set for the responseRequested property.
    */
    public function setResponseRequested(?bool $value): void {
        $this->getBackingStore()->set('responseRequested', $value);
    }

}
