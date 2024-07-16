<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SslCertificate extends Artifact implements Parsable 
{
    /**
     * Instantiates a new SslCertificate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.sslCertificate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SslCertificate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SslCertificate {
        return new SslCertificate();
    }

    /**
     * Gets the expirationDateTime property value. The date and time when a certificate expires. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'fingerprint' => fn(ParseNode $n) => $o->setFingerprint($n->getStringValue()),
            'firstSeenDateTime' => fn(ParseNode $n) => $o->setFirstSeenDateTime($n->getDateTimeValue()),
            'issueDateTime' => fn(ParseNode $n) => $o->setIssueDateTime($n->getDateTimeValue()),
            'issuer' => fn(ParseNode $n) => $o->setIssuer($n->getObjectValue([SslCertificateEntity::class, 'createFromDiscriminatorValue'])),
            'lastSeenDateTime' => fn(ParseNode $n) => $o->setLastSeenDateTime($n->getDateTimeValue()),
            'relatedHosts' => fn(ParseNode $n) => $o->setRelatedHosts($n->getCollectionOfObjectValues([Host::class, 'createFromDiscriminatorValue'])),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
            'sha1' => fn(ParseNode $n) => $o->setSha1($n->getStringValue()),
            'subject' => fn(ParseNode $n) => $o->setSubject($n->getObjectValue([SslCertificateEntity::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the fingerprint property value. A hash of the certificate calculated on the data and signature.
     * @return string|null
    */
    public function getFingerprint(): ?string {
        $val = $this->getBackingStore()->get('fingerprint');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fingerprint'");
    }

    /**
     * Gets the firstSeenDateTime property value. The first date and time when this sslCertificate was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the issueDateTime property value. The date and time when a certificate was issued. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getIssueDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('issueDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issueDateTime'");
    }

    /**
     * Gets the issuer property value. The entity that grants this certificate.
     * @return SslCertificateEntity|null
    */
    public function getIssuer(): ?SslCertificateEntity {
        $val = $this->getBackingStore()->get('issuer');
        if (is_null($val) || $val instanceof SslCertificateEntity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'issuer'");
    }

    /**
     * Gets the lastSeenDateTime property value. The most recent date and time when this sslCertificate was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the relatedHosts property value. The host resources related with this sslCertificate.
     * @return array<Host>|null
    */
    public function getRelatedHosts(): ?array {
        $val = $this->getBackingStore()->get('relatedHosts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Host::class);
            /** @var array<Host>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'relatedHosts'");
    }

    /**
     * Gets the serialNumber property value. The serial number associated with an SSL certificate.
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        $val = $this->getBackingStore()->get('serialNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serialNumber'");
    }

    /**
     * Gets the sha1 property value. A SHA-1 hash of the certificate. Note: This is not the signature.
     * @return string|null
    */
    public function getSha1(): ?string {
        $val = $this->getBackingStore()->get('sha1');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sha1'");
    }

    /**
     * Gets the subject property value. The person, site, machine, and so on, this certificate is for.
     * @return SslCertificateEntity|null
    */
    public function getSubject(): ?SslCertificateEntity {
        $val = $this->getBackingStore()->get('subject');
        if (is_null($val) || $val instanceof SslCertificateEntity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subject'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('fingerprint', $this->getFingerprint());
        $writer->writeDateTimeValue('firstSeenDateTime', $this->getFirstSeenDateTime());
        $writer->writeDateTimeValue('issueDateTime', $this->getIssueDateTime());
        $writer->writeObjectValue('issuer', $this->getIssuer());
        $writer->writeDateTimeValue('lastSeenDateTime', $this->getLastSeenDateTime());
        $writer->writeCollectionOfObjectValues('relatedHosts', $this->getRelatedHosts());
        $writer->writeStringValue('serialNumber', $this->getSerialNumber());
        $writer->writeStringValue('sha1', $this->getSha1());
        $writer->writeObjectValue('subject', $this->getSubject());
    }

    /**
     * Sets the expirationDateTime property value. The date and time when a certificate expires. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the fingerprint property value. A hash of the certificate calculated on the data and signature.
     * @param string|null $value Value to set for the fingerprint property.
    */
    public function setFingerprint(?string $value): void {
        $this->getBackingStore()->set('fingerprint', $value);
    }

    /**
     * Sets the firstSeenDateTime property value. The first date and time when this sslCertificate was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstSeenDateTime', $value);
    }

    /**
     * Sets the issueDateTime property value. The date and time when a certificate was issued. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the issueDateTime property.
    */
    public function setIssueDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('issueDateTime', $value);
    }

    /**
     * Sets the issuer property value. The entity that grants this certificate.
     * @param SslCertificateEntity|null $value Value to set for the issuer property.
    */
    public function setIssuer(?SslCertificateEntity $value): void {
        $this->getBackingStore()->set('issuer', $value);
    }

    /**
     * Sets the lastSeenDateTime property value. The most recent date and time when this sslCertificate was observed. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSeenDateTime', $value);
    }

    /**
     * Sets the relatedHosts property value. The host resources related with this sslCertificate.
     * @param array<Host>|null $value Value to set for the relatedHosts property.
    */
    public function setRelatedHosts(?array $value): void {
        $this->getBackingStore()->set('relatedHosts', $value);
    }

    /**
     * Sets the serialNumber property value. The serial number associated with an SSL certificate.
     * @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value): void {
        $this->getBackingStore()->set('serialNumber', $value);
    }

    /**
     * Sets the sha1 property value. A SHA-1 hash of the certificate. Note: This is not the signature.
     * @param string|null $value Value to set for the sha1 property.
    */
    public function setSha1(?string $value): void {
        $this->getBackingStore()->set('sha1', $value);
    }

    /**
     * Sets the subject property value. The person, site, machine, and so on, this certificate is for.
     * @param SslCertificateEntity|null $value Value to set for the subject property.
    */
    public function setSubject(?SslCertificateEntity $value): void {
        $this->getBackingStore()->set('subject', $value);
    }

}
