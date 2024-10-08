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
            'osCheckFailedPercentage' => fn(ParseNode $n) => $o->setOsCheckFailedPercentage($n->getObjectValue([UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_osCheckFailedPercentage::class, 'createFromDiscriminatorValue'])),
            'processor64BitCheckFailedPercentage' => fn(ParseNode $n) => $o->setProcessor64BitCheckFailedPercentage($n->getObjectValue([UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processor64BitCheckFailedPercentage::class, 'createFromDiscriminatorValue'])),
            'processorCoreCountCheckFailedPercentage' => fn(ParseNode $n) => $o->setProcessorCoreCountCheckFailedPercentage($n->getObjectValue([UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processorCoreCountCheckFailedPercentage::class, 'createFromDiscriminatorValue'])),
            'processorFamilyCheckFailedPercentage' => fn(ParseNode $n) => $o->setProcessorFamilyCheckFailedPercentage($n->getObjectValue([UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processorFamilyCheckFailedPercentage::class, 'createFromDiscriminatorValue'])),
            'processorSpeedCheckFailedPercentage' => fn(ParseNode $n) => $o->setProcessorSpeedCheckFailedPercentage($n->getObjectValue([UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processorSpeedCheckFailedPercentage::class, 'createFromDiscriminatorValue'])),
            'ramCheckFailedPercentage' => fn(ParseNode $n) => $o->setRamCheckFailedPercentage($n->getObjectValue([UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_ramCheckFailedPercentage::class, 'createFromDiscriminatorValue'])),
            'secureBootCheckFailedPercentage' => fn(ParseNode $n) => $o->setSecureBootCheckFailedPercentage($n->getObjectValue([UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_secureBootCheckFailedPercentage::class, 'createFromDiscriminatorValue'])),
            'storageCheckFailedPercentage' => fn(ParseNode $n) => $o->setStorageCheckFailedPercentage($n->getObjectValue([UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_storageCheckFailedPercentage::class, 'createFromDiscriminatorValue'])),
            'totalDeviceCount' => fn(ParseNode $n) => $o->setTotalDeviceCount($n->getIntegerValue()),
            'tpmCheckFailedPercentage' => fn(ParseNode $n) => $o->setTpmCheckFailedPercentage($n->getObjectValue([UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_tpmCheckFailedPercentage::class, 'createFromDiscriminatorValue'])),
            'upgradeEligibleDeviceCount' => fn(ParseNode $n) => $o->setUpgradeEligibleDeviceCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the osCheckFailedPercentage property value. The percentage of devices for which OS check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_osCheckFailedPercentage|null
    */
    public function getOsCheckFailedPercentage(): ?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_osCheckFailedPercentage {
        $val = $this->getBackingStore()->get('osCheckFailedPercentage');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_osCheckFailedPercentage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osCheckFailedPercentage'");
    }

    /**
     * Gets the processor64BitCheckFailedPercentage property value. The percentage of devices for which processor hardware 64-bit architecture check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processor64BitCheckFailedPercentage|null
    */
    public function getProcessor64BitCheckFailedPercentage(): ?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processor64BitCheckFailedPercentage {
        $val = $this->getBackingStore()->get('processor64BitCheckFailedPercentage');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processor64BitCheckFailedPercentage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processor64BitCheckFailedPercentage'");
    }

    /**
     * Gets the processorCoreCountCheckFailedPercentage property value. The percentage of devices for which processor hardware core count check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processorCoreCountCheckFailedPercentage|null
    */
    public function getProcessorCoreCountCheckFailedPercentage(): ?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processorCoreCountCheckFailedPercentage {
        $val = $this->getBackingStore()->get('processorCoreCountCheckFailedPercentage');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processorCoreCountCheckFailedPercentage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processorCoreCountCheckFailedPercentage'");
    }

    /**
     * Gets the processorFamilyCheckFailedPercentage property value. The percentage of devices for which processor hardware family check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processorFamilyCheckFailedPercentage|null
    */
    public function getProcessorFamilyCheckFailedPercentage(): ?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processorFamilyCheckFailedPercentage {
        $val = $this->getBackingStore()->get('processorFamilyCheckFailedPercentage');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processorFamilyCheckFailedPercentage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processorFamilyCheckFailedPercentage'");
    }

    /**
     * Gets the processorSpeedCheckFailedPercentage property value. The percentage of devices for which processor hardware speed check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processorSpeedCheckFailedPercentage|null
    */
    public function getProcessorSpeedCheckFailedPercentage(): ?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processorSpeedCheckFailedPercentage {
        $val = $this->getBackingStore()->get('processorSpeedCheckFailedPercentage');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processorSpeedCheckFailedPercentage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processorSpeedCheckFailedPercentage'");
    }

    /**
     * Gets the ramCheckFailedPercentage property value. The percentage of devices for which RAM hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_ramCheckFailedPercentage|null
    */
    public function getRamCheckFailedPercentage(): ?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_ramCheckFailedPercentage {
        $val = $this->getBackingStore()->get('ramCheckFailedPercentage');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_ramCheckFailedPercentage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ramCheckFailedPercentage'");
    }

    /**
     * Gets the secureBootCheckFailedPercentage property value. The percentage of devices for which secure boot hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_secureBootCheckFailedPercentage|null
    */
    public function getSecureBootCheckFailedPercentage(): ?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_secureBootCheckFailedPercentage {
        $val = $this->getBackingStore()->get('secureBootCheckFailedPercentage');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_secureBootCheckFailedPercentage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'secureBootCheckFailedPercentage'");
    }

    /**
     * Gets the storageCheckFailedPercentage property value. The percentage of devices for which storage hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_storageCheckFailedPercentage|null
    */
    public function getStorageCheckFailedPercentage(): ?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_storageCheckFailedPercentage {
        $val = $this->getBackingStore()->get('storageCheckFailedPercentage');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_storageCheckFailedPercentage) {
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
     * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_tpmCheckFailedPercentage|null
    */
    public function getTpmCheckFailedPercentage(): ?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_tpmCheckFailedPercentage {
        $val = $this->getBackingStore()->get('tpmCheckFailedPercentage');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_tpmCheckFailedPercentage) {
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
        $writer->writeObjectValue('osCheckFailedPercentage', $this->getOsCheckFailedPercentage());
        $writer->writeObjectValue('processor64BitCheckFailedPercentage', $this->getProcessor64BitCheckFailedPercentage());
        $writer->writeObjectValue('processorCoreCountCheckFailedPercentage', $this->getProcessorCoreCountCheckFailedPercentage());
        $writer->writeObjectValue('processorFamilyCheckFailedPercentage', $this->getProcessorFamilyCheckFailedPercentage());
        $writer->writeObjectValue('processorSpeedCheckFailedPercentage', $this->getProcessorSpeedCheckFailedPercentage());
        $writer->writeObjectValue('ramCheckFailedPercentage', $this->getRamCheckFailedPercentage());
        $writer->writeObjectValue('secureBootCheckFailedPercentage', $this->getSecureBootCheckFailedPercentage());
        $writer->writeObjectValue('storageCheckFailedPercentage', $this->getStorageCheckFailedPercentage());
        $writer->writeIntegerValue('totalDeviceCount', $this->getTotalDeviceCount());
        $writer->writeObjectValue('tpmCheckFailedPercentage', $this->getTpmCheckFailedPercentage());
        $writer->writeIntegerValue('upgradeEligibleDeviceCount', $this->getUpgradeEligibleDeviceCount());
    }

    /**
     * Sets the osCheckFailedPercentage property value. The percentage of devices for which OS check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_osCheckFailedPercentage|null $value Value to set for the osCheckFailedPercentage property.
    */
    public function setOsCheckFailedPercentage(?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_osCheckFailedPercentage $value): void {
        $this->getBackingStore()->set('osCheckFailedPercentage', $value);
    }

    /**
     * Sets the processor64BitCheckFailedPercentage property value. The percentage of devices for which processor hardware 64-bit architecture check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processor64BitCheckFailedPercentage|null $value Value to set for the processor64BitCheckFailedPercentage property.
    */
    public function setProcessor64BitCheckFailedPercentage(?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processor64BitCheckFailedPercentage $value): void {
        $this->getBackingStore()->set('processor64BitCheckFailedPercentage', $value);
    }

    /**
     * Sets the processorCoreCountCheckFailedPercentage property value. The percentage of devices for which processor hardware core count check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processorCoreCountCheckFailedPercentage|null $value Value to set for the processorCoreCountCheckFailedPercentage property.
    */
    public function setProcessorCoreCountCheckFailedPercentage(?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processorCoreCountCheckFailedPercentage $value): void {
        $this->getBackingStore()->set('processorCoreCountCheckFailedPercentage', $value);
    }

    /**
     * Sets the processorFamilyCheckFailedPercentage property value. The percentage of devices for which processor hardware family check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processorFamilyCheckFailedPercentage|null $value Value to set for the processorFamilyCheckFailedPercentage property.
    */
    public function setProcessorFamilyCheckFailedPercentage(?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processorFamilyCheckFailedPercentage $value): void {
        $this->getBackingStore()->set('processorFamilyCheckFailedPercentage', $value);
    }

    /**
     * Sets the processorSpeedCheckFailedPercentage property value. The percentage of devices for which processor hardware speed check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processorSpeedCheckFailedPercentage|null $value Value to set for the processorSpeedCheckFailedPercentage property.
    */
    public function setProcessorSpeedCheckFailedPercentage(?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_processorSpeedCheckFailedPercentage $value): void {
        $this->getBackingStore()->set('processorSpeedCheckFailedPercentage', $value);
    }

    /**
     * Sets the ramCheckFailedPercentage property value. The percentage of devices for which RAM hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_ramCheckFailedPercentage|null $value Value to set for the ramCheckFailedPercentage property.
    */
    public function setRamCheckFailedPercentage(?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_ramCheckFailedPercentage $value): void {
        $this->getBackingStore()->set('ramCheckFailedPercentage', $value);
    }

    /**
     * Sets the secureBootCheckFailedPercentage property value. The percentage of devices for which secure boot hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_secureBootCheckFailedPercentage|null $value Value to set for the secureBootCheckFailedPercentage property.
    */
    public function setSecureBootCheckFailedPercentage(?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_secureBootCheckFailedPercentage $value): void {
        $this->getBackingStore()->set('secureBootCheckFailedPercentage', $value);
    }

    /**
     * Sets the storageCheckFailedPercentage property value. The percentage of devices for which storage hardware check has failed. Valid values 0 to 100. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_storageCheckFailedPercentage|null $value Value to set for the storageCheckFailedPercentage property.
    */
    public function setStorageCheckFailedPercentage(?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_storageCheckFailedPercentage $value): void {
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
     * @param UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_tpmCheckFailedPercentage|null $value Value to set for the tpmCheckFailedPercentage property.
    */
    public function setTpmCheckFailedPercentage(?UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric_tpmCheckFailedPercentage $value): void {
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
