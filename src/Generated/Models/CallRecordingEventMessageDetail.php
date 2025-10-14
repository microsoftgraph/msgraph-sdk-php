<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CallRecordingEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * Instantiates a new CallRecordingEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.callRecordingEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CallRecordingEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CallRecordingEventMessageDetail {
        return new CallRecordingEventMessageDetail();
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
     * Gets the callRecordingDisplayName property value. Display name for the call recording.
     * @return string|null
    */
    public function getCallRecordingDisplayName(): ?string {
        $val = $this->getBackingStore()->get('callRecordingDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callRecordingDisplayName'");
    }

    /**
     * Gets the callRecordingDuration property value. Duration of the call recording.
     * @return DateInterval|null
    */
    public function getCallRecordingDuration(): ?DateInterval {
        $val = $this->getBackingStore()->get('callRecordingDuration');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callRecordingDuration'");
    }

    /**
     * Gets the callRecordingStatus property value. Status of the call recording. Possible values are: success, failure, initial, chunkFinished, unknownFutureValue.
     * @return CallRecordingStatus|null
    */
    public function getCallRecordingStatus(): ?CallRecordingStatus {
        $val = $this->getBackingStore()->get('callRecordingStatus');
        if (is_null($val) || $val instanceof CallRecordingStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callRecordingStatus'");
    }

    /**
     * Gets the callRecordingUrl property value. Call recording URL.
     * @return string|null
    */
    public function getCallRecordingUrl(): ?string {
        $val = $this->getBackingStore()->get('callRecordingUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callRecordingUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'callId' => fn(ParseNode $n) => $o->setCallId($n->getStringValue()),
            'callRecordingDisplayName' => fn(ParseNode $n) => $o->setCallRecordingDisplayName($n->getStringValue()),
            'callRecordingDuration' => fn(ParseNode $n) => $o->setCallRecordingDuration($n->getDateIntervalValue()),
            'callRecordingStatus' => fn(ParseNode $n) => $o->setCallRecordingStatus($n->getEnumValue(CallRecordingStatus::class)),
            'callRecordingUrl' => fn(ParseNode $n) => $o->setCallRecordingUrl($n->getStringValue()),
            'initiator' => fn(ParseNode $n) => $o->setInitiator($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'meetingOrganizer' => fn(ParseNode $n) => $o->setMeetingOrganizer($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the initiator property value. Initiator of the event.
     * @return IdentitySet|null
    */
    public function getInitiator(): ?IdentitySet {
        $val = $this->getBackingStore()->get('initiator');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initiator'");
    }

    /**
     * Gets the meetingOrganizer property value. Organizer of the meeting.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('callId', $this->getCallId());
        $writer->writeStringValue('callRecordingDisplayName', $this->getCallRecordingDisplayName());
        $writer->writeDateIntervalValue('callRecordingDuration', $this->getCallRecordingDuration());
        $writer->writeEnumValue('callRecordingStatus', $this->getCallRecordingStatus());
        $writer->writeStringValue('callRecordingUrl', $this->getCallRecordingUrl());
        $writer->writeObjectValue('initiator', $this->getInitiator());
        $writer->writeObjectValue('meetingOrganizer', $this->getMeetingOrganizer());
    }

    /**
     * Sets the callId property value. Unique identifier of the call.
     * @param string|null $value Value to set for the callId property.
    */
    public function setCallId(?string $value): void {
        $this->getBackingStore()->set('callId', $value);
    }

    /**
     * Sets the callRecordingDisplayName property value. Display name for the call recording.
     * @param string|null $value Value to set for the callRecordingDisplayName property.
    */
    public function setCallRecordingDisplayName(?string $value): void {
        $this->getBackingStore()->set('callRecordingDisplayName', $value);
    }

    /**
     * Sets the callRecordingDuration property value. Duration of the call recording.
     * @param DateInterval|null $value Value to set for the callRecordingDuration property.
    */
    public function setCallRecordingDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('callRecordingDuration', $value);
    }

    /**
     * Sets the callRecordingStatus property value. Status of the call recording. Possible values are: success, failure, initial, chunkFinished, unknownFutureValue.
     * @param CallRecordingStatus|null $value Value to set for the callRecordingStatus property.
    */
    public function setCallRecordingStatus(?CallRecordingStatus $value): void {
        $this->getBackingStore()->set('callRecordingStatus', $value);
    }

    /**
     * Sets the callRecordingUrl property value. Call recording URL.
     * @param string|null $value Value to set for the callRecordingUrl property.
    */
    public function setCallRecordingUrl(?string $value): void {
        $this->getBackingStore()->set('callRecordingUrl', $value);
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     * @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value): void {
        $this->getBackingStore()->set('initiator', $value);
    }

    /**
     * Sets the meetingOrganizer property value. Organizer of the meeting.
     * @param IdentitySet|null $value Value to set for the meetingOrganizer property.
    */
    public function setMeetingOrganizer(?IdentitySet $value): void {
        $this->getBackingStore()->set('meetingOrganizer', $value);
    }

}
