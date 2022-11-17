<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosUpdateDeviceStatus extends Entity implements Parsable 
{
    /**
     * Instantiates a new iosUpdateDeviceStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosUpdateDeviceStatus');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosUpdateDeviceStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosUpdateDeviceStatus {
        return new IosUpdateDeviceStatus();
    }

    /**
     * Gets the complianceGracePeriodExpirationDateTime property value. The DateTime when device compliance grace period expires
     * @return DateTime|null
    */
    public function getComplianceGracePeriodExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('complianceGracePeriodExpirationDateTime');
    }

    /**
     * Gets the deviceDisplayName property value. Device name of the DevicePolicyStatus.
     * @return string|null
    */
    public function getDeviceDisplayName(): ?string {
        return $this->getBackingStore()->get('deviceDisplayName');
    }

    /**
     * Gets the deviceId property value. The device id that is being reported.
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'complianceGracePeriodExpirationDateTime' => fn(ParseNode $n) => $o->setComplianceGracePeriodExpirationDateTime($n->getDateTimeValue()),
            'deviceDisplayName' => fn(ParseNode $n) => $o->setDeviceDisplayName($n->getStringValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceModel' => fn(ParseNode $n) => $o->setDeviceModel($n->getStringValue()),
            'installStatus' => fn(ParseNode $n) => $o->setInstallStatus($n->getEnumValue(IosUpdatesInstallStatus::class)),
            'lastReportedDateTime' => fn(ParseNode $n) => $o->setLastReportedDateTime($n->getDateTimeValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ComplianceStatus::class)),
            'userId' => fn(ParseNode $n) => $o->setUserId($n->getStringValue()),
            'userName' => fn(ParseNode $n) => $o->setUserName($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the installStatus property value. The installStatus property
     * @return IosUpdatesInstallStatus|null
    */
    public function getInstallStatus(): ?IosUpdatesInstallStatus {
        return $this->getBackingStore()->get('installStatus');
    }

    /**
     * Gets the lastReportedDateTime property value. Last modified date time of the policy report.
     * @return DateTime|null
    */
    public function getLastReportedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastReportedDateTime');
    }

    /**
     * Gets the osVersion property value. The device version that is being reported.
     * @return string|null
    */
    public function getOsVersion(): ?string {
        return $this->getBackingStore()->get('osVersion');
    }

    /**
     * Gets the status property value. The status property
     * @return ComplianceStatus|null
    */
    public function getStatus(): ?ComplianceStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the userId property value. The User id that is being reported.
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
     * Gets the userPrincipalName property value. UserPrincipalName.
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
        $writer->writeStringValue('deviceDisplayName', $this->getDeviceDisplayName());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceModel', $this->getDeviceModel());
        $writer->writeEnumValue('installStatus', $this->getInstallStatus());
        $writer->writeDateTimeValue('lastReportedDateTime', $this->getLastReportedDateTime());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
        $writer->writeEnumValue('status', $this->getStatus());
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
     * Sets the deviceDisplayName property value. Device name of the DevicePolicyStatus.
     *  @param string|null $value Value to set for the deviceDisplayName property.
    */
    public function setDeviceDisplayName(?string $value): void {
        $this->getBackingStore()->set('deviceDisplayName', $value);
    }

    /**
     * Sets the deviceId property value. The device id that is being reported.
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
     * Sets the installStatus property value. The installStatus property
     *  @param IosUpdatesInstallStatus|null $value Value to set for the installStatus property.
    */
    public function setInstallStatus(?IosUpdatesInstallStatus $value): void {
        $this->getBackingStore()->set('installStatus', $value);
    }

    /**
     * Sets the lastReportedDateTime property value. Last modified date time of the policy report.
     *  @param DateTime|null $value Value to set for the lastReportedDateTime property.
    */
    public function setLastReportedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastReportedDateTime', $value);
    }

    /**
     * Sets the osVersion property value. The device version that is being reported.
     *  @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the status property value. The status property
     *  @param ComplianceStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ComplianceStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the userId property value. The User id that is being reported.
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
     * Sets the userPrincipalName property value. UserPrincipalName.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
