<?php

namespace Microsoft\Graph\Generated\Models;

use DateInterval;
use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DelegatedAdminRelationship extends Entity implements Parsable 
{
    /**
     * Instantiates a new DelegatedAdminRelationship and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegatedAdminRelationship
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DelegatedAdminRelationship {
        return new DelegatedAdminRelationship();
    }

    /**
     * Gets the accessAssignments property value. The access assignments associated with the delegated admin relationship.
     * @return array<DelegatedAdminAccessAssignment>|null
    */
    public function getAccessAssignments(): ?array {
        $val = $this->getBackingStore()->get('accessAssignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DelegatedAdminAccessAssignment::class);
            /** @var array<DelegatedAdminAccessAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessAssignments'");
    }

    /**
     * Gets the accessDetails property value. The accessDetails property
     * @return DelegatedAdminAccessDetails|null
    */
    public function getAccessDetails(): ?DelegatedAdminAccessDetails {
        $val = $this->getBackingStore()->get('accessDetails');
        if (is_null($val) || $val instanceof DelegatedAdminAccessDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessDetails'");
    }

    /**
     * Gets the activatedDateTime property value. The date and time in ISO 8601 format and in UTC time when the relationship became active. Read-only.
     * @return DateTime|null
    */
    public function getActivatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('activatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activatedDateTime'");
    }

    /**
     * Gets the createdDateTime property value. The date and time in ISO 8601 format and in UTC time when the relationship was created. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the customer property value. The display name and unique identifier of the customer of the relationship. This is configured either by the partner at the time the relationship is created or by the system after the customer approves the relationship. Cannot be changed by the customer.
     * @return DelegatedAdminRelationshipCustomerParticipant|null
    */
    public function getCustomer(): ?DelegatedAdminRelationshipCustomerParticipant {
        $val = $this->getBackingStore()->get('customer');
        if (is_null($val) || $val instanceof DelegatedAdminRelationshipCustomerParticipant) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customer'");
    }

    /**
     * Gets the displayName property value. The display name of the relationship used for ease of identification. Must be unique across all delegated admin relationships of the partner. This is set by the partner only when the relationship is in the created status and cannot be changed by the customer.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the duration property value. The duration of the relationship in ISO 8601 format. Must be a value between P1D and P2Y inclusive. This is set by the partner only when the relationship is in the created status and cannot be changed by the customer.
     * @return DateInterval|null
    */
    public function getDuration(): ?DateInterval {
        $val = $this->getBackingStore()->get('duration');
        if (is_null($val) || $val instanceof DateInterval) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'duration'");
    }

    /**
     * Gets the endDateTime property value. The date and time in ISO 8601 format and in UTC time when the status of relationship changes to either terminated or expired. Calculated as endDateTime = activatedDateTime + duration. Read-only.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('endDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessAssignments' => fn(ParseNode $n) => $o->setAccessAssignments($n->getCollectionOfObjectValues([DelegatedAdminAccessAssignment::class, 'createFromDiscriminatorValue'])),
            'accessDetails' => fn(ParseNode $n) => $o->setAccessDetails($n->getObjectValue([DelegatedAdminAccessDetails::class, 'createFromDiscriminatorValue'])),
            'activatedDateTime' => fn(ParseNode $n) => $o->setActivatedDateTime($n->getDateTimeValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'customer' => fn(ParseNode $n) => $o->setCustomer($n->getObjectValue([DelegatedAdminRelationshipCustomerParticipant::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'duration' => fn(ParseNode $n) => $o->setDuration($n->getDateIntervalValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([DelegatedAdminRelationshipOperation::class, 'createFromDiscriminatorValue'])),
            'requests' => fn(ParseNode $n) => $o->setRequests($n->getCollectionOfObjectValues([DelegatedAdminRelationshipRequest::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(DelegatedAdminRelationshipStatus::class)),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time in ISO 8601 format and in UTC time when the relationship was last modified. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the operations property value. The long running operations associated with the delegated admin relationship.
     * @return array<DelegatedAdminRelationshipOperation>|null
    */
    public function getOperations(): ?array {
        $val = $this->getBackingStore()->get('operations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DelegatedAdminRelationshipOperation::class);
            /** @var array<DelegatedAdminRelationshipOperation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operations'");
    }

    /**
     * Gets the requests property value. The requests associated with the delegated admin relationship.
     * @return array<DelegatedAdminRelationshipRequest>|null
    */
    public function getRequests(): ?array {
        $val = $this->getBackingStore()->get('requests');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DelegatedAdminRelationshipRequest::class);
            /** @var array<DelegatedAdminRelationshipRequest>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requests'");
    }

    /**
     * Gets the status property value. The status of the relationship. Read Only. The possible values are: activating, active, approvalPending, approved, created, expired, expiring, terminated, terminating, terminationRequested, unknownFutureValue. Supports $orderBy.
     * @return DelegatedAdminRelationshipStatus|null
    */
    public function getStatus(): ?DelegatedAdminRelationshipStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof DelegatedAdminRelationshipStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('accessAssignments', $this->getAccessAssignments());
        $writer->writeObjectValue('accessDetails', $this->getAccessDetails());
        $writer->writeDateTimeValue('activatedDateTime', $this->getActivatedDateTime());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('customer', $this->getCustomer());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateIntervalValue('duration', $this->getDuration());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeCollectionOfObjectValues('requests', $this->getRequests());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the accessAssignments property value. The access assignments associated with the delegated admin relationship.
     * @param array<DelegatedAdminAccessAssignment>|null $value Value to set for the accessAssignments property.
    */
    public function setAccessAssignments(?array $value): void {
        $this->getBackingStore()->set('accessAssignments', $value);
    }

    /**
     * Sets the accessDetails property value. The accessDetails property
     * @param DelegatedAdminAccessDetails|null $value Value to set for the accessDetails property.
    */
    public function setAccessDetails(?DelegatedAdminAccessDetails $value): void {
        $this->getBackingStore()->set('accessDetails', $value);
    }

    /**
     * Sets the activatedDateTime property value. The date and time in ISO 8601 format and in UTC time when the relationship became active. Read-only.
     * @param DateTime|null $value Value to set for the activatedDateTime property.
    */
    public function setActivatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('activatedDateTime', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time in ISO 8601 format and in UTC time when the relationship was created. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the customer property value. The display name and unique identifier of the customer of the relationship. This is configured either by the partner at the time the relationship is created or by the system after the customer approves the relationship. Cannot be changed by the customer.
     * @param DelegatedAdminRelationshipCustomerParticipant|null $value Value to set for the customer property.
    */
    public function setCustomer(?DelegatedAdminRelationshipCustomerParticipant $value): void {
        $this->getBackingStore()->set('customer', $value);
    }

    /**
     * Sets the displayName property value. The display name of the relationship used for ease of identification. Must be unique across all delegated admin relationships of the partner. This is set by the partner only when the relationship is in the created status and cannot be changed by the customer.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the duration property value. The duration of the relationship in ISO 8601 format. Must be a value between P1D and P2Y inclusive. This is set by the partner only when the relationship is in the created status and cannot be changed by the customer.
     * @param DateInterval|null $value Value to set for the duration property.
    */
    public function setDuration(?DateInterval $value): void {
        $this->getBackingStore()->set('duration', $value);
    }

    /**
     * Sets the endDateTime property value. The date and time in ISO 8601 format and in UTC time when the status of relationship changes to either terminated or expired. Calculated as endDateTime = activatedDateTime + duration. Read-only.
     * @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time in ISO 8601 format and in UTC time when the relationship was last modified. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the operations property value. The long running operations associated with the delegated admin relationship.
     * @param array<DelegatedAdminRelationshipOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

    /**
     * Sets the requests property value. The requests associated with the delegated admin relationship.
     * @param array<DelegatedAdminRelationshipRequest>|null $value Value to set for the requests property.
    */
    public function setRequests(?array $value): void {
        $this->getBackingStore()->set('requests', $value);
    }

    /**
     * Sets the status property value. The status of the relationship. Read Only. The possible values are: activating, active, approvalPending, approved, created, expired, expiring, terminated, terminating, terminationRequested, unknownFutureValue. Supports $orderBy.
     * @param DelegatedAdminRelationshipStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DelegatedAdminRelationshipStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
