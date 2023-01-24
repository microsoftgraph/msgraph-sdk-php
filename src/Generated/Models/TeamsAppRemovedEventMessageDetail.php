<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsAppRemovedEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * Instantiates a new TeamsAppRemovedEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.teamsAppRemovedEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsAppRemovedEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsAppRemovedEventMessageDetail {
        return new TeamsAppRemovedEventMessageDetail();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'initiator' => fn(ParseNode $n) => $o->setInitiator($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'teamsAppDisplayName' => fn(ParseNode $n) => $o->setTeamsAppDisplayName($n->getStringValue()),
            'teamsAppId' => fn(ParseNode $n) => $o->setTeamsAppId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the initiator property value. Initiator of the event.
     * @return IdentitySet|null
    */
    public function getInitiator(): ?IdentitySet {
        return $this->getBackingStore()->get('initiator');
    }

    /**
     * Gets the teamsAppDisplayName property value. Display name of the teamsApp.
     * @return string|null
    */
    public function getTeamsAppDisplayName(): ?string {
        return $this->getBackingStore()->get('teamsAppDisplayName');
    }

    /**
     * Gets the teamsAppId property value. Unique identifier of the teamsApp.
     * @return string|null
    */
    public function getTeamsAppId(): ?string {
        return $this->getBackingStore()->get('teamsAppId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('initiator', $this->getInitiator());
        $writer->writeStringValue('teamsAppDisplayName', $this->getTeamsAppDisplayName());
        $writer->writeStringValue('teamsAppId', $this->getTeamsAppId());
    }

    /**
     * Sets the initiator property value. Initiator of the event.
     * @param IdentitySet|null $value Value to set for the initiator property.
    */
    public function setInitiator(?IdentitySet $value): void {
        $this->getBackingStore()->set('initiator', $value);
    }

    /**
     * Sets the teamsAppDisplayName property value. Display name of the teamsApp.
     * @param string|null $value Value to set for the teamsAppDisplayName property.
    */
    public function setTeamsAppDisplayName(?string $value): void {
        $this->getBackingStore()->set('teamsAppDisplayName', $value);
    }

    /**
     * Sets the teamsAppId property value. Unique identifier of the teamsApp.
     * @param string|null $value Value to set for the teamsAppId property.
    */
    public function setTeamsAppId(?string $value): void {
        $this->getBackingStore()->set('teamsAppId', $value);
    }

}
