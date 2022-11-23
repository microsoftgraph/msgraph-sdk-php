<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerTask extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerTask {
        return new PlannerTask();
    }

    /**
     * Gets the activeChecklistItemCount property value. Number of checklist items with value set to false, representing incomplete items.
     * @return int|null
    */
    public function getActiveChecklistItemCount(): ?int {
        return $this->getBackingStore()->get('activeChecklistItemCount');
    }

    /**
     * Gets the appliedCategories property value. The categories to which the task has been applied. See applied Categories for possible values.
     * @return PlannerAppliedCategories|null
    */
    public function getAppliedCategories(): ?PlannerAppliedCategories {
        return $this->getBackingStore()->get('appliedCategories');
    }

    /**
     * Gets the assignedToTaskBoardFormat property value. Read-only. Nullable. Used to render the task correctly in the task board view when grouped by assignedTo.
     * @return PlannerAssignedToTaskBoardTaskFormat|null
    */
    public function getAssignedToTaskBoardFormat(): ?PlannerAssignedToTaskBoardTaskFormat {
        return $this->getBackingStore()->get('assignedToTaskBoardFormat');
    }

    /**
     * Gets the assigneePriority property value. Hint used to order items of this type in a list view. The format is defined as outlined here.
     * @return string|null
    */
    public function getAssigneePriority(): ?string {
        return $this->getBackingStore()->get('assigneePriority');
    }

    /**
     * Gets the assignments property value. The set of assignees the task is assigned to.
     * @return PlannerAssignments|null
    */
    public function getAssignments(): ?PlannerAssignments {
        return $this->getBackingStore()->get('assignments');
    }

    /**
     * Gets the bucketId property value. Bucket ID to which the task belongs. The bucket needs to be in the plan that the task is in. It is 28 characters long and case-sensitive. Format validation is done on the service.
     * @return string|null
    */
    public function getBucketId(): ?string {
        return $this->getBackingStore()->get('bucketId');
    }

    /**
     * Gets the bucketTaskBoardFormat property value. Read-only. Nullable. Used to render the task correctly in the task board view when grouped by bucket.
     * @return PlannerBucketTaskBoardTaskFormat|null
    */
    public function getBucketTaskBoardFormat(): ?PlannerBucketTaskBoardTaskFormat {
        return $this->getBackingStore()->get('bucketTaskBoardFormat');
    }

    /**
     * Gets the checklistItemCount property value. Number of checklist items that are present on the task.
     * @return int|null
    */
    public function getChecklistItemCount(): ?int {
        return $this->getBackingStore()->get('checklistItemCount');
    }

    /**
     * Gets the completedBy property value. Identity of the user that completed the task.
     * @return IdentitySet|null
    */
    public function getCompletedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('completedBy');
    }

    /**
     * Gets the completedDateTime property value. Read-only. Date and time at which the 'percentComplete' of the task is set to '100'. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('completedDateTime');
    }

    /**
     * Gets the conversationThreadId property value. Thread ID of the conversation on the task. This is the ID of the conversation thread object created in the group.
     * @return string|null
    */
    public function getConversationThreadId(): ?string {
        return $this->getBackingStore()->get('conversationThreadId');
    }

    /**
     * Gets the createdBy property value. Identity of the user that created the task.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. Read-only. Date and time at which the task is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the details property value. Read-only. Nullable. Additional details about the task.
     * @return PlannerTaskDetails|null
    */
    public function getDetails(): ?PlannerTaskDetails {
        return $this->getBackingStore()->get('details');
    }

    /**
     * Gets the dueDateTime property value. Date and time at which the task is due. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getDueDateTime(): ?DateTime {
        return $this->getBackingStore()->get('dueDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeChecklistItemCount' => fn(ParseNode $n) => $o->setActiveChecklistItemCount($n->getIntegerValue()),
            'appliedCategories' => fn(ParseNode $n) => $o->setAppliedCategories($n->getObjectValue([PlannerAppliedCategories::class, 'createFromDiscriminatorValue'])),
            'assignedToTaskBoardFormat' => fn(ParseNode $n) => $o->setAssignedToTaskBoardFormat($n->getObjectValue([PlannerAssignedToTaskBoardTaskFormat::class, 'createFromDiscriminatorValue'])),
            'assigneePriority' => fn(ParseNode $n) => $o->setAssigneePriority($n->getStringValue()),
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getObjectValue([PlannerAssignments::class, 'createFromDiscriminatorValue'])),
            'bucketId' => fn(ParseNode $n) => $o->setBucketId($n->getStringValue()),
            'bucketTaskBoardFormat' => fn(ParseNode $n) => $o->setBucketTaskBoardFormat($n->getObjectValue([PlannerBucketTaskBoardTaskFormat::class, 'createFromDiscriminatorValue'])),
            'checklistItemCount' => fn(ParseNode $n) => $o->setChecklistItemCount($n->getIntegerValue()),
            'completedBy' => fn(ParseNode $n) => $o->setCompletedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'conversationThreadId' => fn(ParseNode $n) => $o->setConversationThreadId($n->getStringValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getObjectValue([PlannerTaskDetails::class, 'createFromDiscriminatorValue'])),
            'dueDateTime' => fn(ParseNode $n) => $o->setDueDateTime($n->getDateTimeValue()),
            'hasDescription' => fn(ParseNode $n) => $o->setHasDescription($n->getBooleanValue()),
            'orderHint' => fn(ParseNode $n) => $o->setOrderHint($n->getStringValue()),
            'percentComplete' => fn(ParseNode $n) => $o->setPercentComplete($n->getIntegerValue()),
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
            'previewType' => fn(ParseNode $n) => $o->setPreviewType($n->getEnumValue(PlannerPreviewType::class)),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'progressTaskBoardFormat' => fn(ParseNode $n) => $o->setProgressTaskBoardFormat($n->getObjectValue([PlannerProgressTaskBoardTaskFormat::class, 'createFromDiscriminatorValue'])),
            'referenceCount' => fn(ParseNode $n) => $o->setReferenceCount($n->getIntegerValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ]);
    }

    /**
     * Gets the hasDescription property value. Read-only. Value is true if the details object of the task has a non-empty description and false otherwise.
     * @return bool|null
    */
    public function getHasDescription(): ?bool {
        return $this->getBackingStore()->get('hasDescription');
    }

    /**
     * Gets the orderHint property value. Hint used to order items of this type in a list view. The format is defined as outlined here.
     * @return string|null
    */
    public function getOrderHint(): ?string {
        return $this->getBackingStore()->get('orderHint');
    }

    /**
     * Gets the percentComplete property value. Percentage of task completion. When set to 100, the task is considered completed.
     * @return int|null
    */
    public function getPercentComplete(): ?int {
        return $this->getBackingStore()->get('percentComplete');
    }

    /**
     * Gets the planId property value. Plan ID to which the task belongs.
     * @return string|null
    */
    public function getPlanId(): ?string {
        return $this->getBackingStore()->get('planId');
    }

    /**
     * Gets the previewType property value. This sets the type of preview that shows up on the task. The possible values are: automatic, noPreview, checklist, description, reference.
     * @return PlannerPreviewType|null
    */
    public function getPreviewType(): ?PlannerPreviewType {
        return $this->getBackingStore()->get('previewType');
    }

    /**
     * Gets the priority property value. Priority of the task. The valid range of values is between 0 and 10, with the increasing value being lower priority (0 has the highest priority and 10 has the lowest priority).  Currently, Planner interprets values 0 and 1 as 'urgent', 2, 3 and 4 as 'important', 5, 6, and 7 as 'medium', and 8, 9, and 10 as 'low'.  Additionally, Planner sets the value 1 for 'urgent', 3 for 'important', 5 for 'medium', and 9 for 'low'.
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->getBackingStore()->get('priority');
    }

    /**
     * Gets the progressTaskBoardFormat property value. Read-only. Nullable. Used to render the task correctly in the task board view when grouped by progress.
     * @return PlannerProgressTaskBoardTaskFormat|null
    */
    public function getProgressTaskBoardFormat(): ?PlannerProgressTaskBoardTaskFormat {
        return $this->getBackingStore()->get('progressTaskBoardFormat');
    }

    /**
     * Gets the referenceCount property value. Number of external references that exist on the task.
     * @return int|null
    */
    public function getReferenceCount(): ?int {
        return $this->getBackingStore()->get('referenceCount');
    }

    /**
     * Gets the startDateTime property value. Date and time at which the task starts. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Gets the title property value. Title of the task.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->getBackingStore()->get('title');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('activeChecklistItemCount', $this->getActiveChecklistItemCount());
        $writer->writeObjectValue('appliedCategories', $this->getAppliedCategories());
        $writer->writeObjectValue('assignedToTaskBoardFormat', $this->getAssignedToTaskBoardFormat());
        $writer->writeStringValue('assigneePriority', $this->getAssigneePriority());
        $writer->writeObjectValue('assignments', $this->getAssignments());
        $writer->writeStringValue('bucketId', $this->getBucketId());
        $writer->writeObjectValue('bucketTaskBoardFormat', $this->getBucketTaskBoardFormat());
        $writer->writeIntegerValue('checklistItemCount', $this->getChecklistItemCount());
        $writer->writeObjectValue('completedBy', $this->getCompletedBy());
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeStringValue('conversationThreadId', $this->getConversationThreadId());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('details', $this->getDetails());
        $writer->writeDateTimeValue('dueDateTime', $this->getDueDateTime());
        $writer->writeBooleanValue('hasDescription', $this->getHasDescription());
        $writer->writeStringValue('orderHint', $this->getOrderHint());
        $writer->writeIntegerValue('percentComplete', $this->getPercentComplete());
        $writer->writeStringValue('planId', $this->getPlanId());
        $writer->writeEnumValue('previewType', $this->getPreviewType());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeObjectValue('progressTaskBoardFormat', $this->getProgressTaskBoardFormat());
        $writer->writeIntegerValue('referenceCount', $this->getReferenceCount());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeStringValue('title', $this->getTitle());
    }

    /**
     * Sets the activeChecklistItemCount property value. Number of checklist items with value set to false, representing incomplete items.
     *  @param int|null $value Value to set for the activeChecklistItemCount property.
    */
    public function setActiveChecklistItemCount(?int $value): void {
        $this->getBackingStore()->set('activeChecklistItemCount', $value);
    }

    /**
     * Sets the appliedCategories property value. The categories to which the task has been applied. See applied Categories for possible values.
     *  @param PlannerAppliedCategories|null $value Value to set for the appliedCategories property.
    */
    public function setAppliedCategories(?PlannerAppliedCategories $value): void {
        $this->getBackingStore()->set('appliedCategories', $value);
    }

    /**
     * Sets the assignedToTaskBoardFormat property value. Read-only. Nullable. Used to render the task correctly in the task board view when grouped by assignedTo.
     *  @param PlannerAssignedToTaskBoardTaskFormat|null $value Value to set for the assignedToTaskBoardFormat property.
    */
    public function setAssignedToTaskBoardFormat(?PlannerAssignedToTaskBoardTaskFormat $value): void {
        $this->getBackingStore()->set('assignedToTaskBoardFormat', $value);
    }

    /**
     * Sets the assigneePriority property value. Hint used to order items of this type in a list view. The format is defined as outlined here.
     *  @param string|null $value Value to set for the assigneePriority property.
    */
    public function setAssigneePriority(?string $value): void {
        $this->getBackingStore()->set('assigneePriority', $value);
    }

    /**
     * Sets the assignments property value. The set of assignees the task is assigned to.
     *  @param PlannerAssignments|null $value Value to set for the assignments property.
    */
    public function setAssignments(?PlannerAssignments $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the bucketId property value. Bucket ID to which the task belongs. The bucket needs to be in the plan that the task is in. It is 28 characters long and case-sensitive. Format validation is done on the service.
     *  @param string|null $value Value to set for the bucketId property.
    */
    public function setBucketId(?string $value): void {
        $this->getBackingStore()->set('bucketId', $value);
    }

    /**
     * Sets the bucketTaskBoardFormat property value. Read-only. Nullable. Used to render the task correctly in the task board view when grouped by bucket.
     *  @param PlannerBucketTaskBoardTaskFormat|null $value Value to set for the bucketTaskBoardFormat property.
    */
    public function setBucketTaskBoardFormat(?PlannerBucketTaskBoardTaskFormat $value): void {
        $this->getBackingStore()->set('bucketTaskBoardFormat', $value);
    }

    /**
     * Sets the checklistItemCount property value. Number of checklist items that are present on the task.
     *  @param int|null $value Value to set for the checklistItemCount property.
    */
    public function setChecklistItemCount(?int $value): void {
        $this->getBackingStore()->set('checklistItemCount', $value);
    }

    /**
     * Sets the completedBy property value. Identity of the user that completed the task.
     *  @param IdentitySet|null $value Value to set for the completedBy property.
    */
    public function setCompletedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('completedBy', $value);
    }

    /**
     * Sets the completedDateTime property value. Read-only. Date and time at which the 'percentComplete' of the task is set to '100'. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the conversationThreadId property value. Thread ID of the conversation on the task. This is the ID of the conversation thread object created in the group.
     *  @param string|null $value Value to set for the conversationThreadId property.
    */
    public function setConversationThreadId(?string $value): void {
        $this->getBackingStore()->set('conversationThreadId', $value);
    }

    /**
     * Sets the createdBy property value. Identity of the user that created the task.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Read-only. Date and time at which the task is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the details property value. Read-only. Nullable. Additional details about the task.
     *  @param PlannerTaskDetails|null $value Value to set for the details property.
    */
    public function setDetails(?PlannerTaskDetails $value): void {
        $this->getBackingStore()->set('details', $value);
    }

    /**
     * Sets the dueDateTime property value. Date and time at which the task is due. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('dueDateTime', $value);
    }

    /**
     * Sets the hasDescription property value. Read-only. Value is true if the details object of the task has a non-empty description and false otherwise.
     *  @param bool|null $value Value to set for the hasDescription property.
    */
    public function setHasDescription(?bool $value): void {
        $this->getBackingStore()->set('hasDescription', $value);
    }

    /**
     * Sets the orderHint property value. Hint used to order items of this type in a list view. The format is defined as outlined here.
     *  @param string|null $value Value to set for the orderHint property.
    */
    public function setOrderHint(?string $value): void {
        $this->getBackingStore()->set('orderHint', $value);
    }

    /**
     * Sets the percentComplete property value. Percentage of task completion. When set to 100, the task is considered completed.
     *  @param int|null $value Value to set for the percentComplete property.
    */
    public function setPercentComplete(?int $value): void {
        $this->getBackingStore()->set('percentComplete', $value);
    }

    /**
     * Sets the planId property value. Plan ID to which the task belongs.
     *  @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value): void {
        $this->getBackingStore()->set('planId', $value);
    }

    /**
     * Sets the previewType property value. This sets the type of preview that shows up on the task. The possible values are: automatic, noPreview, checklist, description, reference.
     *  @param PlannerPreviewType|null $value Value to set for the previewType property.
    */
    public function setPreviewType(?PlannerPreviewType $value): void {
        $this->getBackingStore()->set('previewType', $value);
    }

    /**
     * Sets the priority property value. Priority of the task. The valid range of values is between 0 and 10, with the increasing value being lower priority (0 has the highest priority and 10 has the lowest priority).  Currently, Planner interprets values 0 and 1 as 'urgent', 2, 3 and 4 as 'important', 5, 6, and 7 as 'medium', and 8, 9, and 10 as 'low'.  Additionally, Planner sets the value 1 for 'urgent', 3 for 'important', 5 for 'medium', and 9 for 'low'.
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the progressTaskBoardFormat property value. Read-only. Nullable. Used to render the task correctly in the task board view when grouped by progress.
     *  @param PlannerProgressTaskBoardTaskFormat|null $value Value to set for the progressTaskBoardFormat property.
    */
    public function setProgressTaskBoardFormat(?PlannerProgressTaskBoardTaskFormat $value): void {
        $this->getBackingStore()->set('progressTaskBoardFormat', $value);
    }

    /**
     * Sets the referenceCount property value. Number of external references that exist on the task.
     *  @param int|null $value Value to set for the referenceCount property.
    */
    public function setReferenceCount(?int $value): void {
        $this->getBackingStore()->set('referenceCount', $value);
    }

    /**
     * Sets the startDateTime property value. Date and time at which the task starts. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the title property value. Title of the task.
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

}
