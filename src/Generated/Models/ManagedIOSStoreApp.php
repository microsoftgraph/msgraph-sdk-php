<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties and inherited properties for an iOS store app that you can manage with an Intune app protection policy.
*/
class ManagedIOSStoreApp extends ManagedApp implements Parsable 
{
    /**
     * Instantiates a new managedIOSStoreApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedIOSStoreApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedIOSStoreApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedIOSStoreApp {
        return new ManagedIOSStoreApp();
    }

    /**
     * Gets the applicableDeviceType property value. Contains properties of the possible iOS device types the mobile app can run on.
     * @return IosDeviceType|null
    */
    public function getApplicableDeviceType(): ?IosDeviceType {
        $val = $this->getBackingStore()->get('applicableDeviceType');
        if (is_null($val) || $val instanceof IosDeviceType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicableDeviceType'");
    }

    /**
     * Gets the appStoreUrl property value. The Apple AppStoreUrl.
     * @return string|null
    */
    public function getAppStoreUrl(): ?string {
        $val = $this->getBackingStore()->get('appStoreUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appStoreUrl'");
    }

    /**
     * Gets the bundleId property value. The app's Bundle ID.
     * @return string|null
    */
    public function getBundleId(): ?string {
        $val = $this->getBackingStore()->get('bundleId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bundleId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicableDeviceType' => fn(ParseNode $n) => $o->setApplicableDeviceType($n->getObjectValue([IosDeviceType::class, 'createFromDiscriminatorValue'])),
            'appStoreUrl' => fn(ParseNode $n) => $o->setAppStoreUrl($n->getStringValue()),
            'bundleId' => fn(ParseNode $n) => $o->setBundleId($n->getStringValue()),
            'minimumSupportedOperatingSystem' => fn(ParseNode $n) => $o->setMinimumSupportedOperatingSystem($n->getObjectValue([IosMinimumOperatingSystem::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the minimumSupportedOperatingSystem property value. Contains properties of the minimum operating system required for an iOS mobile app.
     * @return IosMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?IosMinimumOperatingSystem {
        $val = $this->getBackingStore()->get('minimumSupportedOperatingSystem');
        if (is_null($val) || $val instanceof IosMinimumOperatingSystem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumSupportedOperatingSystem'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('applicableDeviceType', $this->getApplicableDeviceType());
        $writer->writeStringValue('appStoreUrl', $this->getAppStoreUrl());
        $writer->writeStringValue('bundleId', $this->getBundleId());
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->getMinimumSupportedOperatingSystem());
    }

    /**
     * Sets the applicableDeviceType property value. Contains properties of the possible iOS device types the mobile app can run on.
     * @param IosDeviceType|null $value Value to set for the applicableDeviceType property.
    */
    public function setApplicableDeviceType(?IosDeviceType $value): void {
        $this->getBackingStore()->set('applicableDeviceType', $value);
    }

    /**
     * Sets the appStoreUrl property value. The Apple AppStoreUrl.
     * @param string|null $value Value to set for the appStoreUrl property.
    */
    public function setAppStoreUrl(?string $value): void {
        $this->getBackingStore()->set('appStoreUrl', $value);
    }

    /**
     * Sets the bundleId property value. The app's Bundle ID.
     * @param string|null $value Value to set for the bundleId property.
    */
    public function setBundleId(?string $value): void {
        $this->getBackingStore()->set('bundleId', $value);
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. Contains properties of the minimum operating system required for an iOS mobile app.
     * @param IosMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?IosMinimumOperatingSystem $value): void {
        $this->getBackingStore()->set('minimumSupportedOperatingSystem', $value);
    }

}
