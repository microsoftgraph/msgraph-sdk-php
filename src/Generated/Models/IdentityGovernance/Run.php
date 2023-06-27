<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Run extends Entity implements Parsable 
{
    /**
     * Instantiates a new run and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Run
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Run {
        return new Run();
    }

    /**
     * Gets the completedDateTime property value. The date time that the run completed. Value is null if the workflow hasn't completed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('completedDateTime');
    }

    /**
     * Gets the failedTasksCount property value. The number of tasks that failed in the run execution.
     * @return int|null
    */
    public function getFailedTasksCount(): ?int {
        return $this->getBackingStore()->get('failedTasksCount');
    }

    /**
     * Gets the failedUsersCount property value. The number of users that failed in the run execution.
     * @return int|null
    */
    public function getFailedUsersCount(): ?int {
        return $this->getBackingStore()->get('failedUsersCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'failedTasksCount' => fn(ParseNode $n) => $o->setFailedTasksCount($n->getIntegerValue()),
            'failedUsersCount' => fn(ParseNode $n) => $o->setFailedUsersCount($n->getIntegerValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'processingStatus' => fn(ParseNode $n) => $o->setProcessingStatus($n->getEnumValue(LifecycleWorkflowProcessingStatus::class)),
            'scheduledDateTime' => fn(ParseNode $n) => $o->setScheduledDateTime($n->getDateTimeValue()),
            'startedDateTime' => fn(ParseNode $n) => $o->setStartedDateTime($n->getDateTimeValue()),
            'successfulUsersCount' => fn(ParseNode $n) => $o->setSuccessfulUsersCount($n->getIntegerValue()),
            'taskProcessingResults' => fn(ParseNode $n) => $o->setTaskProcessingResults($n->getCollectionOfObjectValues([TaskProcessingResult::class, 'createFromDiscriminatorValue'])),
            'totalTasksCount' => fn(ParseNode $n) => $o->setTotalTasksCount($n->getIntegerValue()),
            'totalUnprocessedTasksCount' => fn(ParseNode $n) => $o->setTotalUnprocessedTasksCount($n->getIntegerValue()),
            'totalUsersCount' => fn(ParseNode $n) => $o->setTotalUsersCount($n->getIntegerValue()),
            'userProcessingResults' => fn(ParseNode $n) => $o->setUserProcessingResults($n->getCollectionOfObjectValues([UserProcessingResult::class, 'createFromDiscriminatorValue'])),
            'workflowExecutionType' => fn(ParseNode $n) => $o->setWorkflowExecutionType($n->getEnumValue(WorkflowExecutionType::class)),
        ]);
    }

    /**
     * Gets the lastUpdatedDateTime property value. The datetime that the run was last updated.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastUpdatedDateTime');
    }

    /**
     * Gets the processingStatus property value. The processingStatus property
     * @return LifecycleWorkflowProcessingStatus|null
    */
    public function getProcessingStatus(): ?LifecycleWorkflowProcessingStatus {
        return $this->getBackingStore()->get('processingStatus');
    }

    /**
     * Gets the scheduledDateTime property value. The date time that the run is scheduled to be executed for a workflow.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @return DateTime|null
    */
    public function getScheduledDateTime(): ?DateTime {
        return $this->getBackingStore()->get('scheduledDateTime');
    }

    /**
     * Gets the startedDateTime property value. The date time that the run execution started.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @return DateTime|null
    */
    public function getStartedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startedDateTime');
    }

    /**
     * Gets the successfulUsersCount property value. The number of successfully completed users in the run.
     * @return int|null
    */
    public function getSuccessfulUsersCount(): ?int {
        return $this->getBackingStore()->get('successfulUsersCount');
    }

    /**
     * Gets the taskProcessingResults property value. The related taskProcessingResults.
     * @return array<TaskProcessingResult>|null
    */
    public function getTaskProcessingResults(): ?array {
        return $this->getBackingStore()->get('taskProcessingResults');
    }

    /**
     * Gets the totalTasksCount property value. The totalTasksCount property
     * @return int|null
    */
    public function getTotalTasksCount(): ?int {
        return $this->getBackingStore()->get('totalTasksCount');
    }

    /**
     * Gets the totalUnprocessedTasksCount property value. The total number of unprocessed tasks in the run execution.
     * @return int|null
    */
    public function getTotalUnprocessedTasksCount(): ?int {
        return $this->getBackingStore()->get('totalUnprocessedTasksCount');
    }

    /**
     * Gets the totalUsersCount property value. The total number of users in the workflow execution.
     * @return int|null
    */
    public function getTotalUsersCount(): ?int {
        return $this->getBackingStore()->get('totalUsersCount');
    }

    /**
     * Gets the userProcessingResults property value. The associated individual user execution.
     * @return array<UserProcessingResult>|null
    */
    public function getUserProcessingResults(): ?array {
        return $this->getBackingStore()->get('userProcessingResults');
    }

    /**
     * Gets the workflowExecutionType property value. The workflowExecutionType property
     * @return WorkflowExecutionType|null
    */
    public function getWorkflowExecutionType(): ?WorkflowExecutionType {
        return $this->getBackingStore()->get('workflowExecutionType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeIntegerValue('failedTasksCount', $this->getFailedTasksCount());
        $writer->writeIntegerValue('failedUsersCount', $this->getFailedUsersCount());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeEnumValue('processingStatus', $this->getProcessingStatus());
        $writer->writeDateTimeValue('scheduledDateTime', $this->getScheduledDateTime());
        $writer->writeDateTimeValue('startedDateTime', $this->getStartedDateTime());
        $writer->writeIntegerValue('successfulUsersCount', $this->getSuccessfulUsersCount());
        $writer->writeCollectionOfObjectValues('taskProcessingResults', $this->getTaskProcessingResults());
        $writer->writeIntegerValue('totalTasksCount', $this->getTotalTasksCount());
        $writer->writeIntegerValue('totalUnprocessedTasksCount', $this->getTotalUnprocessedTasksCount());
        $writer->writeIntegerValue('totalUsersCount', $this->getTotalUsersCount());
        $writer->writeCollectionOfObjectValues('userProcessingResults', $this->getUserProcessingResults());
        $writer->writeEnumValue('workflowExecutionType', $this->getWorkflowExecutionType());
    }

    /**
     * Sets the completedDateTime property value. The date time that the run completed. Value is null if the workflow hasn't completed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the failedTasksCount property value. The number of tasks that failed in the run execution.
     * @param int|null $value Value to set for the failedTasksCount property.
    */
    public function setFailedTasksCount(?int $value): void {
        $this->getBackingStore()->set('failedTasksCount', $value);
    }

    /**
     * Sets the failedUsersCount property value. The number of users that failed in the run execution.
     * @param int|null $value Value to set for the failedUsersCount property.
    */
    public function setFailedUsersCount(?int $value): void {
        $this->getBackingStore()->set('failedUsersCount', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. The datetime that the run was last updated.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the processingStatus property value. The processingStatus property
     * @param LifecycleWorkflowProcessingStatus|null $value Value to set for the processingStatus property.
    */
    public function setProcessingStatus(?LifecycleWorkflowProcessingStatus $value): void {
        $this->getBackingStore()->set('processingStatus', $value);
    }

    /**
     * Sets the scheduledDateTime property value. The date time that the run is scheduled to be executed for a workflow.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @param DateTime|null $value Value to set for the scheduledDateTime property.
    */
    public function setScheduledDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('scheduledDateTime', $value);
    }

    /**
     * Sets the startedDateTime property value. The date time that the run execution started.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @param DateTime|null $value Value to set for the startedDateTime property.
    */
    public function setStartedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startedDateTime', $value);
    }

    /**
     * Sets the successfulUsersCount property value. The number of successfully completed users in the run.
     * @param int|null $value Value to set for the successfulUsersCount property.
    */
    public function setSuccessfulUsersCount(?int $value): void {
        $this->getBackingStore()->set('successfulUsersCount', $value);
    }

    /**
     * Sets the taskProcessingResults property value. The related taskProcessingResults.
     * @param array<TaskProcessingResult>|null $value Value to set for the taskProcessingResults property.
    */
    public function setTaskProcessingResults(?array $value): void {
        $this->getBackingStore()->set('taskProcessingResults', $value);
    }

    /**
     * Sets the totalTasksCount property value. The totalTasksCount property
     * @param int|null $value Value to set for the totalTasksCount property.
    */
    public function setTotalTasksCount(?int $value): void {
        $this->getBackingStore()->set('totalTasksCount', $value);
    }

    /**
     * Sets the totalUnprocessedTasksCount property value. The total number of unprocessed tasks in the run execution.
     * @param int|null $value Value to set for the totalUnprocessedTasksCount property.
    */
    public function setTotalUnprocessedTasksCount(?int $value): void {
        $this->getBackingStore()->set('totalUnprocessedTasksCount', $value);
    }

    /**
     * Sets the totalUsersCount property value. The total number of users in the workflow execution.
     * @param int|null $value Value to set for the totalUsersCount property.
    */
    public function setTotalUsersCount(?int $value): void {
        $this->getBackingStore()->set('totalUsersCount', $value);
    }

    /**
     * Sets the userProcessingResults property value. The associated individual user execution.
     * @param array<UserProcessingResult>|null $value Value to set for the userProcessingResults property.
    */
    public function setUserProcessingResults(?array $value): void {
        $this->getBackingStore()->set('userProcessingResults', $value);
    }

    /**
     * Sets the workflowExecutionType property value. The workflowExecutionType property
     * @param WorkflowExecutionType|null $value Value to set for the workflowExecutionType property.
    */
    public function setWorkflowExecutionType(?WorkflowExecutionType $value): void {
        $this->getBackingStore()->set('workflowExecutionType', $value);
    }

}
