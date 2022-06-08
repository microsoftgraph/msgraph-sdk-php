<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookComment extends Entity implements Parsable 
{
    /**
     * @var string|null $content The content of the comment.
    */
    private ?string $content = null;
    
    /**
     * @var string|null $contentType Indicates the type for the comment.
    */
    private ?string $contentType = null;
    
    /**
     * @var array<WorkbookCommentReply>|null $replies Read-only. Nullable.
    */
    private ?array $replies = null;
    
    /**
     * Instantiates a new workbookComment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookComment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookComment {
        return new WorkbookComment();
    }

    /**
     * Gets the content property value. The content of the comment.
     * @return string|null
    */
    public function getContent(): ?string {
        return $this->content;
    }

    /**
     * Gets the contentType property value. Indicates the type for the comment.
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
            'replies' => function (ParseNode $n) use ($o) { $o->setReplies($n->getCollectionOfObjectValues(array(WorkbookCommentReply::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the replies property value. Read-only. Nullable.
     * @return array<WorkbookCommentReply>|null
    */
    public function getReplies(): ?array {
        return $this->replies;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('content', $this->content);
        $writer->writeStringValue('contentType', $this->contentType);
        $writer->writeCollectionOfObjectValues('replies', $this->replies);
    }

    /**
     * Sets the content property value. The content of the comment.
     *  @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the contentType property value. Indicates the type for the comment.
     *  @param string|null $value Value to set for the contentType property.
    */
    public function setContentType(?string $value ): void {
        $this->contentType = $value;
    }

    /**
     * Sets the replies property value. Read-only. Nullable.
     *  @param array<WorkbookCommentReply>|null $value Value to set for the replies property.
    */
    public function setReplies(?array $value ): void {
        $this->replies = $value;
    }

}
