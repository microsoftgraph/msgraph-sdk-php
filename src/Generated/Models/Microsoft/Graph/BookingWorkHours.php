<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BookingWorkHours implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DayOfWeek|null $day The day of the week represented by this instance. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday. */
    private ?DayOfWeek $day = null;
    
    /** @var array<BookingWorkTimeSlot>|null $timeSlots A list of start/end times during a day. */
    private ?array $timeSlots = null;
    
    /**
     * Instantiates a new bookingWorkHours and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingWorkHours
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): BookingWorkHours {
        return new BookingWorkHours();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the day property value. The day of the week represented by this instance. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
     * @return DayOfWeek|null
    */
    public function getDay(): ?DayOfWeek {
        return $this->day;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'day' => function (self $o, ParseNode $n) { $o->setDay($n->getEnumValue(DayOfWeek::class)); },
            'timeSlots' => function (self $o, ParseNode $n) { $o->setTimeSlots($n->getCollectionOfObjectValues(BookingWorkTimeSlot::class)); },
        ];
    }

    /**
     * Gets the timeSlots property value. A list of start/end times during a day.
     * @return array<BookingWorkTimeSlot>|null
    */
    public function getTimeSlots(): ?array {
        return $this->timeSlots;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('day', $this->day);
        $writer->writeCollectionOfObjectValues('timeSlots', $this->timeSlots);
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
     * Sets the day property value. The day of the week represented by this instance. Possible values are: sunday, monday, tuesday, wednesday, thursday, friday, saturday.
     *  @param DayOfWeek|null $value Value to set for the day property.
    */
    public function setDay(?DayOfWeek $value ): void {
        $this->day = $value;
    }

    /**
     * Sets the timeSlots property value. A list of start/end times during a day.
     *  @param array<BookingWorkTimeSlot>|null $value Value to set for the timeSlots property.
    */
    public function setTimeSlots(?array $value ): void {
        $this->timeSlots = $value;
    }

}
