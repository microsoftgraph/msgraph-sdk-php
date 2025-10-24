<?php

namespace Microsoft\\Graph\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * A Viva Engage conversation message.
*/
class EngagementConversationMessage extends Entity implements Parsable 
{
    /**
     * Instantiates a new EngagementConversationMessage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EngagementConversationMessage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EngagementConversationMessage {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.engagementConversationDiscussionMessage': return new EngagementConversationDiscussionMessage();
                case '#microsoft.graph.engagementConversationQuestionMessage': return new EngagementConversationQuestionMessage();
                case '#microsoft.graph.engagementConversationSystemMessage': return new EngagementConversationSystemMessage();
            }
        }
        return new EngagementConversationMessage();
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
     * Gets the conversation property value. The conversation property
     * @return EngagementConversation|null
    */
    public function getConversation(): ?EngagementConversation {
        $val = $this->getBackingStore()->get('conversation');
        if (is_null($val) || $val instanceof EngagementConversation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conversation'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the message was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the creationMode property value. Indicates that the resource is in migration state and is currently being used for migration purposes.
     * @return EngagementCreationMode|null
    */
    public function getCreationMode(): ?EngagementCreationMode {
        $val = $this->getBackingStore()->get('creationMode');
        if (is_null($val) || $val instanceof EngagementCreationMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creationMode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'body' => fn(ParseNode $n) => $o->setBody($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'conversation' => fn(ParseNode $n) => $o->setConversation($n->getObjectValue([EngagementConversation::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'creationMode' => fn(ParseNode $n) => $o->setCreationMode($n->getEnumValue(EngagementCreationMode::class)),
            'from' => fn(ParseNode $n) => $o->setFrom($n->getObjectValue([EngagementIdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'reactions' => fn(ParseNode $n) => $o->setReactions($n->getCollectionOfObjectValues([EngagementConversationMessageReaction::class, 'createFromDiscriminatorValue'])),
            'replies' => fn(ParseNode $n) => $o->setReplies($n->getCollectionOfObjectValues([EngagementConversationMessage::class, 'createFromDiscriminatorValue'])),
            'replyTo' => fn(ParseNode $n) => $o->setReplyTo($n->getObjectValue([EngagementConversationMessage::class, 'createFromDiscriminatorValue'])),
            'replyToId' => fn(ParseNode $n) => $o->setReplyToId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the from property value. Identity of the sender of the message.
     * @return EngagementIdentitySet|null
    */
    public function getFrom(): ?EngagementIdentitySet {
        $val = $this->getBackingStore()->get('from');
        if (is_null($val) || $val instanceof EngagementIdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'from'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when message was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the reactions property value. A collection of reactions (such as like and smile) that users have applied to this message.
     * @return array<EngagementConversationMessageReaction>|null
    */
    public function getReactions(): ?array {
        $val = $this->getBackingStore()->get('reactions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EngagementConversationMessageReaction::class);
            /** @var array<EngagementConversationMessageReaction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reactions'");
    }

    /**
     * Gets the replies property value. A collection of messages that are replies to this message and form a threaded discussion.
     * @return array<EngagementConversationMessage>|null
    */
    public function getReplies(): ?array {
        $val = $this->getBackingStore()->get('replies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, EngagementConversationMessage::class);
            /** @var array<EngagementConversationMessage>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'replies'");
    }

    /**
     * Gets the replyTo property value. The parent message to which this message is a reply, if it is part of a reply chain.
     * @return EngagementConversationMessage|null
    */
    public function getReplyTo(): ?EngagementConversationMessage {
        $val = $this->getBackingStore()->get('replyTo');
        if (is_null($val) || $val instanceof EngagementConversationMessage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'replyTo'");
    }

    /**
     * Gets the replyToId property value. The ID of the parent message to which this message is a reply, if applicable.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('body', $this->getBody());
        $writer->writeObjectValue('conversation', $this->getConversation());
        $writer->writeEnumValue('creationMode', $this->getCreationMode());
        $writer->writeObjectValue('from', $this->getFrom());
        $writer->writeCollectionOfObjectValues('reactions', $this->getReactions());
        $writer->writeCollectionOfObjectValues('replies', $this->getReplies());
        $writer->writeObjectValue('replyTo', $this->getReplyTo());
        $writer->writeStringValue('replyToId', $this->getReplyToId());
    }

    /**
     * Sets the body property value. The body property
     * @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value): void {
        $this->getBackingStore()->set('body', $value);
    }

    /**
     * Sets the conversation property value. The conversation property
     * @param EngagementConversation|null $value Value to set for the conversation property.
    */
    public function setConversation(?EngagementConversation $value): void {
        $this->getBackingStore()->set('conversation', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the message was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the creationMode property value. Indicates that the resource is in migration state and is currently being used for migration purposes.
     * @param EngagementCreationMode|null $value Value to set for the creationMode property.
    */
    public function setCreationMode(?EngagementCreationMode $value): void {
        $this->getBackingStore()->set('creationMode', $value);
    }

    /**
     * Sets the from property value. Identity of the sender of the message.
     * @param EngagementIdentitySet|null $value Value to set for the from property.
    */
    public function setFrom(?EngagementIdentitySet $value): void {
        $this->getBackingStore()->set('from', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when message was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the reactions property value. A collection of reactions (such as like and smile) that users have applied to this message.
     * @param array<EngagementConversationMessageReaction>|null $value Value to set for the reactions property.
    */
    public function setReactions(?array $value): void {
        $this->getBackingStore()->set('reactions', $value);
    }

    /**
     * Sets the replies property value. A collection of messages that are replies to this message and form a threaded discussion.
     * @param array<EngagementConversationMessage>|null $value Value to set for the replies property.
    */
    public function setReplies(?array $value): void {
        $this->getBackingStore()->set('replies', $value);
    }

    /**
     * Sets the replyTo property value. The parent message to which this message is a reply, if it is part of a reply chain.
     * @param EngagementConversationMessage|null $value Value to set for the replyTo property.
    */
    public function setReplyTo(?EngagementConversationMessage $value): void {
        $this->getBackingStore()->set('replyTo', $value);
    }

    /**
     * Sets the replyToId property value. The ID of the parent message to which this message is a reply, if applicable.
     * @param string|null $value Value to set for the replyToId property.
    */
    public function setReplyToId(?string $value): void {
        $this->getBackingStore()->set('replyToId', $value);
    }

}
