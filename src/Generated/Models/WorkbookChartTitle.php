<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartTitle extends Entity implements Parsable 
{
    /**
     * Instantiates a new WorkbookChartTitle and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartTitle
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartTitle {
        return new WorkbookChartTitle();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'format' => fn(ParseNode $n) => $o->setFormat($n->getObjectValue([WorkbookChartTitleFormat::class, 'createFromDiscriminatorValue'])),
            'overlay' => fn(ParseNode $n) => $o->setOverlay($n->getBooleanValue()),
            'text' => fn(ParseNode $n) => $o->setText($n->getStringValue()),
            'visible' => fn(ParseNode $n) => $o->setVisible($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the format property value. The formatting of a chart title, which includes fill and font formatting. Read-only.
     * @return WorkbookChartTitleFormat|null
    */
    public function getFormat(): ?WorkbookChartTitleFormat {
        $val = $this->getBackingStore()->get('format');
        if (is_null($val) || $val instanceof WorkbookChartTitleFormat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'format'");
    }

    /**
     * Gets the overlay property value. Indicates whether the chart title will overlay the chart or not.
     * @return bool|null
    */
    public function getOverlay(): ?bool {
        $val = $this->getBackingStore()->get('overlay');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'overlay'");
    }

    /**
     * Gets the text property value. The title text of the chart.
     * @return string|null
    */
    public function getText(): ?string {
        $val = $this->getBackingStore()->get('text');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'text'");
    }

    /**
     * Gets the visible property value. Indicates whether the chart title is visible.
     * @return bool|null
    */
    public function getVisible(): ?bool {
        $val = $this->getBackingStore()->get('visible');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'visible'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('format', $this->getFormat());
        $writer->writeBooleanValue('overlay', $this->getOverlay());
        $writer->writeStringValue('text', $this->getText());
        $writer->writeBooleanValue('visible', $this->getVisible());
    }

    /**
     * Sets the format property value. The formatting of a chart title, which includes fill and font formatting. Read-only.
     * @param WorkbookChartTitleFormat|null $value Value to set for the format property.
    */
    public function setFormat(?WorkbookChartTitleFormat $value): void {
        $this->getBackingStore()->set('format', $value);
    }

    /**
     * Sets the overlay property value. Indicates whether the chart title will overlay the chart or not.
     * @param bool|null $value Value to set for the overlay property.
    */
    public function setOverlay(?bool $value): void {
        $this->getBackingStore()->set('overlay', $value);
    }

    /**
     * Sets the text property value. The title text of the chart.
     * @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value): void {
        $this->getBackingStore()->set('text', $value);
    }

    /**
     * Sets the visible property value. Indicates whether the chart title is visible.
     * @param bool|null $value Value to set for the visible property.
    */
    public function setVisible(?bool $value): void {
        $this->getBackingStore()->set('visible', $value);
    }

}
