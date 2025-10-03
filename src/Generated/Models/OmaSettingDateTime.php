<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * OMA Settings DateTime definition.
*/
class OmaSettingDateTime extends OmaSetting implements Parsable 
{
    /**
     * Instantiates a new OmaSettingDateTime and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.omaSettingDateTime');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OmaSettingDateTime
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OmaSettingDateTime {
        return new OmaSettingDateTime();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'value' => fn(ParseNode $n) => $o->setValue($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the value property value. Value.
     * @return DateTime|null
    */
    public function getValue(): ?DateTime {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('value', $this->getValue());
    }

    /**
     * Sets the value property value. Value.
     * @param DateTime|null $value Value to set for the value property.
    */
    public function setValue(?DateTime $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
