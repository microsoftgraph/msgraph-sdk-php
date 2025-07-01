<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EmergencyCallEvent extends CallEvent implements Parsable 
{
    /**
     * Instantiates a new EmergencyCallEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmergencyCallEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmergencyCallEvent {
        return new EmergencyCallEvent();
    }

    /**
     * Gets the callerInfo property value. The callerInfo property
     * @return EmergencyCallerInfo|null
    */
    public function getCallerInfo(): ?EmergencyCallerInfo {
        $val = $this->getBackingStore()->get('callerInfo');
        if (is_null($val) || $val instanceof EmergencyCallerInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callerInfo'");
    }

    /**
     * Gets the emergencyNumberDialed property value. The emergencyNumberDialed property
     * @return string|null
    */
    public function getEmergencyNumberDialed(): ?string {
        $val = $this->getBackingStore()->get('emergencyNumberDialed');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emergencyNumberDialed'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'callerInfo' => fn(ParseNode $n) => $o->setCallerInfo($n->getObjectValue([EmergencyCallerInfo::class, 'createFromDiscriminatorValue'])),
            'emergencyNumberDialed' => fn(ParseNode $n) => $o->setEmergencyNumberDialed($n->getStringValue()),
            'policyName' => fn(ParseNode $n) => $o->setPolicyName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the policyName property value. The policyName property
     * @return string|null
    */
    public function getPolicyName(): ?string {
        $val = $this->getBackingStore()->get('policyName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('callerInfo', $this->getCallerInfo());
        $writer->writeStringValue('emergencyNumberDialed', $this->getEmergencyNumberDialed());
        $writer->writeStringValue('policyName', $this->getPolicyName());
    }

    /**
     * Sets the callerInfo property value. The callerInfo property
     * @param EmergencyCallerInfo|null $value Value to set for the callerInfo property.
    */
    public function setCallerInfo(?EmergencyCallerInfo $value): void {
        $this->getBackingStore()->set('callerInfo', $value);
    }

    /**
     * Sets the emergencyNumberDialed property value. The emergencyNumberDialed property
     * @param string|null $value Value to set for the emergencyNumberDialed property.
    */
    public function setEmergencyNumberDialed(?string $value): void {
        $this->getBackingStore()->set('emergencyNumberDialed', $value);
    }

    /**
     * Sets the policyName property value. The policyName property
     * @param string|null $value Value to set for the policyName property.
    */
    public function setPolicyName(?string $value): void {
        $this->getBackingStore()->set('policyName', $value);
    }

}
