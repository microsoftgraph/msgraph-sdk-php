<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DefaultManagedAppProtection extends ManagedAppProtection implements Parsable 
{
    /**
     * @var ManagedAppDataEncryptionType|null $appDataEncryptionType Type of encryption which should be used for data in a managed app. (iOS Only). Possible values are: useDeviceSettings, afterDeviceRestart, whenDeviceLockedExceptOpenFiles, whenDeviceLocked.
    */
    private ?ManagedAppDataEncryptionType $appDataEncryptionType = null;
    
    /**
     * @var array<ManagedMobileApp>|null $apps List of apps to which the policy is deployed.
    */
    private ?array $apps = null;
    
    /**
     * @var array<KeyValuePair>|null $customSettings A set of string key and string value pairs to be sent to the affected users, unalterned by this service
    */
    private ?array $customSettings = null;
    
    /**
     * @var int|null $deployedAppCount Count of apps to which the current policy is deployed.
    */
    private ?int $deployedAppCount = null;
    
    /**
     * @var ManagedAppPolicyDeploymentSummary|null $deploymentSummary Navigation property to deployment summary of the configuration.
    */
    private ?ManagedAppPolicyDeploymentSummary $deploymentSummary = null;
    
    /**
     * @var bool|null $disableAppEncryptionIfDeviceEncryptionIsEnabled When this setting is enabled, app level encryption is disabled if device level encryption is enabled. (Android only)
    */
    private ?bool $disableAppEncryptionIfDeviceEncryptionIsEnabled = null;
    
    /**
     * @var bool|null $encryptAppData Indicates whether managed-app data should be encrypted. (Android only)
    */
    private ?bool $encryptAppData = null;
    
    /**
     * @var bool|null $faceIdBlocked Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True. (iOS Only)
    */
    private ?bool $faceIdBlocked = null;
    
    /**
     * @var string|null $minimumRequiredPatchVersion Define the oldest required Android security patch level a user can have to gain secure access to the app. (Android only)
    */
    private ?string $minimumRequiredPatchVersion = null;
    
    /**
     * @var string|null $minimumRequiredSdkVersion Versions less than the specified version will block the managed app from accessing company data. (iOS Only)
    */
    private ?string $minimumRequiredSdkVersion = null;
    
    /**
     * @var string|null $minimumWarningPatchVersion Define the oldest recommended Android security patch level a user can have for secure access to the app. (Android only)
    */
    private ?string $minimumWarningPatchVersion = null;
    
    /**
     * @var bool|null $screenCaptureBlocked Indicates whether screen capture is blocked. (Android only)
    */
    private ?bool $screenCaptureBlocked = null;
    
    /**
     * Instantiates a new defaultManagedAppProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the appDataEncryptionType property value. Type of encryption which should be used for data in a managed app. (iOS Only). Possible values are: useDeviceSettings, afterDeviceRestart, whenDeviceLockedExceptOpenFiles, whenDeviceLocked.
     * @return ManagedAppDataEncryptionType|null
    */
    public function getAppDataEncryptionType(): ?ManagedAppDataEncryptionType {
        return $this->appDataEncryptionType;
    }

    /**
     * Gets the apps property value. List of apps to which the policy is deployed.
     * @return array<ManagedMobileApp>|null
    */
    public function getApps(): ?array {
        return $this->apps;
    }

    /**
     * Gets the customSettings property value. A set of string key and string value pairs to be sent to the affected users, unalterned by this service
     * @return array<KeyValuePair>|null
    */
    public function getCustomSettings(): ?array {
        return $this->customSettings;
    }

    /**
     * Gets the deployedAppCount property value. Count of apps to which the current policy is deployed.
     * @return int|null
    */
    public function getDeployedAppCount(): ?int {
        return $this->deployedAppCount;
    }

    /**
     * Gets the deploymentSummary property value. Navigation property to deployment summary of the configuration.
     * @return ManagedAppPolicyDeploymentSummary|null
    */
    public function getDeploymentSummary(): ?ManagedAppPolicyDeploymentSummary {
        return $this->deploymentSummary;
    }

    /**
     * Gets the disableAppEncryptionIfDeviceEncryptionIsEnabled property value. When this setting is enabled, app level encryption is disabled if device level encryption is enabled. (Android only)
     * @return bool|null
    */
    public function getDisableAppEncryptionIfDeviceEncryptionIsEnabled(): ?bool {
        return $this->disableAppEncryptionIfDeviceEncryptionIsEnabled;
    }

    /**
     * Gets the encryptAppData property value. Indicates whether managed-app data should be encrypted. (Android only)
     * @return bool|null
    */
    public function getEncryptAppData(): ?bool {
        return $this->encryptAppData;
    }

    /**
     * Gets the faceIdBlocked property value. Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True. (iOS Only)
     * @return bool|null
    */
    public function getFaceIdBlocked(): ?bool {
        return $this->faceIdBlocked;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appDataEncryptionType' => function (ParseNode $n) use ($o) { $o->setAppDataEncryptionType($n->getEnumValue(ManagedAppDataEncryptionType::class)); },
            'apps' => function (ParseNode $n) use ($o) { $o->setApps($n->getCollectionOfObjectValues(array(ManagedMobileApp::class, 'createFromDiscriminatorValue'))); },
            'customSettings' => function (ParseNode $n) use ($o) { $o->setCustomSettings($n->getCollectionOfObjectValues(array(KeyValuePair::class, 'createFromDiscriminatorValue'))); },
            'deployedAppCount' => function (ParseNode $n) use ($o) { $o->setDeployedAppCount($n->getIntegerValue()); },
            'deploymentSummary' => function (ParseNode $n) use ($o) { $o->setDeploymentSummary($n->getObjectValue(array(ManagedAppPolicyDeploymentSummary::class, 'createFromDiscriminatorValue'))); },
            'disableAppEncryptionIfDeviceEncryptionIsEnabled' => function (ParseNode $n) use ($o) { $o->setDisableAppEncryptionIfDeviceEncryptionIsEnabled($n->getBooleanValue()); },
            'encryptAppData' => function (ParseNode $n) use ($o) { $o->setEncryptAppData($n->getBooleanValue()); },
            'faceIdBlocked' => function (ParseNode $n) use ($o) { $o->setFaceIdBlocked($n->getBooleanValue()); },
            'minimumRequiredPatchVersion' => function (ParseNode $n) use ($o) { $o->setMinimumRequiredPatchVersion($n->getStringValue()); },
            'minimumRequiredSdkVersion' => function (ParseNode $n) use ($o) { $o->setMinimumRequiredSdkVersion($n->getStringValue()); },
            'minimumWarningPatchVersion' => function (ParseNode $n) use ($o) { $o->setMinimumWarningPatchVersion($n->getStringValue()); },
            'screenCaptureBlocked' => function (ParseNode $n) use ($o) { $o->setScreenCaptureBlocked($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the minimumRequiredPatchVersion property value. Define the oldest required Android security patch level a user can have to gain secure access to the app. (Android only)
     * @return string|null
    */
    public function getMinimumRequiredPatchVersion(): ?string {
        return $this->minimumRequiredPatchVersion;
    }

    /**
     * Gets the minimumRequiredSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data. (iOS Only)
     * @return string|null
    */
    public function getMinimumRequiredSdkVersion(): ?string {
        return $this->minimumRequiredSdkVersion;
    }

    /**
     * Gets the minimumWarningPatchVersion property value. Define the oldest recommended Android security patch level a user can have for secure access to the app. (Android only)
     * @return string|null
    */
    public function getMinimumWarningPatchVersion(): ?string {
        return $this->minimumWarningPatchVersion;
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether screen capture is blocked. (Android only)
     * @return bool|null
    */
    public function getScreenCaptureBlocked(): ?bool {
        return $this->screenCaptureBlocked;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('appDataEncryptionType', $this->appDataEncryptionType);
        $writer->writeCollectionOfObjectValues('apps', $this->apps);
        $writer->writeCollectionOfObjectValues('customSettings', $this->customSettings);
        $writer->writeIntegerValue('deployedAppCount', $this->deployedAppCount);
        $writer->writeObjectValue('deploymentSummary', $this->deploymentSummary);
        $writer->writeBooleanValue('disableAppEncryptionIfDeviceEncryptionIsEnabled', $this->disableAppEncryptionIfDeviceEncryptionIsEnabled);
        $writer->writeBooleanValue('encryptAppData', $this->encryptAppData);
        $writer->writeBooleanValue('faceIdBlocked', $this->faceIdBlocked);
        $writer->writeStringValue('minimumRequiredPatchVersion', $this->minimumRequiredPatchVersion);
        $writer->writeStringValue('minimumRequiredSdkVersion', $this->minimumRequiredSdkVersion);
        $writer->writeStringValue('minimumWarningPatchVersion', $this->minimumWarningPatchVersion);
        $writer->writeBooleanValue('screenCaptureBlocked', $this->screenCaptureBlocked);
    }

    /**
     * Sets the appDataEncryptionType property value. Type of encryption which should be used for data in a managed app. (iOS Only). Possible values are: useDeviceSettings, afterDeviceRestart, whenDeviceLockedExceptOpenFiles, whenDeviceLocked.
     *  @param ManagedAppDataEncryptionType|null $value Value to set for the appDataEncryptionType property.
    */
    public function setAppDataEncryptionType(?ManagedAppDataEncryptionType $value ): void {
        $this->appDataEncryptionType = $value;
    }

    /**
     * Sets the apps property value. List of apps to which the policy is deployed.
     *  @param array<ManagedMobileApp>|null $value Value to set for the apps property.
    */
    public function setApps(?array $value ): void {
        $this->apps = $value;
    }

    /**
     * Sets the customSettings property value. A set of string key and string value pairs to be sent to the affected users, unalterned by this service
     *  @param array<KeyValuePair>|null $value Value to set for the customSettings property.
    */
    public function setCustomSettings(?array $value ): void {
        $this->customSettings = $value;
    }

    /**
     * Sets the deployedAppCount property value. Count of apps to which the current policy is deployed.
     *  @param int|null $value Value to set for the deployedAppCount property.
    */
    public function setDeployedAppCount(?int $value ): void {
        $this->deployedAppCount = $value;
    }

    /**
     * Sets the deploymentSummary property value. Navigation property to deployment summary of the configuration.
     *  @param ManagedAppPolicyDeploymentSummary|null $value Value to set for the deploymentSummary property.
    */
    public function setDeploymentSummary(?ManagedAppPolicyDeploymentSummary $value ): void {
        $this->deploymentSummary = $value;
    }

    /**
     * Sets the disableAppEncryptionIfDeviceEncryptionIsEnabled property value. When this setting is enabled, app level encryption is disabled if device level encryption is enabled. (Android only)
     *  @param bool|null $value Value to set for the disableAppEncryptionIfDeviceEncryptionIsEnabled property.
    */
    public function setDisableAppEncryptionIfDeviceEncryptionIsEnabled(?bool $value ): void {
        $this->disableAppEncryptionIfDeviceEncryptionIsEnabled = $value;
    }

    /**
     * Sets the encryptAppData property value. Indicates whether managed-app data should be encrypted. (Android only)
     *  @param bool|null $value Value to set for the encryptAppData property.
    */
    public function setEncryptAppData(?bool $value ): void {
        $this->encryptAppData = $value;
    }

    /**
     * Sets the faceIdBlocked property value. Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True. (iOS Only)
     *  @param bool|null $value Value to set for the faceIdBlocked property.
    */
    public function setFaceIdBlocked(?bool $value ): void {
        $this->faceIdBlocked = $value;
    }

    /**
     * Sets the minimumRequiredPatchVersion property value. Define the oldest required Android security patch level a user can have to gain secure access to the app. (Android only)
     *  @param string|null $value Value to set for the minimumRequiredPatchVersion property.
    */
    public function setMinimumRequiredPatchVersion(?string $value ): void {
        $this->minimumRequiredPatchVersion = $value;
    }

    /**
     * Sets the minimumRequiredSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data. (iOS Only)
     *  @param string|null $value Value to set for the minimumRequiredSdkVersion property.
    */
    public function setMinimumRequiredSdkVersion(?string $value ): void {
        $this->minimumRequiredSdkVersion = $value;
    }

    /**
     * Sets the minimumWarningPatchVersion property value. Define the oldest recommended Android security patch level a user can have for secure access to the app. (Android only)
     *  @param string|null $value Value to set for the minimumWarningPatchVersion property.
    */
    public function setMinimumWarningPatchVersion(?string $value ): void {
        $this->minimumWarningPatchVersion = $value;
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether screen capture is blocked. (Android only)
     *  @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value ): void {
        $this->screenCaptureBlocked = $value;
    }

}
