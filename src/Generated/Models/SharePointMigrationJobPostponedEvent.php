<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharePointMigrationJobPostponedEvent extends SharePointMigrationEvent implements Parsable 
{
    /**
     * Instantiates a new SharePointMigrationJobPostponedEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointMigrationJobPostponedEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointMigrationJobPostponedEvent {
        return new SharePointMigrationJobPostponedEvent();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'jobsInQueue' => fn(ParseNode $n) => $o->setJobsInQueue($n->getIntegerValue()),
            'nextPickupDateTime' => fn(ParseNode $n) => $o->setNextPickupDateTime($n->getDateTimeValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'totalRetryCount' => fn(ParseNode $n) => $o->setTotalRetryCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the jobsInQueue property value. The number of migration jobs in the queue of the current database. Read-only.
     * @return int|null
    */
    public function getJobsInQueue(): ?int {
        $val = $this->getBackingStore()->get('jobsInQueue');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'jobsInQueue'");
    }

    /**
     * Gets the nextPickupDateTime property value. The date and time that indicate when this job is picked up next. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getNextPickupDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('nextPickupDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nextPickupDateTime'");
    }

    /**
     * Gets the reason property value. The reason for the postponement. Read-only.
     * @return string|null
    */
    public function getReason(): ?string {
        $val = $this->getBackingStore()->get('reason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reason'");
    }

    /**
     * Gets the totalRetryCount property value. The current retry count of the job. Read-only.
     * @return int|null
    */
    public function getTotalRetryCount(): ?int {
        $val = $this->getBackingStore()->get('totalRetryCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalRetryCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('jobsInQueue', $this->getJobsInQueue());
        $writer->writeDateTimeValue('nextPickupDateTime', $this->getNextPickupDateTime());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeIntegerValue('totalRetryCount', $this->getTotalRetryCount());
    }

    /**
     * Sets the jobsInQueue property value. The number of migration jobs in the queue of the current database. Read-only.
     * @param int|null $value Value to set for the jobsInQueue property.
    */
    public function setJobsInQueue(?int $value): void {
        $this->getBackingStore()->set('jobsInQueue', $value);
    }

    /**
     * Sets the nextPickupDateTime property value. The date and time that indicate when this job is picked up next. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the nextPickupDateTime property.
    */
    public function setNextPickupDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('nextPickupDateTime', $value);
    }

    /**
     * Sets the reason property value. The reason for the postponement. Read-only.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->getBackingStore()->set('reason', $value);
    }

    /**
     * Sets the totalRetryCount property value. The current retry count of the job. Read-only.
     * @param int|null $value Value to set for the totalRetryCount property.
    */
    public function setTotalRetryCount(?int $value): void {
        $this->getBackingStore()->set('totalRetryCount', $value);
    }

}
