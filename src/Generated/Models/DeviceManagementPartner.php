<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Entity which represents a connection to device management partner.
*/
class DeviceManagementPartner extends Entity implements Parsable 
{
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
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'groupsRequiringPartnerEnrollment' => fn(ParseNode $n) => $o->setGroupsRequiringPartnerEnrollment($n->getCollectionOfObjectValues([DeviceManagementPartnerAssignment::class, 'createFromDiscriminatorValue'])),
            'isConfigured' => fn(ParseNode $n) => $o->setIsConfigured($n->getBooleanValue()),
            'lastHeartbeatDateTime' => fn(ParseNode $n) => $o->setLastHeartbeatDateTime($n->getDateTimeValue()),
            'partnerAppType' => fn(ParseNode $n) => $o->setPartnerAppType($n->getEnumValue(DeviceManagementPartnerAppType::class)),
            'partnerState' => fn(ParseNode $n) => $o->setPartnerState($n->getEnumValue(DeviceManagementPartnerTenantState::class)),
            'singleTenantAppId' => fn(ParseNode $n) => $o->setSingleTenantAppId($n->getStringValue()),
            'whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime' => fn(ParseNode $n) => $o->setWhenPartnerDevicesWillBeMarkedAsNonCompliantDateTime($n->getDateTimeValue()),
            'whenPartnerDevicesWillBeRemovedDateTime' => fn(ParseNode $n) => $o->setWhenPartnerDevicesWillBeRemovedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the groupsRequiringPartnerEnrollment property value. User groups that specifies whether enrollment is through partner.
     * @return array<DeviceManagementPartnerAssignment>|null
    */
    public function getGroupsRequiringPartnerEnrollment(): ?array {
        return $this->getBackingStore()->get('groupsRequiringPartnerEnrollment');
    }

    /**
     * Gets the isConfigured property value. Whether device management partner is configured or not
     * @return bool|null
    */
    public function getIsConfigured(): ?bool {
        return $this->getBackingStore()->get('isConfigured');
    }

    /**
     * Gets the lastHeartbeatDateTime property value. Timestamp of last heartbeat after admin enabled option Connect to Device management Partner
     * @return DateTime|null
    */
    public function getLastHeartbeatDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastHeartbeatDateTime');
    }

    /**
     * Gets the partnerAppType property value. Partner App Type.
     * @return DeviceManagementPartnerAppType|null
    */
    public function getPartnerAppType(): ?DeviceManagementPartnerAppType {
        return $this->getBackingStore()->get('partnerAppType');
    }

    /**
     * Gets the partnerState property value. Partner state of this tenant.
     * @return DeviceManagementPartnerTenantState|null
    */
    public function getPartnerState(): ?DeviceManagementPartnerTenantState {
        return $this->getBackingStore()->get('partnerState');
    }

    /**
     * Gets the singleTenantAppId property value. Partner Single tenant App id
     * @return string|null
    */
    public function getSingleTenantAppId(): ?string {
        return $this->getBackingStore()->get('singleTenantAppId');
    }

    /**
     * Gets the whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime property value. DateTime in UTC when PartnerDevices will be marked as NonCompliant
     * @return DateTime|null
    */
    public function getWhenPartnerDevicesWillBeMarkedAsNonCompliantDateTime(): ?DateTime {
        return $this->getBackingStore()->get('whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime');
    }

    /**
     * Gets the whenPartnerDevicesWillBeRemovedDateTime property value. DateTime in UTC when PartnerDevices will be removed
     * @return DateTime|null
    */
    public function getWhenPartnerDevicesWillBeRemovedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('whenPartnerDevicesWillBeRemovedDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('groupsRequiringPartnerEnrollment', $this->getGroupsRequiringPartnerEnrollment());
        $writer->writeBooleanValue('isConfigured', $this->getIsConfigured());
        $writer->writeDateTimeValue('lastHeartbeatDateTime', $this->getLastHeartbeatDateTime());
        $writer->writeEnumValue('partnerAppType', $this->getPartnerAppType());
        $writer->writeEnumValue('partnerState', $this->getPartnerState());
        $writer->writeStringValue('singleTenantAppId', $this->getSingleTenantAppId());
        $writer->writeDateTimeValue('whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime', $this->getWhenPartnerDevicesWillBeMarkedAsNonCompliantDateTime());
        $writer->writeDateTimeValue('whenPartnerDevicesWillBeRemovedDateTime', $this->getWhenPartnerDevicesWillBeRemovedDateTime());
    }

    /**
     * Sets the displayName property value. Partner display name
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the groupsRequiringPartnerEnrollment property value. User groups that specifies whether enrollment is through partner.
     * @param array<DeviceManagementPartnerAssignment>|null $value Value to set for the groupsRequiringPartnerEnrollment property.
    */
    public function setGroupsRequiringPartnerEnrollment(?array $value): void {
        $this->getBackingStore()->set('groupsRequiringPartnerEnrollment', $value);
    }

    /**
     * Sets the isConfigured property value. Whether device management partner is configured or not
     * @param bool|null $value Value to set for the isConfigured property.
    */
    public function setIsConfigured(?bool $value): void {
        $this->getBackingStore()->set('isConfigured', $value);
    }

    /**
     * Sets the lastHeartbeatDateTime property value. Timestamp of last heartbeat after admin enabled option Connect to Device management Partner
     * @param DateTime|null $value Value to set for the lastHeartbeatDateTime property.
    */
    public function setLastHeartbeatDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastHeartbeatDateTime', $value);
    }

    /**
     * Sets the partnerAppType property value. Partner App Type.
     * @param DeviceManagementPartnerAppType|null $value Value to set for the partnerAppType property.
    */
    public function setPartnerAppType(?DeviceManagementPartnerAppType $value): void {
        $this->getBackingStore()->set('partnerAppType', $value);
    }

    /**
     * Sets the partnerState property value. Partner state of this tenant.
     * @param DeviceManagementPartnerTenantState|null $value Value to set for the partnerState property.
    */
    public function setPartnerState(?DeviceManagementPartnerTenantState $value): void {
        $this->getBackingStore()->set('partnerState', $value);
    }

    /**
     * Sets the singleTenantAppId property value. Partner Single tenant App id
     * @param string|null $value Value to set for the singleTenantAppId property.
    */
    public function setSingleTenantAppId(?string $value): void {
        $this->getBackingStore()->set('singleTenantAppId', $value);
    }

    /**
     * Sets the whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime property value. DateTime in UTC when PartnerDevices will be marked as NonCompliant
     * @param DateTime|null $value Value to set for the whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime property.
    */
    public function setWhenPartnerDevicesWillBeMarkedAsNonCompliantDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('whenPartnerDevicesWillBeMarkedAsNonCompliantDateTime', $value);
    }

    /**
     * Sets the whenPartnerDevicesWillBeRemovedDateTime property value. DateTime in UTC when PartnerDevices will be removed
     * @param DateTime|null $value Value to set for the whenPartnerDevicesWillBeRemovedDateTime property.
    */
    public function setWhenPartnerDevicesWillBeRemovedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('whenPartnerDevicesWillBeRemovedDateTime', $value);
    }

}
