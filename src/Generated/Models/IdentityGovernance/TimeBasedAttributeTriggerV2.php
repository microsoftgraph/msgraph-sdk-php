<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TimeBasedAttributeTriggerV2 extends WorkflowExecutionTrigger implements Parsable 
{
    /**
     * Instantiates a new TimeBasedAttributeTriggerV2 and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.timeBasedAttributeTriggerV2');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimeBasedAttributeTriggerV2
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TimeBasedAttributeTriggerV2 {
        return new TimeBasedAttributeTriggerV2();
    }

    /**
     * Gets the attribute property value. The name of the date-type user attribute to evaluate, such as employeeHireDate or employeeLeaveDateTime.
     * @return string|null
    */
    public function getAttribute(): ?string {
        $val = $this->getBackingStore()->get('attribute');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attribute'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'attribute' => fn(ParseNode $n) => $o->setAttribute($n->getStringValue()),
            'operator' => fn(ParseNode $n) => $o->setOperator($n->getObjectValue([WorkflowExecutionTriggerOperator::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the operator property value. The operator property
     * @return WorkflowExecutionTriggerOperator|null
    */
    public function getOperator(): ?WorkflowExecutionTriggerOperator {
        $val = $this->getBackingStore()->get('operator');
        if (is_null($val) || $val instanceof WorkflowExecutionTriggerOperator) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operator'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('attribute', $this->getAttribute());
        $writer->writeObjectValue('operator', $this->getOperator());
    }

    /**
     * Sets the attribute property value. The name of the date-type user attribute to evaluate, such as employeeHireDate or employeeLeaveDateTime.
     * @param string|null $value Value to set for the attribute property.
    */
    public function setAttribute(?string $value): void {
        $this->getBackingStore()->set('attribute', $value);
    }

    /**
     * Sets the operator property value. The operator property
     * @param WorkflowExecutionTriggerOperator|null $value Value to set for the operator property.
    */
    public function setOperator(?WorkflowExecutionTriggerOperator $value): void {
        $this->getBackingStore()->set('operator', $value);
    }

}
