<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class FileAttachment extends Attachment implements Parsable 
{
    /**
     * @var StreamInterface|null $contentBytes The base64-encoded contents of the file.
    */
    private ?StreamInterface $contentBytes = null;
    
    /**
     * @var string|null $contentId The ID of the attachment in the Exchange store.
    */
    private ?string $contentId = null;
    
    /**
     * @var string|null $contentLocation Do not use this property as it is not supported.
    */
    private ?string $contentLocation = null;
    
    /**
     * Instantiates a new FileAttachment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileAttachment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileAttachment {
        return new FileAttachment();
    }

    /**
     * Gets the contentBytes property value. The base64-encoded contents of the file.
     * @return StreamInterface|null
    */
    public function getContentBytes(): ?StreamInterface {
        return $this->contentBytes;
    }

    /**
     * Gets the contentId property value. The ID of the attachment in the Exchange store.
     * @return string|null
    */
    public function getContentId(): ?string {
        return $this->contentId;
    }

    /**
     * Gets the contentLocation property value. Do not use this property as it is not supported.
     * @return string|null
    */
    public function getContentLocation(): ?string {
        return $this->contentLocation;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentBytes' => function (ParseNode $n) use ($o) { $o->setContentBytes($n->getBinaryContent()); },
            'contentId' => function (ParseNode $n) use ($o) { $o->setContentId($n->getStringValue()); },
            'contentLocation' => function (ParseNode $n) use ($o) { $o->setContentLocation($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('contentBytes', $this->contentBytes);
        $writer->writeStringValue('contentId', $this->contentId);
        $writer->writeStringValue('contentLocation', $this->contentLocation);
    }

    /**
     * Sets the contentBytes property value. The base64-encoded contents of the file.
     *  @param StreamInterface|null $value Value to set for the contentBytes property.
    */
    public function setContentBytes(?StreamInterface $value ): void {
        $this->contentBytes = $value;
    }

    /**
     * Sets the contentId property value. The ID of the attachment in the Exchange store.
     *  @param string|null $value Value to set for the contentId property.
    */
    public function setContentId(?string $value ): void {
        $this->contentId = $value;
    }

    /**
     * Sets the contentLocation property value. Do not use this property as it is not supported.
     *  @param string|null $value Value to set for the contentLocation property.
    */
    public function setContentLocation(?string $value ): void {
        $this->contentLocation = $value;
    }

}
