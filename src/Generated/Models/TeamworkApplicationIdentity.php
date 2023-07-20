<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkApplicationIdentity extends Identity implements Parsable 
{
    /**
     * Instantiates a new teamworkApplicationIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.teamworkApplicationIdentity');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkApplicationIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkApplicationIdentity {
        return new TeamworkApplicationIdentity();
    }

    /**
     * Gets the applicationIdentityType property value. Type of application that is referenced. Possible values are: aadApplication, bot, tenantBot, office365Connector, outgoingWebhook, and unknownFutureValue.
     * @return TeamworkApplicationIdentityType|null
    */
    public function getApplicationIdentityType(): ?TeamworkApplicationIdentityType {
        $val = $this->getBackingStore()->get('applicationIdentityType');
        if (is_null($val) || $val instanceof TeamworkApplicationIdentityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicationIdentityType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationIdentityType' => fn(ParseNode $n) => $o->setApplicationIdentityType($n->getEnumValue(TeamworkApplicationIdentityType::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('applicationIdentityType', $this->getApplicationIdentityType());
    }

    /**
     * Sets the applicationIdentityType property value. Type of application that is referenced. Possible values are: aadApplication, bot, tenantBot, office365Connector, outgoingWebhook, and unknownFutureValue.
     * @param TeamworkApplicationIdentityType|null $value Value to set for the applicationIdentityType property.
    */
    public function setApplicationIdentityType(?TeamworkApplicationIdentityType $value): void {
        $this->getBackingStore()->set('applicationIdentityType', $value);
    }

}
