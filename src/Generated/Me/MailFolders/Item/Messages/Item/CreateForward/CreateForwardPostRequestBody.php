<?php

namespace Microsoft\Graph\Me\MailFolders\Item\Messages\Item\CreateForward;

use Microsoft\Graph\Models\Message;
use Microsoft\Graph\Models\Recipient;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateForwardPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $Comment The Comment property
    */
    private ?string $comment = null;
    
    /**
     * @var Message|null $Message The Message property
    */
    private ?Message $message = null;
    
    /**
     * @var array<Recipient>|null $ToRecipients The ToRecipients property
    */
    private ?array $toRecipients = null;
    
    /**
     * Instantiates a new createForwardPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateForwardPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CreateForwardPostRequestBody {
        return new CreateForwardPostRequestBody();
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
        $o = $this;
        return  [
            'comment' => function (ParseNode $n) use ($o) { $o->setComment($n->getStringValue()); },
            'message' => function (ParseNode $n) use ($o) { $o->setMessage($n->getObjectValue(array(Message::class, 'createFromDiscriminatorValue'))); },
            'toRecipients' => function (ParseNode $n) use ($o) { $o->setToRecipients($n->getCollectionOfObjectValues(array(Recipient::class, 'createFromDiscriminatorValue'))); },
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
     * Gets the toRecipients property value. The ToRecipients property
     * @return array<Recipient>|null
    */
    public function getToRecipients(): ?array {
        return $this->toRecipients;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('comment', $this->comment);
        $writer->writeObjectValue('message', $this->message);
        $writer->writeCollectionOfObjectValues('toRecipients', $this->toRecipients);
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

    /**
     * Sets the toRecipients property value. The ToRecipients property
     *  @param array<Recipient>|null $value Value to set for the ToRecipients property.
    */
    public function setToRecipients(?array $value ): void {
        $this->toRecipients = $value;
    }

}
