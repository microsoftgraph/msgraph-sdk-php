<?php

namespace Microsoft\Graph\Generated\Users\Item\SendMail;

use Microsoft\Graph\Generated\Models\Message;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SendMailPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SendMailPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendMailPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SendMailPostRequestBody {
        return new SendMailPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'Message' => fn(ParseNode $n) => $o->setMessage($n->getObjectValue([Message::class, 'createFromDiscriminatorValue'])),
            'SaveToSentItems' => fn(ParseNode $n) => $o->setSaveToSentItems($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the Message property value. The Message property
     * @return Message|null
    */
    public function getMessage(): ?Message {
        $val = $this->getBackingStore()->get('message');
        if (is_null($val) || $val instanceof Message) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'message'");
    }

    /**
     * Gets the SaveToSentItems property value. The SaveToSentItems property
     * @return bool|null
    */
    public function getSaveToSentItems(): ?bool {
        $val = $this->getBackingStore()->get('saveToSentItems');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'saveToSentItems'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('Message', $this->getMessage());
        $writer->writeBooleanValue('SaveToSentItems', $this->getSaveToSentItems());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the Message property value. The Message property
     * @param Message|null $value Value to set for the Message property.
    */
    public function setMessage(?Message $value): void {
        $this->getBackingStore()->set('message', $value);
    }

    /**
     * Sets the SaveToSentItems property value. The SaveToSentItems property
     * @param bool|null $value Value to set for the SaveToSentItems property.
    */
    public function setSaveToSentItems(?bool $value): void {
        $this->getBackingStore()->set('saveToSentItems', $value);
    }

}
