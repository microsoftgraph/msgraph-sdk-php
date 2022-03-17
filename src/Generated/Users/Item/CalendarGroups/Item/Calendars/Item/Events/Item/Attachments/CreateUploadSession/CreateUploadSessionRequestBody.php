<?php

namespace Microsoft\Graph\Generated\Users\Item\CalendarGroups\Item\Calendars\Item\Events\Item\Attachments\CreateUploadSession;

use Microsoft\Graph\Generated\Models\Microsoft\Graph\AttachmentItem;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CreateUploadSessionRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var AttachmentItem|null $AttachmentItem  */
    private ?AttachmentItem $attachmentItem = null;
    
    /**
     * Instantiates a new createUploadSessionRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CreateUploadSessionRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CreateUploadSessionRequestBody {
        return new CreateUploadSessionRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the attachmentItem property value. 
     * @return AttachmentItem|null
    */
    public function getAttachmentItem(): ?AttachmentItem {
        return $this->attachmentItem;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'attachmentItem' => function (self $o, ParseNode $n) { $o->setAttachmentItem($n->getObjectValue(AttachmentItem::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('attachmentItem', $this->attachmentItem);
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
     * Sets the attachmentItem property value. 
     *  @param AttachmentItem|null $value Value to set for the AttachmentItem property.
    */
    public function setAttachmentItem(?AttachmentItem $value ): void {
        $this->attachmentItem = $value;
    }

}
