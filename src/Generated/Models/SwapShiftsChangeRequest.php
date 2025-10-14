<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SwapShiftsChangeRequest extends OfferShiftRequest implements Parsable 
{
    /**
     * Instantiates a new SwapShiftsChangeRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.swapShiftsChangeRequest');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SwapShiftsChangeRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SwapShiftsChangeRequest {
        return new SwapShiftsChangeRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'recipientShiftId' => fn(ParseNode $n) => $o->setRecipientShiftId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the recipientShiftId property value. The recipient's Shift ID
     * @return string|null
    */
    public function getRecipientShiftId(): ?string {
        $val = $this->getBackingStore()->get('recipientShiftId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipientShiftId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('recipientShiftId', $this->getRecipientShiftId());
    }

    /**
     * Sets the recipientShiftId property value. The recipient's Shift ID
     * @param string|null $value Value to set for the recipientShiftId property.
    */
    public function setRecipientShiftId(?string $value): void {
        $this->getBackingStore()->set('recipientShiftId', $value);
    }

}
