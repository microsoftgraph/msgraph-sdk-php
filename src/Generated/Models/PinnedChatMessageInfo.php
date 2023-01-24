<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PinnedChatMessageInfo extends Entity implements Parsable 
{
    /**
     * Instantiates a new pinnedChatMessageInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PinnedChatMessageInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PinnedChatMessageInfo {
        return new PinnedChatMessageInfo();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'message' => fn(ParseNode $n) => $o->setMessage($n->getObjectValue([ChatMessage::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the message property value. Represents details about the chat message that is pinned.
     * @return ChatMessage|null
    */
    public function getMessage(): ?ChatMessage {
        return $this->getBackingStore()->get('message');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('message', $this->getMessage());
    }

    /**
     * Sets the message property value. Represents details about the chat message that is pinned.
     * @param ChatMessage|null $value Value to set for the message property.
    */
    public function setMessage(?ChatMessage $value): void {
        $this->getBackingStore()->set('message', $value);
    }

}
