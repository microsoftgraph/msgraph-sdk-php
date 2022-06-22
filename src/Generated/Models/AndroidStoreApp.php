<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidStoreApp extends MobileApp implements Parsable 
{
    /**
     * @var string|null $appStoreUrl The Android app store URL.
    */
    private ?string $appStoreUrl = null;
    
    /**
     * @var AndroidMinimumOperatingSystem|null $minimumSupportedOperatingSystem The value for the minimum applicable operating system.
    */
    private ?AndroidMinimumOperatingSystem $minimumSupportedOperatingSystem = null;
    
    /**
     * @var string|null $packageId The package identifier.
    */
    private ?string $packageId = null;
    
    /**
     * Instantiates a new AndroidStoreApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidStoreApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidStoreApp {
        return new AndroidStoreApp();
    }

    /**
     * Gets the appStoreUrl property value. The Android app store URL.
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
     * Gets the minimumSupportedOperatingSystem property value. The value for the minimum applicable operating system.
     * @return AndroidMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?AndroidMinimumOperatingSystem {
        return $this->minimumSupportedOperatingSystem;
    }

    /**
     * Gets the packageId property value. The package identifier.
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
     * Sets the appStoreUrl property value. The Android app store URL.
     *  @param string|null $value Value to set for the appStoreUrl property.
    */
    public function setAppStoreUrl(?string $value ): void {
        $this->appStoreUrl = $value;
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. The value for the minimum applicable operating system.
     *  @param AndroidMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?AndroidMinimumOperatingSystem $value ): void {
        $this->minimumSupportedOperatingSystem = $value;
    }

    /**
     * Sets the packageId property value. The package identifier.
     *  @param string|null $value Value to set for the packageId property.
    */
    public function setPackageId(?string $value ): void {
        $this->packageId = $value;
    }

}
