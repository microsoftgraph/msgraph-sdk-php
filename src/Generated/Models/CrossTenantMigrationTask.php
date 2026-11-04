<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CrossTenantMigrationTask extends Entity implements Parsable 
{
    /**
     * Instantiates a new CrossTenantMigrationTask and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CrossTenantMigrationTask
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CrossTenantMigrationTask {
        return new CrossTenantMigrationTask();
    }

    /**
     * Gets the currentStatus property value. Most recent status of this migration task.
     * @return array<CrossTenantMigrationServiceStatusDetails>|null
    */
    public function getCurrentStatus(): ?array {
        $val = $this->getBackingStore()->get('currentStatus');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CrossTenantMigrationServiceStatusDetails::class);
            /** @var array<CrossTenantMigrationServiceStatusDetails>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'currentStatus'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'currentStatus' => fn(ParseNode $n) => $o->setCurrentStatus($n->getCollectionOfObjectValues([CrossTenantMigrationServiceStatusDetails::class, 'createFromDiscriminatorValue'])),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'taskType' => fn(ParseNode $n) => $o->setTaskType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastUpdatedDateTime property value. Date and time when the task was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2024, is 2024-01-01T00:00:00Z.
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
     * Gets the taskType property value. Type of migration task. Currently, only Users is supported.
     * @return string|null
    */
    public function getTaskType(): ?string {
        $val = $this->getBackingStore()->get('taskType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'taskType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('currentStatus', $this->getCurrentStatus());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeStringValue('taskType', $this->getTaskType());
    }

    /**
     * Sets the currentStatus property value. Most recent status of this migration task.
     * @param array<CrossTenantMigrationServiceStatusDetails>|null $value Value to set for the currentStatus property.
    */
    public function setCurrentStatus(?array $value): void {
        $this->getBackingStore()->set('currentStatus', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. Date and time when the task was last updated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2024, is 2024-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the taskType property value. Type of migration task. Currently, only Users is supported.
     * @param string|null $value Value to set for the taskType property.
    */
    public function setTaskType(?string $value): void {
        $this->getBackingStore()->set('taskType', $value);
    }

}
