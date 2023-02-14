<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EducationAssignment extends Entity implements Parsable 
{
    /**
     * Instantiates a new educationAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationAssignment {
        return new EducationAssignment();
    }

    /**
     * Gets the addedStudentAction property value. Optional field to control the assignment behavior for students who are added after the assignment is published. If not specified, defaults to none. Supported values are: none, assignIfOpen. For example, a teacher can use assignIfOpen to indicate that an assignment should be assigned to any new student who joins the class while the assignment is still open, and none to indicate that an assignment should not be assigned to new students.
     * @return EducationAddedStudentAction|null
    */
    public function getAddedStudentAction(): ?EducationAddedStudentAction {
        return $this->getBackingStore()->get('addedStudentAction');
    }

    /**
     * Gets the addToCalendarAction property value. Optional field to control the assignment behavior  for adding assignments to students' and teachers' calendars when the assignment is published. The possible values are: none, studentsAndPublisher, studentsAndTeamOwners, unknownFutureValue, and studentsOnly. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: studentsOnly. The default value is none.
     * @return EducationAddToCalendarOptions|null
    */
    public function getAddToCalendarAction(): ?EducationAddToCalendarOptions {
        return $this->getBackingStore()->get('addToCalendarAction');
    }

    /**
     * Gets the allowLateSubmissions property value. Identifies whether students can submit after the due date. If this property isn't specified during create, it defaults to true.
     * @return bool|null
    */
    public function getAllowLateSubmissions(): ?bool {
        return $this->getBackingStore()->get('allowLateSubmissions');
    }

    /**
     * Gets the allowStudentsToAddResourcesToSubmission property value. Identifies whether students can add their own resources to a submission or if they can only modify resources added by the teacher.
     * @return bool|null
    */
    public function getAllowStudentsToAddResourcesToSubmission(): ?bool {
        return $this->getBackingStore()->get('allowStudentsToAddResourcesToSubmission');
    }

    /**
     * Gets the assignDateTime property value. The date when the assignment should become active.  If in the future, the assignment isn't shown to the student until this date.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getAssignDateTime(): ?DateTime {
        return $this->getBackingStore()->get('assignDateTime');
    }

    /**
     * Gets the assignedDateTime property value. The moment that the assignment was published to students and the assignment shows up on the students timeline.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getAssignedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('assignedDateTime');
    }

    /**
     * Gets the assignTo property value. Which users, or whole class should receive a submission object once the assignment is published.
     * @return EducationAssignmentRecipient|null
    */
    public function getAssignTo(): ?EducationAssignmentRecipient {
        return $this->getBackingStore()->get('assignTo');
    }

    /**
     * Gets the categories property value. When set, enables users to easily find assignments of a given type.  Read-only. Nullable.
     * @return array<EducationCategory>|null
    */
    public function getCategories(): ?array {
        return $this->getBackingStore()->get('categories');
    }

    /**
     * Gets the classId property value. Class which this assignment belongs.
     * @return string|null
    */
    public function getClassId(): ?string {
        return $this->getBackingStore()->get('classId');
    }

    /**
     * Gets the closeDateTime property value. Date when the assignment will be closed for submissions. This is an optional field that can be null if the assignment does not allowLateSubmissions or when the closeDateTime is the same as the dueDateTime. But if specified, then the closeDateTime must be greater than or equal to the dueDateTime. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getCloseDateTime(): ?DateTime {
        return $this->getBackingStore()->get('closeDateTime');
    }

    /**
     * Gets the createdBy property value. Who created the assignment.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. Moment when the assignment was created.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the displayName property value. Name of the assignment.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the dueDateTime property value. Date when the students assignment is due.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getDueDateTime(): ?DateTime {
        return $this->getBackingStore()->get('dueDateTime');
    }

    /**
     * Gets the feedbackResourcesFolderUrl property value. Folder URL where all the feedback file resources for this assignment are stored.
     * @return string|null
    */
    public function getFeedbackResourcesFolderUrl(): ?string {
        return $this->getBackingStore()->get('feedbackResourcesFolderUrl');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'addedStudentAction' => fn(ParseNode $n) => $o->setAddedStudentAction($n->getEnumValue(EducationAddedStudentAction::class)),
            'addToCalendarAction' => fn(ParseNode $n) => $o->setAddToCalendarAction($n->getEnumValue(EducationAddToCalendarOptions::class)),
            'allowLateSubmissions' => fn(ParseNode $n) => $o->setAllowLateSubmissions($n->getBooleanValue()),
            'allowStudentsToAddResourcesToSubmission' => fn(ParseNode $n) => $o->setAllowStudentsToAddResourcesToSubmission($n->getBooleanValue()),
            'assignDateTime' => fn(ParseNode $n) => $o->setAssignDateTime($n->getDateTimeValue()),
            'assignedDateTime' => fn(ParseNode $n) => $o->setAssignedDateTime($n->getDateTimeValue()),
            'assignTo' => fn(ParseNode $n) => $o->setAssignTo($n->getObjectValue([EducationAssignmentRecipient::class, 'createFromDiscriminatorValue'])),
            'categories' => fn(ParseNode $n) => $o->setCategories($n->getCollectionOfObjectValues([EducationCategory::class, 'createFromDiscriminatorValue'])),
            'classId' => fn(ParseNode $n) => $o->setClassId($n->getStringValue()),
            'closeDateTime' => fn(ParseNode $n) => $o->setCloseDateTime($n->getDateTimeValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'dueDateTime' => fn(ParseNode $n) => $o->setDueDateTime($n->getDateTimeValue()),
            'feedbackResourcesFolderUrl' => fn(ParseNode $n) => $o->setFeedbackResourcesFolderUrl($n->getStringValue()),
            'grading' => fn(ParseNode $n) => $o->setGrading($n->getObjectValue([EducationAssignmentGradeType::class, 'createFromDiscriminatorValue'])),
            'instructions' => fn(ParseNode $n) => $o->setInstructions($n->getObjectValue([EducationItemBody::class, 'createFromDiscriminatorValue'])),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'notificationChannelUrl' => fn(ParseNode $n) => $o->setNotificationChannelUrl($n->getStringValue()),
            'resources' => fn(ParseNode $n) => $o->setResources($n->getCollectionOfObjectValues([EducationAssignmentResource::class, 'createFromDiscriminatorValue'])),
            'resourcesFolderUrl' => fn(ParseNode $n) => $o->setResourcesFolderUrl($n->getStringValue()),
            'rubric' => fn(ParseNode $n) => $o->setRubric($n->getObjectValue([EducationRubric::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(EducationAssignmentStatus::class)),
            'submissions' => fn(ParseNode $n) => $o->setSubmissions($n->getCollectionOfObjectValues([EducationSubmission::class, 'createFromDiscriminatorValue'])),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the grading property value. How the assignment will be graded.
     * @return EducationAssignmentGradeType|null
    */
    public function getGrading(): ?EducationAssignmentGradeType {
        return $this->getBackingStore()->get('grading');
    }

    /**
     * Gets the instructions property value. Instructions for the assignment.  This along with the display name tell the student what to do.
     * @return EducationItemBody|null
    */
    public function getInstructions(): ?EducationItemBody {
        return $this->getBackingStore()->get('instructions');
    }

    /**
     * Gets the lastModifiedBy property value. Who last modified the assignment.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('lastModifiedBy');
    }

    /**
     * Gets the lastModifiedDateTime property value. Moment when the assignment was last modified.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the notificationChannelUrl property value. Optional field to specify the URL of the channel to post the assignment publish notification. If not specified or null, defaults to the General channel. This field only applies to assignments where the assignTo value is educationAssignmentClassRecipient. Updating the notificationChannelUrl isn't allowed after the assignment has been published.
     * @return string|null
    */
    public function getNotificationChannelUrl(): ?string {
        return $this->getBackingStore()->get('notificationChannelUrl');
    }

    /**
     * Gets the resources property value. Learning objects that are associated with this assignment.  Only teachers can modify this list. Nullable.
     * @return array<EducationAssignmentResource>|null
    */
    public function getResources(): ?array {
        return $this->getBackingStore()->get('resources');
    }

    /**
     * Gets the resourcesFolderUrl property value. Folder URL where all the file resources for this assignment are stored.
     * @return string|null
    */
    public function getResourcesFolderUrl(): ?string {
        return $this->getBackingStore()->get('resourcesFolderUrl');
    }

    /**
     * Gets the rubric property value. When set, the grading rubric attached to this assignment.
     * @return EducationRubric|null
    */
    public function getRubric(): ?EducationRubric {
        return $this->getBackingStore()->get('rubric');
    }

    /**
     * Gets the status property value. Status of the Assignment.  You can't PATCH this value.  Possible values are: draft, scheduled, published, assigned.
     * @return EducationAssignmentStatus|null
    */
    public function getStatus(): ?EducationAssignmentStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the submissions property value. Once published, there is a submission object for each student representing their work and grade.  Read-only. Nullable.
     * @return array<EducationSubmission>|null
    */
    public function getSubmissions(): ?array {
        return $this->getBackingStore()->get('submissions');
    }

    /**
     * Gets the webUrl property value. The deep link URL for the given assignment.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->getBackingStore()->get('webUrl');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('addedStudentAction', $this->getAddedStudentAction());
        $writer->writeEnumValue('addToCalendarAction', $this->getAddToCalendarAction());
        $writer->writeBooleanValue('allowLateSubmissions', $this->getAllowLateSubmissions());
        $writer->writeBooleanValue('allowStudentsToAddResourcesToSubmission', $this->getAllowStudentsToAddResourcesToSubmission());
        $writer->writeObjectValue('assignTo', $this->getAssignTo());
        $writer->writeCollectionOfObjectValues('categories', $this->getCategories());
        $writer->writeStringValue('classId', $this->getClassId());
        $writer->writeDateTimeValue('closeDateTime', $this->getCloseDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('dueDateTime', $this->getDueDateTime());
        $writer->writeObjectValue('grading', $this->getGrading());
        $writer->writeObjectValue('instructions', $this->getInstructions());
        $writer->writeStringValue('notificationChannelUrl', $this->getNotificationChannelUrl());
        $writer->writeCollectionOfObjectValues('resources', $this->getResources());
        $writer->writeObjectValue('rubric', $this->getRubric());
        $writer->writeCollectionOfObjectValues('submissions', $this->getSubmissions());
    }

    /**
     * Sets the addedStudentAction property value. Optional field to control the assignment behavior for students who are added after the assignment is published. If not specified, defaults to none. Supported values are: none, assignIfOpen. For example, a teacher can use assignIfOpen to indicate that an assignment should be assigned to any new student who joins the class while the assignment is still open, and none to indicate that an assignment should not be assigned to new students.
     * @param EducationAddedStudentAction|null $value Value to set for the addedStudentAction property.
    */
    public function setAddedStudentAction(?EducationAddedStudentAction $value): void {
        $this->getBackingStore()->set('addedStudentAction', $value);
    }

    /**
     * Sets the addToCalendarAction property value. Optional field to control the assignment behavior  for adding assignments to students' and teachers' calendars when the assignment is published. The possible values are: none, studentsAndPublisher, studentsAndTeamOwners, unknownFutureValue, and studentsOnly. Note that you must use the Prefer: include-unknown-enum-members request header to get the following value(s) in this evolvable enum: studentsOnly. The default value is none.
     * @param EducationAddToCalendarOptions|null $value Value to set for the addToCalendarAction property.
    */
    public function setAddToCalendarAction(?EducationAddToCalendarOptions $value): void {
        $this->getBackingStore()->set('addToCalendarAction', $value);
    }

    /**
     * Sets the allowLateSubmissions property value. Identifies whether students can submit after the due date. If this property isn't specified during create, it defaults to true.
     * @param bool|null $value Value to set for the allowLateSubmissions property.
    */
    public function setAllowLateSubmissions(?bool $value): void {
        $this->getBackingStore()->set('allowLateSubmissions', $value);
    }

    /**
     * Sets the allowStudentsToAddResourcesToSubmission property value. Identifies whether students can add their own resources to a submission or if they can only modify resources added by the teacher.
     * @param bool|null $value Value to set for the allowStudentsToAddResourcesToSubmission property.
    */
    public function setAllowStudentsToAddResourcesToSubmission(?bool $value): void {
        $this->getBackingStore()->set('allowStudentsToAddResourcesToSubmission', $value);
    }

    /**
     * Sets the assignDateTime property value. The date when the assignment should become active.  If in the future, the assignment isn't shown to the student until this date.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the assignDateTime property.
    */
    public function setAssignDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('assignDateTime', $value);
    }

    /**
     * Sets the assignedDateTime property value. The moment that the assignment was published to students and the assignment shows up on the students timeline.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the assignedDateTime property.
    */
    public function setAssignedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('assignedDateTime', $value);
    }

    /**
     * Sets the assignTo property value. Which users, or whole class should receive a submission object once the assignment is published.
     * @param EducationAssignmentRecipient|null $value Value to set for the assignTo property.
    */
    public function setAssignTo(?EducationAssignmentRecipient $value): void {
        $this->getBackingStore()->set('assignTo', $value);
    }

    /**
     * Sets the categories property value. When set, enables users to easily find assignments of a given type.  Read-only. Nullable.
     * @param array<EducationCategory>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value): void {
        $this->getBackingStore()->set('categories', $value);
    }

    /**
     * Sets the classId property value. Class which this assignment belongs.
     * @param string|null $value Value to set for the classId property.
    */
    public function setClassId(?string $value): void {
        $this->getBackingStore()->set('classId', $value);
    }

    /**
     * Sets the closeDateTime property value. Date when the assignment will be closed for submissions. This is an optional field that can be null if the assignment does not allowLateSubmissions or when the closeDateTime is the same as the dueDateTime. But if specified, then the closeDateTime must be greater than or equal to the dueDateTime. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the closeDateTime property.
    */
    public function setCloseDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('closeDateTime', $value);
    }

    /**
     * Sets the createdBy property value. Who created the assignment.
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Moment when the assignment was created.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. Name of the assignment.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the dueDateTime property value. Date when the students assignment is due.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('dueDateTime', $value);
    }

    /**
     * Sets the feedbackResourcesFolderUrl property value. Folder URL where all the feedback file resources for this assignment are stored.
     * @param string|null $value Value to set for the feedbackResourcesFolderUrl property.
    */
    public function setFeedbackResourcesFolderUrl(?string $value): void {
        $this->getBackingStore()->set('feedbackResourcesFolderUrl', $value);
    }

    /**
     * Sets the grading property value. How the assignment will be graded.
     * @param EducationAssignmentGradeType|null $value Value to set for the grading property.
    */
    public function setGrading(?EducationAssignmentGradeType $value): void {
        $this->getBackingStore()->set('grading', $value);
    }

    /**
     * Sets the instructions property value. Instructions for the assignment.  This along with the display name tell the student what to do.
     * @param EducationItemBody|null $value Value to set for the instructions property.
    */
    public function setInstructions(?EducationItemBody $value): void {
        $this->getBackingStore()->set('instructions', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Who last modified the assignment.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Moment when the assignment was last modified.  The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the notificationChannelUrl property value. Optional field to specify the URL of the channel to post the assignment publish notification. If not specified or null, defaults to the General channel. This field only applies to assignments where the assignTo value is educationAssignmentClassRecipient. Updating the notificationChannelUrl isn't allowed after the assignment has been published.
     * @param string|null $value Value to set for the notificationChannelUrl property.
    */
    public function setNotificationChannelUrl(?string $value): void {
        $this->getBackingStore()->set('notificationChannelUrl', $value);
    }

    /**
     * Sets the resources property value. Learning objects that are associated with this assignment.  Only teachers can modify this list. Nullable.
     * @param array<EducationAssignmentResource>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value): void {
        $this->getBackingStore()->set('resources', $value);
    }

    /**
     * Sets the resourcesFolderUrl property value. Folder URL where all the file resources for this assignment are stored.
     * @param string|null $value Value to set for the resourcesFolderUrl property.
    */
    public function setResourcesFolderUrl(?string $value): void {
        $this->getBackingStore()->set('resourcesFolderUrl', $value);
    }

    /**
     * Sets the rubric property value. When set, the grading rubric attached to this assignment.
     * @param EducationRubric|null $value Value to set for the rubric property.
    */
    public function setRubric(?EducationRubric $value): void {
        $this->getBackingStore()->set('rubric', $value);
    }

    /**
     * Sets the status property value. Status of the Assignment.  You can't PATCH this value.  Possible values are: draft, scheduled, published, assigned.
     * @param EducationAssignmentStatus|null $value Value to set for the status property.
    */
    public function setStatus(?EducationAssignmentStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the submissions property value. Once published, there is a submission object for each student representing their work and grade.  Read-only. Nullable.
     * @param array<EducationSubmission>|null $value Value to set for the submissions property.
    */
    public function setSubmissions(?array $value): void {
        $this->getBackingStore()->set('submissions', $value);
    }

    /**
     * Sets the webUrl property value. The deep link URL for the given assignment.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
