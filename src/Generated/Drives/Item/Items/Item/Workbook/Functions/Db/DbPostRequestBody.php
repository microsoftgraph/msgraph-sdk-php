<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Db;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DbPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new dbPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DbPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DbPostRequestBody {
        return new DbPostRequestBody();
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
     * Gets the cost property value. The cost property
     * @return Json|null
    */
    public function getCost(): ?Json {
        return $this->getBackingStore()->get('cost');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cost' => fn(ParseNode $n) => $o->setCost($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'life' => fn(ParseNode $n) => $o->setLife($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'month' => fn(ParseNode $n) => $o->setMonth($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'period' => fn(ParseNode $n) => $o->setPeriod($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'salvage' => fn(ParseNode $n) => $o->setSalvage($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the life property value. The life property
     * @return Json|null
    */
    public function getLife(): ?Json {
        return $this->getBackingStore()->get('life');
    }

    /**
     * Gets the month property value. The month property
     * @return Json|null
    */
    public function getMonth(): ?Json {
        return $this->getBackingStore()->get('month');
    }

    /**
     * Gets the period property value. The period property
     * @return Json|null
    */
    public function getPeriod(): ?Json {
        return $this->getBackingStore()->get('period');
    }

    /**
     * Gets the salvage property value. The salvage property
     * @return Json|null
    */
    public function getSalvage(): ?Json {
        return $this->getBackingStore()->get('salvage');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('cost', $this->getCost());
        $writer->writeObjectValue('life', $this->getLife());
        $writer->writeObjectValue('month', $this->getMonth());
        $writer->writeObjectValue('period', $this->getPeriod());
        $writer->writeObjectValue('salvage', $this->getSalvage());
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
     * Sets the cost property value. The cost property
     * @param Json|null $value Value to set for the cost property.
    */
    public function setCost(?Json $value): void {
        $this->getBackingStore()->set('cost', $value);
    }

    /**
     * Sets the life property value. The life property
     * @param Json|null $value Value to set for the life property.
    */
    public function setLife(?Json $value): void {
        $this->getBackingStore()->set('life', $value);
    }

    /**
     * Sets the month property value. The month property
     * @param Json|null $value Value to set for the month property.
    */
    public function setMonth(?Json $value): void {
        $this->getBackingStore()->set('month', $value);
    }

    /**
     * Sets the period property value. The period property
     * @param Json|null $value Value to set for the period property.
    */
    public function setPeriod(?Json $value): void {
        $this->getBackingStore()->set('period', $value);
    }

    /**
     * Sets the salvage property value. The salvage property
     * @param Json|null $value Value to set for the salvage property.
    */
    public function setSalvage(?Json $value): void {
        $this->getBackingStore()->set('salvage', $value);
    }

}
