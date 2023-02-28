<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\HypGeom_Dist;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class HypGeom_DistPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new hypGeom_DistPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HypGeom_DistPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HypGeom_DistPostRequestBody {
        return new HypGeom_DistPostRequestBody();
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
     * Gets the cumulative property value. The cumulative property
     * @return Json|null
    */
    public function getCumulative(): ?Json {
        return $this->getBackingStore()->get('cumulative');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cumulative' => fn(ParseNode $n) => $o->setCumulative($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'numberPop' => fn(ParseNode $n) => $o->setNumberPop($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'numberSample' => fn(ParseNode $n) => $o->setNumberSample($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'populationS' => fn(ParseNode $n) => $o->setPopulationS($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'sampleS' => fn(ParseNode $n) => $o->setSampleS($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the numberPop property value. The numberPop property
     * @return Json|null
    */
    public function getNumberPop(): ?Json {
        return $this->getBackingStore()->get('numberPop');
    }

    /**
     * Gets the numberSample property value. The numberSample property
     * @return Json|null
    */
    public function getNumberSample(): ?Json {
        return $this->getBackingStore()->get('numberSample');
    }

    /**
     * Gets the populationS property value. The populationS property
     * @return Json|null
    */
    public function getPopulationS(): ?Json {
        return $this->getBackingStore()->get('populationS');
    }

    /**
     * Gets the sampleS property value. The sampleS property
     * @return Json|null
    */
    public function getSampleS(): ?Json {
        return $this->getBackingStore()->get('sampleS');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('cumulative', $this->getCumulative());
        $writer->writeObjectValue('numberPop', $this->getNumberPop());
        $writer->writeObjectValue('numberSample', $this->getNumberSample());
        $writer->writeObjectValue('populationS', $this->getPopulationS());
        $writer->writeObjectValue('sampleS', $this->getSampleS());
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
     * Sets the cumulative property value. The cumulative property
     * @param Json|null $value Value to set for the cumulative property.
    */
    public function setCumulative(?Json $value): void {
        $this->getBackingStore()->set('cumulative', $value);
    }

    /**
     * Sets the numberPop property value. The numberPop property
     * @param Json|null $value Value to set for the numberPop property.
    */
    public function setNumberPop(?Json $value): void {
        $this->getBackingStore()->set('numberPop', $value);
    }

    /**
     * Sets the numberSample property value. The numberSample property
     * @param Json|null $value Value to set for the numberSample property.
    */
    public function setNumberSample(?Json $value): void {
        $this->getBackingStore()->set('numberSample', $value);
    }

    /**
     * Sets the populationS property value. The populationS property
     * @param Json|null $value Value to set for the populationS property.
    */
    public function setPopulationS(?Json $value): void {
        $this->getBackingStore()->set('populationS', $value);
    }

    /**
     * Sets the sampleS property value. The sampleS property
     * @param Json|null $value Value to set for the sampleS property.
    */
    public function setSampleS(?Json $value): void {
        $this->getBackingStore()->set('sampleS', $value);
    }

}
