<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerPlanDetails extends Entity implements Parsable 
{
    /**
     * Instantiates a new plannerPlanDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerPlanDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerPlanDetails {
        return new PlannerPlanDetails();
    }

    /**
     * Gets the categoryDescriptions property value. An object that specifies the descriptions of the 25 categories that can be associated with tasks in the plan.
     * @return PlannerCategoryDescriptions|null
    */
    public function getCategoryDescriptions(): ?PlannerCategoryDescriptions {
        return $this->getBackingStore()->get('categoryDescriptions');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'categoryDescriptions' => fn(ParseNode $n) => $o->setCategoryDescriptions($n->getObjectValue([PlannerCategoryDescriptions::class, 'createFromDiscriminatorValue'])),
            'sharedWith' => fn(ParseNode $n) => $o->setSharedWith($n->getObjectValue([PlannerUserIds::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the sharedWith property value. Set of user IDs that this plan is shared with. If you are leveraging Microsoft 365 groups, use the Groups API to manage group membership to share the group's plan. You can also add existing members of the group to this collection, although it is not required for them to access the plan owned by the group.
     * @return PlannerUserIds|null
    */
    public function getSharedWith(): ?PlannerUserIds {
        return $this->getBackingStore()->get('sharedWith');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('categoryDescriptions', $this->getCategoryDescriptions());
        $writer->writeObjectValue('sharedWith', $this->getSharedWith());
    }

    /**
     * Sets the categoryDescriptions property value. An object that specifies the descriptions of the 25 categories that can be associated with tasks in the plan.
     *  @param PlannerCategoryDescriptions|null $value Value to set for the categoryDescriptions property.
    */
    public function setCategoryDescriptions(?PlannerCategoryDescriptions $value): void {
        $this->getBackingStore()->set('categoryDescriptions', $value);
    }

    /**
     * Sets the sharedWith property value. Set of user IDs that this plan is shared with. If you are leveraging Microsoft 365 groups, use the Groups API to manage group membership to share the group's plan. You can also add existing members of the group to this collection, although it is not required for them to access the plan owned by the group.
     *  @param PlannerUserIds|null $value Value to set for the sharedWith property.
    */
    public function setSharedWith(?PlannerUserIds $value): void {
        $this->getBackingStore()->set('sharedWith', $value);
    }

}
