<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CallEndedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * @var DateInterval|null $callDuration Duration of the call.
    */
    private ?DateInterval $callDuration = null;
    
    /**
     * @var TeamworkCallEventType|null $callEventType Represents the call event type. Possible values are: call, meeting, screenShare, unknownFutureValue.
    */
    private ?TeamworkCallEventType $callEventType = null;
    
    /**
     * @var string|null $callId Unique identifier of the call.
    */
    private ?string $callId = null;
    
    /**
     * @var array<CallParticipantInfo>|null $callParticipants List of call participants.
    */
    private ?array $callParticipants = null;
    
    /**
     * @var IdentitySet|null $initiator Initiator of the event.
    */
    private ?IdentitySet $initiator = null;
    
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
        return $this->callDuration;
    }

    /**
     * Gets the callEventType property value. Represents the call event type. Possible values are: call, meeting, screenShare, unknownFutureValue.
     * @return TeamworkCallEventType|null
    */
    public function getCallEventType(): ?TeamworkCallEventType {
        return $this->callEventType;
    }

    /**
     * Gets the callId property value. Unique identifier of the call.
     * @return string|null
    */
    public function getCallId(): ?string {
        return $this->callId;
    }

    /**
     * Gets the callParticipants property value. List of call participants.
     * @return array<CallParticipantInfo>|null
    */
    public function getCallParticipants(): ?array {
        return $this->callParticipants;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'callDuration' => function (ParseNode $n) use ($o) { $o->setCallDuration($n->getDateIntervalValue()); },
            'callEventType' => function (ParseNode $n) use ($o) { $o->setCallEventType($n->getEnumValue(TeamworkCallEventType::class)); },
            'callId' => function (ParseNode $n) use ($o) { $o->setCallId($n->getStringValue()); },
            'callParticipants' => function (ParseNode $n) use ($o) { $o->setCallParticipants($n->getCollectionOfObjectValues(array(CallParticipantInfo::class, 'createFromDiscriminatorValue'))); },
            'initiator' => function (ParseNode $n) use ($o) { $o->setInitiator($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateIntervalValue('callDuration', $this->callDuration);
        $writer->writeEnumValue('callEventType', $this->callEventType);
        $writer->writeStringValue('callId', $this->callId);
        $writer->writeCollectionOfObjectValues('callParticipants', $this->callParticipants);
        $writer->writeObjectValue('initiator', $this->initiator);
    }

    /**
     * Sets the callDuration property value. Duration of the call.
     *  @param DateInterval|null $value Value to set for the callDuration property.
    */
    public function setCallDuration(?DateInterval $value ): void {
        $this->callDuration = $value;
    }

    /**
     * Sets the callEventType property value. Represents the call event type. Possible values are: call, meeting, screenShare, unknownFutureValue.
     *  @param TeamworkCallEventType|null $value Value to set for the callEventType property.
    */
    public function setCallEventType(?TeamworkCallEventType $value ): void {
        $this->callEventType = $value;
    }

    /**
     * Sets the callId property value. Unique identifier of the call.
     *  @param string|null $value Value to set for the callId property.
    */
    public function setCallId(?string $value ): void {
        $this->callId = $value;
    }

    /**
     * Sets the callParticipants property value. List of call participants.
     *  @param array<CallParticipantInfo>|null $value Value to set for the callParticipants property.
    */
    public function setCallParticipants(?array $value ): void {
        $this->callParticipants = $value;
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     *  @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value ): void {
        $this->initiator = $value;
    }

}
