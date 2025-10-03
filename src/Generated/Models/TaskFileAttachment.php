<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class TaskFileAttachment extends AttachmentBase implements Parsable 
{
    /**
     * Instantiates a new TaskFileAttachment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.taskFileAttachment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TaskFileAttachment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TaskFileAttachment {
        return new TaskFileAttachment();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentBytes' => fn(ParseNode $n) => $o->setContentBytes($n->getBinaryContent()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('contentBytes', $this->getContentBytes());
    }

    /**
     * Sets the contentBytes property value. The base64-encoded contents of the file.
     * @param StreamInterface|null $value Value to set for the contentBytes property.
    */
    public function setContentBytes(?StreamInterface $value): void {
        $this->getBackingStore()->set('contentBytes', $value);
    }

}
