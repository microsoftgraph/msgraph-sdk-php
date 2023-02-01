<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ChatInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new chatInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChatInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChatInfo {
        return new ChatInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'messageId' => fn(ParseNode $n) => $o->setMessageId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'replyChainMessageId' => fn(ParseNode $n) => $o->setReplyChainMessageId($n->getStringValue()),
            'threadId' => fn(ParseNode $n) => $o->setThreadId($n->getStringValue()),
        ];
    }

    /**
     * Gets the messageId property value. The unique identifier of a message in a Microsoft Teams channel.
     * @return string|null
    */
    public function getMessageId(): ?string {
        return $this->getBackingStore()->get('messageId');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the replyChainMessageId property value. The ID of the reply message.
     * @return string|null
    */
    public function getReplyChainMessageId(): ?string {
        return $this->getBackingStore()->get('replyChainMessageId');
    }

    /**
     * Gets the threadId property value. The unique identifier for a thread in Microsoft Teams.
     * @return string|null
    */
    public function getThreadId(): ?string {
        return $this->getBackingStore()->get('threadId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('messageId', $this->getMessageId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('replyChainMessageId', $this->getReplyChainMessageId());
        $writer->writeStringValue('threadId', $this->getThreadId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the messageId property value. The unique identifier of a message in a Microsoft Teams channel.
     * @param string|null $value Value to set for the messageId property.
    */
    public function setMessageId(?string $value): void {
        $this->getBackingStore()->set('messageId', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the replyChainMessageId property value. The ID of the reply message.
     * @param string|null $value Value to set for the replyChainMessageId property.
    */
    public function setReplyChainMessageId(?string $value): void {
        $this->getBackingStore()->set('replyChainMessageId', $value);
    }

    /**
     * Sets the threadId property value. The unique identifier for a thread in Microsoft Teams.
     * @param string|null $value Value to set for the threadId property.
    */
    public function setThreadId(?string $value): void {
        $this->getBackingStore()->set('threadId', $value);
    }

}
