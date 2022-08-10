<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamCreatedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * @var IdentitySet|null $initiator Initiator of the event.
    */
    private ?IdentitySet $initiator = null;
    
    /**
     * @var string|null $teamDescription Description for the team.
    */
    private ?string $teamDescription = null;
    
    /**
     * @var string|null $teamDisplayName Display name of the team.
    */
    private ?string $teamDisplayName = null;
    
    /**
     * @var string|null $teamId Unique identifier of the team.
    */
    private ?string $teamId = null;
    
    /**
     * Instantiates a new TeamCreatedEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.teamCreatedEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamCreatedEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamCreatedEventMessageDetail {
        return new TeamCreatedEventMessageDetail();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'initiator' => function (ParseNode $n) use ($o) { $o->setInitiator($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'teamDescription' => function (ParseNode $n) use ($o) { $o->setTeamDescription($n->getStringValue()); },
            'teamDisplayName' => function (ParseNode $n) use ($o) { $o->setTeamDisplayName($n->getStringValue()); },
            'teamId' => function (ParseNode $n) use ($o) { $o->setTeamId($n->getStringValue()); },
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
     * Gets the teamDescription property value. Description for the team.
     * @return string|null
    */
    public function getTeamDescription(): ?string {
        return $this->teamDescription;
    }

    /**
     * Gets the teamDisplayName property value. Display name of the team.
     * @return string|null
    */
    public function getTeamDisplayName(): ?string {
        return $this->teamDisplayName;
    }

    /**
     * Gets the teamId property value. Unique identifier of the team.
     * @return string|null
    */
    public function getTeamId(): ?string {
        return $this->teamId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('initiator', $this->initiator);
        $writer->writeStringValue('teamDescription', $this->teamDescription);
        $writer->writeStringValue('teamDisplayName', $this->teamDisplayName);
        $writer->writeStringValue('teamId', $this->teamId);
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     *  @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value ): void {
        $this->initiator = $value;
    }

    /**
     * Sets the teamDescription property value. Description for the team.
     *  @param string|null $value Value to set for the teamDescription property.
    */
    public function setTeamDescription(?string $value ): void {
        $this->teamDescription = $value;
    }

    /**
     * Sets the teamDisplayName property value. Display name of the team.
     *  @param string|null $value Value to set for the teamDisplayName property.
    */
    public function setTeamDisplayName(?string $value ): void {
        $this->teamDisplayName = $value;
    }

    /**
     * Sets the teamId property value. Unique identifier of the team.
     *  @param string|null $value Value to set for the teamId property.
    */
    public function setTeamId(?string $value ): void {
        $this->teamId = $value;
    }

}
