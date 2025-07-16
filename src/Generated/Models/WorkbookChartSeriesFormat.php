<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartSeriesFormat extends Entity implements Parsable 
{
    /**
     * Instantiates a new WorkbookChartSeriesFormat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartSeriesFormat
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartSeriesFormat {
        return new WorkbookChartSeriesFormat();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fill' => fn(ParseNode $n) => $o->setFill($n->getObjectValue([WorkbookChartFill::class, 'createFromDiscriminatorValue'])),
            'line' => fn(ParseNode $n) => $o->setLine($n->getObjectValue([WorkbookChartLineFormat::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the fill property value. Represents the fill format of a chart series, which includes background formatting information. Read-only.
     * @return WorkbookChartFill|null
    */
    public function getFill(): ?WorkbookChartFill {
        $val = $this->getBackingStore()->get('fill');
        if (is_null($val) || $val instanceof WorkbookChartFill) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fill'");
    }

    /**
     * Gets the line property value. Represents line formatting. Read-only.
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
        $writer->writeObjectValue('fill', $this->getFill());
        $writer->writeObjectValue('line', $this->getLine());
    }

    /**
     * Sets the fill property value. Represents the fill format of a chart series, which includes background formatting information. Read-only.
     * @param WorkbookChartFill|null $value Value to set for the fill property.
    */
    public function setFill(?WorkbookChartFill $value): void {
        $this->getBackingStore()->set('fill', $value);
    }

    /**
     * Sets the line property value. Represents line formatting. Read-only.
     * @param WorkbookChartLineFormat|null $value Value to set for the line property.
    */
    public function setLine(?WorkbookChartLineFormat $value): void {
        $this->getBackingStore()->set('line', $value);
    }

}
