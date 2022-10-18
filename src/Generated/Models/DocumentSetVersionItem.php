<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DocumentSetVersionItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $itemId The unique identifier for the item.
    */
    private ?string $itemId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $title The title of the item.
    */
    private ?string $title = null;
    
    /**
     * @var string|null $versionId The version ID of the item.
    */
    private ?string $versionId = null;
    
    /**
     * Instantiates a new documentSetVersionItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.documentSetVersionItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DocumentSetVersionItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DocumentSetVersionItem {
        return new DocumentSetVersionItem();
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
            'itemId' => fn(ParseNode $n) => $o->setItemId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'title' => fn(ParseNode $n) => $o->setTitle($n->getStringValue()),
            'versionId' => fn(ParseNode $n) => $o->setVersionId($n->getStringValue()),
        ];
    }

    /**
     * Gets the itemId property value. The unique identifier for the item.
     * @return string|null
    */
    public function getItemId(): ?string {
        return $this->itemId;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the title property value. The title of the item.
     * @return string|null
    */
    public function getTitle(): ?string {
        return $this->title;
    }

    /**
     * Gets the versionId property value. The version ID of the item.
     * @return string|null
    */
    public function getVersionId(): ?string {
        return $this->versionId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('itemId', $this->itemId);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('title', $this->title);
        $writer->writeStringValue('versionId', $this->versionId);
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
     * Sets the itemId property value. The unique identifier for the item.
     *  @param string|null $value Value to set for the itemId property.
    */
    public function setItemId(?string $value ): void {
        $this->itemId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the title property value. The title of the item.
     *  @param string|null $value Value to set for the title property.
    */
    public function setTitle(?string $value ): void {
        $this->title = $value;
    }

    /**
     * Sets the versionId property value. The version ID of the item.
     *  @param string|null $value Value to set for the versionId property.
    */
    public function setVersionId(?string $value ): void {
        $this->versionId = $value;
    }

}
