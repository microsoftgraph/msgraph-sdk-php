<?php

namespace Microsoft\Graph\Generated\Drives\Item\Items\Item\Workbook\Functions\MicrosoftGraphGamma_Inv;

use Microsoft\Graph\Generated\Models\Json;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Gamma_InvPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new gamma_InvPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Gamma_InvPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Gamma_InvPostRequestBody {
        return new Gamma_InvPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the alpha property value. The alpha property
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
     * Gets the beta property value. The beta property
     * @return Json|null
    */
    public function getBeta(): ?Json {
        return $this->getBackingStore()->get('beta');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'alpha' => fn(ParseNode $n) => $o->setAlpha($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'beta' => fn(ParseNode $n) => $o->setBeta($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'probability' => fn(ParseNode $n) => $o->setProbability($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the probability property value. The probability property
     * @return Json|null
    */
    public function getProbability(): ?Json {
        return $this->getBackingStore()->get('probability');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('alpha', $this->getAlpha());
        $writer->writeObjectValue('beta', $this->getBeta());
        $writer->writeObjectValue('probability', $this->getProbability());
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
     * Sets the alpha property value. The alpha property
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
     * Sets the beta property value. The beta property
     * @param Json|null $value Value to set for the beta property.
    */
    public function setBeta(?Json $value): void {
        $this->getBackingStore()->set('beta', $value);
    }

    /**
     * Sets the probability property value. The probability property
     * @param Json|null $value Value to set for the probability property.
    */
    public function setProbability(?Json $value): void {
        $this->getBackingStore()->set('probability', $value);
    }

}
