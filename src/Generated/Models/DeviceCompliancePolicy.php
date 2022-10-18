<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceCompliancePolicy extends Entity implements Parsable 
{
    /**
     * @var array<DeviceCompliancePolicyAssignment>|null $assignments The collection of assignments for this compliance policy.
    */
    private ?array $assignments = null;
    
    /**
     * @var DateTime|null $createdDateTime DateTime the object was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description Admin provided description of the Device Configuration.
    */
    private ?string $description = null;
    
    /**
     * @var array<SettingStateDeviceSummary>|null $deviceSettingStateSummaries Compliance Setting State Device Summary
    */
    private ?array $deviceSettingStateSummaries = null;
    
    /**
     * @var array<DeviceComplianceDeviceStatus>|null $deviceStatuses List of DeviceComplianceDeviceStatus.
    */
    private ?array $deviceStatuses = null;
    
    /**
     * @var DeviceComplianceDeviceOverview|null $deviceStatusOverview Device compliance devices status overview
    */
    private ?DeviceComplianceDeviceOverview $deviceStatusOverview = null;
    
    /**
     * @var string|null $displayName Admin provided name of the device configuration.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime DateTime the object was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var array<DeviceComplianceScheduledActionForRule>|null $scheduledActionsForRule The list of scheduled action per rule for this compliance policy. This is a required property when creating any individual per-platform compliance policies.
    */
    private ?array $scheduledActionsForRule = null;
    
    /**
     * @var array<DeviceComplianceUserStatus>|null $userStatuses List of DeviceComplianceUserStatus.
    */
    private ?array $userStatuses = null;
    
    /**
     * @var DeviceComplianceUserOverview|null $userStatusOverview Device compliance users status overview
    */
    private ?DeviceComplianceUserOverview $userStatusOverview = null;
    
    /**
     * @var int|null $version Version of the device configuration.
    */
    private ?int $version = null;
    
    /**
     * Instantiates a new deviceCompliancePolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceCompliancePolicy');
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
        return $this->assignments;
    }

    /**
     * Gets the createdDateTime property value. DateTime the object was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. Admin provided description of the Device Configuration.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the deviceSettingStateSummaries property value. Compliance Setting State Device Summary
     * @return array<SettingStateDeviceSummary>|null
    */
    public function getDeviceSettingStateSummaries(): ?array {
        return $this->deviceSettingStateSummaries;
    }

    /**
     * Gets the deviceStatuses property value. List of DeviceComplianceDeviceStatus.
     * @return array<DeviceComplianceDeviceStatus>|null
    */
    public function getDeviceStatuses(): ?array {
        return $this->deviceStatuses;
    }

    /**
     * Gets the deviceStatusOverview property value. Device compliance devices status overview
     * @return DeviceComplianceDeviceOverview|null
    */
    public function getDeviceStatusOverview(): ?DeviceComplianceDeviceOverview {
        return $this->deviceStatusOverview;
    }

    /**
     * Gets the displayName property value. Admin provided name of the device configuration.
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
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the scheduledActionsForRule property value. The list of scheduled action per rule for this compliance policy. This is a required property when creating any individual per-platform compliance policies.
     * @return array<DeviceComplianceScheduledActionForRule>|null
    */
    public function getScheduledActionsForRule(): ?array {
        return $this->scheduledActionsForRule;
    }

    /**
     * Gets the userStatuses property value. List of DeviceComplianceUserStatus.
     * @return array<DeviceComplianceUserStatus>|null
    */
    public function getUserStatuses(): ?array {
        return $this->userStatuses;
    }

    /**
     * Gets the userStatusOverview property value. Device compliance users status overview
     * @return DeviceComplianceUserOverview|null
    */
    public function getUserStatusOverview(): ?DeviceComplianceUserOverview {
        return $this->userStatusOverview;
    }

    /**
     * Gets the version property value. Version of the device configuration.
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeCollectionOfObjectValues('deviceSettingStateSummaries', $this->deviceSettingStateSummaries);
        $writer->writeCollectionOfObjectValues('deviceStatuses', $this->deviceStatuses);
        $writer->writeObjectValue('deviceStatusOverview', $this->deviceStatusOverview);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfObjectValues('scheduledActionsForRule', $this->scheduledActionsForRule);
        $writer->writeCollectionOfObjectValues('userStatuses', $this->userStatuses);
        $writer->writeObjectValue('userStatusOverview', $this->userStatusOverview);
        $writer->writeIntegerValue('version', $this->version);
    }

    /**
     * Sets the assignments property value. The collection of assignments for this compliance policy.
     *  @param array<DeviceCompliancePolicyAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the createdDateTime property value. DateTime the object was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. Admin provided description of the Device Configuration.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the deviceSettingStateSummaries property value. Compliance Setting State Device Summary
     *  @param array<SettingStateDeviceSummary>|null $value Value to set for the deviceSettingStateSummaries property.
    */
    public function setDeviceSettingStateSummaries(?array $value ): void {
        $this->deviceSettingStateSummaries = $value;
    }

    /**
     * Sets the deviceStatuses property value. List of DeviceComplianceDeviceStatus.
     *  @param array<DeviceComplianceDeviceStatus>|null $value Value to set for the deviceStatuses property.
    */
    public function setDeviceStatuses(?array $value ): void {
        $this->deviceStatuses = $value;
    }

    /**
     * Sets the deviceStatusOverview property value. Device compliance devices status overview
     *  @param DeviceComplianceDeviceOverview|null $value Value to set for the deviceStatusOverview property.
    */
    public function setDeviceStatusOverview(?DeviceComplianceDeviceOverview $value ): void {
        $this->deviceStatusOverview = $value;
    }

    /**
     * Sets the displayName property value. Admin provided name of the device configuration.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. DateTime the object was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the scheduledActionsForRule property value. The list of scheduled action per rule for this compliance policy. This is a required property when creating any individual per-platform compliance policies.
     *  @param array<DeviceComplianceScheduledActionForRule>|null $value Value to set for the scheduledActionsForRule property.
    */
    public function setScheduledActionsForRule(?array $value ): void {
        $this->scheduledActionsForRule = $value;
    }

    /**
     * Sets the userStatuses property value. List of DeviceComplianceUserStatus.
     *  @param array<DeviceComplianceUserStatus>|null $value Value to set for the userStatuses property.
    */
    public function setUserStatuses(?array $value ): void {
        $this->userStatuses = $value;
    }

    /**
     * Sets the userStatusOverview property value. Device compliance users status overview
     *  @param DeviceComplianceUserOverview|null $value Value to set for the userStatusOverview property.
    */
    public function setUserStatusOverview(?DeviceComplianceUserOverview $value ): void {
        $this->userStatusOverview = $value;
    }

    /**
     * Sets the version property value. Version of the device configuration.
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value ): void {
        $this->version = $value;
    }

}
