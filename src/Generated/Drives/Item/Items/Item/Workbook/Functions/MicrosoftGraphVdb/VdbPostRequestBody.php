<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphVdb;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class VdbPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new vdbPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VdbPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VdbPostRequestBody {
        return new VdbPostRequestBody();
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
     * Gets the cost property value. 
     * @return Json|null
    */
    public function getCost(): ?Json {
        return $this->getBackingStore()->get('cost');
    }

    /**
     * Gets the endPeriod property value. 
     * @return Json|null
    */
    public function getEndPeriod(): ?Json {
        return $this->getBackingStore()->get('endPeriod');
    }

    /**
     * Gets the factor property value. 
     * @return Json|null
    */
    public function getFactor(): ?Json {
        return $this->getBackingStore()->get('factor');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cost' => fn(ParseNode $n) => $o->setCost($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'endPeriod' => fn(ParseNode $n) => $o->setEndPeriod($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'factor' => fn(ParseNode $n) => $o->setFactor($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'life' => fn(ParseNode $n) => $o->setLife($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'noSwitch' => fn(ParseNode $n) => $o->setNoSwitch($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'salvage' => fn(ParseNode $n) => $o->setSalvage($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'startPeriod' => fn(ParseNode $n) => $o->setStartPeriod($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the life property value. 
     * @return Json|null
    */
    public function getLife(): ?Json {
        return $this->getBackingStore()->get('life');
    }

    /**
     * Gets the noSwitch property value. 
     * @return Json|null
    */
    public function getNoSwitch(): ?Json {
        return $this->getBackingStore()->get('noSwitch');
    }

    /**
     * Gets the salvage property value. 
     * @return Json|null
    */
    public function getSalvage(): ?Json {
        return $this->getBackingStore()->get('salvage');
    }

    /**
     * Gets the startPeriod property value. 
     * @return Json|null
    */
    public function getStartPeriod(): ?Json {
        return $this->getBackingStore()->get('startPeriod');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('cost', $this->getCost());
        $writer->writeObjectValue('endPeriod', $this->getEndPeriod());
        $writer->writeObjectValue('factor', $this->getFactor());
        $writer->writeObjectValue('life', $this->getLife());
        $writer->writeObjectValue('noSwitch', $this->getNoSwitch());
        $writer->writeObjectValue('salvage', $this->getSalvage());
        $writer->writeObjectValue('startPeriod', $this->getStartPeriod());
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
     * Sets the cost property value. 
     * @param Json|null $value Value to set for the cost property.
    */
    public function setCost(?Json $value): void {
        $this->getBackingStore()->set('cost', $value);
    }

    /**
     * Sets the endPeriod property value. 
     * @param Json|null $value Value to set for the endPeriod property.
    */
    public function setEndPeriod(?Json $value): void {
        $this->getBackingStore()->set('endPeriod', $value);
    }

    /**
     * Sets the factor property value. 
     * @param Json|null $value Value to set for the factor property.
    */
    public function setFactor(?Json $value): void {
        $this->getBackingStore()->set('factor', $value);
    }

    /**
     * Sets the life property value. 
     * @param Json|null $value Value to set for the life property.
    */
    public function setLife(?Json $value): void {
        $this->getBackingStore()->set('life', $value);
    }

    /**
     * Sets the noSwitch property value. 
     * @param Json|null $value Value to set for the noSwitch property.
    */
    public function setNoSwitch(?Json $value): void {
        $this->getBackingStore()->set('noSwitch', $value);
    }

    /**
     * Sets the salvage property value. 
     * @param Json|null $value Value to set for the salvage property.
    */
    public function setSalvage(?Json $value): void {
        $this->getBackingStore()->set('salvage', $value);
    }

    /**
     * Sets the startPeriod property value. 
     * @param Json|null $value Value to set for the startPeriod property.
    */
    public function setStartPeriod(?Json $value): void {
        $this->getBackingStore()->set('startPeriod', $value);
    }

}
