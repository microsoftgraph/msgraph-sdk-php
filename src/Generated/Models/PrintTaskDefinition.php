<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintTaskDefinition extends Entity implements Parsable 
{
    /**
     * @var AppIdentity|null $createdBy The createdBy property
    */
    private ?AppIdentity $createdBy = null;
    
    /**
     * @var string|null $displayName The name of the printTaskDefinition.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<PrintTask>|null $tasks A list of tasks that have been created based on this definition. The list includes currently running tasks and recently completed tasks. Read-only.
    */
    private ?array $tasks = null;
    
    /**
     * Instantiates a new printTaskDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintTaskDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintTaskDefinition {
        return new PrintTaskDefinition();
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return AppIdentity|null
    */
    public function getCreatedBy(): ?AppIdentity {
        return $this->createdBy;
    }

    /**
     * Gets the displayName property value. The name of the printTaskDefinition.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(AppIdentity::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'tasks' => function (ParseNode $n) use ($o) { $o->setTasks($n->getCollectionOfObjectValues(array(PrintTask::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the tasks property value. A list of tasks that have been created based on this definition. The list includes currently running tasks and recently completed tasks. Read-only.
     * @return array<PrintTask>|null
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
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('tasks', $this->tasks);
    }

    /**
     * Sets the createdBy property value. The createdBy property
     *  @param AppIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?AppIdentity $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the displayName property value. The name of the printTaskDefinition.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the tasks property value. A list of tasks that have been created based on this definition. The list includes currently running tasks and recently completed tasks. Read-only.
     *  @param array<PrintTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value ): void {
        $this->tasks = $value;
    }

}
