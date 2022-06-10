<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class Thumbnail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var StreamInterface|null $content The content stream for the thumbnail.
    */
    private ?StreamInterface $content = null;
    
    /**
     * @var int|null $height The height of the thumbnail, in pixels.
    */
    private ?int $height = null;
    
    /**
     * @var string|null $sourceItemId The unique identifier of the item that provided the thumbnail. This is only available when a folder thumbnail is requested.
    */
    private ?string $sourceItemId = null;
    
    /**
     * @var string|null $url The URL used to fetch the thumbnail content.
    */
    private ?string $url = null;
    
    /**
     * @var int|null $width The width of the thumbnail, in pixels.
    */
    private ?int $width = null;
    
    /**
     * Instantiates a new thumbnail and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the content property value. The content stream for the thumbnail.
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        return $this->content;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'content' => function (ParseNode $n) use ($o) { $o->setContent($n->getBinaryContent()); },
            'height' => function (ParseNode $n) use ($o) { $o->setHeight($n->getIntegerValue()); },
            'sourceItemId' => function (ParseNode $n) use ($o) { $o->setSourceItemId($n->getStringValue()); },
            'url' => function (ParseNode $n) use ($o) { $o->setUrl($n->getStringValue()); },
            'width' => function (ParseNode $n) use ($o) { $o->setWidth($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the height property value. The height of the thumbnail, in pixels.
     * @return int|null
    */
    public function getHeight(): ?int {
        return $this->height;
    }

    /**
     * Gets the sourceItemId property value. The unique identifier of the item that provided the thumbnail. This is only available when a folder thumbnail is requested.
     * @return string|null
    */
    public function getSourceItemId(): ?string {
        return $this->sourceItemId;
    }

    /**
     * Gets the url property value. The URL used to fetch the thumbnail content.
     * @return string|null
    */
    public function getUrl(): ?string {
        return $this->url;
    }

    /**
     * Gets the width property value. The width of the thumbnail, in pixels.
     * @return int|null
    */
    public function getWidth(): ?int {
        return $this->width;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBinaryContent('content', $this->content);
        $writer->writeIntegerValue('height', $this->height);
        $writer->writeStringValue('sourceItemId', $this->sourceItemId);
        $writer->writeStringValue('url', $this->url);
        $writer->writeIntegerValue('width', $this->width);
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
     * Sets the content property value. The content stream for the thumbnail.
     *  @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the height property value. The height of the thumbnail, in pixels.
     *  @param int|null $value Value to set for the height property.
    */
    public function setHeight(?int $value ): void {
        $this->height = $value;
    }

    /**
     * Sets the sourceItemId property value. The unique identifier of the item that provided the thumbnail. This is only available when a folder thumbnail is requested.
     *  @param string|null $value Value to set for the sourceItemId property.
    */
    public function setSourceItemId(?string $value ): void {
        $this->sourceItemId = $value;
    }

    /**
     * Sets the url property value. The URL used to fetch the thumbnail content.
     *  @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value ): void {
        $this->url = $value;
    }

    /**
     * Sets the width property value. The width of the thumbnail, in pixels.
     *  @param int|null $value Value to set for the width property.
    */
    public function setWidth(?int $value ): void {
        $this->width = $value;
    }

}
