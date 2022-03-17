<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ShiftAvailability implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var PatternedRecurrence|null $recurrence Specifies the pattern for recurrence */
    private ?PatternedRecurrence $recurrence = null;
    
    /** @var array<TimeRange>|null $timeSlots The time slot(s) preferred by the user. */
    private ?array $timeSlots = null;
    
    /** @var string|null $timeZone Specifies the time zone for the indicated time. */
    private ?string $timeZone = null;
    
    /**
     * Instantiates a new shiftAvailability and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ShiftAvailability
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ShiftAvailability {
        return new ShiftAvailability();
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
            'recurrence' => function (self $o, ParseNode $n) { $o->setRecurrence($n->getObjectValue(PatternedRecurrence::class)); },
            'timeSlots' => function (self $o, ParseNode $n) { $o->setTimeSlots($n->getCollectionOfObjectValues(TimeRange::class)); },
            'timeZone' => function (self $o, ParseNode $n) { $o->setTimeZone($n->getStringValue()); },
        ];
    }

    /**
     * Gets the recurrence property value. Specifies the pattern for recurrence
     * @return PatternedRecurrence|null
    */
    public function getRecurrence(): ?PatternedRecurrence {
        return $this->recurrence;
    }

    /**
     * Gets the timeSlots property value. The time slot(s) preferred by the user.
     * @return array<TimeRange>|null
    */
    public function getTimeSlots(): ?array {
        return $this->timeSlots;
    }

    /**
     * Gets the timeZone property value. Specifies the time zone for the indicated time.
     * @return string|null
    */
    public function getTimeZone(): ?string {
        return $this->timeZone;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('recurrence', $this->recurrence);
        $writer->writeCollectionOfObjectValues('timeSlots', $this->timeSlots);
        $writer->writeStringValue('timeZone', $this->timeZone);
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
     * Sets the recurrence property value. Specifies the pattern for recurrence
     *  @param PatternedRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?PatternedRecurrence $value ): void {
        $this->recurrence = $value;
    }

    /**
     * Sets the timeSlots property value. The time slot(s) preferred by the user.
     *  @param array<TimeRange>|null $value Value to set for the timeSlots property.
    */
    public function setTimeSlots(?array $value ): void {
        $this->timeSlots = $value;
    }

    /**
     * Sets the timeZone property value. Specifies the time zone for the indicated time.
     *  @param string|null $value Value to set for the timeZone property.
    */
    public function setTimeZone(?string $value ): void {
        $this->timeZone = $value;
    }

}
