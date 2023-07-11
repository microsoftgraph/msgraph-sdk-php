<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OfferShiftRequest extends ScheduleChangeRequest implements Parsable 
{
    /**
     * Instantiates a new offerShiftRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.offerShiftRequest');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OfferShiftRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OfferShiftRequest {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.swapShiftsChangeRequest': return new SwapShiftsChangeRequest();
            }
        }
        return new OfferShiftRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'recipientActionDateTime' => fn(ParseNode $n) => $o->setRecipientActionDateTime($n->getDateTimeValue()),
            'recipientActionMessage' => fn(ParseNode $n) => $o->setRecipientActionMessage($n->getStringValue()),
            'recipientUserId' => fn(ParseNode $n) => $o->setRecipientUserId($n->getStringValue()),
            'senderShiftId' => fn(ParseNode $n) => $o->setSenderShiftId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the recipientActionDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getRecipientActionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('recipientActionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipientActionDateTime'");
    }

    /**
     * Gets the recipientActionMessage property value. Custom message sent by recipient of the offer shift request.
     * @return string|null
    */
    public function getRecipientActionMessage(): ?string {
        $val = $this->getBackingStore()->get('recipientActionMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipientActionMessage'");
    }

    /**
     * Gets the recipientUserId property value. User ID of the recipient of the offer shift request.
     * @return string|null
    */
    public function getRecipientUserId(): ?string {
        $val = $this->getBackingStore()->get('recipientUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recipientUserId'");
    }

    /**
     * Gets the senderShiftId property value. User ID of the sender of the offer shift request.
     * @return string|null
    */
    public function getSenderShiftId(): ?string {
        $val = $this->getBackingStore()->get('senderShiftId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'senderShiftId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('recipientActionMessage', $this->getRecipientActionMessage());
        $writer->writeStringValue('recipientUserId', $this->getRecipientUserId());
        $writer->writeStringValue('senderShiftId', $this->getSenderShiftId());
    }

    /**
     * Sets the recipientActionDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the recipientActionDateTime property.
    */
    public function setRecipientActionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('recipientActionDateTime', $value);
    }

    /**
     * Sets the recipientActionMessage property value. Custom message sent by recipient of the offer shift request.
     * @param string|null $value Value to set for the recipientActionMessage property.
    */
    public function setRecipientActionMessage(?string $value): void {
        $this->getBackingStore()->set('recipientActionMessage', $value);
    }

    /**
     * Sets the recipientUserId property value. User ID of the recipient of the offer shift request.
     * @param string|null $value Value to set for the recipientUserId property.
    */
    public function setRecipientUserId(?string $value): void {
        $this->getBackingStore()->set('recipientUserId', $value);
    }

    /**
     * Sets the senderShiftId property value. User ID of the sender of the offer shift request.
     * @param string|null $value Value to set for the senderShiftId property.
    */
    public function setSenderShiftId(?string $value): void {
        $this->getBackingStore()->set('senderShiftId', $value);
    }

}
