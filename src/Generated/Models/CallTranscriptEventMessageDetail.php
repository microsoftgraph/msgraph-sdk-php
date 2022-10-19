<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CallTranscriptEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * @var string|null $callId Unique identifier of the call.
    */
    private ?string $callId = null;
    
    /**
     * @var string|null $callTranscriptICalUid Unique identifier for a call transcript.
    */
    private ?string $callTranscriptICalUid = null;
    
    /**
     * @var IdentitySet|null $meetingOrganizer The organizer of the meeting.
    */
    private ?IdentitySet $meetingOrganizer = null;
    
    /**
     * Instantiates a new CallTranscriptEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.callTranscriptEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CallTranscriptEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CallTranscriptEventMessageDetail {
        return new CallTranscriptEventMessageDetail();
    }

    /**
     * Gets the callId property value. Unique identifier of the call.
     * @return string|null
    */
    public function getCallId(): ?string {
        return $this->callId;
    }

    /**
     * Gets the callTranscriptICalUid property value. Unique identifier for a call transcript.
     * @return string|null
    */
    public function getCallTranscriptICalUid(): ?string {
        return $this->callTranscriptICalUid;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'callId' => fn(ParseNode $n) => $o->setCallId($n->getStringValue()),
            'callTranscriptICalUid' => fn(ParseNode $n) => $o->setCallTranscriptICalUid($n->getStringValue()),
            'meetingOrganizer' => fn(ParseNode $n) => $o->setMeetingOrganizer($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the meetingOrganizer property value. The organizer of the meeting.
     * @return IdentitySet|null
    */
    public function getMeetingOrganizer(): ?IdentitySet {
        return $this->meetingOrganizer;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('callId', $this->callId);
        $writer->writeStringValue('callTranscriptICalUid', $this->callTranscriptICalUid);
        $writer->writeObjectValue('meetingOrganizer', $this->meetingOrganizer);
    }

    /**
     * Sets the callId property value. Unique identifier of the call.
     *  @param string|null $value Value to set for the callId property.
    */
    public function setCallId(?string $value ): void {
        $this->callId = $value;
    }

    /**
     * Sets the callTranscriptICalUid property value. Unique identifier for a call transcript.
     *  @param string|null $value Value to set for the callTranscriptICalUid property.
    */
    public function setCallTranscriptICalUid(?string $value ): void {
        $this->callTranscriptICalUid = $value;
    }

    /**
     * Sets the meetingOrganizer property value. The organizer of the meeting.
     *  @param IdentitySet|null $value Value to set for the meetingOrganizer property.
    */
    public function setMeetingOrganizer(?IdentitySet $value ): void {
        $this->meetingOrganizer = $value;
    }

}
