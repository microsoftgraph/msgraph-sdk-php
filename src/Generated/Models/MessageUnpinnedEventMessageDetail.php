<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MessageUnpinnedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * @var DateTime|null $eventDateTime The eventDateTime property
    */
    private ?DateTime $eventDateTime = null;
    
    /**
     * @var IdentitySet|null $initiator The initiator property
    */
    private ?IdentitySet $initiator = null;
    
    /**
     * Instantiates a new MessageUnpinnedEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.messageUnpinnedEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MessageUnpinnedEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MessageUnpinnedEventMessageDetail {
        return new MessageUnpinnedEventMessageDetail();
    }

    /**
     * Gets the eventDateTime property value. The eventDateTime property
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        return $this->eventDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'eventDateTime' => function (ParseNode $n) use ($o) { $o->setEventDateTime($n->getDateTimeValue()); },
            'initiator' => function (ParseNode $n) use ($o) { $o->setInitiator($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the initiator property value. The initiator property
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
        $writer->writeDateTimeValue('eventDateTime', $this->eventDateTime);
        $writer->writeObjectValue('initiator', $this->initiator);
    }

    /**
     * Sets the eventDateTime property value. The eventDateTime property
     *  @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value ): void {
        $this->eventDateTime = $value;
    }

    /**
     * Sets the initiator property value. The initiator property
     *  @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value ): void {
        $this->initiator = $value;
    }

}
