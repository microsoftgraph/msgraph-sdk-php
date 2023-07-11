<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Graph\Generated\Models\User;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class UserProcessingResult extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new userProcessingResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserProcessingResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserProcessingResult {
        return new UserProcessingResult();
    }

    /**
     * Gets the completedDateTime property value. The date time that the workflow execution for a user completed. Value is null if the workflow hasn't completed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
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
     * Gets the failedTasksCount property value. The number of tasks that failed in the workflow execution.
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
            'scheduledDateTime' => fn(ParseNode $n) => $o->setScheduledDateTime($n->getDateTimeValue()),
            'startedDateTime' => fn(ParseNode $n) => $o->setStartedDateTime($n->getDateTimeValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getObjectValue([User::class, 'createFromDiscriminatorValue'])),
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
     * Gets the scheduledDateTime property value. The date time that the workflow is scheduled to be executed for a user.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
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
     * Gets the startedDateTime property value. The date time that the workflow execution started. Value is null if the workflow execution has not started.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
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
     * @return User|null
    */
    public function getSubject(): ?User {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || $val instanceof User) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subject'");
    }

    /**
     * Gets the taskProcessingResults property value. The associated individual task execution.
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
     * Gets the totalTasksCount property value. The total number of tasks that in the workflow execution.
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
     * Gets the totalUnprocessedTasksCount property value. The total number of unprocessed tasks for the workflow.
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
     * Gets the workflowVersion property value. The version of the workflow that was executed.
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
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('processingStatus', $this->getProcessingStatus());
        $writer->writeDateTimeValue('scheduledDateTime', $this->getScheduledDateTime());
        $writer->writeDateTimeValue('startedDateTime', $this->getStartedDateTime());
        $writer->writeObjectValue('subject', $this->getSubject());
        $writer->writeCollectionOfObjectValues('taskProcessingResults', $this->getTaskProcessingResults());
        $writer->writeIntegerValue('totalTasksCount', $this->getTotalTasksCount());
        $writer->writeIntegerValue('totalUnprocessedTasksCount', $this->getTotalUnprocessedTasksCount());
        $writer->writeEnumValue('workflowExecutionType', $this->getWorkflowExecutionType());
        $writer->writeIntegerValue('workflowVersion', $this->getWorkflowVersion());
    }

    /**
     * Sets the completedDateTime property value. The date time that the workflow execution for a user completed. Value is null if the workflow hasn't completed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the failedTasksCount property value. The number of tasks that failed in the workflow execution.
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
     * Sets the scheduledDateTime property value. The date time that the workflow is scheduled to be executed for a user.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @param DateTime|null $value Value to set for the scheduledDateTime property.
    */
    public function setScheduledDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('scheduledDateTime', $value);
    }

    /**
     * Sets the startedDateTime property value. The date time that the workflow execution started. Value is null if the workflow execution has not started.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @param DateTime|null $value Value to set for the startedDateTime property.
    */
    public function setStartedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startedDateTime', $value);
    }

    /**
     * Sets the subject property value. The subject property
     * @param User|null $value Value to set for the subject property.
    */
    public function setSubject(?User $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the taskProcessingResults property value. The associated individual task execution.
     * @param array<TaskProcessingResult>|null $value Value to set for the taskProcessingResults property.
    */
    public function setTaskProcessingResults(?array $value): void {
        $this->getBackingStore()->set('taskProcessingResults', $value);
    }

    /**
     * Sets the totalTasksCount property value. The total number of tasks that in the workflow execution.
     * @param int|null $value Value to set for the totalTasksCount property.
    */
    public function setTotalTasksCount(?int $value): void {
        $this->getBackingStore()->set('totalTasksCount', $value);
    }

    /**
     * Sets the totalUnprocessedTasksCount property value. The total number of unprocessed tasks for the workflow.
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
     * Sets the workflowVersion property value. The version of the workflow that was executed.
     * @param int|null $value Value to set for the workflowVersion property.
    */
    public function setWorkflowVersion(?int $value): void {
        $this->getBackingStore()->set('workflowVersion', $value);
    }

}
