<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics device performance entity contains device boot performance details.
*/
class UserExperienceAnalyticsDevicePerformance extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsDevicePerformance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsDevicePerformance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsDevicePerformance {
        return new UserExperienceAnalyticsDevicePerformance();
    }

    /**
     * Gets the averageBlueScreens property value. Average (mean) number of Blue Screens per device in the last 30 days. Valid values 0 to 9999999
     * @return float|null
    */
    public function getAverageBlueScreens(): ?float {
        $val = $this->getBackingStore()->get('averageBlueScreens');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'averageBlueScreens'");
    }

    /**
     * Gets the averageRestarts property value. Average (mean) number of Restarts per device in the last 30 days. Valid values 0 to 9999999
     * @return float|null
    */
    public function getAverageRestarts(): ?float {
        $val = $this->getBackingStore()->get('averageRestarts');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'averageRestarts'");
    }

    /**
     * Gets the blueScreenCount property value. Number of Blue Screens in the last 30 days. Valid values 0 to 9999999
     * @return int|null
    */
    public function getBlueScreenCount(): ?int {
        $val = $this->getBackingStore()->get('blueScreenCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blueScreenCount'");
    }

    /**
     * Gets the bootScore property value. The user experience analytics device boot score.
     * @return int|null
    */
    public function getBootScore(): ?int {
        $val = $this->getBackingStore()->get('bootScore');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bootScore'");
    }

    /**
     * Gets the coreBootTimeInMs property value. The user experience analytics device core boot time in milliseconds.
     * @return int|null
    */
    public function getCoreBootTimeInMs(): ?int {
        $val = $this->getBackingStore()->get('coreBootTimeInMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'coreBootTimeInMs'");
    }

    /**
     * Gets the coreLoginTimeInMs property value. The user experience analytics device core login time in milliseconds.
     * @return int|null
    */
    public function getCoreLoginTimeInMs(): ?int {
        $val = $this->getBackingStore()->get('coreLoginTimeInMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'coreLoginTimeInMs'");
    }

    /**
     * Gets the deviceCount property value. User experience analytics summarized device count.
     * @return int|null
    */
    public function getDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('deviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCount'");
    }

    /**
     * Gets the deviceName property value. The user experience analytics device name.
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
     * Gets the diskType property value. The diskType property
     * @return DiskType|null
    */
    public function getDiskType(): ?DiskType {
        $val = $this->getBackingStore()->get('diskType');
        if (is_null($val) || $val instanceof DiskType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'diskType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'averageBlueScreens' => fn(ParseNode $n) => $o->setAverageBlueScreens($n->getFloatValue()),
            'averageRestarts' => fn(ParseNode $n) => $o->setAverageRestarts($n->getFloatValue()),
            'blueScreenCount' => fn(ParseNode $n) => $o->setBlueScreenCount($n->getIntegerValue()),
            'bootScore' => fn(ParseNode $n) => $o->setBootScore($n->getIntegerValue()),
            'coreBootTimeInMs' => fn(ParseNode $n) => $o->setCoreBootTimeInMs($n->getIntegerValue()),
            'coreLoginTimeInMs' => fn(ParseNode $n) => $o->setCoreLoginTimeInMs($n->getIntegerValue()),
            'deviceCount' => fn(ParseNode $n) => $o->setDeviceCount($n->getIntegerValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'diskType' => fn(ParseNode $n) => $o->setDiskType($n->getEnumValue(DiskType::class)),
            'groupPolicyBootTimeInMs' => fn(ParseNode $n) => $o->setGroupPolicyBootTimeInMs($n->getIntegerValue()),
            'groupPolicyLoginTimeInMs' => fn(ParseNode $n) => $o->setGroupPolicyLoginTimeInMs($n->getIntegerValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(UserExperienceAnalyticsHealthState::class)),
            'loginScore' => fn(ParseNode $n) => $o->setLoginScore($n->getIntegerValue()),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'modelStartupPerformanceScore' => fn(ParseNode $n) => $o->setModelStartupPerformanceScore($n->getFloatValue()),
            'operatingSystemVersion' => fn(ParseNode $n) => $o->setOperatingSystemVersion($n->getStringValue()),
            'responsiveDesktopTimeInMs' => fn(ParseNode $n) => $o->setResponsiveDesktopTimeInMs($n->getIntegerValue()),
            'restartCount' => fn(ParseNode $n) => $o->setRestartCount($n->getIntegerValue()),
            'startupPerformanceScore' => fn(ParseNode $n) => $o->setStartupPerformanceScore($n->getFloatValue()),
        ]);
    }

    /**
     * Gets the groupPolicyBootTimeInMs property value. The user experience analytics device group policy boot time in milliseconds.
     * @return int|null
    */
    public function getGroupPolicyBootTimeInMs(): ?int {
        $val = $this->getBackingStore()->get('groupPolicyBootTimeInMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupPolicyBootTimeInMs'");
    }

    /**
     * Gets the groupPolicyLoginTimeInMs property value. The user experience analytics device group policy login time in milliseconds.
     * @return int|null
    */
    public function getGroupPolicyLoginTimeInMs(): ?int {
        $val = $this->getBackingStore()->get('groupPolicyLoginTimeInMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupPolicyLoginTimeInMs'");
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
     * Gets the loginScore property value. The user experience analytics device login score.
     * @return int|null
    */
    public function getLoginScore(): ?int {
        $val = $this->getBackingStore()->get('loginScore');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'loginScore'");
    }

    /**
     * Gets the manufacturer property value. The user experience analytics device manufacturer.
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
     * Gets the model property value. The user experience analytics device model.
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
     * Gets the modelStartupPerformanceScore property value. The user experience analytics model level startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getModelStartupPerformanceScore(): ?float {
        $val = $this->getBackingStore()->get('modelStartupPerformanceScore');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modelStartupPerformanceScore'");
    }

    /**
     * Gets the operatingSystemVersion property value. The user experience analytics device Operating System version.
     * @return string|null
    */
    public function getOperatingSystemVersion(): ?string {
        $val = $this->getBackingStore()->get('operatingSystemVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operatingSystemVersion'");
    }

    /**
     * Gets the responsiveDesktopTimeInMs property value. The user experience analytics responsive desktop time in milliseconds.
     * @return int|null
    */
    public function getResponsiveDesktopTimeInMs(): ?int {
        $val = $this->getBackingStore()->get('responsiveDesktopTimeInMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'responsiveDesktopTimeInMs'");
    }

    /**
     * Gets the restartCount property value. Number of Restarts in the last 30 days. Valid values 0 to 9999999
     * @return int|null
    */
    public function getRestartCount(): ?int {
        $val = $this->getBackingStore()->get('restartCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restartCount'");
    }

    /**
     * Gets the startupPerformanceScore property value. The user experience analytics device startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getStartupPerformanceScore(): ?float {
        $val = $this->getBackingStore()->get('startupPerformanceScore');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startupPerformanceScore'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeFloatValue('averageBlueScreens', $this->getAverageBlueScreens());
        $writer->writeFloatValue('averageRestarts', $this->getAverageRestarts());
        $writer->writeIntegerValue('blueScreenCount', $this->getBlueScreenCount());
        $writer->writeIntegerValue('bootScore', $this->getBootScore());
        $writer->writeIntegerValue('coreBootTimeInMs', $this->getCoreBootTimeInMs());
        $writer->writeIntegerValue('coreLoginTimeInMs', $this->getCoreLoginTimeInMs());
        $writer->writeIntegerValue('deviceCount', $this->getDeviceCount());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeEnumValue('diskType', $this->getDiskType());
        $writer->writeIntegerValue('groupPolicyBootTimeInMs', $this->getGroupPolicyBootTimeInMs());
        $writer->writeIntegerValue('groupPolicyLoginTimeInMs', $this->getGroupPolicyLoginTimeInMs());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeIntegerValue('loginScore', $this->getLoginScore());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeFloatValue('modelStartupPerformanceScore', $this->getModelStartupPerformanceScore());
        $writer->writeStringValue('operatingSystemVersion', $this->getOperatingSystemVersion());
        $writer->writeIntegerValue('responsiveDesktopTimeInMs', $this->getResponsiveDesktopTimeInMs());
        $writer->writeIntegerValue('restartCount', $this->getRestartCount());
        $writer->writeFloatValue('startupPerformanceScore', $this->getStartupPerformanceScore());
    }

    /**
     * Sets the averageBlueScreens property value. Average (mean) number of Blue Screens per device in the last 30 days. Valid values 0 to 9999999
     * @param float|null $value Value to set for the averageBlueScreens property.
    */
    public function setAverageBlueScreens(?float $value): void {
        $this->getBackingStore()->set('averageBlueScreens', $value);
    }

    /**
     * Sets the averageRestarts property value. Average (mean) number of Restarts per device in the last 30 days. Valid values 0 to 9999999
     * @param float|null $value Value to set for the averageRestarts property.
    */
    public function setAverageRestarts(?float $value): void {
        $this->getBackingStore()->set('averageRestarts', $value);
    }

    /**
     * Sets the blueScreenCount property value. Number of Blue Screens in the last 30 days. Valid values 0 to 9999999
     * @param int|null $value Value to set for the blueScreenCount property.
    */
    public function setBlueScreenCount(?int $value): void {
        $this->getBackingStore()->set('blueScreenCount', $value);
    }

    /**
     * Sets the bootScore property value. The user experience analytics device boot score.
     * @param int|null $value Value to set for the bootScore property.
    */
    public function setBootScore(?int $value): void {
        $this->getBackingStore()->set('bootScore', $value);
    }

    /**
     * Sets the coreBootTimeInMs property value. The user experience analytics device core boot time in milliseconds.
     * @param int|null $value Value to set for the coreBootTimeInMs property.
    */
    public function setCoreBootTimeInMs(?int $value): void {
        $this->getBackingStore()->set('coreBootTimeInMs', $value);
    }

    /**
     * Sets the coreLoginTimeInMs property value. The user experience analytics device core login time in milliseconds.
     * @param int|null $value Value to set for the coreLoginTimeInMs property.
    */
    public function setCoreLoginTimeInMs(?int $value): void {
        $this->getBackingStore()->set('coreLoginTimeInMs', $value);
    }

    /**
     * Sets the deviceCount property value. User experience analytics summarized device count.
     * @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value): void {
        $this->getBackingStore()->set('deviceCount', $value);
    }

    /**
     * Sets the deviceName property value. The user experience analytics device name.
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the diskType property value. The diskType property
     * @param DiskType|null $value Value to set for the diskType property.
    */
    public function setDiskType(?DiskType $value): void {
        $this->getBackingStore()->set('diskType', $value);
    }

    /**
     * Sets the groupPolicyBootTimeInMs property value. The user experience analytics device group policy boot time in milliseconds.
     * @param int|null $value Value to set for the groupPolicyBootTimeInMs property.
    */
    public function setGroupPolicyBootTimeInMs(?int $value): void {
        $this->getBackingStore()->set('groupPolicyBootTimeInMs', $value);
    }

    /**
     * Sets the groupPolicyLoginTimeInMs property value. The user experience analytics device group policy login time in milliseconds.
     * @param int|null $value Value to set for the groupPolicyLoginTimeInMs property.
    */
    public function setGroupPolicyLoginTimeInMs(?int $value): void {
        $this->getBackingStore()->set('groupPolicyLoginTimeInMs', $value);
    }

    /**
     * Sets the healthStatus property value. The healthStatus property
     * @param UserExperienceAnalyticsHealthState|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?UserExperienceAnalyticsHealthState $value): void {
        $this->getBackingStore()->set('healthStatus', $value);
    }

    /**
     * Sets the loginScore property value. The user experience analytics device login score.
     * @param int|null $value Value to set for the loginScore property.
    */
    public function setLoginScore(?int $value): void {
        $this->getBackingStore()->set('loginScore', $value);
    }

    /**
     * Sets the manufacturer property value. The user experience analytics device manufacturer.
     * @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value): void {
        $this->getBackingStore()->set('manufacturer', $value);
    }

    /**
     * Sets the model property value. The user experience analytics device model.
     * @param string|null $value Value to set for the model property.
    */
    public function setModel(?string $value): void {
        $this->getBackingStore()->set('model', $value);
    }

    /**
     * Sets the modelStartupPerformanceScore property value. The user experience analytics model level startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the modelStartupPerformanceScore property.
    */
    public function setModelStartupPerformanceScore(?float $value): void {
        $this->getBackingStore()->set('modelStartupPerformanceScore', $value);
    }

    /**
     * Sets the operatingSystemVersion property value. The user experience analytics device Operating System version.
     * @param string|null $value Value to set for the operatingSystemVersion property.
    */
    public function setOperatingSystemVersion(?string $value): void {
        $this->getBackingStore()->set('operatingSystemVersion', $value);
    }

    /**
     * Sets the responsiveDesktopTimeInMs property value. The user experience analytics responsive desktop time in milliseconds.
     * @param int|null $value Value to set for the responsiveDesktopTimeInMs property.
    */
    public function setResponsiveDesktopTimeInMs(?int $value): void {
        $this->getBackingStore()->set('responsiveDesktopTimeInMs', $value);
    }

    /**
     * Sets the restartCount property value. Number of Restarts in the last 30 days. Valid values 0 to 9999999
     * @param int|null $value Value to set for the restartCount property.
    */
    public function setRestartCount(?int $value): void {
        $this->getBackingStore()->set('restartCount', $value);
    }

    /**
     * Sets the startupPerformanceScore property value. The user experience analytics device startup performance score. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the startupPerformanceScore property.
    */
    public function setStartupPerformanceScore(?float $value): void {
        $this->getBackingStore()->set('startupPerformanceScore', $value);
    }

}
