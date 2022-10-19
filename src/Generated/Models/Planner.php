<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Planner extends Entity implements Parsable 
{
    /**
     * @var array<PlannerBucket>|null $buckets Read-only. Nullable. Returns a collection of the specified buckets
    */
    private ?array $buckets = null;
    
    /**
     * @var array<PlannerPlan>|null $plans Read-only. Nullable. Returns a collection of the specified plans
    */
    private ?array $plans = null;
    
    /**
     * @var array<PlannerTask>|null $tasks Read-only. Nullable. Returns a collection of the specified tasks
    */
    private ?array $tasks = null;
    
    /**
     * Instantiates a new Planner and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.planner');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Planner
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Planner {
        return new Planner();
    }

    /**
     * Gets the buckets property value. Read-only. Nullable. Returns a collection of the specified buckets
     * @return array<PlannerBucket>|null
    */
    public function getBuckets(): ?array {
        return $this->buckets;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'buckets' => fn(ParseNode $n) => $o->setBuckets($n->getCollectionOfObjectValues([PlannerBucket::class, 'createFromDiscriminatorValue'])),
            'plans' => fn(ParseNode $n) => $o->setPlans($n->getCollectionOfObjectValues([PlannerPlan::class, 'createFromDiscriminatorValue'])),
            'tasks' => fn(ParseNode $n) => $o->setTasks($n->getCollectionOfObjectValues([PlannerTask::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the plans property value. Read-only. Nullable. Returns a collection of the specified plans
     * @return array<PlannerPlan>|null
    */
    public function getPlans(): ?array {
        return $this->plans;
    }

    /**
     * Gets the tasks property value. Read-only. Nullable. Returns a collection of the specified tasks
     * @return array<PlannerTask>|null
    */
    public function getTasks(): ?array {
        return $this->tasks;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('buckets', $this->buckets);
        $writer->writeCollectionOfObjectValues('plans', $this->plans);
        $writer->writeCollectionOfObjectValues('tasks', $this->tasks);
    }

    /**
     * Sets the buckets property value. Read-only. Nullable. Returns a collection of the specified buckets
     *  @param array<PlannerBucket>|null $value Value to set for the buckets property.
    */
    public function setBuckets(?array $value ): void {
        $this->buckets = $value;
    }

    /**
     * Sets the plans property value. Read-only. Nullable. Returns a collection of the specified plans
     *  @param array<PlannerPlan>|null $value Value to set for the plans property.
    */
    public function setPlans(?array $value ): void {
        $this->plans = $value;
    }

    /**
     * Sets the tasks property value. Read-only. Nullable. Returns a collection of the specified tasks
     *  @param array<PlannerTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value ): void {
        $this->tasks = $value;
    }

}
