<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CalculatedColumn implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $format For dateTime output types, the format of the value. Must be one of dateOnly or dateTime.
    */
    private ?string $format = null;
    
    /**
     * @var string|null $formula The formula used to compute the value for this column.
    */
    private ?string $formula = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $outputType The output type used to format values in this column. Must be one of boolean, currency, dateTime, number, or text.
    */
    private ?string $outputType = null;
    
    /**
     * Instantiates a new calculatedColumn and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.calculatedColumn');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CalculatedColumn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CalculatedColumn {
        return new CalculatedColumn();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'format' => fn(ParseNode $n) => $o->setFormat($n->getStringValue()),
            'formula' => fn(ParseNode $n) => $o->setFormula($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'outputType' => fn(ParseNode $n) => $o->setOutputType($n->getStringValue()),
        ];
    }

    /**
     * Gets the format property value. For dateTime output types, the format of the value. Must be one of dateOnly or dateTime.
     * @return string|null
    */
    public function getFormat(): ?string {
        return $this->format;
    }

    /**
     * Gets the formula property value. The formula used to compute the value for this column.
     * @return string|null
    */
    public function getFormula(): ?string {
        return $this->formula;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the outputType property value. The output type used to format values in this column. Must be one of boolean, currency, dateTime, number, or text.
     * @return string|null
    */
    public function getOutputType(): ?string {
        return $this->outputType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('format', $this->format);
        $writer->writeStringValue('formula', $this->formula);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('outputType', $this->outputType);
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
     * Sets the format property value. For dateTime output types, the format of the value. Must be one of dateOnly or dateTime.
     *  @param string|null $value Value to set for the format property.
    */
    public function setFormat(?string $value ): void {
        $this->format = $value;
    }

    /**
     * Sets the formula property value. The formula used to compute the value for this column.
     *  @param string|null $value Value to set for the formula property.
    */
    public function setFormula(?string $value ): void {
        $this->formula = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the outputType property value. The output type used to format values in this column. Must be one of boolean, currency, dateTime, number, or text.
     *  @param string|null $value Value to set for the outputType property.
    */
    public function setOutputType(?string $value ): void {
        $this->outputType = $value;
    }

}
