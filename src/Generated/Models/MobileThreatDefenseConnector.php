<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileThreatDefenseConnector extends Entity implements Parsable 
{
    /**
     * @var bool|null $androidDeviceBlockedOnMissingPartnerData For Android, set whether Intune must receive data from the data sync partner prior to marking a device compliant
    */
    private ?bool $androidDeviceBlockedOnMissingPartnerData = null;
    
    /**
     * @var bool|null $androidEnabled For Android, set whether data from the data sync partner should be used during compliance evaluations
    */
    private ?bool $androidEnabled = null;
    
    /**
     * @var bool|null $iosDeviceBlockedOnMissingPartnerData For IOS, set whether Intune must receive data from the data sync partner prior to marking a device compliant
    */
    private ?bool $iosDeviceBlockedOnMissingPartnerData = null;
    
    /**
     * @var bool|null $iosEnabled For IOS, get or set whether data from the data sync partner should be used during compliance evaluations
    */
    private ?bool $iosEnabled = null;
    
    /**
     * @var DateTime|null $lastHeartbeatDateTime DateTime of last Heartbeat recieved from the Data Sync Partner
    */
    private ?DateTime $lastHeartbeatDateTime = null;
    
    /**
     * @var MobileThreatPartnerTenantState|null $partnerState Data Sync Partner state for this account. Possible values are: unavailable, available, enabled, unresponsive.
    */
    private ?MobileThreatPartnerTenantState $partnerState = null;
    
    /**
     * @var int|null $partnerUnresponsivenessThresholdInDays Get or Set days the per tenant tolerance to unresponsiveness for this partner integration
    */
    private ?int $partnerUnresponsivenessThresholdInDays = null;
    
    /**
     * @var bool|null $partnerUnsupportedOsVersionBlocked Get or set whether to block devices on the enabled platforms that do not meet the minimum version requirements of the Data Sync Partner
    */
    private ?bool $partnerUnsupportedOsVersionBlocked = null;
    
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
     * Gets the androidDeviceBlockedOnMissingPartnerData property value. For Android, set whether Intune must receive data from the data sync partner prior to marking a device compliant
     * @return bool|null
    */
    public function getAndroidDeviceBlockedOnMissingPartnerData(): ?bool {
        return $this->androidDeviceBlockedOnMissingPartnerData;
    }

    /**
     * Gets the androidEnabled property value. For Android, set whether data from the data sync partner should be used during compliance evaluations
     * @return bool|null
    */
    public function getAndroidEnabled(): ?bool {
        return $this->androidEnabled;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'androidDeviceBlockedOnMissingPartnerData' => function (ParseNode $n) use ($o) { $o->setAndroidDeviceBlockedOnMissingPartnerData($n->getBooleanValue()); },
            'androidEnabled' => function (ParseNode $n) use ($o) { $o->setAndroidEnabled($n->getBooleanValue()); },
            'iosDeviceBlockedOnMissingPartnerData' => function (ParseNode $n) use ($o) { $o->setIosDeviceBlockedOnMissingPartnerData($n->getBooleanValue()); },
            'iosEnabled' => function (ParseNode $n) use ($o) { $o->setIosEnabled($n->getBooleanValue()); },
            'lastHeartbeatDateTime' => function (ParseNode $n) use ($o) { $o->setLastHeartbeatDateTime($n->getDateTimeValue()); },
            'partnerState' => function (ParseNode $n) use ($o) { $o->setPartnerState($n->getEnumValue(MobileThreatPartnerTenantState::class)); },
            'partnerUnresponsivenessThresholdInDays' => function (ParseNode $n) use ($o) { $o->setPartnerUnresponsivenessThresholdInDays($n->getIntegerValue()); },
            'partnerUnsupportedOsVersionBlocked' => function (ParseNode $n) use ($o) { $o->setPartnerUnsupportedOsVersionBlocked($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the iosDeviceBlockedOnMissingPartnerData property value. For IOS, set whether Intune must receive data from the data sync partner prior to marking a device compliant
     * @return bool|null
    */
    public function getIosDeviceBlockedOnMissingPartnerData(): ?bool {
        return $this->iosDeviceBlockedOnMissingPartnerData;
    }

    /**
     * Gets the iosEnabled property value. For IOS, get or set whether data from the data sync partner should be used during compliance evaluations
     * @return bool|null
    */
    public function getIosEnabled(): ?bool {
        return $this->iosEnabled;
    }

    /**
     * Gets the lastHeartbeatDateTime property value. DateTime of last Heartbeat recieved from the Data Sync Partner
     * @return DateTime|null
    */
    public function getLastHeartbeatDateTime(): ?DateTime {
        return $this->lastHeartbeatDateTime;
    }

    /**
     * Gets the partnerState property value. Data Sync Partner state for this account. Possible values are: unavailable, available, enabled, unresponsive.
     * @return MobileThreatPartnerTenantState|null
    */
    public function getPartnerState(): ?MobileThreatPartnerTenantState {
        return $this->partnerState;
    }

    /**
     * Gets the partnerUnresponsivenessThresholdInDays property value. Get or Set days the per tenant tolerance to unresponsiveness for this partner integration
     * @return int|null
    */
    public function getPartnerUnresponsivenessThresholdInDays(): ?int {
        return $this->partnerUnresponsivenessThresholdInDays;
    }

    /**
     * Gets the partnerUnsupportedOsVersionBlocked property value. Get or set whether to block devices on the enabled platforms that do not meet the minimum version requirements of the Data Sync Partner
     * @return bool|null
    */
    public function getPartnerUnsupportedOsVersionBlocked(): ?bool {
        return $this->partnerUnsupportedOsVersionBlocked;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('androidDeviceBlockedOnMissingPartnerData', $this->androidDeviceBlockedOnMissingPartnerData);
        $writer->writeBooleanValue('androidEnabled', $this->androidEnabled);
        $writer->writeBooleanValue('iosDeviceBlockedOnMissingPartnerData', $this->iosDeviceBlockedOnMissingPartnerData);
        $writer->writeBooleanValue('iosEnabled', $this->iosEnabled);
        $writer->writeDateTimeValue('lastHeartbeatDateTime', $this->lastHeartbeatDateTime);
        $writer->writeEnumValue('partnerState', $this->partnerState);
        $writer->writeIntegerValue('partnerUnresponsivenessThresholdInDays', $this->partnerUnresponsivenessThresholdInDays);
        $writer->writeBooleanValue('partnerUnsupportedOsVersionBlocked', $this->partnerUnsupportedOsVersionBlocked);
    }

    /**
     * Sets the androidDeviceBlockedOnMissingPartnerData property value. For Android, set whether Intune must receive data from the data sync partner prior to marking a device compliant
     *  @param bool|null $value Value to set for the androidDeviceBlockedOnMissingPartnerData property.
    */
    public function setAndroidDeviceBlockedOnMissingPartnerData(?bool $value ): void {
        $this->androidDeviceBlockedOnMissingPartnerData = $value;
    }

    /**
     * Sets the androidEnabled property value. For Android, set whether data from the data sync partner should be used during compliance evaluations
     *  @param bool|null $value Value to set for the androidEnabled property.
    */
    public function setAndroidEnabled(?bool $value ): void {
        $this->androidEnabled = $value;
    }

    /**
     * Sets the iosDeviceBlockedOnMissingPartnerData property value. For IOS, set whether Intune must receive data from the data sync partner prior to marking a device compliant
     *  @param bool|null $value Value to set for the iosDeviceBlockedOnMissingPartnerData property.
    */
    public function setIosDeviceBlockedOnMissingPartnerData(?bool $value ): void {
        $this->iosDeviceBlockedOnMissingPartnerData = $value;
    }

    /**
     * Sets the iosEnabled property value. For IOS, get or set whether data from the data sync partner should be used during compliance evaluations
     *  @param bool|null $value Value to set for the iosEnabled property.
    */
    public function setIosEnabled(?bool $value ): void {
        $this->iosEnabled = $value;
    }

    /**
     * Sets the lastHeartbeatDateTime property value. DateTime of last Heartbeat recieved from the Data Sync Partner
     *  @param DateTime|null $value Value to set for the lastHeartbeatDateTime property.
    */
    public function setLastHeartbeatDateTime(?DateTime $value ): void {
        $this->lastHeartbeatDateTime = $value;
    }

    /**
     * Sets the partnerState property value. Data Sync Partner state for this account. Possible values are: unavailable, available, enabled, unresponsive.
     *  @param MobileThreatPartnerTenantState|null $value Value to set for the partnerState property.
    */
    public function setPartnerState(?MobileThreatPartnerTenantState $value ): void {
        $this->partnerState = $value;
    }

    /**
     * Sets the partnerUnresponsivenessThresholdInDays property value. Get or Set days the per tenant tolerance to unresponsiveness for this partner integration
     *  @param int|null $value Value to set for the partnerUnresponsivenessThresholdInDays property.
    */
    public function setPartnerUnresponsivenessThresholdInDays(?int $value ): void {
        $this->partnerUnresponsivenessThresholdInDays = $value;
    }

    /**
     * Sets the partnerUnsupportedOsVersionBlocked property value. Get or set whether to block devices on the enabled platforms that do not meet the minimum version requirements of the Data Sync Partner
     *  @param bool|null $value Value to set for the partnerUnsupportedOsVersionBlocked property.
    */
    public function setPartnerUnsupportedOsVersionBlocked(?bool $value ): void {
        $this->partnerUnsupportedOsVersionBlocked = $value;
    }

}
