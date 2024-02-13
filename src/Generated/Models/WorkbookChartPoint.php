<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartPoint extends Entity implements Parsable 
{
    /**
     * Instantiates a new WorkbookChartPoint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('format');
        if (is_null($val) || $val instanceof WorkbookChartPointFormat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'format'");
    }

    /**
     * Gets the value property value. Returns the value of a chart point. Read-only.
     * @return Json|null
    */
    public function getValue(): ?Json {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('format', $this->getFormat());
        $writer->writeObjectValue('value', $this->getValue());
    }

    /**
     * Sets the format property value. Encapsulates the format properties chart point. Read-only.
     * @param WorkbookChartPointFormat|null $value Value to set for the format property.
    */
    public function setFormat(?WorkbookChartPointFormat $value): void {
        $this->getBackingStore()->set('format', $value);
    }

    /**
     * Sets the value property value. Returns the value of a chart point. Read-only.
     * @param Json|null $value Value to set for the value property.
    */
    public function setValue(?Json $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
