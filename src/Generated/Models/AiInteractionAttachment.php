<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AiInteractionAttachment extends Entity implements Parsable 
{
    /**
     * Instantiates a new AiInteractionAttachment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AiInteractionAttachment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AiInteractionAttachment {
        return new AiInteractionAttachment();
    }

    /**
     * Gets the attachmentId property value. The identifier for the attachment. This identifier is only unique within the message scope.
     * @return string|null
    */
    public function getAttachmentId(): ?string {
        $val = $this->getBackingStore()->get('attachmentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attachmentId'");
    }

    /**
     * Gets the content property value. The content of the attachment.
     * @return string|null
    */
    public function getContent(): ?string {
        $val = $this->getBackingStore()->get('content');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'content'");
    }

    /**
     * Gets the contentType property value. The type of the content. For example, reference, file, and image/imageType.
     * @return string|null
    */
    public function getContentType(): ?string {
        $val = $this->getBackingStore()->get('contentType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentType'");
    }

    /**
     * Gets the contentUrl property value. The URL of the content.
     * @return string|null
    */
    public function getContentUrl(): ?string {
        $val = $this->getBackingStore()->get('contentUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'attachmentId' => fn(ParseNode $n) => $o->setAttachmentId($n->getStringValue()),
            'content' => fn(ParseNode $n) => $o->setContent($n->getStringValue()),
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getStringValue()),
            'contentUrl' => fn(ParseNode $n) => $o->setContentUrl($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the name property value. The name of the attachment.
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('attachmentId', $this->getAttachmentId());
        $writer->writeStringValue('content', $this->getContent());
        $writer->writeStringValue('contentType', $this->getContentType());
        $writer->writeStringValue('contentUrl', $this->getContentUrl());
        $writer->writeStringValue('name', $this->getName());
    }

    /**
     * Sets the attachmentId property value. The identifier for the attachment. This identifier is only unique within the message scope.
     * @param string|null $value Value to set for the attachmentId property.
    */
    public function setAttachmentId(?string $value): void {
        $this->getBackingStore()->set('attachmentId', $value);
    }

    /**
     * Sets the content property value. The content of the attachment.
     * @param string|null $value Value to set for the content property.
    */
    public function setContent(?string $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the contentType property value. The type of the content. For example, reference, file, and image/imageType.
     * @param string|null $value Value to set for the contentType property.
    */
    public function setContentType(?string $value): void {
        $this->getBackingStore()->set('contentType', $value);
    }

    /**
     * Sets the contentUrl property value. The URL of the content.
     * @param string|null $value Value to set for the contentUrl property.
    */
    public function setContentUrl(?string $value): void {
        $this->getBackingStore()->set('contentUrl', $value);
    }

    /**
     * Sets the name property value. The name of the attachment.
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

}
