<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Hostname extends Host implements Parsable 
{
    /**
     * Instantiates a new hostname and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.hostname');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Hostname
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Hostname {
        return new Hostname();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'registrant' => fn(ParseNode $n) => $o->setRegistrant($n->getStringValue()),
            'registrar' => fn(ParseNode $n) => $o->setRegistrar($n->getStringValue()),
        ]);
    }

    /**
     * Gets the registrant property value. The company or individual who registered this hostname, from WHOIS data.
     * @return string|null
    */
    public function getRegistrant(): ?string {
        $val = $this->getBackingStore()->get('registrant');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registrant'");
    }

    /**
     * Gets the registrar property value. The registrar for this hostname, from WHOIS data.
     * @return string|null
    */
    public function getRegistrar(): ?string {
        $val = $this->getBackingStore()->get('registrar');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registrar'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('registrant', $this->getRegistrant());
        $writer->writeStringValue('registrar', $this->getRegistrar());
    }

    /**
     * Sets the registrant property value. The company or individual who registered this hostname, from WHOIS data.
     * @param string|null $value Value to set for the registrant property.
    */
    public function setRegistrant(?string $value): void {
        $this->getBackingStore()->set('registrant', $value);
    }

    /**
     * Sets the registrar property value. The registrar for this hostname, from WHOIS data.
     * @param string|null $value Value to set for the registrar property.
    */
    public function setRegistrar(?string $value): void {
        $this->getBackingStore()->set('registrar', $value);
    }

}
