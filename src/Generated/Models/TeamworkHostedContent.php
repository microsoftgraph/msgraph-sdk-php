<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class TeamworkHostedContent extends Entity implements Parsable 
{
    /**
     * Instantiates a new teamworkHostedContent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkHostedContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkHostedContent {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.chatMessageHostedContent': return new ChatMessageHostedContent();
            }
        }
        return new TeamworkHostedContent();
    }

    /**
     * Gets the contentBytes property value. Write only. Bytes for the hosted content (such as images).
     * @return StreamInterface|null
    */
    public function getContentBytes(): ?StreamInterface {
        return $this->getBackingStore()->get('contentBytes');
    }

    /**
     * Gets the contentType property value. Write only. Content type. sicj as image/png, image/jpg.
     * @return string|null
    */
    public function getContentType(): ?string {
        return $this->getBackingStore()->get('contentType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentBytes' => fn(ParseNode $n) => $o->setContentBytes($n->getBinaryContent()),
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('contentBytes', $this->getContentBytes());
        $writer->writeStringValue('contentType', $this->getContentType());
    }

    /**
     * Sets the contentBytes property value. Write only. Bytes for the hosted content (such as images).
     *  @param StreamInterface|null $value Value to set for the contentBytes property.
    */
    public function setContentBytes(?StreamInterface $value): void {
        $this->getBackingStore()->set('contentBytes', $value);
    }

    /**
     * Sets the contentType property value. Write only. Content type. sicj as image/png, image/jpg.
     *  @param string|null $value Value to set for the contentType property.
    */
    public function setContentType(?string $value): void {
        $this->getBackingStore()->set('contentType', $value);
    }

}
