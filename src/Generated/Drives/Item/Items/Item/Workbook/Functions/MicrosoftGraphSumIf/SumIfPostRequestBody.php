<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphSumIf;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SumIfPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new sumIfPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SumIfPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SumIfPostRequestBody {
        return new SumIfPostRequestBody();
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
     * Gets the criteria property value. 
     * @return Json|null
    */
    public function getCriteria(): ?Json {
        return $this->getBackingStore()->get('criteria');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'criteria' => fn(ParseNode $n) => $o->setCriteria($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'range' => fn(ParseNode $n) => $o->setRange($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'sumRange' => fn(ParseNode $n) => $o->setSumRange($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the range property value. 
     * @return Json|null
    */
    public function getRange(): ?Json {
        return $this->getBackingStore()->get('range');
    }

    /**
     * Gets the sumRange property value. 
     * @return Json|null
    */
    public function getSumRange(): ?Json {
        return $this->getBackingStore()->get('sumRange');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('criteria', $this->getCriteria());
        $writer->writeObjectValue('range', $this->getRange());
        $writer->writeObjectValue('sumRange', $this->getSumRange());
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
     * Sets the criteria property value. 
     * @param Json|null $value Value to set for the criteria property.
    */
    public function setCriteria(?Json $value): void {
        $this->getBackingStore()->set('criteria', $value);
    }

    /**
     * Sets the range property value. 
     * @param Json|null $value Value to set for the range property.
    */
    public function setRange(?Json $value): void {
        $this->getBackingStore()->set('range', $value);
    }

    /**
     * Sets the sumRange property value. 
     * @param Json|null $value Value to set for the sumRange property.
    */
    public function setSumRange(?Json $value): void {
        $this->getBackingStore()->set('sumRange', $value);
    }

}
