<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IPv6CidrRange extends IpRange implements Parsable 
{
    /**
     * @var string|null $cidrAddress IPv6 address in CIDR notation. Not nullable.
    */
    private ?string $cidrAddress = null;
    
    /**
     * Instantiates a new IPv6CidrRange and sets the default values.
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
        return $this->cidrAddress;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cidrAddress' => function (ParseNode $n) use ($o) { $o->setCidrAddress($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('cidrAddress', $this->cidrAddress);
    }

    /**
     * Sets the cidrAddress property value. IPv6 address in CIDR notation. Not nullable.
     *  @param string|null $value Value to set for the cidrAddress property.
    */
    public function setCidrAddress(?string $value ): void {
        $this->cidrAddress = $value;
    }

}
