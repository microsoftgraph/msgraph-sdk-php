<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrintTaskDefinition extends Entity 
{
    /** @var AppIdentity|null $createdBy  */
    private ?AppIdentity $createdBy = null;
    
    /** @var string|null $displayName The name of the printTaskDefinition. */
    private ?string $displayName = null;
    
    /** @var array<PrintTask>|null $tasks A list of tasks that have been created based on this definition. The list includes currently running tasks and recently completed tasks. Read-only. */
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): PrintTaskDefinition {
        return new PrintTaskDefinition();
    }

    /**
     * Gets the createdBy property value. 
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
        return array_merge(parent::getFieldDeserializers(), [
            'createdBy' => function (self $o, ParseNode $n) { $o->setCreatedBy($n->getObjectValue(AppIdentity::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'tasks' => function (self $o, ParseNode $n) { $o->setTasks($n->getCollectionOfObjectValues(PrintTask::class)); },
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
     * Sets the createdBy property value. 
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
