<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TodoTaskList extends Entity implements Parsable 
{
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
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the task list. Nullable.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->getBackingStore()->get('extensions');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getCollectionOfObjectValues([Extension::class, 'createFromDiscriminatorValue'])),
            'isOwner' => fn(ParseNode $n) => $o->setIsOwner($n->getBooleanValue()),
            'isShared' => fn(ParseNode $n) => $o->setIsShared($n->getBooleanValue()),
            'tasks' => fn(ParseNode $n) => $o->setTasks($n->getCollectionOfObjectValues([TodoTask::class, 'createFromDiscriminatorValue'])),
            'wellknownListName' => fn(ParseNode $n) => $o->setWellknownListName($n->getEnumValue(WellknownListName::class)),
        ]);
    }

    /**
     * Gets the isOwner property value. True if the user is owner of the given task list.
     * @return bool|null
    */
    public function getIsOwner(): ?bool {
        return $this->getBackingStore()->get('isOwner');
    }

    /**
     * Gets the isShared property value. True if the task list is shared with other users
     * @return bool|null
    */
    public function getIsShared(): ?bool {
        return $this->getBackingStore()->get('isShared');
    }

    /**
     * Gets the tasks property value. The tasks in this task list. Read-only. Nullable.
     * @return array<TodoTask>|null
    */
    public function getTasks(): ?array {
        return $this->getBackingStore()->get('tasks');
    }

    /**
     * Gets the wellknownListName property value. The wellknownListName property
     * @return WellknownListName|null
    */
    public function getWellknownListName(): ?WellknownListName {
        return $this->getBackingStore()->get('wellknownListName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('extensions', $this->getExtensions());
        $writer->writeBooleanValue('isOwner', $this->getIsOwner());
        $writer->writeBooleanValue('isShared', $this->getIsShared());
        $writer->writeCollectionOfObjectValues('tasks', $this->getTasks());
        $writer->writeEnumValue('wellknownListName', $this->getWellknownListName());
    }

    /**
     * Sets the displayName property value. The name of the task list.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the task list. Nullable.
     *  @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the isOwner property value. True if the user is owner of the given task list.
     *  @param bool|null $value Value to set for the isOwner property.
    */
    public function setIsOwner(?bool $value): void {
        $this->getBackingStore()->set('isOwner', $value);
    }

    /**
     * Sets the isShared property value. True if the task list is shared with other users
     *  @param bool|null $value Value to set for the isShared property.
    */
    public function setIsShared(?bool $value): void {
        $this->getBackingStore()->set('isShared', $value);
    }

    /**
     * Sets the tasks property value. The tasks in this task list. Read-only. Nullable.
     *  @param array<TodoTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value): void {
        $this->getBackingStore()->set('tasks', $value);
    }

    /**
     * Sets the wellknownListName property value. The wellknownListName property
     *  @param WellknownListName|null $value Value to set for the wellknownListName property.
    */
    public function setWellknownListName(?WellknownListName $value): void {
        $this->getBackingStore()->set('wellknownListName', $value);
    }

}
