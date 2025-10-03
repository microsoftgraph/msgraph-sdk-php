<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TodoTask extends Entity implements Parsable 
{
    /**
     * Instantiates a new TodoTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TodoTask
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TodoTask {
        return new TodoTask();
    }

    /**
     * Gets the attachments property value. A collection of file attachments for the task.
     * @return array<AttachmentBase>|null
    */
    public function getAttachments(): ?array {
        $val = $this->getBackingStore()->get('attachments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AttachmentBase::class);
            /** @var array<AttachmentBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attachments'");
    }

    /**
     * Gets the attachmentSessions property value. The attachmentSessions property
     * @return array<AttachmentSession>|null
    */
    public function getAttachmentSessions(): ?array {
        $val = $this->getBackingStore()->get('attachmentSessions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AttachmentSession::class);
            /** @var array<AttachmentSession>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attachmentSessions'");
    }

    /**
     * Gets the body property value. The task body that typically contains information about the task.
     * @return ItemBody|null
    */
    public function getBody(): ?ItemBody {
        $val = $this->getBackingStore()->get('body');
        if (is_null($val) || $val instanceof ItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'body'");
    }

    /**
     * Gets the bodyLastModifiedDateTime property value. The date and time when the task body was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getBodyLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('bodyLastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bodyLastModifiedDateTime'");
    }

    /**
     * Gets the categories property value. The categories associated with the task. Each category corresponds to the displayName property of an outlookCategory that the user has defined.
     * @return array<string>|null
    */
    public function getCategories(): ?array {
        $val = $this->getBackingStore()->get('categories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'categories'");
    }

    /**
     * Gets the checklistItems property value. A collection of checklistItems linked to a task.
     * @return array<ChecklistItem>|null
    */
    public function getChecklistItems(): ?array {
        $val = $this->getBackingStore()->get('checklistItems');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ChecklistItem::class);
            /** @var array<ChecklistItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'checklistItems'");
    }

    /**
     * Gets the completedDateTime property value. The date and time in the specified time zone that the task was finished.
     * @return DateTimeTimeZone|null
    */
    public function getCompletedDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('completedDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedDateTime'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the task was created. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the dueDateTime property value. The date and time in the specified time zone that the task is to be finished.
     * @return DateTimeTimeZone|null
    */
    public function getDueDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('dueDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dueDateTime'");
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the task. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        $val = $this->getBackingStore()->get('extensions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Extension::class);
            /** @var array<Extension>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'attachments' => fn(ParseNode $n) => $o->setAttachments($n->getCollectionOfObjectValues([AttachmentBase::class, 'createFromDiscriminatorValue'])),
            'attachmentSessions' => fn(ParseNode $n) => $o->setAttachmentSessions($n->getCollectionOfObjectValues([AttachmentSession::class, 'createFromDiscriminatorValue'])),
            'body' => fn(ParseNode $n) => $o->setBody($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'bodyLastModifiedDateTime' => fn(ParseNode $n) => $o->setBodyLastModifiedDateTime($n->getDateTimeValue()),
            'categories' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setCategories($val);
            },
            'checklistItems' => fn(ParseNode $n) => $o->setChecklistItems($n->getCollectionOfObjectValues([ChecklistItem::class, 'createFromDiscriminatorValue'])),
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'dueDateTime' => fn(ParseNode $n) => $o->setDueDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getCollectionOfObjectValues([Extension::class, 'createFromDiscriminatorValue'])),
            'hasAttachments' => fn(ParseNode $n) => $o->setHasAttachments($n->getBooleanValue()),
            'importance' => fn(ParseNode $n) => $o->setImportance($n->getEnumValue(Importance::class)),
            'isReminderOn' => fn(ParseNode $n) => $o->setIsReminderOn($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'linkedResources' => fn(ParseNode $n) => $o->setLinkedResources($n->getCollectionOfObjectValues([LinkedResource::class, 'createFromDiscriminatorValue'])),
            'recurrence' => fn(ParseNode $n) => $o->setRecurrence($n->getObjectValue([PatternedRecurrence::class, 'createFromDiscriminatorValue'])),
            'reminderDateTime' => fn(ParseNode $n) => $o->setReminderDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getObjectValue([DateTimeTimeZone::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(TaskStatus::class)),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ]);
    }

    /**
     * Gets the hasAttachments property value. Indicates whether the task has attachments.
     * @return bool|null
    */
    public function getHasAttachments(): ?bool {
        $val = $this->getBackingStore()->get('hasAttachments');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasAttachments'");
    }

    /**
     * Gets the importance property value. The importance property
     * @return Importance|null
    */
    public function getImportance(): ?Importance {
        $val = $this->getBackingStore()->get('importance');
        if (is_null($val) || $val instanceof Importance) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'importance'");
    }

    /**
     * Gets the isReminderOn property value. Set to true if an alert is set to remind the user of the task.
     * @return bool|null
    */
    public function getIsReminderOn(): ?bool {
        $val = $this->getBackingStore()->get('isReminderOn');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isReminderOn'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the linkedResources property value. A collection of resources linked to the task.
     * @return array<LinkedResource>|null
    */
    public function getLinkedResources(): ?array {
        $val = $this->getBackingStore()->get('linkedResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, LinkedResource::class);
            /** @var array<LinkedResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'linkedResources'");
    }

    /**
     * Gets the recurrence property value. The recurrence pattern for the task.
     * @return PatternedRecurrence|null
    */
    public function getRecurrence(): ?PatternedRecurrence {
        $val = $this->getBackingStore()->get('recurrence');
        if (is_null($val) || $val instanceof PatternedRecurrence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recurrence'");
    }

    /**
     * Gets the reminderDateTime property value. The date and time in the specified time zone for a reminder alert of the task to occur.
     * @return DateTimeTimeZone|null
    */
    public function getReminderDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('reminderDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reminderDateTime'");
    }

    /**
     * Gets the startDateTime property value. The date and time in the specified time zone at which the task is scheduled to start.
     * @return DateTimeTimeZone|null
    */
    public function getStartDateTime(): ?DateTimeTimeZone {
        $val = $this->getBackingStore()->get('startDateTime');
        if (is_null($val) || $val instanceof DateTimeTimeZone) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startDateTime'");
    }

    /**
     * Gets the status property value. The status property
     * @return TaskStatus|null
    */
    public function getStatus(): ?TaskStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof TaskStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the title property value. A brief description of the task.
     * @return string|null
    */
    public function getTitle(): ?string {
        $val = $this->getBackingStore()->get('title');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'title'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('attachments', $this->getAttachments());
        $writer->writeCollectionOfObjectValues('attachmentSessions', $this->getAttachmentSessions());
        $writer->writeObjectValue('body', $this->getBody());
        $writer->writeDateTimeValue('bodyLastModifiedDateTime', $this->getBodyLastModifiedDateTime());
        $writer->writeCollectionOfPrimitiveValues('categories', $this->getCategories());
        $writer->writeCollectionOfObjectValues('checklistItems', $this->getChecklistItems());
        $writer->writeObjectValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('dueDateTime', $this->getDueDateTime());
        $writer->writeCollectionOfObjectValues('extensions', $this->getExtensions());
        $writer->writeBooleanValue('hasAttachments', $this->getHasAttachments());
        $writer->writeEnumValue('importance', $this->getImportance());
        $writer->writeBooleanValue('isReminderOn', $this->getIsReminderOn());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('linkedResources', $this->getLinkedResources());
        $writer->writeObjectValue('recurrence', $this->getRecurrence());
        $writer->writeObjectValue('reminderDateTime', $this->getReminderDateTime());
        $writer->writeObjectValue('startDateTime', $this->getStartDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('title', $this->getTitle());
    }

    /**
     * Sets the attachments property value. A collection of file attachments for the task.
     * @param array<AttachmentBase>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value): void {
        $this->getBackingStore()->set('attachments', $value);
    }

    /**
     * Sets the attachmentSessions property value. The attachmentSessions property
     * @param array<AttachmentSession>|null $value Value to set for the attachmentSessions property.
    */
    public function setAttachmentSessions(?array $value): void {
        $this->getBackingStore()->set('attachmentSessions', $value);
    }

    /**
     * Sets the body property value. The task body that typically contains information about the task.
     * @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value): void {
        $this->getBackingStore()->set('body', $value);
    }

    /**
     * Sets the bodyLastModifiedDateTime property value. The date and time when the task body was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     * @param DateTime|null $value Value to set for the bodyLastModifiedDateTime property.
    */
    public function setBodyLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('bodyLastModifiedDateTime', $value);
    }

    /**
     * Sets the categories property value. The categories associated with the task. Each category corresponds to the displayName property of an outlookCategory that the user has defined.
     * @param array<string>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value): void {
        $this->getBackingStore()->set('categories', $value);
    }

    /**
     * Sets the checklistItems property value. A collection of checklistItems linked to a task.
     * @param array<ChecklistItem>|null $value Value to set for the checklistItems property.
    */
    public function setChecklistItems(?array $value): void {
        $this->getBackingStore()->set('checklistItems', $value);
    }

    /**
     * Sets the completedDateTime property value. The date and time in the specified time zone that the task was finished.
     * @param DateTimeTimeZone|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the task was created. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the dueDateTime property value. The date and time in the specified time zone that the task is to be finished.
     * @param DateTimeTimeZone|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('dueDateTime', $value);
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the task. Nullable.
     * @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the hasAttachments property value. Indicates whether the task has attachments.
     * @param bool|null $value Value to set for the hasAttachments property.
    */
    public function setHasAttachments(?bool $value): void {
        $this->getBackingStore()->set('hasAttachments', $value);
    }

    /**
     * Sets the importance property value. The importance property
     * @param Importance|null $value Value to set for the importance property.
    */
    public function setImportance(?Importance $value): void {
        $this->getBackingStore()->set('importance', $value);
    }

    /**
     * Sets the isReminderOn property value. Set to true if an alert is set to remind the user of the task.
     * @param bool|null $value Value to set for the isReminderOn property.
    */
    public function setIsReminderOn(?bool $value): void {
        $this->getBackingStore()->set('isReminderOn', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the linkedResources property value. A collection of resources linked to the task.
     * @param array<LinkedResource>|null $value Value to set for the linkedResources property.
    */
    public function setLinkedResources(?array $value): void {
        $this->getBackingStore()->set('linkedResources', $value);
    }

    /**
     * Sets the recurrence property value. The recurrence pattern for the task.
     * @param PatternedRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?PatternedRecurrence $value): void {
        $this->getBackingStore()->set('recurrence', $value);
    }

    /**
     * Sets the reminderDateTime property value. The date and time in the specified time zone for a reminder alert of the task to occur.
     * @param DateTimeTimeZone|null $value Value to set for the reminderDateTime property.
    */
    public function setReminderDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('reminderDateTime', $value);
    }

    /**
     * Sets the startDateTime property value. The date and time in the specified time zone at which the task is scheduled to start.
     * @param DateTimeTimeZone|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTimeTimeZone $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param TaskStatus|null $value Value to set for the status property.
    */
    public function setStatus(?TaskStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the title property value. A brief description of the task.
     * @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

}
