<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNumberValue;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class NumberValuePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new numberValuePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NumberValuePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NumberValuePostRequestBody {
        return new NumberValuePostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
     * Gets the decimalSeparator property value. The decimalSeparator property
     * @return Json|null
    */
    public function getDecimalSeparator(): ?Json {
        return $this->getBackingStore()->get('decimalSeparator');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'decimalSeparator' => fn(ParseNode $n) => $o->setDecimalSeparator($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'groupSeparator' => fn(ParseNode $n) => $o->setGroupSeparator($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'text' => fn(ParseNode $n) => $o->setText($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the groupSeparator property value. The groupSeparator property
     * @return Json|null
    */
    public function getGroupSeparator(): ?Json {
        return $this->getBackingStore()->get('groupSeparator');
    }

    /**
     * Gets the text property value. The text property
     * @return Json|null
    */
    public function getText(): ?Json {
        return $this->getBackingStore()->get('text');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('decimalSeparator', $this->getDecimalSeparator());
        $writer->writeObjectValue('groupSeparator', $this->getGroupSeparator());
        $writer->writeObjectValue('text', $this->getText());
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
     * Sets the decimalSeparator property value. The decimalSeparator property
     * @param Json|null $value Value to set for the decimalSeparator property.
    */
    public function setDecimalSeparator(?Json $value): void {
        $this->getBackingStore()->set('decimalSeparator', $value);
    }

    /**
     * Sets the groupSeparator property value. The groupSeparator property
     * @param Json|null $value Value to set for the groupSeparator property.
    */
    public function setGroupSeparator(?Json $value): void {
        $this->getBackingStore()->set('groupSeparator', $value);
    }

    /**
     * Sets the text property value. The text property
     * @param Json|null $value Value to set for the text property.
    */
    public function setText(?Json $value): void {
        $this->getBackingStore()->set('text', $value);
    }

}
