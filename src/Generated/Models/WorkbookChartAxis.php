<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartAxis extends Entity implements Parsable 
{
    /**
     * @var WorkbookChartAxisFormat|null $format Represents the formatting of a chart object, which includes line and font formatting. Read-only.
    */
    private ?WorkbookChartAxisFormat $format = null;
    
    /**
     * @var WorkbookChartGridlines|null $majorGridlines Returns a gridlines object that represents the major gridlines for the specified axis. Read-only.
    */
    private ?WorkbookChartGridlines $majorGridlines = null;
    
    /**
     * @var Json|null $majorUnit Represents the interval between two major tick marks. Can be set to a numeric value or an empty string.  The returned value is always a number.
    */
    private ?Json $majorUnit = null;
    
    /**
     * @var Json|null $maximum Represents the maximum value on the value axis.  Can be set to a numeric value or an empty string (for automatic axis values).  The returned value is always a number.
    */
    private ?Json $maximum = null;
    
    /**
     * @var Json|null $minimum Represents the minimum value on the value axis. Can be set to a numeric value or an empty string (for automatic axis values).  The returned value is always a number.
    */
    private ?Json $minimum = null;
    
    /**
     * @var WorkbookChartGridlines|null $minorGridlines Returns a Gridlines object that represents the minor gridlines for the specified axis. Read-only.
    */
    private ?WorkbookChartGridlines $minorGridlines = null;
    
    /**
     * @var Json|null $minorUnit Represents the interval between two minor tick marks. 'Can be set to a numeric value or an empty string (for automatic axis values). The returned value is always a number.
    */
    private ?Json $minorUnit = null;
    
    /**
     * @var WorkbookChartAxisTitle|null $title Represents the axis title. Read-only.
    */
    private ?WorkbookChartAxisTitle $title = null;
    
    /**
     * Instantiates a new workbookChartAxis and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartAxis
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartAxis {
        return new WorkbookChartAxis();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'format' => function (ParseNode $n) use ($o) { $o->setFormat($n->getObjectValue(array(WorkbookChartAxisFormat::class, 'createFromDiscriminatorValue'))); },
            'majorGridlines' => function (ParseNode $n) use ($o) { $o->setMajorGridlines($n->getObjectValue(array(WorkbookChartGridlines::class, 'createFromDiscriminatorValue'))); },
            'majorUnit' => function (ParseNode $n) use ($o) { $o->setMajorUnit($n->getObjectValue(array(Json::class, 'createFromDiscriminatorValue'))); },
            'maximum' => function (ParseNode $n) use ($o) { $o->setMaximum($n->getObjectValue(array(Json::class, 'createFromDiscriminatorValue'))); },
            'minimum' => function (ParseNode $n) use ($o) { $o->setMinimum($n->getObjectValue(array(Json::class, 'createFromDiscriminatorValue'))); },
            'minorGridlines' => function (ParseNode $n) use ($o) { $o->setMinorGridlines($n->getObjectValue(array(WorkbookChartGridlines::class, 'createFromDiscriminatorValue'))); },
            'minorUnit' => function (ParseNode $n) use ($o) { $o->setMinorUnit($n->getObjectValue(array(Json::class, 'createFromDiscriminatorValue'))); },
            'title' => function (ParseNode $n) use ($o) { $o->setTitle($n->getObjectValue(array(WorkbookChartAxisTitle::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the format property value. Represents the formatting of a chart object, which includes line and font formatting. Read-only.
     * @return WorkbookChartAxisFormat|null
    */
    public function getFormat(): ?WorkbookChartAxisFormat {
        return $this->format;
    }

    /**
     * Gets the majorGridlines property value. Returns a gridlines object that represents the major gridlines for the specified axis. Read-only.
     * @return WorkbookChartGridlines|null
    */
    public function getMajorGridlines(): ?WorkbookChartGridlines {
        return $this->majorGridlines;
    }

    /**
     * Gets the majorUnit property value. Represents the interval between two major tick marks. Can be set to a numeric value or an empty string.  The returned value is always a number.
     * @return Json|null
    */
    public function getMajorUnit(): ?Json {
        return $this->majorUnit;
    }

    /**
     * Gets the maximum property value. Represents the maximum value on the value axis.  Can be set to a numeric value or an empty string (for automatic axis values).  The returned value is always a number.
     * @return Json|null
    */
    public function getMaximum(): ?Json {
        return $this->maximum;
    }

    /**
     * Gets the minimum property value. Represents the minimum value on the value axis. Can be set to a numeric value or an empty string (for automatic axis values).  The returned value is always a number.
     * @return Json|null
    */
    public function getMinimum(): ?Json {
        return $this->minimum;
    }

    /**
     * Gets the minorGridlines property value. Returns a Gridlines object that represents the minor gridlines for the specified axis. Read-only.
     * @return WorkbookChartGridlines|null
    */
    public function getMinorGridlines(): ?WorkbookChartGridlines {
        return $this->minorGridlines;
    }

    /**
     * Gets the minorUnit property value. Represents the interval between two minor tick marks. 'Can be set to a numeric value or an empty string (for automatic axis values). The returned value is always a number.
     * @return Json|null
    */
    public function getMinorUnit(): ?Json {
        return $this->minorUnit;
    }

    /**
     * Gets the title property value. Represents the axis title. Read-only.
     * @return WorkbookChartAxisTitle|null
    */
    public function getTitle(): ?WorkbookChartAxisTitle {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('format', $this->format);
        $writer->writeObjectValue('majorGridlines', $this->majorGridlines);
        $writer->writeObjectValue('majorUnit', $this->majorUnit);
        $writer->writeObjectValue('maximum', $this->maximum);
        $writer->writeObjectValue('minimum', $this->minimum);
        $writer->writeObjectValue('minorGridlines', $this->minorGridlines);
        $writer->writeObjectValue('minorUnit', $this->minorUnit);
        $writer->writeObjectValue('title', $this->title);
    }

    /**
     * Sets the format property value. Represents the formatting of a chart object, which includes line and font formatting. Read-only.
     *  @param WorkbookChartAxisFormat|null $value Value to set for the format property.
    */
    public function setFormat(?WorkbookChartAxisFormat $value ): void {
        $this->format = $value;
    }

    /**
     * Sets the majorGridlines property value. Returns a gridlines object that represents the major gridlines for the specified axis. Read-only.
     *  @param WorkbookChartGridlines|null $value Value to set for the majorGridlines property.
    */
    public function setMajorGridlines(?WorkbookChartGridlines $value ): void {
        $this->majorGridlines = $value;
    }

    /**
     * Sets the majorUnit property value. Represents the interval between two major tick marks. Can be set to a numeric value or an empty string.  The returned value is always a number.
     *  @param Json|null $value Value to set for the majorUnit property.
    */
    public function setMajorUnit(?Json $value ): void {
        $this->majorUnit = $value;
    }

    /**
     * Sets the maximum property value. Represents the maximum value on the value axis.  Can be set to a numeric value or an empty string (for automatic axis values).  The returned value is always a number.
     *  @param Json|null $value Value to set for the maximum property.
    */
    public function setMaximum(?Json $value ): void {
        $this->maximum = $value;
    }

    /**
     * Sets the minimum property value. Represents the minimum value on the value axis. Can be set to a numeric value or an empty string (for automatic axis values).  The returned value is always a number.
     *  @param Json|null $value Value to set for the minimum property.
    */
    public function setMinimum(?Json $value ): void {
        $this->minimum = $value;
    }

    /**
     * Sets the minorGridlines property value. Returns a Gridlines object that represents the minor gridlines for the specified axis. Read-only.
     *  @param WorkbookChartGridlines|null $value Value to set for the minorGridlines property.
    */
    public function setMinorGridlines(?WorkbookChartGridlines $value ): void {
        $this->minorGridlines = $value;
    }

    /**
     * Sets the minorUnit property value. Represents the interval between two minor tick marks. 'Can be set to a numeric value or an empty string (for automatic axis values). The returned value is always a number.
     *  @param Json|null $value Value to set for the minorUnit property.
    */
    public function setMinorUnit(?Json $value ): void {
        $this->minorUnit = $value;
    }

    /**
     * Sets the title property value. Represents the axis title. Read-only.
     *  @param WorkbookChartAxisTitle|null $value Value to set for the title property.
    */
    public function setTitle(?WorkbookChartAxisTitle $value ): void {
        $this->title = $value;
    }

}
