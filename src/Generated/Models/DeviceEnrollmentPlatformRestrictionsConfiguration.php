<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Default Device Enrollment Platform Restrictions Configuration that restricts the types of devices a user can enroll
*/
class DeviceEnrollmentPlatformRestrictionsConfiguration extends DeviceEnrollmentConfiguration implements Parsable 
{
    /**
     * Instantiates a new DeviceEnrollmentPlatformRestrictionsConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceEnrollmentPlatformRestrictionsConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceEnrollmentPlatformRestrictionsConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceEnrollmentPlatformRestrictionsConfiguration {
        return new DeviceEnrollmentPlatformRestrictionsConfiguration();
    }

    /**
     * Gets the androidRestriction property value. Indicates restrictions for Android platform.
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getAndroidRestriction(): ?DeviceEnrollmentPlatformRestriction {
        $val = $this->getBackingStore()->get('androidRestriction');
        if (is_null($val) || $val instanceof DeviceEnrollmentPlatformRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidRestriction'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'androidRestriction' => fn(ParseNode $n) => $o->setAndroidRestriction($n->getObjectValue([DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'])),
            'iosRestriction' => fn(ParseNode $n) => $o->setIosRestriction($n->getObjectValue([DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'])),
            'macOSRestriction' => fn(ParseNode $n) => $o->setMacOSRestriction($n->getObjectValue([DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'])),
            'windowsMobileRestriction' => fn(ParseNode $n) => $o->setWindowsMobileRestriction($n->getObjectValue([DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'])),
            'windowsRestriction' => fn(ParseNode $n) => $o->setWindowsRestriction($n->getObjectValue([DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the iosRestriction property value. Indicates restrictions for IOS platform.
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getIosRestriction(): ?DeviceEnrollmentPlatformRestriction {
        $val = $this->getBackingStore()->get('iosRestriction');
        if (is_null($val) || $val instanceof DeviceEnrollmentPlatformRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iosRestriction'");
    }

    /**
     * Gets the macOSRestriction property value. Indicates restrictions for MacOS platform.
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getMacOSRestriction(): ?DeviceEnrollmentPlatformRestriction {
        $val = $this->getBackingStore()->get('macOSRestriction');
        if (is_null($val) || $val instanceof DeviceEnrollmentPlatformRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'macOSRestriction'");
    }

    /**
     * Gets the windowsMobileRestriction property value. Indicates restrictions for Windows Mobile platform.
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getWindowsMobileRestriction(): ?DeviceEnrollmentPlatformRestriction {
        $val = $this->getBackingStore()->get('windowsMobileRestriction');
        if (is_null($val) || $val instanceof DeviceEnrollmentPlatformRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsMobileRestriction'");
    }

    /**
     * Gets the windowsRestriction property value. Indicates restrictions for Windows platform.
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getWindowsRestriction(): ?DeviceEnrollmentPlatformRestriction {
        $val = $this->getBackingStore()->get('windowsRestriction');
        if (is_null($val) || $val instanceof DeviceEnrollmentPlatformRestriction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsRestriction'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('androidRestriction', $this->getAndroidRestriction());
        $writer->writeObjectValue('iosRestriction', $this->getIosRestriction());
        $writer->writeObjectValue('macOSRestriction', $this->getMacOSRestriction());
        $writer->writeObjectValue('windowsMobileRestriction', $this->getWindowsMobileRestriction());
        $writer->writeObjectValue('windowsRestriction', $this->getWindowsRestriction());
    }

    /**
     * Sets the androidRestriction property value. Indicates restrictions for Android platform.
     * @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the androidRestriction property.
    */
    public function setAndroidRestriction(?DeviceEnrollmentPlatformRestriction $value): void {
        $this->getBackingStore()->set('androidRestriction', $value);
    }

    /**
     * Sets the iosRestriction property value. Indicates restrictions for IOS platform.
     * @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the iosRestriction property.
    */
    public function setIosRestriction(?DeviceEnrollmentPlatformRestriction $value): void {
        $this->getBackingStore()->set('iosRestriction', $value);
    }

    /**
     * Sets the macOSRestriction property value. Indicates restrictions for MacOS platform.
     * @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the macOSRestriction property.
    */
    public function setMacOSRestriction(?DeviceEnrollmentPlatformRestriction $value): void {
        $this->getBackingStore()->set('macOSRestriction', $value);
    }

    /**
     * Sets the windowsMobileRestriction property value. Indicates restrictions for Windows Mobile platform.
     * @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the windowsMobileRestriction property.
    */
    public function setWindowsMobileRestriction(?DeviceEnrollmentPlatformRestriction $value): void {
        $this->getBackingStore()->set('windowsMobileRestriction', $value);
    }

    /**
     * Sets the windowsRestriction property value. Indicates restrictions for Windows platform.
     * @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the windowsRestriction property.
    */
    public function setWindowsRestriction(?DeviceEnrollmentPlatformRestriction $value): void {
        $this->getBackingStore()->set('windowsRestriction', $value);
    }

}
