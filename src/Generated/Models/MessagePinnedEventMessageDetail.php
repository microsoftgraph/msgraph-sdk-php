<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MessagePinnedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new messagePinnedEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.messagePinnedEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MessagePinnedEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MessagePinnedEventMessageDetail {
        return new MessagePinnedEventMessageDetail();
    }

    /**
     * Gets the eventDateTime property value. Date and time when the event occurred.
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('eventDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'eventDateTime' => fn(ParseNode $n) => $o->setEventDateTime($n->getDateTimeValue()),
            'initiator' => fn(ParseNode $n) => $o->setInitiator($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('eventDateTime', $this->getEventDateTime());
        $writer->writeObjectValue('initiator', $this->getInitiator());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the eventDateTime property value. Date and time when the event occurred.
     * @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('eventDateTime', $value);
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     * @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value): void {
        $this->getBackingStore()->set('initiator', $value);
    }

}
