<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharedWithChannelTeamInfo extends TeamInfo implements Parsable 
{
    /**
     * Instantiates a new SharedWithChannelTeamInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharedWithChannelTeamInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharedWithChannelTeamInfo {
        return new SharedWithChannelTeamInfo();
    }

    /**
     * Gets the allowedMembers property value. A collection of team members who have access to the shared channel.
     * @return array<ConversationMember>|null
    */
    public function getAllowedMembers(): ?array {
        return $this->getBackingStore()->get('allowedMembers');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowedMembers' => fn(ParseNode $n) => $o->setAllowedMembers($n->getCollectionOfObjectValues([ConversationMember::class, 'createFromDiscriminatorValue'])),
            'isHostTeam' => fn(ParseNode $n) => $o->setIsHostTeam($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isHostTeam property value. Indicates whether the team is the host of the channel.
     * @return bool|null
    */
    public function getIsHostTeam(): ?bool {
        return $this->getBackingStore()->get('isHostTeam');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('allowedMembers', $this->getAllowedMembers());
        $writer->writeBooleanValue('isHostTeam', $this->getIsHostTeam());
    }

    /**
     * Sets the allowedMembers property value. A collection of team members who have access to the shared channel.
     *  @param array<ConversationMember>|null $value Value to set for the allowedMembers property.
    */
    public function setAllowedMembers(?array $value): void {
        $this->getBackingStore()->set('allowedMembers', $value);
    }

    /**
     * Sets the isHostTeam property value. Indicates whether the team is the host of the channel.
     *  @param bool|null $value Value to set for the isHostTeam property.
    */
    public function setIsHostTeam(?bool $value): void {
        $this->getBackingStore()->set('isHostTeam', $value);
    }

}
