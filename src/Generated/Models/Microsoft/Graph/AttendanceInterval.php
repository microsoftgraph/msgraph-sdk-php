<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttendanceInterval implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $durationInSeconds Duration of the meeting interval in seconds; that is, the difference between joinDateTime and leaveDateTime. */
    private ?int $durationInSeconds = null;
    
    /** @var DateTime|null $joinDateTime The time the attendee joined in UTC. */
    private ?DateTime $joinDateTime = null;
    
    /** @var DateTime|null $leaveDateTime The time the attendee left in UTC. */
    private ?DateTime $leaveDateTime = null;
    
    /**
     * Instantiates a new attendanceInterval and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttendanceInterval
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AttendanceInterval {
        return new AttendanceInterval();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the durationInSeconds property value. Duration of the meeting interval in seconds; that is, the difference between joinDateTime and leaveDateTime.
     * @return int|null
    */
    public function getDurationInSeconds(): ?int {
        return $this->durationInSeconds;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'durationInSeconds' => function (self $o, ParseNode $n) { $o->setDurationInSeconds($n->getIntegerValue()); },
            'joinDateTime' => function (self $o, ParseNode $n) { $o->setJoinDateTime($n->getDateTimeValue()); },
            'leaveDateTime' => function (self $o, ParseNode $n) { $o->setLeaveDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the joinDateTime property value. The time the attendee joined in UTC.
     * @return DateTime|null
    */
    public function getJoinDateTime(): ?DateTime {
        return $this->joinDateTime;
    }

    /**
     * Gets the leaveDateTime property value. The time the attendee left in UTC.
     * @return DateTime|null
    */
    public function getLeaveDateTime(): ?DateTime {
        return $this->leaveDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('durationInSeconds', $this->durationInSeconds);
        $writer->writeDateTimeValue('joinDateTime', $this->joinDateTime);
        $writer->writeDateTimeValue('leaveDateTime', $this->leaveDateTime);
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
     * Sets the durationInSeconds property value. Duration of the meeting interval in seconds; that is, the difference between joinDateTime and leaveDateTime.
     *  @param int|null $value Value to set for the durationInSeconds property.
    */
    public function setDurationInSeconds(?int $value ): void {
        $this->durationInSeconds = $value;
    }

    /**
     * Sets the joinDateTime property value. The time the attendee joined in UTC.
     *  @param DateTime|null $value Value to set for the joinDateTime property.
    */
    public function setJoinDateTime(?DateTime $value ): void {
        $this->joinDateTime = $value;
    }

    /**
     * Sets the leaveDateTime property value. The time the attendee left in UTC.
     *  @param DateTime|null $value Value to set for the leaveDateTime property.
    */
    public function setLeaveDateTime(?DateTime $value ): void {
        $this->leaveDateTime = $value;
    }

}
