<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChatRenamedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * @var string|null $chatDisplayName The updated name of the chat.
    */
    private ?string $chatDisplayName = null;
    
    /**
     * @var string|null $chatId Unique identifier of the chat.
    */
    private ?string $chatId = null;
    
    /**
     * @var IdentitySet|null $initiator Initiator of the event.
    */
    private ?IdentitySet $initiator = null;
    
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
        return $this->chatDisplayName;
    }

    /**
     * Gets the chatId property value. Unique identifier of the chat.
     * @return string|null
    */
    public function getChatId(): ?string {
        return $this->chatId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
        return $this->initiator;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('chatDisplayName', $this->chatDisplayName);
        $writer->writeStringValue('chatId', $this->chatId);
        $writer->writeObjectValue('initiator', $this->initiator);
    }

    /**
     * Sets the chatDisplayName property value. The updated name of the chat.
     *  @param string|null $value Value to set for the chatDisplayName property.
    */
    public function setChatDisplayName(?string $value ): void {
        $this->chatDisplayName = $value;
    }

    /**
     * Sets the chatId property value. Unique identifier of the chat.
     *  @param string|null $value Value to set for the chatId property.
    */
    public function setChatId(?string $value ): void {
        $this->chatId = $value;
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     *  @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value ): void {
        $this->initiator = $value;
    }

}
