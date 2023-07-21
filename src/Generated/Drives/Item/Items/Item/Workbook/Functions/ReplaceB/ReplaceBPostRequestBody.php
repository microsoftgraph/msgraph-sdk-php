<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\ReplaceB;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ReplaceBPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new replaceBPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReplaceBPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReplaceBPostRequestBody {
        return new ReplaceBPostRequestBody();
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
            'newText' => fn(ParseNode $n) => $o->setNewText($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'numBytes' => fn(ParseNode $n) => $o->setNumBytes($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'oldText' => fn(ParseNode $n) => $o->setOldText($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'startNum' => fn(ParseNode $n) => $o->setStartNum($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the newText property value. The newText property
     * @return Json|null
    */
    public function getNewText(): ?Json {
        $val = $this->getBackingStore()->get('newText');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'newText'");
    }

    /**
     * Gets the numBytes property value. The numBytes property
     * @return Json|null
    */
    public function getNumBytes(): ?Json {
        $val = $this->getBackingStore()->get('numBytes');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numBytes'");
    }

    /**
     * Gets the oldText property value. The oldText property
     * @return Json|null
    */
    public function getOldText(): ?Json {
        $val = $this->getBackingStore()->get('oldText');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'oldText'");
    }

    /**
     * Gets the startNum property value. The startNum property
     * @return Json|null
    */
    public function getStartNum(): ?Json {
        $val = $this->getBackingStore()->get('startNum');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startNum'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('newText', $this->getNewText());
        $writer->writeObjectValue('numBytes', $this->getNumBytes());
        $writer->writeObjectValue('oldText', $this->getOldText());
        $writer->writeObjectValue('startNum', $this->getStartNum());
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
     * Sets the newText property value. The newText property
     * @param Json|null $value Value to set for the newText property.
    */
    public function setNewText(?Json $value): void {
        $this->getBackingStore()->set('newText', $value);
    }

    /**
     * Sets the numBytes property value. The numBytes property
     * @param Json|null $value Value to set for the numBytes property.
    */
    public function setNumBytes(?Json $value): void {
        $this->getBackingStore()->set('numBytes', $value);
    }

    /**
     * Sets the oldText property value. The oldText property
     * @param Json|null $value Value to set for the oldText property.
    */
    public function setOldText(?Json $value): void {
        $this->getBackingStore()->set('oldText', $value);
    }

    /**
     * Sets the startNum property value. The startNum property
     * @param Json|null $value Value to set for the startNum property.
    */
    public function setStartNum(?Json $value): void {
        $this->getBackingStore()->set('startNum', $value);
    }

}
