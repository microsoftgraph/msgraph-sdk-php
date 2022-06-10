<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignment extends Entity implements Parsable 
{
    /**
     * @var AccessPackage|null $accessPackage Read-only. Nullable. Supports $filter (eq) on the id property and $expand query parameters.
    */
    private ?AccessPackage $accessPackage = null;
    
    /**
     * @var AccessPackageAssignmentPolicy|null $assignmentPolicy Read-only. Supports $filter (eq) on the id property and $expand query parameters.
    */
    private ?AccessPackageAssignmentPolicy $assignmentPolicy = null;
    
    /**
     * @var DateTime|null $expiredDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $expiredDateTime = null;
    
    /**
     * @var EntitlementManagementSchedule|null $schedule When the access assignment is to be in place. Read-only.
    */
    private ?EntitlementManagementSchedule $schedule = null;
    
    /**
     * @var AccessPackageAssignmentState|null $state The state of the access package assignment. The possible values are: delivering, partiallyDelivered, delivered, expired, deliveryFailed, unknownFutureValue. Read-only. Supports $filter (eq).
    */
    private ?AccessPackageAssignmentState $state = null;
    
    /**
     * @var string|null $status More information about the assignment lifecycle.  Possible values include Delivering, Delivered, NearExpiry1DayNotificationTriggered, or ExpiredNotificationTriggered.  Read-only.
    */
    private ?string $status = null;
    
    /**
     * @var AccessPackageSubject|null $target The subject of the access package assignment. Read-only. Nullable. Supports $expand. Supports $filter (eq) on objectId.
    */
    private ?AccessPackageSubject $target = null;
    
    /**
     * Instantiates a new accessPackageAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignment {
        return new AccessPackageAssignment();
    }

    /**
     * Gets the accessPackage property value. Read-only. Nullable. Supports $filter (eq) on the id property and $expand query parameters.
     * @return AccessPackage|null
    */
    public function getAccessPackage(): ?AccessPackage {
        return $this->accessPackage;
    }

    /**
     * Gets the assignmentPolicy property value. Read-only. Supports $filter (eq) on the id property and $expand query parameters.
     * @return AccessPackageAssignmentPolicy|null
    */
    public function getAssignmentPolicy(): ?AccessPackageAssignmentPolicy {
        return $this->assignmentPolicy;
    }

    /**
     * Gets the expiredDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getExpiredDateTime(): ?DateTime {
        return $this->expiredDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackage' => function (ParseNode $n) use ($o) { $o->setAccessPackage($n->getObjectValue(array(AccessPackage::class, 'createFromDiscriminatorValue'))); },
            'assignmentPolicy' => function (ParseNode $n) use ($o) { $o->setAssignmentPolicy($n->getObjectValue(array(AccessPackageAssignmentPolicy::class, 'createFromDiscriminatorValue'))); },
            'expiredDateTime' => function (ParseNode $n) use ($o) { $o->setExpiredDateTime($n->getDateTimeValue()); },
            'schedule' => function (ParseNode $n) use ($o) { $o->setSchedule($n->getObjectValue(array(EntitlementManagementSchedule::class, 'createFromDiscriminatorValue'))); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(AccessPackageAssignmentState::class)); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getStringValue()); },
            'target' => function (ParseNode $n) use ($o) { $o->setTarget($n->getObjectValue(array(AccessPackageSubject::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the schedule property value. When the access assignment is to be in place. Read-only.
     * @return EntitlementManagementSchedule|null
    */
    public function getSchedule(): ?EntitlementManagementSchedule {
        return $this->schedule;
    }

    /**
     * Gets the state property value. The state of the access package assignment. The possible values are: delivering, partiallyDelivered, delivered, expired, deliveryFailed, unknownFutureValue. Read-only. Supports $filter (eq).
     * @return AccessPackageAssignmentState|null
    */
    public function getState(): ?AccessPackageAssignmentState {
        return $this->state;
    }

    /**
     * Gets the status property value. More information about the assignment lifecycle.  Possible values include Delivering, Delivered, NearExpiry1DayNotificationTriggered, or ExpiredNotificationTriggered.  Read-only.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the target property value. The subject of the access package assignment. Read-only. Nullable. Supports $expand. Supports $filter (eq) on objectId.
     * @return AccessPackageSubject|null
    */
    public function getTarget(): ?AccessPackageSubject {
        return $this->target;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackage', $this->accessPackage);
        $writer->writeObjectValue('assignmentPolicy', $this->assignmentPolicy);
        $writer->writeDateTimeValue('expiredDateTime', $this->expiredDateTime);
        $writer->writeObjectValue('schedule', $this->schedule);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeStringValue('status', $this->status);
        $writer->writeObjectValue('target', $this->target);
    }

    /**
     * Sets the accessPackage property value. Read-only. Nullable. Supports $filter (eq) on the id property and $expand query parameters.
     *  @param AccessPackage|null $value Value to set for the accessPackage property.
    */
    public function setAccessPackage(?AccessPackage $value ): void {
        $this->accessPackage = $value;
    }

    /**
     * Sets the assignmentPolicy property value. Read-only. Supports $filter (eq) on the id property and $expand query parameters.
     *  @param AccessPackageAssignmentPolicy|null $value Value to set for the assignmentPolicy property.
    */
    public function setAssignmentPolicy(?AccessPackageAssignmentPolicy $value ): void {
        $this->assignmentPolicy = $value;
    }

    /**
     * Sets the expiredDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the expiredDateTime property.
    */
    public function setExpiredDateTime(?DateTime $value ): void {
        $this->expiredDateTime = $value;
    }

    /**
     * Sets the schedule property value. When the access assignment is to be in place. Read-only.
     *  @param EntitlementManagementSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?EntitlementManagementSchedule $value ): void {
        $this->schedule = $value;
    }

    /**
     * Sets the state property value. The state of the access package assignment. The possible values are: delivering, partiallyDelivered, delivered, expired, deliveryFailed, unknownFutureValue. Read-only. Supports $filter (eq).
     *  @param AccessPackageAssignmentState|null $value Value to set for the state property.
    */
    public function setState(?AccessPackageAssignmentState $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the status property value. More information about the assignment lifecycle.  Possible values include Delivering, Delivered, NearExpiry1DayNotificationTriggered, or ExpiredNotificationTriggered.  Read-only.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the target property value. The subject of the access package assignment. Read-only. Nullable. Supports $expand. Supports $filter (eq) on objectId.
     *  @param AccessPackageSubject|null $value Value to set for the target property.
    */
    public function setTarget(?AccessPackageSubject $value ): void {
        $this->target = $value;
    }

}
