<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedDeviceOverview extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDeviceOverview {
        return new ManagedDeviceOverview();
    }

    /**
     * Gets the deviceExchangeAccessStateSummary property value. Distribution of Exchange Access State in Intune
     * @return DeviceExchangeAccessStateSummary|null
    */
    public function getDeviceExchangeAccessStateSummary(): ?DeviceExchangeAccessStateSummary {
        return $this->getBackingStore()->get('deviceExchangeAccessStateSummary');
    }

    /**
     * Gets the deviceOperatingSystemSummary property value. Device operating system summary.
     * @return DeviceOperatingSystemSummary|null
    */
    public function getDeviceOperatingSystemSummary(): ?DeviceOperatingSystemSummary {
        return $this->getBackingStore()->get('deviceOperatingSystemSummary');
    }

    /**
     * Gets the dualEnrolledDeviceCount property value. The number of devices enrolled in both MDM and EAS
     * @return int|null
    */
    public function getDualEnrolledDeviceCount(): ?int {
        return $this->getBackingStore()->get('dualEnrolledDeviceCount');
    }

    /**
     * Gets the enrolledDeviceCount property value. Total enrolled device count. Does not include PC devices managed via Intune PC Agent
     * @return int|null
    */
    public function getEnrolledDeviceCount(): ?int {
        return $this->getBackingStore()->get('enrolledDeviceCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceExchangeAccessStateSummary' => fn(ParseNode $n) => $o->setDeviceExchangeAccessStateSummary($n->getObjectValue([DeviceExchangeAccessStateSummary::class, 'createFromDiscriminatorValue'])),
            'deviceOperatingSystemSummary' => fn(ParseNode $n) => $o->setDeviceOperatingSystemSummary($n->getObjectValue([DeviceOperatingSystemSummary::class, 'createFromDiscriminatorValue'])),
            'dualEnrolledDeviceCount' => fn(ParseNode $n) => $o->setDualEnrolledDeviceCount($n->getIntegerValue()),
            'enrolledDeviceCount' => fn(ParseNode $n) => $o->setEnrolledDeviceCount($n->getIntegerValue()),
            'mdmEnrolledCount' => fn(ParseNode $n) => $o->setMdmEnrolledCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the mdmEnrolledCount property value. The number of devices enrolled in MDM
     * @return int|null
    */
    public function getMdmEnrolledCount(): ?int {
        return $this->getBackingStore()->get('mdmEnrolledCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('deviceExchangeAccessStateSummary', $this->getDeviceExchangeAccessStateSummary());
        $writer->writeObjectValue('deviceOperatingSystemSummary', $this->getDeviceOperatingSystemSummary());
        $writer->writeIntegerValue('dualEnrolledDeviceCount', $this->getDualEnrolledDeviceCount());
        $writer->writeIntegerValue('enrolledDeviceCount', $this->getEnrolledDeviceCount());
        $writer->writeIntegerValue('mdmEnrolledCount', $this->getMdmEnrolledCount());
    }

    /**
     * Sets the deviceExchangeAccessStateSummary property value. Distribution of Exchange Access State in Intune
     *  @param DeviceExchangeAccessStateSummary|null $value Value to set for the deviceExchangeAccessStateSummary property.
    */
    public function setDeviceExchangeAccessStateSummary(?DeviceExchangeAccessStateSummary $value): void {
        $this->getBackingStore()->set('deviceExchangeAccessStateSummary', $value);
    }

    /**
     * Sets the deviceOperatingSystemSummary property value. Device operating system summary.
     *  @param DeviceOperatingSystemSummary|null $value Value to set for the deviceOperatingSystemSummary property.
    */
    public function setDeviceOperatingSystemSummary(?DeviceOperatingSystemSummary $value): void {
        $this->getBackingStore()->set('deviceOperatingSystemSummary', $value);
    }

    /**
     * Sets the dualEnrolledDeviceCount property value. The number of devices enrolled in both MDM and EAS
     *  @param int|null $value Value to set for the dualEnrolledDeviceCount property.
    */
    public function setDualEnrolledDeviceCount(?int $value): void {
        $this->getBackingStore()->set('dualEnrolledDeviceCount', $value);
    }

    /**
     * Sets the enrolledDeviceCount property value. Total enrolled device count. Does not include PC devices managed via Intune PC Agent
     *  @param int|null $value Value to set for the enrolledDeviceCount property.
    */
    public function setEnrolledDeviceCount(?int $value): void {
        $this->getBackingStore()->set('enrolledDeviceCount', $value);
    }

    /**
     * Sets the mdmEnrolledCount property value. The number of devices enrolled in MDM
     *  @param int|null $value Value to set for the mdmEnrolledCount property.
    */
    public function setMdmEnrolledCount(?int $value): void {
        $this->getBackingStore()->set('mdmEnrolledCount', $value);
    }

}
