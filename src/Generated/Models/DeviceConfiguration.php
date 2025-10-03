<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Device Configuration.
*/
class DeviceConfiguration extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('assignments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceConfigurationAssignment::class);
            /** @var array<DeviceConfigurationAssignment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignments'");
    }

    /**
     * Gets the createdDateTime property value. DateTime the object was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the description property value. Admin provided description of the Device Configuration.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the deviceSettingStateSummaries property value. Device Configuration Setting State Device Summary
     * @return array<SettingStateDeviceSummary>|null
    */
    public function getDeviceSettingStateSummaries(): ?array {
        $val = $this->getBackingStore()->get('deviceSettingStateSummaries');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SettingStateDeviceSummary::class);
            /** @var array<SettingStateDeviceSummary>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceSettingStateSummaries'");
    }

    /**
     * Gets the deviceStatuses property value. Device configuration installation status by device.
     * @return array<DeviceConfigurationDeviceStatus>|null
    */
    public function getDeviceStatuses(): ?array {
        $val = $this->getBackingStore()->get('deviceStatuses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceConfigurationDeviceStatus::class);
            /** @var array<DeviceConfigurationDeviceStatus>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceStatuses'");
    }

    /**
     * Gets the deviceStatusOverview property value. Device Configuration devices status overview
     * @return DeviceConfigurationDeviceOverview|null
    */
    public function getDeviceStatusOverview(): ?DeviceConfigurationDeviceOverview {
        $val = $this->getBackingStore()->get('deviceStatusOverview');
        if (is_null($val) || $val instanceof DeviceConfigurationDeviceOverview) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceStatusOverview'");
    }

    /**
     * Gets the displayName property value. Admin provided name of the device configuration.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([DeviceConfigurationAssignment::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceSettingStateSummaries' => fn(ParseNode $n) => $o->setDeviceSettingStateSummaries($n->getCollectionOfObjectValues([SettingStateDeviceSummary::class, 'createFromDiscriminatorValue'])),
            'deviceStatuses' => fn(ParseNode $n) => $o->setDeviceStatuses($n->getCollectionOfObjectValues([DeviceConfigurationDeviceStatus::class, 'createFromDiscriminatorValue'])),
            'deviceStatusOverview' => fn(ParseNode $n) => $o->setDeviceStatusOverview($n->getObjectValue([DeviceConfigurationDeviceOverview::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'userStatuses' => fn(ParseNode $n) => $o->setUserStatuses($n->getCollectionOfObjectValues([DeviceConfigurationUserStatus::class, 'createFromDiscriminatorValue'])),
            'userStatusOverview' => fn(ParseNode $n) => $o->setUserStatusOverview($n->getObjectValue([DeviceConfigurationUserOverview::class, 'createFromDiscriminatorValue'])),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. DateTime the object was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the userStatuses property value. Device configuration installation status by user.
     * @return array<DeviceConfigurationUserStatus>|null
    */
    public function getUserStatuses(): ?array {
        $val = $this->getBackingStore()->get('userStatuses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceConfigurationUserStatus::class);
            /** @var array<DeviceConfigurationUserStatus>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userStatuses'");
    }

    /**
     * Gets the userStatusOverview property value. Device Configuration users status overview
     * @return DeviceConfigurationUserOverview|null
    */
    public function getUserStatusOverview(): ?DeviceConfigurationUserOverview {
        $val = $this->getBackingStore()->get('userStatusOverview');
        if (is_null($val) || $val instanceof DeviceConfigurationUserOverview) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userStatusOverview'");
    }

    /**
     * Gets the version property value. Version of the device configuration.
     * @return int|null
    */
    public function getVersion(): ?int {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
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
        $writer->writeCollectionOfObjectValues('userStatuses', $this->getUserStatuses());
        $writer->writeObjectValue('userStatusOverview', $this->getUserStatusOverview());
        $writer->writeIntegerValue('version', $this->getVersion());
    }

    /**
     * Sets the assignments property value. The list of assignments for the device configuration profile.
     * @param array<DeviceConfigurationAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value): void {
        $this->getBackingStore()->set('assignments', $value);
    }

    /**
     * Sets the createdDateTime property value. DateTime the object was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. Admin provided description of the Device Configuration.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the deviceSettingStateSummaries property value. Device Configuration Setting State Device Summary
     * @param array<SettingStateDeviceSummary>|null $value Value to set for the deviceSettingStateSummaries property.
    */
    public function setDeviceSettingStateSummaries(?array $value): void {
        $this->getBackingStore()->set('deviceSettingStateSummaries', $value);
    }

    /**
     * Sets the deviceStatuses property value. Device configuration installation status by device.
     * @param array<DeviceConfigurationDeviceStatus>|null $value Value to set for the deviceStatuses property.
    */
    public function setDeviceStatuses(?array $value): void {
        $this->getBackingStore()->set('deviceStatuses', $value);
    }

    /**
     * Sets the deviceStatusOverview property value. Device Configuration devices status overview
     * @param DeviceConfigurationDeviceOverview|null $value Value to set for the deviceStatusOverview property.
    */
    public function setDeviceStatusOverview(?DeviceConfigurationDeviceOverview $value): void {
        $this->getBackingStore()->set('deviceStatusOverview', $value);
    }

    /**
     * Sets the displayName property value. Admin provided name of the device configuration.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. DateTime the object was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the userStatuses property value. Device configuration installation status by user.
     * @param array<DeviceConfigurationUserStatus>|null $value Value to set for the userStatuses property.
    */
    public function setUserStatuses(?array $value): void {
        $this->getBackingStore()->set('userStatuses', $value);
    }

    /**
     * Sets the userStatusOverview property value. Device Configuration users status overview
     * @param DeviceConfigurationUserOverview|null $value Value to set for the userStatusOverview property.
    */
    public function setUserStatusOverview(?DeviceConfigurationUserOverview $value): void {
        $this->getBackingStore()->set('userStatusOverview', $value);
    }

    /**
     * Sets the version property value. Version of the device configuration.
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
