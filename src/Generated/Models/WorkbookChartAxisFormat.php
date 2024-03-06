<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartAxisFormat extends Entity implements Parsable 
{
    /**
     * Instantiates a new WorkbookChartAxisFormat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartAxisFormat
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartAxisFormat {
        return new WorkbookChartAxisFormat();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'font' => fn(ParseNode $n) => $o->setFont($n->getObjectValue([WorkbookChartFont::class, 'createFromDiscriminatorValue'])),
            'line' => fn(ParseNode $n) => $o->setLine($n->getObjectValue([WorkbookChartLineFormat::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the font property value. Represents the font attributes (font name, font size, color, etc.) for a chart axis element. Read-only.
     * @return WorkbookChartFont|null
    */
    public function getFont(): ?WorkbookChartFont {
        $val = $this->getBackingStore()->get('font');
        if (is_null($val) || $val instanceof WorkbookChartFont) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'font'");
    }

    /**
     * Gets the line property value. Represents chart line formatting. Read-only.
     * @return WorkbookChartLineFormat|null
    */
    public function getLine(): ?WorkbookChartLineFormat {
        $val = $this->getBackingStore()->get('line');
        if (is_null($val) || $val instanceof WorkbookChartLineFormat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'line'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('font', $this->getFont());
        $writer->writeObjectValue('line', $this->getLine());
    }

    /**
     * Sets the font property value. Represents the font attributes (font name, font size, color, etc.) for a chart axis element. Read-only.
     * @param WorkbookChartFont|null $value Value to set for the font property.
    */
    public function setFont(?WorkbookChartFont $value): void {
        $this->getBackingStore()->set('font', $value);
    }

    /**
     * Sets the line property value. Represents chart line formatting. Read-only.
     * @param WorkbookChartLineFormat|null $value Value to set for the line property.
    */
    public function setLine(?WorkbookChartLineFormat $value): void {
        $this->getBackingStore()->set('line', $value);
    }

}
