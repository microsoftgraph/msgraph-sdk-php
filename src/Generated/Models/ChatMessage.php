<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChatMessage extends Entity implements Parsable 
{
    /**
     * Instantiates a new chatMessage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('attachments');
    }

    /**
     * Gets the body property value. The body property
     * @return ItemBody|null
    */
    public function getBody(): ?ItemBody {
        return $this->getBackingStore()->get('body');
    }

    /**
     * Gets the channelIdentity property value. If the message was sent in a channel, represents identity of the channel.
     * @return ChannelIdentity|null
    */
    public function getChannelIdentity(): ?ChannelIdentity {
        return $this->getBackingStore()->get('channelIdentity');
    }

    /**
     * Gets the chatId property value. If the message was sent in a chat, represents the identity of the chat.
     * @return string|null
    */
    public function getChatId(): ?string {
        return $this->getBackingStore()->get('chatId');
    }

    /**
     * Gets the createdDateTime property value. Timestamp of when the chat message was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the deletedDateTime property value. Read only. Timestamp at which the chat message was deleted, or null if not deleted.
     * @return DateTime|null
    */
    public function getDeletedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('deletedDateTime');
    }

    /**
     * Gets the etag property value. Read-only. Version number of the chat message.
     * @return string|null
    */
    public function getEtag(): ?string {
        return $this->getBackingStore()->get('etag');
    }

    /**
     * Gets the eventDetail property value. Read-only. If present, represents details of an event that happened in a chat, a channel, or a team, for example, adding new members. For event messages, the messageType property will be set to systemEventMessage.
     * @return EventMessageDetail|null
    */
    public function getEventDetail(): ?EventMessageDetail {
        return $this->getBackingStore()->get('eventDetail');
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
        return $this->getBackingStore()->get('from');
    }

    /**
     * Gets the hostedContents property value. Content in a message hosted by Microsoft Teams - for example, images or code snippets.
     * @return array<ChatMessageHostedContent>|null
    */
    public function getHostedContents(): ?array {
        return $this->getBackingStore()->get('hostedContents');
    }

    /**
     * Gets the importance property value. The importance property
     * @return ChatMessageImportance|null
    */
    public function getImportance(): ?ChatMessageImportance {
        return $this->getBackingStore()->get('importance');
    }

    /**
     * Gets the lastEditedDateTime property value. Read only. Timestamp when edits to the chat message were made. Triggers an 'Edited' flag in the Teams UI. If no edits are made the value is null.
     * @return DateTime|null
    */
    public function getLastEditedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastEditedDateTime');
    }

    /**
     * Gets the lastModifiedDateTime property value. Read only. Timestamp when the chat message is created (initial setting) or modified, including when a reaction is added or removed.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the locale property value. Locale of the chat message set by the client. Always set to en-us.
     * @return string|null
    */
    public function getLocale(): ?string {
        return $this->getBackingStore()->get('locale');
    }

    /**
     * Gets the mentions property value. List of entities mentioned in the chat message. Supported entities are: user, bot, team, and channel.
     * @return array<ChatMessageMention>|null
    */
    public function getMentions(): ?array {
        return $this->getBackingStore()->get('mentions');
    }

    /**
     * Gets the messageType property value. The messageType property
     * @return ChatMessageType|null
    */
    public function getMessageType(): ?ChatMessageType {
        return $this->getBackingStore()->get('messageType');
    }

    /**
     * Gets the policyViolation property value. Defines the properties of a policy violation set by a data loss prevention (DLP) application.
     * @return ChatMessagePolicyViolation|null
    */
    public function getPolicyViolation(): ?ChatMessagePolicyViolation {
        return $this->getBackingStore()->get('policyViolation');
    }

    /**
     * Gets the reactions property value. Reactions for this chat message (for example, Like).
     * @return array<ChatMessageReaction>|null
    */
    public function getReactions(): ?array {
        return $this->getBackingStore()->get('reactions');
    }

    /**
     * Gets the replies property value. Replies for a specified message. Supports $expand for channel messages.
     * @return array<ChatMessage>|null
    */
    public function getReplies(): ?array {
        return $this->getBackingStore()->get('replies');
    }

    /**
     * Gets the replyToId property value. Read-only. ID of the parent chat message or root chat message of the thread. (Only applies to chat messages in channels, not chats.)
     * @return string|null
    */
    public function getReplyToId(): ?string {
        return $this->getBackingStore()->get('replyToId');
    }

    /**
     * Gets the subject property value. The subject of the chat message, in plaintext.
     * @return string|null
    */
    public function getSubject(): ?string {
        return $this->getBackingStore()->get('subject');
    }

    /**
     * Gets the summary property value. Summary text of the chat message that could be used for push notifications and summary views or fall back views. Only applies to channel chat messages, not chat messages in a chat.
     * @return string|null
    */
    public function getSummary(): ?string {
        return $this->getBackingStore()->get('summary');
    }

    /**
     * Gets the webUrl property value. Read-only. Link to the message in Microsoft Teams.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->getBackingStore()->get('webUrl');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('attachments', $this->getAttachments());
        $writer->writeObjectValue('body', $this->getBody());
        $writer->writeObjectValue('channelIdentity', $this->getChannelIdentity());
        $writer->writeStringValue('chatId', $this->getChatId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeDateTimeValue('deletedDateTime', $this->getDeletedDateTime());
        $writer->writeStringValue('etag', $this->getEtag());
        $writer->writeObjectValue('eventDetail', $this->getEventDetail());
        $writer->writeObjectValue('from', $this->getFrom());
        $writer->writeCollectionOfObjectValues('hostedContents', $this->getHostedContents());
        $writer->writeEnumValue('importance', $this->getImportance());
        $writer->writeDateTimeValue('lastEditedDateTime', $this->getLastEditedDateTime());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('locale', $this->getLocale());
        $writer->writeCollectionOfObjectValues('mentions', $this->getMentions());
        $writer->writeEnumValue('messageType', $this->getMessageType());
        $writer->writeObjectValue('policyViolation', $this->getPolicyViolation());
        $writer->writeCollectionOfObjectValues('reactions', $this->getReactions());
        $writer->writeCollectionOfObjectValues('replies', $this->getReplies());
        $writer->writeStringValue('replyToId', $this->getReplyToId());
        $writer->writeStringValue('subject', $this->getSubject());
        $writer->writeStringValue('summary', $this->getSummary());
        $writer->writeStringValue('webUrl', $this->getWebUrl());
    }

    /**
     * Sets the attachments property value. References to attached objects like files, tabs, meetings etc.
     *  @param array<ChatMessageAttachment>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value): void {
        $this->getBackingStore()->set('attachments', $value);
    }

    /**
     * Sets the body property value. The body property
     *  @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value): void {
        $this->getBackingStore()->set('body', $value);
    }

    /**
     * Sets the channelIdentity property value. If the message was sent in a channel, represents identity of the channel.
     *  @param ChannelIdentity|null $value Value to set for the channelIdentity property.
    */
    public function setChannelIdentity(?ChannelIdentity $value): void {
        $this->getBackingStore()->set('channelIdentity', $value);
    }

    /**
     * Sets the chatId property value. If the message was sent in a chat, represents the identity of the chat.
     *  @param string|null $value Value to set for the chatId property.
    */
    public function setChatId(?string $value): void {
        $this->getBackingStore()->set('chatId', $value);
    }

    /**
     * Sets the createdDateTime property value. Timestamp of when the chat message was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deletedDateTime property value. Read only. Timestamp at which the chat message was deleted, or null if not deleted.
     *  @param DateTime|null $value Value to set for the deletedDateTime property.
    */
    public function setDeletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('deletedDateTime', $value);
    }

    /**
     * Sets the etag property value. Read-only. Version number of the chat message.
     *  @param string|null $value Value to set for the etag property.
    */
    public function setEtag(?string $value): void {
        $this->getBackingStore()->set('etag', $value);
    }

    /**
     * Sets the eventDetail property value. Read-only. If present, represents details of an event that happened in a chat, a channel, or a team, for example, adding new members. For event messages, the messageType property will be set to systemEventMessage.
     *  @param EventMessageDetail|null $value Value to set for the eventDetail property.
    */
    public function setEventDetail(?EventMessageDetail $value): void {
        $this->getBackingStore()->set('eventDetail', $value);
    }

    /**
     * Sets the from property value. Details of the sender of the chat message. Can only be set during migration.
     *  @param ChatMessageFromIdentitySet|null $value Value to set for the from property.
    */
    public function setFrom(?ChatMessageFromIdentitySet $value): void {
        $this->getBackingStore()->set('from', $value);
    }

    /**
     * Sets the hostedContents property value. Content in a message hosted by Microsoft Teams - for example, images or code snippets.
     *  @param array<ChatMessageHostedContent>|null $value Value to set for the hostedContents property.
    */
    public function setHostedContents(?array $value): void {
        $this->getBackingStore()->set('hostedContents', $value);
    }

    /**
     * Sets the importance property value. The importance property
     *  @param ChatMessageImportance|null $value Value to set for the importance property.
    */
    public function setImportance(?ChatMessageImportance $value): void {
        $this->getBackingStore()->set('importance', $value);
    }

    /**
     * Sets the lastEditedDateTime property value. Read only. Timestamp when edits to the chat message were made. Triggers an 'Edited' flag in the Teams UI. If no edits are made the value is null.
     *  @param DateTime|null $value Value to set for the lastEditedDateTime property.
    */
    public function setLastEditedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastEditedDateTime', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Read only. Timestamp when the chat message is created (initial setting) or modified, including when a reaction is added or removed.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the locale property value. Locale of the chat message set by the client. Always set to en-us.
     *  @param string|null $value Value to set for the locale property.
    */
    public function setLocale(?string $value): void {
        $this->getBackingStore()->set('locale', $value);
    }

    /**
     * Sets the mentions property value. List of entities mentioned in the chat message. Supported entities are: user, bot, team, and channel.
     *  @param array<ChatMessageMention>|null $value Value to set for the mentions property.
    */
    public function setMentions(?array $value): void {
        $this->getBackingStore()->set('mentions', $value);
    }

    /**
     * Sets the messageType property value. The messageType property
     *  @param ChatMessageType|null $value Value to set for the messageType property.
    */
    public function setMessageType(?ChatMessageType $value): void {
        $this->getBackingStore()->set('messageType', $value);
    }

    /**
     * Sets the policyViolation property value. Defines the properties of a policy violation set by a data loss prevention (DLP) application.
     *  @param ChatMessagePolicyViolation|null $value Value to set for the policyViolation property.
    */
    public function setPolicyViolation(?ChatMessagePolicyViolation $value): void {
        $this->getBackingStore()->set('policyViolation', $value);
    }

    /**
     * Sets the reactions property value. Reactions for this chat message (for example, Like).
     *  @param array<ChatMessageReaction>|null $value Value to set for the reactions property.
    */
    public function setReactions(?array $value): void {
        $this->getBackingStore()->set('reactions', $value);
    }

    /**
     * Sets the replies property value. Replies for a specified message. Supports $expand for channel messages.
     *  @param array<ChatMessage>|null $value Value to set for the replies property.
    */
    public function setReplies(?array $value): void {
        $this->getBackingStore()->set('replies', $value);
    }

    /**
     * Sets the replyToId property value. Read-only. ID of the parent chat message or root chat message of the thread. (Only applies to chat messages in channels, not chats.)
     *  @param string|null $value Value to set for the replyToId property.
    */
    public function setReplyToId(?string $value): void {
        $this->getBackingStore()->set('replyToId', $value);
    }

    /**
     * Sets the subject property value. The subject of the chat message, in plaintext.
     *  @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the summary property value. Summary text of the chat message that could be used for push notifications and summary views or fall back views. Only applies to channel chat messages, not chat messages in a chat.
     *  @param string|null $value Value to set for the summary property.
    */
    public function setSummary(?string $value): void {
        $this->getBackingStore()->set('summary', $value);
    }

    /**
     * Sets the webUrl property value. Read-only. Link to the message in Microsoft Teams.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
