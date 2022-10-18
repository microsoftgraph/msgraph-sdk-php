<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AverageComparativeScore implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var float|null $averageScore Average score within specified basis.
    */
    private ?float $averageScore = null;
    
    /**
     * @var string|null $basis Scope type. The possible values are: AllTenants, TotalSeats, IndustryTypes.
    */
    private ?string $basis = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new averageComparativeScore and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.averageComparativeScore');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AverageComparativeScore
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AverageComparativeScore {
        return new AverageComparativeScore();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the averageScore property value. Average score within specified basis.
     * @return float|null
    */
    public function getAverageScore(): ?float {
        return $this->averageScore;
    }

    /**
     * Gets the basis property value. Scope type. The possible values are: AllTenants, TotalSeats, IndustryTypes.
     * @return string|null
    */
    public function getBasis(): ?string {
        return $this->basis;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'averageScore' => fn(ParseNode $n) => $o->setAverageScore($n->getFloatValue()),
            'basis' => fn(ParseNode $n) => $o->setBasis($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('averageScore', $this->averageScore);
        $writer->writeStringValue('basis', $this->basis);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the averageScore property value. Average score within specified basis.
     *  @param float|null $value Value to set for the averageScore property.
    */
    public function setAverageScore(?float $value ): void {
        $this->averageScore = $value;
    }

    /**
     * Sets the basis property value. Scope type. The possible values are: AllTenants, TotalSeats, IndustryTypes.
     *  @param string|null $value Value to set for the basis property.
    */
    public function setBasis(?string $value ): void {
        $this->basis = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
