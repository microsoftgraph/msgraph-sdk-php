<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceConfiguration extends Entity implements Parsable 
{
    /**
     * @var array<DeviceConfigurationAssignment>|null $assignments The list of assignments for the device configuration profile.
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
     * @var array<SettingStateDeviceSummary>|null $deviceSettingStateSummaries Device Configuration Setting State Device Summary
    */
    private ?array $deviceSettingStateSummaries = null;
    
    /**
     * @var array<DeviceConfigurationDeviceStatus>|null $deviceStatuses Device configuration installation status by device.
    */
    private ?array $deviceStatuses = null;
    
    /**
     * @var DeviceConfigurationDeviceOverview|null $deviceStatusOverview Device Configuration devices status overview
    */
    private ?DeviceConfigurationDeviceOverview $deviceStatusOverview = null;
    
    /**
     * @var string|null $displayName Admin provided name of the device configuration.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime DateTime the object was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var array<DeviceConfigurationUserStatus>|null $userStatuses Device configuration installation status by user.
    */
    private ?array $userStatuses = null;
    
    /**
     * @var DeviceConfigurationUserOverview|null $userStatusOverview Device Configuration users status overview
    */
    private ?DeviceConfigurationUserOverview $userStatusOverview = null;
    
    /**
     * @var int|null $version Version of the device configuration.
    */
    private ?int $version = null;
    
    /**
     * Instantiates a new deviceConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceConfiguration {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidCustomConfiguration': return new AndroidCustomConfiguration();
                case '#microsoft.graph.androidGeneralDeviceConfiguration': return new AndroidGeneralDeviceConfiguration();
                case '#microsoft.graph.androidWorkProfileCustomConfiguration': return new AndroidWorkProfileCustomConfiguration();
                case '#microsoft.graph.androidWorkProfileGeneralDeviceConfiguration': return new AndroidWorkProfileGeneralDeviceConfiguration();
                case '#microsoft.graph.appleDeviceFeaturesConfigurationBase': return new AppleDeviceFeaturesConfigurationBase();
                case '#microsoft.graph.editionUpgradeConfiguration': return new EditionUpgradeConfiguration();
                case '#microsoft.graph.iosCertificateProfile': return new IosCertificateProfile();
                case '#microsoft.graph.iosCustomConfiguration': return new IosCustomConfiguration();
                case '#microsoft.graph.iosDeviceFeaturesConfiguration': return new IosDeviceFeaturesConfiguration();
                case '#microsoft.graph.iosGeneralDeviceConfiguration': return new IosGeneralDeviceConfiguration();
                case '#microsoft.graph.iosUpdateConfiguration': return new IosUpdateConfiguration();
                case '#microsoft.graph.macOSCustomConfiguration': return new MacOSCustomConfiguration();
                case '#microsoft.graph.macOSDeviceFeaturesConfiguration': return new MacOSDeviceFeaturesConfiguration();
                case '#microsoft.graph.macOSGeneralDeviceConfiguration': return new MacOSGeneralDeviceConfiguration();
                case '#microsoft.graph.sharedPCConfiguration': return new SharedPCConfiguration();
                case '#microsoft.graph.windows10CustomConfiguration': return new Windows10CustomConfiguration();
                case '#microsoft.graph.windows10EndpointProtectionConfiguration': return new Windows10EndpointProtectionConfiguration();
                case '#microsoft.graph.windows10EnterpriseModernAppManagementConfiguration': return new Windows10EnterpriseModernAppManagementConfiguration();
                case '#microsoft.graph.windows10GeneralConfiguration': return new Windows10GeneralConfiguration();
                case '#microsoft.graph.windows10SecureAssessmentConfiguration': return new Windows10SecureAssessmentConfiguration();
                case '#microsoft.graph.windows10TeamGeneralConfiguration': return new Windows10TeamGeneralConfiguration();
                case '#microsoft.graph.windows81GeneralConfiguration': return new Windows81GeneralConfiguration();
                case '#microsoft.graph.windowsDefenderAdvancedThreatProtectionConfiguration': return new WindowsDefenderAdvancedThreatProtectionConfiguration();
                case '#microsoft.graph.windowsPhone81CustomConfiguration': return new WindowsPhone81CustomConfiguration();
                case '#microsoft.graph.windowsPhone81GeneralConfiguration': return new WindowsPhone81GeneralConfiguration();
                case '#microsoft.graph.windowsUpdateForBusinessConfiguration': return new WindowsUpdateForBusinessConfiguration();
            }
        }
        return new DeviceConfiguration();
    }

    /**
     * Gets the assignments property value. The list of assignments for the device configuration profile.
     * @return array<DeviceConfigurationAssignment>|null
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
     * Gets the deviceSettingStateSummaries property value. Device Configuration Setting State Device Summary
     * @return array<SettingStateDeviceSummary>|null
    */
    public function getDeviceSettingStateSummaries(): ?array {
        return $this->deviceSettingStateSummaries;
    }

    /**
     * Gets the deviceStatuses property value. Device configuration installation status by device.
     * @return array<DeviceConfigurationDeviceStatus>|null
    */
    public function getDeviceStatuses(): ?array {
        return $this->deviceStatuses;
    }

    /**
     * Gets the deviceStatusOverview property value. Device Configuration devices status overview
     * @return DeviceConfigurationDeviceOverview|null
    */
    public function getDeviceStatusOverview(): ?DeviceConfigurationDeviceOverview {
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
            'assignments' => function (ParseNode $n) use ($o) { $o->setAssignments($n->getCollectionOfObjectValues(array(DeviceConfigurationAssignment::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'deviceSettingStateSummaries' => function (ParseNode $n) use ($o) { $o->setDeviceSettingStateSummaries($n->getCollectionOfObjectValues(array(SettingStateDeviceSummary::class, 'createFromDiscriminatorValue'))); },
            'deviceStatuses' => function (ParseNode $n) use ($o) { $o->setDeviceStatuses($n->getCollectionOfObjectValues(array(DeviceConfigurationDeviceStatus::class, 'createFromDiscriminatorValue'))); },
            'deviceStatusOverview' => function (ParseNode $n) use ($o) { $o->setDeviceStatusOverview($n->getObjectValue(array(DeviceConfigurationDeviceOverview::class, 'createFromDiscriminatorValue'))); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'userStatuses' => function (ParseNode $n) use ($o) { $o->setUserStatuses($n->getCollectionOfObjectValues(array(DeviceConfigurationUserStatus::class, 'createFromDiscriminatorValue'))); },
            'userStatusOverview' => function (ParseNode $n) use ($o) { $o->setUserStatusOverview($n->getObjectValue(array(DeviceConfigurationUserOverview::class, 'createFromDiscriminatorValue'))); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getIntegerValue()); },
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
     * Gets the userStatuses property value. Device configuration installation status by user.
     * @return array<DeviceConfigurationUserStatus>|null
    */
    public function getUserStatuses(): ?array {
        return $this->userStatuses;
    }

    /**
     * Gets the userStatusOverview property value. Device Configuration users status overview
     * @return DeviceConfigurationUserOverview|null
    */
    public function getUserStatusOverview(): ?DeviceConfigurationUserOverview {
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
        $writer->writeCollectionOfObjectValues('userStatuses', $this->userStatuses);
        $writer->writeObjectValue('userStatusOverview', $this->userStatusOverview);
        $writer->writeIntegerValue('version', $this->version);
    }

    /**
     * Sets the assignments property value. The list of assignments for the device configuration profile.
     *  @param array<DeviceConfigurationAssignment>|null $value Value to set for the assignments property.
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
     * Sets the deviceSettingStateSummaries property value. Device Configuration Setting State Device Summary
     *  @param array<SettingStateDeviceSummary>|null $value Value to set for the deviceSettingStateSummaries property.
    */
    public function setDeviceSettingStateSummaries(?array $value ): void {
        $this->deviceSettingStateSummaries = $value;
    }

    /**
     * Sets the deviceStatuses property value. Device configuration installation status by device.
     *  @param array<DeviceConfigurationDeviceStatus>|null $value Value to set for the deviceStatuses property.
    */
    public function setDeviceStatuses(?array $value ): void {
        $this->deviceStatuses = $value;
    }

    /**
     * Sets the deviceStatusOverview property value. Device Configuration devices status overview
     *  @param DeviceConfigurationDeviceOverview|null $value Value to set for the deviceStatusOverview property.
    */
    public function setDeviceStatusOverview(?DeviceConfigurationDeviceOverview $value ): void {
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
     * Sets the userStatuses property value. Device configuration installation status by user.
     *  @param array<DeviceConfigurationUserStatus>|null $value Value to set for the userStatuses property.
    */
    public function setUserStatuses(?array $value ): void {
        $this->userStatuses = $value;
    }

    /**
     * Sets the userStatusOverview property value. Device Configuration users status overview
     *  @param DeviceConfigurationUserOverview|null $value Value to set for the userStatusOverview property.
    */
    public function setUserStatusOverview(?DeviceConfigurationUserOverview $value ): void {
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
