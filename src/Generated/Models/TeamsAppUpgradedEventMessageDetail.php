<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsAppUpgradedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * @var IdentitySet|null $initiator Initiator of the event.
    */
    private ?IdentitySet $initiator = null;
    
    /**
     * @var string|null $teamsAppDisplayName Display name of the teamsApp.
    */
    private ?string $teamsAppDisplayName = null;
    
    /**
     * @var string|null $teamsAppId Unique identifier of the teamsApp.
    */
    private ?string $teamsAppId = null;
    
    /**
     * Instantiates a new TeamsAppUpgradedEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.teamsAppUpgradedEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsAppUpgradedEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsAppUpgradedEventMessageDetail {
        return new TeamsAppUpgradedEventMessageDetail();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'initiator' => function (ParseNode $n) use ($o) { $o->setInitiator($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'teamsAppDisplayName' => function (ParseNode $n) use ($o) { $o->setTeamsAppDisplayName($n->getStringValue()); },
            'teamsAppId' => function (ParseNode $n) use ($o) { $o->setTeamsAppId($n->getStringValue()); },
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
     * Gets the teamsAppDisplayName property value. Display name of the teamsApp.
     * @return string|null
    */
    public function getTeamsAppDisplayName(): ?string {
        return $this->teamsAppDisplayName;
    }

    /**
     * Gets the teamsAppId property value. Unique identifier of the teamsApp.
     * @return string|null
    */
    public function getTeamsAppId(): ?string {
        return $this->teamsAppId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('initiator', $this->initiator);
        $writer->writeStringValue('teamsAppDisplayName', $this->teamsAppDisplayName);
        $writer->writeStringValue('teamsAppId', $this->teamsAppId);
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     *  @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value ): void {
        $this->initiator = $value;
    }

    /**
     * Sets the teamsAppDisplayName property value. Display name of the teamsApp.
     *  @param string|null $value Value to set for the teamsAppDisplayName property.
    */
    public function setTeamsAppDisplayName(?string $value ): void {
        $this->teamsAppDisplayName = $value;
    }

    /**
     * Sets the teamsAppId property value. Unique identifier of the teamsApp.
     *  @param string|null $value Value to set for the teamsAppId property.
    */
    public function setTeamsAppId(?string $value ): void {
        $this->teamsAppId = $value;
    }

}
