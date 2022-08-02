<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerGroup extends Entity implements Parsable 
{
    /**
     * @var array<PlannerPlan>|null $plans Read-only. Nullable. Returns the plannerPlans owned by the group.
    */
    private ?array $plans = null;
    
    /**
     * Instantiates a new plannerGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.plannerGroup');
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
            'plans' => function (ParseNode $n) use ($o) { $o->setPlans($n->getCollectionOfObjectValues(array(PlannerPlan::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the plans property value. Read-only. Nullable. Returns the plannerPlans owned by the group.
     * @return array<PlannerPlan>|null
    */
    public function getPlans(): ?array {
        return $this->plans;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('plans', $this->plans);
    }

    /**
     * Sets the plans property value. Read-only. Nullable. Returns the plannerPlans owned by the group.
     *  @param array<PlannerPlan>|null $value Value to set for the plans property.
    */
    public function setPlans(?array $value ): void {
        $this->plans = $value;
    }

}
