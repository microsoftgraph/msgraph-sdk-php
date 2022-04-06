<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartSeriesFormat extends Entity 
{
    /** @var WorkbookChartFill|null $fill Represents the fill format of a chart series, which includes background formating information. Read-only. */
    private ?WorkbookChartFill $fill = null;
    
    /** @var WorkbookChartLineFormat|null $line Represents line formatting. Read-only. */
    private ?WorkbookChartLineFormat $line = null;
    
    /**
     * Instantiates a new workbookChartSeriesFormat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartSeriesFormat
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartSeriesFormat {
        return new WorkbookChartSeriesFormat();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'fill' => function (self $o, ParseNode $n) { $o->setFill($n->getObjectValue(WorkbookChartFill::class)); },
            'line' => function (self $o, ParseNode $n) { $o->setLine($n->getObjectValue(WorkbookChartLineFormat::class)); },
        ]);
    }

    /**
     * Gets the fill property value. Represents the fill format of a chart series, which includes background formating information. Read-only.
     * @return WorkbookChartFill|null
    */
    public function getFill(): ?WorkbookChartFill {
        return $this->fill;
    }

    /**
     * Gets the line property value. Represents line formatting. Read-only.
     * @return WorkbookChartLineFormat|null
    */
    public function getLine(): ?WorkbookChartLineFormat {
        return $this->line;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('fill', $this->fill);
        $writer->writeObjectValue('line', $this->line);
    }

    /**
     * Sets the fill property value. Represents the fill format of a chart series, which includes background formating information. Read-only.
     *  @param WorkbookChartFill|null $value Value to set for the fill property.
    */
    public function setFill(?WorkbookChartFill $value ): void {
        $this->fill = $value;
    }

    /**
     * Sets the line property value. Represents line formatting. Read-only.
     *  @param WorkbookChartLineFormat|null $value Value to set for the line property.
    */
    public function setLine(?WorkbookChartLineFormat $value ): void {
        $this->line = $value;
    }

}
