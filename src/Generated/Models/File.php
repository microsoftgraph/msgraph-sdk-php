<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class File implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Hashes|null $hashes Hashes of the file's binary content, if available. Read-only.
    */
    private ?Hashes $hashes = null;
    
    /**
     * @var string|null $mimeType The MIME type for the file. This is determined by logic on the server and might not be the value provided when the file was uploaded. Read-only.
    */
    private ?string $mimeType = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var bool|null $processingMetadata The processingMetadata property
    */
    private ?bool $processingMetadata = null;
    
    /**
     * Instantiates a new file and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.file');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return File
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): File {
        return new File();
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
        $o = $this;
        return  [
            'hashes' => fn(ParseNode $n) => $o->setHashes($n->getObjectValue([Hashes::class, 'createFromDiscriminatorValue'])),
            'mimeType' => fn(ParseNode $n) => $o->setMimeType($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'processingMetadata' => fn(ParseNode $n) => $o->setProcessingMetadata($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the hashes property value. Hashes of the file's binary content, if available. Read-only.
     * @return Hashes|null
    */
    public function getHashes(): ?Hashes {
        return $this->hashes;
    }

    /**
     * Gets the mimeType property value. The MIME type for the file. This is determined by logic on the server and might not be the value provided when the file was uploaded. Read-only.
     * @return string|null
    */
    public function getMimeType(): ?string {
        return $this->mimeType;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the processingMetadata property value. The processingMetadata property
     * @return bool|null
    */
    public function getProcessingMetadata(): ?bool {
        return $this->processingMetadata;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('hashes', $this->hashes);
        $writer->writeStringValue('mimeType', $this->mimeType);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeBooleanValue('processingMetadata', $this->processingMetadata);
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
     * Sets the hashes property value. Hashes of the file's binary content, if available. Read-only.
     *  @param Hashes|null $value Value to set for the hashes property.
    */
    public function setHashes(?Hashes $value ): void {
        $this->hashes = $value;
    }

    /**
     * Sets the mimeType property value. The MIME type for the file. This is determined by logic on the server and might not be the value provided when the file was uploaded. Read-only.
     *  @param string|null $value Value to set for the mimeType property.
    */
    public function setMimeType(?string $value ): void {
        $this->mimeType = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the processingMetadata property value. The processingMetadata property
     *  @param bool|null $value Value to set for the processingMetadata property.
    */
    public function setProcessingMetadata(?bool $value ): void {
        $this->processingMetadata = $value;
    }

}
