<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartTitle extends Entity implements Parsable 
{
    /**
     * @var WorkbookChartTitleFormat|null $format Represents the formatting of a chart title, which includes fill and font formatting. Read-only.
    */
    private ?WorkbookChartTitleFormat $format = null;
    
    /**
     * @var bool|null $overlay Boolean value representing if the chart title will overlay the chart or not.
    */
    private ?bool $overlay = null;
    
    /**
     * @var string|null $text Represents the title text of a chart.
    */
    private ?string $text = null;
    
    /**
     * @var bool|null $visible A boolean value the represents the visibility of a chart title object.
    */
    private ?bool $visible = null;
    
    /**
     * Instantiates a new workbookChartTitle and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workbookChartTitle');
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
     * @return array<string, callable>
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
     * Gets the format property value. Represents the formatting of a chart title, which includes fill and font formatting. Read-only.
     * @return WorkbookChartTitleFormat|null
    */
    public function getFormat(): ?WorkbookChartTitleFormat {
        return $this->format;
    }

    /**
     * Gets the overlay property value. Boolean value representing if the chart title will overlay the chart or not.
     * @return bool|null
    */
    public function getOverlay(): ?bool {
        return $this->overlay;
    }

    /**
     * Gets the text property value. Represents the title text of a chart.
     * @return string|null
    */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * Gets the visible property value. A boolean value the represents the visibility of a chart title object.
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
        $writer->writeBooleanValue('overlay', $this->overlay);
        $writer->writeStringValue('text', $this->text);
        $writer->writeBooleanValue('visible', $this->visible);
    }

    /**
     * Sets the format property value. Represents the formatting of a chart title, which includes fill and font formatting. Read-only.
     *  @param WorkbookChartTitleFormat|null $value Value to set for the format property.
    */
    public function setFormat(?WorkbookChartTitleFormat $value ): void {
        $this->format = $value;
    }

    /**
     * Sets the overlay property value. Boolean value representing if the chart title will overlay the chart or not.
     *  @param bool|null $value Value to set for the overlay property.
    */
    public function setOverlay(?bool $value ): void {
        $this->overlay = $value;
    }

    /**
     * Sets the text property value. Represents the title text of a chart.
     *  @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value ): void {
        $this->text = $value;
    }

    /**
     * Sets the visible property value. A boolean value the represents the visibility of a chart title object.
     *  @param bool|null $value Value to set for the visible property.
    */
    public function setVisible(?bool $value ): void {
        $this->visible = $value;
    }

}
