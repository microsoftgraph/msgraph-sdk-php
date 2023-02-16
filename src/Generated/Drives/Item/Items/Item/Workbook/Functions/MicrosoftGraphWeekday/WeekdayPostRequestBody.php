<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphWeekday;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class WeekdayPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new weekdayPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WeekdayPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WeekdayPostRequestBody {
        return new WeekdayPostRequestBody();
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
            'returnType' => fn(ParseNode $n) => $o->setReturnType($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the returnType property value. The returnType property
     * @return Json|null
    */
    public function getReturnType(): ?Json {
        return $this->getBackingStore()->get('returnType');
    }

    /**
     * Gets the serialNumber property value. The serialNumber property
     * @return Json|null
    */
    public function getSerialNumber(): ?Json {
        return $this->getBackingStore()->get('serialNumber');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('returnType', $this->getReturnType());
        $writer->writeObjectValue('serialNumber', $this->getSerialNumber());
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
     * Sets the returnType property value. The returnType property
     * @param Json|null $value Value to set for the returnType property.
    */
    public function setReturnType(?Json $value): void {
        $this->getBackingStore()->set('returnType', $value);
    }

    /**
     * Sets the serialNumber property value. The serialNumber property
     * @param Json|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?Json $value): void {
        $this->getBackingStore()->set('serialNumber', $value);
    }

}
