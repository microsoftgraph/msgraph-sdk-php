<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Hashes implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $crc32Hash The CRC32 value of the file in little endian (if available). Read-only. */
    private ?string $crc32Hash = null;
    
    /** @var string|null $quickXorHash A proprietary hash of the file that can be used to determine if the contents of the file have changed (if available). Read-only. */
    private ?string $quickXorHash = null;
    
    /** @var string|null $sha1Hash SHA1 hash for the contents of the file (if available). Read-only. */
    private ?string $sha1Hash = null;
    
    /** @var string|null $sha256Hash SHA256 hash for the contents of the file (if available). Read-only. */
    private ?string $sha256Hash = null;
    
    /**
     * Instantiates a new hashes and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Hashes
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Hashes {
        return new Hashes();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the crc32Hash property value. The CRC32 value of the file in little endian (if available). Read-only.
     * @return string|null
    */
    public function getCrc32Hash(): ?string {
        return $this->crc32Hash;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'crc32Hash' => function (self $o, ParseNode $n) { $o->setCrc32Hash($n->getStringValue()); },
            'quickXorHash' => function (self $o, ParseNode $n) { $o->setQuickXorHash($n->getStringValue()); },
            'sha1Hash' => function (self $o, ParseNode $n) { $o->setSha1Hash($n->getStringValue()); },
            'sha256Hash' => function (self $o, ParseNode $n) { $o->setSha256Hash($n->getStringValue()); },
        ];
    }

    /**
     * Gets the quickXorHash property value. A proprietary hash of the file that can be used to determine if the contents of the file have changed (if available). Read-only.
     * @return string|null
    */
    public function getQuickXorHash(): ?string {
        return $this->quickXorHash;
    }

    /**
     * Gets the sha1Hash property value. SHA1 hash for the contents of the file (if available). Read-only.
     * @return string|null
    */
    public function getSha1Hash(): ?string {
        return $this->sha1Hash;
    }

    /**
     * Gets the sha256Hash property value. SHA256 hash for the contents of the file (if available). Read-only.
     * @return string|null
    */
    public function getSha256Hash(): ?string {
        return $this->sha256Hash;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('crc32Hash', $this->crc32Hash);
        $writer->writeStringValue('quickXorHash', $this->quickXorHash);
        $writer->writeStringValue('sha1Hash', $this->sha1Hash);
        $writer->writeStringValue('sha256Hash', $this->sha256Hash);
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
     * Sets the crc32Hash property value. The CRC32 value of the file in little endian (if available). Read-only.
     *  @param string|null $value Value to set for the crc32Hash property.
    */
    public function setCrc32Hash(?string $value ): void {
        $this->crc32Hash = $value;
    }

    /**
     * Sets the quickXorHash property value. A proprietary hash of the file that can be used to determine if the contents of the file have changed (if available). Read-only.
     *  @param string|null $value Value to set for the quickXorHash property.
    */
    public function setQuickXorHash(?string $value ): void {
        $this->quickXorHash = $value;
    }

    /**
     * Sets the sha1Hash property value. SHA1 hash for the contents of the file (if available). Read-only.
     *  @param string|null $value Value to set for the sha1Hash property.
    */
    public function setSha1Hash(?string $value ): void {
        $this->sha1Hash = $value;
    }

    /**
     * Sets the sha256Hash property value. SHA256 hash for the contents of the file (if available). Read-only.
     *  @param string|null $value Value to set for the sha256Hash property.
    */
    public function setSha256Hash(?string $value ): void {
        $this->sha256Hash = $value;
    }

}
