<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IPv4CidrRange extends IpRange implements Parsable 
{
    /**
     * Instantiates a new iPv4CidrRange and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iPv4CidrRange');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IPv4CidrRange
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IPv4CidrRange {
        return new IPv4CidrRange();
    }

    /**
     * Gets the cidrAddress property value. IPv4 address in CIDR notation. Not nullable.
     * @return string|null
    */
    public function getCidrAddress(): ?string {
        $val = $this->getBackingStore()->get('cidrAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cidrAddress'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cidrAddress' => fn(ParseNode $n) => $o->setCidrAddress($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('cidrAddress', $this->getCidrAddress());
    }

    /**
     * Sets the cidrAddress property value. IPv4 address in CIDR notation. Not nullable.
     * @param string|null $value Value to set for the cidrAddress property.
    */
    public function setCidrAddress(?string $value): void {
        $this->getBackingStore()->set('cidrAddress', $value);
    }

}
