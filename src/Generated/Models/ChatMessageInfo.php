<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChatMessageInfo extends Entity implements Parsable 
{
    /**
     * @var ItemBody|null $body Body of the chatMessage. This will still contain markers for @mentions and attachments even though the object does not return @mentions and attachments.
    */
    private ?ItemBody $body = null;
    
    /**
     * @var DateTime|null $createdDateTime Date time object representing the time at which message was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var EventMessageDetail|null $eventDetail Read-only.  If present, represents details of an event that happened in a chat, a channel, or a team, for example, members were added, and so on. For event messages, the messageType property will be set to systemEventMessage.
    */
    private ?EventMessageDetail $eventDetail = null;
    
    /**
     * @var ChatMessageFromIdentitySet|null $from Information about the sender of the message.
    */
    private ?ChatMessageFromIdentitySet $from = null;
    
    /**
     * @var bool|null $isDeleted If set to true, the original message has been deleted.
    */
    private ?bool $isDeleted = null;
    
    /**
     * @var ChatMessageType|null $messageType The messageType property
    */
    private ?ChatMessageType $messageType = null;
    
    /**
     * Instantiates a new chatMessageInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.chatMessageInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChatMessageInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChatMessageInfo {
        return new ChatMessageInfo();
    }

    /**
     * Gets the body property value. Body of the chatMessage. This will still contain markers for @mentions and attachments even though the object does not return @mentions and attachments.
     * @return ItemBody|null
    */
    public function getBody(): ?ItemBody {
        return $this->body;
    }

    /**
     * Gets the createdDateTime property value. Date time object representing the time at which message was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the eventDetail property value. Read-only.  If present, represents details of an event that happened in a chat, a channel, or a team, for example, members were added, and so on. For event messages, the messageType property will be set to systemEventMessage.
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
            'body' => fn(ParseNode $n) => $o->setBody($n->getObjectValue([ItemBody::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'eventDetail' => fn(ParseNode $n) => $o->setEventDetail($n->getObjectValue([EventMessageDetail::class, 'createFromDiscriminatorValue'])),
            'from' => fn(ParseNode $n) => $o->setFrom($n->getObjectValue([ChatMessageFromIdentitySet::class, 'createFromDiscriminatorValue'])),
            'isDeleted' => fn(ParseNode $n) => $o->setIsDeleted($n->getBooleanValue()),
            'messageType' => fn(ParseNode $n) => $o->setMessageType($n->getEnumValue(ChatMessageType::class)),
        ]);
    }

    /**
     * Gets the from property value. Information about the sender of the message.
     * @return ChatMessageFromIdentitySet|null
    */
    public function getFrom(): ?ChatMessageFromIdentitySet {
        return $this->from;
    }

    /**
     * Gets the isDeleted property value. If set to true, the original message has been deleted.
     * @return bool|null
    */
    public function getIsDeleted(): ?bool {
        return $this->isDeleted;
    }

    /**
     * Gets the messageType property value. The messageType property
     * @return ChatMessageType|null
    */
    public function getMessageType(): ?ChatMessageType {
        return $this->messageType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('body', $this->body);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('eventDetail', $this->eventDetail);
        $writer->writeObjectValue('from', $this->from);
        $writer->writeBooleanValue('isDeleted', $this->isDeleted);
        $writer->writeEnumValue('messageType', $this->messageType);
    }

    /**
     * Sets the body property value. Body of the chatMessage. This will still contain markers for @mentions and attachments even though the object does not return @mentions and attachments.
     *  @param ItemBody|null $value Value to set for the body property.
    */
    public function setBody(?ItemBody $value ): void {
        $this->body = $value;
    }

    /**
     * Sets the createdDateTime property value. Date time object representing the time at which message was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the eventDetail property value. Read-only.  If present, represents details of an event that happened in a chat, a channel, or a team, for example, members were added, and so on. For event messages, the messageType property will be set to systemEventMessage.
     *  @param EventMessageDetail|null $value Value to set for the eventDetail property.
    */
    public function setEventDetail(?EventMessageDetail $value ): void {
        $this->eventDetail = $value;
    }

    /**
     * Sets the from property value. Information about the sender of the message.
     *  @param ChatMessageFromIdentitySet|null $value Value to set for the from property.
    */
    public function setFrom(?ChatMessageFromIdentitySet $value ): void {
        $this->from = $value;
    }

    /**
     * Sets the isDeleted property value. If set to true, the original message has been deleted.
     *  @param bool|null $value Value to set for the isDeleted property.
    */
    public function setIsDeleted(?bool $value ): void {
        $this->isDeleted = $value;
    }

    /**
     * Sets the messageType property value. The messageType property
     *  @param ChatMessageType|null $value Value to set for the messageType property.
    */
    public function setMessageType(?ChatMessageType $value ): void {
        $this->messageType = $value;
    }

}
