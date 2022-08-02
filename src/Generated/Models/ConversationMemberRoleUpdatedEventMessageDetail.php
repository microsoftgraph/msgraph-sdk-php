<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConversationMemberRoleUpdatedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * @var array<string>|null $conversationMemberRoles Roles for the coversation member user.
    */
    private ?array $conversationMemberRoles = null;
    
    /**
     * @var TeamworkUserIdentity|null $conversationMemberUser Identity of the conversation member user.
    */
    private ?TeamworkUserIdentity $conversationMemberUser = null;
    
    /**
     * @var IdentitySet|null $initiator Initiator of the event.
    */
    private ?IdentitySet $initiator = null;
    
    /**
     * Instantiates a new ConversationMemberRoleUpdatedEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.conversationMemberRoleUpdatedEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConversationMemberRoleUpdatedEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConversationMemberRoleUpdatedEventMessageDetail {
        return new ConversationMemberRoleUpdatedEventMessageDetail();
    }

    /**
     * Gets the conversationMemberRoles property value. Roles for the coversation member user.
     * @return array<string>|null
    */
    public function getConversationMemberRoles(): ?array {
        return $this->conversationMemberRoles;
    }

    /**
     * Gets the conversationMemberUser property value. Identity of the conversation member user.
     * @return TeamworkUserIdentity|null
    */
    public function getConversationMemberUser(): ?TeamworkUserIdentity {
        return $this->conversationMemberUser;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'conversationMemberRoles' => function (ParseNode $n) use ($o) { $o->setConversationMemberRoles($n->getCollectionOfPrimitiveValues()); },
            'conversationMemberUser' => function (ParseNode $n) use ($o) { $o->setConversationMemberUser($n->getObjectValue(array(TeamworkUserIdentity::class, 'createFromDiscriminatorValue'))); },
            'initiator' => function (ParseNode $n) use ($o) { $o->setInitiator($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('conversationMemberRoles', $this->conversationMemberRoles);
        $writer->writeObjectValue('conversationMemberUser', $this->conversationMemberUser);
        $writer->writeObjectValue('initiator', $this->initiator);
    }

    /**
     * Sets the conversationMemberRoles property value. Roles for the coversation member user.
     *  @param array<string>|null $value Value to set for the conversationMemberRoles property.
    */
    public function setConversationMemberRoles(?array $value ): void {
        $this->conversationMemberRoles = $value;
    }

    /**
     * Sets the conversationMemberUser property value. Identity of the conversation member user.
     *  @param TeamworkUserIdentity|null $value Value to set for the conversationMemberUser property.
    */
    public function setConversationMemberUser(?TeamworkUserIdentity $value ): void {
        $this->conversationMemberUser = $value;
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     *  @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value ): void {
        $this->initiator = $value;
    }

}
