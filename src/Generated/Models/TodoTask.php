<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TodoTask extends Entity implements Parsable 
{
    /**
     * @var ItemBody|null $body The task body that typically contains information about the task.
    */
    private ?ItemBody $body = null;
    
    /**
     * @var DateTime|null $bodyLastModifiedDateTime The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
    */
    private ?DateTime $bodyLastModifiedDateTime = null;
    
    /**
     * @var array<string>|null $categories The categories associated with the task. Each category corresponds to the displayName property of an outlookCategory that the user has defined.
    */
    private ?array $categories = null;
    
    /**
     * @var array<ChecklistItem>|null $checklistItems A collection of smaller subtasks linked to the more complex parent task.
    */
    private ?array $checklistItems = null;
    
    /**
     * @var DateTimeTimeZone|null $completedDateTime The date in the specified time zone that the task was finished.
    */
    private ?DateTimeTimeZone $completedDateTime = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time when the task was created. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DateTimeTimeZone|null $dueDateTime The date in the specified time zone that the task is to be finished.
    */
    private ?DateTimeTimeZone $dueDateTime = null;
    
    /**
     * @var array<Extension>|null $extensions The collection of open extensions defined for the task. Nullable.
    */
    private ?array $extensions = null;
    
    /**
     * @var Importance|null $importance The importance of the task. Possible values are: low, normal, high.
    */
    private ?Importance $importance = null;
    
    /**
     * @var bool|null $isReminderOn Set to true if an alert is set to remind the user of the task.
    */
    private ?bool $isReminderOn = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var array<LinkedResource>|null $linkedResources A collection of resources linked to the task.
    */
    private ?array $linkedResources = null;
    
    /**
     * @var PatternedRecurrence|null $recurrence The recurrence pattern for the task.
    */
    private ?PatternedRecurrence $recurrence = null;
    
    /**
     * @var DateTimeTimeZone|null $reminderDateTime The date and time for a reminder alert of the task to occur.
    */
    private ?DateTimeTimeZone $reminderDateTime = null;
    
    /**
     * @var TaskStatus|null $status Indicates the state or progress of the task. Possible values are: notStarted, inProgress, completed, waitingOnOthers, deferred.
    */
    private ?TaskStatus $status = null;
    
    /**
     * @var string|null $title A brief description of the task.
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new todoTask and sets the default values.
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
     * Gets the body property value. The task body that typically contains information about the task.
     * @return ItemBody|null
    */
    public function getBody(): ?ItemBody {
        return $this->body;
    }

    /**
     * Gets the bodyLastModifiedDateTime property value. The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getBodyLastModifiedDateTime(): ?DateTime {
        return $this->bodyLastModifiedDateTime;
    }

    /**
     * Gets the categories property value. The categories associated with the task. Each category corresponds to the displayName property of an outlookCategory that the user has defined.
     * @return array<string>|null
    */
    public function getCategories(): ?array {
        return $this->categories;
    }

    /**
     * Gets the checklistItems property value. A collection of smaller subtasks linked to the more complex parent task.
     * @return array<ChecklistItem>|null
    */
    public function getChecklistItems(): ?array {
        return $this->checklistItems;
    }

    /**
     * Gets the completedDateTime property value. The date in the specified time zone that the task was finished.
     * @return DateTimeTimeZone|null
    */
    public function getCompletedDateTime(): ?DateTimeTimeZone {
        return $this->completedDateTime;
    }

    /**
     * Gets the createdDateTime property value. The date and time when the task was created. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the dueDateTime property value. The date in the specified time zone that the task is to be finished.
     * @return DateTimeTimeZone|null
    */
    public function getDueDateTime(): ?DateTimeTimeZone {
        return $this->dueDateTime;
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the task. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->extensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'body' => function (ParseNode $n) use ($o) { $o->setBody($n->getObjectValue(array(ItemBody::class, 'createFromDiscriminatorValue'))); },
            'bodyLastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setBodyLastModifiedDateTime($n->getDateTimeValue()); },
            'categories' => function (ParseNode $n) use ($o) { $o->setCategories($n->getCollectionOfPrimitiveValues()); },
            'checklistItems' => function (ParseNode $n) use ($o) { $o->setChecklistItems($n->getCollectionOfObjectValues(array(ChecklistItem::class, 'createFromDiscriminatorValue'))); },
            'completedDateTime' => function (ParseNode $n) use ($o) { $o->setCompletedDateTime($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'dueDateTime' => function (ParseNode $n) use ($o) { $o->setDueDateTime($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
            'extensions' => function (ParseNode $n) use ($o) { $o->setExtensions($n->getCollectionOfObjectValues(array(Extension::class, 'createFromDiscriminatorValue'))); },
            'importance' => function (ParseNode $n) use ($o) { $o->setImportance($n->getEnumValue(Importance::class)); },
            'isReminderOn' => function (ParseNode $n) use ($o) { $o->setIsReminderOn($n->getBooleanValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'linkedResources' => function (ParseNode $n) use ($o) { $o->setLinkedResources($n->getCollectionOfObjectValues(array(LinkedResource::class, 'createFromDiscriminatorValue'))); },
            'recurrence' => function (ParseNode $n) use ($o) { $o->setRecurrence($n->getObjectValue(array(PatternedRecurrence::class, 'createFromDiscriminatorValue'))); },
            'reminderDateTime' => function (ParseNode $n) use ($o) { $o->setReminderDateTime($n->getObjectValue(array(DateTimeTimeZone::class, 'createFromDiscriminatorValue'))); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(TaskStatus::class)); },
            'title' => function (ParseNode $n) use ($o) { $o->setTitle($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the importance property value. The importance of the task. Possible values are: low, normal, high.
     * @return Importance|null
    */
    public function getImportance(): ?Importance {
        return $this->importance;
    }

    /**
     * Gets the isReminderOn property value. Set to true if an alert is set to remind the user of the task.
     * @return bool|null
    */
    public function getIsReminderOn(): ?bool {
        return $this->isReminderOn;
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the linkedResources property value. A collection of resources linked to the task.
     * @return array<LinkedResource>|null
    */
    public function getLinkedResources(): ?array {
        return $this->linkedResources;
    }

    /**
     * Gets the recurrence property value. The recurrence pattern for the task.
     * @return PatternedRecurrence|null
    */
    public function getRecurrence(): ?PatternedRecurrence {
        return $this->recurrence;
    }

    /**
     * Gets the reminderDateTime property value. The date and time for a reminder alert of the task to occur.
     * @return DateTimeTimeZone|null
    */
    public function getReminderDateTime(): ?DateTimeTimeZone {
        return $this->reminderDateTime;
    }

    /**
     * Gets the status property value. Indicates the state or progress of the task. Possible values are: notStarted, inProgress, completed, waitingOnOthers, deferred.
     * @return TaskStatus|null
    */
    public function getStatus(): ?TaskStatus {
        return $this->status;
    }

    /**
     * Gets the title property value. A brief description of the task.
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
        $writer->writeObjectValue('body', $this->body);
        $writer->writeDateTimeValue('bodyLastModifiedDateTime', $this->bodyLastModifiedDateTime);
        $writer->writeCollectionOfPrimitiveValues('categories', $this->categories);
        $writer->writeCollectionOfObjectValues('checklistItems', $this->checklistItems);
        $writer->writeObjectValue('completedDateTime', $this->completedDateTime);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('dueDateTime', $this->dueDateTime);
        $writer->writeCollectionOfObjectValues('extensions', $this->extensions);
        $writer->writeEnumValue('importance', $this->importance);
        $writer->writeBooleanValue('isReminderOn', $this->isReminderOn);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfObjectValues('linkedResources', $this->linkedResources);
        $writer->writeObjectValue('recurrence', $this->recurrence);
        $writer->writeObjectValue('reminderDateTime', $this->reminderDateTime);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('title', $this->title);
    }

    /**
     * Sets the body property value. The task body that typically contains information about the task.
     *  @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value ): void {
        $this->body = $value;
    }

    /**
     * Sets the bodyLastModifiedDateTime property value. The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     *  @param DateTime|null $value Value to set for the bodyLastModifiedDateTime property.
    */
    public function setBodyLastModifiedDateTime(?DateTime $value ): void {
        $this->bodyLastModifiedDateTime = $value;
    }

    /**
     * Sets the categories property value. The categories associated with the task. Each category corresponds to the displayName property of an outlookCategory that the user has defined.
     *  @param array<string>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value ): void {
        $this->categories = $value;
    }

    /**
     * Sets the checklistItems property value. A collection of smaller subtasks linked to the more complex parent task.
     *  @param array<ChecklistItem>|null $value Value to set for the checklistItems property.
    */
    public function setChecklistItems(?array $value ): void {
        $this->checklistItems = $value;
    }

    /**
     * Sets the completedDateTime property value. The date in the specified time zone that the task was finished.
     *  @param DateTimeTimeZone|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTimeTimeZone $value ): void {
        $this->completedDateTime = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time when the task was created. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the dueDateTime property value. The date in the specified time zone that the task is to be finished.
     *  @param DateTimeTimeZone|null $value Value to set for the dueDateTime property.
    */
    public function setDueDateTime(?DateTimeTimeZone $value ): void {
        $this->dueDateTime = $value;
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the task. Nullable.
     *  @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value ): void {
        $this->extensions = $value;
    }

    /**
     * Sets the importance property value. The importance of the task. Possible values are: low, normal, high.
     *  @param Importance|null $value Value to set for the importance property.
    */
    public function setImportance(?Importance $value ): void {
        $this->importance = $value;
    }

    /**
     * Sets the isReminderOn property value. Set to true if an alert is set to remind the user of the task.
     *  @param bool|null $value Value to set for the isReminderOn property.
    */
    public function setIsReminderOn(?bool $value ): void {
        $this->isReminderOn = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the task was last modified. By default, it is in UTC. You can provide a custom time zone in the request header. The property value uses ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2020 would look like this: '2020-01-01T00:00:00Z'.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the linkedResources property value. A collection of resources linked to the task.
     *  @param array<LinkedResource>|null $value Value to set for the linkedResources property.
    */
    public function setLinkedResources(?array $value ): void {
        $this->linkedResources = $value;
    }

    /**
     * Sets the recurrence property value. The recurrence pattern for the task.
     *  @param PatternedRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?PatternedRecurrence $value ): void {
        $this->recurrence = $value;
    }

    /**
     * Sets the reminderDateTime property value. The date and time for a reminder alert of the task to occur.
     *  @param DateTimeTimeZone|null $value Value to set for the reminderDateTime property.
    */
    public function setReminderDateTime(?DateTimeTimeZone $value ): void {
        $this->reminderDateTime = $value;
    }

    /**
     * Sets the status property value. Indicates the state or progress of the task. Possible values are: notStarted, inProgress, completed, waitingOnOthers, deferred.
     *  @param TaskStatus|null $value Value to set for the status property.
    */
    public function setStatus(?TaskStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the title property value. A brief description of the task.
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

}
