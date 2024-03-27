<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CloudPcProvisioningPolicyAssignment extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcProvisioningPolicyAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcProvisioningPolicyAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcProvisioningPolicyAssignment {
        return new CloudPcProvisioningPolicyAssignment();
    }

    /**
     * Gets the assignedUsers property value. The assignment targeted users for the provisioning policy. This list of users is computed based on assignments, licenses, group memberships, and policies. Read-only. Supports$expand.
     * @return array<User>|null
    */
    public function getAssignedUsers(): ?array {
        $val = $this->getBackingStore()->get('assignedUsers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, User::class);
            /** @var array<User>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedUsers'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedUsers' => fn(ParseNode $n) => $o->setAssignedUsers($n->getCollectionOfObjectValues([User::class, 'createFromDiscriminatorValue'])),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getObjectValue([CloudPcManagementAssignmentTarget::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the target property value. The assignment target for the provisioning policy. Currently, the only target supported for this policy is a user group. For details, see cloudPcManagementGroupAssignmentTarget.
     * @return CloudPcManagementAssignmentTarget|null
    */
    public function getTarget(): ?CloudPcManagementAssignmentTarget {
        $val = $this->getBackingStore()->get('target');
        if (is_null($val) || $val instanceof CloudPcManagementAssignmentTarget) {
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
        $writer->writeCollectionOfObjectValues('assignedUsers', $this->getAssignedUsers());
        $writer->writeObjectValue('target', $this->getTarget());
    }

    /**
     * Sets the assignedUsers property value. The assignment targeted users for the provisioning policy. This list of users is computed based on assignments, licenses, group memberships, and policies. Read-only. Supports$expand.
     * @param array<User>|null $value Value to set for the assignedUsers property.
    */
    public function setAssignedUsers(?array $value): void {
        $this->getBackingStore()->set('assignedUsers', $value);
    }

    /**
     * Sets the target property value. The assignment target for the provisioning policy. Currently, the only target supported for this policy is a user group. For details, see cloudPcManagementGroupAssignmentTarget.
     * @param CloudPcManagementAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?CloudPcManagementAssignmentTarget $value): void {
        $this->getBackingStore()->set('target', $value);
    }

}
