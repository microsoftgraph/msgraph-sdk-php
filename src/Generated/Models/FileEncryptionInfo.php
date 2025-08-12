<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Psr\Http\Message\StreamInterface;

/**
 * Contains properties for file encryption information for the content version of a line-of-business app.
*/
class FileEncryptionInfo implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new FileEncryptionInfo and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileEncryptionInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileEncryptionInfo {
        return new FileEncryptionInfo();
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
     * Gets the encryptionKey property value. The key used to encrypt the file content.
     * @return StreamInterface|null
    */
    public function getEncryptionKey(): ?StreamInterface {
        $val = $this->getBackingStore()->get('encryptionKey');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'encryptionKey'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'encryptionKey' => fn(ParseNode $n) => $o->setEncryptionKey($n->getBinaryContent()),
            'fileDigest' => fn(ParseNode $n) => $o->setFileDigest($n->getBinaryContent()),
            'fileDigestAlgorithm' => fn(ParseNode $n) => $o->setFileDigestAlgorithm($n->getStringValue()),
            'initializationVector' => fn(ParseNode $n) => $o->setInitializationVector($n->getBinaryContent()),
            'mac' => fn(ParseNode $n) => $o->setMac($n->getBinaryContent()),
            'macKey' => fn(ParseNode $n) => $o->setMacKey($n->getBinaryContent()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'profileIdentifier' => fn(ParseNode $n) => $o->setProfileIdentifier($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileDigest property value. The file digest prior to encryption. ProfileVersion1 requires a non-null FileDigest.
     * @return StreamInterface|null
    */
    public function getFileDigest(): ?StreamInterface {
        $val = $this->getBackingStore()->get('fileDigest');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileDigest'");
    }

    /**
     * Gets the fileDigestAlgorithm property value. The file digest algorithm. ProfileVersion1 currently only supports SHA256 for the FileDigestAlgorithm.
     * @return string|null
    */
    public function getFileDigestAlgorithm(): ?string {
        $val = $this->getBackingStore()->get('fileDigestAlgorithm');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fileDigestAlgorithm'");
    }

    /**
     * Gets the initializationVector property value. The initialization vector (IV) used for the encryption algorithm. Must be 16 bytes.
     * @return StreamInterface|null
    */
    public function getInitializationVector(): ?StreamInterface {
        $val = $this->getBackingStore()->get('initializationVector');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initializationVector'");
    }

    /**
     * Gets the mac property value. The hash of the concatenation of the IV and encrypted file content. Must be 32 bytes.
     * @return StreamInterface|null
    */
    public function getMac(): ?StreamInterface {
        $val = $this->getBackingStore()->get('mac');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mac'");
    }

    /**
     * Gets the macKey property value. The key used to compute the message authentication code of the concatenation of the IV and encrypted file content. Must be 32 bytes.
     * @return StreamInterface|null
    */
    public function getMacKey(): ?StreamInterface {
        $val = $this->getBackingStore()->get('macKey');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'macKey'");
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
     * Gets the profileIdentifier property value. The profile identifier. Maps to the strategy used to encrypt the file. Currently, only ProfileVersion1 is supported.
     * @return string|null
    */
    public function getProfileIdentifier(): ?string {
        $val = $this->getBackingStore()->get('profileIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'profileIdentifier'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('encryptionKey', $this->getEncryptionKey());
        $writer->writeBinaryContent('fileDigest', $this->getFileDigest());
        $writer->writeStringValue('fileDigestAlgorithm', $this->getFileDigestAlgorithm());
        $writer->writeBinaryContent('initializationVector', $this->getInitializationVector());
        $writer->writeBinaryContent('mac', $this->getMac());
        $writer->writeBinaryContent('macKey', $this->getMacKey());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('profileIdentifier', $this->getProfileIdentifier());
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
     * Sets the encryptionKey property value. The key used to encrypt the file content.
     * @param StreamInterface|null $value Value to set for the encryptionKey property.
    */
    public function setEncryptionKey(?StreamInterface $value): void {
        $this->getBackingStore()->set('encryptionKey', $value);
    }

    /**
     * Sets the fileDigest property value. The file digest prior to encryption. ProfileVersion1 requires a non-null FileDigest.
     * @param StreamInterface|null $value Value to set for the fileDigest property.
    */
    public function setFileDigest(?StreamInterface $value): void {
        $this->getBackingStore()->set('fileDigest', $value);
    }

    /**
     * Sets the fileDigestAlgorithm property value. The file digest algorithm. ProfileVersion1 currently only supports SHA256 for the FileDigestAlgorithm.
     * @param string|null $value Value to set for the fileDigestAlgorithm property.
    */
    public function setFileDigestAlgorithm(?string $value): void {
        $this->getBackingStore()->set('fileDigestAlgorithm', $value);
    }

    /**
     * Sets the initializationVector property value. The initialization vector (IV) used for the encryption algorithm. Must be 16 bytes.
     * @param StreamInterface|null $value Value to set for the initializationVector property.
    */
    public function setInitializationVector(?StreamInterface $value): void {
        $this->getBackingStore()->set('initializationVector', $value);
    }

    /**
     * Sets the mac property value. The hash of the concatenation of the IV and encrypted file content. Must be 32 bytes.
     * @param StreamInterface|null $value Value to set for the mac property.
    */
    public function setMac(?StreamInterface $value): void {
        $this->getBackingStore()->set('mac', $value);
    }

    /**
     * Sets the macKey property value. The key used to compute the message authentication code of the concatenation of the IV and encrypted file content. Must be 32 bytes.
     * @param StreamInterface|null $value Value to set for the macKey property.
    */
    public function setMacKey(?StreamInterface $value): void {
        $this->getBackingStore()->set('macKey', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the profileIdentifier property value. The profile identifier. Maps to the strategy used to encrypt the file. Currently, only ProfileVersion1 is supported.
     * @param string|null $value Value to set for the profileIdentifier property.
    */
    public function setProfileIdentifier(?string $value): void {
        $this->getBackingStore()->set('profileIdentifier', $value);
    }

}
