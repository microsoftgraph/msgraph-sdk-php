<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartAxisTitleFormat extends Entity 
{
    /** @var WorkbookChartFont|null $font Represents the font attributes, such as font name, font size, color, etc. of chart axis title object. Read-only. */
    private ?WorkbookChartFont $font = null;
    
    /**
     * Instantiates a new workbookChartAxisTitleFormat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartAxisTitleFormat
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartAxisTitleFormat {
        return new WorkbookChartAxisTitleFormat();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'font' => function (self $o, ParseNode $n) { $o->setFont($n->getObjectValue(WorkbookChartFont::class)); },
        ]);
    }

    /**
     * Gets the font property value. Represents the font attributes, such as font name, font size, color, etc. of chart axis title object. Read-only.
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
        $writer->writeObjectValue('font', $this->font);
    }

    /**
     * Sets the font property value. Represents the font attributes, such as font name, font size, color, etc. of chart axis title object. Read-only.
     *  @param WorkbookChartFont|null $value Value to set for the font property.
    */
    public function setFont(?WorkbookChartFont $value ): void {
        $this->font = $value;
    }

}
