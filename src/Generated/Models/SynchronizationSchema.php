<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SynchronizationSchema extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
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
     * Gets the directories property value. Contains the collection of directories and all of their objects.
     * @return array<DirectoryDefinition>|null
    */
    public function getDirectories(): ?array {
        $val = $this->getBackingStore()->get('directories');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DirectoryDefinition::class);
            /** @var array<DirectoryDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'directories'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
     * Gets the synchronizationRules property value. A collection of synchronization rules configured for the synchronizationJob or synchronizationTemplate.
     * @return array<SynchronizationRule>|null
    */
    public function getSynchronizationRules(): ?array {
        $val = $this->getBackingStore()->get('synchronizationRules');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SynchronizationRule::class);
            /** @var array<SynchronizationRule>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'synchronizationRules'");
    }

    /**
     * Gets the version property value. The version of the schema, updated automatically with every schema change.
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('directories', $this->getDirectories());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('synchronizationRules', $this->getSynchronizationRules());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the directories property value. Contains the collection of directories and all of their objects.
     * @param array<DirectoryDefinition>|null $value Value to set for the directories property.
    */
    public function setDirectories(?array $value): void {
        $this->getBackingStore()->set('directories', $value);
    }

    /**
     * Sets the synchronizationRules property value. A collection of synchronization rules configured for the synchronizationJob or synchronizationTemplate.
     * @param array<SynchronizationRule>|null $value Value to set for the synchronizationRules property.
    */
    public function setSynchronizationRules(?array $value): void {
        $this->getBackingStore()->set('synchronizationRules', $value);
    }

    /**
     * Sets the version property value. The version of the schema, updated automatically with every schema change.
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
