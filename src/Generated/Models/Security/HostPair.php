<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HostPair extends Entity implements Parsable 
{
    /**
     * Instantiates a new hostPair and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HostPair
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HostPair {
        return new HostPair();
    }

    /**
     * Gets the childHost property value. The childHost property
     * @return Host|null
    */
    public function getChildHost(): ?Host {
        $val = $this->getBackingStore()->get('childHost');
        if (is_null($val) || $val instanceof Host) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'childHost'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'childHost' => fn(ParseNode $n) => $o->setChildHost($n->getObjectValue([Host::class, 'createFromDiscriminatorValue'])),
            'firstSeenDateTime' => fn(ParseNode $n) => $o->setFirstSeenDateTime($n->getDateTimeValue()),
            'lastSeenDateTime' => fn(ParseNode $n) => $o->setLastSeenDateTime($n->getDateTimeValue()),
            'linkKind' => fn(ParseNode $n) => $o->setLinkKind($n->getStringValue()),
            'parentHost' => fn(ParseNode $n) => $o->setParentHost($n->getObjectValue([Host::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the firstSeenDateTime property value. The date and time when Microsoft Defender Threat Intelligence first observed the hostPair. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the lastSeenDateTime property value. The date and time when Microsoft Defender Threat Intelligence last observed the hostPair. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the linkKind property value. The reason that two hosts are identified as hostPair.
     * @return string|null
    */
    public function getLinkKind(): ?string {
        $val = $this->getBackingStore()->get('linkKind');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'linkKind'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('childHost', $this->getChildHost());
        $writer->writeDateTimeValue('firstSeenDateTime', $this->getFirstSeenDateTime());
        $writer->writeDateTimeValue('lastSeenDateTime', $this->getLastSeenDateTime());
        $writer->writeStringValue('linkKind', $this->getLinkKind());
        $writer->writeObjectValue('parentHost', $this->getParentHost());
    }

    /**
     * Sets the childHost property value. The childHost property
     * @param Host|null $value Value to set for the childHost property.
    */
    public function setChildHost(?Host $value): void {
        $this->getBackingStore()->set('childHost', $value);
    }

    /**
     * Sets the firstSeenDateTime property value. The date and time when Microsoft Defender Threat Intelligence first observed the hostPair. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the firstSeenDateTime property.
    */
    public function setFirstSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstSeenDateTime', $value);
    }

    /**
     * Sets the lastSeenDateTime property value. The date and time when Microsoft Defender Threat Intelligence last observed the hostPair. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSeenDateTime', $value);
    }

    /**
     * Sets the linkKind property value. The reason that two hosts are identified as hostPair.
     * @param string|null $value Value to set for the linkKind property.
    */
    public function setLinkKind(?string $value): void {
        $this->getBackingStore()->set('linkKind', $value);
    }

    /**
     * Sets the parentHost property value. The parentHost property
     * @param Host|null $value Value to set for the parentHost property.
    */
    public function setParentHost(?Host $value): void {
        $this->getBackingStore()->set('parentHost', $value);
    }

}
