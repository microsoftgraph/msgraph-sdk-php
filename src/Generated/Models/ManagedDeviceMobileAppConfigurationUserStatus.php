<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties, inherited properties and actions for an MDM mobile app configuration status for a user.
*/
class ManagedDeviceMobileAppConfigurationUserStatus extends Entity implements Parsable 
{
    /**
     * Instantiates a new ManagedDeviceMobileAppConfigurationUserStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedDeviceMobileAppConfigurationUserStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDeviceMobileAppConfigurationUserStatus {
        return new ManagedDeviceMobileAppConfigurationUserStatus();
    }

    /**
     * Gets the devicesCount property value. Devices count for that user.
     * @return int|null
    */
    public function getDevicesCount(): ?int {
        $val = $this->getBackingStore()->get('devicesCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'devicesCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'devicesCount' => fn(ParseNode $n) => $o->setDevicesCount($n->getIntegerValue()),
            'lastReportedDateTime' => fn(ParseNode $n) => $o->setLastReportedDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ComplianceStatus::class)),
            'userDisplayName' => fn(ParseNode $n) => $o->setUserDisplayName($n->getStringValue()),
            'userPrincipalName' => fn(ParseNode $n) => $o->setUserPrincipalName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastReportedDateTime property value. Last modified date time of the policy report.
     * @return DateTime|null
    */
    public function getLastReportedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastReportedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastReportedDateTime'");
    }

    /**
     * Gets the status property value. The status property
     * @return ComplianceStatus|null
    */
    public function getStatus(): ?ComplianceStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof ComplianceStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the userDisplayName property value. User name of the DevicePolicyStatus.
     * @return string|null
    */
    public function getUserDisplayName(): ?string {
        $val = $this->getBackingStore()->get('userDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userDisplayName'");
    }

    /**
     * Gets the userPrincipalName property value. UserPrincipalName.
     * @return string|null
    */
    public function getUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('userPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userPrincipalName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('devicesCount', $this->getDevicesCount());
        $writer->writeDateTimeValue('lastReportedDateTime', $this->getLastReportedDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeStringValue('userDisplayName', $this->getUserDisplayName());
        $writer->writeStringValue('userPrincipalName', $this->getUserPrincipalName());
    }

    /**
     * Sets the devicesCount property value. Devices count for that user.
     * @param int|null $value Value to set for the devicesCount property.
    */
    public function setDevicesCount(?int $value): void {
        $this->getBackingStore()->set('devicesCount', $value);
    }

    /**
     * Sets the lastReportedDateTime property value. Last modified date time of the policy report.
     * @param DateTime|null $value Value to set for the lastReportedDateTime property.
    */
    public function setLastReportedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastReportedDateTime', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param ComplianceStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ComplianceStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the userDisplayName property value. User name of the DevicePolicyStatus.
     * @param string|null $value Value to set for the userDisplayName property.
    */
    public function setUserDisplayName(?string $value): void {
        $this->getBackingStore()->set('userDisplayName', $value);
    }

    /**
     * Sets the userPrincipalName property value. UserPrincipalName.
     * @param string|null $value Value to set for the userPrincipalName property.
    */
    public function setUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('userPrincipalName', $value);
    }

}
