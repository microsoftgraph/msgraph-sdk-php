<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookRangeFill extends Entity implements Parsable 
{
    /**
     * Instantiates a new WorkbookRangeFill and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookRangeFill
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookRangeFill {
        return new WorkbookRangeFill();
    }

    /**
     * Gets the color property value. HTML color code representing the color of the border line, of the form #RRGGBB (for example 'FFA500') or as a named HTML color (for example 'orange')
     * @return string|null
    */
    public function getColor(): ?string {
        $val = $this->getBackingStore()->get('color');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'color'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'color' => fn(ParseNode $n) => $o->setColor($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('color', $this->getColor());
    }

    /**
     * Sets the color property value. HTML color code representing the color of the border line, of the form #RRGGBB (for example 'FFA500') or as a named HTML color (for example 'orange')
     * @param string|null $value Value to set for the color property.
    */
    public function setColor(?string $value): void {
        $this->getBackingStore()->set('color', $value);
    }

}
