<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceComplianceUserStatus extends Entity implements Parsable 
{
    /**
     * @var int|null $devicesCount Devices count for that user.
    */
    private ?int $devicesCount = null;
    
    /**
     * @var DateTime|null $lastReportedDateTime Last modified date time of the policy report.
    */
    private ?DateTime $lastReportedDateTime = null;
    
    /**
     * @var ComplianceStatus|null $status The status property
    */
    private ?ComplianceStatus $status = null;
    
    /**
     * @var string|null $userDisplayName User name of the DevicePolicyStatus.
    */
    private ?string $userDisplayName = null;
    
    /**
     * @var string|null $userPrincipalName UserPrincipalName.
    */
    private ?string $userPrincipalName = null;
    
    /**
     * Instantiates a new deviceComplianceUserStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceComplianceUserStatus');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceComplianceUserStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceComplianceUserStatus {
        return new DeviceComplianceUserStatus();
    }

    /**
     * Gets the devicesCount property value. Devices count for that user.
     * @return int|null
    */
    public function getDevicesCount(): ?int {
        return $this->devicesCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'devicesCount' => function (ParseNode $n) use ($o) { $o->setDevicesCount($n->getIntegerValue()); },
            'lastReportedDateTime' => function (ParseNode $n) use ($o) { $o->setLastReportedDateTime($n->getDateTimeValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(ComplianceStatus::class)); },
            'userDisplayName' => function (ParseNode $n) use ($o) { $o->setUserDisplayName($n->getStringValue()); },
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
     * Gets the status property value. The status property
     * @return ComplianceStatus|null
    */
    public function getStatus(): ?ComplianceStatus {
        return $this->status;
    }

    /**
     * Gets the userDisplayName property value. User name of the DevicePolicyStatus.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        return $this->userDisplayName;
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
        $writer->writeIntegerValue('devicesCount', $this->devicesCount);
        $writer->writeDateTimeValue('lastReportedDateTime', $this->lastReportedDateTime);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeStringValue('userDisplayName', $this->userDisplayName);
        $writer->writeStringValue('userPrincipalName', $this->userPrincipalName);
    }

    /**
     * Sets the devicesCount property value. Devices count for that user.
     *  @param int|null $value Value to set for the devicesCount property.
    */
    public function setDevicesCount(?int $value ): void {
        $this->devicesCount = $value;
    }

    /**
     * Sets the lastReportedDateTime property value. Last modified date time of the policy report.
     *  @param DateTime|null $value Value to set for the lastReportedDateTime property.
    */
    public function setLastReportedDateTime(?DateTime $value ): void {
        $this->lastReportedDateTime = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param ComplianceStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ComplianceStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the userDisplayName property value. User name of the DevicePolicyStatus.
     *  @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value ): void {
        $this->userDisplayName = $value;
    }

    /**
     * Sets the userPrincipalName property value. UserPrincipalName.
     *  @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value ): void {
        $this->userPrincipalName = $value;
    }

}
