<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleAssignmentSchedule extends UnifiedRoleScheduleBase implements Parsable 
{
    /**
     * Instantiates a new UnifiedRoleAssignmentSchedule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleAssignmentSchedule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleAssignmentSchedule {
        return new UnifiedRoleAssignmentSchedule();
    }

    /**
     * Gets the activatedUsing property value. If the request is from an eligible administrator to activate a role, this parameter will show the related eligible assignment for that activation. Otherwise, it is null. Supports $expand.
     * @return UnifiedRoleEligibilitySchedule|null
    */
    public function getActivatedUsing(): ?UnifiedRoleEligibilitySchedule {
        return $this->getBackingStore()->get('activatedUsing');
    }

    /**
     * Gets the assignmentType property value. Type of the assignment which can either be Assigned or Activated. Supports $filter (eq, ne).
     * @return string|null
    */
    public function getAssignmentType(): ?string {
        return $this->getBackingStore()->get('assignmentType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activatedUsing' => fn(ParseNode $n) => $o->setActivatedUsing($n->getObjectValue([UnifiedRoleEligibilitySchedule::class, 'createFromDiscriminatorValue'])),
            'assignmentType' => fn(ParseNode $n) => $o->setAssignmentType($n->getStringValue()),
            'memberType' => fn(ParseNode $n) => $o->setMemberType($n->getStringValue()),
            'scheduleInfo' => fn(ParseNode $n) => $o->setScheduleInfo($n->getObjectValue([RequestSchedule::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the memberType property value. How the assignments is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleAssignmentSchedule can be managed by the caller. Supports $filter (eq, ne).
     * @return string|null
    */
    public function getMemberType(): ?string {
        return $this->getBackingStore()->get('memberType');
    }

    /**
     * Gets the scheduleInfo property value. The period of the role assignment. It can represent a single occurrence or multiple recurrences.
     * @return RequestSchedule|null
    */
    public function getScheduleInfo(): ?RequestSchedule {
        return $this->getBackingStore()->get('scheduleInfo');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('activatedUsing', $this->getActivatedUsing());
        $writer->writeStringValue('assignmentType', $this->getAssignmentType());
        $writer->writeStringValue('memberType', $this->getMemberType());
        $writer->writeObjectValue('scheduleInfo', $this->getScheduleInfo());
    }

    /**
     * Sets the activatedUsing property value. If the request is from an eligible administrator to activate a role, this parameter will show the related eligible assignment for that activation. Otherwise, it is null. Supports $expand.
     *  @param UnifiedRoleEligibilitySchedule|null $value Value to set for the activatedUsing property.
    */
    public function setActivatedUsing(?UnifiedRoleEligibilitySchedule $value): void {
        $this->getBackingStore()->set('activatedUsing', $value);
    }

    /**
     * Sets the assignmentType property value. Type of the assignment which can either be Assigned or Activated. Supports $filter (eq, ne).
     *  @param string|null $value Value to set for the assignmentType property.
    */
    public function setAssignmentType(?string $value): void {
        $this->getBackingStore()->set('assignmentType', $value);
    }

    /**
     * Sets the memberType property value. How the assignments is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleAssignmentSchedule can be managed by the caller. Supports $filter (eq, ne).
     *  @param string|null $value Value to set for the memberType property.
    */
    public function setMemberType(?string $value): void {
        $this->getBackingStore()->set('memberType', $value);
    }

    /**
     * Sets the scheduleInfo property value. The period of the role assignment. It can represent a single occurrence or multiple recurrences.
     *  @param RequestSchedule|null $value Value to set for the scheduleInfo property.
    */
    public function setScheduleInfo(?RequestSchedule $value): void {
        $this->getBackingStore()->set('scheduleInfo', $value);
    }

}
