<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphNegBinom_Dist;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class NegBinom_DistPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new negBinom_DistPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NegBinom_DistPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NegBinom_DistPostRequestBody {
        return new NegBinom_DistPostRequestBody();
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
            'numberF' => fn(ParseNode $n) => $o->setNumberF($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'numberS' => fn(ParseNode $n) => $o->setNumberS($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'probabilityS' => fn(ParseNode $n) => $o->setProbabilityS($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the numberF property value. The numberF property
     * @return Json|null
    */
    public function getNumberF(): ?Json {
        return $this->getBackingStore()->get('numberF');
    }

    /**
     * Gets the numberS property value. The numberS property
     * @return Json|null
    */
    public function getNumberS(): ?Json {
        return $this->getBackingStore()->get('numberS');
    }

    /**
     * Gets the probabilityS property value. The probabilityS property
     * @return Json|null
    */
    public function getProbabilityS(): ?Json {
        return $this->getBackingStore()->get('probabilityS');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('cumulative', $this->getCumulative());
        $writer->writeObjectValue('numberF', $this->getNumberF());
        $writer->writeObjectValue('numberS', $this->getNumberS());
        $writer->writeObjectValue('probabilityS', $this->getProbabilityS());
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
     * Sets the numberF property value. The numberF property
     * @param Json|null $value Value to set for the numberF property.
    */
    public function setNumberF(?Json $value): void {
        $this->getBackingStore()->set('numberF', $value);
    }

    /**
     * Sets the numberS property value. The numberS property
     * @param Json|null $value Value to set for the numberS property.
    */
    public function setNumberS(?Json $value): void {
        $this->getBackingStore()->set('numberS', $value);
    }

    /**
     * Sets the probabilityS property value. The probabilityS property
     * @param Json|null $value Value to set for the probabilityS property.
    */
    public function setProbabilityS(?Json $value): void {
        $this->getBackingStore()->set('probabilityS', $value);
    }

}
