<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\FindB;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class FindBPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new findBPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FindBPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FindBPostRequestBody {
        return new FindBPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
            'findText' => fn(ParseNode $n) => $o->setFindText($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'startNum' => fn(ParseNode $n) => $o->setStartNum($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'withinText' => fn(ParseNode $n) => $o->setWithinText($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the findText property value. The findText property
     * @return Json|null
    */
    public function getFindText(): ?Json {
        return $this->getBackingStore()->get('findText');
    }

    /**
     * Gets the startNum property value. The startNum property
     * @return Json|null
    */
    public function getStartNum(): ?Json {
        return $this->getBackingStore()->get('startNum');
    }

    /**
     * Gets the withinText property value. The withinText property
     * @return Json|null
    */
    public function getWithinText(): ?Json {
        return $this->getBackingStore()->get('withinText');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('findText', $this->getFindText());
        $writer->writeObjectValue('startNum', $this->getStartNum());
        $writer->writeObjectValue('withinText', $this->getWithinText());
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
     * Sets the findText property value. The findText property
     * @param Json|null $value Value to set for the findText property.
    */
    public function setFindText(?Json $value): void {
        $this->getBackingStore()->set('findText', $value);
    }

    /**
     * Sets the startNum property value. The startNum property
     * @param Json|null $value Value to set for the startNum property.
    */
    public function setStartNum(?Json $value): void {
        $this->getBackingStore()->set('startNum', $value);
    }

    /**
     * Sets the withinText property value. The withinText property
     * @param Json|null $value Value to set for the withinText property.
    */
    public function setWithinText(?Json $value): void {
        $this->getBackingStore()->set('withinText', $value);
    }

}
