<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class Hashes implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new hashes and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Hashes
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Hashes {
        return new Hashes();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the crc32Hash property value. The CRC32 value of the file in little endian (if available). Read-only.
     * @return string|null
    */
    public function getCrc32Hash(): ?string {
        return $this->getBackingStore()->get('crc32Hash');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'crc32Hash' => fn(ParseNode $n) => $o->setCrc32Hash($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'quickXorHash' => fn(ParseNode $n) => $o->setQuickXorHash($n->getStringValue()),
            'sha1Hash' => fn(ParseNode $n) => $o->setSha1Hash($n->getStringValue()),
            'sha256Hash' => fn(ParseNode $n) => $o->setSha256Hash($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the quickXorHash property value. A proprietary hash of the file that can be used to determine if the contents of the file have changed (if available). Read-only.
     * @return string|null
    */
    public function getQuickXorHash(): ?string {
        return $this->getBackingStore()->get('quickXorHash');
    }

    /**
     * Gets the sha1Hash property value. SHA1 hash for the contents of the file (if available). Read-only.
     * @return string|null
    */
    public function getSha1Hash(): ?string {
        return $this->getBackingStore()->get('sha1Hash');
    }

    /**
     * Gets the sha256Hash property value. SHA256 hash for the contents of the file (if available). Read-only.
     * @return string|null
    */
    public function getSha256Hash(): ?string {
        return $this->getBackingStore()->get('sha256Hash');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('crc32Hash', $this->getCrc32Hash());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('quickXorHash', $this->getQuickXorHash());
        $writer->writeStringValue('sha1Hash', $this->getSha1Hash());
        $writer->writeStringValue('sha256Hash', $this->getSha256Hash());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the crc32Hash property value. The CRC32 value of the file in little endian (if available). Read-only.
     * @param string|null $value Value to set for the crc32Hash property.
    */
    public function setCrc32Hash(?string $value): void {
        $this->getBackingStore()->set('crc32Hash', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the quickXorHash property value. A proprietary hash of the file that can be used to determine if the contents of the file have changed (if available). Read-only.
     * @param string|null $value Value to set for the quickXorHash property.
    */
    public function setQuickXorHash(?string $value): void {
        $this->getBackingStore()->set('quickXorHash', $value);
    }

    /**
     * Sets the sha1Hash property value. SHA1 hash for the contents of the file (if available). Read-only.
     * @param string|null $value Value to set for the sha1Hash property.
    */
    public function setSha1Hash(?string $value): void {
        $this->getBackingStore()->set('sha1Hash', $value);
    }

    /**
     * Sets the sha256Hash property value. SHA256 hash for the contents of the file (if available). Read-only.
     * @param string|null $value Value to set for the sha256Hash property.
    */
    public function setSha256Hash(?string $value): void {
        $this->getBackingStore()->set('sha256Hash', $value);
    }

}
