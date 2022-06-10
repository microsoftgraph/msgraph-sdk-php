<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OfferShiftRequest extends ScheduleChangeRequest implements Parsable 
{
    /**
     * @var DateTime|null $recipientActionDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $recipientActionDateTime = null;
    
    /**
     * @var string|null $recipientActionMessage Custom message sent by recipient of the offer shift request.
    */
    private ?string $recipientActionMessage = null;
    
    /**
     * @var string|null $recipientUserId User id of the recipient of the offer shift request.
    */
    private ?string $recipientUserId = null;
    
    /**
     * @var string|null $senderShiftId User id of the sender of the offer shift request.
    */
    private ?string $senderShiftId = null;
    
    /**
     * Instantiates a new OfferShiftRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OfferShiftRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OfferShiftRequest {
        return new OfferShiftRequest();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'recipientActionDateTime' => function (ParseNode $n) use ($o) { $o->setRecipientActionDateTime($n->getDateTimeValue()); },
            'recipientActionMessage' => function (ParseNode $n) use ($o) { $o->setRecipientActionMessage($n->getStringValue()); },
            'recipientUserId' => function (ParseNode $n) use ($o) { $o->setRecipientUserId($n->getStringValue()); },
            'senderShiftId' => function (ParseNode $n) use ($o) { $o->setSenderShiftId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the recipientActionDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getRecipientActionDateTime(): ?DateTime {
        return $this->recipientActionDateTime;
    }

    /**
     * Gets the recipientActionMessage property value. Custom message sent by recipient of the offer shift request.
     * @return string|null
    */
    public function getRecipientActionMessage(): ?string {
        return $this->recipientActionMessage;
    }

    /**
     * Gets the recipientUserId property value. User id of the recipient of the offer shift request.
     * @return string|null
    */
    public function getRecipientUserId(): ?string {
        return $this->recipientUserId;
    }

    /**
     * Gets the senderShiftId property value. User id of the sender of the offer shift request.
     * @return string|null
    */
    public function getSenderShiftId(): ?string {
        return $this->senderShiftId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('recipientActionDateTime', $this->recipientActionDateTime);
        $writer->writeStringValue('recipientActionMessage', $this->recipientActionMessage);
        $writer->writeStringValue('recipientUserId', $this->recipientUserId);
        $writer->writeStringValue('senderShiftId', $this->senderShiftId);
    }

    /**
     * Sets the recipientActionDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the recipientActionDateTime property.
    */
    public function setRecipientActionDateTime(?DateTime $value ): void {
        $this->recipientActionDateTime = $value;
    }

    /**
     * Sets the recipientActionMessage property value. Custom message sent by recipient of the offer shift request.
     *  @param string|null $value Value to set for the recipientActionMessage property.
    */
    public function setRecipientActionMessage(?string $value ): void {
        $this->recipientActionMessage = $value;
    }

    /**
     * Sets the recipientUserId property value. User id of the recipient of the offer shift request.
     *  @param string|null $value Value to set for the recipientUserId property.
    */
    public function setRecipientUserId(?string $value ): void {
        $this->recipientUserId = $value;
    }

    /**
     * Sets the senderShiftId property value. User id of the sender of the offer shift request.
     *  @param string|null $value Value to set for the senderShiftId property.
    */
    public function setSenderShiftId(?string $value ): void {
        $this->senderShiftId = $value;
    }

}
