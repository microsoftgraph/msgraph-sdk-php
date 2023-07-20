<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\AmorLinc;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AmorLincPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new amorLincPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AmorLincPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AmorLincPostRequestBody {
        return new AmorLincPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the basis property value. The basis property
     * @return Json|null
    */
    public function getBasis(): ?Json {
        $val = $this->getBackingStore()->get('basis');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'basis'");
    }

    /**
     * Gets the cost property value. The cost property
     * @return Json|null
    */
    public function getCost(): ?Json {
        $val = $this->getBackingStore()->get('cost');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cost'");
    }

    /**
     * Gets the datePurchased property value. The datePurchased property
     * @return Json|null
    */
    public function getDatePurchased(): ?Json {
        $val = $this->getBackingStore()->get('datePurchased');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'datePurchased'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'basis' => fn(ParseNode $n) => $o->setBasis($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'cost' => fn(ParseNode $n) => $o->setCost($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'datePurchased' => fn(ParseNode $n) => $o->setDatePurchased($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'firstPeriod' => fn(ParseNode $n) => $o->setFirstPeriod($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'period' => fn(ParseNode $n) => $o->setPeriod($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'rate' => fn(ParseNode $n) => $o->setRate($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'salvage' => fn(ParseNode $n) => $o->setSalvage($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the firstPeriod property value. The firstPeriod property
     * @return Json|null
    */
    public function getFirstPeriod(): ?Json {
        $val = $this->getBackingStore()->get('firstPeriod');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firstPeriod'");
    }

    /**
     * Gets the period property value. The period property
     * @return Json|null
    */
    public function getPeriod(): ?Json {
        $val = $this->getBackingStore()->get('period');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'period'");
    }

    /**
     * Gets the rate property value. The rate property
     * @return Json|null
    */
    public function getRate(): ?Json {
        $val = $this->getBackingStore()->get('rate');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rate'");
    }

    /**
     * Gets the salvage property value. The salvage property
     * @return Json|null
    */
    public function getSalvage(): ?Json {
        $val = $this->getBackingStore()->get('salvage');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'salvage'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('basis', $this->getBasis());
        $writer->writeObjectValue('cost', $this->getCost());
        $writer->writeObjectValue('datePurchased', $this->getDatePurchased());
        $writer->writeObjectValue('firstPeriod', $this->getFirstPeriod());
        $writer->writeObjectValue('period', $this->getPeriod());
        $writer->writeObjectValue('rate', $this->getRate());
        $writer->writeObjectValue('salvage', $this->getSalvage());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the basis property value. The basis property
     * @param Json|null $value Value to set for the basis property.
    */
    public function setBasis(?Json $value): void {
        $this->getBackingStore()->set('basis', $value);
    }

    /**
     * Sets the cost property value. The cost property
     * @param Json|null $value Value to set for the cost property.
    */
    public function setCost(?Json $value): void {
        $this->getBackingStore()->set('cost', $value);
    }

    /**
     * Sets the datePurchased property value. The datePurchased property
     * @param Json|null $value Value to set for the datePurchased property.
    */
    public function setDatePurchased(?Json $value): void {
        $this->getBackingStore()->set('datePurchased', $value);
    }

    /**
     * Sets the firstPeriod property value. The firstPeriod property
     * @param Json|null $value Value to set for the firstPeriod property.
    */
    public function setFirstPeriod(?Json $value): void {
        $this->getBackingStore()->set('firstPeriod', $value);
    }

    /**
     * Sets the period property value. The period property
     * @param Json|null $value Value to set for the period property.
    */
    public function setPeriod(?Json $value): void {
        $this->getBackingStore()->set('period', $value);
    }

    /**
     * Sets the rate property value. The rate property
     * @param Json|null $value Value to set for the rate property.
    */
    public function setRate(?Json $value): void {
        $this->getBackingStore()->set('rate', $value);
    }

    /**
     * Sets the salvage property value. The salvage property
     * @param Json|null $value Value to set for the salvage property.
    */
    public function setSalvage(?Json $value): void {
        $this->getBackingStore()->set('salvage', $value);
    }

}
