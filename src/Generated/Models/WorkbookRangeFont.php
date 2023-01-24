<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookRangeFont extends Entity implements Parsable 
{
    /**
     * Instantiates a new workbookRangeFont and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('bold');
    }

    /**
     * Gets the color property value. HTML color code representation of the text color. E.g. #FF0000 represents Red.
     * @return string|null
    */
    public function getColor(): ?string {
        return $this->getBackingStore()->get('color');
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
        return $this->getBackingStore()->get('italic');
    }

    /**
     * Gets the name property value. Font name (e.g. 'Calibri')
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the size property value. Font size.
     * @return float|null
    */
    public function getSize(): ?float {
        return $this->getBackingStore()->get('size');
    }

    /**
     * Gets the underline property value. Type of underline applied to the font. The possible values are: None, Single, Double, SingleAccountant, DoubleAccountant.
     * @return string|null
    */
    public function getUnderline(): ?string {
        return $this->getBackingStore()->get('underline');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('bold', $this->getBold());
        $writer->writeStringValue('color', $this->getColor());
        $writer->writeBooleanValue('italic', $this->getItalic());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeFloatValue('size', $this->getSize());
        $writer->writeStringValue('underline', $this->getUnderline());
    }

    /**
     * Sets the bold property value. Represents the bold status of font.
     * @param bool|null $value Value to set for the bold property.
    */
    public function setBold(?bool $value): void {
        $this->getBackingStore()->set('bold', $value);
    }

    /**
     * Sets the color property value. HTML color code representation of the text color. E.g. #FF0000 represents Red.
     * @param string|null $value Value to set for the color property.
    */
    public function setColor(?string $value): void {
        $this->getBackingStore()->set('color', $value);
    }

    /**
     * Sets the italic property value. Represents the italic status of the font.
     * @param bool|null $value Value to set for the italic property.
    */
    public function setItalic(?bool $value): void {
        $this->getBackingStore()->set('italic', $value);
    }

    /**
     * Sets the name property value. Font name (e.g. 'Calibri')
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the size property value. Font size.
     * @param float|null $value Value to set for the size property.
    */
    public function setSize(?float $value): void {
        $this->getBackingStore()->set('size', $value);
    }

    /**
     * Sets the underline property value. Type of underline applied to the font. The possible values are: None, Single, Double, SingleAccountant, DoubleAccountant.
     * @param string|null $value Value to set for the underline property.
    */
    public function setUnderline(?string $value): void {
        $this->getBackingStore()->set('underline', $value);
    }

}
