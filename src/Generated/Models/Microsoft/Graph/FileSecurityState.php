<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FileSecurityState implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var FileHash|null $fileHash Complex type containing file hashes (cryptographic and location-sensitive). */
    private ?FileHash $fileHash = null;
    
    /** @var string|null $name File name (without path). */
    private ?string $name = null;
    
    /** @var string|null $path Full file path of the file/imageFile. */
    private ?string $path = null;
    
    /** @var string|null $riskScore Provider generated/calculated risk score of the alert file. Recommended value range of 0-1, which equates to a percentage. */
    private ?string $riskScore = null;
    
    /**
     * Instantiates a new fileSecurityState and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileSecurityState
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): FileSecurityState {
        return new FileSecurityState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'fileHash' => function (self $o, ParseNode $n) { $o->setFileHash($n->getObjectValue(FileHash::class)); },
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'path' => function (self $o, ParseNode $n) { $o->setPath($n->getStringValue()); },
            'riskScore' => function (self $o, ParseNode $n) { $o->setRiskScore($n->getStringValue()); },
        ];
    }

    /**
     * Gets the fileHash property value. Complex type containing file hashes (cryptographic and location-sensitive).
     * @return FileHash|null
    */
    public function getFileHash(): ?FileHash {
        return $this->fileHash;
    }

    /**
     * Gets the name property value. File name (without path).
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the path property value. Full file path of the file/imageFile.
     * @return string|null
    */
    public function getPath(): ?string {
        return $this->path;
    }

    /**
     * Gets the riskScore property value. Provider generated/calculated risk score of the alert file. Recommended value range of 0-1, which equates to a percentage.
     * @return string|null
    */
    public function getRiskScore(): ?string {
        return $this->riskScore;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('fileHash', $this->fileHash);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('path', $this->path);
        $writer->writeStringValue('riskScore', $this->riskScore);
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
     * Sets the fileHash property value. Complex type containing file hashes (cryptographic and location-sensitive).
     *  @param FileHash|null $value Value to set for the fileHash property.
    */
    public function setFileHash(?FileHash $value ): void {
        $this->fileHash = $value;
    }

    /**
     * Sets the name property value. File name (without path).
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the path property value. Full file path of the file/imageFile.
     *  @param string|null $value Value to set for the path property.
    */
    public function setPath(?string $value ): void {
        $this->path = $value;
    }

    /**
     * Sets the riskScore property value. Provider generated/calculated risk score of the alert file. Recommended value range of 0-1, which equates to a percentage.
     *  @param string|null $value Value to set for the riskScore property.
    */
    public function setRiskScore(?string $value ): void {
        $this->riskScore = $value;
    }

}
