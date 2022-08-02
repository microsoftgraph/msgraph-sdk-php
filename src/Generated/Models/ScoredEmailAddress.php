<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ScoredEmailAddress implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $address The email address.
    */
    private ?string $address = null;
    
    /**
     * @var string|null $itemId The itemId property
    */
    private ?string $itemId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var float|null $relevanceScore The relevance score of the email address. A relevance score is used as a sort key, in relation to the other returned results. A higher relevance score value corresponds to a more relevant result. Relevance is determined by the user’s communication and collaboration patterns and business relationships.
    */
    private ?float $relevanceScore = null;
    
    /**
     * @var SelectionLikelihoodInfo|null $selectionLikelihood The selectionLikelihood property
    */
    private ?SelectionLikelihoodInfo $selectionLikelihood = null;
    
    /**
     * Instantiates a new scoredEmailAddress and sets the default values.
    */
    public function __construct() {
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the address property value. The email address.
     * @return string|null
    */
    public function getAddress(): ?string {
        return $this->address;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'address' => function (ParseNode $n) use ($o) { $o->setAddress($n->getStringValue()); },
            'itemId' => function (ParseNode $n) use ($o) { $o->setItemId($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'relevanceScore' => function (ParseNode $n) use ($o) { $o->setRelevanceScore($n->getFloatValue()); },
            'selectionLikelihood' => function (ParseNode $n) use ($o) { $o->setSelectionLikelihood($n->getEnumValue(SelectionLikelihoodInfo::class)); },
        ];
    }

    /**
     * Gets the itemId property value. The itemId property
     * @return string|null
    */
    public function getItemId(): ?string {
        return $this->itemId;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the relevanceScore property value. The relevance score of the email address. A relevance score is used as a sort key, in relation to the other returned results. A higher relevance score value corresponds to a more relevant result. Relevance is determined by the user’s communication and collaboration patterns and business relationships.
     * @return float|null
    */
    public function getRelevanceScore(): ?float {
        return $this->relevanceScore;
    }

    /**
     * Gets the selectionLikelihood property value. The selectionLikelihood property
     * @return SelectionLikelihoodInfo|null
    */
    public function getSelectionLikelihood(): ?SelectionLikelihoodInfo {
        return $this->selectionLikelihood;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('address', $this->address);
        $writer->writeStringValue('itemId', $this->itemId);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeFloatValue('relevanceScore', $this->relevanceScore);
        $writer->writeEnumValue('selectionLikelihood', $this->selectionLikelihood);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the address property value. The email address.
     *  @param string|null $value Value to set for the address property.
    */
    public function setAddress(?string $value ): void {
        $this->address = $value;
    }

    /**
     * Sets the itemId property value. The itemId property
     *  @param string|null $value Value to set for the itemId property.
    */
    public function setItemId(?string $value ): void {
        $this->itemId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the relevanceScore property value. The relevance score of the email address. A relevance score is used as a sort key, in relation to the other returned results. A higher relevance score value corresponds to a more relevant result. Relevance is determined by the user’s communication and collaboration patterns and business relationships.
     *  @param float|null $value Value to set for the relevanceScore property.
    */
    public function setRelevanceScore(?float $value ): void {
        $this->relevanceScore = $value;
    }

    /**
     * Sets the selectionLikelihood property value. The selectionLikelihood property
     *  @param SelectionLikelihoodInfo|null $value Value to set for the selectionLikelihood property.
    */
    public function setSelectionLikelihood(?SelectionLikelihoodInfo $value ): void {
        $this->selectionLikelihood = $value;
    }

}
