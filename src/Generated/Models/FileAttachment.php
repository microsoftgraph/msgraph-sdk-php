<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class FileAttachment extends Attachment implements Parsable 
{
    /**
     * Instantiates a new fileAttachment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.fileAttachment');
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
        $val = $this->getBackingStore()->get('contentBytes');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentBytes'");
    }

    /**
     * Gets the contentId property value. The ID of the attachment in the Exchange store.
     * @return string|null
    */
    public function getContentId(): ?string {
        $val = $this->getBackingStore()->get('contentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentId'");
    }

    /**
     * Gets the contentLocation property value. Don't use this property as it isn't supported.
     * @return string|null
    */
    public function getContentLocation(): ?string {
        $val = $this->getBackingStore()->get('contentLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentLocation'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentBytes' => fn(ParseNode $n) => $o->setContentBytes($n->getBinaryContent()),
            'contentId' => fn(ParseNode $n) => $o->setContentId($n->getStringValue()),
            'contentLocation' => fn(ParseNode $n) => $o->setContentLocation($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('contentBytes', $this->getContentBytes());
        $writer->writeStringValue('contentId', $this->getContentId());
        $writer->writeStringValue('contentLocation', $this->getContentLocation());
    }

    /**
     * Sets the contentBytes property value. The base64-encoded contents of the file.
     * @param StreamInterface|null $value Value to set for the contentBytes property.
    */
    public function setContentBytes(?StreamInterface $value): void {
        $this->getBackingStore()->set('contentBytes', $value);
    }

    /**
     * Sets the contentId property value. The ID of the attachment in the Exchange store.
     * @param string|null $value Value to set for the contentId property.
    */
    public function setContentId(?string $value): void {
        $this->getBackingStore()->set('contentId', $value);
    }

    /**
     * Sets the contentLocation property value. Don't use this property as it isn't supported.
     * @param string|null $value Value to set for the contentLocation property.
    */
    public function setContentLocation(?string $value): void {
        $this->getBackingStore()->set('contentLocation', $value);
    }

}
