<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementPartner extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName Partner display name
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $isConfigured Whether device management partner is configured or not
    */
    private ?bool $isConfigured = null;
    
    /**
     * @var DateTime|null $lastHeartbeatDateTime Timestamp of last heartbeat after admin enabled option Connect to Device management Partner
    */
    private ?DateTime $lastHeartbeatDateTime = null;
    
    /**
     * @var DeviceManagementPartnerAppType|null $partnerAppType Partner App type. Possible values are: unknown, singleTenantApp, multiTenantApp.
    */
    private ?DeviceManagementPartnerAppType $partnerAppType = null;
    
    /**
     * @var DeviceManagementPartnerTenantState|null $partnerState Partner state of this tenant. Possible values are: unknown, unavailable, enabled, terminated, rejected, unresponsive.
    */
    private ?DeviceManagementPartnerTenantState $partnerState = null;
    
    /**
     * @var string|null $singleTenantAppId Partner Single tenant App id
    */
    private ?string $singleTenantAppId = null;
    
    /**
     * @var DateTime|null $whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime DateTime in UTC when PartnerDevices will be marked as NonCompliant
    */
    private ?DateTime $whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime = null;
    
    /**
     * @var DateTime|null $whenPartnerDevicesWillBeRemovedDateTime DateTime in UTC when PartnerDevices will be removed
    */
    private ?DateTime $whenPartnerDevicesWillBeRemovedDateTime = null;
    
    /**
     * Instantiates a new deviceManagementPartner and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementPartner
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementPartner {
        return new DeviceManagementPartner();
    }

    /**
     * Gets the displayName property value. Partner display name
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'isConfigured' => function (ParseNode $n) use ($o) { $o->setIsConfigured($n->getBooleanValue()); },
            'lastHeartbeatDateTime' => function (ParseNode $n) use ($o) { $o->setLastHeartbeatDateTime($n->getDateTimeValue()); },
            'partnerAppType' => function (ParseNode $n) use ($o) { $o->setPartnerAppType($n->getEnumValue(DeviceManagementPartnerAppType::class)); },
            'partnerState' => function (ParseNode $n) use ($o) { $o->setPartnerState($n->getEnumValue(DeviceManagementPartnerTenantState::class)); },
            'singleTenantAppId' => function (ParseNode $n) use ($o) { $o->setSingleTenantAppId($n->getStringValue()); },
            'whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime' => function (ParseNode $n) use ($o) { $o->setWhenPartnerDevicesWillBeMarkedAsNonCompliantDateTime($n->getDateTimeValue()); },
            'whenPartnerDevicesWillBeRemovedDateTime' => function (ParseNode $n) use ($o) { $o->setWhenPartnerDevicesWillBeRemovedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the isConfigured property value. Whether device management partner is configured or not
     * @return bool|null
    */
    public function getIsConfigured(): ?bool {
        return $this->isConfigured;
    }

    /**
     * Gets the lastHeartbeatDateTime property value. Timestamp of last heartbeat after admin enabled option Connect to Device management Partner
     * @return DateTime|null
    */
    public function getLastHeartbeatDateTime(): ?DateTime {
        return $this->lastHeartbeatDateTime;
    }

    /**
     * Gets the partnerAppType property value. Partner App type. Possible values are: unknown, singleTenantApp, multiTenantApp.
     * @return DeviceManagementPartnerAppType|null
    */
    public function getPartnerAppType(): ?DeviceManagementPartnerAppType {
        return $this->partnerAppType;
    }

    /**
     * Gets the partnerState property value. Partner state of this tenant. Possible values are: unknown, unavailable, enabled, terminated, rejected, unresponsive.
     * @return DeviceManagementPartnerTenantState|null
    */
    public function getPartnerState(): ?DeviceManagementPartnerTenantState {
        return $this->partnerState;
    }

    /**
     * Gets the singleTenantAppId property value. Partner Single tenant App id
     * @return string|null
    */
    public function getSingleTenantAppId(): ?string {
        return $this->singleTenantAppId;
    }

    /**
     * Gets the whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime property value. DateTime in UTC when PartnerDevices will be marked as NonCompliant
     * @return DateTime|null
    */
    public function getWhenPartnerDevicesWillBeMarkedAsNonCompliantDateTime(): ?DateTime {
        return $this->whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime;
    }

    /**
     * Gets the whenPartnerDevicesWillBeRemovedDateTime property value. DateTime in UTC when PartnerDevices will be removed
     * @return DateTime|null
    */
    public function getWhenPartnerDevicesWillBeRemovedDateTime(): ?DateTime {
        return $this->whenPartnerDevicesWillBeRemovedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isConfigured', $this->isConfigured);
        $writer->writeDateTimeValue('lastHeartbeatDateTime', $this->lastHeartbeatDateTime);
        $writer->writeEnumValue('partnerAppType', $this->partnerAppType);
        $writer->writeEnumValue('partnerState', $this->partnerState);
        $writer->writeStringValue('singleTenantAppId', $this->singleTenantAppId);
        $writer->writeDateTimeValue('whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime', $this->whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime);
        $writer->writeDateTimeValue('whenPartnerDevicesWillBeRemovedDateTime', $this->whenPartnerDevicesWillBeRemovedDateTime);
    }

    /**
     * Sets the displayName property value. Partner display name
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isConfigured property value. Whether device management partner is configured or not
     *  @param bool|null $value Value to set for the isConfigured property.
    */
    public function setIsConfigured(?bool $value ): void {
        $this->isConfigured = $value;
    }

    /**
     * Sets the lastHeartbeatDateTime property value. Timestamp of last heartbeat after admin enabled option Connect to Device management Partner
     *  @param DateTime|null $value Value to set for the lastHeartbeatDateTime property.
    */
    public function setLastHeartbeatDateTime(?DateTime $value ): void {
        $this->lastHeartbeatDateTime = $value;
    }

    /**
     * Sets the partnerAppType property value. Partner App type. Possible values are: unknown, singleTenantApp, multiTenantApp.
     *  @param DeviceManagementPartnerAppType|null $value Value to set for the partnerAppType property.
    */
    public function setPartnerAppType(?DeviceManagementPartnerAppType $value ): void {
        $this->partnerAppType = $value;
    }

    /**
     * Sets the partnerState property value. Partner state of this tenant. Possible values are: unknown, unavailable, enabled, terminated, rejected, unresponsive.
     *  @param DeviceManagementPartnerTenantState|null $value Value to set for the partnerState property.
    */
    public function setPartnerState(?DeviceManagementPartnerTenantState $value ): void {
        $this->partnerState = $value;
    }

    /**
     * Sets the singleTenantAppId property value. Partner Single tenant App id
     *  @param string|null $value Value to set for the singleTenantAppId property.
    */
    public function setSingleTenantAppId(?string $value ): void {
        $this->singleTenantAppId = $value;
    }

    /**
     * Sets the whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime property value. DateTime in UTC when PartnerDevices will be marked as NonCompliant
     *  @param DateTime|null $value Value to set for the whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime property.
    */
    public function setWhenPartnerDevicesWillBeMarkedAsNonCompliantDateTime(?DateTime $value ): void {
        $this->whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime = $value;
    }

    /**
     * Sets the whenPartnerDevicesWillBeRemovedDateTime property value. DateTime in UTC when PartnerDevices will be removed
     *  @param DateTime|null $value Value to set for the whenPartnerDevicesWillBeRemovedDateTime property.
    */
    public function setWhenPartnerDevicesWillBeRemovedDateTime(?DateTime $value ): void {
        $this->whenPartnerDevicesWillBeRemovedDateTime = $value;
    }

}
