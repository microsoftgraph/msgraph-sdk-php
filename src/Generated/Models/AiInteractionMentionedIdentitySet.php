<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AiInteractionMentionedIdentitySet extends IdentitySet implements Parsable 
{
    /**
     * Instantiates a new AiInteractionMentionedIdentitySet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.aiInteractionMentionedIdentitySet');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AiInteractionMentionedIdentitySet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AiInteractionMentionedIdentitySet {
        return new AiInteractionMentionedIdentitySet();
    }

    /**
     * Gets the conversation property value. The conversation property
     * @return TeamworkConversationIdentity|null
    */
    public function getConversation(): ?TeamworkConversationIdentity {
        $val = $this->getBackingStore()->get('conversation');
        if (is_null($val) || $val instanceof TeamworkConversationIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conversation'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'conversation' => fn(ParseNode $n) => $o->setConversation($n->getObjectValue([TeamworkConversationIdentity::class, 'createFromDiscriminatorValue'])),
            'tag' => fn(ParseNode $n) => $o->setTag($n->getObjectValue([TeamworkTagIdentity::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the tag property value. The tag details.
     * @return TeamworkTagIdentity|null
    */
    public function getTag(): ?TeamworkTagIdentity {
        $val = $this->getBackingStore()->get('tag');
        if (is_null($val) || $val instanceof TeamworkTagIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tag'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('conversation', $this->getConversation());
        $writer->writeObjectValue('tag', $this->getTag());
    }

    /**
     * Sets the conversation property value. The conversation property
     * @param TeamworkConversationIdentity|null $value Value to set for the conversation property.
    */
    public function setConversation(?TeamworkConversationIdentity $value): void {
        $this->getBackingStore()->set('conversation', $value);
    }

    /**
     * Sets the tag property value. The tag details.
     * @param TeamworkTagIdentity|null $value Value to set for the tag property.
    */
    public function setTag(?TeamworkTagIdentity $value): void {
        $this->getBackingStore()->set('tag', $value);
    }

}
