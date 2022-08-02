<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Attendee extends AttendeeBase implements Parsable 
{
    /**
     * @var TimeSlot|null $proposedNewTime An alternate date/time proposed by the attendee for a meeting request to start and end. If the attendee hasn't proposed another time, then this property is not included in a response of a GET event.
    */
    private ?TimeSlot $proposedNewTime = null;
    
    /**
     * @var ResponseStatus|null $status The attendee's response (none, accepted, declined, etc.) for the event and date-time that the response was sent.
    */
    private ?ResponseStatus $status = null;
    
    /**
     * Instantiates a new Attendee and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.attendee');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Attendee
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Attendee {
        return new Attendee();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'proposedNewTime' => function (ParseNode $n) use ($o) { $o->setProposedNewTime($n->getObjectValue(array(TimeSlot::class, 'createFromDiscriminatorValue'))); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getObjectValue(array(ResponseStatus::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the proposedNewTime property value. An alternate date/time proposed by the attendee for a meeting request to start and end. If the attendee hasn't proposed another time, then this property is not included in a response of a GET event.
     * @return TimeSlot|null
    */
    public function getProposedNewTime(): ?TimeSlot {
        return $this->proposedNewTime;
    }

    /**
     * Gets the status property value. The attendee's response (none, accepted, declined, etc.) for the event and date-time that the response was sent.
     * @return ResponseStatus|null
    */
    public function getStatus(): ?ResponseStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('proposedNewTime', $this->proposedNewTime);
        $writer->writeObjectValue('status', $this->status);
    }

    /**
     * Sets the proposedNewTime property value. An alternate date/time proposed by the attendee for a meeting request to start and end. If the attendee hasn't proposed another time, then this property is not included in a response of a GET event.
     *  @param TimeSlot|null $value Value to set for the proposedNewTime property.
    */
    public function setProposedNewTime(?TimeSlot $value ): void {
        $this->proposedNewTime = $value;
    }

    /**
     * Sets the status property value. The attendee's response (none, accepted, declined, etc.) for the event and date-time that the response was sent.
     *  @param ResponseStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ResponseStatus $value ): void {
        $this->status = $value;
    }

}
