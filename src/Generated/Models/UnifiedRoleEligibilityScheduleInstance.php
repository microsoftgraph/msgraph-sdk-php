<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleEligibilityScheduleInstance extends UnifiedRoleScheduleInstanceBase implements Parsable 
{
    /**
     * @var DateTime|null $endDateTime Time that the roleEligibilityScheduleInstance will expire.
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var string|null $memberType Membership type of the assignment. It can either be Inherited, Direct, or Group.
    */
    private ?string $memberType = null;
    
    /**
     * @var string|null $roleEligibilityScheduleId Identifier of the parent roleEligibilitySchedule for this instance.
    */
    private ?string $roleEligibilityScheduleId = null;
    
    /**
     * @var DateTime|null $startDateTime Time that the roleEligibilityScheduleInstance will start.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * Instantiates a new unifiedRoleEligibilityScheduleInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.unifiedRoleEligibilityScheduleInstance');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnifiedRoleEligibilityScheduleInstance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnifiedRoleEligibilityScheduleInstance {
        return new UnifiedRoleEligibilityScheduleInstance();
    }

    /**
     * Gets the endDateTime property value. Time that the roleEligibilityScheduleInstance will expire.
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
            'endDateTime' => function (ParseNode $n) use ($o) { $o->setEndDateTime($n->getDateTimeValue()); },
            'memberType' => function (ParseNode $n) use ($o) { $o->setMemberType($n->getStringValue()); },
            'roleEligibilityScheduleId' => function (ParseNode $n) use ($o) { $o->setRoleEligibilityScheduleId($n->getStringValue()); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the memberType property value. Membership type of the assignment. It can either be Inherited, Direct, or Group.
     * @return string|null
    */
    public function getMemberType(): ?string {
        return $this->memberType;
    }

    /**
     * Gets the roleEligibilityScheduleId property value. Identifier of the parent roleEligibilitySchedule for this instance.
     * @return string|null
    */
    public function getRoleEligibilityScheduleId(): ?string {
        return $this->roleEligibilityScheduleId;
    }

    /**
     * Gets the startDateTime property value. Time that the roleEligibilityScheduleInstance will start.
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
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeStringValue('memberType', $this->memberType);
        $writer->writeStringValue('roleEligibilityScheduleId', $this->roleEligibilityScheduleId);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
    }

    /**
     * Sets the endDateTime property value. Time that the roleEligibilityScheduleInstance will expire.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the memberType property value. Membership type of the assignment. It can either be Inherited, Direct, or Group.
     *  @param string|null $value Value to set for the memberType property.
    */
    public function setMemberType(?string $value ): void {
        $this->memberType = $value;
    }

    /**
     * Sets the roleEligibilityScheduleId property value. Identifier of the parent roleEligibilitySchedule for this instance.
     *  @param string|null $value Value to set for the roleEligibilityScheduleId property.
    */
    public function setRoleEligibilityScheduleId(?string $value ): void {
        $this->roleEligibilityScheduleId = $value;
    }

    /**
     * Sets the startDateTime property value. Time that the roleEligibilityScheduleInstance will start.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

}
