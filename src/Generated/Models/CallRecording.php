<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class CallRecording extends Entity implements Parsable 
{
    /**
     * Instantiates a new CallRecording and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CallRecording
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CallRecording {
        return new CallRecording();
    }

    /**
     * Gets the callId property value. The unique identifier for the call that is related to this recording. Read-only.
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
     * Gets the content property value. The content of the recording. Read-only.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * Gets the contentCorrelationId property value. The unique identifier that links the transcript with its corresponding recording. Read-only.
     * @return string|null
    */
    public function getContentCorrelationId(): ?string {
        $val = $this->getBackingStore()->get('contentCorrelationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentCorrelationId'");
    }

    /**
     * Gets the createdDateTime property value. Date and time at which the recording was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the endDateTime property value. Date and time at which the recording ends. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
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
            'callId' => fn(ParseNode $n) => $o->setCallId($n->getStringValue()),
            'content' => fn(ParseNode $n) => $o->setContent($n->getBinaryContent()),
            'contentCorrelationId' => fn(ParseNode $n) => $o->setContentCorrelationId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'meetingId' => fn(ParseNode $n) => $o->setMeetingId($n->getStringValue()),
            'meetingOrganizer' => fn(ParseNode $n) => $o->setMeetingOrganizer($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'recordingContentUrl' => fn(ParseNode $n) => $o->setRecordingContentUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the meetingId property value. The unique identifier of the onlineMeeting related to this recording. Read-only.
     * @return string|null
    */
    public function getMeetingId(): ?string {
        $val = $this->getBackingStore()->get('meetingId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'meetingId'");
    }

    /**
     * Gets the meetingOrganizer property value. The identity information of the organizer of the onlineMeeting related to this recording. Read-only.
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
     * Gets the recordingContentUrl property value. The URL that can be used to access the content of the recording. Read-only.
     * @return string|null
    */
    public function getRecordingContentUrl(): ?string {
        $val = $this->getBackingStore()->get('recordingContentUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recordingContentUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('callId', $this->getCallId());
        $writer->writeBinaryContent('content', $this->getContent());
        $writer->writeStringValue('contentCorrelationId', $this->getContentCorrelationId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeStringValue('meetingId', $this->getMeetingId());
        $writer->writeObjectValue('meetingOrganizer', $this->getMeetingOrganizer());
        $writer->writeStringValue('recordingContentUrl', $this->getRecordingContentUrl());
    }

    /**
     * Sets the callId property value. The unique identifier for the call that is related to this recording. Read-only.
     * @param string|null $value Value to set for the callId property.
    */
    public function setCallId(?string $value): void {
        $this->getBackingStore()->set('callId', $value);
    }

    /**
     * Sets the content property value. The content of the recording. Read-only.
     * @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the contentCorrelationId property value. The unique identifier that links the transcript with its corresponding recording. Read-only.
     * @param string|null $value Value to set for the contentCorrelationId property.
    */
    public function setContentCorrelationId(?string $value): void {
        $this->getBackingStore()->set('contentCorrelationId', $value);
    }

    /**
     * Sets the createdDateTime property value. Date and time at which the recording was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the endDateTime property value. Date and time at which the recording ends. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the meetingId property value. The unique identifier of the onlineMeeting related to this recording. Read-only.
     * @param string|null $value Value to set for the meetingId property.
    */
    public function setMeetingId(?string $value): void {
        $this->getBackingStore()->set('meetingId', $value);
    }

    /**
     * Sets the meetingOrganizer property value. The identity information of the organizer of the onlineMeeting related to this recording. Read-only.
     * @param IdentitySet|null $value Value to set for the meetingOrganizer property.
    */
    public function setMeetingOrganizer(?IdentitySet $value): void {
        $this->getBackingStore()->set('meetingOrganizer', $value);
    }

    /**
     * Sets the recordingContentUrl property value. The URL that can be used to access the content of the recording. Read-only.
     * @param string|null $value Value to set for the recordingContentUrl property.
    */
    public function setRecordingContentUrl(?string $value): void {
        $this->getBackingStore()->set('recordingContentUrl', $value);
    }

}
