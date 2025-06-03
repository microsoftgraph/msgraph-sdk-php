<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AiInteractionMention extends Entity implements Parsable 
{
    /**
     * Instantiates a new AiInteractionMention and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AiInteractionMention
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AiInteractionMention {
        return new AiInteractionMention();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'mentioned' => fn(ParseNode $n) => $o->setMentioned($n->getObjectValue([AiInteractionMentionedIdentitySet::class, 'createFromDiscriminatorValue'])),
            'mentionId' => fn(ParseNode $n) => $o->setMentionId($n->getIntegerValue()),
            'mentionText' => fn(ParseNode $n) => $o->setMentionText($n->getStringValue()),
        ]);
    }

    /**
     * Gets the mentioned property value. The entity mentioned in the message.
     * @return AiInteractionMentionedIdentitySet|null
    */
    public function getMentioned(): ?AiInteractionMentionedIdentitySet {
        $val = $this->getBackingStore()->get('mentioned');
        if (is_null($val) || $val instanceof AiInteractionMentionedIdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mentioned'");
    }

    /**
     * Gets the mentionId property value. The identifier for the mention.
     * @return int|null
    */
    public function getMentionId(): ?int {
        $val = $this->getBackingStore()->get('mentionId');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mentionId'");
    }

    /**
     * Gets the mentionText property value. The text mentioned in the message.
     * @return string|null
    */
    public function getMentionText(): ?string {
        $val = $this->getBackingStore()->get('mentionText');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mentionText'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('mentioned', $this->getMentioned());
        $writer->writeIntegerValue('mentionId', $this->getMentionId());
        $writer->writeStringValue('mentionText', $this->getMentionText());
    }

    /**
     * Sets the mentioned property value. The entity mentioned in the message.
     * @param AiInteractionMentionedIdentitySet|null $value Value to set for the mentioned property.
    */
    public function setMentioned(?AiInteractionMentionedIdentitySet $value): void {
        $this->getBackingStore()->set('mentioned', $value);
    }

    /**
     * Sets the mentionId property value. The identifier for the mention.
     * @param int|null $value Value to set for the mentionId property.
    */
    public function setMentionId(?int $value): void {
        $this->getBackingStore()->set('mentionId', $value);
    }

    /**
     * Sets the mentionText property value. The text mentioned in the message.
     * @param string|null $value Value to set for the mentionText property.
    */
    public function setMentionText(?string $value): void {
        $this->getBackingStore()->set('mentionText', $value);
    }

}
