<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleAssignmentSchedule extends UnifiedRoleScheduleBase implements Parsable 
{
    /**
     * @var UnifiedRoleEligibilitySchedule|null $activatedUsing If the request is from an eligible administrator to activate a role, this parameter will show the related eligible assignment for that activation. Otherwise, it is null. Supports $expand.
    */
    private ?UnifiedRoleEligibilitySchedule $activatedUsing = null;
    
    /**
     * @var string|null $assignmentType Type of the assignment which can either be Assigned or Activated. Supports $filter (eq, ne).
    */
    private ?string $assignmentType = null;
    
    /**
     * @var string|null $memberType How the assignments is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleAssignmentSchedule can be managed by the caller. Supports $filter (eq, ne).
    */
    private ?string $memberType = null;
    
    /**
     * @var RequestSchedule|null $scheduleInfo The period of the role assignment. It can represent a single occurrence or multiple recurrences.
    */
    private ?RequestSchedule $scheduleInfo = null;
    
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activatedUsing' => function (ParseNode $n) use ($o) { $o->setActivatedUsing($n->getObjectValue(array(UnifiedRoleEligibilitySchedule::class, 'createFromDiscriminatorValue'))); },
            'assignmentType' => function (ParseNode $n) use ($o) { $o->setAssignmentType($n->getStringValue()); },
            'memberType' => function (ParseNode $n) use ($o) { $o->setMemberType($n->getStringValue()); },
            'scheduleInfo' => function (ParseNode $n) use ($o) { $o->setScheduleInfo($n->getObjectValue(array(RequestSchedule::class, 'createFromDiscriminatorValue'))); },
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
     * Gets the scheduleInfo property value. The period of the role assignment. It can represent a single occurrence or multiple recurrences.
     * @return RequestSchedule|null
    */
    public function getScheduleInfo(): ?RequestSchedule {
        return $this->scheduleInfo;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('activatedUsing', $this->activatedUsing);
        $writer->writeStringValue('assignmentType', $this->assignmentType);
        $writer->writeStringValue('memberType', $this->memberType);
        $writer->writeObjectValue('scheduleInfo', $this->scheduleInfo);
    }

    /**
     * Sets the activatedUsing property value. If the request is from an eligible administrator to activate a role, this parameter will show the related eligible assignment for that activation. Otherwise, it is null. Supports $expand.
     *  @param UnifiedRoleEligibilitySchedule|null $value Value to set for the activatedUsing property.
    */
    public function setActivatedUsing(?UnifiedRoleEligibilitySchedule $value ): void {
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
     * Sets the memberType property value. How the assignments is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleAssignmentSchedule can be managed by the caller. Supports $filter (eq, ne).
     *  @param string|null $value Value to set for the memberType property.
    */
    public function setMemberType(?string $value ): void {
        $this->memberType = $value;
    }

    /**
     * Sets the scheduleInfo property value. The period of the role assignment. It can represent a single occurrence or multiple recurrences.
     *  @param RequestSchedule|null $value Value to set for the scheduleInfo property.
    */
    public function setScheduleInfo(?RequestSchedule $value ): void {
        $this->scheduleInfo = $value;
    }

}
