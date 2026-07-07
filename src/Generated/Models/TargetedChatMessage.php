<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TargetedChatMessage extends ChatMessage implements Parsable 
{
    /**
     * Instantiates a new TargetedChatMessage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.targetedChatMessage');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TargetedChatMessage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TargetedChatMessage {
        return new TargetedChatMessage();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'recipient' => fn(ParseNode $n) => $o->setRecipient($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the recipient property value. The recipient property
     * @return Identity|null
    */
    public function getRecipient(): ?Identity {
        $val = $this->getBackingStore()->get('recipient');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipient'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('recipient', $this->getRecipient());
    }

    /**
     * Sets the recipient property value. The recipient property
     * @param Identity|null $value Value to set for the recipient property.
    */
    public function setRecipient(?Identity $value): void {
        $this->getBackingStore()->set('recipient', $value);
    }

}
