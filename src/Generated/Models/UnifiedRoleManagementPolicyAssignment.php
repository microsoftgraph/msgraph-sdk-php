<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleManagementPolicyAssignment extends Entity implements Parsable 
{
    /**
     * Instantiates a new unifiedRoleManagementPolicyAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleManagementPolicyAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleManagementPolicyAssignment {
        return new UnifiedRoleManagementPolicyAssignment();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'policy' => fn(ParseNode $n) => $o->setPolicy($n->getObjectValue([UnifiedRoleManagementPolicy::class, 'createFromDiscriminatorValue'])),
            'policyId' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
            'roleDefinitionId' => fn(ParseNode $n) => $o->setRoleDefinitionId($n->getStringValue()),
            'scopeId' => fn(ParseNode $n) => $o->setScopeId($n->getStringValue()),
            'scopeType' => fn(ParseNode $n) => $o->setScopeType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the policy property value. The policy that's associated with a policy assignment. Supports $expand and a nested $expand of the rules and effectiveRules relationships for the policy.
     * @return UnifiedRoleManagementPolicy|null
    */
    public function getPolicy(): ?UnifiedRoleManagementPolicy {
        $val = $this->getBackingStore()->get('policy');
        if (is_null($val) || $val instanceof UnifiedRoleManagementPolicy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policy'");
    }

    /**
     * Gets the policyId property value. The id of the policy. Inherited from entity.
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
     * Gets the roleDefinitionId property value. The identifier of the role definition object where the policy applies. If not specified, the policy applies to all roles. Supports $filter (eq).
     * @return string|null
    */
    public function getRoleDefinitionId(): ?string {
        $val = $this->getBackingStore()->get('roleDefinitionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleDefinitionId'");
    }

    /**
     * Gets the scopeId property value. The identifier of the scope where the policy is assigned.  Can be / for the tenant or a group ID. Required.
     * @return string|null
    */
    public function getScopeId(): ?string {
        $val = $this->getBackingStore()->get('scopeId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopeId'");
    }

    /**
     * Gets the scopeType property value. The type of the scope where the policy is assigned. One of Directory, DirectoryRole. Required.
     * @return string|null
    */
    public function getScopeType(): ?string {
        $val = $this->getBackingStore()->get('scopeType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scopeType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('policy', $this->getPolicy());
        $writer->writeStringValue('policyId', $this->getPolicyId());
        $writer->writeStringValue('roleDefinitionId', $this->getRoleDefinitionId());
        $writer->writeStringValue('scopeId', $this->getScopeId());
        $writer->writeStringValue('scopeType', $this->getScopeType());
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the policy property value. The policy that's associated with a policy assignment. Supports $expand and a nested $expand of the rules and effectiveRules relationships for the policy.
     * @param UnifiedRoleManagementPolicy|null $value Value to set for the policy property.
    */
    public function setPolicy(?UnifiedRoleManagementPolicy $value): void {
        $this->getBackingStore()->set('policy', $value);
    }

    /**
     * Sets the policyId property value. The id of the policy. Inherited from entity.
     * @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value): void {
        $this->getBackingStore()->set('policyId', $value);
    }

    /**
     * Sets the roleDefinitionId property value. The identifier of the role definition object where the policy applies. If not specified, the policy applies to all roles. Supports $filter (eq).
     * @param string|null $value Value to set for the roleDefinitionId property.
    */
    public function setRoleDefinitionId(?string $value): void {
        $this->getBackingStore()->set('roleDefinitionId', $value);
    }

    /**
     * Sets the scopeId property value. The identifier of the scope where the policy is assigned.  Can be / for the tenant or a group ID. Required.
     * @param string|null $value Value to set for the scopeId property.
    */
    public function setScopeId(?string $value): void {
        $this->getBackingStore()->set('scopeId', $value);
    }

    /**
     * Sets the scopeType property value. The type of the scope where the policy is assigned. One of Directory, DirectoryRole. Required.
     * @param string|null $value Value to set for the scopeType property.
    */
    public function setScopeType(?string $value): void {
        $this->getBackingStore()->set('scopeType', $value);
    }

}
