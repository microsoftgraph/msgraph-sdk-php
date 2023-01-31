<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphConfidence_T;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Confidence_TPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new confidence_TPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Confidence_TPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Confidence_TPostRequestBody {
        return new Confidence_TPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the alpha property value. 
     * @return Json|null
    */
    public function getAlpha(): ?Json {
        return $this->getBackingStore()->get('alpha');
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
            'alpha' => fn(ParseNode $n) => $o->setAlpha($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'size' => fn(ParseNode $n) => $o->setSize($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'standardDev' => fn(ParseNode $n) => $o->setStandardDev($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the size property value. 
     * @return Json|null
    */
    public function getSize(): ?Json {
        return $this->getBackingStore()->get('size');
    }

    /**
     * Gets the standardDev property value. 
     * @return Json|null
    */
    public function getStandardDev(): ?Json {
        return $this->getBackingStore()->get('standardDev');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('alpha', $this->getAlpha());
        $writer->writeObjectValue('size', $this->getSize());
        $writer->writeObjectValue('standardDev', $this->getStandardDev());
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
     * Sets the alpha property value. 
     * @param Json|null $value Value to set for the alpha property.
    */
    public function setAlpha(?Json $value): void {
        $this->getBackingStore()->set('alpha', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the size property value. 
     * @param Json|null $value Value to set for the size property.
    */
    public function setSize(?Json $value): void {
        $this->getBackingStore()->set('size', $value);
    }

    /**
     * Sets the standardDev property value. 
     * @param Json|null $value Value to set for the standardDev property.
    */
    public function setStandardDev(?Json $value): void {
        $this->getBackingStore()->set('standardDev', $value);
    }

}
