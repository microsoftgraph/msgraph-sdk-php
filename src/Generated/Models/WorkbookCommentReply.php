<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookCommentReply extends Entity implements Parsable 
{
    /**
     * @var string|null $content The content of replied comment.
    */
    private ?string $content = null;
    
    /**
     * @var string|null $contentType Indicates the type for the replied comment.
    */
    private ?string $contentType = null;
    
    /**
     * Instantiates a new workbookCommentReply and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookCommentReply
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookCommentReply {
        return new WorkbookCommentReply();
    }

    /**
     * Gets the content property value. The content of replied comment.
     * @return string|null
    */
    public function getContent(): ?string {
        return $this->content;
    }

    /**
     * Gets the contentType property value. Indicates the type for the replied comment.
     * @return string|null
    */
    public function getContentType(): ?string {
        return $this->contentType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => function (ParseNode $n) use ($o) { $o->setContent($n->getStringValue()); },
            'contentType' => function (ParseNode $n) use ($o) { $o->setContentType($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('content', $this->content);
        $writer->writeStringValue('contentType', $this->contentType);
    }

    /**
     * Sets the content property value. The content of replied comment.
     *  @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the contentType property value. Indicates the type for the replied comment.
     *  @param string|null $value Value to set for the contentType property.
    */
    public function setContentType(?string $value ): void {
        $this->contentType = $value;
    }

}
