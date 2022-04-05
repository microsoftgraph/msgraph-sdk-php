<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerTask extends Entity 
{
    /** @var int|null $activeChecklistItemCount Number of checklist items with value set to false, representing incomplete items. */
    private ?int $activeChecklistItemCount = null;
    
    /** @var PlannerAppliedCategories|null $appliedCategories The categories to which the task has been applied. See applied Categories for possible values. */
    private ?PlannerAppliedCategories $appliedCategories = null;
    
    /** @var PlannerAssignedToTaskBoardTaskFormat|null $assignedToTaskBoardFormat Read-only. Nullable. Used to render the task correctly in the task board view when grouped by assignedTo. */
    private ?PlannerAssignedToTaskBoardTaskFormat $assignedToTaskBoardFormat = null;
    
    /** @var string|null $assigneePriority Hint used to order items of this type in a list view. The format is defined as outlined here. */
    private ?string $assigneePriority = null;
    
    /** @var PlannerAssignments|null $assignments The set of assignees the task is assigned to. */
    private ?PlannerAssignments $assignments = null;
    
    /** @var string|null $bucketId Bucket ID to which the task belongs. The bucket needs to be in the plan that the task is in. It is 28 characters long and case-sensitive. Format validation is done on the service. */
    private ?string $bucketId = null;
    
    /** @var PlannerBucketTaskBoardTaskFormat|null $bucketTaskBoardFormat Read-only. Nullable. Used to render the task correctly in the task board view when grouped by bucket. */
    private ?PlannerBucketTaskBoardTaskFormat $bucketTaskBoardFormat = null;
    
    /** @var int|null $checklistItemCount Number of checklist items that are present on the task. */
    private ?int $checklistItemCount = null;
    
    /** @var IdentitySet|null $completedBy Identity of the user that completed the task. */
    private ?IdentitySet $completedBy = null;
    
    /** @var DateTime|null $completedDateTime Read-only. Date and time at which the 'percentComplete' of the task is set to '100'. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    private ?DateTime $completedDateTime = null;
    
    /** @var string|null $conversationThreadId Thread ID of the conversation on the task. This is the ID of the conversation thread object created in the group. */
    private ?string $conversationThreadId = null;
    
    /** @var IdentitySet|null $createdBy Identity of the user that created the task. */
    private ?IdentitySet $createdBy = null;
    
    /** @var DateTime|null $createdDateTime Read-only. Date and time at which the task is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    private ?DateTime $createdDateTime = null;
    
    /** @var PlannerTaskDetails|null $details Read-only. Nullable. Additional details about the task. */
    private ?PlannerTaskDetails $details = null;
    
    /** @var DateTime|null $dueDateTime Date and time at which the task is due. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    private ?DateTime $dueDateTime = null;
    
    /** @var bool|null $hasDescription Read-only. Value is true if the details object of the task has a non-empty description and false otherwise. */
    private ?bool $hasDescription = null;
    
    /** @var string|null $orderHint Hint used to order items of this type in a list view. The format is defined as outlined here. */
    private ?string $orderHint = null;
    
    /** @var int|null $percentComplete Percentage of task completion. When set to 100, the task is considered completed. */
    private ?int $percentComplete = null;
    
    /** @var string|null $planId Plan ID to which the task belongs. */
    private ?string $planId = null;
    
    /** @var PlannerPreviewType|null $previewType This sets the type of preview that shows up on the task. The possible values are: automatic, noPreview, checklist, description, reference. */
    private ?PlannerPreviewType $previewType = null;
    
    /** @var PlannerProgressTaskBoardTaskFormat|null $progressTaskBoardFormat Read-only. Nullable. Used to render the task correctly in the task board view when grouped by progress. */
    private ?PlannerProgressTaskBoardTaskFormat $progressTaskBoardFormat = null;
    
    /** @var int|null $referenceCount Number of external references that exist on the task. */
    private ?int $referenceCount = null;
    
    /** @var DateTime|null $startDateTime Date and time at which the task starts. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    private ?DateTime $startDateTime = null;
    
    /** @var string|null $title Title of the task. */
    private ?string $title = null;
    
    /**
     * Instantiates a new plannerTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerTask
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PlannerTask {
        return new PlannerTask();
    }

    /**
     * Gets the activeChecklistItemCount property value. Number of checklist items with value set to false, representing incomplete items.
     * @return int|null
    */
    public function getActiveChecklistItemCount(): ?int {
        return $this->activeChecklistItemCount;
    }

    /**
     * Gets the appliedCategories property value. The categories to which the task has been applied. See applied Categories for possible values.
     * @return PlannerAppliedCategories|null
    */
    public function getAppliedCategories(): ?PlannerAppliedCategories {
        return $this->appliedCategories;
    }

    /**
     * Gets the assignedToTaskBoardFormat property value. Read-only. Nullable. Used to render the task correctly in the task board view when grouped by assignedTo.
     * @return PlannerAssignedToTaskBoardTaskFormat|null
    */
    public function getAssignedToTaskBoardFormat(): ?PlannerAssignedToTaskBoardTaskFormat {
        return $this->assignedToTaskBoardFormat;
    }

    /**
     * Gets the assigneePriority property value. Hint used to order items of this type in a list view. The format is defined as outlined here.
     * @return string|null
    */
    public function getAssigneePriority(): ?string {
        return $this->assigneePriority;
    }

    /**
     * Gets the assignments property value. The set of assignees the task is assigned to.
     * @return PlannerAssignments|null
    */
    public function getAssignments(): ?PlannerAssignments {
        return $this->assignments;
    }

    /**
     * Gets the bucketId property value. Bucket ID to which the task belongs. The bucket needs to be in the plan that the task is in. It is 28 characters long and case-sensitive. Format validation is done on the service.
     * @return string|null
    */
    public function getBucketId(): ?string {
        return $this->bucketId;
    }

    /**
     * Gets the bucketTaskBoardFormat property value. Read-only. Nullable. Used to render the task correctly in the task board view when grouped by bucket.
     * @return PlannerBucketTaskBoardTaskFormat|null
    */
    public function getBucketTaskBoardFormat(): ?PlannerBucketTaskBoardTaskFormat {
        return $this->bucketTaskBoardFormat;
    }

    /**
     * Gets the checklistItemCount property value. Number of checklist items that are present on the task.
     * @return int|null
    */
    public function getChecklistItemCount(): ?int {
        return $this->checklistItemCount;
    }

    /**
     * Gets the completedBy property value. Identity of the user that completed the task.
     * @return IdentitySet|null
    */
    public function getCompletedBy(): ?IdentitySet {
        return $this->completedBy;
    }

    /**
     * Gets the completedDateTime property value. Read-only. Date and time at which the 'percentComplete' of the task is set to '100'. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        return $this->completedDateTime;
    }

    /**
     * Gets the conversationThreadId property value. Thread ID of the conversation on the task. This is the ID of the conversation thread object created in the group.
     * @return string|null
    */
    public function getConversationThreadId(): ?string {
        return $this->conversationThreadId;
    }

    /**
     * Gets the createdBy property value. Identity of the user that created the task.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. Read-only. Date and time at which the task is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the details property value. Read-only. Nullable. Additional details about the task.
     * @return PlannerTaskDetails|null
    */
    public function getDetails(): ?PlannerTaskDetails {
        return $this->details;
    }

    /**
     * Gets the dueDateTime property value. Date and time at which the task is due. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getDueDateTime(): ?DateTime {
        return $this->dueDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'activeChecklistItemCount' => function (self $o, ParseNode $n) { $o->setActiveChecklistItemCount($n->getIntegerValue()); },
            'appliedCategories' => function (self $o, ParseNode $n) { $o->setAppliedCategories($n->getObjectValue(PlannerAppliedCategories::class)); },
            'assignedToTaskBoardFormat' => function (self $o, ParseNode $n) { $o->setAssignedToTaskBoardFormat($n->getObjectValue(PlannerAssignedToTaskBoardTaskFormat::class)); },
            'assigneePriority' => function (self $o, ParseNode $n) { $o->setAssigneePriority($n->getStringValue()); },
            'assignments' => function (self $o, ParseNode $n) { $o->setAssignments($n->getObjectValue(PlannerAssignments::class)); },
            'bucketId' => function (self $o, ParseNode $n) { $o->setBucketId($n->getStringValue()); },
            'bucketTaskBoardFormat' => function (self $o, ParseNode $n) { $o->setBucketTaskBoardFormat($n->getObjectValue(PlannerBucketTaskBoardTaskFormat::class)); },
            'checklistItemCount' => function (self $o, ParseNode $n) { $o->setChecklistItemCount($n->getIntegerValue()); },
            'completedBy' => function (self $o, ParseNode $n) { $o->setCompletedBy($n->getObjectValue(IdentitySet::class)); },
            'completedDateTime' => function (self $o, ParseNode $n) { $o->setCompletedDateTime($n->getDateTimeValue()); },
            'conversationThreadId' => function (self $o, ParseNode $n) { $o->setConversationThreadId($n->getStringValue()); },
            'createdBy' => function (self $o, ParseNode $n) { $o->setCreatedBy($n->getObjectValue(IdentitySet::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'details' => function (self $o, ParseNode $n) { $o->setDetails($n->getObjectValue(PlannerTaskDetails::class)); },
            'dueDateTime' => function (self $o, ParseNode $n) { $o->setDueDateTime($n->getDateTimeValue()); },
            'hasDescription' => function (self $o, ParseNode $n) { $o->setHasDescription($n->getBooleanValue()); },
            'orderHint' => function (self $o, ParseNode $n) { $o->setOrderHint($n->getStringValue()); },
            'percentComplete' => function (self $o, ParseNode $n) { $o->setPercentComplete($n->getIntegerValue()); },
            'planId' => function (self $o, ParseNode $n) { $o->setPlanId($n->getStringValue()); },
            'previewType' => function (self $o, ParseNode $n) { $o->setPreviewType($n->getEnumValue(PlannerPreviewType::class)); },
            'progressTaskBoardFormat' => function (self $o, ParseNode $n) { $o->setProgressTaskBoardFormat($n->getObjectValue(PlannerProgressTaskBoardTaskFormat::class)); },
            'referenceCount' => function (self $o, ParseNode $n) { $o->setReferenceCount($n->getIntegerValue()); },
            'startDateTime' => function (self $o, ParseNode $n) { $o->setStartDateTime($n->getDateTimeValue()); },
            'title' => function (self $o, ParseNode $n) { $o->setTitle($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the hasDescription property value. Read-only. Value is true if the details object of the task has a non-empty description and false otherwise.
     * @return bool|null
    */
    public function getHasDescription(): ?bool {
        return $this->hasDescription;
    }

    /**
     * Gets the orderHint property value. Hint used to order items of this type in a list view. The format is defined as outlined here.
     * @return string|null
    */
    public function getOrderHint(): ?string {
        return $this->orderHint;
    }

    /**
     * Gets the percentComplete property value. Percentage of task completion. When set to 100, the task is considered completed.
     * @return int|null
    */
    public function getPercentComplete(): ?int {
        return $this->percentComplete;
    }

    /**
     * Gets the planId property value. Plan ID to which the task belongs.
     * @return string|null
    */
    public function getPlanId(): ?string {
        return $this->planId;
    }

    /**
     * Gets the previewType property value. This sets the type of preview that shows up on the task. The possible values are: automatic, noPreview, checklist, description, reference.
     * @return PlannerPreviewType|null
    */
    public function getPreviewType(): ?PlannerPreviewType {
        return $this->previewType;
    }

    /**
     * Gets the progressTaskBoardFormat property value. Read-only. Nullable. Used to render the task correctly in the task board view when grouped by progress.
     * @return PlannerProgressTaskBoardTaskFormat|null
    */
    public function getProgressTaskBoardFormat(): ?PlannerProgressTaskBoardTaskFormat {
        return $this->progressTaskBoardFormat;
    }

    /**
     * Gets the referenceCount property value. Number of external references that exist on the task.
     * @return int|null
    */
    public function getReferenceCount(): ?int {
        return $this->referenceCount;
    }

    /**
     * Gets the startDateTime property value. Date and time at which the task starts. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the title property value. Title of the task.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('activeChecklistItemCount', $this->activeChecklistItemCount);
        $writer->writeObjectValue('appliedCategories', $this->appliedCategories);
        $writer->writeObjectValue('assignedToTaskBoardFormat', $this->assignedToTaskBoardFormat);
        $writer->writeStringValue('assigneePriority', $this->assigneePriority);
        $writer->writeObjectValue('assignments', $this->assignments);
        $writer->writeStringValue('bucketId', $this->bucketId);
        $writer->writeObjectValue('bucketTaskBoardFormat', $this->bucketTaskBoardFormat);
        $writer->writeIntegerValue('checklistItemCount', $this->checklistItemCount);
        $writer->writeObjectValue('completedBy', $this->completedBy);
        $writer->writeDateTimeValue('completedDateTime', $this->completedDateTime);
        $writer->writeStringValue('conversationThreadId', $this->conversationThreadId);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('details', $this->details);
        $writer->writeDateTimeValue('dueDateTime', $this->dueDateTime);
        $writer->writeBooleanValue('hasDescription', $this->hasDescription);
        $writer->writeStringValue('orderHint', $this->orderHint);
        $writer->writeIntegerValue('percentComplete', $this->percentComplete);
        $writer->writeStringValue('planId', $this->planId);
        $writer->writeEnumValue('previewType', $this->previewType);
        $writer->writeObjectValue('progressTaskBoardFormat', $this->progressTaskBoardFormat);
        $writer->writeIntegerValue('referenceCount', $this->referenceCount);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeStringValue('title', $this->title);
    }

    /**
     * Sets the activeChecklistItemCount property value. Number of checklist items with value set to false, representing incomplete items.
     *  @param int|null $value Value to set for the activeChecklistItemCount property.
    */
    public function setActiveChecklistItemCount(?int $value ): void {
        $this->activeChecklistItemCount = $value;
    }

    /**
     * Sets the appliedCategories property value. The categories to which the task has been applied. See applied Categories for possible values.
     *  @param PlannerAppliedCategories|null $value Value to set for the appliedCategories property.
    */
    public function setAppliedCategories(?PlannerAppliedCategories $value ): void {
        $this->appliedCategories = $value;
    }

    /**
     * Sets the assignedToTaskBoardFormat property value. Read-only. Nullable. Used to render the task correctly in the task board view when grouped by assignedTo.
     *  @param PlannerAssignedToTaskBoardTaskFormat|null $value Value to set for the assignedToTaskBoardFormat property.
    */
    public function setAssignedToTaskBoardFormat(?PlannerAssignedToTaskBoardTaskFormat $value ): void {
        $this->assignedToTaskBoardFormat = $value;
    }

    /**
     * Sets the assigneePriority property value. Hint used to order items of this type in a list view. The format is defined as outlined here.
     *  @param string|null $value Value to set for the assigneePriority property.
    */
    public function setAssigneePriority(?string $value ): void {
        $this->assigneePriority = $value;
    }

    /**
     * Sets the assignments property value. The set of assignees the task is assigned to.
     *  @param PlannerAssignments|null $value Value to set for the assignments property.
    */
    public function setAssignments(?PlannerAssignments $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the bucketId property value. Bucket ID to which the task belongs. The bucket needs to be in the plan that the task is in. It is 28 characters long and case-sensitive. Format validation is done on the service.
     *  @param string|null $value Value to set for the bucketId property.
    */
    public function setBucketId(?string $value ): void {
        $this->bucketId = $value;
    }

    /**
     * Sets the bucketTaskBoardFormat property value. Read-only. Nullable. Used to render the task correctly in the task board view when grouped by bucket.
     *  @param PlannerBucketTaskBoardTaskFormat|null $value Value to set for the bucketTaskBoardFormat property.
    */
    public function setBucketTaskBoardFormat(?PlannerBucketTaskBoardTaskFormat $value ): void {
        $this->bucketTaskBoardFormat = $value;
    }

    /**
     * Sets the checklistItemCount property value. Number of checklist items that are present on the task.
     *  @param int|null $value Value to set for the checklistItemCount property.
    */
    public function setChecklistItemCount(?int $value ): void {
        $this->checklistItemCount = $value;
    }

    /**
     * Sets the completedBy property value. Identity of the user that completed the task.
     *  @param IdentitySet|null $value Value to set for the completedBy property.
    */
    public function setCompletedBy(?IdentitySet $value ): void {
        $this->completedBy = $value;
    }

    /**
     * Sets the completedDateTime property value. Read-only. Date and time at which the 'percentComplete' of the task is set to '100'. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value ): void {
        $this->completedDateTime = $value;
    }

    /**
     * Sets the conversationThreadId property value. Thread ID of the conversation on the task. This is the ID of the conversation thread object created in the group.
     *  @param string|null $value Value to set for the conversationThreadId property.
    */
    public function setConversationThreadId(?string $value ): void {
        $this->conversationThreadId = $value;
    }

    /**
     * Sets the createdBy property value. Identity of the user that created the task.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. Read-only. Date and time at which the task is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the details property value. Read-only. Nullable. Additional details about the task.
     *  @param PlannerTaskDetails|null $value Value to set for the details property.
    */
    public function setDetails(?PlannerTaskDetails $value ): void {
        $this->details = $value;
    }

    /**
     * Sets the dueDateTime property value. Date and time at which the task is due. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTime $value ): void {
        $this->dueDateTime = $value;
    }

    /**
     * Sets the hasDescription property value. Read-only. Value is true if the details object of the task has a non-empty description and false otherwise.
     *  @param bool|null $value Value to set for the hasDescription property.
    */
    public function setHasDescription(?bool $value ): void {
        $this->hasDescription = $value;
    }

    /**
     * Sets the orderHint property value. Hint used to order items of this type in a list view. The format is defined as outlined here.
     *  @param string|null $value Value to set for the orderHint property.
    */
    public function setOrderHint(?string $value ): void {
        $this->orderHint = $value;
    }

    /**
     * Sets the percentComplete property value. Percentage of task completion. When set to 100, the task is considered completed.
     *  @param int|null $value Value to set for the percentComplete property.
    */
    public function setPercentComplete(?int $value ): void {
        $this->percentComplete = $value;
    }

    /**
     * Sets the planId property value. Plan ID to which the task belongs.
     *  @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value ): void {
        $this->planId = $value;
    }

    /**
     * Sets the previewType property value. This sets the type of preview that shows up on the task. The possible values are: automatic, noPreview, checklist, description, reference.
     *  @param PlannerPreviewType|null $value Value to set for the previewType property.
    */
    public function setPreviewType(?PlannerPreviewType $value ): void {
        $this->previewType = $value;
    }

    /**
     * Sets the progressTaskBoardFormat property value. Read-only. Nullable. Used to render the task correctly in the task board view when grouped by progress.
     *  @param PlannerProgressTaskBoardTaskFormat|null $value Value to set for the progressTaskBoardFormat property.
    */
    public function setProgressTaskBoardFormat(?PlannerProgressTaskBoardTaskFormat $value ): void {
        $this->progressTaskBoardFormat = $value;
    }

    /**
     * Sets the referenceCount property value. Number of external references that exist on the task.
     *  @param int|null $value Value to set for the referenceCount property.
    */
    public function setReferenceCount(?int $value ): void {
        $this->referenceCount = $value;
    }

    /**
     * Sets the startDateTime property value. Date and time at which the task starts. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the title property value. Title of the task.
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

}
