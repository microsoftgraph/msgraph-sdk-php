<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Generated\Models\SubjectSet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TriggerAndScopeBasedConditions extends WorkflowExecutionConditions implements Parsable 
{
    /**
     * Instantiates a new TriggerAndScopeBasedConditions and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.triggerAndScopeBasedConditions');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TriggerAndScopeBasedConditions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TriggerAndScopeBasedConditions {
        return new TriggerAndScopeBasedConditions();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'scope' => fn(ParseNode $n) => $o->setScope($n->getObjectValue([SubjectSet::class, 'createFromDiscriminatorValue'])),
            'trigger' => fn(ParseNode $n) => $o->setTrigger($n->getObjectValue([WorkflowExecutionTrigger::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the scope property value. Defines who the workflow runs for.
     * @return SubjectSet|null
    */
    public function getScope(): ?SubjectSet {
        return $this->getBackingStore()->get('scope');
    }

    /**
     * Gets the trigger property value. What triggers a workflow to run.
     * @return WorkflowExecutionTrigger|null
    */
    public function getTrigger(): ?WorkflowExecutionTrigger {
        return $this->getBackingStore()->get('trigger');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('scope', $this->getScope());
        $writer->writeObjectValue('trigger', $this->getTrigger());
    }

    /**
     * Sets the scope property value. Defines who the workflow runs for.
     * @param SubjectSet|null $value Value to set for the scope property.
    */
    public function setScope(?SubjectSet $value): void {
        $this->getBackingStore()->set('scope', $value);
    }

    /**
     * Sets the trigger property value. What triggers a workflow to run.
     * @param WorkflowExecutionTrigger|null $value Value to set for the trigger property.
    */
    public function setTrigger(?WorkflowExecutionTrigger $value): void {
        $this->getBackingStore()->set('trigger', $value);
    }

}
