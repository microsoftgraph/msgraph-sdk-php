<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamRenamedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * Instantiates a new teamRenamedEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.teamRenamedEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamRenamedEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamRenamedEventMessageDetail {
        return new TeamRenamedEventMessageDetail();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'initiator' => fn(ParseNode $n) => $o->setInitiator($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'teamDisplayName' => fn(ParseNode $n) => $o->setTeamDisplayName($n->getStringValue()),
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
     * Gets the teamDisplayName property value. The updated name of the team.
     * @return string|null
    */
    public function getTeamDisplayName(): ?string {
        $val = $this->getBackingStore()->get('teamDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamDisplayName'");
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
        $writer->writeStringValue('teamDisplayName', $this->getTeamDisplayName());
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
     * Sets the teamDisplayName property value. The updated name of the team.
     * @param string|null $value Value to set for the teamDisplayName property.
    */
    public function setTeamDisplayName(?string $value): void {
        $this->getBackingStore()->set('teamDisplayName', $value);
    }

    /**
     * Sets the teamId property value. Unique identifier of the team.
     * @param string|null $value Value to set for the teamId property.
    */
    public function setTeamId(?string $value): void {
        $this->getBackingStore()->set('teamId', $value);
    }

}
