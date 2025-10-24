<?php

namespace Microsoft\\Graph\\Generated\Models\IdentityGovernance;

use Microsoft\\Graph\\Generated\Models\DeletedItemContainer;
use Microsoft\\Graph\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class LifecycleWorkflowsContainer extends Entity implements Parsable 
{
    /**
     * Instantiates a new LifecycleWorkflowsContainer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LifecycleWorkflowsContainer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LifecycleWorkflowsContainer {
        return new LifecycleWorkflowsContainer();
    }

    /**
     * Gets the customTaskExtensions property value. The customTaskExtension instance.
     * @return array<CustomTaskExtension>|null
    */
    public function getCustomTaskExtensions(): ?array {
        $val = $this->getBackingStore()->get('customTaskExtensions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomTaskExtension::class);
            /** @var array<CustomTaskExtension>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customTaskExtensions'");
    }

    /**
     * Gets the deletedItems property value. Deleted workflows in your lifecycle workflows instance.
     * @return DeletedItemContainer|null
    */
    public function getDeletedItems(): ?DeletedItemContainer {
        $val = $this->getBackingStore()->get('deletedItems');
        if (is_null($val) || $val instanceof DeletedItemContainer) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedItems'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customTaskExtensions' => fn(ParseNode $n) => $o->setCustomTaskExtensions($n->getCollectionOfObjectValues([CustomTaskExtension::class, 'createFromDiscriminatorValue'])),
            'deletedItems' => fn(ParseNode $n) => $o->setDeletedItems($n->getObjectValue([DeletedItemContainer::class, 'createFromDiscriminatorValue'])),
            'insights' => fn(ParseNode $n) => $o->setInsights($n->getObjectValue([Insights::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([LifecycleManagementSettings::class, 'createFromDiscriminatorValue'])),
            'taskDefinitions' => fn(ParseNode $n) => $o->setTaskDefinitions($n->getCollectionOfObjectValues([TaskDefinition::class, 'createFromDiscriminatorValue'])),
            'workflows' => fn(ParseNode $n) => $o->setWorkflows($n->getCollectionOfObjectValues([Workflow::class, 'createFromDiscriminatorValue'])),
            'workflowTemplates' => fn(ParseNode $n) => $o->setWorkflowTemplates($n->getCollectionOfObjectValues([WorkflowTemplate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the insights property value. The insight container holding workflow insight summaries for a tenant.
     * @return Insights|null
    */
    public function getInsights(): ?Insights {
        $val = $this->getBackingStore()->get('insights');
        if (is_null($val) || $val instanceof Insights) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'insights'");
    }

    /**
     * Gets the settings property value. The settings property
     * @return LifecycleManagementSettings|null
    */
    public function getSettings(): ?LifecycleManagementSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof LifecycleManagementSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the taskDefinitions property value. The definition of tasks within the lifecycle workflows instance.
     * @return array<TaskDefinition>|null
    */
    public function getTaskDefinitions(): ?array {
        $val = $this->getBackingStore()->get('taskDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TaskDefinition::class);
            /** @var array<TaskDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taskDefinitions'");
    }

    /**
     * Gets the workflows property value. The workflows in the lifecycle workflows instance.
     * @return array<Workflow>|null
    */
    public function getWorkflows(): ?array {
        $val = $this->getBackingStore()->get('workflows');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Workflow::class);
            /** @var array<Workflow>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workflows'");
    }

    /**
     * Gets the workflowTemplates property value. The workflow templates in the lifecycle workflow instance.
     * @return array<WorkflowTemplate>|null
    */
    public function getWorkflowTemplates(): ?array {
        $val = $this->getBackingStore()->get('workflowTemplates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WorkflowTemplate::class);
            /** @var array<WorkflowTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workflowTemplates'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('customTaskExtensions', $this->getCustomTaskExtensions());
        $writer->writeObjectValue('deletedItems', $this->getDeletedItems());
        $writer->writeObjectValue('insights', $this->getInsights());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeCollectionOfObjectValues('taskDefinitions', $this->getTaskDefinitions());
        $writer->writeCollectionOfObjectValues('workflows', $this->getWorkflows());
        $writer->writeCollectionOfObjectValues('workflowTemplates', $this->getWorkflowTemplates());
    }

    /**
     * Sets the customTaskExtensions property value. The customTaskExtension instance.
     * @param array<CustomTaskExtension>|null $value Value to set for the customTaskExtensions property.
    */
    public function setCustomTaskExtensions(?array $value): void {
        $this->getBackingStore()->set('customTaskExtensions', $value);
    }

    /**
     * Sets the deletedItems property value. Deleted workflows in your lifecycle workflows instance.
     * @param DeletedItemContainer|null $value Value to set for the deletedItems property.
    */
    public function setDeletedItems(?DeletedItemContainer $value): void {
        $this->getBackingStore()->set('deletedItems', $value);
    }

    /**
     * Sets the insights property value. The insight container holding workflow insight summaries for a tenant.
     * @param Insights|null $value Value to set for the insights property.
    */
    public function setInsights(?Insights $value): void {
        $this->getBackingStore()->set('insights', $value);
    }

    /**
     * Sets the settings property value. The settings property
     * @param LifecycleManagementSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?LifecycleManagementSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the taskDefinitions property value. The definition of tasks within the lifecycle workflows instance.
     * @param array<TaskDefinition>|null $value Value to set for the taskDefinitions property.
    */
    public function setTaskDefinitions(?array $value): void {
        $this->getBackingStore()->set('taskDefinitions', $value);
    }

    /**
     * Sets the workflows property value. The workflows in the lifecycle workflows instance.
     * @param array<Workflow>|null $value Value to set for the workflows property.
    */
    public function setWorkflows(?array $value): void {
        $this->getBackingStore()->set('workflows', $value);
    }

    /**
     * Sets the workflowTemplates property value. The workflow templates in the lifecycle workflow instance.
     * @param array<WorkflowTemplate>|null $value Value to set for the workflowTemplates property.
    */
    public function setWorkflowTemplates(?array $value): void {
        $this->getBackingStore()->set('workflowTemplates', $value);
    }

}
