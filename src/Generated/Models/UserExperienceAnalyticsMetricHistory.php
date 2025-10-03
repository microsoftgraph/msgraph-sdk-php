<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics metric history.
*/
class UserExperienceAnalyticsMetricHistory extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsMetricHistory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsMetricHistory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsMetricHistory {
        return new UserExperienceAnalyticsMetricHistory();
    }

    /**
     * Gets the deviceId property value. The Intune device id of the device.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'metricDateTime' => fn(ParseNode $n) => $o->setMetricDateTime($n->getDateTimeValue()),
            'metricType' => fn(ParseNode $n) => $o->setMetricType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the metricDateTime property value. The metric date time. The value cannot be modified and is automatically populated when the metric is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default.
     * @return DateTime|null
    */
    public function getMetricDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('metricDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'metricDateTime'");
    }

    /**
     * Gets the metricType property value. The user experience analytics metric type.
     * @return string|null
    */
    public function getMetricType(): ?string {
        $val = $this->getBackingStore()->get('metricType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'metricType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeDateTimeValue('metricDateTime', $this->getMetricDateTime());
        $writer->writeStringValue('metricType', $this->getMetricType());
    }

    /**
     * Sets the deviceId property value. The Intune device id of the device.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the metricDateTime property value. The metric date time. The value cannot be modified and is automatically populated when the metric is created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Returned by default.
     * @param DateTime|null $value Value to set for the metricDateTime property.
    */
    public function setMetricDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('metricDateTime', $value);
    }

    /**
     * Sets the metricType property value. The user experience analytics metric type.
     * @param string|null $value Value to set for the metricType property.
    */
    public function setMetricType(?string $value): void {
        $this->getBackingStore()->set('metricType', $value);
    }

}
