<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerAssignedToTaskBoardTaskFormat extends Entity implements Parsable 
{
    /**
     * @var PlannerOrderHintsByAssignee|null $orderHintsByAssignee Dictionary of hints used to order tasks on the AssignedTo view of the Task Board. The key of each entry is one of the users the task is assigned to and the value is the order hint. The format of each value is defined as outlined here.
    */
    private ?PlannerOrderHintsByAssignee $orderHintsByAssignee = null;
    
    /**
     * @var string|null $unassignedOrderHint Hint value used to order the task on the AssignedTo view of the Task Board when the task is not assigned to anyone, or if the orderHintsByAssignee dictionary does not provide an order hint for the user the task is assigned to. The format is defined as outlined here.
    */
    private ?string $unassignedOrderHint = null;
    
    /**
     * Instantiates a new plannerAssignedToTaskBoardTaskFormat and sets the default values.
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'orderHintsByAssignee' => function (ParseNode $n) use ($o) { $o->setOrderHintsByAssignee($n->getObjectValue(array(PlannerOrderHintsByAssignee::class, 'createFromDiscriminatorValue'))); },
            'unassignedOrderHint' => function (ParseNode $n) use ($o) { $o->setUnassignedOrderHint($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the orderHintsByAssignee property value. Dictionary of hints used to order tasks on the AssignedTo view of the Task Board. The key of each entry is one of the users the task is assigned to and the value is the order hint. The format of each value is defined as outlined here.
     * @return PlannerOrderHintsByAssignee|null
    */
    public function getOrderHintsByAssignee(): ?PlannerOrderHintsByAssignee {
        return $this->orderHintsByAssignee;
    }

    /**
     * Gets the unassignedOrderHint property value. Hint value used to order the task on the AssignedTo view of the Task Board when the task is not assigned to anyone, or if the orderHintsByAssignee dictionary does not provide an order hint for the user the task is assigned to. The format is defined as outlined here.
     * @return string|null
    */
    public function getUnassignedOrderHint(): ?string {
        return $this->unassignedOrderHint;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('orderHintsByAssignee', $this->orderHintsByAssignee);
        $writer->writeStringValue('unassignedOrderHint', $this->unassignedOrderHint);
    }

    /**
     * Sets the orderHintsByAssignee property value. Dictionary of hints used to order tasks on the AssignedTo view of the Task Board. The key of each entry is one of the users the task is assigned to and the value is the order hint. The format of each value is defined as outlined here.
     *  @param PlannerOrderHintsByAssignee|null $value Value to set for the orderHintsByAssignee property.
    */
    public function setOrderHintsByAssignee(?PlannerOrderHintsByAssignee $value ): void {
        $this->orderHintsByAssignee = $value;
    }

    /**
     * Sets the unassignedOrderHint property value. Hint value used to order the task on the AssignedTo view of the Task Board when the task is not assigned to anyone, or if the orderHintsByAssignee dictionary does not provide an order hint for the user the task is assigned to. The format is defined as outlined here.
     *  @param string|null $value Value to set for the unassignedOrderHint property.
    */
    public function setUnassignedOrderHint(?string $value ): void {
        $this->unassignedOrderHint = $value;
    }

}
