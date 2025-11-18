<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A conversation for Teams QA online meeting.
*/
class OnlineMeetingEngagementConversation extends EngagementConversation implements Parsable 
{
    /**
     * Instantiates a new OnlineMeetingEngagementConversation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onlineMeetingEngagementConversation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnlineMeetingEngagementConversation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnlineMeetingEngagementConversation {
        return new OnlineMeetingEngagementConversation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'moderationState' => fn(ParseNode $n) => $o->setModerationState($n->getEnumValue(EngagementConversationModerationState::class)),
            'onlineMeeting' => fn(ParseNode $n) => $o->setOnlineMeeting($n->getObjectValue([OnlineMeeting::class, 'createFromDiscriminatorValue'])),
            'onlineMeetingId' => fn(ParseNode $n) => $o->setOnlineMeetingId($n->getStringValue()),
            'organizer' => fn(ParseNode $n) => $o->setOrganizer($n->getObjectValue([EngagementIdentitySet::class, 'createFromDiscriminatorValue'])),
            'upvoteCount' => fn(ParseNode $n) => $o->setUpvoteCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the moderationState property value. Represents the moderation state of an Engage conversation message.
     * @return EngagementConversationModerationState|null
    */
    public function getModerationState(): ?EngagementConversationModerationState {
        $val = $this->getBackingStore()->get('moderationState');
        if (is_null($val) || $val instanceof EngagementConversationModerationState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'moderationState'");
    }

    /**
     * Gets the onlineMeeting property value. The onlineMeeting property
     * @return OnlineMeeting|null
    */
    public function getOnlineMeeting(): ?OnlineMeeting {
        $val = $this->getBackingStore()->get('onlineMeeting');
        if (is_null($val) || $val instanceof OnlineMeeting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onlineMeeting'");
    }

    /**
     * Gets the onlineMeetingId property value. The unique identifier of the online meeting associated with this conversation. The online meeting ID links the conversation to a specific meeting instance.
     * @return string|null
    */
    public function getOnlineMeetingId(): ?string {
        $val = $this->getBackingStore()->get('onlineMeetingId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onlineMeetingId'");
    }

    /**
     * Gets the organizer property value. The organizer property
     * @return EngagementIdentitySet|null
    */
    public function getOrganizer(): ?EngagementIdentitySet {
        $val = $this->getBackingStore()->get('organizer');
        if (is_null($val) || $val instanceof EngagementIdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizer'");
    }

    /**
     * Gets the upvoteCount property value. The number of upvotes the conversation received.
     * @return int|null
    */
    public function getUpvoteCount(): ?int {
        $val = $this->getBackingStore()->get('upvoteCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'upvoteCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('moderationState', $this->getModerationState());
        $writer->writeObjectValue('onlineMeeting', $this->getOnlineMeeting());
        $writer->writeStringValue('onlineMeetingId', $this->getOnlineMeetingId());
        $writer->writeObjectValue('organizer', $this->getOrganizer());
    }

    /**
     * Sets the moderationState property value. Represents the moderation state of an Engage conversation message.
     * @param EngagementConversationModerationState|null $value Value to set for the moderationState property.
    */
    public function setModerationState(?EngagementConversationModerationState $value): void {
        $this->getBackingStore()->set('moderationState', $value);
    }

    /**
     * Sets the onlineMeeting property value. The onlineMeeting property
     * @param OnlineMeeting|null $value Value to set for the onlineMeeting property.
    */
    public function setOnlineMeeting(?OnlineMeeting $value): void {
        $this->getBackingStore()->set('onlineMeeting', $value);
    }

    /**
     * Sets the onlineMeetingId property value. The unique identifier of the online meeting associated with this conversation. The online meeting ID links the conversation to a specific meeting instance.
     * @param string|null $value Value to set for the onlineMeetingId property.
    */
    public function setOnlineMeetingId(?string $value): void {
        $this->getBackingStore()->set('onlineMeetingId', $value);
    }

    /**
     * Sets the organizer property value. The organizer property
     * @param EngagementIdentitySet|null $value Value to set for the organizer property.
    */
    public function setOrganizer(?EngagementIdentitySet $value): void {
        $this->getBackingStore()->set('organizer', $value);
    }

    /**
     * Sets the upvoteCount property value. The number of upvotes the conversation received.
     * @param int|null $value Value to set for the upvoteCount property.
    */
    public function setUpvoteCount(?int $value): void {
        $this->getBackingStore()->set('upvoteCount', $value);
    }

}
