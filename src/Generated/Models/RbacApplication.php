<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RbacApplication extends Entity implements Parsable 
{
    /**
     * Instantiates a new RbacApplication and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RbacApplication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RbacApplication {
        return new RbacApplication();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'resourceNamespaces' => fn(ParseNode $n) => $o->setResourceNamespaces($n->getCollectionOfObjectValues([UnifiedRbacResourceNamespace::class, 'createFromDiscriminatorValue'])),
            'roleAssignments' => fn(ParseNode $n) => $o->setRoleAssignments($n->getCollectionOfObjectValues([UnifiedRoleAssignment::class, 'createFromDiscriminatorValue'])),
            'roleAssignmentScheduleInstances' => fn(ParseNode $n) => $o->setRoleAssignmentScheduleInstances($n->getCollectionOfObjectValues([UnifiedRoleAssignmentScheduleInstance::class, 'createFromDiscriminatorValue'])),
            'roleAssignmentScheduleRequests' => fn(ParseNode $n) => $o->setRoleAssignmentScheduleRequests($n->getCollectionOfObjectValues([UnifiedRoleAssignmentScheduleRequest::class, 'createFromDiscriminatorValue'])),
            'roleAssignmentSchedules' => fn(ParseNode $n) => $o->setRoleAssignmentSchedules($n->getCollectionOfObjectValues([UnifiedRoleAssignmentSchedule::class, 'createFromDiscriminatorValue'])),
            'roleDefinitions' => fn(ParseNode $n) => $o->setRoleDefinitions($n->getCollectionOfObjectValues([UnifiedRoleDefinition::class, 'createFromDiscriminatorValue'])),
            'roleEligibilityScheduleInstances' => fn(ParseNode $n) => $o->setRoleEligibilityScheduleInstances($n->getCollectionOfObjectValues([UnifiedRoleEligibilityScheduleInstance::class, 'createFromDiscriminatorValue'])),
            'roleEligibilityScheduleRequests' => fn(ParseNode $n) => $o->setRoleEligibilityScheduleRequests($n->getCollectionOfObjectValues([UnifiedRoleEligibilityScheduleRequest::class, 'createFromDiscriminatorValue'])),
            'roleEligibilitySchedules' => fn(ParseNode $n) => $o->setRoleEligibilitySchedules($n->getCollectionOfObjectValues([UnifiedRoleEligibilitySchedule::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the resourceNamespaces property value. The resourceNamespaces property
     * @return array<UnifiedRbacResourceNamespace>|null
    */
    public function getResourceNamespaces(): ?array {
        $val = $this->getBackingStore()->get('resourceNamespaces');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedRbacResourceNamespace::class);
            /** @var array<UnifiedRbacResourceNamespace>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceNamespaces'");
    }

    /**
     * Gets the roleAssignments property value. Resource to grant access to users or groups.
     * @return array<UnifiedRoleAssignment>|null
    */
    public function getRoleAssignments(): ?array {
        $val = $this->getBackingStore()->get('roleAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedRoleAssignment::class);
            /** @var array<UnifiedRoleAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleAssignments'");
    }

    /**
     * Gets the roleAssignmentScheduleInstances property value. Instances for active role assignments.
     * @return array<UnifiedRoleAssignmentScheduleInstance>|null
    */
    public function getRoleAssignmentScheduleInstances(): ?array {
        $val = $this->getBackingStore()->get('roleAssignmentScheduleInstances');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedRoleAssignmentScheduleInstance::class);
            /** @var array<UnifiedRoleAssignmentScheduleInstance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleAssignmentScheduleInstances'");
    }

    /**
     * Gets the roleAssignmentScheduleRequests property value. Requests for active role assignments to principals through PIM.
     * @return array<UnifiedRoleAssignmentScheduleRequest>|null
    */
    public function getRoleAssignmentScheduleRequests(): ?array {
        $val = $this->getBackingStore()->get('roleAssignmentScheduleRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedRoleAssignmentScheduleRequest::class);
            /** @var array<UnifiedRoleAssignmentScheduleRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleAssignmentScheduleRequests'");
    }

    /**
     * Gets the roleAssignmentSchedules property value. Schedules for active role assignment operations.
     * @return array<UnifiedRoleAssignmentSchedule>|null
    */
    public function getRoleAssignmentSchedules(): ?array {
        $val = $this->getBackingStore()->get('roleAssignmentSchedules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedRoleAssignmentSchedule::class);
            /** @var array<UnifiedRoleAssignmentSchedule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleAssignmentSchedules'");
    }

    /**
     * Gets the roleDefinitions property value. Resource representing the roles allowed by RBAC providers and the permissions assigned to the roles.
     * @return array<UnifiedRoleDefinition>|null
    */
    public function getRoleDefinitions(): ?array {
        $val = $this->getBackingStore()->get('roleDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedRoleDefinition::class);
            /** @var array<UnifiedRoleDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleDefinitions'");
    }

    /**
     * Gets the roleEligibilityScheduleInstances property value. Instances for role eligibility requests.
     * @return array<UnifiedRoleEligibilityScheduleInstance>|null
    */
    public function getRoleEligibilityScheduleInstances(): ?array {
        $val = $this->getBackingStore()->get('roleEligibilityScheduleInstances');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedRoleEligibilityScheduleInstance::class);
            /** @var array<UnifiedRoleEligibilityScheduleInstance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleEligibilityScheduleInstances'");
    }

    /**
     * Gets the roleEligibilityScheduleRequests property value. Requests for role eligibilities for principals through PIM.
     * @return array<UnifiedRoleEligibilityScheduleRequest>|null
    */
    public function getRoleEligibilityScheduleRequests(): ?array {
        $val = $this->getBackingStore()->get('roleEligibilityScheduleRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedRoleEligibilityScheduleRequest::class);
            /** @var array<UnifiedRoleEligibilityScheduleRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleEligibilityScheduleRequests'");
    }

    /**
     * Gets the roleEligibilitySchedules property value. Schedules for role eligibility operations.
     * @return array<UnifiedRoleEligibilitySchedule>|null
    */
    public function getRoleEligibilitySchedules(): ?array {
        $val = $this->getBackingStore()->get('roleEligibilitySchedules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedRoleEligibilitySchedule::class);
            /** @var array<UnifiedRoleEligibilitySchedule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleEligibilitySchedules'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('resourceNamespaces', $this->getResourceNamespaces());
        $writer->writeCollectionOfObjectValues('roleAssignments', $this->getRoleAssignments());
        $writer->writeCollectionOfObjectValues('roleAssignmentScheduleInstances', $this->getRoleAssignmentScheduleInstances());
        $writer->writeCollectionOfObjectValues('roleAssignmentScheduleRequests', $this->getRoleAssignmentScheduleRequests());
        $writer->writeCollectionOfObjectValues('roleAssignmentSchedules', $this->getRoleAssignmentSchedules());
        $writer->writeCollectionOfObjectValues('roleDefinitions', $this->getRoleDefinitions());
        $writer->writeCollectionOfObjectValues('roleEligibilityScheduleInstances', $this->getRoleEligibilityScheduleInstances());
        $writer->writeCollectionOfObjectValues('roleEligibilityScheduleRequests', $this->getRoleEligibilityScheduleRequests());
        $writer->writeCollectionOfObjectValues('roleEligibilitySchedules', $this->getRoleEligibilitySchedules());
    }

    /**
     * Sets the resourceNamespaces property value. The resourceNamespaces property
     * @param array<UnifiedRbacResourceNamespace>|null $value Value to set for the resourceNamespaces property.
    */
    public function setResourceNamespaces(?array $value): void {
        $this->getBackingStore()->set('resourceNamespaces', $value);
    }

    /**
     * Sets the roleAssignments property value. Resource to grant access to users or groups.
     * @param array<UnifiedRoleAssignment>|null $value Value to set for the roleAssignments property.
    */
    public function setRoleAssignments(?array $value): void {
        $this->getBackingStore()->set('roleAssignments', $value);
    }

    /**
     * Sets the roleAssignmentScheduleInstances property value. Instances for active role assignments.
     * @param array<UnifiedRoleAssignmentScheduleInstance>|null $value Value to set for the roleAssignmentScheduleInstances property.
    */
    public function setRoleAssignmentScheduleInstances(?array $value): void {
        $this->getBackingStore()->set('roleAssignmentScheduleInstances', $value);
    }

    /**
     * Sets the roleAssignmentScheduleRequests property value. Requests for active role assignments to principals through PIM.
     * @param array<UnifiedRoleAssignmentScheduleRequest>|null $value Value to set for the roleAssignmentScheduleRequests property.
    */
    public function setRoleAssignmentScheduleRequests(?array $value): void {
        $this->getBackingStore()->set('roleAssignmentScheduleRequests', $value);
    }

    /**
     * Sets the roleAssignmentSchedules property value. Schedules for active role assignment operations.
     * @param array<UnifiedRoleAssignmentSchedule>|null $value Value to set for the roleAssignmentSchedules property.
    */
    public function setRoleAssignmentSchedules(?array $value): void {
        $this->getBackingStore()->set('roleAssignmentSchedules', $value);
    }

    /**
     * Sets the roleDefinitions property value. Resource representing the roles allowed by RBAC providers and the permissions assigned to the roles.
     * @param array<UnifiedRoleDefinition>|null $value Value to set for the roleDefinitions property.
    */
    public function setRoleDefinitions(?array $value): void {
        $this->getBackingStore()->set('roleDefinitions', $value);
    }

    /**
     * Sets the roleEligibilityScheduleInstances property value. Instances for role eligibility requests.
     * @param array<UnifiedRoleEligibilityScheduleInstance>|null $value Value to set for the roleEligibilityScheduleInstances property.
    */
    public function setRoleEligibilityScheduleInstances(?array $value): void {
        $this->getBackingStore()->set('roleEligibilityScheduleInstances', $value);
    }

    /**
     * Sets the roleEligibilityScheduleRequests property value. Requests for role eligibilities for principals through PIM.
     * @param array<UnifiedRoleEligibilityScheduleRequest>|null $value Value to set for the roleEligibilityScheduleRequests property.
    */
    public function setRoleEligibilityScheduleRequests(?array $value): void {
        $this->getBackingStore()->set('roleEligibilityScheduleRequests', $value);
    }

    /**
     * Sets the roleEligibilitySchedules property value. Schedules for role eligibility operations.
     * @param array<UnifiedRoleEligibilitySchedule>|null $value Value to set for the roleEligibilitySchedules property.
    */
    public function setRoleEligibilitySchedules(?array $value): void {
        $this->getBackingStore()->set('roleEligibilitySchedules', $value);
    }

}
