<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class HostEntityMapping extends EntityMapping implements Parsable 
{
    /**
     * Instantiates a new HostEntityMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.hostEntityMapping');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return HostEntityMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): HostEntityMapping {
        return new HostEntityMapping();
    }

    /**
     * Gets the deviceIdColumn property value. Name of the detection query column that maps to the device ID of the alert entity.
     * @return string|null
    */
    public function getDeviceIdColumn(): ?string {
        $val = $this->getBackingStore()->get('deviceIdColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceIdColumn'");
    }

    /**
     * Gets the dnsDomainColumn property value. Name of the detection query column that maps to the DNS domain of the alert entity.
     * @return string|null
    */
    public function getDnsDomainColumn(): ?string {
        $val = $this->getBackingStore()->get('dnsDomainColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dnsDomainColumn'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceIdColumn' => fn(ParseNode $n) => $o->setDeviceIdColumn($n->getStringValue()),
            'dnsDomainColumn' => fn(ParseNode $n) => $o->setDnsDomainColumn($n->getStringValue()),
            'nameColumn' => fn(ParseNode $n) => $o->setNameColumn($n->getStringValue()),
            'netBiosNameColumn' => fn(ParseNode $n) => $o->setNetBiosNameColumn($n->getStringValue()),
            'ntDomainColumn' => fn(ParseNode $n) => $o->setNtDomainColumn($n->getStringValue()),
        ]);
    }

    /**
     * Gets the nameColumn property value. Name of the detection query column that maps to the name of the alert entity.
     * @return string|null
    */
    public function getNameColumn(): ?string {
        $val = $this->getBackingStore()->get('nameColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nameColumn'");
    }

    /**
     * Gets the netBiosNameColumn property value. Name of the detection query column that maps to the NetBIOS name of the alert entity.
     * @return string|null
    */
    public function getNetBiosNameColumn(): ?string {
        $val = $this->getBackingStore()->get('netBiosNameColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'netBiosNameColumn'");
    }

    /**
     * Gets the ntDomainColumn property value. Name of the detection query column that maps to the NT domain of the alert entity.
     * @return string|null
    */
    public function getNtDomainColumn(): ?string {
        $val = $this->getBackingStore()->get('ntDomainColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ntDomainColumn'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceIdColumn', $this->getDeviceIdColumn());
        $writer->writeStringValue('dnsDomainColumn', $this->getDnsDomainColumn());
        $writer->writeStringValue('nameColumn', $this->getNameColumn());
        $writer->writeStringValue('netBiosNameColumn', $this->getNetBiosNameColumn());
        $writer->writeStringValue('ntDomainColumn', $this->getNtDomainColumn());
    }

    /**
     * Sets the deviceIdColumn property value. Name of the detection query column that maps to the device ID of the alert entity.
     * @param string|null $value Value to set for the deviceIdColumn property.
    */
    public function setDeviceIdColumn(?string $value): void {
        $this->getBackingStore()->set('deviceIdColumn', $value);
    }

    /**
     * Sets the dnsDomainColumn property value. Name of the detection query column that maps to the DNS domain of the alert entity.
     * @param string|null $value Value to set for the dnsDomainColumn property.
    */
    public function setDnsDomainColumn(?string $value): void {
        $this->getBackingStore()->set('dnsDomainColumn', $value);
    }

    /**
     * Sets the nameColumn property value. Name of the detection query column that maps to the name of the alert entity.
     * @param string|null $value Value to set for the nameColumn property.
    */
    public function setNameColumn(?string $value): void {
        $this->getBackingStore()->set('nameColumn', $value);
    }

    /**
     * Sets the netBiosNameColumn property value. Name of the detection query column that maps to the NetBIOS name of the alert entity.
     * @param string|null $value Value to set for the netBiosNameColumn property.
    */
    public function setNetBiosNameColumn(?string $value): void {
        $this->getBackingStore()->set('netBiosNameColumn', $value);
    }

    /**
     * Sets the ntDomainColumn property value. Name of the detection query column that maps to the NT domain of the alert entity.
     * @param string|null $value Value to set for the ntDomainColumn property.
    */
    public function setNtDomainColumn(?string $value): void {
        $this->getBackingStore()->set('ntDomainColumn', $value);
    }

}
