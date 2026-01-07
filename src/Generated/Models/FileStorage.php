<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class FileStorage extends Entity implements Parsable 
{
    /**
     * Instantiates a new FileStorage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return FileStorage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): FileStorage {
        return new FileStorage();
    }

    /**
     * Gets the containers property value. The collection of active fileStorageContainer resources.
     * @return array<FileStorageContainer>|null
    */
    public function getContainers(): ?array {
        $val = $this->getBackingStore()->get('containers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FileStorageContainer::class);
            /** @var array<FileStorageContainer>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'containers'");
    }

    /**
     * Gets the containerTypeRegistrations property value. The collection of fileStorageContainerTypeRegistration resources.
     * @return array<FileStorageContainerTypeRegistration>|null
    */
    public function getContainerTypeRegistrations(): ?array {
        $val = $this->getBackingStore()->get('containerTypeRegistrations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FileStorageContainerTypeRegistration::class);
            /** @var array<FileStorageContainerTypeRegistration>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'containerTypeRegistrations'");
    }

    /**
     * Gets the containerTypes property value. The collection of fileStorageContainerType resources.
     * @return array<FileStorageContainerType>|null
    */
    public function getContainerTypes(): ?array {
        $val = $this->getBackingStore()->get('containerTypes');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FileStorageContainerType::class);
            /** @var array<FileStorageContainerType>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'containerTypes'");
    }

    /**
     * Gets the deletedContainers property value. The collection of deleted fileStorageContainer resources.
     * @return array<FileStorageContainer>|null
    */
    public function getDeletedContainers(): ?array {
        $val = $this->getBackingStore()->get('deletedContainers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FileStorageContainer::class);
            /** @var array<FileStorageContainer>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deletedContainers'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'containers' => fn(ParseNode $n) => $o->setContainers($n->getCollectionOfObjectValues([FileStorageContainer::class, 'createFromDiscriminatorValue'])),
            'containerTypeRegistrations' => fn(ParseNode $n) => $o->setContainerTypeRegistrations($n->getCollectionOfObjectValues([FileStorageContainerTypeRegistration::class, 'createFromDiscriminatorValue'])),
            'containerTypes' => fn(ParseNode $n) => $o->setContainerTypes($n->getCollectionOfObjectValues([FileStorageContainerType::class, 'createFromDiscriminatorValue'])),
            'deletedContainers' => fn(ParseNode $n) => $o->setDeletedContainers($n->getCollectionOfObjectValues([FileStorageContainer::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('containers', $this->getContainers());
        $writer->writeCollectionOfObjectValues('containerTypeRegistrations', $this->getContainerTypeRegistrations());
        $writer->writeCollectionOfObjectValues('containerTypes', $this->getContainerTypes());
        $writer->writeCollectionOfObjectValues('deletedContainers', $this->getDeletedContainers());
    }

    /**
     * Sets the containers property value. The collection of active fileStorageContainer resources.
     * @param array<FileStorageContainer>|null $value Value to set for the containers property.
    */
    public function setContainers(?array $value): void {
        $this->getBackingStore()->set('containers', $value);
    }

    /**
     * Sets the containerTypeRegistrations property value. The collection of fileStorageContainerTypeRegistration resources.
     * @param array<FileStorageContainerTypeRegistration>|null $value Value to set for the containerTypeRegistrations property.
    */
    public function setContainerTypeRegistrations(?array $value): void {
        $this->getBackingStore()->set('containerTypeRegistrations', $value);
    }

    /**
     * Sets the containerTypes property value. The collection of fileStorageContainerType resources.
     * @param array<FileStorageContainerType>|null $value Value to set for the containerTypes property.
    */
    public function setContainerTypes(?array $value): void {
        $this->getBackingStore()->set('containerTypes', $value);
    }

    /**
     * Sets the deletedContainers property value. The collection of deleted fileStorageContainer resources.
     * @param array<FileStorageContainer>|null $value Value to set for the deletedContainers property.
    */
    public function setDeletedContainers(?array $value): void {
        $this->getBackingStore()->set('deletedContainers', $value);
    }

}
