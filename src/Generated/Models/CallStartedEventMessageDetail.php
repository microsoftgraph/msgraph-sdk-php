<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CallStartedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * Instantiates a new CallStartedEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.callStartedEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CallStartedEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CallStartedEventMessageDetail {
        return new CallStartedEventMessageDetail();
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'callEventType' => fn(ParseNode $n) => $o->setCallEventType($n->getEnumValue(TeamworkCallEventType::class)),
            'callId' => fn(ParseNode $n) => $o->setCallId($n->getStringValue()),
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
        $writer->writeEnumValue('callEventType', $this->getCallEventType());
        $writer->writeStringValue('callId', $this->getCallId());
        $writer->writeObjectValue('initiator', $this->getInitiator());
    }

    /**
     * Sets the callEventType property value. Represents the call event type. Possible values are: call, meeting, screenShare, unknownFutureValue.
     *  @param TeamworkCallEventType|null $value Value to set for the callEventType property.
    */
    public function setCallEventType(?TeamworkCallEventType $value): void {
        $this->getBackingStore()->set('callEventType', $value);
    }

    /**
     * Sets the callId property value. Unique identifier of the call.
     *  @param string|null $value Value to set for the callId property.
    */
    public function setCallId(?string $value): void {
        $this->getBackingStore()->set('callId', $value);
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     *  @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value): void {
        $this->getBackingStore()->set('initiator', $value);
    }

}
