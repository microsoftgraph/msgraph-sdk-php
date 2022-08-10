<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceEnrollmentPlatformRestrictionsConfiguration extends DeviceEnrollmentConfiguration implements Parsable 
{
    /**
     * @var DeviceEnrollmentPlatformRestriction|null $androidRestriction Android restrictions based on platform, platform operating system version, and device ownership
    */
    private ?DeviceEnrollmentPlatformRestriction $androidRestriction = null;
    
    /**
     * @var DeviceEnrollmentPlatformRestriction|null $iosRestriction Ios restrictions based on platform, platform operating system version, and device ownership
    */
    private ?DeviceEnrollmentPlatformRestriction $iosRestriction = null;
    
    /**
     * @var DeviceEnrollmentPlatformRestriction|null $macOSRestriction Mac restrictions based on platform, platform operating system version, and device ownership
    */
    private ?DeviceEnrollmentPlatformRestriction $macOSRestriction = null;
    
    /**
     * @var DeviceEnrollmentPlatformRestriction|null $windowsMobileRestriction Windows mobile restrictions based on platform, platform operating system version, and device ownership
    */
    private ?DeviceEnrollmentPlatformRestriction $windowsMobileRestriction = null;
    
    /**
     * @var DeviceEnrollmentPlatformRestriction|null $windowsRestriction Windows restrictions based on platform, platform operating system version, and device ownership
    */
    private ?DeviceEnrollmentPlatformRestriction $windowsRestriction = null;
    
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
     * Gets the androidRestriction property value. Android restrictions based on platform, platform operating system version, and device ownership
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getAndroidRestriction(): ?DeviceEnrollmentPlatformRestriction {
        return $this->androidRestriction;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'androidRestriction' => function (ParseNode $n) use ($o) { $o->setAndroidRestriction($n->getObjectValue(array(DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'))); },
            'iosRestriction' => function (ParseNode $n) use ($o) { $o->setIosRestriction($n->getObjectValue(array(DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'))); },
            'macOSRestriction' => function (ParseNode $n) use ($o) { $o->setMacOSRestriction($n->getObjectValue(array(DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'))); },
            'windowsMobileRestriction' => function (ParseNode $n) use ($o) { $o->setWindowsMobileRestriction($n->getObjectValue(array(DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'))); },
            'windowsRestriction' => function (ParseNode $n) use ($o) { $o->setWindowsRestriction($n->getObjectValue(array(DeviceEnrollmentPlatformRestriction::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the iosRestriction property value. Ios restrictions based on platform, platform operating system version, and device ownership
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getIosRestriction(): ?DeviceEnrollmentPlatformRestriction {
        return $this->iosRestriction;
    }

    /**
     * Gets the macOSRestriction property value. Mac restrictions based on platform, platform operating system version, and device ownership
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getMacOSRestriction(): ?DeviceEnrollmentPlatformRestriction {
        return $this->macOSRestriction;
    }

    /**
     * Gets the windowsMobileRestriction property value. Windows mobile restrictions based on platform, platform operating system version, and device ownership
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getWindowsMobileRestriction(): ?DeviceEnrollmentPlatformRestriction {
        return $this->windowsMobileRestriction;
    }

    /**
     * Gets the windowsRestriction property value. Windows restrictions based on platform, platform operating system version, and device ownership
     * @return DeviceEnrollmentPlatformRestriction|null
    */
    public function getWindowsRestriction(): ?DeviceEnrollmentPlatformRestriction {
        return $this->windowsRestriction;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('androidRestriction', $this->androidRestriction);
        $writer->writeObjectValue('iosRestriction', $this->iosRestriction);
        $writer->writeObjectValue('macOSRestriction', $this->macOSRestriction);
        $writer->writeObjectValue('windowsMobileRestriction', $this->windowsMobileRestriction);
        $writer->writeObjectValue('windowsRestriction', $this->windowsRestriction);
    }

    /**
     * Sets the androidRestriction property value. Android restrictions based on platform, platform operating system version, and device ownership
     *  @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the androidRestriction property.
    */
    public function setAndroidRestriction(?DeviceEnrollmentPlatformRestriction $value ): void {
        $this->androidRestriction = $value;
    }

    /**
     * Sets the iosRestriction property value. Ios restrictions based on platform, platform operating system version, and device ownership
     *  @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the iosRestriction property.
    */
    public function setIosRestriction(?DeviceEnrollmentPlatformRestriction $value ): void {
        $this->iosRestriction = $value;
    }

    /**
     * Sets the macOSRestriction property value. Mac restrictions based on platform, platform operating system version, and device ownership
     *  @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the macOSRestriction property.
    */
    public function setMacOSRestriction(?DeviceEnrollmentPlatformRestriction $value ): void {
        $this->macOSRestriction = $value;
    }

    /**
     * Sets the windowsMobileRestriction property value. Windows mobile restrictions based on platform, platform operating system version, and device ownership
     *  @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the windowsMobileRestriction property.
    */
    public function setWindowsMobileRestriction(?DeviceEnrollmentPlatformRestriction $value ): void {
        $this->windowsMobileRestriction = $value;
    }

    /**
     * Sets the windowsRestriction property value. Windows restrictions based on platform, platform operating system version, and device ownership
     *  @param DeviceEnrollmentPlatformRestriction|null $value Value to set for the windowsRestriction property.
    */
    public function setWindowsRestriction(?DeviceEnrollmentPlatformRestriction $value ): void {
        $this->windowsRestriction = $value;
    }

}
