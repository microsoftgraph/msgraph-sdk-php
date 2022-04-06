<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppCatalogs extends Entity 
{
    /** @var array<TeamsApp>|null $teamsApps The teamsApps property */
    private ?array $teamsApps = null;
    
    /**
     * Instantiates a new appCatalogs and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppCatalogs
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AppCatalogs {
        return new AppCatalogs();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'teamsApps' => function (self $o, ParseNode $n) { $o->setTeamsApps($n->getCollectionOfObjectValues(TeamsApp::class)); },
        ]);
    }

    /**
     * Gets the teamsApps property value. The teamsApps property
     * @return array<TeamsApp>|null
    */
    public function getTeamsApps(): ?array {
        return $this->teamsApps;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('teamsApps', $this->teamsApps);
    }

    /**
     * Sets the teamsApps property value. The teamsApps property
     *  @param array<TeamsApp>|null $value Value to set for the teamsApps property.
    */
    public function setTeamsApps(?array $value ): void {
        $this->teamsApps = $value;
    }

}
