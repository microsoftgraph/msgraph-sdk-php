<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ResetPasscodeActionResult extends DeviceActionResult implements Parsable 
{
    /**
     * Instantiates a new ResetPasscodeActionResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ResetPasscodeActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ResetPasscodeActionResult {
        return new ResetPasscodeActionResult();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'passcode' => fn(ParseNode $n) => $o->setPasscode($n->getStringValue()),
        ]);
    }

    /**
     * Gets the passcode property value. Newly generated passcode for the device
     * @return string|null
    */
    public function getPasscode(): ?string {
        $val = $this->getBackingStore()->get('passcode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passcode'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('passcode', $this->getPasscode());
    }

    /**
     * Sets the passcode property value. Newly generated passcode for the device
     * @param string|null $value Value to set for the passcode property.
    */
    public function setPasscode(?string $value): void {
        $this->getBackingStore()->set('passcode', $value);
    }

}
