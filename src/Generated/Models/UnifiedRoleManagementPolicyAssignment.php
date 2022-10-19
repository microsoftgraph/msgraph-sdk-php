<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleManagementPolicyAssignment extends Entity implements Parsable 
{
    /**
     * @var UnifiedRoleManagementPolicy|null $policy The policy that's associated with a policy assignment. Supports $expand and a nested $expand of the rules and effectiveRules relationships for the policy.
    */
    private ?UnifiedRoleManagementPolicy $policy = null;
    
    /**
     * @var string|null $policyId The id of the policy. Inherited from entity.
    */
    private ?string $policyId = null;
    
    /**
     * @var string|null $roleDefinitionId The identifier of the role definition object where the policy applies. If not specified, the policy applies to all roles. Supports $filter (eq).
    */
    private ?string $roleDefinitionId = null;
    
    /**
     * @var string|null $scopeId The identifier of the scope where the policy is assigned.  Can be / for the tenant or a group ID. Required.
    */
    private ?string $scopeId = null;
    
    /**
     * @var string|null $scopeType The type of the scope where the policy is assigned. One of Directory, DirectoryRole. Required.
    */
    private ?string $scopeType = null;
    
    /**
     * Instantiates a new unifiedRoleManagementPolicyAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.unifiedRoleManagementPolicyAssignment');
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'policy' => fn(ParseNode $n) => $o->setPolicy($n->getObjectValue([UnifiedRoleManagementPolicy::class, 'createFromDiscriminatorValue'])),
            'policyId' => fn(ParseNode $n) => $o->setPolicyId($n->getStringValue()),
            'roleDefinitionId' => fn(ParseNode $n) => $o->setRoleDefinitionId($n->getStringValue()),
            'scopeId' => fn(ParseNode $n) => $o->setScopeId($n->getStringValue()),
            'scopeType' => fn(ParseNode $n) => $o->setScopeType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the policy property value. The policy that's associated with a policy assignment. Supports $expand and a nested $expand of the rules and effectiveRules relationships for the policy.
     * @return UnifiedRoleManagementPolicy|null
    */
    public function getPolicy(): ?UnifiedRoleManagementPolicy {
        return $this->policy;
    }

    /**
     * Gets the policyId property value. The id of the policy. Inherited from entity.
     * @return string|null
    */
    public function getPolicyId(): ?string {
        return $this->policyId;
    }

    /**
     * Gets the roleDefinitionId property value. The identifier of the role definition object where the policy applies. If not specified, the policy applies to all roles. Supports $filter (eq).
     * @return string|null
    */
    public function getRoleDefinitionId(): ?string {
        return $this->roleDefinitionId;
    }

    /**
     * Gets the scopeId property value. The identifier of the scope where the policy is assigned.  Can be / for the tenant or a group ID. Required.
     * @return string|null
    */
    public function getScopeId(): ?string {
        return $this->scopeId;
    }

    /**
     * Gets the scopeType property value. The type of the scope where the policy is assigned. One of Directory, DirectoryRole. Required.
     * @return string|null
    */
    public function getScopeType(): ?string {
        return $this->scopeType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('policy', $this->policy);
        $writer->writeStringValue('policyId', $this->policyId);
        $writer->writeStringValue('roleDefinitionId', $this->roleDefinitionId);
        $writer->writeStringValue('scopeId', $this->scopeId);
        $writer->writeStringValue('scopeType', $this->scopeType);
    }

    /**
     * Sets the policy property value. The policy that's associated with a policy assignment. Supports $expand and a nested $expand of the rules and effectiveRules relationships for the policy.
     *  @param UnifiedRoleManagementPolicy|null $value Value to set for the policy property.
    */
    public function setPolicy(?UnifiedRoleManagementPolicy $value ): void {
        $this->policy = $value;
    }

    /**
     * Sets the policyId property value. The id of the policy. Inherited from entity.
     *  @param string|null $value Value to set for the policyId property.
    */
    public function setPolicyId(?string $value ): void {
        $this->policyId = $value;
    }

    /**
     * Sets the roleDefinitionId property value. The identifier of the role definition object where the policy applies. If not specified, the policy applies to all roles. Supports $filter (eq).
     *  @param string|null $value Value to set for the roleDefinitionId property.
    */
    public function setRoleDefinitionId(?string $value ): void {
        $this->roleDefinitionId = $value;
    }

    /**
     * Sets the scopeId property value. The identifier of the scope where the policy is assigned.  Can be / for the tenant or a group ID. Required.
     *  @param string|null $value Value to set for the scopeId property.
    */
    public function setScopeId(?string $value ): void {
        $this->scopeId = $value;
    }

    /**
     * Sets the scopeType property value. The type of the scope where the policy is assigned. One of Directory, DirectoryRole. Required.
     *  @param string|null $value Value to set for the scopeType property.
    */
    public function setScopeType(?string $value ): void {
        $this->scopeType = $value;
    }

}
