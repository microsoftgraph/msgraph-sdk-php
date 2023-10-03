<?php

namespace Microsoft\Graph\Generated\Models\Security;

use Microsoft\Graph\Generated\Models\PhysicalAddress;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SslCertificateEntity implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new sslCertificateEntity and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SslCertificateEntity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SslCertificateEntity {
        return new SslCertificateEntity();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the address property value. A physical address of the entity.
     * @return PhysicalAddress|null
    */
    public function getAddress(): ?PhysicalAddress {
        $val = $this->getBackingStore()->get('address');
        if (is_null($val) || $val instanceof PhysicalAddress) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'address'");
    }

    /**
     * Gets the alternateNames property value. Alternate names for this entity that are part of the certificate.
     * @return array<string>|null
    */
    public function getAlternateNames(): ?array {
        $val = $this->getBackingStore()->get('alternateNames');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alternateNames'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the commonName property value. A common name for this entity.
     * @return string|null
    */
    public function getCommonName(): ?string {
        $val = $this->getBackingStore()->get('commonName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'commonName'");
    }

    /**
     * Gets the email property value. An email for this entity.
     * @return string|null
    */
    public function getEmail(): ?string {
        $val = $this->getBackingStore()->get('email');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'email'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'address' => fn(ParseNode $n) => $o->setAddress($n->getObjectValue([PhysicalAddress::class, 'createFromDiscriminatorValue'])),
            'alternateNames' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAlternateNames($val);
            },
            'commonName' => fn(ParseNode $n) => $o->setCommonName($n->getStringValue()),
            'email' => fn(ParseNode $n) => $o->setEmail($n->getStringValue()),
            'givenName' => fn(ParseNode $n) => $o->setGivenName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'organizationName' => fn(ParseNode $n) => $o->setOrganizationName($n->getStringValue()),
            'organizationUnitName' => fn(ParseNode $n) => $o->setOrganizationUnitName($n->getStringValue()),
            'serialNumber' => fn(ParseNode $n) => $o->setSerialNumber($n->getStringValue()),
            'surname' => fn(ParseNode $n) => $o->setSurname($n->getStringValue()),
        ];
    }

    /**
     * Gets the givenName property value. If the entity is a person, this is the person's given name (first name).
     * @return string|null
    */
    public function getGivenName(): ?string {
        $val = $this->getBackingStore()->get('givenName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'givenName'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the organizationName property value. If the entity is an organization, this is the name of the organization.
     * @return string|null
    */
    public function getOrganizationName(): ?string {
        $val = $this->getBackingStore()->get('organizationName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizationName'");
    }

    /**
     * Gets the organizationUnitName property value. If the entity is an organization, this communicates if a unit in the organization is named on the entity.
     * @return string|null
    */
    public function getOrganizationUnitName(): ?string {
        $val = $this->getBackingStore()->get('organizationUnitName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizationUnitName'");
    }

    /**
     * Gets the serialNumber property value. A serial number assigned to the entity; usually only available if the entity is the issuer.
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        $val = $this->getBackingStore()->get('serialNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serialNumber'");
    }

    /**
     * Gets the surname property value. If the entity is a person, this is the person's surname (last name).
     * @return string|null
    */
    public function getSurname(): ?string {
        $val = $this->getBackingStore()->get('surname');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'surname'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('address', $this->getAddress());
        $writer->writeCollectionOfPrimitiveValues('alternateNames', $this->getAlternateNames());
        $writer->writeStringValue('commonName', $this->getCommonName());
        $writer->writeStringValue('email', $this->getEmail());
        $writer->writeStringValue('givenName', $this->getGivenName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('organizationName', $this->getOrganizationName());
        $writer->writeStringValue('organizationUnitName', $this->getOrganizationUnitName());
        $writer->writeStringValue('serialNumber', $this->getSerialNumber());
        $writer->writeStringValue('surname', $this->getSurname());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the address property value. A physical address of the entity.
     * @param PhysicalAddress|null $value Value to set for the address property.
    */
    public function setAddress(?PhysicalAddress $value): void {
        $this->getBackingStore()->set('address', $value);
    }

    /**
     * Sets the alternateNames property value. Alternate names for this entity that are part of the certificate.
     * @param array<string>|null $value Value to set for the alternateNames property.
    */
    public function setAlternateNames(?array $value): void {
        $this->getBackingStore()->set('alternateNames', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the commonName property value. A common name for this entity.
     * @param string|null $value Value to set for the commonName property.
    */
    public function setCommonName(?string $value): void {
        $this->getBackingStore()->set('commonName', $value);
    }

    /**
     * Sets the email property value. An email for this entity.
     * @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value): void {
        $this->getBackingStore()->set('email', $value);
    }

    /**
     * Sets the givenName property value. If the entity is a person, this is the person's given name (first name).
     * @param string|null $value Value to set for the givenName property.
    */
    public function setGivenName(?string $value): void {
        $this->getBackingStore()->set('givenName', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the organizationName property value. If the entity is an organization, this is the name of the organization.
     * @param string|null $value Value to set for the organizationName property.
    */
    public function setOrganizationName(?string $value): void {
        $this->getBackingStore()->set('organizationName', $value);
    }

    /**
     * Sets the organizationUnitName property value. If the entity is an organization, this communicates if a unit in the organization is named on the entity.
     * @param string|null $value Value to set for the organizationUnitName property.
    */
    public function setOrganizationUnitName(?string $value): void {
        $this->getBackingStore()->set('organizationUnitName', $value);
    }

    /**
     * Sets the serialNumber property value. A serial number assigned to the entity; usually only available if the entity is the issuer.
     * @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value): void {
        $this->getBackingStore()->set('serialNumber', $value);
    }

    /**
     * Sets the surname property value. If the entity is a person, this is the person's surname (last name).
     * @param string|null $value Value to set for the surname property.
    */
    public function setSurname(?string $value): void {
        $this->getBackingStore()->set('surname', $value);
    }

}
