<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DnsEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new dnsEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.dnsEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DnsEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DnsEvidence {
        return new DnsEvidence();
    }

    /**
     * Gets the dnsServerIp property value. The dnsServerIp property
     * @return IpEvidence|null
    */
    public function getDnsServerIp(): ?IpEvidence {
        $val = $this->getBackingStore()->get('dnsServerIp');
        if (is_null($val) || $val instanceof IpEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dnsServerIp'");
    }

    /**
     * Gets the domainName property value. The domainName property
     * @return string|null
    */
    public function getDomainName(): ?string {
        $val = $this->getBackingStore()->get('domainName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'dnsServerIp' => fn(ParseNode $n) => $o->setDnsServerIp($n->getObjectValue([IpEvidence::class, 'createFromDiscriminatorValue'])),
            'domainName' => fn(ParseNode $n) => $o->setDomainName($n->getStringValue()),
            'hostIpAddress' => fn(ParseNode $n) => $o->setHostIpAddress($n->getObjectValue([IpEvidence::class, 'createFromDiscriminatorValue'])),
            'ipAddresses' => fn(ParseNode $n) => $o->setIpAddresses($n->getCollectionOfObjectValues([IpEvidence::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the hostIpAddress property value. The hostIpAddress property
     * @return IpEvidence|null
    */
    public function getHostIpAddress(): ?IpEvidence {
        $val = $this->getBackingStore()->get('hostIpAddress');
        if (is_null($val) || $val instanceof IpEvidence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hostIpAddress'");
    }

    /**
     * Gets the ipAddresses property value. The ipAddresses property
     * @return array<IpEvidence>|null
    */
    public function getIpAddresses(): ?array {
        $val = $this->getBackingStore()->get('ipAddresses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IpEvidence::class);
            /** @var array<IpEvidence>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipAddresses'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('dnsServerIp', $this->getDnsServerIp());
        $writer->writeStringValue('domainName', $this->getDomainName());
        $writer->writeObjectValue('hostIpAddress', $this->getHostIpAddress());
        $writer->writeCollectionOfObjectValues('ipAddresses', $this->getIpAddresses());
    }

    /**
     * Sets the dnsServerIp property value. The dnsServerIp property
     * @param IpEvidence|null $value Value to set for the dnsServerIp property.
    */
    public function setDnsServerIp(?IpEvidence $value): void {
        $this->getBackingStore()->set('dnsServerIp', $value);
    }

    /**
     * Sets the domainName property value. The domainName property
     * @param string|null $value Value to set for the domainName property.
    */
    public function setDomainName(?string $value): void {
        $this->getBackingStore()->set('domainName', $value);
    }

    /**
     * Sets the hostIpAddress property value. The hostIpAddress property
     * @param IpEvidence|null $value Value to set for the hostIpAddress property.
    */
    public function setHostIpAddress(?IpEvidence $value): void {
        $this->getBackingStore()->set('hostIpAddress', $value);
    }

    /**
     * Sets the ipAddresses property value. The ipAddresses property
     * @param array<IpEvidence>|null $value Value to set for the ipAddresses property.
    */
    public function setIpAddresses(?array $value): void {
        $this->getBackingStore()->set('ipAddresses', $value);
    }

}
