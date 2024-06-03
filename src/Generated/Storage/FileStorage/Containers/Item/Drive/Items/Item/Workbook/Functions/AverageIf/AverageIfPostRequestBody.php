<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\Drive\Items\Item\Workbook\Functions\AverageIf;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AverageIfPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AverageIfPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AverageIfPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AverageIfPostRequestBody {
        return new AverageIfPostRequestBody();
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
     * Gets the averageRange property value. The averageRange property
     * @return Json|null
    */
    public function getAverageRange(): ?Json {
        $val = $this->getBackingStore()->get('averageRange');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'averageRange'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the criteria property value. The criteria property
     * @return Json|null
    */
    public function getCriteria(): ?Json {
        $val = $this->getBackingStore()->get('criteria');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'criteria'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'averageRange' => fn(ParseNode $n) => $o->setAverageRange($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'criteria' => fn(ParseNode $n) => $o->setCriteria($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'range' => fn(ParseNode $n) => $o->setRange($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the range property value. The range property
     * @return Json|null
    */
    public function getRange(): ?Json {
        $val = $this->getBackingStore()->get('range');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'range'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('averageRange', $this->getAverageRange());
        $writer->writeObjectValue('criteria', $this->getCriteria());
        $writer->writeObjectValue('range', $this->getRange());
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
     * Sets the averageRange property value. The averageRange property
     * @param Json|null $value Value to set for the averageRange property.
    */
    public function setAverageRange(?Json $value): void {
        $this->getBackingStore()->set('averageRange', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the criteria property value. The criteria property
     * @param Json|null $value Value to set for the criteria property.
    */
    public function setCriteria(?Json $value): void {
        $this->getBackingStore()->set('criteria', $value);
    }

    /**
     * Sets the range property value. The range property
     * @param Json|null $value Value to set for the range property.
    */
    public function setRange(?Json $value): void {
        $this->getBackingStore()->set('range', $value);
    }

}
