<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics work from anywhere model performance.
*/
class UserExperienceAnalyticsWorkFromAnywhereModelPerformance extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsWorkFromAnywhereModelPerformance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsWorkFromAnywhereModelPerformance {
        return new UserExperienceAnalyticsWorkFromAnywhereModelPerformance();
    }

    /**
     * Gets the cloudIdentityScore property value. The cloud identity score of the device model. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformance_cloudIdentityScore|null
    */
    public function getCloudIdentityScore(): ?UserExperienceAnalyticsWorkFromAnywhereModelPerformance_cloudIdentityScore {
        $val = $this->getBackingStore()->get('cloudIdentityScore');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsWorkFromAnywhereModelPerformance_cloudIdentityScore) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudIdentityScore'");
    }

    /**
     * Gets the cloudManagementScore property value. The cloud management score of the device model. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformance_cloudManagementScore|null
    */
    public function getCloudManagementScore(): ?UserExperienceAnalyticsWorkFromAnywhereModelPerformance_cloudManagementScore {
        $val = $this->getBackingStore()->get('cloudManagementScore');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsWorkFromAnywhereModelPerformance_cloudManagementScore) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudManagementScore'");
    }

    /**
     * Gets the cloudProvisioningScore property value. The cloud provisioning score of the device model.  Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformance_cloudProvisioningScore|null
    */
    public function getCloudProvisioningScore(): ?UserExperienceAnalyticsWorkFromAnywhereModelPerformance_cloudProvisioningScore {
        $val = $this->getBackingStore()->get('cloudProvisioningScore');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsWorkFromAnywhereModelPerformance_cloudProvisioningScore) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudProvisioningScore'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cloudIdentityScore' => fn(ParseNode $n) => $o->setCloudIdentityScore($n->getObjectValue([UserExperienceAnalyticsWorkFromAnywhereModelPerformance_cloudIdentityScore::class, 'createFromDiscriminatorValue'])),
            'cloudManagementScore' => fn(ParseNode $n) => $o->setCloudManagementScore($n->getObjectValue([UserExperienceAnalyticsWorkFromAnywhereModelPerformance_cloudManagementScore::class, 'createFromDiscriminatorValue'])),
            'cloudProvisioningScore' => fn(ParseNode $n) => $o->setCloudProvisioningScore($n->getObjectValue([UserExperienceAnalyticsWorkFromAnywhereModelPerformance_cloudProvisioningScore::class, 'createFromDiscriminatorValue'])),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(UserExperienceAnalyticsHealthState::class)),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'modelDeviceCount' => fn(ParseNode $n) => $o->setModelDeviceCount($n->getIntegerValue()),
            'windowsScore' => fn(ParseNode $n) => $o->setWindowsScore($n->getObjectValue([UserExperienceAnalyticsWorkFromAnywhereModelPerformance_windowsScore::class, 'createFromDiscriminatorValue'])),
            'workFromAnywhereScore' => fn(ParseNode $n) => $o->setWorkFromAnywhereScore($n->getObjectValue([UserExperienceAnalyticsWorkFromAnywhereModelPerformance_workFromAnywhereScore::class, 'createFromDiscriminatorValue'])),
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
     * Gets the modelDeviceCount property value. The devices count for the model. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getModelDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('modelDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modelDeviceCount'");
    }

    /**
     * Gets the windowsScore property value. The window score of the device model. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformance_windowsScore|null
    */
    public function getWindowsScore(): ?UserExperienceAnalyticsWorkFromAnywhereModelPerformance_windowsScore {
        $val = $this->getBackingStore()->get('windowsScore');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsWorkFromAnywhereModelPerformance_windowsScore) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsScore'");
    }

    /**
     * Gets the workFromAnywhereScore property value. The work from anywhere score of the device model. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsWorkFromAnywhereModelPerformance_workFromAnywhereScore|null
    */
    public function getWorkFromAnywhereScore(): ?UserExperienceAnalyticsWorkFromAnywhereModelPerformance_workFromAnywhereScore {
        $val = $this->getBackingStore()->get('workFromAnywhereScore');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsWorkFromAnywhereModelPerformance_workFromAnywhereScore) {
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
        $writer->writeObjectValue('cloudIdentityScore', $this->getCloudIdentityScore());
        $writer->writeObjectValue('cloudManagementScore', $this->getCloudManagementScore());
        $writer->writeObjectValue('cloudProvisioningScore', $this->getCloudProvisioningScore());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeIntegerValue('modelDeviceCount', $this->getModelDeviceCount());
        $writer->writeObjectValue('windowsScore', $this->getWindowsScore());
        $writer->writeObjectValue('workFromAnywhereScore', $this->getWorkFromAnywhereScore());
    }

    /**
     * Sets the cloudIdentityScore property value. The cloud identity score of the device model. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsWorkFromAnywhereModelPerformance_cloudIdentityScore|null $value Value to set for the cloudIdentityScore property.
    */
    public function setCloudIdentityScore(?UserExperienceAnalyticsWorkFromAnywhereModelPerformance_cloudIdentityScore $value): void {
        $this->getBackingStore()->set('cloudIdentityScore', $value);
    }

    /**
     * Sets the cloudManagementScore property value. The cloud management score of the device model. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsWorkFromAnywhereModelPerformance_cloudManagementScore|null $value Value to set for the cloudManagementScore property.
    */
    public function setCloudManagementScore(?UserExperienceAnalyticsWorkFromAnywhereModelPerformance_cloudManagementScore $value): void {
        $this->getBackingStore()->set('cloudManagementScore', $value);
    }

    /**
     * Sets the cloudProvisioningScore property value. The cloud provisioning score of the device model.  Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsWorkFromAnywhereModelPerformance_cloudProvisioningScore|null $value Value to set for the cloudProvisioningScore property.
    */
    public function setCloudProvisioningScore(?UserExperienceAnalyticsWorkFromAnywhereModelPerformance_cloudProvisioningScore $value): void {
        $this->getBackingStore()->set('cloudProvisioningScore', $value);
    }

    /**
     * Sets the healthStatus property value. The healthStatus property
     * @param UserExperienceAnalyticsHealthState|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?UserExperienceAnalyticsHealthState $value): void {
        $this->getBackingStore()->set('healthStatus', $value);
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
     * Sets the modelDeviceCount property value. The devices count for the model. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the modelDeviceCount property.
    */
    public function setModelDeviceCount(?int $value): void {
        $this->getBackingStore()->set('modelDeviceCount', $value);
    }

    /**
     * Sets the windowsScore property value. The window score of the device model. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsWorkFromAnywhereModelPerformance_windowsScore|null $value Value to set for the windowsScore property.
    */
    public function setWindowsScore(?UserExperienceAnalyticsWorkFromAnywhereModelPerformance_windowsScore $value): void {
        $this->getBackingStore()->set('windowsScore', $value);
    }

    /**
     * Sets the workFromAnywhereScore property value. The work from anywhere score of the device model. Valid values 0 to 100. Value -1 means associated score is unavailable. Supports: $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsWorkFromAnywhereModelPerformance_workFromAnywhereScore|null $value Value to set for the workFromAnywhereScore property.
    */
    public function setWorkFromAnywhereScore(?UserExperienceAnalyticsWorkFromAnywhereModelPerformance_workFromAnywhereScore $value): void {
        $this->getBackingStore()->set('workFromAnywhereScore', $value);
    }

}
