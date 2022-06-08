<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceConfigurationState extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName The name of the policy for this policyBase
    */
    private ?string $displayName = null;
    
    /**
     * @var PolicyPlatformType|null $platformType Platform type that the policy applies to
    */
    private ?PolicyPlatformType $platformType = null;
    
    /**
     * @var int|null $settingCount Count of how many setting a policy holds
    */
    private ?int $settingCount = null;
    
    /**
     * @var array<DeviceConfigurationSettingState>|null $settingStates The settingStates property
    */
    private ?array $settingStates = null;
    
    /**
     * @var ComplianceStatus|null $state The compliance state of the policy
    */
    private ?ComplianceStatus $state = null;
    
    /**
     * @var int|null $version The version of the policy
    */
    private ?int $version = null;
    
    /**
     * Instantiates a new deviceConfigurationState and sets the default values.
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
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'platformType' => function (ParseNode $n) use ($o) { $o->setPlatformType($n->getEnumValue(PolicyPlatformType::class)); },
            'settingCount' => function (ParseNode $n) use ($o) { $o->setSettingCount($n->getIntegerValue()); },
            'settingStates' => function (ParseNode $n) use ($o) { $o->setSettingStates($n->getCollectionOfObjectValues(array(DeviceConfigurationSettingState::class, 'createFromDiscriminatorValue'))); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(ComplianceStatus::class)); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the platformType property value. Platform type that the policy applies to
     * @return PolicyPlatformType|null
    */
    public function getPlatformType(): ?PolicyPlatformType {
        return $this->platformType;
    }

    /**
     * Gets the settingCount property value. Count of how many setting a policy holds
     * @return int|null
    */
    public function getSettingCount(): ?int {
        return $this->settingCount;
    }

    /**
     * Gets the settingStates property value. The settingStates property
     * @return array<DeviceConfigurationSettingState>|null
    */
    public function getSettingStates(): ?array {
        return $this->settingStates;
    }

    /**
     * Gets the state property value. The compliance state of the policy
     * @return ComplianceStatus|null
    */
    public function getState(): ?ComplianceStatus {
        return $this->state;
    }

    /**
     * Gets the version property value. The version of the policy
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeEnumValue('platformType', $this->platformType);
        $writer->writeIntegerValue('settingCount', $this->settingCount);
        $writer->writeCollectionOfObjectValues('settingStates', $this->settingStates);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeIntegerValue('version', $this->version);
    }

    /**
     * Sets the displayName property value. The name of the policy for this policyBase
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the platformType property value. Platform type that the policy applies to
     *  @param PolicyPlatformType|null $value Value to set for the platformType property.
    */
    public function setPlatformType(?PolicyPlatformType $value ): void {
        $this->platformType = $value;
    }

    /**
     * Sets the settingCount property value. Count of how many setting a policy holds
     *  @param int|null $value Value to set for the settingCount property.
    */
    public function setSettingCount(?int $value ): void {
        $this->settingCount = $value;
    }

    /**
     * Sets the settingStates property value. The settingStates property
     *  @param array<DeviceConfigurationSettingState>|null $value Value to set for the settingStates property.
    */
    public function setSettingStates(?array $value ): void {
        $this->settingStates = $value;
    }

    /**
     * Sets the state property value. The compliance state of the policy
     *  @param ComplianceStatus|null $value Value to set for the state property.
    */
    public function setState(?ComplianceStatus $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the version property value. The version of the policy
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value ): void {
        $this->version = $value;
    }

}
