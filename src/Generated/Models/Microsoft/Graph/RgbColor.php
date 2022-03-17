<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RgbColor implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var Byte|null $b Blue value */
    private ?Byte $b = null;
    
    /** @var Byte|null $g Green value */
    private ?Byte $g = null;
    
    /** @var Byte|null $r Red value */
    private ?Byte $r = null;
    
    /**
     * Instantiates a new rgbColor and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RgbColor
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): RgbColor {
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
     * @return Byte|null
    */
    public function getB(): ?Byte {
        return $this->b;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'b' => function (self $o, ParseNode $n) { $o->setB($n->getObjectValue(Byte::class)); },
            'g' => function (self $o, ParseNode $n) { $o->setG($n->getObjectValue(Byte::class)); },
            'r' => function (self $o, ParseNode $n) { $o->setR($n->getObjectValue(Byte::class)); },
        ];
    }

    /**
     * Gets the g property value. Green value
     * @return Byte|null
    */
    public function getG(): ?Byte {
        return $this->g;
    }

    /**
     * Gets the r property value. Red value
     * @return Byte|null
    */
    public function getR(): ?Byte {
        return $this->r;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeAnyValue('b', $this->b);
        $writer->writeAnyValue('g', $this->g);
        $writer->writeAnyValue('r', $this->r);
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
     *  @param Byte|null $value Value to set for the b property.
    */
    public function setB(?Byte $value ): void {
        $this->b = $value;
    }

    /**
     * Sets the g property value. Green value
     *  @param Byte|null $value Value to set for the g property.
    */
    public function setG(?Byte $value ): void {
        $this->g = $value;
    }

    /**
     * Sets the r property value. Red value
     *  @param Byte|null $value Value to set for the r property.
    */
    public function setR(?Byte $value ): void {
        $this->r = $value;
    }

}
