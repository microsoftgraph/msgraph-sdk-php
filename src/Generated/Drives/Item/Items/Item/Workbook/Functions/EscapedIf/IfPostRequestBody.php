<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\EscapedIf;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class IfPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new IfPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IfPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IfPostRequestBody {
        return new IfPostRequestBody();
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
            'logicalTest' => fn(ParseNode $n) => $o->setLogicalTest($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'valueIfFalse' => fn(ParseNode $n) => $o->setValueIfFalse($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'valueIfTrue' => fn(ParseNode $n) => $o->setValueIfTrue($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the logicalTest property value. The logicalTest property
     * @return Json|null
    */
    public function getLogicalTest(): ?Json {
        $val = $this->getBackingStore()->get('logicalTest');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'logicalTest'");
    }

    /**
     * Gets the valueIfFalse property value. The valueIfFalse property
     * @return Json|null
    */
    public function getValueIfFalse(): ?Json {
        $val = $this->getBackingStore()->get('valueIfFalse');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'valueIfFalse'");
    }

    /**
     * Gets the valueIfTrue property value. The valueIfTrue property
     * @return Json|null
    */
    public function getValueIfTrue(): ?Json {
        $val = $this->getBackingStore()->get('valueIfTrue');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'valueIfTrue'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('logicalTest', $this->getLogicalTest());
        $writer->writeObjectValue('valueIfFalse', $this->getValueIfFalse());
        $writer->writeObjectValue('valueIfTrue', $this->getValueIfTrue());
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
     * Sets the logicalTest property value. The logicalTest property
     * @param Json|null $value Value to set for the logicalTest property.
    */
    public function setLogicalTest(?Json $value): void {
        $this->getBackingStore()->set('logicalTest', $value);
    }

    /**
     * Sets the valueIfFalse property value. The valueIfFalse property
     * @param Json|null $value Value to set for the valueIfFalse property.
    */
    public function setValueIfFalse(?Json $value): void {
        $this->getBackingStore()->set('valueIfFalse', $value);
    }

    /**
     * Sets the valueIfTrue property value. The valueIfTrue property
     * @param Json|null $value Value to set for the valueIfTrue property.
    */
    public function setValueIfTrue(?Json $value): void {
        $this->getBackingStore()->set('valueIfTrue', $value);
    }

}
