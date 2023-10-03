<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class WhoisBaseRecord extends Entity implements Parsable 
{
    /**
     * Instantiates a new whoisBaseRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WhoisBaseRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WhoisBaseRecord {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.whoisHistoryRecord': return new WhoisHistoryRecord();
                case '#microsoft.graph.security.whoisRecord': return new WhoisRecord();
            }
        }
        return new WhoisBaseRecord();
    }

    /**
     * Gets the abuse property value. The contact information for the abuse contact.
     * @return WhoisContact|null
    */
    public function getAbuse(): ?WhoisContact {
        $val = $this->getBackingStore()->get('abuse');
        if (is_null($val) || $val instanceof WhoisContact) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'abuse'");
    }

    /**
     * Gets the admin property value. The contact information for the admin contact.
     * @return WhoisContact|null
    */
    public function getAdmin(): ?WhoisContact {
        $val = $this->getBackingStore()->get('admin');
        if (is_null($val) || $val instanceof WhoisContact) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'admin'");
    }

    /**
     * Gets the billing property value. The contact information for the billing contact.
     * @return WhoisContact|null
    */
    public function getBilling(): ?WhoisContact {
        $val = $this->getBackingStore()->get('billing');
        if (is_null($val) || $val instanceof WhoisContact) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'billing'");
    }

    /**
     * Gets the domainStatus property value. The domain status for this WHOIS object.
     * @return string|null
    */
    public function getDomainStatus(): ?string {
        $val = $this->getBackingStore()->get('domainStatus');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainStatus'");
    }

    /**
     * Gets the expirationDateTime property value. The date and time when this WHOIS record expires with the registrar. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
            'abuse' => fn(ParseNode $n) => $o->setAbuse($n->getObjectValue([WhoisContact::class, 'createFromDiscriminatorValue'])),
            'admin' => fn(ParseNode $n) => $o->setAdmin($n->getObjectValue([WhoisContact::class, 'createFromDiscriminatorValue'])),
            'billing' => fn(ParseNode $n) => $o->setBilling($n->getObjectValue([WhoisContact::class, 'createFromDiscriminatorValue'])),
            'domainStatus' => fn(ParseNode $n) => $o->setDomainStatus($n->getStringValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'firstSeenDateTime' => fn(ParseNode $n) => $o->setFirstSeenDateTime($n->getDateTimeValue()),
            'host' => fn(ParseNode $n) => $o->setHost($n->getObjectValue([Host::class, 'createFromDiscriminatorValue'])),
            'lastSeenDateTime' => fn(ParseNode $n) => $o->setLastSeenDateTime($n->getDateTimeValue()),
            'lastUpdateDateTime' => fn(ParseNode $n) => $o->setLastUpdateDateTime($n->getDateTimeValue()),
            'nameservers' => fn(ParseNode $n) => $o->setNameservers($n->getCollectionOfObjectValues([WhoisNameserver::class, 'createFromDiscriminatorValue'])),
            'noc' => fn(ParseNode $n) => $o->setNoc($n->getObjectValue([WhoisContact::class, 'createFromDiscriminatorValue'])),
            'rawWhoisText' => fn(ParseNode $n) => $o->setRawWhoisText($n->getStringValue()),
            'registrant' => fn(ParseNode $n) => $o->setRegistrant($n->getObjectValue([WhoisContact::class, 'createFromDiscriminatorValue'])),
            'registrar' => fn(ParseNode $n) => $o->setRegistrar($n->getObjectValue([WhoisContact::class, 'createFromDiscriminatorValue'])),
            'registrationDateTime' => fn(ParseNode $n) => $o->setRegistrationDateTime($n->getDateTimeValue()),
            'technical' => fn(ParseNode $n) => $o->setTechnical($n->getObjectValue([WhoisContact::class, 'createFromDiscriminatorValue'])),
            'whoisServer' => fn(ParseNode $n) => $o->setWhoisServer($n->getStringValue()),
            'zone' => fn(ParseNode $n) => $o->setZone($n->getObjectValue([WhoisContact::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the firstSeenDateTime property value. The first seen date and time of this WHOIS record. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the host property value. The host property
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
     * Gets the lastSeenDateTime property value. The last seen date and time of this WHOIS record. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the lastUpdateDateTime property value. The date and time when this WHOIS record was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getLastUpdateDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUpdateDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUpdateDateTime'");
    }

    /**
     * Gets the nameservers property value. The nameservers for this WHOIS object.
     * @return array<WhoisNameserver>|null
    */
    public function getNameservers(): ?array {
        $val = $this->getBackingStore()->get('nameservers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WhoisNameserver::class);
            /** @var array<WhoisNameserver>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nameservers'");
    }

    /**
     * Gets the noc property value. The contact information for the noc contact.
     * @return WhoisContact|null
    */
    public function getNoc(): ?WhoisContact {
        $val = $this->getBackingStore()->get('noc');
        if (is_null($val) || $val instanceof WhoisContact) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'noc'");
    }

    /**
     * Gets the rawWhoisText property value. The raw WHOIS details for this WHOIS object.
     * @return string|null
    */
    public function getRawWhoisText(): ?string {
        $val = $this->getBackingStore()->get('rawWhoisText');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rawWhoisText'");
    }

    /**
     * Gets the registrant property value. The contact information for the registrant contact.
     * @return WhoisContact|null
    */
    public function getRegistrant(): ?WhoisContact {
        $val = $this->getBackingStore()->get('registrant');
        if (is_null($val) || $val instanceof WhoisContact) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registrant'");
    }

    /**
     * Gets the registrar property value. The contact information for the registrar contact.
     * @return WhoisContact|null
    */
    public function getRegistrar(): ?WhoisContact {
        $val = $this->getBackingStore()->get('registrar');
        if (is_null($val) || $val instanceof WhoisContact) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registrar'");
    }

    /**
     * Gets the registrationDateTime property value. The date and time when this WHOIS record was registered with a registrar. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getRegistrationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('registrationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'registrationDateTime'");
    }

    /**
     * Gets the technical property value. The contact information for the technical contact.
     * @return WhoisContact|null
    */
    public function getTechnical(): ?WhoisContact {
        $val = $this->getBackingStore()->get('technical');
        if (is_null($val) || $val instanceof WhoisContact) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'technical'");
    }

    /**
     * Gets the whoisServer property value. The WHOIS server that provides the details.
     * @return string|null
    */
    public function getWhoisServer(): ?string {
        $val = $this->getBackingStore()->get('whoisServer');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'whoisServer'");
    }

    /**
     * Gets the zone property value. The contact information for the zone contact.
     * @return WhoisContact|null
    */
    public function getZone(): ?WhoisContact {
        $val = $this->getBackingStore()->get('zone');
        if (is_null($val) || $val instanceof WhoisContact) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'zone'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('abuse', $this->getAbuse());
        $writer->writeObjectValue('admin', $this->getAdmin());
        $writer->writeObjectValue('billing', $this->getBilling());
        $writer->writeStringValue('domainStatus', $this->getDomainStatus());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeDateTimeValue('firstSeenDateTime', $this->getFirstSeenDateTime());
        $writer->writeObjectValue('host', $this->getHost());
        $writer->writeDateTimeValue('lastSeenDateTime', $this->getLastSeenDateTime());
        $writer->writeDateTimeValue('lastUpdateDateTime', $this->getLastUpdateDateTime());
        $writer->writeCollectionOfObjectValues('nameservers', $this->getNameservers());
        $writer->writeObjectValue('noc', $this->getNoc());
        $writer->writeStringValue('rawWhoisText', $this->getRawWhoisText());
        $writer->writeObjectValue('registrant', $this->getRegistrant());
        $writer->writeObjectValue('registrar', $this->getRegistrar());
        $writer->writeDateTimeValue('registrationDateTime', $this->getRegistrationDateTime());
        $writer->writeObjectValue('technical', $this->getTechnical());
        $writer->writeStringValue('whoisServer', $this->getWhoisServer());
        $writer->writeObjectValue('zone', $this->getZone());
    }

    /**
     * Sets the abuse property value. The contact information for the abuse contact.
     * @param WhoisContact|null $value Value to set for the abuse property.
    */
    public function setAbuse(?WhoisContact $value): void {
        $this->getBackingStore()->set('abuse', $value);
    }

    /**
     * Sets the admin property value. The contact information for the admin contact.
     * @param WhoisContact|null $value Value to set for the admin property.
    */
    public function setAdmin(?WhoisContact $value): void {
        $this->getBackingStore()->set('admin', $value);
    }

    /**
     * Sets the billing property value. The contact information for the billing contact.
     * @param WhoisContact|null $value Value to set for the billing property.
    */
    public function setBilling(?WhoisContact $value): void {
        $this->getBackingStore()->set('billing', $value);
    }

    /**
     * Sets the domainStatus property value. The domain status for this WHOIS object.
     * @param string|null $value Value to set for the domainStatus property.
    */
    public function setDomainStatus(?string $value): void {
        $this->getBackingStore()->set('domainStatus', $value);
    }

    /**
     * Sets the expirationDateTime property value. The date and time when this WHOIS record expires with the registrar. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the firstSeenDateTime property value. The first seen date and time of this WHOIS record. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstSeenDateTime', $value);
    }

    /**
     * Sets the host property value. The host property
     * @param Host|null $value Value to set for the host property.
    */
    public function setHost(?Host $value): void {
        $this->getBackingStore()->set('host', $value);
    }

    /**
     * Sets the lastSeenDateTime property value. The last seen date and time of this WHOIS record. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSeenDateTime', $value);
    }

    /**
     * Sets the lastUpdateDateTime property value. The date and time when this WHOIS record was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastUpdateDateTime property.
    */
    public function setLastUpdateDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdateDateTime', $value);
    }

    /**
     * Sets the nameservers property value. The nameservers for this WHOIS object.
     * @param array<WhoisNameserver>|null $value Value to set for the nameservers property.
    */
    public function setNameservers(?array $value): void {
        $this->getBackingStore()->set('nameservers', $value);
    }

    /**
     * Sets the noc property value. The contact information for the noc contact.
     * @param WhoisContact|null $value Value to set for the noc property.
    */
    public function setNoc(?WhoisContact $value): void {
        $this->getBackingStore()->set('noc', $value);
    }

    /**
     * Sets the rawWhoisText property value. The raw WHOIS details for this WHOIS object.
     * @param string|null $value Value to set for the rawWhoisText property.
    */
    public function setRawWhoisText(?string $value): void {
        $this->getBackingStore()->set('rawWhoisText', $value);
    }

    /**
     * Sets the registrant property value. The contact information for the registrant contact.
     * @param WhoisContact|null $value Value to set for the registrant property.
    */
    public function setRegistrant(?WhoisContact $value): void {
        $this->getBackingStore()->set('registrant', $value);
    }

    /**
     * Sets the registrar property value. The contact information for the registrar contact.
     * @param WhoisContact|null $value Value to set for the registrar property.
    */
    public function setRegistrar(?WhoisContact $value): void {
        $this->getBackingStore()->set('registrar', $value);
    }

    /**
     * Sets the registrationDateTime property value. The date and time when this WHOIS record was registered with a registrar. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the registrationDateTime property.
    */
    public function setRegistrationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('registrationDateTime', $value);
    }

    /**
     * Sets the technical property value. The contact information for the technical contact.
     * @param WhoisContact|null $value Value to set for the technical property.
    */
    public function setTechnical(?WhoisContact $value): void {
        $this->getBackingStore()->set('technical', $value);
    }

    /**
     * Sets the whoisServer property value. The WHOIS server that provides the details.
     * @param string|null $value Value to set for the whoisServer property.
    */
    public function setWhoisServer(?string $value): void {
        $this->getBackingStore()->set('whoisServer', $value);
    }

    /**
     * Sets the zone property value. The contact information for the zone contact.
     * @param WhoisContact|null $value Value to set for the zone property.
    */
    public function setZone(?WhoisContact $value): void {
        $this->getBackingStore()->set('zone', $value);
    }

}
