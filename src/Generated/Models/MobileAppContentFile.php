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
     * Instantiates a new MobileAppContentFile and sets the default values.
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
     * Gets the azureStorageUri property value. Indicates the Azure Storage URI that the file is uploaded to. Created by the service upon receiving a valid mobileAppContentFile. Read-only. This property is read-only.
     * @return string|null
    */
    public function getAzureStorageUri(): ?string {
        $val = $this->getBackingStore()->get('azureStorageUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureStorageUri'");
    }

    /**
     * Gets the azureStorageUriExpirationDateTime property value. Indicates the date and time when the Azure storage URI expires, in ISO 8601 format. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Read-only. This property is read-only.
     * @return DateTime|null
    */
    public function getAzureStorageUriExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('azureStorageUriExpirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureStorageUriExpirationDateTime'");
    }

    /**
     * Gets the createdDateTime property value. Indicates created date and time associated with app content file, in ISO 8601 format. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Read-only. This property is read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureStorageUri' => fn(ParseNode $n) => $o->setAzureStorageUri($n->getStringValue()),
            'azureStorageUriExpirationDateTime' => fn(ParseNode $n) => $o->setAzureStorageUriExpirationDateTime($n->getDateTimeValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'isCommitted' => fn(ParseNode $n) => $o->setIsCommitted($n->getBooleanValue()),
            'isDependency' => fn(ParseNode $n) => $o->setIsDependency($n->getBooleanValue()),
            'manifest' => fn(ParseNode $n) => $o->setManifest($n->getBinaryContent()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
            'sizeEncrypted' => fn(ParseNode $n) => $o->setSizeEncrypted($n->getIntegerValue()),
            'uploadState' => fn(ParseNode $n) => $o->setUploadState($n->getEnumValue(MobileAppContentFileUploadState::class)),
        ]);
    }

    /**
     * Gets the isCommitted property value. A value indicating whether the file is committed. A committed app content file has been fully uploaded and validated by the Intune service. TRUE means that app content file is committed, FALSE means that app content file is not committed. Defaults to FALSE. Read-only. This property is read-only.
     * @return bool|null
    */
    public function getIsCommitted(): ?bool {
        $val = $this->getBackingStore()->get('isCommitted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCommitted'");
    }

    /**
     * Gets the isDependency property value. Indicates whether this content file is a dependency for the main content file. TRUE means that the content file is a dependency, FALSE means that the content file is not a dependency and is the main content file. Defaults to FALSE.
     * @return bool|null
    */
    public function getIsDependency(): ?bool {
        $val = $this->getBackingStore()->get('isDependency');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDependency'");
    }

    /**
     * Gets the manifest property value. Indicates the manifest information, containing file metadata.
     * @return StreamInterface|null
    */
    public function getManifest(): ?StreamInterface {
        $val = $this->getBackingStore()->get('manifest');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manifest'");
    }

    /**
     * Gets the name property value. Indicates the name of the file.
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
     * Gets the size property value. Indicates the original size of the file, in bytes.
     * @return int|null
    */
    public function getSize(): ?int {
        $val = $this->getBackingStore()->get('size');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'size'");
    }

    /**
     * Gets the sizeEncrypted property value. Indicates the size of the file after encryption, in bytes.
     * @return int|null
    */
    public function getSizeEncrypted(): ?int {
        $val = $this->getBackingStore()->get('sizeEncrypted');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sizeEncrypted'");
    }

    /**
     * Gets the uploadState property value. Contains properties for upload request states.
     * @return MobileAppContentFileUploadState|null
    */
    public function getUploadState(): ?MobileAppContentFileUploadState {
        $val = $this->getBackingStore()->get('uploadState');
        if (is_null($val) || $val instanceof MobileAppContentFileUploadState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uploadState'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isDependency', $this->getIsDependency());
        $writer->writeBinaryContent('manifest', $this->getManifest());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeIntegerValue('size', $this->getSize());
        $writer->writeIntegerValue('sizeEncrypted', $this->getSizeEncrypted());
        $writer->writeEnumValue('uploadState', $this->getUploadState());
    }

    /**
     * Sets the azureStorageUri property value. Indicates the Azure Storage URI that the file is uploaded to. Created by the service upon receiving a valid mobileAppContentFile. Read-only. This property is read-only.
     * @param string|null $value Value to set for the azureStorageUri property.
    */
    public function setAzureStorageUri(?string $value): void {
        $this->getBackingStore()->set('azureStorageUri', $value);
    }

    /**
     * Sets the azureStorageUriExpirationDateTime property value. Indicates the date and time when the Azure storage URI expires, in ISO 8601 format. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Read-only. This property is read-only.
     * @param DateTime|null $value Value to set for the azureStorageUriExpirationDateTime property.
    */
    public function setAzureStorageUriExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('azureStorageUriExpirationDateTime', $value);
    }

    /**
     * Sets the createdDateTime property value. Indicates created date and time associated with app content file, in ISO 8601 format. For example, midnight UTC on Jan 1, 2014 would look like this: '2014-01-01T00:00:00Z'. Read-only. This property is read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the isCommitted property value. A value indicating whether the file is committed. A committed app content file has been fully uploaded and validated by the Intune service. TRUE means that app content file is committed, FALSE means that app content file is not committed. Defaults to FALSE. Read-only. This property is read-only.
     * @param bool|null $value Value to set for the isCommitted property.
    */
    public function setIsCommitted(?bool $value): void {
        $this->getBackingStore()->set('isCommitted', $value);
    }

    /**
     * Sets the isDependency property value. Indicates whether this content file is a dependency for the main content file. TRUE means that the content file is a dependency, FALSE means that the content file is not a dependency and is the main content file. Defaults to FALSE.
     * @param bool|null $value Value to set for the isDependency property.
    */
    public function setIsDependency(?bool $value): void {
        $this->getBackingStore()->set('isDependency', $value);
    }

    /**
     * Sets the manifest property value. Indicates the manifest information, containing file metadata.
     * @param StreamInterface|null $value Value to set for the manifest property.
    */
    public function setManifest(?StreamInterface $value): void {
        $this->getBackingStore()->set('manifest', $value);
    }

    /**
     * Sets the name property value. Indicates the name of the file.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the size property value. Indicates the original size of the file, in bytes.
     * @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value): void {
        $this->getBackingStore()->set('size', $value);
    }

    /**
     * Sets the sizeEncrypted property value. Indicates the size of the file after encryption, in bytes.
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
