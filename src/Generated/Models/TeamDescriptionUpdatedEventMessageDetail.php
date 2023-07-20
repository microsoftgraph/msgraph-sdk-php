<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamDescriptionUpdatedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * Instantiates a new teamDescriptionUpdatedEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.teamDescriptionUpdatedEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamDescriptionUpdatedEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamDescriptionUpdatedEventMessageDetail {
        return new TeamDescriptionUpdatedEventMessageDetail();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'initiator' => fn(ParseNode $n) => $o->setInitiator($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'teamDescription' => fn(ParseNode $n) => $o->setTeamDescription($n->getStringValue()),
            'teamId' => fn(ParseNode $n) => $o->setTeamId($n->getStringValue()),
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
     * Gets the teamDescription property value. The updated description for the team.
     * @return string|null
    */
    public function getTeamDescription(): ?string {
        $val = $this->getBackingStore()->get('teamDescription');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamDescription'");
    }

    /**
     * Gets the teamId property value. Unique identifier of the team.
     * @return string|null
    */
    public function getTeamId(): ?string {
        $val = $this->getBackingStore()->get('teamId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('initiator', $this->getInitiator());
        $writer->writeStringValue('teamDescription', $this->getTeamDescription());
        $writer->writeStringValue('teamId', $this->getTeamId());
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     * @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value): void {
        $this->getBackingStore()->set('initiator', $value);
    }

    /**
     * Sets the teamDescription property value. The updated description for the team.
     * @param string|null $value Value to set for the teamDescription property.
    */
    public function setTeamDescription(?string $value): void {
        $this->getBackingStore()->set('teamDescription', $value);
    }

    /**
     * Sets the teamId property value. Unique identifier of the team.
     * @param string|null $value Value to set for the teamId property.
    */
    public function setTeamId(?string $value): void {
        $this->getBackingStore()->set('teamId', $value);
    }

}
