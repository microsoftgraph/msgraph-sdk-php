<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Policy used to configure detailed management settings for a specified set of apps for all users not targeted by a TargetedManagedAppProtection Policy
*/
class DefaultManagedAppProtection extends ManagedAppProtection implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new defaultManagedAppProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.defaultManagedAppProtection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DefaultManagedAppProtection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DefaultManagedAppProtection {
        return new DefaultManagedAppProtection();
    }

    /**
     * Gets the appDataEncryptionType property value. Represents the level to which app data is encrypted for managed apps
     * @return ManagedAppDataEncryptionType|null
    */
    public function getAppDataEncryptionType(): ?ManagedAppDataEncryptionType {
        $val = $this->getBackingStore()->get('appDataEncryptionType');
        if (is_null($val) || $val instanceof ManagedAppDataEncryptionType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appDataEncryptionType'");
    }

    /**
     * Gets the apps property value. List of apps to which the policy is deployed.
     * @return array<ManagedMobileApp>|null
    */
    public function getApps(): ?array {
        $val = $this->getBackingStore()->get('apps');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagedMobileApp::class);
            /** @var array<ManagedMobileApp>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'apps'");
    }

    /**
     * Gets the customSettings property value. A set of string key and string value pairs to be sent to the affected users, unalterned by this service
     * @return array<KeyValuePair>|null
    */
    public function getCustomSettings(): ?array {
        $val = $this->getBackingStore()->get('customSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValuePair::class);
            /** @var array<KeyValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customSettings'");
    }

    /**
     * Gets the deployedAppCount property value. Count of apps to which the current policy is deployed.
     * @return int|null
    */
    public function getDeployedAppCount(): ?int {
        $val = $this->getBackingStore()->get('deployedAppCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deployedAppCount'");
    }

    /**
     * Gets the deploymentSummary property value. Navigation property to deployment summary of the configuration.
     * @return ManagedAppPolicyDeploymentSummary|null
    */
    public function getDeploymentSummary(): ?ManagedAppPolicyDeploymentSummary {
        $val = $this->getBackingStore()->get('deploymentSummary');
        if (is_null($val) || $val instanceof ManagedAppPolicyDeploymentSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deploymentSummary'");
    }

    /**
     * Gets the disableAppEncryptionIfDeviceEncryptionIsEnabled property value. When this setting is enabled, app level encryption is disabled if device level encryption is enabled. (Android only)
     * @return bool|null
    */
    public function getDisableAppEncryptionIfDeviceEncryptionIsEnabled(): ?bool {
        $val = $this->getBackingStore()->get('disableAppEncryptionIfDeviceEncryptionIsEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'disableAppEncryptionIfDeviceEncryptionIsEnabled'");
    }

    /**
     * Gets the encryptAppData property value. Indicates whether managed-app data should be encrypted. (Android only)
     * @return bool|null
    */
    public function getEncryptAppData(): ?bool {
        $val = $this->getBackingStore()->get('encryptAppData');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'encryptAppData'");
    }

    /**
     * Gets the faceIdBlocked property value. Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True. (iOS Only)
     * @return bool|null
    */
    public function getFaceIdBlocked(): ?bool {
        $val = $this->getBackingStore()->get('faceIdBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'faceIdBlocked'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appDataEncryptionType' => fn(ParseNode $n) => $o->setAppDataEncryptionType($n->getEnumValue(ManagedAppDataEncryptionType::class)),
            'apps' => fn(ParseNode $n) => $o->setApps($n->getCollectionOfObjectValues([ManagedMobileApp::class, 'createFromDiscriminatorValue'])),
            'customSettings' => fn(ParseNode $n) => $o->setCustomSettings($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'deployedAppCount' => fn(ParseNode $n) => $o->setDeployedAppCount($n->getIntegerValue()),
            'deploymentSummary' => fn(ParseNode $n) => $o->setDeploymentSummary($n->getObjectValue([ManagedAppPolicyDeploymentSummary::class, 'createFromDiscriminatorValue'])),
            'disableAppEncryptionIfDeviceEncryptionIsEnabled' => fn(ParseNode $n) => $o->setDisableAppEncryptionIfDeviceEncryptionIsEnabled($n->getBooleanValue()),
            'encryptAppData' => fn(ParseNode $n) => $o->setEncryptAppData($n->getBooleanValue()),
            'faceIdBlocked' => fn(ParseNode $n) => $o->setFaceIdBlocked($n->getBooleanValue()),
            'minimumRequiredPatchVersion' => fn(ParseNode $n) => $o->setMinimumRequiredPatchVersion($n->getStringValue()),
            'minimumRequiredSdkVersion' => fn(ParseNode $n) => $o->setMinimumRequiredSdkVersion($n->getStringValue()),
            'minimumWarningPatchVersion' => fn(ParseNode $n) => $o->setMinimumWarningPatchVersion($n->getStringValue()),
            'screenCaptureBlocked' => fn(ParseNode $n) => $o->setScreenCaptureBlocked($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the minimumRequiredPatchVersion property value. Define the oldest required Android security patch level a user can have to gain secure access to the app. (Android only)
     * @return string|null
    */
    public function getMinimumRequiredPatchVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumRequiredPatchVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumRequiredPatchVersion'");
    }

    /**
     * Gets the minimumRequiredSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data. (iOS Only)
     * @return string|null
    */
    public function getMinimumRequiredSdkVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumRequiredSdkVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumRequiredSdkVersion'");
    }

    /**
     * Gets the minimumWarningPatchVersion property value. Define the oldest recommended Android security patch level a user can have for secure access to the app. (Android only)
     * @return string|null
    */
    public function getMinimumWarningPatchVersion(): ?string {
        $val = $this->getBackingStore()->get('minimumWarningPatchVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumWarningPatchVersion'");
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether screen capture is blocked. (Android only)
     * @return bool|null
    */
    public function getScreenCaptureBlocked(): ?bool {
        $val = $this->getBackingStore()->get('screenCaptureBlocked');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'screenCaptureBlocked'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('appDataEncryptionType', $this->getAppDataEncryptionType());
        $writer->writeCollectionOfObjectValues('apps', $this->getApps());
        $writer->writeCollectionOfObjectValues('customSettings', $this->getCustomSettings());
        $writer->writeIntegerValue('deployedAppCount', $this->getDeployedAppCount());
        $writer->writeObjectValue('deploymentSummary', $this->getDeploymentSummary());
        $writer->writeBooleanValue('disableAppEncryptionIfDeviceEncryptionIsEnabled', $this->getDisableAppEncryptionIfDeviceEncryptionIsEnabled());
        $writer->writeBooleanValue('encryptAppData', $this->getEncryptAppData());
        $writer->writeBooleanValue('faceIdBlocked', $this->getFaceIdBlocked());
        $writer->writeStringValue('minimumRequiredPatchVersion', $this->getMinimumRequiredPatchVersion());
        $writer->writeStringValue('minimumRequiredSdkVersion', $this->getMinimumRequiredSdkVersion());
        $writer->writeStringValue('minimumWarningPatchVersion', $this->getMinimumWarningPatchVersion());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('screenCaptureBlocked', $this->getScreenCaptureBlocked());
    }

    /**
     * Sets the appDataEncryptionType property value. Represents the level to which app data is encrypted for managed apps
     * @param ManagedAppDataEncryptionType|null $value Value to set for the appDataEncryptionType property.
    */
    public function setAppDataEncryptionType(?ManagedAppDataEncryptionType $value): void {
        $this->getBackingStore()->set('appDataEncryptionType', $value);
    }

    /**
     * Sets the apps property value. List of apps to which the policy is deployed.
     * @param array<ManagedMobileApp>|null $value Value to set for the apps property.
    */
    public function setApps(?array $value): void {
        $this->getBackingStore()->set('apps', $value);
    }

    /**
     * Sets the customSettings property value. A set of string key and string value pairs to be sent to the affected users, unalterned by this service
     * @param array<KeyValuePair>|null $value Value to set for the customSettings property.
    */
    public function setCustomSettings(?array $value): void {
        $this->getBackingStore()->set('customSettings', $value);
    }

    /**
     * Sets the deployedAppCount property value. Count of apps to which the current policy is deployed.
     * @param int|null $value Value to set for the deployedAppCount property.
    */
    public function setDeployedAppCount(?int $value): void {
        $this->getBackingStore()->set('deployedAppCount', $value);
    }

    /**
     * Sets the deploymentSummary property value. Navigation property to deployment summary of the configuration.
     * @param ManagedAppPolicyDeploymentSummary|null $value Value to set for the deploymentSummary property.
    */
    public function setDeploymentSummary(?ManagedAppPolicyDeploymentSummary $value): void {
        $this->getBackingStore()->set('deploymentSummary', $value);
    }

    /**
     * Sets the disableAppEncryptionIfDeviceEncryptionIsEnabled property value. When this setting is enabled, app level encryption is disabled if device level encryption is enabled. (Android only)
     * @param bool|null $value Value to set for the disableAppEncryptionIfDeviceEncryptionIsEnabled property.
    */
    public function setDisableAppEncryptionIfDeviceEncryptionIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('disableAppEncryptionIfDeviceEncryptionIsEnabled', $value);
    }

    /**
     * Sets the encryptAppData property value. Indicates whether managed-app data should be encrypted. (Android only)
     * @param bool|null $value Value to set for the encryptAppData property.
    */
    public function setEncryptAppData(?bool $value): void {
        $this->getBackingStore()->set('encryptAppData', $value);
    }

    /**
     * Sets the faceIdBlocked property value. Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True. (iOS Only)
     * @param bool|null $value Value to set for the faceIdBlocked property.
    */
    public function setFaceIdBlocked(?bool $value): void {
        $this->getBackingStore()->set('faceIdBlocked', $value);
    }

    /**
     * Sets the minimumRequiredPatchVersion property value. Define the oldest required Android security patch level a user can have to gain secure access to the app. (Android only)
     * @param string|null $value Value to set for the minimumRequiredPatchVersion property.
    */
    public function setMinimumRequiredPatchVersion(?string $value): void {
        $this->getBackingStore()->set('minimumRequiredPatchVersion', $value);
    }

    /**
     * Sets the minimumRequiredSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data. (iOS Only)
     * @param string|null $value Value to set for the minimumRequiredSdkVersion property.
    */
    public function setMinimumRequiredSdkVersion(?string $value): void {
        $this->getBackingStore()->set('minimumRequiredSdkVersion', $value);
    }

    /**
     * Sets the minimumWarningPatchVersion property value. Define the oldest recommended Android security patch level a user can have for secure access to the app. (Android only)
     * @param string|null $value Value to set for the minimumWarningPatchVersion property.
    */
    public function setMinimumWarningPatchVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWarningPatchVersion', $value);
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether screen capture is blocked. (Android only)
     * @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value): void {
        $this->getBackingStore()->set('screenCaptureBlocked', $value);
    }

}
