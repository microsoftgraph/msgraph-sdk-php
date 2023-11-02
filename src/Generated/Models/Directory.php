<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Directory extends Entity implements Parsable 
{
    /**
     * Instantiates a new directory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Directory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Directory {
        return new Directory();
    }

    /**
     * Gets the administrativeUnits property value. Conceptual container for user and group directory objects.
     * @return array<AdministrativeUnit>|null
    */
    public function getAdministrativeUnits(): ?array {
        $val = $this->getBackingStore()->get('administrativeUnits');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AdministrativeUnit::class);
            /** @var array<AdministrativeUnit>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'administrativeUnits'");
    }

    /**
     * Gets the attributeSets property value. Group of related custom security attribute definitions.
     * @return array<AttributeSet>|null
    */
    public function getAttributeSets(): ?array {
        $val = $this->getBackingStore()->get('attributeSets');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AttributeSet::class);
            /** @var array<AttributeSet>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attributeSets'");
    }

    /**
     * Gets the customSecurityAttributeDefinitions property value. Schema of a custom security attributes (key-value pairs).
     * @return array<CustomSecurityAttributeDefinition>|null
    */
    public function getCustomSecurityAttributeDefinitions(): ?array {
        $val = $this->getBackingStore()->get('customSecurityAttributeDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomSecurityAttributeDefinition::class);
            /** @var array<CustomSecurityAttributeDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customSecurityAttributeDefinitions'");
    }

    /**
     * Gets the deletedItems property value. Recently deleted items. Read-only. Nullable.
     * @return array<DirectoryObject>|null
    */
    public function getDeletedItems(): ?array {
        $val = $this->getBackingStore()->get('deletedItems');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryObject::class);
            /** @var array<DirectoryObject>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedItems'");
    }

    /**
     * Gets the deviceLocalCredentials property value. The credentials of the device's local administrator account backed up to Microsoft Entra ID.
     * @return array<DeviceLocalCredentialInfo>|null
    */
    public function getDeviceLocalCredentials(): ?array {
        $val = $this->getBackingStore()->get('deviceLocalCredentials');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceLocalCredentialInfo::class);
            /** @var array<DeviceLocalCredentialInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceLocalCredentials'");
    }

    /**
     * Gets the federationConfigurations property value. Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
     * @return array<IdentityProviderBase>|null
    */
    public function getFederationConfigurations(): ?array {
        $val = $this->getBackingStore()->get('federationConfigurations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IdentityProviderBase::class);
            /** @var array<IdentityProviderBase>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'federationConfigurations'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'administrativeUnits' => fn(ParseNode $n) => $o->setAdministrativeUnits($n->getCollectionOfObjectValues([AdministrativeUnit::class, 'createFromDiscriminatorValue'])),
            'attributeSets' => fn(ParseNode $n) => $o->setAttributeSets($n->getCollectionOfObjectValues([AttributeSet::class, 'createFromDiscriminatorValue'])),
            'customSecurityAttributeDefinitions' => fn(ParseNode $n) => $o->setCustomSecurityAttributeDefinitions($n->getCollectionOfObjectValues([CustomSecurityAttributeDefinition::class, 'createFromDiscriminatorValue'])),
            'deletedItems' => fn(ParseNode $n) => $o->setDeletedItems($n->getCollectionOfObjectValues([DirectoryObject::class, 'createFromDiscriminatorValue'])),
            'deviceLocalCredentials' => fn(ParseNode $n) => $o->setDeviceLocalCredentials($n->getCollectionOfObjectValues([DeviceLocalCredentialInfo::class, 'createFromDiscriminatorValue'])),
            'federationConfigurations' => fn(ParseNode $n) => $o->setFederationConfigurations($n->getCollectionOfObjectValues([IdentityProviderBase::class, 'createFromDiscriminatorValue'])),
            'onPremisesSynchronization' => fn(ParseNode $n) => $o->setOnPremisesSynchronization($n->getCollectionOfObjectValues([OnPremisesDirectorySynchronization::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the onPremisesSynchronization property value. A container for on-premises directory synchronization functionalities that are available for the organization.
     * @return array<OnPremisesDirectorySynchronization>|null
    */
    public function getOnPremisesSynchronization(): ?array {
        $val = $this->getBackingStore()->get('onPremisesSynchronization');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OnPremisesDirectorySynchronization::class);
            /** @var array<OnPremisesDirectorySynchronization>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesSynchronization'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('administrativeUnits', $this->getAdministrativeUnits());
        $writer->writeCollectionOfObjectValues('attributeSets', $this->getAttributeSets());
        $writer->writeCollectionOfObjectValues('customSecurityAttributeDefinitions', $this->getCustomSecurityAttributeDefinitions());
        $writer->writeCollectionOfObjectValues('deletedItems', $this->getDeletedItems());
        $writer->writeCollectionOfObjectValues('deviceLocalCredentials', $this->getDeviceLocalCredentials());
        $writer->writeCollectionOfObjectValues('federationConfigurations', $this->getFederationConfigurations());
        $writer->writeCollectionOfObjectValues('onPremisesSynchronization', $this->getOnPremisesSynchronization());
    }

    /**
     * Sets the administrativeUnits property value. Conceptual container for user and group directory objects.
     * @param array<AdministrativeUnit>|null $value Value to set for the administrativeUnits property.
    */
    public function setAdministrativeUnits(?array $value): void {
        $this->getBackingStore()->set('administrativeUnits', $value);
    }

    /**
     * Sets the attributeSets property value. Group of related custom security attribute definitions.
     * @param array<AttributeSet>|null $value Value to set for the attributeSets property.
    */
    public function setAttributeSets(?array $value): void {
        $this->getBackingStore()->set('attributeSets', $value);
    }

    /**
     * Sets the customSecurityAttributeDefinitions property value. Schema of a custom security attributes (key-value pairs).
     * @param array<CustomSecurityAttributeDefinition>|null $value Value to set for the customSecurityAttributeDefinitions property.
    */
    public function setCustomSecurityAttributeDefinitions(?array $value): void {
        $this->getBackingStore()->set('customSecurityAttributeDefinitions', $value);
    }

    /**
     * Sets the deletedItems property value. Recently deleted items. Read-only. Nullable.
     * @param array<DirectoryObject>|null $value Value to set for the deletedItems property.
    */
    public function setDeletedItems(?array $value): void {
        $this->getBackingStore()->set('deletedItems', $value);
    }

    /**
     * Sets the deviceLocalCredentials property value. The credentials of the device's local administrator account backed up to Microsoft Entra ID.
     * @param array<DeviceLocalCredentialInfo>|null $value Value to set for the deviceLocalCredentials property.
    */
    public function setDeviceLocalCredentials(?array $value): void {
        $this->getBackingStore()->set('deviceLocalCredentials', $value);
    }

    /**
     * Sets the federationConfigurations property value. Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
     * @param array<IdentityProviderBase>|null $value Value to set for the federationConfigurations property.
    */
    public function setFederationConfigurations(?array $value): void {
        $this->getBackingStore()->set('federationConfigurations', $value);
    }

    /**
     * Sets the onPremisesSynchronization property value. A container for on-premises directory synchronization functionalities that are available for the organization.
     * @param array<OnPremisesDirectorySynchronization>|null $value Value to set for the onPremisesSynchronization property.
    */
    public function setOnPremisesSynchronization(?array $value): void {
        $this->getBackingStore()->set('onPremisesSynchronization', $value);
    }

}
