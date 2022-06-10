<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AverageComparativeScore implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Instantiates a new averageComparativeScore and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
            'averageScore' => function (ParseNode $n) use ($o) { $o->setAverageScore($n->getFloatValue()); },
            'basis' => function (ParseNode $n) use ($o) { $o->setBasis($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeFloatValue('averageScore', $this->averageScore);
        $writer->writeStringValue('basis', $this->basis);
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

}
