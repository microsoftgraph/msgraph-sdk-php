<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class MobileAppContentFile extends Entity implements Parsable 
{
    /**
     * @var string|null $azureStorageUri The Azure Storage URI.
    */
    private ?string $azureStorageUri = null;
    
    /**
     * @var DateTime|null $azureStorageUriExpirationDateTime The time the Azure storage Uri expires.
    */
    private ?DateTime $azureStorageUriExpirationDateTime = null;
    
    /**
     * @var DateTime|null $createdDateTime The time the file was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var bool|null $isCommitted A value indicating whether the file is committed.
    */
    private ?bool $isCommitted = null;
    
    /**
     * @var StreamInterface|null $manifest The manifest information.
    */
    private ?StreamInterface $manifest = null;
    
    /**
     * @var string|null $name the file name.
    */
    private ?string $name = null;
    
    /**
     * @var int|null $size The size of the file prior to encryption.
    */
    private ?int $size = null;
    
    /**
     * @var int|null $sizeEncrypted The size of the file after encryption.
    */
    private ?int $sizeEncrypted = null;
    
    /**
     * @var MobileAppContentFileUploadState|null $uploadState The state of the current upload request. Possible values are: success, transientError, error, unknown, azureStorageUriRequestSuccess, azureStorageUriRequestPending, azureStorageUriRequestFailed, azureStorageUriRequestTimedOut, azureStorageUriRenewalSuccess, azureStorageUriRenewalPending, azureStorageUriRenewalFailed, azureStorageUriRenewalTimedOut, commitFileSuccess, commitFilePending, commitFileFailed, commitFileTimedOut.
    */
    private ?MobileAppContentFileUploadState $uploadState = null;
    
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
        return $this->azureStorageUri;
    }

    /**
     * Gets the azureStorageUriExpirationDateTime property value. The time the Azure storage Uri expires.
     * @return DateTime|null
    */
    public function getAzureStorageUriExpirationDateTime(): ?DateTime {
        return $this->azureStorageUriExpirationDateTime;
    }

    /**
     * Gets the createdDateTime property value. The time the file was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureStorageUri' => function (ParseNode $n) use ($o) { $o->setAzureStorageUri($n->getStringValue()); },
            'azureStorageUriExpirationDateTime' => function (ParseNode $n) use ($o) { $o->setAzureStorageUriExpirationDateTime($n->getDateTimeValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'isCommitted' => function (ParseNode $n) use ($o) { $o->setIsCommitted($n->getBooleanValue()); },
            'manifest' => function (ParseNode $n) use ($o) { $o->setManifest($n->getBinaryContent()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'size' => function (ParseNode $n) use ($o) { $o->setSize($n->getIntegerValue()); },
            'sizeEncrypted' => function (ParseNode $n) use ($o) { $o->setSizeEncrypted($n->getIntegerValue()); },
            'uploadState' => function (ParseNode $n) use ($o) { $o->setUploadState($n->getEnumValue(MobileAppContentFileUploadState::class)); },
        ]);
    }

    /**
     * Gets the isCommitted property value. A value indicating whether the file is committed.
     * @return bool|null
    */
    public function getIsCommitted(): ?bool {
        return $this->isCommitted;
    }

    /**
     * Gets the manifest property value. The manifest information.
     * @return StreamInterface|null
    */
    public function getManifest(): ?StreamInterface {
        return $this->manifest;
    }

    /**
     * Gets the name property value. the file name.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the size property value. The size of the file prior to encryption.
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->size;
    }

    /**
     * Gets the sizeEncrypted property value. The size of the file after encryption.
     * @return int|null
    */
    public function getSizeEncrypted(): ?int {
        return $this->sizeEncrypted;
    }

    /**
     * Gets the uploadState property value. The state of the current upload request. Possible values are: success, transientError, error, unknown, azureStorageUriRequestSuccess, azureStorageUriRequestPending, azureStorageUriRequestFailed, azureStorageUriRequestTimedOut, azureStorageUriRenewalSuccess, azureStorageUriRenewalPending, azureStorageUriRenewalFailed, azureStorageUriRenewalTimedOut, commitFileSuccess, commitFilePending, commitFileFailed, commitFileTimedOut.
     * @return MobileAppContentFileUploadState|null
    */
    public function getUploadState(): ?MobileAppContentFileUploadState {
        return $this->uploadState;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('azureStorageUri', $this->azureStorageUri);
        $writer->writeDateTimeValue('azureStorageUriExpirationDateTime', $this->azureStorageUriExpirationDateTime);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeBooleanValue('isCommitted', $this->isCommitted);
        $writer->writeBinaryContent('manifest', $this->manifest);
        $writer->writeStringValue('name', $this->name);
        $writer->writeIntegerValue('size', $this->size);
        $writer->writeIntegerValue('sizeEncrypted', $this->sizeEncrypted);
        $writer->writeEnumValue('uploadState', $this->uploadState);
    }

    /**
     * Sets the azureStorageUri property value. The Azure Storage URI.
     *  @param string|null $value Value to set for the azureStorageUri property.
    */
    public function setAzureStorageUri(?string $value ): void {
        $this->azureStorageUri = $value;
    }

    /**
     * Sets the azureStorageUriExpirationDateTime property value. The time the Azure storage Uri expires.
     *  @param DateTime|null $value Value to set for the azureStorageUriExpirationDateTime property.
    */
    public function setAzureStorageUriExpirationDateTime(?DateTime $value ): void {
        $this->azureStorageUriExpirationDateTime = $value;
    }

    /**
     * Sets the createdDateTime property value. The time the file was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the isCommitted property value. A value indicating whether the file is committed.
     *  @param bool|null $value Value to set for the isCommitted property.
    */
    public function setIsCommitted(?bool $value ): void {
        $this->isCommitted = $value;
    }

    /**
     * Sets the manifest property value. The manifest information.
     *  @param StreamInterface|null $value Value to set for the manifest property.
    */
    public function setManifest(?StreamInterface $value ): void {
        $this->manifest = $value;
    }

    /**
     * Sets the name property value. the file name.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the size property value. The size of the file prior to encryption.
     *  @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value ): void {
        $this->size = $value;
    }

    /**
     * Sets the sizeEncrypted property value. The size of the file after encryption.
     *  @param int|null $value Value to set for the sizeEncrypted property.
    */
    public function setSizeEncrypted(?int $value ): void {
        $this->sizeEncrypted = $value;
    }

    /**
     * Sets the uploadState property value. The state of the current upload request. Possible values are: success, transientError, error, unknown, azureStorageUriRequestSuccess, azureStorageUriRequestPending, azureStorageUriRequestFailed, azureStorageUriRequestTimedOut, azureStorageUriRenewalSuccess, azureStorageUriRenewalPending, azureStorageUriRenewalFailed, azureStorageUriRenewalTimedOut, commitFileSuccess, commitFilePending, commitFileFailed, commitFileTimedOut.
     *  @param MobileAppContentFileUploadState|null $value Value to set for the uploadState property.
    */
    public function setUploadState(?MobileAppContentFileUploadState $value ): void {
        $this->uploadState = $value;
    }

}
