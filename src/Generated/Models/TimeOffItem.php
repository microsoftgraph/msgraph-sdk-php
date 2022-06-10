<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TimeOffItem extends ScheduleEntity implements Parsable 
{
    /**
     * @var string|null $timeOffReasonId ID of the timeOffReason for this timeOffItem. Required.
    */
    private ?string $timeOffReasonId = null;
    
    /**
     * Instantiates a new timeOffItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimeOffItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TimeOffItem {
        return new TimeOffItem();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'timeOffReasonId' => function (ParseNode $n) use ($o) { $o->setTimeOffReasonId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the timeOffReasonId property value. ID of the timeOffReason for this timeOffItem. Required.
     * @return string|null
    */
    public function getTimeOffReasonId(): ?string {
        return $this->timeOffReasonId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('timeOffReasonId', $this->timeOffReasonId);
    }

    /**
     * Sets the timeOffReasonId property value. ID of the timeOffReason for this timeOffItem. Required.
     *  @param string|null $value Value to set for the timeOffReasonId property.
    */
    public function setTimeOffReasonId(?string $value ): void {
        $this->timeOffReasonId = $value;
    }

}
