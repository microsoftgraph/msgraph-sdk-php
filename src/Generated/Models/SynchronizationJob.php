<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SynchronizationJob extends Entity implements Parsable 
{
    /**
     * Instantiates a new SynchronizationJob and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationJob
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationJob {
        return new SynchronizationJob();
    }

    /**
     * Gets the bulkUpload property value. The bulk upload operation for the job.
     * @return BulkUpload|null
    */
    public function getBulkUpload(): ?BulkUpload {
        $val = $this->getBackingStore()->get('bulkUpload');
        if (is_null($val) || $val instanceof BulkUpload) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bulkUpload'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bulkUpload' => fn(ParseNode $n) => $o->setBulkUpload($n->getObjectValue([BulkUpload::class, 'createFromDiscriminatorValue'])),
            'schedule' => fn(ParseNode $n) => $o->setSchedule($n->getObjectValue([SynchronizationSchedule::class, 'createFromDiscriminatorValue'])),
            'schema' => fn(ParseNode $n) => $o->setSchema($n->getObjectValue([SynchronizationSchema::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getObjectValue([SynchronizationStatus::class, 'createFromDiscriminatorValue'])),
            'synchronizationJobSettings' => fn(ParseNode $n) => $o->setSynchronizationJobSettings($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'templateId' => fn(ParseNode $n) => $o->setTemplateId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the schedule property value. Schedule used to run the job. Read-only.
     * @return SynchronizationSchedule|null
    */
    public function getSchedule(): ?SynchronizationSchedule {
        $val = $this->getBackingStore()->get('schedule');
        if (is_null($val) || $val instanceof SynchronizationSchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schedule'");
    }

    /**
     * Gets the schema property value. The synchronization schema configured for the job.
     * @return SynchronizationSchema|null
    */
    public function getSchema(): ?SynchronizationSchema {
        $val = $this->getBackingStore()->get('schema');
        if (is_null($val) || $val instanceof SynchronizationSchema) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schema'");
    }

    /**
     * Gets the status property value. Status of the job, which includes when the job was last run, current job state, and errors.
     * @return SynchronizationStatus|null
    */
    public function getStatus(): ?SynchronizationStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof SynchronizationStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the synchronizationJobSettings property value. Settings associated with the job. Some settings are inherited from the template.
     * @return array<KeyValuePair>|null
    */
    public function getSynchronizationJobSettings(): ?array {
        $val = $this->getBackingStore()->get('synchronizationJobSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValuePair::class);
            /** @var array<KeyValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'synchronizationJobSettings'");
    }

    /**
     * Gets the templateId property value. Identifier of the synchronization template this job is based on.
     * @return string|null
    */
    public function getTemplateId(): ?string {
        $val = $this->getBackingStore()->get('templateId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'templateId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('bulkUpload', $this->getBulkUpload());
        $writer->writeObjectValue('schedule', $this->getSchedule());
        $writer->writeObjectValue('schema', $this->getSchema());
        $writer->writeObjectValue('status', $this->getStatus());
        $writer->writeCollectionOfObjectValues('synchronizationJobSettings', $this->getSynchronizationJobSettings());
        $writer->writeStringValue('templateId', $this->getTemplateId());
    }

    /**
     * Sets the bulkUpload property value. The bulk upload operation for the job.
     * @param BulkUpload|null $value Value to set for the bulkUpload property.
    */
    public function setBulkUpload(?BulkUpload $value): void {
        $this->getBackingStore()->set('bulkUpload', $value);
    }

    /**
     * Sets the schedule property value. Schedule used to run the job. Read-only.
     * @param SynchronizationSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?SynchronizationSchedule $value): void {
        $this->getBackingStore()->set('schedule', $value);
    }

    /**
     * Sets the schema property value. The synchronization schema configured for the job.
     * @param SynchronizationSchema|null $value Value to set for the schema property.
    */
    public function setSchema(?SynchronizationSchema $value): void {
        $this->getBackingStore()->set('schema', $value);
    }

    /**
     * Sets the status property value. Status of the job, which includes when the job was last run, current job state, and errors.
     * @param SynchronizationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SynchronizationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the synchronizationJobSettings property value. Settings associated with the job. Some settings are inherited from the template.
     * @param array<KeyValuePair>|null $value Value to set for the synchronizationJobSettings property.
    */
    public function setSynchronizationJobSettings(?array $value): void {
        $this->getBackingStore()->set('synchronizationJobSettings', $value);
    }

    /**
     * Sets the templateId property value. Identifier of the synchronization template this job is based on.
     * @param string|null $value Value to set for the templateId property.
    */
    public function setTemplateId(?string $value): void {
        $this->getBackingStore()->set('templateId', $value);
    }

}
