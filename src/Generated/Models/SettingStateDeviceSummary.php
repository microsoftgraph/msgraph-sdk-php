<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Device Compilance Policy and Configuration for a Setting State summary
*/
class SettingStateDeviceSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new settingStateDeviceSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SettingStateDeviceSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SettingStateDeviceSummary {
        return new SettingStateDeviceSummary();
    }

    /**
     * Gets the compliantDeviceCount property value. Device Compliant count for the setting
     * @return int|null
    */
    public function getCompliantDeviceCount(): ?int {
        return $this->getBackingStore()->get('compliantDeviceCount');
    }

    /**
     * Gets the conflictDeviceCount property value. Device conflict error count for the setting
     * @return int|null
    */
    public function getConflictDeviceCount(): ?int {
        return $this->getBackingStore()->get('conflictDeviceCount');
    }

    /**
     * Gets the errorDeviceCount property value. Device error count for the setting
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
            'conflictDeviceCount' => fn(ParseNode $n) => $o->setConflictDeviceCount($n->getIntegerValue()),
            'errorDeviceCount' => fn(ParseNode $n) => $o->setErrorDeviceCount($n->getIntegerValue()),
            'instancePath' => fn(ParseNode $n) => $o->setInstancePath($n->getStringValue()),
            'nonCompliantDeviceCount' => fn(ParseNode $n) => $o->setNonCompliantDeviceCount($n->getIntegerValue()),
            'notApplicableDeviceCount' => fn(ParseNode $n) => $o->setNotApplicableDeviceCount($n->getIntegerValue()),
            'remediatedDeviceCount' => fn(ParseNode $n) => $o->setRemediatedDeviceCount($n->getIntegerValue()),
            'settingName' => fn(ParseNode $n) => $o->setSettingName($n->getStringValue()),
            'unknownDeviceCount' => fn(ParseNode $n) => $o->setUnknownDeviceCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the instancePath property value. Name of the InstancePath for the setting
     * @return string|null
    */
    public function getInstancePath(): ?string {
        return $this->getBackingStore()->get('instancePath');
    }

    /**
     * Gets the nonCompliantDeviceCount property value. Device NonCompliant count for the setting
     * @return int|null
    */
    public function getNonCompliantDeviceCount(): ?int {
        return $this->getBackingStore()->get('nonCompliantDeviceCount');
    }

    /**
     * Gets the notApplicableDeviceCount property value. Device Not Applicable count for the setting
     * @return int|null
    */
    public function getNotApplicableDeviceCount(): ?int {
        return $this->getBackingStore()->get('notApplicableDeviceCount');
    }

    /**
     * Gets the remediatedDeviceCount property value. Device Compliant count for the setting
     * @return int|null
    */
    public function getRemediatedDeviceCount(): ?int {
        return $this->getBackingStore()->get('remediatedDeviceCount');
    }

    /**
     * Gets the settingName property value. Name of the setting
     * @return string|null
    */
    public function getSettingName(): ?string {
        return $this->getBackingStore()->get('settingName');
    }

    /**
     * Gets the unknownDeviceCount property value. Device Unkown count for the setting
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
        $writer->writeIntegerValue('conflictDeviceCount', $this->getConflictDeviceCount());
        $writer->writeIntegerValue('errorDeviceCount', $this->getErrorDeviceCount());
        $writer->writeStringValue('instancePath', $this->getInstancePath());
        $writer->writeIntegerValue('nonCompliantDeviceCount', $this->getNonCompliantDeviceCount());
        $writer->writeIntegerValue('notApplicableDeviceCount', $this->getNotApplicableDeviceCount());
        $writer->writeIntegerValue('remediatedDeviceCount', $this->getRemediatedDeviceCount());
        $writer->writeStringValue('settingName', $this->getSettingName());
        $writer->writeIntegerValue('unknownDeviceCount', $this->getUnknownDeviceCount());
    }

    /**
     * Sets the compliantDeviceCount property value. Device Compliant count for the setting
     * @param int|null $value Value to set for the compliantDeviceCount property.
    */
    public function setCompliantDeviceCount(?int $value): void {
        $this->getBackingStore()->set('compliantDeviceCount', $value);
    }

    /**
     * Sets the conflictDeviceCount property value. Device conflict error count for the setting
     * @param int|null $value Value to set for the conflictDeviceCount property.
    */
    public function setConflictDeviceCount(?int $value): void {
        $this->getBackingStore()->set('conflictDeviceCount', $value);
    }

    /**
     * Sets the errorDeviceCount property value. Device error count for the setting
     * @param int|null $value Value to set for the errorDeviceCount property.
    */
    public function setErrorDeviceCount(?int $value): void {
        $this->getBackingStore()->set('errorDeviceCount', $value);
    }

    /**
     * Sets the instancePath property value. Name of the InstancePath for the setting
     * @param string|null $value Value to set for the instancePath property.
    */
    public function setInstancePath(?string $value): void {
        $this->getBackingStore()->set('instancePath', $value);
    }

    /**
     * Sets the nonCompliantDeviceCount property value. Device NonCompliant count for the setting
     * @param int|null $value Value to set for the nonCompliantDeviceCount property.
    */
    public function setNonCompliantDeviceCount(?int $value): void {
        $this->getBackingStore()->set('nonCompliantDeviceCount', $value);
    }

    /**
     * Sets the notApplicableDeviceCount property value. Device Not Applicable count for the setting
     * @param int|null $value Value to set for the notApplicableDeviceCount property.
    */
    public function setNotApplicableDeviceCount(?int $value): void {
        $this->getBackingStore()->set('notApplicableDeviceCount', $value);
    }

    /**
     * Sets the remediatedDeviceCount property value. Device Compliant count for the setting
     * @param int|null $value Value to set for the remediatedDeviceCount property.
    */
    public function setRemediatedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('remediatedDeviceCount', $value);
    }

    /**
     * Sets the settingName property value. Name of the setting
     * @param string|null $value Value to set for the settingName property.
    */
    public function setSettingName(?string $value): void {
        $this->getBackingStore()->set('settingName', $value);
    }

    /**
     * Sets the unknownDeviceCount property value. Device Unkown count for the setting
     * @param int|null $value Value to set for the unknownDeviceCount property.
    */
    public function setUnknownDeviceCount(?int $value): void {
        $this->getBackingStore()->set('unknownDeviceCount', $value);
    }

}
