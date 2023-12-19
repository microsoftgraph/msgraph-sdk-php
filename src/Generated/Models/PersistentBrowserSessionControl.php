<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PersistentBrowserSessionControl extends ConditionalAccessSessionControl implements Parsable 
{
    /**
     * Instantiates a new persistentBrowserSessionControl and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.persistentBrowserSessionControl');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PersistentBrowserSessionControl
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PersistentBrowserSessionControl {
        return new PersistentBrowserSessionControl();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'mode' => fn(ParseNode $n) => $o->setMode($n->getEnumValue(PersistentBrowserSessionControl_mode::class)),
        ]);
    }

    /**
     * Gets the mode property value. Possible values are: always, never.
     * @return PersistentBrowserSessionControl_mode|null
    */
    public function getMode(): ?PersistentBrowserSessionControl_mode {
        $val = $this->getBackingStore()->get('mode');
        if (is_null($val) || $val instanceof PersistentBrowserSessionControl_mode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mode'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('mode', $this->getMode());
    }

    /**
     * Sets the mode property value. Possible values are: always, never.
     * @param PersistentBrowserSessionControl_mode|null $value Value to set for the mode property.
    */
    public function setMode(?PersistentBrowserSessionControl_mode $value): void {
        $this->getBackingStore()->set('mode', $value);
    }

}
