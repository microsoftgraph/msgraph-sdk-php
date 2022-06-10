<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class OnenoteResource extends OnenoteEntityBaseModel implements Parsable 
{
    /**
     * @var StreamInterface|null $content The content stream
    */
    private ?StreamInterface $content = null;
    
    /**
     * @var string|null $contentUrl The URL for downloading the content
    */
    private ?string $contentUrl = null;
    
    /**
     * Instantiates a new OnenoteResource and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnenoteResource
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnenoteResource {
        return new OnenoteResource();
    }

    /**
     * Gets the content property value. The content stream
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        return $this->content;
    }

    /**
     * Gets the contentUrl property value. The URL for downloading the content
     * @return string|null
    */
    public function getContentUrl(): ?string {
        return $this->contentUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => function (ParseNode $n) use ($o) { $o->setContent($n->getBinaryContent()); },
            'contentUrl' => function (ParseNode $n) use ($o) { $o->setContentUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('content', $this->content);
        $writer->writeStringValue('contentUrl', $this->contentUrl);
    }

    /**
     * Sets the content property value. The content stream
     *  @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the contentUrl property value. The URL for downloading the content
     *  @param string|null $value Value to set for the contentUrl property.
    */
    public function setContentUrl(?string $value ): void {
        $this->contentUrl = $value;
    }

}
