<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphBinom_Dist_Range;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Binom_Dist_RangePostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new binom_Dist_RangePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Binom_Dist_RangePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Binom_Dist_RangePostRequestBody {
        return new Binom_Dist_RangePostRequestBody();
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
            'numberS' => fn(ParseNode $n) => $o->setNumberS($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'numberS2' => fn(ParseNode $n) => $o->setNumberS2($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'probabilityS' => fn(ParseNode $n) => $o->setProbabilityS($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'trials' => fn(ParseNode $n) => $o->setTrials($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the numberS property value. The numberS property
     * @return Json|null
    */
    public function getNumberS(): ?Json {
        return $this->getBackingStore()->get('numberS');
    }

    /**
     * Gets the numberS2 property value. The numberS2 property
     * @return Json|null
    */
    public function getNumberS2(): ?Json {
        return $this->getBackingStore()->get('numberS2');
    }

    /**
     * Gets the probabilityS property value. The probabilityS property
     * @return Json|null
    */
    public function getProbabilityS(): ?Json {
        return $this->getBackingStore()->get('probabilityS');
    }

    /**
     * Gets the trials property value. The trials property
     * @return Json|null
    */
    public function getTrials(): ?Json {
        return $this->getBackingStore()->get('trials');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('numberS', $this->getNumberS());
        $writer->writeObjectValue('numberS2', $this->getNumberS2());
        $writer->writeObjectValue('probabilityS', $this->getProbabilityS());
        $writer->writeObjectValue('trials', $this->getTrials());
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
     * Sets the numberS property value. The numberS property
     * @param Json|null $value Value to set for the numberS property.
    */
    public function setNumberS(?Json $value): void {
        $this->getBackingStore()->set('numberS', $value);
    }

    /**
     * Sets the numberS2 property value. The numberS2 property
     * @param Json|null $value Value to set for the numberS2 property.
    */
    public function setNumberS2(?Json $value): void {
        $this->getBackingStore()->set('numberS2', $value);
    }

    /**
     * Sets the probabilityS property value. The probabilityS property
     * @param Json|null $value Value to set for the probabilityS property.
    */
    public function setProbabilityS(?Json $value): void {
        $this->getBackingStore()->set('probabilityS', $value);
    }

    /**
     * Sets the trials property value. The trials property
     * @param Json|null $value Value to set for the trials property.
    */
    public function setTrials(?Json $value): void {
        $this->getBackingStore()->set('trials', $value);
    }

}
