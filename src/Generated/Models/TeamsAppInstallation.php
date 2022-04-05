<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsAppInstallation extends Entity 
{
    /** @var TeamsApp|null $teamsApp The app that is installed. */
    private ?TeamsApp $teamsApp = null;
    
    /** @var TeamsAppDefinition|null $teamsAppDefinition The details of this version of the app. */
    private ?TeamsAppDefinition $teamsAppDefinition = null;
    
    /**
     * Instantiates a new teamsAppInstallation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsAppInstallation
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TeamsAppInstallation {
        return new TeamsAppInstallation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'teamsApp' => function (self $o, ParseNode $n) { $o->setTeamsApp($n->getObjectValue(TeamsApp::class)); },
            'teamsAppDefinition' => function (self $o, ParseNode $n) { $o->setTeamsAppDefinition($n->getObjectValue(TeamsAppDefinition::class)); },
        ]);
    }

    /**
     * Gets the teamsApp property value. The app that is installed.
     * @return TeamsApp|null
    */
    public function getTeamsApp(): ?TeamsApp {
        return $this->teamsApp;
    }

    /**
     * Gets the teamsAppDefinition property value. The details of this version of the app.
     * @return TeamsAppDefinition|null
    */
    public function getTeamsAppDefinition(): ?TeamsAppDefinition {
        return $this->teamsAppDefinition;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('teamsApp', $this->teamsApp);
        $writer->writeObjectValue('teamsAppDefinition', $this->teamsAppDefinition);
    }

    /**
     * Sets the teamsApp property value. The app that is installed.
     *  @param TeamsApp|null $value Value to set for the teamsApp property.
    */
    public function setTeamsApp(?TeamsApp $value ): void {
        $this->teamsApp = $value;
    }

    /**
     * Sets the teamsAppDefinition property value. The details of this version of the app.
     *  @param TeamsAppDefinition|null $value Value to set for the teamsAppDefinition property.
    */
    public function setTeamsAppDefinition(?TeamsAppDefinition $value ): void {
        $this->teamsAppDefinition = $value;
    }

}
