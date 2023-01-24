<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosManagedAppProtection extends TargetedManagedAppProtection implements Parsable 
{
    /**
     * Instantiates a new IosManagedAppProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosManagedAppProtection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosManagedAppProtection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosManagedAppProtection {
        return new IosManagedAppProtection();
    }

    /**
     * Gets the appDataEncryptionType property value. Represents the level to which app data is encrypted for managed apps
     * @return ManagedAppDataEncryptionType|null
    */
    public function getAppDataEncryptionType(): ?ManagedAppDataEncryptionType {
        return $this->getBackingStore()->get('appDataEncryptionType');
    }

    /**
     * Gets the apps property value. List of apps to which the policy is deployed.
     * @return array<ManagedMobileApp>|null
    */
    public function getApps(): ?array {
        return $this->getBackingStore()->get('apps');
    }

    /**
     * Gets the customBrowserProtocol property value. A custom browser protocol to open weblink on iOS. When this property is configured, ManagedBrowserToOpenLinksRequired should be true.
     * @return string|null
    */
    public function getCustomBrowserProtocol(): ?string {
        return $this->getBackingStore()->get('customBrowserProtocol');
    }

    /**
     * Gets the deployedAppCount property value. Count of apps to which the current policy is deployed.
     * @return int|null
    */
    public function getDeployedAppCount(): ?int {
        return $this->getBackingStore()->get('deployedAppCount');
    }

    /**
     * Gets the deploymentSummary property value. Navigation property to deployment summary of the configuration.
     * @return ManagedAppPolicyDeploymentSummary|null
    */
    public function getDeploymentSummary(): ?ManagedAppPolicyDeploymentSummary {
        return $this->getBackingStore()->get('deploymentSummary');
    }

    /**
     * Gets the faceIdBlocked property value. Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True.
     * @return bool|null
    */
    public function getFaceIdBlocked(): ?bool {
        return $this->getBackingStore()->get('faceIdBlocked');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appDataEncryptionType' => fn(ParseNode $n) => $o->setAppDataEncryptionType($n->getEnumValue(ManagedAppDataEncryptionType::class)),
            'apps' => fn(ParseNode $n) => $o->setApps($n->getCollectionOfObjectValues([ManagedMobileApp::class, 'createFromDiscriminatorValue'])),
            'customBrowserProtocol' => fn(ParseNode $n) => $o->setCustomBrowserProtocol($n->getStringValue()),
            'deployedAppCount' => fn(ParseNode $n) => $o->setDeployedAppCount($n->getIntegerValue()),
            'deploymentSummary' => fn(ParseNode $n) => $o->setDeploymentSummary($n->getObjectValue([ManagedAppPolicyDeploymentSummary::class, 'createFromDiscriminatorValue'])),
            'faceIdBlocked' => fn(ParseNode $n) => $o->setFaceIdBlocked($n->getBooleanValue()),
            'minimumRequiredSdkVersion' => fn(ParseNode $n) => $o->setMinimumRequiredSdkVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the minimumRequiredSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @return string|null
    */
    public function getMinimumRequiredSdkVersion(): ?string {
        return $this->getBackingStore()->get('minimumRequiredSdkVersion');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('appDataEncryptionType', $this->getAppDataEncryptionType());
        $writer->writeCollectionOfObjectValues('apps', $this->getApps());
        $writer->writeStringValue('customBrowserProtocol', $this->getCustomBrowserProtocol());
        $writer->writeIntegerValue('deployedAppCount', $this->getDeployedAppCount());
        $writer->writeObjectValue('deploymentSummary', $this->getDeploymentSummary());
        $writer->writeBooleanValue('faceIdBlocked', $this->getFaceIdBlocked());
        $writer->writeStringValue('minimumRequiredSdkVersion', $this->getMinimumRequiredSdkVersion());
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
     * Sets the customBrowserProtocol property value. A custom browser protocol to open weblink on iOS. When this property is configured, ManagedBrowserToOpenLinksRequired should be true.
     * @param string|null $value Value to set for the customBrowserProtocol property.
    */
    public function setCustomBrowserProtocol(?string $value): void {
        $this->getBackingStore()->set('customBrowserProtocol', $value);
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
     * Sets the faceIdBlocked property value. Indicates whether use of the FaceID is allowed in place of a pin if PinRequired is set to True.
     * @param bool|null $value Value to set for the faceIdBlocked property.
    */
    public function setFaceIdBlocked(?bool $value): void {
        $this->getBackingStore()->set('faceIdBlocked', $value);
    }

    /**
     * Sets the minimumRequiredSdkVersion property value. Versions less than the specified version will block the managed app from accessing company data.
     * @param string|null $value Value to set for the minimumRequiredSdkVersion property.
    */
    public function setMinimumRequiredSdkVersion(?string $value): void {
        $this->getBackingStore()->set('minimumRequiredSdkVersion', $value);
    }

}
