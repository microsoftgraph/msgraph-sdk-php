<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\Drive\Items\Item\Workbook\Functions\CumIPmt;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CumIPmtPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CumIPmtPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CumIPmtPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CumIPmtPostRequestBody {
        return new CumIPmtPostRequestBody();
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
     * Gets the endPeriod property value. The endPeriod property
     * @return Json|null
    */
    public function getEndPeriod(): ?Json {
        $val = $this->getBackingStore()->get('endPeriod');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endPeriod'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endPeriod' => fn(ParseNode $n) => $o->setEndPeriod($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'nper' => fn(ParseNode $n) => $o->setNper($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'pv' => fn(ParseNode $n) => $o->setPv($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'rate' => fn(ParseNode $n) => $o->setRate($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'startPeriod' => fn(ParseNode $n) => $o->setStartPeriod($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'type' => fn(ParseNode $n) => $o->setType($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the nper property value. The nper property
     * @return Json|null
    */
    public function getNper(): ?Json {
        $val = $this->getBackingStore()->get('nper');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nper'");
    }

    /**
     * Gets the pv property value. The pv property
     * @return Json|null
    */
    public function getPv(): ?Json {
        $val = $this->getBackingStore()->get('pv');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pv'");
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
     * Gets the startPeriod property value. The startPeriod property
     * @return Json|null
    */
    public function getStartPeriod(): ?Json {
        $val = $this->getBackingStore()->get('startPeriod');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startPeriod'");
    }

    /**
     * Gets the type property value. The type property
     * @return Json|null
    */
    public function getType(): ?Json {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('endPeriod', $this->getEndPeriod());
        $writer->writeObjectValue('nper', $this->getNper());
        $writer->writeObjectValue('pv', $this->getPv());
        $writer->writeObjectValue('rate', $this->getRate());
        $writer->writeObjectValue('startPeriod', $this->getStartPeriod());
        $writer->writeObjectValue('type', $this->getType());
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
     * Sets the endPeriod property value. The endPeriod property
     * @param Json|null $value Value to set for the endPeriod property.
    */
    public function setEndPeriod(?Json $value): void {
        $this->getBackingStore()->set('endPeriod', $value);
    }

    /**
     * Sets the nper property value. The nper property
     * @param Json|null $value Value to set for the nper property.
    */
    public function setNper(?Json $value): void {
        $this->getBackingStore()->set('nper', $value);
    }

    /**
     * Sets the pv property value. The pv property
     * @param Json|null $value Value to set for the pv property.
    */
    public function setPv(?Json $value): void {
        $this->getBackingStore()->set('pv', $value);
    }

    /**
     * Sets the rate property value. The rate property
     * @param Json|null $value Value to set for the rate property.
    */
    public function setRate(?Json $value): void {
        $this->getBackingStore()->set('rate', $value);
    }

    /**
     * Sets the startPeriod property value. The startPeriod property
     * @param Json|null $value Value to set for the startPeriod property.
    */
    public function setStartPeriod(?Json $value): void {
        $this->getBackingStore()->set('startPeriod', $value);
    }

    /**
     * Sets the type property value. The type property
     * @param Json|null $value Value to set for the type property.
    */
    public function setType(?Json $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
