<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OmaSettingBoolean extends OmaSetting implements Parsable 
{
    /**
     * Instantiates a new OmaSettingBoolean and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.omaSettingBoolean');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OmaSettingBoolean
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OmaSettingBoolean {
        return new OmaSettingBoolean();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => fn(ParseNode $n) => $o->setValue($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the value property value. Value.
     * @return bool|null
    */
    public function getValue(): ?bool {
        return $this->getBackingStore()->get('value');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('value', $this->getValue());
    }

    /**
     * Sets the value property value. Value.
     *  @param bool|null $value Value to set for the value property.
    */
    public function setValue(?bool $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
