<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EventMessageResponse extends EventMessage implements Parsable 
{
    /**
     * Instantiates a new EventMessageResponse and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.eventMessageResponse');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EventMessageResponse
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EventMessageResponse {
        return new EventMessageResponse();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'proposedNewTime' => fn(ParseNode $n) => $o->setProposedNewTime($n->getObjectValue([TimeSlot::class, 'createFromDiscriminatorValue'])),
            'responseType' => fn(ParseNode $n) => $o->setResponseType($n->getEnumValue(ResponseType::class)),
        ]);
    }

    /**
     * Gets the proposedNewTime property value. The proposedNewTime property
     * @return TimeSlot|null
    */
    public function getProposedNewTime(): ?TimeSlot {
        return $this->getBackingStore()->get('proposedNewTime');
    }

    /**
     * Gets the responseType property value. The responseType property
     * @return ResponseType|null
    */
    public function getResponseType(): ?ResponseType {
        return $this->getBackingStore()->get('responseType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('proposedNewTime', $this->getProposedNewTime());
        $writer->writeEnumValue('responseType', $this->getResponseType());
    }

    /**
     * Sets the proposedNewTime property value. The proposedNewTime property
     * @param TimeSlot|null $value Value to set for the proposedNewTime property.
    */
    public function setProposedNewTime(?TimeSlot $value): void {
        $this->getBackingStore()->set('proposedNewTime', $value);
    }

    /**
     * Sets the responseType property value. The responseType property
     * @param ResponseType|null $value Value to set for the responseType property.
    */
    public function setResponseType(?ResponseType $value): void {
        $this->getBackingStore()->set('responseType', $value);
    }

}
