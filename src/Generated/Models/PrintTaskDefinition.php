<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PrintTaskDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new PrintTaskDefinition and sets the default values.
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
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof AppIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the displayName property value. The name of the printTaskDefinition.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([AppIdentity::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'tasks' => fn(ParseNode $n) => $o->setTasks($n->getCollectionOfObjectValues([PrintTask::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the tasks property value. A list of tasks that have been created based on this definition. The list includes currently running tasks and recently completed tasks. Read-only.
     * @return array<PrintTask>|null
    */
    public function getTasks(): ?array {
        $val = $this->getBackingStore()->get('tasks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrintTask::class);
            /** @var array<PrintTask>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tasks'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('tasks', $this->getTasks());
    }

    /**
     * Sets the createdBy property value. The createdBy property
     * @param AppIdentity|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?AppIdentity $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the displayName property value. The name of the printTaskDefinition.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the tasks property value. A list of tasks that have been created based on this definition. The list includes currently running tasks and recently completed tasks. Read-only.
     * @param array<PrintTask>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value): void {
        $this->getBackingStore()->set('tasks', $value);
    }

}
