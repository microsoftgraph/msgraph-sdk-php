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

class Thumbnail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new thumbnail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Thumbnail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Thumbnail {
        return new Thumbnail();
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
     * Gets the content property value. The content stream for the thumbnail.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        return $this->getBackingStore()->get('content');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'content' => fn(ParseNode $n) => $o->setContent($n->getBinaryContent()),
            'height' => fn(ParseNode $n) => $o->setHeight($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sourceItemId' => fn(ParseNode $n) => $o->setSourceItemId($n->getStringValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
            'width' => fn(ParseNode $n) => $o->setWidth($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the height property value. The height of the thumbnail, in pixels.
     * @return int|null
    */
    public function getHeight(): ?int {
        return $this->getBackingStore()->get('height');
    }

    /**
     * Gets the @odata.type property value. 
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the sourceItemId property value. The unique identifier of the item that provided the thumbnail. This is only available when a folder thumbnail is requested.
     * @return string|null
    */
    public function getSourceItemId(): ?string {
        return $this->getBackingStore()->get('sourceItemId');
    }

    /**
     * Gets the url property value. The URL used to fetch the thumbnail content.
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->getBackingStore()->get('url');
    }

    /**
     * Gets the width property value. The width of the thumbnail, in pixels.
     * @return int|null
    */
    public function getWidth(): ?int {
        return $this->getBackingStore()->get('width');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('content', $this->getContent());
        $writer->writeIntegerValue('height', $this->getHeight());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('sourceItemId', $this->getSourceItemId());
        $writer->writeStringValue('url', $this->getUrl());
        $writer->writeIntegerValue('width', $this->getWidth());
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
     * Sets the content property value. The content stream for the thumbnail.
     * @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the height property value. The height of the thumbnail, in pixels.
     * @param int|null $value Value to set for the height property.
    */
    public function setHeight(?int $value): void {
        $this->getBackingStore()->set('height', $value);
    }

    /**
     * Sets the @odata.type property value. 
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sourceItemId property value. The unique identifier of the item that provided the thumbnail. This is only available when a folder thumbnail is requested.
     * @param string|null $value Value to set for the sourceItemId property.
    */
    public function setSourceItemId(?string $value): void {
        $this->getBackingStore()->set('sourceItemId', $value);
    }

    /**
     * Sets the url property value. The URL used to fetch the thumbnail content.
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->getBackingStore()->set('url', $value);
    }

    /**
     * Sets the width property value. The width of the thumbnail, in pixels.
     * @param int|null $value Value to set for the width property.
    */
    public function setWidth(?int $value): void {
        $this->getBackingStore()->set('width', $value);
    }

}
