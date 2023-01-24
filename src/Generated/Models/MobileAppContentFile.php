<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

/**
 * Contains properties for a single installer file that is associated with a given mobileAppContent version.
*/
class MobileAppContentFile extends Entity implements Parsable 
{
    /**
     * Instantiates a new mobileAppContentFile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileAppContentFile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MobileAppContentFile {
        return new MobileAppContentFile();
    }

    /**
     * Gets the azureStorageUri property value. The Azure Storage URI.
     * @return string|null
    */
    public function getAzureStorageUri(): ?string {
        return $this->getBackingStore()->get('azureStorageUri');
    }

    /**
     * Gets the azureStorageUriExpirationDateTime property value. The time the Azure storage Uri expires.
     * @return DateTime|null
    */
    public function getAzureStorageUriExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('azureStorageUriExpirationDateTime');
    }

    /**
     * Gets the createdDateTime property value. The time the file was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureStorageUri' => fn(ParseNode $n) => $o->setAzureStorageUri($n->getStringValue()),
            'azureStorageUriExpirationDateTime' => fn(ParseNode $n) => $o->setAzureStorageUriExpirationDateTime($n->getDateTimeValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'isCommitted' => fn(ParseNode $n) => $o->setIsCommitted($n->getBooleanValue()),
            'manifest' => fn(ParseNode $n) => $o->setManifest($n->getBinaryContent()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
            'sizeEncrypted' => fn(ParseNode $n) => $o->setSizeEncrypted($n->getIntegerValue()),
            'uploadState' => fn(ParseNode $n) => $o->setUploadState($n->getEnumValue(MobileAppContentFileUploadState::class)),
        ]);
    }

    /**
     * Gets the isCommitted property value. A value indicating whether the file is committed.
     * @return bool|null
    */
    public function getIsCommitted(): ?bool {
        return $this->getBackingStore()->get('isCommitted');
    }

    /**
     * Gets the manifest property value. The manifest information.
     * @return StreamInterface|null
    */
    public function getManifest(): ?StreamInterface {
        return $this->getBackingStore()->get('manifest');
    }

    /**
     * Gets the name property value. the file name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the size property value. The size of the file prior to encryption.
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->getBackingStore()->get('size');
    }

    /**
     * Gets the sizeEncrypted property value. The size of the file after encryption.
     * @return int|null
    */
    public function getSizeEncrypted(): ?int {
        return $this->getBackingStore()->get('sizeEncrypted');
    }

    /**
     * Gets the uploadState property value. Contains properties for upload request states.
     * @return MobileAppContentFileUploadState|null
    */
    public function getUploadState(): ?MobileAppContentFileUploadState {
        return $this->getBackingStore()->get('uploadState');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('azureStorageUri', $this->getAzureStorageUri());
        $writer->writeDateTimeValue('azureStorageUriExpirationDateTime', $this->getAzureStorageUriExpirationDateTime());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeBooleanValue('isCommitted', $this->getIsCommitted());
        $writer->writeBinaryContent('manifest', $this->getManifest());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeIntegerValue('size', $this->getSize());
        $writer->writeIntegerValue('sizeEncrypted', $this->getSizeEncrypted());
        $writer->writeEnumValue('uploadState', $this->getUploadState());
    }

    /**
     * Sets the azureStorageUri property value. The Azure Storage URI.
     * @param string|null $value Value to set for the azureStorageUri property.
    */
    public function setAzureStorageUri(?string $value): void {
        $this->getBackingStore()->set('azureStorageUri', $value);
    }

    /**
     * Sets the azureStorageUriExpirationDateTime property value. The time the Azure storage Uri expires.
     * @param DateTime|null $value Value to set for the azureStorageUriExpirationDateTime property.
    */
    public function setAzureStorageUriExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('azureStorageUriExpirationDateTime', $value);
    }

    /**
     * Sets the createdDateTime property value. The time the file was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the isCommitted property value. A value indicating whether the file is committed.
     * @param bool|null $value Value to set for the isCommitted property.
    */
    public function setIsCommitted(?bool $value): void {
        $this->getBackingStore()->set('isCommitted', $value);
    }

    /**
     * Sets the manifest property value. The manifest information.
     * @param StreamInterface|null $value Value to set for the manifest property.
    */
    public function setManifest(?StreamInterface $value): void {
        $this->getBackingStore()->set('manifest', $value);
    }

    /**
     * Sets the name property value. the file name.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the size property value. The size of the file prior to encryption.
     * @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->getBackingStore()->set('size', $value);
    }

    /**
     * Sets the sizeEncrypted property value. The size of the file after encryption.
     * @param int|null $value Value to set for the sizeEncrypted property.
    */
    public function setSizeEncrypted(?int $value): void {
        $this->getBackingStore()->set('sizeEncrypted', $value);
    }

    /**
     * Sets the uploadState property value. Contains properties for upload request states.
     * @param MobileAppContentFileUploadState|null $value Value to set for the uploadState property.
    */
    public function setUploadState(?MobileAppContentFileUploadState $value): void {
        $this->getBackingStore()->set('uploadState', $value);
    }

}
