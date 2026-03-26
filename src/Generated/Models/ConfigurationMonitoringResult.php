<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ConfigurationMonitoringResult extends Entity implements Parsable 
{
    /**
     * Instantiates a new ConfigurationMonitoringResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfigurationMonitoringResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConfigurationMonitoringResult {
        return new ConfigurationMonitoringResult();
    }

    /**
     * Gets the driftsCount property value. Number of drifts observed during a monitor run. Supports $filter (eq, ne, ge, le) and $orderby.
     * @return int|null
    */
    public function getDriftsCount(): ?int {
        $val = $this->getBackingStore()->get('driftsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driftsCount'");
    }

    /**
     * Gets the errorDetails property value. All the error details that prevent the monitor from running successfully. The error details are a contained entity. Returned only on $select.
     * @return array<ErrorDetail>|null
    */
    public function getErrorDetails(): ?array {
        $val = $this->getBackingStore()->get('errorDetails');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ErrorDetail::class);
            /** @var array<ErrorDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorDetails'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'driftsCount' => fn(ParseNode $n) => $o->setDriftsCount($n->getIntegerValue()),
            'errorDetails' => fn(ParseNode $n) => $o->setErrorDetails($n->getCollectionOfObjectValues([ErrorDetail::class, 'createFromDiscriminatorValue'])),
            'monitorId' => fn(ParseNode $n) => $o->setMonitorId($n->getStringValue()),
            'runCompletionDateTime' => fn(ParseNode $n) => $o->setRunCompletionDateTime($n->getDateTimeValue()),
            'runInitiationDateTime' => fn(ParseNode $n) => $o->setRunInitiationDateTime($n->getDateTimeValue()),
            'runStatus' => fn(ParseNode $n) => $o->setRunStatus($n->getEnumValue(MonitorRunStatus::class)),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the monitorId property value. Globally unique identifier (GUID) of the monitor. System-generated. Supports $filter (eq, ne).
     * @return string|null
    */
    public function getMonitorId(): ?string {
        $val = $this->getBackingStore()->get('monitorId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'monitorId'");
    }

    /**
     * Gets the runCompletionDateTime property value. Date and time at which the monitor run completed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, ge, le) and $orderby.
     * @return DateTime|null
    */
    public function getRunCompletionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('runCompletionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runCompletionDateTime'");
    }

    /**
     * Gets the runInitiationDateTime property value. Date and time at which the monitor run initiated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, ge, le) and $orderby.
     * @return DateTime|null
    */
    public function getRunInitiationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('runInitiationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runInitiationDateTime'");
    }

    /**
     * Gets the runStatus property value. The runStatus property
     * @return MonitorRunStatus|null
    */
    public function getRunStatus(): ?MonitorRunStatus {
        $val = $this->getBackingStore()->get('runStatus');
        if (is_null($val) || $val instanceof MonitorRunStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runStatus'");
    }

    /**
     * Gets the tenantId property value. Globally unique identifier (GUID) of the tenant for which the monitor runs. Fetched automatically by the system. Supports $filter (eq, ne).
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('runStatus', $this->getRunStatus());
    }

    /**
     * Sets the driftsCount property value. Number of drifts observed during a monitor run. Supports $filter (eq, ne, ge, le) and $orderby.
     * @param int|null $value Value to set for the driftsCount property.
    */
    public function setDriftsCount(?int $value): void {
        $this->getBackingStore()->set('driftsCount', $value);
    }

    /**
     * Sets the errorDetails property value. All the error details that prevent the monitor from running successfully. The error details are a contained entity. Returned only on $select.
     * @param array<ErrorDetail>|null $value Value to set for the errorDetails property.
    */
    public function setErrorDetails(?array $value): void {
        $this->getBackingStore()->set('errorDetails', $value);
    }

    /**
     * Sets the monitorId property value. Globally unique identifier (GUID) of the monitor. System-generated. Supports $filter (eq, ne).
     * @param string|null $value Value to set for the monitorId property.
    */
    public function setMonitorId(?string $value): void {
        $this->getBackingStore()->set('monitorId', $value);
    }

    /**
     * Sets the runCompletionDateTime property value. Date and time at which the monitor run completed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, ge, le) and $orderby.
     * @param DateTime|null $value Value to set for the runCompletionDateTime property.
    */
    public function setRunCompletionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('runCompletionDateTime', $value);
    }

    /**
     * Sets the runInitiationDateTime property value. Date and time at which the monitor run initiated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, ge, le) and $orderby.
     * @param DateTime|null $value Value to set for the runInitiationDateTime property.
    */
    public function setRunInitiationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('runInitiationDateTime', $value);
    }

    /**
     * Sets the runStatus property value. The runStatus property
     * @param MonitorRunStatus|null $value Value to set for the runStatus property.
    */
    public function setRunStatus(?MonitorRunStatus $value): void {
        $this->getBackingStore()->set('runStatus', $value);
    }

    /**
     * Sets the tenantId property value. Globally unique identifier (GUID) of the tenant for which the monitor runs. Fetched automatically by the system. Supports $filter (eq, ne).
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

}
