<?php

namespace Microsoft\Graph\Generated\Me\Calendar\Events\Item\SnoozeReminder;

use Microsoft\Graph\Generated\Models\Microsoft\Graph\DateTimeTimeZone;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SnoozeReminderRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DateTimeTimeZone|null $NewReminderTime  */
    private ?DateTimeTimeZone $newReminderTime = null;
    
    /**
     * Instantiates a new snoozeReminderRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SnoozeReminderRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SnoozeReminderRequestBody {
        return new SnoozeReminderRequestBody();
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
        return  [
            'newReminderTime' => function (self $o, ParseNode $n) { $o->setNewReminderTime($n->getObjectValue(DateTimeTimeZone::class)); },
        ];
    }

    /**
     * Gets the newReminderTime property value. 
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
     * Sets the newReminderTime property value. 
     *  @param DateTimeTimeZone|null $value Value to set for the NewReminderTime property.
    */
    public function setNewReminderTime(?DateTimeTimeZone $value ): void {
        $this->newReminderTime = $value;
    }

}
