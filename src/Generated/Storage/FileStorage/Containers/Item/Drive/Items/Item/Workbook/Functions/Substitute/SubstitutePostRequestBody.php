<?php

namespace Microsoft\Graph\Generated\Storage\FileStorage\Containers\Item\Drive\Items\Item\Workbook\Functions\Substitute;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SubstitutePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SubstitutePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubstitutePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubstitutePostRequestBody {
        return new SubstitutePostRequestBody();
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
            'instanceNum' => fn(ParseNode $n) => $o->setInstanceNum($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'newText' => fn(ParseNode $n) => $o->setNewText($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'oldText' => fn(ParseNode $n) => $o->setOldText($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'text' => fn(ParseNode $n) => $o->setText($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the instanceNum property value. The instanceNum property
     * @return Json|null
    */
    public function getInstanceNum(): ?Json {
        $val = $this->getBackingStore()->get('instanceNum');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'instanceNum'");
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
     * Gets the text property value. The text property
     * @return Json|null
    */
    public function getText(): ?Json {
        $val = $this->getBackingStore()->get('text');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'text'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('instanceNum', $this->getInstanceNum());
        $writer->writeObjectValue('newText', $this->getNewText());
        $writer->writeObjectValue('oldText', $this->getOldText());
        $writer->writeObjectValue('text', $this->getText());
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
     * Sets the instanceNum property value. The instanceNum property
     * @param Json|null $value Value to set for the instanceNum property.
    */
    public function setInstanceNum(?Json $value): void {
        $this->getBackingStore()->set('instanceNum', $value);
    }

    /**
     * Sets the newText property value. The newText property
     * @param Json|null $value Value to set for the newText property.
    */
    public function setNewText(?Json $value): void {
        $this->getBackingStore()->set('newText', $value);
    }

    /**
     * Sets the oldText property value. The oldText property
     * @param Json|null $value Value to set for the oldText property.
    */
    public function setOldText(?Json $value): void {
        $this->getBackingStore()->set('oldText', $value);
    }

    /**
     * Sets the text property value. The text property
     * @param Json|null $value Value to set for the text property.
    */
    public function setText(?Json $value): void {
        $this->getBackingStore()->set('text', $value);
    }

}
