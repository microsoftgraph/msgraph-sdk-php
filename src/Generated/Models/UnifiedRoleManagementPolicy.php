<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleManagementPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new unifiedRoleManagementPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.unifiedRoleManagementPolicy');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleManagementPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleManagementPolicy {
        return new UnifiedRoleManagementPolicy();
    }

    /**
     * Gets the description property value. Description for the policy.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. Display name for the policy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the effectiveRules property value. The list of effective rules like approval rules and expiration rules evaluated based on inherited referenced rules. For example, if there is a tenant-wide policy to enforce enabling an approval rule, the effective rule will be to enable approval even if the policy has a rule to disable approval. Supports $expand.
     * @return array<UnifiedRoleManagementPolicyRule>|null
    */
    public function getEffectiveRules(): ?array {
        return $this->getBackingStore()->get('effectiveRules');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'effectiveRules' => fn(ParseNode $n) => $o->setEffectiveRules($n->getCollectionOfObjectValues([UnifiedRoleManagementPolicyRule::class, 'createFromDiscriminatorValue'])),
            'isOrganizationDefault' => fn(ParseNode $n) => $o->setIsOrganizationDefault($n->getBooleanValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'rules' => fn(ParseNode $n) => $o->setRules($n->getCollectionOfObjectValues([UnifiedRoleManagementPolicyRule::class, 'createFromDiscriminatorValue'])),
            'scopeId' => fn(ParseNode $n) => $o->setScopeId($n->getStringValue()),
            'scopeType' => fn(ParseNode $n) => $o->setScopeType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isOrganizationDefault property value. This can only be set to true for a single tenant-wide policy which will apply to all scopes and roles. Set the scopeId to / and scopeType to Directory. Supports $filter (eq, ne).
     * @return bool|null
    */
    public function getIsOrganizationDefault(): ?bool {
        return $this->getBackingStore()->get('isOrganizationDefault');
    }

    /**
     * Gets the lastModifiedBy property value. The identity who last modified the role setting.
     * @return Identity|null
    */
    public function getLastModifiedBy(): ?Identity {
        return $this->getBackingStore()->get('lastModifiedBy');
    }

    /**
     * Gets the lastModifiedDateTime property value. The time when the role setting was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the rules property value. The collection of rules like approval rules and expiration rules. Supports $expand.
     * @return array<UnifiedRoleManagementPolicyRule>|null
    */
    public function getRules(): ?array {
        return $this->getBackingStore()->get('rules');
    }

    /**
     * Gets the scopeId property value. The identifier of the scope where the policy is created. Can be / for the tenant or a group ID. Required.
     * @return string|null
    */
    public function getScopeId(): ?string {
        return $this->getBackingStore()->get('scopeId');
    }

    /**
     * Gets the scopeType property value. The type of the scope where the policy is created. One of Directory, DirectoryRole. Required.
     * @return string|null
    */
    public function getScopeType(): ?string {
        return $this->getBackingStore()->get('scopeType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('effectiveRules', $this->getEffectiveRules());
        $writer->writeBooleanValue('isOrganizationDefault', $this->getIsOrganizationDefault());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('rules', $this->getRules());
        $writer->writeStringValue('scopeId', $this->getScopeId());
        $writer->writeStringValue('scopeType', $this->getScopeType());
    }

    /**
     * Sets the description property value. Description for the policy.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Display name for the policy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the effectiveRules property value. The list of effective rules like approval rules and expiration rules evaluated based on inherited referenced rules. For example, if there is a tenant-wide policy to enforce enabling an approval rule, the effective rule will be to enable approval even if the policy has a rule to disable approval. Supports $expand.
     *  @param array<UnifiedRoleManagementPolicyRule>|null $value Value to set for the effectiveRules property.
    */
    public function setEffectiveRules(?array $value): void {
        $this->getBackingStore()->set('effectiveRules', $value);
    }

    /**
     * Sets the isOrganizationDefault property value. This can only be set to true for a single tenant-wide policy which will apply to all scopes and roles. Set the scopeId to / and scopeType to Directory. Supports $filter (eq, ne).
     *  @param bool|null $value Value to set for the isOrganizationDefault property.
    */
    public function setIsOrganizationDefault(?bool $value): void {
        $this->getBackingStore()->set('isOrganizationDefault', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The identity who last modified the role setting.
     *  @param Identity|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?Identity $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The time when the role setting was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the rules property value. The collection of rules like approval rules and expiration rules. Supports $expand.
     *  @param array<UnifiedRoleManagementPolicyRule>|null $value Value to set for the rules property.
    */
    public function setRules(?array $value): void {
        $this->getBackingStore()->set('rules', $value);
    }

    /**
     * Sets the scopeId property value. The identifier of the scope where the policy is created. Can be / for the tenant or a group ID. Required.
     *  @param string|null $value Value to set for the scopeId property.
    */
    public function setScopeId(?string $value): void {
        $this->getBackingStore()->set('scopeId', $value);
    }

    /**
     * Sets the scopeType property value. The type of the scope where the policy is created. One of Directory, DirectoryRole. Required.
     *  @param string|null $value Value to set for the scopeType property.
    */
    public function setScopeType(?string $value): void {
        $this->getBackingStore()->set('scopeType', $value);
    }

}
