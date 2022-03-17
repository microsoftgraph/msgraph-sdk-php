<?php

namespace Microsoft\Graph\Generated\Users\Item\Calendar\GetSchedule;

use Microsoft\Graph\Generated\Models\Microsoft\Graph\DateTimeTimeZone;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetScheduleRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $AvailabilityViewInterval  */
    private ?int $availabilityViewInterval = null;
    
    /** @var DateTimeTimeZone|null $EndTime  */
    private ?DateTimeTimeZone $endTime = null;
    
    /** @var array<string>|null $Schedules  */
    private ?array $schedules = null;
    
    /** @var DateTimeTimeZone|null $StartTime  */
    private ?DateTimeTimeZone $startTime = null;
    
    /**
     * Instantiates a new getScheduleRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetScheduleRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GetScheduleRequestBody {
        return new GetScheduleRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the availabilityViewInterval property value. 
     * @return int|null
    */
    public function getAvailabilityViewInterval(): ?int {
        return $this->availabilityViewInterval;
    }

    /**
     * Gets the endTime property value. 
     * @return DateTimeTimeZone|null
    */
    public function getEndTime(): ?DateTimeTimeZone {
        return $this->endTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'availabilityViewInterval' => function (self $o, ParseNode $n) { $o->setAvailabilityViewInterval($n->getIntegerValue()); },
            'endTime' => function (self $o, ParseNode $n) { $o->setEndTime($n->getObjectValue(DateTimeTimeZone::class)); },
            'schedules' => function (self $o, ParseNode $n) { $o->setSchedules($n->getCollectionOfPrimitiveValues()); },
            'startTime' => function (self $o, ParseNode $n) { $o->setStartTime($n->getObjectValue(DateTimeTimeZone::class)); },
        ];
    }

    /**
     * Gets the schedules property value. 
     * @return array<string>|null
    */
    public function getSchedules(): ?array {
        return $this->schedules;
    }

    /**
     * Gets the startTime property value. 
     * @return DateTimeTimeZone|null
    */
    public function getStartTime(): ?DateTimeTimeZone {
        return $this->startTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('availabilityViewInterval', $this->availabilityViewInterval);
        $writer->writeObjectValue('endTime', $this->endTime);
        $writer->writeCollectionOfPrimitiveValues('schedules', $this->schedules);
        $writer->writeObjectValue('startTime', $this->startTime);
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
     * Sets the availabilityViewInterval property value. 
     *  @param int|null $value Value to set for the AvailabilityViewInterval property.
    */
    public function setAvailabilityViewInterval(?int $value ): void {
        $this->availabilityViewInterval = $value;
    }

    /**
     * Sets the endTime property value. 
     *  @param DateTimeTimeZone|null $value Value to set for the EndTime property.
    */
    public function setEndTime(?DateTimeTimeZone $value ): void {
        $this->endTime = $value;
    }

    /**
     * Sets the schedules property value. 
     *  @param array<string>|null $value Value to set for the Schedules property.
    */
    public function setSchedules(?array $value ): void {
        $this->schedules = $value;
    }

    /**
     * Sets the startTime property value. 
     *  @param DateTimeTimeZone|null $value Value to set for the StartTime property.
    */
    public function setStartTime(?DateTimeTimeZone $value ): void {
        $this->startTime = $value;
    }

}
