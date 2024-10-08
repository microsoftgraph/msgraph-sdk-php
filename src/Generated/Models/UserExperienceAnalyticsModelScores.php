<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics model scores entity consolidates the various Endpoint Analytics scores.
*/
class UserExperienceAnalyticsModelScores extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsModelScores and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsModelScores
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsModelScores {
        return new UserExperienceAnalyticsModelScores();
    }

    /**
     * Gets the appReliabilityScore property value. Indicates a score calculated from application health data to indicate when a device is having problems running one or more applications. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsModelScores_appReliabilityScore|null
    */
    public function getAppReliabilityScore(): ?UserExperienceAnalyticsModelScores_appReliabilityScore {
        $val = $this->getBackingStore()->get('appReliabilityScore');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsModelScores_appReliabilityScore) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appReliabilityScore'");
    }

    /**
     * Gets the batteryHealthScore property value. Indicates a calulated score indicating the health of the device's battery. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsModelScores_batteryHealthScore|null
    */
    public function getBatteryHealthScore(): ?UserExperienceAnalyticsModelScores_batteryHealthScore {
        $val = $this->getBackingStore()->get('batteryHealthScore');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsModelScores_batteryHealthScore) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'batteryHealthScore'");
    }

    /**
     * Gets the endpointAnalyticsScore property value. Indicates a weighted average of the various scores. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsModelScores_endpointAnalyticsScore|null
    */
    public function getEndpointAnalyticsScore(): ?UserExperienceAnalyticsModelScores_endpointAnalyticsScore {
        $val = $this->getBackingStore()->get('endpointAnalyticsScore');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsModelScores_endpointAnalyticsScore) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endpointAnalyticsScore'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appReliabilityScore' => fn(ParseNode $n) => $o->setAppReliabilityScore($n->getObjectValue([UserExperienceAnalyticsModelScores_appReliabilityScore::class, 'createFromDiscriminatorValue'])),
            'batteryHealthScore' => fn(ParseNode $n) => $o->setBatteryHealthScore($n->getObjectValue([UserExperienceAnalyticsModelScores_batteryHealthScore::class, 'createFromDiscriminatorValue'])),
            'endpointAnalyticsScore' => fn(ParseNode $n) => $o->setEndpointAnalyticsScore($n->getObjectValue([UserExperienceAnalyticsModelScores_endpointAnalyticsScore::class, 'createFromDiscriminatorValue'])),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(UserExperienceAnalyticsHealthState::class)),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'modelDeviceCount' => fn(ParseNode $n) => $o->setModelDeviceCount($n->getIntegerValue()),
            'startupPerformanceScore' => fn(ParseNode $n) => $o->setStartupPerformanceScore($n->getObjectValue([UserExperienceAnalyticsModelScores_startupPerformanceScore::class, 'createFromDiscriminatorValue'])),
            'workFromAnywhereScore' => fn(ParseNode $n) => $o->setWorkFromAnywhereScore($n->getObjectValue([UserExperienceAnalyticsModelScores_workFromAnywhereScore::class, 'createFromDiscriminatorValue'])),
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
     * Gets the manufacturer property value. The manufacturer name of the device. Examples: Microsoft Corporation, HP, Lenovo. Supports: $select, $OrderBy. Read-only.
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
     * Gets the modelDeviceCount property value. Indicates unique devices count of given model in a consolidated report. Supports: $select, $OrderBy. Read-only. Valid values -9.22337203685478E+18 to 9.22337203685478E+18
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
     * Gets the startupPerformanceScore property value. Indicates a weighted average of boot score and logon score used for measuring startup performance. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsModelScores_startupPerformanceScore|null
    */
    public function getStartupPerformanceScore(): ?UserExperienceAnalyticsModelScores_startupPerformanceScore {
        $val = $this->getBackingStore()->get('startupPerformanceScore');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsModelScores_startupPerformanceScore) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startupPerformanceScore'");
    }

    /**
     * Gets the workFromAnywhereScore property value. Indicates a weighted score of the work from anywhere on a device level. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return UserExperienceAnalyticsModelScores_workFromAnywhereScore|null
    */
    public function getWorkFromAnywhereScore(): ?UserExperienceAnalyticsModelScores_workFromAnywhereScore {
        $val = $this->getBackingStore()->get('workFromAnywhereScore');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsModelScores_workFromAnywhereScore) {
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
        $writer->writeObjectValue('appReliabilityScore', $this->getAppReliabilityScore());
        $writer->writeObjectValue('batteryHealthScore', $this->getBatteryHealthScore());
        $writer->writeObjectValue('endpointAnalyticsScore', $this->getEndpointAnalyticsScore());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeIntegerValue('modelDeviceCount', $this->getModelDeviceCount());
        $writer->writeObjectValue('startupPerformanceScore', $this->getStartupPerformanceScore());
        $writer->writeObjectValue('workFromAnywhereScore', $this->getWorkFromAnywhereScore());
    }

    /**
     * Sets the appReliabilityScore property value. Indicates a score calculated from application health data to indicate when a device is having problems running one or more applications. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsModelScores_appReliabilityScore|null $value Value to set for the appReliabilityScore property.
    */
    public function setAppReliabilityScore(?UserExperienceAnalyticsModelScores_appReliabilityScore $value): void {
        $this->getBackingStore()->set('appReliabilityScore', $value);
    }

    /**
     * Sets the batteryHealthScore property value. Indicates a calulated score indicating the health of the device's battery. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsModelScores_batteryHealthScore|null $value Value to set for the batteryHealthScore property.
    */
    public function setBatteryHealthScore(?UserExperienceAnalyticsModelScores_batteryHealthScore $value): void {
        $this->getBackingStore()->set('batteryHealthScore', $value);
    }

    /**
     * Sets the endpointAnalyticsScore property value. Indicates a weighted average of the various scores. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsModelScores_endpointAnalyticsScore|null $value Value to set for the endpointAnalyticsScore property.
    */
    public function setEndpointAnalyticsScore(?UserExperienceAnalyticsModelScores_endpointAnalyticsScore $value): void {
        $this->getBackingStore()->set('endpointAnalyticsScore', $value);
    }

    /**
     * Sets the healthStatus property value. The healthStatus property
     * @param UserExperienceAnalyticsHealthState|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?UserExperienceAnalyticsHealthState $value): void {
        $this->getBackingStore()->set('healthStatus', $value);
    }

    /**
     * Sets the manufacturer property value. The manufacturer name of the device. Examples: Microsoft Corporation, HP, Lenovo. Supports: $select, $OrderBy. Read-only.
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
     * Sets the modelDeviceCount property value. Indicates unique devices count of given model in a consolidated report. Supports: $select, $OrderBy. Read-only. Valid values -9.22337203685478E+18 to 9.22337203685478E+18
     * @param int|null $value Value to set for the modelDeviceCount property.
    */
    public function setModelDeviceCount(?int $value): void {
        $this->getBackingStore()->set('modelDeviceCount', $value);
    }

    /**
     * Sets the startupPerformanceScore property value. Indicates a weighted average of boot score and logon score used for measuring startup performance. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsModelScores_startupPerformanceScore|null $value Value to set for the startupPerformanceScore property.
    */
    public function setStartupPerformanceScore(?UserExperienceAnalyticsModelScores_startupPerformanceScore $value): void {
        $this->getBackingStore()->set('startupPerformanceScore', $value);
    }

    /**
     * Sets the workFromAnywhereScore property value. Indicates a weighted score of the work from anywhere on a device level. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param UserExperienceAnalyticsModelScores_workFromAnywhereScore|null $value Value to set for the workFromAnywhereScore property.
    */
    public function setWorkFromAnywhereScore(?UserExperienceAnalyticsModelScores_workFromAnywhereScore $value): void {
        $this->getBackingStore()->set('workFromAnywhereScore', $value);
    }

}
