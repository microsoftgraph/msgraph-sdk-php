<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SoftwareUpdateStatusSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new softwareUpdateStatusSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SoftwareUpdateStatusSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SoftwareUpdateStatusSummary {
        return new SoftwareUpdateStatusSummary();
    }

    /**
     * Gets the compliantDeviceCount property value. Number of compliant devices.
     * @return int|null
    */
    public function getCompliantDeviceCount(): ?int {
        return $this->getBackingStore()->get('compliantDeviceCount');
    }

    /**
     * Gets the compliantUserCount property value. Number of compliant users.
     * @return int|null
    */
    public function getCompliantUserCount(): ?int {
        return $this->getBackingStore()->get('compliantUserCount');
    }

    /**
     * Gets the conflictDeviceCount property value. Number of conflict devices.
     * @return int|null
    */
    public function getConflictDeviceCount(): ?int {
        return $this->getBackingStore()->get('conflictDeviceCount');
    }

    /**
     * Gets the conflictUserCount property value. Number of conflict users.
     * @return int|null
    */
    public function getConflictUserCount(): ?int {
        return $this->getBackingStore()->get('conflictUserCount');
    }

    /**
     * Gets the displayName property value. The name of the policy.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the errorDeviceCount property value. Number of devices had error.
     * @return int|null
    */
    public function getErrorDeviceCount(): ?int {
        return $this->getBackingStore()->get('errorDeviceCount');
    }

    /**
     * Gets the errorUserCount property value. Number of users had error.
     * @return int|null
    */
    public function getErrorUserCount(): ?int {
        return $this->getBackingStore()->get('errorUserCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'compliantDeviceCount' => fn(ParseNode $n) => $o->setCompliantDeviceCount($n->getIntegerValue()),
            'compliantUserCount' => fn(ParseNode $n) => $o->setCompliantUserCount($n->getIntegerValue()),
            'conflictDeviceCount' => fn(ParseNode $n) => $o->setConflictDeviceCount($n->getIntegerValue()),
            'conflictUserCount' => fn(ParseNode $n) => $o->setConflictUserCount($n->getIntegerValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'errorDeviceCount' => fn(ParseNode $n) => $o->setErrorDeviceCount($n->getIntegerValue()),
            'errorUserCount' => fn(ParseNode $n) => $o->setErrorUserCount($n->getIntegerValue()),
            'nonCompliantDeviceCount' => fn(ParseNode $n) => $o->setNonCompliantDeviceCount($n->getIntegerValue()),
            'nonCompliantUserCount' => fn(ParseNode $n) => $o->setNonCompliantUserCount($n->getIntegerValue()),
            'notApplicableDeviceCount' => fn(ParseNode $n) => $o->setNotApplicableDeviceCount($n->getIntegerValue()),
            'notApplicableUserCount' => fn(ParseNode $n) => $o->setNotApplicableUserCount($n->getIntegerValue()),
            'remediatedDeviceCount' => fn(ParseNode $n) => $o->setRemediatedDeviceCount($n->getIntegerValue()),
            'remediatedUserCount' => fn(ParseNode $n) => $o->setRemediatedUserCount($n->getIntegerValue()),
            'unknownDeviceCount' => fn(ParseNode $n) => $o->setUnknownDeviceCount($n->getIntegerValue()),
            'unknownUserCount' => fn(ParseNode $n) => $o->setUnknownUserCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the nonCompliantDeviceCount property value. Number of non compliant devices.
     * @return int|null
    */
    public function getNonCompliantDeviceCount(): ?int {
        return $this->getBackingStore()->get('nonCompliantDeviceCount');
    }

    /**
     * Gets the nonCompliantUserCount property value. Number of non compliant users.
     * @return int|null
    */
    public function getNonCompliantUserCount(): ?int {
        return $this->getBackingStore()->get('nonCompliantUserCount');
    }

    /**
     * Gets the notApplicableDeviceCount property value. Number of not applicable devices.
     * @return int|null
    */
    public function getNotApplicableDeviceCount(): ?int {
        return $this->getBackingStore()->get('notApplicableDeviceCount');
    }

    /**
     * Gets the notApplicableUserCount property value. Number of not applicable users.
     * @return int|null
    */
    public function getNotApplicableUserCount(): ?int {
        return $this->getBackingStore()->get('notApplicableUserCount');
    }

    /**
     * Gets the remediatedDeviceCount property value. Number of remediated devices.
     * @return int|null
    */
    public function getRemediatedDeviceCount(): ?int {
        return $this->getBackingStore()->get('remediatedDeviceCount');
    }

    /**
     * Gets the remediatedUserCount property value. Number of remediated users.
     * @return int|null
    */
    public function getRemediatedUserCount(): ?int {
        return $this->getBackingStore()->get('remediatedUserCount');
    }

    /**
     * Gets the unknownDeviceCount property value. Number of unknown devices.
     * @return int|null
    */
    public function getUnknownDeviceCount(): ?int {
        return $this->getBackingStore()->get('unknownDeviceCount');
    }

    /**
     * Gets the unknownUserCount property value. Number of unknown users.
     * @return int|null
    */
    public function getUnknownUserCount(): ?int {
        return $this->getBackingStore()->get('unknownUserCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('compliantDeviceCount', $this->getCompliantDeviceCount());
        $writer->writeIntegerValue('compliantUserCount', $this->getCompliantUserCount());
        $writer->writeIntegerValue('conflictDeviceCount', $this->getConflictDeviceCount());
        $writer->writeIntegerValue('conflictUserCount', $this->getConflictUserCount());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeIntegerValue('errorDeviceCount', $this->getErrorDeviceCount());
        $writer->writeIntegerValue('errorUserCount', $this->getErrorUserCount());
        $writer->writeIntegerValue('nonCompliantDeviceCount', $this->getNonCompliantDeviceCount());
        $writer->writeIntegerValue('nonCompliantUserCount', $this->getNonCompliantUserCount());
        $writer->writeIntegerValue('notApplicableDeviceCount', $this->getNotApplicableDeviceCount());
        $writer->writeIntegerValue('notApplicableUserCount', $this->getNotApplicableUserCount());
        $writer->writeIntegerValue('remediatedDeviceCount', $this->getRemediatedDeviceCount());
        $writer->writeIntegerValue('remediatedUserCount', $this->getRemediatedUserCount());
        $writer->writeIntegerValue('unknownDeviceCount', $this->getUnknownDeviceCount());
        $writer->writeIntegerValue('unknownUserCount', $this->getUnknownUserCount());
    }

    /**
     * Sets the compliantDeviceCount property value. Number of compliant devices.
     * @param int|null $value Value to set for the compliantDeviceCount property.
    */
    public function setCompliantDeviceCount(?int $value): void {
        $this->getBackingStore()->set('compliantDeviceCount', $value);
    }

    /**
     * Sets the compliantUserCount property value. Number of compliant users.
     * @param int|null $value Value to set for the compliantUserCount property.
    */
    public function setCompliantUserCount(?int $value): void {
        $this->getBackingStore()->set('compliantUserCount', $value);
    }

    /**
     * Sets the conflictDeviceCount property value. Number of conflict devices.
     * @param int|null $value Value to set for the conflictDeviceCount property.
    */
    public function setConflictDeviceCount(?int $value): void {
        $this->getBackingStore()->set('conflictDeviceCount', $value);
    }

    /**
     * Sets the conflictUserCount property value. Number of conflict users.
     * @param int|null $value Value to set for the conflictUserCount property.
    */
    public function setConflictUserCount(?int $value): void {
        $this->getBackingStore()->set('conflictUserCount', $value);
    }

    /**
     * Sets the displayName property value. The name of the policy.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the errorDeviceCount property value. Number of devices had error.
     * @param int|null $value Value to set for the errorDeviceCount property.
    */
    public function setErrorDeviceCount(?int $value): void {
        $this->getBackingStore()->set('errorDeviceCount', $value);
    }

    /**
     * Sets the errorUserCount property value. Number of users had error.
     * @param int|null $value Value to set for the errorUserCount property.
    */
    public function setErrorUserCount(?int $value): void {
        $this->getBackingStore()->set('errorUserCount', $value);
    }

    /**
     * Sets the nonCompliantDeviceCount property value. Number of non compliant devices.
     * @param int|null $value Value to set for the nonCompliantDeviceCount property.
    */
    public function setNonCompliantDeviceCount(?int $value): void {
        $this->getBackingStore()->set('nonCompliantDeviceCount', $value);
    }

    /**
     * Sets the nonCompliantUserCount property value. Number of non compliant users.
     * @param int|null $value Value to set for the nonCompliantUserCount property.
    */
    public function setNonCompliantUserCount(?int $value): void {
        $this->getBackingStore()->set('nonCompliantUserCount', $value);
    }

    /**
     * Sets the notApplicableDeviceCount property value. Number of not applicable devices.
     * @param int|null $value Value to set for the notApplicableDeviceCount property.
    */
    public function setNotApplicableDeviceCount(?int $value): void {
        $this->getBackingStore()->set('notApplicableDeviceCount', $value);
    }

    /**
     * Sets the notApplicableUserCount property value. Number of not applicable users.
     * @param int|null $value Value to set for the notApplicableUserCount property.
    */
    public function setNotApplicableUserCount(?int $value): void {
        $this->getBackingStore()->set('notApplicableUserCount', $value);
    }

    /**
     * Sets the remediatedDeviceCount property value. Number of remediated devices.
     * @param int|null $value Value to set for the remediatedDeviceCount property.
    */
    public function setRemediatedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('remediatedDeviceCount', $value);
    }

    /**
     * Sets the remediatedUserCount property value. Number of remediated users.
     * @param int|null $value Value to set for the remediatedUserCount property.
    */
    public function setRemediatedUserCount(?int $value): void {
        $this->getBackingStore()->set('remediatedUserCount', $value);
    }

    /**
     * Sets the unknownDeviceCount property value. Number of unknown devices.
     * @param int|null $value Value to set for the unknownDeviceCount property.
    */
    public function setUnknownDeviceCount(?int $value): void {
        $this->getBackingStore()->set('unknownDeviceCount', $value);
    }

    /**
     * Sets the unknownUserCount property value. Number of unknown users.
     * @param int|null $value Value to set for the unknownUserCount property.
    */
    public function setUnknownUserCount(?int $value): void {
        $this->getBackingStore()->set('unknownUserCount', $value);
    }

}
