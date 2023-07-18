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
     * Instantiates a new userExperienceAnalyticsModelScores and sets the default values.
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
     * @return float|null
    */
    public function getAppReliabilityScore(): ?float {
        $val = $this->getBackingStore()->get('appReliabilityScore');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appReliabilityScore'");
    }

    /**
     * Gets the batteryHealthScore property value. Indicates a calulated score indicating the health of the device's battery. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getBatteryHealthScore(): ?float {
        $val = $this->getBackingStore()->get('batteryHealthScore');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'batteryHealthScore'");
    }

    /**
     * Gets the endpointAnalyticsScore property value. Indicates a weighted average of the various scores. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getEndpointAnalyticsScore(): ?float {
        $val = $this->getBackingStore()->get('endpointAnalyticsScore');
        if (is_null($val) || is_float($val)) {
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
            'appReliabilityScore' => fn(ParseNode $n) => $o->setAppReliabilityScore($n->getFloatValue()),
            'batteryHealthScore' => fn(ParseNode $n) => $o->setBatteryHealthScore($n->getFloatValue()),
            'endpointAnalyticsScore' => fn(ParseNode $n) => $o->setEndpointAnalyticsScore($n->getFloatValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(UserExperienceAnalyticsHealthState::class)),
            'manufacturer' => fn(ParseNode $n) => $o->setManufacturer($n->getStringValue()),
            'model' => fn(ParseNode $n) => $o->setModel($n->getStringValue()),
            'modelDeviceCount' => fn(ParseNode $n) => $o->setModelDeviceCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'startupPerformanceScore' => fn(ParseNode $n) => $o->setStartupPerformanceScore($n->getFloatValue()),
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
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the startupPerformanceScore property value. Indicates a weighted average of boot score and logon score used for measuring startup performance. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
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
     * Gets the workFromAnywhereScore property value. Indicates a weighted score of the work from anywhere on a device level. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
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
        $writer->writeFloatValue('appReliabilityScore', $this->getAppReliabilityScore());
        $writer->writeFloatValue('batteryHealthScore', $this->getBatteryHealthScore());
        $writer->writeFloatValue('endpointAnalyticsScore', $this->getEndpointAnalyticsScore());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeStringValue('manufacturer', $this->getManufacturer());
        $writer->writeStringValue('model', $this->getModel());
        $writer->writeIntegerValue('modelDeviceCount', $this->getModelDeviceCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeFloatValue('startupPerformanceScore', $this->getStartupPerformanceScore());
        $writer->writeFloatValue('workFromAnywhereScore', $this->getWorkFromAnywhereScore());
    }

    /**
     * Sets the appReliabilityScore property value. Indicates a score calculated from application health data to indicate when a device is having problems running one or more applications. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the appReliabilityScore property.
    */
    public function setAppReliabilityScore(?float $value): void {
        $this->getBackingStore()->set('appReliabilityScore', $value);
    }

    /**
     * Sets the batteryHealthScore property value. Indicates a calulated score indicating the health of the device's battery. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the batteryHealthScore property.
    */
    public function setBatteryHealthScore(?float $value): void {
        $this->getBackingStore()->set('batteryHealthScore', $value);
    }

    /**
     * Sets the endpointAnalyticsScore property value. Indicates a weighted average of the various scores. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the endpointAnalyticsScore property.
    */
    public function setEndpointAnalyticsScore(?float $value): void {
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the startupPerformanceScore property value. Indicates a weighted average of boot score and logon score used for measuring startup performance. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the startupPerformanceScore property.
    */
    public function setStartupPerformanceScore(?float $value): void {
        $this->getBackingStore()->set('startupPerformanceScore', $value);
    }

    /**
     * Sets the workFromAnywhereScore property value. Indicates a weighted score of the work from anywhere on a device level. Valid values range from 0-100. Value -1 means associated score is unavailable. A higher score indicates a healthier device. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the workFromAnywhereScore property.
    */
    public function setWorkFromAnywhereScore(?float $value): void {
        $this->getBackingStore()->set('workFromAnywhereScore', $value);
    }

}
