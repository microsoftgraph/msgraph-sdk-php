<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Post extends OutlookItem 
{
    /** @var array<Attachment>|null $attachments Read-only. Nullable. Supports $expand. */
    private ?array $attachments = null;
    
    /** @var ItemBody|null $body The contents of the post. This is a default property. This property can be null. */
    private ?ItemBody $body = null;
    
    /** @var string|null $conversationId Unique ID of the conversation. Read-only. */
    private ?string $conversationId = null;
    
    /** @var string|null $conversationThreadId Unique ID of the conversation thread. Read-only. */
    private ?string $conversationThreadId = null;
    
    /** @var array<Extension>|null $extensions The collection of open extensions defined for the post. Read-only. Nullable. Supports $expand. */
    private ?array $extensions = null;
    
    /** @var Recipient|null $from The from property */
    private ?Recipient $from = null;
    
    /** @var bool|null $hasAttachments Indicates whether the post has at least one attachment. This is a default property. */
    private ?bool $hasAttachments = null;
    
    /** @var Post|null $inReplyTo Read-only. Supports $expand. */
    private ?Post $inReplyTo = null;
    
    /** @var array<MultiValueLegacyExtendedProperty>|null $multiValueExtendedProperties The collection of multi-value extended properties defined for the post. Read-only. Nullable. */
    private ?array $multiValueExtendedProperties = null;
    
    /** @var array<Recipient>|null $newParticipants Conversation participants that were added to the thread as part of this post. */
    private ?array $newParticipants = null;
    
    /** @var DateTime|null $receivedDateTime Specifies when the post was received. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z */
    private ?DateTime $receivedDateTime = null;
    
    /** @var Recipient|null $sender Contains the address of the sender. The value of Sender is assumed to be the address of the authenticated user in the case when Sender is not specified. This is a default property. */
    private ?Recipient $sender = null;
    
    /** @var array<SingleValueLegacyExtendedProperty>|null $singleValueExtendedProperties The collection of single-value extended properties defined for the post. Read-only. Nullable. */
    private ?array $singleValueExtendedProperties = null;
    
    /**
     * Instantiates a new post and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Post
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): Post {
        return new Post();
    }

    /**
     * Gets the attachments property value. Read-only. Nullable. Supports $expand.
     * @return array<Attachment>|null
    */
    public function getAttachments(): ?array {
        return $this->attachments;
    }

    /**
     * Gets the body property value. The contents of the post. This is a default property. This property can be null.
     * @return ItemBody|null
    */
    public function getBody(): ?ItemBody {
        return $this->body;
    }

    /**
     * Gets the conversationId property value. Unique ID of the conversation. Read-only.
     * @return string|null
    */
    public function getConversationId(): ?string {
        return $this->conversationId;
    }

    /**
     * Gets the conversationThreadId property value. Unique ID of the conversation thread. Read-only.
     * @return string|null
    */
    public function getConversationThreadId(): ?string {
        return $this->conversationThreadId;
    }

    /**
     * Gets the extensions property value. The collection of open extensions defined for the post. Read-only. Nullable. Supports $expand.
     * @return array<Extension>|null
    */
    public function getExtensions(): ?array {
        return $this->extensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'attachments' => function (self $o, ParseNode $n) { $o->setAttachments($n->getCollectionOfObjectValues(Attachment::class)); },
            'body' => function (self $o, ParseNode $n) { $o->setBody($n->getObjectValue(ItemBody::class)); },
            'conversationId' => function (self $o, ParseNode $n) { $o->setConversationId($n->getStringValue()); },
            'conversationThreadId' => function (self $o, ParseNode $n) { $o->setConversationThreadId($n->getStringValue()); },
            'extensions' => function (self $o, ParseNode $n) { $o->setExtensions($n->getCollectionOfObjectValues(Extension::class)); },
            'from' => function (self $o, ParseNode $n) { $o->setFrom($n->getObjectValue(Recipient::class)); },
            'hasAttachments' => function (self $o, ParseNode $n) { $o->setHasAttachments($n->getBooleanValue()); },
            'inReplyTo' => function (self $o, ParseNode $n) { $o->setInReplyTo($n->getObjectValue(Post::class)); },
            'multiValueExtendedProperties' => function (self $o, ParseNode $n) { $o->setMultiValueExtendedProperties($n->getCollectionOfObjectValues(MultiValueLegacyExtendedProperty::class)); },
            'newParticipants' => function (self $o, ParseNode $n) { $o->setNewParticipants($n->getCollectionOfObjectValues(Recipient::class)); },
            'receivedDateTime' => function (self $o, ParseNode $n) { $o->setReceivedDateTime($n->getDateTimeValue()); },
            'sender' => function (self $o, ParseNode $n) { $o->setSender($n->getObjectValue(Recipient::class)); },
            'singleValueExtendedProperties' => function (self $o, ParseNode $n) { $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues(SingleValueLegacyExtendedProperty::class)); },
        ]);
    }

    /**
     * Gets the from property value. The from property
     * @return Recipient|null
    */
    public function getFrom(): ?Recipient {
        return $this->from;
    }

    /**
     * Gets the hasAttachments property value. Indicates whether the post has at least one attachment. This is a default property.
     * @return bool|null
    */
    public function getHasAttachments(): ?bool {
        return $this->hasAttachments;
    }

    /**
     * Gets the inReplyTo property value. Read-only. Supports $expand.
     * @return Post|null
    */
    public function getInReplyTo(): ?Post {
        return $this->inReplyTo;
    }

    /**
     * Gets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the post. Read-only. Nullable.
     * @return array<MultiValueLegacyExtendedProperty>|null
    */
    public function getMultiValueExtendedProperties(): ?array {
        return $this->multiValueExtendedProperties;
    }

    /**
     * Gets the newParticipants property value. Conversation participants that were added to the thread as part of this post.
     * @return array<Recipient>|null
    */
    public function getNewParticipants(): ?array {
        return $this->newParticipants;
    }

    /**
     * Gets the receivedDateTime property value. Specifies when the post was received. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getReceivedDateTime(): ?DateTime {
        return $this->receivedDateTime;
    }

    /**
     * Gets the sender property value. Contains the address of the sender. The value of Sender is assumed to be the address of the authenticated user in the case when Sender is not specified. This is a default property.
     * @return Recipient|null
    */
    public function getSender(): ?Recipient {
        return $this->sender;
    }

    /**
     * Gets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the post. Read-only. Nullable.
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        return $this->singleValueExtendedProperties;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('attachments', $this->attachments);
        $writer->writeObjectValue('body', $this->body);
        $writer->writeStringValue('conversationId', $this->conversationId);
        $writer->writeStringValue('conversationThreadId', $this->conversationThreadId);
        $writer->writeCollectionOfObjectValues('extensions', $this->extensions);
        $writer->writeObjectValue('from', $this->from);
        $writer->writeBooleanValue('hasAttachments', $this->hasAttachments);
        $writer->writeObjectValue('inReplyTo', $this->inReplyTo);
        $writer->writeCollectionOfObjectValues('multiValueExtendedProperties', $this->multiValueExtendedProperties);
        $writer->writeCollectionOfObjectValues('newParticipants', $this->newParticipants);
        $writer->writeDateTimeValue('receivedDateTime', $this->receivedDateTime);
        $writer->writeObjectValue('sender', $this->sender);
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->singleValueExtendedProperties);
    }

    /**
     * Sets the attachments property value. Read-only. Nullable. Supports $expand.
     *  @param array<Attachment>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value ): void {
        $this->attachments = $value;
    }

    /**
     * Sets the body property value. The contents of the post. This is a default property. This property can be null.
     *  @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value ): void {
        $this->body = $value;
    }

    /**
     * Sets the conversationId property value. Unique ID of the conversation. Read-only.
     *  @param string|null $value Value to set for the conversationId property.
    */
    public function setConversationId(?string $value ): void {
        $this->conversationId = $value;
    }

    /**
     * Sets the conversationThreadId property value. Unique ID of the conversation thread. Read-only.
     *  @param string|null $value Value to set for the conversationThreadId property.
    */
    public function setConversationThreadId(?string $value ): void {
        $this->conversationThreadId = $value;
    }

    /**
     * Sets the extensions property value. The collection of open extensions defined for the post. Read-only. Nullable. Supports $expand.
     *  @param array<Extension>|null $value Value to set for the extensions property.
    */
    public function setExtensions(?array $value ): void {
        $this->extensions = $value;
    }

    /**
     * Sets the from property value. The from property
     *  @param Recipient|null $value Value to set for the from property.
    */
    public function setFrom(?Recipient $value ): void {
        $this->from = $value;
    }

    /**
     * Sets the hasAttachments property value. Indicates whether the post has at least one attachment. This is a default property.
     *  @param bool|null $value Value to set for the hasAttachments property.
    */
    public function setHasAttachments(?bool $value ): void {
        $this->hasAttachments = $value;
    }

    /**
     * Sets the inReplyTo property value. Read-only. Supports $expand.
     *  @param Post|null $value Value to set for the inReplyTo property.
    */
    public function setInReplyTo(?Post $value ): void {
        $this->inReplyTo = $value;
    }

    /**
     * Sets the multiValueExtendedProperties property value. The collection of multi-value extended properties defined for the post. Read-only. Nullable.
     *  @param array<MultiValueLegacyExtendedProperty>|null $value Value to set for the multiValueExtendedProperties property.
    */
    public function setMultiValueExtendedProperties(?array $value ): void {
        $this->multiValueExtendedProperties = $value;
    }

    /**
     * Sets the newParticipants property value. Conversation participants that were added to the thread as part of this post.
     *  @param array<Recipient>|null $value Value to set for the newParticipants property.
    */
    public function setNewParticipants(?array $value ): void {
        $this->newParticipants = $value;
    }

    /**
     * Sets the receivedDateTime property value. Specifies when the post was received. The DateTimeOffset type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the receivedDateTime property.
    */
    public function setReceivedDateTime(?DateTime $value ): void {
        $this->receivedDateTime = $value;
    }

    /**
     * Sets the sender property value. Contains the address of the sender. The value of Sender is assumed to be the address of the authenticated user in the case when Sender is not specified. This is a default property.
     *  @param Recipient|null $value Value to set for the sender property.
    */
    public function setSender(?Recipient $value ): void {
        $this->sender = $value;
    }

    /**
     * Sets the singleValueExtendedProperties property value. The collection of single-value extended properties defined for the post. Read-only. Nullable.
     *  @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value ): void {
        $this->singleValueExtendedProperties = $value;
    }

}
