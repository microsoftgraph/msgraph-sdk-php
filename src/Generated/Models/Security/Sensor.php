<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Sensor extends Entity implements Parsable 
{
    /**
     * Instantiates a new Sensor and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Sensor
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Sensor {
        return new Sensor();
    }

    /**
     * Gets the createdDateTime property value. The date and time when the sensor was generated. The Timestamp represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the deploymentStatus property value. The deploymentStatus property
     * @return DeploymentStatus|null
    */
    public function getDeploymentStatus(): ?DeploymentStatus {
        $val = $this->getBackingStore()->get('deploymentStatus');
        if (is_null($val) || $val instanceof DeploymentStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentStatus'");
    }

    /**
     * Gets the displayName property value. The display name of the sensor.
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
     * Gets the domainName property value. The fully qualified domain name of the sensor.
     * @return string|null
    */
    public function getDomainName(): ?string {
        $val = $this->getBackingStore()->get('domainName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deploymentStatus' => fn(ParseNode $n) => $o->setDeploymentStatus($n->getEnumValue(DeploymentStatus::class)),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'domainName' => fn(ParseNode $n) => $o->setDomainName($n->getStringValue()),
            'healthIssues' => fn(ParseNode $n) => $o->setHealthIssues($n->getCollectionOfObjectValues([HealthIssue::class, 'createFromDiscriminatorValue'])),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(SensorHealthStatus::class)),
            'openHealthIssuesCount' => fn(ParseNode $n) => $o->setOpenHealthIssuesCount($n->getIntegerValue()),
            'sensorType' => fn(ParseNode $n) => $o->setSensorType($n->getEnumValue(SensorType::class)),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([SensorSettings::class, 'createFromDiscriminatorValue'])),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the healthIssues property value. Represents potential issues within a customer's Microsoft Defender for Identity configuration that Microsoft Defender for Identity identified related to the sensor.
     * @return array<HealthIssue>|null
    */
    public function getHealthIssues(): ?array {
        $val = $this->getBackingStore()->get('healthIssues');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HealthIssue::class);
            /** @var array<HealthIssue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'healthIssues'");
    }

    /**
     * Gets the healthStatus property value. The healthStatus property
     * @return SensorHealthStatus|null
    */
    public function getHealthStatus(): ?SensorHealthStatus {
        $val = $this->getBackingStore()->get('healthStatus');
        if (is_null($val) || $val instanceof SensorHealthStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'healthStatus'");
    }

    /**
     * Gets the openHealthIssuesCount property value. This field displays the count of health issues related to this sensor.
     * @return int|null
    */
    public function getOpenHealthIssuesCount(): ?int {
        $val = $this->getBackingStore()->get('openHealthIssuesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'openHealthIssuesCount'");
    }

    /**
     * Gets the sensorType property value. The sensorType property
     * @return SensorType|null
    */
    public function getSensorType(): ?SensorType {
        $val = $this->getBackingStore()->get('sensorType');
        if (is_null($val) || $val instanceof SensorType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensorType'");
    }

    /**
     * Gets the settings property value. The settings property
     * @return SensorSettings|null
    */
    public function getSettings(): ?SensorSettings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof SensorSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the version property value. The version of the sensor.
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeEnumValue('deploymentStatus', $this->getDeploymentStatus());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('domainName', $this->getDomainName());
        $writer->writeCollectionOfObjectValues('healthIssues', $this->getHealthIssues());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeIntegerValue('openHealthIssuesCount', $this->getOpenHealthIssuesCount());
        $writer->writeEnumValue('sensorType', $this->getSensorType());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the createdDateTime property value. The date and time when the sensor was generated. The Timestamp represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deploymentStatus property value. The deploymentStatus property
     * @param DeploymentStatus|null $value Value to set for the deploymentStatus property.
    */
    public function setDeploymentStatus(?DeploymentStatus $value): void {
        $this->getBackingStore()->set('deploymentStatus', $value);
    }

    /**
     * Sets the displayName property value. The display name of the sensor.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the domainName property value. The fully qualified domain name of the sensor.
     * @param string|null $value Value to set for the domainName property.
    */
    public function setDomainName(?string $value): void {
        $this->getBackingStore()->set('domainName', $value);
    }

    /**
     * Sets the healthIssues property value. Represents potential issues within a customer's Microsoft Defender for Identity configuration that Microsoft Defender for Identity identified related to the sensor.
     * @param array<HealthIssue>|null $value Value to set for the healthIssues property.
    */
    public function setHealthIssues(?array $value): void {
        $this->getBackingStore()->set('healthIssues', $value);
    }

    /**
     * Sets the healthStatus property value. The healthStatus property
     * @param SensorHealthStatus|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?SensorHealthStatus $value): void {
        $this->getBackingStore()->set('healthStatus', $value);
    }

    /**
     * Sets the openHealthIssuesCount property value. This field displays the count of health issues related to this sensor.
     * @param int|null $value Value to set for the openHealthIssuesCount property.
    */
    public function setOpenHealthIssuesCount(?int $value): void {
        $this->getBackingStore()->set('openHealthIssuesCount', $value);
    }

    /**
     * Sets the sensorType property value. The sensorType property
     * @param SensorType|null $value Value to set for the sensorType property.
    */
    public function setSensorType(?SensorType $value): void {
        $this->getBackingStore()->set('sensorType', $value);
    }

    /**
     * Sets the settings property value. The settings property
     * @param SensorSettings|null $value Value to set for the settings property.
    */
    public function setSettings(?SensorSettings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the version property value. The version of the sensor.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
