<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphConvert;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ConvertPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new convertPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConvertPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConvertPostRequestBody {
        return new ConvertPostRequestBody();
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
            'fromUnit' => fn(ParseNode $n) => $o->setFromUnit($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'toUnit' => fn(ParseNode $n) => $o->setToUnit($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the fromUnit property value. 
     * @return Json|null
    */
    public function getFromUnit(): ?Json {
        return $this->getBackingStore()->get('fromUnit');
    }

    /**
     * Gets the number property value. 
     * @return Json|null
    */
    public function getNumber(): ?Json {
        return $this->getBackingStore()->get('number');
    }

    /**
     * Gets the toUnit property value. 
     * @return Json|null
    */
    public function getToUnit(): ?Json {
        return $this->getBackingStore()->get('toUnit');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('fromUnit', $this->getFromUnit());
        $writer->writeObjectValue('number', $this->getNumber());
        $writer->writeObjectValue('toUnit', $this->getToUnit());
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
     * Sets the fromUnit property value. 
     * @param Json|null $value Value to set for the fromUnit property.
    */
    public function setFromUnit(?Json $value): void {
        $this->getBackingStore()->set('fromUnit', $value);
    }

    /**
     * Sets the number property value. 
     * @param Json|null $value Value to set for the number property.
    */
    public function setNumber(?Json $value): void {
        $this->getBackingStore()->set('number', $value);
    }

    /**
     * Sets the toUnit property value. 
     * @param Json|null $value Value to set for the toUnit property.
    */
    public function setToUnit(?Json $value): void {
        $this->getBackingStore()->set('toUnit', $value);
    }

}
