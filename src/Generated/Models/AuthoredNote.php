<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthoredNote extends Entity implements Parsable 
{
    /**
     * Instantiates a new AuthoredNote and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthoredNote
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthoredNote {
        return new AuthoredNote();
    }

    /**
     * Gets the author property value. Identity information about the note's author.
     * @return Identity|null
    */
    public function getAuthor(): ?Identity {
        return $this->getBackingStore()->get('author');
    }

    /**
     * Gets the content property value. The content of the note.
     * @return ItemBody|null
    */
    public function getContent(): ?ItemBody {
        return $this->getBackingStore()->get('content');
    }

    /**
     * Gets the createdDateTime property value. The date and time when the entity was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'author' => fn(ParseNode $n) => $o->setAuthor($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'content' => fn(ParseNode $n) => $o->setContent($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('author', $this->getAuthor());
        $writer->writeObjectValue('content', $this->getContent());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
    }

    /**
     * Sets the author property value. Identity information about the note's author.
     * @param Identity|null $value Value to set for the author property.
    */
    public function setAuthor(?Identity $value): void {
        $this->getBackingStore()->set('author', $value);
    }

    /**
     * Sets the content property value. The content of the note.
     * @param ItemBody|null $value Value to set for the content property.
    */
    public function setContent(?ItemBody $value): void {
        $this->getBackingStore()->set('content', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the entity was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

}
