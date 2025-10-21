<?php

namespace Microsoft\\Graph\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IpAddress extends Host implements Parsable 
{
    /**
     * Instantiates a new IpAddress and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.ipAddress');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IpAddress
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IpAddress {
        return new IpAddress();
    }

    /**
     * Gets the autonomousSystem property value. The details about the autonomous system to which this IP address belongs.
     * @return AutonomousSystem|null
    */
    public function getAutonomousSystem(): ?AutonomousSystem {
        $val = $this->getBackingStore()->get('autonomousSystem');
        if (is_null($val) || $val instanceof AutonomousSystem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autonomousSystem'");
    }

    /**
     * Gets the countryOrRegion property value. The country/region for this IP address.
     * @return string|null
    */
    public function getCountryOrRegion(): ?string {
        $val = $this->getBackingStore()->get('countryOrRegion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'countryOrRegion'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'autonomousSystem' => fn(ParseNode $n) => $o->setAutonomousSystem($n->getObjectValue([AutonomousSystem::class, 'createFromDiscriminatorValue'])),
            'countryOrRegion' => fn(ParseNode $n) => $o->setCountryOrRegion($n->getStringValue()),
            'hostingProvider' => fn(ParseNode $n) => $o->setHostingProvider($n->getStringValue()),
            'netblock' => fn(ParseNode $n) => $o->setNetblock($n->getStringValue()),
        ]);
    }

    /**
     * Gets the hostingProvider property value. The hosting company listed for this host.
     * @return string|null
    */
    public function getHostingProvider(): ?string {
        $val = $this->getBackingStore()->get('hostingProvider');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hostingProvider'");
    }

    /**
     * Gets the netblock property value. The block of IP addresses this IP address belongs to.
     * @return string|null
    */
    public function getNetblock(): ?string {
        $val = $this->getBackingStore()->get('netblock');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'netblock'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('autonomousSystem', $this->getAutonomousSystem());
        $writer->writeStringValue('countryOrRegion', $this->getCountryOrRegion());
        $writer->writeStringValue('hostingProvider', $this->getHostingProvider());
        $writer->writeStringValue('netblock', $this->getNetblock());
    }

    /**
     * Sets the autonomousSystem property value. The details about the autonomous system to which this IP address belongs.
     * @param AutonomousSystem|null $value Value to set for the autonomousSystem property.
    */
    public function setAutonomousSystem(?AutonomousSystem $value): void {
        $this->getBackingStore()->set('autonomousSystem', $value);
    }

    /**
     * Sets the countryOrRegion property value. The country/region for this IP address.
     * @param string|null $value Value to set for the countryOrRegion property.
    */
    public function setCountryOrRegion(?string $value): void {
        $this->getBackingStore()->set('countryOrRegion', $value);
    }

    /**
     * Sets the hostingProvider property value. The hosting company listed for this host.
     * @param string|null $value Value to set for the hostingProvider property.
    */
    public function setHostingProvider(?string $value): void {
        $this->getBackingStore()->set('hostingProvider', $value);
    }

    /**
     * Sets the netblock property value. The block of IP addresses this IP address belongs to.
     * @param string|null $value Value to set for the netblock property.
    */
    public function setNetblock(?string $value): void {
        $this->getBackingStore()->set('netblock', $value);
    }

}
