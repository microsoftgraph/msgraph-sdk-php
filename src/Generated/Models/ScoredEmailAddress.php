<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ScoredEmailAddress implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new scoredEmailAddress and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.scoredEmailAddress');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ScoredEmailAddress
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ScoredEmailAddress {
        return new ScoredEmailAddress();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the address property value. The email address.
     * @return string|null
    */
    public function getAddress(): ?string {
        return $this->getBackingStore()->get('address');
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
            'address' => fn(ParseNode $n) => $o->setAddress($n->getStringValue()),
            'itemId' => fn(ParseNode $n) => $o->setItemId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'relevanceScore' => fn(ParseNode $n) => $o->setRelevanceScore($n->getFloatValue()),
            'selectionLikelihood' => fn(ParseNode $n) => $o->setSelectionLikelihood($n->getEnumValue(SelectionLikelihoodInfo::class)),
        ];
    }

    /**
     * Gets the itemId property value. The itemId property
     * @return string|null
    */
    public function getItemId(): ?string {
        return $this->getBackingStore()->get('itemId');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the relevanceScore property value. The relevance score of the email address. A relevance score is used as a sort key, in relation to the other returned results. A higher relevance score value corresponds to a more relevant result. Relevance is determined by the user’s communication and collaboration patterns and business relationships.
     * @return float|null
    */
    public function getRelevanceScore(): ?float {
        return $this->getBackingStore()->get('relevanceScore');
    }

    /**
     * Gets the selectionLikelihood property value. The selectionLikelihood property
     * @return SelectionLikelihoodInfo|null
    */
    public function getSelectionLikelihood(): ?SelectionLikelihoodInfo {
        return $this->getBackingStore()->get('selectionLikelihood');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('address', $this->getAddress());
        $writer->writeStringValue('itemId', $this->getItemId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeFloatValue('relevanceScore', $this->getRelevanceScore());
        $writer->writeEnumValue('selectionLikelihood', $this->getSelectionLikelihood());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the address property value. The email address.
     *  @param string|null $value Value to set for the address property.
    */
    public function setAddress(?string $value): void {
        $this->getBackingStore()->set('address', $value);
    }

    /**
     * Sets the itemId property value. The itemId property
     *  @param string|null $value Value to set for the itemId property.
    */
    public function setItemId(?string $value): void {
        $this->getBackingStore()->set('itemId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the relevanceScore property value. The relevance score of the email address. A relevance score is used as a sort key, in relation to the other returned results. A higher relevance score value corresponds to a more relevant result. Relevance is determined by the user’s communication and collaboration patterns and business relationships.
     *  @param float|null $value Value to set for the relevanceScore property.
    */
    public function setRelevanceScore(?float $value): void {
        $this->getBackingStore()->set('relevanceScore', $value);
    }

    /**
     * Sets the selectionLikelihood property value. The selectionLikelihood property
     *  @param SelectionLikelihoodInfo|null $value Value to set for the selectionLikelihood property.
    */
    public function setSelectionLikelihood(?SelectionLikelihoodInfo $value): void {
        $this->getBackingStore()->set('selectionLikelihood', $value);
    }

}
