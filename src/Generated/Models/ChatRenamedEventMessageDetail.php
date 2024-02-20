<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChatRenamedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * Instantiates a new ChatRenamedEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.chatRenamedEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChatRenamedEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChatRenamedEventMessageDetail {
        return new ChatRenamedEventMessageDetail();
    }

    /**
     * Gets the chatDisplayName property value. The updated name of the chat.
     * @return string|null
    */
    public function getChatDisplayName(): ?string {
        $val = $this->getBackingStore()->get('chatDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'chatDisplayName'");
    }

    /**
     * Gets the chatId property value. Unique identifier of the chat.
     * @return string|null
    */
    public function getChatId(): ?string {
        $val = $this->getBackingStore()->get('chatId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'chatId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'chatDisplayName' => fn(ParseNode $n) => $o->setChatDisplayName($n->getStringValue()),
            'chatId' => fn(ParseNode $n) => $o->setChatId($n->getStringValue()),
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
        $writer->writeStringValue('chatDisplayName', $this->getChatDisplayName());
        $writer->writeStringValue('chatId', $this->getChatId());
        $writer->writeObjectValue('initiator', $this->getInitiator());
    }

    /**
     * Sets the chatDisplayName property value. The updated name of the chat.
     * @param string|null $value Value to set for the chatDisplayName property.
    */
    public function setChatDisplayName(?string $value): void {
        $this->getBackingStore()->set('chatDisplayName', $value);
    }

    /**
     * Sets the chatId property value. Unique identifier of the chat.
     * @param string|null $value Value to set for the chatId property.
    */
    public function setChatId(?string $value): void {
        $this->getBackingStore()->set('chatId', $value);
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     * @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value): void {
        $this->getBackingStore()->set('initiator', $value);
    }

}
