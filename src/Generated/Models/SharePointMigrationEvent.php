<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharePointMigrationEvent extends Entity implements Parsable 
{
    /**
     * Instantiates a new SharePointMigrationEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointMigrationEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointMigrationEvent {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.sharePointMigrationFinishManifestFileUploadEvent': return new SharePointMigrationFinishManifestFileUploadEvent();
                case '#microsoft.graph.sharePointMigrationJobCancelledEvent': return new SharePointMigrationJobCancelledEvent();
                case '#microsoft.graph.sharePointMigrationJobDeletedEvent': return new SharePointMigrationJobDeletedEvent();
                case '#microsoft.graph.sharePointMigrationJobErrorEvent': return new SharePointMigrationJobErrorEvent();
                case '#microsoft.graph.sharePointMigrationJobPostponedEvent': return new SharePointMigrationJobPostponedEvent();
                case '#microsoft.graph.sharePointMigrationJobProgressEvent': return new SharePointMigrationJobProgressEvent();
                case '#microsoft.graph.sharePointMigrationJobQueuedEvent': return new SharePointMigrationJobQueuedEvent();
                case '#microsoft.graph.sharePointMigrationJobStartEvent': return new SharePointMigrationJobStartEvent();
            }
        }
        return new SharePointMigrationEvent();
    }

    /**
     * Gets the correlationId property value. The correlation ID of a migration job. Read-only.
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        $val = $this->getBackingStore()->get('correlationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'correlationId'");
    }

    /**
     * Gets the eventDateTime property value. The date and time when the job status changes. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('eventDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'eventDateTime' => fn(ParseNode $n) => $o->setEventDateTime($n->getDateTimeValue()),
            'jobId' => fn(ParseNode $n) => $o->setJobId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the jobId property value. The unique identifier of a migration job. Read-only.
     * @return string|null
    */
    public function getJobId(): ?string {
        $val = $this->getBackingStore()->get('jobId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'jobId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeDateTimeValue('eventDateTime', $this->getEventDateTime());
        $writer->writeStringValue('jobId', $this->getJobId());
    }

    /**
     * Sets the correlationId property value. The correlation ID of a migration job. Read-only.
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->getBackingStore()->set('correlationId', $value);
    }

    /**
     * Sets the eventDateTime property value. The date and time when the job status changes. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('eventDateTime', $value);
    }

    /**
     * Sets the jobId property value. The unique identifier of a migration job. Read-only.
     * @param string|null $value Value to set for the jobId property.
    */
    public function setJobId(?string $value): void {
        $this->getBackingStore()->set('jobId', $value);
    }

}
