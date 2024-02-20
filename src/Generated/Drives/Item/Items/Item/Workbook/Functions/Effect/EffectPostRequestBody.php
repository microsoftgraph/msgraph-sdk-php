<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Effect;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class EffectPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new EffectPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EffectPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EffectPostRequestBody {
        return new EffectPostRequestBody();
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
            'nominalRate' => fn(ParseNode $n) => $o->setNominalRate($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'npery' => fn(ParseNode $n) => $o->setNpery($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the nominalRate property value. The nominalRate property
     * @return Json|null
    */
    public function getNominalRate(): ?Json {
        $val = $this->getBackingStore()->get('nominalRate');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nominalRate'");
    }

    /**
     * Gets the npery property value. The npery property
     * @return Json|null
    */
    public function getNpery(): ?Json {
        $val = $this->getBackingStore()->get('npery');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'npery'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('nominalRate', $this->getNominalRate());
        $writer->writeObjectValue('npery', $this->getNpery());
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
     * Sets the nominalRate property value. The nominalRate property
     * @param Json|null $value Value to set for the nominalRate property.
    */
    public function setNominalRate(?Json $value): void {
        $this->getBackingStore()->set('nominalRate', $value);
    }

    /**
     * Sets the npery property value. The npery property
     * @param Json|null $value Value to set for the npery property.
    */
    public function setNpery(?Json $value): void {
        $this->getBackingStore()->set('npery', $value);
    }

}
