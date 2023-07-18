<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IPv6CidrRange extends IpRange implements Parsable 
{
    /**
     * Instantiates a new iPv6CidrRange and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iPv6CidrRange');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IPv6CidrRange
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IPv6CidrRange {
        return new IPv6CidrRange();
    }

    /**
     * Gets the cidrAddress property value. IPv6 address in CIDR notation. Not nullable.
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('cidrAddress', $this->getCidrAddress());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the cidrAddress property value. IPv6 address in CIDR notation. Not nullable.
     * @param string|null $value Value to set for the cidrAddress property.
    */
    public function setCidrAddress(?string $value): void {
        $this->getBackingStore()->set('cidrAddress', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
