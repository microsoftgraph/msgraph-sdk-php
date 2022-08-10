<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EventMessageRequest extends EventMessage implements Parsable 
{
    /**
     * @var bool|null $allowNewTimeProposals True if the meeting organizer allows invitees to propose a new time when responding, false otherwise. Optional. Default is true.
    */
    private ?bool $allowNewTimeProposals = null;
    
    /**
     * @var MeetingRequestType|null $meetingRequestType The meetingRequestType property
    */
    private ?MeetingRequestType $meetingRequestType = null;
    
    /**
     * @var DateTimeTimeZone|null $previousEndDateTime If the meeting update changes the meeting end time, this property specifies the previous meeting end time.
    */
    private ?DateTimeTimeZone $previousEndDateTime = null;
    
    /**
     * @var Location|null $previousLocation If the meeting update changes the meeting location, this property specifies the previous meeting location.
    */
    private ?Location $previousLocation = null;
    
    /**
     * @var DateTimeTimeZone|null $previousStartDateTime If the meeting update changes the meeting start time, this property specifies the previous meeting start time.
    */
    private ?DateTimeTimeZone $previousStartDateTime = null;
    
    /**
     * @var bool|null $responseRequested Set to true if the sender would like the invitee to send a response to the requested meeting.
    */
    private ?bool $responseRequested = null;
    
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
        return $this->allowNewTimeProposals;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowNewTimeProposals' => function (ParseNode $n) use ($o) { $o->setAllowNewTimeProposals($n->getBooleanValue()); },
            'meetingRequestType' => function (ParseNode $n) use ($o) { $o->setMeetingRequestType($n->getEnumValue(MeetingRequestType::class)); },
            'previousEndDateTime' => function (ParseNode $n) use ($o) { $o->setPreviousEndDateTime($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
            'previousLocation' => function (ParseNode $n) use ($o) { $o->setPreviousLocation($n->getObjectValue(array(Location::class, 'createFromDiscriminatorValue'))); },
            'previousStartDateTime' => function (ParseNode $n) use ($o) { $o->setPreviousStartDateTime($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
            'responseRequested' => function (ParseNode $n) use ($o) { $o->setResponseRequested($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the meetingRequestType property value. The meetingRequestType property
     * @return MeetingRequestType|null
    */
    public function getMeetingRequestType(): ?MeetingRequestType {
        return $this->meetingRequestType;
    }

    /**
     * Gets the previousEndDateTime property value. If the meeting update changes the meeting end time, this property specifies the previous meeting end time.
     * @return DateTimeTimeZone|null
    */
    public function getPreviousEndDateTime(): ?DateTimeTimeZone {
        return $this->previousEndDateTime;
    }

    /**
     * Gets the previousLocation property value. If the meeting update changes the meeting location, this property specifies the previous meeting location.
     * @return Location|null
    */
    public function getPreviousLocation(): ?Location {
        return $this->previousLocation;
    }

    /**
     * Gets the previousStartDateTime property value. If the meeting update changes the meeting start time, this property specifies the previous meeting start time.
     * @return DateTimeTimeZone|null
    */
    public function getPreviousStartDateTime(): ?DateTimeTimeZone {
        return $this->previousStartDateTime;
    }

    /**
     * Gets the responseRequested property value. Set to true if the sender would like the invitee to send a response to the requested meeting.
     * @return bool|null
    */
    public function getResponseRequested(): ?bool {
        return $this->responseRequested;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowNewTimeProposals', $this->allowNewTimeProposals);
        $writer->writeEnumValue('meetingRequestType', $this->meetingRequestType);
        $writer->writeObjectValue('previousEndDateTime', $this->previousEndDateTime);
        $writer->writeObjectValue('previousLocation', $this->previousLocation);
        $writer->writeObjectValue('previousStartDateTime', $this->previousStartDateTime);
        $writer->writeBooleanValue('responseRequested', $this->responseRequested);
    }

    /**
     * Sets the allowNewTimeProposals property value. True if the meeting organizer allows invitees to propose a new time when responding, false otherwise. Optional. Default is true.
     *  @param bool|null $value Value to set for the allowNewTimeProposals property.
    */
    public function setAllowNewTimeProposals(?bool $value ): void {
        $this->allowNewTimeProposals = $value;
    }

    /**
     * Sets the meetingRequestType property value. The meetingRequestType property
     *  @param MeetingRequestType|null $value Value to set for the meetingRequestType property.
    */
    public function setMeetingRequestType(?MeetingRequestType $value ): void {
        $this->meetingRequestType = $value;
    }

    /**
     * Sets the previousEndDateTime property value. If the meeting update changes the meeting end time, this property specifies the previous meeting end time.
     *  @param DateTimeTimeZone|null $value Value to set for the previousEndDateTime property.
    */
    public function setPreviousEndDateTime(?DateTimeTimeZone $value ): void {
        $this->previousEndDateTime = $value;
    }

    /**
     * Sets the previousLocation property value. If the meeting update changes the meeting location, this property specifies the previous meeting location.
     *  @param Location|null $value Value to set for the previousLocation property.
    */
    public function setPreviousLocation(?Location $value ): void {
        $this->previousLocation = $value;
    }

    /**
     * Sets the previousStartDateTime property value. If the meeting update changes the meeting start time, this property specifies the previous meeting start time.
     *  @param DateTimeTimeZone|null $value Value to set for the previousStartDateTime property.
    */
    public function setPreviousStartDateTime(?DateTimeTimeZone $value ): void {
        $this->previousStartDateTime = $value;
    }

    /**
     * Sets the responseRequested property value. Set to true if the sender would like the invitee to send a response to the requested meeting.
     *  @param bool|null $value Value to set for the responseRequested property.
    */
    public function setResponseRequested(?bool $value ): void {
        $this->responseRequested = $value;
    }

}
