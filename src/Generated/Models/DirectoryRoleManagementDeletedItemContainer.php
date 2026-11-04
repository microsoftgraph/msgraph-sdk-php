<?php

namespace Microsoft\Graph\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DirectoryRoleManagementDeletedItemContainer extends Entity implements Parsable 
{
    /**
     * Instantiates a new DirectoryRoleManagementDeletedItemContainer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DirectoryRoleManagementDeletedItemContainer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DirectoryRoleManagementDeletedItemContainer {
        return new DirectoryRoleManagementDeletedItemContainer();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'roleDefinitions' => fn(ParseNode $n) => $o->setRoleDefinitions($n->getCollectionOfObjectValues([UnifiedRoleDefinition::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the roleDefinitions property value. The soft-deleted custom role definitions in the directory.
     * @return array<UnifiedRoleDefinition>|null
    */
    public function getRoleDefinitions(): ?array {
        $val = $this->getBackingStore()->get('roleDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UnifiedRoleDefinition::class);
            /** @var array<UnifiedRoleDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'roleDefinitions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('roleDefinitions', $this->getRoleDefinitions());
    }

    /**
     * Sets the roleDefinitions property value. The soft-deleted custom role definitions in the directory.
     * @param array<UnifiedRoleDefinition>|null $value Value to set for the roleDefinitions property.
    */
    public function setRoleDefinitions(?array $value): void {
        $this->getBackingStore()->set('roleDefinitions', $value);
    }

}
