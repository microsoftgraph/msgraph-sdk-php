<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignment extends Entity implements Parsable 
{
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
        return $this->getBackingStore()->get('accessPackage');
    }

    /**
     * Gets the assignmentPolicy property value. Read-only. Supports $filter (eq) on the id property and $expand query parameters.
     * @return AccessPackageAssignmentPolicy|null
    */
    public function getAssignmentPolicy(): ?AccessPackageAssignmentPolicy {
        return $this->getBackingStore()->get('assignmentPolicy');
    }

    /**
     * Gets the expiredDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getExpiredDateTime(): ?DateTime {
        return $this->getBackingStore()->get('expiredDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackage' => fn(ParseNode $n) => $o->setAccessPackage($n->getObjectValue([AccessPackage::class, 'createFromDiscriminatorValue'])),
            'assignmentPolicy' => fn(ParseNode $n) => $o->setAssignmentPolicy($n->getObjectValue([AccessPackageAssignmentPolicy::class, 'createFromDiscriminatorValue'])),
            'expiredDateTime' => fn(ParseNode $n) => $o->setExpiredDateTime($n->getDateTimeValue()),
            'schedule' => fn(ParseNode $n) => $o->setSchedule($n->getObjectValue([EntitlementManagementSchedule::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(AccessPackageAssignmentState::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'target' => fn(ParseNode $n) => $o->setTarget($n->getObjectValue([AccessPackageSubject::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the schedule property value. When the access assignment is to be in place. Read-only.
     * @return EntitlementManagementSchedule|null
    */
    public function getSchedule(): ?EntitlementManagementSchedule {
        return $this->getBackingStore()->get('schedule');
    }

    /**
     * Gets the state property value. The state of the access package assignment. The possible values are: delivering, partiallyDelivered, delivered, expired, deliveryFailed, unknownFutureValue. Read-only. Supports $filter (eq).
     * @return AccessPackageAssignmentState|null
    */
    public function getState(): ?AccessPackageAssignmentState {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Gets the status property value. More information about the assignment lifecycle.  Possible values include Delivering, Delivered, NearExpiry1DayNotificationTriggered, or ExpiredNotificationTriggered.  Read-only.
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the target property value. The subject of the access package assignment. Read-only. Nullable. Supports $expand. Supports $filter (eq) on objectId.
     * @return AccessPackageSubject|null
    */
    public function getTarget(): ?AccessPackageSubject {
        return $this->getBackingStore()->get('target');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackage', $this->getAccessPackage());
        $writer->writeObjectValue('assignmentPolicy', $this->getAssignmentPolicy());
        $writer->writeDateTimeValue('expiredDateTime', $this->getExpiredDateTime());
        $writer->writeObjectValue('schedule', $this->getSchedule());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeObjectValue('target', $this->getTarget());
    }

    /**
     * Sets the accessPackage property value. Read-only. Nullable. Supports $filter (eq) on the id property and $expand query parameters.
     *  @param AccessPackage|null $value Value to set for the accessPackage property.
    */
    public function setAccessPackage(?AccessPackage $value): void {
        $this->getBackingStore()->set('accessPackage', $value);
    }

    /**
     * Sets the assignmentPolicy property value. Read-only. Supports $filter (eq) on the id property and $expand query parameters.
     *  @param AccessPackageAssignmentPolicy|null $value Value to set for the assignmentPolicy property.
    */
    public function setAssignmentPolicy(?AccessPackageAssignmentPolicy $value): void {
        $this->getBackingStore()->set('assignmentPolicy', $value);
    }

    /**
     * Sets the expiredDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the expiredDateTime property.
    */
    public function setExpiredDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expiredDateTime', $value);
    }

    /**
     * Sets the schedule property value. When the access assignment is to be in place. Read-only.
     *  @param EntitlementManagementSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?EntitlementManagementSchedule $value): void {
        $this->getBackingStore()->set('schedule', $value);
    }

    /**
     * Sets the state property value. The state of the access package assignment. The possible values are: delivering, partiallyDelivered, delivered, expired, deliveryFailed, unknownFutureValue. Read-only. Supports $filter (eq).
     *  @param AccessPackageAssignmentState|null $value Value to set for the state property.
    */
    public function setState(?AccessPackageAssignmentState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the status property value. More information about the assignment lifecycle.  Possible values include Delivering, Delivered, NearExpiry1DayNotificationTriggered, or ExpiredNotificationTriggered.  Read-only.
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the target property value. The subject of the access package assignment. Read-only. Nullable. Supports $expand. Supports $filter (eq) on objectId.
     *  @param AccessPackageSubject|null $value Value to set for the target property.
    */
    public function setTarget(?AccessPackageSubject $value): void {
        $this->getBackingStore()->set('target', $value);
    }

}
