<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\Pv;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PvPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new pvPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PvPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PvPostRequestBody {
        return new PvPostRequestBody();
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
            'fv' => fn(ParseNode $n) => $o->setFv($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'nper' => fn(ParseNode $n) => $o->setNper($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'pmt' => fn(ParseNode $n) => $o->setPmt($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'rate' => fn(ParseNode $n) => $o->setRate($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'type' => fn(ParseNode $n) => $o->setType($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the fv property value. The fv property
     * @return Json|null
    */
    public function getFv(): ?Json {
        return $this->getBackingStore()->get('fv');
    }

    /**
     * Gets the nper property value. The nper property
     * @return Json|null
    */
    public function getNper(): ?Json {
        return $this->getBackingStore()->get('nper');
    }

    /**
     * Gets the pmt property value. The pmt property
     * @return Json|null
    */
    public function getPmt(): ?Json {
        return $this->getBackingStore()->get('pmt');
    }

    /**
     * Gets the rate property value. The rate property
     * @return Json|null
    */
    public function getRate(): ?Json {
        return $this->getBackingStore()->get('rate');
    }

    /**
     * Gets the type property value. The type property
     * @return Json|null
    */
    public function getType(): ?Json {
        return $this->getBackingStore()->get('type');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('fv', $this->getFv());
        $writer->writeObjectValue('nper', $this->getNper());
        $writer->writeObjectValue('pmt', $this->getPmt());
        $writer->writeObjectValue('rate', $this->getRate());
        $writer->writeObjectValue('type', $this->getType());
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
     * Sets the fv property value. The fv property
     * @param Json|null $value Value to set for the fv property.
    */
    public function setFv(?Json $value): void {
        $this->getBackingStore()->set('fv', $value);
    }

    /**
     * Sets the nper property value. The nper property
     * @param Json|null $value Value to set for the nper property.
    */
    public function setNper(?Json $value): void {
        $this->getBackingStore()->set('nper', $value);
    }

    /**
     * Sets the pmt property value. The pmt property
     * @param Json|null $value Value to set for the pmt property.
    */
    public function setPmt(?Json $value): void {
        $this->getBackingStore()->set('pmt', $value);
    }

    /**
     * Sets the rate property value. The rate property
     * @param Json|null $value Value to set for the rate property.
    */
    public function setRate(?Json $value): void {
        $this->getBackingStore()->set('rate', $value);
    }

    /**
     * Sets the type property value. The type property
     * @param Json|null $value Value to set for the type property.
    */
    public function setType(?Json $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
