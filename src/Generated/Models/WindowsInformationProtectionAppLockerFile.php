<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

/**
 * Windows Information Protection AppLocker File
*/
class WindowsInformationProtectionAppLockerFile extends Entity implements Parsable 
{
    /**
     * Instantiates a new windowsInformationProtectionAppLockerFile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'file' => fn(ParseNode $n) => $o->setFile($n->getBinaryContent()),
            'fileHash' => fn(ParseNode $n) => $o->setFileHash($n->getStringValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the file property value. File as a byte array
     * @return StreamInterface|null
    */
    public function getFile(): ?StreamInterface {
        return $this->getBackingStore()->get('file');
    }

    /**
     * Gets the fileHash property value. SHA256 hash of the file
     * @return string|null
    */
    public function getFileHash(): ?string {
        return $this->getBackingStore()->get('fileHash');
    }

    /**
     * Gets the version property value. Version of the entity.
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
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBinaryContent('file', $this->getFile());
        $writer->writeStringValue('fileHash', $this->getFileHash());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the displayName property value. The friendly name
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the file property value. File as a byte array
     * @param StreamInterface|null $value Value to set for the file property.
    */
    public function setFile(?StreamInterface $value): void {
        $this->getBackingStore()->set('file', $value);
    }

    /**
     * Sets the fileHash property value. SHA256 hash of the file
     * @param string|null $value Value to set for the fileHash property.
    */
    public function setFileHash(?string $value): void {
        $this->getBackingStore()->set('fileHash', $value);
    }

    /**
     * Sets the version property value. Version of the entity.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
