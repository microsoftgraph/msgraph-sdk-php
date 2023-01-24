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
     * Gets the countryLetterCode property value. The two-letter country code according to ISO 3166 format, for example: US, UK, CA, etc..).
     * @return string|null
    */
    public function getCountryLetterCode(): ?string {
        return $this->getBackingStore()->get('countryLetterCode');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'countryLetterCode' => fn(ParseNode $n) => $o->setCountryLetterCode($n->getStringValue()),
            'ipAddress' => fn(ParseNode $n) => $o->setIpAddress($n->getStringValue()),
        ]);
    }

    /**
     * Gets the ipAddress property value. The value of the IP Address, can be either in V4 address or V6 address format.
     * @return string|null
    */
    public function getIpAddress(): ?string {
        return $this->getBackingStore()->get('ipAddress');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('countryLetterCode', $this->getCountryLetterCode());
        $writer->writeStringValue('ipAddress', $this->getIpAddress());
    }

    /**
     * Sets the countryLetterCode property value. The two-letter country code according to ISO 3166 format, for example: US, UK, CA, etc..).
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

}
