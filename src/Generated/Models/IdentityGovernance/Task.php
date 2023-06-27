<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Graph\Generated\Models\KeyValuePair;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Task extends Entity implements Parsable 
{
    /**
     * Instantiates a new task and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Task
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Task {
        return new Task();
    }

    /**
     * Gets the arguments property value. Arguments included within the task.  For guidance to configure this property, see Configure the arguments for built-in Lifecycle Workflow tasks. Required.
     * @return array<KeyValuePair>|null
    */
    public function getArguments(): ?array {
        return $this->getBackingStore()->get('arguments');
    }

    /**
     * Gets the category property value. The category property
     * @return LifecycleTaskCategory|null
    */
    public function getCategory(): ?LifecycleTaskCategory {
        return $this->getBackingStore()->get('category');
    }

    /**
     * Gets the continueOnError property value. A boolean value that specifies whether, if this task fails, the workflow will stop, and subsequent tasks will not run. Optional.
     * @return bool|null
    */
    public function getContinueOnError(): ?bool {
        return $this->getBackingStore()->get('continueOnError');
    }

    /**
     * Gets the description property value. A string that describes the purpose of the task for administrative use. Optional.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. A unique string that identifies the task. Required.Supports $filter(eq, ne) and orderBy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the executionSequence property value. An integer that states in what order the task will run in a workflow.Supports $orderby.
     * @return int|null
    */
    public function getExecutionSequence(): ?int {
        return $this->getBackingStore()->get('executionSequence');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'arguments' => fn(ParseNode $n) => $o->setArguments($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(LifecycleTaskCategory::class)),
            'continueOnError' => fn(ParseNode $n) => $o->setContinueOnError($n->getBooleanValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'executionSequence' => fn(ParseNode $n) => $o->setExecutionSequence($n->getIntegerValue()),
            'isEnabled' => fn(ParseNode $n) => $o->setIsEnabled($n->getBooleanValue()),
            'taskDefinitionId' => fn(ParseNode $n) => $o->setTaskDefinitionId($n->getStringValue()),
            'taskProcessingResults' => fn(ParseNode $n) => $o->setTaskProcessingResults($n->getCollectionOfObjectValues([TaskProcessingResult::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isEnabled property value. A boolean value that denotes whether the task is set to run or not. Optional.Supports $filter(eq, ne) and orderBy.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->getBackingStore()->get('isEnabled');
    }

    /**
     * Gets the taskDefinitionId property value. A unique template identifier for the task. For more information about the tasks that Lifecycle Workflows currently supports and their unique identifiers, see supported tasks. Required.Supports $filter(eq, ne).
     * @return string|null
    */
    public function getTaskDefinitionId(): ?string {
        return $this->getBackingStore()->get('taskDefinitionId');
    }

    /**
     * Gets the taskProcessingResults property value. The result of processing the task.
     * @return array<TaskProcessingResult>|null
    */
    public function getTaskProcessingResults(): ?array {
        return $this->getBackingStore()->get('taskProcessingResults');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('arguments', $this->getArguments());
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeBooleanValue('continueOnError', $this->getContinueOnError());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeIntegerValue('executionSequence', $this->getExecutionSequence());
        $writer->writeBooleanValue('isEnabled', $this->getIsEnabled());
        $writer->writeStringValue('taskDefinitionId', $this->getTaskDefinitionId());
        $writer->writeCollectionOfObjectValues('taskProcessingResults', $this->getTaskProcessingResults());
    }

    /**
     * Sets the arguments property value. Arguments included within the task.  For guidance to configure this property, see Configure the arguments for built-in Lifecycle Workflow tasks. Required.
     * @param array<KeyValuePair>|null $value Value to set for the arguments property.
    */
    public function setArguments(?array $value): void {
        $this->getBackingStore()->set('arguments', $value);
    }

    /**
     * Sets the category property value. The category property
     * @param LifecycleTaskCategory|null $value Value to set for the category property.
    */
    public function setCategory(?LifecycleTaskCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the continueOnError property value. A boolean value that specifies whether, if this task fails, the workflow will stop, and subsequent tasks will not run. Optional.
     * @param bool|null $value Value to set for the continueOnError property.
    */
    public function setContinueOnError(?bool $value): void {
        $this->getBackingStore()->set('continueOnError', $value);
    }

    /**
     * Sets the description property value. A string that describes the purpose of the task for administrative use. Optional.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. A unique string that identifies the task. Required.Supports $filter(eq, ne) and orderBy.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the executionSequence property value. An integer that states in what order the task will run in a workflow.Supports $orderby.
     * @param int|null $value Value to set for the executionSequence property.
    */
    public function setExecutionSequence(?int $value): void {
        $this->getBackingStore()->set('executionSequence', $value);
    }

    /**
     * Sets the isEnabled property value. A boolean value that denotes whether the task is set to run or not. Optional.Supports $filter(eq, ne) and orderBy.
     * @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('isEnabled', $value);
    }

    /**
     * Sets the taskDefinitionId property value. A unique template identifier for the task. For more information about the tasks that Lifecycle Workflows currently supports and their unique identifiers, see supported tasks. Required.Supports $filter(eq, ne).
     * @param string|null $value Value to set for the taskDefinitionId property.
    */
    public function setTaskDefinitionId(?string $value): void {
        $this->getBackingStore()->set('taskDefinitionId', $value);
    }

    /**
     * Sets the taskProcessingResults property value. The result of processing the task.
     * @param array<TaskProcessingResult>|null $value Value to set for the taskProcessingResults property.
    */
    public function setTaskProcessingResults(?array $value): void {
        $this->getBackingStore()->set('taskProcessingResults', $value);
    }

}
