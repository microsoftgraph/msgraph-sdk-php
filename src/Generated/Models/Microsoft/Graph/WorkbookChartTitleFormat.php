<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartTitleFormat extends Entity 
{
    /** @var WorkbookChartFill|null $fill Represents the fill format of an object, which includes background formatting information. Read-only. */
    private ?WorkbookChartFill $fill = null;
    
    /** @var WorkbookChartFont|null $font Represents the font attributes (font name, font size, color, etc.) for the current object. Read-only. */
    private ?WorkbookChartFont $font = null;
    
    /**
     * Instantiates a new workbookChartTitleFormat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartTitleFormat
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartTitleFormat {
        return new WorkbookChartTitleFormat();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'fill' => function (self $o, ParseNode $n) { $o->setFill($n->getObjectValue(WorkbookChartFill::class)); },
            'font' => function (self $o, ParseNode $n) { $o->setFont($n->getObjectValue(WorkbookChartFont::class)); },
        ]);
    }

    /**
     * Gets the fill property value. Represents the fill format of an object, which includes background formatting information. Read-only.
     * @return WorkbookChartFill|null
    */
    public function getFill(): ?WorkbookChartFill {
        return $this->fill;
    }

    /**
     * Gets the font property value. Represents the font attributes (font name, font size, color, etc.) for the current object. Read-only.
     * @return WorkbookChartFont|null
    */
    public function getFont(): ?WorkbookChartFont {
        return $this->font;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('fill', $this->fill);
        $writer->writeObjectValue('font', $this->font);
    }

    /**
     * Sets the fill property value. Represents the fill format of an object, which includes background formatting information. Read-only.
     *  @param WorkbookChartFill|null $value Value to set for the fill property.
    */
    public function setFill(?WorkbookChartFill $value ): void {
        $this->fill = $value;
    }

    /**
     * Sets the font property value. Represents the font attributes (font name, font size, color, etc.) for the current object. Read-only.
     *  @param WorkbookChartFont|null $value Value to set for the font property.
    */
    public function setFont(?WorkbookChartFont $value ): void {
        $this->font = $value;
    }

}
