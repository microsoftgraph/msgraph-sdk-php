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
     * Gets the containers property value. The containers property
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'containers' => fn(ParseNode $n) => $o->setContainers($n->getCollectionOfObjectValues([FileStorageContainer::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('containers', $this->getContainers());
    }

    /**
     * Sets the containers property value. The containers property
     * @param array<FileStorageContainer>|null $value Value to set for the containers property.
    */
    public function setContainers(?array $value): void {
        $this->getBackingStore()->set('containers', $value);
    }

}
