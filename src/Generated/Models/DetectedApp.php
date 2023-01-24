<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A managed or unmanaged app that is installed on a managed device. Unmanaged apps will only appear for devices marked as corporate owned.
*/
class DetectedApp extends Entity implements Parsable 
{
    /**
     * Instantiates a new detectedApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DetectedApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DetectedApp {
        return new DetectedApp();
    }

    /**
     * Gets the deviceCount property value. The number of devices that have installed this application
     * @return int|null
    */
    public function getDeviceCount(): ?int {
        return $this->getBackingStore()->get('deviceCount');
    }

    /**
     * Gets the displayName property value. Name of the discovered application. Read-only
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceCount' => fn(ParseNode $n) => $o->setDeviceCount($n->getIntegerValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'managedDevices' => fn(ParseNode $n) => $o->setManagedDevices($n->getCollectionOfObjectValues([ManagedDevice::class, 'createFromDiscriminatorValue'])),
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getEnumValue(DetectedAppPlatformType::class)),
            'publisher' => fn(ParseNode $n) => $o->setPublisher($n->getStringValue()),
            'sizeInByte' => fn(ParseNode $n) => $o->setSizeInByte($n->getIntegerValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the managedDevices property value. The devices that have the discovered application installed
     * @return array<ManagedDevice>|null
    */
    public function getManagedDevices(): ?array {
        return $this->getBackingStore()->get('managedDevices');
    }

    /**
     * Gets the platform property value. Indicates the operating system / platform of the discovered application.  Some possible values are Windows, iOS, macOS. The default value is unknown (0).
     * @return DetectedAppPlatformType|null
    */
    public function getPlatform(): ?DetectedAppPlatformType {
        return $this->getBackingStore()->get('platform');
    }

    /**
     * Gets the publisher property value. Indicates the publisher of the discovered application. For example: 'Microsoft'.  The default value is an empty string.
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->getBackingStore()->get('publisher');
    }

    /**
     * Gets the sizeInByte property value. Discovered application size in bytes. Read-only
     * @return int|null
    */
    public function getSizeInByte(): ?int {
        return $this->getBackingStore()->get('sizeInByte');
    }

    /**
     * Gets the version property value. Version of the discovered application. Read-only
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->getBackingStore()->get('version');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('deviceCount', $this->getDeviceCount());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('managedDevices', $this->getManagedDevices());
        $writer->writeEnumValue('platform', $this->getPlatform());
        $writer->writeStringValue('publisher', $this->getPublisher());
        $writer->writeIntegerValue('sizeInByte', $this->getSizeInByte());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the deviceCount property value. The number of devices that have installed this application
     * @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value): void {
        $this->getBackingStore()->set('deviceCount', $value);
    }

    /**
     * Sets the displayName property value. Name of the discovered application. Read-only
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the managedDevices property value. The devices that have the discovered application installed
     * @param array<ManagedDevice>|null $value Value to set for the managedDevices property.
    */
    public function setManagedDevices(?array $value): void {
        $this->getBackingStore()->set('managedDevices', $value);
    }

    /**
     * Sets the platform property value. Indicates the operating system / platform of the discovered application.  Some possible values are Windows, iOS, macOS. The default value is unknown (0).
     * @param DetectedAppPlatformType|null $value Value to set for the platform property.
    */
    public function setPlatform(?DetectedAppPlatformType $value): void {
        $this->getBackingStore()->set('platform', $value);
    }

    /**
     * Sets the publisher property value. Indicates the publisher of the discovered application. For example: 'Microsoft'.  The default value is an empty string.
     * @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value): void {
        $this->getBackingStore()->set('publisher', $value);
    }

    /**
     * Sets the sizeInByte property value. Discovered application size in bytes. Read-only
     * @param int|null $value Value to set for the sizeInByte property.
    */
    public function setSizeInByte(?int $value): void {
        $this->getBackingStore()->set('sizeInByte', $value);
    }

    /**
     * Sets the version property value. Version of the discovered application. Read-only
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
