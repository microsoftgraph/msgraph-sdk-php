<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CrossTenantMigrationJob extends Entity implements Parsable 
{
    /**
     * Instantiates a new CrossTenantMigrationJob and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CrossTenantMigrationJob
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CrossTenantMigrationJob {
        return new CrossTenantMigrationJob();
    }

    /**
     * Gets the completeAfterDateTime property value. Date and time after which the migration should be performed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2024, is 2024-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCompleteAfterDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('completeAfterDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'completeAfterDateTime'");
    }

    /**
     * Gets the createdBy property value. User principal name (UPN) of the user who created the job. Read-only.
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. When the job was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2024, is 2024-01-01T00:00:00Z. Read-only.
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
     * Gets the displayName property value. Display name of the job. Must be unique per tenant.
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
     * Gets the exchangeSettings property value. Settings to use for migration of Exchange workload. Nullable.
     * @return ExchangeOnlineCrossTenantMigrationSettings|null
    */
    public function getExchangeSettings(): ?ExchangeOnlineCrossTenantMigrationSettings {
        $val = $this->getBackingStore()->get('exchangeSettings');
        if (is_null($val) || $val instanceof ExchangeOnlineCrossTenantMigrationSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exchangeSettings'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'completeAfterDateTime' => fn(ParseNode $n) => $o->setCompleteAfterDateTime($n->getDateTimeValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'exchangeSettings' => fn(ParseNode $n) => $o->setExchangeSettings($n->getObjectValue([ExchangeOnlineCrossTenantMigrationSettings::class, 'createFromDiscriminatorValue'])),
            'jobType' => fn(ParseNode $n) => $o->setJobType($n->getEnumValue(CrossTenantMigrationJobType::class)),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            'resources' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setResources($val);
            },
            'resourceType' => fn(ParseNode $n) => $o->setResourceType($n->getStringValue()),
            'sourceTenantId' => fn(ParseNode $n) => $o->setSourceTenantId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CrossTenantMigrationJobStatus::class)),
            'targetTenantId' => fn(ParseNode $n) => $o->setTargetTenantId($n->getStringValue()),
            'users' => fn(ParseNode $n) => $o->setUsers($n->getCollectionOfObjectValues([CrossTenantMigrationTask::class, 'createFromDiscriminatorValue'])),
            'workloads' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setWorkloads($val);
            },
        ]);
    }

    /**
     * Gets the jobType property value. The jobType property
     * @return CrossTenantMigrationJobType|null
    */
    public function getJobType(): ?CrossTenantMigrationJobType {
        $val = $this->getBackingStore()->get('jobType');
        if (is_null($val) || $val instanceof CrossTenantMigrationJobType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'jobType'");
    }

    /**
     * Gets the lastUpdatedDateTime property value. When this migration job was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2024, is 2024-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUpdatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUpdatedDateTime'");
    }

    /**
     * Gets the message property value. Status message of the migration job. Nullable. Read-only.
     * @return string|null
    */
    public function getMessage(): ?string {
        $val = $this->getBackingStore()->get('message');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'message'");
    }

    /**
     * Gets the resources property value. IDs (GUID) of the resources that are migrated with the migration job.
     * @return array<string>|null
    */
    public function getResources(): ?array {
        $val = $this->getBackingStore()->get('resources');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resources'");
    }

    /**
     * Gets the resourceType property value. Type of resource being migrated. Only Users is currently supported.
     * @return string|null
    */
    public function getResourceType(): ?string {
        $val = $this->getBackingStore()->get('resourceType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceType'");
    }

    /**
     * Gets the sourceTenantId property value. ID (GUID) of the source tenant for the content migration.
     * @return string|null
    */
    public function getSourceTenantId(): ?string {
        $val = $this->getBackingStore()->get('sourceTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceTenantId'");
    }

    /**
     * Gets the status property value. The status property
     * @return CrossTenantMigrationJobStatus|null
    */
    public function getStatus(): ?CrossTenantMigrationJobStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof CrossTenantMigrationJobStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the targetTenantId property value. ID of the target tenant for the content migration. Read-only.
     * @return string|null
    */
    public function getTargetTenantId(): ?string {
        $val = $this->getBackingStore()->get('targetTenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetTenantId'");
    }

    /**
     * Gets the users property value. Details and status of the users migrated in this migration job.
     * @return array<CrossTenantMigrationTask>|null
    */
    public function getUsers(): ?array {
        $val = $this->getBackingStore()->get('users');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CrossTenantMigrationTask::class);
            /** @var array<CrossTenantMigrationTask>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'users'");
    }

    /**
     * Gets the workloads property value. Workloads to migrate. Supported workloads are Teams, Exchange, and ODSP (OneDrive/SharePoint).
     * @return array<string>|null
    */
    public function getWorkloads(): ?array {
        $val = $this->getBackingStore()->get('workloads');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workloads'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('completeAfterDateTime', $this->getCompleteAfterDateTime());
        $writer->writeStringValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('exchangeSettings', $this->getExchangeSettings());
        $writer->writeEnumValue('jobType', $this->getJobType());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeCollectionOfPrimitiveValues('resources', $this->getResources());
        $writer->writeStringValue('resourceType', $this->getResourceType());
        $writer->writeStringValue('sourceTenantId', $this->getSourceTenantId());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('targetTenantId', $this->getTargetTenantId());
        $writer->writeCollectionOfObjectValues('users', $this->getUsers());
        $writer->writeCollectionOfPrimitiveValues('workloads', $this->getWorkloads());
    }

    /**
     * Sets the completeAfterDateTime property value. Date and time after which the migration should be performed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2024, is 2024-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the completeAfterDateTime property.
    */
    public function setCompleteAfterDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('completeAfterDateTime', $value);
    }

    /**
     * Sets the createdBy property value. User principal name (UPN) of the user who created the job. Read-only.
     * @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. When the job was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2024, is 2024-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. Display name of the job. Must be unique per tenant.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the exchangeSettings property value. Settings to use for migration of Exchange workload. Nullable.
     * @param ExchangeOnlineCrossTenantMigrationSettings|null $value Value to set for the exchangeSettings property.
    */
    public function setExchangeSettings(?ExchangeOnlineCrossTenantMigrationSettings $value): void {
        $this->getBackingStore()->set('exchangeSettings', $value);
    }

    /**
     * Sets the jobType property value. The jobType property
     * @param CrossTenantMigrationJobType|null $value Value to set for the jobType property.
    */
    public function setJobType(?CrossTenantMigrationJobType $value): void {
        $this->getBackingStore()->set('jobType', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. When this migration job was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2024, is 2024-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the message property value. Status message of the migration job. Nullable. Read-only.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->getBackingStore()->set('message', $value);
    }

    /**
     * Sets the resources property value. IDs (GUID) of the resources that are migrated with the migration job.
     * @param array<string>|null $value Value to set for the resources property.
    */
    public function setResources(?array $value): void {
        $this->getBackingStore()->set('resources', $value);
    }

    /**
     * Sets the resourceType property value. Type of resource being migrated. Only Users is currently supported.
     * @param string|null $value Value to set for the resourceType property.
    */
    public function setResourceType(?string $value): void {
        $this->getBackingStore()->set('resourceType', $value);
    }

    /**
     * Sets the sourceTenantId property value. ID (GUID) of the source tenant for the content migration.
     * @param string|null $value Value to set for the sourceTenantId property.
    */
    public function setSourceTenantId(?string $value): void {
        $this->getBackingStore()->set('sourceTenantId', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param CrossTenantMigrationJobStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CrossTenantMigrationJobStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the targetTenantId property value. ID of the target tenant for the content migration. Read-only.
     * @param string|null $value Value to set for the targetTenantId property.
    */
    public function setTargetTenantId(?string $value): void {
        $this->getBackingStore()->set('targetTenantId', $value);
    }

    /**
     * Sets the users property value. Details and status of the users migrated in this migration job.
     * @param array<CrossTenantMigrationTask>|null $value Value to set for the users property.
    */
    public function setUsers(?array $value): void {
        $this->getBackingStore()->set('users', $value);
    }

    /**
     * Sets the workloads property value. Workloads to migrate. Supported workloads are Teams, Exchange, and ODSP (OneDrive/SharePoint).
     * @param array<string>|null $value Value to set for the workloads property.
    */
    public function setWorkloads(?array $value): void {
        $this->getBackingStore()->set('workloads', $value);
    }

}
