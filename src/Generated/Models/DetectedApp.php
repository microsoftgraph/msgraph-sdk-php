<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DetectedApp extends Entity implements Parsable 
{
    /**
     * @var int|null $deviceCount The number of devices that have installed this application
    */
    private ?int $deviceCount = null;
    
    /**
     * @var string|null $displayName Name of the discovered application. Read-only
    */
    private ?string $displayName = null;
    
    /**
     * @var array<ManagedDevice>|null $managedDevices The devices that have the discovered application installed
    */
    private ?array $managedDevices = null;
    
    /**
     * @var DetectedAppPlatformType|null $platform Indicates the operating system / platform of the discovered application.  Some possible values are Windows, iOS, macOS. The default value is unknown (0).
    */
    private ?DetectedAppPlatformType $platform = null;
    
    /**
     * @var string|null $publisher Indicates the publisher of the discovered application. For example: 'Microsoft'.  The default value is an empty string.
    */
    private ?string $publisher = null;
    
    /**
     * @var int|null $sizeInByte Discovered application size in bytes. Read-only
    */
    private ?int $sizeInByte = null;
    
    /**
     * @var string|null $version Version of the discovered application. Read-only
    */
    private ?string $version = null;
    
    /**
     * Instantiates a new detectedApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.detectedApp');
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
        return $this->deviceCount;
    }

    /**
     * Gets the displayName property value. Name of the discovered application. Read-only
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceCount' => function (ParseNode $n) use ($o) { $o->setDeviceCount($n->getIntegerValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'managedDevices' => function (ParseNode $n) use ($o) { $o->setManagedDevices($n->getCollectionOfObjectValues(array(ManagedDevice::class, 'createFromDiscriminatorValue'))); },
            'platform' => function (ParseNode $n) use ($o) { $o->setPlatform($n->getEnumValue(DetectedAppPlatformType::class)); },
            'publisher' => function (ParseNode $n) use ($o) { $o->setPublisher($n->getStringValue()); },
            'sizeInByte' => function (ParseNode $n) use ($o) { $o->setSizeInByte($n->getIntegerValue()); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the managedDevices property value. The devices that have the discovered application installed
     * @return array<ManagedDevice>|null
    */
    public function getManagedDevices(): ?array {
        return $this->managedDevices;
    }

    /**
     * Gets the platform property value. Indicates the operating system / platform of the discovered application.  Some possible values are Windows, iOS, macOS. The default value is unknown (0).
     * @return DetectedAppPlatformType|null
    */
    public function getPlatform(): ?DetectedAppPlatformType {
        return $this->platform;
    }

    /**
     * Gets the publisher property value. Indicates the publisher of the discovered application. For example: 'Microsoft'.  The default value is an empty string.
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->publisher;
    }

    /**
     * Gets the sizeInByte property value. Discovered application size in bytes. Read-only
     * @return int|null
    */
    public function getSizeInByte(): ?int {
        return $this->sizeInByte;
    }

    /**
     * Gets the version property value. Version of the discovered application. Read-only
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('deviceCount', $this->deviceCount);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('managedDevices', $this->managedDevices);
        $writer->writeEnumValue('platform', $this->platform);
        $writer->writeStringValue('publisher', $this->publisher);
        $writer->writeIntegerValue('sizeInByte', $this->sizeInByte);
        $writer->writeStringValue('version', $this->version);
    }

    /**
     * Sets the deviceCount property value. The number of devices that have installed this application
     *  @param int|null $value Value to set for the deviceCount property.
    */
    public function setDeviceCount(?int $value ): void {
        $this->deviceCount = $value;
    }

    /**
     * Sets the displayName property value. Name of the discovered application. Read-only
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the managedDevices property value. The devices that have the discovered application installed
     *  @param array<ManagedDevice>|null $value Value to set for the managedDevices property.
    */
    public function setManagedDevices(?array $value ): void {
        $this->managedDevices = $value;
    }

    /**
     * Sets the platform property value. Indicates the operating system / platform of the discovered application.  Some possible values are Windows, iOS, macOS. The default value is unknown (0).
     *  @param DetectedAppPlatformType|null $value Value to set for the platform property.
    */
    public function setPlatform(?DetectedAppPlatformType $value ): void {
        $this->platform = $value;
    }

    /**
     * Sets the publisher property value. Indicates the publisher of the discovered application. For example: 'Microsoft'.  The default value is an empty string.
     *  @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value ): void {
        $this->publisher = $value;
    }

    /**
     * Sets the sizeInByte property value. Discovered application size in bytes. Read-only
     *  @param int|null $value Value to set for the sizeInByte property.
    */
    public function setSizeInByte(?int $value ): void {
        $this->sizeInByte = $value;
    }

    /**
     * Sets the version property value. Version of the discovered application. Read-only
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
