<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Generated\Models\CustomExtensionData;
use Microsoft\Graph\Generated\Models\User;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomTaskExtensionCalloutData extends CustomExtensionData implements Parsable 
{
    /**
     * Instantiates a new customTaskExtensionCalloutData and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.customTaskExtensionCalloutData');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomTaskExtensionCalloutData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomTaskExtensionCalloutData {
        return new CustomTaskExtensionCalloutData();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getObjectValue([User::class, 'createFromDiscriminatorValue'])),
            'task' => fn(ParseNode $n) => $o->setTask($n->getObjectValue([Task::class, 'createFromDiscriminatorValue'])),
            'taskProcessingresult' => fn(ParseNode $n) => $o->setTaskProcessingresult($n->getObjectValue([TaskProcessingResult::class, 'createFromDiscriminatorValue'])),
            'workflow' => fn(ParseNode $n) => $o->setWorkflow($n->getObjectValue([Workflow::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the subject property value. The subject property
     * @return User|null
    */
    public function getSubject(): ?User {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || $val instanceof User) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subject'");
    }

    /**
     * Gets the task property value. The task property
     * @return Task|null
    */
    public function getTask(): ?Task {
        $val = $this->getBackingStore()->get('task');
        if (is_null($val) || $val instanceof Task) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'task'");
    }

    /**
     * Gets the taskProcessingresult property value. The taskProcessingresult property
     * @return TaskProcessingResult|null
    */
    public function getTaskProcessingresult(): ?TaskProcessingResult {
        $val = $this->getBackingStore()->get('taskProcessingresult');
        if (is_null($val) || $val instanceof TaskProcessingResult) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taskProcessingresult'");
    }

    /**
     * Gets the workflow property value. The workflow property
     * @return Workflow|null
    */
    public function getWorkflow(): ?Workflow {
        $val = $this->getBackingStore()->get('workflow');
        if (is_null($val) || $val instanceof Workflow) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workflow'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('subject', $this->getSubject());
        $writer->writeObjectValue('task', $this->getTask());
        $writer->writeObjectValue('taskProcessingresult', $this->getTaskProcessingresult());
        $writer->writeObjectValue('workflow', $this->getWorkflow());
    }

    /**
     * Sets the subject property value. The subject property
     * @param User|null $value Value to set for the subject property.
    */
    public function setSubject(?User $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the task property value. The task property
     * @param Task|null $value Value to set for the task property.
    */
    public function setTask(?Task $value): void {
        $this->getBackingStore()->set('task', $value);
    }

    /**
     * Sets the taskProcessingresult property value. The taskProcessingresult property
     * @param TaskProcessingResult|null $value Value to set for the taskProcessingresult property.
    */
    public function setTaskProcessingresult(?TaskProcessingResult $value): void {
        $this->getBackingStore()->set('taskProcessingresult', $value);
    }

    /**
     * Sets the workflow property value. The workflow property
     * @param Workflow|null $value Value to set for the workflow property.
    */
    public function setWorkflow(?Workflow $value): void {
        $this->getBackingStore()->set('workflow', $value);
    }

}
