<?php

namespace Microsoft\Graph\Generated\Models\EntraRecoveryServices;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RecoveryChangeObjectBase extends Entity implements Parsable 
{
    /**
     * Instantiates a new RecoveryChangeObjectBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RecoveryChangeObjectBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RecoveryChangeObjectBase {
        return new RecoveryChangeObjectBase();
    }

    /**
     * Gets the displayName property value. The displayName property
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
     * Gets the entityTypeName property value. The entityTypeName property
     * @return ResourceTypeName|null
    */
    public function getEntityTypeName(): ?ResourceTypeName {
        $val = $this->getBackingStore()->get('entityTypeName');
        if (is_null($val) || $val instanceof ResourceTypeName) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'entityTypeName'");
    }

    /**
     * Gets the failureMessage property value. The failureMessage property
     * @return string|null
    */
    public function getFailureMessage(): ?string {
        $val = $this->getBackingStore()->get('failureMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failureMessage'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'entityTypeName' => fn(ParseNode $n) => $o->setEntityTypeName($n->getEnumValue(ResourceTypeName::class)),
            'failureMessage' => fn(ParseNode $n) => $o->setFailureMessage($n->getStringValue()),
            'recoveryAction' => fn(ParseNode $n) => $o->setRecoveryAction($n->getEnumValue(RecoveryAction::class)),
        ]);
    }

    /**
     * Gets the recoveryAction property value. The recoveryAction property
     * @return RecoveryAction|null
    */
    public function getRecoveryAction(): ?RecoveryAction {
        $val = $this->getBackingStore()->get('recoveryAction');
        if (is_null($val) || $val instanceof RecoveryAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recoveryAction'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('entityTypeName', $this->getEntityTypeName());
        $writer->writeStringValue('failureMessage', $this->getFailureMessage());
        $writer->writeEnumValue('recoveryAction', $this->getRecoveryAction());
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the entityTypeName property value. The entityTypeName property
     * @param ResourceTypeName|null $value Value to set for the entityTypeName property.
    */
    public function setEntityTypeName(?ResourceTypeName $value): void {
        $this->getBackingStore()->set('entityTypeName', $value);
    }

    /**
     * Sets the failureMessage property value. The failureMessage property
     * @param string|null $value Value to set for the failureMessage property.
    */
    public function setFailureMessage(?string $value): void {
        $this->getBackingStore()->set('failureMessage', $value);
    }

    /**
     * Sets the recoveryAction property value. The recoveryAction property
     * @param RecoveryAction|null $value Value to set for the recoveryAction property.
    */
    public function setRecoveryAction(?RecoveryAction $value): void {
        $this->getBackingStore()->set('recoveryAction', $value);
    }

}
