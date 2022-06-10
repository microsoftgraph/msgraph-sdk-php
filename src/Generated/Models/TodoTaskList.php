<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TodoTaskList extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName The name of the task list.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<Extension>|null $extensions The collection of open extensions defined for the task list. Nullable.
    */
    private ?array $extensions = null;
    
    /**
     * @var bool|null $isOwner True if the user is owner of the given task list.
    */
    private ?bool $isOwner = null;
    
    /**
     * @var bool|null $isShared True if the task list is shared with other users
    */
    private ?bool $isShared = null;
    
    /**
     * @var array<TodoTask>|null $tasks The tasks in this task list. Read-only. Nullable.
    */
    private ?array $tasks = null;
    
    /**
     * @var WellknownListName|null $wellknownListName Property indicating the list name if the given list is a well-known list. Possible values are: none, defaultList, flaggedEmails, unknownFutureValue.
    */
    private ?WellknownListName $wellknownListName = null;
    
    /**
     * Instantiates a new todoTaskList and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TodoTaskList
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TodoTaskList {
        return new TodoTaskList();
    }

    /**
     * Gets the displayName property value. The name of the task list.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the task list. Nullable.
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
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'extensions' => function (ParseNode $n) use ($o) { $o->setExtensions($n->getCollectionOfObjectValues(array(Extension::class, 'createFromDiscriminatorValue'))); },
            'isOwner' => function (ParseNode $n) use ($o) { $o->setIsOwner($n->getBooleanValue()); },
            'isShared' => function (ParseNode $n) use ($o) { $o->setIsShared($n->getBooleanValue()); },
            'tasks' => function (ParseNode $n) use ($o) { $o->setTasks($n->getCollectionOfObjectValues(array(TodoTask::class, 'createFromDiscriminatorValue'))); },
            'wellknownListName' => function (ParseNode $n) use ($o) { $o->setWellknownListName($n->getEnumValue(WellknownListName::class)); },
        ]);
    }

    /**
     * Gets the isOwner property value. True if the user is owner of the given task list.
     * @return bool|null
    */
    public function getIsOwner(): ?bool {
        return $this->isOwner;
    }

    /**
     * Gets the isShared property value. True if the task list is shared with other users
     * @return bool|null
    */
    public function getIsShared(): ?bool {
        return $this->isShared;
    }

    /**
     * Gets the tasks property value. The tasks in this task list. Read-only. Nullable.
     * @return array<TodoTask>|null
    */
    public function getTasks(): ?array {
        return $this->tasks;
    }

    /**
     * Gets the wellknownListName property value. Property indicating the list name if the given list is a well-known list. Possible values are: none, defaultList, flaggedEmails, unknownFutureValue.
     * @return WellknownListName|null
    */
    public function getWellknownListName(): ?WellknownListName {
        return $this->wellknownListName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('extensions', $this->extensions);
        $writer->writeBooleanValue('isOwner', $this->isOwner);
        $writer->writeBooleanValue('isShared', $this->isShared);
        $writer->writeCollectionOfObjectValues('tasks', $this->tasks);
        $writer->writeEnumValue('wellknownListName', $this->wellknownListName);
    }

    /**
     * Sets the displayName property value. The name of the task list.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the task list. Nullable.
     *  @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value ): void {
        $this->extensions = $value;
    }

    /**
     * Sets the isOwner property value. True if the user is owner of the given task list.
     *  @param bool|null $value Value to set for the isOwner property.
    */
    public function setIsOwner(?bool $value ): void {
        $this->isOwner = $value;
    }

    /**
     * Sets the isShared property value. True if the task list is shared with other users
     *  @param bool|null $value Value to set for the isShared property.
    */
    public function setIsShared(?bool $value ): void {
        $this->isShared = $value;
    }

    /**
     * Sets the tasks property value. The tasks in this task list. Read-only. Nullable.
     *  @param array<TodoTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value ): void {
        $this->tasks = $value;
    }

    /**
     * Sets the wellknownListName property value. Property indicating the list name if the given list is a well-known list. Possible values are: none, defaultList, flaggedEmails, unknownFutureValue.
     *  @param WellknownListName|null $value Value to set for the wellknownListName property.
    */
    public function setWellknownListName(?WellknownListName $value ): void {
        $this->wellknownListName = $value;
    }

}
