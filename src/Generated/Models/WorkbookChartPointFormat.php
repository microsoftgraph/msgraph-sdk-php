<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartPointFormat extends Entity implements Parsable 
{
    /**
     * Instantiates a new WorkbookChartPointFormat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartPointFormat
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartPointFormat {
        return new WorkbookChartPointFormat();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'fill' => fn(ParseNode $n) => $o->setFill($n->getObjectValue([WorkbookChartFill::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the fill property value. Represents the fill format of a chart, which includes background formatting information. Read-only.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('fill', $this->getFill());
    }

    /**
     * Sets the fill property value. Represents the fill format of a chart, which includes background formatting information. Read-only.
     * @param WorkbookChartFill|null $value Value to set for the fill property.
    */
    public function setFill(?WorkbookChartFill $value): void {
        $this->getBackingStore()->set('fill', $value);
    }

}
