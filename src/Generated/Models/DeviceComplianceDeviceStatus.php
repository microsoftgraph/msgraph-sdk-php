<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceComplianceDeviceStatus extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $complianceGracePeriodExpirationDateTime The DateTime when device compliance grace period expires
    */
    private ?DateTime $complianceGracePeriodExpirationDateTime = null;
    
    /**
     * @var string|null $deviceDisplayName Device name of the DevicePolicyStatus.
    */
    private ?string $deviceDisplayName = null;
    
    /**
     * @var string|null $deviceModel The device model that is being reported
    */
    private ?string $deviceModel = null;
    
    /**
     * @var DateTime|null $lastReportedDateTime Last modified date time of the policy report.
    */
    private ?DateTime $lastReportedDateTime = null;
    
    /**
     * @var ComplianceStatus|null $status Compliance status of the policy report. Possible values are: unknown, notApplicable, compliant, remediated, nonCompliant, error, conflict, notAssigned.
    */
    private ?ComplianceStatus $status = null;
    
    /**
     * @var string|null $userName The User Name that is being reported
    */
    private ?string $userName = null;
    
    /**
     * @var string|null $userPrincipalName UserPrincipalName.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new deviceComplianceDeviceStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceComplianceDeviceStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceComplianceDeviceStatus {
        return new DeviceComplianceDeviceStatus();
    }

    /**
     * Gets the complianceGracePeriodExpirationDateTime property value. The DateTime when device compliance grace period expires
     * @return DateTime|null
    */
    public function getComplianceGracePeriodExpirationDateTime(): ?DateTime {
        return $this->complianceGracePeriodExpirationDateTime;
    }

    /**
     * Gets the deviceDisplayName property value. Device name of the DevicePolicyStatus.
     * @return string|null
    */
    public function getDeviceDisplayName(): ?string {
        return $this->deviceDisplayName;
    }

    /**
     * Gets the deviceModel property value. The device model that is being reported
     * @return string|null
    */
    public function getDeviceModel(): ?string {
        return $this->deviceModel;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'complianceGracePeriodExpirationDateTime' => function (ParseNode $n) use ($o) { $o->setComplianceGracePeriodExpirationDateTime($n->getDateTimeValue()); },
            'deviceDisplayName' => function (ParseNode $n) use ($o) { $o->setDeviceDisplayName($n->getStringValue()); },
            'deviceModel' => function (ParseNode $n) use ($o) { $o->setDeviceModel($n->getStringValue()); },
            'lastReportedDateTime' => function (ParseNode $n) use ($o) { $o->setLastReportedDateTime($n->getDateTimeValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(ComplianceStatus::class)); },
            'userName' => function (ParseNode $n) use ($o) { $o->setUserName($n->getStringValue()); },
            'userPrincipalName' => function (ParseNode $n) use ($o) { $o->setUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastReportedDateTime property value. Last modified date time of the policy report.
     * @return DateTime|null
    */
    public function getLastReportedDateTime(): ?DateTime {
        return $this->lastReportedDateTime;
    }

    /**
     * Gets the status property value. Compliance status of the policy report. Possible values are: unknown, notApplicable, compliant, remediated, nonCompliant, error, conflict, notAssigned.
     * @return ComplianceStatus|null
    */
    public function getStatus(): ?ComplianceStatus {
        return $this->status;
    }

    /**
     * Gets the userName property value. The User Name that is being reported
     * @return string|null
    */
    public function getUserName(): ?string {
        return $this->userName;
    }

    /**
     * Gets the userPrincipalName property value. UserPrincipalName.
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
        $writer->writeStringValue('deviceDisplayName', $this->deviceDisplayName);
        $writer->writeStringValue('deviceModel', $this->deviceModel);
        $writer->writeDateTimeValue('lastReportedDateTime', $this->lastReportedDateTime);
        $writer->writeEnumValue('status', $this->status);
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
     * Sets the deviceDisplayName property value. Device name of the DevicePolicyStatus.
     *  @param string|null $value Value to set for the deviceDisplayName property.
    */
    public function setDeviceDisplayName(?string $value ): void {
        $this->deviceDisplayName = $value;
    }

    /**
     * Sets the deviceModel property value. The device model that is being reported
     *  @param string|null $value Value to set for the deviceModel property.
    */
    public function setDeviceModel(?string $value ): void {
        $this->deviceModel = $value;
    }

    /**
     * Sets the lastReportedDateTime property value. Last modified date time of the policy report.
     *  @param DateTime|null $value Value to set for the lastReportedDateTime property.
    */
    public function setLastReportedDateTime(?DateTime $value ): void {
        $this->lastReportedDateTime = $value;
    }

    /**
     * Sets the status property value. Compliance status of the policy report. Possible values are: unknown, notApplicable, compliant, remediated, nonCompliant, error, conflict, notAssigned.
     *  @param ComplianceStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ComplianceStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the userName property value. The User Name that is being reported
     *  @param string|null $value Value to set for the userName property.
    */
    public function setUserName(?string $value ): void {
        $this->userName = $value;
    }

    /**
     * Sets the userPrincipalName property value. UserPrincipalName.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
