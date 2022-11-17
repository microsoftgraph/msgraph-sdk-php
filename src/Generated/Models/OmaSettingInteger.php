<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OmaSettingInteger extends OmaSetting implements Parsable 
{
    /**
     * Instantiates a new OmaSettingInteger and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.omaSettingInteger');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OmaSettingInteger
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OmaSettingInteger {
        return new OmaSettingInteger();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => fn(ParseNode $n) => $o->setValue($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the value property value. Value.
     * @return int|null
    */
    public function getValue(): ?int {
        return $this->getBackingStore()->get('value');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('value', $this->getValue());
    }

    /**
     * Sets the value property value. Value.
     *  @param int|null $value Value to set for the value property.
    */
    public function setValue(?int $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
