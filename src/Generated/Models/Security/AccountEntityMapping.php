<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccountEntityMapping extends EntityMapping implements Parsable 
{
    /**
     * Instantiates a new AccountEntityMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.accountEntityMapping');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccountEntityMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccountEntityMapping {
        return new AccountEntityMapping();
    }

    /**
     * Gets the aadUserIdColumn property value. Name of the detection query column that maps to the Microsoft Entra user ID of the alert entity.
     * @return string|null
    */
    public function getAadUserIdColumn(): ?string {
        $val = $this->getBackingStore()->get('aadUserIdColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'aadUserIdColumn'");
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
            'aadUserIdColumn' => fn(ParseNode $n) => $o->setAadUserIdColumn($n->getStringValue()),
            'dnsDomainColumn' => fn(ParseNode $n) => $o->setDnsDomainColumn($n->getStringValue()),
            'nameColumn' => fn(ParseNode $n) => $o->setNameColumn($n->getStringValue()),
            'ntDomainColumn' => fn(ParseNode $n) => $o->setNtDomainColumn($n->getStringValue()),
            'sidColumn' => fn(ParseNode $n) => $o->setSidColumn($n->getStringValue()),
            'upnColumn' => fn(ParseNode $n) => $o->setUpnColumn($n->getStringValue()),
            'upnSuffixColumn' => fn(ParseNode $n) => $o->setUpnSuffixColumn($n->getStringValue()),
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
     * Gets the sidColumn property value. Name of the detection query column that maps to the security identifier (SID) of the alert entity.
     * @return string|null
    */
    public function getSidColumn(): ?string {
        $val = $this->getBackingStore()->get('sidColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sidColumn'");
    }

    /**
     * Gets the upnColumn property value. Name of the detection query column that maps to the user principal name (UPN) of the alert entity.
     * @return string|null
    */
    public function getUpnColumn(): ?string {
        $val = $this->getBackingStore()->get('upnColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'upnColumn'");
    }

    /**
     * Gets the upnSuffixColumn property value. Name of the detection query column that maps to the UPN suffix of the alert entity.
     * @return string|null
    */
    public function getUpnSuffixColumn(): ?string {
        $val = $this->getBackingStore()->get('upnSuffixColumn');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'upnSuffixColumn'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('aadUserIdColumn', $this->getAadUserIdColumn());
        $writer->writeStringValue('dnsDomainColumn', $this->getDnsDomainColumn());
        $writer->writeStringValue('nameColumn', $this->getNameColumn());
        $writer->writeStringValue('ntDomainColumn', $this->getNtDomainColumn());
        $writer->writeStringValue('sidColumn', $this->getSidColumn());
        $writer->writeStringValue('upnColumn', $this->getUpnColumn());
        $writer->writeStringValue('upnSuffixColumn', $this->getUpnSuffixColumn());
    }

    /**
     * Sets the aadUserIdColumn property value. Name of the detection query column that maps to the Microsoft Entra user ID of the alert entity.
     * @param string|null $value Value to set for the aadUserIdColumn property.
    */
    public function setAadUserIdColumn(?string $value): void {
        $this->getBackingStore()->set('aadUserIdColumn', $value);
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
     * Sets the ntDomainColumn property value. Name of the detection query column that maps to the NT domain of the alert entity.
     * @param string|null $value Value to set for the ntDomainColumn property.
    */
    public function setNtDomainColumn(?string $value): void {
        $this->getBackingStore()->set('ntDomainColumn', $value);
    }

    /**
     * Sets the sidColumn property value. Name of the detection query column that maps to the security identifier (SID) of the alert entity.
     * @param string|null $value Value to set for the sidColumn property.
    */
    public function setSidColumn(?string $value): void {
        $this->getBackingStore()->set('sidColumn', $value);
    }

    /**
     * Sets the upnColumn property value. Name of the detection query column that maps to the user principal name (UPN) of the alert entity.
     * @param string|null $value Value to set for the upnColumn property.
    */
    public function setUpnColumn(?string $value): void {
        $this->getBackingStore()->set('upnColumn', $value);
    }

    /**
     * Sets the upnSuffixColumn property value. Name of the detection query column that maps to the UPN suffix of the alert entity.
     * @param string|null $value Value to set for the upnSuffixColumn property.
    */
    public function setUpnSuffixColumn(?string $value): void {
        $this->getBackingStore()->set('upnSuffixColumn', $value);
    }

}
