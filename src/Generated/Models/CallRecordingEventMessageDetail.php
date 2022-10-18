<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CallRecordingEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * @var string|null $callId Unique identifier of the call.
    */
    private ?string $callId = null;
    
    /**
     * @var string|null $callRecordingDisplayName Display name for the call recording.
    */
    private ?string $callRecordingDisplayName = null;
    
    /**
     * @var DateInterval|null $callRecordingDuration Duration of the call recording.
    */
    private ?DateInterval $callRecordingDuration = null;
    
    /**
     * @var CallRecordingStatus|null $callRecordingStatus Status of the call recording. Possible values are: success, failure, initial, chunkFinished, unknownFutureValue.
    */
    private ?CallRecordingStatus $callRecordingStatus = null;
    
    /**
     * @var string|null $callRecordingUrl Call recording URL.
    */
    private ?string $callRecordingUrl = null;
    
    /**
     * @var IdentitySet|null $initiator Initiator of the event.
    */
    private ?IdentitySet $initiator = null;
    
    /**
     * @var IdentitySet|null $meetingOrganizer Organizer of the meeting.
    */
    private ?IdentitySet $meetingOrganizer = null;
    
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
        return $this->callId;
    }

    /**
     * Gets the callRecordingDisplayName property value. Display name for the call recording.
     * @return string|null
    */
    public function getCallRecordingDisplayName(): ?string {
        return $this->callRecordingDisplayName;
    }

    /**
     * Gets the callRecordingDuration property value. Duration of the call recording.
     * @return DateInterval|null
    */
    public function getCallRecordingDuration(): ?DateInterval {
        return $this->callRecordingDuration;
    }

    /**
     * Gets the callRecordingStatus property value. Status of the call recording. Possible values are: success, failure, initial, chunkFinished, unknownFutureValue.
     * @return CallRecordingStatus|null
    */
    public function getCallRecordingStatus(): ?CallRecordingStatus {
        return $this->callRecordingStatus;
    }

    /**
     * Gets the callRecordingUrl property value. Call recording URL.
     * @return string|null
    */
    public function getCallRecordingUrl(): ?string {
        return $this->callRecordingUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->initiator;
    }

    /**
     * Gets the meetingOrganizer property value. Organizer of the meeting.
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
        $writer->writeStringValue('callRecordingDisplayName', $this->callRecordingDisplayName);
        $writer->writeDateIntervalValue('callRecordingDuration', $this->callRecordingDuration);
        $writer->writeEnumValue('callRecordingStatus', $this->callRecordingStatus);
        $writer->writeStringValue('callRecordingUrl', $this->callRecordingUrl);
        $writer->writeObjectValue('initiator', $this->initiator);
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
     * Sets the callRecordingDisplayName property value. Display name for the call recording.
     *  @param string|null $value Value to set for the callRecordingDisplayName property.
    */
    public function setCallRecordingDisplayName(?string $value ): void {
        $this->callRecordingDisplayName = $value;
    }

    /**
     * Sets the callRecordingDuration property value. Duration of the call recording.
     *  @param DateInterval|null $value Value to set for the callRecordingDuration property.
    */
    public function setCallRecordingDuration(?DateInterval $value ): void {
        $this->callRecordingDuration = $value;
    }

    /**
     * Sets the callRecordingStatus property value. Status of the call recording. Possible values are: success, failure, initial, chunkFinished, unknownFutureValue.
     *  @param CallRecordingStatus|null $value Value to set for the callRecordingStatus property.
    */
    public function setCallRecordingStatus(?CallRecordingStatus $value ): void {
        $this->callRecordingStatus = $value;
    }

    /**
     * Sets the callRecordingUrl property value. Call recording URL.
     *  @param string|null $value Value to set for the callRecordingUrl property.
    */
    public function setCallRecordingUrl(?string $value ): void {
        $this->callRecordingUrl = $value;
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     *  @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value ): void {
        $this->initiator = $value;
    }

    /**
     * Sets the meetingOrganizer property value. Organizer of the meeting.
     *  @param IdentitySet|null $value Value to set for the meetingOrganizer property.
    */
    public function setMeetingOrganizer(?IdentitySet $value ): void {
        $this->meetingOrganizer = $value;
    }

}
