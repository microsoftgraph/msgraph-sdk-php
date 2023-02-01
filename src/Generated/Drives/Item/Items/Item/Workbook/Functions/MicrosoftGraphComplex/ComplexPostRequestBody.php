<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphComplex;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ComplexPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new complexPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ComplexPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ComplexPostRequestBody {
        return new ComplexPostRequestBody();
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
            'iNum' => fn(ParseNode $n) => $o->setINum($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'realNum' => fn(ParseNode $n) => $o->setRealNum($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'suffix' => fn(ParseNode $n) => $o->setSuffix($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the iNum property value. 
     * @return Json|null
    */
    public function getINum(): ?Json {
        return $this->getBackingStore()->get('iNum');
    }

    /**
     * Gets the realNum property value. 
     * @return Json|null
    */
    public function getRealNum(): ?Json {
        return $this->getBackingStore()->get('realNum');
    }

    /**
     * Gets the suffix property value. 
     * @return Json|null
    */
    public function getSuffix(): ?Json {
        return $this->getBackingStore()->get('suffix');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('iNum', $this->getINum());
        $writer->writeObjectValue('realNum', $this->getRealNum());
        $writer->writeObjectValue('suffix', $this->getSuffix());
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
     * Sets the iNum property value. 
     * @param Json|null $value Value to set for the iNum property.
    */
    public function setINum(?Json $value): void {
        $this->getBackingStore()->set('iNum', $value);
    }

    /**
     * Sets the realNum property value. 
     * @param Json|null $value Value to set for the realNum property.
    */
    public function setRealNum(?Json $value): void {
        $this->getBackingStore()->set('realNum', $value);
    }

    /**
     * Sets the suffix property value. 
     * @param Json|null $value Value to set for the suffix property.
    */
    public function setSuffix(?Json $value): void {
        $this->getBackingStore()->set('suffix', $value);
    }

}
