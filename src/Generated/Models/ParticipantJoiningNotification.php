<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ParticipantJoiningNotification extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new participantJoiningNotification and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ParticipantJoiningNotification
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ParticipantJoiningNotification {
        return new ParticipantJoiningNotification();
    }

    /**
     * Gets the call property value. The call property
     * @return Call|null
    */
    public function getCall(): ?Call {
        $val = $this->getBackingStore()->get('call');
        if (is_null($val) || $val instanceof Call) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'call'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'call' => fn(ParseNode $n) => $o->setCall($n->getObjectValue([Call::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('call', $this->getCall());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the call property value. The call property
     * @param Call|null $value Value to set for the call property.
    */
    public function setCall(?Call $value): void {
        $this->getBackingStore()->set('call', $value);
    }

}
