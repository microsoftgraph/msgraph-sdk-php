<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Post extends OutlookItem implements Parsable 
{
    /**
     * Instantiates a new Post and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.post');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Post
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Post {
        return new Post();
    }

    /**
     * Gets the attachments property value. Read-only. Nullable. Supports $expand.
     * @return array<Attachment>|null
    */
    public function getAttachments(): ?array {
        $val = $this->getBackingStore()->get('attachments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Attachment::class);
            /** @var array<Attachment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attachments'");
    }

    /**
     * Gets the body property value. The contents of the post. This is a default property. This property can be null.
     * @return ItemBody|null
    */
    public function getBody(): ?ItemBody {
        $val = $this->getBackingStore()->get('body');
        if (is_null($val) || $val instanceof ItemBody) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'body'");
    }

    /**
     * Gets the conversationId property value. Unique ID of the conversation. Read-only.
     * @return string|null
    */
    public function getConversationId(): ?string {
        $val = $this->getBackingStore()->get('conversationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conversationId'");
    }

    /**
     * Gets the conversationThreadId property value. Unique ID of the conversation thread. Read-only.
     * @return string|null
    */
    public function getConversationThreadId(): ?string {
        $val = $this->getBackingStore()->get('conversationThreadId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conversationThreadId'");
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the post. Read-only. Nullable. Supports $expand.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        $val = $this->getBackingStore()->get('extensions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Extension::class);
            /** @var array<Extension>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'attachments' => fn(ParseNode $n) => $o->setAttachments($n->getCollectionOfObjectValues([Attachment::class, 'createFromDiscriminatorValue'])),
            'body' => fn(ParseNode $n) => $o->setBody($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'conversationId' => fn(ParseNode $n) => $o->setConversationId($n->getStringValue()),
            'conversationThreadId' => fn(ParseNode $n) => $o->setConversationThreadId($n->getStringValue()),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getCollectionOfObjectValues([Extension::class, 'createFromDiscriminatorValue'])),
            'from' => fn(ParseNode $n) => $o->setFrom($n->getObjectValue([Recipient::class, 'createFromDiscriminatorValue'])),
            'hasAttachments' => fn(ParseNode $n) => $o->setHasAttachments($n->getBooleanValue()),
            'inReplyTo' => fn(ParseNode $n) => $o->setInReplyTo($n->getObjectValue([Post::class, 'createFromDiscriminatorValue'])),
            'multiValueExtendedProperties' => fn(ParseNode $n) => $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues([MultiValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
            'newParticipants' => fn(ParseNode $n) => $o->setNewParticipants($n->getCollectionOfObjectValues([Recipient::class, 'createFromDiscriminatorValue'])),
            'receivedDateTime' => fn(ParseNode $n) => $o->setReceivedDateTime($n->getDateTimeValue()),
            'sender' => fn(ParseNode $n) => $o->setSender($n->getObjectValue([Recipient::class, 'createFromDiscriminatorValue'])),
            'singleValueExtendedProperties' => fn(ParseNode $n) => $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues([SingleValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the from property value. The from property
     * @return Recipient|null
    */
    public function getFrom(): ?Recipient {
        $val = $this->getBackingStore()->get('from');
        if (is_null($val) || $val instanceof Recipient) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'from'");
    }

    /**
     * Gets the hasAttachments property value. Indicates whether the post has at least one attachment. This is a default property.
     * @return bool|null
    */
    public function getHasAttachments(): ?bool {
        $val = $this->getBackingStore()->get('hasAttachments');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hasAttachments'");
    }

    /**
     * Gets the inReplyTo property value. Read-only. Supports $expand.
     * @return Post|null
    */
    public function getInReplyTo(): ?Post {
        $val = $this->getBackingStore()->get('inReplyTo');
        if (is_null($val) || $val instanceof Post) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inReplyTo'");
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the post. Read-only. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        $val = $this->getBackingStore()->get('multiValueExtendedProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, MultiValueLegacyExtendedProperty::class);
            /** @var array<MultiValueLegacyExtendedProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'multiValueExtendedProperties'");
    }

    /**
     * Gets the newParticipants property value. Conversation participants that were added to the thread as part of this post.
     * @return array<Recipient>|null
    */
    public function getNewParticipants(): ?array {
        $val = $this->getBackingStore()->get('newParticipants');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Recipient::class);
            /** @var array<Recipient>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'newParticipants'");
    }

    /**
     * Gets the receivedDateTime property value. Specifies when the post was received. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getReceivedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('receivedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'receivedDateTime'");
    }

    /**
     * Gets the sender property value. Contains the address of the sender. The value of Sender is assumed to be the address of the authenticated user in the case when Sender is not specified. This is a default property.
     * @return Recipient|null
    */
    public function getSender(): ?Recipient {
        $val = $this->getBackingStore()->get('sender');
        if (is_null($val) || $val instanceof Recipient) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sender'");
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the post. Read-only. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        $val = $this->getBackingStore()->get('singleValueExtendedProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SingleValueLegacyExtendedProperty::class);
            /** @var array<SingleValueLegacyExtendedProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'singleValueExtendedProperties'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('attachments', $this->getAttachments());
        $writer->writeObjectValue('body', $this->getBody());
        $writer->writeStringValue('conversationId', $this->getConversationId());
        $writer->writeStringValue('conversationThreadId', $this->getConversationThreadId());
        $writer->writeCollectionOfObjectValues('extensions', $this->getExtensions());
        $writer->writeObjectValue('from', $this->getFrom());
        $writer->writeBooleanValue('hasAttachments', $this->getHasAttachments());
        $writer->writeObjectValue('inReplyTo', $this->getInReplyTo());
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->getMultiValueExtendedProperties());
        $writer->writeCollectionOfObjectValues('newParticipants', $this->getNewParticipants());
        $writer->writeDateTimeValue('receivedDateTime', $this->getReceivedDateTime());
        $writer->writeObjectValue('sender', $this->getSender());
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->getSingleValueExtendedProperties());
    }

    /**
     * Sets the attachments property value. Read-only. Nullable. Supports $expand.
     * @param array<Attachment>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value): void {
        $this->getBackingStore()->set('attachments', $value);
    }

    /**
     * Sets the body property value. The contents of the post. This is a default property. This property can be null.
     * @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value): void {
        $this->getBackingStore()->set('body', $value);
    }

    /**
     * Sets the conversationId property value. Unique ID of the conversation. Read-only.
     * @param string|null $value Value to set for the conversationId property.
    */
    public function setConversationId(?string $value): void {
        $this->getBackingStore()->set('conversationId', $value);
    }

    /**
     * Sets the conversationThreadId property value. Unique ID of the conversation thread. Read-only.
     * @param string|null $value Value to set for the conversationThreadId property.
    */
    public function setConversationThreadId(?string $value): void {
        $this->getBackingStore()->set('conversationThreadId', $value);
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the post. Read-only. Nullable. Supports $expand.
     * @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the from property value. The from property
     * @param Recipient|null $value Value to set for the from property.
    */
    public function setFrom(?Recipient $value): void {
        $this->getBackingStore()->set('from', $value);
    }

    /**
     * Sets the hasAttachments property value. Indicates whether the post has at least one attachment. This is a default property.
     * @param bool|null $value Value to set for the hasAttachments property.
    */
    public function setHasAttachments(?bool $value): void {
        $this->getBackingStore()->set('hasAttachments', $value);
    }

    /**
     * Sets the inReplyTo property value. Read-only. Supports $expand.
     * @param Post|null $value Value to set for the inReplyTo property.
    */
    public function setInReplyTo(?Post $value): void {
        $this->getBackingStore()->set('inReplyTo', $value);
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the post. Read-only. Nullable.
     * @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('multiValueExtendedProperties', $value);
    }

    /**
     * Sets the newParticipants property value. Conversation participants that were added to the thread as part of this post.
     * @param array<Recipient>|null $value Value to set for the newParticipants property.
    */
    public function setNewParticipants(?array $value): void {
        $this->getBackingStore()->set('newParticipants', $value);
    }

    /**
     * Sets the receivedDateTime property value. Specifies when the post was received. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the receivedDateTime property.
    */
    public function setReceivedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('receivedDateTime', $value);
    }

    /**
     * Sets the sender property value. Contains the address of the sender. The value of Sender is assumed to be the address of the authenticated user in the case when Sender is not specified. This is a default property.
     * @param Recipient|null $value Value to set for the sender property.
    */
    public function setSender(?Recipient $value): void {
        $this->getBackingStore()->set('sender', $value);
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the post. Read-only. Nullable.
     * @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('singleValueExtendedProperties', $value);
    }

}
