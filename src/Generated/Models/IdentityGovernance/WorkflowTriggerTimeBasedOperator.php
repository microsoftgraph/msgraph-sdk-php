<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkflowTriggerTimeBasedOperator extends WorkflowExecutionTriggerOperator implements Parsable 
{
    /**
     * Instantiates a new WorkflowTriggerTimeBasedOperator and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.workflowTriggerTimeBasedOperator');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkflowTriggerTimeBasedOperator
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkflowTriggerTimeBasedOperator {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.identityGovernance.operatorBetween': return new OperatorBetween();
                case '#microsoft.graph.identityGovernance.operatorEqualTo': return new OperatorEqualTo();
                case '#microsoft.graph.identityGovernance.operatorLessThanEqualTo': return new OperatorLessThanEqualTo();
            }
        }
        return new WorkflowTriggerTimeBasedOperator();
    }

    /**
     * Gets the eventTiming property value. The eventTiming property
     * @return WorkflowTriggerOperatorEventTiming|null
    */
    public function getEventTiming(): ?WorkflowTriggerOperatorEventTiming {
        $val = $this->getBackingStore()->get('eventTiming');
        if (is_null($val) || $val instanceof WorkflowTriggerOperatorEventTiming) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventTiming'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'eventTiming' => fn(ParseNode $n) => $o->setEventTiming($n->getEnumValue(WorkflowTriggerOperatorEventTiming::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('eventTiming', $this->getEventTiming());
    }

    /**
     * Sets the eventTiming property value. The eventTiming property
     * @param WorkflowTriggerOperatorEventTiming|null $value Value to set for the eventTiming property.
    */
    public function setEventTiming(?WorkflowTriggerOperatorEventTiming $value): void {
        $this->getBackingStore()->set('eventTiming', $value);
    }

}
