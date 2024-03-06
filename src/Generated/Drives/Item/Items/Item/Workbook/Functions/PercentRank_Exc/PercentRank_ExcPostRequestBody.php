<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\PercentRank_Exc;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PercentRank_ExcPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new PercentRank_ExcPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PercentRank_ExcPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PercentRank_ExcPostRequestBody {
        return new PercentRank_ExcPostRequestBody();
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
     * Gets the array property value. The array property
     * @return Json|null
    */
    public function getArray(): ?Json {
        $val = $this->getBackingStore()->get('array');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'array'");
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
            'array' => fn(ParseNode $n) => $o->setArray($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'significance' => fn(ParseNode $n) => $o->setSignificance($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'x' => fn(ParseNode $n) => $o->setX($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the significance property value. The significance property
     * @return Json|null
    */
    public function getSignificance(): ?Json {
        $val = $this->getBackingStore()->get('significance');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'significance'");
    }

    /**
     * Gets the x property value. The x property
     * @return Json|null
    */
    public function getX(): ?Json {
        $val = $this->getBackingStore()->get('x');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'x'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('array', $this->getArray());
        $writer->writeObjectValue('significance', $this->getSignificance());
        $writer->writeObjectValue('x', $this->getX());
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
     * Sets the array property value. The array property
     * @param Json|null $value Value to set for the array property.
    */
    public function setArray(?Json $value): void {
        $this->getBackingStore()->set('array', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the significance property value. The significance property
     * @param Json|null $value Value to set for the significance property.
    */
    public function setSignificance(?Json $value): void {
        $this->getBackingStore()->set('significance', $value);
    }

    /**
     * Sets the x property value. The x property
     * @param Json|null $value Value to set for the x property.
    */
    public function setX(?Json $value): void {
        $this->getBackingStore()->set('x', $value);
    }

}
