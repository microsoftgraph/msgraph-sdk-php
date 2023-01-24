<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IosStoreApp extends MobileApp implements Parsable 
{
    /**
     * Instantiates a new IosStoreApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosStoreApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosStoreApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosStoreApp {
        return new IosStoreApp();
    }

    /**
     * Gets the applicableDeviceType property value. Contains properties of the possible iOS device types the mobile app can run on.
     * @return IosDeviceType|null
    */
    public function getApplicableDeviceType(): ?IosDeviceType {
        return $this->getBackingStore()->get('applicableDeviceType');
    }

    /**
     * Gets the appStoreUrl property value. The Apple App Store URL
     * @return string|null
    */
    public function getAppStoreUrl(): ?string {
        return $this->getBackingStore()->get('appStoreUrl');
    }

    /**
     * Gets the bundleId property value. The Identity Name.
     * @return string|null
    */
    public function getBundleId(): ?string {
        return $this->getBackingStore()->get('bundleId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
     * Gets the minimumSupportedOperatingSystem property value. The value for the minimum applicable operating system.
     * @return IosMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?IosMinimumOperatingSystem {
        return $this->getBackingStore()->get('minimumSupportedOperatingSystem');
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
     * Sets the appStoreUrl property value. The Apple App Store URL
     * @param string|null $value Value to set for the appStoreUrl property.
    */
    public function setAppStoreUrl(?string $value): void {
        $this->getBackingStore()->set('appStoreUrl', $value);
    }

    /**
     * Sets the bundleId property value. The Identity Name.
     * @param string|null $value Value to set for the bundleId property.
    */
    public function setBundleId(?string $value): void {
        $this->getBackingStore()->set('bundleId', $value);
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. The value for the minimum applicable operating system.
     * @param IosMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?IosMinimumOperatingSystem $value): void {
        $this->getBackingStore()->set('minimumSupportedOperatingSystem', $value);
    }

}
