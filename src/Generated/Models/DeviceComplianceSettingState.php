<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceComplianceSettingState extends Entity 
{
    /** @var DateTime|null $complianceGracePeriodExpirationDateTime The DateTime when device compliance grace period expires */
    private ?DateTime $complianceGracePeriodExpirationDateTime = null;
    
    /** @var string|null $deviceId The Device Id that is being reported */
    private ?string $deviceId = null;
    
    /** @var string|null $deviceModel The device model that is being reported */
    private ?string $deviceModel = null;
    
    /** @var string|null $deviceName The Device Name that is being reported */
    private ?string $deviceName = null;
    
    /** @var string|null $setting The setting class name and property name. */
    private ?string $setting = null;
    
    /** @var string|null $settingName The Setting Name that is being reported */
    private ?string $settingName = null;
    
    /** @var ComplianceStatus|null $state The compliance state of the setting. Possible values are: unknown, notApplicable, compliant, remediated, nonCompliant, error, conflict, notAssigned. */
    private ?ComplianceStatus $state = null;
    
    /** @var string|null $userEmail The User email address that is being reported */
    private ?string $userEmail = null;
    
    /** @var string|null $userId The user Id that is being reported */
    private ?string $userId = null;
    
    /** @var string|null $userName The User Name that is being reported */
    private ?string $userName = null;
    
    /** @var string|null $userPrincipalName The User PrincipalName that is being reported */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new deviceComplianceSettingState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceComplianceSettingState
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceComplianceSettingState {
        return new DeviceComplianceSettingState();
    }

    /**
     * Gets the complianceGracePeriodExpirationDateTime property value. The DateTime when device compliance grace period expires
     * @return DateTime|null
    */
    public function getComplianceGracePeriodExpirationDateTime(): ?DateTime {
        return $this->complianceGracePeriodExpirationDateTime;
    }

    /**
     * Gets the deviceId property value. The Device Id that is being reported
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * Gets the deviceModel property value. The device model that is being reported
     * @return string|null
    */
    public function getDeviceModel(): ?string {
        return $this->deviceModel;
    }

    /**
     * Gets the deviceName property value. The Device Name that is being reported
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->deviceName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'complianceGracePeriodExpirationDateTime' => function (self $o, ParseNode $n) { $o->setComplianceGracePeriodExpirationDateTime($n->getDateTimeValue()); },
            'deviceId' => function (self $o, ParseNode $n) { $o->setDeviceId($n->getStringValue()); },
            'deviceModel' => function (self $o, ParseNode $n) { $o->setDeviceModel($n->getStringValue()); },
            'deviceName' => function (self $o, ParseNode $n) { $o->setDeviceName($n->getStringValue()); },
            'setting' => function (self $o, ParseNode $n) { $o->setSetting($n->getStringValue()); },
            'settingName' => function (self $o, ParseNode $n) { $o->setSettingName($n->getStringValue()); },
            'state' => function (self $o, ParseNode $n) { $o->setState($n->getEnumValue(ComplianceStatus::class)); },
            'userEmail' => function (self $o, ParseNode $n) { $o->setUserEmail($n->getStringValue()); },
            'userId' => function (self $o, ParseNode $n) { $o->setUserId($n->getStringValue()); },
            'userName' => function (self $o, ParseNode $n) { $o->setUserName($n->getStringValue()); },
            'userPrincipalName' => function (self $o, ParseNode $n) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the setting property value. The setting class name and property name.
     * @return string|null
    */
    public function getSetting(): ?string {
        return $this->setting;
    }

    /**
     * Gets the settingName property value. The Setting Name that is being reported
     * @return string|null
    */
    public function getSettingName(): ?string {
        return $this->settingName;
    }

    /**
     * Gets the state property value. The compliance state of the setting. Possible values are: unknown, notApplicable, compliant, remediated, nonCompliant, error, conflict, notAssigned.
     * @return ComplianceStatus|null
    */
    public function getState(): ?ComplianceStatus {
        return $this->state;
    }

    /**
     * Gets the userEmail property value. The User email address that is being reported
     * @return string|null
    */
    public function getUserEmail(): ?string {
        return $this->userEmail;
    }

    /**
     * Gets the userId property value. The user Id that is being reported
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the userName property value. The User Name that is being reported
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->userName;
    }

    /**
     * Gets the userPrincipalName property value. The User PrincipalName that is being reported
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->userPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('complianceGracePeriodExpirationDateTime', $this->complianceGracePeriodExpirationDateTime);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeStringValue('deviceModel', $this->deviceModel);
        $writer->writeStringValue('deviceName', $this->deviceName);
        $writer->writeStringValue('setting', $this->setting);
        $writer->writeStringValue('settingName', $this->settingName);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeStringValue('userEmail', $this->userEmail);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('userName', $this->userName);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the complianceGracePeriodExpirationDateTime property value. The DateTime when device compliance grace period expires
     *  @param DateTime|null $value Value to set for the complianceGracePeriodExpirationDateTime property.
    */
    public function setComplianceGracePeriodExpirationDateTime(?DateTime $value ): void {
        $this->complianceGracePeriodExpirationDateTime = $value;
    }

    /**
     * Sets the deviceId property value. The Device Id that is being reported
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the deviceModel property value. The device model that is being reported
     *  @param string|null $value Value to set for the deviceModel property.
    */
    public function setDeviceModel(?string $value ): void {
        $this->deviceModel = $value;
    }

    /**
     * Sets the deviceName property value. The Device Name that is being reported
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value ): void {
        $this->deviceName = $value;
    }

    /**
     * Sets the setting property value. The setting class name and property name.
     *  @param string|null $value Value to set for the setting property.
    */
    public function setSetting(?string $value ): void {
        $this->setting = $value;
    }

    /**
     * Sets the settingName property value. The Setting Name that is being reported
     *  @param string|null $value Value to set for the settingName property.
    */
    public function setSettingName(?string $value ): void {
        $this->settingName = $value;
    }

    /**
     * Sets the state property value. The compliance state of the setting. Possible values are: unknown, notApplicable, compliant, remediated, nonCompliant, error, conflict, notAssigned.
     *  @param ComplianceStatus|null $value Value to set for the state property.
    */
    public function setState(?ComplianceStatus $value ): void {
        $this->state = $value;
    }

    /**
     * Sets the userEmail property value. The User email address that is being reported
     *  @param string|null $value Value to set for the userEmail property.
    */
    public function setUserEmail(?string $value ): void {
        $this->userEmail = $value;
    }

    /**
     * Sets the userId property value. The user Id that is being reported
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the userName property value. The User Name that is being reported
     *  @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value ): void {
        $this->userName = $value;
    }

    /**
     * Sets the userPrincipalName property value. The User PrincipalName that is being reported
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
