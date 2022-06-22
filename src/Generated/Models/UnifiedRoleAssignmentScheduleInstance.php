<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleAssignmentScheduleInstance extends UnifiedRoleScheduleInstanceBase implements Parsable 
{
    /**
     * @var UnifiedRoleEligibilityScheduleInstance|null $activatedUsing If the request is from an eligible administrator to activate a role, this parameter will show the related eligible assignment for that activation. Otherwise, it is null. Supports $expand.
    */
    private ?UnifiedRoleEligibilityScheduleInstance $activatedUsing = null;
    
    /**
     * @var string|null $assignmentType Type of the assignment which can either be Assigned or Activated. Supports $filter (eq, ne).
    */
    private ?string $assignmentType = null;
    
    /**
     * @var DateTime|null $endDateTime The end date of the schedule instance.
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var string|null $memberType How the assignments is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleAssignmentSchedule can be managed by the caller. Supports $filter (eq, ne).
    */
    private ?string $memberType = null;
    
    /**
     * @var string|null $roleAssignmentOriginId The identifier of the role assignment in Azure AD.
    */
    private ?string $roleAssignmentOriginId = null;
    
    /**
     * @var string|null $roleAssignmentScheduleId The identifier of the unifiedRoleAssignmentSchedule object from which this instance was created.
    */
    private ?string $roleAssignmentScheduleId = null;
    
    /**
     * @var DateTime|null $startDateTime When this instance starts.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * Instantiates a new UnifiedRoleAssignmentScheduleInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->activatedUsing;
    }

    /**
     * Gets the assignmentType property value. Type of the assignment which can either be Assigned or Activated. Supports $filter (eq, ne).
     * @return string|null
    */
    public function getAssignmentType(): ?string {
        return $this->assignmentType;
    }

    /**
     * Gets the endDateTime property value. The end date of the schedule instance.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activatedUsing' => function (ParseNode $n) use ($o) { $o->setActivatedUsing($n->getObjectValue(array(UnifiedRoleEligibilityScheduleInstance::class, 'createFromDiscriminatorValue'))); },
            'assignmentType' => function (ParseNode $n) use ($o) { $o->setAssignmentType($n->getStringValue()); },
            'endDateTime' => function (ParseNode $n) use ($o) { $o->setEndDateTime($n->getDateTimeValue()); },
            'memberType' => function (ParseNode $n) use ($o) { $o->setMemberType($n->getStringValue()); },
            'roleAssignmentOriginId' => function (ParseNode $n) use ($o) { $o->setRoleAssignmentOriginId($n->getStringValue()); },
            'roleAssignmentScheduleId' => function (ParseNode $n) use ($o) { $o->setRoleAssignmentScheduleId($n->getStringValue()); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the memberType property value. How the assignments is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleAssignmentSchedule can be managed by the caller. Supports $filter (eq, ne).
     * @return string|null
    */
    public function getMemberType(): ?string {
        return $this->memberType;
    }

    /**
     * Gets the roleAssignmentOriginId property value. The identifier of the role assignment in Azure AD.
     * @return string|null
    */
    public function getRoleAssignmentOriginId(): ?string {
        return $this->roleAssignmentOriginId;
    }

    /**
     * Gets the roleAssignmentScheduleId property value. The identifier of the unifiedRoleAssignmentSchedule object from which this instance was created.
     * @return string|null
    */
    public function getRoleAssignmentScheduleId(): ?string {
        return $this->roleAssignmentScheduleId;
    }

    /**
     * Gets the startDateTime property value. When this instance starts.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('activatedUsing', $this->activatedUsing);
        $writer->writeStringValue('assignmentType', $this->assignmentType);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeStringValue('memberType', $this->memberType);
        $writer->writeStringValue('roleAssignmentOriginId', $this->roleAssignmentOriginId);
        $writer->writeStringValue('roleAssignmentScheduleId', $this->roleAssignmentScheduleId);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
    }

    /**
     * Sets the activatedUsing property value. If the request is from an eligible administrator to activate a role, this parameter will show the related eligible assignment for that activation. Otherwise, it is null. Supports $expand.
     *  @param UnifiedRoleEligibilityScheduleInstance|null $value Value to set for the activatedUsing property.
    */
    public function setActivatedUsing(?UnifiedRoleEligibilityScheduleInstance $value ): void {
        $this->activatedUsing = $value;
    }

    /**
     * Sets the assignmentType property value. Type of the assignment which can either be Assigned or Activated. Supports $filter (eq, ne).
     *  @param string|null $value Value to set for the assignmentType property.
    */
    public function setAssignmentType(?string $value ): void {
        $this->assignmentType = $value;
    }

    /**
     * Sets the endDateTime property value. The end date of the schedule instance.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the memberType property value. How the assignments is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleAssignmentSchedule can be managed by the caller. Supports $filter (eq, ne).
     *  @param string|null $value Value to set for the memberType property.
    */
    public function setMemberType(?string $value ): void {
        $this->memberType = $value;
    }

    /**
     * Sets the roleAssignmentOriginId property value. The identifier of the role assignment in Azure AD.
     *  @param string|null $value Value to set for the roleAssignmentOriginId property.
    */
    public function setRoleAssignmentOriginId(?string $value ): void {
        $this->roleAssignmentOriginId = $value;
    }

    /**
     * Sets the roleAssignmentScheduleId property value. The identifier of the unifiedRoleAssignmentSchedule object from which this instance was created.
     *  @param string|null $value Value to set for the roleAssignmentScheduleId property.
    */
    public function setRoleAssignmentScheduleId(?string $value ): void {
        $this->roleAssignmentScheduleId = $value;
    }

    /**
     * Sets the startDateTime property value. When this instance starts.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

}
