<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleManagementPolicyRule extends Entity implements Parsable 
{
    /**
     * Instantiates a new unifiedRoleManagementPolicyRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleManagementPolicyRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleManagementPolicyRule {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.unifiedRoleManagementPolicyApprovalRule': return new UnifiedRoleManagementPolicyApprovalRule();
                case '#microsoft.graph.unifiedRoleManagementPolicyAuthenticationContextRule': return new UnifiedRoleManagementPolicyAuthenticationContextRule();
                case '#microsoft.graph.unifiedRoleManagementPolicyEnablementRule': return new UnifiedRoleManagementPolicyEnablementRule();
                case '#microsoft.graph.unifiedRoleManagementPolicyExpirationRule': return new UnifiedRoleManagementPolicyExpirationRule();
                case '#microsoft.graph.unifiedRoleManagementPolicyNotificationRule': return new UnifiedRoleManagementPolicyNotificationRule();
            }
        }
        return new UnifiedRoleManagementPolicyRule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getObjectValue([UnifiedRoleManagementPolicyRuleTarget::class, 'createFromDiscriminatorValue'])),
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
     * Gets the target property value. Defines details of scope that's targeted by role management policy rule. The details can include the principal type, the role assignment type, and actions affecting a role. Supports $filter (eq, ne).
     * @return UnifiedRoleManagementPolicyRuleTarget|null
    */
    public function getTarget(): ?UnifiedRoleManagementPolicyRuleTarget {
        $val = $this->getBackingStore()->get('target');
        if (is_null($val) || $val instanceof UnifiedRoleManagementPolicyRuleTarget) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'target'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('target', $this->getTarget());
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the target property value. Defines details of scope that's targeted by role management policy rule. The details can include the principal type, the role assignment type, and actions affecting a role. Supports $filter (eq, ne).
     * @param UnifiedRoleManagementPolicyRuleTarget|null $value Value to set for the target property.
    */
    public function setTarget(?UnifiedRoleManagementPolicyRuleTarget $value): void {
        $this->getBackingStore()->set('target', $value);
    }

}
