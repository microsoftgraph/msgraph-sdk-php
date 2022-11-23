<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartAxes extends Entity implements Parsable 
{
    /**
     * Instantiates a new workbookChartAxes and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartAxes
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartAxes {
        return new WorkbookChartAxes();
    }

    /**
     * Gets the categoryAxis property value. Represents the category axis in a chart. Read-only.
     * @return WorkbookChartAxis|null
    */
    public function getCategoryAxis(): ?WorkbookChartAxis {
        return $this->getBackingStore()->get('categoryAxis');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'categoryAxis' => fn(ParseNode $n) => $o->setCategoryAxis($n->getObjectValue([WorkbookChartAxis::class, 'createFromDiscriminatorValue'])),
            'seriesAxis' => fn(ParseNode $n) => $o->setSeriesAxis($n->getObjectValue([WorkbookChartAxis::class, 'createFromDiscriminatorValue'])),
            'valueAxis' => fn(ParseNode $n) => $o->setValueAxis($n->getObjectValue([WorkbookChartAxis::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the seriesAxis property value. Represents the series axis of a 3-dimensional chart. Read-only.
     * @return WorkbookChartAxis|null
    */
    public function getSeriesAxis(): ?WorkbookChartAxis {
        return $this->getBackingStore()->get('seriesAxis');
    }

    /**
     * Gets the valueAxis property value. Represents the value axis in an axis. Read-only.
     * @return WorkbookChartAxis|null
    */
    public function getValueAxis(): ?WorkbookChartAxis {
        return $this->getBackingStore()->get('valueAxis');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('categoryAxis', $this->getCategoryAxis());
        $writer->writeObjectValue('seriesAxis', $this->getSeriesAxis());
        $writer->writeObjectValue('valueAxis', $this->getValueAxis());
    }

    /**
     * Sets the categoryAxis property value. Represents the category axis in a chart. Read-only.
     *  @param WorkbookChartAxis|null $value Value to set for the categoryAxis property.
    */
    public function setCategoryAxis(?WorkbookChartAxis $value): void {
        $this->getBackingStore()->set('categoryAxis', $value);
    }

    /**
     * Sets the seriesAxis property value. Represents the series axis of a 3-dimensional chart. Read-only.
     *  @param WorkbookChartAxis|null $value Value to set for the seriesAxis property.
    */
    public function setSeriesAxis(?WorkbookChartAxis $value): void {
        $this->getBackingStore()->set('seriesAxis', $value);
    }

    /**
     * Sets the valueAxis property value. Represents the value axis in an axis. Read-only.
     *  @param WorkbookChartAxis|null $value Value to set for the valueAxis property.
    */
    public function setValueAxis(?WorkbookChartAxis $value): void {
        $this->getBackingStore()->set('valueAxis', $value);
    }

}
