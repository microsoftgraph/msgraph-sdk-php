<?php

namespace Microsoft\Graph\Generated\Models\TeamsAdministration;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsPolicyUserAssignment extends Entity implements Parsable 
{
    /**
     * Instantiates a new TeamsPolicyUserAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsPolicyUserAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsPolicyUserAssignment {
        return new TeamsPolicyUserAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'policyId' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
            'policyType' => fn(ParseNode $n) => $o->setPolicyType($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the policyId property value. The unique identifier (GUID) of the policy within the specified policy type.
     * @return string|null
    */
    public function getPolicyId(): ?string {
        $val = $this->getBackingStore()->get('policyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyId'");
    }

    /**
     * Gets the policyType property value. The type of Teams policy assigned or unassigned, such as teamsMeetingBroadcastPolicy.
     * @return string|null
    */
    public function getPolicyType(): ?string {
        $val = $this->getBackingStore()->get('policyType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyType'");
    }

    /**
     * Gets the userId property value. The unique identifier (GUID) of the user.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('policyId', $this->getPolicyId());
        $writer->writeStringValue('policyType', $this->getPolicyType());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the policyId property value. The unique identifier (GUID) of the policy within the specified policy type.
     * @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value): void {
        $this->getBackingStore()->set('policyId', $value);
    }

    /**
     * Sets the policyType property value. The type of Teams policy assigned or unassigned, such as teamsMeetingBroadcastPolicy.
     * @param string|null $value Value to set for the policyType property.
    */
    public function setPolicyType(?string $value): void {
        $this->getBackingStore()->set('policyType', $value);
    }

    /**
     * Sets the userId property value. The unique identifier (GUID) of the user.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
