<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartLineFormat extends Entity implements Parsable 
{
    /**
     * @var string|null $color HTML color code representing the color of lines in the chart.
    */
    private ?string $color = null;
    
    /**
     * Instantiates a new workbookChartLineFormat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartLineFormat
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartLineFormat {
        return new WorkbookChartLineFormat();
    }

    /**
     * Gets the color property value. HTML color code representing the color of lines in the chart.
     * @return string|null
    */
    public function getColor(): ?string {
        return $this->color;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'color' => function (ParseNode $n) use ($o) { $o->setColor($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('color', $this->color);
    }

    /**
     * Sets the color property value. HTML color code representing the color of lines in the chart.
     *  @param string|null $value Value to set for the color property.
    */
    public function setColor(?string $value ): void {
        $this->color = $value;
    }

}
