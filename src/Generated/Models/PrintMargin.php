<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintMargin implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $bottom The margin in microns from the bottom edge.
    */
    private ?int $bottom = null;
    
    /**
     * @var int|null $left The margin in microns from the left edge.
    */
    private ?int $left = null;
    
    /**
     * @var int|null $right The margin in microns from the right edge.
    */
    private ?int $right = null;
    
    /**
     * @var int|null $top The margin in microns from the top edge.
    */
    private ?int $top = null;
    
    /**
     * Instantiates a new printMargin and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintMargin
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintMargin {
        return new PrintMargin();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the bottom property value. The margin in microns from the bottom edge.
     * @return int|null
    */
    public function getBottom(): ?int {
        return $this->bottom;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bottom' => function (ParseNode $n) use ($o) { $o->setBottom($n->getIntegerValue()); },
            'left' => function (ParseNode $n) use ($o) { $o->setLeft($n->getIntegerValue()); },
            'right' => function (ParseNode $n) use ($o) { $o->setRight($n->getIntegerValue()); },
            'top' => function (ParseNode $n) use ($o) { $o->setTop($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the left property value. The margin in microns from the left edge.
     * @return int|null
    */
    public function getLeft(): ?int {
        return $this->left;
    }

    /**
     * Gets the right property value. The margin in microns from the right edge.
     * @return int|null
    */
    public function getRight(): ?int {
        return $this->right;
    }

    /**
     * Gets the top property value. The margin in microns from the top edge.
     * @return int|null
    */
    public function getTop(): ?int {
        return $this->top;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('bottom', $this->bottom);
        $writer->writeIntegerValue('left', $this->left);
        $writer->writeIntegerValue('right', $this->right);
        $writer->writeIntegerValue('top', $this->top);
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
     * Sets the bottom property value. The margin in microns from the bottom edge.
     *  @param int|null $value Value to set for the bottom property.
    */
    public function setBottom(?int $value ): void {
        $this->bottom = $value;
    }

    /**
     * Sets the left property value. The margin in microns from the left edge.
     *  @param int|null $value Value to set for the left property.
    */
    public function setLeft(?int $value ): void {
        $this->left = $value;
    }

    /**
     * Sets the right property value. The margin in microns from the right edge.
     *  @param int|null $value Value to set for the right property.
    */
    public function setRight(?int $value ): void {
        $this->right = $value;
    }

    /**
     * Sets the top property value. The margin in microns from the top edge.
     *  @param int|null $value Value to set for the top property.
    */
    public function setTop(?int $value ): void {
        $this->top = $value;
    }

}
