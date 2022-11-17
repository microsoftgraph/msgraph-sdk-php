<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileThreatDefenseConnector extends Entity implements Parsable 
{
    /**
     * Instantiates a new mobileThreatDefenseConnector and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.mobileThreatDefenseConnector');
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
     * Gets the androidDeviceBlockedOnMissingPartnerData property value. For Android, set whether Intune must receive data from the data sync partner prior to marking a device compliant
     * @return bool|null
    */
    public function getAndroidDeviceBlockedOnMissingPartnerData(): ?bool {
        return $this->getBackingStore()->get('androidDeviceBlockedOnMissingPartnerData');
    }

    /**
     * Gets the androidEnabled property value. For Android, set whether data from the data sync partner should be used during compliance evaluations
     * @return bool|null
    */
    public function getAndroidEnabled(): ?bool {
        return $this->getBackingStore()->get('androidEnabled');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'androidDeviceBlockedOnMissingPartnerData' => fn(ParseNode $n) => $o->setAndroidDeviceBlockedOnMissingPartnerData($n->getBooleanValue()),
            'androidEnabled' => fn(ParseNode $n) => $o->setAndroidEnabled($n->getBooleanValue()),
            'iosDeviceBlockedOnMissingPartnerData' => fn(ParseNode $n) => $o->setIosDeviceBlockedOnMissingPartnerData($n->getBooleanValue()),
            'iosEnabled' => fn(ParseNode $n) => $o->setIosEnabled($n->getBooleanValue()),
            'lastHeartbeatDateTime' => fn(ParseNode $n) => $o->setLastHeartbeatDateTime($n->getDateTimeValue()),
            'partnerState' => fn(ParseNode $n) => $o->setPartnerState($n->getEnumValue(MobileThreatPartnerTenantState::class)),
            'partnerUnresponsivenessThresholdInDays' => fn(ParseNode $n) => $o->setPartnerUnresponsivenessThresholdInDays($n->getIntegerValue()),
            'partnerUnsupportedOsVersionBlocked' => fn(ParseNode $n) => $o->setPartnerUnsupportedOsVersionBlocked($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the iosDeviceBlockedOnMissingPartnerData property value. For IOS, set whether Intune must receive data from the data sync partner prior to marking a device compliant
     * @return bool|null
    */
    public function getIosDeviceBlockedOnMissingPartnerData(): ?bool {
        return $this->getBackingStore()->get('iosDeviceBlockedOnMissingPartnerData');
    }

    /**
     * Gets the iosEnabled property value. For IOS, get or set whether data from the data sync partner should be used during compliance evaluations
     * @return bool|null
    */
    public function getIosEnabled(): ?bool {
        return $this->getBackingStore()->get('iosEnabled');
    }

    /**
     * Gets the lastHeartbeatDateTime property value. DateTime of last Heartbeat recieved from the Data Sync Partner
     * @return DateTime|null
    */
    public function getLastHeartbeatDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastHeartbeatDateTime');
    }

    /**
     * Gets the partnerState property value. Partner state of this tenant.
     * @return MobileThreatPartnerTenantState|null
    */
    public function getPartnerState(): ?MobileThreatPartnerTenantState {
        return $this->getBackingStore()->get('partnerState');
    }

    /**
     * Gets the partnerUnresponsivenessThresholdInDays property value. Get or Set days the per tenant tolerance to unresponsiveness for this partner integration
     * @return int|null
    */
    public function getPartnerUnresponsivenessThresholdInDays(): ?int {
        return $this->getBackingStore()->get('partnerUnresponsivenessThresholdInDays');
    }

    /**
     * Gets the partnerUnsupportedOsVersionBlocked property value. Get or set whether to block devices on the enabled platforms that do not meet the minimum version requirements of the Data Sync Partner
     * @return bool|null
    */
    public function getPartnerUnsupportedOsVersionBlocked(): ?bool {
        return $this->getBackingStore()->get('partnerUnsupportedOsVersionBlocked');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('androidDeviceBlockedOnMissingPartnerData', $this->getAndroidDeviceBlockedOnMissingPartnerData());
        $writer->writeBooleanValue('androidEnabled', $this->getAndroidEnabled());
        $writer->writeBooleanValue('iosDeviceBlockedOnMissingPartnerData', $this->getIosDeviceBlockedOnMissingPartnerData());
        $writer->writeBooleanValue('iosEnabled', $this->getIosEnabled());
        $writer->writeDateTimeValue('lastHeartbeatDateTime', $this->getLastHeartbeatDateTime());
        $writer->writeEnumValue('partnerState', $this->getPartnerState());
        $writer->writeIntegerValue('partnerUnresponsivenessThresholdInDays', $this->getPartnerUnresponsivenessThresholdInDays());
        $writer->writeBooleanValue('partnerUnsupportedOsVersionBlocked', $this->getPartnerUnsupportedOsVersionBlocked());
    }

    /**
     * Sets the androidDeviceBlockedOnMissingPartnerData property value. For Android, set whether Intune must receive data from the data sync partner prior to marking a device compliant
     *  @param bool|null $value Value to set for the androidDeviceBlockedOnMissingPartnerData property.
    */
    public function setAndroidDeviceBlockedOnMissingPartnerData(?bool $value): void {
        $this->getBackingStore()->set('androidDeviceBlockedOnMissingPartnerData', $value);
    }

    /**
     * Sets the androidEnabled property value. For Android, set whether data from the data sync partner should be used during compliance evaluations
     *  @param bool|null $value Value to set for the androidEnabled property.
    */
    public function setAndroidEnabled(?bool $value): void {
        $this->getBackingStore()->set('androidEnabled', $value);
    }

    /**
     * Sets the iosDeviceBlockedOnMissingPartnerData property value. For IOS, set whether Intune must receive data from the data sync partner prior to marking a device compliant
     *  @param bool|null $value Value to set for the iosDeviceBlockedOnMissingPartnerData property.
    */
    public function setIosDeviceBlockedOnMissingPartnerData(?bool $value): void {
        $this->getBackingStore()->set('iosDeviceBlockedOnMissingPartnerData', $value);
    }

    /**
     * Sets the iosEnabled property value. For IOS, get or set whether data from the data sync partner should be used during compliance evaluations
     *  @param bool|null $value Value to set for the iosEnabled property.
    */
    public function setIosEnabled(?bool $value): void {
        $this->getBackingStore()->set('iosEnabled', $value);
    }

    /**
     * Sets the lastHeartbeatDateTime property value. DateTime of last Heartbeat recieved from the Data Sync Partner
     *  @param DateTime|null $value Value to set for the lastHeartbeatDateTime property.
    */
    public function setLastHeartbeatDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastHeartbeatDateTime', $value);
    }

    /**
     * Sets the partnerState property value. Partner state of this tenant.
     *  @param MobileThreatPartnerTenantState|null $value Value to set for the partnerState property.
    */
    public function setPartnerState(?MobileThreatPartnerTenantState $value): void {
        $this->getBackingStore()->set('partnerState', $value);
    }

    /**
     * Sets the partnerUnresponsivenessThresholdInDays property value. Get or Set days the per tenant tolerance to unresponsiveness for this partner integration
     *  @param int|null $value Value to set for the partnerUnresponsivenessThresholdInDays property.
    */
    public function setPartnerUnresponsivenessThresholdInDays(?int $value): void {
        $this->getBackingStore()->set('partnerUnresponsivenessThresholdInDays', $value);
    }

    /**
     * Sets the partnerUnsupportedOsVersionBlocked property value. Get or set whether to block devices on the enabled platforms that do not meet the minimum version requirements of the Data Sync Partner
     *  @param bool|null $value Value to set for the partnerUnsupportedOsVersionBlocked property.
    */
    public function setPartnerUnsupportedOsVersionBlocked(?bool $value): void {
        $this->getBackingStore()->set('partnerUnsupportedOsVersionBlocked', $value);
    }

}
