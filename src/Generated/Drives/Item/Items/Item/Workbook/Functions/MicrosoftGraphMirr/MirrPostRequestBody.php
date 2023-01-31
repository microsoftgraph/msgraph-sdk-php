<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphMirr;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MirrPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new mirrPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MirrPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MirrPostRequestBody {
        return new MirrPostRequestBody();
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
            'financeRate' => fn(ParseNode $n) => $o->setFinanceRate($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'reinvestRate' => fn(ParseNode $n) => $o->setReinvestRate($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'values' => fn(ParseNode $n) => $o->setValues($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the financeRate property value. 
     * @return Json|null
    */
    public function getFinanceRate(): ?Json {
        return $this->getBackingStore()->get('financeRate');
    }

    /**
     * Gets the reinvestRate property value. 
     * @return Json|null
    */
    public function getReinvestRate(): ?Json {
        return $this->getBackingStore()->get('reinvestRate');
    }

    /**
     * Gets the values property value. 
     * @return Json|null
    */
    public function getValues(): ?Json {
        return $this->getBackingStore()->get('values');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('financeRate', $this->getFinanceRate());
        $writer->writeObjectValue('reinvestRate', $this->getReinvestRate());
        $writer->writeObjectValue('values', $this->getValues());
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
     * Sets the financeRate property value. 
     * @param Json|null $value Value to set for the financeRate property.
    */
    public function setFinanceRate(?Json $value): void {
        $this->getBackingStore()->set('financeRate', $value);
    }

    /**
     * Sets the reinvestRate property value. 
     * @param Json|null $value Value to set for the reinvestRate property.
    */
    public function setReinvestRate(?Json $value): void {
        $this->getBackingStore()->set('reinvestRate', $value);
    }

    /**
     * Sets the values property value. 
     * @param Json|null $value Value to set for the values property.
    */
    public function setValues(?Json $value): void {
        $this->getBackingStore()->set('values', $value);
    }

}
