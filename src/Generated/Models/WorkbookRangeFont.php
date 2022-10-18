<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookRangeFont extends Entity implements Parsable 
{
    /**
     * @var bool|null $bold Represents the bold status of font.
    */
    private ?bool $bold = null;
    
    /**
     * @var string|null $color HTML color code representation of the text color. E.g. #FF0000 represents Red.
    */
    private ?string $color = null;
    
    /**
     * @var bool|null $italic Represents the italic status of the font.
    */
    private ?bool $italic = null;
    
    /**
     * @var string|null $name Font name (e.g. 'Calibri')
    */
    private ?string $name = null;
    
    /**
     * @var float|null $size Font size.
    */
    private ?float $size = null;
    
    /**
     * @var string|null $underline Type of underline applied to the font. The possible values are: None, Single, Double, SingleAccountant, DoubleAccountant.
    */
    private ?string $underline = null;
    
    /**
     * Instantiates a new workbookRangeFont and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workbookRangeFont');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookRangeFont
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookRangeFont {
        return new WorkbookRangeFont();
    }

    /**
     * Gets the bold property value. Represents the bold status of font.
     * @return bool|null
    */
    public function getBold(): ?bool {
        return $this->bold;
    }

    /**
     * Gets the color property value. HTML color code representation of the text color. E.g. #FF0000 represents Red.
     * @return string|null
    */
    public function getColor(): ?string {
        return $this->color;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bold' => fn(ParseNode $n) => $o->setBold($n->getBooleanValue()),
            'color' => fn(ParseNode $n) => $o->setColor($n->getStringValue()),
            'italic' => fn(ParseNode $n) => $o->setItalic($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'size' => fn(ParseNode $n) => $o->setSize($n->getFloatValue()),
            'underline' => fn(ParseNode $n) => $o->setUnderline($n->getStringValue()),
        ]);
    }

    /**
     * Gets the italic property value. Represents the italic status of the font.
     * @return bool|null
    */
    public function getItalic(): ?bool {
        return $this->italic;
    }

    /**
     * Gets the name property value. Font name (e.g. 'Calibri')
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the size property value. Font size.
     * @return float|null
    */
    public function getSize(): ?float {
        return $this->size;
    }

    /**
     * Gets the underline property value. Type of underline applied to the font. The possible values are: None, Single, Double, SingleAccountant, DoubleAccountant.
     * @return string|null
    */
    public function getUnderline(): ?string {
        return $this->underline;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('bold', $this->bold);
        $writer->writeStringValue('color', $this->color);
        $writer->writeBooleanValue('italic', $this->italic);
        $writer->writeStringValue('name', $this->name);
        $writer->writeFloatValue('size', $this->size);
        $writer->writeStringValue('underline', $this->underline);
    }

    /**
     * Sets the bold property value. Represents the bold status of font.
     *  @param bool|null $value Value to set for the bold property.
    */
    public function setBold(?bool $value ): void {
        $this->bold = $value;
    }

    /**
     * Sets the color property value. HTML color code representation of the text color. E.g. #FF0000 represents Red.
     *  @param string|null $value Value to set for the color property.
    */
    public function setColor(?string $value ): void {
        $this->color = $value;
    }

    /**
     * Sets the italic property value. Represents the italic status of the font.
     *  @param bool|null $value Value to set for the italic property.
    */
    public function setItalic(?bool $value ): void {
        $this->italic = $value;
    }

    /**
     * Sets the name property value. Font name (e.g. 'Calibri')
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the size property value. Font size.
     *  @param float|null $value Value to set for the size property.
    */
    public function setSize(?float $value ): void {
        $this->size = $value;
    }

    /**
     * Sets the underline property value. Type of underline applied to the font. The possible values are: None, Single, Double, SingleAccountant, DoubleAccountant.
     *  @param string|null $value Value to set for the underline property.
    */
    public function setUnderline(?string $value ): void {
        $this->underline = $value;
    }

}
