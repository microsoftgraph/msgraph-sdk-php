<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class IpNamedLocation extends NamedLocation implements Parsable 
{
    /**
     * Instantiates a new ipNamedLocation and sets the default values.
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'ipRanges' => fn(ParseNode $n) => $o->setIpRanges($n->getCollectionOfObjectValues([IpRange::class, 'createFromDiscriminatorValue'])),
            'isTrusted' => fn(ParseNode $n) => $o->setIsTrusted($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the ipRanges property value. List of IP address ranges in IPv4 CIDR format (e.g. 1.2.3.4/32) or any allowable IPv6 format from IETF RFC5969. Required.
     * @return array<IpRange>|null
    */
    public function getIpRanges(): ?array {
        $val = $this->getBackingStore()->get('ipRanges');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IpRange::class);
            /** @var array<IpRange>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipRanges'");
    }

    /**
     * Gets the isTrusted property value. true if this location is explicitly trusted. Optional. Default value is false.
     * @return bool|null
    */
    public function getIsTrusted(): ?bool {
        $val = $this->getBackingStore()->get('isTrusted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isTrusted'");
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
        $writer->writeCollectionOfObjectValues('ipRanges', $this->getIpRanges());
        $writer->writeBooleanValue('isTrusted', $this->getIsTrusted());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the ipRanges property value. List of IP address ranges in IPv4 CIDR format (e.g. 1.2.3.4/32) or any allowable IPv6 format from IETF RFC5969. Required.
     * @param array<IpRange>|null $value Value to set for the ipRanges property.
    */
    public function setIpRanges(?array $value): void {
        $this->getBackingStore()->set('ipRanges', $value);
    }

    /**
     * Sets the isTrusted property value. true if this location is explicitly trusted. Optional. Default value is false.
     * @param bool|null $value Value to set for the isTrusted property.
    */
    public function setIsTrusted(?bool $value): void {
        $this->getBackingStore()->set('isTrusted', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
