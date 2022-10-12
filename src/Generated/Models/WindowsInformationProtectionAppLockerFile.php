<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class WindowsInformationProtectionAppLockerFile extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName The friendly name
    */
    private ?string $displayName = null;
    
    /**
     * @var StreamInterface|null $file File as a byte array
    */
    private ?StreamInterface $file = null;
    
    /**
     * @var string|null $fileHash SHA256 hash of the file
    */
    private ?string $fileHash = null;
    
    /**
     * @var string|null $version Version of the entity.
    */
    private ?string $version = null;
    
    /**
     * Instantiates a new windowsInformationProtectionAppLockerFile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsInformationProtectionAppLockerFile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsInformationProtectionAppLockerFile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsInformationProtectionAppLockerFile {
        return new WindowsInformationProtectionAppLockerFile();
    }

    /**
     * Gets the displayName property value. The friendly name
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
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'file' => function (ParseNode $n) use ($o) { $o->setFile($n->getBinaryContent()); },
            'fileHash' => function (ParseNode $n) use ($o) { $o->setFileHash($n->getStringValue()); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the file property value. File as a byte array
     * @return StreamInterface
    */
    public function getFile(): StreamInterface {
        return $this->file;
    }

    /**
     * Gets the fileHash property value. SHA256 hash of the file
     * @return string|null
    */
    public function getFileHash(): ?string {
        return $this->fileHash;
    }

    /**
     * Gets the version property value. Version of the entity.
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
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBinaryContent('file', $this->file);
        $writer->writeStringValue('fileHash', $this->fileHash);
        $writer->writeStringValue('version', $this->version);
    }

    /**
     * Sets the displayName property value. The friendly name
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the file property value. File as a byte array
     *  @param StreamInterface|null $value Value to set for the file property.
    */
    public function setFile(?StreamInterface $value ): void {
        $this->file = $value;
    }

    /**
     * Sets the fileHash property value. SHA256 hash of the file
     *  @param string|null $value Value to set for the fileHash property.
    */
    public function setFileHash(?string $value ): void {
        $this->fileHash = $value;
    }

    /**
     * Sets the version property value. Version of the entity.
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}
