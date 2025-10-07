<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Support for this Entity is being deprecated starting May 2026 & will no longer be supported.
*/
class DeviceConfigurationState extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceConfigurationState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceConfigurationState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceConfigurationState {
        return new DeviceConfigurationState();
    }

    /**
     * Gets the displayName property value. The name of the policy for this policyBase
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'platformType' => fn(ParseNode $n) => $o->setPlatformType($n->getEnumValue(PolicyPlatformType::class)),
            'settingCount' => fn(ParseNode $n) => $o->setSettingCount($n->getIntegerValue()),
            'settingStates' => fn(ParseNode $n) => $o->setSettingStates($n->getCollectionOfObjectValues([DeviceConfigurationSettingState::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(ComplianceStatus::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
        ]);
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
     * Gets the settingCount property value. Count of how many setting a policy holds
     * @return int|null
    */
    public function getSettingCount(): ?int {
        $val = $this->getBackingStore()->get('settingCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingCount'");
    }

    /**
     * Gets the settingStates property value. The settingStates property
     * @return array<DeviceConfigurationSettingState>|null
    */
    public function getSettingStates(): ?array {
        $val = $this->getBackingStore()->get('settingStates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceConfigurationSettingState::class);
            /** @var array<DeviceConfigurationSettingState>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingStates'");
    }

    /**
     * Gets the state property value. The state property
     * @return ComplianceStatus|null
    */
    public function getState(): ?ComplianceStatus {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof ComplianceStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Gets the version property value. The version of the policy
     * @return int|null
    */
    public function getVersion(): ?int {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('platformType', $this->getPlatformType());
        $writer->writeIntegerValue('settingCount', $this->getSettingCount());
        $writer->writeCollectionOfObjectValues('settingStates', $this->getSettingStates());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeIntegerValue('version', $this->getVersion());
    }

    /**
     * Sets the displayName property value. The name of the policy for this policyBase
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the platformType property value. Supported platform types for policies.
     * @param PolicyPlatformType|null $value Value to set for the platformType property.
    */
    public function setPlatformType(?PolicyPlatformType $value): void {
        $this->getBackingStore()->set('platformType', $value);
    }

    /**
     * Sets the settingCount property value. Count of how many setting a policy holds
     * @param int|null $value Value to set for the settingCount property.
    */
    public function setSettingCount(?int $value): void {
        $this->getBackingStore()->set('settingCount', $value);
    }

    /**
     * Sets the settingStates property value. The settingStates property
     * @param array<DeviceConfigurationSettingState>|null $value Value to set for the settingStates property.
    */
    public function setSettingStates(?array $value): void {
        $this->getBackingStore()->set('settingStates', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param ComplianceStatus|null $value Value to set for the state property.
    */
    public function setState(?ComplianceStatus $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the version property value. The version of the policy
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
