<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerAssignedToTaskBoardTaskFormat extends Entity implements Parsable 
{
    /**
     * Instantiates a new PlannerAssignedToTaskBoardTaskFormat and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerAssignedToTaskBoardTaskFormat
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerAssignedToTaskBoardTaskFormat {
        return new PlannerAssignedToTaskBoardTaskFormat();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'orderHintsByAssignee' => fn(ParseNode $n) => $o->setOrderHintsByAssignee($n->getObjectValue([PlannerOrderHintsByAssignee::class, 'createFromDiscriminatorValue'])),
            'unassignedOrderHint' => fn(ParseNode $n) => $o->setUnassignedOrderHint($n->getStringValue()),
        ]);
    }

    /**
     * Gets the orderHintsByAssignee property value. Dictionary of hints used to order tasks on the AssignedTo view of the Task Board. The key of each entry is one of the users the task is assigned to and the value is the order hint. The format of each value is defined as outlined here.
     * @return PlannerOrderHintsByAssignee|null
    */
    public function getOrderHintsByAssignee(): ?PlannerOrderHintsByAssignee {
        $val = $this->getBackingStore()->get('orderHintsByAssignee');
        if (is_null($val) || $val instanceof PlannerOrderHintsByAssignee) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'orderHintsByAssignee'");
    }

    /**
     * Gets the unassignedOrderHint property value. Hint value used to order the task on the AssignedTo view of the Task Board when the task isn't assigned to anyone, or if the orderHintsByAssignee dictionary doesn't provide an order hint for the user the task is assigned to. The format is defined as outlined here.
     * @return string|null
    */
    public function getUnassignedOrderHint(): ?string {
        $val = $this->getBackingStore()->get('unassignedOrderHint');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unassignedOrderHint'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('orderHintsByAssignee', $this->getOrderHintsByAssignee());
        $writer->writeStringValue('unassignedOrderHint', $this->getUnassignedOrderHint());
    }

    /**
     * Sets the orderHintsByAssignee property value. Dictionary of hints used to order tasks on the AssignedTo view of the Task Board. The key of each entry is one of the users the task is assigned to and the value is the order hint. The format of each value is defined as outlined here.
     * @param PlannerOrderHintsByAssignee|null $value Value to set for the orderHintsByAssignee property.
    */
    public function setOrderHintsByAssignee(?PlannerOrderHintsByAssignee $value): void {
        $this->getBackingStore()->set('orderHintsByAssignee', $value);
    }

    /**
     * Sets the unassignedOrderHint property value. Hint value used to order the task on the AssignedTo view of the Task Board when the task isn't assigned to anyone, or if the orderHintsByAssignee dictionary doesn't provide an order hint for the user the task is assigned to. The format is defined as outlined here.
     * @param string|null $value Value to set for the unassignedOrderHint property.
    */
    public function setUnassignedOrderHint(?string $value): void {
        $this->getBackingStore()->set('unassignedOrderHint', $value);
    }

}
