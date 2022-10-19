<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartPoint extends Entity implements Parsable 
{
    /**
     * @var WorkbookChartPointFormat|null $format Encapsulates the format properties chart point. Read-only.
    */
    private ?WorkbookChartPointFormat $format = null;
    
    /**
     * @var Json|null $value Returns the value of a chart point. Read-only.
    */
    private ?Json $value = null;
    
    /**
     * Instantiates a new workbookChartPoint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workbookChartPoint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartPoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartPoint {
        return new WorkbookChartPoint();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'format' => fn(ParseNode $n) => $o->setFormat($n->getObjectValue([WorkbookChartPointFormat::class, 'createFromDiscriminatorValue'])),
            'value' => fn(ParseNode $n) => $o->setValue($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the format property value. Encapsulates the format properties chart point. Read-only.
     * @return WorkbookChartPointFormat|null
    */
    public function getFormat(): ?WorkbookChartPointFormat {
        return $this->format;
    }

    /**
     * Gets the value property value. Returns the value of a chart point. Read-only.
     * @return Json|null
    */
    public function getValue(): ?Json {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('format', $this->format);
        $writer->writeObjectValue('value', $this->value);
    }

    /**
     * Sets the format property value. Encapsulates the format properties chart point. Read-only.
     *  @param WorkbookChartPointFormat|null $value Value to set for the format property.
    */
    public function setFormat(?WorkbookChartPointFormat $value ): void {
        $this->format = $value;
    }

    /**
     * Sets the value property value. Returns the value of a chart point. Read-only.
     *  @param Json|null $value Value to set for the value property.
    */
    public function setValue(?Json $value ): void {
        $this->value = $value;
    }

}
