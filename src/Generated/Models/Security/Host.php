<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Host extends Artifact implements Parsable 
{
    /**
     * Instantiates a new Host and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.host');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Host
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Host {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.hostname': return new Hostname();
                case '#microsoft.graph.security.ipAddress': return new IpAddress();
            }
        }
        return new Host();
    }

    /**
     * Gets the childHostPairs property value. The hostPairs that are resources associated with a host, where that host is the parentHost and has an outgoing pairing to a childHost.
     * @return array<HostPair>|null
    */
    public function getChildHostPairs(): ?array {
        $val = $this->getBackingStore()->get('childHostPairs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HostPair::class);
            /** @var array<HostPair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'childHostPairs'");
    }

    /**
     * Gets the components property value. The hostComponents that are associated with this host.
     * @return array<HostComponent>|null
    */
    public function getComponents(): ?array {
        $val = $this->getBackingStore()->get('components');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HostComponent::class);
            /** @var array<HostComponent>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'components'");
    }

    /**
     * Gets the cookies property value. The hostCookies that are associated with this host.
     * @return array<HostCookie>|null
    */
    public function getCookies(): ?array {
        $val = $this->getBackingStore()->get('cookies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HostCookie::class);
            /** @var array<HostCookie>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cookies'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'childHostPairs' => fn(ParseNode $n) => $o->setChildHostPairs($n->getCollectionOfObjectValues([HostPair::class, 'createFromDiscriminatorValue'])),
            'components' => fn(ParseNode $n) => $o->setComponents($n->getCollectionOfObjectValues([HostComponent::class, 'createFromDiscriminatorValue'])),
            'cookies' => fn(ParseNode $n) => $o->setCookies($n->getCollectionOfObjectValues([HostCookie::class, 'createFromDiscriminatorValue'])),
            'firstSeenDateTime' => fn(ParseNode $n) => $o->setFirstSeenDateTime($n->getDateTimeValue()),
            'hostPairs' => fn(ParseNode $n) => $o->setHostPairs($n->getCollectionOfObjectValues([HostPair::class, 'createFromDiscriminatorValue'])),
            'lastSeenDateTime' => fn(ParseNode $n) => $o->setLastSeenDateTime($n->getDateTimeValue()),
            'parentHostPairs' => fn(ParseNode $n) => $o->setParentHostPairs($n->getCollectionOfObjectValues([HostPair::class, 'createFromDiscriminatorValue'])),
            'passiveDns' => fn(ParseNode $n) => $o->setPassiveDns($n->getCollectionOfObjectValues([PassiveDnsRecord::class, 'createFromDiscriminatorValue'])),
            'passiveDnsReverse' => fn(ParseNode $n) => $o->setPassiveDnsReverse($n->getCollectionOfObjectValues([PassiveDnsRecord::class, 'createFromDiscriminatorValue'])),
            'ports' => fn(ParseNode $n) => $o->setPorts($n->getCollectionOfObjectValues([HostPort::class, 'createFromDiscriminatorValue'])),
            'reputation' => fn(ParseNode $n) => $o->setReputation($n->getObjectValue([HostReputation::class, 'createFromDiscriminatorValue'])),
            'sslCertificates' => fn(ParseNode $n) => $o->setSslCertificates($n->getCollectionOfObjectValues([HostSslCertificate::class, 'createFromDiscriminatorValue'])),
            'subdomains' => fn(ParseNode $n) => $o->setSubdomains($n->getCollectionOfObjectValues([Subdomain::class, 'createFromDiscriminatorValue'])),
            'trackers' => fn(ParseNode $n) => $o->setTrackers($n->getCollectionOfObjectValues([HostTracker::class, 'createFromDiscriminatorValue'])),
            'whois' => fn(ParseNode $n) => $o->setWhois($n->getObjectValue([WhoisRecord::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the firstSeenDateTime property value. The first date and time when this host was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getFirstSeenDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('firstSeenDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firstSeenDateTime'");
    }

    /**
     * Gets the hostPairs property value. The hostPairs that are associated with this host, where this host is either the parentHost or childHost.
     * @return array<HostPair>|null
    */
    public function getHostPairs(): ?array {
        $val = $this->getBackingStore()->get('hostPairs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HostPair::class);
            /** @var array<HostPair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hostPairs'");
    }

    /**
     * Gets the lastSeenDateTime property value. The most recent date and time when this host was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastSeenDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastSeenDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastSeenDateTime'");
    }

    /**
     * Gets the parentHostPairs property value. The hostPairs that are associated with a host, where that host is the childHost and has an incoming pairing with a parentHost.
     * @return array<HostPair>|null
    */
    public function getParentHostPairs(): ?array {
        $val = $this->getBackingStore()->get('parentHostPairs');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HostPair::class);
            /** @var array<HostPair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentHostPairs'");
    }

    /**
     * Gets the passiveDns property value. Passive DNS retrieval about this host.
     * @return array<PassiveDnsRecord>|null
    */
    public function getPassiveDns(): ?array {
        $val = $this->getBackingStore()->get('passiveDns');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PassiveDnsRecord::class);
            /** @var array<PassiveDnsRecord>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passiveDns'");
    }

    /**
     * Gets the passiveDnsReverse property value. Reverse passive DNS retrieval about this host.
     * @return array<PassiveDnsRecord>|null
    */
    public function getPassiveDnsReverse(): ?array {
        $val = $this->getBackingStore()->get('passiveDnsReverse');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PassiveDnsRecord::class);
            /** @var array<PassiveDnsRecord>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'passiveDnsReverse'");
    }

    /**
     * Gets the ports property value. The hostPorts associated with a host.
     * @return array<HostPort>|null
    */
    public function getPorts(): ?array {
        $val = $this->getBackingStore()->get('ports');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HostPort::class);
            /** @var array<HostPort>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ports'");
    }

    /**
     * Gets the reputation property value. Represents a calculated reputation of this host.
     * @return HostReputation|null
    */
    public function getReputation(): ?HostReputation {
        $val = $this->getBackingStore()->get('reputation');
        if (is_null($val) || $val instanceof HostReputation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reputation'");
    }

    /**
     * Gets the sslCertificates property value. The hostSslCertificates that are associated with this host.
     * @return array<HostSslCertificate>|null
    */
    public function getSslCertificates(): ?array {
        $val = $this->getBackingStore()->get('sslCertificates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HostSslCertificate::class);
            /** @var array<HostSslCertificate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sslCertificates'");
    }

    /**
     * Gets the subdomains property value. The subdomains that are associated with this host.
     * @return array<Subdomain>|null
    */
    public function getSubdomains(): ?array {
        $val = $this->getBackingStore()->get('subdomains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Subdomain::class);
            /** @var array<Subdomain>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subdomains'");
    }

    /**
     * Gets the trackers property value. The hostTrackers that are associated with this host.
     * @return array<HostTracker>|null
    */
    public function getTrackers(): ?array {
        $val = $this->getBackingStore()->get('trackers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HostTracker::class);
            /** @var array<HostTracker>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trackers'");
    }

    /**
     * Gets the whois property value. The most recent whoisRecord for this host.
     * @return WhoisRecord|null
    */
    public function getWhois(): ?WhoisRecord {
        $val = $this->getBackingStore()->get('whois');
        if (is_null($val) || $val instanceof WhoisRecord) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'whois'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('childHostPairs', $this->getChildHostPairs());
        $writer->writeCollectionOfObjectValues('components', $this->getComponents());
        $writer->writeCollectionOfObjectValues('cookies', $this->getCookies());
        $writer->writeDateTimeValue('firstSeenDateTime', $this->getFirstSeenDateTime());
        $writer->writeCollectionOfObjectValues('hostPairs', $this->getHostPairs());
        $writer->writeDateTimeValue('lastSeenDateTime', $this->getLastSeenDateTime());
        $writer->writeCollectionOfObjectValues('parentHostPairs', $this->getParentHostPairs());
        $writer->writeCollectionOfObjectValues('passiveDns', $this->getPassiveDns());
        $writer->writeCollectionOfObjectValues('passiveDnsReverse', $this->getPassiveDnsReverse());
        $writer->writeCollectionOfObjectValues('ports', $this->getPorts());
        $writer->writeObjectValue('reputation', $this->getReputation());
        $writer->writeCollectionOfObjectValues('sslCertificates', $this->getSslCertificates());
        $writer->writeCollectionOfObjectValues('subdomains', $this->getSubdomains());
        $writer->writeCollectionOfObjectValues('trackers', $this->getTrackers());
        $writer->writeObjectValue('whois', $this->getWhois());
    }

    /**
     * Sets the childHostPairs property value. The hostPairs that are resources associated with a host, where that host is the parentHost and has an outgoing pairing to a childHost.
     * @param array<HostPair>|null $value Value to set for the childHostPairs property.
    */
    public function setChildHostPairs(?array $value): void {
        $this->getBackingStore()->set('childHostPairs', $value);
    }

    /**
     * Sets the components property value. The hostComponents that are associated with this host.
     * @param array<HostComponent>|null $value Value to set for the components property.
    */
    public function setComponents(?array $value): void {
        $this->getBackingStore()->set('components', $value);
    }

    /**
     * Sets the cookies property value. The hostCookies that are associated with this host.
     * @param array<HostCookie>|null $value Value to set for the cookies property.
    */
    public function setCookies(?array $value): void {
        $this->getBackingStore()->set('cookies', $value);
    }

    /**
     * Sets the firstSeenDateTime property value. The first date and time when this host was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstSeenDateTime', $value);
    }

    /**
     * Sets the hostPairs property value. The hostPairs that are associated with this host, where this host is either the parentHost or childHost.
     * @param array<HostPair>|null $value Value to set for the hostPairs property.
    */
    public function setHostPairs(?array $value): void {
        $this->getBackingStore()->set('hostPairs', $value);
    }

    /**
     * Sets the lastSeenDateTime property value. The most recent date and time when this host was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSeenDateTime', $value);
    }

    /**
     * Sets the parentHostPairs property value. The hostPairs that are associated with a host, where that host is the childHost and has an incoming pairing with a parentHost.
     * @param array<HostPair>|null $value Value to set for the parentHostPairs property.
    */
    public function setParentHostPairs(?array $value): void {
        $this->getBackingStore()->set('parentHostPairs', $value);
    }

    /**
     * Sets the passiveDns property value. Passive DNS retrieval about this host.
     * @param array<PassiveDnsRecord>|null $value Value to set for the passiveDns property.
    */
    public function setPassiveDns(?array $value): void {
        $this->getBackingStore()->set('passiveDns', $value);
    }

    /**
     * Sets the passiveDnsReverse property value. Reverse passive DNS retrieval about this host.
     * @param array<PassiveDnsRecord>|null $value Value to set for the passiveDnsReverse property.
    */
    public function setPassiveDnsReverse(?array $value): void {
        $this->getBackingStore()->set('passiveDnsReverse', $value);
    }

    /**
     * Sets the ports property value. The hostPorts associated with a host.
     * @param array<HostPort>|null $value Value to set for the ports property.
    */
    public function setPorts(?array $value): void {
        $this->getBackingStore()->set('ports', $value);
    }

    /**
     * Sets the reputation property value. Represents a calculated reputation of this host.
     * @param HostReputation|null $value Value to set for the reputation property.
    */
    public function setReputation(?HostReputation $value): void {
        $this->getBackingStore()->set('reputation', $value);
    }

    /**
     * Sets the sslCertificates property value. The hostSslCertificates that are associated with this host.
     * @param array<HostSslCertificate>|null $value Value to set for the sslCertificates property.
    */
    public function setSslCertificates(?array $value): void {
        $this->getBackingStore()->set('sslCertificates', $value);
    }

    /**
     * Sets the subdomains property value. The subdomains that are associated with this host.
     * @param array<Subdomain>|null $value Value to set for the subdomains property.
    */
    public function setSubdomains(?array $value): void {
        $this->getBackingStore()->set('subdomains', $value);
    }

    /**
     * Sets the trackers property value. The hostTrackers that are associated with this host.
     * @param array<HostTracker>|null $value Value to set for the trackers property.
    */
    public function setTrackers(?array $value): void {
        $this->getBackingStore()->set('trackers', $value);
    }

    /**
     * Sets the whois property value. The most recent whoisRecord for this host.
     * @param WhoisRecord|null $value Value to set for the whois property.
    */
    public function setWhois(?WhoisRecord $value): void {
        $this->getBackingStore()->set('whois', $value);
    }

}
