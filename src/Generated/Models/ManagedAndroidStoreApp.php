<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedAndroidStoreApp extends ManagedApp implements Parsable 
{
    /**
     * @var string|null $appStoreUrl The Android AppStoreUrl.
    */
    private ?string $appStoreUrl = null;
    
    /**
     * @var AndroidMinimumOperatingSystem|null $minimumSupportedOperatingSystem Contains properties for the minimum operating system required for an Android mobile app.
    */
    private ?AndroidMinimumOperatingSystem $minimumSupportedOperatingSystem = null;
    
    /**
     * @var string|null $packageId The app's package ID.
    */
    private ?string $packageId = null;
    
    /**
     * Instantiates a new ManagedAndroidStoreApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedAndroidStoreApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedAndroidStoreApp {
        return new ManagedAndroidStoreApp();
    }

    /**
     * Gets the appStoreUrl property value. The Android AppStoreUrl.
     * @return string|null
    */
    public function getAppStoreUrl(): ?string {
        return $this->appStoreUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appStoreUrl' => function (ParseNode $n) use ($o) { $o->setAppStoreUrl($n->getStringValue()); },
            'minimumSupportedOperatingSystem' => function (ParseNode $n) use ($o) { $o->setMinimumSupportedOperatingSystem($n->getObjectValue(array(AndroidMinimumOperatingSystem::class, 'createFromDiscriminatorValue'))); },
            'packageId' => function (ParseNode $n) use ($o) { $o->setPackageId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the minimumSupportedOperatingSystem property value. Contains properties for the minimum operating system required for an Android mobile app.
     * @return AndroidMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?AndroidMinimumOperatingSystem {
        return $this->minimumSupportedOperatingSystem;
    }

    /**
     * Gets the packageId property value. The app's package ID.
     * @return string|null
    */
    public function getPackageId(): ?string {
        return $this->packageId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appStoreUrl', $this->appStoreUrl);
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->minimumSupportedOperatingSystem);
        $writer->writeStringValue('packageId', $this->packageId);
    }

    /**
     * Sets the appStoreUrl property value. The Android AppStoreUrl.
     *  @param string|null $value Value to set for the appStoreUrl property.
    */
    public function setAppStoreUrl(?string $value ): void {
        $this->appStoreUrl = $value;
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. Contains properties for the minimum operating system required for an Android mobile app.
     *  @param AndroidMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?AndroidMinimumOperatingSystem $value ): void {
        $this->minimumSupportedOperatingSystem = $value;
    }

    /**
     * Sets the packageId property value. The app's package ID.
     *  @param string|null $value Value to set for the packageId property.
    */
    public function setPackageId(?string $value ): void {
        $this->packageId = $value;
    }

}
