<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedDeviceOverview extends Entity 
{
    /** @var DeviceExchangeAccessStateSummary|null $deviceExchangeAccessStateSummary Distribution of Exchange Access State in Intune */
    private ?DeviceExchangeAccessStateSummary $deviceExchangeAccessStateSummary = null;
    
    /** @var DeviceOperatingSystemSummary|null $deviceOperatingSystemSummary Device operating system summary. */
    private ?DeviceOperatingSystemSummary $deviceOperatingSystemSummary = null;
    
    /** @var int|null $dualEnrolledDeviceCount The number of devices enrolled in both MDM and EAS */
    private ?int $dualEnrolledDeviceCount = null;
    
    /** @var int|null $enrolledDeviceCount Total enrolled device count. Does not include PC devices managed via Intune PC Agent */
    private ?int $enrolledDeviceCount = null;
    
    /** @var int|null $mdmEnrolledCount The number of devices enrolled in MDM */
    private ?int $mdmEnrolledCount = null;
    
    /**
     * Instantiates a new managedDeviceOverview and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedDeviceOverview
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDeviceOverview {
        return new ManagedDeviceOverview();
    }

    /**
     * Gets the deviceExchangeAccessStateSummary property value. Distribution of Exchange Access State in Intune
     * @return DeviceExchangeAccessStateSummary|null
    */
    public function getDeviceExchangeAccessStateSummary(): ?DeviceExchangeAccessStateSummary {
        return $this->deviceExchangeAccessStateSummary;
    }

    /**
     * Gets the deviceOperatingSystemSummary property value. Device operating system summary.
     * @return DeviceOperatingSystemSummary|null
    */
    public function getDeviceOperatingSystemSummary(): ?DeviceOperatingSystemSummary {
        return $this->deviceOperatingSystemSummary;
    }

    /**
     * Gets the dualEnrolledDeviceCount property value. The number of devices enrolled in both MDM and EAS
     * @return int|null
    */
    public function getDualEnrolledDeviceCount(): ?int {
        return $this->dualEnrolledDeviceCount;
    }

    /**
     * Gets the enrolledDeviceCount property value. Total enrolled device count. Does not include PC devices managed via Intune PC Agent
     * @return int|null
    */
    public function getEnrolledDeviceCount(): ?int {
        return $this->enrolledDeviceCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'deviceExchangeAccessStateSummary' => function (self $o, ParseNode $n) { $o->setDeviceExchangeAccessStateSummary($n->getObjectValue(DeviceExchangeAccessStateSummary::class)); },
            'deviceOperatingSystemSummary' => function (self $o, ParseNode $n) { $o->setDeviceOperatingSystemSummary($n->getObjectValue(DeviceOperatingSystemSummary::class)); },
            'dualEnrolledDeviceCount' => function (self $o, ParseNode $n) { $o->setDualEnrolledDeviceCount($n->getIntegerValue()); },
            'enrolledDeviceCount' => function (self $o, ParseNode $n) { $o->setEnrolledDeviceCount($n->getIntegerValue()); },
            'mdmEnrolledCount' => function (self $o, ParseNode $n) { $o->setMdmEnrolledCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the mdmEnrolledCount property value. The number of devices enrolled in MDM
     * @return int|null
    */
    public function getMdmEnrolledCount(): ?int {
        return $this->mdmEnrolledCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('deviceExchangeAccessStateSummary', $this->deviceExchangeAccessStateSummary);
        $writer->writeObjectValue('deviceOperatingSystemSummary', $this->deviceOperatingSystemSummary);
        $writer->writeIntegerValue('dualEnrolledDeviceCount', $this->dualEnrolledDeviceCount);
        $writer->writeIntegerValue('enrolledDeviceCount', $this->enrolledDeviceCount);
        $writer->writeIntegerValue('mdmEnrolledCount', $this->mdmEnrolledCount);
    }

    /**
     * Sets the deviceExchangeAccessStateSummary property value. Distribution of Exchange Access State in Intune
     *  @param DeviceExchangeAccessStateSummary|null $value Value to set for the deviceExchangeAccessStateSummary property.
    */
    public function setDeviceExchangeAccessStateSummary(?DeviceExchangeAccessStateSummary $value ): void {
        $this->deviceExchangeAccessStateSummary = $value;
    }

    /**
     * Sets the deviceOperatingSystemSummary property value. Device operating system summary.
     *  @param DeviceOperatingSystemSummary|null $value Value to set for the deviceOperatingSystemSummary property.
    */
    public function setDeviceOperatingSystemSummary(?DeviceOperatingSystemSummary $value ): void {
        $this->deviceOperatingSystemSummary = $value;
    }

    /**
     * Sets the dualEnrolledDeviceCount property value. The number of devices enrolled in both MDM and EAS
     *  @param int|null $value Value to set for the dualEnrolledDeviceCount property.
    */
    public function setDualEnrolledDeviceCount(?int $value ): void {
        $this->dualEnrolledDeviceCount = $value;
    }

    /**
     * Sets the enrolledDeviceCount property value. Total enrolled device count. Does not include PC devices managed via Intune PC Agent
     *  @param int|null $value Value to set for the enrolledDeviceCount property.
    */
    public function setEnrolledDeviceCount(?int $value ): void {
        $this->enrolledDeviceCount = $value;
    }

    /**
     * Sets the mdmEnrolledCount property value. The number of devices enrolled in MDM
     *  @param int|null $value Value to set for the mdmEnrolledCount property.
    */
    public function setMdmEnrolledCount(?int $value ): void {
        $this->mdmEnrolledCount = $value;
    }

}
