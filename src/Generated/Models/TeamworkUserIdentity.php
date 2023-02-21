<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkUserIdentity extends Identity implements Parsable 
{
    /**
     * Instantiates a new teamworkUserIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.teamworkUserIdentity');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkUserIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkUserIdentity {
        return new TeamworkUserIdentity();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userIdentityType' => fn(ParseNode $n) => $o->setUserIdentityType($n->getEnumValue(TeamworkUserIdentityType::class)),
        ]);
    }

    /**
     * Gets the userIdentityType property value. Type of user. Possible values are: aadUser, onPremiseAadUser, anonymousGuest, federatedUser, personalMicrosoftAccountUser, skypeUser, phoneUser, unknownFutureValue and emailUser.
     * @return TeamworkUserIdentityType|null
    */
    public function getUserIdentityType(): ?TeamworkUserIdentityType {
        return $this->getBackingStore()->get('userIdentityType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('userIdentityType', $this->getUserIdentityType());
    }

    /**
     * Sets the userIdentityType property value. Type of user. Possible values are: aadUser, onPremiseAadUser, anonymousGuest, federatedUser, personalMicrosoftAccountUser, skypeUser, phoneUser, unknownFutureValue and emailUser.
     * @param TeamworkUserIdentityType|null $value Value to set for the userIdentityType property.
    */
    public function setUserIdentityType(?TeamworkUserIdentityType $value): void {
        $this->getBackingStore()->set('userIdentityType', $value);
    }

}
