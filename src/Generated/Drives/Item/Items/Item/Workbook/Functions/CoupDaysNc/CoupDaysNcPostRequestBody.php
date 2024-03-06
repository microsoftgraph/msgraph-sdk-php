<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\CoupDaysNc;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CoupDaysNcPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CoupDaysNcPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CoupDaysNcPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CoupDaysNcPostRequestBody {
        return new CoupDaysNcPostRequestBody();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'basis' => fn(ParseNode $n) => $o->setBasis($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'frequency' => fn(ParseNode $n) => $o->setFrequency($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'maturity' => fn(ParseNode $n) => $o->setMaturity($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'settlement' => fn(ParseNode $n) => $o->setSettlement($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the frequency property value. The frequency property
     * @return Json|null
    */
    public function getFrequency(): ?Json {
        $val = $this->getBackingStore()->get('frequency');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'frequency'");
    }

    /**
     * Gets the maturity property value. The maturity property
     * @return Json|null
    */
    public function getMaturity(): ?Json {
        $val = $this->getBackingStore()->get('maturity');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maturity'");
    }

    /**
     * Gets the settlement property value. The settlement property
     * @return Json|null
    */
    public function getSettlement(): ?Json {
        $val = $this->getBackingStore()->get('settlement');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settlement'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('basis', $this->getBasis());
        $writer->writeObjectValue('frequency', $this->getFrequency());
        $writer->writeObjectValue('maturity', $this->getMaturity());
        $writer->writeObjectValue('settlement', $this->getSettlement());
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
     * Sets the basis property value. The basis property
     * @param Json|null $value Value to set for the basis property.
    */
    public function setBasis(?Json $value): void {
        $this->getBackingStore()->set('basis', $value);
    }

    /**
     * Sets the frequency property value. The frequency property
     * @param Json|null $value Value to set for the frequency property.
    */
    public function setFrequency(?Json $value): void {
        $this->getBackingStore()->set('frequency', $value);
    }

    /**
     * Sets the maturity property value. The maturity property
     * @param Json|null $value Value to set for the maturity property.
    */
    public function setMaturity(?Json $value): void {
        $this->getBackingStore()->set('maturity', $value);
    }

    /**
     * Sets the settlement property value. The settlement property
     * @param Json|null $value Value to set for the settlement property.
    */
    public function setSettlement(?Json $value): void {
        $this->getBackingStore()->set('settlement', $value);
    }

}
