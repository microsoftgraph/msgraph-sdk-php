<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

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
        $val = $this->getBackingStore()->get('attachments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ChatMessageAttachment::class);
            /** @var array<ChatMessageAttachment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attachments'");
    }

    /**
     * Gets the body property value. The body property
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
     * Gets the channelIdentity property value. If the message was sent in a channel, represents identity of the channel.
     * @return ChannelIdentity|null
    */
    public function getChannelIdentity(): ?ChannelIdentity {
        $val = $this->getBackingStore()->get('channelIdentity');
        if (is_null($val) || $val instanceof ChannelIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'channelIdentity'");
    }

    /**
     * Gets the chatId property value. If the message was sent in a chat, represents the identity of the chat.
     * @return string|null
    */
    public function getChatId(): ?string {
        $val = $this->getBackingStore()->get('chatId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'chatId'");
    }

    /**
     * Gets the createdDateTime property value. Timestamp of when the chat message was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the deletedDateTime property value. Read only. Timestamp at which the chat message was deleted, or null if not deleted.
     * @return DateTime|null
    */
    public function getDeletedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('deletedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedDateTime'");
    }

    /**
     * Gets the etag property value. Read-only. Version number of the chat message.
     * @return string|null
    */
    public function getEtag(): ?string {
        $val = $this->getBackingStore()->get('etag');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'etag'");
    }

    /**
     * Gets the eventDetail property value. Read-only. If present, represents details of an event that happened in a chat, a channel, or a team, for example, adding new members. For event messages, the messageType property will be set to systemEventMessage.
     * @return EventMessageDetail|null
    */
    public function getEventDetail(): ?EventMessageDetail {
        $val = $this->getBackingStore()->get('eventDetail');
        if (is_null($val) || $val instanceof EventMessageDetail) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventDetail'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
            'messageHistory' => fn(ParseNode $n) => $o->setMessageHistory($n->getCollectionOfObjectValues([ChatMessageHistoryItem::class, 'createFromDiscriminatorValue'])),
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
        $val = $this->getBackingStore()->get('from');
        if (is_null($val) || $val instanceof ChatMessageFromIdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'from'");
    }

    /**
     * Gets the hostedContents property value. Content in a message hosted by Microsoft Teams - for example, images or code snippets.
     * @return array<ChatMessageHostedContent>|null
    */
    public function getHostedContents(): ?array {
        $val = $this->getBackingStore()->get('hostedContents');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ChatMessageHostedContent::class);
            /** @var array<ChatMessageHostedContent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hostedContents'");
    }

    /**
     * Gets the importance property value. The importance property
     * @return ChatMessageImportance|null
    */
    public function getImportance(): ?ChatMessageImportance {
        $val = $this->getBackingStore()->get('importance');
        if (is_null($val) || $val instanceof ChatMessageImportance) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'importance'");
    }

    /**
     * Gets the lastEditedDateTime property value. Read only. Timestamp when edits to the chat message were made. Triggers an 'Edited' flag in the Teams UI. If no edits are made the value is null.
     * @return DateTime|null
    */
    public function getLastEditedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastEditedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastEditedDateTime'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Read only. Timestamp when the chat message is created (initial setting) or modified, including when a reaction is added or removed.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the locale property value. Locale of the chat message set by the client. Always set to en-us.
     * @return string|null
    */
    public function getLocale(): ?string {
        $val = $this->getBackingStore()->get('locale');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'locale'");
    }

    /**
     * Gets the mentions property value. List of entities mentioned in the chat message. Supported entities are: user, bot, team, and channel.
     * @return array<ChatMessageMention>|null
    */
    public function getMentions(): ?array {
        $val = $this->getBackingStore()->get('mentions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ChatMessageMention::class);
            /** @var array<ChatMessageMention>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mentions'");
    }

    /**
     * Gets the messageHistory property value. List of activity history of a message item, including modification time and actions, such as reactionAdded, reactionRemoved, or reaction changes, on the message.
     * @return array<ChatMessageHistoryItem>|null
    */
    public function getMessageHistory(): ?array {
        $val = $this->getBackingStore()->get('messageHistory');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ChatMessageHistoryItem::class);
            /** @var array<ChatMessageHistoryItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messageHistory'");
    }

    /**
     * Gets the messageType property value. The messageType property
     * @return ChatMessageType|null
    */
    public function getMessageType(): ?ChatMessageType {
        $val = $this->getBackingStore()->get('messageType');
        if (is_null($val) || $val instanceof ChatMessageType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messageType'");
    }

    /**
     * Gets the policyViolation property value. Defines the properties of a policy violation set by a data loss prevention (DLP) application.
     * @return ChatMessagePolicyViolation|null
    */
    public function getPolicyViolation(): ?ChatMessagePolicyViolation {
        $val = $this->getBackingStore()->get('policyViolation');
        if (is_null($val) || $val instanceof ChatMessagePolicyViolation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyViolation'");
    }

    /**
     * Gets the reactions property value. Reactions for this chat message (for example, Like).
     * @return array<ChatMessageReaction>|null
    */
    public function getReactions(): ?array {
        $val = $this->getBackingStore()->get('reactions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ChatMessageReaction::class);
            /** @var array<ChatMessageReaction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reactions'");
    }

    /**
     * Gets the replies property value. Replies for a specified message. Supports $expand for channel messages.
     * @return array<ChatMessage>|null
    */
    public function getReplies(): ?array {
        $val = $this->getBackingStore()->get('replies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ChatMessage::class);
            /** @var array<ChatMessage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'replies'");
    }

    /**
     * Gets the replyToId property value. Read-only. ID of the parent chat message or root chat message of the thread. (Only applies to chat messages in channels, not chats.)
     * @return string|null
    */
    public function getReplyToId(): ?string {
        $val = $this->getBackingStore()->get('replyToId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'replyToId'");
    }

    /**
     * Gets the subject property value. The subject of the chat message, in plaintext.
     * @return string|null
    */
    public function getSubject(): ?string {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subject'");
    }

    /**
     * Gets the summary property value. Summary text of the chat message that could be used for push notifications and summary views or fall back views. Only applies to channel chat messages, not chat messages in a chat.
     * @return string|null
    */
    public function getSummary(): ?string {
        $val = $this->getBackingStore()->get('summary');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'summary'");
    }

    /**
     * Gets the webUrl property value. Read-only. Link to the message in Microsoft Teams.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        $val = $this->getBackingStore()->get('webUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'webUrl'");
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
        $writer->writeCollectionOfObjectValues('messageHistory', $this->getMessageHistory());
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
     * @param array<ChatMessageAttachment>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value): void {
        $this->getBackingStore()->set('attachments', $value);
    }

    /**
     * Sets the body property value. The body property
     * @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value): void {
        $this->getBackingStore()->set('body', $value);
    }

    /**
     * Sets the channelIdentity property value. If the message was sent in a channel, represents identity of the channel.
     * @param ChannelIdentity|null $value Value to set for the channelIdentity property.
    */
    public function setChannelIdentity(?ChannelIdentity $value): void {
        $this->getBackingStore()->set('channelIdentity', $value);
    }

    /**
     * Sets the chatId property value. If the message was sent in a chat, represents the identity of the chat.
     * @param string|null $value Value to set for the chatId property.
    */
    public function setChatId(?string $value): void {
        $this->getBackingStore()->set('chatId', $value);
    }

    /**
     * Sets the createdDateTime property value. Timestamp of when the chat message was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deletedDateTime property value. Read only. Timestamp at which the chat message was deleted, or null if not deleted.
     * @param DateTime|null $value Value to set for the deletedDateTime property.
    */
    public function setDeletedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('deletedDateTime', $value);
    }

    /**
     * Sets the etag property value. Read-only. Version number of the chat message.
     * @param string|null $value Value to set for the etag property.
    */
    public function setEtag(?string $value): void {
        $this->getBackingStore()->set('etag', $value);
    }

    /**
     * Sets the eventDetail property value. Read-only. If present, represents details of an event that happened in a chat, a channel, or a team, for example, adding new members. For event messages, the messageType property will be set to systemEventMessage.
     * @param EventMessageDetail|null $value Value to set for the eventDetail property.
    */
    public function setEventDetail(?EventMessageDetail $value): void {
        $this->getBackingStore()->set('eventDetail', $value);
    }

    /**
     * Sets the from property value. Details of the sender of the chat message. Can only be set during migration.
     * @param ChatMessageFromIdentitySet|null $value Value to set for the from property.
    */
    public function setFrom(?ChatMessageFromIdentitySet $value): void {
        $this->getBackingStore()->set('from', $value);
    }

    /**
     * Sets the hostedContents property value. Content in a message hosted by Microsoft Teams - for example, images or code snippets.
     * @param array<ChatMessageHostedContent>|null $value Value to set for the hostedContents property.
    */
    public function setHostedContents(?array $value): void {
        $this->getBackingStore()->set('hostedContents', $value);
    }

    /**
     * Sets the importance property value. The importance property
     * @param ChatMessageImportance|null $value Value to set for the importance property.
    */
    public function setImportance(?ChatMessageImportance $value): void {
        $this->getBackingStore()->set('importance', $value);
    }

    /**
     * Sets the lastEditedDateTime property value. Read only. Timestamp when edits to the chat message were made. Triggers an 'Edited' flag in the Teams UI. If no edits are made the value is null.
     * @param DateTime|null $value Value to set for the lastEditedDateTime property.
    */
    public function setLastEditedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastEditedDateTime', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Read only. Timestamp when the chat message is created (initial setting) or modified, including when a reaction is added or removed.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the locale property value. Locale of the chat message set by the client. Always set to en-us.
     * @param string|null $value Value to set for the locale property.
    */
    public function setLocale(?string $value): void {
        $this->getBackingStore()->set('locale', $value);
    }

    /**
     * Sets the mentions property value. List of entities mentioned in the chat message. Supported entities are: user, bot, team, and channel.
     * @param array<ChatMessageMention>|null $value Value to set for the mentions property.
    */
    public function setMentions(?array $value): void {
        $this->getBackingStore()->set('mentions', $value);
    }

    /**
     * Sets the messageHistory property value. List of activity history of a message item, including modification time and actions, such as reactionAdded, reactionRemoved, or reaction changes, on the message.
     * @param array<ChatMessageHistoryItem>|null $value Value to set for the messageHistory property.
    */
    public function setMessageHistory(?array $value): void {
        $this->getBackingStore()->set('messageHistory', $value);
    }

    /**
     * Sets the messageType property value. The messageType property
     * @param ChatMessageType|null $value Value to set for the messageType property.
    */
    public function setMessageType(?ChatMessageType $value): void {
        $this->getBackingStore()->set('messageType', $value);
    }

    /**
     * Sets the policyViolation property value. Defines the properties of a policy violation set by a data loss prevention (DLP) application.
     * @param ChatMessagePolicyViolation|null $value Value to set for the policyViolation property.
    */
    public function setPolicyViolation(?ChatMessagePolicyViolation $value): void {
        $this->getBackingStore()->set('policyViolation', $value);
    }

    /**
     * Sets the reactions property value. Reactions for this chat message (for example, Like).
     * @param array<ChatMessageReaction>|null $value Value to set for the reactions property.
    */
    public function setReactions(?array $value): void {
        $this->getBackingStore()->set('reactions', $value);
    }

    /**
     * Sets the replies property value. Replies for a specified message. Supports $expand for channel messages.
     * @param array<ChatMessage>|null $value Value to set for the replies property.
    */
    public function setReplies(?array $value): void {
        $this->getBackingStore()->set('replies', $value);
    }

    /**
     * Sets the replyToId property value. Read-only. ID of the parent chat message or root chat message of the thread. (Only applies to chat messages in channels, not chats.)
     * @param string|null $value Value to set for the replyToId property.
    */
    public function setReplyToId(?string $value): void {
        $this->getBackingStore()->set('replyToId', $value);
    }

    /**
     * Sets the subject property value. The subject of the chat message, in plaintext.
     * @param string|null $value Value to set for the subject property.
    */
    public function setSubject(?string $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

    /**
     * Sets the summary property value. Summary text of the chat message that could be used for push notifications and summary views or fall back views. Only applies to channel chat messages, not chat messages in a chat.
     * @param string|null $value Value to set for the summary property.
    */
    public function setSummary(?string $value): void {
        $this->getBackingStore()->set('summary', $value);
    }

    /**
     * Sets the webUrl property value. Read-only. Link to the message in Microsoft Teams.
     * @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value): void {
        $this->getBackingStore()->set('webUrl', $value);
    }

}
