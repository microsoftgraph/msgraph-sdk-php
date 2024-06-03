<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\Drive\Items\Item\Workbook\Functions\Days360;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Days360PostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new Days360PostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Days360PostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Days360PostRequestBody {
        return new Days360PostRequestBody();
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
     * Gets the endDate property value. The endDate property
     * @return Json|null
    */
    public function getEndDate(): ?Json {
        $val = $this->getBackingStore()->get('endDate');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDate'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endDate' => fn(ParseNode $n) => $o->setEndDate($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'method' => fn(ParseNode $n) => $o->setMethod($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'startDate' => fn(ParseNode $n) => $o->setStartDate($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the method property value. The method property
     * @return Json|null
    */
    public function getMethod(): ?Json {
        $val = $this->getBackingStore()->get('method');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'method'");
    }

    /**
     * Gets the startDate property value. The startDate property
     * @return Json|null
    */
    public function getStartDate(): ?Json {
        $val = $this->getBackingStore()->get('startDate');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('endDate', $this->getEndDate());
        $writer->writeObjectValue('method', $this->getMethod());
        $writer->writeObjectValue('startDate', $this->getStartDate());
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
     * Sets the endDate property value. The endDate property
     * @param Json|null $value Value to set for the endDate property.
    */
    public function setEndDate(?Json $value): void {
        $this->getBackingStore()->set('endDate', $value);
    }

    /**
     * Sets the method property value. The method property
     * @param Json|null $value Value to set for the method property.
    */
    public function setMethod(?Json $value): void {
        $this->getBackingStore()->set('method', $value);
    }

    /**
     * Sets the startDate property value. The startDate property
     * @param Json|null $value Value to set for the startDate property.
    */
    public function setStartDate(?Json $value): void {
        $this->getBackingStore()->set('startDate', $value);
    }

}
