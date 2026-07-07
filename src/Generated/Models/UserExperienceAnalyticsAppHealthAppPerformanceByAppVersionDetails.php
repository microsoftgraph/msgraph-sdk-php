<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics application performance entity contains application performance by application version details.
*/
class UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails {
        return new UserExperienceAnalyticsAppHealthAppPerformanceByAppVersionDetails();
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
     * Gets the deviceCountWithCrashes property value. The total number of devices that have reported one or more application crashes for this application and version. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getDeviceCountWithCrashes(): ?int {
        $val = $this->getBackingStore()->get('deviceCountWithCrashes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceCountWithCrashes'");
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
            'deviceCountWithCrashes' => fn(ParseNode $n) => $o->setDeviceCountWithCrashes($n->getIntegerValue()),
            'isLatestUsedVersion' => fn(ParseNode $n) => $o->setIsLatestUsedVersion($n->getBooleanValue()),
            'isMostUsedVersion' => fn(ParseNode $n) => $o->setIsMostUsedVersion($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isLatestUsedVersion property value. When TRUE, indicates the version of application is the latest version for that application that is in use. When FALSE, indicates the version is not the latest version. FALSE by default. Supports: $select, $OrderBy.
     * @return bool|null
    */
    public function getIsLatestUsedVersion(): ?bool {
        $val = $this->getBackingStore()->get('isLatestUsedVersion');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isLatestUsedVersion'");
    }

    /**
     * Gets the isMostUsedVersion property value. When TRUE, indicates the version of application is the most used version for that application. When FALSE, indicates the version is not the most used version. FALSE by default. Supports: $select, $OrderBy. Read-only.
     * @return bool|null
    */
    public function getIsMostUsedVersion(): ?bool {
        $val = $this->getBackingStore()->get('isMostUsedVersion');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMostUsedVersion'");
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
        $writer->writeIntegerValue('deviceCountWithCrashes', $this->getDeviceCountWithCrashes());
        $writer->writeBooleanValue('isLatestUsedVersion', $this->getIsLatestUsedVersion());
        $writer->writeBooleanValue('isMostUsedVersion', $this->getIsMostUsedVersion());
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
     * Sets the deviceCountWithCrashes property value. The total number of devices that have reported one or more application crashes for this application and version. Valid values 0 to 2147483647. Supports: $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the deviceCountWithCrashes property.
    */
    public function setDeviceCountWithCrashes(?int $value): void {
        $this->getBackingStore()->set('deviceCountWithCrashes', $value);
    }

    /**
     * Sets the isLatestUsedVersion property value. When TRUE, indicates the version of application is the latest version for that application that is in use. When FALSE, indicates the version is not the latest version. FALSE by default. Supports: $select, $OrderBy.
     * @param bool|null $value Value to set for the isLatestUsedVersion property.
    */
    public function setIsLatestUsedVersion(?bool $value): void {
        $this->getBackingStore()->set('isLatestUsedVersion', $value);
    }

    /**
     * Sets the isMostUsedVersion property value. When TRUE, indicates the version of application is the most used version for that application. When FALSE, indicates the version is not the most used version. FALSE by default. Supports: $select, $OrderBy. Read-only.
     * @param bool|null $value Value to set for the isMostUsedVersion property.
    */
    public function setIsMostUsedVersion(?bool $value): void {
        $this->getBackingStore()->set('isMostUsedVersion', $value);
    }

}
