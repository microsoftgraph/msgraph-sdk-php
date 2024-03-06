<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HostTracker extends Artifact implements Parsable 
{
    /**
     * Instantiates a new HostTracker and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.hostTracker');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HostTracker
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HostTracker {
        return new HostTracker();
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
            'kind' => fn(ParseNode $n) => $o->setKind($n->getStringValue()),
            'lastSeenDateTime' => fn(ParseNode $n) => $o->setLastSeenDateTime($n->getDateTimeValue()),
            'value' => fn(ParseNode $n) => $o->setValue($n->getStringValue()),
        ]);
    }

    /**
     * Gets the firstSeenDateTime property value. The first date and time when this hostTracker was observed by Microsoft Defender Threat Intelligence. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
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
     * Gets the kind property value. The kind of hostTracker that was detected. For example, GoogleAnalyticsID or JarmHash.
     * @return string|null
    */
    public function getKind(): ?string {
        $val = $this->getBackingStore()->get('kind');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'kind'");
    }

    /**
     * Gets the lastSeenDateTime property value. The most recent date and time when this hostTracker was observed by Microsoft Defender Threat Intelligence. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
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
     * Gets the value property value. The identification value for the hostTracker.
     * @return string|null
    */
    public function getValue(): ?string {
        $val = $this->getBackingStore()->get('value');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'value'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('firstSeenDateTime', $this->getFirstSeenDateTime());
        $writer->writeObjectValue('host', $this->getHost());
        $writer->writeStringValue('kind', $this->getKind());
        $writer->writeDateTimeValue('lastSeenDateTime', $this->getLastSeenDateTime());
        $writer->writeStringValue('value', $this->getValue());
    }

    /**
     * Sets the firstSeenDateTime property value. The first date and time when this hostTracker was observed by Microsoft Defender Threat Intelligence. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
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
     * Sets the kind property value. The kind of hostTracker that was detected. For example, GoogleAnalyticsID or JarmHash.
     * @param string|null $value Value to set for the kind property.
    */
    public function setKind(?string $value): void {
        $this->getBackingStore()->set('kind', $value);
    }

    /**
     * Sets the lastSeenDateTime property value. The most recent date and time when this hostTracker was observed by Microsoft Defender Threat Intelligence. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014, is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSeenDateTime', $value);
    }

    /**
     * Sets the value property value. The identification value for the hostTracker.
     * @param string|null $value Value to set for the value property.
    */
    public function setValue(?string $value): void {
        $this->getBackingStore()->set('value', $value);
    }

}
