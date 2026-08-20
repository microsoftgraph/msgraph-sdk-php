<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Represents an individual audit log record.
*/
class AuditLogRecord extends Entity implements Parsable 
{
    /**
     * Instantiates a new AuditLogRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuditLogRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuditLogRecord {
        return new AuditLogRecord();
    }

    /**
     * Gets the administrativeUnits property value. The collection of administrative units associated with the record.
     * @return array<string>|null
    */
    public function getAdministrativeUnits(): ?array {
        $val = $this->getBackingStore()->get('administrativeUnits');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'administrativeUnits'");
    }

    /**
     * Gets the auditData property value. The audit data associated with the record.
     * @return AuditData|null
    */
    public function getAuditData(): ?AuditData {
        $val = $this->getBackingStore()->get('auditData');
        if (is_null($val) || $val instanceof AuditData) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'auditData'");
    }

    /**
     * Gets the auditLogRecordType property value. The type of the audit log record.
     * @return AuditLogRecordType|null
    */
    public function getAuditLogRecordType(): ?AuditLogRecordType {
        $val = $this->getBackingStore()->get('auditLogRecordType');
        if (is_null($val) || $val instanceof AuditLogRecordType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'auditLogRecordType'");
    }

    /**
     * Gets the clientIp property value. The IP address of the client that performed the activity.
     * @return string|null
    */
    public function getClientIp(): ?string {
        $val = $this->getBackingStore()->get('clientIp');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientIp'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the activity was performed.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'administrativeUnits' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAdministrativeUnits($val);
            },
            'auditData' => fn(ParseNode $n) => $o->setAuditData($n->getObjectValue([AuditData::class, 'createFromDiscriminatorValue'])),
            'auditLogRecordType' => fn(ParseNode $n) => $o->setAuditLogRecordType($n->getEnumValue(AuditLogRecordType::class)),
            'clientIp' => fn(ParseNode $n) => $o->setClientIp($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'objectId' => fn(ParseNode $n) => $o->setObjectId($n->getStringValue()),
            'operation' => fn(ParseNode $n) => $o->setOperation($n->getStringValue()),
            'organizationId' => fn(ParseNode $n) => $o->setOrganizationId($n->getStringValue()),
            'service' => fn(ParseNode $n) => $o->setService($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
            'userType' => fn(ParseNode $n) => $o->setUserType($n->getEnumValue(AuditLogUserType::class)),
        ]);
    }

    /**
     * Gets the objectId property value. The identifier of the object that was affected by the activity.
     * @return string|null
    */
    public function getObjectId(): ?string {
        $val = $this->getBackingStore()->get('objectId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'objectId'");
    }

    /**
     * Gets the operation property value. The name of the activity that was performed.
     * @return string|null
    */
    public function getOperation(): ?string {
        $val = $this->getBackingStore()->get('operation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operation'");
    }

    /**
     * Gets the organizationId property value. The GUID of the organization's Microsoft 365 tenant.
     * @return string|null
    */
    public function getOrganizationId(): ?string {
        $val = $this->getBackingStore()->get('organizationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizationId'");
    }

    /**
     * Gets the service property value. The Microsoft 365 service where the activity occurred.
     * @return string|null
    */
    public function getService(): ?string {
        $val = $this->getBackingStore()->get('service');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'service'");
    }

    /**
     * Gets the userId property value. The identifier of the user, system account, service, or application that performed the activity.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Gets the userPrincipalName property value. The user principal name of the user who performed the activity.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Gets the userType property value. The type of user who performed the activity. Possible values are: regular, reserved, admin, dcAdmin, system, application, servicePrincipal, customPolicy, systemPolicy, partnerTechnician, guest, unknownFutureValue.
     * @return AuditLogUserType|null
    */
    public function getUserType(): ?AuditLogUserType {
        $val = $this->getBackingStore()->get('userType');
        if (is_null($val) || $val instanceof AuditLogUserType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('administrativeUnits', $this->getAdministrativeUnits());
        $writer->writeObjectValue('auditData', $this->getAuditData());
        $writer->writeEnumValue('auditLogRecordType', $this->getAuditLogRecordType());
        $writer->writeStringValue('clientIp', $this->getClientIp());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('objectId', $this->getObjectId());
        $writer->writeStringValue('operation', $this->getOperation());
        $writer->writeStringValue('organizationId', $this->getOrganizationId());
        $writer->writeStringValue('service', $this->getService());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
        $writer->writeEnumValue('userType', $this->getUserType());
    }

    /**
     * Sets the administrativeUnits property value. The collection of administrative units associated with the record.
     * @param array<string>|null $value Value to set for the administrativeUnits property.
    */
    public function setAdministrativeUnits(?array $value): void {
        $this->getBackingStore()->set('administrativeUnits', $value);
    }

    /**
     * Sets the auditData property value. The audit data associated with the record.
     * @param AuditData|null $value Value to set for the auditData property.
    */
    public function setAuditData(?AuditData $value): void {
        $this->getBackingStore()->set('auditData', $value);
    }

    /**
     * Sets the auditLogRecordType property value. The type of the audit log record.
     * @param AuditLogRecordType|null $value Value to set for the auditLogRecordType property.
    */
    public function setAuditLogRecordType(?AuditLogRecordType $value): void {
        $this->getBackingStore()->set('auditLogRecordType', $value);
    }

    /**
     * Sets the clientIp property value. The IP address of the client that performed the activity.
     * @param string|null $value Value to set for the clientIp property.
    */
    public function setClientIp(?string $value): void {
        $this->getBackingStore()->set('clientIp', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the activity was performed.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the objectId property value. The identifier of the object that was affected by the activity.
     * @param string|null $value Value to set for the objectId property.
    */
    public function setObjectId(?string $value): void {
        $this->getBackingStore()->set('objectId', $value);
    }

    /**
     * Sets the operation property value. The name of the activity that was performed.
     * @param string|null $value Value to set for the operation property.
    */
    public function setOperation(?string $value): void {
        $this->getBackingStore()->set('operation', $value);
    }

    /**
     * Sets the organizationId property value. The GUID of the organization's Microsoft 365 tenant.
     * @param string|null $value Value to set for the organizationId property.
    */
    public function setOrganizationId(?string $value): void {
        $this->getBackingStore()->set('organizationId', $value);
    }

    /**
     * Sets the service property value. The Microsoft 365 service where the activity occurred.
     * @param string|null $value Value to set for the service property.
    */
    public function setService(?string $value): void {
        $this->getBackingStore()->set('service', $value);
    }

    /**
     * Sets the userId property value. The identifier of the user, system account, service, or application that performed the activity.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userPrincipalName property value. The user principal name of the user who performed the activity.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

    /**
     * Sets the userType property value. The type of user who performed the activity. Possible values are: regular, reserved, admin, dcAdmin, system, application, servicePrincipal, customPolicy, systemPolicy, partnerTechnician, guest, unknownFutureValue.
     * @param AuditLogUserType|null $value Value to set for the userType property.
    */
    public function setUserType(?AuditLogUserType $value): void {
        $this->getBackingStore()->set('userType', $value);
    }

}
