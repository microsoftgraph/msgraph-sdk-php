<?php

namespace Microsoft\Graph\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Directory extends Entity 
{
    /** @var array<AdministrativeUnit>|null $administrativeUnits Conceptual container for user and group directory objects. */
    private ?array $administrativeUnits = null;
    
    /** @var array<DirectoryObject>|null $deletedItems Recently deleted items. Read-only. Nullable. */
    private ?array $deletedItems = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): Directory {
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'administrativeUnits' => function (self $o, ParseNode $n) { $o->setAdministrativeUnits($n->getCollectionOfObjectValues(AdministrativeUnit::class)); },
            'deletedItems' => function (self $o, ParseNode $n) { $o->setDeletedItems($n->getCollectionOfObjectValues(DirectoryObject::class)); },
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

}
