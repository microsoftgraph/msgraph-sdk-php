<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics application performance entity contains application performance by application version device id.
*/
class UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId extends Entity implements Parsable 
{
    /**
     * Instantiates a new userExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId {
        return new UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDeviceId();
    }

    /**
     * Gets the appCrashCount property value. The number of crashes for the app. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getAppCrashCount(): ?int {
        $val = $this->getBackingStore()->get('appCrashCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appCrashCount'");
    }

    /**
     * Gets the appDisplayName property value. The friendly name of the application.
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        $val = $this->getBackingStore()->get('appDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appDisplayName'");
    }

    /**
     * Gets the appName property value. The name of the application.
     * @return string|null
    */
    public function getAppName(): ?string {
        $val = $this->getBackingStore()->get('appName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appName'");
    }

    /**
     * Gets the appPublisher property value. The publisher of the application.
     * @return string|null
    */
    public function getAppPublisher(): ?string {
        $val = $this->getBackingStore()->get('appPublisher');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appPublisher'");
    }

    /**
     * Gets the appVersion property value. The version of the application.
     * @return string|null
    */
    public function getAppVersion(): ?string {
        $val = $this->getBackingStore()->get('appVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appVersion'");
    }

    /**
     * Gets the deviceDisplayName property value. The name of the device. Supports: $select, $OrderBy. Read-only.
     * @return string|null
    */
    public function getDeviceDisplayName(): ?string {
        $val = $this->getBackingStore()->get('deviceDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceDisplayName'");
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appCrashCount' => fn(ParseNode $n) => $o->setAppCrashCount($n->getIntegerValue()),
            'appDisplayName' => fn(ParseNode $n) => $o->setAppDisplayName($n->getStringValue()),
            'appName' => fn(ParseNode $n) => $o->setAppName($n->getStringValue()),
            'appPublisher' => fn(ParseNode $n) => $o->setAppPublisher($n->getStringValue()),
            'appVersion' => fn(ParseNode $n) => $o->setAppVersion($n->getStringValue()),
            'deviceDisplayName' => fn(ParseNode $n) => $o->setDeviceDisplayName($n->getStringValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'processedDateTime' => fn(ParseNode $n) => $o->setProcessedDateTime($n->getDateTimeValue()),
        ]);
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
     * Gets the processedDateTime property value. The date and time when the statistics were last computed. The value cannot be modified and is automatically populated when the statistics are computed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2022 would look like this: '2022-01-01T00:00:00Z'. Returned by default. Read-only.
     * @return DateTime|null
    */
    public function getProcessedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('processedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processedDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('appCrashCount', $this->getAppCrashCount());
        $writer->writeStringValue('appDisplayName', $this->getAppDisplayName());
        $writer->writeStringValue('appName', $this->getAppName());
        $writer->writeStringValue('appPublisher', $this->getAppPublisher());
        $writer->writeStringValue('appVersion', $this->getAppVersion());
        $writer->writeStringValue('deviceDisplayName', $this->getDeviceDisplayName());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('processedDateTime', $this->getProcessedDateTime());
    }

    /**
     * Sets the appCrashCount property value. The number of crashes for the app. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the appCrashCount property.
    */
    public function setAppCrashCount(?int $value): void {
        $this->getBackingStore()->set('appCrashCount', $value);
    }

    /**
     * Sets the appDisplayName property value. The friendly name of the application.
     * @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('appDisplayName', $value);
    }

    /**
     * Sets the appName property value. The name of the application.
     * @param string|null $value Value to set for the appName property.
    */
    public function setAppName(?string $value): void {
        $this->getBackingStore()->set('appName', $value);
    }

    /**
     * Sets the appPublisher property value. The publisher of the application.
     * @param string|null $value Value to set for the appPublisher property.
    */
    public function setAppPublisher(?string $value): void {
        $this->getBackingStore()->set('appPublisher', $value);
    }

    /**
     * Sets the appVersion property value. The version of the application.
     * @param string|null $value Value to set for the appVersion property.
    */
    public function setAppVersion(?string $value): void {
        $this->getBackingStore()->set('appVersion', $value);
    }

    /**
     * Sets the deviceDisplayName property value. The name of the device. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the deviceDisplayName property.
    */
    public function setDeviceDisplayName(?string $value): void {
        $this->getBackingStore()->set('deviceDisplayName', $value);
    }

    /**
     * Sets the deviceId property value. The Intune device id of the device. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the processedDateTime property value. The date and time when the statistics were last computed. The value cannot be modified and is automatically populated when the statistics are computed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2022 would look like this: '2022-01-01T00:00:00Z'. Returned by default. Read-only.
     * @param DateTime|null $value Value to set for the processedDateTime property.
    */
    public function setProcessedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('processedDateTime', $value);
    }

}
