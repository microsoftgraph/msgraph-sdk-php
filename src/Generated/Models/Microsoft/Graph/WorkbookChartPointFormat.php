<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartPointFormat extends Entity 
{
    /** @var WorkbookChartFill|null $fill Represents the fill format of a chart, which includes background formating information. Read-only. */
    private ?WorkbookChartFill $fill = null;
    
    /**
     * Instantiates a new workbookChartPointFormat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartPointFormat
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartPointFormat {
        return new WorkbookChartPointFormat();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'fill' => function (self $o, ParseNode $n) { $o->setFill($n->getObjectValue(WorkbookChartFill::class)); },
        ]);
    }

    /**
     * Gets the fill property value. Represents the fill format of a chart, which includes background formating information. Read-only.
     * @return WorkbookChartFill|null
    */
    public function getFill(): ?WorkbookChartFill {
        return $this->fill;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('fill', $this->fill);
    }

    /**
     * Sets the fill property value. Represents the fill format of a chart, which includes background formating information. Read-only.
     *  @param WorkbookChartFill|null $value Value to set for the fill property.
    */
    public function setFill(?WorkbookChartFill $value ): void {
        $this->fill = $value;
    }

}
