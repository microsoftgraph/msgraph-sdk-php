<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics baseline entity contains baseline values against which to compare the user experience analytics scores.
*/
class UserExperienceAnalyticsBaseline extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsBaseline and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsBaseline
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsBaseline {
        return new UserExperienceAnalyticsBaseline();
    }

    /**
     * Gets the appHealthMetrics property value. The scores and insights for the application health metrics.
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getAppHealthMetrics(): ?UserExperienceAnalyticsCategory {
        $val = $this->getBackingStore()->get('appHealthMetrics');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appHealthMetrics'");
    }

    /**
     * Gets the batteryHealthMetrics property value. The scores and insights for the battery health metrics.
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getBatteryHealthMetrics(): ?UserExperienceAnalyticsCategory {
        $val = $this->getBackingStore()->get('batteryHealthMetrics');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'batteryHealthMetrics'");
    }

    /**
     * Gets the bestPracticesMetrics property value. The scores and insights for the best practices metrics.
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getBestPracticesMetrics(): ?UserExperienceAnalyticsCategory {
        $val = $this->getBackingStore()->get('bestPracticesMetrics');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bestPracticesMetrics'");
    }

    /**
     * Gets the createdDateTime property value. The date the custom baseline was created. The value cannot be modified and is automatically populated when the baseline is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default.
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
     * Gets the deviceBootPerformanceMetrics property value. The scores and insights for the device boot performance metrics.
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getDeviceBootPerformanceMetrics(): ?UserExperienceAnalyticsCategory {
        $val = $this->getBackingStore()->get('deviceBootPerformanceMetrics');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceBootPerformanceMetrics'");
    }

    /**
     * Gets the displayName property value. The name of the baseline.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appHealthMetrics' => fn(ParseNode $n) => $o->setAppHealthMetrics($n->getObjectValue([UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'])),
            'batteryHealthMetrics' => fn(ParseNode $n) => $o->setBatteryHealthMetrics($n->getObjectValue([UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'])),
            'bestPracticesMetrics' => fn(ParseNode $n) => $o->setBestPracticesMetrics($n->getObjectValue([UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deviceBootPerformanceMetrics' => fn(ParseNode $n) => $o->setDeviceBootPerformanceMetrics($n->getObjectValue([UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isBuiltIn' => fn(ParseNode $n) => $o->setIsBuiltIn($n->getBooleanValue()),
            'rebootAnalyticsMetrics' => fn(ParseNode $n) => $o->setRebootAnalyticsMetrics($n->getObjectValue([UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'])),
            'resourcePerformanceMetrics' => fn(ParseNode $n) => $o->setResourcePerformanceMetrics($n->getObjectValue([UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'])),
            'workFromAnywhereMetrics' => fn(ParseNode $n) => $o->setWorkFromAnywhereMetrics($n->getObjectValue([UserExperienceAnalyticsCategory::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isBuiltIn property value. When TRUE, indicates the current baseline is the commercial median baseline. When FALSE, indicates it is a custom baseline. FALSE by default.
     * @return bool|null
    */
    public function getIsBuiltIn(): ?bool {
        $val = $this->getBackingStore()->get('isBuiltIn');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isBuiltIn'");
    }

    /**
     * Gets the rebootAnalyticsMetrics property value. The scores and insights for the reboot analytics metrics.
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getRebootAnalyticsMetrics(): ?UserExperienceAnalyticsCategory {
        $val = $this->getBackingStore()->get('rebootAnalyticsMetrics');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rebootAnalyticsMetrics'");
    }

    /**
     * Gets the resourcePerformanceMetrics property value. The scores and insights for the resource performance metrics.
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getResourcePerformanceMetrics(): ?UserExperienceAnalyticsCategory {
        $val = $this->getBackingStore()->get('resourcePerformanceMetrics');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourcePerformanceMetrics'");
    }

    /**
     * Gets the workFromAnywhereMetrics property value. The scores and insights for the work from anywhere metrics.
     * @return UserExperienceAnalyticsCategory|null
    */
    public function getWorkFromAnywhereMetrics(): ?UserExperienceAnalyticsCategory {
        $val = $this->getBackingStore()->get('workFromAnywhereMetrics');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workFromAnywhereMetrics'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('appHealthMetrics', $this->getAppHealthMetrics());
        $writer->writeObjectValue('batteryHealthMetrics', $this->getBatteryHealthMetrics());
        $writer->writeObjectValue('bestPracticesMetrics', $this->getBestPracticesMetrics());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('deviceBootPerformanceMetrics', $this->getDeviceBootPerformanceMetrics());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isBuiltIn', $this->getIsBuiltIn());
        $writer->writeObjectValue('rebootAnalyticsMetrics', $this->getRebootAnalyticsMetrics());
        $writer->writeObjectValue('resourcePerformanceMetrics', $this->getResourcePerformanceMetrics());
        $writer->writeObjectValue('workFromAnywhereMetrics', $this->getWorkFromAnywhereMetrics());
    }

    /**
     * Sets the appHealthMetrics property value. The scores and insights for the application health metrics.
     * @param UserExperienceAnalyticsCategory|null $value Value to set for the appHealthMetrics property.
    */
    public function setAppHealthMetrics(?UserExperienceAnalyticsCategory $value): void {
        $this->getBackingStore()->set('appHealthMetrics', $value);
    }

    /**
     * Sets the batteryHealthMetrics property value. The scores and insights for the battery health metrics.
     * @param UserExperienceAnalyticsCategory|null $value Value to set for the batteryHealthMetrics property.
    */
    public function setBatteryHealthMetrics(?UserExperienceAnalyticsCategory $value): void {
        $this->getBackingStore()->set('batteryHealthMetrics', $value);
    }

    /**
     * Sets the bestPracticesMetrics property value. The scores and insights for the best practices metrics.
     * @param UserExperienceAnalyticsCategory|null $value Value to set for the bestPracticesMetrics property.
    */
    public function setBestPracticesMetrics(?UserExperienceAnalyticsCategory $value): void {
        $this->getBackingStore()->set('bestPracticesMetrics', $value);
    }

    /**
     * Sets the createdDateTime property value. The date the custom baseline was created. The value cannot be modified and is automatically populated when the baseline is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deviceBootPerformanceMetrics property value. The scores and insights for the device boot performance metrics.
     * @param UserExperienceAnalyticsCategory|null $value Value to set for the deviceBootPerformanceMetrics property.
    */
    public function setDeviceBootPerformanceMetrics(?UserExperienceAnalyticsCategory $value): void {
        $this->getBackingStore()->set('deviceBootPerformanceMetrics', $value);
    }

    /**
     * Sets the displayName property value. The name of the baseline.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isBuiltIn property value. When TRUE, indicates the current baseline is the commercial median baseline. When FALSE, indicates it is a custom baseline. FALSE by default.
     * @param bool|null $value Value to set for the isBuiltIn property.
    */
    public function setIsBuiltIn(?bool $value): void {
        $this->getBackingStore()->set('isBuiltIn', $value);
    }

    /**
     * Sets the rebootAnalyticsMetrics property value. The scores and insights for the reboot analytics metrics.
     * @param UserExperienceAnalyticsCategory|null $value Value to set for the rebootAnalyticsMetrics property.
    */
    public function setRebootAnalyticsMetrics(?UserExperienceAnalyticsCategory $value): void {
        $this->getBackingStore()->set('rebootAnalyticsMetrics', $value);
    }

    /**
     * Sets the resourcePerformanceMetrics property value. The scores and insights for the resource performance metrics.
     * @param UserExperienceAnalyticsCategory|null $value Value to set for the resourcePerformanceMetrics property.
    */
    public function setResourcePerformanceMetrics(?UserExperienceAnalyticsCategory $value): void {
        $this->getBackingStore()->set('resourcePerformanceMetrics', $value);
    }

    /**
     * Sets the workFromAnywhereMetrics property value. The scores and insights for the work from anywhere metrics.
     * @param UserExperienceAnalyticsCategory|null $value Value to set for the workFromAnywhereMetrics property.
    */
    public function setWorkFromAnywhereMetrics(?UserExperienceAnalyticsCategory $value): void {
        $this->getBackingStore()->set('workFromAnywhereMetrics', $value);
    }

}
