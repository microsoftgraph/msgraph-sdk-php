<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CallEndedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * Instantiates a new CallEndedEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.callEndedEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CallEndedEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CallEndedEventMessageDetail {
        return new CallEndedEventMessageDetail();
    }

    /**
     * Gets the callDuration property value. Duration of the call.
     * @return DateInterval|null
    */
    public function getCallDuration(): ?DateInterval {
        return $this->getBackingStore()->get('callDuration');
    }

    /**
     * Gets the callEventType property value. Represents the call event type. Possible values are: call, meeting, screenShare, unknownFutureValue.
     * @return TeamworkCallEventType|null
    */
    public function getCallEventType(): ?TeamworkCallEventType {
        return $this->getBackingStore()->get('callEventType');
    }

    /**
     * Gets the callId property value. Unique identifier of the call.
     * @return string|null
    */
    public function getCallId(): ?string {
        return $this->getBackingStore()->get('callId');
    }

    /**
     * Gets the callParticipants property value. List of call participants.
     * @return array<CallParticipantInfo>|null
    */
    public function getCallParticipants(): ?array {
        return $this->getBackingStore()->get('callParticipants');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'callDuration' => fn(ParseNode $n) => $o->setCallDuration($n->getDateIntervalValue()),
            'callEventType' => fn(ParseNode $n) => $o->setCallEventType($n->getEnumValue(TeamworkCallEventType::class)),
            'callId' => fn(ParseNode $n) => $o->setCallId($n->getStringValue()),
            'callParticipants' => fn(ParseNode $n) => $o->setCallParticipants($n->getCollectionOfObjectValues([CallParticipantInfo::class, 'createFromDiscriminatorValue'])),
            'initiator' => fn(ParseNode $n) => $o->setInitiator($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the initiator property value. Initiator of the event.
     * @return IdentitySet|null
    */
    public function getInitiator(): ?IdentitySet {
        return $this->getBackingStore()->get('initiator');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateIntervalValue('callDuration', $this->getCallDuration());
        $writer->writeEnumValue('callEventType', $this->getCallEventType());
        $writer->writeStringValue('callId', $this->getCallId());
        $writer->writeCollectionOfObjectValues('callParticipants', $this->getCallParticipants());
        $writer->writeObjectValue('initiator', $this->getInitiator());
    }

    /**
     * Sets the callDuration property value. Duration of the call.
     * @param DateInterval|null $value Value to set for the callDuration property.
    */
    public function setCallDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('callDuration', $value);
    }

    /**
     * Sets the callEventType property value. Represents the call event type. Possible values are: call, meeting, screenShare, unknownFutureValue.
     * @param TeamworkCallEventType|null $value Value to set for the callEventType property.
    */
    public function setCallEventType(?TeamworkCallEventType $value): void {
        $this->getBackingStore()->set('callEventType', $value);
    }

    /**
     * Sets the callId property value. Unique identifier of the call.
     * @param string|null $value Value to set for the callId property.
    */
    public function setCallId(?string $value): void {
        $this->getBackingStore()->set('callId', $value);
    }

    /**
     * Sets the callParticipants property value. List of call participants.
     * @param array<CallParticipantInfo>|null $value Value to set for the callParticipants property.
    */
    public function setCallParticipants(?array $value): void {
        $this->getBackingStore()->set('callParticipants', $value);
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     * @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value): void {
        $this->getBackingStore()->set('initiator', $value);
    }

}
