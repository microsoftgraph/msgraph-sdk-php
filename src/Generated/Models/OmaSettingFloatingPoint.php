<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OmaSettingFloatingPoint extends OmaSetting implements Parsable 
{
    /**
     * Instantiates a new OmaSettingFloatingPoint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.omaSettingFloatingPoint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OmaSettingFloatingPoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OmaSettingFloatingPoint {
        return new OmaSettingFloatingPoint();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => fn(ParseNode $n) => $o->setValue($n->getFloatValue()),
        ]);
    }

    /**
     * Gets the value property value. Value.
     * @return float|null
    */
    public function getValue(): ?float {
        return $this->getBackingStore()->get('value');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeFloatValue('value', $this->getValue());
    }

    /**
     * Sets the value property value. Value.
     * @param float|null $value Value to set for the value property.
    */
    public function setValue(?float $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
