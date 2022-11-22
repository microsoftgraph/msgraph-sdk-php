<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceCompliancePolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceCompliancePolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceCompliancePolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceCompliancePolicy {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidCompliancePolicy': return new AndroidCompliancePolicy();
                case '#microsoft.graph.androidWorkProfileCompliancePolicy': return new AndroidWorkProfileCompliancePolicy();
                case '#microsoft.graph.iosCompliancePolicy': return new IosCompliancePolicy();
                case '#microsoft.graph.macOSCompliancePolicy': return new MacOSCompliancePolicy();
                case '#microsoft.graph.windows10CompliancePolicy': return new Windows10CompliancePolicy();
                case '#microsoft.graph.windows10MobileCompliancePolicy': return new Windows10MobileCompliancePolicy();
                case '#microsoft.graph.windows81CompliancePolicy': return new Windows81CompliancePolicy();
                case '#microsoft.graph.windowsPhone81CompliancePolicy': return new WindowsPhone81CompliancePolicy();
            }
        }
        return new DeviceCompliancePolicy();
    }

    /**
     * Gets the assignments property value. The collection of assignments for this compliance policy.
     * @return array<DeviceCompliancePolicyAssignment>|null
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
     * Gets the deviceSettingStateSummaries property value. Compliance Setting State Device Summary
     * @return array<SettingStateDeviceSummary>|null
    */
    public function getDeviceSettingStateSummaries(): ?array {
        return $this->getBackingStore()->get('deviceSettingStateSummaries');
    }

    /**
     * Gets the deviceStatuses property value. List of DeviceComplianceDeviceStatus.
     * @return array<DeviceComplianceDeviceStatus>|null
    */
    public function getDeviceStatuses(): ?array {
        return $this->getBackingStore()->get('deviceStatuses');
    }

    /**
     * Gets the deviceStatusOverview property value. Device compliance devices status overview
     * @return DeviceComplianceDeviceOverview|null
    */
    public function getDeviceStatusOverview(): ?DeviceComplianceDeviceOverview {
        return $this->getBackingStore()->get('deviceStatusOverview');
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
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([DeviceCompliancePolicyAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceSettingStateSummaries' => fn(ParseNode $n) => $o->setDeviceSettingStateSummaries($n->getCollectionOfObjectValues([SettingStateDeviceSummary::class, 'createFromDiscriminatorValue'])),
            'deviceStatuses' => fn(ParseNode $n) => $o->setDeviceStatuses($n->getCollectionOfObjectValues([DeviceComplianceDeviceStatus::class, 'createFromDiscriminatorValue'])),
            'deviceStatusOverview' => fn(ParseNode $n) => $o->setDeviceStatusOverview($n->getObjectValue([DeviceComplianceDeviceOverview::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'scheduledActionsForRule' => fn(ParseNode $n) => $o->setScheduledActionsForRule($n->getCollectionOfObjectValues([DeviceComplianceScheduledActionForRule::class, 'createFromDiscriminatorValue'])),
            'userStatuses' => fn(ParseNode $n) => $o->setUserStatuses($n->getCollectionOfObjectValues([DeviceComplianceUserStatus::class, 'createFromDiscriminatorValue'])),
            'userStatusOverview' => fn(ParseNode $n) => $o->setUserStatusOverview($n->getObjectValue([DeviceComplianceUserOverview::class, 'createFromDiscriminatorValue'])),
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
     * Gets the scheduledActionsForRule property value. The list of scheduled action per rule for this compliance policy. This is a required property when creating any individual per-platform compliance policies.
     * @return array<DeviceComplianceScheduledActionForRule>|null
    */
    public function getScheduledActionsForRule(): ?array {
        return $this->getBackingStore()->get('scheduledActionsForRule');
    }

    /**
     * Gets the userStatuses property value. List of DeviceComplianceUserStatus.
     * @return array<DeviceComplianceUserStatus>|null
    */
    public function getUserStatuses(): ?array {
        return $this->getBackingStore()->get('userStatuses');
    }

    /**
     * Gets the userStatusOverview property value. Device compliance users status overview
     * @return DeviceComplianceUserOverview|null
    */
    public function getUserStatusOverview(): ?DeviceComplianceUserOverview {
        return $this->getBackingStore()->get('userStatusOverview');
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
        $writer->writeCollectionOfObjectValues('deviceSettingStateSummaries', $this->getDeviceSettingStateSummaries());
        $writer->writeCollectionOfObjectValues('deviceStatuses', $this->getDeviceStatuses());
        $writer->writeObjectValue('deviceStatusOverview', $this->getDeviceStatusOverview());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfObjectValues('scheduledActionsForRule', $this->getScheduledActionsForRule());
        $writer->writeCollectionOfObjectValues('userStatuses', $this->getUserStatuses());
        $writer->writeObjectValue('userStatusOverview', $this->getUserStatusOverview());
        $writer->writeIntegerValue('version', $this->getVersion());
    }

    /**
     * Sets the assignments property value. The collection of assignments for this compliance policy.
     *  @param array<DeviceCompliancePolicyAssignment>|null $value Value to set for the assignments property.
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
     * Sets the deviceSettingStateSummaries property value. Compliance Setting State Device Summary
     *  @param array<SettingStateDeviceSummary>|null $value Value to set for the deviceSettingStateSummaries property.
    */
    public function setDeviceSettingStateSummaries(?array $value): void {
        $this->getBackingStore()->set('deviceSettingStateSummaries', $value);
    }

    /**
     * Sets the deviceStatuses property value. List of DeviceComplianceDeviceStatus.
     *  @param array<DeviceComplianceDeviceStatus>|null $value Value to set for the deviceStatuses property.
    */
    public function setDeviceStatuses(?array $value): void {
        $this->getBackingStore()->set('deviceStatuses', $value);
    }

    /**
     * Sets the deviceStatusOverview property value. Device compliance devices status overview
     *  @param DeviceComplianceDeviceOverview|null $value Value to set for the deviceStatusOverview property.
    */
    public function setDeviceStatusOverview(?DeviceComplianceDeviceOverview $value): void {
        $this->getBackingStore()->set('deviceStatusOverview', $value);
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
     * Sets the scheduledActionsForRule property value. The list of scheduled action per rule for this compliance policy. This is a required property when creating any individual per-platform compliance policies.
     *  @param array<DeviceComplianceScheduledActionForRule>|null $value Value to set for the scheduledActionsForRule property.
    */
    public function setScheduledActionsForRule(?array $value): void {
        $this->getBackingStore()->set('scheduledActionsForRule', $value);
    }

    /**
     * Sets the userStatuses property value. List of DeviceComplianceUserStatus.
     *  @param array<DeviceComplianceUserStatus>|null $value Value to set for the userStatuses property.
    */
    public function setUserStatuses(?array $value): void {
        $this->getBackingStore()->set('userStatuses', $value);
    }

    /**
     * Sets the userStatusOverview property value. Device compliance users status overview
     *  @param DeviceComplianceUserOverview|null $value Value to set for the userStatusOverview property.
    */
    public function setUserStatusOverview(?DeviceComplianceUserOverview $value): void {
        $this->getBackingStore()->set('userStatusOverview', $value);
    }

    /**
     * Sets the version property value. Version of the device configuration.
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
