<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class FolderView implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $sortBy The method by which the folder should be sorted.
    */
    private ?string $sortBy = null;
    
    /**
     * @var string|null $sortOrder If true, indicates that items should be sorted in descending order. Otherwise, items should be sorted ascending.
    */
    private ?string $sortOrder = null;
    
    /**
     * @var string|null $viewType The type of view that should be used to represent the folder.
    */
    private ?string $viewType = null;
    
    /**
     * Instantiates a new folderView and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.folderView');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FolderView
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FolderView {
        return new FolderView();
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
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'sortBy' => function (ParseNode $n) use ($o) { $o->setSortBy($n->getStringValue()); },
            'sortOrder' => function (ParseNode $n) use ($o) { $o->setSortOrder($n->getStringValue()); },
            'viewType' => function (ParseNode $n) use ($o) { $o->setViewType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the sortBy property value. The method by which the folder should be sorted.
     * @return string|null
    */
    public function getSortBy(): ?string {
        return $this->sortBy;
    }

    /**
     * Gets the sortOrder property value. If true, indicates that items should be sorted in descending order. Otherwise, items should be sorted ascending.
     * @return string|null
    */
    public function getSortOrder(): ?string {
        return $this->sortOrder;
    }

    /**
     * Gets the viewType property value. The type of view that should be used to represent the folder.
     * @return string|null
    */
    public function getViewType(): ?string {
        return $this->viewType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('sortBy', $this->sortBy);
        $writer->writeStringValue('sortOrder', $this->sortOrder);
        $writer->writeStringValue('viewType', $this->viewType);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the sortBy property value. The method by which the folder should be sorted.
     *  @param string|null $value Value to set for the sortBy property.
    */
    public function setSortBy(?string $value ): void {
        $this->sortBy = $value;
    }

    /**
     * Sets the sortOrder property value. If true, indicates that items should be sorted in descending order. Otherwise, items should be sorted ascending.
     *  @param string|null $value Value to set for the sortOrder property.
    */
    public function setSortOrder(?string $value ): void {
        $this->sortOrder = $value;
    }

    /**
     * Sets the viewType property value. The type of view that should be used to represent the folder.
     *  @param string|null $value Value to set for the viewType property.
    */
    public function setViewType(?string $value ): void {
        $this->viewType = $value;
    }

}
