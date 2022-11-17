<?php

namespace Microsoft\Graph\Generated\Me\Drives\Item\Items\Item\Preview;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PreviewPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new previewPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PreviewPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PreviewPostRequestBody {
        return new PreviewPostRequestBody();
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
            'page' => fn(ParseNode $n) => $o->setPage($n->getStringValue()),
            'zoom' => fn(ParseNode $n) => $o->setZoom($n->getFloatValue()),
        ];
    }

    /**
     * Gets the page property value. The page property
     * @return string|null
    */
    public function getPage(): ?string {
        return $this->getBackingStore()->get('page');
    }

    /**
     * Gets the zoom property value. The zoom property
     * @return float|null
    */
    public function getZoom(): ?float {
        return $this->getBackingStore()->get('zoom');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('page', $this->getPage());
        $writer->writeFloatValue('zoom', $this->getZoom());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the page property value. The page property
     *  @param string|null $value Value to set for the page property.
    */
    public function setPage(?string $value): void {
        $this->getBackingStore()->set('page', $value);
    }

    /**
     * Sets the zoom property value. The zoom property
     *  @param float|null $value Value to set for the zoom property.
    */
    public function setZoom(?float $value): void {
        $this->getBackingStore()->set('zoom', $value);
    }

}
