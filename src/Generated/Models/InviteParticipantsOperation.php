<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InviteParticipantsOperation extends CommsOperation implements Parsable 
{
    /**
     * @var array<InvitationParticipantInfo>|null $participants The participants to invite.
    */
    private ?array $participants = null;
    
    /**
     * Instantiates a new InviteParticipantsOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.inviteParticipantsOperation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InviteParticipantsOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InviteParticipantsOperation {
        return new InviteParticipantsOperation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'participants' => fn(ParseNode $n) => $o->setParticipants($n->getCollectionOfObjectValues([InvitationParticipantInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the participants property value. The participants to invite.
     * @return array<InvitationParticipantInfo>|null
    */
    public function getParticipants(): ?array {
        return $this->participants;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('participants', $this->participants);
    }

    /**
     * Sets the participants property value. The participants to invite.
     *  @param array<InvitationParticipantInfo>|null $value Value to set for the participants property.
    */
    public function setParticipants(?array $value ): void {
        $this->participants = $value;
    }

}
