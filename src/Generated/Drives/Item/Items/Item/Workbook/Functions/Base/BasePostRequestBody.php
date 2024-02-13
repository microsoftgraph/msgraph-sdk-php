<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Base;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class BasePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new BasePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BasePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BasePostRequestBody {
        return new BasePostRequestBody();
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
            'minLength' => fn(ParseNode $n) => $o->setMinLength($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'number' => fn(ParseNode $n) => $o->setNumber($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'radix' => fn(ParseNode $n) => $o->setRadix($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the minLength property value. The minLength property
     * @return Json|null
    */
    public function getMinLength(): ?Json {
        $val = $this->getBackingStore()->get('minLength');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minLength'");
    }

    /**
     * Gets the number property value. The number property
     * @return Json|null
    */
    public function getNumber(): ?Json {
        $val = $this->getBackingStore()->get('number');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'number'");
    }

    /**
     * Gets the radix property value. The radix property
     * @return Json|null
    */
    public function getRadix(): ?Json {
        $val = $this->getBackingStore()->get('radix');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'radix'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('minLength', $this->getMinLength());
        $writer->writeObjectValue('number', $this->getNumber());
        $writer->writeObjectValue('radix', $this->getRadix());
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
     * Sets the minLength property value. The minLength property
     * @param Json|null $value Value to set for the minLength property.
    */
    public function setMinLength(?Json $value): void {
        $this->getBackingStore()->set('minLength', $value);
    }

    /**
     * Sets the number property value. The number property
     * @param Json|null $value Value to set for the number property.
    */
    public function setNumber(?Json $value): void {
        $this->getBackingStore()->set('number', $value);
    }

    /**
     * Sets the radix property value. The radix property
     * @param Json|null $value Value to set for the radix property.
    */
    public function setRadix(?Json $value): void {
        $this->getBackingStore()->set('radix', $value);
    }

}
