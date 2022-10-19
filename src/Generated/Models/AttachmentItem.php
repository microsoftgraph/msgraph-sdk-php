<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AttachmentItem implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AttachmentType|null $attachmentType The type of attachment. Possible values are: file, item, reference. Required.
    */
    private ?AttachmentType $attachmentType = null;
    
    /**
     * @var string|null $contentId The CID or Content-Id of the attachment for referencing in case of in-line attachments using <img src='cid:contentId'> tag in HTML messages. Optional.
    */
    private ?string $contentId = null;
    
    /**
     * @var string|null $contentType The nature of the data in the attachment. Optional.
    */
    private ?string $contentType = null;
    
    /**
     * @var bool|null $isInline true if the attachment is an inline attachment; otherwise, false. Optional.
    */
    private ?bool $isInline = null;
    
    /**
     * @var string|null $name The display name of the attachment. This can be a descriptive string and does not have to be the actual file name. Required.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $size The length of the attachment in bytes. Required.
    */
    private ?int $size = null;
    
    /**
     * Instantiates a new attachmentItem and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.attachmentItem');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttachmentItem
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttachmentItem {
        return new AttachmentItem();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the attachmentType property value. The type of attachment. Possible values are: file, item, reference. Required.
     * @return AttachmentType|null
    */
    public function getAttachmentType(): ?AttachmentType {
        return $this->attachmentType;
    }

    /**
     * Gets the contentId property value. The CID or Content-Id of the attachment for referencing in case of in-line attachments using <img src='cid:contentId'> tag in HTML messages. Optional.
     * @return string|null
    */
    public function getContentId(): ?string {
        return $this->contentId;
    }

    /**
     * Gets the contentType property value. The nature of the data in the attachment. Optional.
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
        return  [
            'attachmentType' => fn(ParseNode $n) => $o->setAttachmentType($n->getEnumValue(AttachmentType::class)),
            'contentId' => fn(ParseNode $n) => $o->setContentId($n->getStringValue()),
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getStringValue()),
            'isInline' => fn(ParseNode $n) => $o->setIsInline($n->getBooleanValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'size' => fn(ParseNode $n) => $o->setSize($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the isInline property value. true if the attachment is an inline attachment; otherwise, false. Optional.
     * @return bool|null
    */
    public function getIsInline(): ?bool {
        return $this->isInline;
    }

    /**
     * Gets the name property value. The display name of the attachment. This can be a descriptive string and does not have to be the actual file name. Required.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the size property value. The length of the attachment in bytes. Required.
     * @return int|null
    */
    public function getSize(): ?int {
        return $this->size;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('attachmentType', $this->attachmentType);
        $writer->writeStringValue('contentId', $this->contentId);
        $writer->writeStringValue('contentType', $this->contentType);
        $writer->writeBooleanValue('isInline', $this->isInline);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('size', $this->size);
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
     * Sets the attachmentType property value. The type of attachment. Possible values are: file, item, reference. Required.
     *  @param AttachmentType|null $value Value to set for the attachmentType property.
    */
    public function setAttachmentType(?AttachmentType $value ): void {
        $this->attachmentType = $value;
    }

    /**
     * Sets the contentId property value. The CID or Content-Id of the attachment for referencing in case of in-line attachments using <img src='cid:contentId'> tag in HTML messages. Optional.
     *  @param string|null $value Value to set for the contentId property.
    */
    public function setContentId(?string $value ): void {
        $this->contentId = $value;
    }

    /**
     * Sets the contentType property value. The nature of the data in the attachment. Optional.
     *  @param string|null $value Value to set for the contentType property.
    */
    public function setContentType(?string $value ): void {
        $this->contentType = $value;
    }

    /**
     * Sets the isInline property value. true if the attachment is an inline attachment; otherwise, false. Optional.
     *  @param bool|null $value Value to set for the isInline property.
    */
    public function setIsInline(?bool $value ): void {
        $this->isInline = $value;
    }

    /**
     * Sets the name property value. The display name of the attachment. This can be a descriptive string and does not have to be the actual file name. Required.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the size property value. The length of the attachment in bytes. Required.
     *  @param int|null $value Value to set for the size property.
    */
    public function setSize(?int $value ): void {
        $this->size = $value;
    }

}
