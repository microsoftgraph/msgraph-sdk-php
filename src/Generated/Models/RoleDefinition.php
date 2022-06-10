<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RoleDefinition extends Entity implements Parsable 
{
    /**
     * @var string|null $description Description of the Role definition.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Display Name of the Role definition.
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $isBuiltIn Type of Role. Set to True if it is built-in, or set to False if it is a custom role definition.
    */
    private ?bool $isBuiltIn = null;
    
    /**
     * @var array<RoleAssignment>|null $roleAssignments List of Role assignments for this role definition.
    */
    private ?array $roleAssignments = null;
    
    /**
     * @var array<RolePermission>|null $rolePermissions List of Role Permissions this role is allowed to perform. These must match the actionName that is defined as part of the rolePermission.
    */
    private ?array $rolePermissions = null;
    
    /**
     * Instantiates a new roleDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RoleDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RoleDefinition {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceAndAppManagementRoleDefinition': return new DeviceAndAppManagementRoleDefinition();
            }
        }
        return new RoleDefinition();
    }

    /**
     * Gets the description property value. Description of the Role definition.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Display Name of the Role definition.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'isBuiltIn' => function (ParseNode $n) use ($o) { $o->setIsBuiltIn($n->getBooleanValue()); },
            'roleAssignments' => function (ParseNode $n) use ($o) { $o->setRoleAssignments($n->getCollectionOfObjectValues(array(RoleAssignment::class, 'createFromDiscriminatorValue'))); },
            'rolePermissions' => function (ParseNode $n) use ($o) { $o->setRolePermissions($n->getCollectionOfObjectValues(array(RolePermission::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the isBuiltIn property value. Type of Role. Set to True if it is built-in, or set to False if it is a custom role definition.
     * @return bool|null
    */
    public function getIsBuiltIn(): ?bool {
        return $this->isBuiltIn;
    }

    /**
     * Gets the roleAssignments property value. List of Role assignments for this role definition.
     * @return array<RoleAssignment>|null
    */
    public function getRoleAssignments(): ?array {
        return $this->roleAssignments;
    }

    /**
     * Gets the rolePermissions property value. List of Role Permissions this role is allowed to perform. These must match the actionName that is defined as part of the rolePermission.
     * @return array<RolePermission>|null
    */
    public function getRolePermissions(): ?array {
        return $this->rolePermissions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isBuiltIn', $this->isBuiltIn);
        $writer->writeCollectionOfObjectValues('roleAssignments', $this->roleAssignments);
        $writer->writeCollectionOfObjectValues('rolePermissions', $this->rolePermissions);
    }

    /**
     * Sets the description property value. Description of the Role definition.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Display Name of the Role definition.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isBuiltIn property value. Type of Role. Set to True if it is built-in, or set to False if it is a custom role definition.
     *  @param bool|null $value Value to set for the isBuiltIn property.
    */
    public function setIsBuiltIn(?bool $value ): void {
        $this->isBuiltIn = $value;
    }

    /**
     * Sets the roleAssignments property value. List of Role assignments for this role definition.
     *  @param array<RoleAssignment>|null $value Value to set for the roleAssignments property.
    */
    public function setRoleAssignments(?array $value ): void {
        $this->roleAssignments = $value;
    }

    /**
     * Sets the rolePermissions property value. List of Role Permissions this role is allowed to perform. These must match the actionName that is defined as part of the rolePermission.
     *  @param array<RolePermission>|null $value Value to set for the rolePermissions property.
    */
    public function setRolePermissions(?array $value ): void {
        $this->rolePermissions = $value;
    }

}
