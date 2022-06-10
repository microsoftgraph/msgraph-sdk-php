<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IpNamedLocation extends NamedLocation implements Parsable 
{
    /**
     * @var array<IpRange>|null $ipRanges List of IP address ranges in IPv4 CIDR format (e.g. 1.2.3.4/32) or any allowable IPv6 format from IETF RFC596. Required.
    */
    private ?array $ipRanges = null;
    
    /**
     * @var bool|null $isTrusted true if this location is explicitly trusted. Optional. Default value is false.
    */
    private ?bool $isTrusted = null;
    
    /**
     * Instantiates a new IpNamedLocation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IpNamedLocation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IpNamedLocation {
        return new IpNamedLocation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'ipRanges' => function (ParseNode $n) use ($o) { $o->setIpRanges($n->getCollectionOfObjectValues(array(IpRange::class, 'createFromDiscriminatorValue'))); },
            'isTrusted' => function (ParseNode $n) use ($o) { $o->setIsTrusted($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the ipRanges property value. List of IP address ranges in IPv4 CIDR format (e.g. 1.2.3.4/32) or any allowable IPv6 format from IETF RFC596. Required.
     * @return array<IpRange>|null
    */
    public function getIpRanges(): ?array {
        return $this->ipRanges;
    }

    /**
     * Gets the isTrusted property value. true if this location is explicitly trusted. Optional. Default value is false.
     * @return bool|null
    */
    public function getIsTrusted(): ?bool {
        return $this->isTrusted;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('ipRanges', $this->ipRanges);
        $writer->writeBooleanValue('isTrusted', $this->isTrusted);
    }

    /**
     * Sets the ipRanges property value. List of IP address ranges in IPv4 CIDR format (e.g. 1.2.3.4/32) or any allowable IPv6 format from IETF RFC596. Required.
     *  @param array<IpRange>|null $value Value to set for the ipRanges property.
    */
    public function setIpRanges(?array $value ): void {
        $this->ipRanges = $value;
    }

    /**
     * Sets the isTrusted property value. true if this location is explicitly trusted. Optional. Default value is false.
     *  @param bool|null $value Value to set for the isTrusted property.
    */
    public function setIsTrusted(?bool $value ): void {
        $this->isTrusted = $value;
    }

}
