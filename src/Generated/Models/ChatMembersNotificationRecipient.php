<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChatMembersNotificationRecipient extends TeamworkNotificationRecipient implements Parsable 
{
    /**
     * Instantiates a new chatMembersNotificationRecipient and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.chatMembersNotificationRecipient');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChatMembersNotificationRecipient
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChatMembersNotificationRecipient {
        return new ChatMembersNotificationRecipient();
    }

    /**
     * Gets the chatId property value. The unique identifier for the chat whose members should receive the notifications.
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
            'chatId' => fn(ParseNode $n) => $o->setChatId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('chatId', $this->getChatId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the chatId property value. The unique identifier for the chat whose members should receive the notifications.
     * @param string|null $value Value to set for the chatId property.
    */
    public function setChatId(?string $value): void {
        $this->getBackingStore()->set('chatId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
