<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class HostSslCertificate extends Artifact implements Parsable 
{
    /**
     * Instantiates a new hostSslCertificate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.hostSslCertificate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HostSslCertificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HostSslCertificate {
        return new HostSslCertificate();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'firstSeenDateTime' => fn(ParseNode $n) => $o->setFirstSeenDateTime($n->getDateTimeValue()),
            'host' => fn(ParseNode $n) => $o->setHost($n->getObjectValue([Host::class, 'createFromDiscriminatorValue'])),
            'lastSeenDateTime' => fn(ParseNode $n) => $o->setLastSeenDateTime($n->getDateTimeValue()),
            'ports' => fn(ParseNode $n) => $o->setPorts($n->getCollectionOfObjectValues([HostSslCertificatePort::class, 'createFromDiscriminatorValue'])),
            'sslCertificate' => fn(ParseNode $n) => $o->setSslCertificate($n->getObjectValue([SslCertificate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the firstSeenDateTime property value. The first date and time when this hostSslCertificate was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the host property value. The host for this hostSslCertificate.
     * @return Host|null
    */
    public function getHost(): ?Host {
        $val = $this->getBackingStore()->get('host');
        if (is_null($val) || $val instanceof Host) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'host'");
    }

    /**
     * Gets the lastSeenDateTime property value. The most recent date and time when this hostSslCertificate was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the ports property value. The ports related with this hostSslCertificate.
     * @return array<HostSslCertificatePort>|null
    */
    public function getPorts(): ?array {
        $val = $this->getBackingStore()->get('ports');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, HostSslCertificatePort::class);
            /** @var array<HostSslCertificatePort>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ports'");
    }

    /**
     * Gets the sslCertificate property value. The sslCertificate for this hostSslCertificate.
     * @return SslCertificate|null
    */
    public function getSslCertificate(): ?SslCertificate {
        $val = $this->getBackingStore()->get('sslCertificate');
        if (is_null($val) || $val instanceof SslCertificate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sslCertificate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('firstSeenDateTime', $this->getFirstSeenDateTime());
        $writer->writeObjectValue('host', $this->getHost());
        $writer->writeDateTimeValue('lastSeenDateTime', $this->getLastSeenDateTime());
        $writer->writeCollectionOfObjectValues('ports', $this->getPorts());
        $writer->writeObjectValue('sslCertificate', $this->getSslCertificate());
    }

    /**
     * Sets the firstSeenDateTime property value. The first date and time when this hostSslCertificate was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstSeenDateTime', $value);
    }

    /**
     * Sets the host property value. The host for this hostSslCertificate.
     * @param Host|null $value Value to set for the host property.
    */
    public function setHost(?Host $value): void {
        $this->getBackingStore()->set('host', $value);
    }

    /**
     * Sets the lastSeenDateTime property value. The most recent date and time when this hostSslCertificate was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSeenDateTime', $value);
    }

    /**
     * Sets the ports property value. The ports related with this hostSslCertificate.
     * @param array<HostSslCertificatePort>|null $value Value to set for the ports property.
    */
    public function setPorts(?array $value): void {
        $this->getBackingStore()->set('ports', $value);
    }

    /**
     * Sets the sslCertificate property value. The sslCertificate for this hostSslCertificate.
     * @param SslCertificate|null $value Value to set for the sslCertificate property.
    */
    public function setSslCertificate(?SslCertificate $value): void {
        $this->getBackingStore()->set('sslCertificate', $value);
    }

}
