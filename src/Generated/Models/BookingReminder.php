<?php

namespace Microsoft\Graph\Models;

use DateInterval;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BookingReminder implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $message The message in the reminder.
    */
    private ?string $message = null;
    
    /**
     * @var DateInterval|null $offset The amount of time before the start of an appointment that the reminder should be sent. It's denoted in ISO 8601 format.
    */
    private ?DateInterval $offset = null;
    
    /**
     * @var BookingReminderRecipients|null $recipients The persons who should receive the reminder. Possible values are: allAttendees, staff, customer and unknownFutureValue.
    */
    private ?BookingReminderRecipients $recipients = null;
    
    /**
     * Instantiates a new bookingReminder and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingReminder
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BookingReminder {
        return new BookingReminder();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'message' => function (ParseNode $n) use ($o) { $o->setMessage($n->getStringValue()); },
            'offset' => function (ParseNode $n) use ($o) { $o->setOffset($n->getDateIntervalValue()); },
            'recipients' => function (ParseNode $n) use ($o) { $o->setRecipients($n->getEnumValue(BookingReminderRecipients::class)); },
        ];
    }

    /**
     * Gets the message property value. The message in the reminder.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Gets the offset property value. The amount of time before the start of an appointment that the reminder should be sent. It's denoted in ISO 8601 format.
     * @return DateInterval|null
    */
    public function getOffset(): ?DateInterval {
        return $this->offset;
    }

    /**
     * Gets the recipients property value. The persons who should receive the reminder. Possible values are: allAttendees, staff, customer and unknownFutureValue.
     * @return BookingReminderRecipients|null
    */
    public function getRecipients(): ?BookingReminderRecipients {
        return $this->recipients;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('message', $this->message);
        $writer->writeDateIntervalValue('offset', $this->offset);
        $writer->writeEnumValue('recipients', $this->recipients);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the message property value. The message in the reminder.
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value ): void {
        $this->message = $value;
    }

    /**
     * Sets the offset property value. The amount of time before the start of an appointment that the reminder should be sent. It's denoted in ISO 8601 format.
     *  @param DateInterval|null $value Value to set for the offset property.
    */
    public function setOffset(?DateInterval $value ): void {
        $this->offset = $value;
    }

    /**
     * Sets the recipients property value. The persons who should receive the reminder. Possible values are: allAttendees, staff, customer and unknownFutureValue.
     *  @param BookingReminderRecipients|null $value Value to set for the recipients property.
    */
    public function setRecipients(?BookingReminderRecipients $value ): void {
        $this->recipients = $value;
    }

}
