<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceCompliancePolicySettingStateSummary extends Entity 
{
    /** @var int|null $compliantDeviceCount Number of compliant devices */
    private ?int $compliantDeviceCount = null;
    
    /** @var int|null $conflictDeviceCount Number of conflict devices */
    private ?int $conflictDeviceCount = null;
    
    /** @var array<DeviceComplianceSettingState>|null $deviceComplianceSettingStates Not yet documented */
    private ?array $deviceComplianceSettingStates = null;
    
    /** @var int|null $errorDeviceCount Number of error devices */
    private ?int $errorDeviceCount = null;
    
    /** @var int|null $nonCompliantDeviceCount Number of NonCompliant devices */
    private ?int $nonCompliantDeviceCount = null;
    
    /** @var int|null $notApplicableDeviceCount Number of not applicable devices */
    private ?int $notApplicableDeviceCount = null;
    
    /** @var PolicyPlatformType|null $platformType Setting platform. Possible values are: android, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, all. */
    private ?PolicyPlatformType $platformType = null;
    
    /** @var int|null $remediatedDeviceCount Number of remediated devices */
    private ?int $remediatedDeviceCount = null;
    
    /** @var string|null $setting The setting class name and property name. */
    private ?string $setting = null;
    
    /** @var string|null $settingName Name of the setting. */
    private ?string $settingName = null;
    
    /** @var int|null $unknownDeviceCount Number of unknown devices */
    private ?int $unknownDeviceCount = null;
    
    /**
     * Instantiates a new deviceCompliancePolicySettingStateSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceCompliancePolicySettingStateSummary
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceCompliancePolicySettingStateSummary {
        return new DeviceCompliancePolicySettingStateSummary();
    }

    /**
     * Gets the compliantDeviceCount property value. Number of compliant devices
     * @return int|null
    */
    public function getCompliantDeviceCount(): ?int {
        return $this->compliantDeviceCount;
    }

    /**
     * Gets the conflictDeviceCount property value. Number of conflict devices
     * @return int|null
    */
    public function getConflictDeviceCount(): ?int {
        return $this->conflictDeviceCount;
    }

    /**
     * Gets the deviceComplianceSettingStates property value. Not yet documented
     * @return array<DeviceComplianceSettingState>|null
    */
    public function getDeviceComplianceSettingStates(): ?array {
        return $this->deviceComplianceSettingStates;
    }

    /**
     * Gets the errorDeviceCount property value. Number of error devices
     * @return int|null
    */
    public function getErrorDeviceCount(): ?int {
        return $this->errorDeviceCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'compliantDeviceCount' => function (self $o, ParseNode $n) { $o->setCompliantDeviceCount($n->getIntegerValue()); },
            'conflictDeviceCount' => function (self $o, ParseNode $n) { $o->setConflictDeviceCount($n->getIntegerValue()); },
            'deviceComplianceSettingStates' => function (self $o, ParseNode $n) { $o->setDeviceComplianceSettingStates($n->getCollectionOfObjectValues(DeviceComplianceSettingState::class)); },
            'errorDeviceCount' => function (self $o, ParseNode $n) { $o->setErrorDeviceCount($n->getIntegerValue()); },
            'nonCompliantDeviceCount' => function (self $o, ParseNode $n) { $o->setNonCompliantDeviceCount($n->getIntegerValue()); },
            'notApplicableDeviceCount' => function (self $o, ParseNode $n) { $o->setNotApplicableDeviceCount($n->getIntegerValue()); },
            'platformType' => function (self $o, ParseNode $n) { $o->setPlatformType($n->getEnumValue(PolicyPlatformType::class)); },
            'remediatedDeviceCount' => function (self $o, ParseNode $n) { $o->setRemediatedDeviceCount($n->getIntegerValue()); },
            'setting' => function (self $o, ParseNode $n) { $o->setSetting($n->getStringValue()); },
            'settingName' => function (self $o, ParseNode $n) { $o->setSettingName($n->getStringValue()); },
            'unknownDeviceCount' => function (self $o, ParseNode $n) { $o->setUnknownDeviceCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the nonCompliantDeviceCount property value. Number of NonCompliant devices
     * @return int|null
    */
    public function getNonCompliantDeviceCount(): ?int {
        return $this->nonCompliantDeviceCount;
    }

    /**
     * Gets the notApplicableDeviceCount property value. Number of not applicable devices
     * @return int|null
    */
    public function getNotApplicableDeviceCount(): ?int {
        return $this->notApplicableDeviceCount;
    }

    /**
     * Gets the platformType property value. Setting platform. Possible values are: android, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, all.
     * @return PolicyPlatformType|null
    */
    public function getPlatformType(): ?PolicyPlatformType {
        return $this->platformType;
    }

    /**
     * Gets the remediatedDeviceCount property value. Number of remediated devices
     * @return int|null
    */
    public function getRemediatedDeviceCount(): ?int {
        return $this->remediatedDeviceCount;
    }

    /**
     * Gets the setting property value. The setting class name and property name.
     * @return string|null
    */
    public function getSetting(): ?string {
        return $this->setting;
    }

    /**
     * Gets the settingName property value. Name of the setting.
     * @return string|null
    */
    public function getSettingName(): ?string {
        return $this->settingName;
    }

    /**
     * Gets the unknownDeviceCount property value. Number of unknown devices
     * @return int|null
    */
    public function getUnknownDeviceCount(): ?int {
        return $this->unknownDeviceCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('compliantDeviceCount', $this->compliantDeviceCount);
        $writer->writeIntegerValue('conflictDeviceCount', $this->conflictDeviceCount);
        $writer->writeCollectionOfObjectValues('deviceComplianceSettingStates', $this->deviceComplianceSettingStates);
        $writer->writeIntegerValue('errorDeviceCount', $this->errorDeviceCount);
        $writer->writeIntegerValue('nonCompliantDeviceCount', $this->nonCompliantDeviceCount);
        $writer->writeIntegerValue('notApplicableDeviceCount', $this->notApplicableDeviceCount);
        $writer->writeEnumValue('platformType', $this->platformType);
        $writer->writeIntegerValue('remediatedDeviceCount', $this->remediatedDeviceCount);
        $writer->writeStringValue('setting', $this->setting);
        $writer->writeStringValue('settingName', $this->settingName);
        $writer->writeIntegerValue('unknownDeviceCount', $this->unknownDeviceCount);
    }

    /**
     * Sets the compliantDeviceCount property value. Number of compliant devices
     *  @param int|null $value Value to set for the compliantDeviceCount property.
    */
    public function setCompliantDeviceCount(?int $value ): void {
        $this->compliantDeviceCount = $value;
    }

    /**
     * Sets the conflictDeviceCount property value. Number of conflict devices
     *  @param int|null $value Value to set for the conflictDeviceCount property.
    */
    public function setConflictDeviceCount(?int $value ): void {
        $this->conflictDeviceCount = $value;
    }

    /**
     * Sets the deviceComplianceSettingStates property value. Not yet documented
     *  @param array<DeviceComplianceSettingState>|null $value Value to set for the deviceComplianceSettingStates property.
    */
    public function setDeviceComplianceSettingStates(?array $value ): void {
        $this->deviceComplianceSettingStates = $value;
    }

    /**
     * Sets the errorDeviceCount property value. Number of error devices
     *  @param int|null $value Value to set for the errorDeviceCount property.
    */
    public function setErrorDeviceCount(?int $value ): void {
        $this->errorDeviceCount = $value;
    }

    /**
     * Sets the nonCompliantDeviceCount property value. Number of NonCompliant devices
     *  @param int|null $value Value to set for the nonCompliantDeviceCount property.
    */
    public function setNonCompliantDeviceCount(?int $value ): void {
        $this->nonCompliantDeviceCount = $value;
    }

    /**
     * Sets the notApplicableDeviceCount property value. Number of not applicable devices
     *  @param int|null $value Value to set for the notApplicableDeviceCount property.
    */
    public function setNotApplicableDeviceCount(?int $value ): void {
        $this->notApplicableDeviceCount = $value;
    }

    /**
     * Sets the platformType property value. Setting platform. Possible values are: android, iOS, macOS, windowsPhone81, windows81AndLater, windows10AndLater, androidWorkProfile, all.
     *  @param PolicyPlatformType|null $value Value to set for the platformType property.
    */
    public function setPlatformType(?PolicyPlatformType $value ): void {
        $this->platformType = $value;
    }

    /**
     * Sets the remediatedDeviceCount property value. Number of remediated devices
     *  @param int|null $value Value to set for the remediatedDeviceCount property.
    */
    public function setRemediatedDeviceCount(?int $value ): void {
        $this->remediatedDeviceCount = $value;
    }

    /**
     * Sets the setting property value. The setting class name and property name.
     *  @param string|null $value Value to set for the setting property.
    */
    public function setSetting(?string $value ): void {
        $this->setting = $value;
    }

    /**
     * Sets the settingName property value. Name of the setting.
     *  @param string|null $value Value to set for the settingName property.
    */
    public function setSettingName(?string $value ): void {
        $this->settingName = $value;
    }

    /**
     * Sets the unknownDeviceCount property value. Number of unknown devices
     *  @param int|null $value Value to set for the unknownDeviceCount property.
    */
    public function setUnknownDeviceCount(?int $value ): void {
        $this->unknownDeviceCount = $value;
    }

}
