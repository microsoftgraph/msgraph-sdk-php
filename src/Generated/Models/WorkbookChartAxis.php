<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartAxis extends Entity implements Parsable 
{
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'format' => fn(ParseNode $n) => $o->setFormat($n->getObjectValue([WorkbookChartAxisFormat::class, 'createFromDiscriminatorValue'])),
            'majorGridlines' => fn(ParseNode $n) => $o->setMajorGridlines($n->getObjectValue([WorkbookChartGridlines::class, 'createFromDiscriminatorValue'])),
            'majorUnit' => fn(ParseNode $n) => $o->setMajorUnit($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'maximum' => fn(ParseNode $n) => $o->setMaximum($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'minimum' => fn(ParseNode $n) => $o->setMinimum($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            'minorGridlines' => fn(ParseNode $n) => $o->setMinorGridlines($n->getObjectValue([WorkbookChartGridlines::class, 'createFromDiscriminatorValue'])),
            'minorUnit' => fn(ParseNode $n) => $o->setMinorUnit($n->getObjectValue([Json::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getObjectValue([WorkbookChartAxisTitle::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the format property value. Represents the formatting of a chart object, which includes line and font formatting. Read-only.
     * @return WorkbookChartAxisFormat|null
    */
    public function getFormat(): ?WorkbookChartAxisFormat {
        $val = $this->getBackingStore()->get('format');
        if (is_null($val) || $val instanceof WorkbookChartAxisFormat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'format'");
    }

    /**
     * Gets the majorGridlines property value. Returns a gridlines object that represents the major gridlines for the specified axis. Read-only.
     * @return WorkbookChartGridlines|null
    */
    public function getMajorGridlines(): ?WorkbookChartGridlines {
        $val = $this->getBackingStore()->get('majorGridlines');
        if (is_null($val) || $val instanceof WorkbookChartGridlines) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'majorGridlines'");
    }

    /**
     * Gets the majorUnit property value. Represents the interval between two major tick marks. Can be set to a numeric value or an empty string.  The returned value is always a number.
     * @return Json|null
    */
    public function getMajorUnit(): ?Json {
        $val = $this->getBackingStore()->get('majorUnit');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'majorUnit'");
    }

    /**
     * Gets the maximum property value. Represents the maximum value on the value axis.  Can be set to a numeric value or an empty string (for automatic axis values).  The returned value is always a number.
     * @return Json|null
    */
    public function getMaximum(): ?Json {
        $val = $this->getBackingStore()->get('maximum');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximum'");
    }

    /**
     * Gets the minimum property value. Represents the minimum value on the value axis. Can be set to a numeric value or an empty string (for automatic axis values).  The returned value is always a number.
     * @return Json|null
    */
    public function getMinimum(): ?Json {
        $val = $this->getBackingStore()->get('minimum');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimum'");
    }

    /**
     * Gets the minorGridlines property value. Returns a Gridlines object that represents the minor gridlines for the specified axis. Read-only.
     * @return WorkbookChartGridlines|null
    */
    public function getMinorGridlines(): ?WorkbookChartGridlines {
        $val = $this->getBackingStore()->get('minorGridlines');
        if (is_null($val) || $val instanceof WorkbookChartGridlines) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minorGridlines'");
    }

    /**
     * Gets the minorUnit property value. Represents the interval between two minor tick marks. 'Can be set to a numeric value or an empty string (for automatic axis values). The returned value is always a number.
     * @return Json|null
    */
    public function getMinorUnit(): ?Json {
        $val = $this->getBackingStore()->get('minorUnit');
        if (is_null($val) || $val instanceof Json) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minorUnit'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the title property value. Represents the axis title. Read-only.
     * @return WorkbookChartAxisTitle|null
    */
    public function getTitle(): ?WorkbookChartAxisTitle {
        $val = $this->getBackingStore()->get('title');
        if (is_null($val) || $val instanceof WorkbookChartAxisTitle) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'title'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('format', $this->getFormat());
        $writer->writeObjectValue('majorGridlines', $this->getMajorGridlines());
        $writer->writeObjectValue('majorUnit', $this->getMajorUnit());
        $writer->writeObjectValue('maximum', $this->getMaximum());
        $writer->writeObjectValue('minimum', $this->getMinimum());
        $writer->writeObjectValue('minorGridlines', $this->getMinorGridlines());
        $writer->writeObjectValue('minorUnit', $this->getMinorUnit());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('title', $this->getTitle());
    }

    /**
     * Sets the format property value. Represents the formatting of a chart object, which includes line and font formatting. Read-only.
     * @param WorkbookChartAxisFormat|null $value Value to set for the format property.
    */
    public function setFormat(?WorkbookChartAxisFormat $value): void {
        $this->getBackingStore()->set('format', $value);
    }

    /**
     * Sets the majorGridlines property value. Returns a gridlines object that represents the major gridlines for the specified axis. Read-only.
     * @param WorkbookChartGridlines|null $value Value to set for the majorGridlines property.
    */
    public function setMajorGridlines(?WorkbookChartGridlines $value): void {
        $this->getBackingStore()->set('majorGridlines', $value);
    }

    /**
     * Sets the majorUnit property value. Represents the interval between two major tick marks. Can be set to a numeric value or an empty string.  The returned value is always a number.
     * @param Json|null $value Value to set for the majorUnit property.
    */
    public function setMajorUnit(?Json $value): void {
        $this->getBackingStore()->set('majorUnit', $value);
    }

    /**
     * Sets the maximum property value. Represents the maximum value on the value axis.  Can be set to a numeric value or an empty string (for automatic axis values).  The returned value is always a number.
     * @param Json|null $value Value to set for the maximum property.
    */
    public function setMaximum(?Json $value): void {
        $this->getBackingStore()->set('maximum', $value);
    }

    /**
     * Sets the minimum property value. Represents the minimum value on the value axis. Can be set to a numeric value or an empty string (for automatic axis values).  The returned value is always a number.
     * @param Json|null $value Value to set for the minimum property.
    */
    public function setMinimum(?Json $value): void {
        $this->getBackingStore()->set('minimum', $value);
    }

    /**
     * Sets the minorGridlines property value. Returns a Gridlines object that represents the minor gridlines for the specified axis. Read-only.
     * @param WorkbookChartGridlines|null $value Value to set for the minorGridlines property.
    */
    public function setMinorGridlines(?WorkbookChartGridlines $value): void {
        $this->getBackingStore()->set('minorGridlines', $value);
    }

    /**
     * Sets the minorUnit property value. Represents the interval between two minor tick marks. 'Can be set to a numeric value or an empty string (for automatic axis values). The returned value is always a number.
     * @param Json|null $value Value to set for the minorUnit property.
    */
    public function setMinorUnit(?Json $value): void {
        $this->getBackingStore()->set('minorUnit', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the title property value. Represents the axis title. Read-only.
     * @param WorkbookChartAxisTitle|null $value Value to set for the title property.
    */
    public function setTitle(?WorkbookChartAxisTitle $value): void {
        $this->getBackingStore()->set('title', $value);
    }

}
