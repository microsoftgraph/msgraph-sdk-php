<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class FileDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new FileDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileDetails {
        return new FileDetails();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'filePath' => fn(ParseNode $n) => $o->setFilePath($n->getStringValue()),
            'filePublisher' => fn(ParseNode $n) => $o->setFilePublisher($n->getStringValue()),
            'fileSize' => fn(ParseNode $n) => $o->setFileSize($n->getIntegerValue()),
            'issuer' => fn(ParseNode $n) => $o->setIssuer($n->getStringValue()),
            'md5' => fn(ParseNode $n) => $o->setMd5($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sha1' => fn(ParseNode $n) => $o->setSha1($n->getStringValue()),
            'sha256' => fn(ParseNode $n) => $o->setSha256($n->getStringValue()),
            'sha256Ac' => fn(ParseNode $n) => $o->setSha256Ac($n->getStringValue()),
            'signer' => fn(ParseNode $n) => $o->setSigner($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileName property value. The name of the file.
     * @return string|null
    */
    public function getFileName(): ?string {
        $val = $this->getBackingStore()->get('fileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileName'");
    }

    /**
     * Gets the filePath property value. The file path (location) of the file instance.
     * @return string|null
    */
    public function getFilePath(): ?string {
        $val = $this->getBackingStore()->get('filePath');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filePath'");
    }

    /**
     * Gets the filePublisher property value. The publisher of the file.
     * @return string|null
    */
    public function getFilePublisher(): ?string {
        $val = $this->getBackingStore()->get('filePublisher');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filePublisher'");
    }

    /**
     * Gets the fileSize property value. The size of the file in bytes.
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
     * Gets the issuer property value. The certificate authority (CA) that issued the certificate.
     * @return string|null
    */
    public function getIssuer(): ?string {
        $val = $this->getBackingStore()->get('issuer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issuer'");
    }

    /**
     * Gets the md5 property value. The Md5 cryptographic hash of the file content.
     * @return string|null
    */
    public function getMd5(): ?string {
        $val = $this->getBackingStore()->get('md5');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'md5'");
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
     * Gets the sha1 property value. The Sha1 cryptographic hash of the file content.
     * @return string|null
    */
    public function getSha1(): ?string {
        $val = $this->getBackingStore()->get('sha1');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sha1'");
    }

    /**
     * Gets the sha256 property value. The Sha256 cryptographic hash of the file content.
     * @return string|null
    */
    public function getSha256(): ?string {
        $val = $this->getBackingStore()->get('sha256');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sha256'");
    }

    /**
     * Gets the sha256Ac property value. The sha256Ac property
     * @return string|null
    */
    public function getSha256Ac(): ?string {
        $val = $this->getBackingStore()->get('sha256Ac');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sha256Ac'");
    }

    /**
     * Gets the signer property value. The signer of the signed file.
     * @return string|null
    */
    public function getSigner(): ?string {
        $val = $this->getBackingStore()->get('signer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'signer'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('fileName', $this->getFileName());
        $writer->writeStringValue('filePath', $this->getFilePath());
        $writer->writeStringValue('filePublisher', $this->getFilePublisher());
        $writer->writeIntegerValue('fileSize', $this->getFileSize());
        $writer->writeStringValue('issuer', $this->getIssuer());
        $writer->writeStringValue('md5', $this->getMd5());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('sha1', $this->getSha1());
        $writer->writeStringValue('sha256', $this->getSha256());
        $writer->writeStringValue('sha256Ac', $this->getSha256Ac());
        $writer->writeStringValue('signer', $this->getSigner());
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
     * Sets the fileName property value. The name of the file.
     * @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value): void {
        $this->getBackingStore()->set('fileName', $value);
    }

    /**
     * Sets the filePath property value. The file path (location) of the file instance.
     * @param string|null $value Value to set for the filePath property.
    */
    public function setFilePath(?string $value): void {
        $this->getBackingStore()->set('filePath', $value);
    }

    /**
     * Sets the filePublisher property value. The publisher of the file.
     * @param string|null $value Value to set for the filePublisher property.
    */
    public function setFilePublisher(?string $value): void {
        $this->getBackingStore()->set('filePublisher', $value);
    }

    /**
     * Sets the fileSize property value. The size of the file in bytes.
     * @param int|null $value Value to set for the fileSize property.
    */
    public function setFileSize(?int $value): void {
        $this->getBackingStore()->set('fileSize', $value);
    }

    /**
     * Sets the issuer property value. The certificate authority (CA) that issued the certificate.
     * @param string|null $value Value to set for the issuer property.
    */
    public function setIssuer(?string $value): void {
        $this->getBackingStore()->set('issuer', $value);
    }

    /**
     * Sets the md5 property value. The Md5 cryptographic hash of the file content.
     * @param string|null $value Value to set for the md5 property.
    */
    public function setMd5(?string $value): void {
        $this->getBackingStore()->set('md5', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sha1 property value. The Sha1 cryptographic hash of the file content.
     * @param string|null $value Value to set for the sha1 property.
    */
    public function setSha1(?string $value): void {
        $this->getBackingStore()->set('sha1', $value);
    }

    /**
     * Sets the sha256 property value. The Sha256 cryptographic hash of the file content.
     * @param string|null $value Value to set for the sha256 property.
    */
    public function setSha256(?string $value): void {
        $this->getBackingStore()->set('sha256', $value);
    }

    /**
     * Sets the sha256Ac property value. The sha256Ac property
     * @param string|null $value Value to set for the sha256Ac property.
    */
    public function setSha256Ac(?string $value): void {
        $this->getBackingStore()->set('sha256Ac', $value);
    }

    /**
     * Sets the signer property value. The signer of the signed file.
     * @param string|null $value Value to set for the signer property.
    */
    public function setSigner(?string $value): void {
        $this->getBackingStore()->set('signer', $value);
    }

}
