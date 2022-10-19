<?php

namespace Microsoft\Graph\Generated\Groups\Item\Calendar\CalendarView\Item\Instances\Item\SnoozeReminder;

use Microsoft\Graph\Generated\Models\DateTimeTimeZone;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SnoozeReminderPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTimeTimeZone|null $newReminderTime The NewReminderTime property
    */
    private ?DateTimeTimeZone $newReminderTime = null;
    
    /**
     * Instantiates a new snoozeReminderPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SnoozeReminderPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SnoozeReminderPostRequestBody {
        return new SnoozeReminderPostRequestBody();
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
            'newReminderTime' => fn(ParseNode $n) => $o->setNewReminderTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the newReminderTime property value. The NewReminderTime property
     * @return DateTimeTimeZone|null
    */
    public function getNewReminderTime(): ?DateTimeTimeZone {
        return $this->newReminderTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('newReminderTime', $this->newReminderTime);
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
     * Sets the newReminderTime property value. The NewReminderTime property
     *  @param DateTimeTimeZone|null $value Value to set for the NewReminderTime property.
    */
    public function setNewReminderTime(?DateTimeTimeZone $value ): void {
        $this->newReminderTime = $value;
    }

}
