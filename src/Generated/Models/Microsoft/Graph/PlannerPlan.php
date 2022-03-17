<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PlannerPlan extends Entity 
{
    /** @var array<PlannerBucket>|null $buckets Read-only. Nullable. Collection of buckets in the plan. */
    private ?array $buckets = null;
    
    /** @var IdentitySet|null $createdBy Read-only. The user who created the plan. */
    private ?IdentitySet $createdBy = null;
    
    /** @var DateTime|null $createdDateTime Read-only. Date and time at which the plan is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    private ?DateTime $createdDateTime = null;
    
    /** @var PlannerPlanDetails|null $details Read-only. Nullable. Additional details about the plan. */
    private ?PlannerPlanDetails $details = null;
    
    /** @var string|null $owner ID of the Group that owns the plan. A valid group must exist before this field can be set. After it is set, this property can’t be updated. */
    private ?string $owner = null;
    
    /** @var array<PlannerTask>|null $tasks Read-only. Nullable. Collection of tasks in the plan. */
    private ?array $tasks = null;
    
    /** @var string|null $title Required. Title of the plan. */
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): PlannerPlan {
        return new PlannerPlan();
    }

    /**
     * Gets the buckets property value. Read-only. Nullable. Collection of buckets in the plan.
     * @return array<PlannerBucket>|null
    */
    public function getBuckets(): ?array {
        return $this->buckets;
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
     * Gets the details property value. Read-only. Nullable. Additional details about the plan.
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
        return array_merge(parent::getFieldDeserializers(), [
            'buckets' => function (self $o, ParseNode $n) { $o->setBuckets($n->getCollectionOfObjectValues(PlannerBucket::class)); },
            'createdBy' => function (self $o, ParseNode $n) { $o->setCreatedBy($n->getObjectValue(IdentitySet::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'details' => function (self $o, ParseNode $n) { $o->setDetails($n->getObjectValue(PlannerPlanDetails::class)); },
            'owner' => function (self $o, ParseNode $n) { $o->setOwner($n->getStringValue()); },
            'tasks' => function (self $o, ParseNode $n) { $o->setTasks($n->getCollectionOfObjectValues(PlannerTask::class)); },
            'title' => function (self $o, ParseNode $n) { $o->setTitle($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the owner property value. ID of the Group that owns the plan. A valid group must exist before this field can be set. After it is set, this property can’t be updated.
     * @return string|null
    */
    public function getOwner(): ?string {
        return $this->owner;
    }

    /**
     * Gets the tasks property value. Read-only. Nullable. Collection of tasks in the plan.
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
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('details', $this->details);
        $writer->writeStringValue('owner', $this->owner);
        $writer->writeCollectionOfObjectValues('tasks', $this->tasks);
        $writer->writeStringValue('title', $this->title);
    }

    /**
     * Sets the buckets property value. Read-only. Nullable. Collection of buckets in the plan.
     *  @param array<PlannerBucket>|null $value Value to set for the buckets property.
    */
    public function setBuckets(?array $value ): void {
        $this->buckets = $value;
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
     * Sets the details property value. Read-only. Nullable. Additional details about the plan.
     *  @param PlannerPlanDetails|null $value Value to set for the details property.
    */
    public function setDetails(?PlannerPlanDetails $value ): void {
        $this->details = $value;
    }

    /**
     * Sets the owner property value. ID of the Group that owns the plan. A valid group must exist before this field can be set. After it is set, this property can’t be updated.
     *  @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value ): void {
        $this->owner = $value;
    }

    /**
     * Sets the tasks property value. Read-only. Nullable. Collection of tasks in the plan.
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
