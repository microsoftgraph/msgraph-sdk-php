<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnifiedRoleEligibilityScheduleInstance extends UnifiedRoleScheduleInstanceBase implements Parsable 
{
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
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'memberType' => fn(ParseNode $n) => $o->setMemberType($n->getStringValue()),
            'roleEligibilityScheduleId' => fn(ParseNode $n) => $o->setRoleEligibilityScheduleId($n->getStringValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the memberType property value. How the role eligibility is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleEligibilitySchedule can be managed by the caller. Supports $filter (eq, ne).
     * @return string|null
    */
    public function getMemberType(): ?string {
        return $this->getBackingStore()->get('memberType');
    }

    /**
     * Gets the roleEligibilityScheduleId property value. The identifier of the unifiedRoleEligibilitySchedule object from which this instance was created. Supports $filter (eq, ne).
     * @return string|null
    */
    public function getRoleEligibilityScheduleId(): ?string {
        return $this->getBackingStore()->get('roleEligibilityScheduleId');
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
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeStringValue('memberType', $this->getMemberType());
        $writer->writeStringValue('roleEligibilityScheduleId', $this->getRoleEligibilityScheduleId());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
    }

    /**
     * Sets the endDateTime property value. The end date of the schedule instance.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the memberType property value. How the role eligibility is inherited. It can either be Inherited, Direct, or Group. It can further imply whether the unifiedRoleEligibilitySchedule can be managed by the caller. Supports $filter (eq, ne).
     *  @param string|null $value Value to set for the memberType property.
    */
    public function setMemberType(?string $value): void {
        $this->getBackingStore()->set('memberType', $value);
    }

    /**
     * Sets the roleEligibilityScheduleId property value. The identifier of the unifiedRoleEligibilitySchedule object from which this instance was created. Supports $filter (eq, ne).
     *  @param string|null $value Value to set for the roleEligibilityScheduleId property.
    */
    public function setRoleEligibilityScheduleId(?string $value): void {
        $this->getBackingStore()->set('roleEligibilityScheduleId', $value);
    }

    /**
     * Sets the startDateTime property value. When this instance starts.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

}
