<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerPlan extends Entity implements Parsable 
{
    /**
     * Instantiates a new plannerPlan and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.plannerPlan');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PlannerPlan
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PlannerPlan {
        return new PlannerPlan();
    }

    /**
     * Gets the buckets property value. Read-only. Nullable. Collection of buckets in the plan.
     * @return array<PlannerBucket>|null
    */
    public function getBuckets(): ?array {
        return $this->getBackingStore()->get('buckets');
    }

    /**
     * Gets the container property value. Identifies the container of the plan. After it is set, this property can’t be updated. Required.
     * @return PlannerPlanContainer|null
    */
    public function getContainer(): ?PlannerPlanContainer {
        return $this->getBackingStore()->get('container');
    }

    /**
     * Gets the createdBy property value. Read-only. The user who created the plan.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. Read-only. Date and time at which the plan is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the details property value. Read-only. Nullable. Additional details about the plan.
     * @return PlannerPlanDetails|null
    */
    public function getDetails(): ?PlannerPlanDetails {
        return $this->getBackingStore()->get('details');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'buckets' => fn(ParseNode $n) => $o->setBuckets($n->getCollectionOfObjectValues([PlannerBucket::class, 'createFromDiscriminatorValue'])),
            'container' => fn(ParseNode $n) => $o->setContainer($n->getObjectValue([PlannerPlanContainer::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getObjectValue([PlannerPlanDetails::class, 'createFromDiscriminatorValue'])),
            'owner' => fn(ParseNode $n) => $o->setOwner($n->getStringValue()),
            'tasks' => fn(ParseNode $n) => $o->setTasks($n->getCollectionOfObjectValues([PlannerTask::class, 'createFromDiscriminatorValue'])),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
        ]);
    }

    /**
     * Gets the owner property value. The owner property
     * @return string|null
    */
    public function getOwner(): ?string {
        return $this->getBackingStore()->get('owner');
    }

    /**
     * Gets the tasks property value. Read-only. Nullable. Collection of tasks in the plan.
     * @return array<PlannerTask>|null
    */
    public function getTasks(): ?array {
        return $this->getBackingStore()->get('tasks');
    }

    /**
     * Gets the title property value. Required. Title of the plan.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->getBackingStore()->get('title');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('buckets', $this->getBuckets());
        $writer->writeObjectValue('container', $this->getContainer());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('details', $this->getDetails());
        $writer->writeStringValue('owner', $this->getOwner());
        $writer->writeCollectionOfObjectValues('tasks', $this->getTasks());
        $writer->writeStringValue('title', $this->getTitle());
    }

    /**
     * Sets the buckets property value. Read-only. Nullable. Collection of buckets in the plan.
     *  @param array<PlannerBucket>|null $value Value to set for the buckets property.
    */
    public function setBuckets(?array $value): void {
        $this->getBackingStore()->set('buckets', $value);
    }

    /**
     * Sets the container property value. Identifies the container of the plan. After it is set, this property can’t be updated. Required.
     *  @param PlannerPlanContainer|null $value Value to set for the container property.
    */
    public function setContainer(?PlannerPlanContainer $value): void {
        $this->getBackingStore()->set('container', $value);
    }

    /**
     * Sets the createdBy property value. Read-only. The user who created the plan.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. Read-only. Date and time at which the plan is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the details property value. Read-only. Nullable. Additional details about the plan.
     *  @param PlannerPlanDetails|null $value Value to set for the details property.
    */
    public function setDetails(?PlannerPlanDetails $value): void {
        $this->getBackingStore()->set('details', $value);
    }

    /**
     * Sets the owner property value. The owner property
     *  @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value): void {
        $this->getBackingStore()->set('owner', $value);
    }

    /**
     * Sets the tasks property value. Read-only. Nullable. Collection of tasks in the plan.
     *  @param array<PlannerTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value): void {
        $this->getBackingStore()->set('tasks', $value);
    }

    /**
     * Sets the title property value. Required. Title of the plan.
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value): void {
        $this->getBackingStore()->set('title', $value);
    }

}
