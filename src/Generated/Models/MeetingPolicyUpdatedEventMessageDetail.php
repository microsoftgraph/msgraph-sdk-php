<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MeetingPolicyUpdatedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * @var IdentitySet|null $initiator Initiator of the event.
    */
    private ?IdentitySet $initiator = null;
    
    /**
     * @var bool|null $meetingChatEnabled Represents whether the meeting chat is enabled or not.
    */
    private ?bool $meetingChatEnabled = null;
    
    /**
     * @var string|null $meetingChatId Unique identifier of the meeting chat.
    */
    private ?string $meetingChatId = null;
    
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'initiator' => function (ParseNode $n) use ($o) { $o->setInitiator($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'meetingChatEnabled' => function (ParseNode $n) use ($o) { $o->setMeetingChatEnabled($n->getBooleanValue()); },
            'meetingChatId' => function (ParseNode $n) use ($o) { $o->setMeetingChatId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the initiator property value. Initiator of the event.
     * @return IdentitySet|null
    */
    public function getInitiator(): ?IdentitySet {
        return $this->initiator;
    }

    /**
     * Gets the meetingChatEnabled property value. Represents whether the meeting chat is enabled or not.
     * @return bool|null
    */
    public function getMeetingChatEnabled(): ?bool {
        return $this->meetingChatEnabled;
    }

    /**
     * Gets the meetingChatId property value. Unique identifier of the meeting chat.
     * @return string|null
    */
    public function getMeetingChatId(): ?string {
        return $this->meetingChatId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('initiator', $this->initiator);
        $writer->writeBooleanValue('meetingChatEnabled', $this->meetingChatEnabled);
        $writer->writeStringValue('meetingChatId', $this->meetingChatId);
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     *  @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value ): void {
        $this->initiator = $value;
    }

    /**
     * Sets the meetingChatEnabled property value. Represents whether the meeting chat is enabled or not.
     *  @param bool|null $value Value to set for the meetingChatEnabled property.
    */
    public function setMeetingChatEnabled(?bool $value ): void {
        $this->meetingChatEnabled = $value;
    }

    /**
     * Sets the meetingChatId property value. Unique identifier of the meeting chat.
     *  @param string|null $value Value to set for the meetingChatId property.
    */
    public function setMeetingChatId(?string $value ): void {
        $this->meetingChatId = $value;
    }

}
