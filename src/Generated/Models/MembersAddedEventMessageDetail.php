<?php

namespace Microsoft\Graph\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MembersAddedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * Instantiates a new MembersAddedEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.membersAddedEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MembersAddedEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MembersAddedEventMessageDetail {
        return new MembersAddedEventMessageDetail();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'initiator' => fn(ParseNode $n) => $o->setInitiator($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([TeamworkUserIdentity::class, 'createFromDiscriminatorValue'])),
            'visibleHistoryStartDateTime' => fn(ParseNode $n) => $o->setVisibleHistoryStartDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the initiator property value. Initiator of the event.
     * @return IdentitySet|null
    */
    public function getInitiator(): ?IdentitySet {
        return $this->getBackingStore()->get('initiator');
    }

    /**
     * Gets the members property value. List of members added.
     * @return array<TeamworkUserIdentity>|null
    */
    public function getMembers(): ?array {
        return $this->getBackingStore()->get('members');
    }

    /**
     * Gets the visibleHistoryStartDateTime property value. The timestamp that denotes how far back a conversation's history is shared with the conversation members.
     * @return DateTime|null
    */
    public function getVisibleHistoryStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('visibleHistoryStartDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('initiator', $this->getInitiator());
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
        $writer->writeDateTimeValue('visibleHistoryStartDateTime', $this->getVisibleHistoryStartDateTime());
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     *  @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value): void {
        $this->getBackingStore()->set('initiator', $value);
    }

    /**
     * Sets the members property value. List of members added.
     *  @param array<TeamworkUserIdentity>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

    /**
     * Sets the visibleHistoryStartDateTime property value. The timestamp that denotes how far back a conversation's history is shared with the conversation members.
     *  @param DateTime|null $value Value to set for the visibleHistoryStartDateTime property.
    */
    public function setVisibleHistoryStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('visibleHistoryStartDateTime', $value);
    }

}
