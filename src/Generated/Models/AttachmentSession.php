<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class AttachmentSession extends Entity implements Parsable 
{
    /**
     * Instantiates a new attachmentSession and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.attachmentSession');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AttachmentSession
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AttachmentSession {
        return new AttachmentSession();
    }

    /**
     * Gets the content property value. The content property
     * @return StreamInterface|null
    */
    public function getContent(): ?StreamInterface {
        return $this->getBackingStore()->get('content');
    }

    /**
     * Gets the expirationDateTime property value. The expirationDateTime property
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('expirationDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'content' => fn(ParseNode $n) => $o->setContent($n->getBinaryContent()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'nextExpectedRanges' => fn(ParseNode $n) => $o->setNextExpectedRanges($n->getCollectionOfPrimitiveValues()),
        ]);
    }

    /**
     * Gets the nextExpectedRanges property value. The nextExpectedRanges property
     * @return array<string>|null
    */
    public function getNextExpectedRanges(): ?array {
        return $this->getBackingStore()->get('nextExpectedRanges');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBinaryContent('content', $this->getContent());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeCollectionOfPrimitiveValues('nextExpectedRanges', $this->getNextExpectedRanges());
    }

    /**
     * Sets the content property value. The content property
     *  @param StreamInterface|null $value Value to set for the content property.
    */
    public function setContent(?StreamInterface $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the expirationDateTime property value. The expirationDateTime property
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the nextExpectedRanges property value. The nextExpectedRanges property
     *  @param array<string>|null $value Value to set for the nextExpectedRanges property.
    */
    public function setNextExpectedRanges(?array $value): void {
        $this->getBackingStore()->set('nextExpectedRanges', $value);
    }

}
