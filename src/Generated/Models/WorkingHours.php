<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

class WorkingHours implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<DayOfWeek>|null $daysOfWeek The days of the week on which the user works. */
    private ?array $daysOfWeek = null;
    
    /** @var Time|null $endTime The time of the day that the user stops working. */
    private ?Time $endTime = null;
    
    /** @var Time|null $startTime The time of the day that the user starts working. */
    private ?Time $startTime = null;
    
    /** @var TimeZoneBase|null $timeZone The time zone to which the working hours apply. */
    private ?TimeZoneBase $timeZone = null;
    
    /**
     * Instantiates a new workingHours and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkingHours
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WorkingHours {
        return new WorkingHours();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the daysOfWeek property value. The days of the week on which the user works.
     * @return array<DayOfWeek>|null
    */
    public function getDaysOfWeek(): ?array {
        return $this->daysOfWeek;
    }

    /**
     * Gets the endTime property value. The time of the day that the user stops working.
     * @return Time|null
    */
    public function getEndTime(): ?Time {
        return $this->endTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'daysOfWeek' => function (self $o, ParseNode $n) { $o->setDaysOfWeek($n->getCollectionOfEnumValues(DayOfWeek::class)); },
            'endTime' => function (self $o, ParseNode $n) { $o->setEndTime($n->getTimeValue()); },
            'startTime' => function (self $o, ParseNode $n) { $o->setStartTime($n->getTimeValue()); },
            'timeZone' => function (self $o, ParseNode $n) { $o->setTimeZone($n->getObjectValue(TimeZoneBase::class)); },
        ];
    }

    /**
     * Gets the startTime property value. The time of the day that the user starts working.
     * @return Time|null
    */
    public function getStartTime(): ?Time {
        return $this->startTime;
    }

    /**
     * Gets the timeZone property value. The time zone to which the working hours apply.
     * @return TimeZoneBase|null
    */
    public function getTimeZone(): ?TimeZoneBase {
        return $this->timeZone;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfEnumValues('daysOfWeek', $this->daysOfWeek);
        $writer->writeTimeValue('endTime', $this->endTime);
        $writer->writeTimeValue('startTime', $this->startTime);
        $writer->writeObjectValue('timeZone', $this->timeZone);
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
     * Sets the daysOfWeek property value. The days of the week on which the user works.
     *  @param array<DayOfWeek>|null $value Value to set for the daysOfWeek property.
    */
    public function setDaysOfWeek(?array $value ): void {
        $this->daysOfWeek = $value;
    }

    /**
     * Sets the endTime property value. The time of the day that the user stops working.
     *  @param Time|null $value Value to set for the endTime property.
    */
    public function setEndTime(?Time $value ): void {
        $this->endTime = $value;
    }

    /**
     * Sets the startTime property value. The time of the day that the user starts working.
     *  @param Time|null $value Value to set for the startTime property.
    */
    public function setStartTime(?Time $value ): void {
        $this->startTime = $value;
    }

    /**
     * Sets the timeZone property value. The time zone to which the working hours apply.
     *  @param TimeZoneBase|null $value Value to set for the timeZone property.
    */
    public function setTimeZone(?TimeZoneBase $value ): void {
        $this->timeZone = $value;
    }

}
