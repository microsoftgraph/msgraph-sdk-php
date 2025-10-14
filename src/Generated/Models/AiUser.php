<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AiUser extends Entity implements Parsable 
{
    /**
     * Instantiates a new AiUser and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AiUser
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AiUser {
        return new AiUser();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'interactionHistory' => fn(ParseNode $n) => $o->setInteractionHistory($n->getObjectValue([AiInteractionHistory::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the interactionHistory property value. The interactionHistory property
     * @return AiInteractionHistory|null
    */
    public function getInteractionHistory(): ?AiInteractionHistory {
        $val = $this->getBackingStore()->get('interactionHistory');
        if (is_null($val) || $val instanceof AiInteractionHistory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'interactionHistory'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('interactionHistory', $this->getInteractionHistory());
    }

    /**
     * Sets the interactionHistory property value. The interactionHistory property
     * @param AiInteractionHistory|null $value Value to set for the interactionHistory property.
    */
    public function setInteractionHistory(?AiInteractionHistory $value): void {
        $this->getBackingStore()->set('interactionHistory', $value);
    }

}
