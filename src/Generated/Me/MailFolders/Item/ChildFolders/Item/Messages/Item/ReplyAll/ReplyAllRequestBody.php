<?php

namespace Microsoft\Graph\Generated\Me\MailFolders\Item\ChildFolders\Item\Messages\Item\ReplyAll;

use Microsoft\Graph\Generated\Models\Message;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ReplyAllRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $Comment The Comment property */
    private ?string $comment = null;
    
    /** @var Message|null $Message The Message property */
    private ?Message $message = null;
    
    /**
     * Instantiates a new replyAllRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReplyAllRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ReplyAllRequestBody {
        return new ReplyAllRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the comment property value. The Comment property
     * @return string|null
    */
    public function getComment(): ?string {
        return $this->comment;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'comment' => function (self $o, ParseNode $n) { $o->setComment($n->getStringValue()); },
            'message' => function (self $o, ParseNode $n) { $o->setMessage($n->getObjectValue(Message::class)); },
        ];
    }

    /**
     * Gets the message property value. The Message property
     * @return Message|null
    */
    public function getMessage(): ?Message {
        return $this->message;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('comment', $this->comment);
        $writer->writeObjectValue('message', $this->message);
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
     * Sets the comment property value. The Comment property
     *  @param string|null $value Value to set for the Comment property.
    */
    public function setComment(?string $value ): void {
        $this->comment = $value;
    }

    /**
     * Sets the message property value. The Message property
     *  @param Message|null $value Value to set for the Message property.
    */
    public function setMessage(?Message $value ): void {
        $this->message = $value;
    }

}
