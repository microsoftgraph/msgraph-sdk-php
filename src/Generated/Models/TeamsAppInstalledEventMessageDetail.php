<?php

namespace Microsoft\\Graph\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsAppInstalledEventMessageDetail extends EventMessageDetail implements Parsable 
{
    /**
     * Instantiates a new TeamsAppInstalledEventMessageDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.teamsAppInstalledEventMessageDetail');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsAppInstalledEventMessageDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsAppInstalledEventMessageDetail {
        return new TeamsAppInstalledEventMessageDetail();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('initiator');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'initiator'");
    }

    /**
     * Gets the teamsAppDisplayName property value. Display name of the teamsApp.
     * @return string|null
    */
    public function getTeamsAppDisplayName(): ?string {
        $val = $this->getBackingStore()->get('teamsAppDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamsAppDisplayName'");
    }

    /**
     * Gets the teamsAppId property value. Unique identifier of the teamsApp.
     * @return string|null
    */
    public function getTeamsAppId(): ?string {
        $val = $this->getBackingStore()->get('teamsAppId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'teamsAppId'");
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
