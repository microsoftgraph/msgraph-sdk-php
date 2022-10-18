<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChatMessage extends Entity implements Parsable 
{
    /**
     * @var array<ChatMessageAttachment>|null $attachments References to attached objects like files, tabs, meetings etc.
    */
    private ?array $attachments = null;
    
    /**
     * @var ItemBody|null $body The body property
    */
    private ?ItemBody $body = null;
    
    /**
     * @var ChannelIdentity|null $channelIdentity If the message was sent in a channel, represents identity of the channel.
    */
    private ?ChannelIdentity $channelIdentity = null;
    
    /**
     * @var string|null $chatId If the message was sent in a chat, represents the identity of the chat.
    */
    private ?string $chatId = null;
    
    /**
     * @var DateTime|null $createdDateTime Timestamp of when the chat message was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var DateTime|null $deletedDateTime Read only. Timestamp at which the chat message was deleted, or null if not deleted.
    */
    private ?DateTime $deletedDateTime = null;
    
    /**
     * @var string|null $etag Read-only. Version number of the chat message.
    */
    private ?string $etag = null;
    
    /**
     * @var EventMessageDetail|null $eventDetail Read-only. If present, represents details of an event that happened in a chat, a channel, or a team, for example, adding new members. For event messages, the messageType property will be set to systemEventMessage.
    */
    private ?EventMessageDetail $eventDetail = null;
    
    /**
     * @var ChatMessageFromIdentitySet|null $from Details of the sender of the chat message. Can only be set during migration.
    */
    private ?ChatMessageFromIdentitySet $from = null;
    
    /**
     * @var array<ChatMessageHostedContent>|null $hostedContents Content in a message hosted by Microsoft Teams - for example, images or code snippets.
    */
    private ?array $hostedContents = null;
    
    /**
     * @var ChatMessageImportance|null $importance The importance property
    */
    private ?ChatMessageImportance $importance = null;
    
    /**
     * @var DateTime|null $lastEditedDateTime Read only. Timestamp when edits to the chat message were made. Triggers an 'Edited' flag in the Teams UI. If no edits are made the value is null.
    */
    private ?DateTime $lastEditedDateTime = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Read only. Timestamp when the chat message is created (initial setting) or modified, including when a reaction is added or removed.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var string|null $locale Locale of the chat message set by the client. Always set to en-us.
    */
    private ?string $locale = null;
    
    /**
     * @var array<ChatMessageMention>|null $mentions List of entities mentioned in the chat message. Supported entities are: user, bot, team, and channel.
    */
    private ?array $mentions = null;
    
    /**
     * @var ChatMessageType|null $messageType The messageType property
    */
    private ?ChatMessageType $messageType = null;
    
    /**
     * @var ChatMessagePolicyViolation|null $policyViolation Defines the properties of a policy violation set by a data loss prevention (DLP) application.
    */
    private ?ChatMessagePolicyViolation $policyViolation = null;
    
    /**
     * @var array<ChatMessageReaction>|null $reactions Reactions for this chat message (for example, Like).
    */
    private ?array $reactions = null;
    
    /**
     * @var array<ChatMessage>|null $replies Replies for a specified message. Supports $expand for channel messages.
    */
    private ?array $replies = null;
    
    /**
     * @var string|null $replyToId Read-only. ID of the parent chat message or root chat message of the thread. (Only applies to chat messages in channels, not chats.)
    */
    private ?string $replyToId = null;
    
    /**
     * @var string|null $subject The subject of the chat message, in plaintext.
    */
    private ?string $subject = null;
    
    /**
     * @var string|null $summary Summary text of the chat message that could be used for push notifications and summary views or fall back views. Only applies to channel chat messages, not chat messages in a chat.
    */
    private ?string $summary = null;
    
    /**
     * @var string|null $webUrl Read-only. Link to the message in Microsoft Teams.
    */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new chatMessage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.chatMessage');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChatMessage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChatMessage {
        return new ChatMessage();
    }

    /**
     * Gets the attachments property value. References to attached objects like files, tabs, meetings etc.
     * @return array<ChatMessageAttachment>|null
    */
    public function getAttachments(): ?array {
        return $this->attachments;
    }

    /**
     * Gets the body property value. The body property
     * @return ItemBody|null
    */
    public function getBody(): ?ItemBody {
        return $this->body;
    }

    /**
     * Gets the channelIdentity property value. If the message was sent in a channel, represents identity of the channel.
     * @return ChannelIdentity|null
    */
    public function getChannelIdentity(): ?ChannelIdentity {
        return $this->channelIdentity;
    }

    /**
     * Gets the chatId property value. If the message was sent in a chat, represents the identity of the chat.
     * @return string|null
    */
    public function getChatId(): ?string {
        return $this->chatId;
    }

    /**
     * Gets the createdDateTime property value. Timestamp of when the chat message was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the deletedDateTime property value. Read only. Timestamp at which the chat message was deleted, or null if not deleted.
     * @return DateTime|null
    */
    public function getDeletedDateTime(): ?DateTime {
        return $this->deletedDateTime;
    }

    /**
     * Gets the etag property value. Read-only. Version number of the chat message.
     * @return string|null
    */
    public function getEtag(): ?string {
        return $this->etag;
    }

    /**
     * Gets the eventDetail property value. Read-only. If present, represents details of an event that happened in a chat, a channel, or a team, for example, adding new members. For event messages, the messageType property will be set to systemEventMessage.
     * @return EventMessageDetail|null
    */
    public function getEventDetail(): ?EventMessageDetail {
        return $this->eventDetail;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'attachments' => fn(ParseNode $n) => $o->setAttachments($n->getCollectionOfObjectValues([ChatMessageAttachment::class, 'createFromDiscriminatorValue'])),
            'body' => fn(ParseNode $n) => $o->setBody($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'channelIdentity' => fn(ParseNode $n) => $o->setChannelIdentity($n->getObjectValue([ChannelIdentity::class, 'createFromDiscriminatorValue'])),
            'chatId' => fn(ParseNode $n) => $o->setChatId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deletedDateTime' => fn(ParseNode $n) => $o->setDeletedDateTime($n->getDateTimeValue()),
            'etag' => fn(ParseNode $n) => $o->setEtag($n->getStringValue()),
            'eventDetail' => fn(ParseNode $n) => $o->setEventDetail($n->getObjectValue([EventMessageDetail::class, 'createFromDiscriminatorValue'])),
            'from' => fn(ParseNode $n) => $o->setFrom($n->getObjectValue([ChatMessageFromIdentitySet::class, 'createFromDiscriminatorValue'])),
            'hostedContents' => fn(ParseNode $n) => $o->setHostedContents($n->getCollectionOfObjectValues([ChatMessageHostedContent::class, 'createFromDiscriminatorValue'])),
            'importance' => fn(ParseNode $n) => $o->setImportance($n->getEnumValue(ChatMessageImportance::class)),
            'lastEditedDateTime' => fn(ParseNode $n) => $o->setLastEditedDateTime($n->getDateTimeValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'locale' => fn(ParseNode $n) => $o->setLocale($n->getStringValue()),
            'mentions' => fn(ParseNode $n) => $o->setMentions($n->getCollectionOfObjectValues([ChatMessageMention::class, 'createFromDiscriminatorValue'])),
            'messageType' => fn(ParseNode $n) => $o->setMessageType($n->getEnumValue(ChatMessageType::class)),
            'policyViolation' => fn(ParseNode $n) => $o->setPolicyViolation($n->getObjectValue([ChatMessagePolicyViolation::class, 'createFromDiscriminatorValue'])),
            'reactions' => fn(ParseNode $n) => $o->setReactions($n->getCollectionOfObjectValues([ChatMessageReaction::class, 'createFromDiscriminatorValue'])),
            'replies' => fn(ParseNode $n) => $o->setReplies($n->getCollectionOfObjectValues([ChatMessage::class, 'createFromDiscriminatorValue'])),
            'replyToId' => fn(ParseNode $n) => $o->setReplyToId($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getStringValue()),
            'summary' => fn(ParseNode $n) => $o->setSummary($n->getStringValue()),
            'webUrl' => fn(ParseNode $n) => $o->setWebUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the from property value. Details of the sender of the chat message. Can only be set during migration.
     * @return ChatMessageFromIdentitySet|null
    */
    public function getFrom(): ?ChatMessageFromIdentitySet {
        return $this->from;
    }

    /**
     * Gets the hostedContents property value. Content in a message hosted by Microsoft Teams - for example, images or code snippets.
     * @return array<ChatMessageHostedContent>|null
    */
    public function getHostedContents(): ?array {
        return $this->hostedContents;
    }

    /**
     * Gets the importance property value. The importance property
     * @return ChatMessageImportance|null
    */
    public function getImportance(): ?ChatMessageImportance {
        return $this->importance;
    }

    /**
     * Gets the lastEditedDateTime property value. Read only. Timestamp when edits to the chat message were made. Triggers an 'Edited' flag in the Teams UI. If no edits are made the value is null.
     * @return DateTime|null
    */
    public function getLastEditedDateTime(): ?DateTime {
        return $this->lastEditedDateTime;
    }

    /**
     * Gets the lastModifiedDateTime property value. Read only. Timestamp when the chat message is created (initial setting) or modified, including when a reaction is added or removed.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the locale property value. Locale of the chat message set by the client. Always set to en-us.
     * @return string|null
    */
    public function getLocale(): ?string {
        return $this->locale;
    }

    /**
     * Gets the mentions property value. List of entities mentioned in the chat message. Supported entities are: user, bot, team, and channel.
     * @return array<ChatMessageMention>|null
    */
    public function getMentions(): ?array {
        return $this->mentions;
    }

    /**
     * Gets the messageType property value. The messageType property
     * @return ChatMessageType|null
    */
    public function getMessageType(): ?ChatMessageType {
        return $this->messageType;
    }

    /**
     * Gets the policyViolation property value. Defines the properties of a policy violation set by a data loss prevention (DLP) application.
     * @return ChatMessagePolicyViolation|null
    */
    public function getPolicyViolation(): ?ChatMessagePolicyViolation {
        return $this->policyViolation;
    }

    /**
     * Gets the reactions property value. Reactions for this chat message (for example, Like).
     * @return array<ChatMessageReaction>|null
    */
    public function getReactions(): ?array {
        return $this->reactions;
    }

    /**
     * Gets the replies property value. Replies for a specified message. Supports $expand for channel messages.
     * @return array<ChatMessage>|null
    */
    public function getReplies(): ?array {
        return $this->replies;
    }

    /**
     * Gets the replyToId property value. Read-only. ID of the parent chat message or root chat message of the thread. (Only applies to chat messages in channels, not chats.)
     * @return string|null
    */
    public function getReplyToId(): ?string {
        return $this->replyToId;
    }

    /**
     * Gets the subject property value. The subject of the chat message, in plaintext.
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * Gets the summary property value. Summary text of the chat message that could be used for push notifications and summary views or fall back views. Only applies to channel chat messages, not chat messages in a chat.
     * @return string|null
    */
    public function getSummary(): ?string {
        return $this->summary;
    }

    /**
     * Gets the webUrl property value. Read-only. Link to the message in Microsoft Teams.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->webUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('attachments', $this->attachments);
        $writer->writeObjectValue('body', $this->body);
        $writer->writeObjectValue('channelIdentity', $this->channelIdentity);
        $writer->writeStringValue('chatId', $this->chatId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeDateTimeValue('deletedDateTime', $this->deletedDateTime);
        $writer->writeStringValue('etag', $this->etag);
        $writer->writeObjectValue('eventDetail', $this->eventDetail);
        $writer->writeObjectValue('from', $this->from);
        $writer->writeCollectionOfObjectValues('hostedContents', $this->hostedContents);
        $writer->writeEnumValue('importance', $this->importance);
        $writer->writeDateTimeValue('lastEditedDateTime', $this->lastEditedDateTime);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('locale', $this->locale);
        $writer->writeCollectionOfObjectValues('mentions', $this->mentions);
        $writer->writeEnumValue('messageType', $this->messageType);
        $writer->writeObjectValue('policyViolation', $this->policyViolation);
        $writer->writeCollectionOfObjectValues('reactions', $this->reactions);
        $writer->writeCollectionOfObjectValues('replies', $this->replies);
        $writer->writeStringValue('replyToId', $this->replyToId);
        $writer->writeStringValue('subject', $this->subject);
        $writer->writeStringValue('summary', $this->summary);
        $writer->writeStringValue('webUrl', $this->webUrl);
    }

    /**
     * Sets the attachments property value. References to attached objects like files, tabs, meetings etc.
     *  @param array<ChatMessageAttachment>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value ): void {
        $this->attachments = $value;
    }

    /**
     * Sets the body property value. The body property
     *  @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value ): void {
        $this->body = $value;
    }

    /**
     * Sets the channelIdentity property value. If the message was sent in a channel, represents identity of the channel.
     *  @param ChannelIdentity|null $value Value to set for the channelIdentity property.
    */
    public function setChannelIdentity(?ChannelIdentity $value ): void {
        $this->channelIdentity = $value;
    }

    /**
     * Sets the chatId property value. If the message was sent in a chat, represents the identity of the chat.
     *  @param string|null $value Value to set for the chatId property.
    */
    public function setChatId(?string $value ): void {
        $this->chatId = $value;
    }

    /**
     * Sets the createdDateTime property value. Timestamp of when the chat message was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the deletedDateTime property value. Read only. Timestamp at which the chat message was deleted, or null if not deleted.
     *  @param DateTime|null $value Value to set for the deletedDateTime property.
    */
    public function setDeletedDateTime(?DateTime $value ): void {
        $this->deletedDateTime = $value;
    }

    /**
     * Sets the etag property value. Read-only. Version number of the chat message.
     *  @param string|null $value Value to set for the etag property.
    */
    public function setEtag(?string $value ): void {
        $this->etag = $value;
    }

    /**
     * Sets the eventDetail property value. Read-only. If present, represents details of an event that happened in a chat, a channel, or a team, for example, adding new members. For event messages, the messageType property will be set to systemEventMessage.
     *  @param EventMessageDetail|null $value Value to set for the eventDetail property.
    */
    public function setEventDetail(?EventMessageDetail $value ): void {
        $this->eventDetail = $value;
    }

    /**
     * Sets the from property value. Details of the sender of the chat message. Can only be set during migration.
     *  @param ChatMessageFromIdentitySet|null $value Value to set for the from property.
    */
    public function setFrom(?ChatMessageFromIdentitySet $value ): void {
        $this->from = $value;
    }

    /**
     * Sets the hostedContents property value. Content in a message hosted by Microsoft Teams - for example, images or code snippets.
     *  @param array<ChatMessageHostedContent>|null $value Value to set for the hostedContents property.
    */
    public function setHostedContents(?array $value ): void {
        $this->hostedContents = $value;
    }

    /**
     * Sets the importance property value. The importance property
     *  @param ChatMessageImportance|null $value Value to set for the importance property.
    */
    public function setImportance(?ChatMessageImportance $value ): void {
        $this->importance = $value;
    }

    /**
     * Sets the lastEditedDateTime property value. Read only. Timestamp when edits to the chat message were made. Triggers an 'Edited' flag in the Teams UI. If no edits are made the value is null.
     *  @param DateTime|null $value Value to set for the lastEditedDateTime property.
    */
    public function setLastEditedDateTime(?DateTime $value ): void {
        $this->lastEditedDateTime = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Read only. Timestamp when the chat message is created (initial setting) or modified, including when a reaction is added or removed.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the locale property value. Locale of the chat message set by the client. Always set to en-us.
     *  @param string|null $value Value to set for the locale property.
    */
    public function setLocale(?string $value ): void {
        $this->locale = $value;
    }

    /**
     * Sets the mentions property value. List of entities mentioned in the chat message. Supported entities are: user, bot, team, and channel.
     *  @param array<ChatMessageMention>|null $value Value to set for the mentions property.
    */
    public function setMentions(?array $value ): void {
        $this->mentions = $value;
    }

    /**
     * Sets the messageType property value. The messageType property
     *  @param ChatMessageType|null $value Value to set for the messageType property.
    */
    public function setMessageType(?ChatMessageType $value ): void {
        $this->messageType = $value;
    }

    /**
     * Sets the policyViolation property value. Defines the properties of a policy violation set by a data loss prevention (DLP) application.
     *  @param ChatMessagePolicyViolation|null $value Value to set for the policyViolation property.
    */
    public function setPolicyViolation(?ChatMessagePolicyViolation $value ): void {
        $this->policyViolation = $value;
    }

    /**
     * Sets the reactions property value. Reactions for this chat message (for example, Like).
     *  @param array<ChatMessageReaction>|null $value Value to set for the reactions property.
    */
    public function setReactions(?array $value ): void {
        $this->reactions = $value;
    }

    /**
     * Sets the replies property value. Replies for a specified message. Supports $expand for channel messages.
     *  @param array<ChatMessage>|null $value Value to set for the replies property.
    */
    public function setReplies(?array $value ): void {
        $this->replies = $value;
    }

    /**
     * Sets the replyToId property value. Read-only. ID of the parent chat message or root chat message of the thread. (Only applies to chat messages in channels, not chats.)
     *  @param string|null $value Value to set for the replyToId property.
    */
    public function setReplyToId(?string $value ): void {
        $this->replyToId = $value;
    }

    /**
     * Sets the subject property value. The subject of the chat message, in plaintext.
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value ): void {
        $this->subject = $value;
    }

    /**
     * Sets the summary property value. Summary text of the chat message that could be used for push notifications and summary views or fall back views. Only applies to channel chat messages, not chat messages in a chat.
     *  @param string|null $value Value to set for the summary property.
    */
    public function setSummary(?string $value ): void {
        $this->summary = $value;
    }

    /**
     * Sets the webUrl property value. Read-only. Link to the message in Microsoft Teams.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
