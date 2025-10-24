<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics device for work from anywhere report.
*/
class UserExperienceAnalyticsWorkFromAnywhereDevice extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsWorkFromAnywhereDevice and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsWorkFromAnywhereDevice
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsWorkFromAnywhereDevice {
        return new UserExperienceAnalyticsWorkFromAnywhereDevice();
    }

    /**
     * Gets the autoPilotProfileAssigned property value. When TRUE, indicates the intune device's autopilot profile is assigned. When FALSE, indicates it's not Assigned. Supports: $select, $OrderBy. Read-only.
     * @return bool|null
    */
    public function getAutoPilotProfileAssigned(): ?bool {
        $val = $this->getBackingStore()->get('autoPilotProfileAssigned');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autoPilotProfileAssigned'");
    }

    /**
     * Gets the autoPilotRegistered property value. When TRUE, indicates the intune device's autopilot is registered. When FALSE, indicates it's not registered. Supports: $select, $OrderBy. Read-only.
     * @return bool|null
    */
    public function getAutoPilotRegistered(): ?bool {
        $val = $this->getBackingStore()->get('autoPilotRegistered');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autoPilotRegistered'");
    }

    /**
     * Gets the azureAdDeviceId property value. The Azure Active Directory (Azure AD) device Id. Supports: $select, $OrderBy. Read-only.
     * @return string|null
    */
    public function getAzureAdDeviceId(): ?string {
        $val = $this->getBackingStore()->get('azureAdDeviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureAdDeviceId'");
    }

    /**
     * Gets the azureAdJoinType property value. The work from anywhere device's Azure Active Directory (Azure AD) join type. Supports: $select, $OrderBy. Read-only.
     * @return string|null
    */
    public function getAzureAdJoinType(): ?string {
        $val = $this->getBackingStore()->get('azureAdJoinType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureAdJoinType'");
    }

    /**
     * Gets the azureAdRegistered property value. When TRUE, indicates the device's Azure Active Directory (Azure AD) is registered. When False, indicates it's not registered. Supports: $select, $OrderBy. Read-only.
     * @return bool|null
    */
    public function getAzureAdRegistered(): ?bool {
        $val = $this->getBackingStore()->get('azureAdRegistered');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureAdRegistered'");
    }

    /**
     * Gets the cloudIdentityScore property value. Indicates per device cloud identity score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getCloudIdentityScore(): ?float {
        $val = $this->getBackingStore()->get('cloudIdentityScore');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudIdentityScore'");
    }

    /**
     * Gets the cloudManagementScore property value. Indicates per device cloud management score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getCloudManagementScore(): ?float {
        $val = $this->getBackingStore()->get('cloudManagementScore');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudManagementScore'");
    }

    /**
     * Gets the cloudProvisioningScore property value. Indicates per device cloud provisioning score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getCloudProvisioningScore(): ?float {
        $val = $this->getBackingStore()->get('cloudProvisioningScore');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudProvisioningScore'");
    }

    /**
     * Gets the compliancePolicySetToIntune property value. When TRUE, indicates the device's compliance policy is set to intune. When FALSE, indicates it's not set to intune. Supports: $select, $OrderBy. Read-only.
     * @return bool|null
    */
    public function getCompliancePolicySetToIntune(): ?bool {
        $val = $this->getBackingStore()->get('compliancePolicySetToIntune');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliancePolicySetToIntune'");
    }

    /**
     * Gets the deviceId property value. The Intune device id of the device. Supports: $select, $OrderBy. Read-only.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        $val = $this->getBackingStore()->get('deviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceId'");
    }

    /**
     * Gets the deviceName property value. The name of the device. Supports: $select, $OrderBy. Read-only.
     * @return string|null
    */
    public function getDeviceName(): ?string {
        $val = $this->getBackingStore()->get('deviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'autoPilotProfileAssigned' => fn(ParseNode $n) => $o->setAutoPilotProfileAssigned($n->getBooleanValue()),
            'autoPilotRegistered' => fn(ParseNode $n) => $o->setAutoPilotRegistered($n->getBooleanValue()),
            'azureAdDeviceId' => fn(ParseNode $n) => $o->setAzureAdDeviceId($n->getStringValue()),
            'azureAdJoinType' => fn(ParseNode $n) => $o->setAzureAdJoinType($n->getStringValue()),
            'azureAdRegistered' => fn(ParseNode $n) => $o->setAzureAdRegistered($n->getBooleanValue()),
            'cloudIdentityScore' => fn(ParseNode $n) => $o->setCloudIdentityScore($n->getFloatValue()),
            'cloudManagementScore' => fn(ParseNode $n) => $o->setCloudManagementScore($n->getFloatValue()),
            'cloudProvisioningScore' => fn(ParseNode $n) => $o->setCloudProvisioningScore($n->getFloatValue()),
            'compliancePolicySetToIntune' => fn(ParseNode $n) => $o->setCompliancePolicySetToIntune($n->getBooleanValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(UserExperienceAnalyticsHealthState::class)),
            'isCloudManagedGatewayEnabled' => fn(ParseNode $n) => $o->setIsCloudManagedGatewayEnabled($n->getBooleanValue()),
            'managedBy' => fn(ParseNode $n) => $o->setManagedBy($n->getStringValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'osCheckFailed' => fn(ParseNode $n) => $o->setOsCheckFailed($n->getBooleanValue()),
            'osDescription' => fn(ParseNode $n) => $o->setOsDescription($n->getStringValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'otherWorkloadsSetToIntune' => fn(ParseNode $n) => $o->setOtherWorkloadsSetToIntune($n->getBooleanValue()),
            'ownership' => fn(ParseNode $n) => $o->setOwnership($n->getStringValue()),
            'processor64BitCheckFailed' => fn(ParseNode $n) => $o->setProcessor64BitCheckFailed($n->getBooleanValue()),
            'processorCoreCountCheckFailed' => fn(ParseNode $n) => $o->setProcessorCoreCountCheckFailed($n->getBooleanValue()),
            'processorFamilyCheckFailed' => fn(ParseNode $n) => $o->setProcessorFamilyCheckFailed($n->getBooleanValue()),
            'processorSpeedCheckFailed' => fn(ParseNode $n) => $o->setProcessorSpeedCheckFailed($n->getBooleanValue()),
            'ramCheckFailed' => fn(ParseNode $n) => $o->setRamCheckFailed($n->getBooleanValue()),
            'secureBootCheckFailed' => fn(ParseNode $n) => $o->setSecureBootCheckFailed($n->getBooleanValue()),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
            'storageCheckFailed' => fn(ParseNode $n) => $o->setStorageCheckFailed($n->getBooleanValue()),
            'tenantAttached' => fn(ParseNode $n) => $o->setTenantAttached($n->getBooleanValue()),
            'tpmCheckFailed' => fn(ParseNode $n) => $o->setTpmCheckFailed($n->getBooleanValue()),
            'upgradeEligibility' => fn(ParseNode $n) => $o->setUpgradeEligibility($n->getEnumValue(OperatingSystemUpgradeEligibility::class)),
            'windowsScore' => fn(ParseNode $n) => $o->setWindowsScore($n->getFloatValue()),
            'workFromAnywhereScore' => fn(ParseNode $n) => $o->setWorkFromAnywhereScore($n->getFloatValue()),
        ]);
    }

    /**
     * Gets the healthStatus property value. The healthStatus property
     * @return UserExperienceAnalyticsHealthState|null
    */
    public function getHealthStatus(): ?UserExperienceAnalyticsHealthState {
        $val = $this->getBackingStore()->get('healthStatus');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsHealthState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'healthStatus'");
    }

    /**
     * Gets the isCloudManagedGatewayEnabled property value. When TRUE, indicates the device's Cloud Management Gateway for Configuration Manager is enabled. When FALSE, indicates it's not enabled. Supports: $select, $OrderBy. Read-only.
     * @return bool|null
    */
    public function getIsCloudManagedGatewayEnabled(): ?bool {
        $val = $this->getBackingStore()->get('isCloudManagedGatewayEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCloudManagedGatewayEnabled'");
    }

    /**
     * Gets the managedBy property value. The management agent of the device. Supports: $select, $OrderBy. Read-only.
     * @return string|null
    */
    public function getManagedBy(): ?string {
        $val = $this->getBackingStore()->get('managedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedBy'");
    }

    /**
     * Gets the manufacturer property value. The manufacturer name of the device. Supports: $select, $OrderBy. Read-only.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        $val = $this->getBackingStore()->get('manufacturer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manufacturer'");
    }

    /**
     * Gets the model property value. The model name of the device. Supports: $select, $OrderBy. Read-only.
     * @return string|null
    */
    public function getModel(): ?string {
        $val = $this->getBackingStore()->get('model');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'model'");
    }

    /**
     * Gets the osCheckFailed property value. When TRUE, indicates OS check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     * @return bool|null
    */
    public function getOsCheckFailed(): ?bool {
        $val = $this->getBackingStore()->get('osCheckFailed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osCheckFailed'");
    }

    /**
     * Gets the osDescription property value. The OS description of the device. Supports: $select, $OrderBy. Read-only.
     * @return string|null
    */
    public function getOsDescription(): ?string {
        $val = $this->getBackingStore()->get('osDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osDescription'");
    }

    /**
     * Gets the osVersion property value. The OS version of the device. Supports: $select, $OrderBy. Read-only.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        $val = $this->getBackingStore()->get('osVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osVersion'");
    }

    /**
     * Gets the otherWorkloadsSetToIntune property value. When TRUE, indicates the device's other workloads is set to intune. When FALSE, indicates it's not set to intune. Supports: $select, $OrderBy. Read-only.
     * @return bool|null
    */
    public function getOtherWorkloadsSetToIntune(): ?bool {
        $val = $this->getBackingStore()->get('otherWorkloadsSetToIntune');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'otherWorkloadsSetToIntune'");
    }

    /**
     * Gets the ownership property value. Ownership of the device. Supports: $select, $OrderBy. Read-only.
     * @return string|null
    */
    public function getOwnership(): ?string {
        $val = $this->getBackingStore()->get('ownership');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ownership'");
    }

    /**
     * Gets the processor64BitCheckFailed property value. When TRUE, indicates processor hardware 64-bit architecture check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     * @return bool|null
    */
    public function getProcessor64BitCheckFailed(): ?bool {
        $val = $this->getBackingStore()->get('processor64BitCheckFailed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processor64BitCheckFailed'");
    }

    /**
     * Gets the processorCoreCountCheckFailed property value. When TRUE, indicates processor hardware core count check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     * @return bool|null
    */
    public function getProcessorCoreCountCheckFailed(): ?bool {
        $val = $this->getBackingStore()->get('processorCoreCountCheckFailed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processorCoreCountCheckFailed'");
    }

    /**
     * Gets the processorFamilyCheckFailed property value. When TRUE, indicates processor hardware family check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     * @return bool|null
    */
    public function getProcessorFamilyCheckFailed(): ?bool {
        $val = $this->getBackingStore()->get('processorFamilyCheckFailed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processorFamilyCheckFailed'");
    }

    /**
     * Gets the processorSpeedCheckFailed property value. When TRUE, indicates processor hardware speed check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     * @return bool|null
    */
    public function getProcessorSpeedCheckFailed(): ?bool {
        $val = $this->getBackingStore()->get('processorSpeedCheckFailed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processorSpeedCheckFailed'");
    }

    /**
     * Gets the ramCheckFailed property value. When TRUE, indicates RAM hardware check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     * @return bool|null
    */
    public function getRamCheckFailed(): ?bool {
        $val = $this->getBackingStore()->get('ramCheckFailed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ramCheckFailed'");
    }

    /**
     * Gets the secureBootCheckFailed property value. When TRUE, indicates secure boot hardware check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     * @return bool|null
    */
    public function getSecureBootCheckFailed(): ?bool {
        $val = $this->getBackingStore()->get('secureBootCheckFailed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'secureBootCheckFailed'");
    }

    /**
     * Gets the serialNumber property value. The serial number of the device. Supports: $select, $OrderBy. Read-only.
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        $val = $this->getBackingStore()->get('serialNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serialNumber'");
    }

    /**
     * Gets the storageCheckFailed property value. When TRUE, indicates storage hardware check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     * @return bool|null
    */
    public function getStorageCheckFailed(): ?bool {
        $val = $this->getBackingStore()->get('storageCheckFailed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'storageCheckFailed'");
    }

    /**
     * Gets the tenantAttached property value. When TRUE, indicates the device is Tenant Attached. When FALSE, indicates it's not Tenant Attached. Supports: $select, $OrderBy. Read-only.
     * @return bool|null
    */
    public function getTenantAttached(): ?bool {
        $val = $this->getBackingStore()->get('tenantAttached');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantAttached'");
    }

    /**
     * Gets the tpmCheckFailed property value. When TRUE, indicates Trusted Platform Module (TPM) hardware check failed for device to the latest version of upgrade to windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     * @return bool|null
    */
    public function getTpmCheckFailed(): ?bool {
        $val = $this->getBackingStore()->get('tpmCheckFailed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tpmCheckFailed'");
    }

    /**
     * Gets the upgradeEligibility property value. Work From Anywhere windows device upgrade eligibility status.
     * @return OperatingSystemUpgradeEligibility|null
    */
    public function getUpgradeEligibility(): ?OperatingSystemUpgradeEligibility {
        $val = $this->getBackingStore()->get('upgradeEligibility');
        if (is_null($val) || $val instanceof OperatingSystemUpgradeEligibility) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'upgradeEligibility'");
    }

    /**
     * Gets the windowsScore property value. Indicates per device windows score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getWindowsScore(): ?float {
        $val = $this->getBackingStore()->get('windowsScore');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsScore'");
    }

    /**
     * Gets the workFromAnywhereScore property value. Indicates work from anywhere per device overall score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getWorkFromAnywhereScore(): ?float {
        $val = $this->getBackingStore()->get('workFromAnywhereScore');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workFromAnywhereScore'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('autoPilotProfileAssigned', $this->getAutoPilotProfileAssigned());
        $writer->writeBooleanValue('autoPilotRegistered', $this->getAutoPilotRegistered());
        $writer->writeStringValue('azureAdDeviceId', $this->getAzureAdDeviceId());
        $writer->writeStringValue('azureAdJoinType', $this->getAzureAdJoinType());
        $writer->writeBooleanValue('azureAdRegistered', $this->getAzureAdRegistered());
        $writer->writeFloatValue('cloudIdentityScore', $this->getCloudIdentityScore());
        $writer->writeFloatValue('cloudManagementScore', $this->getCloudManagementScore());
        $writer->writeFloatValue('cloudProvisioningScore', $this->getCloudProvisioningScore());
        $writer->writeBooleanValue('compliancePolicySetToIntune', $this->getCompliancePolicySetToIntune());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeBooleanValue('isCloudManagedGatewayEnabled', $this->getIsCloudManagedGatewayEnabled());
        $writer->writeStringValue('managedBy', $this->getManagedBy());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeBooleanValue('osCheckFailed', $this->getOsCheckFailed());
        $writer->writeStringValue('osDescription', $this->getOsDescription());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
        $writer->writeBooleanValue('otherWorkloadsSetToIntune', $this->getOtherWorkloadsSetToIntune());
        $writer->writeStringValue('ownership', $this->getOwnership());
        $writer->writeBooleanValue('processor64BitCheckFailed', $this->getProcessor64BitCheckFailed());
        $writer->writeBooleanValue('processorCoreCountCheckFailed', $this->getProcessorCoreCountCheckFailed());
        $writer->writeBooleanValue('processorFamilyCheckFailed', $this->getProcessorFamilyCheckFailed());
        $writer->writeBooleanValue('processorSpeedCheckFailed', $this->getProcessorSpeedCheckFailed());
        $writer->writeBooleanValue('ramCheckFailed', $this->getRamCheckFailed());
        $writer->writeBooleanValue('secureBootCheckFailed', $this->getSecureBootCheckFailed());
        $writer->writeStringValue('serialNumber', $this->getSerialNumber());
        $writer->writeBooleanValue('storageCheckFailed', $this->getStorageCheckFailed());
        $writer->writeBooleanValue('tenantAttached', $this->getTenantAttached());
        $writer->writeBooleanValue('tpmCheckFailed', $this->getTpmCheckFailed());
        $writer->writeEnumValue('upgradeEligibility', $this->getUpgradeEligibility());
        $writer->writeFloatValue('windowsScore', $this->getWindowsScore());
        $writer->writeFloatValue('workFromAnywhereScore', $this->getWorkFromAnywhereScore());
    }

    /**
     * Sets the autoPilotProfileAssigned property value. When TRUE, indicates the intune device's autopilot profile is assigned. When FALSE, indicates it's not Assigned. Supports: $select, $OrderBy. Read-only.
     * @param bool|null $value Value to set for the autoPilotProfileAssigned property.
    */
    public function setAutoPilotProfileAssigned(?bool $value): void {
        $this->getBackingStore()->set('autoPilotProfileAssigned', $value);
    }

    /**
     * Sets the autoPilotRegistered property value. When TRUE, indicates the intune device's autopilot is registered. When FALSE, indicates it's not registered. Supports: $select, $OrderBy. Read-only.
     * @param bool|null $value Value to set for the autoPilotRegistered property.
    */
    public function setAutoPilotRegistered(?bool $value): void {
        $this->getBackingStore()->set('autoPilotRegistered', $value);
    }

    /**
     * Sets the azureAdDeviceId property value. The Azure Active Directory (Azure AD) device Id. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the azureAdDeviceId property.
    */
    public function setAzureAdDeviceId(?string $value): void {
        $this->getBackingStore()->set('azureAdDeviceId', $value);
    }

    /**
     * Sets the azureAdJoinType property value. The work from anywhere device's Azure Active Directory (Azure AD) join type. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the azureAdJoinType property.
    */
    public function setAzureAdJoinType(?string $value): void {
        $this->getBackingStore()->set('azureAdJoinType', $value);
    }

    /**
     * Sets the azureAdRegistered property value. When TRUE, indicates the device's Azure Active Directory (Azure AD) is registered. When False, indicates it's not registered. Supports: $select, $OrderBy. Read-only.
     * @param bool|null $value Value to set for the azureAdRegistered property.
    */
    public function setAzureAdRegistered(?bool $value): void {
        $this->getBackingStore()->set('azureAdRegistered', $value);
    }

    /**
     * Sets the cloudIdentityScore property value. Indicates per device cloud identity score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the cloudIdentityScore property.
    */
    public function setCloudIdentityScore(?float $value): void {
        $this->getBackingStore()->set('cloudIdentityScore', $value);
    }

    /**
     * Sets the cloudManagementScore property value. Indicates per device cloud management score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the cloudManagementScore property.
    */
    public function setCloudManagementScore(?float $value): void {
        $this->getBackingStore()->set('cloudManagementScore', $value);
    }

    /**
     * Sets the cloudProvisioningScore property value. Indicates per device cloud provisioning score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the cloudProvisioningScore property.
    */
    public function setCloudProvisioningScore(?float $value): void {
        $this->getBackingStore()->set('cloudProvisioningScore', $value);
    }

    /**
     * Sets the compliancePolicySetToIntune property value. When TRUE, indicates the device's compliance policy is set to intune. When FALSE, indicates it's not set to intune. Supports: $select, $OrderBy. Read-only.
     * @param bool|null $value Value to set for the compliancePolicySetToIntune property.
    */
    public function setCompliancePolicySetToIntune(?bool $value): void {
        $this->getBackingStore()->set('compliancePolicySetToIntune', $value);
    }

    /**
     * Sets the deviceId property value. The Intune device id of the device. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceName property value. The name of the device. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the healthStatus property value. The healthStatus property
     * @param UserExperienceAnalyticsHealthState|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?UserExperienceAnalyticsHealthState $value): void {
        $this->getBackingStore()->set('healthStatus', $value);
    }

    /**
     * Sets the isCloudManagedGatewayEnabled property value. When TRUE, indicates the device's Cloud Management Gateway for Configuration Manager is enabled. When FALSE, indicates it's not enabled. Supports: $select, $OrderBy. Read-only.
     * @param bool|null $value Value to set for the isCloudManagedGatewayEnabled property.
    */
    public function setIsCloudManagedGatewayEnabled(?bool $value): void {
        $this->getBackingStore()->set('isCloudManagedGatewayEnabled', $value);
    }

    /**
     * Sets the managedBy property value. The management agent of the device. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the managedBy property.
    */
    public function setManagedBy(?string $value): void {
        $this->getBackingStore()->set('managedBy', $value);
    }

    /**
     * Sets the manufacturer property value. The manufacturer name of the device. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the model property value. The model name of the device. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the osCheckFailed property value. When TRUE, indicates OS check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     * @param bool|null $value Value to set for the osCheckFailed property.
    */
    public function setOsCheckFailed(?bool $value): void {
        $this->getBackingStore()->set('osCheckFailed', $value);
    }

    /**
     * Sets the osDescription property value. The OS description of the device. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the osDescription property.
    */
    public function setOsDescription(?string $value): void {
        $this->getBackingStore()->set('osDescription', $value);
    }

    /**
     * Sets the osVersion property value. The OS version of the device. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the otherWorkloadsSetToIntune property value. When TRUE, indicates the device's other workloads is set to intune. When FALSE, indicates it's not set to intune. Supports: $select, $OrderBy. Read-only.
     * @param bool|null $value Value to set for the otherWorkloadsSetToIntune property.
    */
    public function setOtherWorkloadsSetToIntune(?bool $value): void {
        $this->getBackingStore()->set('otherWorkloadsSetToIntune', $value);
    }

    /**
     * Sets the ownership property value. Ownership of the device. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the ownership property.
    */
    public function setOwnership(?string $value): void {
        $this->getBackingStore()->set('ownership', $value);
    }

    /**
     * Sets the processor64BitCheckFailed property value. When TRUE, indicates processor hardware 64-bit architecture check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     * @param bool|null $value Value to set for the processor64BitCheckFailed property.
    */
    public function setProcessor64BitCheckFailed(?bool $value): void {
        $this->getBackingStore()->set('processor64BitCheckFailed', $value);
    }

    /**
     * Sets the processorCoreCountCheckFailed property value. When TRUE, indicates processor hardware core count check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     * @param bool|null $value Value to set for the processorCoreCountCheckFailed property.
    */
    public function setProcessorCoreCountCheckFailed(?bool $value): void {
        $this->getBackingStore()->set('processorCoreCountCheckFailed', $value);
    }

    /**
     * Sets the processorFamilyCheckFailed property value. When TRUE, indicates processor hardware family check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     * @param bool|null $value Value to set for the processorFamilyCheckFailed property.
    */
    public function setProcessorFamilyCheckFailed(?bool $value): void {
        $this->getBackingStore()->set('processorFamilyCheckFailed', $value);
    }

    /**
     * Sets the processorSpeedCheckFailed property value. When TRUE, indicates processor hardware speed check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     * @param bool|null $value Value to set for the processorSpeedCheckFailed property.
    */
    public function setProcessorSpeedCheckFailed(?bool $value): void {
        $this->getBackingStore()->set('processorSpeedCheckFailed', $value);
    }

    /**
     * Sets the ramCheckFailed property value. When TRUE, indicates RAM hardware check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     * @param bool|null $value Value to set for the ramCheckFailed property.
    */
    public function setRamCheckFailed(?bool $value): void {
        $this->getBackingStore()->set('ramCheckFailed', $value);
    }

    /**
     * Sets the secureBootCheckFailed property value. When TRUE, indicates secure boot hardware check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     * @param bool|null $value Value to set for the secureBootCheckFailed property.
    */
    public function setSecureBootCheckFailed(?bool $value): void {
        $this->getBackingStore()->set('secureBootCheckFailed', $value);
    }

    /**
     * Sets the serialNumber property value. The serial number of the device. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value): void {
        $this->getBackingStore()->set('serialNumber', $value);
    }

    /**
     * Sets the storageCheckFailed property value. When TRUE, indicates storage hardware check failed for device to upgrade to the latest version of windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     * @param bool|null $value Value to set for the storageCheckFailed property.
    */
    public function setStorageCheckFailed(?bool $value): void {
        $this->getBackingStore()->set('storageCheckFailed', $value);
    }

    /**
     * Sets the tenantAttached property value. When TRUE, indicates the device is Tenant Attached. When FALSE, indicates it's not Tenant Attached. Supports: $select, $OrderBy. Read-only.
     * @param bool|null $value Value to set for the tenantAttached property.
    */
    public function setTenantAttached(?bool $value): void {
        $this->getBackingStore()->set('tenantAttached', $value);
    }

    /**
     * Sets the tpmCheckFailed property value. When TRUE, indicates Trusted Platform Module (TPM) hardware check failed for device to the latest version of upgrade to windows. When FALSE, indicates the check succeeded. Supports: $select, $OrderBy. Read-only.
     * @param bool|null $value Value to set for the tpmCheckFailed property.
    */
    public function setTpmCheckFailed(?bool $value): void {
        $this->getBackingStore()->set('tpmCheckFailed', $value);
    }

    /**
     * Sets the upgradeEligibility property value. Work From Anywhere windows device upgrade eligibility status.
     * @param OperatingSystemUpgradeEligibility|null $value Value to set for the upgradeEligibility property.
    */
    public function setUpgradeEligibility(?OperatingSystemUpgradeEligibility $value): void {
        $this->getBackingStore()->set('upgradeEligibility', $value);
    }

    /**
     * Sets the windowsScore property value. Indicates per device windows score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the windowsScore property.
    */
    public function setWindowsScore(?float $value): void {
        $this->getBackingStore()->set('windowsScore', $value);
    }

    /**
     * Sets the workFromAnywhereScore property value. Indicates work from anywhere per device overall score. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the workFromAnywhereScore property.
    */
    public function setWorkFromAnywhereScore(?float $value): void {
        $this->getBackingStore()->set('workFromAnywhereScore', $value);
    }

}
