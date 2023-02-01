<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphZ_Test;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Z_TestPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new z_TestPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Z_TestPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Z_TestPostRequestBody {
        return new Z_TestPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the array property value. 
     * @return Json|null
    */
    public function getArray(): ?Json {
        return $this->getBackingStore()->get('array');
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
            'array' => fn(ParseNode $n) => $o->setArray($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'sigma' => fn(ParseNode $n) => $o->setSigma($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'x' => fn(ParseNode $n) => $o->setX($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the sigma property value. 
     * @return Json|null
    */
    public function getSigma(): ?Json {
        return $this->getBackingStore()->get('sigma');
    }

    /**
     * Gets the x property value. 
     * @return Json|null
    */
    public function getX(): ?Json {
        return $this->getBackingStore()->get('x');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('array', $this->getArray());
        $writer->writeObjectValue('sigma', $this->getSigma());
        $writer->writeObjectValue('x', $this->getX());
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
     * Sets the array property value. 
     * @param Json|null $value Value to set for the array property.
    */
    public function setArray(?Json $value): void {
        $this->getBackingStore()->set('array', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the sigma property value. 
     * @param Json|null $value Value to set for the sigma property.
    */
    public function setSigma(?Json $value): void {
        $this->getBackingStore()->set('sigma', $value);
    }

    /**
     * Sets the x property value. 
     * @param Json|null $value Value to set for the x property.
    */
    public function setX(?Json $value): void {
        $this->getBackingStore()->set('x', $value);
    }

}
