<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphReplace;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ReplacePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new replacePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReplacePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReplacePostRequestBody {
        return new ReplacePostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'newText' => fn(ParseNode $n) => $o->setNewText($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'numChars' => fn(ParseNode $n) => $o->setNumChars($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'oldText' => fn(ParseNode $n) => $o->setOldText($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'startNum' => fn(ParseNode $n) => $o->setStartNum($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the newText property value. 
     * @return Json|null
    */
    public function getNewText(): ?Json {
        return $this->getBackingStore()->get('newText');
    }

    /**
     * Gets the numChars property value. 
     * @return Json|null
    */
    public function getNumChars(): ?Json {
        return $this->getBackingStore()->get('numChars');
    }

    /**
     * Gets the oldText property value. 
     * @return Json|null
    */
    public function getOldText(): ?Json {
        return $this->getBackingStore()->get('oldText');
    }

    /**
     * Gets the startNum property value. 
     * @return Json|null
    */
    public function getStartNum(): ?Json {
        return $this->getBackingStore()->get('startNum');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('newText', $this->getNewText());
        $writer->writeObjectValue('numChars', $this->getNumChars());
        $writer->writeObjectValue('oldText', $this->getOldText());
        $writer->writeObjectValue('startNum', $this->getStartNum());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the newText property value. 
     * @param Json|null $value Value to set for the newText property.
    */
    public function setNewText(?Json $value): void {
        $this->getBackingStore()->set('newText', $value);
    }

    /**
     * Sets the numChars property value. 
     * @param Json|null $value Value to set for the numChars property.
    */
    public function setNumChars(?Json $value): void {
        $this->getBackingStore()->set('numChars', $value);
    }

    /**
     * Sets the oldText property value. 
     * @param Json|null $value Value to set for the oldText property.
    */
    public function setOldText(?Json $value): void {
        $this->getBackingStore()->set('oldText', $value);
    }

    /**
     * Sets the startNum property value. 
     * @param Json|null $value Value to set for the startNum property.
    */
    public function setStartNum(?Json $value): void {
        $this->getBackingStore()->set('startNum', $value);
    }

}
