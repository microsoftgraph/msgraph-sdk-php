<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Graph\Generated\Models\User;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TaskProcessingResult extends Entity implements Parsable 
{
    /**
     * Instantiates a new taskProcessingResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaskProcessingResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaskProcessingResult {
        return new TaskProcessingResult();
    }

    /**
     * Gets the completedDateTime property value. The date time when taskProcessingResult execution ended. Value is null if task execution is still in progress.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('completedDateTime');
    }

    /**
     * Gets the createdDateTime property value. The date time when the taskProcessingResult was created.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the failureReason property value. Describes why the taskProcessingResult has failed.
     * @return string|null
    */
    public function getFailureReason(): ?string {
        return $this->getBackingStore()->get('failureReason');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'failureReason' => fn(ParseNode $n) => $o->setFailureReason($n->getStringValue()),
            'processingStatus' => fn(ParseNode $n) => $o->setProcessingStatus($n->getEnumValue(LifecycleWorkflowProcessingStatus::class)),
            'startedDateTime' => fn(ParseNode $n) => $o->setStartedDateTime($n->getDateTimeValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getObjectValue([User::class, 'createFromDiscriminatorValue'])),
            'task' => fn(ParseNode $n) => $o->setTask($n->getObjectValue([Task::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the processingStatus property value. The processingStatus property
     * @return LifecycleWorkflowProcessingStatus|null
    */
    public function getProcessingStatus(): ?LifecycleWorkflowProcessingStatus {
        return $this->getBackingStore()->get('processingStatus');
    }

    /**
     * Gets the startedDateTime property value. The date time when taskProcessingResult execution started. Value is null if task execution has not yet started.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @return DateTime|null
    */
    public function getStartedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startedDateTime');
    }

    /**
     * Gets the subject property value. The subject property
     * @return User|null
    */
    public function getSubject(): ?User {
        return $this->getBackingStore()->get('subject');
    }

    /**
     * Gets the task property value. The task property
     * @return Task|null
    */
    public function getTask(): ?Task {
        return $this->getBackingStore()->get('task');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('failureReason', $this->getFailureReason());
        $writer->writeEnumValue('processingStatus', $this->getProcessingStatus());
        $writer->writeDateTimeValue('startedDateTime', $this->getStartedDateTime());
        $writer->writeObjectValue('subject', $this->getSubject());
        $writer->writeObjectValue('task', $this->getTask());
    }

    /**
     * Sets the completedDateTime property value. The date time when taskProcessingResult execution ended. Value is null if task execution is still in progress.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the createdDateTime property value. The date time when the taskProcessingResult was created.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the failureReason property value. Describes why the taskProcessingResult has failed.
     * @param string|null $value Value to set for the failureReason property.
    */
    public function setFailureReason(?string $value): void {
        $this->getBackingStore()->set('failureReason', $value);
    }

    /**
     * Sets the processingStatus property value. The processingStatus property
     * @param LifecycleWorkflowProcessingStatus|null $value Value to set for the processingStatus property.
    */
    public function setProcessingStatus(?LifecycleWorkflowProcessingStatus $value): void {
        $this->getBackingStore()->set('processingStatus', $value);
    }

    /**
     * Sets the startedDateTime property value. The date time when taskProcessingResult execution started. Value is null if task execution has not yet started.Supports $filter(lt, le, gt, ge, eq, ne) and $orderby.
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
     * Sets the task property value. The task property
     * @param Task|null $value Value to set for the task property.
    */
    public function setTask(?Task $value): void {
        $this->getBackingStore()->set('task', $value);
    }

}
