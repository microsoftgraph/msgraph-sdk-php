<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartAxisTitle extends Entity implements Parsable 
{
    /**
     * @var WorkbookChartAxisTitleFormat|null $format Represents the formatting of chart axis title. Read-only.
    */
    private ?WorkbookChartAxisTitleFormat $format = null;
    
    /**
     * @var string|null $text Represents the axis title.
    */
    private ?string $text = null;
    
    /**
     * @var bool|null $visible A boolean that specifies the visibility of an axis title.
    */
    private ?bool $visible = null;
    
    /**
     * Instantiates a new workbookChartAxisTitle and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.workbookChartAxisTitle');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartAxisTitle
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartAxisTitle {
        return new WorkbookChartAxisTitle();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'format' => fn(ParseNode $n) => $o->setFormat($n->getObjectValue([WorkbookChartAxisTitleFormat::class, 'createFromDiscriminatorValue'])),
            'text' => fn(ParseNode $n) => $o->setText($n->getStringValue()),
            'visible' => fn(ParseNode $n) => $o->setVisible($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the format property value. Represents the formatting of chart axis title. Read-only.
     * @return WorkbookChartAxisTitleFormat|null
    */
    public function getFormat(): ?WorkbookChartAxisTitleFormat {
        return $this->format;
    }

    /**
     * Gets the text property value. Represents the axis title.
     * @return string|null
    */
    public function getText(): ?string {
        return $this->text;
    }

    /**
     * Gets the visible property value. A boolean that specifies the visibility of an axis title.
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
        $writer->writeStringValue('text', $this->text);
        $writer->writeBooleanValue('visible', $this->visible);
    }

    /**
     * Sets the format property value. Represents the formatting of chart axis title. Read-only.
     *  @param WorkbookChartAxisTitleFormat|null $value Value to set for the format property.
    */
    public function setFormat(?WorkbookChartAxisTitleFormat $value ): void {
        $this->format = $value;
    }

    /**
     * Sets the text property value. Represents the axis title.
     *  @param string|null $value Value to set for the text property.
    */
    public function setText(?string $value ): void {
        $this->text = $value;
    }

    /**
     * Sets the visible property value. A boolean that specifies the visibility of an axis title.
     *  @param bool|null $value Value to set for the visible property.
    */
    public function setVisible(?bool $value ): void {
        $this->visible = $value;
    }

}
