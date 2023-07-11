<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Entity which represents a connection to Mobile Threat Defense partner.
*/
class MobileThreatDefenseConnector extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new mobileThreatDefenseConnector and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileThreatDefenseConnector
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileThreatDefenseConnector {
        return new MobileThreatDefenseConnector();
    }

    /**
     * Gets the allowPartnerToCollectIOSApplicationMetadata property value. When TRUE, indicates the Mobile Threat Defense partner may collect metadata about installed applications from Intune for IOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about installed applications from Intune for IOS devices. Default value is FALSE.
     * @return bool|null
    */
    public function getAllowPartnerToCollectIOSApplicationMetadata(): ?bool {
        $val = $this->getBackingStore()->get('allowPartnerToCollectIOSApplicationMetadata');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowPartnerToCollectIOSApplicationMetadata'");
    }

    /**
     * Gets the allowPartnerToCollectIOSPersonalApplicationMetadata property value. When TRUE, indicates the Mobile Threat Defense partner may collect metadata about personally installed applications from Intune for IOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about personally installed applications from Intune for IOS devices. Default value is FALSE.
     * @return bool|null
    */
    public function getAllowPartnerToCollectIOSPersonalApplicationMetadata(): ?bool {
        $val = $this->getBackingStore()->get('allowPartnerToCollectIOSPersonalApplicationMetadata');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowPartnerToCollectIOSPersonalApplicationMetadata'");
    }

    /**
     * Gets the androidDeviceBlockedOnMissingPartnerData property value. For Android, set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant
     * @return bool|null
    */
    public function getAndroidDeviceBlockedOnMissingPartnerData(): ?bool {
        $val = $this->getBackingStore()->get('androidDeviceBlockedOnMissingPartnerData');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidDeviceBlockedOnMissingPartnerData'");
    }

    /**
     * Gets the androidEnabled property value. For Android, set whether data from the Mobile Threat Defense partner should be used during compliance evaluations
     * @return bool|null
    */
    public function getAndroidEnabled(): ?bool {
        $val = $this->getBackingStore()->get('androidEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidEnabled'");
    }

    /**
     * Gets the androidMobileApplicationManagementEnabled property value. When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for Android devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for Android devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE.
     * @return bool|null
    */
    public function getAndroidMobileApplicationManagementEnabled(): ?bool {
        $val = $this->getBackingStore()->get('androidMobileApplicationManagementEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'androidMobileApplicationManagementEnabled'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowPartnerToCollectIOSApplicationMetadata' => fn(ParseNode $n) => $o->setAllowPartnerToCollectIOSApplicationMetadata($n->getBooleanValue()),
            'allowPartnerToCollectIOSPersonalApplicationMetadata' => fn(ParseNode $n) => $o->setAllowPartnerToCollectIOSPersonalApplicationMetadata($n->getBooleanValue()),
            'androidDeviceBlockedOnMissingPartnerData' => fn(ParseNode $n) => $o->setAndroidDeviceBlockedOnMissingPartnerData($n->getBooleanValue()),
            'androidEnabled' => fn(ParseNode $n) => $o->setAndroidEnabled($n->getBooleanValue()),
            'androidMobileApplicationManagementEnabled' => fn(ParseNode $n) => $o->setAndroidMobileApplicationManagementEnabled($n->getBooleanValue()),
            'iosDeviceBlockedOnMissingPartnerData' => fn(ParseNode $n) => $o->setIosDeviceBlockedOnMissingPartnerData($n->getBooleanValue()),
            'iosEnabled' => fn(ParseNode $n) => $o->setIosEnabled($n->getBooleanValue()),
            'iosMobileApplicationManagementEnabled' => fn(ParseNode $n) => $o->setIosMobileApplicationManagementEnabled($n->getBooleanValue()),
            'lastHeartbeatDateTime' => fn(ParseNode $n) => $o->setLastHeartbeatDateTime($n->getDateTimeValue()),
            'microsoftDefenderForEndpointAttachEnabled' => fn(ParseNode $n) => $o->setMicrosoftDefenderForEndpointAttachEnabled($n->getBooleanValue()),
            'partnerState' => fn(ParseNode $n) => $o->setPartnerState($n->getEnumValue(MobileThreatPartnerTenantState::class)),
            'partnerUnresponsivenessThresholdInDays' => fn(ParseNode $n) => $o->setPartnerUnresponsivenessThresholdInDays($n->getIntegerValue()),
            'partnerUnsupportedOsVersionBlocked' => fn(ParseNode $n) => $o->setPartnerUnsupportedOsVersionBlocked($n->getBooleanValue()),
            'windowsDeviceBlockedOnMissingPartnerData' => fn(ParseNode $n) => $o->setWindowsDeviceBlockedOnMissingPartnerData($n->getBooleanValue()),
            'windowsEnabled' => fn(ParseNode $n) => $o->setWindowsEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the iosDeviceBlockedOnMissingPartnerData property value. For IOS, set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant
     * @return bool|null
    */
    public function getIosDeviceBlockedOnMissingPartnerData(): ?bool {
        $val = $this->getBackingStore()->get('iosDeviceBlockedOnMissingPartnerData');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iosDeviceBlockedOnMissingPartnerData'");
    }

    /**
     * Gets the iosEnabled property value. For IOS, get or set whether data from the Mobile Threat Defense partner should be used during compliance evaluations
     * @return bool|null
    */
    public function getIosEnabled(): ?bool {
        $val = $this->getBackingStore()->get('iosEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iosEnabled'");
    }

    /**
     * Gets the iosMobileApplicationManagementEnabled property value. When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for IOS devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for IOS devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE.
     * @return bool|null
    */
    public function getIosMobileApplicationManagementEnabled(): ?bool {
        $val = $this->getBackingStore()->get('iosMobileApplicationManagementEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'iosMobileApplicationManagementEnabled'");
    }

    /**
     * Gets the lastHeartbeatDateTime property value. DateTime of last Heartbeat recieved from the Mobile Threat Defense partner
     * @return DateTime|null
    */
    public function getLastHeartbeatDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastHeartbeatDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastHeartbeatDateTime'");
    }

    /**
     * Gets the microsoftDefenderForEndpointAttachEnabled property value. When TRUE, inidicates that configuration profile management via Microsoft Defender for Endpoint is enabled. When FALSE, inidicates that configuration profile management via Microsoft Defender for Endpoint is disabled. Default value is FALSE.
     * @return bool|null
    */
    public function getMicrosoftDefenderForEndpointAttachEnabled(): ?bool {
        $val = $this->getBackingStore()->get('microsoftDefenderForEndpointAttachEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoftDefenderForEndpointAttachEnabled'");
    }

    /**
     * Gets the partnerState property value. Partner state of this tenant.
     * @return MobileThreatPartnerTenantState|null
    */
    public function getPartnerState(): ?MobileThreatPartnerTenantState {
        $val = $this->getBackingStore()->get('partnerState');
        if (is_null($val) || $val instanceof MobileThreatPartnerTenantState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partnerState'");
    }

    /**
     * Gets the partnerUnresponsivenessThresholdInDays property value. Get or Set days the per tenant tolerance to unresponsiveness for this partner integration
     * @return int|null
    */
    public function getPartnerUnresponsivenessThresholdInDays(): ?int {
        $val = $this->getBackingStore()->get('partnerUnresponsivenessThresholdInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partnerUnresponsivenessThresholdInDays'");
    }

    /**
     * Gets the partnerUnsupportedOsVersionBlocked property value. Get or set whether to block devices on the enabled platforms that do not meet the minimum version requirements of the Mobile Threat Defense partner
     * @return bool|null
    */
    public function getPartnerUnsupportedOsVersionBlocked(): ?bool {
        $val = $this->getBackingStore()->get('partnerUnsupportedOsVersionBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'partnerUnsupportedOsVersionBlocked'");
    }

    /**
     * Gets the windowsDeviceBlockedOnMissingPartnerData property value. When TRUE, inidicates that Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant for Windows. When FALSE, inidicates that Intune may make a device compliant without receiving data from the Mobile Threat Defense partner for Windows. Default value is FALSE.
     * @return bool|null
    */
    public function getWindowsDeviceBlockedOnMissingPartnerData(): ?bool {
        $val = $this->getBackingStore()->get('windowsDeviceBlockedOnMissingPartnerData');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsDeviceBlockedOnMissingPartnerData'");
    }

    /**
     * Gets the windowsEnabled property value. When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during compliance evaluations for Windows. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during compliance evaluations for Windows. Default value is FALSE.
     * @return bool|null
    */
    public function getWindowsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('windowsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'windowsEnabled'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowPartnerToCollectIOSApplicationMetadata', $this->getAllowPartnerToCollectIOSApplicationMetadata());
        $writer->writeBooleanValue('allowPartnerToCollectIOSPersonalApplicationMetadata', $this->getAllowPartnerToCollectIOSPersonalApplicationMetadata());
        $writer->writeBooleanValue('androidDeviceBlockedOnMissingPartnerData', $this->getAndroidDeviceBlockedOnMissingPartnerData());
        $writer->writeBooleanValue('androidEnabled', $this->getAndroidEnabled());
        $writer->writeBooleanValue('androidMobileApplicationManagementEnabled', $this->getAndroidMobileApplicationManagementEnabled());
        $writer->writeBooleanValue('iosDeviceBlockedOnMissingPartnerData', $this->getIosDeviceBlockedOnMissingPartnerData());
        $writer->writeBooleanValue('iosEnabled', $this->getIosEnabled());
        $writer->writeBooleanValue('iosMobileApplicationManagementEnabled', $this->getIosMobileApplicationManagementEnabled());
        $writer->writeDateTimeValue('lastHeartbeatDateTime', $this->getLastHeartbeatDateTime());
        $writer->writeBooleanValue('microsoftDefenderForEndpointAttachEnabled', $this->getMicrosoftDefenderForEndpointAttachEnabled());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('partnerState', $this->getPartnerState());
        $writer->writeIntegerValue('partnerUnresponsivenessThresholdInDays', $this->getPartnerUnresponsivenessThresholdInDays());
        $writer->writeBooleanValue('partnerUnsupportedOsVersionBlocked', $this->getPartnerUnsupportedOsVersionBlocked());
        $writer->writeBooleanValue('windowsDeviceBlockedOnMissingPartnerData', $this->getWindowsDeviceBlockedOnMissingPartnerData());
        $writer->writeBooleanValue('windowsEnabled', $this->getWindowsEnabled());
    }

    /**
     * Sets the allowPartnerToCollectIOSApplicationMetadata property value. When TRUE, indicates the Mobile Threat Defense partner may collect metadata about installed applications from Intune for IOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about installed applications from Intune for IOS devices. Default value is FALSE.
     * @param bool|null $value Value to set for the allowPartnerToCollectIOSApplicationMetadata property.
    */
    public function setAllowPartnerToCollectIOSApplicationMetadata(?bool $value): void {
        $this->getBackingStore()->set('allowPartnerToCollectIOSApplicationMetadata', $value);
    }

    /**
     * Sets the allowPartnerToCollectIOSPersonalApplicationMetadata property value. When TRUE, indicates the Mobile Threat Defense partner may collect metadata about personally installed applications from Intune for IOS devices. When FALSE, indicates the Mobile Threat Defense partner may not collect metadata about personally installed applications from Intune for IOS devices. Default value is FALSE.
     * @param bool|null $value Value to set for the allowPartnerToCollectIOSPersonalApplicationMetadata property.
    */
    public function setAllowPartnerToCollectIOSPersonalApplicationMetadata(?bool $value): void {
        $this->getBackingStore()->set('allowPartnerToCollectIOSPersonalApplicationMetadata', $value);
    }

    /**
     * Sets the androidDeviceBlockedOnMissingPartnerData property value. For Android, set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant
     * @param bool|null $value Value to set for the androidDeviceBlockedOnMissingPartnerData property.
    */
    public function setAndroidDeviceBlockedOnMissingPartnerData(?bool $value): void {
        $this->getBackingStore()->set('androidDeviceBlockedOnMissingPartnerData', $value);
    }

    /**
     * Sets the androidEnabled property value. For Android, set whether data from the Mobile Threat Defense partner should be used during compliance evaluations
     * @param bool|null $value Value to set for the androidEnabled property.
    */
    public function setAndroidEnabled(?bool $value): void {
        $this->getBackingStore()->set('androidEnabled', $value);
    }

    /**
     * Sets the androidMobileApplicationManagementEnabled property value. When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for Android devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for Android devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE.
     * @param bool|null $value Value to set for the androidMobileApplicationManagementEnabled property.
    */
    public function setAndroidMobileApplicationManagementEnabled(?bool $value): void {
        $this->getBackingStore()->set('androidMobileApplicationManagementEnabled', $value);
    }

    /**
     * Sets the iosDeviceBlockedOnMissingPartnerData property value. For IOS, set whether Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant
     * @param bool|null $value Value to set for the iosDeviceBlockedOnMissingPartnerData property.
    */
    public function setIosDeviceBlockedOnMissingPartnerData(?bool $value): void {
        $this->getBackingStore()->set('iosDeviceBlockedOnMissingPartnerData', $value);
    }

    /**
     * Sets the iosEnabled property value. For IOS, get or set whether data from the Mobile Threat Defense partner should be used during compliance evaluations
     * @param bool|null $value Value to set for the iosEnabled property.
    */
    public function setIosEnabled(?bool $value): void {
        $this->getBackingStore()->set('iosEnabled', $value);
    }

    /**
     * Sets the iosMobileApplicationManagementEnabled property value. When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during Mobile Application Management (MAM) evaluations for IOS devices. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during Mobile Application Management (MAM) evaluations for IOS devices. Only one partner per platform may be enabled for Mobile Application Management (MAM) evaluation. Default value is FALSE.
     * @param bool|null $value Value to set for the iosMobileApplicationManagementEnabled property.
    */
    public function setIosMobileApplicationManagementEnabled(?bool $value): void {
        $this->getBackingStore()->set('iosMobileApplicationManagementEnabled', $value);
    }

    /**
     * Sets the lastHeartbeatDateTime property value. DateTime of last Heartbeat recieved from the Mobile Threat Defense partner
     * @param DateTime|null $value Value to set for the lastHeartbeatDateTime property.
    */
    public function setLastHeartbeatDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastHeartbeatDateTime', $value);
    }

    /**
     * Sets the microsoftDefenderForEndpointAttachEnabled property value. When TRUE, inidicates that configuration profile management via Microsoft Defender for Endpoint is enabled. When FALSE, inidicates that configuration profile management via Microsoft Defender for Endpoint is disabled. Default value is FALSE.
     * @param bool|null $value Value to set for the microsoftDefenderForEndpointAttachEnabled property.
    */
    public function setMicrosoftDefenderForEndpointAttachEnabled(?bool $value): void {
        $this->getBackingStore()->set('microsoftDefenderForEndpointAttachEnabled', $value);
    }

    /**
     * Sets the partnerState property value. Partner state of this tenant.
     * @param MobileThreatPartnerTenantState|null $value Value to set for the partnerState property.
    */
    public function setPartnerState(?MobileThreatPartnerTenantState $value): void {
        $this->getBackingStore()->set('partnerState', $value);
    }

    /**
     * Sets the partnerUnresponsivenessThresholdInDays property value. Get or Set days the per tenant tolerance to unresponsiveness for this partner integration
     * @param int|null $value Value to set for the partnerUnresponsivenessThresholdInDays property.
    */
    public function setPartnerUnresponsivenessThresholdInDays(?int $value): void {
        $this->getBackingStore()->set('partnerUnresponsivenessThresholdInDays', $value);
    }

    /**
     * Sets the partnerUnsupportedOsVersionBlocked property value. Get or set whether to block devices on the enabled platforms that do not meet the minimum version requirements of the Mobile Threat Defense partner
     * @param bool|null $value Value to set for the partnerUnsupportedOsVersionBlocked property.
    */
    public function setPartnerUnsupportedOsVersionBlocked(?bool $value): void {
        $this->getBackingStore()->set('partnerUnsupportedOsVersionBlocked', $value);
    }

    /**
     * Sets the windowsDeviceBlockedOnMissingPartnerData property value. When TRUE, inidicates that Intune must receive data from the Mobile Threat Defense partner prior to marking a device compliant for Windows. When FALSE, inidicates that Intune may make a device compliant without receiving data from the Mobile Threat Defense partner for Windows. Default value is FALSE.
     * @param bool|null $value Value to set for the windowsDeviceBlockedOnMissingPartnerData property.
    */
    public function setWindowsDeviceBlockedOnMissingPartnerData(?bool $value): void {
        $this->getBackingStore()->set('windowsDeviceBlockedOnMissingPartnerData', $value);
    }

    /**
     * Sets the windowsEnabled property value. When TRUE, inidicates that data from the Mobile Threat Defense partner can be used during compliance evaluations for Windows. When FALSE, inidicates that data from the Mobile Threat Defense partner should not be used during compliance evaluations for Windows. Default value is FALSE.
     * @param bool|null $value Value to set for the windowsEnabled property.
    */
    public function setWindowsEnabled(?bool $value): void {
        $this->getBackingStore()->set('windowsEnabled', $value);
    }

}
