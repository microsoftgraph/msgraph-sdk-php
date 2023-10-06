<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessPackageAssignmentRequest extends Entity implements Parsable 
{
    /**
     * Instantiates a new accessPackageAssignmentRequest and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignmentRequest
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentRequest {
        return new AccessPackageAssignmentRequest();
    }

    /**
     * Gets the accessPackage property value. The access package associated with the accessPackageAssignmentRequest. An access package defines the collections of resource roles and the policies for how one or more users can get access to those resources. Read-only. Nullable.  Supports $expand.
     * @return AccessPackage|null
    */
    public function getAccessPackage(): ?AccessPackage {
        $val = $this->getBackingStore()->get('accessPackage');
        if (is_null($val) || $val instanceof AccessPackage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackage'");
    }

    /**
     * Gets the answers property value. Answers provided by the requestor to accessPackageQuestions asked of them at the time of request.
     * @return array<AccessPackageAnswer>|null
    */
    public function getAnswers(): ?array {
        $val = $this->getBackingStore()->get('answers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageAnswer::class);
            /** @var array<AccessPackageAnswer>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'answers'");
    }

    /**
     * Gets the assignment property value. For a requestType of userAdd or adminAdd, this is an access package assignment requested to be created.  For a requestType of userRemove, adminRemove or systemRemove, this has the id property of an existing assignment to be removed.   Supports $expand.
     * @return AccessPackageAssignment|null
    */
    public function getAssignment(): ?AccessPackageAssignment {
        $val = $this->getBackingStore()->get('assignment');
        if (is_null($val) || $val instanceof AccessPackageAssignment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignment'");
    }

    /**
     * Gets the completedDateTime property value. The date of the end of processing, either successful or failure, of a request. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCompletedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('completedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completedDateTime'");
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Supports $filter.
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
     * Gets the customExtensionCalloutInstances property value. Information about all the custom extension calls that were made during the access package assignment workflow.
     * @return array<CustomExtensionCalloutInstance>|null
    */
    public function getCustomExtensionCalloutInstances(): ?array {
        $val = $this->getBackingStore()->get('customExtensionCalloutInstances');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomExtensionCalloutInstance::class);
            /** @var array<CustomExtensionCalloutInstance>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customExtensionCalloutInstances'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackage' => fn(ParseNode $n) => $o->setAccessPackage($n->getObjectValue([AccessPackage::class, 'createFromDiscriminatorValue'])),
            'answers' => fn(ParseNode $n) => $o->setAnswers($n->getCollectionOfObjectValues([AccessPackageAnswer::class, 'createFromDiscriminatorValue'])),
            'assignment' => fn(ParseNode $n) => $o->setAssignment($n->getObjectValue([AccessPackageAssignment::class, 'createFromDiscriminatorValue'])),
            'completedDateTime' => fn(ParseNode $n) => $o->setCompletedDateTime($n->getDateTimeValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'customExtensionCalloutInstances' => fn(ParseNode $n) => $o->setCustomExtensionCalloutInstances($n->getCollectionOfObjectValues([CustomExtensionCalloutInstance::class, 'createFromDiscriminatorValue'])),
            'requestor' => fn(ParseNode $n) => $o->setRequestor($n->getObjectValue([AccessPackageSubject::class, 'createFromDiscriminatorValue'])),
            'requestType' => fn(ParseNode $n) => $o->setRequestType($n->getEnumValue(AccessPackageRequestType::class)),
            'schedule' => fn(ParseNode $n) => $o->setSchedule($n->getObjectValue([EntitlementManagementSchedule::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(AccessPackageRequestState::class)),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
        ]);
    }

    /**
     * Gets the requestor property value. The subject who requested or, if a direct assignment, was assigned. Read-only. Nullable. Supports $expand.
     * @return AccessPackageSubject|null
    */
    public function getRequestor(): ?AccessPackageSubject {
        $val = $this->getBackingStore()->get('requestor');
        if (is_null($val) || $val instanceof AccessPackageSubject) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestor'");
    }

    /**
     * Gets the requestType property value. The type of the request. The possible values are: notSpecified, userAdd, UserExtend, userUpdate, userRemove, adminAdd, adminUpdate, adminRemove, systemAdd, systemUpdate, systemRemove, onBehalfAdd (not supported), unknownFutureValue. A request from the user themselves would have requestType of userAdd, userUpdate or userRemove. This property can't be changed once set.
     * @return AccessPackageRequestType|null
    */
    public function getRequestType(): ?AccessPackageRequestType {
        $val = $this->getBackingStore()->get('requestType');
        if (is_null($val) || $val instanceof AccessPackageRequestType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestType'");
    }

    /**
     * Gets the schedule property value. The range of dates that access is to be assigned to the requestor. This property can't be changed once set.
     * @return EntitlementManagementSchedule|null
    */
    public function getSchedule(): ?EntitlementManagementSchedule {
        $val = $this->getBackingStore()->get('schedule');
        if (is_null($val) || $val instanceof EntitlementManagementSchedule) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'schedule'");
    }

    /**
     * Gets the state property value. The state of the request. The possible values are: submitted, pendingApproval, delivering, delivered, deliveryFailed, denied, scheduled, canceled, partiallyDelivered, unknownFutureValue. Read-only. Supports $filter (eq).
     * @return AccessPackageRequestState|null
    */
    public function getState(): ?AccessPackageRequestState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof AccessPackageRequestState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the status property value. More information on the request processing status. Read-only.
     * @return string|null
    */
    public function getStatus(): ?string {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || is_string($val)) {
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
        $writer->writeObjectValue('accessPackage', $this->getAccessPackage());
        $writer->writeCollectionOfObjectValues('answers', $this->getAnswers());
        $writer->writeObjectValue('assignment', $this->getAssignment());
        $writer->writeDateTimeValue('completedDateTime', $this->getCompletedDateTime());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('customExtensionCalloutInstances', $this->getCustomExtensionCalloutInstances());
        $writer->writeObjectValue('requestor', $this->getRequestor());
        $writer->writeEnumValue('requestType', $this->getRequestType());
        $writer->writeObjectValue('schedule', $this->getSchedule());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('status', $this->getStatus());
    }

    /**
     * Sets the accessPackage property value. The access package associated with the accessPackageAssignmentRequest. An access package defines the collections of resource roles and the policies for how one or more users can get access to those resources. Read-only. Nullable.  Supports $expand.
     * @param AccessPackage|null $value Value to set for the accessPackage property.
    */
    public function setAccessPackage(?AccessPackage $value): void {
        $this->getBackingStore()->set('accessPackage', $value);
    }

    /**
     * Sets the answers property value. Answers provided by the requestor to accessPackageQuestions asked of them at the time of request.
     * @param array<AccessPackageAnswer>|null $value Value to set for the answers property.
    */
    public function setAnswers(?array $value): void {
        $this->getBackingStore()->set('answers', $value);
    }

    /**
     * Sets the assignment property value. For a requestType of userAdd or adminAdd, this is an access package assignment requested to be created.  For a requestType of userRemove, adminRemove or systemRemove, this has the id property of an existing assignment to be removed.   Supports $expand.
     * @param AccessPackageAssignment|null $value Value to set for the assignment property.
    */
    public function setAssignment(?AccessPackageAssignment $value): void {
        $this->getBackingStore()->set('assignment', $value);
    }

    /**
     * Sets the completedDateTime property value. The date of the end of processing, either successful or failure, of a request. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the completedDateTime property.
    */
    public function setCompletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completedDateTime', $value);
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. Supports $filter.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the customExtensionCalloutInstances property value. Information about all the custom extension calls that were made during the access package assignment workflow.
     * @param array<CustomExtensionCalloutInstance>|null $value Value to set for the customExtensionCalloutInstances property.
    */
    public function setCustomExtensionCalloutInstances(?array $value): void {
        $this->getBackingStore()->set('customExtensionCalloutInstances', $value);
    }

    /**
     * Sets the requestor property value. The subject who requested or, if a direct assignment, was assigned. Read-only. Nullable. Supports $expand.
     * @param AccessPackageSubject|null $value Value to set for the requestor property.
    */
    public function setRequestor(?AccessPackageSubject $value): void {
        $this->getBackingStore()->set('requestor', $value);
    }

    /**
     * Sets the requestType property value. The type of the request. The possible values are: notSpecified, userAdd, UserExtend, userUpdate, userRemove, adminAdd, adminUpdate, adminRemove, systemAdd, systemUpdate, systemRemove, onBehalfAdd (not supported), unknownFutureValue. A request from the user themselves would have requestType of userAdd, userUpdate or userRemove. This property can't be changed once set.
     * @param AccessPackageRequestType|null $value Value to set for the requestType property.
    */
    public function setRequestType(?AccessPackageRequestType $value): void {
        $this->getBackingStore()->set('requestType', $value);
    }

    /**
     * Sets the schedule property value. The range of dates that access is to be assigned to the requestor. This property can't be changed once set.
     * @param EntitlementManagementSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?EntitlementManagementSchedule $value): void {
        $this->getBackingStore()->set('schedule', $value);
    }

    /**
     * Sets the state property value. The state of the request. The possible values are: submitted, pendingApproval, delivering, delivered, deliveryFailed, denied, scheduled, canceled, partiallyDelivered, unknownFutureValue. Read-only. Supports $filter (eq).
     * @param AccessPackageRequestState|null $value Value to set for the state property.
    */
    public function setState(?AccessPackageRequestState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the status property value. More information on the request processing status. Read-only.
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
