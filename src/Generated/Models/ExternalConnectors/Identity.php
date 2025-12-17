<?php

namespace Microsoft\Graph\Generated\Models\ExternalConnectors;

use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Identity extends Entity implements Parsable 
{
    /**
     * Instantiates a new Identity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Identity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Identity {
        return new Identity();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'type' => fn(ParseNode $n) => $o->setType($n->getEnumValue(IdentityType::class)),
        ]);
    }

    /**
     * Gets the type property value. The type of identity. The possible values are: user or group for Microsoft Entra identities and externalgroup for groups in an external system.
     * @return IdentityType|null
    */
    public function getType(): ?IdentityType {
        $val = $this->getBackingStore()->get('type');
        if (is_null($val) || $val instanceof IdentityType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'type'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('type', $this->getType());
    }

    /**
     * Sets the type property value. The type of identity. The possible values are: user or group for Microsoft Entra identities and externalgroup for groups in an external system.
     * @param IdentityType|null $value Value to set for the type property.
    */
    public function setType(?IdentityType $value): void {
        $this->getBackingStore()->set('type', $value);
    }

}
