<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Event representing an enrollment failure.
*/
class EnrollmentTroubleshootingEvent extends DeviceManagementTroubleshootingEvent implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new enrollmentTroubleshootingEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EnrollmentTroubleshootingEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EnrollmentTroubleshootingEvent {
        return new EnrollmentTroubleshootingEvent();
    }

    /**
     * Gets the deviceId property value. Azure AD device identifier.
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
     * Gets the enrollmentType property value. Possible ways of adding a mobile device to management.
     * @return DeviceEnrollmentType|null
    */
    public function getEnrollmentType(): ?DeviceEnrollmentType {
        $val = $this->getBackingStore()->get('enrollmentType');
        if (is_null($val) || $val instanceof DeviceEnrollmentType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentType'");
    }

    /**
     * Gets the failureCategory property value. Top level failure categories for enrollment.
     * @return DeviceEnrollmentFailureReason|null
    */
    public function getFailureCategory(): ?DeviceEnrollmentFailureReason {
        $val = $this->getBackingStore()->get('failureCategory');
        if (is_null($val) || $val instanceof DeviceEnrollmentFailureReason) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failureCategory'");
    }

    /**
     * Gets the failureReason property value. Detailed failure reason.
     * @return string|null
    */
    public function getFailureReason(): ?string {
        $val = $this->getBackingStore()->get('failureReason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failureReason'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'enrollmentType' => fn(ParseNode $n) => $o->setEnrollmentType($n->getEnumValue(DeviceEnrollmentType::class)),
            'failureCategory' => fn(ParseNode $n) => $o->setFailureCategory($n->getEnumValue(DeviceEnrollmentFailureReason::class)),
            'failureReason' => fn(ParseNode $n) => $o->setFailureReason($n->getStringValue()),
            'managedDeviceIdentifier' => fn(ParseNode $n) => $o->setManagedDeviceIdentifier($n->getStringValue()),
            'operatingSystem' => fn(ParseNode $n) => $o->setOperatingSystem($n->getStringValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the managedDeviceIdentifier property value. Device identifier created or collected by Intune.
     * @return string|null
    */
    public function getManagedDeviceIdentifier(): ?string {
        $val = $this->getBackingStore()->get('managedDeviceIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managedDeviceIdentifier'");
    }

    /**
     * Gets the operatingSystem property value. Operating System.
     * @return string|null
    */
    public function getOperatingSystem(): ?string {
        $val = $this->getBackingStore()->get('operatingSystem');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operatingSystem'");
    }

    /**
     * Gets the osVersion property value. OS Version.
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
     * Gets the userId property value. Identifier for the user that tried to enroll the device.
     * @return string|null
    */
    public function getUserId(): ?string {
        $val = $this->getBackingStore()->get('userId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeEnumValue('enrollmentType', $this->getEnrollmentType());
        $writer->writeEnumValue('failureCategory', $this->getFailureCategory());
        $writer->writeStringValue('failureReason', $this->getFailureReason());
        $writer->writeStringValue('managedDeviceIdentifier', $this->getManagedDeviceIdentifier());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('operatingSystem', $this->getOperatingSystem());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
        $writer->writeStringValue('userId', $this->getUserId());
    }

    /**
     * Sets the deviceId property value. Azure AD device identifier.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the enrollmentType property value. Possible ways of adding a mobile device to management.
     * @param DeviceEnrollmentType|null $value Value to set for the enrollmentType property.
    */
    public function setEnrollmentType(?DeviceEnrollmentType $value): void {
        $this->getBackingStore()->set('enrollmentType', $value);
    }

    /**
     * Sets the failureCategory property value. Top level failure categories for enrollment.
     * @param DeviceEnrollmentFailureReason|null $value Value to set for the failureCategory property.
    */
    public function setFailureCategory(?DeviceEnrollmentFailureReason $value): void {
        $this->getBackingStore()->set('failureCategory', $value);
    }

    /**
     * Sets the failureReason property value. Detailed failure reason.
     * @param string|null $value Value to set for the failureReason property.
    */
    public function setFailureReason(?string $value): void {
        $this->getBackingStore()->set('failureReason', $value);
    }

    /**
     * Sets the managedDeviceIdentifier property value. Device identifier created or collected by Intune.
     * @param string|null $value Value to set for the managedDeviceIdentifier property.
    */
    public function setManagedDeviceIdentifier(?string $value): void {
        $this->getBackingStore()->set('managedDeviceIdentifier', $value);
    }

    /**
     * Sets the operatingSystem property value. Operating System.
     * @param string|null $value Value to set for the operatingSystem property.
    */
    public function setOperatingSystem(?string $value): void {
        $this->getBackingStore()->set('operatingSystem', $value);
    }

    /**
     * Sets the osVersion property value. OS Version.
     * @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the userId property value. Identifier for the user that tried to enroll the device.
     * @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

}
