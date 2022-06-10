<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkConversationIdentity extends Identity implements Parsable 
{
    /**
     * @var TeamworkConversationIdentityType|null $conversationIdentityType Type of conversation. Possible values are: team, channel, and chat.
    */
    private ?TeamworkConversationIdentityType $conversationIdentityType = null;
    
    /**
     * Instantiates a new teamworkConversationIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkConversationIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkConversationIdentity {
        return new TeamworkConversationIdentity();
    }

    /**
     * Gets the conversationIdentityType property value. Type of conversation. Possible values are: team, channel, and chat.
     * @return TeamworkConversationIdentityType|null
    */
    public function getConversationIdentityType(): ?TeamworkConversationIdentityType {
        return $this->conversationIdentityType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'conversationIdentityType' => function (ParseNode $n) use ($o) { $o->setConversationIdentityType($n->getEnumValue(TeamworkConversationIdentityType::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('conversationIdentityType', $this->conversationIdentityType);
    }

    /**
     * Sets the conversationIdentityType property value. Type of conversation. Possible values are: team, channel, and chat.
     *  @param TeamworkConversationIdentityType|null $value Value to set for the conversationIdentityType property.
    */
    public function setConversationIdentityType(?TeamworkConversationIdentityType $value ): void {
        $this->conversationIdentityType = $value;
    }

}
