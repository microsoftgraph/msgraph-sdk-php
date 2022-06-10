<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

class BookingWorkTimeSlot implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Time|null $endTime The time of the day when work stops. For example, 17:00:00.0000000.
    */
    private ?Time $endTime = null;
    
    /**
     * @var Time|null $startTime The time of the day when work starts. For example, 08:00:00.0000000.
    */
    private ?Time $startTime = null;
    
    /**
     * Instantiates a new bookingWorkTimeSlot and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingWorkTimeSlot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BookingWorkTimeSlot {
        return new BookingWorkTimeSlot();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the endTime property value. The time of the day when work stops. For example, 17:00:00.0000000.
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
        $o = $this;
        return  [
            'endTime' => function (ParseNode $n) use ($o) { $o->setEndTime($n->getTimeValue()); },
            'startTime' => function (ParseNode $n) use ($o) { $o->setStartTime($n->getTimeValue()); },
        ];
    }

    /**
     * Gets the startTime property value. The time of the day when work starts. For example, 08:00:00.0000000.
     * @return Time|null
    */
    public function getStartTime(): ?Time {
        return $this->startTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeTimeValue('endTime', $this->endTime);
        $writer->writeTimeValue('startTime', $this->startTime);
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
     * Sets the endTime property value. The time of the day when work stops. For example, 17:00:00.0000000.
     *  @param Time|null $value Value to set for the endTime property.
    */
    public function setEndTime(?Time $value ): void {
        $this->endTime = $value;
    }

    /**
     * Sets the startTime property value. The time of the day when work starts. For example, 08:00:00.0000000.
     *  @param Time|null $value Value to set for the startTime property.
    */
    public function setStartTime(?Time $value ): void {
        $this->startTime = $value;
    }

}
