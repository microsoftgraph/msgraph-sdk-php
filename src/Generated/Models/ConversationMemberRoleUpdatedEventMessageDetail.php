<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ConversationMemberRoleUpdatedEventMessageDetail extends EventMessageDetail implements Parsable 
{
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
        $val = $this->getBackingStore()->get('conversationMemberRoles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conversationMemberRoles'");
    }

    /**
     * Gets the conversationMemberUser property value. Identity of the conversation member user.
     * @return TeamworkUserIdentity|null
    */
    public function getConversationMemberUser(): ?TeamworkUserIdentity {
        $val = $this->getBackingStore()->get('conversationMemberUser');
        if (is_null($val) || $val instanceof TeamworkUserIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conversationMemberUser'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'conversationMemberRoles' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setConversationMemberRoles($val);
            },
            'conversationMemberUser' => fn(ParseNode $n) => $o->setConversationMemberUser($n->getObjectValue([TeamworkUserIdentity::class, 'createFromDiscriminatorValue'])),
            'initiator' => fn(ParseNode $n) => $o->setInitiator($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('conversationMemberRoles', $this->getConversationMemberRoles());
        $writer->writeObjectValue('conversationMemberUser', $this->getConversationMemberUser());
        $writer->writeObjectValue('initiator', $this->getInitiator());
    }

    /**
     * Sets the conversationMemberRoles property value. Roles for the coversation member user.
     * @param array<string>|null $value Value to set for the conversationMemberRoles property.
    */
    public function setConversationMemberRoles(?array $value): void {
        $this->getBackingStore()->set('conversationMemberRoles', $value);
    }

    /**
     * Sets the conversationMemberUser property value. Identity of the conversation member user.
     * @param TeamworkUserIdentity|null $value Value to set for the conversationMemberUser property.
    */
    public function setConversationMemberUser(?TeamworkUserIdentity $value): void {
        $this->getBackingStore()->set('conversationMemberUser', $value);
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     * @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value): void {
        $this->getBackingStore()->set('initiator', $value);
    }

}
