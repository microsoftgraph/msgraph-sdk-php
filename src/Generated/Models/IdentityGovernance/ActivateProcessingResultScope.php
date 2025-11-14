<?php

namespace Microsoft\Graph\Generated\Models\IdentityGovernance;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ActivateProcessingResultScope extends ActivationScope implements Parsable 
{
    /**
     * Instantiates a new ActivateProcessingResultScope and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.activateProcessingResultScope');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActivateProcessingResultScope
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ActivateProcessingResultScope {
        return new ActivateProcessingResultScope();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'processingResults' => fn(ParseNode $n) => $o->setProcessingResults($n->getCollectionOfObjectValues([UserProcessingResult::class, 'createFromDiscriminatorValue'])),
            'taskScope' => fn(ParseNode $n) => $o->setTaskScope($n->getEnumValue(ActivationTaskScopeType::class)),
        ]);
    }

    /**
     * Gets the processingResults property value. The processingResults property
     * @return array<UserProcessingResult>|null
    */
    public function getProcessingResults(): ?array {
        $val = $this->getBackingStore()->get('processingResults');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserProcessingResult::class);
            /** @var array<UserProcessingResult>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processingResults'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('processingResults', $this->getProcessingResults());
        $writer->writeEnumValue('taskScope', $this->getTaskScope());
    }

    /**
     * Sets the processingResults property value. The processingResults property
     * @param array<UserProcessingResult>|null $value Value to set for the processingResults property.
    */
    public function setProcessingResults(?array $value): void {
        $this->getBackingStore()->set('processingResults', $value);
    }

    /**
     * Sets the taskScope property value. The taskScope property
     * @param ActivationTaskScopeType|null $value Value to set for the taskScope property.
    */
    public function setTaskScope(?ActivationTaskScopeType $value): void {
        $this->getBackingStore()->set('taskScope', $value);
    }

}
