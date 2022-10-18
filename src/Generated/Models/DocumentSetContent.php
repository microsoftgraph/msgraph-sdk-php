<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DocumentSetContent implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ContentTypeInfo|null $contentType Content type information of the file.
    */
    private ?ContentTypeInfo $contentType = null;
    
    /**
     * @var string|null $fileName Name of the file in resource folder that should be added as a default content or a template in the document set.
    */
    private ?string $fileName = null;
    
    /**
     * @var string|null $folderName Folder name in which the file will be placed when a new document set is created in the library.
    */
    private ?string $folderName = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new documentSetContent and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.documentSetContent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DocumentSetContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DocumentSetContent {
        return new DocumentSetContent();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the contentType property value. Content type information of the file.
     * @return ContentTypeInfo|null
    */
    public function getContentType(): ?ContentTypeInfo {
        return $this->contentType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getObjectValue([ContentTypeInfo::class, 'createFromDiscriminatorValue'])),
            'fileName' => fn(ParseNode $n) => $o->setFileName($n->getStringValue()),
            'folderName' => fn(ParseNode $n) => $o->setFolderName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the fileName property value. Name of the file in resource folder that should be added as a default content or a template in the document set.
     * @return string|null
    */
    public function getFileName(): ?string {
        return $this->fileName;
    }

    /**
     * Gets the folderName property value. Folder name in which the file will be placed when a new document set is created in the library.
     * @return string|null
    */
    public function getFolderName(): ?string {
        return $this->folderName;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('contentType', $this->contentType);
        $writer->writeStringValue('fileName', $this->fileName);
        $writer->writeStringValue('folderName', $this->folderName);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the contentType property value. Content type information of the file.
     *  @param ContentTypeInfo|null $value Value to set for the contentType property.
    */
    public function setContentType(?ContentTypeInfo $value ): void {
        $this->contentType = $value;
    }

    /**
     * Sets the fileName property value. Name of the file in resource folder that should be added as a default content or a template in the document set.
     *  @param string|null $value Value to set for the fileName property.
    */
    public function setFileName(?string $value ): void {
        $this->fileName = $value;
    }

    /**
     * Sets the folderName property value. Folder name in which the file will be placed when a new document set is created in the library.
     *  @param string|null $value Value to set for the folderName property.
    */
    public function setFolderName(?string $value ): void {
        $this->folderName = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
