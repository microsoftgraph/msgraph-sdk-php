<?php

namespace Microsoft\Graph\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SensorCandidate extends Entity implements Parsable 
{
    /**
     * Instantiates a new SensorCandidate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SensorCandidate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SensorCandidate {
        return new SensorCandidate();
    }

    /**
     * Gets the computerDnsName property value. The DNS name of the computer associated with the sensor.
     * @return string|null
    */
    public function getComputerDnsName(): ?string {
        $val = $this->getBackingStore()->get('computerDnsName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'computerDnsName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'computerDnsName' => fn(ParseNode $n) => $o->setComputerDnsName($n->getStringValue()),
            'lastSeenDateTime' => fn(ParseNode $n) => $o->setLastSeenDateTime($n->getDateTimeValue()),
            'senseClientVersion' => fn(ParseNode $n) => $o->setSenseClientVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastSeenDateTime property value. The date and time when the sensor was last seen.
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
     * Gets the senseClientVersion property value. The version of the Defender for Identity sensor client. Supports $filter (eq).
     * @return string|null
    */
    public function getSenseClientVersion(): ?string {
        $val = $this->getBackingStore()->get('senseClientVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'senseClientVersion'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('computerDnsName', $this->getComputerDnsName());
        $writer->writeDateTimeValue('lastSeenDateTime', $this->getLastSeenDateTime());
        $writer->writeStringValue('senseClientVersion', $this->getSenseClientVersion());
    }

    /**
     * Sets the computerDnsName property value. The DNS name of the computer associated with the sensor.
     * @param string|null $value Value to set for the computerDnsName property.
    */
    public function setComputerDnsName(?string $value): void {
        $this->getBackingStore()->set('computerDnsName', $value);
    }

    /**
     * Sets the lastSeenDateTime property value. The date and time when the sensor was last seen.
     * @param DateTime|null $value Value to set for the lastSeenDateTime property.
    */
    public function setLastSeenDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastSeenDateTime', $value);
    }

    /**
     * Sets the senseClientVersion property value. The version of the Defender for Identity sensor client. Supports $filter (eq).
     * @param string|null $value Value to set for the senseClientVersion property.
    */
    public function setSenseClientVersion(?string $value): void {
        $this->getBackingStore()->set('senseClientVersion', $value);
    }

}
