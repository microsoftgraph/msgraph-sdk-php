<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceCompliancePolicyDeviceStateSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceCompliancePolicyDeviceStateSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceCompliancePolicyDeviceStateSummary');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceCompliancePolicyDeviceStateSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceCompliancePolicyDeviceStateSummary {
        return new DeviceCompliancePolicyDeviceStateSummary();
    }

    /**
     * Gets the compliantDeviceCount property value. Number of compliant devices
     * @return int|null
    */
    public function getCompliantDeviceCount(): ?int {
        return $this->getBackingStore()->get('compliantDeviceCount');
    }

    /**
     * Gets the configManagerCount property value. Number of devices that have compliance managed by System Center Configuration Manager
     * @return int|null
    */
    public function getConfigManagerCount(): ?int {
        return $this->getBackingStore()->get('configManagerCount');
    }

    /**
     * Gets the conflictDeviceCount property value. Number of conflict devices
     * @return int|null
    */
    public function getConflictDeviceCount(): ?int {
        return $this->getBackingStore()->get('conflictDeviceCount');
    }

    /**
     * Gets the errorDeviceCount property value. Number of error devices
     * @return int|null
    */
    public function getErrorDeviceCount(): ?int {
        return $this->getBackingStore()->get('errorDeviceCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'compliantDeviceCount' => fn(ParseNode $n) => $o->setCompliantDeviceCount($n->getIntegerValue()),
            'configManagerCount' => fn(ParseNode $n) => $o->setConfigManagerCount($n->getIntegerValue()),
            'conflictDeviceCount' => fn(ParseNode $n) => $o->setConflictDeviceCount($n->getIntegerValue()),
            'errorDeviceCount' => fn(ParseNode $n) => $o->setErrorDeviceCount($n->getIntegerValue()),
            'inGracePeriodCount' => fn(ParseNode $n) => $o->setInGracePeriodCount($n->getIntegerValue()),
            'nonCompliantDeviceCount' => fn(ParseNode $n) => $o->setNonCompliantDeviceCount($n->getIntegerValue()),
            'notApplicableDeviceCount' => fn(ParseNode $n) => $o->setNotApplicableDeviceCount($n->getIntegerValue()),
            'remediatedDeviceCount' => fn(ParseNode $n) => $o->setRemediatedDeviceCount($n->getIntegerValue()),
            'unknownDeviceCount' => fn(ParseNode $n) => $o->setUnknownDeviceCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the inGracePeriodCount property value. Number of devices that are in grace period
     * @return int|null
    */
    public function getInGracePeriodCount(): ?int {
        return $this->getBackingStore()->get('inGracePeriodCount');
    }

    /**
     * Gets the nonCompliantDeviceCount property value. Number of NonCompliant devices
     * @return int|null
    */
    public function getNonCompliantDeviceCount(): ?int {
        return $this->getBackingStore()->get('nonCompliantDeviceCount');
    }

    /**
     * Gets the notApplicableDeviceCount property value. Number of not applicable devices
     * @return int|null
    */
    public function getNotApplicableDeviceCount(): ?int {
        return $this->getBackingStore()->get('notApplicableDeviceCount');
    }

    /**
     * Gets the remediatedDeviceCount property value. Number of remediated devices
     * @return int|null
    */
    public function getRemediatedDeviceCount(): ?int {
        return $this->getBackingStore()->get('remediatedDeviceCount');
    }

    /**
     * Gets the unknownDeviceCount property value. Number of unknown devices
     * @return int|null
    */
    public function getUnknownDeviceCount(): ?int {
        return $this->getBackingStore()->get('unknownDeviceCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('compliantDeviceCount', $this->getCompliantDeviceCount());
        $writer->writeIntegerValue('configManagerCount', $this->getConfigManagerCount());
        $writer->writeIntegerValue('conflictDeviceCount', $this->getConflictDeviceCount());
        $writer->writeIntegerValue('errorDeviceCount', $this->getErrorDeviceCount());
        $writer->writeIntegerValue('inGracePeriodCount', $this->getInGracePeriodCount());
        $writer->writeIntegerValue('nonCompliantDeviceCount', $this->getNonCompliantDeviceCount());
        $writer->writeIntegerValue('notApplicableDeviceCount', $this->getNotApplicableDeviceCount());
        $writer->writeIntegerValue('remediatedDeviceCount', $this->getRemediatedDeviceCount());
        $writer->writeIntegerValue('unknownDeviceCount', $this->getUnknownDeviceCount());
    }

    /**
     * Sets the compliantDeviceCount property value. Number of compliant devices
     *  @param int|null $value Value to set for the compliantDeviceCount property.
    */
    public function setCompliantDeviceCount(?int $value): void {
        $this->getBackingStore()->set('compliantDeviceCount', $value);
    }

    /**
     * Sets the configManagerCount property value. Number of devices that have compliance managed by System Center Configuration Manager
     *  @param int|null $value Value to set for the configManagerCount property.
    */
    public function setConfigManagerCount(?int $value): void {
        $this->getBackingStore()->set('configManagerCount', $value);
    }

    /**
     * Sets the conflictDeviceCount property value. Number of conflict devices
     *  @param int|null $value Value to set for the conflictDeviceCount property.
    */
    public function setConflictDeviceCount(?int $value): void {
        $this->getBackingStore()->set('conflictDeviceCount', $value);
    }

    /**
     * Sets the errorDeviceCount property value. Number of error devices
     *  @param int|null $value Value to set for the errorDeviceCount property.
    */
    public function setErrorDeviceCount(?int $value): void {
        $this->getBackingStore()->set('errorDeviceCount', $value);
    }

    /**
     * Sets the inGracePeriodCount property value. Number of devices that are in grace period
     *  @param int|null $value Value to set for the inGracePeriodCount property.
    */
    public function setInGracePeriodCount(?int $value): void {
        $this->getBackingStore()->set('inGracePeriodCount', $value);
    }

    /**
     * Sets the nonCompliantDeviceCount property value. Number of NonCompliant devices
     *  @param int|null $value Value to set for the nonCompliantDeviceCount property.
    */
    public function setNonCompliantDeviceCount(?int $value): void {
        $this->getBackingStore()->set('nonCompliantDeviceCount', $value);
    }

    /**
     * Sets the notApplicableDeviceCount property value. Number of not applicable devices
     *  @param int|null $value Value to set for the notApplicableDeviceCount property.
    */
    public function setNotApplicableDeviceCount(?int $value): void {
        $this->getBackingStore()->set('notApplicableDeviceCount', $value);
    }

    /**
     * Sets the remediatedDeviceCount property value. Number of remediated devices
     *  @param int|null $value Value to set for the remediatedDeviceCount property.
    */
    public function setRemediatedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('remediatedDeviceCount', $value);
    }

    /**
     * Sets the unknownDeviceCount property value. Number of unknown devices
     *  @param int|null $value Value to set for the unknownDeviceCount property.
    */
    public function setUnknownDeviceCount(?int $value): void {
        $this->getBackingStore()->set('unknownDeviceCount', $value);
    }

}
