<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosManagedAppProtection extends TargetedManagedAppProtection 
{
    /** @var ManagedAppDataEncryptionType|null $appDataEncryptionType Type of encryption which should be used for data in a managed app. Possible values are: useDeviceSettings, afterDeviceRestart, whenDeviceLockedExceptOpenFiles, whenDeviceLocked. */
    private ?ManagedAppDataEncryptionType $appDataEncryptionType = null;
    
    /** @var array<ManagedMobileApp>|null $apps List of apps to which the policy is deployed. */
    private ?array $apps = null;
    
    /** @var string|null $customBrowserProtocol A custom browser protocol to open weblink on iOS. When this property is configured, ManagedBrowserToOpenLinksRequired should be true. */
    private ?string $customBrowserProtocol = null;
    
    /** @var int|null $deployedAppCount Count of apps to which the current policy is deployed. */
    private ?int $deployedAppCount = null;
    
    /** @var ManagedAppPolicyDeploymentSummary|null $deploymentSummary Navigation property to deployment summary of the configuration. */
    private ?ManagedAppPolicyDeploymentSummary $deploymentSummary = null;
    
    /** @var bool|null $faceIdBlocked Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True. */
    private ?bool $faceIdBlocked = null;
    
    /** @var string|null $minimumRequiredSdkVersion Versions less than the specified version will block the managed app from accessing company data. */
    private ?string $minimumRequiredSdkVersion = null;
    
    /**
     * Instantiates a new iosManagedAppProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosManagedAppProtection
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): IosManagedAppProtection {
        return new IosManagedAppProtection();
    }

    /**
     * Gets the appDataEncryptionType property value. Type of encryption which should be used for data in a managed app. Possible values are: useDeviceSettings, afterDeviceRestart, whenDeviceLockedExceptOpenFiles, whenDeviceLocked.
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
     * Gets the customBrowserProtocol property value. A custom browser protocol to open weblink on iOS. When this property is configured, ManagedBrowserToOpenLinksRequired should be true.
     * @return string|null
    */
    public function getCustomBrowserProtocol(): ?string {
        return $this->customBrowserProtocol;
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
     * Gets the faceIdBlocked property value. Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True.
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
        return array_merge(parent::getFieldDeserializers(), [
            'appDataEncryptionType' => function (self $o, ParseNode $n) { $o->setAppDataEncryptionType($n->getEnumValue(ManagedAppDataEncryptionType::class)); },
            'apps' => function (self $o, ParseNode $n) { $o->setApps($n->getCollectionOfObjectValues(ManagedMobileApp::class)); },
            'customBrowserProtocol' => function (self $o, ParseNode $n) { $o->setCustomBrowserProtocol($n->getStringValue()); },
            'deployedAppCount' => function (self $o, ParseNode $n) { $o->setDeployedAppCount($n->getIntegerValue()); },
            'deploymentSummary' => function (self $o, ParseNode $n) { $o->setDeploymentSummary($n->getObjectValue(ManagedAppPolicyDeploymentSummary::class)); },
            'faceIdBlocked' => function (self $o, ParseNode $n) { $o->setFaceIdBlocked($n->getBooleanValue()); },
            'minimumRequiredSdkVersion' => function (self $o, ParseNode $n) { $o->setMinimumRequiredSdkVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the minimumRequiredSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @return string|null
    */
    public function getMinimumRequiredSdkVersion(): ?string {
        return $this->minimumRequiredSdkVersion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('appDataEncryptionType', $this->appDataEncryptionType);
        $writer->writeCollectionOfObjectValues('apps', $this->apps);
        $writer->writeStringValue('customBrowserProtocol', $this->customBrowserProtocol);
        $writer->writeIntegerValue('deployedAppCount', $this->deployedAppCount);
        $writer->writeObjectValue('deploymentSummary', $this->deploymentSummary);
        $writer->writeBooleanValue('faceIdBlocked', $this->faceIdBlocked);
        $writer->writeStringValue('minimumRequiredSdkVersion', $this->minimumRequiredSdkVersion);
    }

    /**
     * Sets the appDataEncryptionType property value. Type of encryption which should be used for data in a managed app. Possible values are: useDeviceSettings, afterDeviceRestart, whenDeviceLockedExceptOpenFiles, whenDeviceLocked.
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
     * Sets the customBrowserProtocol property value. A custom browser protocol to open weblink on iOS. When this property is configured, ManagedBrowserToOpenLinksRequired should be true.
     *  @param string|null $value Value to set for the customBrowserProtocol property.
    */
    public function setCustomBrowserProtocol(?string $value ): void {
        $this->customBrowserProtocol = $value;
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
     * Sets the faceIdBlocked property value. Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True.
     *  @param bool|null $value Value to set for the faceIdBlocked property.
    */
    public function setFaceIdBlocked(?bool $value ): void {
        $this->faceIdBlocked = $value;
    }

    /**
     * Sets the minimumRequiredSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     *  @param string|null $value Value to set for the minimumRequiredSdkVersion property.
    */
    public function setMinimumRequiredSdkVersion(?string $value ): void {
        $this->minimumRequiredSdkVersion = $value;
    }

}
