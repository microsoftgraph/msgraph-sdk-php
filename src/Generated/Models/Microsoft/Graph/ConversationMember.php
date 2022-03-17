<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConversationMember extends Entity 
{
    /** @var string|null $displayName The display name of the user. */
    private ?string $displayName = null;
    
    /** @var array<string>|null $roles The roles for that user. */
    private ?array $roles = null;
    
    /** @var DateTime|null $visibleHistoryStartDateTime The timestamp denoting how far back a conversation's history is shared with the conversation member. This property is settable only for members of a chat. */
    private ?DateTime $visibleHistoryStartDateTime = null;
    
    /**
     * Instantiates a new conversationMember and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConversationMember
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ConversationMember {
        return new ConversationMember();
    }

    /**
     * Gets the displayName property value. The display name of the user.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'roles' => function (self $o, ParseNode $n) { $o->setRoles($n->getCollectionOfPrimitiveValues()); },
            'visibleHistoryStartDateTime' => function (self $o, ParseNode $n) { $o->setVisibleHistoryStartDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the roles property value. The roles for that user.
     * @return array<string>|null
    */
    public function getRoles(): ?array {
        return $this->roles;
    }

    /**
     * Gets the visibleHistoryStartDateTime property value. The timestamp denoting how far back a conversation's history is shared with the conversation member. This property is settable only for members of a chat.
     * @return DateTime|null
    */
    public function getVisibleHistoryStartDateTime(): ?DateTime {
        return $this->visibleHistoryStartDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfPrimitiveValues('roles', $this->roles);
        $writer->writeDateTimeValue('visibleHistoryStartDateTime', $this->visibleHistoryStartDateTime);
    }

    /**
     * Sets the displayName property value. The display name of the user.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the roles property value. The roles for that user.
     *  @param array<string>|null $value Value to set for the roles property.
    */
    public function setRoles(?array $value ): void {
        $this->roles = $value;
    }

    /**
     * Sets the visibleHistoryStartDateTime property value. The timestamp denoting how far back a conversation's history is shared with the conversation member. This property is settable only for members of a chat.
     *  @param DateTime|null $value Value to set for the visibleHistoryStartDateTime property.
    */
    public function setVisibleHistoryStartDateTime(?DateTime $value ): void {
        $this->visibleHistoryStartDateTime = $value;
    }

}
