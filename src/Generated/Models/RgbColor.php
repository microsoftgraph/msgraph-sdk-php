<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RgbColor implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $b Blue value
    */
    private ?string $b = null;
    
    /**
     * @var string|null $g Green value
    */
    private ?string $g = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $r Red value
    */
    private ?string $r = null;
    
    /**
     * Instantiates a new rgbColor and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.rgbColor');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RgbColor
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RgbColor {
        return new RgbColor();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the b property value. Blue value
     * @return string|null
    */
    public function getB(): ?string {
        return $this->b;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'b' => function (ParseNode $n) use ($o) { $o->setB($n->getStringValue()); },
            'g' => function (ParseNode $n) use ($o) { $o->setG($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'r' => function (ParseNode $n) use ($o) { $o->setR($n->getStringValue()); },
        ];
    }

    /**
     * Gets the g property value. Green value
     * @return string|null
    */
    public function getG(): ?string {
        return $this->g;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the r property value. Red value
     * @return string|null
    */
    public function getR(): ?string {
        return $this->r;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('b', $this->b);
        $writer->writeStringValue('g', $this->g);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('r', $this->r);
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
     * Sets the b property value. Blue value
     *  @param string|null $value Value to set for the b property.
    */
    public function setB(?string $value ): void {
        $this->b = $value;
    }

    /**
     * Sets the g property value. Green value
     *  @param string|null $value Value to set for the g property.
    */
    public function setG(?string $value ): void {
        $this->g = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the r property value. Red value
     *  @param string|null $value Value to set for the r property.
    */
    public function setR(?string $value ): void {
        $this->r = $value;
    }

}
