<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DirectoryAudit extends Entity implements Parsable 
{
    /**
     * Instantiates a new directoryAudit and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DirectoryAudit
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DirectoryAudit {
        return new DirectoryAudit();
    }

    /**
     * Gets the activityDateTime property value. Indicates the date and time the activity was performed. The Timestamp type is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getActivityDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('activityDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityDateTime'");
    }

    /**
     * Gets the activityDisplayName property value. Indicates the activity name or the operation name (examples: 'Create User' and 'Add member to group'). For a list of activities logged, refer to Azure AD audit log categories and activities.
     * @return string|null
    */
    public function getActivityDisplayName(): ?string {
        $val = $this->getBackingStore()->get('activityDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activityDisplayName'");
    }

    /**
     * Gets the additionalDetails property value. Indicates additional details on the activity.
     * @return array<KeyValue>|null
    */
    public function getAdditionalDetails(): ?array {
        $val = $this->getBackingStore()->get('additionalDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValue::class);
            /** @var array<KeyValue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalDetails'");
    }

    /**
     * Gets the category property value. Indicates which resource category that's targeted by the activity. For example: UserManagement, GroupManagement, ApplicationManagement, RoleManagement. For a list of categories for activities logged, refer to Azure AD audit log categories and activities.
     * @return string|null
    */
    public function getCategory(): ?string {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the correlationId property value. Indicates a unique ID that helps correlate activities that span across various services. Can be used to trace logs across services.
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        $val = $this->getBackingStore()->get('correlationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'correlationId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activityDateTime' => fn(ParseNode $n) => $o->setActivityDateTime($n->getDateTimeValue()),
            'activityDisplayName' => fn(ParseNode $n) => $o->setActivityDisplayName($n->getStringValue()),
            'additionalDetails' => fn(ParseNode $n) => $o->setAdditionalDetails($n->getCollectionOfObjectValues([KeyValue::class, 'createFromDiscriminatorValue'])),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getStringValue()),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'initiatedBy' => fn(ParseNode $n) => $o->setInitiatedBy($n->getObjectValue([AuditActivityInitiator::class, 'createFromDiscriminatorValue'])),
            'loggedByService' => fn(ParseNode $n) => $o->setLoggedByService($n->getStringValue()),
            'operationType' => fn(ParseNode $n) => $o->setOperationType($n->getStringValue()),
            'result' => fn(ParseNode $n) => $o->setResult($n->getEnumValue(OperationResult::class)),
            'resultReason' => fn(ParseNode $n) => $o->setResultReason($n->getStringValue()),
            'targetResources' => fn(ParseNode $n) => $o->setTargetResources($n->getCollectionOfObjectValues([TargetResource::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the initiatedBy property value. The initiatedBy property
     * @return AuditActivityInitiator|null
    */
    public function getInitiatedBy(): ?AuditActivityInitiator {
        $val = $this->getBackingStore()->get('initiatedBy');
        if (is_null($val) || $val instanceof AuditActivityInitiator) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initiatedBy'");
    }

    /**
     * Gets the loggedByService property value. Indicates information on which service initiated the activity (For example: Self-service Password Management, Core Directory, B2C, Invited Users, Microsoft Identity Manager, Privileged Identity Management.
     * @return string|null
    */
    public function getLoggedByService(): ?string {
        $val = $this->getBackingStore()->get('loggedByService');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'loggedByService'");
    }

    /**
     * Gets the operationType property value. Indicates the type of operation that was performed. The possible values include but are not limited to the following: Add, Assign, Update, Unassign, and Delete.
     * @return string|null
    */
    public function getOperationType(): ?string {
        $val = $this->getBackingStore()->get('operationType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operationType'");
    }

    /**
     * Gets the result property value. Indicates the result of the activity. Possible values are: success, failure, timeout, unknownFutureValue.
     * @return OperationResult|null
    */
    public function getResult(): ?OperationResult {
        $val = $this->getBackingStore()->get('result');
        if (is_null($val) || $val instanceof OperationResult) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'result'");
    }

    /**
     * Gets the resultReason property value. Indicates the reason for failure if the result is failure or timeout.
     * @return string|null
    */
    public function getResultReason(): ?string {
        $val = $this->getBackingStore()->get('resultReason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resultReason'");
    }

    /**
     * Gets the targetResources property value. Indicates information on which resource was changed due to the activity. Target Resource Type can be User, Device, Directory, App, Role, Group, Policy or Other.
     * @return array<TargetResource>|null
    */
    public function getTargetResources(): ?array {
        $val = $this->getBackingStore()->get('targetResources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TargetResource::class);
            /** @var array<TargetResource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetResources'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('activityDateTime', $this->getActivityDateTime());
        $writer->writeStringValue('activityDisplayName', $this->getActivityDisplayName());
        $writer->writeCollectionOfObjectValues('additionalDetails', $this->getAdditionalDetails());
        $writer->writeStringValue('category', $this->getCategory());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeObjectValue('initiatedBy', $this->getInitiatedBy());
        $writer->writeStringValue('loggedByService', $this->getLoggedByService());
        $writer->writeStringValue('operationType', $this->getOperationType());
        $writer->writeEnumValue('result', $this->getResult());
        $writer->writeStringValue('resultReason', $this->getResultReason());
        $writer->writeCollectionOfObjectValues('targetResources', $this->getTargetResources());
    }

    /**
     * Sets the activityDateTime property value. Indicates the date and time the activity was performed. The Timestamp type is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the activityDateTime property.
    */
    public function setActivityDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('activityDateTime', $value);
    }

    /**
     * Sets the activityDisplayName property value. Indicates the activity name or the operation name (examples: 'Create User' and 'Add member to group'). For a list of activities logged, refer to Azure AD audit log categories and activities.
     * @param string|null $value Value to set for the activityDisplayName property.
    */
    public function setActivityDisplayName(?string $value): void {
        $this->getBackingStore()->set('activityDisplayName', $value);
    }

    /**
     * Sets the additionalDetails property value. Indicates additional details on the activity.
     * @param array<KeyValue>|null $value Value to set for the additionalDetails property.
    */
    public function setAdditionalDetails(?array $value): void {
        $this->getBackingStore()->set('additionalDetails', $value);
    }

    /**
     * Sets the category property value. Indicates which resource category that's targeted by the activity. For example: UserManagement, GroupManagement, ApplicationManagement, RoleManagement. For a list of categories for activities logged, refer to Azure AD audit log categories and activities.
     * @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the correlationId property value. Indicates a unique ID that helps correlate activities that span across various services. Can be used to trace logs across services.
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->getBackingStore()->set('correlationId', $value);
    }

    /**
     * Sets the initiatedBy property value. The initiatedBy property
     * @param AuditActivityInitiator|null $value Value to set for the initiatedBy property.
    */
    public function setInitiatedBy(?AuditActivityInitiator $value): void {
        $this->getBackingStore()->set('initiatedBy', $value);
    }

    /**
     * Sets the loggedByService property value. Indicates information on which service initiated the activity (For example: Self-service Password Management, Core Directory, B2C, Invited Users, Microsoft Identity Manager, Privileged Identity Management.
     * @param string|null $value Value to set for the loggedByService property.
    */
    public function setLoggedByService(?string $value): void {
        $this->getBackingStore()->set('loggedByService', $value);
    }

    /**
     * Sets the operationType property value. Indicates the type of operation that was performed. The possible values include but are not limited to the following: Add, Assign, Update, Unassign, and Delete.
     * @param string|null $value Value to set for the operationType property.
    */
    public function setOperationType(?string $value): void {
        $this->getBackingStore()->set('operationType', $value);
    }

    /**
     * Sets the result property value. Indicates the result of the activity. Possible values are: success, failure, timeout, unknownFutureValue.
     * @param OperationResult|null $value Value to set for the result property.
    */
    public function setResult(?OperationResult $value): void {
        $this->getBackingStore()->set('result', $value);
    }

    /**
     * Sets the resultReason property value. Indicates the reason for failure if the result is failure or timeout.
     * @param string|null $value Value to set for the resultReason property.
    */
    public function setResultReason(?string $value): void {
        $this->getBackingStore()->set('resultReason', $value);
    }

    /**
     * Sets the targetResources property value. Indicates information on which resource was changed due to the activity. Target Resource Type can be User, Device, Directory, App, Role, Group, Policy or Other.
     * @param array<TargetResource>|null $value Value to set for the targetResources property.
    */
    public function setTargetResources(?array $value): void {
        $this->getBackingStore()->set('targetResources', $value);
    }

}
