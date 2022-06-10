<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartSeries extends Entity implements Parsable 
{
    /**
     * @var WorkbookChartSeriesFormat|null $format Represents the formatting of a chart series, which includes fill and line formatting. Read-only.
    */
    private ?WorkbookChartSeriesFormat $format = null;
    
    /**
     * @var string|null $name Represents the name of a series in a chart.
    */
    private ?string $name = null;
    
    /**
     * @var array<WorkbookChartPoint>|null $points Represents a collection of all points in the series. Read-only.
    */
    private ?array $points = null;
    
    /**
     * Instantiates a new workbookChartSeries and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartSeries
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartSeries {
        return new WorkbookChartSeries();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'format' => function (ParseNode $n) use ($o) { $o->setFormat($n->getObjectValue(array(WorkbookChartSeriesFormat::class, 'createFromDiscriminatorValue'))); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'points' => function (ParseNode $n) use ($o) { $o->setPoints($n->getCollectionOfObjectValues(array(WorkbookChartPoint::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the format property value. Represents the formatting of a chart series, which includes fill and line formatting. Read-only.
     * @return WorkbookChartSeriesFormat|null
    */
    public function getFormat(): ?WorkbookChartSeriesFormat {
        return $this->format;
    }

    /**
     * Gets the name property value. Represents the name of a series in a chart.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the points property value. Represents a collection of all points in the series. Read-only.
     * @return array<WorkbookChartPoint>|null
    */
    public function getPoints(): ?array {
        return $this->points;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('format', $this->format);
        $writer->writeStringValue('name', $this->name);
        $writer->writeCollectionOfObjectValues('points', $this->points);
    }

    /**
     * Sets the format property value. Represents the formatting of a chart series, which includes fill and line formatting. Read-only.
     *  @param WorkbookChartSeriesFormat|null $value Value to set for the format property.
    */
    public function setFormat(?WorkbookChartSeriesFormat $value ): void {
        $this->format = $value;
    }

    /**
     * Sets the name property value. Represents the name of a series in a chart.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the points property value. Represents a collection of all points in the series. Read-only.
     *  @param array<WorkbookChartPoint>|null $value Value to set for the points property.
    */
    public function setPoints(?array $value ): void {
        $this->points = $value;
    }

}
