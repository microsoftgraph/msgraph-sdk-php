<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IpEvidence extends AlertEvidence implements Parsable 
{
    /**
     * Instantiates a new IpEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.ipEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IpEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IpEvidence {
        return new IpEvidence();
    }

    /**
     * Gets the countryLetterCode property value. The two-letter country code according to ISO 3166 format, for example: US, UK, CA, etc.
     * @return string|null
    */
    public function getCountryLetterCode(): ?string {
        $val = $this->getBackingStore()->get('countryLetterCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countryLetterCode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'countryLetterCode' => fn(ParseNode $n) => $o->setCountryLetterCode($n->getStringValue()),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
            'location' => fn(ParseNode $n) => $o->setLocation($n->getObjectValue([GeoLocation::class, 'createFromDiscriminatorValue'])),
            'stream' => fn(ParseNode $n) => $o->setStream($n->getObjectValue([Stream::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the ipAddress property value. The value of the IP Address, can be either in V4 address or V6 address format.
     * @return string|null
    */
    public function getIpAddress(): ?string {
        $val = $this->getBackingStore()->get('ipAddress');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ipAddress'");
    }

    /**
     * Gets the location property value. The location property
     * @return GeoLocation|null
    */
    public function getLocation(): ?GeoLocation {
        $val = $this->getBackingStore()->get('location');
        if (is_null($val) || $val instanceof GeoLocation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'location'");
    }

    /**
     * Gets the stream property value. The stream property
     * @return Stream|null
    */
    public function getStream(): ?Stream {
        $val = $this->getBackingStore()->get('stream');
        if (is_null($val) || $val instanceof Stream) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'stream'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('countryLetterCode', $this->getCountryLetterCode());
        $writer->writeStringValue('ipAddress', $this->getIpAddress());
        $writer->writeObjectValue('location', $this->getLocation());
        $writer->writeObjectValue('stream', $this->getStream());
    }

    /**
     * Sets the countryLetterCode property value. The two-letter country code according to ISO 3166 format, for example: US, UK, CA, etc.
     * @param string|null $value Value to set for the countryLetterCode property.
    */
    public function setCountryLetterCode(?string $value): void {
        $this->getBackingStore()->set('countryLetterCode', $value);
    }

    /**
     * Sets the ipAddress property value. The value of the IP Address, can be either in V4 address or V6 address format.
     * @param string|null $value Value to set for the ipAddress property.
    */
    public function setIpAddress(?string $value): void {
        $this->getBackingStore()->set('ipAddress', $value);
    }

    /**
     * Sets the location property value. The location property
     * @param GeoLocation|null $value Value to set for the location property.
    */
    public function setLocation(?GeoLocation $value): void {
        $this->getBackingStore()->set('location', $value);
    }

    /**
     * Sets the stream property value. The stream property
     * @param Stream|null $value Value to set for the stream property.
    */
    public function setStream(?Stream $value): void {
        $this->getBackingStore()->set('stream', $value);
    }

}
