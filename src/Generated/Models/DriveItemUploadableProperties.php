<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DriveItemUploadableProperties implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new DriveItemUploadableProperties and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DriveItemUploadableProperties
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DriveItemUploadableProperties {
        return new DriveItemUploadableProperties();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the description property value. Provides a user-visible description of the item. Read-write. Only on OneDrive Personal.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the driveItemSource property value. Information about the drive item source. Read-write. Only on OneDrive for Business and SharePoint.
     * @return DriveItemSource|null
    */
    public function getDriveItemSource(): ?DriveItemSource {
        $val = $this->getBackingStore()->get('driveItemSource');
        if (is_null($val) || $val instanceof DriveItemSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driveItemSource'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'driveItemSource' => fn(ParseNode $n) => $o->setDriveItemSource($n->getObjectValue([DriveItemSource::class, 'createFromDiscriminatorValue'])),
            'fileSize' => fn(ParseNode $n) => $o->setFileSize($n->getIntegerValue()),
            'fileSystemInfo' => fn(ParseNode $n) => $o->setFileSystemInfo($n->getObjectValue([FileSystemInfo::class, 'createFromDiscriminatorValue'])),
            'mediaSource' => fn(ParseNode $n) => $o->setMediaSource($n->getObjectValue([MediaSource::class, 'createFromDiscriminatorValue'])),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileSize property value. Provides an expected file size to perform a quota check before uploading. Only on OneDrive Personal.
     * @return int|null
    */
    public function getFileSize(): ?int {
        $val = $this->getBackingStore()->get('fileSize');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileSize'");
    }

    /**
     * Gets the fileSystemInfo property value. File system information on client. Read-write.
     * @return FileSystemInfo|null
    */
    public function getFileSystemInfo(): ?FileSystemInfo {
        $val = $this->getBackingStore()->get('fileSystemInfo');
        if (is_null($val) || $val instanceof FileSystemInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileSystemInfo'");
    }

    /**
     * Gets the mediaSource property value. Media source information. Read-write. Only on OneDrive for Business and SharePoint.
     * @return MediaSource|null
    */
    public function getMediaSource(): ?MediaSource {
        $val = $this->getBackingStore()->get('mediaSource');
        if (is_null($val) || $val instanceof MediaSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaSource'");
    }

    /**
     * Gets the name property value. The name of the item (filename and extension). Read-write.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeObjectValue('driveItemSource', $this->getDriveItemSource());
        $writer->writeIntegerValue('fileSize', $this->getFileSize());
        $writer->writeObjectValue('fileSystemInfo', $this->getFileSystemInfo());
        $writer->writeObjectValue('mediaSource', $this->getMediaSource());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the description property value. Provides a user-visible description of the item. Read-write. Only on OneDrive Personal.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the driveItemSource property value. Information about the drive item source. Read-write. Only on OneDrive for Business and SharePoint.
     * @param DriveItemSource|null $value Value to set for the driveItemSource property.
    */
    public function setDriveItemSource(?DriveItemSource $value): void {
        $this->getBackingStore()->set('driveItemSource', $value);
    }

    /**
     * Sets the fileSize property value. Provides an expected file size to perform a quota check before uploading. Only on OneDrive Personal.
     * @param int|null $value Value to set for the fileSize property.
    */
    public function setFileSize(?int $value): void {
        $this->getBackingStore()->set('fileSize', $value);
    }

    /**
     * Sets the fileSystemInfo property value. File system information on client. Read-write.
     * @param FileSystemInfo|null $value Value to set for the fileSystemInfo property.
    */
    public function setFileSystemInfo(?FileSystemInfo $value): void {
        $this->getBackingStore()->set('fileSystemInfo', $value);
    }

    /**
     * Sets the mediaSource property value. Media source information. Read-write. Only on OneDrive for Business and SharePoint.
     * @param MediaSource|null $value Value to set for the mediaSource property.
    */
    public function setMediaSource(?MediaSource $value): void {
        $this->getBackingStore()->set('mediaSource', $value);
    }

    /**
     * Sets the name property value. The name of the item (filename and extension). Read-write.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
