<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SubjectProcessingResult extends Entity implements Parsable 
{
    /**
     * Instantiates a new SubjectProcessingResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SubjectProcessingResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SubjectProcessingResult {
        return new SubjectProcessingResult();
    }

    /**
     * Gets the completedDateTime property value. The date and time when the subject processing completed. Read-only.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('completedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedDateTime'");
    }

    /**
     * Gets the failedTasksCount property value. The count of tasks that failed for the subject. Read-only.
     * @return int|null
    */
    public function getFailedTasksCount(): ?int {
        $val = $this->getBackingStore()->get('failedTasksCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedTasksCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'failedTasksCount' => fn(ParseNode $n) => $o->setFailedTasksCount($n->getIntegerValue()),
            'processingStatus' => fn(ParseNode $n) => $o->setProcessingStatus($n->getEnumValue(LifecycleWorkflowProcessingStatus::class)),
            'reprocessedRuns' => fn(ParseNode $n) => $o->setReprocessedRuns($n->getCollectionOfObjectValues([Run::class, 'createFromDiscriminatorValue'])),
            'scheduledDateTime' => fn(ParseNode $n) => $o->setScheduledDateTime($n->getDateTimeValue()),
            'startedDateTime' => fn(ParseNode $n) => $o->setStartedDateTime($n->getDateTimeValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getObjectValue([WorkflowSubject::class, 'createFromDiscriminatorValue'])),
            'subjectType' => fn(ParseNode $n) => $o->setSubjectType($n->getEnumValue(SubjectType::class)),
            'taskProcessingResults' => fn(ParseNode $n) => $o->setTaskProcessingResults($n->getCollectionOfObjectValues([TaskProcessingResult::class, 'createFromDiscriminatorValue'])),
            'totalTasksCount' => fn(ParseNode $n) => $o->setTotalTasksCount($n->getIntegerValue()),
            'totalUnprocessedTasksCount' => fn(ParseNode $n) => $o->setTotalUnprocessedTasksCount($n->getIntegerValue()),
            'workflowExecutionType' => fn(ParseNode $n) => $o->setWorkflowExecutionType($n->getEnumValue(WorkflowExecutionType::class)),
            'workflowVersion' => fn(ParseNode $n) => $o->setWorkflowVersion($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the processingStatus property value. The processingStatus property
     * @return LifecycleWorkflowProcessingStatus|null
    */
    public function getProcessingStatus(): ?LifecycleWorkflowProcessingStatus {
        $val = $this->getBackingStore()->get('processingStatus');
        if (is_null($val) || $val instanceof LifecycleWorkflowProcessingStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processingStatus'");
    }

    /**
     * Gets the reprocessedRuns property value. The reprocessed runs associated with this subject processing result.
     * @return array<Run>|null
    */
    public function getReprocessedRuns(): ?array {
        $val = $this->getBackingStore()->get('reprocessedRuns');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Run::class);
            /** @var array<Run>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reprocessedRuns'");
    }

    /**
     * Gets the scheduledDateTime property value. The date and time when processing was scheduled. Read-only.
     * @return DateTime|null
    */
    public function getScheduledDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('scheduledDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scheduledDateTime'");
    }

    /**
     * Gets the startedDateTime property value. The date and time when processing started. Read-only.
     * @return DateTime|null
    */
    public function getStartedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startedDateTime'");
    }

    /**
     * Gets the subject property value. The subject property
     * @return WorkflowSubject|null
    */
    public function getSubject(): ?WorkflowSubject {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || $val instanceof WorkflowSubject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subject'");
    }

    /**
     * Gets the subjectType property value. The subjectType property
     * @return SubjectType|null
    */
    public function getSubjectType(): ?SubjectType {
        $val = $this->getBackingStore()->get('subjectType');
        if (is_null($val) || $val instanceof SubjectType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subjectType'");
    }

    /**
     * Gets the taskProcessingResults property value. The task-level processing results for this subject. Read-only.
     * @return array<TaskProcessingResult>|null
    */
    public function getTaskProcessingResults(): ?array {
        $val = $this->getBackingStore()->get('taskProcessingResults');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TaskProcessingResult::class);
            /** @var array<TaskProcessingResult>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taskProcessingResults'");
    }

    /**
     * Gets the totalTasksCount property value. The total number of tasks in the workflow. Read-only.
     * @return int|null
    */
    public function getTotalTasksCount(): ?int {
        $val = $this->getBackingStore()->get('totalTasksCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalTasksCount'");
    }

    /**
     * Gets the totalUnprocessedTasksCount property value. The count of tasks that have not yet been processed. Read-only.
     * @return int|null
    */
    public function getTotalUnprocessedTasksCount(): ?int {
        $val = $this->getBackingStore()->get('totalUnprocessedTasksCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalUnprocessedTasksCount'");
    }

    /**
     * Gets the workflowExecutionType property value. The workflowExecutionType property
     * @return WorkflowExecutionType|null
    */
    public function getWorkflowExecutionType(): ?WorkflowExecutionType {
        $val = $this->getBackingStore()->get('workflowExecutionType');
        if (is_null($val) || $val instanceof WorkflowExecutionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workflowExecutionType'");
    }

    /**
     * Gets the workflowVersion property value. The version of the workflow at the time of execution. Read-only.
     * @return int|null
    */
    public function getWorkflowVersion(): ?int {
        $val = $this->getBackingStore()->get('workflowVersion');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workflowVersion'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeIntegerValue('failedTasksCount', $this->getFailedTasksCount());
        $writer->writeEnumValue('processingStatus', $this->getProcessingStatus());
        $writer->writeCollectionOfObjectValues('reprocessedRuns', $this->getReprocessedRuns());
        $writer->writeDateTimeValue('scheduledDateTime', $this->getScheduledDateTime());
        $writer->writeDateTimeValue('startedDateTime', $this->getStartedDateTime());
        $writer->writeObjectValue('subject', $this->getSubject());
        $writer->writeEnumValue('subjectType', $this->getSubjectType());
        $writer->writeCollectionOfObjectValues('taskProcessingResults', $this->getTaskProcessingResults());
        $writer->writeIntegerValue('totalTasksCount', $this->getTotalTasksCount());
        $writer->writeIntegerValue('totalUnprocessedTasksCount', $this->getTotalUnprocessedTasksCount());
        $writer->writeEnumValue('workflowExecutionType', $this->getWorkflowExecutionType());
        $writer->writeIntegerValue('workflowVersion', $this->getWorkflowVersion());
    }

    /**
     * Sets the completedDateTime property value. The date and time when the subject processing completed. Read-only.
     * @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the failedTasksCount property value. The count of tasks that failed for the subject. Read-only.
     * @param int|null $value Value to set for the failedTasksCount property.
    */
    public function setFailedTasksCount(?int $value): void {
        $this->getBackingStore()->set('failedTasksCount', $value);
    }

    /**
     * Sets the processingStatus property value. The processingStatus property
     * @param LifecycleWorkflowProcessingStatus|null $value Value to set for the processingStatus property.
    */
    public function setProcessingStatus(?LifecycleWorkflowProcessingStatus $value): void {
        $this->getBackingStore()->set('processingStatus', $value);
    }

    /**
     * Sets the reprocessedRuns property value. The reprocessed runs associated with this subject processing result.
     * @param array<Run>|null $value Value to set for the reprocessedRuns property.
    */
    public function setReprocessedRuns(?array $value): void {
        $this->getBackingStore()->set('reprocessedRuns', $value);
    }

    /**
     * Sets the scheduledDateTime property value. The date and time when processing was scheduled. Read-only.
     * @param DateTime|null $value Value to set for the scheduledDateTime property.
    */
    public function setScheduledDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('scheduledDateTime', $value);
    }

    /**
     * Sets the startedDateTime property value. The date and time when processing started. Read-only.
     * @param DateTime|null $value Value to set for the startedDateTime property.
    */
    public function setStartedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startedDateTime', $value);
    }

    /**
     * Sets the subject property value. The subject property
     * @param WorkflowSubject|null $value Value to set for the subject property.
    */
    public function setSubject(?WorkflowSubject $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the subjectType property value. The subjectType property
     * @param SubjectType|null $value Value to set for the subjectType property.
    */
    public function setSubjectType(?SubjectType $value): void {
        $this->getBackingStore()->set('subjectType', $value);
    }

    /**
     * Sets the taskProcessingResults property value. The task-level processing results for this subject. Read-only.
     * @param array<TaskProcessingResult>|null $value Value to set for the taskProcessingResults property.
    */
    public function setTaskProcessingResults(?array $value): void {
        $this->getBackingStore()->set('taskProcessingResults', $value);
    }

    /**
     * Sets the totalTasksCount property value. The total number of tasks in the workflow. Read-only.
     * @param int|null $value Value to set for the totalTasksCount property.
    */
    public function setTotalTasksCount(?int $value): void {
        $this->getBackingStore()->set('totalTasksCount', $value);
    }

    /**
     * Sets the totalUnprocessedTasksCount property value. The count of tasks that have not yet been processed. Read-only.
     * @param int|null $value Value to set for the totalUnprocessedTasksCount property.
    */
    public function setTotalUnprocessedTasksCount(?int $value): void {
        $this->getBackingStore()->set('totalUnprocessedTasksCount', $value);
    }

    /**
     * Sets the workflowExecutionType property value. The workflowExecutionType property
     * @param WorkflowExecutionType|null $value Value to set for the workflowExecutionType property.
    */
    public function setWorkflowExecutionType(?WorkflowExecutionType $value): void {
        $this->getBackingStore()->set('workflowExecutionType', $value);
    }

    /**
     * Sets the workflowVersion property value. The version of the workflow at the time of execution. Read-only.
     * @param int|null $value Value to set for the workflowVersion property.
    */
    public function setWorkflowVersion(?int $value): void {
        $this->getBackingStore()->set('workflowVersion', $value);
    }

}
