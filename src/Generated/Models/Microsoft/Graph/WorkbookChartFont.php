<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartFont extends Entity 
{
    /** @var bool|null $bold Represents the bold status of font. */
    private ?bool $bold = null;
    
    /** @var string|null $color HTML color code representation of the text color. E.g. #FF0000 represents Red. */
    private ?string $color = null;
    
    /** @var bool|null $italic Represents the italic status of the font. */
    private ?bool $italic = null;
    
    /** @var string|null $name Font name (e.g. 'Calibri') */
    private ?string $name = null;
    
    /** @var float|null $size Size of the font (e.g. 11) */
    private ?float $size = null;
    
    /** @var string|null $underline Type of underline applied to the font. The possible values are: None, Single. */
    private ?string $underline = null;
    
    /**
     * Instantiates a new workbookChartFont and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartFont
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartFont {
        return new WorkbookChartFont();
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
        return array_merge(parent::getFieldDeserializers(), [
            'bold' => function (self $o, ParseNode $n) { $o->setBold($n->getBooleanValue()); },
            'color' => function (self $o, ParseNode $n) { $o->setColor($n->getStringValue()); },
            'italic' => function (self $o, ParseNode $n) { $o->setItalic($n->getBooleanValue()); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'size' => function (self $o, ParseNode $n) { $o->setSize($n->getFloatValue()); },
            'underline' => function (self $o, ParseNode $n) { $o->setUnderline($n->getStringValue()); },
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
     * Gets the size property value. Size of the font (e.g. 11)
     * @return float|null
    */
    public function getSize(): ?float {
        return $this->size;
    }

    /**
     * Gets the underline property value. Type of underline applied to the font. The possible values are: None, Single.
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
     * Sets the size property value. Size of the font (e.g. 11)
     *  @param float|null $value Value to set for the size property.
    */
    public function setSize(?float $value ): void {
        $this->size = $value;
    }

    /**
     * Sets the underline property value. Type of underline applied to the font. The possible values are: None, Single.
     *  @param string|null $value Value to set for the underline property.
    */
    public function setUnderline(?string $value ): void {
        $this->underline = $value;
    }

}
