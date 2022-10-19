<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartGridlines extends Entity implements Parsable 
{
    /**
     * @var WorkbookChartGridlinesFormat|null $format Represents the formatting of chart gridlines. Read-only.
    */
    private ?WorkbookChartGridlinesFormat $format = null;
    
    /**
     * @var bool|null $visible Boolean value representing if the axis gridlines are visible or not.
    */
    private ?bool $visible = null;
    
    /**
     * Instantiates a new workbookChartGridlines and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workbookChartGridlines');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartGridlines
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartGridlines {
        return new WorkbookChartGridlines();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'format' => fn(ParseNode $n) => $o->setFormat($n->getObjectValue([WorkbookChartGridlinesFormat::class, 'createFromDiscriminatorValue'])),
            'visible' => fn(ParseNode $n) => $o->setVisible($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the format property value. Represents the formatting of chart gridlines. Read-only.
     * @return WorkbookChartGridlinesFormat|null
    */
    public function getFormat(): ?WorkbookChartGridlinesFormat {
        return $this->format;
    }

    /**
     * Gets the visible property value. Boolean value representing if the axis gridlines are visible or not.
     * @return bool|null
    */
    public function getVisible(): ?bool {
        return $this->visible;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('format', $this->format);
        $writer->writeBooleanValue('visible', $this->visible);
    }

    /**
     * Sets the format property value. Represents the formatting of chart gridlines. Read-only.
     *  @param WorkbookChartGridlinesFormat|null $value Value to set for the format property.
    */
    public function setFormat(?WorkbookChartGridlinesFormat $value ): void {
        $this->format = $value;
    }

    /**
     * Sets the visible property value. Boolean value representing if the axis gridlines are visible or not.
     *  @param bool|null $value Value to set for the visible property.
    */
    public function setVisible(?bool $value ): void {
        $this->visible = $value;
    }

}
