<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Directory extends Entity implements Parsable 
{
    /**
     * @var array<AdministrativeUnit>|null $administrativeUnits Conceptual container for user and group directory objects.
    */
    private ?array $administrativeUnits = null;
    
    /**
     * @var array<DirectoryObject>|null $deletedItems Recently deleted items. Read-only. Nullable.
    */
    private ?array $deletedItems = null;
    
    /**
     * @var array<IdentityProviderBase>|null $federationConfigurations Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
    */
    private ?array $federationConfigurations = null;
    
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
        return $this->administrativeUnits;
    }

    /**
     * Gets the deletedItems property value. Recently deleted items. Read-only. Nullable.
     * @return array<DirectoryObject>|null
    */
    public function getDeletedItems(): ?array {
        return $this->deletedItems;
    }

    /**
     * Gets the federationConfigurations property value. Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
     * @return array<IdentityProviderBase>|null
    */
    public function getFederationConfigurations(): ?array {
        return $this->federationConfigurations;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'administrativeUnits' => function (ParseNode $n) use ($o) { $o->setAdministrativeUnits($n->getCollectionOfObjectValues(array(AdministrativeUnit::class, 'createFromDiscriminatorValue'))); },
            'deletedItems' => function (ParseNode $n) use ($o) { $o->setDeletedItems($n->getCollectionOfObjectValues(array(DirectoryObject::class, 'createFromDiscriminatorValue'))); },
            'federationConfigurations' => function (ParseNode $n) use ($o) { $o->setFederationConfigurations($n->getCollectionOfObjectValues(array(IdentityProviderBase::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('administrativeUnits', $this->administrativeUnits);
        $writer->writeCollectionOfObjectValues('deletedItems', $this->deletedItems);
        $writer->writeCollectionOfObjectValues('federationConfigurations', $this->federationConfigurations);
    }

    /**
     * Sets the administrativeUnits property value. Conceptual container for user and group directory objects.
     *  @param array<AdministrativeUnit>|null $value Value to set for the administrativeUnits property.
    */
    public function setAdministrativeUnits(?array $value ): void {
        $this->administrativeUnits = $value;
    }

    /**
     * Sets the deletedItems property value. Recently deleted items. Read-only. Nullable.
     *  @param array<DirectoryObject>|null $value Value to set for the deletedItems property.
    */
    public function setDeletedItems(?array $value ): void {
        $this->deletedItems = $value;
    }

    /**
     * Sets the federationConfigurations property value. Configure domain federation with organizations whose identity provider (IdP) supports either the SAML or WS-Fed protocol.
     *  @param array<IdentityProviderBase>|null $value Value to set for the federationConfigurations property.
    */
    public function setFederationConfigurations(?array $value ): void {
        $this->federationConfigurations = $value;
    }

}
