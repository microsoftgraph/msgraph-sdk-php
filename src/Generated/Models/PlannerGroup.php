<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerGroup extends Entity implements Parsable 
{
    /**
     * Instantiates a new plannerGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerGroup {
        return new PlannerGroup();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'plans' => fn(ParseNode $n) => $o->setPlans($n->getCollectionOfObjectValues([PlannerPlan::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the plans property value. Read-only. Nullable. Returns the plannerPlans owned by the group.
     * @return array<PlannerPlan>|null
    */
    public function getPlans(): ?array {
        return $this->getBackingStore()->get('plans');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('plans', $this->getPlans());
    }

    /**
     * Sets the plans property value. Read-only. Nullable. Returns the plannerPlans owned by the group.
     *  @param array<PlannerPlan>|null $value Value to set for the plans property.
    */
    public function setPlans(?array $value): void {
        $this->getBackingStore()->set('plans', $value);
    }

}
