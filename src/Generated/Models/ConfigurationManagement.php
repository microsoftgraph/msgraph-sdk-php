<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ConfigurationManagement extends Entity implements Parsable 
{
    /**
     * Instantiates a new ConfigurationManagement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfigurationManagement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConfigurationManagement {
        return new ConfigurationManagement();
    }

    /**
     * Gets the configurationDrifts property value. A container for configuration drift resources.
     * @return array<ConfigurationDrift>|null
    */
    public function getConfigurationDrifts(): ?array {
        $val = $this->getBackingStore()->get('configurationDrifts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConfigurationDrift::class);
            /** @var array<ConfigurationDrift>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationDrifts'");
    }

    /**
     * Gets the configurationMonitoringResults property value. A container for configuration monitoring results resources.
     * @return array<ConfigurationMonitoringResult>|null
    */
    public function getConfigurationMonitoringResults(): ?array {
        $val = $this->getBackingStore()->get('configurationMonitoringResults');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConfigurationMonitoringResult::class);
            /** @var array<ConfigurationMonitoringResult>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationMonitoringResults'");
    }

    /**
     * Gets the configurationMonitors property value. A container for configuration monitor resources.
     * @return array<ConfigurationMonitor>|null
    */
    public function getConfigurationMonitors(): ?array {
        $val = $this->getBackingStore()->get('configurationMonitors');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConfigurationMonitor::class);
            /** @var array<ConfigurationMonitor>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationMonitors'");
    }

    /**
     * Gets the configurationSnapshotJobs property value. A container for snapshot job resources.
     * @return array<ConfigurationSnapshotJob>|null
    */
    public function getConfigurationSnapshotJobs(): ?array {
        $val = $this->getBackingStore()->get('configurationSnapshotJobs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConfigurationSnapshotJob::class);
            /** @var array<ConfigurationSnapshotJob>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationSnapshotJobs'");
    }

    /**
     * Gets the configurationSnapshots property value. A container for configuration snapshot baselines.
     * @return array<ConfigurationBaseline>|null
    */
    public function getConfigurationSnapshots(): ?array {
        $val = $this->getBackingStore()->get('configurationSnapshots');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ConfigurationBaseline::class);
            /** @var array<ConfigurationBaseline>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationSnapshots'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configurationDrifts' => fn(ParseNode $n) => $o->setConfigurationDrifts($n->getCollectionOfObjectValues([ConfigurationDrift::class, 'createFromDiscriminatorValue'])),
            'configurationMonitoringResults' => fn(ParseNode $n) => $o->setConfigurationMonitoringResults($n->getCollectionOfObjectValues([ConfigurationMonitoringResult::class, 'createFromDiscriminatorValue'])),
            'configurationMonitors' => fn(ParseNode $n) => $o->setConfigurationMonitors($n->getCollectionOfObjectValues([ConfigurationMonitor::class, 'createFromDiscriminatorValue'])),
            'configurationSnapshotJobs' => fn(ParseNode $n) => $o->setConfigurationSnapshotJobs($n->getCollectionOfObjectValues([ConfigurationSnapshotJob::class, 'createFromDiscriminatorValue'])),
            'configurationSnapshots' => fn(ParseNode $n) => $o->setConfigurationSnapshots($n->getCollectionOfObjectValues([ConfigurationBaseline::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('configurationDrifts', $this->getConfigurationDrifts());
        $writer->writeCollectionOfObjectValues('configurationMonitoringResults', $this->getConfigurationMonitoringResults());
        $writer->writeCollectionOfObjectValues('configurationMonitors', $this->getConfigurationMonitors());
        $writer->writeCollectionOfObjectValues('configurationSnapshotJobs', $this->getConfigurationSnapshotJobs());
        $writer->writeCollectionOfObjectValues('configurationSnapshots', $this->getConfigurationSnapshots());
    }

    /**
     * Sets the configurationDrifts property value. A container for configuration drift resources.
     * @param array<ConfigurationDrift>|null $value Value to set for the configurationDrifts property.
    */
    public function setConfigurationDrifts(?array $value): void {
        $this->getBackingStore()->set('configurationDrifts', $value);
    }

    /**
     * Sets the configurationMonitoringResults property value. A container for configuration monitoring results resources.
     * @param array<ConfigurationMonitoringResult>|null $value Value to set for the configurationMonitoringResults property.
    */
    public function setConfigurationMonitoringResults(?array $value): void {
        $this->getBackingStore()->set('configurationMonitoringResults', $value);
    }

    /**
     * Sets the configurationMonitors property value. A container for configuration monitor resources.
     * @param array<ConfigurationMonitor>|null $value Value to set for the configurationMonitors property.
    */
    public function setConfigurationMonitors(?array $value): void {
        $this->getBackingStore()->set('configurationMonitors', $value);
    }

    /**
     * Sets the configurationSnapshotJobs property value. A container for snapshot job resources.
     * @param array<ConfigurationSnapshotJob>|null $value Value to set for the configurationSnapshotJobs property.
    */
    public function setConfigurationSnapshotJobs(?array $value): void {
        $this->getBackingStore()->set('configurationSnapshotJobs', $value);
    }

    /**
     * Sets the configurationSnapshots property value. A container for configuration snapshot baselines.
     * @param array<ConfigurationBaseline>|null $value Value to set for the configurationSnapshots property.
    */
    public function setConfigurationSnapshots(?array $value): void {
        $this->getBackingStore()->set('configurationSnapshots', $value);
    }

}
