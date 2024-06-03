<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\Drive\Items\Item\Workbook\Functions\Syd;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SydPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SydPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SydPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SydPostRequestBody {
        return new SydPostRequestBody();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cost' => fn(ParseNode $n) => $o->setCost($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'life' => fn(ParseNode $n) => $o->setLife($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'per' => fn(ParseNode $n) => $o->setPer($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'salvage' => fn(ParseNode $n) => $o->setSalvage($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the life property value. The life property
     * @return Json|null
    */
    public function getLife(): ?Json {
        $val = $this->getBackingStore()->get('life');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'life'");
    }

    /**
     * Gets the per property value. The per property
     * @return Json|null
    */
    public function getPer(): ?Json {
        $val = $this->getBackingStore()->get('per');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'per'");
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
        $writer->writeObjectValue('cost', $this->getCost());
        $writer->writeObjectValue('life', $this->getLife());
        $writer->writeObjectValue('per', $this->getPer());
        $writer->writeObjectValue('salvage', $this->getSalvage());
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
     * Sets the per property value. The per property
     * @param Json|null $value Value to set for the per property.
    */
    public function setPer(?Json $value): void {
        $this->getBackingStore()->set('per', $value);
    }

    /**
     * Sets the salvage property value. The salvage property
     * @param Json|null $value Value to set for the salvage property.
    */
    public function setSalvage(?Json $value): void {
        $this->getBackingStore()->set('salvage', $value);
    }

}
