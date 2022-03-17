<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedDeviceMobileAppConfiguration extends Entity 
{
    /** @var array<ManagedDeviceMobileAppConfigurationAssignment>|null $assignments The list of group assignemenets for app configration. */
    private ?array $assignments = null;
    
    /** @var DateTime|null $createdDateTime DateTime the object was created. */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $description Admin provided description of the Device Configuration. */
    private ?string $description = null;
    
    /** @var array<ManagedDeviceMobileAppConfigurationDeviceStatus>|null $deviceStatuses List of ManagedDeviceMobileAppConfigurationDeviceStatus. */
    private ?array $deviceStatuses = null;
    
    /** @var ManagedDeviceMobileAppConfigurationDeviceSummary|null $deviceStatusSummary App configuration device status summary. */
    private ?ManagedDeviceMobileAppConfigurationDeviceSummary $deviceStatusSummary = null;
    
    /** @var string|null $displayName Admin provided name of the device configuration. */
    private ?string $displayName = null;
    
    /** @var DateTime|null $lastModifiedDateTime DateTime the object was last modified. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var array<string>|null $targetedMobileApps the associated app. */
    private ?array $targetedMobileApps = null;
    
    /** @var array<ManagedDeviceMobileAppConfigurationUserStatus>|null $userStatuses List of ManagedDeviceMobileAppConfigurationUserStatus. */
    private ?array $userStatuses = null;
    
    /** @var ManagedDeviceMobileAppConfigurationUserSummary|null $userStatusSummary App configuration user status summary. */
    private ?ManagedDeviceMobileAppConfigurationUserSummary $userStatusSummary = null;
    
    /** @var int|null $version Version of the device configuration. */
    private ?int $version = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDeviceMobileAppConfiguration {
        return new ManagedDeviceMobileAppConfiguration();
    }

    /**
     * Gets the assignments property value. The list of group assignemenets for app configration.
     * @return array<ManagedDeviceMobileAppConfigurationAssignment>|null
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
     * Gets the deviceStatuses property value. List of ManagedDeviceMobileAppConfigurationDeviceStatus.
     * @return array<ManagedDeviceMobileAppConfigurationDeviceStatus>|null
    */
    public function getDeviceStatuses(): ?array {
        return $this->deviceStatuses;
    }

    /**
     * Gets the deviceStatusSummary property value. App configuration device status summary.
     * @return ManagedDeviceMobileAppConfigurationDeviceSummary|null
    */
    public function getDeviceStatusSummary(): ?ManagedDeviceMobileAppConfigurationDeviceSummary {
        return $this->deviceStatusSummary;
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
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => function (self $o, ParseNode $n) { $o->setAssignments($n->getCollectionOfObjectValues(ManagedDeviceMobileAppConfigurationAssignment::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'deviceStatuses' => function (self $o, ParseNode $n) { $o->setDeviceStatuses($n->getCollectionOfObjectValues(ManagedDeviceMobileAppConfigurationDeviceStatus::class)); },
            'deviceStatusSummary' => function (self $o, ParseNode $n) { $o->setDeviceStatusSummary($n->getObjectValue(ManagedDeviceMobileAppConfigurationDeviceSummary::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'targetedMobileApps' => function (self $o, ParseNode $n) { $o->setTargetedMobileApps($n->getCollectionOfPrimitiveValues()); },
            'userStatuses' => function (self $o, ParseNode $n) { $o->setUserStatuses($n->getCollectionOfObjectValues(ManagedDeviceMobileAppConfigurationUserStatus::class)); },
            'userStatusSummary' => function (self $o, ParseNode $n) { $o->setUserStatusSummary($n->getObjectValue(ManagedDeviceMobileAppConfigurationUserSummary::class)); },
            'version' => function (self $o, ParseNode $n) { $o->setVersion($n->getIntegerValue()); },
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
     * Gets the targetedMobileApps property value. the associated app.
     * @return array<string>|null
    */
    public function getTargetedMobileApps(): ?array {
        return $this->targetedMobileApps;
    }

    /**
     * Gets the userStatuses property value. List of ManagedDeviceMobileAppConfigurationUserStatus.
     * @return array<ManagedDeviceMobileAppConfigurationUserStatus>|null
    */
    public function getUserStatuses(): ?array {
        return $this->userStatuses;
    }

    /**
     * Gets the userStatusSummary property value. App configuration user status summary.
     * @return ManagedDeviceMobileAppConfigurationUserSummary|null
    */
    public function getUserStatusSummary(): ?ManagedDeviceMobileAppConfigurationUserSummary {
        return $this->userStatusSummary;
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
        $writer->writeCollectionOfObjectValues('deviceStatuses', $this->deviceStatuses);
        $writer->writeObjectValue('deviceStatusSummary', $this->deviceStatusSummary);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfPrimitiveValues('targetedMobileApps', $this->targetedMobileApps);
        $writer->writeCollectionOfObjectValues('userStatuses', $this->userStatuses);
        $writer->writeObjectValue('userStatusSummary', $this->userStatusSummary);
        $writer->writeIntegerValue('version', $this->version);
    }

    /**
     * Sets the assignments property value. The list of group assignemenets for app configration.
     *  @param array<ManagedDeviceMobileAppConfigurationAssignment>|null $value Value to set for the assignments property.
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
     * Sets the deviceStatuses property value. List of ManagedDeviceMobileAppConfigurationDeviceStatus.
     *  @param array<ManagedDeviceMobileAppConfigurationDeviceStatus>|null $value Value to set for the deviceStatuses property.
    */
    public function setDeviceStatuses(?array $value ): void {
        $this->deviceStatuses = $value;
    }

    /**
     * Sets the deviceStatusSummary property value. App configuration device status summary.
     *  @param ManagedDeviceMobileAppConfigurationDeviceSummary|null $value Value to set for the deviceStatusSummary property.
    */
    public function setDeviceStatusSummary(?ManagedDeviceMobileAppConfigurationDeviceSummary $value ): void {
        $this->deviceStatusSummary = $value;
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
     * Sets the targetedMobileApps property value. the associated app.
     *  @param array<string>|null $value Value to set for the targetedMobileApps property.
    */
    public function setTargetedMobileApps(?array $value ): void {
        $this->targetedMobileApps = $value;
    }

    /**
     * Sets the userStatuses property value. List of ManagedDeviceMobileAppConfigurationUserStatus.
     *  @param array<ManagedDeviceMobileAppConfigurationUserStatus>|null $value Value to set for the userStatuses property.
    */
    public function setUserStatuses(?array $value ): void {
        $this->userStatuses = $value;
    }

    /**
     * Sets the userStatusSummary property value. App configuration user status summary.
     *  @param ManagedDeviceMobileAppConfigurationUserSummary|null $value Value to set for the userStatusSummary property.
    */
    public function setUserStatusSummary(?ManagedDeviceMobileAppConfigurationUserSummary $value ): void {
        $this->userStatusSummary = $value;
    }

    /**
     * Sets the version property value. Version of the device configuration.
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value ): void {
        $this->version = $value;
    }

}
