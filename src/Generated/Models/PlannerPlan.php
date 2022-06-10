<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerPlan extends Entity implements Parsable 
{
    /**
     * @var array<PlannerBucket>|null $buckets Collection of buckets in the plan. Read-only. Nullable.
    */
    private ?array $buckets = null;
    
    /**
     * @var PlannerPlanContainer|null $container Identifies the container of the plan. After it is set, this property can’t be updated. Required.
    */
    private ?PlannerPlanContainer $container = null;
    
    /**
     * @var IdentitySet|null $createdBy Read-only. The user who created the plan.
    */
    private ?IdentitySet $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime Read-only. Date and time at which the plan is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var PlannerPlanDetails|null $details Additional details about the plan. Read-only. Nullable.
    */
    private ?PlannerPlanDetails $details = null;
    
    /**
     * @var string|null $owner The owner property
    */
    private ?string $owner = null;
    
    /**
     * @var array<PlannerTask>|null $tasks Collection of tasks in the plan. Read-only. Nullable.
    */
    private ?array $tasks = null;
    
    /**
     * @var string|null $title Required. Title of the plan.
    */
    private ?string $title = null;
    
    /**
     * Instantiates a new plannerPlan and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the buckets property value. Collection of buckets in the plan. Read-only. Nullable.
     * @return array<PlannerBucket>|null
    */
    public function getBuckets(): ?array {
        return $this->buckets;
    }

    /**
     * Gets the container property value. Identifies the container of the plan. After it is set, this property can’t be updated. Required.
     * @return PlannerPlanContainer|null
    */
    public function getContainer(): ?PlannerPlanContainer {
        return $this->container;
    }

    /**
     * Gets the createdBy property value. Read-only. The user who created the plan.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. Read-only. Date and time at which the plan is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the details property value. Additional details about the plan. Read-only. Nullable.
     * @return PlannerPlanDetails|null
    */
    public function getDetails(): ?PlannerPlanDetails {
        return $this->details;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'buckets' => function (ParseNode $n) use ($o) { $o->setBuckets($n->getCollectionOfObjectValues(array(PlannerBucket::class, 'createFromDiscriminatorValue'))); },
            'container' => function (ParseNode $n) use ($o) { $o->setContainer($n->getObjectValue(array(PlannerPlanContainer::class, 'createFromDiscriminatorValue'))); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'details' => function (ParseNode $n) use ($o) { $o->setDetails($n->getObjectValue(array(PlannerPlanDetails::class, 'createFromDiscriminatorValue'))); },
            'owner' => function (ParseNode $n) use ($o) { $o->setOwner($n->getStringValue()); },
            'tasks' => function (ParseNode $n) use ($o) { $o->setTasks($n->getCollectionOfObjectValues(array(PlannerTask::class, 'createFromDiscriminatorValue'))); },
            'title' => function (ParseNode $n) use ($o) { $o->setTitle($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the owner property value. The owner property
     * @return string|null
    */
    public function getOwner(): ?string {
        return $this->owner;
    }

    /**
     * Gets the tasks property value. Collection of tasks in the plan. Read-only. Nullable.
     * @return array<PlannerTask>|null
    */
    public function getTasks(): ?array {
        return $this->tasks;
    }

    /**
     * Gets the title property value. Required. Title of the plan.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('buckets', $this->buckets);
        $writer->writeObjectValue('container', $this->container);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('details', $this->details);
        $writer->writeStringValue('owner', $this->owner);
        $writer->writeCollectionOfObjectValues('tasks', $this->tasks);
        $writer->writeStringValue('title', $this->title);
    }

    /**
     * Sets the buckets property value. Collection of buckets in the plan. Read-only. Nullable.
     *  @param array<PlannerBucket>|null $value Value to set for the buckets property.
    */
    public function setBuckets(?array $value ): void {
        $this->buckets = $value;
    }

    /**
     * Sets the container property value. Identifies the container of the plan. After it is set, this property can’t be updated. Required.
     *  @param PlannerPlanContainer|null $value Value to set for the container property.
    */
    public function setContainer(?PlannerPlanContainer $value ): void {
        $this->container = $value;
    }

    /**
     * Sets the createdBy property value. Read-only. The user who created the plan.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. Read-only. Date and time at which the plan is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the details property value. Additional details about the plan. Read-only. Nullable.
     *  @param PlannerPlanDetails|null $value Value to set for the details property.
    */
    public function setDetails(?PlannerPlanDetails $value ): void {
        $this->details = $value;
    }

    /**
     * Sets the owner property value. The owner property
     *  @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value ): void {
        $this->owner = $value;
    }

    /**
     * Sets the tasks property value. Collection of tasks in the plan. Read-only. Nullable.
     *  @param array<PlannerTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value ): void {
        $this->tasks = $value;
    }

    /**
     * Sets the title property value. Required. Title of the plan.
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

}
