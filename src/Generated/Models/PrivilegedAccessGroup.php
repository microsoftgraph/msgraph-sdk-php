<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PrivilegedAccessGroup extends Entity implements Parsable 
{
    /**
     * Instantiates a new PrivilegedAccessGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedAccessGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedAccessGroup {
        return new PrivilegedAccessGroup();
    }

    /**
     * Gets the assignmentApprovals property value. The assignmentApprovals property
     * @return array<Approval>|null
    */
    public function getAssignmentApprovals(): ?array {
        $val = $this->getBackingStore()->get('assignmentApprovals');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Approval::class);
            /** @var array<Approval>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentApprovals'");
    }

    /**
     * Gets the assignmentScheduleInstances property value. The instances of assignment schedules to activate a just-in-time access.
     * @return array<PrivilegedAccessGroupAssignmentScheduleInstance>|null
    */
    public function getAssignmentScheduleInstances(): ?array {
        $val = $this->getBackingStore()->get('assignmentScheduleInstances');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrivilegedAccessGroupAssignmentScheduleInstance::class);
            /** @var array<PrivilegedAccessGroupAssignmentScheduleInstance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentScheduleInstances'");
    }

    /**
     * Gets the assignmentScheduleRequests property value. The schedule requests for operations to create, update, delete, extend, and renew an assignment.
     * @return array<PrivilegedAccessGroupAssignmentScheduleRequest>|null
    */
    public function getAssignmentScheduleRequests(): ?array {
        $val = $this->getBackingStore()->get('assignmentScheduleRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrivilegedAccessGroupAssignmentScheduleRequest::class);
            /** @var array<PrivilegedAccessGroupAssignmentScheduleRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentScheduleRequests'");
    }

    /**
     * Gets the assignmentSchedules property value. The assignment schedules to activate a just-in-time access.
     * @return array<PrivilegedAccessGroupAssignmentSchedule>|null
    */
    public function getAssignmentSchedules(): ?array {
        $val = $this->getBackingStore()->get('assignmentSchedules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrivilegedAccessGroupAssignmentSchedule::class);
            /** @var array<PrivilegedAccessGroupAssignmentSchedule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentSchedules'");
    }

    /**
     * Gets the eligibilityScheduleInstances property value. The instances of eligibility schedules to activate a just-in-time access.
     * @return array<PrivilegedAccessGroupEligibilityScheduleInstance>|null
    */
    public function getEligibilityScheduleInstances(): ?array {
        $val = $this->getBackingStore()->get('eligibilityScheduleInstances');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrivilegedAccessGroupEligibilityScheduleInstance::class);
            /** @var array<PrivilegedAccessGroupEligibilityScheduleInstance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eligibilityScheduleInstances'");
    }

    /**
     * Gets the eligibilityScheduleRequests property value. The schedule requests for operations to create, update, delete, extend, and renew an eligibility.
     * @return array<PrivilegedAccessGroupEligibilityScheduleRequest>|null
    */
    public function getEligibilityScheduleRequests(): ?array {
        $val = $this->getBackingStore()->get('eligibilityScheduleRequests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrivilegedAccessGroupEligibilityScheduleRequest::class);
            /** @var array<PrivilegedAccessGroupEligibilityScheduleRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eligibilityScheduleRequests'");
    }

    /**
     * Gets the eligibilitySchedules property value. The eligibility schedules to activate a just-in-time access.
     * @return array<PrivilegedAccessGroupEligibilitySchedule>|null
    */
    public function getEligibilitySchedules(): ?array {
        $val = $this->getBackingStore()->get('eligibilitySchedules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrivilegedAccessGroupEligibilitySchedule::class);
            /** @var array<PrivilegedAccessGroupEligibilitySchedule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eligibilitySchedules'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignmentApprovals' => fn(ParseNode $n) => $o->setAssignmentApprovals($n->getCollectionOfObjectValues([Approval::class, 'createFromDiscriminatorValue'])),
            'assignmentScheduleInstances' => fn(ParseNode $n) => $o->setAssignmentScheduleInstances($n->getCollectionOfObjectValues([PrivilegedAccessGroupAssignmentScheduleInstance::class, 'createFromDiscriminatorValue'])),
            'assignmentScheduleRequests' => fn(ParseNode $n) => $o->setAssignmentScheduleRequests($n->getCollectionOfObjectValues([PrivilegedAccessGroupAssignmentScheduleRequest::class, 'createFromDiscriminatorValue'])),
            'assignmentSchedules' => fn(ParseNode $n) => $o->setAssignmentSchedules($n->getCollectionOfObjectValues([PrivilegedAccessGroupAssignmentSchedule::class, 'createFromDiscriminatorValue'])),
            'eligibilityScheduleInstances' => fn(ParseNode $n) => $o->setEligibilityScheduleInstances($n->getCollectionOfObjectValues([PrivilegedAccessGroupEligibilityScheduleInstance::class, 'createFromDiscriminatorValue'])),
            'eligibilityScheduleRequests' => fn(ParseNode $n) => $o->setEligibilityScheduleRequests($n->getCollectionOfObjectValues([PrivilegedAccessGroupEligibilityScheduleRequest::class, 'createFromDiscriminatorValue'])),
            'eligibilitySchedules' => fn(ParseNode $n) => $o->setEligibilitySchedules($n->getCollectionOfObjectValues([PrivilegedAccessGroupEligibilitySchedule::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignmentApprovals', $this->getAssignmentApprovals());
        $writer->writeCollectionOfObjectValues('assignmentScheduleInstances', $this->getAssignmentScheduleInstances());
        $writer->writeCollectionOfObjectValues('assignmentScheduleRequests', $this->getAssignmentScheduleRequests());
        $writer->writeCollectionOfObjectValues('assignmentSchedules', $this->getAssignmentSchedules());
        $writer->writeCollectionOfObjectValues('eligibilityScheduleInstances', $this->getEligibilityScheduleInstances());
        $writer->writeCollectionOfObjectValues('eligibilityScheduleRequests', $this->getEligibilityScheduleRequests());
        $writer->writeCollectionOfObjectValues('eligibilitySchedules', $this->getEligibilitySchedules());
    }

    /**
     * Sets the assignmentApprovals property value. The assignmentApprovals property
     * @param array<Approval>|null $value Value to set for the assignmentApprovals property.
    */
    public function setAssignmentApprovals(?array $value): void {
        $this->getBackingStore()->set('assignmentApprovals', $value);
    }

    /**
     * Sets the assignmentScheduleInstances property value. The instances of assignment schedules to activate a just-in-time access.
     * @param array<PrivilegedAccessGroupAssignmentScheduleInstance>|null $value Value to set for the assignmentScheduleInstances property.
    */
    public function setAssignmentScheduleInstances(?array $value): void {
        $this->getBackingStore()->set('assignmentScheduleInstances', $value);
    }

    /**
     * Sets the assignmentScheduleRequests property value. The schedule requests for operations to create, update, delete, extend, and renew an assignment.
     * @param array<PrivilegedAccessGroupAssignmentScheduleRequest>|null $value Value to set for the assignmentScheduleRequests property.
    */
    public function setAssignmentScheduleRequests(?array $value): void {
        $this->getBackingStore()->set('assignmentScheduleRequests', $value);
    }

    /**
     * Sets the assignmentSchedules property value. The assignment schedules to activate a just-in-time access.
     * @param array<PrivilegedAccessGroupAssignmentSchedule>|null $value Value to set for the assignmentSchedules property.
    */
    public function setAssignmentSchedules(?array $value): void {
        $this->getBackingStore()->set('assignmentSchedules', $value);
    }

    /**
     * Sets the eligibilityScheduleInstances property value. The instances of eligibility schedules to activate a just-in-time access.
     * @param array<PrivilegedAccessGroupEligibilityScheduleInstance>|null $value Value to set for the eligibilityScheduleInstances property.
    */
    public function setEligibilityScheduleInstances(?array $value): void {
        $this->getBackingStore()->set('eligibilityScheduleInstances', $value);
    }

    /**
     * Sets the eligibilityScheduleRequests property value. The schedule requests for operations to create, update, delete, extend, and renew an eligibility.
     * @param array<PrivilegedAccessGroupEligibilityScheduleRequest>|null $value Value to set for the eligibilityScheduleRequests property.
    */
    public function setEligibilityScheduleRequests(?array $value): void {
        $this->getBackingStore()->set('eligibilityScheduleRequests', $value);
    }

    /**
     * Sets the eligibilitySchedules property value. The eligibility schedules to activate a just-in-time access.
     * @param array<PrivilegedAccessGroupEligibilitySchedule>|null $value Value to set for the eligibilitySchedules property.
    */
    public function setEligibilitySchedules(?array $value): void {
        $this->getBackingStore()->set('eligibilitySchedules', $value);
    }

}
