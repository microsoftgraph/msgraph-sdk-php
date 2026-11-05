<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DnsEntityMapping extends EntityMapping implements Parsable 
{
    /**
     * Instantiates a new DnsEntityMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.dnsEntityMapping');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DnsEntityMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DnsEntityMapping {
        return new DnsEntityMapping();
    }

    /**
     * Gets the domainNameColumn property value. Name of the detection query column that maps to the domain name of the alert entity.
     * @return string|null
    */
    public function getDomainNameColumn(): ?string {
        $val = $this->getBackingStore()->get('domainNameColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainNameColumn'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'domainNameColumn' => fn(ParseNode $n) => $o->setDomainNameColumn($n->getStringValue()),
            'hostIpAddressColumn' => fn(ParseNode $n) => $o->setHostIpAddressColumn($n->getStringValue()),
            'serverIpColumn' => fn(ParseNode $n) => $o->setServerIpColumn($n->getStringValue()),
        ]);
    }

    /**
     * Gets the hostIpAddressColumn property value. Name of the detection query column that maps to the host IP address of the alert entity.
     * @return string|null
    */
    public function getHostIpAddressColumn(): ?string {
        $val = $this->getBackingStore()->get('hostIpAddressColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hostIpAddressColumn'");
    }

    /**
     * Gets the serverIpColumn property value. Name of the detection query column that maps to the server IP address of the alert entity.
     * @return string|null
    */
    public function getServerIpColumn(): ?string {
        $val = $this->getBackingStore()->get('serverIpColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serverIpColumn'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('domainNameColumn', $this->getDomainNameColumn());
        $writer->writeStringValue('hostIpAddressColumn', $this->getHostIpAddressColumn());
        $writer->writeStringValue('serverIpColumn', $this->getServerIpColumn());
    }

    /**
     * Sets the domainNameColumn property value. Name of the detection query column that maps to the domain name of the alert entity.
     * @param string|null $value Value to set for the domainNameColumn property.
    */
    public function setDomainNameColumn(?string $value): void {
        $this->getBackingStore()->set('domainNameColumn', $value);
    }

    /**
     * Sets the hostIpAddressColumn property value. Name of the detection query column that maps to the host IP address of the alert entity.
     * @param string|null $value Value to set for the hostIpAddressColumn property.
    */
    public function setHostIpAddressColumn(?string $value): void {
        $this->getBackingStore()->set('hostIpAddressColumn', $value);
    }

    /**
     * Sets the serverIpColumn property value. Name of the detection query column that maps to the server IP address of the alert entity.
     * @param string|null $value Value to set for the serverIpColumn property.
    */
    public function setServerIpColumn(?string $value): void {
        $this->getBackingStore()->set('serverIpColumn', $value);
    }

}
