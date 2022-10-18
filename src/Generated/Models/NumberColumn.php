<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NumberColumn implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $decimalPlaces How many decimal places to display. See below for information about the possible values.
    */
    private ?string $decimalPlaces = null;
    
    /**
     * @var string|null $displayAs How the value should be presented in the UX. Must be one of number or percentage. If unspecified, treated as number.
    */
    private ?string $displayAs = null;
    
    /**
     * @var float|null $maximum The maximum permitted value.
    */
    private ?float $maximum = null;
    
    /**
     * @var float|null $minimum The minimum permitted value.
    */
    private ?float $minimum = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new numberColumn and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.numberColumn');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NumberColumn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NumberColumn {
        return new NumberColumn();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the decimalPlaces property value. How many decimal places to display. See below for information about the possible values.
     * @return string|null
    */
    public function getDecimalPlaces(): ?string {
        return $this->decimalPlaces;
    }

    /**
     * Gets the displayAs property value. How the value should be presented in the UX. Must be one of number or percentage. If unspecified, treated as number.
     * @return string|null
    */
    public function getDisplayAs(): ?string {
        return $this->displayAs;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'decimalPlaces' => fn(ParseNode $n) => $o->setDecimalPlaces($n->getStringValue()),
            'displayAs' => fn(ParseNode $n) => $o->setDisplayAs($n->getStringValue()),
            'maximum' => fn(ParseNode $n) => $o->setMaximum($n->getFloatValue()),
            'minimum' => fn(ParseNode $n) => $o->setMinimum($n->getFloatValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the maximum property value. The maximum permitted value.
     * @return float|null
    */
    public function getMaximum(): ?float {
        return $this->maximum;
    }

    /**
     * Gets the minimum property value. The minimum permitted value.
     * @return float|null
    */
    public function getMinimum(): ?float {
        return $this->minimum;
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
        $writer->writeStringValue('decimalPlaces', $this->decimalPlaces);
        $writer->writeStringValue('displayAs', $this->displayAs);
        $writer->writeFloatValue('maximum', $this->maximum);
        $writer->writeFloatValue('minimum', $this->minimum);
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
     * Sets the decimalPlaces property value. How many decimal places to display. See below for information about the possible values.
     *  @param string|null $value Value to set for the decimalPlaces property.
    */
    public function setDecimalPlaces(?string $value ): void {
        $this->decimalPlaces = $value;
    }

    /**
     * Sets the displayAs property value. How the value should be presented in the UX. Must be one of number or percentage. If unspecified, treated as number.
     *  @param string|null $value Value to set for the displayAs property.
    */
    public function setDisplayAs(?string $value ): void {
        $this->displayAs = $value;
    }

    /**
     * Sets the maximum property value. The maximum permitted value.
     *  @param float|null $value Value to set for the maximum property.
    */
    public function setMaximum(?float $value ): void {
        $this->maximum = $value;
    }

    /**
     * Sets the minimum property value. The minimum permitted value.
     *  @param float|null $value Value to set for the minimum property.
    */
    public function setMinimum(?float $value ): void {
        $this->minimum = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
