<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
        $val = $this->getBackingStore()->get('completedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedDateTime'");
    }

    /**
     * Gets the failedUsersCount property value. The number of users in the run execution for which the associated task failed.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @return int|null
    */
    public function getFailedUsersCount(): ?int {
        $val = $this->getBackingStore()->get('failedUsersCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedUsersCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'failedUsersCount' => fn(ParseNode $n) => $o->setFailedUsersCount($n->getIntegerValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
        $val = $this->getBackingStore()->get('lastUpdatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUpdatedDateTime'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
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
     * Gets the runId property value. The unique identifier of the associated run.
     * @return string|null
    */
    public function getRunId(): ?string {
        $val = $this->getBackingStore()->get('runId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runId'");
    }

    /**
     * Gets the startedDateTime property value. The date time that the associated run started. Value is null if the run has not started.
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
     * Gets the successfulUsersCount property value. The number of users in the run execution for which the associated task succeeded.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @return int|null
    */
    public function getSuccessfulUsersCount(): ?int {
        $val = $this->getBackingStore()->get('successfulUsersCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'successfulUsersCount'");
    }

    /**
     * Gets the task property value. The task property
     * @return Task|null
    */
    public function getTask(): ?Task {
        $val = $this->getBackingStore()->get('task');
        if (is_null($val) || $val instanceof Task) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'task'");
    }

    /**
     * Gets the taskDefinition property value. The taskDefinition property
     * @return TaskDefinition|null
    */
    public function getTaskDefinition(): ?TaskDefinition {
        $val = $this->getBackingStore()->get('taskDefinition');
        if (is_null($val) || $val instanceof TaskDefinition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taskDefinition'");
    }

    /**
     * Gets the taskProcessingResults property value. The related lifecycle workflow taskProcessingResults.
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
     * Gets the totalUsersCount property value. The total number of users in the run execution for which the associated task was scheduled to execute.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @return int|null
    */
    public function getTotalUsersCount(): ?int {
        $val = $this->getBackingStore()->get('totalUsersCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalUsersCount'");
    }

    /**
     * Gets the unprocessedUsersCount property value. The number of users in the run execution for which the associated task is queued, in progress, or canceled.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @return int|null
    */
    public function getUnprocessedUsersCount(): ?int {
        $val = $this->getBackingStore()->get('unprocessedUsersCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unprocessedUsersCount'");
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
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
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
