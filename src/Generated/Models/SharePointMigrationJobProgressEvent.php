<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharePointMigrationJobProgressEvent extends SharePointMigrationEvent implements Parsable 
{
    /**
     * Instantiates a new SharePointMigrationJobProgressEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointMigrationJobProgressEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointMigrationJobProgressEvent {
        return new SharePointMigrationJobProgressEvent();
    }

    /**
     * Gets the bytesProcessed property value. The number of bytes processed. Read-only.
     * @return int|null
    */
    public function getBytesProcessed(): ?int {
        $val = $this->getBackingStore()->get('bytesProcessed');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bytesProcessed'");
    }

    /**
     * Gets the bytesProcessedOnlyCurrentVersion property value. The number of bytes processed with version history excluded. Read-only.
     * @return int|null
    */
    public function getBytesProcessedOnlyCurrentVersion(): ?int {
        $val = $this->getBackingStore()->get('bytesProcessedOnlyCurrentVersion');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bytesProcessedOnlyCurrentVersion'");
    }

    /**
     * Gets the cpuDurationMs property value. CPU duration in milliseconds. Read-only.
     * @return int|null
    */
    public function getCpuDurationMs(): ?int {
        $val = $this->getBackingStore()->get('cpuDurationMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cpuDurationMs'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bytesProcessed' => fn(ParseNode $n) => $o->setBytesProcessed($n->getIntegerValue()),
            'bytesProcessedOnlyCurrentVersion' => fn(ParseNode $n) => $o->setBytesProcessedOnlyCurrentVersion($n->getIntegerValue()),
            'cpuDurationMs' => fn(ParseNode $n) => $o->setCpuDurationMs($n->getIntegerValue()),
            'filesProcessed' => fn(ParseNode $n) => $o->setFilesProcessed($n->getIntegerValue()),
            'filesProcessedOnlyCurrentVersion' => fn(ParseNode $n) => $o->setFilesProcessedOnlyCurrentVersion($n->getIntegerValue()),
            'isCompleted' => fn(ParseNode $n) => $o->setIsCompleted($n->getBooleanValue()),
            'lastProcessedObjectId' => fn(ParseNode $n) => $o->setLastProcessedObjectId($n->getStringValue()),
            'objectsProcessed' => fn(ParseNode $n) => $o->setObjectsProcessed($n->getIntegerValue()),
            'sqlDurationMs' => fn(ParseNode $n) => $o->setSqlDurationMs($n->getIntegerValue()),
            'sqlQueryCount' => fn(ParseNode $n) => $o->setSqlQueryCount($n->getIntegerValue()),
            'totalDurationMs' => fn(ParseNode $n) => $o->setTotalDurationMs($n->getIntegerValue()),
            'totalErrors' => fn(ParseNode $n) => $o->setTotalErrors($n->getIntegerValue()),
            'totalExpectedBytes' => fn(ParseNode $n) => $o->setTotalExpectedBytes($n->getIntegerValue()),
            'totalExpectedObjects' => fn(ParseNode $n) => $o->setTotalExpectedObjects($n->getIntegerValue()),
            'totalRetryCount' => fn(ParseNode $n) => $o->setTotalRetryCount($n->getIntegerValue()),
            'totalWarnings' => fn(ParseNode $n) => $o->setTotalWarnings($n->getIntegerValue()),
            'waitTimeOnSqlThrottlingMs' => fn(ParseNode $n) => $o->setWaitTimeOnSqlThrottlingMs($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the filesProcessed property value. The number of files processed. Read-only.
     * @return int|null
    */
    public function getFilesProcessed(): ?int {
        $val = $this->getBackingStore()->get('filesProcessed');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filesProcessed'");
    }

    /**
     * Gets the filesProcessedOnlyCurrentVersion property value. The number of files processed with version history excluded. Read-only.
     * @return int|null
    */
    public function getFilesProcessedOnlyCurrentVersion(): ?int {
        $val = $this->getBackingStore()->get('filesProcessedOnlyCurrentVersion');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filesProcessedOnlyCurrentVersion'");
    }

    /**
     * Gets the isCompleted property value. True if the job status is End. False if the job is In progress. Read-only.
     * @return bool|null
    */
    public function getIsCompleted(): ?bool {
        $val = $this->getBackingStore()->get('isCompleted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCompleted'");
    }

    /**
     * Gets the lastProcessedObjectId property value. The unique identifier of the last object processed. Read-only.
     * @return string|null
    */
    public function getLastProcessedObjectId(): ?string {
        $val = $this->getBackingStore()->get('lastProcessedObjectId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastProcessedObjectId'");
    }

    /**
     * Gets the objectsProcessed property value. The number of objects processed. Read-only.
     * @return int|null
    */
    public function getObjectsProcessed(): ?int {
        $val = $this->getBackingStore()->get('objectsProcessed');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'objectsProcessed'");
    }

    /**
     * Gets the sqlDurationMs property value. SQL duration in milliseconds. Read-only.
     * @return int|null
    */
    public function getSqlDurationMs(): ?int {
        $val = $this->getBackingStore()->get('sqlDurationMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sqlDurationMs'");
    }

    /**
     * Gets the sqlQueryCount property value. SQL query count. Read-only.
     * @return int|null
    */
    public function getSqlQueryCount(): ?int {
        $val = $this->getBackingStore()->get('sqlQueryCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sqlQueryCount'");
    }

    /**
     * Gets the totalDurationMs property value. Total duration time in milliseconds. Read-only.
     * @return int|null
    */
    public function getTotalDurationMs(): ?int {
        $val = $this->getBackingStore()->get('totalDurationMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalDurationMs'");
    }

    /**
     * Gets the totalErrors property value. Total errors. Read-only.
     * @return int|null
    */
    public function getTotalErrors(): ?int {
        $val = $this->getBackingStore()->get('totalErrors');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalErrors'");
    }

    /**
     * Gets the totalExpectedBytes property value. Total bytes to be processed. Read-only.
     * @return int|null
    */
    public function getTotalExpectedBytes(): ?int {
        $val = $this->getBackingStore()->get('totalExpectedBytes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalExpectedBytes'");
    }

    /**
     * Gets the totalExpectedObjects property value. The number of objects to process. Read-only.
     * @return int|null
    */
    public function getTotalExpectedObjects(): ?int {
        $val = $this->getBackingStore()->get('totalExpectedObjects');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalExpectedObjects'");
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
     * Gets the totalWarnings property value. Total warnings. Read-only.
     * @return int|null
    */
    public function getTotalWarnings(): ?int {
        $val = $this->getBackingStore()->get('totalWarnings');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalWarnings'");
    }

    /**
     * Gets the waitTimeOnSqlThrottlingMs property value. Waiting time due to SQL throttling, in milliseconds. Read-only.
     * @return int|null
    */
    public function getWaitTimeOnSqlThrottlingMs(): ?int {
        $val = $this->getBackingStore()->get('waitTimeOnSqlThrottlingMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'waitTimeOnSqlThrottlingMs'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('bytesProcessed', $this->getBytesProcessed());
        $writer->writeIntegerValue('bytesProcessedOnlyCurrentVersion', $this->getBytesProcessedOnlyCurrentVersion());
        $writer->writeIntegerValue('cpuDurationMs', $this->getCpuDurationMs());
        $writer->writeIntegerValue('filesProcessed', $this->getFilesProcessed());
        $writer->writeIntegerValue('filesProcessedOnlyCurrentVersion', $this->getFilesProcessedOnlyCurrentVersion());
        $writer->writeBooleanValue('isCompleted', $this->getIsCompleted());
        $writer->writeStringValue('lastProcessedObjectId', $this->getLastProcessedObjectId());
        $writer->writeIntegerValue('objectsProcessed', $this->getObjectsProcessed());
        $writer->writeIntegerValue('sqlDurationMs', $this->getSqlDurationMs());
        $writer->writeIntegerValue('sqlQueryCount', $this->getSqlQueryCount());
        $writer->writeIntegerValue('totalDurationMs', $this->getTotalDurationMs());
        $writer->writeIntegerValue('totalErrors', $this->getTotalErrors());
        $writer->writeIntegerValue('totalExpectedBytes', $this->getTotalExpectedBytes());
        $writer->writeIntegerValue('totalExpectedObjects', $this->getTotalExpectedObjects());
        $writer->writeIntegerValue('totalRetryCount', $this->getTotalRetryCount());
        $writer->writeIntegerValue('totalWarnings', $this->getTotalWarnings());
        $writer->writeIntegerValue('waitTimeOnSqlThrottlingMs', $this->getWaitTimeOnSqlThrottlingMs());
    }

    /**
     * Sets the bytesProcessed property value. The number of bytes processed. Read-only.
     * @param int|null $value Value to set for the bytesProcessed property.
    */
    public function setBytesProcessed(?int $value): void {
        $this->getBackingStore()->set('bytesProcessed', $value);
    }

    /**
     * Sets the bytesProcessedOnlyCurrentVersion property value. The number of bytes processed with version history excluded. Read-only.
     * @param int|null $value Value to set for the bytesProcessedOnlyCurrentVersion property.
    */
    public function setBytesProcessedOnlyCurrentVersion(?int $value): void {
        $this->getBackingStore()->set('bytesProcessedOnlyCurrentVersion', $value);
    }

    /**
     * Sets the cpuDurationMs property value. CPU duration in milliseconds. Read-only.
     * @param int|null $value Value to set for the cpuDurationMs property.
    */
    public function setCpuDurationMs(?int $value): void {
        $this->getBackingStore()->set('cpuDurationMs', $value);
    }

    /**
     * Sets the filesProcessed property value. The number of files processed. Read-only.
     * @param int|null $value Value to set for the filesProcessed property.
    */
    public function setFilesProcessed(?int $value): void {
        $this->getBackingStore()->set('filesProcessed', $value);
    }

    /**
     * Sets the filesProcessedOnlyCurrentVersion property value. The number of files processed with version history excluded. Read-only.
     * @param int|null $value Value to set for the filesProcessedOnlyCurrentVersion property.
    */
    public function setFilesProcessedOnlyCurrentVersion(?int $value): void {
        $this->getBackingStore()->set('filesProcessedOnlyCurrentVersion', $value);
    }

    /**
     * Sets the isCompleted property value. True if the job status is End. False if the job is In progress. Read-only.
     * @param bool|null $value Value to set for the isCompleted property.
    */
    public function setIsCompleted(?bool $value): void {
        $this->getBackingStore()->set('isCompleted', $value);
    }

    /**
     * Sets the lastProcessedObjectId property value. The unique identifier of the last object processed. Read-only.
     * @param string|null $value Value to set for the lastProcessedObjectId property.
    */
    public function setLastProcessedObjectId(?string $value): void {
        $this->getBackingStore()->set('lastProcessedObjectId', $value);
    }

    /**
     * Sets the objectsProcessed property value. The number of objects processed. Read-only.
     * @param int|null $value Value to set for the objectsProcessed property.
    */
    public function setObjectsProcessed(?int $value): void {
        $this->getBackingStore()->set('objectsProcessed', $value);
    }

    /**
     * Sets the sqlDurationMs property value. SQL duration in milliseconds. Read-only.
     * @param int|null $value Value to set for the sqlDurationMs property.
    */
    public function setSqlDurationMs(?int $value): void {
        $this->getBackingStore()->set('sqlDurationMs', $value);
    }

    /**
     * Sets the sqlQueryCount property value. SQL query count. Read-only.
     * @param int|null $value Value to set for the sqlQueryCount property.
    */
    public function setSqlQueryCount(?int $value): void {
        $this->getBackingStore()->set('sqlQueryCount', $value);
    }

    /**
     * Sets the totalDurationMs property value. Total duration time in milliseconds. Read-only.
     * @param int|null $value Value to set for the totalDurationMs property.
    */
    public function setTotalDurationMs(?int $value): void {
        $this->getBackingStore()->set('totalDurationMs', $value);
    }

    /**
     * Sets the totalErrors property value. Total errors. Read-only.
     * @param int|null $value Value to set for the totalErrors property.
    */
    public function setTotalErrors(?int $value): void {
        $this->getBackingStore()->set('totalErrors', $value);
    }

    /**
     * Sets the totalExpectedBytes property value. Total bytes to be processed. Read-only.
     * @param int|null $value Value to set for the totalExpectedBytes property.
    */
    public function setTotalExpectedBytes(?int $value): void {
        $this->getBackingStore()->set('totalExpectedBytes', $value);
    }

    /**
     * Sets the totalExpectedObjects property value. The number of objects to process. Read-only.
     * @param int|null $value Value to set for the totalExpectedObjects property.
    */
    public function setTotalExpectedObjects(?int $value): void {
        $this->getBackingStore()->set('totalExpectedObjects', $value);
    }

    /**
     * Sets the totalRetryCount property value. The current retry count of the job. Read-only.
     * @param int|null $value Value to set for the totalRetryCount property.
    */
    public function setTotalRetryCount(?int $value): void {
        $this->getBackingStore()->set('totalRetryCount', $value);
    }

    /**
     * Sets the totalWarnings property value. Total warnings. Read-only.
     * @param int|null $value Value to set for the totalWarnings property.
    */
    public function setTotalWarnings(?int $value): void {
        $this->getBackingStore()->set('totalWarnings', $value);
    }

    /**
     * Sets the waitTimeOnSqlThrottlingMs property value. Waiting time due to SQL throttling, in milliseconds. Read-only.
     * @param int|null $value Value to set for the waitTimeOnSqlThrottlingMs property.
    */
    public function setWaitTimeOnSqlThrottlingMs(?int $value): void {
        $this->getBackingStore()->set('waitTimeOnSqlThrottlingMs', $value);
    }

}
