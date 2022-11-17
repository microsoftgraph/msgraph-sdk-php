<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleAssignmentScheduleInstance extends UnifiedRoleScheduleInstanceBase implements Parsable 
{
    /**
     * Instantiates a new UnifiedRoleAssignmentScheduleInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.unifiedRoleAssignmentScheduleInstance');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleAssignmentScheduleInstance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleAssignmentScheduleInstance {
        return new UnifiedRoleAssignmentScheduleInstance();
    }

    /**
     * Gets the activatedUsing property value. If the request is from an eligible administrator to activate a role, this parameter will show the related eligible assignment for that activation. Otherwise, it is null. Supports $expand.
     * @return UnifiedRoleEligibilityScheduleInstance|null
    */
    public function getActivatedUsing(): ?UnifiedRoleEligibilityScheduleInstance {
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
     * Gets the endDateTime property value. The end date of the schedule instance.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('endDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activatedUsing' => fn(ParseNode $n) => $o->setActivatedUsing($n->getObjectValue([UnifiedRoleEligibilityScheduleInstance::class, 'createFromDiscriminatorValue'])),
            'assignmentType' => fn(ParseNode $n) => $o->setAssignmentType($n->getStringValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'memberType' => fn(ParseNode $n) => $o->setMemberType($n->getStringValue()),
            'roleAssignmentOriginId' => fn(ParseNode $n) => $o->setRoleAssignmentOriginId($n->getStringValue()),
            'roleAssignmentScheduleId' => fn(ParseNode $n) => $o->setRoleAssignmentScheduleId($n->getStringValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
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
     * Gets the roleAssignmentOriginId property value. The identifier of the role assignment in Azure AD. Supports $filter (eq, ne).
     * @return string|null
    */
    public function getRoleAssignmentOriginId(): ?string {
        return $this->getBackingStore()->get('roleAssignmentOriginId');
    }

    /**
     * Gets the roleAssignmentScheduleId property value. The identifier of the unifiedRoleAssignmentSchedule object from which this instance was created. Supports $filter (eq, ne).
     * @return string|null
    */
    public function getRoleAssignmentScheduleId(): ?string {
        return $this->getBackingStore()->get('roleAssignmentScheduleId');
    }

    /**
     * Gets the startDateTime property value. When this instance starts.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('activatedUsing', $this->getActivatedUsing());
        $writer->writeStringValue('assignmentType', $this->getAssignmentType());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeStringValue('memberType', $this->getMemberType());
        $writer->writeStringValue('roleAssignmentOriginId', $this->getRoleAssignmentOriginId());
        $writer->writeStringValue('roleAssignmentScheduleId', $this->getRoleAssignmentScheduleId());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
    }

    /**
     * Sets the activatedUsing property value. If the request is from an eligible administrator to activate a role, this parameter will show the related eligible assignment for that activation. Otherwise, it is null. Supports $expand.
     *  @param UnifiedRoleEligibilityScheduleInstance|null $value Value to set for the activatedUsing property.
    */
    public function setActivatedUsing(?UnifiedRoleEligibilityScheduleInstance $value): void {
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
     * Sets the endDateTime property value. The end date of the schedule instance.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the memberType property value. How the assignments is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleAssignmentSchedule can be managed by the caller. Supports $filter (eq, ne).
     *  @param string|null $value Value to set for the memberType property.
    */
    public function setMemberType(?string $value): void {
        $this->getBackingStore()->set('memberType', $value);
    }

    /**
     * Sets the roleAssignmentOriginId property value. The identifier of the role assignment in Azure AD. Supports $filter (eq, ne).
     *  @param string|null $value Value to set for the roleAssignmentOriginId property.
    */
    public function setRoleAssignmentOriginId(?string $value): void {
        $this->getBackingStore()->set('roleAssignmentOriginId', $value);
    }

    /**
     * Sets the roleAssignmentScheduleId property value. The identifier of the unifiedRoleAssignmentSchedule object from which this instance was created. Supports $filter (eq, ne).
     *  @param string|null $value Value to set for the roleAssignmentScheduleId property.
    */
    public function setRoleAssignmentScheduleId(?string $value): void {
        $this->getBackingStore()->set('roleAssignmentScheduleId', $value);
    }

    /**
     * Sets the startDateTime property value. When this instance starts.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

}
