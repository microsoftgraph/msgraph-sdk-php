<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TodoTaskList extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
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
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the task list. Nullable.
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
        $val = $this->getBackingStore()->get('isOwner');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isOwner'");
    }

    /**
     * Gets the isShared property value. True if the task list is shared with other users
     * @return bool|null
    */
    public function getIsShared(): ?bool {
        $val = $this->getBackingStore()->get('isShared');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isShared'");
    }

    /**
     * Gets the tasks property value. The tasks in this task list. Read-only. Nullable.
     * @return array<TodoTask>|null
    */
    public function getTasks(): ?array {
        $val = $this->getBackingStore()->get('tasks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TodoTask::class);
            /** @var array<TodoTask>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tasks'");
    }

    /**
     * Gets the wellknownListName property value. The wellknownListName property
     * @return WellknownListName|null
    */
    public function getWellknownListName(): ?WellknownListName {
        $val = $this->getBackingStore()->get('wellknownListName');
        if (is_null($val) || $val instanceof WellknownListName) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'wellknownListName'");
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
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('tasks', $this->getTasks());
        $writer->writeEnumValue('wellknownListName', $this->getWellknownListName());
    }

    /**
     * Sets the displayName property value. The name of the task list.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the task list. Nullable.
     * @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the isOwner property value. True if the user is owner of the given task list.
     * @param bool|null $value Value to set for the isOwner property.
    */
    public function setIsOwner(?bool $value): void {
        $this->getBackingStore()->set('isOwner', $value);
    }

    /**
     * Sets the isShared property value. True if the task list is shared with other users
     * @param bool|null $value Value to set for the isShared property.
    */
    public function setIsShared(?bool $value): void {
        $this->getBackingStore()->set('isShared', $value);
    }

    /**
     * Sets the tasks property value. The tasks in this task list. Read-only. Nullable.
     * @param array<TodoTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value): void {
        $this->getBackingStore()->set('tasks', $value);
    }

    /**
     * Sets the wellknownListName property value. The wellknownListName property
     * @param WellknownListName|null $value Value to set for the wellknownListName property.
    */
    public function setWellknownListName(?WellknownListName $value): void {
        $this->getBackingStore()->set('wellknownListName', $value);
    }

}
