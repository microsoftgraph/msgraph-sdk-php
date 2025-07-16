<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics hardware readiness entity contains account level information about hardware blockers for windows upgrade.
*/
class UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric {
        return new UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'osCheckFailedPercentage' => fn(ParseNode $n) => $o->setOsCheckFailedPercentage($n->getFloatValue()),
            'processor64BitCheckFailedPercentage' => fn(ParseNode $n) => $o->setProcessor64BitCheckFailedPercentage($n->getFloatValue()),
            'processorCoreCountCheckFailedPercentage' => fn(ParseNode $n) => $o->setProcessorCoreCountCheckFailedPercentage($n->getFloatValue()),
            'processorFamilyCheckFailedPercentage' => fn(ParseNode $n) => $o->setProcessorFamilyCheckFailedPercentage($n->getFloatValue()),
            'processorSpeedCheckFailedPercentage' => fn(ParseNode $n) => $o->setProcessorSpeedCheckFailedPercentage($n->getFloatValue()),
            'ramCheckFailedPercentage' => fn(ParseNode $n) => $o->setRamCheckFailedPercentage($n->getFloatValue()),
            'secureBootCheckFailedPercentage' => fn(ParseNode $n) => $o->setSecureBootCheckFailedPercentage($n->getFloatValue()),
            'storageCheckFailedPercentage' => fn(ParseNode $n) => $o->setStorageCheckFailedPercentage($n->getFloatValue()),
            'totalDeviceCount' => fn(ParseNode $n) => $o->setTotalDeviceCount($n->getIntegerValue()),
            'tpmCheckFailedPercentage' => fn(ParseNode $n) => $o->setTpmCheckFailedPercentage($n->getFloatValue()),
            'upgradeEligibleDeviceCount' => fn(ParseNode $n) => $o->setUpgradeEligibleDeviceCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the osCheckFailedPercentage property value. The percentage of devices for which OS check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getOsCheckFailedPercentage(): ?float {
        $val = $this->getBackingStore()->get('osCheckFailedPercentage');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osCheckFailedPercentage'");
    }

    /**
     * Gets the processor64BitCheckFailedPercentage property value. The percentage of devices for which processor hardware 64-bit architecture check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getProcessor64BitCheckFailedPercentage(): ?float {
        $val = $this->getBackingStore()->get('processor64BitCheckFailedPercentage');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processor64BitCheckFailedPercentage'");
    }

    /**
     * Gets the processorCoreCountCheckFailedPercentage property value. The percentage of devices for which processor hardware core count check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getProcessorCoreCountCheckFailedPercentage(): ?float {
        $val = $this->getBackingStore()->get('processorCoreCountCheckFailedPercentage');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processorCoreCountCheckFailedPercentage'");
    }

    /**
     * Gets the processorFamilyCheckFailedPercentage property value. The percentage of devices for which processor hardware family check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getProcessorFamilyCheckFailedPercentage(): ?float {
        $val = $this->getBackingStore()->get('processorFamilyCheckFailedPercentage');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processorFamilyCheckFailedPercentage'");
    }

    /**
     * Gets the processorSpeedCheckFailedPercentage property value. The percentage of devices for which processor hardware speed check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getProcessorSpeedCheckFailedPercentage(): ?float {
        $val = $this->getBackingStore()->get('processorSpeedCheckFailedPercentage');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processorSpeedCheckFailedPercentage'");
    }

    /**
     * Gets the ramCheckFailedPercentage property value. The percentage of devices for which RAM hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getRamCheckFailedPercentage(): ?float {
        $val = $this->getBackingStore()->get('ramCheckFailedPercentage');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ramCheckFailedPercentage'");
    }

    /**
     * Gets the secureBootCheckFailedPercentage property value. The percentage of devices for which secure boot hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getSecureBootCheckFailedPercentage(): ?float {
        $val = $this->getBackingStore()->get('secureBootCheckFailedPercentage');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'secureBootCheckFailedPercentage'");
    }

    /**
     * Gets the storageCheckFailedPercentage property value. The percentage of devices for which storage hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getStorageCheckFailedPercentage(): ?float {
        $val = $this->getBackingStore()->get('storageCheckFailedPercentage');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageCheckFailedPercentage'");
    }

    /**
     * Gets the totalDeviceCount property value. The count of total devices in an organization. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getTotalDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('totalDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalDeviceCount'");
    }

    /**
     * Gets the tpmCheckFailedPercentage property value. The percentage of devices for which Trusted Platform Module (TPM) hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getTpmCheckFailedPercentage(): ?float {
        $val = $this->getBackingStore()->get('tpmCheckFailedPercentage');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tpmCheckFailedPercentage'");
    }

    /**
     * Gets the upgradeEligibleDeviceCount property value. The count of devices in an organization eligible for windows upgrade. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getUpgradeEligibleDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('upgradeEligibleDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'upgradeEligibleDeviceCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeFloatValue('osCheckFailedPercentage', $this->getOsCheckFailedPercentage());
        $writer->writeFloatValue('processor64BitCheckFailedPercentage', $this->getProcessor64BitCheckFailedPercentage());
        $writer->writeFloatValue('processorCoreCountCheckFailedPercentage', $this->getProcessorCoreCountCheckFailedPercentage());
        $writer->writeFloatValue('processorFamilyCheckFailedPercentage', $this->getProcessorFamilyCheckFailedPercentage());
        $writer->writeFloatValue('processorSpeedCheckFailedPercentage', $this->getProcessorSpeedCheckFailedPercentage());
        $writer->writeFloatValue('ramCheckFailedPercentage', $this->getRamCheckFailedPercentage());
        $writer->writeFloatValue('secureBootCheckFailedPercentage', $this->getSecureBootCheckFailedPercentage());
        $writer->writeFloatValue('storageCheckFailedPercentage', $this->getStorageCheckFailedPercentage());
        $writer->writeIntegerValue('totalDeviceCount', $this->getTotalDeviceCount());
        $writer->writeFloatValue('tpmCheckFailedPercentage', $this->getTpmCheckFailedPercentage());
        $writer->writeIntegerValue('upgradeEligibleDeviceCount', $this->getUpgradeEligibleDeviceCount());
    }

    /**
     * Sets the osCheckFailedPercentage property value. The percentage of devices for which OS check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the osCheckFailedPercentage property.
    */
    public function setOsCheckFailedPercentage(?float $value): void {
        $this->getBackingStore()->set('osCheckFailedPercentage', $value);
    }

    /**
     * Sets the processor64BitCheckFailedPercentage property value. The percentage of devices for which processor hardware 64-bit architecture check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the processor64BitCheckFailedPercentage property.
    */
    public function setProcessor64BitCheckFailedPercentage(?float $value): void {
        $this->getBackingStore()->set('processor64BitCheckFailedPercentage', $value);
    }

    /**
     * Sets the processorCoreCountCheckFailedPercentage property value. The percentage of devices for which processor hardware core count check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the processorCoreCountCheckFailedPercentage property.
    */
    public function setProcessorCoreCountCheckFailedPercentage(?float $value): void {
        $this->getBackingStore()->set('processorCoreCountCheckFailedPercentage', $value);
    }

    /**
     * Sets the processorFamilyCheckFailedPercentage property value. The percentage of devices for which processor hardware family check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the processorFamilyCheckFailedPercentage property.
    */
    public function setProcessorFamilyCheckFailedPercentage(?float $value): void {
        $this->getBackingStore()->set('processorFamilyCheckFailedPercentage', $value);
    }

    /**
     * Sets the processorSpeedCheckFailedPercentage property value. The percentage of devices for which processor hardware speed check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the processorSpeedCheckFailedPercentage property.
    */
    public function setProcessorSpeedCheckFailedPercentage(?float $value): void {
        $this->getBackingStore()->set('processorSpeedCheckFailedPercentage', $value);
    }

    /**
     * Sets the ramCheckFailedPercentage property value. The percentage of devices for which RAM hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the ramCheckFailedPercentage property.
    */
    public function setRamCheckFailedPercentage(?float $value): void {
        $this->getBackingStore()->set('ramCheckFailedPercentage', $value);
    }

    /**
     * Sets the secureBootCheckFailedPercentage property value. The percentage of devices for which secure boot hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the secureBootCheckFailedPercentage property.
    */
    public function setSecureBootCheckFailedPercentage(?float $value): void {
        $this->getBackingStore()->set('secureBootCheckFailedPercentage', $value);
    }

    /**
     * Sets the storageCheckFailedPercentage property value. The percentage of devices for which storage hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the storageCheckFailedPercentage property.
    */
    public function setStorageCheckFailedPercentage(?float $value): void {
        $this->getBackingStore()->set('storageCheckFailedPercentage', $value);
    }

    /**
     * Sets the totalDeviceCount property value. The count of total devices in an organization. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the totalDeviceCount property.
    */
    public function setTotalDeviceCount(?int $value): void {
        $this->getBackingStore()->set('totalDeviceCount', $value);
    }

    /**
     * Sets the tpmCheckFailedPercentage property value. The percentage of devices for which Trusted Platform Module (TPM) hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the tpmCheckFailedPercentage property.
    */
    public function setTpmCheckFailedPercentage(?float $value): void {
        $this->getBackingStore()->set('tpmCheckFailedPercentage', $value);
    }

    /**
     * Sets the upgradeEligibleDeviceCount property value. The count of devices in an organization eligible for windows upgrade. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the upgradeEligibleDeviceCount property.
    */
    public function setUpgradeEligibleDeviceCount(?int $value): void {
        $this->getBackingStore()->set('upgradeEligibleDeviceCount', $value);
    }

}
