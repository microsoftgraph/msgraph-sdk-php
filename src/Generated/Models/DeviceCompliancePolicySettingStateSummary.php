<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Device Compilance Policy Setting State summary across the account.
*/
class DeviceCompliancePolicySettingStateSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceCompliancePolicySettingStateSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceCompliancePolicySettingStateSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceCompliancePolicySettingStateSummary {
        return new DeviceCompliancePolicySettingStateSummary();
    }

    /**
     * Gets the compliantDeviceCount property value. Number of compliant devices
     * @return int|null
    */
    public function getCompliantDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('compliantDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliantDeviceCount'");
    }

    /**
     * Gets the conflictDeviceCount property value. Number of conflict devices
     * @return int|null
    */
    public function getConflictDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('conflictDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conflictDeviceCount'");
    }

    /**
     * Gets the deviceComplianceSettingStates property value. The deviceComplianceSettingStates property
     * @return array<DeviceComplianceSettingState>|null
    */
    public function getDeviceComplianceSettingStates(): ?array {
        $val = $this->getBackingStore()->get('deviceComplianceSettingStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceComplianceSettingState::class);
            /** @var array<DeviceComplianceSettingState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceComplianceSettingStates'");
    }

    /**
     * Gets the errorDeviceCount property value. Number of error devices
     * @return int|null
    */
    public function getErrorDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('errorDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorDeviceCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'compliantDeviceCount' => fn(ParseNode $n) => $o->setCompliantDeviceCount($n->getIntegerValue()),
            'conflictDeviceCount' => fn(ParseNode $n) => $o->setConflictDeviceCount($n->getIntegerValue()),
            'deviceComplianceSettingStates' => fn(ParseNode $n) => $o->setDeviceComplianceSettingStates($n->getCollectionOfObjectValues([DeviceComplianceSettingState::class, 'createFromDiscriminatorValue'])),
            'errorDeviceCount' => fn(ParseNode $n) => $o->setErrorDeviceCount($n->getIntegerValue()),
            'nonCompliantDeviceCount' => fn(ParseNode $n) => $o->setNonCompliantDeviceCount($n->getIntegerValue()),
            'notApplicableDeviceCount' => fn(ParseNode $n) => $o->setNotApplicableDeviceCount($n->getIntegerValue()),
            'platformType' => fn(ParseNode $n) => $o->setPlatformType($n->getEnumValue(PolicyPlatformType::class)),
            'remediatedDeviceCount' => fn(ParseNode $n) => $o->setRemediatedDeviceCount($n->getIntegerValue()),
            'setting' => fn(ParseNode $n) => $o->setSetting($n->getStringValue()),
            'settingName' => fn(ParseNode $n) => $o->setSettingName($n->getStringValue()),
            'unknownDeviceCount' => fn(ParseNode $n) => $o->setUnknownDeviceCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the nonCompliantDeviceCount property value. Number of NonCompliant devices
     * @return int|null
    */
    public function getNonCompliantDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('nonCompliantDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nonCompliantDeviceCount'");
    }

    /**
     * Gets the notApplicableDeviceCount property value. Number of not applicable devices
     * @return int|null
    */
    public function getNotApplicableDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('notApplicableDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notApplicableDeviceCount'");
    }

    /**
     * Gets the platformType property value. Supported platform types for policies.
     * @return PolicyPlatformType|null
    */
    public function getPlatformType(): ?PolicyPlatformType {
        $val = $this->getBackingStore()->get('platformType');
        if (is_null($val) || $val instanceof PolicyPlatformType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'platformType'");
    }

    /**
     * Gets the remediatedDeviceCount property value. Number of remediated devices
     * @return int|null
    */
    public function getRemediatedDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('remediatedDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'remediatedDeviceCount'");
    }

    /**
     * Gets the setting property value. The setting class name and property name.
     * @return string|null
    */
    public function getSetting(): ?string {
        $val = $this->getBackingStore()->get('setting');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'setting'");
    }

    /**
     * Gets the settingName property value. Name of the setting.
     * @return string|null
    */
    public function getSettingName(): ?string {
        $val = $this->getBackingStore()->get('settingName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingName'");
    }

    /**
     * Gets the unknownDeviceCount property value. Number of unknown devices
     * @return int|null
    */
    public function getUnknownDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('unknownDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unknownDeviceCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('compliantDeviceCount', $this->getCompliantDeviceCount());
        $writer->writeIntegerValue('conflictDeviceCount', $this->getConflictDeviceCount());
        $writer->writeCollectionOfObjectValues('deviceComplianceSettingStates', $this->getDeviceComplianceSettingStates());
        $writer->writeIntegerValue('errorDeviceCount', $this->getErrorDeviceCount());
        $writer->writeIntegerValue('nonCompliantDeviceCount', $this->getNonCompliantDeviceCount());
        $writer->writeIntegerValue('notApplicableDeviceCount', $this->getNotApplicableDeviceCount());
        $writer->writeEnumValue('platformType', $this->getPlatformType());
        $writer->writeIntegerValue('remediatedDeviceCount', $this->getRemediatedDeviceCount());
        $writer->writeStringValue('setting', $this->getSetting());
        $writer->writeStringValue('settingName', $this->getSettingName());
        $writer->writeIntegerValue('unknownDeviceCount', $this->getUnknownDeviceCount());
    }

    /**
     * Sets the compliantDeviceCount property value. Number of compliant devices
     * @param int|null $value Value to set for the compliantDeviceCount property.
    */
    public function setCompliantDeviceCount(?int $value): void {
        $this->getBackingStore()->set('compliantDeviceCount', $value);
    }

    /**
     * Sets the conflictDeviceCount property value. Number of conflict devices
     * @param int|null $value Value to set for the conflictDeviceCount property.
    */
    public function setConflictDeviceCount(?int $value): void {
        $this->getBackingStore()->set('conflictDeviceCount', $value);
    }

    /**
     * Sets the deviceComplianceSettingStates property value. The deviceComplianceSettingStates property
     * @param array<DeviceComplianceSettingState>|null $value Value to set for the deviceComplianceSettingStates property.
    */
    public function setDeviceComplianceSettingStates(?array $value): void {
        $this->getBackingStore()->set('deviceComplianceSettingStates', $value);
    }

    /**
     * Sets the errorDeviceCount property value. Number of error devices
     * @param int|null $value Value to set for the errorDeviceCount property.
    */
    public function setErrorDeviceCount(?int $value): void {
        $this->getBackingStore()->set('errorDeviceCount', $value);
    }

    /**
     * Sets the nonCompliantDeviceCount property value. Number of NonCompliant devices
     * @param int|null $value Value to set for the nonCompliantDeviceCount property.
    */
    public function setNonCompliantDeviceCount(?int $value): void {
        $this->getBackingStore()->set('nonCompliantDeviceCount', $value);
    }

    /**
     * Sets the notApplicableDeviceCount property value. Number of not applicable devices
     * @param int|null $value Value to set for the notApplicableDeviceCount property.
    */
    public function setNotApplicableDeviceCount(?int $value): void {
        $this->getBackingStore()->set('notApplicableDeviceCount', $value);
    }

    /**
     * Sets the platformType property value. Supported platform types for policies.
     * @param PolicyPlatformType|null $value Value to set for the platformType property.
    */
    public function setPlatformType(?PolicyPlatformType $value): void {
        $this->getBackingStore()->set('platformType', $value);
    }

    /**
     * Sets the remediatedDeviceCount property value. Number of remediated devices
     * @param int|null $value Value to set for the remediatedDeviceCount property.
    */
    public function setRemediatedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('remediatedDeviceCount', $value);
    }

    /**
     * Sets the setting property value. The setting class name and property name.
     * @param string|null $value Value to set for the setting property.
    */
    public function setSetting(?string $value): void {
        $this->getBackingStore()->set('setting', $value);
    }

    /**
     * Sets the settingName property value. Name of the setting.
     * @param string|null $value Value to set for the settingName property.
    */
    public function setSettingName(?string $value): void {
        $this->getBackingStore()->set('settingName', $value);
    }

    /**
     * Sets the unknownDeviceCount property value. Number of unknown devices
     * @param int|null $value Value to set for the unknownDeviceCount property.
    */
    public function setUnknownDeviceCount(?int $value): void {
        $this->getBackingStore()->set('unknownDeviceCount', $value);
    }

}
