<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics device OS version performance entity contains OS version performance details.
*/
class UserExperienceAnalyticsAppHealthOSVersionPerformance extends Entity implements Parsable 
{
    /**
     * Instantiates a new userExperienceAnalyticsAppHealthOSVersionPerformance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsAppHealthOSVersionPerformance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsAppHealthOSVersionPerformance {
        return new UserExperienceAnalyticsAppHealthOSVersionPerformance();
    }

    /**
     * Gets the activeDeviceCount property value. The number of active devices for the OS version. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getActiveDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('activeDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activeDeviceCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'activeDeviceCount' => fn(ParseNode $n) => $o->setActiveDeviceCount($n->getIntegerValue()),
            'meanTimeToFailureInMinutes' => fn(ParseNode $n) => $o->setMeanTimeToFailureInMinutes($n->getIntegerValue()),
            'osBuildNumber' => fn(ParseNode $n) => $o->setOsBuildNumber($n->getStringValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'osVersionAppHealthScore' => fn(ParseNode $n) => $o->setOsVersionAppHealthScore($n->getFloatValue()),
        ]);
    }

    /**
     * Gets the meanTimeToFailureInMinutes property value. The mean time to failure for the application in minutes. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getMeanTimeToFailureInMinutes(): ?int {
        $val = $this->getBackingStore()->get('meanTimeToFailureInMinutes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'meanTimeToFailureInMinutes'");
    }

    /**
     * Gets the osBuildNumber property value. The OS build number installed on the device. Supports: $select, $OrderBy. Read-only.
     * @return string|null
    */
    public function getOsBuildNumber(): ?string {
        $val = $this->getBackingStore()->get('osBuildNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osBuildNumber'");
    }

    /**
     * Gets the osVersion property value. The OS version installed on the device. Supports: $select, $OrderBy. Read-only.
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
     * Gets the osVersionAppHealthScore property value. The application health score of the OS version. Valid values 0 to 100. Supports: $filter, $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getOsVersionAppHealthScore(): ?float {
        $val = $this->getBackingStore()->get('osVersionAppHealthScore');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osVersionAppHealthScore'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('activeDeviceCount', $this->getActiveDeviceCount());
        $writer->writeIntegerValue('meanTimeToFailureInMinutes', $this->getMeanTimeToFailureInMinutes());
        $writer->writeStringValue('osBuildNumber', $this->getOsBuildNumber());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
        $writer->writeFloatValue('osVersionAppHealthScore', $this->getOsVersionAppHealthScore());
    }

    /**
     * Sets the activeDeviceCount property value. The number of active devices for the OS version. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the activeDeviceCount property.
    */
    public function setActiveDeviceCount(?int $value): void {
        $this->getBackingStore()->set('activeDeviceCount', $value);
    }

    /**
     * Sets the meanTimeToFailureInMinutes property value. The mean time to failure for the application in minutes. Valid values 0 to 2147483647. Supports: $filter, $select, $OrderBy. Read-only. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the meanTimeToFailureInMinutes property.
    */
    public function setMeanTimeToFailureInMinutes(?int $value): void {
        $this->getBackingStore()->set('meanTimeToFailureInMinutes', $value);
    }

    /**
     * Sets the osBuildNumber property value. The OS build number installed on the device. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the osBuildNumber property.
    */
    public function setOsBuildNumber(?string $value): void {
        $this->getBackingStore()->set('osBuildNumber', $value);
    }

    /**
     * Sets the osVersion property value. The OS version installed on the device. Supports: $select, $OrderBy. Read-only.
     * @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the osVersionAppHealthScore property value. The application health score of the OS version. Valid values 0 to 100. Supports: $filter, $select, $OrderBy. Read-only. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the osVersionAppHealthScore property.
    */
    public function setOsVersionAppHealthScore(?float $value): void {
        $this->getBackingStore()->set('osVersionAppHealthScore', $value);
    }

}
