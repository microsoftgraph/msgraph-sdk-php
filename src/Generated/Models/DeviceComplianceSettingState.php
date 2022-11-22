<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceComplianceSettingState extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceComplianceSettingState {
        return new DeviceComplianceSettingState();
    }

    /**
     * Gets the complianceGracePeriodExpirationDateTime property value. The DateTime when device compliance grace period expires
     * @return DateTime|null
    */
    public function getComplianceGracePeriodExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('complianceGracePeriodExpirationDateTime');
    }

    /**
     * Gets the deviceId property value. The Device Id that is being reported
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->getBackingStore()->get('deviceId');
    }

    /**
     * Gets the deviceModel property value. The device model that is being reported
     * @return string|null
    */
    public function getDeviceModel(): ?string {
        return $this->getBackingStore()->get('deviceModel');
    }

    /**
     * Gets the deviceName property value. The Device Name that is being reported
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->getBackingStore()->get('deviceName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'complianceGracePeriodExpirationDateTime' => fn(ParseNode $n) => $o->setComplianceGracePeriodExpirationDateTime($n->getDateTimeValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceModel' => fn(ParseNode $n) => $o->setDeviceModel($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'setting' => fn(ParseNode $n) => $o->setSetting($n->getStringValue()),
            'settingName' => fn(ParseNode $n) => $o->setSettingName($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(ComplianceStatus::class)),
            'userEmail' => fn(ParseNode $n) => $o->setUserEmail($n->getStringValue()),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the setting property value. The setting class name and property name.
     * @return string|null
    */
    public function getSetting(): ?string {
        return $this->getBackingStore()->get('setting');
    }

    /**
     * Gets the settingName property value. The Setting Name that is being reported
     * @return string|null
    */
    public function getSettingName(): ?string {
        return $this->getBackingStore()->get('settingName');
    }

    /**
     * Gets the state property value. The state property
     * @return ComplianceStatus|null
    */
    public function getState(): ?ComplianceStatus {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Gets the userEmail property value. The User email address that is being reported
     * @return string|null
    */
    public function getUserEmail(): ?string {
        return $this->getBackingStore()->get('userEmail');
    }

    /**
     * Gets the userId property value. The user Id that is being reported
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->getBackingStore()->get('userId');
    }

    /**
     * Gets the userName property value. The User Name that is being reported
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->getBackingStore()->get('userName');
    }

    /**
     * Gets the userPrincipalName property value. The User PrincipalName that is being reported
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        return $this->getBackingStore()->get('userPrincipalName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('complianceGracePeriodExpirationDateTime', $this->getComplianceGracePeriodExpirationDateTime());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceModel', $this->getDeviceModel());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('setting', $this->getSetting());
        $writer->writeStringValue('settingName', $this->getSettingName());
        $writer->writeEnumValue('state', $this->getState());
        $writer->writeStringValue('userEmail', $this->getUserEmail());
        $writer->writeStringValue('userId', $this->getUserId());
        $writer->writeStringValue('userName', $this->getUserName());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the complianceGracePeriodExpirationDateTime property value. The DateTime when device compliance grace period expires
     *  @param DateTime|null $value Value to set for the complianceGracePeriodExpirationDateTime property.
    */
    public function setComplianceGracePeriodExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('complianceGracePeriodExpirationDateTime', $value);
    }

    /**
     * Sets the deviceId property value. The Device Id that is being reported
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceModel property value. The device model that is being reported
     *  @param string|null $value Value to set for the deviceModel property.
    */
    public function setDeviceModel(?string $value): void {
        $this->getBackingStore()->set('deviceModel', $value);
    }

    /**
     * Sets the deviceName property value. The Device Name that is being reported
     *  @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the setting property value. The setting class name and property name.
     *  @param string|null $value Value to set for the setting property.
    */
    public function setSetting(?string $value): void {
        $this->getBackingStore()->set('setting', $value);
    }

    /**
     * Sets the settingName property value. The Setting Name that is being reported
     *  @param string|null $value Value to set for the settingName property.
    */
    public function setSettingName(?string $value): void {
        $this->getBackingStore()->set('settingName', $value);
    }

    /**
     * Sets the state property value. The state property
     *  @param ComplianceStatus|null $value Value to set for the state property.
    */
    public function setState(?ComplianceStatus $value): void {
        $this->getBackingStore()->set('state', $value);
    }

    /**
     * Sets the userEmail property value. The User email address that is being reported
     *  @param string|null $value Value to set for the userEmail property.
    */
    public function setUserEmail(?string $value): void {
        $this->getBackingStore()->set('userEmail', $value);
    }

    /**
     * Sets the userId property value. The user Id that is being reported
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value): void {
        $this->getBackingStore()->set('userId', $value);
    }

    /**
     * Sets the userName property value. The User Name that is being reported
     *  @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value): void {
        $this->getBackingStore()->set('userName', $value);
    }

    /**
     * Sets the userPrincipalName property value. The User PrincipalName that is being reported
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
