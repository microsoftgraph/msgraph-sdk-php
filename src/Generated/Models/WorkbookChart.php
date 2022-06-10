<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChart extends Entity implements Parsable 
{
    /**
     * @var WorkbookChartAxes|null $axes Represents chart axes. Read-only.
    */
    private ?WorkbookChartAxes $axes = null;
    
    /**
     * @var WorkbookChartDataLabels|null $dataLabels Represents the datalabels on the chart. Read-only.
    */
    private ?WorkbookChartDataLabels $dataLabels = null;
    
    /**
     * @var WorkbookChartAreaFormat|null $format Encapsulates the format properties for the chart area. Read-only.
    */
    private ?WorkbookChartAreaFormat $format = null;
    
    /**
     * @var float|null $height Represents the height, in points, of the chart object.
    */
    private ?float $height = null;
    
    /**
     * @var float|null $left The distance, in points, from the left side of the chart to the worksheet origin.
    */
    private ?float $left = null;
    
    /**
     * @var WorkbookChartLegend|null $legend Represents the legend for the chart. Read-only.
    */
    private ?WorkbookChartLegend $legend = null;
    
    /**
     * @var string|null $name Represents the name of a chart object.
    */
    private ?string $name = null;
    
    /**
     * @var array<WorkbookChartSeries>|null $series Represents either a single series or collection of series in the chart. Read-only.
    */
    private ?array $series = null;
    
    /**
     * @var WorkbookChartTitle|null $title Represents the title of the specified chart, including the text, visibility, position and formating of the title. Read-only.
    */
    private ?WorkbookChartTitle $title = null;
    
    /**
     * @var float|null $top Represents the distance, in points, from the top edge of the object to the top of row 1 (on a worksheet) or the top of the chart area (on a chart).
    */
    private ?float $top = null;
    
    /**
     * @var float|null $width Represents the width, in points, of the chart object.
    */
    private ?float $width = null;
    
    /**
     * @var WorkbookWorksheet|null $worksheet The worksheet containing the current chart. Read-only.
    */
    private ?WorkbookWorksheet $worksheet = null;
    
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
        return $this->axes;
    }

    /**
     * Gets the dataLabels property value. Represents the datalabels on the chart. Read-only.
     * @return WorkbookChartDataLabels|null
    */
    public function getDataLabels(): ?WorkbookChartDataLabels {
        return $this->dataLabels;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'axes' => function (ParseNode $n) use ($o) { $o->setAxes($n->getObjectValue(array(WorkbookChartAxes::class, 'createFromDiscriminatorValue'))); },
            'dataLabels' => function (ParseNode $n) use ($o) { $o->setDataLabels($n->getObjectValue(array(WorkbookChartDataLabels::class, 'createFromDiscriminatorValue'))); },
            'format' => function (ParseNode $n) use ($o) { $o->setFormat($n->getObjectValue(array(WorkbookChartAreaFormat::class, 'createFromDiscriminatorValue'))); },
            'height' => function (ParseNode $n) use ($o) { $o->setHeight($n->getFloatValue()); },
            'left' => function (ParseNode $n) use ($o) { $o->setLeft($n->getFloatValue()); },
            'legend' => function (ParseNode $n) use ($o) { $o->setLegend($n->getObjectValue(array(WorkbookChartLegend::class, 'createFromDiscriminatorValue'))); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'series' => function (ParseNode $n) use ($o) { $o->setSeries($n->getCollectionOfObjectValues(array(WorkbookChartSeries::class, 'createFromDiscriminatorValue'))); },
            'title' => function (ParseNode $n) use ($o) { $o->setTitle($n->getObjectValue(array(WorkbookChartTitle::class, 'createFromDiscriminatorValue'))); },
            'top' => function (ParseNode $n) use ($o) { $o->setTop($n->getFloatValue()); },
            'width' => function (ParseNode $n) use ($o) { $o->setWidth($n->getFloatValue()); },
            'worksheet' => function (ParseNode $n) use ($o) { $o->setWorksheet($n->getObjectValue(array(WorkbookWorksheet::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the format property value. Encapsulates the format properties for the chart area. Read-only.
     * @return WorkbookChartAreaFormat|null
    */
    public function getFormat(): ?WorkbookChartAreaFormat {
        return $this->format;
    }

    /**
     * Gets the height property value. Represents the height, in points, of the chart object.
     * @return float|null
    */
    public function getHeight(): ?float {
        return $this->height;
    }

    /**
     * Gets the left property value. The distance, in points, from the left side of the chart to the worksheet origin.
     * @return float|null
    */
    public function getLeft(): ?float {
        return $this->left;
    }

    /**
     * Gets the legend property value. Represents the legend for the chart. Read-only.
     * @return WorkbookChartLegend|null
    */
    public function getLegend(): ?WorkbookChartLegend {
        return $this->legend;
    }

    /**
     * Gets the name property value. Represents the name of a chart object.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the series property value. Represents either a single series or collection of series in the chart. Read-only.
     * @return array<WorkbookChartSeries>|null
    */
    public function getSeries(): ?array {
        return $this->series;
    }

    /**
     * Gets the title property value. Represents the title of the specified chart, including the text, visibility, position and formating of the title. Read-only.
     * @return WorkbookChartTitle|null
    */
    public function getTitle(): ?WorkbookChartTitle {
        return $this->title;
    }

    /**
     * Gets the top property value. Represents the distance, in points, from the top edge of the object to the top of row 1 (on a worksheet) or the top of the chart area (on a chart).
     * @return float|null
    */
    public function getTop(): ?float {
        return $this->top;
    }

    /**
     * Gets the width property value. Represents the width, in points, of the chart object.
     * @return float|null
    */
    public function getWidth(): ?float {
        return $this->width;
    }

    /**
     * Gets the worksheet property value. The worksheet containing the current chart. Read-only.
     * @return WorkbookWorksheet|null
    */
    public function getWorksheet(): ?WorkbookWorksheet {
        return $this->worksheet;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('axes', $this->axes);
        $writer->writeObjectValue('dataLabels', $this->dataLabels);
        $writer->writeObjectValue('format', $this->format);
        $writer->writeFloatValue('height', $this->height);
        $writer->writeFloatValue('left', $this->left);
        $writer->writeObjectValue('legend', $this->legend);
        $writer->writeStringValue('name', $this->name);
        $writer->writeCollectionOfObjectValues('series', $this->series);
        $writer->writeObjectValue('title', $this->title);
        $writer->writeFloatValue('top', $this->top);
        $writer->writeFloatValue('width', $this->width);
        $writer->writeObjectValue('worksheet', $this->worksheet);
    }

    /**
     * Sets the axes property value. Represents chart axes. Read-only.
     *  @param WorkbookChartAxes|null $value Value to set for the axes property.
    */
    public function setAxes(?WorkbookChartAxes $value ): void {
        $this->axes = $value;
    }

    /**
     * Sets the dataLabels property value. Represents the datalabels on the chart. Read-only.
     *  @param WorkbookChartDataLabels|null $value Value to set for the dataLabels property.
    */
    public function setDataLabels(?WorkbookChartDataLabels $value ): void {
        $this->dataLabels = $value;
    }

    /**
     * Sets the format property value. Encapsulates the format properties for the chart area. Read-only.
     *  @param WorkbookChartAreaFormat|null $value Value to set for the format property.
    */
    public function setFormat(?WorkbookChartAreaFormat $value ): void {
        $this->format = $value;
    }

    /**
     * Sets the height property value. Represents the height, in points, of the chart object.
     *  @param float|null $value Value to set for the height property.
    */
    public function setHeight(?float $value ): void {
        $this->height = $value;
    }

    /**
     * Sets the left property value. The distance, in points, from the left side of the chart to the worksheet origin.
     *  @param float|null $value Value to set for the left property.
    */
    public function setLeft(?float $value ): void {
        $this->left = $value;
    }

    /**
     * Sets the legend property value. Represents the legend for the chart. Read-only.
     *  @param WorkbookChartLegend|null $value Value to set for the legend property.
    */
    public function setLegend(?WorkbookChartLegend $value ): void {
        $this->legend = $value;
    }

    /**
     * Sets the name property value. Represents the name of a chart object.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the series property value. Represents either a single series or collection of series in the chart. Read-only.
     *  @param array<WorkbookChartSeries>|null $value Value to set for the series property.
    */
    public function setSeries(?array $value ): void {
        $this->series = $value;
    }

    /**
     * Sets the title property value. Represents the title of the specified chart, including the text, visibility, position and formating of the title. Read-only.
     *  @param WorkbookChartTitle|null $value Value to set for the title property.
    */
    public function setTitle(?WorkbookChartTitle $value ): void {
        $this->title = $value;
    }

    /**
     * Sets the top property value. Represents the distance, in points, from the top edge of the object to the top of row 1 (on a worksheet) or the top of the chart area (on a chart).
     *  @param float|null $value Value to set for the top property.
    */
    public function setTop(?float $value ): void {
        $this->top = $value;
    }

    /**
     * Sets the width property value. Represents the width, in points, of the chart object.
     *  @param float|null $value Value to set for the width property.
    */
    public function setWidth(?float $value ): void {
        $this->width = $value;
    }

    /**
     * Sets the worksheet property value. The worksheet containing the current chart. Read-only.
     *  @param WorkbookWorksheet|null $value Value to set for the worksheet property.
    */
    public function setWorksheet(?WorkbookWorksheet $value ): void {
        $this->worksheet = $value;
    }

}
