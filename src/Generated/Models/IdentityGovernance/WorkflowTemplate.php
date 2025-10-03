<?php

namespace Microsoft\\Graph\\Generated\Models\IdentityGovernance;

use Microsoft\\Graph\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class WorkflowTemplate extends Entity implements Parsable 
{
    /**
     * Instantiates a new WorkflowTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkflowTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkflowTemplate {
        return new WorkflowTemplate();
    }

    /**
     * Gets the category property value. The category property
     * @return LifecycleWorkflowCategory|null
    */
    public function getCategory(): ?LifecycleWorkflowCategory {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || $val instanceof LifecycleWorkflowCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the description property value. The description of the workflowTemplate.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The display name of the workflowTemplate.Supports $filter(eq, ne) and $orderby.
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
     * Gets the executionConditions property value. Conditions describing when to execute the workflow and the criteria to identify in-scope subject set.
     * @return WorkflowExecutionConditions|null
    */
    public function getExecutionConditions(): ?WorkflowExecutionConditions {
        $val = $this->getBackingStore()->get('executionConditions');
        if (is_null($val) || $val instanceof WorkflowExecutionConditions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'executionConditions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(LifecycleWorkflowCategory::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'executionConditions' => fn(ParseNode $n) => $o->setExecutionConditions($n->getObjectValue([WorkflowExecutionConditions::class, 'createFromDiscriminatorValue'])),
            'tasks' => fn(ParseNode $n) => $o->setTasks($n->getCollectionOfObjectValues([Task::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the tasks property value. Represents the configured tasks to execute and their execution sequence within a workflow. This relationship is expanded by default.
     * @return array<Task>|null
    */
    public function getTasks(): ?array {
        $val = $this->getBackingStore()->get('tasks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Task::class);
            /** @var array<Task>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tasks'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('executionConditions', $this->getExecutionConditions());
        $writer->writeCollectionOfObjectValues('tasks', $this->getTasks());
    }

    /**
     * Sets the category property value. The category property
     * @param LifecycleWorkflowCategory|null $value Value to set for the category property.
    */
    public function setCategory(?LifecycleWorkflowCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the description property value. The description of the workflowTemplate.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the workflowTemplate.Supports $filter(eq, ne) and $orderby.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the executionConditions property value. Conditions describing when to execute the workflow and the criteria to identify in-scope subject set.
     * @param WorkflowExecutionConditions|null $value Value to set for the executionConditions property.
    */
    public function setExecutionConditions(?WorkflowExecutionConditions $value): void {
        $this->getBackingStore()->set('executionConditions', $value);
    }

    /**
     * Sets the tasks property value. Represents the configured tasks to execute and their execution sequence within a workflow. This relationship is expanded by default.
     * @param array<Task>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value): void {
        $this->getBackingStore()->set('tasks', $value);
    }

}
