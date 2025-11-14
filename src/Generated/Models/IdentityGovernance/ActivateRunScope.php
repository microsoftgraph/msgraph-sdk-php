<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ActivateRunScope extends ActivationScope implements Parsable 
{
    /**
     * Instantiates a new ActivateRunScope and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.activateRunScope');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActivateRunScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ActivateRunScope {
        return new ActivateRunScope();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'run' => fn(ParseNode $n) => $o->setRun($n->getObjectValue([Run::class, 'createFromDiscriminatorValue'])),
            'taskScope' => fn(ParseNode $n) => $o->setTaskScope($n->getEnumValue(ActivationTaskScopeType::class)),
            'userScope' => fn(ParseNode $n) => $o->setUserScope($n->getEnumValue(ActivationUserScopeType::class)),
        ]);
    }

    /**
     * Gets the run property value. The run property
     * @return Run|null
    */
    public function getRun(): ?Run {
        $val = $this->getBackingStore()->get('run');
        if (is_null($val) || $val instanceof Run) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'run'");
    }

    /**
     * Gets the taskScope property value. The taskScope property
     * @return ActivationTaskScopeType|null
    */
    public function getTaskScope(): ?ActivationTaskScopeType {
        $val = $this->getBackingStore()->get('taskScope');
        if (is_null($val) || $val instanceof ActivationTaskScopeType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taskScope'");
    }

    /**
     * Gets the userScope property value. The userScope property
     * @return ActivationUserScopeType|null
    */
    public function getUserScope(): ?ActivationUserScopeType {
        $val = $this->getBackingStore()->get('userScope');
        if (is_null($val) || $val instanceof ActivationUserScopeType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userScope'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('run', $this->getRun());
        $writer->writeEnumValue('taskScope', $this->getTaskScope());
        $writer->writeEnumValue('userScope', $this->getUserScope());
    }

    /**
     * Sets the run property value. The run property
     * @param Run|null $value Value to set for the run property.
    */
    public function setRun(?Run $value): void {
        $this->getBackingStore()->set('run', $value);
    }

    /**
     * Sets the taskScope property value. The taskScope property
     * @param ActivationTaskScopeType|null $value Value to set for the taskScope property.
    */
    public function setTaskScope(?ActivationTaskScopeType $value): void {
        $this->getBackingStore()->set('taskScope', $value);
    }

    /**
     * Sets the userScope property value. The userScope property
     * @param ActivationUserScopeType|null $value Value to set for the userScope property.
    */
    public function setUserScope(?ActivationUserScopeType $value): void {
        $this->getBackingStore()->set('userScope', $value);
    }

}
