<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartGridlinesFormat extends Entity implements Parsable 
{
    /**
     * Instantiates a new workbookChartGridlinesFormat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workbookChartGridlinesFormat');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartGridlinesFormat
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartGridlinesFormat {
        return new WorkbookChartGridlinesFormat();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'line' => fn(ParseNode $n) => $o->setLine($n->getObjectValue([WorkbookChartLineFormat::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the line property value. Represents chart line formatting. Read-only.
     * @return WorkbookChartLineFormat|null
    */
    public function getLine(): ?WorkbookChartLineFormat {
        return $this->getBackingStore()->get('line');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('line', $this->getLine());
    }

    /**
     * Sets the line property value. Represents chart line formatting. Read-only.
     *  @param WorkbookChartLineFormat|null $value Value to set for the line property.
    */
    public function setLine(?WorkbookChartLineFormat $value): void {
        $this->getBackingStore()->set('line', $value);
    }

}
