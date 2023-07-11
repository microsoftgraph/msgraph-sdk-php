<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class WorkbookChart extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new workbookChart and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChart
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChart {
        return new WorkbookChart();
    }

    /**
     * Gets the axes property value. Represents chart axes. Read-only.
     * @return WorkbookChartAxes|null
    */
    public function getAxes(): ?WorkbookChartAxes {
        $val = $this->getBackingStore()->get('axes');
        if (is_null($val) || $val instanceof WorkbookChartAxes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'axes'");
    }

    /**
     * Gets the dataLabels property value. Represents the datalabels on the chart. Read-only.
     * @return WorkbookChartDataLabels|null
    */
    public function getDataLabels(): ?WorkbookChartDataLabels {
        $val = $this->getBackingStore()->get('dataLabels');
        if (is_null($val) || $val instanceof WorkbookChartDataLabels) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dataLabels'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'axes' => fn(ParseNode $n) => $o->setAxes($n->getObjectValue([WorkbookChartAxes::class, 'createFromDiscriminatorValue'])),
            'dataLabels' => fn(ParseNode $n) => $o->setDataLabels($n->getObjectValue([WorkbookChartDataLabels::class, 'createFromDiscriminatorValue'])),
            'format' => fn(ParseNode $n) => $o->setFormat($n->getObjectValue([WorkbookChartAreaFormat::class, 'createFromDiscriminatorValue'])),
            'height' => fn(ParseNode $n) => $o->setHeight($n->getFloatValue()),
            'left' => fn(ParseNode $n) => $o->setLeft($n->getFloatValue()),
            'legend' => fn(ParseNode $n) => $o->setLegend($n->getObjectValue([WorkbookChartLegend::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'series' => fn(ParseNode $n) => $o->setSeries($n->getCollectionOfObjectValues([WorkbookChartSeries::class, 'createFromDiscriminatorValue'])),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getObjectValue([WorkbookChartTitle::class, 'createFromDiscriminatorValue'])),
            'top' => fn(ParseNode $n) => $o->setTop($n->getFloatValue()),
            'width' => fn(ParseNode $n) => $o->setWidth($n->getFloatValue()),
            'worksheet' => fn(ParseNode $n) => $o->setWorksheet($n->getObjectValue([WorkbookWorksheet::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the format property value. Encapsulates the format properties for the chart area. Read-only.
     * @return WorkbookChartAreaFormat|null
    */
    public function getFormat(): ?WorkbookChartAreaFormat {
        $val = $this->getBackingStore()->get('format');
        if (is_null($val) || $val instanceof WorkbookChartAreaFormat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'format'");
    }

    /**
     * Gets the height property value. Represents the height, in points, of the chart object.
     * @return float|null
    */
    public function getHeight(): ?float {
        $val = $this->getBackingStore()->get('height');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'height'");
    }

    /**
     * Gets the left property value. The distance, in points, from the left side of the chart to the worksheet origin.
     * @return float|null
    */
    public function getLeft(): ?float {
        $val = $this->getBackingStore()->get('left');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'left'");
    }

    /**
     * Gets the legend property value. Represents the legend for the chart. Read-only.
     * @return WorkbookChartLegend|null
    */
    public function getLegend(): ?WorkbookChartLegend {
        $val = $this->getBackingStore()->get('legend');
        if (is_null($val) || $val instanceof WorkbookChartLegend) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'legend'");
    }

    /**
     * Gets the name property value. Represents the name of a chart object.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the series property value. Represents either a single series or collection of series in the chart. Read-only.
     * @return array<WorkbookChartSeries>|null
    */
    public function getSeries(): ?array {
        $val = $this->getBackingStore()->get('series');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WorkbookChartSeries::class);
            /** @var array<WorkbookChartSeries>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'series'");
    }

    /**
     * Gets the title property value. Represents the title of the specified chart, including the text, visibility, position and formating of the title. Read-only.
     * @return WorkbookChartTitle|null
    */
    public function getTitle(): ?WorkbookChartTitle {
        $val = $this->getBackingStore()->get('title');
        if (is_null($val) || $val instanceof WorkbookChartTitle) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'title'");
    }

    /**
     * Gets the top property value. Represents the distance, in points, from the top edge of the object to the top of row 1 (on a worksheet) or the top of the chart area (on a chart).
     * @return float|null
    */
    public function getTop(): ?float {
        $val = $this->getBackingStore()->get('top');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'top'");
    }

    /**
     * Gets the width property value. Represents the width, in points, of the chart object.
     * @return float|null
    */
    public function getWidth(): ?float {
        $val = $this->getBackingStore()->get('width');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'width'");
    }

    /**
     * Gets the worksheet property value. The worksheet containing the current chart. Read-only.
     * @return WorkbookWorksheet|null
    */
    public function getWorksheet(): ?WorkbookWorksheet {
        $val = $this->getBackingStore()->get('worksheet');
        if (is_null($val) || $val instanceof WorkbookWorksheet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'worksheet'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('axes', $this->getAxes());
        $writer->writeObjectValue('dataLabels', $this->getDataLabels());
        $writer->writeObjectValue('format', $this->getFormat());
        $writer->writeFloatValue('height', $this->getHeight());
        $writer->writeFloatValue('left', $this->getLeft());
        $writer->writeObjectValue('legend', $this->getLegend());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('series', $this->getSeries());
        $writer->writeObjectValue('title', $this->getTitle());
        $writer->writeFloatValue('top', $this->getTop());
        $writer->writeFloatValue('width', $this->getWidth());
        $writer->writeObjectValue('worksheet', $this->getWorksheet());
    }

    /**
     * Sets the axes property value. Represents chart axes. Read-only.
     * @param WorkbookChartAxes|null $value Value to set for the axes property.
    */
    public function setAxes(?WorkbookChartAxes $value): void {
        $this->getBackingStore()->set('axes', $value);
    }

    /**
     * Sets the dataLabels property value. Represents the datalabels on the chart. Read-only.
     * @param WorkbookChartDataLabels|null $value Value to set for the dataLabels property.
    */
    public function setDataLabels(?WorkbookChartDataLabels $value): void {
        $this->getBackingStore()->set('dataLabels', $value);
    }

    /**
     * Sets the format property value. Encapsulates the format properties for the chart area. Read-only.
     * @param WorkbookChartAreaFormat|null $value Value to set for the format property.
    */
    public function setFormat(?WorkbookChartAreaFormat $value): void {
        $this->getBackingStore()->set('format', $value);
    }

    /**
     * Sets the height property value. Represents the height, in points, of the chart object.
     * @param float|null $value Value to set for the height property.
    */
    public function setHeight(?float $value): void {
        $this->getBackingStore()->set('height', $value);
    }

    /**
     * Sets the left property value. The distance, in points, from the left side of the chart to the worksheet origin.
     * @param float|null $value Value to set for the left property.
    */
    public function setLeft(?float $value): void {
        $this->getBackingStore()->set('left', $value);
    }

    /**
     * Sets the legend property value. Represents the legend for the chart. Read-only.
     * @param WorkbookChartLegend|null $value Value to set for the legend property.
    */
    public function setLegend(?WorkbookChartLegend $value): void {
        $this->getBackingStore()->set('legend', $value);
    }

    /**
     * Sets the name property value. Represents the name of a chart object.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the series property value. Represents either a single series or collection of series in the chart. Read-only.
     * @param array<WorkbookChartSeries>|null $value Value to set for the series property.
    */
    public function setSeries(?array $value): void {
        $this->getBackingStore()->set('series', $value);
    }

    /**
     * Sets the title property value. Represents the title of the specified chart, including the text, visibility, position and formating of the title. Read-only.
     * @param WorkbookChartTitle|null $value Value to set for the title property.
    */
    public function setTitle(?WorkbookChartTitle $value): void {
        $this->getBackingStore()->set('title', $value);
    }

    /**
     * Sets the top property value. Represents the distance, in points, from the top edge of the object to the top of row 1 (on a worksheet) or the top of the chart area (on a chart).
     * @param float|null $value Value to set for the top property.
    */
    public function setTop(?float $value): void {
        $this->getBackingStore()->set('top', $value);
    }

    /**
     * Sets the width property value. Represents the width, in points, of the chart object.
     * @param float|null $value Value to set for the width property.
    */
    public function setWidth(?float $value): void {
        $this->getBackingStore()->set('width', $value);
    }

    /**
     * Sets the worksheet property value. The worksheet containing the current chart. Read-only.
     * @param WorkbookWorksheet|null $value Value to set for the worksheet property.
    */
    public function setWorksheet(?WorkbookWorksheet $value): void {
        $this->getBackingStore()->set('worksheet', $value);
    }

}
