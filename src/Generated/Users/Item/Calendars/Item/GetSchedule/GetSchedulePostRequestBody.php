<?php

namespace Microsoft\Graph\Users\Item\Calendars\Item\GetSchedule;

use Microsoft\Graph\Models\DateTimeTimeZone;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetSchedulePostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $AvailabilityViewInterval The AvailabilityViewInterval property
    */
    private ?int $availabilityViewInterval = null;
    
    /**
     * @var DateTimeTimeZone|null $EndTime The EndTime property
    */
    private ?DateTimeTimeZone $endTime = null;
    
    /**
     * @var array<string>|null $Schedules The Schedules property
    */
    private ?array $schedules = null;
    
    /**
     * @var DateTimeTimeZone|null $StartTime The StartTime property
    */
    private ?DateTimeTimeZone $startTime = null;
    
    /**
     * Instantiates a new getSchedulePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetSchedulePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetSchedulePostRequestBody {
        return new GetSchedulePostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the availabilityViewInterval property value. The AvailabilityViewInterval property
     * @return int|null
    */
    public function getAvailabilityViewInterval(): ?int {
        return $this->availabilityViewInterval;
    }

    /**
     * Gets the endTime property value. The EndTime property
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
        $o = $this;
        return  [
            'availabilityViewInterval' => function (ParseNode $n) use ($o) { $o->setAvailabilityViewInterval($n->getIntegerValue()); },
            'endTime' => function (ParseNode $n) use ($o) { $o->setEndTime($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
            'schedules' => function (ParseNode $n) use ($o) { $o->setSchedules($n->getCollectionOfPrimitiveValues()); },
            'startTime' => function (ParseNode $n) use ($o) { $o->setStartTime($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the schedules property value. The Schedules property
     * @return array<string>|null
    */
    public function getSchedules(): ?array {
        return $this->schedules;
    }

    /**
     * Gets the startTime property value. The StartTime property
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
     * Sets the availabilityViewInterval property value. The AvailabilityViewInterval property
     *  @param int|null $value Value to set for the AvailabilityViewInterval property.
    */
    public function setAvailabilityViewInterval(?int $value ): void {
        $this->availabilityViewInterval = $value;
    }

    /**
     * Sets the endTime property value. The EndTime property
     *  @param DateTimeTimeZone|null $value Value to set for the EndTime property.
    */
    public function setEndTime(?DateTimeTimeZone $value ): void {
        $this->endTime = $value;
    }

    /**
     * Sets the schedules property value. The Schedules property
     *  @param array<string>|null $value Value to set for the Schedules property.
    */
    public function setSchedules(?array $value ): void {
        $this->schedules = $value;
    }

    /**
     * Sets the startTime property value. The StartTime property
     *  @param DateTimeTimeZone|null $value Value to set for the StartTime property.
    */
    public function setStartTime(?DateTimeTimeZone $value ): void {
        $this->startTime = $value;
    }

}
