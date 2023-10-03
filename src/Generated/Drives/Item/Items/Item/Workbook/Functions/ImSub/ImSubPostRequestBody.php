<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ImSub;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ImSubPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new imSubPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImSubPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImSubPostRequestBody {
        return new ImSubPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
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
            'inumber1' => fn(ParseNode $n) => $o->setInumber1($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'inumber2' => fn(ParseNode $n) => $o->setInumber2($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the inumber1 property value. The inumber1 property
     * @return Json|null
    */
    public function getInumber1(): ?Json {
        $val = $this->getBackingStore()->get('inumber1');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inumber1'");
    }

    /**
     * Gets the inumber2 property value. The inumber2 property
     * @return Json|null
    */
    public function getInumber2(): ?Json {
        $val = $this->getBackingStore()->get('inumber2');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inumber2'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('inumber1', $this->getInumber1());
        $writer->writeObjectValue('inumber2', $this->getInumber2());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the inumber1 property value. The inumber1 property
     * @param Json|null $value Value to set for the inumber1 property.
    */
    public function setInumber1(?Json $value): void {
        $this->getBackingStore()->set('inumber1', $value);
    }

    /**
     * Sets the inumber2 property value. The inumber2 property
     * @param Json|null $value Value to set for the inumber2 property.
    */
    public function setInumber2(?Json $value): void {
        $this->getBackingStore()->set('inumber2', $value);
    }

}