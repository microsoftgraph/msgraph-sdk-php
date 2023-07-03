<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartLegend extends Entity implements Parsable 
{
    /**
     * Instantiates a new workbookChartLegend and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartLegend
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartLegend {
        return new WorkbookChartLegend();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'format' => fn(ParseNode $n) => $o->setFormat($n->getObjectValue([WorkbookChartLegendFormat::class, 'createFromDiscriminatorValue'])),
            'overlay' => fn(ParseNode $n) => $o->setOverlay($n->getBooleanValue()),
            'position' => fn(ParseNode $n) => $o->setPosition($n->getStringValue()),
            'visible' => fn(ParseNode $n) => $o->setVisible($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the format property value. Represents the formatting of a chart legend, which includes fill and font formatting. Read-only.
     * @return WorkbookChartLegendFormat|null
    */
    public function getFormat(): ?WorkbookChartLegendFormat {
        $val = $this->getBackingStore()->get('format');
        if (is_null($val) || $val instanceof WorkbookChartLegendFormat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'format'");
    }

    /**
     * Gets the overlay property value. Boolean value for whether the chart legend should overlap with the main body of the chart.
     * @return bool|null
    */
    public function getOverlay(): ?bool {
        $val = $this->getBackingStore()->get('overlay');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'overlay'");
    }

    /**
     * Gets the position property value. Represents the position of the legend on the chart. The possible values are: Top, Bottom, Left, Right, Corner, Custom.
     * @return string|null
    */
    public function getPosition(): ?string {
        $val = $this->getBackingStore()->get('position');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'position'");
    }

    /**
     * Gets the visible property value. A boolean value the represents the visibility of a ChartLegend object.
     * @return bool|null
    */
    public function getVisible(): ?bool {
        $val = $this->getBackingStore()->get('visible');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'visible'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('format', $this->getFormat());
        $writer->writeBooleanValue('overlay', $this->getOverlay());
        $writer->writeStringValue('position', $this->getPosition());
        $writer->writeBooleanValue('visible', $this->getVisible());
    }

    /**
     * Sets the format property value. Represents the formatting of a chart legend, which includes fill and font formatting. Read-only.
     * @param WorkbookChartLegendFormat|null $value Value to set for the format property.
    */
    public function setFormat(?WorkbookChartLegendFormat $value): void {
        $this->getBackingStore()->set('format', $value);
    }

    /**
     * Sets the overlay property value. Boolean value for whether the chart legend should overlap with the main body of the chart.
     * @param bool|null $value Value to set for the overlay property.
    */
    public function setOverlay(?bool $value): void {
        $this->getBackingStore()->set('overlay', $value);
    }

    /**
     * Sets the position property value. Represents the position of the legend on the chart. The possible values are: Top, Bottom, Left, Right, Corner, Custom.
     * @param string|null $value Value to set for the position property.
    */
    public function setPosition(?string $value): void {
        $this->getBackingStore()->set('position', $value);
    }

    /**
     * Sets the visible property value. A boolean value the represents the visibility of a ChartLegend object.
     * @param bool|null $value Value to set for the visible property.
    */
    public function setVisible(?bool $value): void {
        $this->getBackingStore()->set('visible', $value);
    }

}
