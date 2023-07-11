<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartAxisTitleFormat extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartAxisTitleFormat {
        return new WorkbookChartAxisTitleFormat();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'font' => fn(ParseNode $n) => $o->setFont($n->getObjectValue([WorkbookChartFont::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the font property value. Represents the font attributes, such as font name, font size, color, etc. of chart axis title object. Read-only.
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
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('font', $this->getFont());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the font property value. Represents the font attributes, such as font name, font size, color, etc. of chart axis title object. Read-only.
     * @param WorkbookChartFont|null $value Value to set for the font property.
    */
    public function setFont(?WorkbookChartFont $value): void {
        $this->getBackingStore()->set('font', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
