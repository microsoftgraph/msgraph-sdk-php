<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedDeviceMobileAppConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new managedDeviceMobileAppConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedDeviceMobileAppConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDeviceMobileAppConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.iosMobileAppConfiguration': return new IosMobileAppConfiguration();
            }
        }
        return new ManagedDeviceMobileAppConfiguration();
    }

    /**
     * Gets the assignments property value. The list of group assignemenets for app configration.
     * @return array<ManagedDeviceMobileAppConfigurationAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->getBackingStore()->get('assignments');
    }

    /**
     * Gets the createdDateTime property value. DateTime the object was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. Admin provided description of the Device Configuration.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the deviceStatuses property value. List of ManagedDeviceMobileAppConfigurationDeviceStatus.
     * @return array<ManagedDeviceMobileAppConfigurationDeviceStatus>|null
    */
    public function getDeviceStatuses(): ?array {
        return $this->getBackingStore()->get('deviceStatuses');
    }

    /**
     * Gets the deviceStatusSummary property value. App configuration device status summary.
     * @return ManagedDeviceMobileAppConfigurationDeviceSummary|null
    */
    public function getDeviceStatusSummary(): ?ManagedDeviceMobileAppConfigurationDeviceSummary {
        return $this->getBackingStore()->get('deviceStatusSummary');
    }

    /**
     * Gets the displayName property value. Admin provided name of the device configuration.
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
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([ManagedDeviceMobileAppConfigurationAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceStatuses' => fn(ParseNode $n) => $o->setDeviceStatuses($n->getCollectionOfObjectValues([ManagedDeviceMobileAppConfigurationDeviceStatus::class, 'createFromDiscriminatorValue'])),
            'deviceStatusSummary' => fn(ParseNode $n) => $o->setDeviceStatusSummary($n->getObjectValue([ManagedDeviceMobileAppConfigurationDeviceSummary::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'targetedMobileApps' => fn(ParseNode $n) => $o->setTargetedMobileApps($n->getCollectionOfPrimitiveValues()),
            'userStatuses' => fn(ParseNode $n) => $o->setUserStatuses($n->getCollectionOfObjectValues([ManagedDeviceMobileAppConfigurationUserStatus::class, 'createFromDiscriminatorValue'])),
            'userStatusSummary' => fn(ParseNode $n) => $o->setUserStatusSummary($n->getObjectValue([ManagedDeviceMobileAppConfigurationUserSummary::class, 'createFromDiscriminatorValue'])),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. DateTime the object was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the targetedMobileApps property value. the associated app.
     * @return array<string>|null
    */
    public function getTargetedMobileApps(): ?array {
        return $this->getBackingStore()->get('targetedMobileApps');
    }

    /**
     * Gets the userStatuses property value. List of ManagedDeviceMobileAppConfigurationUserStatus.
     * @return array<ManagedDeviceMobileAppConfigurationUserStatus>|null
    */
    public function getUserStatuses(): ?array {
        return $this->getBackingStore()->get('userStatuses');
    }

    /**
     * Gets the userStatusSummary property value. App configuration user status summary.
     * @return ManagedDeviceMobileAppConfigurationUserSummary|null
    */
    public function getUserStatusSummary(): ?ManagedDeviceMobileAppConfigurationUserSummary {
        return $this->getBackingStore()->get('userStatusSummary');
    }

    /**
     * Gets the version property value. Version of the device configuration.
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->getBackingStore()->get('version');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->getAssignments());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeCollectionOfObjectValues('deviceStatuses', $this->getDeviceStatuses());
        $writer->writeObjectValue('deviceStatusSummary', $this->getDeviceStatusSummary());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfPrimitiveValues('targetedMobileApps', $this->getTargetedMobileApps());
        $writer->writeCollectionOfObjectValues('userStatuses', $this->getUserStatuses());
        $writer->writeObjectValue('userStatusSummary', $this->getUserStatusSummary());
        $writer->writeIntegerValue('version', $this->getVersion());
    }

    /**
     * Sets the assignments property value. The list of group assignemenets for app configration.
     *  @param array<ManagedDeviceMobileAppConfigurationAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the createdDateTime property value. DateTime the object was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Admin provided description of the Device Configuration.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the deviceStatuses property value. List of ManagedDeviceMobileAppConfigurationDeviceStatus.
     *  @param array<ManagedDeviceMobileAppConfigurationDeviceStatus>|null $value Value to set for the deviceStatuses property.
    */
    public function setDeviceStatuses(?array $value): void {
        $this->getBackingStore()->set('deviceStatuses', $value);
    }

    /**
     * Sets the deviceStatusSummary property value. App configuration device status summary.
     *  @param ManagedDeviceMobileAppConfigurationDeviceSummary|null $value Value to set for the deviceStatusSummary property.
    */
    public function setDeviceStatusSummary(?ManagedDeviceMobileAppConfigurationDeviceSummary $value): void {
        $this->getBackingStore()->set('deviceStatusSummary', $value);
    }

    /**
     * Sets the displayName property value. Admin provided name of the device configuration.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. DateTime the object was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the targetedMobileApps property value. the associated app.
     *  @param array<string>|null $value Value to set for the targetedMobileApps property.
    */
    public function setTargetedMobileApps(?array $value): void {
        $this->getBackingStore()->set('targetedMobileApps', $value);
    }

    /**
     * Sets the userStatuses property value. List of ManagedDeviceMobileAppConfigurationUserStatus.
     *  @param array<ManagedDeviceMobileAppConfigurationUserStatus>|null $value Value to set for the userStatuses property.
    */
    public function setUserStatuses(?array $value): void {
        $this->getBackingStore()->set('userStatuses', $value);
    }

    /**
     * Sets the userStatusSummary property value. App configuration user status summary.
     *  @param ManagedDeviceMobileAppConfigurationUserSummary|null $value Value to set for the userStatusSummary property.
    */
    public function setUserStatusSummary(?ManagedDeviceMobileAppConfigurationUserSummary $value): void {
        $this->getBackingStore()->set('userStatusSummary', $value);
    }

    /**
     * Sets the version property value. Version of the device configuration.
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
