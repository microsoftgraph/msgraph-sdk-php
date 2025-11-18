<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MeetingPolicyUpdatedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * Instantiates a new MeetingPolicyUpdatedEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.meetingPolicyUpdatedEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MeetingPolicyUpdatedEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MeetingPolicyUpdatedEventMessageDetail {
        return new MeetingPolicyUpdatedEventMessageDetail();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'initiator' => fn(ParseNode $n) => $o->setInitiator($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'meetingChatEnabled' => fn(ParseNode $n) => $o->setMeetingChatEnabled($n->getBooleanValue()),
            'meetingChatId' => fn(ParseNode $n) => $o->setMeetingChatId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the initiator property value. Initiator of the event.
     * @return IdentitySet|null
    */
    public function getInitiator(): ?IdentitySet {
        $val = $this->getBackingStore()->get('initiator');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initiator'");
    }

    /**
     * Gets the meetingChatEnabled property value. Represents whether the meeting chat is enabled or not.
     * @return bool|null
    */
    public function getMeetingChatEnabled(): ?bool {
        $val = $this->getBackingStore()->get('meetingChatEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'meetingChatEnabled'");
    }

    /**
     * Gets the meetingChatId property value. Unique identifier of the meeting chat.
     * @return string|null
    */
    public function getMeetingChatId(): ?string {
        $val = $this->getBackingStore()->get('meetingChatId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'meetingChatId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('initiator', $this->getInitiator());
        $writer->writeBooleanValue('meetingChatEnabled', $this->getMeetingChatEnabled());
        $writer->writeStringValue('meetingChatId', $this->getMeetingChatId());
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     * @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value): void {
        $this->getBackingStore()->set('initiator', $value);
    }

    /**
     * Sets the meetingChatEnabled property value. Represents whether the meeting chat is enabled or not.
     * @param bool|null $value Value to set for the meetingChatEnabled property.
    */
    public function setMeetingChatEnabled(?bool $value): void {
        $this->getBackingStore()->set('meetingChatEnabled', $value);
    }

    /**
     * Sets the meetingChatId property value. Unique identifier of the meeting chat.
     * @param string|null $value Value to set for the meetingChatId property.
    */
    public function setMeetingChatId(?string $value): void {
        $this->getBackingStore()->set('meetingChatId', $value);
    }

}
