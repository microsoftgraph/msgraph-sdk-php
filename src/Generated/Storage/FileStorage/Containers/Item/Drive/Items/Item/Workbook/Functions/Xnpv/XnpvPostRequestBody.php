<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\Drive\Items\Item\Workbook\Functions\Xnpv;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class XnpvPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new XnpvPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return XnpvPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): XnpvPostRequestBody {
        return new XnpvPostRequestBody();
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
     * Gets the dates property value. The dates property
     * @return Json|null
    */
    public function getDates(): ?Json {
        $val = $this->getBackingStore()->get('dates');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dates'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dates' => fn(ParseNode $n) => $o->setDates($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'rate' => fn(ParseNode $n) => $o->setRate($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'values' => fn(ParseNode $n) => $o->setValues($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
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
     * Gets the values property value. The values property
     * @return Json|null
    */
    public function getValues(): ?Json {
        $val = $this->getBackingStore()->get('values');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'values'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('dates', $this->getDates());
        $writer->writeObjectValue('rate', $this->getRate());
        $writer->writeObjectValue('values', $this->getValues());
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
     * Sets the dates property value. The dates property
     * @param Json|null $value Value to set for the dates property.
    */
    public function setDates(?Json $value): void {
        $this->getBackingStore()->set('dates', $value);
    }

    /**
     * Sets the rate property value. The rate property
     * @param Json|null $value Value to set for the rate property.
    */
    public function setRate(?Json $value): void {
        $this->getBackingStore()->set('rate', $value);
    }

    /**
     * Sets the values property value. The values property
     * @param Json|null $value Value to set for the values property.
    */
    public function setValues(?Json $value): void {
        $this->getBackingStore()->set('values', $value);
    }

}
