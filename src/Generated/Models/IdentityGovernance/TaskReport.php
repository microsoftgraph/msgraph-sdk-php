<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TaskReport extends Entity implements Parsable 
{
    /**
     * Instantiates a new taskReport and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaskReport
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaskReport {
        return new TaskReport();
    }

    /**
     * Gets the completedDateTime property value. The date time that the associated run completed. Value is null if the run has not completed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('completedDateTime');
    }

    /**
     * Gets the failedUsersCount property value. The number of users in the run execution for which the associated task failed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
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
            'failedUsersCount' => fn(ParseNode $n) => $o->setFailedUsersCount($n->getIntegerValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'processingStatus' => fn(ParseNode $n) => $o->setProcessingStatus($n->getEnumValue(LifecycleWorkflowProcessingStatus::class)),
            'runId' => fn(ParseNode $n) => $o->setRunId($n->getStringValue()),
            'startedDateTime' => fn(ParseNode $n) => $o->setStartedDateTime($n->getDateTimeValue()),
            'successfulUsersCount' => fn(ParseNode $n) => $o->setSuccessfulUsersCount($n->getIntegerValue()),
            'task' => fn(ParseNode $n) => $o->setTask($n->getObjectValue([Task::class, 'createFromDiscriminatorValue'])),
            'taskDefinition' => fn(ParseNode $n) => $o->setTaskDefinition($n->getObjectValue([TaskDefinition::class, 'createFromDiscriminatorValue'])),
            'taskProcessingResults' => fn(ParseNode $n) => $o->setTaskProcessingResults($n->getCollectionOfObjectValues([TaskProcessingResult::class, 'createFromDiscriminatorValue'])),
            'totalUsersCount' => fn(ParseNode $n) => $o->setTotalUsersCount($n->getIntegerValue()),
            'unprocessedUsersCount' => fn(ParseNode $n) => $o->setUnprocessedUsersCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the lastUpdatedDateTime property value. The date and time that the task report was last updated.
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
     * Gets the runId property value. The unique identifier of the associated run.
     * @return string|null
    */
    public function getRunId(): ?string {
        return $this->getBackingStore()->get('runId');
    }

    /**
     * Gets the startedDateTime property value. The date time that the associated run started. Value is null if the run has not started.
     * @return DateTime|null
    */
    public function getStartedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startedDateTime');
    }

    /**
     * Gets the successfulUsersCount property value. The number of users in the run execution for which the associated task succeeded.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @return int|null
    */
    public function getSuccessfulUsersCount(): ?int {
        return $this->getBackingStore()->get('successfulUsersCount');
    }

    /**
     * Gets the task property value. The task property
     * @return Task|null
    */
    public function getTask(): ?Task {
        return $this->getBackingStore()->get('task');
    }

    /**
     * Gets the taskDefinition property value. The taskDefinition property
     * @return TaskDefinition|null
    */
    public function getTaskDefinition(): ?TaskDefinition {
        return $this->getBackingStore()->get('taskDefinition');
    }

    /**
     * Gets the taskProcessingResults property value. The related lifecycle workflow taskProcessingResults.
     * @return array<TaskProcessingResult>|null
    */
    public function getTaskProcessingResults(): ?array {
        return $this->getBackingStore()->get('taskProcessingResults');
    }

    /**
     * Gets the totalUsersCount property value. The total number of users in the run execution for which the associated task was scheduled to execute.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @return int|null
    */
    public function getTotalUsersCount(): ?int {
        return $this->getBackingStore()->get('totalUsersCount');
    }

    /**
     * Gets the unprocessedUsersCount property value. The number of users in the run execution for which the associated task is queued, in progress, or canceled.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @return int|null
    */
    public function getUnprocessedUsersCount(): ?int {
        return $this->getBackingStore()->get('unprocessedUsersCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeIntegerValue('failedUsersCount', $this->getFailedUsersCount());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeEnumValue('processingStatus', $this->getProcessingStatus());
        $writer->writeStringValue('runId', $this->getRunId());
        $writer->writeDateTimeValue('startedDateTime', $this->getStartedDateTime());
        $writer->writeIntegerValue('successfulUsersCount', $this->getSuccessfulUsersCount());
        $writer->writeObjectValue('task', $this->getTask());
        $writer->writeObjectValue('taskDefinition', $this->getTaskDefinition());
        $writer->writeCollectionOfObjectValues('taskProcessingResults', $this->getTaskProcessingResults());
        $writer->writeIntegerValue('totalUsersCount', $this->getTotalUsersCount());
        $writer->writeIntegerValue('unprocessedUsersCount', $this->getUnprocessedUsersCount());
    }

    /**
     * Sets the completedDateTime property value. The date time that the associated run completed. Value is null if the run has not completed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the failedUsersCount property value. The number of users in the run execution for which the associated task failed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @param int|null $value Value to set for the failedUsersCount property.
    */
    public function setFailedUsersCount(?int $value): void {
        $this->getBackingStore()->set('failedUsersCount', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. The date and time that the task report was last updated.
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
     * Sets the runId property value. The unique identifier of the associated run.
     * @param string|null $value Value to set for the runId property.
    */
    public function setRunId(?string $value): void {
        $this->getBackingStore()->set('runId', $value);
    }

    /**
     * Sets the startedDateTime property value. The date time that the associated run started. Value is null if the run has not started.
     * @param DateTime|null $value Value to set for the startedDateTime property.
    */
    public function setStartedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startedDateTime', $value);
    }

    /**
     * Sets the successfulUsersCount property value. The number of users in the run execution for which the associated task succeeded.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @param int|null $value Value to set for the successfulUsersCount property.
    */
    public function setSuccessfulUsersCount(?int $value): void {
        $this->getBackingStore()->set('successfulUsersCount', $value);
    }

    /**
     * Sets the task property value. The task property
     * @param Task|null $value Value to set for the task property.
    */
    public function setTask(?Task $value): void {
        $this->getBackingStore()->set('task', $value);
    }

    /**
     * Sets the taskDefinition property value. The taskDefinition property
     * @param TaskDefinition|null $value Value to set for the taskDefinition property.
    */
    public function setTaskDefinition(?TaskDefinition $value): void {
        $this->getBackingStore()->set('taskDefinition', $value);
    }

    /**
     * Sets the taskProcessingResults property value. The related lifecycle workflow taskProcessingResults.
     * @param array<TaskProcessingResult>|null $value Value to set for the taskProcessingResults property.
    */
    public function setTaskProcessingResults(?array $value): void {
        $this->getBackingStore()->set('taskProcessingResults', $value);
    }

    /**
     * Sets the totalUsersCount property value. The total number of users in the run execution for which the associated task was scheduled to execute.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @param int|null $value Value to set for the totalUsersCount property.
    */
    public function setTotalUsersCount(?int $value): void {
        $this->getBackingStore()->set('totalUsersCount', $value);
    }

    /**
     * Sets the unprocessedUsersCount property value. The number of users in the run execution for which the associated task is queued, in progress, or canceled.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @param int|null $value Value to set for the unprocessedUsersCount property.
    */
    public function setUnprocessedUsersCount(?int $value): void {
        $this->getBackingStore()->set('unprocessedUsersCount', $value);
    }

}
