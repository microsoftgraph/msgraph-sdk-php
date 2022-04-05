<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartLegend extends Entity 
{
    /** @var WorkbookChartLegendFormat|null $format Represents the formatting of a chart legend, which includes fill and font formatting. Read-only. */
    private ?WorkbookChartLegendFormat $format = null;
    
    /** @var bool|null $overlay Boolean value for whether the chart legend should overlap with the main body of the chart. */
    private ?bool $overlay = null;
    
    /** @var string|null $position Represents the position of the legend on the chart. The possible values are: Top, Bottom, Left, Right, Corner, Custom. */
    private ?string $position = null;
    
    /** @var bool|null $visible A boolean value the represents the visibility of a ChartLegend object. */
    private ?bool $visible = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartLegend {
        return new WorkbookChartLegend();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'format' => function (self $o, ParseNode $n) { $o->setFormat($n->getObjectValue(WorkbookChartLegendFormat::class)); },
            'overlay' => function (self $o, ParseNode $n) { $o->setOverlay($n->getBooleanValue()); },
            'position' => function (self $o, ParseNode $n) { $o->setPosition($n->getStringValue()); },
            'visible' => function (self $o, ParseNode $n) { $o->setVisible($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the format property value. Represents the formatting of a chart legend, which includes fill and font formatting. Read-only.
     * @return WorkbookChartLegendFormat|null
    */
    public function getFormat(): ?WorkbookChartLegendFormat {
        return $this->format;
    }

    /**
     * Gets the overlay property value. Boolean value for whether the chart legend should overlap with the main body of the chart.
     * @return bool|null
    */
    public function getOverlay(): ?bool {
        return $this->overlay;
    }

    /**
     * Gets the position property value. Represents the position of the legend on the chart. The possible values are: Top, Bottom, Left, Right, Corner, Custom.
     * @return string|null
    */
    public function getPosition(): ?string {
        return $this->position;
    }

    /**
     * Gets the visible property value. A boolean value the represents the visibility of a ChartLegend object.
     * @return bool|null
    */
    public function getVisible(): ?bool {
        return $this->visible;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('format', $this->format);
        $writer->writeBooleanValue('overlay', $this->overlay);
        $writer->writeStringValue('position', $this->position);
        $writer->writeBooleanValue('visible', $this->visible);
    }

    /**
     * Sets the format property value. Represents the formatting of a chart legend, which includes fill and font formatting. Read-only.
     *  @param WorkbookChartLegendFormat|null $value Value to set for the format property.
    */
    public function setFormat(?WorkbookChartLegendFormat $value ): void {
        $this->format = $value;
    }

    /**
     * Sets the overlay property value. Boolean value for whether the chart legend should overlap with the main body of the chart.
     *  @param bool|null $value Value to set for the overlay property.
    */
    public function setOverlay(?bool $value ): void {
        $this->overlay = $value;
    }

    /**
     * Sets the position property value. Represents the position of the legend on the chart. The possible values are: Top, Bottom, Left, Right, Corner, Custom.
     *  @param string|null $value Value to set for the position property.
    */
    public function setPosition(?string $value ): void {
        $this->position = $value;
    }

    /**
     * Sets the visible property value. A boolean value the represents the visibility of a ChartLegend object.
     *  @param bool|null $value Value to set for the visible property.
    */
    public function setVisible(?bool $value ): void {
        $this->visible = $value;
    }

}
