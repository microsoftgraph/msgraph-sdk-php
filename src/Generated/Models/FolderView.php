<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class FolderView implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new folderView and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sortBy' => fn(ParseNode $n) => $o->setSortBy($n->getStringValue()),
            'sortOrder' => fn(ParseNode $n) => $o->setSortOrder($n->getStringValue()),
            'viewType' => fn(ParseNode $n) => $o->setViewType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the sortBy property value. The method by which the folder should be sorted.
     * @return string|null
    */
    public function getSortBy(): ?string {
        return $this->getBackingStore()->get('sortBy');
    }

    /**
     * Gets the sortOrder property value. If true, indicates that items should be sorted in descending order. Otherwise, items should be sorted ascending.
     * @return string|null
    */
    public function getSortOrder(): ?string {
        return $this->getBackingStore()->get('sortOrder');
    }

    /**
     * Gets the viewType property value. The type of view that should be used to represent the folder.
     * @return string|null
    */
    public function getViewType(): ?string {
        return $this->getBackingStore()->get('viewType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('sortBy', $this->getSortBy());
        $writer->writeStringValue('sortOrder', $this->getSortOrder());
        $writer->writeStringValue('viewType', $this->getViewType());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sortBy property value. The method by which the folder should be sorted.
     * @param string|null $value Value to set for the sortBy property.
    */
    public function setSortBy(?string $value): void {
        $this->getBackingStore()->set('sortBy', $value);
    }

    /**
     * Sets the sortOrder property value. If true, indicates that items should be sorted in descending order. Otherwise, items should be sorted ascending.
     * @param string|null $value Value to set for the sortOrder property.
    */
    public function setSortOrder(?string $value): void {
        $this->getBackingStore()->set('sortOrder', $value);
    }

    /**
     * Sets the viewType property value. The type of view that should be used to represent the folder.
     * @param string|null $value Value to set for the viewType property.
    */
    public function setViewType(?string $value): void {
        $this->getBackingStore()->set('viewType', $value);
    }

}
