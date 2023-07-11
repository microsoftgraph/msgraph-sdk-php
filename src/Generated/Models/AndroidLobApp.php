<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Contains properties and inherited properties for Android Line Of Business apps.
*/
class AndroidLobApp extends MobileLobApp implements Parsable 
{
    /**
     * Instantiates a new androidLobApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidLobApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidLobApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidLobApp {
        return new AndroidLobApp();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'minimumSupportedOperatingSystem' => fn(ParseNode $n) => $o->setMinimumSupportedOperatingSystem($n->getObjectValue([AndroidMinimumOperatingSystem::class, 'createFromDiscriminatorValue'])),
            'packageId' => fn(ParseNode $n) => $o->setPackageId($n->getStringValue()),
            'versionCode' => fn(ParseNode $n) => $o->setVersionCode($n->getStringValue()),
            'versionName' => fn(ParseNode $n) => $o->setVersionName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the minimumSupportedOperatingSystem property value. The value for the minimum applicable operating system.
     * @return AndroidMinimumOperatingSystem|null
    */
    public function getMinimumSupportedOperatingSystem(): ?AndroidMinimumOperatingSystem {
        $val = $this->getBackingStore()->get('minimumSupportedOperatingSystem');
        if (is_null($val) || $val instanceof AndroidMinimumOperatingSystem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumSupportedOperatingSystem'");
    }

    /**
     * Gets the packageId property value. The package identifier.
     * @return string|null
    */
    public function getPackageId(): ?string {
        $val = $this->getBackingStore()->get('packageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'packageId'");
    }

    /**
     * Gets the versionCode property value. The version code of Android Line of Business (LoB) app.
     * @return string|null
    */
    public function getVersionCode(): ?string {
        $val = $this->getBackingStore()->get('versionCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'versionCode'");
    }

    /**
     * Gets the versionName property value. The version name of Android Line of Business (LoB) app.
     * @return string|null
    */
    public function getVersionName(): ?string {
        $val = $this->getBackingStore()->get('versionName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'versionName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('minimumSupportedOperatingSystem', $this->getMinimumSupportedOperatingSystem());
        $writer->writeStringValue('packageId', $this->getPackageId());
        $writer->writeStringValue('versionCode', $this->getVersionCode());
        $writer->writeStringValue('versionName', $this->getVersionName());
    }

    /**
     * Sets the minimumSupportedOperatingSystem property value. The value for the minimum applicable operating system.
     * @param AndroidMinimumOperatingSystem|null $value Value to set for the minimumSupportedOperatingSystem property.
    */
    public function setMinimumSupportedOperatingSystem(?AndroidMinimumOperatingSystem $value): void {
        $this->getBackingStore()->set('minimumSupportedOperatingSystem', $value);
    }

    /**
     * Sets the packageId property value. The package identifier.
     * @param string|null $value Value to set for the packageId property.
    */
    public function setPackageId(?string $value): void {
        $this->getBackingStore()->set('packageId', $value);
    }

    /**
     * Sets the versionCode property value. The version code of Android Line of Business (LoB) app.
     * @param string|null $value Value to set for the versionCode property.
    */
    public function setVersionCode(?string $value): void {
        $this->getBackingStore()->set('versionCode', $value);
    }

    /**
     * Sets the versionName property value. The version name of Android Line of Business (LoB) app.
     * @param string|null $value Value to set for the versionName property.
    */
    public function setVersionName(?string $value): void {
        $this->getBackingStore()->set('versionName', $value);
    }

}
