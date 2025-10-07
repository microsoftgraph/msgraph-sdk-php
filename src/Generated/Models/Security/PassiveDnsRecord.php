<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PassiveDnsRecord extends Artifact implements Parsable 
{
    /**
     * Instantiates a new PassiveDnsRecord and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.passiveDnsRecord');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PassiveDnsRecord
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PassiveDnsRecord {
        return new PassiveDnsRecord();
    }

    /**
     * Gets the artifact property value. The artifact property
     * @return Artifact|null
    */
    public function getArtifact(): ?Artifact {
        $val = $this->getBackingStore()->get('artifact');
        if (is_null($val) || $val instanceof Artifact) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'artifact'");
    }

    /**
     * Gets the collectedDateTime property value. The date and time that this passiveDnsRecord entry was collected by Microsoft. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCollectedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('collectedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'collectedDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'artifact' => fn(ParseNode $n) => $o->setArtifact($n->getObjectValue([Artifact::class, 'createFromDiscriminatorValue'])),
            'collectedDateTime' => fn(ParseNode $n) => $o->setCollectedDateTime($n->getDateTimeValue()),
            'firstSeenDateTime' => fn(ParseNode $n) => $o->setFirstSeenDateTime($n->getDateTimeValue()),
            'lastSeenDateTime' => fn(ParseNode $n) => $o->setLastSeenDateTime($n->getDateTimeValue()),
            'parentHost' => fn(ParseNode $n) => $o->setParentHost($n->getObjectValue([Host::class, 'createFromDiscriminatorValue'])),
            'recordType' => fn(ParseNode $n) => $o->setRecordType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the firstSeenDateTime property value. The date and time when this passiveDnsRecord entry was first seen. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the lastSeenDateTime property value. The date and time when this passiveDnsRecord entry was most recently seen. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the parentHost property value. The parentHost property
     * @return Host|null
    */
    public function getParentHost(): ?Host {
        $val = $this->getBackingStore()->get('parentHost');
        if (is_null($val) || $val instanceof Host) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentHost'");
    }

    /**
     * Gets the recordType property value. The DNS record type for this passiveDnsRecord entry.
     * @return string|null
    */
    public function getRecordType(): ?string {
        $val = $this->getBackingStore()->get('recordType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recordType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('artifact', $this->getArtifact());
        $writer->writeDateTimeValue('collectedDateTime', $this->getCollectedDateTime());
        $writer->writeDateTimeValue('firstSeenDateTime', $this->getFirstSeenDateTime());
        $writer->writeDateTimeValue('lastSeenDateTime', $this->getLastSeenDateTime());
        $writer->writeObjectValue('parentHost', $this->getParentHost());
        $writer->writeStringValue('recordType', $this->getRecordType());
    }

    /**
     * Sets the artifact property value. The artifact property
     * @param Artifact|null $value Value to set for the artifact property.
    */
    public function setArtifact(?Artifact $value): void {
        $this->getBackingStore()->set('artifact', $value);
    }

    /**
     * Sets the collectedDateTime property value. The date and time that this passiveDnsRecord entry was collected by Microsoft. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the collectedDateTime property.
    */
    public function setCollectedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('collectedDateTime', $value);
    }

    /**
     * Sets the firstSeenDateTime property value. The date and time when this passiveDnsRecord entry was first seen. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstSeenDateTime', $value);
    }

    /**
     * Sets the lastSeenDateTime property value. The date and time when this passiveDnsRecord entry was most recently seen. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSeenDateTime', $value);
    }

    /**
     * Sets the parentHost property value. The parentHost property
     * @param Host|null $value Value to set for the parentHost property.
    */
    public function setParentHost(?Host $value): void {
        $this->getBackingStore()->set('parentHost', $value);
    }

    /**
     * Sets the recordType property value. The DNS record type for this passiveDnsRecord entry.
     * @param string|null $value Value to set for the recordType property.
    */
    public function setRecordType(?string $value): void {
        $this->getBackingStore()->set('recordType', $value);
    }

}
