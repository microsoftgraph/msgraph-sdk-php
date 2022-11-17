<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class RecommendedAction implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new recommendedAction and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.recommendedAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecommendedAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecommendedAction {
        return new RecommendedAction();
    }

    /**
     * Gets the actionWebUrl property value. Web URL to the recommended action.
     * @return string|null
    */
    public function getActionWebUrl(): ?string {
        return $this->getBackingStore()->get('actionWebUrl');
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
            'actionWebUrl' => fn(ParseNode $n) => $o->setActionWebUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'potentialScoreImpact' => fn(ParseNode $n) => $o->setPotentialScoreImpact($n->getFloatValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the potentialScoreImpact property value. Potential improvement in the tenant security score from the recommended action.
     * @return float|null
    */
    public function getPotentialScoreImpact(): ?float {
        return $this->getBackingStore()->get('potentialScoreImpact');
    }

    /**
     * Gets the title property value. Title of the recommended action.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->getBackingStore()->get('title');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actionWebUrl', $this->getActionWebUrl());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeFloatValue('potentialScoreImpact', $this->getPotentialScoreImpact());
        $writer->writeStringValue('title', $this->getTitle());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionWebUrl property value. Web URL to the recommended action.
     *  @param string|null $value Value to set for the actionWebUrl property.
    */
    public function setActionWebUrl(?string $value): void {
        $this->getBackingStore()->set('actionWebUrl', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the potentialScoreImpact property value. Potential improvement in the tenant security score from the recommended action.
     *  @param float|null $value Value to set for the potentialScoreImpact property.
    */
    public function setPotentialScoreImpact(?float $value): void {
        $this->getBackingStore()->set('potentialScoreImpact', $value);
    }

    /**
     * Sets the title property value. Title of the recommended action.
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

}
