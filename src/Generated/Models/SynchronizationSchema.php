<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SynchronizationSchema extends Entity implements Parsable 
{
    /**
     * Instantiates a new synchronizationSchema and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationSchema
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationSchema {
        return new SynchronizationSchema();
    }

    /**
     * Gets the directories property value. The directories property
     * @return array<DirectoryDefinition>|null
    */
    public function getDirectories(): ?array {
        return $this->getBackingStore()->get('directories');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'directories' => fn(ParseNode $n) => $o->setDirectories($n->getCollectionOfObjectValues([DirectoryDefinition::class, 'createFromDiscriminatorValue'])),
            'synchronizationRules' => fn(ParseNode $n) => $o->setSynchronizationRules($n->getCollectionOfObjectValues([SynchronizationRule::class, 'createFromDiscriminatorValue'])),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the synchronizationRules property value. The synchronizationRules property
     * @return array<SynchronizationRule>|null
    */
    public function getSynchronizationRules(): ?array {
        return $this->getBackingStore()->get('synchronizationRules');
    }

    /**
     * Gets the version property value. The version property
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->getBackingStore()->get('version');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('directories', $this->getDirectories());
        $writer->writeCollectionOfObjectValues('synchronizationRules', $this->getSynchronizationRules());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the directories property value. The directories property
     * @param array<DirectoryDefinition>|null $value Value to set for the directories property.
    */
    public function setDirectories(?array $value): void {
        $this->getBackingStore()->set('directories', $value);
    }

    /**
     * Sets the synchronizationRules property value. The synchronizationRules property
     * @param array<SynchronizationRule>|null $value Value to set for the synchronizationRules property.
    */
    public function setSynchronizationRules(?array $value): void {
        $this->getBackingStore()->set('synchronizationRules', $value);
    }

    /**
     * Sets the version property value. The version property
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
