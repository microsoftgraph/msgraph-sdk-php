<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics device startup history entity contains device boot performance history details.
*/
class UserExperienceAnalyticsDeviceStartupHistory extends Entity implements Parsable 
{
    /**
     * Instantiates a new userExperienceAnalyticsDeviceStartupHistory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsDeviceStartupHistory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsDeviceStartupHistory {
        return new UserExperienceAnalyticsDeviceStartupHistory();
    }

    /**
     * Gets the coreBootTimeInMs property value. The device core boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
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
     * Gets the coreLoginTimeInMs property value. The device core login time in milliseconds. Supports: $select, $OrderBy. Read-only.
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
     * Gets the featureUpdateBootTimeInMs property value. The impact of device feature updates on boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
     * @return int|null
    */
    public function getFeatureUpdateBootTimeInMs(): ?int {
        $val = $this->getBackingStore()->get('featureUpdateBootTimeInMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'featureUpdateBootTimeInMs'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'coreBootTimeInMs' => fn(ParseNode $n) => $o->setCoreBootTimeInMs($n->getIntegerValue()),
            'coreLoginTimeInMs' => fn(ParseNode $n) => $o->setCoreLoginTimeInMs($n->getIntegerValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'featureUpdateBootTimeInMs' => fn(ParseNode $n) => $o->setFeatureUpdateBootTimeInMs($n->getIntegerValue()),
            'groupPolicyBootTimeInMs' => fn(ParseNode $n) => $o->setGroupPolicyBootTimeInMs($n->getIntegerValue()),
            'groupPolicyLoginTimeInMs' => fn(ParseNode $n) => $o->setGroupPolicyLoginTimeInMs($n->getIntegerValue()),
            'isFeatureUpdate' => fn(ParseNode $n) => $o->setIsFeatureUpdate($n->getBooleanValue()),
            'isFirstLogin' => fn(ParseNode $n) => $o->setIsFirstLogin($n->getBooleanValue()),
            'operatingSystemVersion' => fn(ParseNode $n) => $o->setOperatingSystemVersion($n->getStringValue()),
            'responsiveDesktopTimeInMs' => fn(ParseNode $n) => $o->setResponsiveDesktopTimeInMs($n->getIntegerValue()),
            'restartCategory' => fn(ParseNode $n) => $o->setRestartCategory($n->getEnumValue(UserExperienceAnalyticsOperatingSystemRestartCategory::class)),
            'restartFaultBucket' => fn(ParseNode $n) => $o->setRestartFaultBucket($n->getStringValue()),
            'restartStopCode' => fn(ParseNode $n) => $o->setRestartStopCode($n->getStringValue()),
            'startTime' => fn(ParseNode $n) => $o->setStartTime($n->getDateTimeValue()),
            'totalBootTimeInMs' => fn(ParseNode $n) => $o->setTotalBootTimeInMs($n->getIntegerValue()),
            'totalLoginTimeInMs' => fn(ParseNode $n) => $o->setTotalLoginTimeInMs($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the groupPolicyBootTimeInMs property value. The impact of device group policy client on boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
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
     * Gets the groupPolicyLoginTimeInMs property value. The impact of device group policy client on login time in milliseconds. Supports: $select, $OrderBy. Read-only.
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
     * Gets the isFeatureUpdate property value. When TRUE, indicates the device boot record is associated with feature updates. When FALSE, indicates the device boot record is not associated with feature updates. Supports: $select, $OrderBy. Read-only.
     * @return bool|null
    */
    public function getIsFeatureUpdate(): ?bool {
        $val = $this->getBackingStore()->get('isFeatureUpdate');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isFeatureUpdate'");
    }

    /**
     * Gets the isFirstLogin property value. When TRUE, indicates the device login is the first login after a reboot. When FALSE, indicates the device login is not the first login after a reboot. Supports: $select, $OrderBy. Read-only.
     * @return bool|null
    */
    public function getIsFirstLogin(): ?bool {
        $val = $this->getBackingStore()->get('isFirstLogin');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isFirstLogin'");
    }

    /**
     * Gets the operatingSystemVersion property value. The user experience analytics device boot record's operating system version. Supports: $select, $OrderBy. Read-only.
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
     * Gets the responsiveDesktopTimeInMs property value. The time for desktop to become responsive during login process in milliseconds. Supports: $select, $OrderBy. Read-only.
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
     * Gets the restartCategory property value. Operating System restart category.
     * @return UserExperienceAnalyticsOperatingSystemRestartCategory|null
    */
    public function getRestartCategory(): ?UserExperienceAnalyticsOperatingSystemRestartCategory {
        $val = $this->getBackingStore()->get('restartCategory');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsOperatingSystemRestartCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restartCategory'");
    }

    /**
     * Gets the restartFaultBucket property value. OS restart fault bucket. The fault bucket is used to find additional information about a system crash. Supports: $select, $OrderBy. Read-only.
     * @return string|null
    */
    public function getRestartFaultBucket(): ?string {
        $val = $this->getBackingStore()->get('restartFaultBucket');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restartFaultBucket'");
    }

    /**
     * Gets the restartStopCode property value. OS restart stop code. This shows the bug check code which can be used to look up the blue screen reason. Supports: $select, $OrderBy. Read-only.
     * @return string|null
    */
    public function getRestartStopCode(): ?string {
        $val = $this->getBackingStore()->get('restartStopCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restartStopCode'");
    }

    /**
     * Gets the startTime property value. The device boot start time. The value cannot be modified and is automatically populated when the device performs a reboot. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2022 would look like this: '2022-01-01T00:00:00Z'. Returned by default. Read-only.
     * @return DateTime|null
    */
    public function getStartTime(): ?DateTime {
        $val = $this->getBackingStore()->get('startTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startTime'");
    }

    /**
     * Gets the totalBootTimeInMs property value. The device total boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
     * @return int|null
    */
    public function getTotalBootTimeInMs(): ?int {
        $val = $this->getBackingStore()->get('totalBootTimeInMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalBootTimeInMs'");
    }

    /**
     * Gets the totalLoginTimeInMs property value. The device total login time in milliseconds. Supports: $select, $OrderBy. Read-only.
     * @return int|null
    */
    public function getTotalLoginTimeInMs(): ?int {
        $val = $this->getBackingStore()->get('totalLoginTimeInMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalLoginTimeInMs'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('coreBootTimeInMs', $this->getCoreBootTimeInMs());
        $writer->writeIntegerValue('coreLoginTimeInMs', $this->getCoreLoginTimeInMs());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeIntegerValue('featureUpdateBootTimeInMs', $this->getFeatureUpdateBootTimeInMs());
        $writer->writeIntegerValue('groupPolicyBootTimeInMs', $this->getGroupPolicyBootTimeInMs());
        $writer->writeIntegerValue('groupPolicyLoginTimeInMs', $this->getGroupPolicyLoginTimeInMs());
        $writer->writeBooleanValue('isFeatureUpdate', $this->getIsFeatureUpdate());
        $writer->writeBooleanValue('isFirstLogin', $this->getIsFirstLogin());
        $writer->writeStringValue('operatingSystemVersion', $this->getOperatingSystemVersion());
        $writer->writeIntegerValue('responsiveDesktopTimeInMs', $this->getResponsiveDesktopTimeInMs());
        $writer->writeEnumValue('restartCategory', $this->getRestartCategory());
        $writer->writeStringValue('restartFaultBucket', $this->getRestartFaultBucket());
        $writer->writeStringValue('restartStopCode', $this->getRestartStopCode());
        $writer->writeDateTimeValue('startTime', $this->getStartTime());
        $writer->writeIntegerValue('totalBootTimeInMs', $this->getTotalBootTimeInMs());
        $writer->writeIntegerValue('totalLoginTimeInMs', $this->getTotalLoginTimeInMs());
    }

    /**
     * Sets the coreBootTimeInMs property value. The device core boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
     * @param int|null $value Value to set for the coreBootTimeInMs property.
    */
    public function setCoreBootTimeInMs(?int $value): void {
        $this->getBackingStore()->set('coreBootTimeInMs', $value);
    }

    /**
     * Sets the coreLoginTimeInMs property value. The device core login time in milliseconds. Supports: $select, $OrderBy. Read-only.
     * @param int|null $value Value to set for the coreLoginTimeInMs property.
    */
    public function setCoreLoginTimeInMs(?int $value): void {
        $this->getBackingStore()->set('coreLoginTimeInMs', $value);
    }

    /**
     * Sets the deviceId property value. The Intune device id of the device. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the featureUpdateBootTimeInMs property value. The impact of device feature updates on boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
     * @param int|null $value Value to set for the featureUpdateBootTimeInMs property.
    */
    public function setFeatureUpdateBootTimeInMs(?int $value): void {
        $this->getBackingStore()->set('featureUpdateBootTimeInMs', $value);
    }

    /**
     * Sets the groupPolicyBootTimeInMs property value. The impact of device group policy client on boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
     * @param int|null $value Value to set for the groupPolicyBootTimeInMs property.
    */
    public function setGroupPolicyBootTimeInMs(?int $value): void {
        $this->getBackingStore()->set('groupPolicyBootTimeInMs', $value);
    }

    /**
     * Sets the groupPolicyLoginTimeInMs property value. The impact of device group policy client on login time in milliseconds. Supports: $select, $OrderBy. Read-only.
     * @param int|null $value Value to set for the groupPolicyLoginTimeInMs property.
    */
    public function setGroupPolicyLoginTimeInMs(?int $value): void {
        $this->getBackingStore()->set('groupPolicyLoginTimeInMs', $value);
    }

    /**
     * Sets the isFeatureUpdate property value. When TRUE, indicates the device boot record is associated with feature updates. When FALSE, indicates the device boot record is not associated with feature updates. Supports: $select, $OrderBy. Read-only.
     * @param bool|null $value Value to set for the isFeatureUpdate property.
    */
    public function setIsFeatureUpdate(?bool $value): void {
        $this->getBackingStore()->set('isFeatureUpdate', $value);
    }

    /**
     * Sets the isFirstLogin property value. When TRUE, indicates the device login is the first login after a reboot. When FALSE, indicates the device login is not the first login after a reboot. Supports: $select, $OrderBy. Read-only.
     * @param bool|null $value Value to set for the isFirstLogin property.
    */
    public function setIsFirstLogin(?bool $value): void {
        $this->getBackingStore()->set('isFirstLogin', $value);
    }

    /**
     * Sets the operatingSystemVersion property value. The user experience analytics device boot record's operating system version. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the operatingSystemVersion property.
    */
    public function setOperatingSystemVersion(?string $value): void {
        $this->getBackingStore()->set('operatingSystemVersion', $value);
    }

    /**
     * Sets the responsiveDesktopTimeInMs property value. The time for desktop to become responsive during login process in milliseconds. Supports: $select, $OrderBy. Read-only.
     * @param int|null $value Value to set for the responsiveDesktopTimeInMs property.
    */
    public function setResponsiveDesktopTimeInMs(?int $value): void {
        $this->getBackingStore()->set('responsiveDesktopTimeInMs', $value);
    }

    /**
     * Sets the restartCategory property value. Operating System restart category.
     * @param UserExperienceAnalyticsOperatingSystemRestartCategory|null $value Value to set for the restartCategory property.
    */
    public function setRestartCategory(?UserExperienceAnalyticsOperatingSystemRestartCategory $value): void {
        $this->getBackingStore()->set('restartCategory', $value);
    }

    /**
     * Sets the restartFaultBucket property value. OS restart fault bucket. The fault bucket is used to find additional information about a system crash. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the restartFaultBucket property.
    */
    public function setRestartFaultBucket(?string $value): void {
        $this->getBackingStore()->set('restartFaultBucket', $value);
    }

    /**
     * Sets the restartStopCode property value. OS restart stop code. This shows the bug check code which can be used to look up the blue screen reason. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the restartStopCode property.
    */
    public function setRestartStopCode(?string $value): void {
        $this->getBackingStore()->set('restartStopCode', $value);
    }

    /**
     * Sets the startTime property value. The device boot start time. The value cannot be modified and is automatically populated when the device performs a reboot. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2022 would look like this: '2022-01-01T00:00:00Z'. Returned by default. Read-only.
     * @param DateTime|null $value Value to set for the startTime property.
    */
    public function setStartTime(?DateTime $value): void {
        $this->getBackingStore()->set('startTime', $value);
    }

    /**
     * Sets the totalBootTimeInMs property value. The device total boot time in milliseconds. Supports: $select, $OrderBy. Read-only.
     * @param int|null $value Value to set for the totalBootTimeInMs property.
    */
    public function setTotalBootTimeInMs(?int $value): void {
        $this->getBackingStore()->set('totalBootTimeInMs', $value);
    }

    /**
     * Sets the totalLoginTimeInMs property value. The device total login time in milliseconds. Supports: $select, $OrderBy. Read-only.
     * @param int|null $value Value to set for the totalLoginTimeInMs property.
    */
    public function setTotalLoginTimeInMs(?int $value): void {
        $this->getBackingStore()->set('totalLoginTimeInMs', $value);
    }

}
