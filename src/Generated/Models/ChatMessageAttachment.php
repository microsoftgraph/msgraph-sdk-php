<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChatMessageAttachment implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $content The content of the attachment. If the attachment is a rich card, set the property to the rich card object. This property and contentUrl are mutually exclusive.
    */
    private ?string $content = null;
    
    /**
     * @var string|null $contentType The media type of the content attachment. It can have the following values: reference: Attachment is a link to another file. Populate the contentURL with the link to the object.Any contentTypes supported by the Bot Framework's Attachment objectapplication/vnd.microsoft.card.codesnippet: A code snippet. application/vnd.microsoft.card.announcement: An announcement header.
    */
    private ?string $contentType = null;
    
    /**
     * @var string|null $contentUrl URL for the content of the attachment. Supported protocols: http, https, file and data.
    */
    private ?string $contentUrl = null;
    
    /**
     * @var string|null $id Read-only. Unique id of the attachment.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $name Name of the attachment.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $thumbnailUrl URL to a thumbnail image that the channel can use if it supports using an alternative, smaller form of content or contentUrl. For example, if you set contentType to application/word and set contentUrl to the location of the Word document, you might include a thumbnail image that represents the document. The channel could display the thumbnail image instead of the document. When the user clicks the image, the channel would open the document.
    */
    private ?string $thumbnailUrl = null;
    
    /**
     * Instantiates a new chatMessageAttachment and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChatMessageAttachment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChatMessageAttachment {
        return new ChatMessageAttachment();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the content property value. The content of the attachment. If the attachment is a rich card, set the property to the rich card object. This property and contentUrl are mutually exclusive.
     * @return string|null
    */
    public function getContent(): ?string {
        return $this->content;
    }

    /**
     * Gets the contentType property value. The media type of the content attachment. It can have the following values: reference: Attachment is a link to another file. Populate the contentURL with the link to the object.Any contentTypes supported by the Bot Framework's Attachment objectapplication/vnd.microsoft.card.codesnippet: A code snippet. application/vnd.microsoft.card.announcement: An announcement header.
     * @return string|null
    */
    public function getContentType(): ?string {
        return $this->contentType;
    }

    /**
     * Gets the contentUrl property value. URL for the content of the attachment. Supported protocols: http, https, file and data.
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
        return  [
            'content' => function (ParseNode $n) use ($o) { $o->setContent($n->getStringValue()); },
            'contentType' => function (ParseNode $n) use ($o) { $o->setContentType($n->getStringValue()); },
            'contentUrl' => function (ParseNode $n) use ($o) { $o->setContentUrl($n->getStringValue()); },
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'thumbnailUrl' => function (ParseNode $n) use ($o) { $o->setThumbnailUrl($n->getStringValue()); },
        ];
    }

    /**
     * Gets the id property value. Read-only. Unique id of the attachment.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the name property value. Name of the attachment.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the thumbnailUrl property value. URL to a thumbnail image that the channel can use if it supports using an alternative, smaller form of content or contentUrl. For example, if you set contentType to application/word and set contentUrl to the location of the Word document, you might include a thumbnail image that represents the document. The channel could display the thumbnail image instead of the document. When the user clicks the image, the channel would open the document.
     * @return string|null
    */
    public function getThumbnailUrl(): ?string {
        return $this->thumbnailUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('content', $this->content);
        $writer->writeStringValue('contentType', $this->contentType);
        $writer->writeStringValue('contentUrl', $this->contentUrl);
        $writer->writeStringValue('id', $this->id);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('thumbnailUrl', $this->thumbnailUrl);
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
     * Sets the content property value. The content of the attachment. If the attachment is a rich card, set the property to the rich card object. This property and contentUrl are mutually exclusive.
     *  @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the contentType property value. The media type of the content attachment. It can have the following values: reference: Attachment is a link to another file. Populate the contentURL with the link to the object.Any contentTypes supported by the Bot Framework's Attachment objectapplication/vnd.microsoft.card.codesnippet: A code snippet. application/vnd.microsoft.card.announcement: An announcement header.
     *  @param string|null $value Value to set for the contentType property.
    */
    public function setContentType(?string $value ): void {
        $this->contentType = $value;
    }

    /**
     * Sets the contentUrl property value. URL for the content of the attachment. Supported protocols: http, https, file and data.
     *  @param string|null $value Value to set for the contentUrl property.
    */
    public function setContentUrl(?string $value ): void {
        $this->contentUrl = $value;
    }

    /**
     * Sets the id property value. Read-only. Unique id of the attachment.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the name property value. Name of the attachment.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the thumbnailUrl property value. URL to a thumbnail image that the channel can use if it supports using an alternative, smaller form of content or contentUrl. For example, if you set contentType to application/word and set contentUrl to the location of the Word document, you might include a thumbnail image that represents the document. The channel could display the thumbnail image instead of the document. When the user clicks the image, the channel would open the document.
     *  @param string|null $value Value to set for the thumbnailUrl property.
    */
    public function setThumbnailUrl(?string $value ): void {
        $this->thumbnailUrl = $value;
    }

}
