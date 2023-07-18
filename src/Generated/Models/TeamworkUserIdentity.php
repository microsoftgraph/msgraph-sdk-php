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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'userIdentityType' => fn(ParseNode $n) => $o->setUserIdentityType($n->getEnumValue(TeamworkUserIdentityType::class)),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the userIdentityType property value. Type of user. Possible values are: aadUser, onPremiseAadUser, anonymousGuest, federatedUser, personalMicrosoftAccountUser, skypeUser, phoneUser, unknownFutureValue and emailUser.
     * @return TeamworkUserIdentityType|null
    */
    public function getUserIdentityType(): ?TeamworkUserIdentityType {
        $val = $this->getBackingStore()->get('userIdentityType');
        if (is_null($val) || $val instanceof TeamworkUserIdentityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userIdentityType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('userIdentityType', $this->getUserIdentityType());
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the userIdentityType property value. Type of user. Possible values are: aadUser, onPremiseAadUser, anonymousGuest, federatedUser, personalMicrosoftAccountUser, skypeUser, phoneUser, unknownFutureValue and emailUser.
     * @param TeamworkUserIdentityType|null $value Value to set for the userIdentityType property.
    */
    public function setUserIdentityType(?TeamworkUserIdentityType $value): void {
        $this->getBackingStore()->set('userIdentityType', $value);
    }

}
