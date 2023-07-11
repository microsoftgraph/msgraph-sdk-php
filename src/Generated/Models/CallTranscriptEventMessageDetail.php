<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CallTranscriptEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * Instantiates a new callTranscriptEventMessageDetail and sets the default values.
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
        $val = $this->getBackingStore()->get('callId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callId'");
    }

    /**
     * Gets the callTranscriptICalUid property value. Unique identifier for a call transcript.
     * @return string|null
    */
    public function getCallTranscriptICalUid(): ?string {
        $val = $this->getBackingStore()->get('callTranscriptICalUid');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callTranscriptICalUid'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'callId' => fn(ParseNode $n) => $o->setCallId($n->getStringValue()),
            'callTranscriptICalUid' => fn(ParseNode $n) => $o->setCallTranscriptICalUid($n->getStringValue()),
            'meetingOrganizer' => fn(ParseNode $n) => $o->setMeetingOrganizer($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the meetingOrganizer property value. The organizer of the meeting.
     * @return IdentitySet|null
    */
    public function getMeetingOrganizer(): ?IdentitySet {
        $val = $this->getBackingStore()->get('meetingOrganizer');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'meetingOrganizer'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('callId', $this->getCallId());
        $writer->writeStringValue('callTranscriptICalUid', $this->getCallTranscriptICalUid());
        $writer->writeObjectValue('meetingOrganizer', $this->getMeetingOrganizer());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the callId property value. Unique identifier of the call.
     * @param string|null $value Value to set for the callId property.
    */
    public function setCallId(?string $value): void {
        $this->getBackingStore()->set('callId', $value);
    }

    /**
     * Sets the callTranscriptICalUid property value. Unique identifier for a call transcript.
     * @param string|null $value Value to set for the callTranscriptICalUid property.
    */
    public function setCallTranscriptICalUid(?string $value): void {
        $this->getBackingStore()->set('callTranscriptICalUid', $value);
    }

    /**
     * Sets the meetingOrganizer property value. The organizer of the meeting.
     * @param IdentitySet|null $value Value to set for the meetingOrganizer property.
    */
    public function setMeetingOrganizer(?IdentitySet $value): void {
        $this->getBackingStore()->set('meetingOrganizer', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
