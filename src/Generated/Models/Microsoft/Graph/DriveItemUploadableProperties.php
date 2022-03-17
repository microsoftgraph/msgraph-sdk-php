<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DriveItemUploadableProperties implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $description Provides a user-visible description of the item. Read-write. Only on OneDrive Personal. */
    private ?string $description = null;
    
    /** @var int|null $fileSize Provides an expected file size to perform a quota check prior to upload. Only on OneDrive Personal. */
    private ?int $fileSize = null;
    
    /** @var FileSystemInfo|null $fileSystemInfo File system information on client. Read-write. */
    private ?FileSystemInfo $fileSystemInfo = null;
    
    /** @var string|null $name The name of the item (filename and extension). Read-write. */
    private ?string $name = null;
    
    /**
     * Instantiates a new driveItemUploadableProperties and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DriveItemUploadableProperties
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DriveItemUploadableProperties {
        return new DriveItemUploadableProperties();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. Provides a user-visible description of the item. Read-write. Only on OneDrive Personal.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'fileSize' => function (self $o, ParseNode $n) { $o->setFileSize($n->getIntegerValue()); },
            'fileSystemInfo' => function (self $o, ParseNode $n) { $o->setFileSystemInfo($n->getObjectValue(FileSystemInfo::class)); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the fileSize property value. Provides an expected file size to perform a quota check prior to upload. Only on OneDrive Personal.
     * @return int|null
    */
    public function getFileSize(): ?int {
        return $this->fileSize;
    }

    /**
     * Gets the fileSystemInfo property value. File system information on client. Read-write.
     * @return FileSystemInfo|null
    */
    public function getFileSystemInfo(): ?FileSystemInfo {
        return $this->fileSystemInfo;
    }

    /**
     * Gets the name property value. The name of the item (filename and extension). Read-write.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->description);
        $writer->writeIntegerValue('fileSize', $this->fileSize);
        $writer->writeObjectValue('fileSystemInfo', $this->fileSystemInfo);
        $writer->writeStringValue('name', $this->name);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the description property value. Provides a user-visible description of the item. Read-write. Only on OneDrive Personal.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the fileSize property value. Provides an expected file size to perform a quota check prior to upload. Only on OneDrive Personal.
     *  @param int|null $value Value to set for the fileSize property.
    */
    public function setFileSize(?int $value ): void {
        $this->fileSize = $value;
    }

    /**
     * Sets the fileSystemInfo property value. File system information on client. Read-write.
     *  @param FileSystemInfo|null $value Value to set for the fileSystemInfo property.
    */
    public function setFileSystemInfo(?FileSystemInfo $value ): void {
        $this->fileSystemInfo = $value;
    }

    /**
     * Sets the name property value. The name of the item (filename and extension). Read-write.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

}
