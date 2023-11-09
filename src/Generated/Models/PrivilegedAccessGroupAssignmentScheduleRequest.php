<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedAccessGroupAssignmentScheduleRequest extends PrivilegedAccessScheduleRequest implements Parsable 
{
    /**
     * Instantiates a new privilegedAccessGroupAssignmentScheduleRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.privilegedAccessGroupAssignmentScheduleRequest');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedAccessGroupAssignmentScheduleRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedAccessGroupAssignmentScheduleRequest {
        return new PrivilegedAccessGroupAssignmentScheduleRequest();
    }

    /**
     * Gets the accessId property value. The identifier of a membership or ownership assignment relationship to the group. Required. The possible values are: owner, member, unknownFutureValue.
     * @return PrivilegedAccessGroupRelationships|null
    */
    public function getAccessId(): ?PrivilegedAccessGroupRelationships {
        $val = $this->getBackingStore()->get('accessId');
        if (is_null($val) || $val instanceof PrivilegedAccessGroupRelationships) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessId'");
    }

    /**
     * Gets the activatedUsing property value. When the request activates a membership or ownership assignment in PIM for groups, this object represents the eligibility policy for the group. Otherwise, it is null. Supports $expand.
     * @return PrivilegedAccessGroupEligibilitySchedule|null
    */
    public function getActivatedUsing(): ?PrivilegedAccessGroupEligibilitySchedule {
        $val = $this->getBackingStore()->get('activatedUsing');
        if (is_null($val) || $val instanceof PrivilegedAccessGroupEligibilitySchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activatedUsing'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessId' => fn(ParseNode $n) => $o->setAccessId($n->getEnumValue(PrivilegedAccessGroupRelationships::class)),
            'activatedUsing' => fn(ParseNode $n) => $o->setActivatedUsing($n->getObjectValue([PrivilegedAccessGroupEligibilitySchedule::class, 'createFromDiscriminatorValue'])),
            'group' => fn(ParseNode $n) => $o->setGroup($n->getObjectValue([Group::class, 'createFromDiscriminatorValue'])),
            'groupId' => fn(ParseNode $n) => $o->setGroupId($n->getStringValue()),
            'principal' => fn(ParseNode $n) => $o->setPrincipal($n->getObjectValue([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'principalId' => fn(ParseNode $n) => $o->setPrincipalId($n->getStringValue()),
            'targetSchedule' => fn(ParseNode $n) => $o->setTargetSchedule($n->getObjectValue([PrivilegedAccessGroupEligibilitySchedule::class, 'createFromDiscriminatorValue'])),
            'targetScheduleId' => fn(ParseNode $n) => $o->setTargetScheduleId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the group property value. References the group that is the scope of the membership or ownership assignment request through PIM for groups. Supports $expand.
     * @return Group|null
    */
    public function getGroup(): ?Group {
        $val = $this->getBackingStore()->get('group');
        if (is_null($val) || $val instanceof Group) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'group'");
    }

    /**
     * Gets the groupId property value. The identifier of the group representing the scope of the membership or ownership assignment through PIM for groups. Required.
     * @return string|null
    */
    public function getGroupId(): ?string {
        $val = $this->getBackingStore()->get('groupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupId'");
    }

    /**
     * Gets the principal property value. References the principal that's in the scope of this membership or ownership assignment request through the group that's governed by PIM. Supports $expand.
     * @return DirectoryObject|null
    */
    public function getPrincipal(): ?DirectoryObject {
        $val = $this->getBackingStore()->get('principal');
        if (is_null($val) || $val instanceof DirectoryObject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'principal'");
    }

    /**
     * Gets the principalId property value. The identifier of the principal whose membership or ownership assignment to the group is managed through PIM for groups. Supports $filter (eq, ne).
     * @return string|null
    */
    public function getPrincipalId(): ?string {
        $val = $this->getBackingStore()->get('principalId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'principalId'");
    }

    /**
     * Gets the targetSchedule property value. Schedule created by this request. Supports $expand.
     * @return PrivilegedAccessGroupEligibilitySchedule|null
    */
    public function getTargetSchedule(): ?PrivilegedAccessGroupEligibilitySchedule {
        $val = $this->getBackingStore()->get('targetSchedule');
        if (is_null($val) || $val instanceof PrivilegedAccessGroupEligibilitySchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetSchedule'");
    }

    /**
     * Gets the targetScheduleId property value. The identifier of the schedule that's created from the membership or ownership assignment request. Supports $filter (eq, ne).
     * @return string|null
    */
    public function getTargetScheduleId(): ?string {
        $val = $this->getBackingStore()->get('targetScheduleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetScheduleId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('accessId', $this->getAccessId());
        $writer->writeObjectValue('activatedUsing', $this->getActivatedUsing());
        $writer->writeObjectValue('group', $this->getGroup());
        $writer->writeStringValue('groupId', $this->getGroupId());
        $writer->writeObjectValue('principal', $this->getPrincipal());
        $writer->writeStringValue('principalId', $this->getPrincipalId());
        $writer->writeObjectValue('targetSchedule', $this->getTargetSchedule());
        $writer->writeStringValue('targetScheduleId', $this->getTargetScheduleId());
    }

    /**
     * Sets the accessId property value. The identifier of a membership or ownership assignment relationship to the group. Required. The possible values are: owner, member, unknownFutureValue.
     * @param PrivilegedAccessGroupRelationships|null $value Value to set for the accessId property.
    */
    public function setAccessId(?PrivilegedAccessGroupRelationships $value): void {
        $this->getBackingStore()->set('accessId', $value);
    }

    /**
     * Sets the activatedUsing property value. When the request activates a membership or ownership assignment in PIM for groups, this object represents the eligibility policy for the group. Otherwise, it is null. Supports $expand.
     * @param PrivilegedAccessGroupEligibilitySchedule|null $value Value to set for the activatedUsing property.
    */
    public function setActivatedUsing(?PrivilegedAccessGroupEligibilitySchedule $value): void {
        $this->getBackingStore()->set('activatedUsing', $value);
    }

    /**
     * Sets the group property value. References the group that is the scope of the membership or ownership assignment request through PIM for groups. Supports $expand.
     * @param Group|null $value Value to set for the group property.
    */
    public function setGroup(?Group $value): void {
        $this->getBackingStore()->set('group', $value);
    }

    /**
     * Sets the groupId property value. The identifier of the group representing the scope of the membership or ownership assignment through PIM for groups. Required.
     * @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value): void {
        $this->getBackingStore()->set('groupId', $value);
    }

    /**
     * Sets the principal property value. References the principal that's in the scope of this membership or ownership assignment request through the group that's governed by PIM. Supports $expand.
     * @param DirectoryObject|null $value Value to set for the principal property.
    */
    public function setPrincipal(?DirectoryObject $value): void {
        $this->getBackingStore()->set('principal', $value);
    }

    /**
     * Sets the principalId property value. The identifier of the principal whose membership or ownership assignment to the group is managed through PIM for groups. Supports $filter (eq, ne).
     * @param string|null $value Value to set for the principalId property.
    */
    public function setPrincipalId(?string $value): void {
        $this->getBackingStore()->set('principalId', $value);
    }

    /**
     * Sets the targetSchedule property value. Schedule created by this request. Supports $expand.
     * @param PrivilegedAccessGroupEligibilitySchedule|null $value Value to set for the targetSchedule property.
    */
    public function setTargetSchedule(?PrivilegedAccessGroupEligibilitySchedule $value): void {
        $this->getBackingStore()->set('targetSchedule', $value);
    }

    /**
     * Sets the targetScheduleId property value. The identifier of the schedule that's created from the membership or ownership assignment request. Supports $filter (eq, ne).
     * @param string|null $value Value to set for the targetScheduleId property.
    */
    public function setTargetScheduleId(?string $value): void {
        $this->getBackingStore()->set('targetScheduleId', $value);
    }

}
