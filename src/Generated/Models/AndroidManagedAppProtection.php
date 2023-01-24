<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidManagedAppProtection extends TargetedManagedAppProtection implements Parsable 
{
    /**
     * Instantiates a new AndroidManagedAppProtection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidManagedAppProtection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidManagedAppProtection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidManagedAppProtection {
        return new AndroidManagedAppProtection();
    }

    /**
     * Gets the apps property value. List of apps to which the policy is deployed.
     * @return array<ManagedMobileApp>|null
    */
    public function getApps(): ?array {
        return $this->getBackingStore()->get('apps');
    }

    /**
     * Gets the customBrowserDisplayName property value. Friendly name of the preferred custom browser to open weblink on Android. When this property is configured, ManagedBrowserToOpenLinksRequired should be true.
     * @return string|null
    */
    public function getCustomBrowserDisplayName(): ?string {
        return $this->getBackingStore()->get('customBrowserDisplayName');
    }

    /**
     * Gets the customBrowserPackageId property value. Unique identifier of the preferred custom browser to open weblink on Android. When this property is configured, ManagedBrowserToOpenLinksRequired should be true.
     * @return string|null
    */
    public function getCustomBrowserPackageId(): ?string {
        return $this->getBackingStore()->get('customBrowserPackageId');
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
     * Gets the disableAppEncryptionIfDeviceEncryptionIsEnabled property value. When this setting is enabled, app level encryption is disabled if device level encryption is enabled
     * @return bool|null
    */
    public function getDisableAppEncryptionIfDeviceEncryptionIsEnabled(): ?bool {
        return $this->getBackingStore()->get('disableAppEncryptionIfDeviceEncryptionIsEnabled');
    }

    /**
     * Gets the encryptAppData property value. Indicates whether application data for managed apps should be encrypted
     * @return bool|null
    */
    public function getEncryptAppData(): ?bool {
        return $this->getBackingStore()->get('encryptAppData');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'apps' => fn(ParseNode $n) => $o->setApps($n->getCollectionOfObjectValues([ManagedMobileApp::class, 'createFromDiscriminatorValue'])),
            'customBrowserDisplayName' => fn(ParseNode $n) => $o->setCustomBrowserDisplayName($n->getStringValue()),
            'customBrowserPackageId' => fn(ParseNode $n) => $o->setCustomBrowserPackageId($n->getStringValue()),
            'deployedAppCount' => fn(ParseNode $n) => $o->setDeployedAppCount($n->getIntegerValue()),
            'deploymentSummary' => fn(ParseNode $n) => $o->setDeploymentSummary($n->getObjectValue([ManagedAppPolicyDeploymentSummary::class, 'createFromDiscriminatorValue'])),
            'disableAppEncryptionIfDeviceEncryptionIsEnabled' => fn(ParseNode $n) => $o->setDisableAppEncryptionIfDeviceEncryptionIsEnabled($n->getBooleanValue()),
            'encryptAppData' => fn(ParseNode $n) => $o->setEncryptAppData($n->getBooleanValue()),
            'minimumRequiredPatchVersion' => fn(ParseNode $n) => $o->setMinimumRequiredPatchVersion($n->getStringValue()),
            'minimumWarningPatchVersion' => fn(ParseNode $n) => $o->setMinimumWarningPatchVersion($n->getStringValue()),
            'screenCaptureBlocked' => fn(ParseNode $n) => $o->setScreenCaptureBlocked($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the minimumRequiredPatchVersion property value. Define the oldest required Android security patch level a user can have to gain secure access to the app.
     * @return string|null
    */
    public function getMinimumRequiredPatchVersion(): ?string {
        return $this->getBackingStore()->get('minimumRequiredPatchVersion');
    }

    /**
     * Gets the minimumWarningPatchVersion property value. Define the oldest recommended Android security patch level a user can have for secure access to the app.
     * @return string|null
    */
    public function getMinimumWarningPatchVersion(): ?string {
        return $this->getBackingStore()->get('minimumWarningPatchVersion');
    }

    /**
     * Gets the screenCaptureBlocked property value. Indicates whether a managed user can take screen captures of managed apps
     * @return bool|null
    */
    public function getScreenCaptureBlocked(): ?bool {
        return $this->getBackingStore()->get('screenCaptureBlocked');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('apps', $this->getApps());
        $writer->writeStringValue('customBrowserDisplayName', $this->getCustomBrowserDisplayName());
        $writer->writeStringValue('customBrowserPackageId', $this->getCustomBrowserPackageId());
        $writer->writeIntegerValue('deployedAppCount', $this->getDeployedAppCount());
        $writer->writeObjectValue('deploymentSummary', $this->getDeploymentSummary());
        $writer->writeBooleanValue('disableAppEncryptionIfDeviceEncryptionIsEnabled', $this->getDisableAppEncryptionIfDeviceEncryptionIsEnabled());
        $writer->writeBooleanValue('encryptAppData', $this->getEncryptAppData());
        $writer->writeStringValue('minimumRequiredPatchVersion', $this->getMinimumRequiredPatchVersion());
        $writer->writeStringValue('minimumWarningPatchVersion', $this->getMinimumWarningPatchVersion());
        $writer->writeBooleanValue('screenCaptureBlocked', $this->getScreenCaptureBlocked());
    }

    /**
     * Sets the apps property value. List of apps to which the policy is deployed.
     * @param array<ManagedMobileApp>|null $value Value to set for the apps property.
    */
    public function setApps(?array $value): void {
        $this->getBackingStore()->set('apps', $value);
    }

    /**
     * Sets the customBrowserDisplayName property value. Friendly name of the preferred custom browser to open weblink on Android. When this property is configured, ManagedBrowserToOpenLinksRequired should be true.
     * @param string|null $value Value to set for the customBrowserDisplayName property.
    */
    public function setCustomBrowserDisplayName(?string $value): void {
        $this->getBackingStore()->set('customBrowserDisplayName', $value);
    }

    /**
     * Sets the customBrowserPackageId property value. Unique identifier of the preferred custom browser to open weblink on Android. When this property is configured, ManagedBrowserToOpenLinksRequired should be true.
     * @param string|null $value Value to set for the customBrowserPackageId property.
    */
    public function setCustomBrowserPackageId(?string $value): void {
        $this->getBackingStore()->set('customBrowserPackageId', $value);
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
     * Sets the disableAppEncryptionIfDeviceEncryptionIsEnabled property value. When this setting is enabled, app level encryption is disabled if device level encryption is enabled
     * @param bool|null $value Value to set for the disableAppEncryptionIfDeviceEncryptionIsEnabled property.
    */
    public function setDisableAppEncryptionIfDeviceEncryptionIsEnabled(?bool $value): void {
        $this->getBackingStore()->set('disableAppEncryptionIfDeviceEncryptionIsEnabled', $value);
    }

    /**
     * Sets the encryptAppData property value. Indicates whether application data for managed apps should be encrypted
     * @param bool|null $value Value to set for the encryptAppData property.
    */
    public function setEncryptAppData(?bool $value): void {
        $this->getBackingStore()->set('encryptAppData', $value);
    }

    /**
     * Sets the minimumRequiredPatchVersion property value. Define the oldest required Android security patch level a user can have to gain secure access to the app.
     * @param string|null $value Value to set for the minimumRequiredPatchVersion property.
    */
    public function setMinimumRequiredPatchVersion(?string $value): void {
        $this->getBackingStore()->set('minimumRequiredPatchVersion', $value);
    }

    /**
     * Sets the minimumWarningPatchVersion property value. Define the oldest recommended Android security patch level a user can have for secure access to the app.
     * @param string|null $value Value to set for the minimumWarningPatchVersion property.
    */
    public function setMinimumWarningPatchVersion(?string $value): void {
        $this->getBackingStore()->set('minimumWarningPatchVersion', $value);
    }

    /**
     * Sets the screenCaptureBlocked property value. Indicates whether a managed user can take screen captures of managed apps
     * @param bool|null $value Value to set for the screenCaptureBlocked property.
    */
    public function setScreenCaptureBlocked(?bool $value): void {
        $this->getBackingStore()->set('screenCaptureBlocked', $value);
    }

}
