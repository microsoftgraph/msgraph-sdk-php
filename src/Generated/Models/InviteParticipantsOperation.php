<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class InviteParticipantsOperation extends CommsOperation implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new inviteParticipantsOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('participants');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, InvitationParticipantInfo::class);
            /** @var array<InvitationParticipantInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'participants'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('participants', $this->getParticipants());
    }

    /**
     * Sets the participants property value. The participants to invite.
     * @param array<InvitationParticipantInfo>|null $value Value to set for the participants property.
    */
    public function setParticipants(?array $value): void {
        $this->getBackingStore()->set('participants', $value);
    }

}
